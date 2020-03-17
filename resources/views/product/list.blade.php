@extends('layout.main')

@section('content')

    <div class="layui-container" style="background: white;margin-top: 120px;margin-bottom: 20px">

        @if($products->isEmpty())
            <div style="height: 450px">
                <h2 style="text-align: center;padding-top: 150px;color: #363636">
                    <i class="layui-icon layui-icon-tips" style="font-size: 52px;padding-right: 10px;color:#363636" ></i>
                    对不起,没有找到符合的资料
                </h2>
            </div>
            @endif
            <ul>
        @foreach($products as $product)

        <li id="product-list">
            <div class="layui-row">
                <div class="layui-col-md4">

                    <div style="margin-top: 50px;">

                        <a  href="http://res.dessaul.com/{{$product->explain}}" target="_blank">
                            <img class="product-img"  src="http://res.dessaul.com/{{$product->images}}"/>
                        </a>

                    </div>

                </div>
                <div class="layui-col-md7" >

                    <div class="layui-tab layui-tab-brief" >
                        <ul class="layui-tab-title">
                            <li class="layui-this">产品简介</li>
                            <li>下载中心</li>

                        </ul>
                        <div class="layui-tab-content" >
                            <div class="layui-tab-item layui-show">
                                <div class="product-desc">
                                    <p>品牌:{{$product->navcategory->name}}</p>
                                    <p>品名:{{$product->category->name}}</p>
                                    <p>型号:{{$product->model}}</p>
                                    <p>概述:{{$product->desc}}</p>
                                    <p><a href="http://res.dessaul.com/{{$product->explain}}" target="_blank">查看详细参数</a></p>
                                </div>
                            </div>
                            <div class="layui-tab-item">
                                <table class="product-download">

                                    <tbody>
                                    <tr>
                                        <th style="width: 120px">项目内容</th>
                                        <th>下载</th>

                                    </tr>
                                    <tr>
                                        <td >文件</td>
                                        <td>
                                            @if(isset($product->downfile))
                                            <a href="http://res.dessaul.com/{{$product->downfile}}">{{$product->downfile}}</a>
                                            @else
                                                <p>无</p>
                                            @endif
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>驱动</td>
                                        <td>
                                        @if(isset($product->downdriver))
                                            <a href="http://res.dessaul.com/{{$product->downdriver}}">{{$product->downdriver}}</a>
                                        @else
                                            <p>无</p>
                                        @endif
                                        </td>
                                          </tr>
                                    </tbody>
                                </table>
                            </div>

                        </div>
                    </div>

                </div>


            </div>

            <hr class="layui-bg-gray po-hr" />

        </li>

        @endforeach
            </ul>
            <div class="product-page">
                {{ $products->appends(['categoryid'=>request('categoryid'),'navid' => request('navid'),'keyword'=>request('keyword')])->links() }}
            </div>


    </div>



    @endsection
