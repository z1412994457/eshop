<?php /*a:2:{s:70:"G:\php_document\1shop\code\application\cms\view\products\products.html";i:1589965776;s:67:"G:\php_document\1shop\code\application\cms\view\public\layouti.html";i:1589965679;}*/ ?>
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

</div>
<div style="text-align: center"><?php echo $products->render(); ?></div>


<!--页脚-->
<div class="jumbotron footer">
    <p>商业合作</p>
    <p></p>
</div>


</body>
<script src="/static/home/js/jquery-3.4.1/jquery-3.4.1.min.js" type="text/javascript" charset="utf-8"></script>



</html>