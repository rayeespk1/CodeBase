<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-07-12 04:57:13
         compiled from "C:\wamp\www\WC\Real\admin\views\templates\login\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:122065599c2a41427e3-63037287%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '63e1e34d93ebb2f285a40acb860ee403bf09af4f' => 
    array (
      0 => 'C:\\wamp\\www\\WC\\Real\\admin\\views\\templates\\login\\index.tpl',
      1 => 1436677028,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '122065599c2a41427e3-63037287',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5599c2a4176a25_22404988',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5599c2a4176a25_22404988')) {function content_5599c2a4176a25_22404988($_smarty_tpl) {?><section class="body-sign">
    <div class="center-sign">
        <?php echo $_smarty_tpl->getSubTemplate ("common/alert_box.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('name'=>''), 0);?>

        <a href="/" class="logo pull-left">
            <img src="assets/images/logo.png" height="54" alt="Porto Admin" />
        </a>

        <div class="panel panel-sign">
            <div class="panel-title-sign mt-xl text-right">
                <h2 class="title text-uppercase text-bold m-none"><i class="fa fa-user mr-xs"></i> Sign In</h2>
            </div>
            <div class="panel-body">
                <form name="login_form" id="login_form" action="" method="post">
                    <div class="form-group mb-lg">
                        <label>Username</label>
                        <div class="input-group input-group-icon">
                            <input name="username" type="text" class="form-control input-lg" value="<?php echo set_value('username');?>
"/>
                            <span class="input-group-addon">
                                <span class="icon icon-lg">
                                    <i class="fa fa-user"></i>
                                </span>
                            </span>                           
                        </div>
                            <span><?php echo form_error('username');?>
</span>
                    </div>

                    <div class="form-group mb-lg">
                        <div class="clearfix">
                            <label class="pull-left">Password</label>
                            <a href="<?php echo base_url();?>
index.php/login/forgot_password" class="pull-right">Lost Password?</a>
                        </div>
                        <div class="input-group input-group-icon">
                            <input name="password" type="password" class="form-control input-lg" value=""/>
                            <span class="input-group-addon">
                                <span class="icon icon-lg">
                                    <i class="fa fa-lock"></i>
                                </span>
                            </span>                            
                        </div>
                        <span><?php echo form_error('password');?>
</span>
                    </div>

                    <div class="row">
                        <div class="col-sm-8">
                            <div class="checkbox-custom checkbox-default">
                                <input id="RememberMe" name="rememberme" type="checkbox"/>
                                <label for="RememberMe">Remember Me</label>
                            </div>
                        </div>
                        <div class="col-sm-4 text-right">
                            <button name="sign_in" type="submit" class="btn btn-primary hidden-xs" value="sign_in">Sign In</button>
                            <button name="sign_in" type="submit" class="btn btn-primary btn-block btn-lg visible-xs mt-lg" value="sign_in">Sign In</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <p class="text-center text-muted mt-md mb-md">&copy; Copyright 2014. All Rights Reserved.</p>
    </div>
</section><?php }} ?>
