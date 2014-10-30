<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="Generator" content="ECSHOP v2.7.3" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="Keywords" content="<?php echo $this->_var['keywords']; ?>" />
<meta name="Description" content="<?php echo $this->_var['description']; ?>" />

<title><?php echo $this->_var['page_title']; ?></title>

<link rel="shortcut icon" href="favicon.ico" />
<link rel="icon" href="animated_favicon.gif" type="image/gif" />
<link href="<?php echo $this->_var['ecs_css_path']; ?>" rel="stylesheet" type="text/css" />


<?php echo $this->smarty_insert_scripts(array('files'=>'common.js,lefttime.js')); ?>
<script type="text/javascript">
  <?php $_from = $this->_var['lang']['js_languages']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?>
    var <?php echo $this->_var['key']; ?> = "<?php echo $this->_var['item']; ?>";
  <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
</script>
</head>
<body>
<?php echo $this->fetch('library/page_header.lbi'); ?>
<div class="goods_border"></div>
<div class="goodspagebox">
	<div class="ur_here">
	<?php echo $this->fetch('library/ur_here.lbi'); ?>
	</div>
	<div class="goods-imgbox">
    	<div class="imginfo">
    	 <?php if ($this->_var['pictures']): ?>
	     <a href="javascript:;" onclick="window.open('gallery.php?id=<?php echo $this->_var['gb_goods']['goods_id']; ?>'); return false;">
	      <img src="<?php echo $this->_var['gb_goods']['goods_img']; ?>" alt="<?php echo htmlspecialchars($this->_var['gb_goods']['goods_name']); ?>" width="443" height="330"/>
	     </a>
         <?php else: ?>
         <img src="<?php echo $this->_var['gb_goods']['goods_img']; ?>" alt="<?php echo htmlspecialchars($this->_var['gb_goods']['goods_name']); ?>" width="443" height="330"/>
         <?php endif; ?>
    	</div>
        
        
        <div class="imgbox">
		     
		     <?php echo $this->fetch('library/goods_gallery.lbi'); ?>
		     
        	 
            <div class="cl"></div>
        </div>
    </div>
    <div class="goods-infobox">
    	<form action="javascript:addToCart(<?php echo $this->_var['gb_goods']['goods_id']; ?>)" method="post" name="ECS_FORMBUY" id="ECS_FORMBUY" >
    	<div class="goods-title"><?php echo htmlspecialchars($this->_var['gb_goods']['goods_name']); ?></div>
        <div class="goods-price"><?php echo $this->_var['lang']['act_time']; ?>：<?php echo $this->_var['group_buy']['formated_start_date']; ?> -- <?php echo $this->_var['group_buy']['formated_end_date']; ?></div>
		<table width="100%" border="0" cellpadding="5" cellspacing="1" >
       <tr>
          <th width="29%" ><?php echo $this->_var['lang']['gb_ladder_amount']; ?></th>
         <th width="71%" ><?php echo $this->_var['lang']['gb_ladder_price']; ?></th>
        </tr>
        <?php $_from = $this->_var['group_buy']['price_ladder']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['item']):
