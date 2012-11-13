<?php /* Smarty version Smarty-3.1.6, created on 2012-08-10 18:24:03
         compiled from "application/views/header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1249042814fea7d28361be0-15249284%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8cb8a07c663590b43542addec35e3d474779bd72' => 
    array (
      0 => 'application/views/header.tpl',
      1 => 1344594062,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1249042814fea7d28361be0-15249284',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_4fea7d283ade5',
  'variables' => 
  array (
    'title' => 0,
    'pageid' => 0,
    'curnav' => 0,
    'keyword' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4fea7d283ade5')) {function content_4fea7d283ade5($_smarty_tpl) {?><!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=8" />
		<meta property="wb:webmaster" content="1c5a1d0fe7c84888" />
		<meta name="msapplication-window" content="width=1550;height=768" />
		<meta name="keywords" content="1001夜,旅游,杂志,阅读,旅游攻略,游记,自助游,电子杂志,国内旅游,国外旅游,旅游图片,做杂志,精品内容,目的地,期刊" />
		<meta name="description" content="'1001夜'是一款集高质阅读、多媒体杂志制作工具、发行平台、数据统计于一身的互动阅读平台。享受全新阅读体验，尽享实用的移动旅游攻略。" />
		<link rel="stylesheet" type="text/css" href="/sta/styles/reset.css"/>
		<link rel="stylesheet" type="text/css" href="/sta/styles/global.css"/>
		<link rel="stylesheet" type="text/css" href="/sta/styles/main.css"/>
		<link rel="stylesheet" type="text/css" href="/sta/colorbox/colorbox.css"/>
		<title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
		<script type="text/javascript" src="http://sta.in1001.com/lib/jquery/jquery-1.7.2.min.js"></script>
		<script type="text/javascript" src="http://sta.in1001.com/lib/jquery/jquery.cookie.js"></script>
		<script type="text/javascript" src="http://sta.in1001.com/lib/jquery/jquery.form.js"></script>
		<script type="text/javascript" src="http://sta.in1001.com/lib/jquery/jquery.colorbox.js"></script>
		<script type="text/javascript" src="/sta/js/main.js"></script>
		<script type="text/javascript" src="/sta/js/magazine.js"></script>
		<script type="text/javascript" src="/sta/js/check.js"></script>
		<!--[if IE 6]>
		<script src="/sta/js/belatedPNG_0.0.8a-min.js"></script>
		<script type="text/javascript">
			DD_belatedPNG.fix('.read,.more a,.userinfo p a,.edit');
			DD_belatedPNG.fix('.light,.downbtn'); // for soft page
		</script>
		<![endif]-->
		<script type="text/javascript">
			var _gaq = _gaq || [];
			_gaq.push(['_setAccount', 'UA-20568933-8']);
			_gaq.push(['_trackPageview']);

			(function() {
			 var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
			 ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
			 var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
			 })();

		</script>
	</head>
	<body<?php if (isset($_smarty_tpl->tpl_vars['pageid']->value)){?> id="<?php echo $_smarty_tpl->tpl_vars['pageid']->value;?>
"<?php }?>>
		 <div class="header">
			 <div class="container clearfix">
				 <a href="/" class="logo"><img src="/sta/images/logo.gif" alt="1001夜" /></a>
				 <ul class="menu">
					 <li class="home"><a href="/"<?php if ($_smarty_tpl->tpl_vars['curnav']->value=='home'){?> class="sel"<?php }?>>首页</a></li>
					 <li class="mag"><a href="/mag"<?php if ($_smarty_tpl->tpl_vars['curnav']->value=='mag'){?> class="sel"<?php }?>>阅读</a></li>
					 <li class="find"><a href="/find"<?php if ($_smarty_tpl->tpl_vars['curnav']->value=='find'){?> class="sel"<?php }?>>发现</a></li>
					 <li class="soft"><a href="/soft"<?php if ($_smarty_tpl->tpl_vars['curnav']->value=='soft'){?> class="sel"<?php }?>>下载</a></li>
				 </ul>

				 <div class="rightcon">
					 <div class="search">
						 <form id="search_top" action="/search/all" method="GET">
							 <input type="text" name="q" class="graytext" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['keyword']->value)===null||$tmp==='' ? "请输入关键字" : $tmp);?>
" />
							 <button type="submit">搜索</button>
						 </form>
					 </div>
					 <div class="self_info">
						 <div class="user_info">
							 <span class="user">
								 <a href="/user/me"><span class="nickname">nickname</span><img class="userhead_small" src="/sta/images/userhear_def.gif" width="24px" height="24px" /></a>
							 </span>
							 <div onmouseover="document.getElementById('userMenu').style.display='block'" onmouseout="document.getElementById('userMenu').style.display='none'"></div>
						 </div>
						 <div class="clearfix"></div>
						 <a href="/user/me/messages" class="msg_tip" style="display:none"><span>0</span></a>
						 <ul id="userMenu" onmouseover="document.getElementById('userMenu').style.display='block'" onmouseout="document.getElementById('userMenu').style.display='none'">
							 <li><a href="/user/me/setting">账号设置</a></li>
							 <li><a href="/user/me/magazines">喜欢的阅读</a></li>
							 <li><a href="/user/me/elements">喜欢的发现</a></li>
							 <li><a href="/user/me/messages">消息中心</a></li>
							 <li><a href="/user/signout">退出账号</a></li>
						 </ul>
					 </div>
					 <div class="log_reg">
						 <a href="/user/signupbox" class="thickbox signup">注册</a>
						 <a href="javascript:void(0)" class="login">登录</a>
						 <form name="form" id="loginTip" class="clearfix"
							 onsubmit="return signin(this)"
							 action="/user/signin" method="POST">
							 <p><input type="text" name="username" class="username" value="Email地址" onfocus="if(this.value=='Email地址')this.value='';" onblur="if(this.value=='')this.value='Email地址'"/></p>
							 <p><input type="password" name="passwd" class="passwd" value="" /></p>
							 <p><a href="/user/forget_password" class="findpass">忘记密码？</a>
								 <input type="checkbox" name="need_remember" id="rem_me" class="clear" value="1" /><label for="rem_me">下次自动登录</label></p>
							 <p class="err_msg"></p>
							 <p><button type="submit">立即登录</button></p>
							 <p>其他帐号登录：</p>
							 <p><span><a class="header-snslogin" href="/sns/redirect?snsid=sina&apptype=web&op=1">新浪微博账号登录</a> | <a class="header-snslogin" href="/sns/redirect?snsid=qq&apptype=web&op=1">腾讯微博账号登录</a></span></p>
						 </form>
					 </div>
				 </div>
			 </div>
		 </div>
<?php }} ?>