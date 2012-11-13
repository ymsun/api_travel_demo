<?php /* Smarty version Smarty-3.1.6, created on 2012-07-12 14:24:47
         compiled from "application/views/user/set_share.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8575941864ffe6dafbcb7f4-95108068%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6ec946409abc087f4c622eb290f794527f00d334' => 
    array (
      0 => 'application/views/user/set_share.tpl',
      1 => 1341888108,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8575941864ffe6dafbcb7f4-95108068',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'bindinfo' => 0,
    'item' => 0,
    'unbind' => 0,
    'session_id' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_4ffe6dafd2c88',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4ffe6dafd2c88')) {function content_4ffe6dafd2c88($_smarty_tpl) {?>	<div class="set_main share">
			<h2>绑定分享帐号</h2>
			<dl class="clearfix">
				<dt>已绑定帐号：</dt>
				<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['bindinfo']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
				<dd><a href="javascript:void(0)"><img src="/sta/images/share/<?php echo $_smarty_tpl->tpl_vars['item']->value['snsid'];?>
.gif" alt="新浪微博" /></a><span><input type="checkbox" name="unbundle" id="<?php echo $_smarty_tpl->tpl_vars['item']->value['snsid'];?>
" /><label for="<?php echo $_smarty_tpl->tpl_vars['item']->value['snsid'];?>
">取消同步</label></span></dd>
				<?php } ?>
			</dl>
			
			<dl class="clearfix">
				<dt>未绑定帐号：</dt>
				<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['unbind']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
				<dd><a href="/sns/redirect?snsid=<?php echo $_smarty_tpl->tpl_vars['item']->value;?>
&apptype=web&op=2&session_id=<?php echo $_smarty_tpl->tpl_vars['session_id']->value;?>
"><img src="/sta/images/share/<?php echo $_smarty_tpl->tpl_vars['item']->value;?>
.gif" alt="新浪微博" /></a></dd>				
				<?php } ?>
			</dl>
	</div>
</div>

<script type="text/javascript" >
$("document").ready(function(){
    $(".share dl dd a").click(function(){
		if ( $(this).next().css("display") != "block"){
			$(this).next().css("display","block");
		}else{
			$(this).next().css("display","none");		
		}
	});
	$(".share dl.clearfix dd input[type='checkbox']").change(function(){
		if($(this).attr('checked') && confirm('确认')) {
			$.get(
				'/user/unbind',
				{snsid:$(this).attr('id')},
				function(data){
					if(data.status=='OK') {
						window.location='/user/me/set_share';
					}
				},
				'json'
			);
		}
	});
})
</script>

<?php }} ?>