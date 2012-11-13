<?php /* Smarty version Smarty-3.1.6, created on 2012-07-03 12:57:39
         compiled from "application/views/msg/showjs.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5295312454ff27bc332bf13-57018663%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '62f5a12e517d5b4316d0b825626851e16eddc9cc' => 
    array (
      0 => 'application/views/msg/showjs.tpl',
      1 => 1341291176,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5295312454ff27bc332bf13-57018663',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'web_host' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_4ff27bc3346d0',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4ff27bc3346d0')) {function content_4ff27bc3346d0($_smarty_tpl) {?> <script type="text/javascript" >
function delmsg(msgid){
<?php echo $_smarty_tpl->tpl_vars['web_host']->value;?>

 window.location.reload();
}
 </script>
<?php }} ?>