<?php /* Smarty version Smarty-3.1.6, created on 2012-07-12 14:23:18
         compiled from "application/views/user/set_main.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10059380444ffe6d56a09a71-76703827%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd9cde32a267746585b7215072128abeb3383f2b6' => 
    array (
      0 => 'application/views/user/set_main.tpl',
      1 => 1342008277,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10059380444ffe6d56a09a71-76703827',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'user_set' => 0,
    'user_set_name' => 0,
    'user_info' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_4ffe6d56c6191',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4ffe6d56c6191')) {function content_4ffe6d56c6191($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div class="current"><a href="#">首页</a> &gt; <a href="/user/me/<?php echo $_smarty_tpl->tpl_vars['user_set']->value;?>
" class="cur"><?php echo $_smarty_tpl->tpl_vars['user_set_name']->value;?>
</a></div>
<div class="main setting clearfix">
	<div class="set_menu">
		<ul>
			<li class="s_base <?php if ($_smarty_tpl->tpl_vars['user_set']->value=='set_base'){?>sel<?php }?>">
				<a href="set_base">基本资料</a>
			</li>
			<li class="s_pic <?php if ($_smarty_tpl->tpl_vars['user_set']->value=='set_headpic'){?>sel<?php }?>">
				<a href="set_headpic">头像设置</a>
			</li>
			<li class="s_tag <?php if ($_smarty_tpl->tpl_vars['user_set']->value=='set_tag'){?>sel<?php }?>">
				<a href="set_tag">个人标签</a>
			</li>
			<li class="s_share <?php if ($_smarty_tpl->tpl_vars['user_set']->value=='set_share'){?>sel<?php }?>">
				<a href="set_share">分享管理</a>
			</li>
			<li class="s_pwd <?php if ($_smarty_tpl->tpl_vars['user_set']->value=='set_pwd'){?>sel<?php }?>">
				<a href="set_pwd">修改密码</a>
			</li>
<!--
			<li class="s_auther <?php if ($_smarty_tpl->tpl_vars['user_set']->value=='set_auther'){?>sel<?php }?>">
				<a href=set_auther#">作者信息设置</a>
			</li>
-->
<!--
			<li class="s_ana <?php if ($_smarty_tpl->tpl_vars['user_set']->value=='set_ana'){?>sel<?php }?>">
				<a href="set_ana">数据分析</a>
			</li>
-->
		</ul>
		<?php if ($_smarty_tpl->tpl_vars['user_info']->value['role']==0){?>
		<a href="/user/applyAuthor/invitation?height=404&width=736&modal=true" class="btn_auther thickbox">申请成为作者</a>
		<?php }?>
	</div>
	<?php if ($_smarty_tpl->tpl_vars['user_set']->value=='set_base'){?><?php echo $_smarty_tpl->getSubTemplate ("user/set_base.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }?>
	<?php if ($_smarty_tpl->tpl_vars['user_set']->value=='set_headpic'){?><?php echo $_smarty_tpl->getSubTemplate ("user/set_headpic.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }?>
	<?php if ($_smarty_tpl->tpl_vars['user_set']->value=='set_tag'){?><?php echo $_smarty_tpl->getSubTemplate ("user/set_tag.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }?>
	<?php if ($_smarty_tpl->tpl_vars['user_set']->value=='set_auther'){?><?php echo $_smarty_tpl->getSubTemplate ("user/set_auther.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }?>
	<?php if ($_smarty_tpl->tpl_vars['user_set']->value=='set_share'){?><?php echo $_smarty_tpl->getSubTemplate ("user/set_share.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }?>
	<?php if ($_smarty_tpl->tpl_vars['user_set']->value=='set_pwd'){?><?php echo $_smarty_tpl->getSubTemplate ("user/set_pwd.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }?>
</div>
<?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php }} ?>