?>
        <tr>
          <td width="29%" align="center" ><?php echo $this->_var['item']['amount']; ?></td>
         <td width="71%" align="center" ><?php echo $this->_var['item']['formated_price']; ?></td>
        </tr>
        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
      </table>
	  
        <table>

			<tr>
				<td colspan="2" height="30"><?php if ($this->_var['group_buy']['status'] == 0): ?>
      <?php echo $this->_var['lang']['gbs_pre_start']; ?>
      <?php elseif ($this->_var['group_buy']['status'] == 1): ?>
      <font class="f4"><?php echo $this->_var['lang']['gbs_under_way']; ?>
      <span id="leftTime"><?php echo $this->_var['lang']['please_waiting']; ?></span></font><br />
      <?php echo $this->_var['lang']['gb_cur_price']; ?> <?php echo $this->_var['group_buy']['formated_cur_price']; ?><br />
      <?php echo $this->_var['lang']['gb_valid_goods']; ?> <?php echo $this->_var['group_buy']['valid_goods']; ?><br />
      <?php elseif ($this->_var['group_buy']['status'] == 2): ?>
      <?php echo $this->_var['lang']['gbs_finished']; ?> <?php echo $this->_var['lang']['gb_cur_price']; ?> <?php echo $this->_var['group_buy']['formated_cur_price']; ?> <?php echo $this->_var['lang']['gb_valid_goods']; ?> <?php echo $this->_var['group_buy']['valid_goods']; ?>
      <?php elseif ($this->_var['group_buy']['status'] == 3): ?>
      <?php echo $this->_var['lang']['gbs_succeed']; ?>
      <?php echo $this->_var['lang']['gb_final_price']; ?> <?php echo $this->_var['group_buy']['formated_trans_price']; ?><br />
      <?php echo $this->_var['lang']['gb_final_amount']; ?> <?php echo $this->_var['group_buy']['trans_amount']; ?>
      <?php elseif ($this->_var['group_buy']['status'] == 4): ?>
      <?php echo $this->_var['lang']['gbs_fail']; ?>
      <?php endif; ?></td>
            </tr>
            <tr>
            	<td>购买数量：
				<input name="number" type="text" class="buy-num" id="number" value="1" size="4" />
                <input type="hidden" name="group_buy_id" value="<?php echo $this->_var['group_buy']['group_buy_id']; ?>" />
				</td>
            	<td> 
            	<?php if ($this->_var['group_buy']['goods_number'] != "" && $this->_var['cfg']['show_goodsnumber']): ?>
        <?php if ($this->_var['group_buy']['goods_number'] == 0): ?>
          	库存： 
          <font color='red'><?php echo $this->_var['lang']['stock_up']; ?></font>
        <?php else: ?>
          <strong><?php echo $this->_var['lang']['goods_number']; ?></strong>
          <?php echo $this->_var['group_buy']['goods_number']; ?> <?php echo $this->_var['group_buy']['measure_unit']; ?>
        <?php endif; ?>
      <?php endif; ?>
            	</td>
            </tr>
        </table> 
		
        <table width="100%" border="0" cellpadding="5" cellspacing="1" >
		<tr><td colspan="2"><b>商品属性：</b></td></tr>
              <?php $_from = $this->_var['specification']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('spec_key', 'spec');if (count($_from)):
    foreach ($_from AS $this->_var['spec_key'] => $this->_var['spec']):
?>
              <tr>
                <td width="22%" ><?php echo $this->_var['spec']['name']; ?></td>
                <td width="78%" >
                    <?php if ($this->_var['cfg']['goodsattr_style'] == 1): ?>
                    <?php $_from = $this->_var['spec']['values']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'value');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['value']):
?>
                    <label for="spec_value_<?php echo $this->_var['value']['id']; ?>">
                    <input type="radio" name="spec_<?php echo $this->_var['spec_key']; ?>" value="<?php echo $this->_var['value']['id']; ?>" id="spec_value_<?php echo $this->_var['value']['id']; ?>" <?php if ($this->_var['key'] == 0): ?>checked<?php endif; ?> />
                    <?php echo $this->_var['value']['label']; ?> </label>
                    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                  <?php else: ?>
                    <select name="spec_<?php echo $this->_var['spec_key']; ?>" style="border:1px solid #ccc;">
                    <?php $_from = $this->_var['spec']['values']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'value');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['value']):
?>
                    <option label="<?php echo $this->_var['value']['label']; ?>" value="<?php echo $this->_var['value']['id']; ?>"><?php echo $this->_var['value']['label']; ?> </option>
                    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                    </select>
                  <?php endif; ?>
                </td>
              </tr>
              <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
      </table>
        <div class="goods-btn">
        	<a href="javascript:addToBuy(<?php echo $this->_var['group_buy']['goods_id']; ?>)"><img src="themes/default/images/new/goods-buynow.jpg" /></a> <a href="javascript:addToCart(<?php echo $this->_var['group_buy']['goods_id']; ?>)"><img src="themes/default/images/new/putcart.jpg" /></a>
        </div>
        </form>
    </div>
    <div class="cl"></div>
    
    <div class="goods-ititle">
    	<ul id="com_b"><li class="now">团购介绍</li></ul>
    </div>
    <div class="padd10">
	<?php echo $this->_var['group_buy']['group_buy_desc']; ?>
	</div>
   
</div>
<div class="border3"></div>

<?php echo $this->fetch('library/page_footer.lbi'); ?>
</body>
<script type="text/javascript">
var gmt_end_time = "<?php echo empty($this->_var['group_buy']['gmt_end_date']) ? '0' : $this->_var['group_buy']['gmt_end_date']; ?>";
<?php $_from = $this->_var['lang']['goods_js']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?>
var <?php echo $this->_var['key']; ?> = "<?php echo $this->_var['item']; ?>";
<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
var now_time = <?php echo $this->_var['now_time']; ?>;


onload = function()
{
  try
  {
    onload_leftTime();
  }
  catch (e)
  {}
}

</script>
</html>
