<?php /* Smarty version Smarty-3.1.6, created on 2012-07-16 14:04:44
         compiled from "application/views/user/magazine.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11204365094ff24fb0328d54-33740925%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '600ffc693d0a3c2b93a8ba6ec6b675f409be61b7' => 
    array (
      0 => 'application/views/user/magazine.tpl',
      1 => 1342236094,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11204365094ff24fb0328d54-33740925',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_4ff24fb03b1f4',
  'variables' => 
  array (
    'magazine' => 0,
    'is_me' => 0,
    'page_list' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4ff24fb03b1f4')) {function content_4ff24fb03b1f4($_smarty_tpl) {?><div class="right_main">
	<dl class="mag_list clearfix">
		<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['magazine']->value['items']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
		<?php echo $_smarty_tpl->getSubTemplate ("magazine/lib/magcover.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('cover_show_del'=>$_smarty_tpl->tpl_vars['is_me']->value,'dd_class'=>"favorited"), 0);?>

		<?php } ?>
	</dl>
	<?php echo $_smarty_tpl->tpl_vars['page_list']->value;?>

</div>
<?php echo $_smarty_tpl->getSubTemplate ('share.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>