<?php /* Smarty version Smarty-3.1.6, created on 2012-07-20 10:19:21
         compiled from "application/views/about/error_us.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9592898025008c0296648e0-33313701%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3a06e97917561f3526c6665626d845543e377264' => 
    array (
      0 => 'application/views/about/error_us.tpl',
      1 => 1342682348,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9592898025008c0296648e0-33313701',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'error_code' => 0,
    'error_msg' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5008c0296fcd7',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5008c0296fcd7')) {function content_5008c0296fcd7($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<link rel="stylesheet" type="text/css" href="/sta/styles/foot.css"/>
<style type="text/css">
	.error_container{
		margin: 70px auto auto;
		width: 1000px;
		height:500px;
		background:url("/sta/images/error_us.png") no-repeat scroll 0 0 transparent;
		}
	.title_container{
		 padding: 31px 277px;
		}
	.title_container ul li{
		font-size:14px;
		}
	.title_container ul li a{
		font-size:14px;
		color:#2BB3D5;
		}
	.title_container ul li span{
		color: red;
		font-size: 60px;
		font-weight: bold;
	}
</style>
<div class="error_container">
	<div class="title_container">
		<ul>
			<li><span><?php echo $_smarty_tpl->tpl_vars['error_code']->value;?>
</span></li>
			<li style="margin-top:15px;color:red;"><?php echo $_smarty_tpl->tpl_vars['error_msg']->value;?>
</li>
			<li style="margin-top:15px;">您可以点击一下链接继续浏览1001夜</li>
			<li style="margin-top:10px;">1) <a href="/">返回首页</a></li>
			<li style="margin-top:10px;">2) 去其他地方逛逛：<a href="/mag">阅读</a> | <a href="/find">发现</a> | <a href="/soft">下载</a></li>
		</ul>
	</div>
</div>
<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>