
<div class="consignee_title">请选择收货方式：</div>
<div class="consignee_type">
	<ul>
		<li <?php if ($this->_var['shouhuo_type'] == 1): ?>class="cur"<?php endif; ?> shouhuo_type="1" id="daigou">代购</li>
		<li class="line"><b></b></li>
		<li <?php if ($this->_var['shouhuo_type'] == 2): ?>class="cur"<?php endif; ?> shouhuo_type="2" id="daishouhuo">代收货</li>
		<li class="line"><b></b></li>
		<li <?php if ($this->_var['shouhuo_type'] == 3): ?> class="cur"<?php endif; ?> shouhuo_type="3" id="shangmen">送货上门</li>
	</ul>
	<div class="cl"></div>
</div>
<div class="consignee_box">
	<div><img src="themes/default/images/zitidian.jpg" /></div>
	
	<div class="daigou_box" id="daigou_box" <?php if ($this->_var['shouhuo_type'] != 1): ?> style="display:none" <?php endif; ?>>
		<table width="99%" align="center" border="0" cellpadding="5" cellspacing="1" >
		<tr><td height="30">请输入代购帐号：</td><td></td></tr>
		<tr><td colspan="2"><input type="text" name="daigou_username" id="daigou_username" class="daigou_username" value="<?php if ($this->_var['daigou_username'] != ''): ?><?php echo $this->_var['daigou_username']; ?><?php endif; ?>" /> </td></tr>
		<tr><td height="30">请填写取货人：</td><td></td></tr>
		<tr><td align="left" height="30" colspan="2">姓名：<input type="text" name="gquhuo_name" id="gquhuo_name" value="<?php echo $this->_var['gquhuo_name']; ?>" /> 手机号：<input type="text" name="gquhuo_tel" id="gquhuo_tel" value="<?php echo $this->_var['gquhuo_name']; ?>" /></td></tr>
		<tr><td height="30">请选择取货方式：</td><td></td></tr>
		<tr><td align="left" height="30" colspan="2">
			<select name="gquhuo_fangshi"  style="width:80px;">
				<option value="1" <?php if ($this->_var['gquhuo_fangshi'] == 1): ?> selected<?php endif; ?>>自提</option>
				<option value="2" <?php if ($this->_var['gquhuo_fangshi'] == 1): ?> selected<?php endif; ?>>送货</option>
			</select>
		</td></tr>
		
		<tr><td width="150"></td><td><input id="daigou_submit" type="button" name="daigou_submit" value="确定" class="btn_submit" /></td></tr>
		</table>
	</div>
	<div class="daishouhuo_box" id="daishouhuo_box" <?php if ($this->_var['shouhuo_type'] != 2): ?> style="display:none" <?php endif; ?>>
		<table width="99%" align="center" border="0" cellpadding="5" cellspacing="1" >
		<tr><td height="30">请选择代收点：</td><td></td></tr>
		<tr><td colspan="2"> 
		<select name="province2" id="selProvinces_100" onchange="region.changed(this, 2, 'selCities_100')" style="border:1px solid #ccc;">
        <option value="0"><?php echo $this->_var['lang']['please_select']; ?><?php echo $this->_var['name_of_region']['1']; ?></option>
        <?php $_from = $this->_var['province_list']['100']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'province');if (count($_from)):
    foreach ($_from AS $this->_var['province']):
?>
        <option value="<?php echo $this->_var['province']['region_id']; ?>" <?php if ($this->_var['dai_consignee']['province'] == $this->_var['province']['region_id']): ?>selected<?php endif; ?>><?php echo $this->_var['province']['region_name']; ?></option>
        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
      </select>
      <select name="city2" id="selCities_100" onchange="region.changed(this, 3, 'selDistricts_100');get_daishou()" style="border:1px solid #ccc;">
        <option value="0"><?php echo $this->_var['lang']['please_select']; ?><?php echo $this->_var['name_of_region']['2']; ?></option>
        <?php $_from = $this->_var['city_list']['100']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'city');if (count($_from)):
    foreach ($_from AS $this->_var['city']):
