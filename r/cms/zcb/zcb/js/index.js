$(document).ready(function() {
	$(".navbar li").click(function(){
		$(".navbar li").removeClass("active")  && $(this).addClass("active");
	});

	function competition(){
		if($('.scoreslist >li').length>3){
			$('.scoreslist >li:first-child').animate({'margin-top':'-117px'},2000,function(){
				$(this).css({'margin-top':'0'}).appendTo('.scoreslist')
			});
			competitiontime=setTimeout(competition,3000);
		}
	}
	setTimeout(competition,3000);

	function competition1(){
		if($('.scoreslisttz >li').length>=3){
			$('.scoreslisttz >li:first-child').animate({'margin-top':'-50px'},2000,function(){
				$(this).css({'margin-top':'0'}).appendTo('.scoreslisttz')
			});
			competitiontime=setTimeout(competition1,5000);
		}
	}
	setTimeout(competition1,5000);
	
	var w=0;
	var linum = $('.partlist li').length;//图片数量
        linum = (parseInt(linum/4)+1)*4;
		w = 240*linum;//ul宽度
	$('.partlist,.swaplist').css('width', w + 'px');//ul宽度
	$('.swaplist').html($('.partlist').html());//复制内容
    $('.box').mouseover( function() {
        clearInterval(time);
    }).mouseout(function(){
        time = window.setInterval(function(){
            $('.og_next').click();
        },3000);
    });
	$('.og_next').click(function(){
		if($('.swaplist,.partlist').is(':animated')){
			$('.swaplist,.partlist').stop(true,true);
		}
		if($('.partlist li').length>4){//多于4张图片
			ml = parseInt($('.partlist').css('left'));//默认图片ul位置
			sl = parseInt($('.swaplist').css('left'));//交换图片ul位置
			if(ml<=0 && ml>w*-1){//默认图片显示时
				$('.swaplist').css({left: '960px'});//交换图片放在显示区域右侧
				$('.partlist').animate({left: ml - 960 + 'px'},'slow');//默认图片滚动				
				if(ml==(w-960)*-1){//默认图片最后一屏时
					$('.swaplist').animate({left: '0px'},'slow');//交换图片滚动
				}
			}else{//交换图片显示时
				$('.partlist').css({left: '960px'})//默认图片放在显示区域右
				$('.swaplist').animate({left: sl - 960 + 'px'},'slow');//交换图片滚动
				if(sl==(w-960)*-1){//交换图片最后一屏时
					$('.partlist').animate({left: '0px'},'slow');//默认图片滚动
				}
			}
		}
	});
	$('.og_prev').click(function(){
		if($('.swaplist,.partlist').is(':animated')){
			$('.swaplist,.partlist').stop(true,true);
		}
		if($('.partlist li').length>2){
			ml = parseInt($('.partlist').css('left'));
			sl = parseInt($('.swaplist').css('left'));
			if(ml<=0 && ml>w*-1){
				$('.swaplist').css({left: w * -1 + 'px'});
				$('.partlist').animate({left: ml + 960 + 'px'},'slow');				
				if(ml==0){
					$('.swaplist').animate({left: (w - 960) * -1 + 'px'},'slow');
				}
			}else{
				$('.partlist').css({left: w  * -1 + 'px'});
				$('.swaplist').animate({left: sl + 960 + 'px'},'slow');
				if(sl==0){
					$('.partlist').animate({left: (w - 960) * -1 + 'px'},'slow');
				}
			}
		}
	});
	$('.og_prev,.og_next').hover(function(){
			$(this).fadeTo('fast',1);
		},function(){
			$(this).fadeTo('fast',0.7);
	});
	time = window.setInterval(function(){
		$('.og_next').click();
	},3000);

	$(".figcaption").each(function(i){
	    var divH = $(this).height();
	    var $p = $("p", $(this)).eq(0);
	    while ($p.outerHeight() > divH) {
	        $p.text($p.text().replace(/(\s)*([a-zA-Z0-9]+|\W)(\.\.\.)?$/, "..."));
	    };
	});
});