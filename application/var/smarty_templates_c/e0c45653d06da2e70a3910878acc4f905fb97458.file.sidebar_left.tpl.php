<?php /* Smarty version Smarty-3.1.6, created on 2012-07-20 10:33:25
         compiled from "application/views/user/sidebar_left.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12440423014ff24fb0228bb4-94855197%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e0c45653d06da2e70a3910878acc4f905fb97458' => 
    array (
      0 => 'application/views/user/sidebar_left.tpl',
      1 => 1342690282,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12440423014ff24fb0228bb4-94855197',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_4ff24fb03242d',
  'variables' => 
  array (
    'user_info' => 0,
    'user_id' => 0,
    'is_me' => 0,
    'item' => 0,
    'loved_author' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4ff24fb03242d')) {function content_4ff24fb03242d($_smarty_tpl) {?><?php if (!is_callable('smarty_function_cycle')) include '/home/zs/letou/magazine/CodeIgniter/system/third_party/smarty/libs/plugins/function.cycle.php';
?><div class="sidebar_left">
	<div class="userinfo" id="user_<?php echo $_smarty_tpl->tpl_vars['user_info']->value['id'];?>
">
		<p>
			<a href="/user/<?php echo $_smarty_tpl->tpl_vars['user_id']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['user_info']->value['nickname'];?>
</a>
			<?php if ($_smarty_tpl->tpl_vars['is_me']->value){?>
			<a href="/user/me/setting" class="edit">修改</a>
			<?php }else{ ?>
			<?php if ($_smarty_tpl->tpl_vars['user_info']->value['role']>0){?>
			<a href="javascript:void(0)" class="auther">认证作者</a>
			<?php }?>
			<?php }?>
		</p>
		<div class="user_info">
			<a href="#">
				<img src="<?php echo $_smarty_tpl->tpl_vars['user_info']->value['image'];?>
!180" width="180px" height="180px" class="userhead" alt="1<?php echo $_smarty_tpl->tpl_vars['user_info']->value['nickname'];?>
" />
			</a>
			<ul class="clearfix">
				<li><a href="/user/<?php echo $_smarty_tpl->tpl_vars['user_id']->value;?>
/followees">关注<span><?php echo $_smarty_tpl->tpl_vars['user_info']->value['followees'];?>
</span></a></li>
				<li class="last"><a href="/user/<?php echo $_smarty_tpl->tpl_vars['user_id']->value;?>
/followers">粉丝<span><?php echo $_smarty_tpl->tpl_vars['user_info']->value['followers'];?>
</span></a></li>
			</ul>
		</div>
		<?php if ($_smarty_tpl->tpl_vars['is_me']->value){?>
		<?php if ($_smarty_tpl->tpl_vars['user_info']->value['role']==0){?>
		<a href="/user/applyAuthor/invitation" class="applyauthor thickbox">申请成为作者</a>
		<?php }else{ ?>
		<a href="javascript:void(0)" class="applyauthor alreadyauthor">认证作者</a>
		<?php }?>
		<?php }else{ ?>
		<a class="follow" href="javascript:void(0)" onclick="like('user', '<?php echo $_smarty_tpl->tpl_vars['user_id']->value;?>
', 'user_center')">加关注</a>
		<p class="followed">
			<a class="followed" href="javascript:void(0)" onclick="like('user', '<?php echo $_smarty_tpl->tpl_vars['user_id']->value;?>
', 'user_center')">已关注</a>
			<a class="cancel" href="javascript:void(0)" onclick="cancelLike('user', '<?php echo $_smarty_tpl->tpl_vars['user_id']->value;?>
', 'user_center')">取消</a>
		</p>
		<?php }?>
		<p class="bottombg"></p>
	</div>
 		
 		<dl class="tag">
			<dt><?php if ($_smarty_tpl->tpl_vars['is_me']->value){?>我<?php }else{ ?>TA<?php }?>的标签  <?php if ($_smarty_tpl->tpl_vars['is_me']->value){?><a href="/user/me/set_tag" class="edit">修改</a></dt><?php }?>
 			<dd>
				<?php if ($_smarty_tpl->tpl_vars['user_info']->value['tags']){?>
					<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['user_info']->value['tags']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
					<a href="#" class="<?php echo smarty_function_cycle(array('values'=>"tag01,tag02"),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value;?>
</a>
					<?php } ?>
				<?php }else{ ?>
					&nbsp;&nbsp;<?php if ($_smarty_tpl->tpl_vars['is_me']->value){?>您<?php }else{ ?>TA<?php }?>还没有设置标签
				<?php }?>
 			</dd>
 		</dl>
 		
 		<dl class="follows">
			<dt><?php if ($_smarty_tpl->tpl_vars['is_me']->value){?>我<?php }else{ ?>TA<?php }?>的关注</dt>
 			<dd>
 				<div class="clearfix">
					<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['loved_author']->value['items']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
						<a href="/user/<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['item']->value['image'];?>
!50" width="50" height="50" alt="<?php echo $_smarty_tpl->tpl_vars['item']->value['nickname'];?>
" /><span><?php echo $_smarty_tpl->tpl_vars['item']->value['nickname'];?>
</span></a>
					<?php } ?>
					<span class="curnick"></span>
 					<span class="gray"></span>
 				</div>
 			</dd>
 		</dl>
 	</div>
<?php }} ?>