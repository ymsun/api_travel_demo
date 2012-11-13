<?php /* Smarty version Smarty-3.1.6, created on 2012-07-23 09:52:03
         compiled from "application/views/user/signupbox.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15291626664ffed47f01e018-58259999%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '54a27e910fbe7f0eb32e7d9bc5a5651337a27cd4' => 
    array (
      0 => 'application/views/user/signupbox.tpl',
      1 => 1342755658,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15291626664ffed47f01e018-58259999',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_4ffed47f15ac8',
  'variables' => 
  array (
    'commend_author' => 0,
    'return' => 0,
    'single_page' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4ffed47f15ac8')) {function content_4ffed47f15ac8($_smarty_tpl) {?><?php if (!$_smarty_tpl->tpl_vars['commend_author']->value){?>
<div class="dialog reg">
	<div class="main">
		<form id="signup_form" name="form" action="/user/signup" onsubmit="return signup(this)" method="POST" data-return="<?php echo $_smarty_tpl->tpl_vars['return']->value;?>
">
			<fieldset>
 			<legend>注册1001夜账号</legend>
			<p class="err_msg" style="display:none"></p>
			<p class="input">
				<label for="dialog_reg_Email">Email地址</label><input type="text" name="username" class="username" id="dialog_reg_Email" />
				<span><!--class正确为right，错误为error-->请输入您的常用Email地址</span>
			</p>
			<p class="input"><label for="dialog_reg_Pass">设置密码</label><input type="password" name="passwd" class="passwd" id="dialog_reg_Pass" />
				<span><!--class正确为right，错误为error-->密码可以是6-16位字符、数字、符号，区分大小写</span>
				</p>
			<p class="input"><label for="dialog_reg_RePass">重复密码</label><input type="password" name="re_passwd" class="re_passwd" id="dialog_reg_RePass" /></p>
			<p class="agreement"><input type="checkbox" class="agreement" />我已阅读并同意<a href="/legal_statement" target="_BLANK">1001夜法律声明</a></p>
			<p><button type="submit">马上注册成为会员</button></p>
			</fieldset>
		</form>
		<dl>
			<dd class="signswitch">
			<?php if ($_smarty_tpl->tpl_vars['single_page']->value){?>
				<a href="/user/signin<?php if (isset($_smarty_tpl->tpl_vars['return']->value)){?>?return=<?php echo $_smarty_tpl->tpl_vars['return']->value;?>
<?php }?>" class="signin">您已经拥有账号请直接登录</a>
			<?php }else{ ?>
				<a href="/user/signinbox" class="thickbox signin">您已经拥有账号请直接登录</a>
			<?php }?>
			</dd>
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