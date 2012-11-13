<?php /* Smarty version Smarty-3.1.6, created on 2012-07-12 09:37:35
         compiled from "application/views/user/followees.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13878332654ffe2a5f407ce6-25416768%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '69121fba5913d98bdebfe2ddeb8cc8cdfa87ed3d' => 
    array (
      0 => 'application/views/user/followees.tpl',
      1 => 1341888108,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13878332654ffe2a5f407ce6-25416768',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'followees' => 0,
    'item' => 0,
    'page_list' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_4ffe2a5f4742c',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4ffe2a5f4742c')) {function content_4ffe2a5f4742c($_smarty_tpl) {?>	<div class="right_main">
		<div class="msg_list clearfix">
			<div class="my_follow_list">
				<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['followees']->value['items']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
				<dl class="clearfix">
					<dt><a href="#"><img src="<?php echo $_smarty_tpl->tpl_vars['item']->value['image'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['item']->value['nickname'];?>
" /></a></dt>
					<dd>
						<strong><a href="#"><?php echo $_smarty_tpl->tpl_vars['item']->value['nickname'];?>
</a></strong>
						<p><a href="#">关注</a> | <a href="#">发现</a> | <a href="#">作品<?php echo $_smarty_tpl->tpl_vars['item']->value['magazines'];?>
</a></p>
						<span><a href="#">取消关注</a></span>
					</dd>
				</dl>
				<?php } ?>	
			</div>
			<?php echo $_smarty_tpl->tpl_vars['page_list']->value;?>
		
		</div>
	</div>
</div>
<?php }} ?>