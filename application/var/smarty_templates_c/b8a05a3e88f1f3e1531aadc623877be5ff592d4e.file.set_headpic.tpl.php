<?php /* Smarty version Smarty-3.1.6, created on 2012-07-12 14:23:39
         compiled from "application/views/user/set_headpic.tpl" */ ?>
<?php /*%%SmartyHeaderCode:856037334ffe6d6b5b7f71-52568942%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b8a05a3e88f1f3e1531aadc623877be5ff592d4e' => 
    array (
      0 => 'application/views/user/set_headpic.tpl',
      1 => 1341914218,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '856037334ffe6d6b5b7f71-52568942',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_4ffe6d6b64697',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4ffe6d6b64697')) {function content_4ffe6d6b64697($_smarty_tpl) {?>	
	<div class="set_main headpic">
		<h2>当前头像</h2>
		<ul class="clearfix">
			<li class="big"><img src="/sta/images/userhead/big.jpg" alt="180x180" />180x180</li>
			<li><img src="/sta/images/userhead/b001.jpg" alt="80x80" />80x80<span>(系统自动生成)</span></li>
			<li><img src="/sta/images/userhead/50.jpg" alt="50x50" />50x50<span>(系统自动生成)</span></li>
		</ul>
		<button class="btn_set"><span>本地上传</span></button>
		<p>上传头像只支持JPG、PNG、GIF格式图片，且小于5M。</p>
		
	</div>
<?php }} ?>