?>
        <option value="<?php echo $this->_var['city']['region_id']; ?>" <?php if ($this->_var['dai_consignee']['city'] == $this->_var['city']['region_id']): ?>selected<?php endif; ?>><?php echo $this->_var['city']['region_name']; ?></option>
        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
      </select>
      <select name="district2" id="selDistricts_100" onchange="get_daishou()" <?php if (! $this->_var['district_list']['100']): ?>style="display:none"<?php endif; ?> style="border:1px solid #ccc;">
        <option value="0"><?php echo $this->_var['lang']['please_select']; ?><?php echo $this->_var['name_of_region']['3']; ?></option>
        <?php $_from = $this->_var['district_list']['100']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'district');if (count($_from)):
    foreach ($_from AS $this->_var['district']):
?>
        <option value="<?php echo $this->_var['district']['region_id']; ?>" <?php if ($this->_var['dai_consignee']['district'] == $this->_var['district']['region_id']): ?>selected<?php endif; ?>><?php echo $this->_var['district']['region_name']; ?></option>
        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
      </select>
	  <select name="daishou_list" id="daishou_list"  style="border:1px solid #ccc;">
		<option value="0" >选择代收点</option>
		<?php $_from = $this->_var['daishou_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'daishou');if (count($_from)):
    foreach ($_from AS $this->_var['daishou']):
?>
		<option value="<?php echo $this->_var['daishou']['user_id']; ?>" <?php if ($this->_var['daishou_id'] == $this->_var['daishou']['user_id']): ?>selected<?php endif; ?>><?php echo $this->_var['daishou']['name']; ?></option>
		<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
	  </select>
		</td></tr>
		<tr><td height="30">请填写取货人：</td><td></td></tr>
		<tr><td align="left" height="30" colspan="2">姓名：<input type="text" name="squhuo_name" id="squhuo_name" value="<?php echo $this->_var['squhuo_name']; ?>" /> 手机号：<input type="text" name="squhuo_tel" id="squhuo_tel" value="<?php echo $this->_var['squhuo_tel']; ?>" /></td><td>收货人地址：<input type="text" name="receiveaddres" id="receiveaddres" value="<?php echo $this->_var['receiveaddres']; ?>" /></td><td>最佳收货时间：<input type="text" name="sendTime" id="sendTime" value="<?php echo $this->_var['sendTime']; ?>" /></td></tr>
		<tr><td align="left" height="30" colspan="2">
			<select name="squhuo_fangshi" style="width:80px;">
				<option value="1" <?php if ($this->_var['squhuo_fangshi'] == 1): ?> selected<?php endif; ?>>自提</option>
				<option value="2" <?php if ($this->_var['squhuo_fangshi'] == 2): ?> selected<?php endif; ?>>送货</option>
			</select>
		</td></tr>
		<tr><td width="150"></td><td><input id="daishou_submit" type="button" name="daishou_submit" value="确定" class="btn_submit" /></td></tr>
		</table>
	</div>

<div class="flowBox mtop10" id="shangmen_box" <?php if ($this->_var['shouhuo_type'] != 3): ?> style="display:none;" <?php endif; ?>>
<h6><span><?php echo $this->_var['lang']['consignee_info']; ?></span></h6>
<?php echo $this->smarty_insert_scripts(array('files'=>'utils.js,transport.js')); ?>
<table width="99%" align="center" border="0" cellpadding="5" cellspacing="1" bgcolor="#dddddd">
  <?php if ($this->_var['real_goods_count'] > 0): ?>
  
  <tr>
    <td bgcolor="#ffffff"><?php echo $this->_var['lang']['country_province']; ?>:</td>
    <td colspan="3" bgcolor="#ffffff">
    <select name="country" id="selCountries_<?php echo $this->_var['sn']; ?>" onchange="region.changed(this, 1, 'selProvinces_<?php echo $this->_var['sn']; ?>')" style="border:1px solid #ccc; display:none;">
        <option value="0"><?php echo $this->_var['lang']['please_select']; ?><?php echo $this->_var['name_of_region']['0']; ?></option>
        <?php $_from = $this->_var['country_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'country');if (count($_from)):
    foreach ($_from AS $this->_var['country']):
?>
        <option value="<?php echo $this->_var['country']['region_id']; ?>" <?php if ($this->_var['consignee']['country'] == $this->_var['country']['region_id']): ?>selected<?php endif; ?>><?php echo $this->_var['country']['region_name']; ?></option>
        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
      </select>
      <select name="province" id="selProvinces_<?php echo $this->_var['sn']; ?>" onchange="region.changed(this, 2, 'selCities_<?php echo $this->_var['sn']; ?>')" style="border:1px solid #ccc;">
        <option value="0"><?php echo $this->_var['lang']['please_select']; ?><?php echo $this->_var['name_of_region']['1']; ?></option>
        <?php $_from = $this->_var['province_list'][$this->_var['sn']]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'province');if (count($_from)):
    foreach ($_from AS $this->_var['province']):
?>
        <option value="<?php echo $this->_var['province']['region_id']; ?>" <?php if ($this->_var['consignee']['province'] == $this->_var['province']['region_id']): ?>selected<?php endif; ?>><?php echo $this->_var['province']['region_name']; ?></option>
        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
      </select>
      <select name="city" id="selCities_<?php echo $this->_var['sn']; ?>" onchange="region.changed(this, 3, 'selDistricts_<?php echo $this->_var['sn']; ?>')" style="border:1px solid #ccc;">
        <option value="0"><?php echo $this->_var['lang']['please_select']; ?><?php echo $this->_var['name_of_region']['2']; ?></option>
        <?php $_from = $this->_var['city_list'][$this->_var['sn']]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'city');if (count($_from)):
    foreach ($_from AS $this->_var['city']):
