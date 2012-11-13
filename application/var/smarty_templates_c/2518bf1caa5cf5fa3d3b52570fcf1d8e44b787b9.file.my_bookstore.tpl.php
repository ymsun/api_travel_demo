<?php /* Smarty version Smarty-3.1.6, created on 2012-07-12 09:37:21
         compiled from "application/views/user/my_bookstore.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6604260974ff272231143d9-68906710%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2518bf1caa5cf5fa3d3b52570fcf1d8e44b787b9' => 
    array (
      0 => 'application/views/user/my_bookstore.tpl',
      1 => 1342001117,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6604260974ff272231143d9-68906710',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_4ff2722328cd3',
  'variables' => 
  array (
    'is_me' => 0,
    'type' => 0,
    'bookstore' => 0,
    'page_list' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4ff2722328cd3')) {function content_4ff2722328cd3($_smarty_tpl) {?><div class="right_main">
	<dl class="mag_list clearfix">
		<?php if ($_smarty_tpl->tpl_vars['is_me']->value){?>
		<dt><a href="/user/me/published" <?php if ($_smarty_tpl->tpl_vars['type']->value=='published'){?>class="sel"<?php }?>>已发布的杂志<span>(<?php echo $_smarty_tpl->tpl_vars['bookstore']->value[0]['pub_total'];?>
)</span></a>　|　<a href="/user/me/unpublished" <?php if ($_smarty_tpl->tpl_vars['type']->value=='unpublished'){?>class="sel"<?php }?>>未发布的杂志<span>(<?php echo $_smarty_tpl->tpl_vars['bookstore']->value[0]['unpub_total'];?>
)</span></a></dt>
		<?php }?>
		<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['bookstore']->value['items']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
		<?php echo $_smarty_tpl->getSubTemplate ("magazine/lib/magcover.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('cover_show_status'=>$_smarty_tpl->tpl_vars['is_me']->value), 0);?>

		<?php } ?>
	</dl>
	<?php echo $_smarty_tpl->tpl_vars['page_list']->value;?>

</div>
<?php }} ?>