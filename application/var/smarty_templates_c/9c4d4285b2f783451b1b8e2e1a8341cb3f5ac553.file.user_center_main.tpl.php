<?php /* Smarty version Smarty-3.1.6, created on 2012-07-17 10:35:43
         compiled from "application/views/user/user_center_main.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17226155934ff24fb01150a8-26851600%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9c4d4285b2f783451b1b8e2e1a8341cb3f5ac553' => 
    array (
      0 => 'application/views/user/user_center_main.tpl',
      1 => 1342445487,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17226155934ff24fb01150a8-26851600',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_4ff24fb022041',
  'variables' => 
  array (
    'navs' => 0,
    'is_me' => 0,
    'user_id' => 0,
    'love_msg' => 0,
    'followers' => 0,
    'followees' => 0,
    'element' => 0,
    'magazine' => 0,
    'user_info' => 0,
    'bookstore' => 0,
    'msg_page' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4ff24fb022041')) {function content_4ff24fb022041($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div class="current clearfix">
	<?php echo $_smarty_tpl->getSubTemplate ("magazine/lib/nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('navs'=>$_smarty_tpl->tpl_vars['navs']->value), 0);?>

	<div class="menu clearfix">
		<ul>
			<?php if ($_smarty_tpl->tpl_vars['is_me']->value){?>
			<li><a href="/user/<?php echo $_smarty_tpl->tpl_vars['user_id']->value;?>
/messages"<?php if ($_smarty_tpl->tpl_vars['love_msg']->value){?>class="sel"<?php }?>>消息中心</a></li>
			<?php }?>
			<li><a href="/user/<?php echo $_smarty_tpl->tpl_vars['user_id']->value;?>
/followers" <?php if ($_smarty_tpl->tpl_vars['followers']->value){?>class="sel"<?php }?>>粉丝</a></li>
			<li><a href="/user/<?php echo $_smarty_tpl->tpl_vars['user_id']->value;?>
/followees" <?php if ($_smarty_tpl->tpl_vars['followees']->value){?>class="sel"<?php }?>>关注</a></li>
			<li><a href="/user/<?php echo $_smarty_tpl->tpl_vars['user_id']->value;?>
/elements" <?php if ($_smarty_tpl->tpl_vars['element']->value){?>class="sel"<?php }?>>喜欢的发现</a></li>
			<li><a href="/user/<?php echo $_smarty_tpl->tpl_vars['user_id']->value;?>
/magazines" <?php if ($_smarty_tpl->tpl_vars['magazine']->value){?>class="sel"<?php }?>>喜欢的阅读</a></li>
			<?php if ($_smarty_tpl->tpl_vars['user_info']->value['role']!=0){?>
			<li><a href="/user/<?php echo $_smarty_tpl->tpl_vars['user_id']->value;?>
/bookstore" <?php if ($_smarty_tpl->tpl_vars['bookstore']->value){?>class="sel"<?php }?>><?php if ($_smarty_tpl->tpl_vars['is_me']->value){?>我的作品<?php }else{ ?>作品<?php }?></a></li>
			<?php }?>
		</ul>
	</div>
</div>
    <div class="main main_left_line clearfix">
        <?php echo $_smarty_tpl->getSubTemplate ('user/sidebar_left.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

        <?php if ($_smarty_tpl->tpl_vars['element']->value){?>
            <?php echo $_smarty_tpl->getSubTemplate ('user/element.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['magazine']->value){?>
            <?php echo $_smarty_tpl->getSubTemplate ('user/magazine.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['bookstore']->value){?>
	    <?php echo $_smarty_tpl->getSubTemplate ('user/my_bookstore.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['msg_page']->value){?>
	    <?php echo $_smarty_tpl->getSubTemplate ('user/show.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['followees']->value){?>
	    <?php echo $_smarty_tpl->getSubTemplate ('user/followees.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('follows'=>$_smarty_tpl->tpl_vars['followees']->value,'follow_type'=>'followee'), 0);?>

        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['followers']->value){?>
	    <?php echo $_smarty_tpl->getSubTemplate ('user/followees.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('follows'=>$_smarty_tpl->tpl_vars['followers']->value,'follow_type'=>'follower'), 0);?>

        <?php }?>

    </div>
<?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php }} ?>