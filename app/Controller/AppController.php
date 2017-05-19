<?php

/**
 * Application level Controller
 *
 * This file is application-wide controller file. You can put all
 * application-wide controller-related methods here.
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Controller
 * @since         CakePHP(tm) v 0.2.9
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */
App::uses('Controller', 'Controller');

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @package app.Controller
 * @link http://book.cakephp.org/2.0/en/controllers.html#the-app-controller
 */
class AppController extends Controller {

    public $helpers = array(
        'Form' => array(
            'className' => 'Bs3Helpers.Bs3Form'
        ),
        'Html' => array(
            'className' => 'Bs3Helpers.Bs3Html'
        )
    );

    // public $components = array(
    // 'Session',
    // 'Auth' => array(
    // 'loginRedirect' => '/',
    // 'logoutRedirect' => '/',
    // 'authenticate' => array(
    // 'Form' => array('passwordHasher' => 'Blowfish')
    // ),
    // 'authorize' => array('Controller')
    // )
    // );
    public function uploadFiles($folder, $file, $itemId = null) {
        $folder_url = WWW_ROOT . $folder;
        $rel_url = $folder;
        if (!is_dir($folder_url)) {
            mkdir($folder_url);
        }
        // if itemId is set create an item folder
        if ($itemId) {
            $folder_url = WWW_ROOT . $folder . '/' . $itemId;
            $rel_url = $folder . '/' . $itemId;
            if (!is_dir($folder_url)) {
                mkdir($folder_url);
            }
        }

        $map = array(
            'image/gif' => '.gif',
            'image/jpeg' => '.jpg',
            'image/png' => '.png',
            'application/pdf' => '.pdf',
            'application/msword' => '.doc',
            'application/vnd.openxmlformats-officedocument.wordprocessingml.document' => '.docx',
            'application/excel' => '.xls',
            'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet' => '.xlsx'
        );
        if (array_key_exists($file ['type'], $map)) {
            $typeOK = true;
        }
        $filename = date('ymdHis') . '_' . $file ['name'];
        if ($typeOK) {
            switch ($file ['error']) {
                case 0 :
                    @unlink($folder_url . '/' . $filename);
                    $full_url = $folder_url . '/' . $filename;
                    $url = $rel_url . '/' . $filename;
                    $success = move_uploaded_file($file ['tmp_name'], $url);
                    if ($success) {
                        $result ['urls'] [] = $url;
                        $result ['upfilename'] [] = $filename;
                        $result ['ext'] [] = $userfile_extn;
                    } else {
                        $result ['errors'] [] = "Error uploaded {$filename}. Please try again.";
                    }
                    break;
                case 3 :
                    $result ['errors'] [] = "Error uploading {$filename}. Please try again.";
                    break;
                default :
                    $result ['errors'] [] = "System error uploading {$filename}. Contact webmaster.";
                    break;
            }
        } elseif ($file ['error'] == 4) {
            $result ['nofiles'] [] = "No file Selected";
        } else {
            $permiss = '';
            foreach ($map as $k => $v) {
                $permiss .= "{$v}, ";
            }
            $result ['errors'] [] = "{$filename} cannot be uploaded. Acceptable file types in : " . trim($permiss, ',');
        }
        return $result;
    }

}
