<?php /* Smarty version Smarty-3.1.6, created on 2012-07-09 20:51:42
         compiled from "application/views/search.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2641347954ffad3ded04563-36301749%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2be6575b99255cf65a0eefd5532ef074106e1d3d' => 
    array (
      0 => 'application/views/search.tpl',
      1 => 1341803481,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2641347954ffad3ded04563-36301749',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'search_types' => 0,
    's' => 0,
    'type' => 0,
    'keyword' => 0,
    'hotwords' => 0,
    'w' => 0,
    'magazines' => 0,
    'authors' => 0,
    'item' => 0,
    'page_list' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_4ffad3dee6d67',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4ffad3dee6d67')) {function content_4ffad3dee6d67($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<ul class="search_menu">
	<?php  $_smarty_tpl->tpl_vars['s'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['s']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['search_types']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['s']->key => $_smarty_tpl->tpl_vars['s']->value){
$_smarty_tpl->tpl_vars['s']->_loop = true;
?>
	<li><a href="<?php echo $_smarty_tpl->tpl_vars['s']->value['url'];?>
"<?php if ($_smarty_tpl->tpl_vars['s']->value['current']){?> class="sel"<?php }?>><?php echo $_smarty_tpl->tpl_vars['s']->value['name'];?>
</a></li>
	<?php } ?>
</ul>
<div class="search_big">
	<form id="search_big" action="/search/<?php echo $_smarty_tpl->tpl_vars['type']->value;?>
" method="GET">
		<input type="text" name="q"
			value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['keyword']->value)===null||$tmp==='' ? "请输入关键字" : $tmp);?>
" class="graytext" />
		<button type="submit">搜索</button>
	</form>
	<p>
	<?php  $_smarty_tpl->tpl_vars['w'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['w']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['hotwords']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['w']->key => $_smarty_tpl->tpl_vars['w']->value){
$_smarty_tpl->tpl_vars['w']->_loop = true;
?>
		<a href="<?php echo $_smarty_tpl->tpl_vars['w']->value['url'];?>
"><?php echo $_smarty_tpl->tpl_vars['w']->value['word'];?>
</a>
	<?php } ?>
	</p>
</div>
<?php if ($_smarty_tpl->tpl_vars['type']->value!='author'){?> 
<?php echo $_smarty_tpl->getSubTemplate ('share.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<dl class="mag_list_title clearfix">
	<dt><span>共<strong><?php echo $_smarty_tpl->tpl_vars['magazines']->value['totalResults'];?>
</strong>本符合该关键字的杂志</span>
	<?php if (isset($_smarty_tpl->tpl_vars['magazines']->value['moreUrl'])){?><a href="<?php echo $_smarty_tpl->tpl_vars['magazines']->value['moreUrl'];?>
" class="more">More</a></dt><?php }?>
</dl>
<dl class="mag_list search clearfix">
		<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['magazines']->value['items']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
			<?php echo $_smarty_tpl->getSubTemplate ("magazine/lib/magcover.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

		<?php } ?>
</dl>
<?php }?> 

<?php if ($_smarty_tpl->tpl_vars['type']->value!='magazine'){?> 
<dl class="user_list clearfix">
	<dt><span>共<strong><?php echo $_smarty_tpl->tpl_vars['authors']->value['totalResults'];?>
</strong>个符合该关键字的用户</span>
	<?php if (isset($_smarty_tpl->tpl_vars['authors']->value['moreUrl'])){?><a href="<?php echo $_smarty_tpl->tpl_vars['authors']->value['moreUrl'];?>
" class="more">More</a></dt><?php }?>
	<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['authors']->value['items']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
 	<dd>
 		<a href="/user/<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['item']->value['image'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['item']->value['nickname'];?>
" /><?php echo $_smarty_tpl->tpl_vars['item']->value['nickname'];?>
</a>
 	</dd>
	<?php } ?>
</dl>
<?php }?> 

<?php if (isset($_smarty_tpl->tpl_vars['page_list']->value)){?>
<dl class="user_list">
<?php echo $_smarty_tpl->tpl_vars['page_list']->value;?>

</dl>
<?php }?>
<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>