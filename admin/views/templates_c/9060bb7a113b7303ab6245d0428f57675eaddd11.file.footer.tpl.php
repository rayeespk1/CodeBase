<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-07-21 18:37:20
         compiled from "C:\wamp\www\WC\ourbase\admin\views\templates\login\footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2015155ae91603dcea2-73727601%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9060bb7a113b7303ab6245d0428f57675eaddd11' => 
    array (
      0 => 'C:\\wamp\\www\\WC\\ourbase\\admin\\views\\templates\\login\\footer.tpl',
      1 => 1437503568,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2015155ae91603dcea2-73727601',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'scripts' => 0,
    'script' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_55ae9160417383_22876544',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55ae9160417383_22876544')) {function content_55ae9160417383_22876544($_smarty_tpl) {?><?php echo '<script'; ?>
 src="<?php echo base_url();?>
../assets/admin/lib/bootstrap-3.3.5-dist/js/bootstrap.min.js"><?php echo '</script'; ?>
>
<?php if (isset($_smarty_tpl->tpl_vars['scripts']->value)) {?>
    <?php  $_smarty_tpl->tpl_vars['script'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['script']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['scripts']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['script']->key => $_smarty_tpl->tpl_vars['script']->value) {
$_smarty_tpl->tpl_vars['script']->_loop = true;
?>
        <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo base_url();?>
../assets/admin/<?php echo $_smarty_tpl->tpl_vars['script']->value['src'];?>
" /><?php echo '</script'; ?>
>
    <?php } ?>
<?php }?>
</body>
</html><?php }} ?>
