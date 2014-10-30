<?php $_from = $this->_var['goods_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods');if (count($_from)):
    foreach ($_from AS $this->_var['goods']):
?>
<?php if ($this->_var['goods']['goods_id']): ?>
<div class="list-goods">
	<div class="goods-img"><a href="<?php echo $this->_var['goods']['url']; ?>"><img src="<?php echo $this->_var['goods']['goods_thumb']; ?>" alt="<?php echo $this->_var['goods']['goods_name']; ?>" width="196" height="196"/></a></div>
    <div class="goods-price"><?php if ($this->_var['goods']['promote_price'] != ""): ?><?php echo $this->_var['goods']['promote_price']; ?><?php else: ?><?php echo $this->_var['goods']['shop_price']; ?><?php endif; ?></div>
    
    <div class="goods-name"><?php echo $this->_var['goods']['goods_name']; ?></div>
    <div class="goods-name">规格：<?php echo $this->_var['goods']['guige']; ?></div>
    <div class="goods-name">原产地：<?php echo $this->_var['goods']['chandi']; ?></div>
    <div class="goods-btnbuy">
    	<table width="100%"><tr>
       	<td height="39" width="52%"><span class="decr" onclick="setDecr(<?php echo $this->_var['goods']['goods_id']; ?>)">&nbsp;</span><input class="goods-numb" type="text" value="1" name="number" id="goods_num_<?php echo $this->_var['goods']['goods_id']; ?>" goods_number="<?php echo $this->_var['goods']['goods_number']; ?>" max_number="<?php echo $this->_var['goods']['max_number']; ?>" /><span class="incr" onclick="setIncr(<?php echo $this->_var['goods']['goods_id']; ?>)">&nbsp;</span></td>
        <td align="center"><a href="javascript:addToCart(<?php echo $this->_var['goods']['goods_id']; ?>)" class="addtocart">加入购物车</a></td>
        </tr></table>
    </div>
</div>
<?php endif; ?>
<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>

<script type="Text/Javascript" language="JavaScript">
<!--

function selectPage(sel)
{
  sel.form.submit();
}

//-->
</script>
<script type="text/javascript">
window.onload = function()
{
  Compare.init();
  fixpng();
}
<?php $_from = $this->_var['lang']['compare_js']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?>
<?php if ($this->_var['key'] != 'button_compare'): ?>
var <?php echo $this->_var['key']; ?> = "<?php echo $this->_var['item']; ?>";
<?php else: ?>
var button_compare = '';
<?php endif; ?>
<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
var compare_no_goods = "<?php echo $this->_var['lang']['compare_no_goods']; ?>";
var btn_buy = "<?php echo $this->_var['lang']['btn_buy']; ?>";
var is_cancel = "<?php echo $this->_var['lang']['is_cancel']; ?>";
var select_spe = "<?php echo $this->_var['lang']['select_spe']; ?>";
</script>