?>
        <option value="<?php echo $this->_var['city']['region_id']; ?>" <?php if ($this->_var['consignee']['city'] == $this->_var['city']['region_id']): ?>selected<?php endif; ?>><?php echo $this->_var['city']['region_name']; ?></option>
        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
      </select>
      <select name="district" id="selDistricts_<?php echo $this->_var['sn']; ?>" <?php if (! $this->_var['district_list'][$this->_var['sn']]): ?>style="display:none"<?php endif; ?> style="border:1px solid #ccc;">
        <option value="0"><?php echo $this->_var['lang']['please_select']; ?><?php echo $this->_var['name_of_region']['3']; ?></option>
        <?php $_from = $this->_var['district_list'][$this->_var['sn']]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'district');if (count($_from)):
    foreach ($_from AS $this->_var['district']):
?>
        <option value="<?php echo $this->_var['district']['region_id']; ?>" <?php if ($this->_var['consignee']['district'] == $this->_var['district']['region_id']): ?>selected<?php endif; ?>><?php echo $this->_var['district']['region_name']; ?></option>
        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
      </select>
    <?php echo $this->_var['lang']['require_field']; ?> </td>
  </tr>
  <?php endif; ?>
  <tr>
    <td bgcolor="#ffffff"><?php echo $this->_var['lang']['consignee_name']; ?>:</td>
    <td bgcolor="#ffffff"><input name="consignee" type="text" class="inputBg" id="consignee_<?php echo $this->_var['sn']; ?>" value="<?php echo htmlspecialchars($this->_var['consignee']['consignee']); ?>" />
    <?php echo $this->_var['lang']['require_field']; ?> </td>
    <td bgcolor="#ffffff"><?php echo $this->_var['lang']['email_address']; ?>:</td>
    <td bgcolor="#ffffff"><input name="email" type="text" class="inputBg"  id="email_<?php echo $this->_var['sn']; ?>" value="<?php echo htmlspecialchars($this->_var['consignee']['email']); ?>" />
    <?php echo $this->_var['lang']['require_field']; ?></td>
  </tr>
  <?php if ($this->_var['real_goods_count'] > 0): ?>
  
  <tr>
    <td bgcolor="#ffffff"><?php echo $this->_var['lang']['detailed_address']; ?>:</td>
    <td bgcolor="#ffffff"><input name="address" type="text" class="inputBg"  id="address_<?php echo $this->_var['sn']; ?>" value="<?php echo htmlspecialchars($this->_var['consignee']['address']); ?>" />
    <?php echo $this->_var['lang']['require_field']; ?></td>
    <td bgcolor="#ffffff"><?php echo $this->_var['lang']['postalcode']; ?>:</td>
    <td bgcolor="#ffffff"><input name="zipcode" type="text" class="inputBg"  id="zipcode_<?php echo $this->_var['sn']; ?>" value="<?php echo htmlspecialchars($this->_var['consignee']['zipcode']); ?>" /></td>
  </tr>
  <?php endif; ?>
  <tr>
    <td bgcolor="#ffffff"><?php echo $this->_var['lang']['phone']; ?>:</td>
    <td bgcolor="#ffffff"><input name="tel" type="text" class="inputBg"  id="tel_<?php echo $this->_var['sn']; ?>" value="<?php echo htmlspecialchars($this->_var['consignee']['tel']); ?>" />
    <?php echo $this->_var['lang']['require_field']; ?></td>
    <td bgcolor="#ffffff"><?php echo $this->_var['lang']['backup_phone']; ?>:</td>
    <td bgcolor="#ffffff"><input name="mobile" type="text" class="inputBg"  id="mobile_<?php echo $this->_var['sn']; ?>" value="<?php echo htmlspecialchars($this->_var['consignee']['mobile']); ?>" /></td>
  </tr>
  <?php if ($this->_var['real_goods_count'] > 0): ?>
  
  <tr>
    <td bgcolor="#ffffff"><?php echo $this->_var['lang']['sign_building']; ?>:</td>
    <td bgcolor="#ffffff"><input name="sign_building" type="text" class="inputBg"  id="sign_building_<?php echo $this->_var['sn']; ?>" value="<?php echo htmlspecialchars($this->_var['consignee']['sign_building']); ?>" /></td>
    <td bgcolor="#ffffff"><?php echo $this->_var['lang']['deliver_goods_time']; ?>:</td>
    <td bgcolor="#ffffff"><input name="best_time" type="text"  class="inputBg" id="best_time_<?php echo $this->_var['sn']; ?>" value="<?php echo htmlspecialchars($this->_var['consignee']['best_time']); ?>" /></td>
  </tr>
  <?php endif; ?>
  <tr>
    <td colspan="4" align="center" bgcolor="#ffffff">
    <input type="submit" name="Submit" id="Submit" class="bnt_blue_2" value="<?php echo $this->_var['lang']['shipping_address']; ?>" />
      <?php if ($_SESSION['user_id'] > 0 && $this->_var['consignee']['address_id'] > 0 && 1 == 0): ?>
      
      <input name="button" type="button" onclick="if (confirm('<?php echo $this->_var['lang']['drop_consignee_confirm']; ?>')) location.href='flow.php?step=drop_consignee&amp;id=<?php echo $this->_var['consignee']['address_id']; ?>'"  class="bnt_blue" value="<?php echo $this->_var['lang']['drop']; ?>" />
      <?php endif; ?>
      <input type="hidden" name="step" value="consignee" />
	  <input type="hidden" name="daigou_id" id="daigou_id" value="<?php echo $this->_var['daigou_id']; ?>" />
	  <input type="hidden" name="daishou_id" id="daishou_id" value="<?php echo $this->_var['daishou_id']; ?>" />
      <input type="hidden" name="act" value="checkout" />
      <input name="address_id" type="hidden" value="<?php echo $this->_var['consignee']['address_id']; ?>" />
	  <input type="hidden" name="shouhuo_type" id="shouhuo_type" value="<?php echo $this->_var['shouhuo_type']; ?>" />
      </td>
  </tr>
