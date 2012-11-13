<?php /* Smarty version Smarty-3.1.6, created on 2012-07-06 15:47:14
         compiled from "application/views/user/user_nav.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15427777314ff24fb03b6131-40058218%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9f44c4e5a035fef81e76ab31fa02d59897df9957' => 
    array (
      0 => 'application/views/user/user_nav.tpl',
      1 => 1341560787,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15427777314ff24fb03b6131-40058218',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_4ff24fb03dd58',
  'variables' => 
  array (
    'love_msg' => 0,
    'loved_element' => 0,
    'loved_magazine' => 0,
    'bookstore' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4ff24fb03dd58')) {function content_4ff24fb03dd58($_smarty_tpl) {?>			<ul>
				<li><a href="/user/msg"<?php if ($_smarty_tpl->tpl_vars['love_msg']->value){?>class="sel"<?php }?>>消息中心</a></li>
				<li><a href="/user/followee">关注的作者</a></li>
				<li><a href="/user/element" <?php if ($_smarty_tpl->tpl_vars['loved_element']->value){?>class="sel"<?php }?>>喜欢的发现</a></li>
				<li><a href="/user/magazine" <?php if ($_smarty_tpl->tpl_vars['loved_magazine']->value){?>class="sel"<?php }?>>喜欢的书</a></li>
				<li><a href="/user/bookstore" <?php if ($_smarty_tpl->tpl_vars['bookstore']->value){?>class="sel"<?php }?>>我的作品</a></li>
			</ul>
<?php }} ?>