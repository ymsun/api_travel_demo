<?php /* Smarty version Smarty-3.1.6, created on 2012-07-17 18:59:45
         compiled from "application/views/magazine/lib/ad-gallery.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12886759554ff562cbcb8ff6-68492666%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5076743d32afa2b027854d59696868a262e1af8a' => 
    array (
      0 => 'application/views/magazine/lib/ad-gallery.tpl',
      1 => 1342522754,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12886759554ff562cbcb8ff6-68492666',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_4ff562cbd3d44',
  'variables' => 
  array (
    'fx' => 0,
    'ad_slot' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4ff562cbd3d44')) {function content_4ff562cbd3d44($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_mbtruncate')) include '/home/zs/letou/magazine/CodeIgniter/system//third_party/smarty_plugins/modifier.mbtruncate.php';
?><dd class="topic"<?php if (isset($_smarty_tpl->tpl_vars['fx']->value)){?> data-fx="<?php echo $_smarty_tpl->tpl_vars['fx']->value;?>
"<?php }?>>
	<div class="slide_pic">
		<div class="slides" style="width:<?php echo $_smarty_tpl->tpl_vars['ad_slot']->value['width'];?>
px; height: <?php echo $_smarty_tpl->tpl_vars['ad_slot']->value['height'];?>
px; overflow:hidden">
			<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['ad_slot']->value['items']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
			<a href="<?php echo $_smarty_tpl->tpl_vars['item']->value['url'];?>
"><img <?php if ($_smarty_tpl->tpl_vars['fx']->value=="fadeZoom2"){?>widht="100%" height="100%"<?php }else{ ?>width="<?php echo $_smarty_tpl->tpl_vars['ad_slot']->value['width'];?>
" height="<?php echo $_smarty_tpl->tpl_vars['ad_slot']->value['height'];?>
"<?php }?> src="<?php echo $_smarty_tpl->tpl_vars['item']->value['image']['url'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
" /></a>
			<?php } ?>
		</div>
		<div class="tab">
			<div class="point">
			</div>
		</div>
		<div class="slide_nav">
			<a href="javascript:void(0);" class="prev">上一个</a>
			<a href="javascript:void(0);" class="next">下一个</a>
		</div>
	</div>
	<div class="slide_text">
	<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['ad_slot']->value['items']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
		<div class="slide">
			<h2><a href="<?php echo $_smarty_tpl->tpl_vars['item']->value['url'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
</a></h2>
			<?php if ($_smarty_tpl->tpl_vars['ad_slot']->value['show_text']){?>
			<p>
				<span><?php echo smarty_modifier_mbtruncate($_smarty_tpl->tpl_vars['item']->value['text'],100);?>
</span>
				<a href="<?php echo $_smarty_tpl->tpl_vars['item']->value['url'];?>
" class="readmore">阅读+</a>
			</p>
			<?php }?>
		</div>
		<?php } ?>
	</div>
</dd>
<?php }} ?>