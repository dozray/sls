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

<?php echo $this->smarty_insert_scripts(array('files'=>'common.js,transport.js')); ?>
<script type="text/javascript">
function $id(element) {
  return document.getElementById(element);
}
//切屏--是按钮，_v是内容平台，_h是内容库
function reg(str){
  var bt=$id(str+"_b").getElementsByTagName("h2");
  for(var i=0;i<bt.length;i++){
    bt[i].subj=str;
    bt[i].pai=i;
    bt[i].style.cursor="pointer";
    bt[i].onclick=function(){
      $id(this.subj+"_v").innerHTML=$id(this.subj+"_h").getElementsByTagName("blockquote")[this.pai].innerHTML;
      for(var j=0;j<$id(this.subj+"_b").getElementsByTagName("h2").length;j++){
        var _bt=$id(this.subj+"_b").getElementsByTagName("h2")[j];
        var ison=j==this.pai;
        _bt.className=(ison?"":"h2bg");
      }
    }
  }
  $id(str+"_h").className="none";
  $id(str+"_v").innerHTML=$id(str+"_h").getElementsByTagName("blockquote")[0].innerHTML;
}

</script>
</head>
<body>
<?php echo $this->fetch('library/page_header.lbi'); ?>
 
<div class="goodspagebox">
	<div class="ur_here">
	<?php echo $this->fetch('library/ur_here.lbi'); ?>
	</div>
	
	
	<div class="goods-imgbox">
    	<div class="imginfo">
    	 <?php if ($this->_var['pictures']): ?>
	     <a href="javascript:;" onclick="window.open('gallery.php?id=<?php echo $this->_var['goods']['goods_id']; ?>'); return false;">
	      <img src="<?php echo $this->_var['goods']['goods_img']; ?>" alt="<?php echo htmlspecialchars($this->_var['goods']['goods_name']); ?>" width="360" height="360"/>
	     </a>
         <?php else: ?>
         <img src="<?php echo $this->_var['goods']['goods_img']; ?>" alt="<?php echo htmlspecialchars($this->_var['goods']['goods_name']); ?>" width="360" height="360"/>
         <?php endif; ?>
    	</div>
        
        
        <div class="imgbox">
		     
		     <?php echo $this->fetch('library/goods_gallery.lbi'); ?>
		     
        	 
            <div class="cl"></div>
        </div>
    </div>
    <div class="goods-infobox">
    	<form action="javascript:addToCart(<?php echo $this->_var['goods']['goods_id']; ?>)" method="post" name="ECS_FORMBUY" id="ECS_FORMBUY" >
    	<div class="goods-title"><?php echo $this->_var['goods']['goods_style_name']; ?></div>
        <div class="goods-price">
        <?php if ($this->_var['goods']['is_promote'] && $this->_var['goods']['gmt_end_time']): ?>
      	<?php echo $this->smarty_insert_scripts(array('files'=>'lefttime.js')); ?>

        <span class="old-price"><?php echo $this->_var['goods']['shop_price_formated']; ?></span>
        <span class="cu-price">促 <?php echo $this->_var['goods']['promote_price']; ?>元</span>
        <span class="cu-time">剩余时间： <span id="leftTime"><?php echo $this->_var['lang']['please_waiting']; ?></span></span>
        
        <?php else: ?>
        <?php echo $this->_var['goods']['shop_price_formated']; ?>
        <?php endif; ?>
        </div>
        <table>
        
            <?php if ($this->_var['volume_price_list']): ?>
            <tr>
            	<td colspan="2"><?php echo $this->_var['lang']['volume_price']; ?>：</td>
            </tr>
             <tr>
            	<td><?php echo $this->_var['lang']['number_to']; ?></td><td><?php echo $this->_var['lang']['preferences_price']; ?></td>
            </tr>
            <?php $_from = $this->_var['volume_price_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('price_key', 'price_list');if (count($_from)):
    foreach ($_from AS $this->_var['price_key'] => $this->_var['price_list']):
?>
            <tr>
            	<td><?php echo $this->_var['price_list']['number']; ?></td><td><?php echo $this->_var['price_list']['format_price']; ?></td>
            </tr>

        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
      <?php endif; ?>
      		<?php if ($this->_var['goods']['guige']): ?>
      		<tr>
            	<td >规格： <?php echo $this->_var['goods']['guige']; ?></td><td  ></td>
            </tr>
      		<?php endif; ?>
      		<?php if ($this->_var['goods']['chandi']): ?>
      		<tr>
            	<td >产地： <?php echo $this->_var['goods']['chandi']; ?></td><td  ></td>
            </tr>
      		<?php endif; ?>
            <tr>
            	<td></td> <td></td>
            </tr>
            <tr>
            	<td>购买数量： <input name="number" max_number="<?php echo $this->_var['goods']['max_number']; ?>" type="text" id="number" value="1" class="buy-num" size="4" onblur="changePrice()" /></td>
            	<td> 
            	<?php if ($this->_var['goods']['goods_number'] != "" && $this->_var['cfg']['show_goodsnumber']): ?>
        <?php if ($this->_var['goods']['goods_number'] == 0): ?>
          	库存： 
          <font color='red'><?php echo $this->_var['lang']['stock_up']; ?></font>
        <?php else: ?>
          <strong><?php echo $this->_var['lang']['goods_number']; ?></strong>
          <?php echo $this->_var['goods']['goods_number']; ?> <?php echo $this->_var['goods']['measure_unit']; ?>
        <?php endif; ?>
      <?php endif; ?>
            	</td>
            </tr>
        </table> 
        
        <div class="goods-btn">
        	<a href="javascript:addToBuy(<?php echo $this->_var['goods']['goods_id']; ?>)"><img src="themes/default/images/new/goods-buynow.jpg" /></a> <a href="javascript:addToCart(<?php echo $this->_var['goods']['goods_id']; ?>)"><img src="themes/default/images/new/putcart.jpg" /></a>
        </div>
        </form>
    </div>
    <div class="cl"></div>
    
    <div class="goods-ititle">
    	<ul id="com_b"><li class="now">商品详情</li></ul>
    </div>
    <div class="padd10">
	<?php echo $this->_var['goods']['goods_desc']; ?>
	</div>
	<!--
    <div class="goods-ititle"><a name="guige">
    	<ul><li class="now">规格参数</li></ul>
    </div>
    <div class="padd10">
	<table width="100%" border="0" cellpadding="3" cellspacing="1" bgcolor="#dddddd">
        <?php $_from = $this->_var['properties']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'property_group');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['property_group']):
