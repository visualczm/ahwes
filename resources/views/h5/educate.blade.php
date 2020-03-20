<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="maximum-scale=1.0,minimum-scale=1.0,user-scalable=0,width=device-width,initial-scale=1.0"/>
    <meta name="format-detection" content="telephone=no,email=no,date=no,address=no">
    <title>AUI快速完成布局</title>
    <link rel="stylesheet" href="{{ asset('css/aui.css') }}?v=3.0">
</head>
<body>
<div class="aui-content aui-margin-b-15">
    <ul class="aui-list">
        <div class="aui-list" style="margin-bottom: 15px;">
            <div class="aui-list-item">
                <div class="aui-list-item-left"><i class="aui-iconfont aui-icon-mobile"></i></div>
                <div class="aui-list-item-center">
                    <input class="aui-input" type="text" placeholder="请输入手机号" >
                </div>
            </div>
            <div class="aui-list-item">
                <div class="aui-list-item-left"><i class="aui-iconfont aui-icon-lock"></i></div>
                <div class="aui-list-item-center">
                    <input class="aui-input" type="password" placeholder="请输入密码" >
                </div>
                <div class="aui-list-item-right"><i class="aui-iconfont aui-icon-display aui-font-size-18"></i></div>
            </div>
            <div class="aui-list-item">
                <div class="aui-list-item-left">单选</div>
                <div class="aui-list-item-right">
                    <input type="radio" class="aui-radio" checked>
                </div>
            </div>
            <div class="aui-list-item">
                <div class="aui-list-item-left">单选</div>
                <div class="aui-list-item-right">
                    <label class="aui-margin-r-10"><input type="radio" class="aui-radio" name="sex" checked> 男</label>
                    <label><input type="radio" class="aui-radio" name="sex"> 女</label>
                </div>
            </div>
            <div class="aui-list-item">
                <div class="aui-list-item-left">多选</div>
                <div class="aui-list-item-right">
                    <label class="aui-margin-r-10"><input type="checkbox" class="aui-checkbox" name="city" checked> 北京</label>
                    <label><input type="checkbox" class="aui-checkbox" name="city"> 上海</label>
                </div>
            </div>
            <div class="aui-list-item">
                <div class="aui-list-item-left">开关</div>
                <div class="aui-list-item-right">
                    <input type="checkbox" class="aui-switch" checked>
                </div>
            </div>
        </div>
        <li class="aui-list-item">
            <div class="aui-list-item-center aui-padded-r-15">
                <div class="aui-btn aui-btn-inline aui-margin-r-10">提交</div>
                <div class="aui-btn aui-btn-inline aui-btn-outline">取消</div>
            </div>
        </li>
    </ul>
</div>
</body>
{{--<script type="text/javascript" src="../script/aui-range.js" ></script>--}}
<script type="text/javascript" src="http://res.wx.qq.com/open/js/jweixin-1.6.0.js" ></script>

<script type="text/javascript">
    wx.config({!! $wx !!});


</script>
</html>
