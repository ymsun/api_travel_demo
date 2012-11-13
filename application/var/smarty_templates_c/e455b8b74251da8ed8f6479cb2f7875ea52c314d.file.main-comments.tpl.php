<?php /* Smarty version Smarty-3.1.6, created on 2012-07-23 15:18:34
         compiled from "application/views/magazine/lib/main-comments.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9319225935003aef4919070-67396910%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e455b8b74251da8ed8f6479cb2f7875ea52c314d' => 
    array (
      0 => 'application/views/magazine/lib/main-comments.tpl',
      1 => 1342690282,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9319225935003aef4919070-67396910',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5003aef494e6e',
  'variables' => 
  array (
    'magazine' => 0,
    'limit' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5003aef494e6e')) {function content_5003aef494e6e($_smarty_tpl) {?><h3>留言板</h3>
<form id="comment" class="comment_sub" action="/magazine/refresh_comment?type=magazine&object_id=<?php echo $_smarty_tpl->tpl_vars['magazine']->value['id'];?>
&start=0&limit=<?php echo $_smarty_tpl->tpl_vars['limit']->value;?>
" method="post">
	<div class="reply-comment">
		<a href="#" class="close-reply">x</a>
		<p>回复<a href="#" class="author"></a><span class="comment-content"></span></p>
		<input type="hidden" name="parent_id" />
	</div>
	<img class="avatar" src="/sta/images/userhear_def.gif" alt="用户" />
	<textarea class="text" name="comment"></textarea>
	<button type="button" id="add">发布</button>
</form>
<?php echo $_smarty_tpl->getSubTemplate ("magazine/lib/comments.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>