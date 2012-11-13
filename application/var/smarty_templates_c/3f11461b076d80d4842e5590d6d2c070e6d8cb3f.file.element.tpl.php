<?php /* Smarty version Smarty-3.1.6, created on 2012-07-18 14:33:03
         compiled from "application/views/magazine/element.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16425971994ff10a19d314d2-92057424%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3f11461b076d80d4842e5590d6d2c070e6d8cb3f' => 
    array (
      0 => 'application/views/magazine/element.tpl',
      1 => 1342593170,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16425971994ff10a19d314d2-92057424',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_4ff10a19ec1c2',
  'variables' => 
  array (
    'element_ad' => 0,
    'element_list' => 0,
    'nextpage' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4ff10a19ec1c2')) {function content_4ff10a19ec1c2($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div class="main">
	<dl class="element_list e_index clearfix">
		<dt>
			<strong>爱发现</strong>
		</dt>
		<div id="container">
			<?php if (isset($_smarty_tpl->tpl_vars['element_ad']->value)){?>
			<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['element_ad']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
			<?php echo $_smarty_tpl->getSubTemplate ("magazine/lib/elemcover.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

			<?php } ?>
			<?php }?>
			<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['element_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
			<?php echo $_smarty_tpl->getSubTemplate ("magazine/lib/elemcover.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

			<?php } ?>
		</div>
	</dl>
	<?php if (isset($_smarty_tpl->tpl_vars['nextpage']->value)){?>
	<div id="pagenav" style="display:none">
		<a href="<?php echo $_smarty_tpl->tpl_vars['nextpage']->value;?>
"></a>
	</div>
	<?php }?>
</div>
<script type="text/javascript" src="http://sta.in1001.com/lib/jquery/jquery.masonry.js"></script>
<script type="text/javascript" src="http://sta.in1001.com/lib/jquery/jquery.infinitescroll.js"></script>
<script type="text/javascript" src="/sta/js/element.js"></script>
<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ('share.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>