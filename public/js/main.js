layui.use(['form', 'element'], function(){
    var $ = layui.$
        ,form = layui.form
        ,element = layui.element
        ,util = layui.util
        ,scrChange = function(){

        var scr = $(document).scrollTop();
        scr > 0 ? $(".nav").addClass('scroll') : $(".nav").removeClass('scroll');
    };


    //滚动监听
    $(window).scroll(function(){

        scrChange();
    });

    $(".nav .menu ul").each(function() {
        $this = $(this);
        var pathname = window.location.pathname;
        var array=pathname.split('/');
        switch (array[1]) {

            case 'product':
                $this.find('#men_2').addClass("intro");
                break;
            case 'solution':
                $this.find('#men_3').addClass("intro");
                break;
            case 'downloadcenter':
                $this.find('#men_4').addClass("intro");
                break;
            case 'about':
                $this.find('#men_5').addClass("intro");
                break;

            default:
                $this.find('#men_1').addClass("intro");
                break;


        }


    });


	var $obj = $('.menu ul');
	$obj.find('li').on('click', function() {
        $(this).addClass('intro').siblings().removeClass('intro');
		//$(this).addClass("intro");
	});
	// $obj.find('li').on('mouseleave', function() {
	// 	$(this).removeClass("intro");
	// })

	//导航展开
	$('#men_2').on('mouseenter', function() {
		$('#menu_hover_bg').stop().animate({
			height: '650px',
            width: '100%',
            left:'0px'
		}, 500);
		$('#men_2 .sub_menu').stop().animate({
			height: '650px',width: '100%',left:'0px'
		}, 600);
	})
	$('#men_2').on('mouseleave', function() {
		$('#menu_hover_bg').stop().animate({
			height: '0'
		}, 600);
		$('#men_2 .sub_menu').stop().animate({
			height: '0'
		}, 500);
	})
	$('#men_3').on('mouseenter', function() {
		$('#menu_hover_bg').stop().animate({
            height: '650px',width: '100%',left:'0px'
		}, 500);
		$('#men_3 .sub_menu').stop().animate({
            height: '650px',width: '100%',left:'0px'
		}, 600);
	})
	$('#men_3').on('mouseleave', function() {
		$('#menu_hover_bg').stop().animate({
            height: '0'
		}, 600);
		$('#men_3 .sub_menu').stop().animate({
            height: '0'
		}, 500);
	})

	$('#men_5').on('mouseenter', function() {
	    var bckoffset=(this.offsetLeft-this.offsetWidth/2)+300/2;
        var submenuset=$('.logo').offset().left;


		$('#menu_hover_bg').stop().animate({
            height: '250px',width: '300px',left:bckoffset+'px'
		}, 500);

		var menubg=$('#menu_hover_bg').offset().left;
		$('#men_5 .sub_menu').stop().animate({
            height: '250px',width: '300px',left:bckoffset-submenuset+'px'
		}, 600);
	})
	$('#men_5').on('mouseleave', function() {
		$('#menu_hover_bg').stop().animate({
            height: '0'

		}, 600);
		$('#men_5 .sub_menu').stop().animate({
            height: '0'
		}, 500);
	})

	//服务分类选项卡
    $('#men_fuwu .category li').mouseover(function() {
        var i = $(this).index();
        $(this).addClass('active').siblings().removeClass('active');
         $('#men_fuwu .content .cont_list').eq(i).show().siblings().hide();
    });


//轮播图
var main_swiper = new Swiper('.swiper-banner.swiper-container', {
    direction: 'horizontal',
   autoplay:true,
    slidesPerView: 1,
    pagination: {
      el: '.swiper-pagination',
      clickable: true,
    },
    on:{
        slideChangeTransitionStart: function(){
         // $('#g'+(this.activeIndex+1)).addClass('active').siblings().removeClass('active');
        },
        init: function(){
            swiperAnimateCache(this); //隐藏动画元素
            swiperAnimate(this); //初始化完成开始动画
        },
        slideChangeTransitionEnd: function(){
            swiperAnimate(this); //每个slide切换结束时也运行当前slide动画
        }
    }
});
// var lis = $('.swiper-nav li a');
// lis.each(function(i,el){
//     $('#g'+(i+1)).mouseover(function(){
//         //main_swiper.slideTo(i, 1000);
//         $(el).addClass('active').siblings().removeClass('active');
//     });
// })

});
