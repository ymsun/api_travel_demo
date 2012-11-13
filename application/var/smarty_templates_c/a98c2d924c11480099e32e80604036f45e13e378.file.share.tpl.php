<?php /* Smarty version Smarty-3.1.6, created on 2012-07-23 15:18:22
         compiled from "application/views/share.tpl" */ ?>
<?php /*%%SmartyHeaderCode:571879144fed90cdcb37b9-25076379%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a98c2d924c11480099e32e80604036f45e13e378' => 
    array (
      0 => 'application/views/share.tpl',
      1 => 1343021651,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '571879144fed90cdcb37b9-25076379',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_4fed90cdcc5fd',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4fed90cdcc5fd')) {function content_4fed90cdcc5fd($_smarty_tpl) {?><!-- Baidu Button BEGIN -->

    <div id="bdshare" class="bdshare_t bds_tools get-codes-bdshare" style="display:none;">
        <a class="bds_tsina"></a>
        <a class="bds_renren"></a>
        <a class="bds_tqq"></a>
        <a class="bds_douban"></a>
        <a class="bds_hi"></a>
        <a class="bds_kaixin001"></a>
        <!--<span class="bds_more">更多</span>-->
    </div>
<script type="text/javascript" id="bdshare_js" data="type=tools&amp;mini=1" ></script>
<script type="text/javascript" id="bdshell_js"></script>
<script type="text/javascript">
	var bds_config = {
		'bdDes':'',
		'bdText':'',
		'bdPopTitle':'',
		'bdPic':'',
		'searchPic':0, //'0为抓取，1为不抓取，默认为0，目前只针对新浪微博',
		'review':'normal'
	}
	document.getElementById("bdshell_js").src = "http://bdimg.share.baidu.com/static/js/shell_v2.js?cdnversion=" + new Date().getHours();
</script>

<!-- Baidu Button END -->
<?php }} ?>