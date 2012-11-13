<?php /* Smarty version Smarty-3.1.6, created on 2012-07-11 20:27:09
         compiled from "application/views/magazine/down.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9716167154ff58da88e80c2-34151250%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '46d5a214a6fc36e44a332a825a9252cb8fcb1161' => 
    array (
      0 => 'application/views/magazine/down.tpl',
      1 => 1341976849,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9716167154ff58da88e80c2-34151250',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_4ff58da8a486b',
  'variables' => 
  array (
    'type' => 0,
    'user_info' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4ff58da8a486b')) {function content_4ff58da8a486b($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<script type="text/javascript" >
function play(){
      allSrc=$(".slidescreen img");
      if ( typeof(i) == "undefined" || i == null || i>=allSrc.length ){
              i=0;
      }
      allSrc.css("display","none");
      allSrc[i].style.display="block";
      i++;
}
$(function(){
      setInterval("play()", 2000);
      play();
})
</script>
 <div class="down">
 	<dl class="client_down">
 		<dt <?php if ($_smarty_tpl->tpl_vars['type']->value=='pc'){?>class="sel"<?php }else{ ?> onclick="location.href='/soft/pc'" onmouseover="this.style.cursor='hand'"<?php }?>>PC工具下载</dt>
		<?php if ($_smarty_tpl->tpl_vars['type']->value=='pc'){?>
 		<dd class="pc">
 			<div class="intro">
				<?php if (isset($_smarty_tpl->tpl_vars['user_info']->value)&&$_smarty_tpl->tpl_vars['user_info']->value['role']==1){?>
				<a href="http://58.30.78.70:84/LetouMagazine_20120709.rar">下载</a>
				<?php }else{ ?>
 				<a class="thickbox" href="/user/applyAuthor/invitation?height=404&width=736&modal=true">下载</a>
				<?php }?>
 			</div>
 			<ul>
 				<li class="n1">
 					<strong>富媒体表现力</strong>
 					精彩模版，支持文字、图片、链接、音乐、视频、动画…… 等富媒体表现形式。
 				</li>
 				<li class="n2">
 					<strong>一站式多平台</strong>
 					一次制作，覆盖多平台（Web/IOS/Android）与多终端（PC/平板电脑/手机）。
 				</li>
 				<li class="n3">
 					<strong>卓越用户体验</strong>
 					可触摸、可倾听、可观看。享受栩栩如生的制作乐趣。
 				</li>
 				<li class="n4">
 					<strong>发布共享</strong>
 					如果您制作完毕并准备发布，"1001夜数字阅读平台"将协助推广个人作品，与更多人分享。
 				</li>
 			</ul>
 		</dd>
		<?php }?>
 		<dt <?php if ($_smarty_tpl->tpl_vars['type']->value=='android'){?>class="sel"<?php }else{ ?>onclick="location.href='/soft/android'" onmouseover="this.style.cursor='hand'"<?php }?>>Android客户端下载</dt>
		<?php if ($_smarty_tpl->tpl_vars['type']->value=='android'){?>
 		<dd class="android" style="display:block">
 			<div class="intro">
				<a href="http://d.in1001.com/apk/magazine_bookshelf.apk" class="downbtn">下载Android客户端</a>
 				<div class="slidescreen">
 					<img src="/sta/images/appscreen/1.jpg" alt="截图1" />
 					<img src="/sta/images/appscreen/2.jpg" alt="截图2" />
 					<img src="/sta/images/appscreen/3.jpg" alt="截图3" />
 					<img src="/sta/images/appscreen/4.jpg" alt="截图4" />
 					<img src="/sta/images/appscreen/5.jpg" alt="截图5" />
 					<img src="/sta/images/appscreen/6.jpg" alt="截图6" />
 				</div>
 				<div class="light"></div>
 			</div>
 			<ul>
 				<li class="n1">
 					<strong>剥离繁复的品质阅读</strong>
 					"1001夜"提供杂志及精华部分的品质阅读，只需一点点好奇心的探索，您会发现无数的好看。
 				</li>
 				<li class="n2">
 					<strong>酷炫个性的立体阅读</strong>
 					结合图片、文字、影像、声音的立体阅读，冲击感官，体会阅读的张力。
 				</li>
 				<li class="n3">
 					<strong>随身而动的移动阅读</strong>
 					信息时代的移动阅读，移动设备的阅读服务，让您随时随地阅读精彩。
 				</li>
 				<li class="n4">
 					<strong>率性自然的分享阅读</strong>
 					不同于纸张，数字化使分享变得简单快捷。阅读本身是一件愉悦之事，分享， 赋予阅读更多快乐。
 				</li>
 			</ul>
 		</dd>
		<?php }?>
 	</dl>
 </div>
<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>