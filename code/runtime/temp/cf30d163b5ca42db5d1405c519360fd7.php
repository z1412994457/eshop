<?php /*a:2:{s:66:"G:\php_document\1shop\code\application\cms\view\index\address.html";i:1590304226;s:67:"G:\php_document\1shop\code\application\cms\view\public\layouti.html";i:1590309023;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="<?php echo config('web_site_description'); ?>">
    <meta name="keywords" content="<?php echo config('web_site_keywords'); ?>">
    <title><?php echo config('web_site_title'); ?></title>
    <link rel="stylesheet" href="/static/home/bootstrap/bootstrap-3.3.7-dist/css/bootstrap.css" />
    
    <style>
             .h-nav{
                margin-top: 1%;
            }
             .navbar-default{
                 background-color: white;
                 border-color:white;
             }
             .page-header{
                 margin-top: 2%;
             }
            .n-log {
                width: 50%;
            }



    </style>
    
</head>
<body>
<div class="container"  >

<!---->
<!--页头-->


<div class="header">
    <div class="container h-nav">
        <div class="row">
            <nav class="navbar navbar-default">
                <div class="container-fluid">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="#">
                            <img  class="n-log" src="<?php echo get_file_path(config('web_site_logo')); ?>" >
                        </a>
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav">
                            <li><a href="<?php echo url('/cms/Index/index'); ?>">首页</a></li>
                            <li><a href="#">橱柜</a></li>
                            <li><a href="<?php echo url('/cms/Products/products'); ?>">产品中心</a></li>
                            <li><a href="<?php echo url('/cms/index/address'); ?>">店铺地址</a></li>
                        </ul>
                        <form class="navbar-form navbar-left" action="<?php echo url('/cms/Index/search'); ?>" method="post"    >
                            <div class="form-group">
                                <div class="input-group">
                                    <input type="text"  value="" class="form-control" name="keyw" placeholder="搜索 ">
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
        <div class="page-header" style="background: url('/static/home/img/2.jpg') no-repeat; background-size: cover;height: 300px">
</div>
<!--内容-->



    <ol class="breadcrumb">
        <li><a href="/cms/Index/index">首页</a></li>
        <li><a href="#">店铺地址</a></li>
    </ol>

    <div class="address jumbotron" id="container" style="width: 100%; height: 500px"></div>


<!--右侧联系栏-->
<div  style="position: fixed; top: 40%; right:0 ;width: 50px;height: 100px;"  >
    <ul class="list-group">
        <li class="list-group-item">
            <span class="glyphicon glyphicon-earphone" ></span>
            <a  aria-hidden="true" href='tel://13980674991'>联系电话</a>
        </li>
        <li class="list-group-item">
            <a href='http://api.map.baidu.com/geocoder?address=海尔热水器厨房电器(郫县犀浦店)&output=html' target='_blank'>到这里去</a>

        </li>
    </ul>
</div>

<!--页脚-->
<div class="jumbotron footer">
    <p>商业合作</p>
    <p></p>
</div>
<!---->

</div>





</body>
<script src="/static/home/js/jquery-3.4.1/jquery-3.4.1.min.js" type="text/javascript" charset="utf-8"></script>
<script src="/static/home/bootstrap/bootstrap-3.3.7-dist/js/bootstrap.js" type="text/javascript" charset="utf-8"></script>



<script type="text/javascript" src="https://api.map.baidu.com/api?v=1.0&type=webgl&ak=kPU2UIQc9LGMWl0VPBaiHD44QVmZjwIL"></script>
<script type="text/javascript">
    var map = new BMapGL.Map("container");
    // 创建地图实例
    var point = new BMapGL.Point(103.966379,30.758219);

    // map.setCenter(point);

    // 创建点坐标
    map.centerAndZoom(point, 20);
    map.enableScrollWheelZoom(true);     //开启鼠标滚轮缩放
    // 初始化地图，设置中心点坐标和地图级别
    var opts = {
        width: 250,     // 信息窗口宽度
        height: 100,    // 信息窗口高度
        title: "海尔热水器厨房电器(郫县犀浦店)"  // 信息窗口标题
    }

    var infoWindow = new BMapGL.InfoWindow(
        "地址：成都市郫都区围城南路与恒山南街交叉路口西北侧(阳光雅舍)" , opts);  // 创建信息窗口对象
        map.openInfoWindow(infoWindow, map.getCenter());        // 打开信息窗口
</script>



</html>