<?php
/**
 * Created by PhpStorm.
 * User: 44844
 * Date: 2019/8/18
 * Time: 15:36
 */
?>
    <!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title>维尔斯直播团队</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <link rel="stylesheet" href="{{ asset('layui/css/layui.css') }}?v=2.5.5">
    <script src="{{ asset('layui/layui.js') }}?v=2.5.5"></script>
    <style>
        .footer{
            position: fixed;
            bottom: 0px;
            width: 100%;
            height: 30px;
            padding: 5px;
            border-top: 1px solid #801e99;
            text-align: center;
            color: white;
            background: #031871;

            line-height: 30px;
        }

        body{background: #031871;margin-bottom: 30px}
    </style>
</head>
<body>
<div >

    <div class="layui-row" >
        <div >
            <img class="layui-col-xs12" src="https://www.ahwes.com/images/about.jpg" />
        </div>

    </div>

    <div class="footer" >皖ICP备17005514号-1 皖网文[2019] 4652-199 号</div>

</div>
</body>
<script src="https://res.wx.qq.com/open/js/jweixin-1.4.0.js"></script>

<script type="text/javascript" charset="utf-8">

    wx.config(
        {!! $wx !!}
    );

    wx.ready(function () {



        var shareData = {
            title: '维尔斯直播团队', // 分享标题
            desc: '让直播成为生活的标配', // 分享描述
            link: 'https://www.ahwes.com/wechat/about', // 分享链接，该链接域名或路径必须与当前页面对应的公众号JS安全域名一致
            imgUrl: 'https://www.ahwes.com/images/2020logo.jpg', // 分享图标
        };


        wx.updateAppMessageShareData(shareData);

        wx.updateTimelineShareData(shareData);

        wx.onMenuShareAppMessage(shareData);

        wx.onMenuShareTimeline(shareData);

    });

</script>
</html>
