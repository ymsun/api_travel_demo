<?php /* Smarty version Smarty-3.1.6, created on 2012-07-14 14:19:19
         compiled from "application/views/magazine/lib/elemcover.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8917635054ff58d109d76c3-70860200%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0adc9348aa1cd1a27a22eb131634be1d76a6d733' => 
    array (
      0 => 'application/views/magazine/lib/elemcover.tpl',
      1 => 1342236094,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8917635054ff58d109d76c3-70860200',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_4ff58d10b0fd6',
  'variables' => 
  array (
    'item' => 0,
    'favorited' => 0,
    'width' => 0,
    'height' => 0,
    'cover_show_del' => 0,
    'cover_show_title' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4ff58d10b0fd6')) {function content_4ff58d10b0fd6($_smarty_tpl) {?><dd id="element_<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" class="item<?php if ($_smarty_tpl->tpl_vars['favorited']->value){?> favorited<?php }?>">
	<div class="cover">
		<a href="<?php echo $_smarty_tpl->tpl_vars['item']->value['mag_read_url'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['item']->value['image'][180]['url'];?>
" width="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['width']->value)===null||$tmp==='' ? 180 : $tmp);?>
" height="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['height']->value)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['item']->value['image'][180]['height'] : $tmp);?>
" alt="<?php echo $_smarty_tpl->tpl_vars['item']->value['magName'];?>
" /></a>
		<div class="mouseover">
			<div class="bg"></div>
			<div class="content">
				<a href="<?php echo $_smarty_tpl->tpl_vars['item']->value['mag_read_url'];?>
" class="read">阅读</a>
				<?php if ($_smarty_tpl->tpl_vars['cover_show_del']->value){?><a href="javascript:void(0)" class="del_mag" onclick="cancelLike('element', '<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
')">删除</a><?php }?>
				<div class="more">
					<a href="#" class="share" data-type="2" data-title="<?php echo $_smarty_tpl->tpl_vars['item']->value['magName'];?>
" data-id="<?php echo $_smarty_tpl->tpl_vars['item']->value['mag_read_url'];?>
" data-img="<?php echo $_smarty_tpl->tpl_vars['item']->value['image'][180]['url'];?>
">分享</a>
					<a href="javascript:void(0);" onclick="like('element','<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
');" class="like"><?php echo $_smarty_tpl->tpl_vars['item']->value['likes'];?>
</a>
				</div>
				<div class="shareto">
					<div class="bg"></div>
				</div>
			</div>
		</div>
	</div>
	<?php if ($_smarty_tpl->tpl_vars['cover_show_title']->value){?><h3><a href="<?php echo $_smarty_tpl->tpl_vars['item']->value['mag_read_url'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
</a></h3><?php }?>
</dd>

<?php }} ?>