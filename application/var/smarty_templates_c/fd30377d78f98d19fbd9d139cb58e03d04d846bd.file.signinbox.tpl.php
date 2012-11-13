<?php /* Smarty version Smarty-3.1.6, created on 2012-07-18 17:13:42
         compiled from "application/views/user/signinbox.tpl" */ ?>
<?php /*%%SmartyHeaderCode:134644874ffed466eb9912-06082936%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fd30377d78f98d19fbd9d139cb58e03d04d846bd' => 
    array (
      0 => 'application/views/user/signinbox.tpl',
      1 => 1342578113,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '134644874ffed466eb9912-06082936',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_4ffed46707dc1',
  'variables' => 
  array (
    'return' => 0,
    'single_page' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4ffed46707dc1')) {function content_4ffed46707dc1($_smarty_tpl) {?><div class="dialog login">
	<div class="main">
		<form name="form" action="/user/signin" method="POST" onsubmit="return signin(this)" data-return="<?php echo $_smarty_tpl->tpl_vars['return']->value;?>
">
			<fieldset>
				<legend>登录1001夜</legend>
				<p class="err_msg"></p>
				<p class="input">
					<label for="dialog_login_Email">Email地址</label><input type="text" name="username" class="username" id="dialog_login_Email" />
					<span><!--class正确为right，错误为error-->请输入您的常用Email地址</span>
				</p>
				<p class="input"><label for="dialog_login_Pass">密码</label><input type="password" name="passwd" class="passwd" id="dialog_login_Pass" /></p>
				<p><button type="submit">登录</button></p>
			</fieldset>
		</form>
		<dl>
			<dd class="right signswitch">
			<?php if ($_smarty_tpl->tpl_vars['single_page']->value){?>
				<a href="/user/signup<?php if (isset($_smarty_tpl->tpl_vars['return']->value)){?>?return=<?php echo $_smarty_tpl->tpl_vars['return']->value;?>
<?php }?>" class="signup">注册1001夜</a>
			<?php }else{ ?>	
				<a href="/user/signupbox" class="thickbox signup">注册1001夜</a>
			<?php }?>
			</dd>
			<dt>您还可以使用以下帐号登录</dt>
			<dd><a href="/sns/redirect?snsid=qq&apptype=web&op=1"><img src="/sta/images/login_qq.jpg" alt="用QQ帐号登录" /></a></dd>
			<dd><a href="/sns/redirect?snsid=sina&apptype=web&op=1"><img src="/sta/images/login_weibo.jpg" alt="用微博帐号登录" /></a></dd>
			<dd></dd>
		</dl>
	</div>
</div>
<?php }} ?>