var $j = jQuery.noConflict();
$j(function() {
	/*var tit = $j("title").html();
	$j("._category_tit span").html(tit.substring(0, tit.indexOf("_")));*/
	var uh = $j("#ur_here");
	var _as = uh.find("a");
	var _c_tit = $j("._category_tit");
	if (_as.length == 2) {
		_c_tit.css("background","url(themes/default/_images/c_2.png) no-repeat");
		$j("#_sy").append(_as.eq(0));
		$j("#_oe").append(_as.eq(1));
	} else if (_as.length == 3) {
		_c_tit.css("background","url(themes/default/_images/c_3.png) no-repeat");
		$j("#_sy").append(_as.eq(0));
		$j("#_oe").append(_as.eq(1));
		$j("#_to").append(_as.eq(2));
	}

	if (_as.eq(1).html() == "蔬菜") {
		$j("._sub-cat").css("background-position", "0px 0px");
	} else if (_as.eq(1).html() == "肉类") {
		$j("._sub-cat").css("background-position", "0px -84px");
	} else if (_as.eq(1).html() == "粮油") {
		$j("._sub-cat").css("background-position", "0px -173px");
	} else if (_as.eq(1).html() == "水果产品") {
		$j("._sub-cat").css("background-position", "0px -261px");
	} else {
		$j("._sub-cat").css("background-image", "none");
	}

	var _btns = $j("._btns input");
	_btns.click(function() {
		_btns.css({"background":"#fff","color":"#8fc31f"});
		$j(this).css({"background":"#8fc31f","color":"#fff"});
		alert($j(this).val());
	});
	
	$j(".list-goods").hover(function() {
		var _this = $j(this);
		_this.find("._list_goods_bg").show();
	}, function() {
		var _this = $j(this);
		_this.find("._list_goods_bg").hide();
	});
	
	$j("._addtocart").hover(function() {
		$j(this).css({"background":"#f6643d", "color":"#fff"});
	}, function() {
		$j(this).css({"background":"#fff", "color":"#f6643d"});
	});
	/*
	$j("._dgi_con").hover(function() {
		$j(this).css("background", "#b8d681");
		$j(this).find(".goods-numb").css({"background":"#aecd74", "box-shadow":"0px 3px 3px #689547 inset", "border-color":"#9fc16c", "color":"#fff"});
		$j(this).find(".decr").css({"background-image":"url(themes/default/_images/j_08_0.png)"});
		$j(this).find(".incr").css({"background-image":"url(themes/default/_images/j_05_0.png)"});
	}, function() {
		$j(this).css("background", "#fff");
		$j(this).find(".goods-numb").css({"background":"#fff", "box-shadow":"none", "border-color":"#b8d681", "color":"#a2a2a2"});
		$j(this).find(".decr").css({"background-image":"url(themes/default/_images/j_11_0.png)"});
		$j(this).find(".incr").css({"background-image":"url(themes/default/_images/j_03_0.png)"});
	});*/
	
	$(".decr").hover(function() {
		$(this).css({"background-image":"url(themes/default/_images/j_y_s.png)"});
	}, function() {
		$(this).css({"background-image":"url(themes/default/_images/j_08_0.png)"});
	});
	
	$(".incr").hover(function() {
		$(this).css({"background-image":"url(themes/default/_images/j_y_a.png)"});
	}, function() {
		$(this).css({"background-image":"url(themes/default/_images/j_05_0.png)"});
	});
	
	//alert(navigator.userAgent);
});