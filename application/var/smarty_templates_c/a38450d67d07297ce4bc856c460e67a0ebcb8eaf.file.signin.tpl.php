<?php /* Smarty version Smarty-3.1.6, created on 2012-07-12 21:43:02
         compiled from "application/views/user/signin.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4164225914feac16b3cb897-57310395%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a38450d67d07297ce4bc856c460e67a0ebcb8eaf' => 
    array (
      0 => 'application/views/user/signin.tpl',
      1 => 1342100373,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4164225914feac16b3cb897-57310395',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_4feac16b41337',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4feac16b41337')) {function content_4feac16b41337($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<hr />
<?php echo $_smarty_tpl->getSubTemplate ("user/signinbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('single_page'=>true), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>