<!--导航开始-->
<div class="nav">
    <div id="menu_hover_bg" style="height: 0px; overflow: hidden;"></div>
    <div class="w1200">
        <div class="logo">
            <a href="/"><img src="../images/logo.png" /></a>
        </div>
        <div class="menu">
            <ul>

                @foreach($navbars as $navbar)

                @if($navbar['sort']==1)
                        <li id="men_{{$navbar['sort']}}">
                            <h2><a href="/">{{$navbar['name']}}</a></h2>
                        </li>
                @elseif($navbar['sort']==2)
{{--                    产品中心--}}
                <li id="men_{{$navbar['sort']}}">
                    <h2><a href="#">{{$navbar['name']}}</a></h2>
                    <div class="sub_menu">
                        <div class="h30"></div>
                        <div class="sub_menu_list" style="width: 590px;">

                            <span id="headertitle">进口品牌</span>
                            @foreach($imports as $import=>$ims)
                            <div class="list">
                                    <div class="info">
                                        <span>
                                            <a href="/product/lists?navid={{$ims[0]->navid}}">
                                           {{$import}}
                                            </a>
                                        </span>
                                        @foreach($ims as $im)
                                            <p>
                                                <a href="/product/lists?categoryid={{$im->id}}&navid={{$im->navid}}">
                                                {{$im->name}}
                                                </a>
                                            </p>
                                            @endforeach
                                    </div>

                            </div>
                            @endforeach

                            </div>

                        <div class="sub_menu_list" style="width: 450px;margin-left: 80px">
                            <span id="headertitle">国产品牌</span>
                            @foreach($chinas as $china=>$chs)
                            <div class="list">

                                    <div class="info">
                                        <span style="font-size: 16px;color: white">
                                            <a href="/product/lists?navid={{$chs[0]->navid}}">
                                            {{$china}}
                                            </a>
                                        </span>
                                        @foreach($chs as $ch)
                                        <p>
                                            <a href="/product/lists?categoryid={{$ch->id}}&navid={{$ch->navid}}">
                                           {{$ch->name}}
                                            </a>
                                        </p>
                                            @endforeach
                                    </div>


                            </div>
                            @endforeach
                        </div>

                    </div>
                </li>

                    @elseif ($navbar['sort']==3)
{{--                    解决方案--}}
                        <li id="men_{{$navbar['sort']}}">
                            <h2><a href="#">{{$navbar['name']}}</a></h2>
                            <div class="sub_menu">
                                <div class="h30"></div>
                                <div class="sub_menu_list" style="width:100%">

                                    @foreach($cases as $case=>$cas)
                                        <div class="solution">
                                            <div class="info">
                                                <span style="font-size: 18px">

                                                 {{$case}}

                                                </span>
                                                @foreach($cas as $ca)
                                                    <p>
                                                        <a href="/solution/{{$ca->id}}">
                                                            {{$ca->name}}
                                                        </a>
                                                    </p>
                                                @endforeach
                                            </div>

                                        </div>
                                    @endforeach

                                </div>



                            </div>


                        </li>
                    @elseif($navbar['sort']==5)
                    <li id="men_{{$navbar['sort']}}">
                        <h2><a href="#">{{$navbar['name']}}</a></h2>
                        <div class="sub_menu" >
                            <div style="width: 300px;margin: 20px auto">
                            <ul class="about-li">

                                <li><a href="../about">了解戴索</a></li>
                                <li><a href="../cooperation">合作厂商及资质</a></li>
                                <li><a href="../join">加入我们</a></li>
                            </ul>
                            </div>

                            </div>

                    </li>

                    @else
                        <li id="men_{{$navbar['sort']}}">
                            <h2><a href="#">{{$navbar['name']}}</a></h2>
                        </li>
                    @endif

                @endforeach

                <div class="search">
                    <form action="../product/search" method="get">
                    <div class="btn_search">
{{--                        <input type="button" class="layui-btn layui-btn-sm layui-btn-normal">--}}
                        <button type="submit" class="layui-btn layui-btn-sm layui-btn-radius layui-btn-warm">
                            <i class="layui-icon layui-icon-search" style="font-size: 25px"></i>
                            搜索</button>
                        </a>
                    </div>

                        <input name="keyword" type="text" placeholder="搜索产品" value="" class="layui-input inputsearch">


                    </form>

                </div>


            </ul>


        </div>

        <div class="login">
            <a href="../admin">登陆</a>
{{--            <a href="#">免费注册</a>--}}
{{--            <a href="#">商家后台</a>--}}
        </div>

    </div>
</div>
<!--导航结束-->
