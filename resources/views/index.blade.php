{{--模板布局--}}
@extends('layout.main')

@section('content')
    <!--轮播开始-->
    <div class="swiper-banner swiper-container">
        <div class="swiper-wrapper">
            <a href="#" class="swiper-slide slide1">

            </a>
            <a class="swiper-slide slide2" href="#">

            </a>
            <a href="#" class="swiper-slide slide3">

            </a>
            <a href="#" class="swiper-slide slide4">

            </a>
            <a href="#" class="swiper-slide slide5">

            </a>
            <a href="#" class="swiper-slide slide6">

            </a>
            <a href="#" class="swiper-slide slide7">
{{--                <div class="w1200">--}}
{{--                    <div class="ani pa sl-left" swiper-animate-effect="fadeInDown" swiper-animate-duration="0.5s">--}}
{{--                        <div class="pa t1">--}}
{{--                            微选·微好店--}}
{{--                        </div>--}}
{{--                        <div class="pa t2">--}}
{{--                            和微信十亿用户做买卖--}}
{{--                        </div>--}}
{{--                        <div class="pa t3">--}}
{{--                            基于微信“发现-购物”流量入口--}}
{{--                        </div>--}}
{{--                        <div class="pa btn" style="width:220px;">--}}
{{--                            名额有限，老用户一键升级--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="img1 ani pa" swiper-animate-effect="fadeInDown" swiper-animate-duration="0.5s">--}}
{{--                        <img src="statics/images/banner/wx.png" alt="">--}}
{{--                    </div>--}}
{{--                </div>--}}
            </a>
            <a href="#" target="_blank" class="swiper-slide slide8">
{{--                <div class="w1200">--}}
{{--                    <div class="ani pa sl-left" swiper-animate-effect="fadeInDown" swiper-animate-duration="0.5s">--}}
{{--                        <div class="pa t1">--}}
{{--                            云云收订--}}
{{--                        </div>--}}
{{--                        <div class="pa t2">--}}
{{--                            多渠道订单实时收集获取--}}
{{--                        </div>--}}
{{--                        <div class="pa t3">--}}
{{--                            支持40+渠道的订单统一抓取，满足个性化需求的API接口开放--}}
{{--                        </div>--}}
{{--                        <div class="pa btn">--}}
{{--                            立即进入--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="img3 ani pa" swiper-animate-effect="fadeInDown" swiper-animate-duration="0.5s" style="top:0;">--}}
{{--                        <img src="statics/images/banner/ysd.png" alt="">--}}
{{--                    </div>--}}
{{--                </div>--}}
            </a>
        </div>
        <!-- Add Pagination -->
        <div class="swiper-pagination swiper-pagination-white"></div>
        <div class="swiper-nav pa">
            <ul class="w1200 clearfix">

                @foreach($imports as $import=>$im)

                <li id="g{{$loop->index+1}}" >
                    <a href="/product/lists?navid={{$im[0]->navid}}">
                    <div class="icon">
                        <i class="layui-icon layui-icon-voice " style="font-size: 23px;padding-right: 10px" ></i>
{{--                        <img src="statics/images/banner/icon3.png" alt="">--}}
                    </div>
                    <div class="info">

                        <div>{{$import}}</div>
                    </div>
                    </a>
                </li>
                @endforeach
                <li id="g4">
                    <a >
                    <div class="icon">
                        <i class="layui-icon layui-icon-voice " style="font-size: 23px;padding-right: 10px" ></i>
                    </div>
                    <div class="info">
                        <div>AMETEK阿美特克-<br/>Elgar</div>

                    </div>
                        </a>
                </li>

{{--                <li id="g6">--}}
{{--                    <div class="icon">--}}
{{--                        <img src="statics/images/banner/icon5.png" alt="">--}}
{{--                    </div>--}}
{{--                    <div class="info">--}}
{{--                        <div>云云收订</div>--}}
{{--                        <p>40+平台对接</p>--}}
{{--                    </div>--}}
{{--                </li>--}}
{{--                <li id="g7">--}}
{{--                    <div class="icon">--}}
{{--                        <img src="statics/images/banner/icon5.png" alt="">--}}
{{--                    </div>--}}
{{--                    <div class="info">--}}
{{--                        <div>云云收订</div>--}}
{{--                        <p>40+平台对接</p>--}}
{{--                    </div>--}}
{{--                </li>--}}
            </ul>
        </div>
    </div>

    <!--轮播结束-->

    <div class="layui-row">
        <div class="layui-col-md12" style="text-align: center;">
            <div style="margin: 30px">
                <h1>主营产品</h1>
                <h3>Products</h3>
            </div>
        </div>

    </div>



    <div style="padding: 10px">

        <div class="layui-row layui-col-space10 ">

            @foreach($product as $pro)
                <div class="layui-col-md3" >
                    <a href="http://res.dessaul.com/{{$pro->explain}}" target="_blank">
                    <div style="height: 250px;background-color: white;margin: 10px" class="product-index">
                    <div style="height: 180px;width: 100%;text-align: center">
                        <img style="width: 95%;height: 100%;margin: 5px;text-align: center"  src="http://res.dessaul.com/{{$pro->images}}"/>
                    </div>
                    <hr/>
                    <div style="text-align: center;padding: 10px" >
                        <strong>{{$pro->name}}</strong>
                    </div>

                    </div>
                    </a>
                </div>
            @endforeach

        </div>
    </div>



    <div class="layui-row">
        <div class="layui-col-md12" style="text-align: center;">
            <div style="margin: 30px">
            <h1>解决方案</h1>
            <h3>Solutions</h3>
            </div>
        </div>


    </div>

    <div style="padding: 20px">

    <div class="layui-row layui-col-space25 case-list">

        @foreach($cases as $case=>$cas)
        <div class="layui-col-md4">
            <div class="layui-card" style="height: 320px">
                <div class="layui-card-header"> <h2>{{$case}}</h2></div>
                <div class="layui-card-body">
                    @foreach($cas as $ca)
                        <p style="padding: 8px 15px">
                            <a href="/solution/{{$ca->id}}">
                                <i class="layui-icon layui-icon-right "></i>{{$ca->name}}
                            </a>
                        </p>
                    @endforeach
                </div>
            </div>
        </div>
        @endforeach

    </div>
    </div>

    <div class="layui-row">
        <div class="layui-col-md12" style="text-align: center;">
            <div style="margin: 30px">
                <h1>企业文化</h1>
                <h3>Corporate Culture</h3>
            </div>
        </div>

        <div class="layui-col-md12" >
            <div style="margin: 0;background-color: white">
            <div class="w1200">
            <div class="mission">
                {{--                    <h1 style="color: #363636;margin-bottom: 40px"><strong>企业文化</strong></h1>--}}
                {!! $about->mission !!}
            </div>
            </div>
            </div>
        </div>


    </div>


@endsection


