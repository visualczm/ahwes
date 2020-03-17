<!doctype html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>禁止燃放烟花炮竹,建设文明美丽城市</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('layui/css/layui.css') }}?v=2.5.5">
    <script type="text/javascript" src="{{ asset('layui/layui.js') }}?v=2.5.5"></script>
<style>


    body{
    @if($imgpath[2])
        background-color:#002ba5;
    @else
      background-color:#cf1c02;

        @endif

    }
    .web_bg{

        background:url({{$imgpath[0]}}) no-repeat;
        background-size: 100% 100%;
        width: 336px;
        height: 650px;
        margin: 0 auto;

    }


    .layui-col-md12{ position: absolute;
        bottom: 80px;
        /* left: 20px; */
        width: 100%;
        height: 150px;}



    .layui-input-block{width:50%;margin: 0 auto}

    .layui-input{

     @if($imgpath[2])
     background-color:#002ba5;

        @else
        background-color:#c2c0be;

        @endif
        width: 130px;
        color:white;
        margin-left: 20px;
        font-size: 18px;text-align: center}

    .layui-container{padding: 0}

    .msg{background-color:#393D49;color: white;padding: 10px 0;width:100%;opacity:0.6;position:absolute;font-size: 12px;font-weight: bold;text-align: center;
        -webkit-animation-name: blinker;
        -webkit-animation-duration: 1s;
        -webkit-animation-timing-function: linear;
        -webkit-animation-iteration-count: infinite;
        -moz-animation-name: blinker;
        -moz-animation-duration: 1s;
        -moz-animation-timing-function: linear;
        -moz-animation-iteration-count: infinite;
        animation-name: blinker;
        animation-duration: 1s;
        animation-timing-function: linear;
        animation-iteration-count: infinite;
    }

    @-moz-keyframes blinker {
        0% {
            opacity: 1.0;
        }

        50% {
            opacity: 0.5;
        }

        100% {
            opacity: 1.0;
        }
    }

    @-webkit-keyframes blinker {
        0% {
            opacity: 1.0;
        }

        50% {
            opacity: 0.5;
        }

        100% {
            opacity: 1.0;
        }
    }

    @keyframes blinker {
        0% {
            opacity: 1.0;
        }

        50% {
            opacity: 0.5;
        }

        100% {
            opacity: 1.0;
        }
    }

    #actions{
        @if($imgpath[2])
        top: 465px;
        height: 150px;
        @else
        top: 345px;
        height: 150px;

        @endif

        width: 100%;
        position: absolute;

    }

    #itdone{position: absolute;
        top: 45px;
        height: 70px;
        left: 80px;
        width: 180px;
       }

</style>
</head>
<body >
<div class="layui-container web_bg">

            <div id="actions">
                <div class="layui-input-block">
                    <input type="text" name="yourname" lay-verify="title" autocomplete="off" placeholder="请输入姓名" class="layui-input">
                </div>
                <div id="itdone">

                </div>
            </div>
        </div>

        <div class="poster-box" style="display: none;">
            <p class="msg"><i class="layui-icon layui-icon-ok-circle" style="font-size: 20px; color:white;"></i> 长按图片,保存后分享到朋友圈</p>
        <img class="poster-img" src="" style=""/>
        </div>


<script>

    layui.use(['jquery',['layer']], function(){
        $=layui.jquery;
        $('#web_bg').height(window.screen.height);
       // $('.layui-col-md12').css({"top":(window.screen.height-250)});

        $('.poster-box').hide();

        $("#itdone").click(function(){
            var name=$(" input[ name='yourname' ] ").val();
            var index;

            if(!name)
            {
                layer.msg('请输入姓名');
                return false;
            }


            $.ajax({
                type: 'POST',
                url: '/firecrackers/post',
                data: {'yourname':name,'company':getUrlParam("company")},
                headers: {'X-CSRF-Token': $('meta[name=csrf-token]').attr('content')},
                dataType: 'json',
                beforeSend:function(){

                    index=layer.msg('<i class="layui-icon layui-icon-loading layui-icon layui-anim layui-anim-rotate layui-anim-loop" style="font-size: 30px; color: #1E9FFF;"></i></br>海报生成中...',{time:0});


            },
                success: function (d) {

                    layer.close(index);
                },
                complete:function (e) {

                    $(".poster-img").attr('src',e.responseJSON.data);
                    $x=$(window).width()-50;
                    $y=$(window).height()-50;
                     $(".poster-img").height($y);
                    $(".poster-img").width($x);
                    layer.open({
                        area: [$x+'px', $y+'px'],
                        scrollbar: false,
                        type: 1,
                        shade: false,
                        title: false, //不显示标题
                        content: $('.poster-box'), //捕获的元素，注意：最好该指定的元素要存放在body最外层，否则可能被其它的相对元素所影响
                    });




                }
            });
        });










    });


    function getUrlParam(name) {
        var reg = new RegExp("(^|&)" + name + "=([^&]*)(&|$)"); //构造一个含有目标参数的正则表达式对象
        var r = window.location.search.substr(1).match(reg);  //匹配目标参数
        if (r != null) return unescape(r[2]); return null; //返回参数值
    }



</script>

</body>
</html>
