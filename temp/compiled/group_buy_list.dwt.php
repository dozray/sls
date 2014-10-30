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

<?php echo $this->smarty_insert_scripts(array('files'=>'common.js')); ?>
</head>
<body>
<?php echo $this->fetch('library/page_header.lbi'); ?>
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
		height:482,
		intervalTime:2,
		button:{
			showIndex:false,
			normal: {display:"none"},
			focus:{background:"#ffffff",border:"1px solid #cccccc"}
		}
	});
});
</script>
<div class="indexa">
	<div style="width:1308px; height:482px; overflow:hidden;" id="kinMaxShow">
	<?php 
$k = array (
  'name' => 'ads',
  'id' => '1',
  'num' => '5',
);
echo $this->_echash . $k['name'] . '|' . serialize($k) . $this->_echash;
?>
	</div>
	<div class="pagebox pos">
	<div class="categoryalpha"></div>
	<?php echo $this->fetch('library/category_tree.lbi'); ?>
	</div>
</div>
<div class="tuan-bg">
	<div class="tuan-box">
		<?php if ($this->_var['todaygoods_list']): ?>
    	<div class="today-nav">
        	<table width="100%">
            	<tr>
                	<th width="150" align="left"><img src="themes/default/images/new/tuan-ming.jpg" /></th>
                    <td align="right"></td>
                </tr>
            </table>
            
        </div>
        
        <div class="today-box"><span class="lefttop"><img src="themes/default/images/new/tuan-lefttop.jpg" /></span>
        	<span class="righttop"><img src="themes/default/images/new/tuan-righttop.jpg" /></span>
            <span class="rightbottom"><img src="themes/default/images/new/tuan-rightbottom.jpg" /></span>
            <span class="leftbottom"><img src="themes/default/images/new/tuan-leftbottom.jpg" /></span>
            <ul>
                <?php $_from = $this->_var['todaygoods_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'group_buy');if (count($_from)):
    foreach ($_from AS $this->_var['group_buy']):
?>
                <li>
                	<div class="tuan-title"><?php echo htmlspecialchars($this->_var['group_buy']['goods_name']); ?></div>
                    <div class="tuan-desc">
                    <?php echo nl2br($this->_var['group_buy']['act_desc']); ?>
                    </div>
                    <div><a href="<?php echo $this->_var['group_buy']['url']; ?>"><img src="<?php echo $this->_var['group_buy']['goods_thumb']; ?>" width="475" height="300"/></a></div>
                    <div class="tuan-sale"><span class="fl">超市价：<?php echo $this->_var['group_buy']['market_price']; ?></span><span class="fr"><?php echo $this->_var['group_buy']['goods_buyer']; ?>人已购买</span><div class="cl"></div></div>
                    <div class="tuan-btnbox">
                        <table width="100%"><tr>
                        <td class="tuan-price"><span<?php echo $this->_var['group_buy']['group_price']; ?></span></td>
                        <td class="tuan-buy"><a href="<?php echo $this->_var['group_buy']['url']; ?>"><img src="themes/default/images/new/tuan-buy.jpg"/></a></td>
                        </tr></table>
                    </div>
                    
                </li>
                <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
            </ul>
            <div class="cl"></div>
        </div>
      </div>
      <?php endif; ?>
      <div class="list-box mtop20">
          <div class="ac">
            <img src="themes/default/images/new/tuan-more.jpg" />
          </div>
          <div class="mtop20"></div>
          <?php if ($this->_var['gb_list']): ?>
      	<?php $_from = $this->_var['gb_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'group_buy');if (count($_from)):
    foreach ($_from AS $this->_var['group_buy']):
?>
        <div class="list-tuan">
        	<a href="<?php echo $this->_var['group_buy']['url']; ?>"><img src="<?php echo $this->_var['group_buy']['goods_thumb']; ?>" width="310" height="310"/></a>
            <div class="goods-name"><?php echo htmlspecialchars($this->_var['group_buy']['goods_name']); ?></div>
            <div class="goods-desc"><?php echo $this->_var['group_buy']['act_desc']; ?></div>
            <div class="goods-sale"><span class="fl">超市价：<?php echo $this->_var['group_buy']['market_price']; ?></span> <span class="fr">已有<b><?php echo $this->_var['group_buy']['goods_buyer']; ?></b>人抢购</span></div>
            <div class="goods-btnbox">
            	<table width="100%"><tr>
               	<td class="goods-price"><span><?php echo $this->_var['group_buy']['group_price']; ?></span></td>
                <td class="goods-buy"><a href="<?php echo $this->_var['group_buy']['url']; ?>"><img src="themes/default/images/new/tuan-buy2.jpg"/></a></td>
                </tr></table>
            </div>
        </div>
		<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
       <?php endif; ?>
        <div class="cl"></div>
        <?php echo $this->fetch('library/pages.lbi'); ?>
        </div>
    </div>
</div>

<div class="border3"></div>
<?php echo $this->fetch('library/page_footer.lbi'); ?>
</body>
</html>
