<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-07-21 18:36:59
         compiled from "C:\wamp\www\WC\ourbase\admin\views\templates\login\header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:300755ae914b4041d1-29586304%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f1371fc2bc964e8f3ecde5c8499439b9bb4ac978' => 
    array (
      0 => 'C:\\wamp\\www\\WC\\ourbase\\admin\\views\\templates\\login\\header.tpl',
      1 => 1437503538,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '300755ae914b4041d1-29586304',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'title' => 0,
    'styles' => 0,
    'style' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_55ae914b4680e3_92267893',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55ae914b4680e3_92267893')) {function content_55ae914b4680e3_92267893($_smarty_tpl) {?><!doctype html>
<html class="fixed">
    <head>
        <!-- Basic -->
        <meta charset="UTF-8">
        <title>Ourbase | <?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
        <meta name="keywords" content="HTML5 Admin Template" />
        <meta name="description" content="Responsive HTML5 Template">
        <meta name="rayees" content="core admin base">
        <!-- Mobile Metas -->
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <!-- Vendor CSS -->
        <link rel="stylesheet" href="<?php echo base_url();?>
../assets/admin/lib/bootstrap-3.3.5-dist/css/bootstrap.min.css" />
        <link rel="stylesheet" href="<?php echo base_url();?>
../assets/admin/lib/font-awesome-4.3.0/css/font-awesome.min.css" />
        <!-- Theme CSS -->
        <link rel="stylesheet" href="<?php echo base_url();?>
../assets/admin/css/AdminLTE.min.css" />
        <link rel="stylesheet" href="<?php echo base_url();?>
../assets/admin/css/style.css" />
        
        <!-- Skin CSS -->
        <?php if (isset($_smarty_tpl->tpl_vars['styles']->value)) {?>
            <?php  $_smarty_tpl->tpl_vars['style'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['style']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['styles']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['style']->key => $_smarty_tpl->tpl_vars['style']->value) {
$_smarty_tpl->tpl_vars['style']->_loop = true;
?>
                <link rel="stylesheet" media="screen" href="<?php echo base_url();?>
../assets/admin/<?php echo $_smarty_tpl->tpl_vars['style']->value['href'];?>
" />
            <?php } ?>
        <?php }?>
        
        <?php echo '<script'; ?>
 src="<?php echo base_url();?>
../assets/admin/lib/jQuery/jQuery-2.1.3.min.js"><?php echo '</script'; ?>
>                
    </head>
    <body class="login-page"><?php }} ?>