?>
        <tr>
          <th colspan="2" bgcolor="#FFFFFF"><?php echo htmlspecialchars($this->_var['key']); ?></th>
        </tr>
        <?php $_from = $this->_var['property_group']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'property');if (count($_from)):
    foreach ($_from AS $this->_var['property']):
?>
        <tr>
          <td bgcolor="#FFFFFF" align="left" width="30%" class="f1">[<?php echo htmlspecialchars($this->_var['property']['name']); ?>]</td>
          <td bgcolor="#FFFFFF" align="left" width="70%"><?php echo $this->_var['property']['value']; ?></td>
        </tr>
        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
      </table>
	</div>
	-->
</div>
 
<?php echo $this->fetch('library/page_footer.lbi'); ?>
</body>
<script type="text/javascript">
var goods_id = <?php echo $this->_var['goods_id']; ?>;
var goodsattr_style = <?php echo empty($this->_var['cfg']['goodsattr_style']) ? '1' : $this->_var['cfg']['goodsattr_style']; ?>;
var gmt_end_time = <?php echo empty($this->_var['promote_end_time']) ? '0' : $this->_var['promote_end_time']; ?>;
var max_number = <?php echo empty($this->_var['goods']['max_number']) ? '0' : $this->_var['goods']['max_number']; ?>;
<?php $_from = $this->_var['lang']['goods_js']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?>
var <?php echo $this->_var['key']; ?> = "<?php echo $this->_var['item']; ?>";
<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
var goodsId = <?php echo $this->_var['goods_id']; ?>;
var now_time = <?php echo $this->_var['now_time']; ?>;


onload = function(){
  changePrice();
  fixpng();
  try {onload_leftTime();}
  catch (e) {}
}

/**
 * 点选可选属性或改变数量时修改商品价格的函数
 */
function changePrice()
{
  var attr = getSelectedAttributes(document.forms['ECS_FORMBUY']);
  var qty = document.forms['ECS_FORMBUY'].elements['number'].value;
  if(max_number > 0){
	if(qty > max_number){
		alert('该商品最多只能购买 '+max_number+' 件');
		document.forms['ECS_FORMBUY'].elements['number'].value = max_number;
		qty = max_number;
	}
  }
  
  Ajax.call('goods.php', 'act=price&id=' + goodsId + '&attr=' + attr + '&number=' + qty, changePriceResponse, 'GET', 'JSON');
}

/**
 * 接收返回的信息
 */
function changePriceResponse(res)
{
  if (res.err_msg.length > 0)
  {
    alert(res.err_msg);
  }
  else
  {
    document.forms['ECS_FORMBUY'].elements['number'].value = res.qty;

    if (document.getElementById('ECS_GOODS_AMOUNT'))
      document.getElementById('ECS_GOODS_AMOUNT').innerHTML = res.result;
  }
}

</script>
</html>
