<?php /*a:2:{s:64:"G:\php_document\1shop\code\application\cms\view\index\index.html";i:1591689716;s:67:"G:\php_document\1shop\code\application\cms\view\public\layouti.html";i:1592026531;}*/ ?>
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
    .ranking {
        margin-bottom: 3%;
    }

    .nav-item {
        width: 25%;
        font-size: 20px;

    }

    .nav-tabs > li.active > a, .nav-tabs > li.active > a:hover, .nav-tabs > li.active > a:focus {
        border: none;
    }

    .nav-item > a {
        color: black;
    }

    .tab-content {
        margin-top: 3%;
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

        @media  screen and (max-width: 991px){
            .show-erweima {
                bottom: 50%;
                position: absolute;
                display: none;
                width:50%;
                left: 25%;
            }
        }

        .footer {
            margin-top: 3%;
        }
    </style>
    
</head>
<body>
<!--页头-->
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

<!--人气爆款-->
<div class="p-popular" style="margin-top: 3%">
    <div class="container ">
        <div class="row">
            <div class="col-md-12 text-center ranking"><h1>人气排行</h1></div>
            <ul class="nav nav-tabs text-center" id="myTab" role="tablist">
                <li class="nav-item active" role="presentation">
                    <a class="nav-link" id="re-tab" data-toggle="tab" href="#re" role="tab" aria-controls="re"
                       aria-selected="true">热水器</a>
                </li>
                <li class="nav-item" role="presentation">
                    <a class="nav-link" id="ran-tab" data-toggle="tab" href="#ran" role="tab" aria-controls="ran"
                       aria-selected="false">燃气灶</a>
                </li>
                <li class="nav-item" role="presentation">
                    <a class="nav-link" id="xi-tab" data-toggle="tab" href="#xi" role="tab" aria-controls="xi"
                       aria-selected="false">吸油烟机</a>
                </li>
                <li class="nav-item" role="presentation">
                    <a class="nav-link" id="chu-tab" data-toggle="tab" href="#chu" role="tab" aria-controls="chu"
                       aria-selected="false">橱柜</a>
                </li>
            </ul>

            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade active in" id="re" role="tabpanel" aria-labelledby="re-tab">
                    <?php if(is_array($heater) || $heater instanceof \think\Collection || $heater instanceof \think\Paginator): $i = 0; $__LIST__ = $heater;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$h): $mod = ($i % 2 );++$i;?>
                    <div class="col-xs-6 col-md-4">
                        <div class="thumbnail">
                            <img src="<?php echo get_file_path($h['product_picture']); ?>" class="img-responsive"
                                 alt="Responsive image">
                            <div class="caption">
                                <h3><?php echo htmlentities($h['product_name']); ?></h3>
                                <p><?php echo htmlentities($h['marking']); ?></p>
                                <p>参考价:￥<?php echo htmlentities($h['prize']); ?> </p>
                                <p><a href="<?php echo url('/cms/index/address'); ?>" class="btn btn-primary" role="button">购买</a>
                                    <a href="/cms/Products/pdetails/id/<?php echo htmlentities($h['id']); ?>" class="btn btn-default"
                                       role="button">查看详情</a></p>
                            </div>
                        </div>

                    </div>
                    <?php endforeach; endif; else: echo "" ;endif; ?>
                </div>
                <div class="tab-pane fade" id="ran" role="tabpanel" aria-labelledby="ran-tab">
                    <?php if(is_array($stoves) || $stoves instanceof \think\Collection || $stoves instanceof \think\Paginator): $i = 0; $__LIST__ = $stoves;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$s): $mod = ($i % 2 );++$i;?>
                    <div class="col-xs-6 col-md-4">
                        <div class="thumbnail">
                            <img src="<?php echo get_file_path($s['product_picture']); ?>" class="img-responsive"
                                 alt="Responsive image">
                            <div class="caption">
                                <h3><?php echo htmlentities($s['product_name']); ?></h3>
                                <p><?php echo htmlentities($s['marking']); ?></p>
                                <p>参考价:￥<?php echo htmlentities($s['prize']); ?> </p>
                                <p><a href="<?php echo url('/cms/index/address'); ?>" class="btn btn-primary" role="button">购买</a>
                                    <a href="/cms/Products/pdetails/id/<?php echo htmlentities($s['id']); ?>" class="btn btn-default"
                                       role="button">查看详情</a></p>
                            </div>
                        </div>

                    </div>
                    <?php endforeach; endif; else: echo "" ;endif; ?>
                </div>
                <div class="tab-pane fade" id="xi" role="tabpanel" aria-labelledby="xi-tab">

                </div>
                <div class="tab-pane fade" id="chu" role="tabpanel" aria-labelledby="chu-tab">

                </div>
            </div>

        </div>

    </div>

</div>
<!--产品故事-->
<div class="p-story" style="margin-top: 3%">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center "><h1>产品故事</h1></div>
            <div class="col-md-12 text-center">
                <p>三十多年来，海尔与时俱进，从产品品牌到平台品牌，始终站在时代与行业发展前列。物联网时代，</p>
                <p>海尔生态品牌将持续为全球用户创造美好生活体验，成为全球生态品牌引领者。</p>
                <img class="img-responsive" alt="Responsive image" src="/static/home/img/story.jpg"/>
            </div>

        </div>
    </div>

</div>
<!--橱柜展示-->
<div class="cupboard" style="margin-top: 3%">
    <div class="row">
        <div class="col-md-12 text-center "><h1>橱柜展示</h1></div>
        <div id="slidershow2" class="carousel slide" data-ride="carousel" data-interval=2000 data-pause="hover"
             data-wrap="true" style=" width: 100%;height: 100%;">
            <!-- 设置图片轮播的顺序 -->
            <ol class="carousel-indicators">
                <li class="active" data-target="#slidershow2" data-slide-to="0"></li>
                <li data-target="#slidershow2" data-slide-to="1"></li>
                <li data-target="#slidershow2" data-slide-to="2"></li>
            </ol>
            <!--设置轮播的图片-->
            <div class="carousel-inner">
                <div class="item active">
                    <a href="##"><img src="/static/home/img/lun1.jpg" alt="cat1" class="d-block w-100 " alt="..."></a>
                </div>
                <div class="item">
                    <a href="##"><img src="/static/home/img/lun2.jpg" alt="cat2" class="d-block w-100 " alt="..."></a>
                </div>
                <div class="item">
                    <a href="##"><img src="/static/home/img/lun3.jpg" alt="cat3" class="d-block w-100 " alt="..."></a>
                </div>
            </div>
            <a class="left carousel-control" href="#slidershow2" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
            </a>
            <a class="right carousel-control" href="#slidershow2" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
            </a>
        </div>
    </div>
</div>

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
                <a href="##" class="erweima "><img src="/static/home/img/wei.png"/></a>
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





</html>