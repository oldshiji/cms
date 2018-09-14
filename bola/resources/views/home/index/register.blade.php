<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('home/bootstrap@3.3.7/css/bootstrap.min.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('home/css/app.css')}} "/>
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('home/css/register.css')}}"/>
    <title>注册</title>

</head>
<body>
<div class="">
    <div class="head">
        <div class="head-up container">
            <div class="head-up-l ">
                <img src="../img/logo01.jpg" >
                <span class="fs24">医联体基金会</span>
            </div>
            <div class="head-up-r">
                <div class="head-icon">
                    <img src="../img/icon01.png" >
                    <span><a href="02register.html">注册</a></span>
                </div>
                <div class="head-icon">
                    <img src="../img/icon02.png" >
                    <span><a href="03login.html">登录</a></span>
                </div>
                <div class="head-icon">
                    <img src="../img/icon03.png" >
                    <span><a href="">后台</a></span>
                </div>
            </div>
        </div>
        <div class="head-ud container">
            <ul>
                <li class="fs18"><a href="01home.html">首页</a></li>
                <li class="fs18"><a href="09hospitallist.html">医联体医院</a></li>
                <li class="fs18"><a href="11doctorlist.html">医联体医生</a></li>
                <li class="fs18"><a href="13referralapplication.html">转诊申请</a></li>
                <li class="fs18"><a href="15teachtrain.html">教学培训</a></li>
                <li class="fs18"><a href="17information.html">最新资讯</a></li>
                <li id="button3" class="fs18">远程中心</li>
                <li class="fs18"><a href="22aboutus.html">关于我们</a></li>
            </ul>
        </div>
    </div>
    <div class="context">
        <div class="register">
            <div class="hyzc">
                <img src="../img/dian.png" >
                <span>欢迎注册</span>
            </div>
            <div class="zcktel">
                <img src="../img/tele.png" >
                <input type="tel" placeholder="请输入您的手机号" />
            </div>
            <div class="zckyzm">
                <img src="../img/yanz.png" >
                <input type="" placeholder="请输入您的验证码" />
                <button type="button">获取验证码</button>
            </div>
            <div class="zckpsw">
                <img src="../img/psw.png" >
                <input type="password" placeholder="请输入您的登录密码" />
            </div>
            <div class="zckpsw">
                <img src="../img/psw.png" >
                <input type="password" placeholder="请再次输入您的登录密码" />
            </div>
            <div class="zckdiqu">
                <img src="../img/diqu.png" >
                <select name="">
                    <option value="">请选择省份/市</option>
                    <option value="">yyy</option>
                </select>
            </div>
            <div class="zckyy">
                <img src="../img/hos.png" >
                <select name="">
                    <option value="">请选择所属医院</option>
                    <option value="">xxx</option>
                </select>
            </div>
            <div class="zckpsw">
                <img src="../img/nn.png" >
                <input type="text" placeholder="请输入医院代码" />
            </div>
            <div class="zckzc">
                <button type="button">注册</button>
            </div>
            <div class="zckdl">
                已有账号，立即<a href="03login.html">登录</a>
            </div>
        </div>
    </div>

    <div class="foot-t">
        <div class="foot-t1">
            <img src="../img/logo03.jpg"/>
            <span>呼吸专科医联体</span>
        </div>
        <div class="foot-t2">
            <img src="../img/adress.png"/>
            <span>江苏省苏州市工业园区松涛街</span>
        </div>
        <div class="foot-t3">
            <img src="../img/tel.png"/>
            <span>0512-56898145</span>
        </div>
    </div>
    <div class="foot-u fs14">
        <p>Copyright 2017  All Rights Reserved.</p>
        <p>京ICP 备 05067313号-1 文保网安备案号：1101010023 京卫网审字【2014】第39号</p>
    </div>

</div>

<script src="{{ URL::asset('home/js/jquery.min.js')}}"  charset="utf-8"></script>
<script src="{{ URL::asset('home/bootstrap@3.3.7/js/bootstrap.min.js')}}" charset="utf-8"></script>
</body>
</html>