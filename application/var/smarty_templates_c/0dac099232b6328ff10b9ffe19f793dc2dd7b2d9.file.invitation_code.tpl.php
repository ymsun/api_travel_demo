<?php /* Smarty version Smarty-3.1.6, created on 2012-07-12 14:25:03
         compiled from "application/views/user/invitation_code.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20239734414ffe6dbf29ba08-73557986%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0dac099232b6328ff10b9ffe19f793dc2dd7b2d9' => 
    array (
      0 => 'application/views/user/invitation_code.tpl',
      1 => 1342072562,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20239734414ffe6dbf29ba08-73557986',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_4ffe6dbf32d97',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4ffe6dbf32d97')) {function content_4ffe6dbf32d97($_smarty_tpl) {?><div id="apply_author" class="dialog apply_author">
 	<div class="main">
		<form id="apply_author_form" name="apply_author_form" onsubmit="return applyAuthor(this)" action="/user/applyAuthor/apply" method="POST">
				<legend>请输入你的邀请码</legend>
				<p class="err_msg"></p>
				<p><input type="text" name="code" class="code" /></p>
				<p><button type="submit">提交</button></p>
 		</form>
 	</div>
 	<div class="apply_ok" style="display:none">
		<div class="good_icon"></div>
		<span>恭喜你成为1001夜作者</span>
 	</div>
 </div>
<?php }} ?>