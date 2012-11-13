<?php /* Smarty version Smarty-3.1.6, created on 2012-07-12 09:37:28
         compiled from "application/views/user/element.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17496716724ff6980941c503-74475196%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4755f05a5abf3e0180e15466fb49951f1f461f34' => 
    array (
      0 => 'application/views/user/element.tpl',
      1 => 1341888108,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17496716724ff6980941c503-74475196',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_4ff6980947db3',
  'variables' => 
  array (
    'element' => 0,
    'is_me' => 0,
    'nextpage' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4ff6980947db3')) {function content_4ff6980947db3($_smarty_tpl) {?><div class="right_main">
	<dl class="element_list clearfix">
		<dt style="display:none;"><a href="#" class="sel">全部发现<span>(12)</span></a>　|　<a href="#">发现的美图<span>(12)</span></a>　|　<a href="#">发现的视频<span>(12)</span></a></dt>
		<div id="container">
			<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['element']->value['items']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
			<?php echo $_smarty_tpl->getSubTemplate ("magazine/lib/elemcover.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('cover_show_del'=>$_smarty_tpl->tpl_vars['is_me']->value), 0);?>

			<?php } ?>
		</div>
	</dl>
	<?php if (isset($_smarty_tpl->tpl_vars['nextpage']->value)){?>
	<div id="pagenav" style="display:none">
		<a href="<?php echo $_smarty_tpl->tpl_vars['nextpage']->value;?>
"></a>
	</div>
	<?php }?>
</div>
<script type="text/javascript" src="http://sta.in1001.com/lib/jquery/jquery.masonry.js"></script>
<script type="text/javascript" src="http://sta.in1001.com/lib/jquery/jquery.infinitescroll.js"></script>
<script type="text/javascript" src="/sta/js/element.js"></script>
<?php echo $_smarty_tpl->getSubTemplate ('share.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>