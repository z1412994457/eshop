<?php /*a:2:{s:78:"G:\php_document\1shop\code\application\cms\view\products\cupboard_details.html";i:1592018724;s:67:"G:\php_document\1shop\code\application\cms\view\public\layouti.html";i:1592019136;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="<?php echo config('web_site_description'); ?>">
    <meta name="keywords" content="<?php echo config('web_site_keywords'); ?>">
    <title><?php echo config('web_site_title'); ?></title>
    <link rel="stylesheet" href="/static/home/bootstrap/bootstrap-3.3.7-dist/css/bootstrap.css"/>
    
<style>
    .breadcrumb {
        margin-top: 2%;
        background-color: white;
    }
    .info,img{
        max-width: 100%;
        height: auto;
        vertical-align:middle;
    }
    @media screen and (max-width:768px ) {
        .c_info{
            overflow: hidden;
            text-overflow: ellipsis;
            display: -webkit-box;
            -webkit-line-clamp: 3;
            -webkit-box-orient: vertical;
            font-size: 13px;

        }

    }
    .cupboard_introduce{
        margin-bottom: 3%;
    }
</style>

    <style>
        .h-nav {
            margin-top: 1%;
        }

        .navbar-default {
            background-color: white;
            border-color: white;
        }

        .page-header {
            margin-top: 2%;
        }

        .n-log {
            width: 50%;
        }

        .nav-connection {
            position: fixed;
            top: 40%;
            right: 0;
            width: 50px;
            height: 100px;
        }

        .show-erweima {
            bottom: 50%;
            position: absolute;
            display: none;
        }

        .footer {
            margin-top: 3%;
        }
    </style>
    
</head>
<body>

<div class="header">
<div class="container h-nav">
    <div class="row">
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                            data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">
                        <img class="n-log" src="<?php echo get_file_path(config('web_site_logo')); ?>">
                    </a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li><a href="<?php echo url('/cms/Index/index'); ?>">首页</a></li>
                        <li><a href="<?php echo url('/cms/Products/cupboard'); ?>">橱柜</a></li>
                        <li><a href="<?php echo url('/cms/Products/products'); ?>">产品中心</a></li>
                        <li><a href="<?php echo url('/cms/index/address'); ?>">店铺地址</a></li>
                    </ul>
                    <form class="navbar-form navbar-left" action="<?php echo url('/cms/Index/search'); ?>" method="post">
                        <div class="form-group">
                            <div class="input-group">
                                <input type="text" value="" class="form-control" name="keyw" placeholder="搜索 ">
                                <span class="input-group-btn">
                        <input class="btn btn-default" type="submit" value="搜索">
                    </span>
                            </div><!-- /input-group -->
                        </div>

                    </form>


                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>
    </div>
</div>
</div>
<!--轮播图-->
<div id="slidershow" class="carousel slide" data-ride="carousel" data-interval=2000 data-pause="hover" data-wrap="true"
     style=" width: 100%;height: 100%;">
    <!-- 设置图片轮播的顺序 -->
    <ol class="carousel-indicators">
        <li class="active" data-target="#slidershow" data-slide-to="0"></li>
        <li data-target="#slidershow" data-slide-to="1"></li>
        <li data-target="#slidershow" data-slide-to="2"></li>
    </ol>
    <!--设置轮播的图片-->
    <div class="carousel-inner">
        <div class="item active">
            <a href="##"><img src="/static/home/img/lun1.jpg" alt="cat1" class="d-block w-100" alt="..."></a>
        </div>
        <div class="item">
            <a href="##"><img src="/static/home/img/lun2.jpg" alt="cat2" class="d-block w-100" alt="..."></a>
        </div>
        <div class="item">
            <a href="##"><img src="/static/home/img/lun3.jpg" alt="cat3" class="d-block w-100" alt="..."></a>
        </div>
    </div>
    <a class="left carousel-control" href="#slidershow" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left"></span>
    </a>
    <a class="right carousel-control" href="#slidershow" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right"></span>
    </a>
</div>
<!--内容-->

<!--面包屑导航-->
<div class="nav">
    <div class="container">
        <div class="row">
            <ol class="breadcrumb">
                <li><a href="/cms/Index/index">首页</a></li>
                <li><a href="/cms/Products/cupboard">橱柜</a></li>
                <li><a href="#">橱柜详情</a></li>
            </ol>
        </div>

    </div>
</div>
<!--橱柜描述-->
<div class="cupboard_introduce">
    <div class="container">
        <div class="row">
            <div class="col-md-6 text-center">
                <img src="<?php echo get_file_path($info['cupboard_img']); ?>" atl="" style="width: 100%;"/>

            </div>
            <div class="col-md-6 text-center" style="margin-top:15%">
                <h2><?php echo htmlentities($info['cupboard_name']); ?></h2>
                <div style="margin-top: 20px">
                    <p  class="c_info"><?php echo htmlentities($info['cupboard_description']); ?></p>
                </div>
            </div>

        </div>
    </div>
</div>
<!--面包屑导航-->
<div class="container">
    <div class="row">
        <ul class="nav nav-tabs">
            <li role="presentation" class="infop" onclick="infop()"><a href="javasript:;">橱柜介绍</a></li>
            <li role="presentation" class="spectifictionsp" onclick="spectifictionsp()"><a href="javasript:;">橱柜参数</a>
            </li>
            <li role="presentation" class="servicep" onclick="servicep()"><a href="javasript:;">服务支持</a></li>
        </ul>
    </div>
</div>
<!--橱柜介绍-->
<div class="info"  style="width: 100%; margin-top: 50px">
        <div class="container">
            <div class="row">
                <?php echo $info['cupboard_info']; ?>
            </div>
        </div>

</div>
<!--产品参数-->
<div class="spectifictions" style="display: none">
        <div class="container">
            <div class="row">
            </div>
        </div>
    </div>
<!--服务支持-->
<div class="service" style="display: none">
        <div class="container">
            <div class="row">
            </div>
        </div>
    </div>




<!--<p>百度地图收索:海尔热水器厨房电器(郫县犀浦店)</p>-->
<!--<div id="container" style="width: 1200px;height: 400px;"></div>-->

<!--右侧联系栏-->
<div class="nav-connection">

    <ul class="list-group">
        <li class="list-group-item">
            <span class="glyphicon glyphicon-earphone"></span>
            <a aria-hidden="true" href='tel://13980674991'>联系电话</a>
        </li>
        <li class="list-group-item">
            <a href='http://api.map.baidu.com/geocoder?address=海尔热水器厨房电器(郫县犀浦店)&output=html' target='_blank'>到这里去</a>

        </li>
    </ul>

</div>
<!--页脚-->
<div class="footer">
    <div class="container text-center">
        <div class="row">

            <div class="col-md-3">
                <h6><a href="#">关于我们</a></h6>
            </div>

            <div class="col-md-3">
                <h6><a href="#"> 站长统计</a></h6>
            </div>

            <div class="col-md-3">
                <div class="show-erweima"><img src="/static/home/img/erweima.jpg" class="img-responsive"
                                               alt="Responsive image"/></div>
                <h6>关注我们</h6>
                <a href="##" class="erweima"><img src="/static/home/img/wei.png"/></a>
            </div>
            <div class="col-md-3">
                <h6>店铺地址</h6>
                成都市郫都区围城南路与恒山南街交叉路口西北侧(阳光雅舍)
            </div>

        </div>
        <div class="row">
            <div class="col-md-12 justify-content-center ">
                <h5><?php echo config('web_site_copyright'); ?></h5>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <h5><?php echo config('web_site_icp'); ?></h5>
            </div>
        </div>


    </div>
    <!--{/block}-->
</div>
</body>
<script src="/static/home/js/jquery-3.4.1/jquery-3.4.1.min.js" type="text/javascript" charset="utf-8"></script>
<script src="/static/home/bootstrap/bootstrap-3.3.7-dist/js/bootstrap.js" type="text/javascript" charset="utf-8"></script>
<script>
    // 显示二维码
    $(".erweima").mouseover(function () {

        $(".show-erweima").css("display", "block");
    });
    // 隐藏二维码
    $(".erweima").mouseout(function () {
        $(".show-erweima").css("display", "none");
    });
</script>

<script>
    function infop() {
        $('.info').css('display', 'block');
        $('.spectifictions').css('display', 'none');
        $('.service').css('display', 'none');
        $('.address').css('display', 'none');

    }

    function spectifictionsp() {
        $('.info').css('display', 'none');
        $('.spectifictions').css('display', 'block');
        $('.service').css('display', 'none');
        $('.address').css('display', 'none');

    }

    function servicep() {
        $('.info').css('display', 'none');
        $('.spectifictions').css('display', 'none');
        $('.service').css('display', 'block');
        $('.address').css('display', 'none');
    }

</script>




</html>