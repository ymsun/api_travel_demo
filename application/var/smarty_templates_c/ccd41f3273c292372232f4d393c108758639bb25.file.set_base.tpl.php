<?php /* Smarty version Smarty-3.1.6, created on 2012-07-12 14:23:18
         compiled from "application/views/user/set_base.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6056894364ffe6d56c71e20-96168235%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ccd41f3273c292372232f4d393c108758639bb25' => 
    array (
      0 => 'application/views/user/set_base.tpl',
      1 => 1341914218,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6056894364ffe6d56c71e20-96168235',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'user_info' => 0,
    'i' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_4ffe6d56d2206',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4ffe6d56d2206')) {function content_4ffe6d56d2206($_smarty_tpl) {?>	<div class="set_main base">
		<h2>填写基本资料</h2>
		<form name="set_base" action="/user/me/set_base" method="post">
			<p><label for="name">昵称：</label><input type="text" id="name" name="nickname" value="" size="25" /></p>
			<p><label for="sex">性别：</label>
				<select id="sex" name="gender">
					<option <?php if (!$_smarty_tpl->tpl_vars['user_info']->value['gender']){?>selected="selected"<?php }?> value="">无</option>
					<option <?php if ($_smarty_tpl->tpl_vars['user_info']->value['gender']=='male'){?>selected="selected"<?php }?> value="male">男</option>
					<option <?php if ($_smarty_tpl->tpl_vars['user_info']->value['gender']=='female'){?>selected="selected"<?php }?> value="female">女</option>
				</select>
			</p>
			<p><label for="bri">生日：</label>
					<?php $_smarty_tpl->tpl_vars['i'] = new Smarty_variable(1970, null, 0);?>
				<select id="bri" name="year">
					<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']["a"])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']["a"]);
$_smarty_tpl->tpl_vars['smarty']->value['section']["a"]['name'] = "a";
$_smarty_tpl->tpl_vars['smarty']->value['section']["a"]['loop'] = is_array($_loop=60) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']["a"]['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']["a"]['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["a"]['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']["a"]['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']["a"]['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["a"]['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']["a"]['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']["a"]['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']["a"]['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["a"]['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']["a"]['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']["a"]['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']["a"]['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']["a"]['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']["a"]['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["a"]['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']["a"]['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']["a"]['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']["a"]['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']["a"]['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']["a"]['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']["a"]['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']["a"]['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["a"]['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']["a"]['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["a"]['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']["a"]['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']["a"]['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["a"]['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']["a"]['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']["a"]['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']["a"]['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']["a"]['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']["a"]['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']["a"]['total']);
?>
					<option selected="selected" value="<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['i']->value++;?>
</option>
					<?php endfor; endif; ?>
				</select>年
				<select name="month">
					<?php $_smarty_tpl->tpl_vars['i'] = new Smarty_variable(1, null, 0);?>
					<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']["a"])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']["a"]);
$_smarty_tpl->tpl_vars['smarty']->value['section']["a"]['name'] = "a";
$_smarty_tpl->tpl_vars['smarty']->value['section']["a"]['loop'] = is_array($_loop=12) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']["a"]['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']["a"]['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["a"]['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']["a"]['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']["a"]['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["a"]['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']["a"]['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']["a"]['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']["a"]['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["a"]['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']["a"]['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']["a"]['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']["a"]['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']["a"]['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']["a"]['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["a"]['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']["a"]['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']["a"]['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']["a"]['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']["a"]['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']["a"]['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']["a"]['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']["a"]['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["a"]['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']["a"]['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["a"]['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']["a"]['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']["a"]['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["a"]['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']["a"]['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']["a"]['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']["a"]['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']["a"]['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']["a"]['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']["a"]['total']);
?>
					<option selected="selected" value="<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['i']->value++;?>
</option>
					<?php endfor; endif; ?>
				</select>月
				<select name="day">
					<?php $_smarty_tpl->tpl_vars['i'] = new Smarty_variable(1, null, 0);?>
					<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']["a"])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']["a"]);
$_smarty_tpl->tpl_vars['smarty']->value['section']["a"]['name'] = "a";
$_smarty_tpl->tpl_vars['smarty']->value['section']["a"]['loop'] = is_array($_loop=31) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']["a"]['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']["a"]['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["a"]['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']["a"]['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']["a"]['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["a"]['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']["a"]['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']["a"]['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']["a"]['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["a"]['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']["a"]['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']["a"]['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']["a"]['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']["a"]['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']["a"]['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["a"]['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']["a"]['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']["a"]['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']["a"]['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']["a"]['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']["a"]['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']["a"]['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']["a"]['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["a"]['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']["a"]['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["a"]['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']["a"]['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']["a"]['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["a"]['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']["a"]['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']["a"]['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']["a"]['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']["a"]['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']["a"]['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']["a"]['total']);
?>
					<option selected="selected" value="<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['i']->value++;?>
</option>
					<?php endfor; endif; ?>
				</select>日
			</p>
<!--
			<p>
				<label>星座：</label><span>射手座</span>
			</p>
-->
			<p>
				<label for="city">所在地：</label>
				<select id="province" name="province"></select>
				<select id="city" name="city"></select>
			</p>
			<input type="hidden" name="true_province" value="">
			<input type="hidden" name="true_city" value="">
			<p>
				<button class="btn_set" type="submit"><span>完成</span></button>
			</p>
		</form>
	</div>

<script src="/sta/js/area.js"></script>	

<script>
	$(function(){
		get_user_info();
	});

	function get_user_info (){
		var $data = {
						url:"/user/get_user_info",
						dataTyle:'json',
						success:function(result){
							$("[name='nickname']").val(result.nickname);
							$("[name='gender']").val(result.gender);
							$("[name='year']").val(result.birthday[0]);
							$("[name='month']").val(result.birthday[1]);
							$("[name='day']").val(result.birthday[2]);
							$.initProv("#province", "#city", result.province, result.city);
						}
					};
		$.ajax($data);
	}
</script>
<script>
	$(function(){
		var pro = $("[name='province']");
		var cty = $("[name='city']");
		pro.change(function(){
			$("[name='true_province']").val($("[name='province'] :selected").text());
		});
		cty.change(function(){
			$("[name='true_city']").val($("[name='city'] :selected").text());
		});
	});

	$(function(){
		$(".btn_set").click(function(){
			var options = {
				dataType : 'json',
				success:    function(result) {
					alert(result);
					get_user_info();
				},
			};
			$('[name="set_base"]').ajaxSubmit(options);
			return false;
		});
	});
</script>

<?php }} ?>