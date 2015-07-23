<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-07-22 17:47:54
         compiled from "C:\wamp\www\WC\ourbase\admin\views\templates\common\header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1098755ae65bfbbf5c0-42175335%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2606d0f617b000ab0c78c88a7c55b1e3fa428f17' => 
    array (
      0 => 'C:\\wamp\\www\\WC\\ourbase\\admin\\views\\templates\\common\\header.tpl',
      1 => 1437587263,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1098755ae65bfbbf5c0-42175335',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_55ae65bfc38593_59055629',
  'variables' => 
  array (
    'title' => 0,
    'styles' => 0,
    'style' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55ae65bfc38593_59055629')) {function content_55ae65bfc38593_59055629($_smarty_tpl) {?><!doctype html>
<html class="fixed">
    <head>
        <!-- Basic -->
        <meta charset="UTF-8">
        <title>Ourbase | <?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
        <meta name="keywords" content="Ourbase Admin Template" />
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
        <link href="http://code.ionicframework.com/ionicons/2.0.0/css/ionicons.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url();?>
../assets/admin/css/skins/_all-skins.min.css" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" href="<?php echo base_url();?>
../assets/admin/css/style.css" />
        <!-- iCheck -->
        <link href="<?php echo base_url();?>
../assets/admin/lib/iCheck/flat/blue.css" rel="stylesheet" type="text/css" />
        <!-- Morris chart -->
        <link href="<?php echo base_url();?>
../assets/admin/lib/morris/morris.css" rel="stylesheet" type="text/css" />
        <!-- bootstrap wysihtml5 - text editor -->
        <link href="<?php echo base_url();?>
../assets/admin/lib/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css" rel="stylesheet" type="text/css" />
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <?php echo '<script'; ?>
 src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"><?php echo '</script'; ?>
>
            <?php echo '<script'; ?>
 src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"><?php echo '</script'; ?>
>
        <![endif]-->

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
    <body class="skin-blue">
        <div class="wrapper"><?php }} ?>
