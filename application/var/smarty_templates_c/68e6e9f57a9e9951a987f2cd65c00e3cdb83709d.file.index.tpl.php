<?php /* Smarty version Smarty-3.1.6, created on 2012-07-20 10:19:19
         compiled from "application/views/magazine/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19280539554fea7d280c8164-51377403%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '68e6e9f57a9e9951a987f2cd65c00e3cdb83709d' => 
    array (
      0 => 'application/views/magazine/index.tpl',
      1 => 1342610963,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19280539554fea7d280c8164-51377403',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_4fea7d2835c58',
  'variables' => 
  array (
    'ad_slot_indextop' => 0,
    'mag_list' => 0,
    'ad_slot_indexbottom' => 0,
    'elm_4' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4fea7d2835c58')) {function content_4fea7d2835c58($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<script type="text/javascript" src="http://sta.in1001.com/lib/jquery/jquery.cycle.all.js"></script>
<script type="text/javascript" src="/sta/js/gallery.js"></script>
<div class="main">
	<dl class="mag_list clearfix">
		<dt><strong>爱阅读</strong> <a href="/mag" class="more">More</a></dt>
		<?php echo $_smarty_tpl->getSubTemplate ("magazine/lib/ad-gallery.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('container_id'=>"magazine_gallery_container",'ad_slot'=>$_smarty_tpl->tpl_vars['ad_slot_indextop']->value,'fx'=>"fadeZoom2"), 0);?>

		<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['mag_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
		<?php echo $_smarty_tpl->getSubTemplate ("magazine/lib/magcover.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('cover_show_intro'=>true), 0);?>

		<?php } ?>
	</dl>

	<dl class="element_list clearfix">
		<dt><strong>爱发现</strong> <a href="/find" class="more">More</a></dt>
		<?php echo $_smarty_tpl->getSubTemplate ("magazine/lib/ad-gallery.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('container_id'=>"element_gallery_container",'ad_slot'=>$_smarty_tpl->tpl_vars['ad_slot_indexbottom']->value), 0);?>

		<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['elm_4']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
		<?php echo $_smarty_tpl->getSubTemplate ("magazine/lib/elemcover.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('width'=>180,'height'=>180,'cover_show_title'=>true), 0);?>

		<?php } ?>
	</dl>
</div>
<?php echo $_smarty_tpl->getSubTemplate ('share.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>