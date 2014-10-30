<!-- $Id: privilege_info.htm 16616 2009-08-27 01:56:35Z liuhui $ -->
<?php echo $this->fetch('pageheader.htm'); ?>
<?php echo $this->smarty_insert_scripts(array('files'=>'../js/region.js')); ?>
<script type="text/javascript">
  region.isAdmin = true;
</script>
<div class="main-div">
<form name="theForm" method="post" enctype="multipart/form-data" onsubmit="return validate();">
<table width="100%">
  <tr>
    <td class="label"><?php echo $this->_var['lang']['user_name']; ?></td>
    <td>
      <input type="text" name="user_name" maxlength="20" value="<?php echo htmlspecialchars($this->_var['user']['user_name']); ?>" size="34"/><?php echo $this->_var['lang']['require_field']; ?></td>
  </tr>
  <tr>
    <td class="label"><?php echo $this->_var['lang']['email']; ?></td>
    <td>
      <input type="text" name="email" value="<?php echo htmlspecialchars($this->_var['user']['email']); ?>" size="34" /><?php echo $this->_var['lang']['require_field']; ?></td>
  </tr>
 <?php if ($this->_var['action'] == "add"): ?>
  <tr>
    <td class="label"><?php echo $this->_var['lang']['password']; ?></td>
    <td>
      <input type="password" name="password" maxlength="32" size="34" /><?php echo $this->_var['lang']['require_field']; ?></td>
  </tr>
  <tr>
    <td class="label"><?php echo $this->_var['lang']['pwd_confirm']; ?></td>
    <td>
      <input type="password" name="pwd_confirm" maxlength="32" size="34" /><?php echo $this->_var['lang']['require_field']; ?></td>
  </tr>
  <?php endif; ?>
  <?php if ($this->_var['action'] != "add"): ?>
  <tr>
    <td class="label">
      <a href="javascript:showNotice('passwordNotic');" title="<?php echo $this->_var['lang']['form_notice']; ?>">
        <img src="images/notice.gif" width="16" height="16" border="0" alt="<?php echo $this->_var['lang']['form_notice']; ?>"></a><?php echo $this->_var['lang']['old_password']; ?></td>
    <td>
      <input type="password" name="old_password" size="34" /><?php echo $this->_var['lang']['require_field']; ?>
      <br /><span class="notice-span" <?php if ($this->_var['help_open']): ?>style="display:block" <?php else: ?> style="display:none" <?php endif; ?> id="passwordNotic"><?php echo $this->_var['lang']['password_notic']; ?></span></td>
  </tr>
  <tr>
    <td class="label"><?php echo $this->_var['lang']['new_password']; ?></td>
    <td>
      <input type="password" name="new_password" maxlength="32" size="34" /><?php echo $this->_var['lang']['require_field']; ?></td>
  </tr>
  <tr>
    <td class="label"><?php echo $this->_var['lang']['pwd_confirm']; ?></td>
    <td>
      <input type="password" name="pwd_confirm" value="" size="34" /><?php echo $this->_var['lang']['require_field']; ?></td>
  </tr>
  <?php if ($this->_var['user']['agency_name']): ?>
  <tr>
    <td class="label"><?php echo $this->_var['lang']['agency']; ?></td>
    <td><?php echo $this->_var['user']['agency_name']; ?></td>
  </tr>
  <?php endif; ?>
  <?php endif; ?>
  
   <?php if ($this->_var['select_role']): ?>
   <tr>
    <td class="label">所在地区:</td>
    <td><select style="display:none" name="country" id="selCountries_0" onchange="region.changed(this, 1, 'selProvinces_0')">
        <option value="0"><?php echo $this->_var['lang']['please_select']; ?><?php echo $this->_var['name_of_region']['0']; ?></option>
        <!-- <?php $_from = $this->_var['country_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'country');if (count($_from)):
    foreach ($_from AS $this->_var['country']):
?> -->
        <option value="<?php echo $this->_var['country']['region_id']; ?>" <?php if ($this->_var['user']['country'] == $this->_var['country']['region_id']): ?>selected<?php endif; ?>><?php echo $this->_var['country']['region_name']; ?></option>
        <!-- <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> -->
      </select>
      <select name="province" id="selProvinces_0" onchange="region.changed(this, 2, 'selCities_0')">
        <option value="0"><?php echo $this->_var['lang']['please_select']; ?><?php echo $this->_var['name_of_region']['1']; ?></option>
        <!-- <?php $_from = $this->_var['province_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'province');if (count($_from)):
    foreach ($_from AS $this->_var['province']):
?> -->
        <option value="<?php echo $this->_var['province']['region_id']; ?>" <?php if ($this->_var['user']['province'] == $this->_var['province']['region_id']): ?>selected<?php endif; ?>><?php echo $this->_var['province']['region_name']; ?></option>
        <!-- <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> -->
      </select>
      <select name="city" id="selCities_0" onchange="region.changed(this, 3, 'selDistricts_0')">
        <option value="0"><?php echo $this->_var['lang']['please_select']; ?><?php echo $this->_var['name_of_region']['2']; ?></option>
        <!-- <?php $_from = $this->_var['city_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'city');if (count($_from)):
    foreach ($_from AS $this->_var['city']):
?> -->
        <option value="<?php echo $this->_var['city']['region_id']; ?>" <?php if ($this->_var['user']['city'] == $this->_var['city']['region_id']): ?>selected<?php endif; ?>><?php echo $this->_var['city']['region_name']; ?></option>
        <!-- <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> -->
      </select>
      <select name="district" id="selDistricts_0" <?php if (! $this->_var['district_list']): ?>style="display:none"<?php endif; ?>>
        <option value="0"><?php echo $this->_var['lang']['please_select']; ?><?php echo $this->_var['name_of_region']['3']; ?></option>
        <!-- <?php $_from = $this->_var['district_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'district');if (count($_from)):
    foreach ($_from AS $this->_var['district']):
?> -->
        <option value="<?php echo $this->_var['district']['region_id']; ?>" <?php if ($this->_var['user']['district'] == $this->_var['district']['region_id']): ?>selected<?php endif; ?>><?php echo $this->_var['district']['region_name']; ?></option>
        <!-- <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> -->
      </select></td>
  </tr>

    <tr>
   <td class="label"><?php echo $this->_var['lang']['select_role']; ?></td>
    <td>
      <select name="select_role">
        <option value=""><?php echo $this->_var['lang']['select_please']; ?></option>
        <?php $_from = $this->_var['select_role']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'list');if (count($_from)):
    foreach ($_from AS $this->_var['list']):
?>
        <option value="<?php echo $this->_var['list']['role_id']; ?>" <?php if ($this->_var['list']['role_id'] == $this->_var['user']['role_id']): ?> selected="selected" <?php endif; ?> ><?php echo $this->_var['list']['role_name']; ?></option>
        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
      </select>
    </td>
  </tr>
    <tr>
    <td class="label">供应商名称:</td>
    <td>
      <input type="text" name="name" value="<?php echo htmlspecialchars($this->_var['user']['name']); ?>" /> </td>
  </tr>
      <tr>
    <td class="label">联系人:</td>
    <td>
      <input type="text" name="uname" value="<?php echo htmlspecialchars($this->_var['user']['uname']); ?>" /> </td>
  </tr>
        <tr>
    <td class="label">联系电话:</td>
    <td>
      <input type="text" name="phone" value="<?php echo htmlspecialchars($this->_var['user']['phone']); ?>" /> </td>
  </tr>
          <tr>
    <td class="label">手机:</td>
    <td>
      <input type="text" name="mobile" value="<?php echo htmlspecialchars($this->_var['user']['mobile']); ?>" /> </td>
  </tr>
  <tr>
    <td class="label">地址:</td>
    <td>
      <input type="text" name="address" value="<?php echo htmlspecialchars($this->_var['user']['address']); ?>" /> </td>
  </tr>
   <tr>
    <td class="label">备注:</td>
    <td>
      <textarea name="info" style="width:400px; height:90px;" ><?php echo $this->_var['user']['info']; ?></textarea> </td>
  </tr>
  <?php endif; ?>
  <?php if ($this->_var['action'] == "modif"): ?>
  <tr>
  <td align="left" class="label"><?php echo $this->_var['lang']['edit_navi']; ?></td>
  <td>
      <table style="width:300px" cellspacing="0">
        <tr>
        <td valign="top">
          <input type="hidden" name="nav_list[]" id="nav_list[]" />
          <select name="menus_navlist" id="menus_navlist" multiple="true" style="width: 120px; height: 180px" onclick="setTimeout('toggleButtonSatus()', 1);">
          <?php echo $this->html_options(array('options'=>$this->_var['nav_arr'])); ?>
          </select></td>
        <td align="center">
         <input type="button" class="button" value="<?php echo $this->_var['lang']['move_up']; ?>" id="btnMoveUp" onclick="moveOptions('up')" disabled="true" />
         <input type="button" class="button" value="<?php echo $this->_var['lang']['move_down']; ?>" id="btnMoveDown" onclick="moveOptions('down')" disabled="true" />
         <input type="button" value="<?php echo $this->_var['lang']['add_nav']; ?>" id="btnAdd" onclick="JavaScript:addItem(theForm.all_menu_list,theForm.menus_navlist); this.disabled=true; " class="button" disabled="true" /><br />
         <input type="button" value="<?php echo $this->_var['lang']['remove_nav']; ?>" onclick="JavaScript:delItem(theForm.menus_navlist); toggleButtonSatus()" class="button" disabled="true" id="btnRemove" /></td>
        <td>
          <select id="all_menu_list" name="all_menu_list" size="15" multiple="true" style="width:150px; height: 180px" onchange="toggleAddButton()">
            <?php $_from = $this->_var['menus']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'menu');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['menu']):
?>
              <?php if ($this->_var['key'] != "admin_home" && $this->_var['menus'][$this->_var['key']]): ?>
              <option value="" style="font-weight:bold;"><?php echo $this->_var['lang'][$this->_var['key']]; ?></option>
              <?php $_from = $this->_var['menus'][$this->_var['key']]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('k', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['k'] => $this->_var['item']):
?>
              <option value="<?php echo $this->_var['item']; ?>">&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $this->_var['lang'][$this->_var['k']]; ?></option>
              <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
              <?php endif; ?>
             <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
           </select></td>
        </tr>
      </table></td>
  </tr>
  <?php endif; ?>
  <tr>
    <td colspan="2" align="center">
      <input type="submit" value="<?php echo $this->_var['lang']['button_submit']; ?>" class="button" />&nbsp;&nbsp;&nbsp;
      <input type="reset" value="<?php echo $this->_var['lang']['button_reset']; ?>" class="button" />
      <input type="hidden" name="act" value="<?php echo $this->_var['form_act']; ?>" />
      <input type="hidden" name="id" value="<?php echo $this->_var['user']['user_id']; ?>" /></td>
  </tr>
</table>
</form>
</div>
<?php echo $this->smarty_insert_scripts(array('files'=>'../js/utils.js,validator.js')); ?>
<script language="JavaScript">
var action = "<?php echo $this->_var['action']; ?>";
<!--

document.forms['theForm'].elements['user_name'].focus();
onload = function()
{
    // 寮�妫�煡璁㈠崟
    startCheckOrder();
}

/**
 * 鍒囨崲澧炲姞鎸夐挳鐨勭姸鎬�
 */
function toggleAddButton()
{
    var sel = document.getElementById("all_menu_list");
    document.getElementById("btnAdd").disabled = (sel.selectedIndex > -1) ? false : true;
}

/**
 * 鍒囨崲绉诲嚭锛屼笂绉伙紝涓嬬Щ鎸夐挳鐘舵�
 */
function toggleButtonSatus()
{
    var sel = document.getElementById("menus_navlist");
    document.getElementById("btnRemove").disabled = (sel.selectedIndex > -1) ? false : true;
    document.getElementById("btnMoveUp").disabled = (sel.selectedIndex > -1) ? false : true;
    document.getElementById("btnMoveDown").disabled = (sel.selectedIndex > -1) ? false : true;
}

/**
 * 绉诲姩閫夊畾鐨勫垪琛ㄩ」
 */
function moveOptions(direction)
{
    var sel = document.getElementById('menus_navlist');
    if (sel.selectedIndex == -1)
    {
        return;
    }

    len = sel.length
    for (i = 0; i < len; i++)
    {
        if (sel.options[i].selected)
        {
            if (i == 0 && direction == 'up')
            {
                return;
            }

            newOpt = sel.options[i].cloneNode(true);

            sel.removeChild(sel.options[i]);
            tarOpt = (direction == "up") ? sel.options[i-1] : sel.options[i+1]
            sel.insertBefore(newOpt, tarOpt);
            newOpt.selected = true;
            break;
        }
    }
}

/**
* 妫�煡琛ㄥ崟杈撳叆鐨勬暟鎹�
*/
function validate()
{
  get_navlist();

  validator = new Validator("theForm");
  validator.password = function (controlId, msg)
  {
    var obj = document.forms[this.formName].elements[controlId];
    obj.value = Utils.trim(obj.value);
    if (!(obj.value.length >= 6 && /\d+/.test(obj.value) && /[a-zA-Z]+/.test(obj.value)))
    {
      this.addErrorMsg(msg);
    }

  }

  validator.required("user_name", user_name_empty);
  validator.required("email", email_empty, 1);
  validator.isEmail("email", email_error);

  if (action == "add")
  {
    if (document.forms['theForm'].elements['password'])
    {
      validator.password("password", password_invaild);
      validator.eqaul("password", "pwd_confirm", password_error);
    }
  }
  if (action == "edit" || action == "modif")
  {
    if (document.forms['theForm'].elements['old_password'].value.length > 0)
    {
      validator.password("new_password", password_invaild);
      validator.eqaul("new_password", "pwd_confirm", password_error);
    }
  }

  return validator.passed();
}

function get_navlist()
{
  if (!document.getElementById('nav_list[]'))
  {
    return;
  }

  document.getElementById('nav_list[]').value = joinItem(document.getElementById('menus_navlist'));
  //alert(document.getElementById('nav_list[]').value);
}
//-->

</script>
<?php echo $this->fetch('pagefooter.htm'); ?>