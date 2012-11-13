<?php /* Smarty version Smarty-3.1.6, created on 2012-07-16 14:04:36
         compiled from "application/views/magazine/lib/comments.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7451640984ffa9ab79a0cb8-95477374%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dac0045eb43768b0edaddc8dd5113b63681969f5' => 
    array (
      0 => 'application/views/magazine/lib/comments.tpl',
      1 => 1342181710,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7451640984ffa9ab79a0cb8-95477374',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_4ffa9ab79e878',
  'variables' => 
  array (
    'totalComments' => 0,
    'comments' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4ffa9ab79e878')) {function content_4ffa9ab79e878($_smarty_tpl) {?><dl id="comments" class="clearfix"<?php if ($_smarty_tpl->tpl_vars['totalComments']->value){?> data-total="<?php echo $_smarty_tpl->tpl_vars['totalComments']->value;?>
<?php }?>">
<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['comments']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
<dt> <a href="<?php echo $_smarty_tpl->tpl_vars['item']->value['author']['url'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['item']->value['author']['image'];?>
!50" alt="用户头像" /></a> </dt>
<dd>
	<p class="info">
		<a href="<?php echo $_smarty_tpl->tpl_vars['item']->value['author']['url'];?>
" class="author"><?php echo $_smarty_tpl->tpl_vars['item']->value['author']['nickname'];?>
</a>
		<?php if ($_smarty_tpl->tpl_vars['item']->value['parent']){?>
		回复<a class="author author2" href="<?php echo $_smarty_tpl->tpl_vars['item']->value['parent']['author']['url'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['parent']['author']['nickname'];?>
</a>
		<?php }?>
		<span class="time">(<?php echo $_smarty_tpl->tpl_vars['item']->value['createdAt'];?>
)</span>
	</p>
	<p class="content"><?php echo $_smarty_tpl->tpl_vars['item']->value['content'];?>
</p>
</dd>
<dd class="edit_reply"><a href="javascript:void(0)" class="reply" data-comment-id="<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" data-author-nickname="<?php echo $_smarty_tpl->tpl_vars['item']->value['author']['nickname'];?>
" data-author-id="<?php echo $_smarty_tpl->tpl_vars['item']->value['author']['id'];?>
">回复</a></dd>
<?php } ?>
</dl>

<?php }} ?>