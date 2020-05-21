<?php /*a:2:{s:64:"G:\php_document\1shop\code\application\cms\view\index\index.html";i:1589961359;s:67:"G:\php_document\1shop\code\application\cms\view\public\layouti.html";i:1589965679;}*/ ?>
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
    </ol>

</div>




<!--页脚-->
<div class="jumbotron footer">
    <p>商业合作</p>
    <p></p>
</div>


</body>
<script src="/static/home/js/jquery-3.4.1/jquery-3.4.1.min.js" type="text/javascript" charset="utf-8"></script>







</html>