<?php /* Smarty version Smarty-3.1.6, created on 2012-07-05 20:51:09
         compiled from "application/views/msg/show.tpl" */ ?>
<?php /*%%SmartyHeaderCode:784702204fed5a87e48d18-66767758%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6ba84f77be5750cabc052b0ab2a547bb4751772f' => 
    array (
      0 => 'application/views/msg/show.tpl',
      1 => 1341492334,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '784702204fed5a87e48d18-66767758',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_4fed5a87ec6ec',
  'variables' => 
  array (
    'web_host' => 0,
    'msg' => 0,
    'page_list' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4fed5a87ec6ec')) {function content_4fed5a87ec6ec($_smarty_tpl) {?><script type="text/javascript" >

window.onload= function(){

 resize();

}


function delmsg(msgid){
<?php echo $_smarty_tpl->tpl_vars['web_host']->value;?>
 
 
}
function resize(){

	page_height = $(".main_left_line").height();

	if ($(".sidebar_left").height()<page_height){

		$(".sidebar_left").css("height",$(".main_left_line").height()-1+"px");

	}

	if ($(".right_main").height()<page_height){

		$(".msg_list").css("height",$(".main_left_line").height()+"px");

	}

}





$("document").ready(function(){

    $(".msg_list dd").mouseenter(function(){

		$(this).find(".del_msg").css("visibility","visible");

	});

    $(".msg_list dd").mouseleave(function(){

		$(this).find(".del_msg").css("visibility","hidden");

	});



    $(".follows a").mouseenter(function(){

        $(".follows .gray").css("display","block");

        $(this).css("z-index","999");

        $(this).find("span").css("left","-"+$(this).position().left+"px");

        $(this).find("span").css("display","block");

		if($(this).position().top>150){

        	$(this).find("span").css("top","-35px");

        }

    });

    $(".follows a").mouseleave(function(){

        $(".gray").css("display","none");

        $(this).find("span").css("display","none");

        $(this).css("z-index","0");

    });

})

</script>
</head>
 <body>
 	<div class="right_main">
 		<div class="msg_list clearfix">
 			<div class="menu">
 				<ul>
 					<li><a href="#" class="sel">消息中心</a></li>
 					<li><a href="#">关注的作者</a></li>
 					<li><a href="#">喜欢的发现</a></li>
 					<li><a href="#">喜欢的书</a></li>
 					<li><a href="#">我的作品</a></li>
 				</ul>
 			</div>
 			
 			<div class="my_msg_list">
<?php echo $_smarty_tpl->tpl_vars['msg']->value;?>
 
			</div>
	<?php echo $_smarty_tpl->tpl_vars['page_list']->value;?>

 		</div>
 	</div>
 </div>
 
<?php }} ?>