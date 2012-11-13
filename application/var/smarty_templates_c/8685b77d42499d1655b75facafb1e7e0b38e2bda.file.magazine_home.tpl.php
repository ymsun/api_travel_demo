<?php /* Smarty version Smarty-3.1.6, created on 2012-08-10 18:14:14
         compiled from "application/views/magazine/magazine_home.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13926187234ffb99ed51b785-57859051%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8685b77d42499d1655b75facafb1e7e0b38e2bda' => 
    array (
      0 => 'application/views/magazine/magazine_home.tpl',
      1 => 1343442892,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13926187234ffb99ed51b785-57859051',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_4ffb99ed69ab3',
  'variables' => 
  array (
    'ad_slot_magtop' => 0,
    'mag_text' => 0,
    'i' => 0,
    'mag_mid' => 0,
    'cate_magazines' => 0,
    'mags' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4ffb99ed69ab3')) {function content_4ffb99ed69ab3($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<script type="text/javascript" src="http://sta.in1001.com/lib/jquery/jquery.cycle.all.js"></script>
<script type="text/javascript" src="/sta/js/gallery.js"></script>
<div class="main">
	<dl class="mag_list m_topic clearfix">
		<dt><strong><span><a href="#">爱阅读</a></span></strong></dt>
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
				<?php  $_smarty_tpl->tpl_vars['mags'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['mags']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['cate_magazines']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['mags']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['mags']->key => $_smarty_tpl->tpl_vars['mags']->value){
$_smarty_tpl->tpl_vars['mags']->_loop = true;
 $_smarty_tpl->tpl_vars['mags']->index++;
?>
				<li><a id="<?php echo $_smarty_tpl->tpl_vars['mags']->value['cid'];?>
"<?php if ($_smarty_tpl->tpl_vars['mags']->index==0){?> class="sel"<?php }?>><?php echo $_smarty_tpl->tpl_vars['mags']->value['cname'];?>
</a></li>
				<?php } ?>
			</ul>
		</dd>
		<div class="tabs">
			<?php  $_smarty_tpl->tpl_vars['mags'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['mags']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['cate_magazines']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['mags']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['mags']->key => $_smarty_tpl->tpl_vars['mags']->value){
$_smarty_tpl->tpl_vars['mags']->_loop = true;
 $_smarty_tpl->tpl_vars['mags']->index++;
?>
			<div class="<?php echo $_smarty_tpl->tpl_vars['mags']->value['cid'];?>
"<?php if ($_smarty_tpl->tpl_vars['mags']->index>0){?> style="display: none"<?php }?>>
				<dt><a href="<?php echo $_smarty_tpl->tpl_vars['mags']->value['more_url'];?>
" class="more">More</a></dt>
				<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['mags']->value['items']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
					<?php echo $_smarty_tpl->getSubTemplate ("magazine/lib/magcover.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

				<?php } ?>
			</div>
			<?php } ?>
		</div>
	</dl>
	
</div>
<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ('share.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>