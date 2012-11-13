<?php /* Smarty version Smarty-3.1.6, created on 2012-07-12 14:12:26
         compiled from "application/views/user/signup.tpl" */ ?>
<?php /*%%SmartyHeaderCode:21200953134ffe2ec90e7aa6-69021800%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ea86c8e9e76006b05a8680f62718804bbd80ddb3' => 
    array (
      0 => 'application/views/user/signup.tpl',
      1 => 1342072562,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21200953134ffe2ec90e7aa6-69021800',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_4ffe2ec9173a2',
  'variables' => 
  array (
    'commend_author' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4ffe2ec9173a2')) {function content_4ffe2ec9173a2($_smarty_tpl) {?><?php if (!$_smarty_tpl->tpl_vars['commend_author']->value){?>
<div class="dialog reg">
	<div class="main">
		<form id="signup_form" name="form" action="/user/signup" onsubmit="return signup(this)" method="POST" enctype="multipart/form-data">
			<fieldset>
 			<legend>注册1001夜账号</legend>
			<p class="err_msg" style="display:none"></p>
			<p>
				<label for="dialog_reg_Email">Email地址</label><input type="text" name="username" class="username" id="dialog_reg_Email" />
				<span><!--class正确为right，错误为error-->请输入您的常用Email地址</span>
			</p>
			<p><label for="dialog_reg_Pass">设置密码</label><input type="password" name="passwd" class="passwd" id="dialog_reg_Pass" /></p>
			<p><label for="dialog_reg_RePass">重复密码</label><input type="password" name="re_passwd" class="re_passwd" id="dialog_reg_RePass" /></p>
			<p><button type="submit">马上注册成为会员</button></p>
			</fieldset>
		</form>
		<dl>
			<dd><a href="/user/signin" class="thickbox signin">您已经拥有账号请直接登录</a></dd>
			<dt>您还可以使用以下帐号登录</dt>
 			<dd><a href="/sns/redirect?snsid=qq&apptype=web&op=1"><img src="/sta/images/login_qq.jpg" alt="用QQ帐号登录" /></a></dd>
 			<dd><a href="/sns/redirect?snsid=sina&apptype=web&op=1"><img src="/sta/images/login_weibo.jpg" alt="用微博帐号登录" /></a></dd>
			<dd></dd>
		</dl>
	</div>
</div>
<?php }else{ ?>
<!--登录后显示的内容`-->
<?php }?>
<?php }} ?>