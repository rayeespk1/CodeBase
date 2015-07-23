<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-07-12 05:08:56
         compiled from "C:\wamp\www\WC\Real\admin\views\templates\common\alert_box.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2441955a1f0abda7ef5-75311274%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f8db9fe6ba65a6bb3546687101c9517f35ff846d' => 
    array (
      0 => 'C:\\wamp\\www\\WC\\Real\\admin\\views\\templates\\common\\alert_box.tpl',
      1 => 1436677686,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2441955a1f0abda7ef5-75311274',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_55a1f0abed0055_45977646',
  'variables' => 
  array (
    'alert_status' => 0,
    'alert_msg' => 0,
    'alert_type' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55a1f0abed0055_45977646')) {function content_55a1f0abed0055_45977646($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['alert_status']->value) {?>
    <?php if ($_smarty_tpl->tpl_vars['alert_msg']->value) {?>
        <div class="alert <?php if ($_smarty_tpl->tpl_vars['alert_type']->value==true) {?>alert-success<?php } else { ?>alert-danger<?php }?> alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <strong><span class="glyphicon glyphicon glyphicon-ok" aria-hidden="true"></span></strong> <?php echo $_smarty_tpl->tpl_vars['alert_msg']->value;?>

        </div>
    <?php }?>
<?php }?>
<?php }} ?>
