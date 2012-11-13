<?php /* Smarty version Smarty-3.1.6, created on 2012-07-10 09:26:54
         compiled from "application/views/magazine/magazine.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1056209494ff10a15a0ed46-60036666%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '38b5825aa3381952df2c910b115154e1599ca226' => 
    array (
      0 => 'application/views/magazine/magazine.tpl',
      1 => 1341883610,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1056209494ff10a15a0ed46-60036666',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_4ff10a15f35d8',
  'variables' => 
  array (
    'ad_slot_magtop' => 0,
    'mag_text' => 0,
    'i' => 0,
    'mag_mid' => 0,
    'tour_reader' => 0,
    'foreign' => 0,
    'domestic' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4ff10a15f35d8')) {function content_4ff10a15f35d8($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<script type="text/javascript" src="http://sta.in1001.com/lib/jquery/jquery.cycle.all.js"></script>
<script type="text/javascript" src="/sta/js/gallery.js"></script>
<script type="text/javascript" src="/sta/js/magazine_main.js"></script>
<div class="main">
	<dl class="mag_list m_topic clearfix">
		<dt><strong><span><a href="#">看杂志</a></span></strong></dt>
		<?php echo $_smarty_tpl->getSubTemplate ("magazine/lib/ad-gallery.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('ad_slot'=>$_smarty_tpl->tpl_vars['ad_slot_magtop']->value), 0);?>

		<dd class="info clearfix">
			<ul class="clearfix">
				<li class="text_list">
<?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['mag_text']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['i']->key => $_smarty_tpl->tpl_vars['i']->value){
$_smarty_tpl->tpl_vars['i']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['i']->key;
?>
					<dl class="last">
						<dt>
							<a href="<?php echo $_smarty_tpl->tpl_vars['i']->value['url'];?>
"><?php echo $_smarty_tpl->tpl_vars['i']->value['title'];?>
</a>
						</dt>
						<dd>
							<a href="<?php echo $_smarty_tpl->tpl_vars['i']->value['url'];?>
"><?php echo $_smarty_tpl->tpl_vars['i']->value['text'];?>
</a>
							<a href="<?php echo $_smarty_tpl->tpl_vars['i']->value['url'];?>
" class="readmore">阅读+</a>
						</dd>
					</dl>

<?php } ?>
				</li>
				<li>
					<dl>
		<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['mag_mid']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['item']->key;
?>

						<?php echo $_smarty_tpl->getSubTemplate ("magazine/lib/magcover.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('dd_class'=>"foreign",'dd_style'=>''), 0);?>

		<?php } ?>
					</dl>
				</li>
			</ul>
		
		</dd>
	</dl>
	
	<dl class="mag_list m_index clearfix">
	<dd class="menu">
			<ul>
				<li><a class="sel" id="tour_reader">旅游攻略</a></li>
				<li><a id="foreign">出境游</a></li>
				<li><a id="domestic">国内游</a></li>
			</ul>
		</dd>
		<dt><a href="/mag_list/tour_reader" class="more">More</a></dt>
		<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['tour_reader']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
		<?php echo $_smarty_tpl->getSubTemplate ("magazine/lib/magcover.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('dd_class'=>"tour_reader"), 0);?>

		<?php } ?>
		<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['foreign']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
		<?php echo $_smarty_tpl->getSubTemplate ("magazine/lib/magcover.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('dd_class'=>"foreign",'dd_style'=>"display:none"), 0);?>

		<?php } ?>
		<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['domestic']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
		<?php echo $_smarty_tpl->getSubTemplate ("magazine/lib/magcover.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('dd_class'=>"domestic",'dd_style'=>"display:none"), 0);?>

		<?php } ?>
</dl>

	
</div>
<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ('share.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>