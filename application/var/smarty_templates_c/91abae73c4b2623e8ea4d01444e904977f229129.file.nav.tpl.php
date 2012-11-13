<?php /* Smarty version Smarty-3.1.6, created on 2012-07-10 10:52:22
         compiled from "application/views/magazine/lib/nav.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4062993154ffb98e66c4395-57450241%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '91abae73c4b2623e8ea4d01444e904977f229129' => 
    array (
      0 => 'application/views/magazine/lib/nav.tpl',
      1 => 1341888108,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4062993154ffb98e66c4395-57450241',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'navs' => 0,
    'nav' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_4ffb98e66f98a',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4ffb98e66f98a')) {function content_4ffb98e66f98a($_smarty_tpl) {?><div class="nav">
<?php  $_smarty_tpl->tpl_vars['nav'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['nav']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['navs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['nav']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['nav']->key => $_smarty_tpl->tpl_vars['nav']->value){
$_smarty_tpl->tpl_vars['nav']->_loop = true;
 $_smarty_tpl->tpl_vars['nav']->index++;
?>
	<?php if ($_smarty_tpl->tpl_vars['nav']->index>0){?>&gt;<?php }?>
	<?php if ($_smarty_tpl->tpl_vars['nav']->value['current']){?><span class="cur"><?php echo $_smarty_tpl->tpl_vars['nav']->value['name'];?>
</span>
	<?php }else{ ?><a href="<?php echo $_smarty_tpl->tpl_vars['nav']->value['url'];?>
"><?php echo $_smarty_tpl->tpl_vars['nav']->value['name'];?>
</a><?php }?>
<?php } ?>
</div>

<?php }} ?>