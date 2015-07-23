<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-07-04 18:12:31
         compiled from "C:\wamp\www\WC\Real\admin\views\templates\common\menu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:346155957963bb6694-52899383%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fdfe5af89183b06b5bec810e31f6b6fb7601bca7' => 
    array (
      0 => 'C:\\wamp\\www\\WC\\Real\\admin\\views\\templates\\common\\menu.tpl',
      1 => 1436033546,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '346155957963bb6694-52899383',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_55957963bcce52_09381509',
  'variables' => 
  array (
    'menu' => 0,
    'v' => 0,
    'submenu_cnt' => 0,
    'q' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55957963bcce52_09381509')) {function content_55957963bcce52_09381509($_smarty_tpl) {?><div class="inner-wrapper">
    <!-- start: sidebar -->
    <aside id="sidebar-left" class="sidebar-left">

        <div class="sidebar-header">
            <div class="sidebar-title">
                Navigation
            </div>
            <div class="sidebar-toggle hidden-xs" data-toggle-class="sidebar-left-collapsed" data-target="html" data-fire-event="sidebar-left-toggle">
                <i class="fa fa-bars" aria-label="Toggle sidebar"></i>
            </div>
        </div>

        <div class="nano">
            <div class="nano-content">
                <nav id="menu" class="nav-main" role="navigation">
                    <ul class="nav nav-main">
                        <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['menu']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
                            <?php $_smarty_tpl->tpl_vars['submenu_cnt'] = new Smarty_variable(count($_smarty_tpl->tpl_vars['v']->value['sub_menu']), null, 0);?>
                            <li class="<?php if ($_smarty_tpl->tpl_vars['submenu_cnt']->value>0) {?>nav-parent<?php } else { ?>nav-active<?php }?>">
                                <a href="<?php echo $_smarty_tpl->tpl_vars['v']->value['link'];?>
">
                                    <i class="<?php echo $_smarty_tpl->tpl_vars['v']->value['icon'];?>
" aria-hidden="true"></i>
                                    <span><?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
</span>
                                </a>
                                <?php if ($_smarty_tpl->tpl_vars['submenu_cnt']->value>0) {?>                                                   
                                    <ul class="nav nav-children">
                                        <?php  $_smarty_tpl->tpl_vars['q'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['q']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['v']->value['sub_menu']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['q']->key => $_smarty_tpl->tpl_vars['q']->value) {
$_smarty_tpl->tpl_vars['q']->_loop = true;
?>
                                            <li>
                                                <a href="<?php echo $_smarty_tpl->tpl_vars['q']->value['link'];?>
">
                                                  <?php echo $_smarty_tpl->tpl_vars['q']->value['name'];?>

                                                </a>
                                            </li>
                                        <?php } ?>
                                    </ul>
                                <?php }?>
                            </li>
                        <?php } ?>
                    </ul>
                </nav>

                <hr class="separator" />
            </div>

        </div>

    </aside>
    <!-- end: sidebar --><?php }} ?>
