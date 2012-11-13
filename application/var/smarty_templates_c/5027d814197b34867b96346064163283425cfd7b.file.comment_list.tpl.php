<?php /* Smarty version Smarty-3.1.6, created on 2012-07-23 15:18:34
         compiled from "application/views/magazine/comment_list.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1208074778500cfaca58b1c2-10320193%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5027d814197b34867b96346064163283425cfd7b' => 
    array (
      0 => 'application/views/magazine/comment_list.tpl',
      1 => 1342165319,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1208074778500cfaca58b1c2-10320193',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'navs' => 0,
    'magazine' => 0,
    'page_list' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_500cfaca6d524',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_500cfaca6d524')) {function content_500cfaca6d524($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div class="current">
<?php echo $_smarty_tpl->getSubTemplate ("magazine/lib/nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('navs'=>$_smarty_tpl->tpl_vars['navs']->value), 0);?>

</div>
<div class="main comment clearfix">
	<div class="sidebar_left">
		<a href="<?php echo $_smarty_tpl->tpl_vars['magazine']->value['url'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['magazine']->value['cover'];?>
" width="180px" height="276px" alt="<?php echo $_smarty_tpl->tpl_vars['magazine']->value['name'];?>
" /></a>
		<h2><a href="<?php echo $_smarty_tpl->tpl_vars['magazine']->value['url'];?>
"><?php echo $_smarty_tpl->tpl_vars['magazine']->value['name'];?>
</a></h2>
		<p>作者:&nbsp;<a href="<?php echo $_smarty_tpl->tpl_vars['magazine']->value['author']['url'];?>
"><?php echo $_smarty_tpl->tpl_vars['magazine']->value['author']['nickname'];?>
</a></p>
	</div>

	<div class="right_main">
		<?php echo $_smarty_tpl->getSubTemplate ("magazine/lib/main-comments.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('limit'=>10), 0);?>

		<?php echo $_smarty_tpl->tpl_vars['page_list']->value;?>

	</div>
</div>

<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>