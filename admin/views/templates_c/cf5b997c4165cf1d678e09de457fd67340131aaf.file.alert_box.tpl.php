<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-07-21 18:06:15
         compiled from "C:\wamp\www\WC\ourbase\admin\views\templates\common\alert_box.tpl" */ ?>
<?php /*%%SmartyHeaderCode:380955ae65bfc7c395-72956248%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cf5b997c4165cf1d678e09de457fd67340131aaf' => 
    array (
      0 => 'C:\\wamp\\www\\WC\\ourbase\\admin\\views\\templates\\common\\alert_box.tpl',
      1 => 1437501970,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '380955ae65bfc7c395-72956248',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_55ae65bfcaf494_67835611',
  'variables' => 
  array (
    'alert_status' => 0,
    'alert_msg' => 0,
    'alert_type' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55ae65bfcaf494_67835611')) {function content_55ae65bfcaf494_67835611($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['alert_status']->value) {?>
    <?php if ($_smarty_tpl->tpl_vars['alert_msg']->value) {?>
        <div class="alert <?php if ($_smarty_tpl->tpl_vars['alert_type']->value==true) {?>alert-success<?php } else { ?>alert-danger<?php }?> alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <strong><span class="glyphicon glyphicon <?php if ($_smarty_tpl->tpl_vars['alert_type']->value==true) {?>glyphicon-ok-circle <?php } else { ?> glyphicon-remove-circle<?php }?>" aria-hidden="true"></span></strong> <?php echo $_smarty_tpl->tpl_vars['alert_msg']->value;?>

        </div>
    <?php }?>
<?php }?>
<?php }} ?>
