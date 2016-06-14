$(document).ready(function(){
	$("#baner").css({"height":$(window).height() + "px"});

	var flag = false;
	var scroll;

	$(window).scroll(function(){
		scroll = $(window).scrollTop();

		if (scroll > 180) {
			if (!flag){ 
			$("#logo").css({"margin-top": "-10px", "width": "50px", "height" : "50px" });
			$("header").css({"background-color": "#f3f3f3"});
            flag = true;
		 }
		}else{
			if (flag){ 
			$("#logo").css({"margin-top": "150px", "width": "270px", "height" : "270px" });
			$("header").css({"background-color": "transparent"});
			flag = false;
		 }
		}
	});
});