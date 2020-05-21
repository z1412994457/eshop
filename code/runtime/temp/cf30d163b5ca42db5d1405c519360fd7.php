<?php /*a:2:{s:66:"G:\php_document\1shop\code\application\cms\view\index\address.html";i:1590042918;s:67:"G:\php_document\1shop\code\application\cms\view\public\layouti.html";i:1589965679;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Title</title>
    <link rel="stylesheet" href="/static/home/bootstrap/bootstrap-3.3.7-dist/css/bootstrap.css" />
    

</head>
<body>

<!--页头-->
<div class="header">
<ul class="nav nav-pills">
    <li role="presentation" ><a href="<?php echo url('/cms/Index/index'); ?>">首页</a></li>
    <li role="presentation"><a href="#">橱柜</a></li>
    <li role="presentation"><a href="<?php echo url('/cms/Products/products'); ?>">产品中心</a></li>
    <li role="presentation"><a href="<?php echo url('/cms/index/address'); ?>">店铺地址</a></li>
    <li role="presentation"><a href="#">Messages</a></li>
    <li role="presentation">
        <form action="<?php echo url('/cms/Index/search'); ?>" method="post"    >
            <div class="col-lg-4">
                <div class="input-group">
                    <input type="text"  value="" class="form-control" name="keyw" placeholder="搜素">
                    <span class="input-group-btn">
                        <input class="btn btn-default" type="submit" value="搜索">
      </span>
                </div><!-- /input-group -->
            </div>

        </form>
    </li>


</ul>
</div>
<div class="page-header" style="background: url('/static/home/img/2.jpg') no-repeat; background-size: cover;height: 300px">
</div>
<!--内容-->


<div class="container">
    <ol class="breadcrumb">
        <li><a href="#">首页</a></li>
        <li><a href="#">店铺地址</a></li>
    </ol>
    <p>百度地图收索:海尔热水器厨房电器(郫县犀浦店)</p>
    <div class="address" id="container" style="width: 1200px;height: 400px;"></div>
</div>
<div>

</div>


<!--页脚-->
<div class="jumbotron footer">
    <p>商业合作</p>
    <p></p>
</div>


</body>
<script src="/static/home/js/jquery-3.4.1/jquery-3.4.1.min.js" type="text/javascript" charset="utf-8"></script>



<script type="text/javascript" src="https://api.map.baidu.com/api?v=1.0&type=webgl&ak=kPU2UIQc9LGMWl0VPBaiHD44QVmZjwIL"></script>
<script type="text/javascript">
    var map = new BMapGL.Map("container");
    // 创建地图实例
    var point = new BMapGL.Point(103.966379,30.758219);

    // map.setCenter(point);

    // 创建点坐标
    map.centerAndZoom(point, 20);

    // 初始化地图，设置中心点坐标和地图级别
    var opts = {
        width: 250,     // 信息窗口宽度
        height: 100,    // 信息窗口高度
        title: "海尔热水器厨房电器(郫县犀浦店)"  // 信息窗口标题
    }

    var infoWindow = new BMapGL.InfoWindow(
        "地址：成都市郫都区围城南路与恒山南街交叉路口西北侧(阳光雅舍)" +
        "<br>"+"电话：<a href=\"tel:18280235063\">18280235063</a>" +"</br>"
        +"<a href='http://api.map.baidu.com/geocoder?address=海尔热水器厨房电器(郫县犀浦店)&output=html' target='_blank'>\n" +
        " 到这里去" +
        "</a>", opts);  // 创建信息窗口对象
    map.openInfoWindow(infoWindow, map.getCenter());        // 打开信息窗口
</script>



</html>