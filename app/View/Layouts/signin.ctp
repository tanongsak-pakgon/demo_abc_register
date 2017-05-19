<?php
$cakeDescription = __d('cake_dev', 'ZiCURE-App');
?>
<?php echo $this->Html->docType('html5'); ?>
<html>
<head>
<?php echo $this->Html->charset(); ?>
<title>
<?php echo $cakeDescription; ?>:
<?php echo __($title_for_layout); ?>
</title>
<?php
echo $this->Html->meta('icon');
echo $this->Html->meta(array('name' => 'viewport', 'content' => 'width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no'));
echo $this->Html->css('/library/twbs/dist/css/bootstrap-theme.min.css');
echo $this->Html->css('/library/twbs/dist/css/bootstrap.min');
echo $this->Html->script('/library/jquery/jquery.min.js');
echo $this->Html->script('/library/twbs/dist/js/bootstrap.min.js');
echo $this->fetch('meta');
echo $this->fetch('css');
echo $this->fetch('script');
?>
</head>
<body class="skin-blue fixed">
<div class="wrapper row-offcanvas row-offcanvas-left">
<section class="content">
<?php echo $this->Session->flash(); ?>
<?php echo $this->fetch('content'); ?>
</section>
</div>
</body>
</html>