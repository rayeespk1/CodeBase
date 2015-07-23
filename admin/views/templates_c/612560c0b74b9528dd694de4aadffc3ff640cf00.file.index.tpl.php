<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-07-21 18:37:20
         compiled from "C:\wamp\www\WC\ourbase\admin\views\templates\login\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:416855ae65bfc449e4-07677188%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '612560c0b74b9528dd694de4aadffc3ff640cf00' => 
    array (
      0 => 'C:\\wamp\\www\\WC\\ourbase\\admin\\views\\templates\\login\\index.tpl',
      1 => 1437503836,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '416855ae65bfc449e4-07677188',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_55ae65bfc72721_37027311',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55ae65bfc72721_37027311')) {function content_55ae65bfc72721_37027311($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("login/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('name'=>''), 0);?>

<div class="login-box">
    <div class="login-logo">
        <a href="../../index2.html"><b>Admin</b>LTE</a>
    </div><!-- /.login-logo -->
    <div class="login-box-body">
        <p class="login-box-msg">Sign in to start your session</p>
        <?php echo $_smarty_tpl->getSubTemplate ("common/alert_box.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('name'=>''), 0);?>

        <form name="login_form" id="login_form" action="" method="post">
            <div class="form-group has-feedback">
                <input type="text" name="username" class="form-control" placeholder="Username" value="<?php echo set_value('username');?>
"/>
                <span class="glyphicon glyphicon-envelope form-control-feedback"></span><span class='error-msg'><?php echo form_error('username');?>
</span>
            </div>
            <div class="form-group has-feedback">
                <input name="password" type="password" class="form-control" placeholder="Password"/>
                <span class="glyphicon glyphicon-lock form-control-feedback"></span><span class="error-msg"><?php echo form_error('password');?>
</span>
            </div>
            <div class="row">
                <div class="col-xs-8">    
                    <div class="checkbox icheck">
                        <label>
                            <input type="checkbox"> Remember Me
                        </label>
                    </div>                        
                </div><!-- /.col -->
                <div class="col-xs-4">
                    <button name="sign_in" value="sign_in" type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
                </div><!-- /.col -->
            </div>
        </form>

        <div class="social-auth-links text-center">
            <p>- OR -</p>
            <a href="#" class="btn btn-block btn-social btn-facebook btn-flat"><i class="fa fa-facebook"></i> Sign in using Facebook</a>
            <a href="#" class="btn btn-block btn-social btn-google-plus btn-flat"><i class="fa fa-google-plus"></i> Sign in using Google+</a>
        </div><!-- /.social-auth-links -->

        <a href="<?php echo base_url();?>
index.php/login/forgot_password">I forgot my password</a><br>
    </div><!-- /.login-box-body -->
</div><!-- /.login-box -->

<?php echo '<script'; ?>
>
    $(function () {
        $('input').iCheck({
            checkboxClass: 'icheckbox_square-blue',
            radioClass: 'iradio_square-blue',
            increaseArea: '20%' // optional
        });
    });
<?php echo '</script'; ?>
>
<?php echo $_smarty_tpl->getSubTemplate ("login/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('name'=>''), 0);?>
<?php }} ?>
