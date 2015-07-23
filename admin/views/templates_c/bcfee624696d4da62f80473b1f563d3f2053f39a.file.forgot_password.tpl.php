<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-07-21 18:40:37
         compiled from "C:\wamp\www\WC\ourbase\admin\views\templates\login\forgot_password.tpl" */ ?>
<?php /*%%SmartyHeaderCode:769955ae8a46255995-02270432%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bcfee624696d4da62f80473b1f563d3f2053f39a' => 
    array (
      0 => 'C:\\wamp\\www\\WC\\ourbase\\admin\\views\\templates\\login\\forgot_password.tpl',
      1 => 1437504032,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '769955ae8a46255995-02270432',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_55ae8a462a4776_21690246',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55ae8a462a4776_21690246')) {function content_55ae8a462a4776_21690246($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("login/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('name'=>''), 0);?>

<div class="login-box">
    <div class="login-logo">
        <a href="../../index2.html"><b>Admin</b>LTE</a>
    </div><!-- /.login-logo -->
    <div class="login-box-body">
        <p class="login-box-msg">Forgot Password</p>
        <?php echo $_smarty_tpl->getSubTemplate ("common/alert_box.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('name'=>''), 0);?>

        <form name="login_form" id="login_form" action="" method="post">
            <div class="form-group has-feedback">
                <input type="text" name="email" class="form-control" placeholder="E-Mail" value="<?php echo set_value('email');?>
"/>
                <span class="glyphicon glyphicon-envelope form-control-feedback"></span><span class='error-msg'><?php echo form_error('email');?>
</span>
            </div>
            <div class="row">
                <div class="col-xs-6 col-xs-offset-6">
                    <button name="send_password" value="send_password" type="submit" class="btn btn-primary btn-block btn-flat">Send Password</button>
                </div><!-- /.col -->
            </div>
        </form>
    </div><!-- /.login-box-body -->
</div><!-- /.login-box -->
<?php echo $_smarty_tpl->getSubTemplate ("login/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('name'=>''), 0);?>


<?php }} ?>
