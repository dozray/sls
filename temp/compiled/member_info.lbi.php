<?php if ($this->_var['user_info']): ?>
 <a href="user.php"><font class="f4_b"><?php echo $this->_var['user_info']['username']; ?></font></a> <a href="user.php?act=logout">退出登录</a> 
<?php else: ?>
 <a href="user.php">登录</a>  <a href="user.php?act=register">注册</a> 
<?php endif; ?>
 <a href="#">手机手拉手</a>
 <a href="#">客户服务</a> 
 <a href="#">网站导航</a> 