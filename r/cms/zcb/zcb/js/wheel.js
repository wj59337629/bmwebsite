$(function() {

	/*轮播*/
	var json0 = {
		"width": 48,
		"height": 32,
		"top": 93,
		"left": -70
	};
	var json1 = {
		"width": 108,
		"height": 111,
		"top": 71,
		"left": 20
	}
	var json2 = {
		"width": 174,
		"height": 178,
		"top": 47,
		"left": 140
	}
	var json3 = {
		"width": 236,
		"height": 242,
		"top": 16,
		"left": 330
	}
	var json4 = {
		"width": 174,
		"height": 178,
		"top": 47,
		"left": 583
	}
	var json5 = {
		"width": 108,
		"height": 111,
		"top": 71,
		"left": 770
	}
	var json6 = {
		"width": 48,
		"height": 32,
		"top": 93,
		"left": 900
	}

	$(".youanniu").click(function() {
		if (!$("#teacher li").is(":animated")) {
			//先交换位置
			$(".no1").stop(true, false).animate(json0, 400);
			$(".no2").stop(true, false).animate(json1, 400);
			$(".no3").stop(true, false).animate(json2, 400);
			$(".no4").stop(true, false).animate(json3, 400);
			$(".no5").stop(true, false).animate(json4, 400);
			$(".no6").stop(true, false).animate(json5, 400);
			$(".no0").css(json6);

			//再交换身份
			$(".no0").attr("class", "denghou");
			$(".no1").attr("class", "no0");
			$(".no2").attr("class", "no1");
			$(".no3").attr("class", "no2");
			$(".no4").attr("class", "no3");
			$(".no5").attr("class", "no4");
			$(".no6").attr("class", "no5");
			//上面的交换身份，把no0搞没了！所以，我们让no1前面那个人改名为no0
			if ($(".no5").next().length != 0) {
				//如果no5后面有人，那么改变这个人的姓名为no6
				$(".no5").next().attr("class", "no6");
			} else {
				//no5前面没人，那么改变此时队列最开头的那个人的名字为no0
				$("#teacher li:first").attr("class", "no6");
			}
			//发现写完上面的程序之后，no6的行内样式还是json0的位置，所以强制：
			$(".no6").css(json6);
		}

	});
    $(".zuoanniu").click(function() {
        if (!$("#teacher li").is(":animated")) {
            $(".no0").stop(true, false).animate(json1, 400);
            $(".no1").stop(true, false).animate(json2, 400);
            $(".no2").stop(true, false).animate(json3, 400);
            $(".no3").stop(true, false).animate(json4, 400);
            $(".no4").stop(true, false).animate(json5, 400);
            $(".no5").stop(true, false).animate(json6, 400);
            $(".no6").css(json0);

            $(".no6").attr("class", "denghou");
            $(".no5").attr("class", "no6");
            $(".no4").attr("class", "no5");
            $(".no3").attr("class", "no4");
            $(".no2").attr("class", "no3");
            $(".no1").attr("class", "no2");
            $(".no0").attr("class", "no1");

            //上面的交换身份，把no0搞没了！所以，我们让no1前面那个人改名为no0
            if ($(".no1").prev().length != 0) {
                //如果no1前面有人，那么改变这个人的姓名为no0
                $(".no1").prev().attr("class", "no0");
            } else {
                //no1前面没人，那么改变此时队列最后的那个人的名字为no0
                $("#teacher li:last").attr("class", "no0");
            }

            $(".no0").css(json0);
        }
    });

	setTime = setInterval(function() {
		$(".youanniu").trigger("click");
	}, 3000)
	$(".slidebox").hover(function() {
		clearInterval(setTime);
	}, function() {
		setTime = setInterval(function() {
			$(".youanniu").trigger("click");
		}, 3000)
	});



});
