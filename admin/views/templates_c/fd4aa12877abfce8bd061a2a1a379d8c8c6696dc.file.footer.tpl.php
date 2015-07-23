<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-07-22 18:07:37
         compiled from "C:\wamp\www\WC\ourbase\admin\views\templates\common\footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:512655ae65bfcb9498-81477486%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fd4aa12877abfce8bd061a2a1a379d8c8c6696dc' => 
    array (
      0 => 'C:\\wamp\\www\\WC\\ourbase\\admin\\views\\templates\\common\\footer.tpl',
      1 => 1437588455,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '512655ae65bfcb9498-81477486',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_55ae65bfccf367_27407029',
  'variables' => 
  array (
    'scripts' => 0,
    'script' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55ae65bfccf367_27407029')) {function content_55ae65bfccf367_27407029($_smarty_tpl) {?>    <!-- jQuery UI 1.11.2 -->
    <?php echo '<script'; ?>
 src="http://code.jquery.com/ui/1.11.2/jquery-ui.min.js" type="text/javascript"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo base_url();?>
../assets/admin/lib/bootstrap-3.3.5-dist/js/bootstrap.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
>
      $.widget.bridge('uibutton', $.ui.button);
    <?php echo '</script'; ?>
> 
    <!-- Morris.js charts -->
    <?php echo '<script'; ?>
 src="http://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo base_url();?>
../assets/admin/lib/morris/morris.min.js" type="text/javascript"><?php echo '</script'; ?>
>

    <!-- jQuery Knob Chart -->
    <?php echo '<script'; ?>
 src="<?php echo base_url();?>
../assets/admin/lib/knob/jquery.knob.js" type="text/javascript"><?php echo '</script'; ?>
>
    
    <!-- Bootstrap WYSIHTML5 -->
    <?php echo '<script'; ?>
 src="<?php echo base_url();?>
../assets/admin/lib/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js" type="text/javascript"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo base_url();?>
../assets/admin/lib/iCheck/icheck.min.js"><?php echo '</script'; ?>
>
    <!-- AdminLTE App -->
    <?php echo '<script'; ?>
 src="<?php echo base_url();?>
../assets/admin/js/app.min.js" type="text/javascript"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src='<?php echo base_url();?>
../assets/admin/lib/fastclick/fastclick.min.js'><?php echo '</script'; ?>
>
    <!-- AdminLTE dashboard  -->
    <?php echo '<script'; ?>
 src="<?php echo base_url();?>
../assets/admin/js/pages/dashboard.js" type="text/javascript"><?php echo '</script'; ?>
>
    <!-- AdminLTE for demo purposes -->
    <?php echo '<script'; ?>
 src="<?php echo base_url();?>
../assets/admin/js/demo.js" type="text/javascript"><?php echo '</script'; ?>
>
  </body>
</html>
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
