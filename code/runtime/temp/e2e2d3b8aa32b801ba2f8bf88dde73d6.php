<?php /*a:2:{s:70:"G:\php_document\1shop\code\application\cms\view\products\products.html";i:1590304226;s:67:"G:\php_document\1shop\code\application\cms\view\public\layouti.html";i:1590309241;}*/ ?>
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
            .nav-connection{
                position: fixed; top: 40%; right:0 ;width: 50px;height: 100px;
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
        <li><a href="#">产品中心</a></li>

    </ol>

    <div class="row">
        <?php if(is_array($products) || $products instanceof \think\Collection || $products instanceof \think\Paginator): $i = 0; $__LIST__ = $products;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$p): $mod = ($i % 2 );++$i;?>
        <div class="col-xs-6 col-md-3">
            <div class="thumbnail">
                <img src="<?php echo get_file_path($p['product_picture']); ?>" class="img-responsive" alt="Responsive image">
                <div class="caption">
                    <h3><?php echo htmlentities($p['product_name']); ?></h3>
                    <p><?php echo htmlentities($p['marking']); ?></p>
                    <p>参考价:￥<?php echo htmlentities($p['prize']); ?>   </p>
                    <p><a href="<?php echo url('/cms/index/address'); ?>" class="btn btn-primary" role="button">购买</a> <a href="/cms/Products/pdetails/id/<?php echo htmlentities($p['id']); ?>" class="btn btn-default" role="button">查看详情</a></p>
                </div>
            </div>

        </div>
        <?php endforeach; endif; else: echo "" ;endif; ?>
    </div>


<div style="text-align: center"><?php echo $products->render(); ?></div>

<!--右侧联系栏-->
<div  class="nav-connection">
    <div class="container">
        <div class="row">
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
    </div>

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



</html>