@extends('layout.main')

@section('content')

<div class="layui-container about" style="margin-top: 120px;background: white">
    <div class="layui-tab layui-tab-brief" lay-filter="docDemoTabBrief">
        <ul class="layui-tab-title">
            <li class="layui-this">公司简介</li>
            <li>企业文化</li>
            <li>联系我们</li>

        </ul>
        <div class="layui-tab-content" style="min-height: 300px;">
            <div class="layui-tab-item layui-show">
                <div style="margin: 50px">
                    <h1 style="color: #363636;margin-bottom: 40px"><strong>公司简介</strong></h1>
                 {!! $about->about !!}
                    <img style="width: 100%" alt="abouts" src="http://res.dessaul.com/aboutbg.png"/>
                </div>
            </div>
            <div class="layui-tab-item">

                <div class="mission">
{{--                    <h1 style="color: #363636;margin-bottom: 40px"><strong>企业文化</strong></h1>--}}
                    {!! $about->mission !!}

                </div>
            </div>
            <div class="layui-tab-item">
                <div style="margin: 50px">
                     <div class="layui-row">
                        <div class="layui-col-md4 contact">
                            <h1 style="color: #363636;margin-bottom: 40px;text-align: left;"><strong>联系我们</strong></h1>


                            <p><i class="layui-icon layui-icon-cellphone " style="font-size: 23px;padding-right: 10px"></i>电话:15502165216</p>
                            <p><i class="layui-icon layui-icon-link " style="font-size: 23px;padding-right: 10px" ></i>邮箱:fei.ye@dessaul.com </p>
                        </div>
                        <div class="layui-col-md7">
                            <img style="width:100%;height: 280px" src="http://res.dessaul.com/constanceus.png"/>

                        </div>


                    </div>
                </div>
            </div>

        </div>
    </div>

</div>

@endsection
