<?php /* Smarty version Smarty-3.1.6, created on 2012-07-20 10:19:19
         compiled from "application/views/footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5485485164ff10a16177949-54047240%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '796e5df07f04ab8015af682629d328be60c8d623' => 
    array (
      0 => 'application/views/footer.tpl',
      1 => 1342677934,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5485485164ff10a16177949-54047240',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_4ff10a16188cc',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4ff10a16188cc')) {function content_4ff10a16188cc($_smarty_tpl) {?>		<div class="footer">
			<div class="main">
				<ul>
					<li><a href="/about_us">关于我们</a></li>
					<li><a href="/contact_us">联系我们</a></li>
					<li><a href="/join_us">加入我们</a></li>
					<li><a href="/legal_statement">法律声明</a></li>
				</ul>
				<p>©2012&nbsp;&nbsp;京ICP备09034412号&nbsp;&nbsp;&nbsp;&nbsp;建议使用IE7及以上浏览器浏览本网站</p>
			<div>
		</div>
		<div id="msgbox">
			<p></p>
		</div>
		<!--[if IE 6]>
		<script type="text/javascript">
		var getElementsByClassName = function(searchClass,node,tag) {
			if(document.getElementsByClassName){
				return  document.getElementsByClassName(searchClass)
			}else{    
				node = node || document;
				tag = tag || '*';
				var returnElements = []
				var els =  (tag === "*" && node.all)? node.all : node.getElementsByTagName(tag);
				var i = els.length;
				searchClass = searchClass.replace(/\-/g, "\\-");
				var pattern = new RegExp("(^|\\s)"+searchClass+"(\\s|$)");
				while(--i >= 0){
					if (pattern.test(els[i].className) ) {
						returnElements.push(els[i]);
					}
				}
				return returnElements;
			}
		}

		var cover = getElementsByClassName('cover');

		for (i=0; i<cover.length; i++){
			cover[i].getElementsByTagName('div')[0].style.width = cover[i].getElementsByTagName('img')[0].width + 'px';
			cover[i].getElementsByTagName('div')[0].style.height = cover[i].getElementsByTagName('img')[0].height + 'px';
		}

		</script>
		<![endif]-->
	</body>
</html>
<?php }} ?>