<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-07-12 04:44:27
         compiled from "C:\wamp\www\WC\Real\admin\views\templates\login\forgot_password.tpl" */ ?>
<?php /*%%SmartyHeaderCode:27099559d46f5bbafd2-89512636%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '36af816f68385a32b3ac71bb3b306ee165ae9818' => 
    array (
      0 => 'C:\\wamp\\www\\WC\\Real\\admin\\views\\templates\\login\\forgot_password.tpl',
      1 => 1436676255,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '27099559d46f5bbafd2-89512636',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_559d46f5cee683_48566416',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_559d46f5cee683_48566416')) {function content_559d46f5cee683_48566416($_smarty_tpl) {?><section class="body-sign">
    <div class="center-sign">
        <?php echo $_smarty_tpl->getSubTemplate ("common/alert_box.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('name'=>''), 0);?>

        <a href="/" class="logo pull-left">
            <img src="assets/images/logo.png" height="54" alt="Logo" />
        </a>

        <div class="panel panel-sign">
            <div class="panel-title-sign mt-xl text-right">
                <h2 class="title text-uppercase text-bold m-none"><i class="fa fa-user mr-xs"></i> Forgot Password</h2>
            </div>
            <div class="panel-body">
                <form name="login_form" id="login_form" action="" method="post">
                    <div class="form-group mb-lg">
                        <label>E-Mail</label>
                        <div class="input-group input-group-icon">
                            <input name="email" type="text" class="form-control input-lg" value="<?php echo set_value('email');?>
"/>
                            <span class="input-group-addon">
                                <span class="icon icon-lg">
                                    <i class="fa fa-user"></i>
                                </span>
                            </span>                           
                        </div>
                            <span><?php echo form_error('email');?>
</span>
                    </div>
                    <div class="row">
                        <div class="col-sm-6 col-sm-offset-6 text-right">
                            <button name="send_password" type="submit" class="btn btn-primary hidden-xs" value="send_password">Send Password</button>
                            <button name="send_password" type="submit" class="btn btn-primary btn-block btn-lg visible-xs mt-lg" value="send_password">Send Password</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <p class="text-center text-muted mt-md mb-md">&copy; Copyright 2014. All Rights Reserved.</p>
    </div>
</section><?php }} ?>
