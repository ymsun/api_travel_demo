<?php /* Smarty version Smarty-3.1.6, created on 2012-07-31 10:06:00
         compiled from "application/views/magazine/lib/magcover.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10897236014ff562cbd446d5-81154400%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'efefa187d60474d9c68d4b649c77695759d52e42' => 
    array (
      0 => 'application/views/magazine/lib/magcover.tpl',
      1 => 1343442892,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10897236014ff562cbd446d5-81154400',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_4ff562cbdf2cc',
  'variables' => 
  array (
    'dd_class' => 0,
    'dd_style' => 0,
    'item' => 0,
    'cover_show_del' => 0,
    'cover_show_intro' => 0,
    'cover_show_status' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4ff562cbdf2cc')) {function content_4ff562cbdf2cc($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include '/home/zs/letou/magazine/CodeIgniter/system/third_party/smarty/libs/plugins/modifier.truncate.php';
?><dd<?php if ($_smarty_tpl->tpl_vars['dd_class']->value){?> class="<?php echo $_smarty_tpl->tpl_vars['dd_class']->value;?>
"<?php }?><?php if ($_smarty_tpl->tpl_vars['dd_style']->value){?> style="<?php echo $_smarty_tpl->tpl_vars['dd_style']->value;?>
"<?php }?> id="magazine_<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" >
	<div class="cover">
		<a href="/magazine/detail/<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['item']->value['cover'];?>
" width='180px' height='276px' alt="<?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
" /></a>
		<div class="mouseover">
			<div class="bg"></div>
			<div class="content">
<!--
				<div class="info">
					<ul style="margin-left:2px;">
						<li><span>杂志：</span><span><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</span></li>
						<li><span>作者：</span><span><?php echo $_smarty_tpl->tpl_vars['item']->value['author']['nickname'];?>
</span></li>
						<li><span>发布：</span><span><?php echo $_smarty_tpl->tpl_vars['item']->value['publishedAt'];?>
</span></li>
					</ul>
				</div>
-->
				<a href="/magazine/detail/<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" class="read">阅读</a>
				<?php if ($_smarty_tpl->tpl_vars['cover_show_del']->value){?><a href="javascript:void(0)" class="del_mag" onclick="cancelLike('magazine', '<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
')">删除</a><?php }?>
				<div class="more">
					<a href="/magazine/<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
/comments" class="comment">评论</a>
					<a href="javascript:void(0);" class="share" data-type="1" data-title="<?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
" data-des="<?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['item']->value['intro'],30);?>
" data-id="<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" data-img="<?php echo $_smarty_tpl->tpl_vars['item']->value['cover'];?>
">分享</a>
					<a href="javascript:void(0);" onclick="like('magazine','<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
');" class="like"><?php echo $_smarty_tpl->tpl_vars['item']->value['likes'];?>
</a>
				</div>
				<div class="shareto">
					<div class="bg"></div>
				</div>
			</div>
		</div>
	</div>
	<h3><a href="/magazine/detail/<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</a></h3>
	<?php if ($_smarty_tpl->tpl_vars['cover_show_intro']->value){?><p><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['item']->value['intro'],30);?>
</p><?php }?>
	<?php if ($_smarty_tpl->tpl_vars['cover_show_status']->value){?>
	<div class="edit_btn">
		<?php if ($_smarty_tpl->tpl_vars['item']->value['status']=='0'){?>
			<a href="javascript:void(0)" class="new_upload"><span>新上传</span></a>
			<input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
">
		<?php }?>
		<?php if ($_smarty_tpl->tpl_vars['item']->value['status']=='1'){?><span>审核中</span><?php }?>
		<?php if ($_smarty_tpl->tpl_vars['item']->value['status']=='2'){?>
			<a href="javascript:void(0)" class="passed"><span>审核通过</span></a>
			<input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
">
		<?php }?>
		<?php if ($_smarty_tpl->tpl_vars['item']->value['status']=='3'){?><span>审核未通过</span><?php }?>
	</div>
	<?php }?>
</dd>

<?php }} ?>