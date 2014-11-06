var $j = jQuery.noConflict();
$j(function() {
	var tit = $j("title").html();
	$j("._category_tit span").html(tit.substring(0, tit.indexOf("_")));
	
	var _btns = $j("._btns input");
	_btns.click(function() {
		_btns.css({"background":"#fff","color":"#8fc31f"});
		$j(this).css({"background":"#8fc31f","color":"#fff"});
		alert($j(this).val());
	});
	
	$j(".list-goods").hover(function() {
		var _this = $j(this);
		_this.css({"box-shadow":"0px 0px 10px #ccc"});
		_this.find("._addtocart").css({"background":"#8fc31f", "color":"#fff"});
		_this.find(".decr").css({"background-image":"url(themes/default/_images/j_08.png)","background-color":"#f6643d"});
		_this.find(".incr").css({"background-image":"url(themes/default/_images/j_03.png)","background-color":"#8fc31f"});
	}, function() {
		var _this = $j(this);
		_this.css({"box-shadow":"none"});
		_this.find("._addtocart").css({"background":"#fff", "color":"#8fc31f"});
		_this.find(".decr").css({"background-image":"url(themes/default/_images/j_11.png)","background-color":"#fff"});
		_this.find(".incr").css({"background-image":"url(themes/default/_images/j_05.png)","background-color":"#fff"});
	});
	
	//alert(navigator.userAgent);
});