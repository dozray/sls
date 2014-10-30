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

<?php echo $this->smarty_insert_scripts(array('files'=>'utils.js,common.js,global.js,compare.js')); ?>
</head>
<body>
<?php echo $this->fetch('library/page_header.lbi'); ?>

<div class="indexa6">
	<div class="pagebox pos">
    	<div class="categoryalpha"></div>
    	<?php echo $this->fetch('library/category_tree.lbi'); ?>
    </div>
</div>
<div class="list-bg">

      <div class="list-box">
<?php echo $this->fetch('library/goods_list.lbi'); ?>
<div class="cl"></div>
  <?php echo $this->fetch('library/pages.lbi'); ?>
    </div>
</div>
<div class="border3"></div>
<?php echo $this->fetch('library/page_footer.lbi'); ?>
</body>
</html>
