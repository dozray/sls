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
<?php if ($this->_var['cat_style']): ?>
<link href="<?php echo $this->_var['cat_style']; ?>" rel="stylesheet" type="text/css" />
<?php endif; ?>

<?php echo $this->smarty_insert_scripts(array('files'=>'transport.js,common.js,global.js,compare.js')); ?>
</head>
<body>
<?php echo $this->fetch('library/page_header.lbi'); ?>

<div class="pagebox mtop15">
	<div class="fl w944">
		<div class="sub-cat">
			<ul>
				<?php $_from = $this->_var['categories']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'cat');if (count($_from)):
    foreach ($_from AS $this->_var['cat']):
?>
				<li><a href="<?php echo $this->_var['cat']['url']; ?>"><?php echo $this->_var['cat']['name']; ?></a></li>
				<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
			</ul>
		</div>
	</div>
	<div class="fr w230"><a href="/"><img src="themes/default/images/new/ngohome.jpg"/></a></div>
	<div class="cl"></div>
</div>
<div class="pagebox mtop15">
	<div class="fl w944">
		 <?php echo $this->fetch('library/goods_list.lbi'); ?>
		 <div class="cl"></div>
  		 <?php echo $this->fetch('library/pages.lbi'); ?>
	</div>
	<div class="fr w230" >
		<div style="border:1px solid #E7E7E7; padding-bottom:10px;">
		<div><img src="themes/default/images/new/nmycart.jpg" width="230"/></div>
		<div style=" padding:10px;">
			<table width="100%">
			<?php $_from = $this->_var['cart_goods']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods');if (count($_from)):
    foreach ($_from AS $this->_var['goods']):
?>
			<tr>
			<td width="80" style="border-bottom:1px dashed #F8AC00">
			<div><img src="<?php echo $this->_var['goods']['goods_thumb']; ?>" width="60" height="60" /></div>
			<div>购买数量：<?php echo $this->_var['goods']['goods_number']; ?></div>
			</td>
			<td style="border-bottom:1px dashed #F8AC00"><div><?php echo $this->_var['goods']['goods_name']; ?></div>
				<div><b style="color:red;"><?php echo $this->_var['goods']['formated_goods_price']; ?></b></div>
			</td>
			</tr>
			<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
			<tr>
			<td colspan="2" height="30" align="center">
				共<b><?php echo $this->_var['cart_goodsnum']; ?></b>件商品，共计：<b><?php echo $this->_var['cart_goodsprice']; ?></b>元
			</td>
			</tr>
			</table>
		</div>
		<div style="text-align:center;"><a href="flow.php?step=checkout"><img src="themes/default/images/new/njiesuan.jpg"/></a></div>
		</div>
	</div>
	<div class="cl"></div>
</div>

<?php echo $this->fetch('library/page_footer.lbi'); ?>
</body>
</html>