</table>
</div>
</div>
<?php echo $this->smarty_insert_scripts(array('files'=>'jquery.1.9.js')); ?>
<script>
jQuery(function(){
	jQuery('.consignee_type ul li').click(function(){
		jQuery('.consignee_type ul li').removeClass('cur');
		jQuery(this).addClass('cur');
		var id = jQuery(this).attr('id');
		var shouhuo_type = jQuery(this).attr('shouhuo_type');
		jQuery('#daigou_box').hide();
		jQuery('#daishouhuo_box').hide();
		jQuery('#shangmen_box').hide();
		jQuery('#daigou_id').val(0);
		jQuery('#'+id+'_box').show();
		jQuery('#shouhuo_type').val(shouhuo_type);
	});
	jQuery('#daigou_username').focus(function(){
		if( jQuery(this).val() == '请输入代购帐号') {
			jQuery(this).val('');
		}
	});
	jQuery('#daigou_submit').click(function(){
		var username = jQuery('#daigou_username').val();
		if(username == '请输入代购帐号' || username == '' ) {
			alert('请输入代购帐号');
			return false;
		}
		var gquhuo_name = $('#gquhuo_name').val();
		var gquhuo_tel = $('#gquhuo_tel').val();
		if( gquhuo_name == '' ){
			alert('请填写取货人姓名');
			return false;
		}
		if( gquhuo_tel == ''){
			alert('请填写取货人手机号');
			return false;
		}
		
		Ajax.call('flow.php?step=getuser', 'username='+username, daiGouUser, 'GET', 'JSON');

	});
	
	jQuery('#daishou_submit').click(function(){
		var daishou_id = parseInt(jQuery('#daishou_list').val(),10);
		if( isNaN(daishou_id) ) {
			daishou_id = 0;
		}
		if( daishou_id == 0) {
			alert('请选择代收点');
			return false;
		}
		var squhuo_name = $('#squhuo_name').val();
		var squhuo_tel = $('#squhuo_tel').val();
		var receiveaddres = $('#receiveaddres').val();
		var sendTime = $('#sendTime').val();
		if( squhuo_name == '' ){
			alert('请填写取货人姓名');
			return false;
		}
		if( squhuo_tel == ''){
			alert('请填写取货人手机号');
			return false;
		}
		jQuery('#daishou_id').val(daishou_id);
		jQuery('#theForm').submit();
	});
	
	
});

function daiGouUser(res){
	if( res.count < 1 ) {
		alert(res.info);
	} else {
		jQuery('#daigou_id').val(res.user_id);
		jQuery('#theForm').submit();
	}
}

function get_daishou() {
	
	var province = parseInt(jQuery('#selProvinces_100').val(),10);
	if(isNaN(province)) {
		province = 0;
	}
	var city = parseInt(jQuery('#selCities_100').val(),10);
	if( isNaN(city)) {
		city = 0;
	}
	var district = parseInt(jQuery('#selDistricts_100').val(),10);
	if( isNaN(district)) {
		district = 0;
	}
	Ajax.call('flow.php?step=getdaiuser', 'province=' + province + '&city='+city+'&district='+district, daiShouOption, 'GET', 'JSON');
}
function daiShouOption(res){
	jQuery('#daishou_list').empty();
	var option = '<option value="0">选择代收点</option>';
	if( res.error == 0 ) {
			jQuery.each(res.lists,function(k, val) {
				option += '<option value="'+val.user_id+'" >'+val.name+'</option>';
			});
			
		}
		jQuery('#daishou_list').append(option);
}
</script>