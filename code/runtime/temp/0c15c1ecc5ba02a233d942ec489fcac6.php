<?php /*a:2:{s:69:"G:\php_document\1shop\code\application\cms\view\products\details.html";i:1589964941;s:67:"G:\php_document\1shop\code\application\cms\view\public\layouti.html";i:1589963932;}*/ ?>
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
    <li role="presentation"><a href="#">Messages</a></li>
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
        <li><a href="#">产品中心</a></li>
        <li><a href="#">产品详情</a></li>

    </ol>

    <div class="row">
        <div class="jumbotron" style="display: table" >
            <div style="text-align: center; width: 48%; display: table-cell; ">
                <!--<ol class="breadcrumb">-->
                    <!--<li><a href="#">首页</a></li>-->
                    <!--<li><a href="#">产品中心</a></li>-->
                    <!--<li><a href="#">产品详情</a></li>-->

                <!--</ol>-->
                <img src="<?php echo get_file_path($info['imgs'][0]); ?>" atl="" style="width: 100%;"/>

            </div>
            <div style="text-align: center;width:48%;display: table-cell;">

                <h2><?php echo htmlentities($info['product_name']); ?></h2>
                <div style="margin-top: 20px">
                    <p><?php echo htmlentities($info['marking']); ?></p>
                </div>
                <p>参考价:￥<?php echo htmlentities($info['prize']); ?></p>

            </div>


        </div>

        <div>
            <ul class="nav nav-tabs">
                <li role="presentation" class="infop" onclick="infop()"><a href="javasript:;">产品介绍</a></li>
                <li role="presentation" class="spectifictionsp"  onclick="spectifictionsp()"><a href="javasript:;">产品参数</a></li>
                <li role="presentation" class="servicep" onclick="servicep()" ><a href="javasript:;">服务支持</a></li>
                <li role="presentation" class="addressp" onclick="addressp()" ><a href="javasript:;">店铺地址</a></li>
            </ul>
        </div>
        <!--产品介绍-->
        <div class="" style="width: 100%; margin-top: 50px">
            <div class="info">
                <?php echo $info['info']; ?>

            </div>
        <!--产品参数-->
            <div class="spectifictions" style="display: none">
            <?php echo $info['specifications']; ?>
             </div>
        <!--服务支持-->
        <div class="service" style="display: none">
            <?php echo $info['surppot']; ?>
        </div>
            <!--店铺地址-->
            <!--<div  class="address" style="display: none;text-align: center;width: 1200px;height: 400px;margin-top: 20px">-->
                <!--&lt;!&ndash;<p>百度地图收索:海尔热水器厨房电器(郫县犀浦店)</p>&ndash;&gt;-->
                <!--&lt;!&ndash;<div id="container" style="width:100%;height: 100%;"></div>&ndash;&gt;-->

            <!--</div>-->
            <p>百度地图收索:海尔热水器厨房电器(郫县犀浦店)</p>
            <div class="address" id="container" style="width: 1200px;height: 400px;display: none"></div>
    </div>

</div>

</div>
<!--<p>百度地图收索:海尔热水器厨房电器(郫县犀浦店)</p>-->
<!--<div id="container" style="width: 1200px;height: 400px;"></div>-->


<!--页脚-->
<div class="jumbotron footer">
    <p>商业合作</p>
    <p></p>
</div>


</body>
<script src="/static/home/js/jquery-3.4.1/jquery-3.4.1.min.js" type="text/javascript" charset="utf-8"></script>


<script>
    function infop() {
        $('.info').css('display','block');
        $('.spectifictions').css('display','none');
        $('.service').css('display','none');
        $('.address').css('display','none');

    }

    function spectifictionsp() {
        $('.info').css('display','none');
        $('.spectifictions').css('display','block');
        $('.service').css('display','none');
        $('.address').css('display','none');

    }
    function servicep() {
        $('.info').css('display','none');
        $('.spectifictions').css('display','none');
        $('.service').css('display','block');
        $('.address').css('display','none');
    }
    function addressp() {
        $('.info').css('display','none');
        $('.spectifictions').css('display','none');
        $('.service').css('display','none');
        $('.address').css('display','block');

    }
</script>

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
        "地址：成都市郫都区围城南路与恒山南街交叉路口西北侧(阳光雅舍)\n" +
        "\n电话：13980674991\n" +
        "坐标：103.966379,30.758219", opts);  // 创建信息窗口对象
    map.openInfoWindow(infoWindow, map.getCenter());        // 打开信息窗口
</script>


</html>