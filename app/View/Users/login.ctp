<div class="container">
<div id="loginbox" style="margin-top:50px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
<div class="panel panel-info" >
<div class="panel-heading">
<div class="panel-title"><?php echo __('Sign In'); ?></div>
<div style="float:right; font-size: 80%; position: relative; top:-10px"><a href="#"><?php echo __('Forgot password?');?></a></div>
</div>
<div style="padding-top:30px" class="panel-body" >
<div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>
<?php echo $this->Form->create('User', array('class' => 'form-horizontal', 'id' => 'loginform', 'role' => 'form')); ?>
<div style="margin-bottom: 25px" class="input-group">
<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
<input id="login-username" type="text" class="form-control" name="data[User][username]" value="" placeholder="username or email">
</div>
<div style="margin-bottom: 25px" class="input-group">
<span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
<input id="login-password" type="password" class="form-control" name="data[User][password]" placeholder="password">
</div>
<div class="input-group">
<div class="checkbox">
<label>
<input id="login-remember" type="checkbox" name="data[User][remember]" value="1"> <?php echo __('Remember me'); ?>
</label>
</div>
</div>
<div style="margin-top:10px" class="form-group">
<!-- Button -->
<div class="col-sm-12 controls">
<button id="btn-login" href="#" class="btn btn-success" type="submit"><?php echo __('Login'); ?> </button>
<button id="btn-fblogin" href="#" class="btn btn-primary" type="button"><?php echo __('Login with Facebook'); ?></button>
</div>
</div>
<div class="form-group">
<div class="col-md-12 control">
<div style="border-top: 1px solid#888; padding-top:15px; font-size:85%" >
<!-- Input more code here -->
</div>
</div>
</div>
</form>
</div>
</div>
</div>
</div>