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
<link rel="alternate" type="application/rss+xml" title="RSS|<?php echo $this->_var['page_title']; ?>" href="<?php echo $this->_var['feed_url']; ?>" />

<?php echo $this->smarty_insert_scripts(array('files'=>'common.js,index.js')); ?>

</head>
<body>
<?php echo $this->fetch('library/page_header.lbi'); ?>
<?php echo $this->smarty_insert_scripts(array('files'=>'jquery.js')); ?>
<script language="javascript" src="/js/fancybox/jquery.fancybox-1.3.4.js"></script>
<link href="/js/fancybox/jquery.fancybox-1.3.4.css" rel="stylesheet" type="text/css" />
<script type="text/javascript">
$(function() {
window.__Object_toJSONString = Object.prototype.toJSONString;
delete Object.prototype.toJSONString;
});
</script>
<?php echo $this->smarty_insert_scripts(array('files'=>'Validform_v5.3.2_min.js,jquery.kinMaxShow-1.0.min.js')); ?>
<script>
jQuery(function(){
	jQuery("#kinMaxShow").kinMaxShow({
		height:336,
		intervalTime:2,
		button:{
			showIndex:false,
			normal: {display:"none"},
			focus:{background:"#ffffff",border:"1px solid #cccccc"}
		}
	});
});
function popGet(){
	var content = '<img src="themes/default/images/new/npop.png" width="507" height="265"/>';
	$.fancybox({
	'autoDimensions' : true,
	'padding':0,
	'type':'html',
	'centerOnScroll'	: true,
	'hideOnOverlayClick' : false,
	'content':content
	});
}
</script>
<div class="pagebox indexa">
	<div style="width:1192px; height:336px; overflow:hidden;" id="kinMaxShow">
	<?php 
$k = array (
  'name' => 'ads',
  'id' => '1',
  'num' => '5',
);
echo $this->_echash . $k['name'] . '|' . serialize($k) . $this->_echash;
?>
	</div>
	
</div>
<div class="pagebox mtop15">
	<table width="100%" height="129"><tr>
	<td width="394" <?php if ($this->_var['uinfo']): ?>class="myslasbg"<?php endif; ?>><?php if ($this->_var['uinfo']): ?>
		<div>
			<table align="left">
			<tr><td width="160">今日余额：<?php echo $this->_var['uinfo']['user_money']; ?></td>
			<td>积分：<?php echo $this->_var['uinfo']['today_money_points']; ?></td></tr>
			<tr><td>今日消费：￥<?php echo $this->_var['uinfo']['today_consume']; ?>元</td>
			<td>积分：<?php echo $this->_var['uinfo']['today_consume_points']; ?></td></tr>
			<tr><td>今日消费：￥<?php echo $this->_var['uinfo']['today_consume']; ?>元</td>
			<td>积分：<?php echo $this->_var['uinfo']['today_consume_points']; ?></td></tr>
			<tr><td>今日自提：<?php if ($this->_var['info']['today_ziti']): ?>是<?php else: ?>否<?php endif; ?></td>
			<td>积分：<?php echo $this->_var['uinfo']['today_ziti_points']; ?></td></tr>
			<tr><td>合计积分：<?php echo $this->_var['uinfo']['today_points']; ?></td>
			<td>已使用积分：<?php echo $this->_var['uinfo']['consume_points']; ?></td></tr>
			<tr><td> </td>
			<td>剩余积分：<?php echo $this->_var['uinfo']['pay_points']; ?></td></tr>
			</table>
		</div>
	<?php else: ?><a href="user.php"><img src="themes/default/images/new/index-myslas.jpg" /></a><?php endif; ?></td>
	<td width="4"></td>
	<td width="262" <?php if ($this->_var['uinfo']): ?>class="myorderbg"<?php endif; ?>><?php if ($this->_var['uinfo']): ?>
		<div>
			<table align="left"><tr><td>单号：<?php echo $this->_var['orders']['order_sn']; ?></td></tr>
			<tr><td>详情：<?php echo $this->_var['order_goodsname']; ?></td></tr>
			<tr><td>状态：<?php echo $this->_var['orders']['status']; ?></td></tr>
			<tr><td>&nbsp;</td></tr>
			<tr><td><a href="/user.php?act=order_list">查看我的订单</a></td></tr>
			</table> 
		</div>
	<?php else: ?><a href="user.php?act=order_list"><img src="themes/default/images/new/index-myorder.jpg" /></a><?php endif; ?></td>
	<td width="4"></td>
	<td width="261" <?php if ($this->_var['uinfo']): ?>class="myjiazbg"<?php endif; ?>><?php if ($this->_var['uinfo']): ?>
	
	<?php else: ?><a href="#"><img src="themes/default/images/new/index-myjiaz.jpg" /></a><?php endif; ?></td>
	
	<td width="4"></td>
	<td width="262" class="myjiazbg22"></td>
	</tr>
	</table>
</div>
<div class="pagebox mtop5">
	<table width="100%" height="129"><tr>
	<td width="261"><a href="category.php?id=6"><img src="themes/default/images/new/index-youjisc.jpg" /></a></td>
	<td width="4"></td>
	<td width="129"><a href="category.php?id=19"><img src="themes/default/images/new/index-roulei.jpg" /></a></td>
	<td width="4"></td>
	<td width="129"><a href="category.php?id=21"><img src="themes/default/images/new/index-liangy.jpg" /></a></td>
	<td width="4"></td>
	<td width="262"><a href="category.php?id=12"><img src="themes/default/images/new/index-shuiguo.jpg" /></a></td>
	<td width="4"></td>
	<td width="129"><a href="javascript:void(0)" onclick="popGet()"><img src="themes/default/images/new/index-piaowu.jpg" /></a></td>
	<td width="4"></td>
	<td width="129"><a href="javascript:void(0)" onclick="popGet()"><img src="themes/default/images/new/index-jiaofei.jpg" /></a></td>
	<td width="4"></td>
	<td width="129"><a href="javascript:void(0)" onclick="popGet()"><img src="themes/default/images/new/index-jiazh.jpg" /></a></td>
	
	</tr>
	</table>
</div>

<?php echo $this->fetch('library/page_footer.lbi'); ?>
</body>
</html>
