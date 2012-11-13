<?php /* Smarty version Smarty-3.1.6, created on 2012-07-23 15:46:47
         compiled from "application/views/magazine/magazine_detail.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20080552114ff2b2e1745674-86982916%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c4b31f489fda876a3d42d8227af1263e774f815d' => 
    array (
      0 => 'application/views/magazine/magazine_detail.tpl',
      1 => 1343021651,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20080552114ff2b2e1745674-86982916',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_4ff2b2e1a840f',
  'variables' => 
  array (
    'navs' => 0,
    'magazine' => 0,
    'item' => 0,
    'pub_host' => 0,
    'key' => 0,
    'hasMoreComments' => 0,
    'recommendation' => 0,
    'maylike' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4ff2b2e1a840f')) {function content_4ff2b2e1a840f($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include '/home/zs/letou/magazine/CodeIgniter/system/third_party/smarty/libs/plugins/modifier.truncate.php';
?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<script src="http://sta.in1001.com/lib/jquery/jquery.jscrollpane.min.js"></script>
<div class="current">
	<?php echo $_smarty_tpl->getSubTemplate ("magazine/lib/nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('navs'=>$_smarty_tpl->tpl_vars['navs']->value), 0);?>

</div>

<div class="main mag_preview clearfix">
	<div class="left_main">
		<div class="cover">
			<img src="<?php echo $_smarty_tpl->tpl_vars['magazine']->value['cover'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['magazine']->value['name'];?>
" />
		</div>
		<div class="intro">
			<h2><?php echo $_smarty_tpl->tpl_vars['magazine']->value['name'];?>
</h2>
			<p id="user_<?php echo $_smarty_tpl->tpl_vars['magazine']->value['author']['id'];?>
" class="auther">
				作者：<a href="/user/<?php echo $_smarty_tpl->tpl_vars['magazine']->value['author']['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['magazine']->value['author']['nickname'];?>
</a>
				<a  href="javascript:void(0);" class="follow unfollowed">
					<img src="/sta/images/ico_plus.gif" alt="加关注" class="fellow_item" onclick="like('user','<?php echo $_smarty_tpl->tpl_vars['magazine']->value['author']['id'];?>
');" />
					&nbsp;<span class="fellow_item" onclick="like('user','<?php echo $_smarty_tpl->tpl_vars['magazine']->value['author']['id'];?>
');">加关注</span>
				</a>
				<a  href="javascript:void(0);" class="follow followed">
					<img src="/sta/images/ico_minus.gif" alt="已关注" class="fellow_item" onclick="cancelLike('user','<?php echo $_smarty_tpl->tpl_vars['magazine']->value['author']['id'];?>
');" />
					&nbsp;<span class="fellow_item" onclick="cancelLike('user','<?php echo $_smarty_tpl->tpl_vars['magazine']->value['author']['id'];?>
');">已关注</span>
				</a>
			</p>
			<p>上传：<?php echo $_smarty_tpl->tpl_vars['magazine']->value['publishedAt'];?>
</p>
			<p class="tag">TAG：<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['magazine']->value['tag']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?><a href="/mag_list/tag/<?php echo $_smarty_tpl->tpl_vars['item']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value;?>
</a>&nbsp;&nbsp;<?php } ?></p>
			<p class="intro_txt" style="height:77px;"><strong>简介：</strong>
				<?php echo $_smarty_tpl->tpl_vars['magazine']->value['intro'];?>

			</p>
			<div class="shareto">
				<span class="share">分享到:</span>
				<!-- Baidu Button BEGIN -->
					<div id="bdshare" class="bdshare_t bds_tools get-codes-bdshare" data="{url:'http://www.in1001.com/magazine/detail/<?php echo $_smarty_tpl->tpl_vars['magazine']->value['id'];?>
'}">
						<a class="bds_tsina" style="margin-left:5px;"></a>
						<a class="bds_renren" style="margin-left:10px;"></a>
						<a class="bds_tqq" style="margin-left:10px;"></a>
						<a class="bds_douban" style="margin-left:10px;"></a>
						<a class="bds_hi" style="margin-left:10px;"></a>
						<a class="bds_kaixin001" style="margin-left:10px;"></a>
				<!--		<span class="bds_more">更多</span>-->
					</div>
					<script type="text/javascript" id="bdshare_js" data="type=tools&amp;mini=1" ></script>
					<script type="text/javascript" id="bdshell_js"></script>
					<script type="text/javascript">
						var bds_config = {
							'bdDes':'',
							'bdText':'<?php echo $_smarty_tpl->tpl_vars['magazine']->value['name'];?>
 <?php echo htmlspecialchars(smarty_modifier_truncate($_smarty_tpl->tpl_vars['magazine']->value['intro'],30), ENT_QUOTES, 'UTF-8', true);?>
......',
							'bdPopTitle':'',
							'bdPic':'<?php echo $_smarty_tpl->tpl_vars['magazine']->value['cover'];?>
',
							'searchPic':0,
							'review':'normal'
						}
						document.getElementById("bdshell_js").src = "http://bdimg.share.baidu.com/static/js/shell_v2.js?cdnversion=" + new Date().getHours();
					</script>
				<!-- Baidu Button END -->
			</div>
			<div style="clear:both;"></div>
			<p class="readonline">
				<a onclick="_gaq.push(['_trackEvent', '杂志', '阅读', '<?php echo $_smarty_tpl->tpl_vars['magazine']->value['name'];?>
', 5]);" href="<?php echo $_smarty_tpl->tpl_vars['pub_host']->value;?>
/<?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['magazine']->value['id'],3,'');?>
/<?php echo $_smarty_tpl->tpl_vars['magazine']->value['id'];?>
/web"><img src="/sta/images/btn_readonline.jpg" alt="在线阅读" /></a>
			</p>
			<p class="info" id="magazine_<?php echo $_smarty_tpl->tpl_vars['magazine']->value['id'];?>
">
				<span class="view"><a href="javascript:void(0)" title="阅读">阅读</a><?php echo $_smarty_tpl->tpl_vars['magazine']->value['views'];?>
</span>
				<span class="like unliked"><a href="javascript:void(0)" onclick="like('magazine', '<?php echo $_smarty_tpl->tpl_vars['magazine']->value['id'];?>
')" title="喜欢">喜欢</a><span class="favs"><?php echo $_smarty_tpl->tpl_vars['magazine']->value['likes'];?>
</span></span>
				<span class="like liked"><a href="javascript:void(0)" title="已经喜欢" onclick="like('magazine', '<?php echo $_smarty_tpl->tpl_vars['magazine']->value['id'];?>
')">已经喜欢</a><span class="favs"><?php echo $_smarty_tpl->tpl_vars['magazine']->value['likes'];?>
</span></span>
			</p>
		</div>

		<dl class="preview">
			<dt>精彩内容预览</dt>
			<dd class="scrollbar">
					<ul>
						<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['magazine']->value['pageThumbs']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
						<li><a href="<?php echo $_smarty_tpl->tpl_vars['pub_host']->value;?>
/<?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['magazine']->value['id'],3,'');?>
/<?php echo $_smarty_tpl->tpl_vars['magazine']->value['id'];?>
/web/#p<?php echo $_smarty_tpl->tpl_vars['key']->value+1;?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['item']->value;?>
" alt="page 16" width="104px" height="160px" style="overflow:hidden;" /></a></li>
						<?php } ?>
					</ul>
			</dd>
		</dl>

		<div class="comment_preview">
			<?php echo $_smarty_tpl->getSubTemplate ("magazine/lib/main-comments.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('limit'=>5), 0);?>

			<p class="more_comment"<?php if (!$_smarty_tpl->tpl_vars['hasMoreComments']->value){?> style="display:none"<?php }?>>
				<a href="/magazine/<?php echo $_smarty_tpl->tpl_vars['magazine']->value['id'];?>
/comments">查看全部留言</a>
			</p>
		</div>

	</div>

	<div class="sidebar_right">
		<div class="topic">
			<a href="/soft/pc"><img src="/sta/images/soft_logo.jpg" width=230 height=180 alt="预览" /></a>
		</div>
		<dl class="mag_topic">
			<dt>推荐的杂志</dt>
			<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['recommendation']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
			<dd><a href="/magazine/detail/<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['item']->value['cover'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
" width="106px" height="162px" /></a></dd>
			<?php } ?>
		</dl>
		<dl class="mag_topic">
			<dt>猜你喜欢</dt>
			<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['maylike']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
			<dd><a href="/magazine/detail/<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['item']->value['cover'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
" width="106px" height="162px" /></a></dd>
			<?php } ?>
		</dl>
	</div>
</div>
<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>