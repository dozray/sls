<script type="text/javascript">
var process_request = "<?php echo $this->_var['lang']['process_request']; ?>";
</script>
<link href="themes/default/css/style_new.css" rel="stylesheet" type="text/css" />
	<div class="pagebox new-bar">
		<table width="100%" ><tr><td align="left" width="400"><span class="collect-bg"><a href="javascript:void(0)" onclick="shoucang('','')">收藏手拉手</a></span></td>
		<td align="right"><?php 
$k = array (
  'name' => 'member_info',
);
echo $this->_echash . $k['name'] . '|' . serialize($k) . $this->_echash;
?></td></tr></table>
	</div>
	<div class="pagebox new-top">
		<table width="100%" >
		<tr>
		<td width="480" style="padding-top:5px;"><a href="/" class="logo-box"><img src="themes/default/images/new/nlogo.jpg"/></a></td>
		<td align="right" style="padding-top:5px;">
			<script type="text/javascript">
    
    <!--
    function checkSearchForm()
    {
        if(document.getElementById('keyword').value)
        {
            return true;
        }
        else
        {
            alert("<?php echo $this->_var['lang']['no_keywords']; ?>");
            return false;
        }
    }
    -->
    
    </script>
            <form class="search-form" id="searchForm" name="searchForm" method="get" action="search.php" onSubmit="return checkSearchForm()">
            <input name="keywords" type="text" id="keyword" onClick="value=&quot;&quot;" value="<?php if ($this->_var['search_keywords']): ?><?php echo htmlspecialchars($this->_var['search_keywords']); ?><?php else: ?>你想找什么？<?php endif; ?>" class="search-text"/><input type="submit" value=" " class="search-btn" /></form>
		</td>
		<td width="220" align="center" valign="bottom" style="padding-top:15px;">
			<a href="/flow.php?step=cart" ><img src="themes/default/images/new/ncartico.jpg"/></a>
		</td>
		</tr>
		</table>
    </div>

<?php echo $this->smarty_insert_scripts(array('files'=>'jquery.js')); ?>
<div class="pagebox mtop20" style="display:none">
	<table width="100%">
    	<tr>
        	<td width="240" align="left" valign="top"><a href="" class="logo-box"><img src="themes/default/images/new/logo.jpg"/></a></td>
            <td>
            
            <div class="top-a1"><img src="themes/default/images/new/top-a1.jpg"/></div>
            <div class="search-key">
            <?php if ($this->_var['searchkeywords']): ?>
            <?php $_from = $this->_var['searchkeywords']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'val');$this->_foreach['searchkeys'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['searchkeys']['total'] > 0):
    foreach ($_from AS $this->_var['val']):
        $this->_foreach['searchkeys']['iteration']++;
?>
   				<a href="search.php?keywords=<?php echo urlencode($this->_var['val']); ?>"><?php echo $this->_var['val']; ?></a><?php if (! ($this->_foreach['searchkeys']['iteration'] == $this->_foreach['searchkeys']['total'])): ?> | <?php endif; ?> 
   			<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
            <?php else: ?>
            <a href="search.php?keywords=食用油">食用油</a> | <a href="search.php?keywords=海鲜">海鲜</a> | <a href="search.php?keywords=进口奶粉">进口奶粉</a> | <a href="search.php?keywords=面粉">面粉</a> | <a href="search.php?keywords=进口红酒">进口红酒</a> | <a href="search.php?keywords=酱油">酱油</a> | <a href="search.php?keywords=饮料">饮料</a>
            <?php endif; ?>
            </div>
            
            <div class="cl"></div>
            <div class="menu-nav">
                 <ul>
                     <li class="first-bg"><img src="themes/default/images/new/menu-firstbg.jpg" /></li>
                     <li class="menu-name"><a href="index.php"><img src="themes/default/images/new/home-<?php if ($this->_var['page_index'] == 1): ?>n<?php else: ?>b<?php endif; ?>.jpg" /></a></li>
                     <li class="line"><img src="themes/default/images/new/menu-l.jpg" /></li>
                     <li class="menu-name"><a href="group_buy.php"><img src="themes/default/images/new/tuangou-<?php if ($this->_var['page_index'] == 2): ?>n<?php else: ?>b<?php endif; ?>.jpg" /></a></li>
                     <li class="line"><img src="themes/default/images/new/menu-l.jpg" /></li>
                     <li class="menu-name"><img src="themes/default/images/new/fuwu-b.jpg" /></li>
                     <li class="line"><img src="themes/default/images/new/menu-l.jpg" /></li>
                     <li class="menu-name"><a href="bbs"><img src="themes/default/images/new/bbs-b.jpg" /></a></li>
                 </ul>
			</div>
            </td>
        </tr>
    </table>
</div>
