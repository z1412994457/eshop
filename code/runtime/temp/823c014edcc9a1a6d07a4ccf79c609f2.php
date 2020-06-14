<?php /*a:6:{s:70:"G:\php_document\1shop\code\application\cms/view/admin/index\index.html";i:1489042526;s:61:"G:\php_document\1shop\code\application\admin/view/layout.html";i:1579404556;s:47:"../application/common/builder/aside/layout.html";i:1551348862;s:54:"../application/common/builder/aside/blocks/recent.html";i:1551348862;s:54:"../application/common/builder/aside/blocks/online.html";i:1551348862;s:54:"../application/common/builder/aside/blocks/switch.html";i:1551348862;}*/ ?>
<!DOCTYPE html>
<!--[if IE 9]>         <html class="ie9 no-focus" lang="zh"> <![endif]-->
<!--[if gt IE 9]><!--> <html class="no-focus" lang="zh"> <!--<![endif]-->
<head>
    <meta charset="utf-8">

    <title><?php echo htmlentities((isset($page_title) && ($page_title !== '')?$page_title:'后台')); ?> | <?php echo config('web_site_title'); ?> - DolphinPHP</title>

    <meta name="description" content="<?php echo config('web_site_description'); ?>">
    <meta name="author" content="caiweiming">
    <meta name="robots" content="noindex, nofollow">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1.0,user-scalable=0">

    <!-- Icons -->
    <!-- The following icons can be replaced with your own, they are used by desktop and mobile browsers -->
    <link rel="shortcut icon" href="/static/admin/img/favicons/favicon.ico">

    <link rel="icon" type="image/png" href="/static/admin/img/favicons/favicon-16x16.png" sizes="16x16">
    <link rel="icon" type="image/png" href="/static/admin/img/favicons/favicon-32x32.png" sizes="32x32">
    <link rel="icon" type="image/png" href="/static/admin/img/favicons/favicon-96x96.png" sizes="96x96">
    <link rel="icon" type="image/png" href="/static/admin/img/favicons/favicon-160x160.png" sizes="160x160">
    <link rel="icon" type="image/png" href="/static/admin/img/favicons/favicon-192x192.png" sizes="192x192">

    <link rel="apple-touch-icon" sizes="57x57" href="/static/admin/img/favicons/apple-touch-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="/static/admin/img/favicons/apple-touch-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/static/admin/img/favicons/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="/static/admin/img/favicons/apple-touch-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/static/admin/img/favicons/apple-touch-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="/static/admin/img/favicons/apple-touch-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="/static/admin/img/favicons/apple-touch-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="/static/admin/img/favicons/apple-touch-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/static/admin/img/favicons/apple-touch-icon-180x180.png">
    <!-- END Icons -->

    <!-- Stylesheets -->
    <!-- Page JS Plugins CSS -->
    <?php if(!(empty($_css_files) || (($_css_files instanceof \think\Collection || $_css_files instanceof \think\Paginator ) && $_css_files->isEmpty()))): if(app('config')->get('minify_status') == '1'): ?>
            <link rel="stylesheet" href="<?php echo minify('group', $_css_files); ?>">
        <?php else: if(is_array($_css_files) || $_css_files instanceof \think\Collection || $_css_files instanceof \think\Paginator): $i = 0; $__LIST__ = $_css_files;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$css): $mod = ($i % 2 );++$i;?>
            <?php echo load_assets($css); ?>
            <?php endforeach; endif; else: echo "" ;endif; ?>
        <?php endif; ?>
    <?php endif; if(!(empty($_icons) || (($_icons instanceof \think\Collection || $_icons instanceof \think\Paginator ) && $_icons->isEmpty()))): if(is_array($_icons) || $_icons instanceof \think\Collection || $_icons instanceof \think\Paginator): $i = 0; $__LIST__ = $_icons;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$icon): $mod = ($i % 2 );++$i;?>
        <link rel="stylesheet" href="<?php echo htmlentities($icon['url']); ?>">
        <?php endforeach; endif; else: echo "" ;endif; ?>
    <?php endif; ?>

    

    <!-- Bootstrap and OneUI CSS framework -->
    <?php if(app('config')->get('minify_status') == '1'): ?>
    <link rel="stylesheet" id="css-main" href="<?php echo minify('group', 'libs_css,core_css'); ?>">
    <?php else: ?>
    <link rel="stylesheet" href="/static/libs/sweetalert/sweetalert.min.css?v=<?php echo config('asset_version'); ?>">
    <link rel="stylesheet" href="/static/libs/magnific-popup/magnific-popup.min.css?v=<?php echo config('asset_version'); ?>">
    <link rel="stylesheet" href="/static/admin/css/bootstrap.min.css?v=<?php echo config('asset_version'); ?>">
    <link rel="stylesheet" href="/static/admin/css/oneui.css?v=<?php echo config('asset_version'); ?>">
    <link rel="stylesheet" href="/static/admin/css/dolphin.css?v=<?php echo config('asset_version'); ?>" id="css-main">
    <link rel="stylesheet" href="/static/libs/viewer/viewer.min.css?v=<?php echo config('asset_version'); ?>">
    <?php endif; ?>
    <link rel="stylesheet" id="css-theme" href="/static/admin/css/themes/<?php echo config('system_color'); ?>.min.css?v=<?php echo config('asset_version'); ?>">

    <!--页面css-->
    
    <?php if(!(empty($_pop) || (($_pop instanceof \think\Collection || $_pop instanceof \think\Paginator ) && $_pop->isEmpty()))): ?>
    <style>
        #page-container.sidebar-l.sidebar-o {
            padding-left: 0;
        }
        .header-navbar-fixed #main-container {
            padding-top: 0;
        }
    </style>
    <?php endif; ?>
    <!-- END Stylesheets -->

    <!--插件css钩子-->
    <?php echo hook('page_plugin_css'); ?>

    <!--自定义css-->
    <link rel="stylesheet" href="/static/admin/css/custom.css?v=<?php echo config('asset_version'); ?>">
    <script>
        // url
        var dolphin = {
            'top_menu_url': '<?php echo url("admin/ajax/getSidebarMenu"); ?>',
            'theme_url': '<?php echo url("admin/ajax/setTheme"); ?>',
            'jcrop_upload_url': '<?php echo !empty($jcrop_upload_url) ? htmlentities($jcrop_upload_url) :  url("admin/attachment/upload", ["dir" => "images", "from" => "jcrop", "module" => request()->module()]); ?>',
            'editormd_upload_url': '<?php echo !empty($editormd_upload_url) ? htmlentities($editormd_upload_url) :  url("admin/attachment/upload", ["dir" => "images", "from" => "editormd", "module" => request()->module()]); ?>',
            'editormd_mudule_path': '/static/libs/editormd/lib/',
            'ueditor_upload_url': '<?php echo !empty($ueditor_upload_url) ? htmlentities($ueditor_upload_url) :  url("admin/attachment/upload", ["dir" => "images", "from" => "ueditor", "module" => request()->module()]); ?>',
            'wangeditor_upload_url': '<?php echo !empty($wangeditor_upload_url) ? htmlentities($wangeditor_upload_url) :  url("admin/attachment/upload", ["dir" => "images", "from" => "wangeditor", "module" => request()->module()]); ?>',
            'wangeditor_emotions': "/static/libs/wang-editor/emotions.data",
            'ckeditor_img_upload_url': '<?php echo !empty($ckeditor_img_upload_url) ? htmlentities($ckeditor_img_upload_url) :  url("admin/attachment/upload", ["dir" => "images", "from" => "ckeditor", "module" => request()->module()]); ?>',
            'WebUploader_swf': '/static/libs/webuploader/Uploader.swf',
            'file_upload_url': '<?php echo !empty($file_upload_url) ? htmlentities($file_upload_url) :  url("admin/attachment/upload", ["dir" => "files", "module" => request()->module()]); ?>',
            'image_upload_url': '<?php echo !empty($image_upload_url) ? htmlentities($image_upload_url) :  url("admin/attachment/upload", ["dir" => "images", "module" => request()->module()]); ?>',
            'upload_check_url': '<?php echo !empty($upload_check_url) ? htmlentities($upload_check_url) :  url("admin/ajax/check"); ?>',
            'get_level_data': '<?php echo url("admin/ajax/getLevelData"); ?>',
            'quick_edit_url': '<?php echo !empty($quick_edit_url) ? htmlentities($quick_edit_url) :  url("quickEdit"); ?>',
            'aside_edit_url': '<?php echo !empty($aside_edit_url) ? htmlentities($aside_edit_url) :  url("admin/system/quickEdit"); ?>',
            'triggers': <?php echo json_encode(isset($field_triggers) ? $field_triggers : []); ?>, // 触发器集合
            'field_hide': '<?php echo htmlentities((isset($field_hide) && ($field_hide !== '')?$field_hide:"")); ?>', // 需要隐藏的字段
            'field_values': '<?php echo htmlentities((isset($field_values) && ($field_values !== '')?$field_values:"")); ?>',
            'validate': '<?php echo htmlentities((isset($validate) && ($validate !== '')?$validate:"")); ?>', // 验证器
            'validate_fields': '<?php echo htmlentities((isset($validate_fields) && ($validate_fields !== '')?$validate_fields:"")); ?>', // 验证字段
            'search_field': '<?php echo input("param.search_field", ""); ?>', // 搜索字段
            // 字段过滤
            '_filter': '<?php echo app('request')->param('_filter')?app('request')->param('_filter') : (isset($_filter) ? $_filter : ""); ?>',
            '_filter_content': '<?php echo app('request')->param('_filter_content')==''?(isset($_filter_content) ? $_filter_content : "") : app('request')->param('_filter_content'); ?>',
            '_field_display': '<?php echo app('request')->param('_field_display')?app('request')->param('_field_display') : (isset($_field_display) ? $_field_display : ""); ?>',
            '_field_clear': <?php echo json_encode(isset($field_clear) ? $field_clear : []); ?>,
            'get_filter_list': '<?php echo url("admin/ajax/getFilterList"); ?>',
            'curr_url': '<?php echo url("", app('request')->route()); ?>',
            'curr_params': <?php echo json_encode(app('request')->param()); ?>,
            'layer': <?php echo json_encode(config("zbuilder.pop")); ?>
        };
    </script>
</head>
<body>
<!-- Page Container -->
<div id="page-container" class="sidebar-l sidebar-o side-scroll header-navbar-fixed <?php if(empty($_pop) || (($_pop instanceof \think\Collection || $_pop instanceof \think\Paginator ) && $_pop->isEmpty())): if(!empty($_COOKIE['sidebarMini'])) echo 'sidebar-mini'; ?><?php endif; ?>">
    <!-- Side Overlay-->
    <?php if(empty($_pop) || (($_pop instanceof \think\Collection || $_pop instanceof \think\Paginator ) && $_pop->isEmpty())): ?>
    
    <aside id="side-overlay">
        <!-- Side Overlay Scroll Container -->
        <div id="side-overlay-scroll">
            <!-- Side Header -->
            <div class="side-header side-content">
                <!-- Layout API, functionality initialized in App() -> uiLayoutApi() -->
                <button class="btn btn-default pull-right" type="button" data-toggle="layout" data-action="side_overlay_close">
                    <i class="fa fa-times"></i>
                </button>
                <span>
                    <img class="img-avatar img-avatar32" src="<?php echo htmlentities(get_avatar(app('session')->get('user_auth.uid'))); ?>" alt="">
                    <span class="font-w600 push-10-l"><?php echo session('user_auth.username'); ?></span>
                </span>
            </div>
            <!-- END Side Header -->
            <!--侧栏-->
            <!-- Side Content -->
<div class="side-content remove-padding-t" id="aside">
    <!-- Side Overlay Tabs -->
    <div class="block pull-r-l border-t">
        <?php if(!(empty($aside['tab_nav']) || (($aside['tab_nav'] instanceof \think\Collection || $aside['tab_nav'] instanceof \think\Paginator ) && $aside['tab_nav']->isEmpty()))): ?>
        <ul class="nav nav-tabs nav-tabs-alt nav-justified" data-toggle="tabs">
            <?php if(is_array($aside['tab_nav']['tab_list']) || $aside['tab_nav']['tab_list'] instanceof \think\Collection || $aside['tab_nav']['tab_list'] instanceof \think\Paginator): $i = 0; $__LIST__ = $aside['tab_nav']['tab_list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$tab): $mod = ($i % 2 );++$i;?>
            <li <?php if($aside['tab_nav']['curr_tab']==$key) echo 'class="active"'; ?>>
                <a href="#<?php echo htmlentities($key); ?>"><?php echo $tab; ?></a>
            </li>
            <?php endforeach; endif; else: echo "" ;endif; ?>
        </ul>
        <?php endif; if(!(empty($aside['tab_con']) || (($aside['tab_con'] instanceof \think\Collection || $aside['tab_con'] instanceof \think\Paginator ) && $aside['tab_con']->isEmpty()))): ?>
        <div class="block-content tab-content">
            <?php if(is_array($aside['tab_con']) || $aside['tab_con'] instanceof \think\Collection || $aside['tab_con'] instanceof \think\Paginator): $i = 0; $__LIST__ = $aside['tab_con'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$con): $mod = ($i % 2 );++$i;?>
            <div class="tab-pane fade fade-right <?php if($aside['tab_nav']['curr_tab']==$key) echo 'in active'; ?>" id="<?php echo htmlentities($key); ?>">
                <?php if(!(empty($con) || (($con instanceof \think\Collection || $con instanceof \think\Paginator ) && $con->isEmpty()))): if(is_array($con) || $con instanceof \think\Collection || $con instanceof \think\Paginator): $i = 0; $__LIST__ = $con;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$_block): $mod = ($i % 2 );++$i;switch($_block['type']): case "recent": ?>
<div class="block pull-r-l">
    <div class="block-header bg-gray-lighter">
        <ul class="block-options">
            <li>
                <button type="button" data-toggle="block-option" data-action="refresh_toggle" data-action-mode="demo"><i class="si si-refresh"></i></button>
            </li>
            <li>
                <button type="button" data-toggle="block-option" data-action="content_toggle"></button>
            </li>
        </ul>
        <h3 class="block-title"><?php echo (isset($_block['title']) && ($_block['title'] !== '')?$_block['title']:''); ?></h3>
    </div>
    <div class="block-content">
        <?php if(!(empty($_block['list']) || (($_block['list'] instanceof \think\Collection || $_block['list'] instanceof \think\Paginator ) && $_block['list']->isEmpty()))): ?>
        <ul class="list list-activity">
            <?php if(is_array($_block['list']) || $_block['list'] instanceof \think\Collection || $_block['list'] instanceof \think\Paginator): $i = 0; $__LIST__ = $_block['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
            <li>
                <?php if(!(empty($vo['icon']) || (($vo['icon'] instanceof \think\Collection || $vo['icon'] instanceof \think\Paginator ) && $vo['icon']->isEmpty()))): ?><i class="<?php echo htmlentities($vo['icon']); ?>"></i><?php endif; ?>
                <div class="font-w600"><?php echo (isset($vo['title']) && ($vo['title'] !== '')?$vo['title']:''); ?></div>
                <div>
                    <?php if(!(empty($vo['link']['url']) || (($vo['link']['url'] instanceof \think\Collection || $vo['link']['url'] instanceof \think\Paginator ) && $vo['link']['url']->isEmpty()))): ?>
                        <a href="<?php echo $vo['link']['url']; ?>"><?php echo (isset($vo['link']['title']) && ($vo['link']['title'] !== '')?$vo['link']['title']:''); ?></a>
                    <?php else: ?>
                        <?php echo (isset($vo['link']['title']) && ($vo['link']['title'] !== '')?$vo['link']['title']:''); ?>
                    <?php endif; ?>
                </div>
                <?php if(!(empty($vo['tips']) || (($vo['tips'] instanceof \think\Collection || $vo['tips'] instanceof \think\Paginator ) && $vo['tips']->isEmpty()))): ?>
                <div><small class="text-muted"><?php echo $vo['tips']; ?></small></div>
                <?php endif; ?>
            </li>
            <?php endforeach; endif; else: echo "" ;endif; ?>
        </ul>
        <?php endif; ?>
    </div>
</div>
<?php break; case "online": ?>
<div class="block pull-r-l">
    <div class="block-header bg-gray-lighter">
        <ul class="block-options">
            <li>
                <button type="button" data-toggle="block-option" data-action="refresh_toggle" data-action-mode="demo"><i class="si si-refresh"></i></button>
            </li>
            <li>
                <button type="button" data-toggle="block-option" data-action="content_toggle"></button>
            </li>
        </ul>
        <h3 class="block-title"><?php echo htmlentities((isset($_block['title']) && ($_block['title'] !== '')?$_block['title']:'')); ?></h3>
    </div>
    <div class="block-content block-content-full">
        <?php if(!(empty($_block['list']) || (($_block['list'] instanceof \think\Collection || $_block['list'] instanceof \think\Paginator ) && $_block['list']->isEmpty()))): ?>
        <ul class="nav-users remove-margin-b">
            <?php if(is_array($_block['list']) || $_block['list'] instanceof \think\Collection || $_block['list'] instanceof \think\Paginator): $i = 0; $__LIST__ = $_block['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
            <li>
                <a href="<?php echo htmlentities((isset($vo['link']) && ($vo['link'] !== '')?$vo['link']:'javascript:void(0);')); ?>">
                    <img class="img-avatar" src="<?php echo htmlentities((isset($vo['avatar']) && ($vo['avatar'] !== '')?$vo['avatar']:'/static/admin/img/avatar.jpg')); ?>" alt="">
                    <i class="fa fa-circle text-<?php echo !empty($vo['online']) ? 'success'  :  'warning'; ?>"></i> <?php echo htmlentities((isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:'')); ?>
                    <div class="font-w400 text-muted"><small><?php echo (isset($vo['tips']) && ($vo['tips'] !== '')?$vo['tips']:''); ?></small></div>
                </a>
            </li>
            <?php endforeach; endif; else: echo "" ;endif; ?>
        </ul>
        <?php endif; ?>
    </div>
</div>
<?php break; case "switch": ?>
<div class="block pull-r-l">
    <div class="block-header bg-gray-lighter">
        <ul class="block-options">
            <li>
                <button type="button" data-toggle="block-option" data-action="content_toggle"></button>
            </li>
        </ul>
        <h3 class="block-title"><?php echo (isset($_block['title']) && ($_block['title'] !== '')?$_block['title']:''); ?></h3>
    </div>
    <div class="block-content">
        <?php if(!(empty($_block['list']) || (($_block['list'] instanceof \think\Collection || $_block['list'] instanceof \think\Paginator ) && $_block['list']->isEmpty()))): ?>
        <div class="form-bordered">
            <?php if(is_array($_block['list']) || $_block['list'] instanceof \think\Collection || $_block['list'] instanceof \think\Paginator): $i = 0; $__LIST__ = $_block['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
            <div class="form-group">
                <div class="row">
                    <div class="col-xs-8">
                        <div class="font-s13 font-w600"><?php echo (isset($vo['title']) && ($vo['title'] !== '')?$vo['title']:''); ?></div>
                        <div class="font-s13 font-w400 text-muted"><?php echo (isset($vo['tips']) && ($vo['tips'] !== '')?$vo['tips']:''); ?></div>
                    </div>
                    <div class="col-xs-4 text-right">
                        <label class="css-input switch switch-sm switch-primary push-10-t">
                            <input type="checkbox" data-table="<?php echo (isset($vo['table']) && ($vo['table'] !== '')?$vo['table']:''); ?>" data-id="<?php echo htmlentities((isset($vo['id']) && ($vo['id'] !== '')?$vo['id']:'')); ?>" data-field="<?php echo htmlentities((isset($vo['field']) && ($vo['field'] !== '')?$vo['field']:'')); ?>" <?php if(!empty($vo['checked'])) echo 'checked=""'; ?>><span></span>
                        </label>
                    </div>
                </div>
            </div>
            <?php endforeach; endif; else: echo "" ;endif; ?>
        </div>
        <?php endif; ?>
    </div>
</div>
<?php break; ?>
                    <?php endswitch; ?>
                <?php endforeach; endif; else: echo "" ;endif; ?>
                <?php endif; ?>
            </div>
            <?php endforeach; endif; else: echo "" ;endif; ?>
        </div>
        <?php endif; if(!(empty($aside['blocks']) || (($aside['blocks'] instanceof \think\Collection || $aside['blocks'] instanceof \think\Paginator ) && $aside['blocks']->isEmpty()))): ?>
        <div class="block-content">
            <?php if(is_array($aside['blocks']) || $aside['blocks'] instanceof \think\Collection || $aside['blocks'] instanceof \think\Paginator): $i = 0; $__LIST__ = $aside['blocks'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$_block): $mod = ($i % 2 );++$i;switch($_block['type']): case "recent": ?>
<div class="block pull-r-l">
    <div class="block-header bg-gray-lighter">
        <ul class="block-options">
            <li>
                <button type="button" data-toggle="block-option" data-action="refresh_toggle" data-action-mode="demo"><i class="si si-refresh"></i></button>
            </li>
            <li>
                <button type="button" data-toggle="block-option" data-action="content_toggle"></button>
            </li>
        </ul>
        <h3 class="block-title"><?php echo (isset($_block['title']) && ($_block['title'] !== '')?$_block['title']:''); ?></h3>
    </div>
    <div class="block-content">
        <?php if(!(empty($_block['list']) || (($_block['list'] instanceof \think\Collection || $_block['list'] instanceof \think\Paginator ) && $_block['list']->isEmpty()))): ?>
        <ul class="list list-activity">
            <?php if(is_array($_block['list']) || $_block['list'] instanceof \think\Collection || $_block['list'] instanceof \think\Paginator): $i = 0; $__LIST__ = $_block['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
            <li>
                <?php if(!(empty($vo['icon']) || (($vo['icon'] instanceof \think\Collection || $vo['icon'] instanceof \think\Paginator ) && $vo['icon']->isEmpty()))): ?><i class="<?php echo htmlentities($vo['icon']); ?>"></i><?php endif; ?>
                <div class="font-w600"><?php echo (isset($vo['title']) && ($vo['title'] !== '')?$vo['title']:''); ?></div>
                <div>
                    <?php if(!(empty($vo['link']['url']) || (($vo['link']['url'] instanceof \think\Collection || $vo['link']['url'] instanceof \think\Paginator ) && $vo['link']['url']->isEmpty()))): ?>
                        <a href="<?php echo $vo['link']['url']; ?>"><?php echo (isset($vo['link']['title']) && ($vo['link']['title'] !== '')?$vo['link']['title']:''); ?></a>
                    <?php else: ?>
                        <?php echo (isset($vo['link']['title']) && ($vo['link']['title'] !== '')?$vo['link']['title']:''); ?>
                    <?php endif; ?>
                </div>
                <?php if(!(empty($vo['tips']) || (($vo['tips'] instanceof \think\Collection || $vo['tips'] instanceof \think\Paginator ) && $vo['tips']->isEmpty()))): ?>
                <div><small class="text-muted"><?php echo $vo['tips']; ?></small></div>
                <?php endif; ?>
            </li>
            <?php endforeach; endif; else: echo "" ;endif; ?>
        </ul>
        <?php endif; ?>
    </div>
</div>
<?php break; case "online": ?>
<div class="block pull-r-l">
    <div class="block-header bg-gray-lighter">
        <ul class="block-options">
            <li>
                <button type="button" data-toggle="block-option" data-action="refresh_toggle" data-action-mode="demo"><i class="si si-refresh"></i></button>
            </li>
            <li>
                <button type="button" data-toggle="block-option" data-action="content_toggle"></button>
            </li>
        </ul>
        <h3 class="block-title"><?php echo htmlentities((isset($_block['title']) && ($_block['title'] !== '')?$_block['title']:'')); ?></h3>
    </div>
    <div class="block-content block-content-full">
        <?php if(!(empty($_block['list']) || (($_block['list'] instanceof \think\Collection || $_block['list'] instanceof \think\Paginator ) && $_block['list']->isEmpty()))): ?>
        <ul class="nav-users remove-margin-b">
            <?php if(is_array($_block['list']) || $_block['list'] instanceof \think\Collection || $_block['list'] instanceof \think\Paginator): $i = 0; $__LIST__ = $_block['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
            <li>
                <a href="<?php echo htmlentities((isset($vo['link']) && ($vo['link'] !== '')?$vo['link']:'javascript:void(0);')); ?>">
                    <img class="img-avatar" src="<?php echo htmlentities((isset($vo['avatar']) && ($vo['avatar'] !== '')?$vo['avatar']:'/static/admin/img/avatar.jpg')); ?>" alt="">
                    <i class="fa fa-circle text-<?php echo !empty($vo['online']) ? 'success'  :  'warning'; ?>"></i> <?php echo htmlentities((isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:'')); ?>
                    <div class="font-w400 text-muted"><small><?php echo (isset($vo['tips']) && ($vo['tips'] !== '')?$vo['tips']:''); ?></small></div>
                </a>
            </li>
            <?php endforeach; endif; else: echo "" ;endif; ?>
        </ul>
        <?php endif; ?>
    </div>
</div>
<?php break; case "switch": ?>
<div class="block pull-r-l">
    <div class="block-header bg-gray-lighter">
        <ul class="block-options">
            <li>
                <button type="button" data-toggle="block-option" data-action="content_toggle"></button>
            </li>
        </ul>
        <h3 class="block-title"><?php echo (isset($_block['title']) && ($_block['title'] !== '')?$_block['title']:''); ?></h3>
    </div>
    <div class="block-content">
        <?php if(!(empty($_block['list']) || (($_block['list'] instanceof \think\Collection || $_block['list'] instanceof \think\Paginator ) && $_block['list']->isEmpty()))): ?>
        <div class="form-bordered">
            <?php if(is_array($_block['list']) || $_block['list'] instanceof \think\Collection || $_block['list'] instanceof \think\Paginator): $i = 0; $__LIST__ = $_block['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
            <div class="form-group">
                <div class="row">
                    <div class="col-xs-8">
                        <div class="font-s13 font-w600"><?php echo (isset($vo['title']) && ($vo['title'] !== '')?$vo['title']:''); ?></div>
                        <div class="font-s13 font-w400 text-muted"><?php echo (isset($vo['tips']) && ($vo['tips'] !== '')?$vo['tips']:''); ?></div>
                    </div>
                    <div class="col-xs-4 text-right">
                        <label class="css-input switch switch-sm switch-primary push-10-t">
                            <input type="checkbox" data-table="<?php echo (isset($vo['table']) && ($vo['table'] !== '')?$vo['table']:''); ?>" data-id="<?php echo htmlentities((isset($vo['id']) && ($vo['id'] !== '')?$vo['id']:'')); ?>" data-field="<?php echo htmlentities((isset($vo['field']) && ($vo['field'] !== '')?$vo['field']:'')); ?>" <?php if(!empty($vo['checked'])) echo 'checked=""'; ?>><span></span>
                        </label>
                    </div>
                </div>
            </div>
            <?php endforeach; endif; else: echo "" ;endif; ?>
        </div>
        <?php endif; ?>
    </div>
</div>
<?php break; case "html": ?>
                        <?php echo (isset($_block['title']) && ($_block['title'] !== '')?$_block['title']:''); break; ?>
                <?php endswitch; ?>
            <?php endforeach; endif; else: echo "" ;endif; ?>
        </div>
        <?php endif; ?>
    </div>
    <!-- END Side Overlay Tabs -->
</div>
<!-- END Side Content -->
        </div>
        <!-- END Side Overlay Scroll Container -->
    </aside>
    
    <?php endif; ?>
    <!-- END Side Overlay -->

    <!-- Sidebar -->
    <?php if(empty($_pop) || (($_pop instanceof \think\Collection || $_pop instanceof \think\Paginator ) && $_pop->isEmpty())): ?>
    
    <nav id="sidebar">
        <!-- Sidebar Scroll Container -->
        <div id="sidebar-scroll">
            <!-- Sidebar Content -->
            <!-- Adding .sidebar-mini-hide to an element will hide it when the sidebar is in mini mode -->
            <div class="sidebar-content">
                <!-- Side Header -->
                <div class="side-header side-content bg-white-op dolphin-header">
                    <!-- Layout API, functionality initialized in App() -> uiLayoutApi() -->
                    <button class="btn btn-link text-gray pull-right hidden-md hidden-lg" type="button" data-toggle="layout" data-action="sidebar_close">
                        <i class="fa fa-times"></i>
                    </button>
                    <!-- Themes functionality initialized in App() -> uiHandleTheme() -->
                    <div class="btn-group pull-right">
                        <button class="btn btn-link text-gray dropdown-toggle" data-toggle="dropdown" type="button">
                            <i class="si si-drop"></i>
                        </button>
                        <ul class="dropdown-menu dropdown-menu-right font-s13 sidebar-mini-hide">
                            <li <?php if($system_color=='modern') echo 'class="active"'; ?>>
                                <a data-toggle="theme" data-theme="modern" data-css="/static/admin/css/themes/modern.min.css" tabindex="-1" href="javascript:void(0)">
                                    <i class="fa fa-circle text-modern pull-right"></i> <span class="font-w600">Modern</span>
                                </a>
                            </li>
                            <li <?php if($system_color=='amethyst') echo 'class="active"'; ?>>
                                <a data-toggle="theme" data-theme="amethyst" data-css="/static/admin/css/themes/amethyst.min.css" tabindex="-1" href="javascript:void(0)">
                                    <i class="fa fa-circle text-amethyst pull-right"></i> <span class="font-w600">Amethyst</span>
                                </a>
                            </li>
                            <li <?php if($system_color=='city') echo 'class="active"'; ?>>
                                <a data-toggle="theme" data-theme="city" data-css="/static/admin/css/themes/city.min.css" tabindex="-1" href="javascript:void(0)">
                                    <i class="fa fa-circle text-city pull-right"></i> <span class="font-w600">City</span>
                                </a>
                            </li>
                            <li <?php if($system_color=='flat') echo 'class="active"'; ?>>
                                <a data-toggle="theme" data-theme="flat" data-css="/static/admin/css/themes/flat.min.css" tabindex="-1" href="javascript:void(0)">
                                    <i class="fa fa-circle text-flat pull-right"></i> <span class="font-w600">Flat</span>
                                </a>
                            </li>
                            <li <?php if($system_color=='smooth') echo 'class="active"'; ?>>
                                <a data-toggle="theme" data-theme="smooth" data-css="/static/admin/css/themes/smooth.min.css" tabindex="-1" href="javascript:void(0)">
                                    <i class="fa fa-circle text-smooth pull-right"></i> <span class="font-w600">Smooth</span>
                                </a>
                            </li>
                            <li <?php if($system_color=='default') echo 'class="active"'; ?>>
                                <a data-toggle="theme" data-theme="default" tabindex="-1" href="javascript:void(0)">
                                    <i class="fa fa-circle text-default pull-right"></i> <span class="font-w600">Default</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <a class="h5 text-white" href="<?php echo url('admin/index/index'); ?>">
                        <?php if(!(empty(app('config')->get('web_site_logo')) || ((app('config')->get('web_site_logo') instanceof \think\Collection || app('config')->get('web_site_logo') instanceof \think\Paginator ) && app('config')->get('web_site_logo')->isEmpty()))): ?>
                        <img src="<?php echo htmlentities(get_file_path(app('config')->get('web_site_logo'))); ?>" class="logo" alt="<?php echo htmlentities((app('config')->get('web_site_title') ?: 'Dolphin PHP')); ?>">
                        <?php else: ?>
                        <img src="<?php echo htmlentities(app('config')->get('public_static_path')); ?>admin/img/logo.png" class="logo" alt="Dolphin PHP">
                        <?php endif; if(!(empty(app('config')->get('web_site_logo_text')) || ((app('config')->get('web_site_logo_text') instanceof \think\Collection || app('config')->get('web_site_logo_text') instanceof \think\Paginator ) && app('config')->get('web_site_logo_text')->isEmpty()))): ?>
                        <img src="<?php echo htmlentities(get_file_path(app('config')->get('web_site_logo_text'))); ?>" class="logo-text sidebar-mini-hide" alt="<?php echo htmlentities((app('config')->get('web_site_title') ?: 'Dolphin PHP')); ?>">
                        <?php else: ?>
                        <img src="<?php echo htmlentities(app('config')->get('public_static_path')); ?>admin/img/logo-text.png" class="logo-text sidebar-mini-hide" alt="Dolphin PHP">
                        <?php endif; ?>
                    </a>
                </div>
                <!-- END Side Header -->

                <!-- Side Content -->
                <div class="side-content" id="sidebar-menu">
                    <?php if(!(empty($_sidebar_menus) || (($_sidebar_menus instanceof \think\Collection || $_sidebar_menus instanceof \think\Paginator ) && $_sidebar_menus->isEmpty()))): ?>
                    <ul class="nav-main" id="nav-<?php echo htmlentities($_location[0]['id']); ?>">
                        <?php if(is_array($_sidebar_menus) || $_sidebar_menus instanceof \think\Collection || $_sidebar_menus instanceof \think\Paginator): $i = 0; $__LIST__ = $_sidebar_menus;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$menu): $mod = ($i % 2 );++$i;?>
                        <li <?php if($menu['id']==$_location[1]["id"]) echo 'class="open"'; ?>>
                            <?php if(!(empty($menu['url_value']) || (($menu['url_value'] instanceof \think\Collection || $menu['url_value'] instanceof \think\Paginator ) && $menu['url_value']->isEmpty()))): ?>
                                <a <?php if(($menu['id'] == $_location[1]["id"])): ?>class="active"<?php endif; ?> href="<?php echo htmlentities($menu['url_value']); ?>" target="<?php echo htmlentities($menu['url_target']); ?>"><i class="<?php echo htmlentities($menu['icon']); ?>"></i><span class="sidebar-mini-hide"><?php echo htmlentities($menu['title']); ?></span></a>
                            <?php else: ?>
                                <a class="nav-submenu" data-toggle="nav-submenu" href="javascript:void(0);"><i class="<?php echo htmlentities($menu['icon']); ?>"></i><span class="sidebar-mini-hide"><?php echo htmlentities($menu['title']); ?></span></a>
                                <?php if(!(empty($menu['child']) || (($menu['child'] instanceof \think\Collection || $menu['child'] instanceof \think\Paginator ) && $menu['child']->isEmpty()))): ?>
                                <ul>
                                    <?php if(is_array($menu['child']) || $menu['child'] instanceof \think\Collection || $menu['child'] instanceof \think\Paginator): $i = 0; $__LIST__ = $menu['child'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$submenu): $mod = ($i % 2 );++$i;?>
                                    <li>
                                        <a <?php if((isset($_location[2]) && $submenu['id'] == $_location[2]["id"])): ?>class="active"<?php endif; ?> href="<?php echo htmlentities($submenu['url_value']); ?>" target="<?php echo htmlentities($submenu['url_target']); ?>"><i class="<?php echo htmlentities($submenu['icon']); ?>"></i><?php echo htmlentities($submenu['title']); ?></a>
                                    </li>
                                    <?php endforeach; endif; else: echo "" ;endif; ?>
                                </ul>
                                <?php endif; ?>
                            <?php endif; ?>
                        </li>
                        <?php endforeach; endif; else: echo "" ;endif; ?>
                    </ul>
                    <?php endif; ?>
                </div>
                <!-- END Side Content -->
            </div>
            <!-- Sidebar Content -->
        </div>
        <!-- END Sidebar Scroll Container -->
    </nav>
    
    <?php endif; ?>
    <!-- END Sidebar -->

    <!-- Header -->
    <?php if(empty($_pop) || (($_pop instanceof \think\Collection || $_pop instanceof \think\Paginator ) && $_pop->isEmpty())): ?>
    
    <header id="header-navbar" class="content-mini content-mini-full">
        <!-- Header Navigation Right -->
        <ul class="nav-header pull-right">
            <li>
                <div class="btn-group">
                    <button class="btn btn-default btn-image dropdown-toggle" data-toggle="dropdown" type="button">
                        <img src="<?php echo htmlentities(get_avatar(app('session')->get('user_auth.uid'))); ?>" alt="<?php echo session('user_auth.username'); ?>">
                        <span class="caret"></span>
                        <?php if(!(empty($_message) || (($_message instanceof \think\Collection || $_message instanceof \think\Paginator ) && $_message->isEmpty()))): if($_message > '0'): ?>
                        <i class="fa fa-circle text-danger notice-circle"></i>
                        <?php endif; ?>
                        <?php endif; ?>
                    </button>
                    <ul class="dropdown-menu dropdown-menu-right">
                        <li class="dropdown-header"><?php echo session('user_auth.username'); ?> (<?php echo session('user_auth.role_name'); ?>)</li>
                        <li>
                            <a tabindex="-1" href="<?php echo url('admin/index/profile'); ?>">
                                <i class="si si-settings pull-right"></i>个人设置
                            </a>
                        </li>
                        <li>
                            <a tabindex="-1" href="<?php echo url('admin/message/index'); ?>">
                                <i class="si si-envelope-open pull-right"></i><span class="badge badge-primary pull-right"><?php echo htmlentities((isset($_message) && ($_message !== '')?$_message:0)); ?></span>消息中心
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a tabindex="-1" href="<?php echo url('user/publics/signout'); ?>">
                                <i class="si si-logout pull-right"></i>退出帐号
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            <li>
                <a class="btn btn-default ajax-get" href="<?php echo url('admin/index/wipeCache'); ?>" data-toggle="tooltip" data-placement="bottom" data-original-title="清空缓存">
                    <i class="fa fa-trash"></i>
                </a>
            </li>
            <li>
                <a class="btn btn-default" href="<?php echo rtrim(home_url('/'), '/'); ?>" target="_blank" data-toggle="tooltip" data-placement="bottom" data-original-title="打开前台">
                    <i class="fa fa-external-link-square"></i>
                </a>
            </li>
            <li>
                <!-- Layout API, functionality initialized in App() -> uiLayoutApi() -->
                <button class="btn btn-default" data-toggle="layout" data-action="side_overlay_toggle" title="侧边栏" type="button">
                    <i class="fa fa-tasks"></i>
                </button>
            </li>
        </ul>
        <!-- END Header Navigation Right -->

        <!-- Header Navigation Left -->
        <ul class="nav nav-pills pull-left">
            <li class="hidden-md hidden-lg">
                <!-- Layout API, functionality initialized in App() -> uiLayoutApi() -->
                <a href="javascript:void(0)" data-toggle="layout" data-action="sidebar_toggle"><i class="fa fa-navicon"></i></a>
            </li>
            <li class="hidden-xs hidden-sm">
                <!-- Layout API, functionality initialized in App() -> uiLayoutApi() -->
                <a href="javascript:void(0)" title="打开/关闭左侧导航" data-toggle="layout" data-action="sidebar_mini_toggle"><i class="fa fa-bars"></i></a>
            </li>
            <?php if(!(empty($_top_menus) || (($_top_menus instanceof \think\Collection || $_top_menus instanceof \think\Paginator ) && $_top_menus->isEmpty()))): if(is_array($_top_menus) || $_top_menus instanceof \think\Collection || $_top_menus instanceof \think\Paginator): $i = 0; $__LIST__ = $_top_menus;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$menu): $mod = ($i % 2 );++$i;?>
            <li class="hidden-xs hidden-sm <?php if($menu['id']==$_location[0]['id']) echo 'active'; ?>">
                <?php if(in_array(($menu['url_type']), explode(',',"module_admin,module_home"))): ?>
                <a href="javascript:void(0);" data-module-id="<?php echo htmlentities($menu['id']); ?>" data-module="<?php echo htmlentities($menu['module']); ?>" data-controller="<?php echo htmlentities($menu['controller']); ?>" target="<?php echo htmlentities($menu['url_target']); ?>" class="top-menu"><i class="<?php echo htmlentities($menu['icon']); ?>"></i> <?php echo htmlentities($menu['title']); ?></a>
                <?php else: ?>
                <a href="<?php echo htmlentities($menu['url_value']); ?>" target="<?php echo htmlentities($menu['url_target']); ?>"><i class="<?php echo htmlentities($menu['icon']); ?>"></i> <?php echo htmlentities($menu['title']); ?></a>
                <?php endif; ?>
            </li>
            <?php endforeach; endif; else: echo "" ;endif; ?>
            <?php endif; ?>
            <li>
                <!-- Opens the Apps modal found at the bottom of the page, before including JS code -->
                <a href="#" data-toggle="modal" data-target="#apps-modal"><i class="si si-grid"></i></a>
            </li>
        </ul>
        <!-- END Header Navigation Left -->
    </header>
    
    <?php endif; ?>
    <!-- END Header -->

    <!-- Main Container -->
    <main id="main-container">
        <!-- Page Header -->
        
        <?php if(empty($_pop) || (($_pop instanceof \think\Collection || $_pop instanceof \think\Paginator ) && $_pop->isEmpty())): ?>
        <div class="bg-gray-lighter">
            <ol class="breadcrumb">
                <li><i class="fa fa-map-marker"></i></li>
                <?php if(!(empty($_location) || (($_location instanceof \think\Collection || $_location instanceof \think\Paginator ) && $_location->isEmpty()))): if(is_array($_location) || $_location instanceof \think\Collection || $_location instanceof \think\Paginator): $i = 0; $__LIST__ = $_location;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?>
                <li><a class="link-effect" href="<?php if(!(empty($v["url_value"]) || (($v["url_value"] instanceof \think\Collection || $v["url_value"] instanceof \think\Paginator ) && $v["url_value"]->isEmpty()))): ?><?php echo url($v['url_value'], $v['params']); else: ?>javascript:void(0);<?php endif; ?>"><?php echo htmlentities($v['title']); ?></a></li>
                <?php endforeach; endif; else: echo "" ;endif; ?>
                <?php endif; ?>
            </ol>
        </div>
        <?php endif; ?>
        
        <!-- END Page Header -->

        <!-- Page Content -->
        <div class="content">
            
            <?php echo hook('page_tips'); ?>
            
            
<div class="alert alert-info alert-dismissable">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
    <h3 class="font-w300 push-15">新手指导</h3>
    <p>相关参数设置，请在【系统】>【系统功能】>【系统设置】>【<a class="alert-link" href="<?php echo url('admin/system/index', ['group' => 'cms']); ?>">门户</a>】中设置，或 <a class="alert-link" href="<?php echo url('admin/system/index', ['group' => 'cms']); ?>">点此</a> 跳转。</p>
    <!--<p>先 <a class="alert-link" href="<?php echo url('cms/column/add'); ?>">创建栏目</a>，</p>-->
</div>
<div class="row">
    <div class="col-sm-6 col-md-3">
        <a class="block block-link-hover3 text-center" href="<?php echo url('document/index'); ?>">
            <div class="block-content block-content-full">
                <div class="h1 font-w700 text-primary" data-toggle="countTo" data-to="<?php echo htmlentities((isset($document) && ($document !== '')?$document:0)); ?>"></div>
            </div>
            <div class="block-content block-content-full block-content-mini bg-gray-lighter text-muted font-w600">文档</div>
        </a>
    </div>
    <div class="col-sm-6 col-md-3">
        <a class="block block-link-hover3 text-center" href="<?php echo url('column/index'); ?>">
            <div class="block-content block-content-full">
                <div class="h1 font-w700 text-success" data-toggle="countTo" data-to="<?php echo htmlentities((isset($column) && ($column !== '')?$column:0)); ?>"></div>
            </div>
            <div class="block-content block-content-full block-content-mini bg-gray-lighter text-muted font-w600">栏目</div>
        </a>
    </div>
    <div class="col-sm-6 col-md-3">
        <a class="block block-link-hover3 text-center" href="<?php echo url('page/index'); ?>">
            <div class="block-content block-content-full">
                <div class="h1 font-w700 text-info" data-toggle="countTo" data-to="<?php echo htmlentities((isset($page) && ($page !== '')?$page:0)); ?>"></div>
            </div>
            <div class="block-content block-content-full block-content-mini bg-gray-lighter text-muted font-w600">单页</div>
        </a>
    </div>
    <div class="col-sm-6 col-md-3">
        <a class="block block-link-hover3 text-center" href="<?php echo url('model/index'); ?>">
            <div class="block-content block-content-full">
                <div class="h1 font-w700 text-warning"><span data-toggle="countTo" data-to="<?php echo htmlentities((isset($model) && ($model !== '')?$model:0)); ?>"></span></div>
            </div>
            <div class="block-content block-content-full block-content-mini bg-gray-lighter text-muted font-w600">模型</div>
        </a>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="block block-bordered">
            <div class="block-header bg-gray-lighter">
                <h3 class="block-title">快捷操作</h3>
            </div>
            <div class="block-content">
                <div class="row">
                    <div class="col-xs-6 col-sm-4 col-lg-2">
                        <a class="block block-link-hover3 text-center" href="<?php echo url('document/add'); ?>">
                            <div class="block-content block-content-full">
                                <i class="fa fa-plus fa-3x text-muted"></i>
                                <div class="font-w600 push-15-t">发布文档</div>
                            </div>
                        </a>
                    </div>
                    <div class="col-xs-6 col-sm-4 col-lg-2">
                        <a class="block block-link-hover3 text-center" href="<?php echo url('nav/index'); ?>">
                            <div class="block-content block-content-full">
                                <i class="fa fa-map-signs fa-3x text-muted"></i>
                                <div class="font-w600 push-15-t">导航管理</div>
                            </div>
                        </a>
                    </div>
                    <div class="col-xs-6 col-sm-4 col-lg-2">
                        <a class="block block-link-hover3 text-center" href="<?php echo url('slider/index'); ?>">
                            <div class="block-content block-content-full">
                                <i class="fa fa-photo fa-3x text-muted"></i>
                                <div class="font-w600 push-15-t">滚动图片</div>
                            </div>
                        </a>
                    </div>
                    <div class="col-xs-6 col-sm-4 col-lg-2">
                        <a class="block block-link-hover3 text-center" href="<?php echo url('support/index'); ?>">
                            <div class="block-content block-content-full">
                                <i class="fa fa-commenting fa-3x text-muted"></i>
                                <div class="font-w600 push-15-t">客服管理</div>
                            </div>
                        </a>
                    </div>
                    <div class="col-xs-6 col-sm-4 col-lg-2">
                        <a class="block block-link-hover3 text-center" href="<?php echo url('advert/index'); ?>">
                            <div class="block-content block-content-full">
                                <i class="fa fa-handshake-o fa-3x text-muted"></i>
                                <div class="font-w600 push-15-t">广告管理</div>
                            </div>
                        </a>
                    </div>
                    <div class="col-xs-6 col-sm-4 col-lg-2">
                        <a class="block block-link-hover3 text-center" href="<?php echo url('link/index'); ?>">
                            <div class="block-content block-content-full">
                                <i class="fa fa-link fa-3x text-muted"></i>
                                <div class="font-w600 push-15-t">友情链接</div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

        </div>
        <!-- END Page Content -->
    </main>
    <!-- END Main Container -->

    <!-- Footer -->
    <?php if(empty($_pop) || (($_pop instanceof \think\Collection || $_pop instanceof \think\Paginator ) && $_pop->isEmpty())): ?>
    <footer id="page-footer" class="content-mini content-mini-full font-s12 bg-gray-lighter clearfix">
        <div class="pull-right">
            Crafted with <i class="fa fa-heart text-city"></i> by <a class="font-w600" href="<?php echo config('dolphin.company_website'); ?>" target="_blank"><?php echo config('dolphin.company_name'); ?></a>
        </div>
        <div class="pull-left">
            <a class="font-w600" href="<?php echo config('dolphin.product_website'); ?>" target="_blank"><?php echo config('dolphin.product_name'); ?> <?php echo config('dolphin.product_version'); ?></a> &copy; <span class="js-year-copy"></span>
        </div>
    </footer>
    <?php endif; ?>
    <!-- END Footer -->
</div>
<!-- END Page Container -->

<!-- Apps Modal -->
<!-- Opens from the button in the header -->
<div class="modal fade" id="apps-modal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-top">
        <div class="modal-content">
            <!-- Apps Block -->
            <div class="block block-themed block-transparent">
                <div class="block-header bg-primary-dark">
                    <ul class="block-options">
                        <li>
                            <button data-dismiss="modal" type="button"><i class="si si-close"></i></button>
                        </li>
                    </ul>
                    <h3 class="block-title">所有模块</h3>
                </div>
                <div class="block-content">
                    <div class="row text-center">
                        <?php if(!(empty($_top_menus_all) || (($_top_menus_all instanceof \think\Collection || $_top_menus_all instanceof \think\Paginator ) && $_top_menus_all->isEmpty()))): if(is_array($_top_menus_all) || $_top_menus_all instanceof \think\Collection || $_top_menus_all instanceof \think\Paginator): $i = 0; $__LIST__ = $_top_menus_all;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$menu): $mod = ($i % 2 );++$i;?>
                        <div class="col-xs-6 col-sm-3">
                            <?php if(in_array(($menu['url_type']), explode(',',"module_admin,module_home"))): ?>
                            <a class="block block-rounded top-menu" href="javascript:void(0);" data-module-id="<?php echo htmlentities($menu['id']); ?>" data-module="<?php echo htmlentities($menu['module']); ?>" data-controller="<?php echo htmlentities($menu['controller']); ?>" target="<?php echo htmlentities($menu['url_target']); ?>">
                                <div class="block-content text-white <?php echo $menu['id']==$_location[0]['id'] ? 'bg-primary'  :  'bg-primary-dark'; ?>">
                                    <i class="<?php echo htmlentities($menu['icon']); ?> fa-2x"></i>
                                    <div class="font-w600 push-15-t push-15"><?php echo htmlentities($menu['title']); ?></div>
                                </div>
                            </a>
                            <?php else: ?>
                            <a class="block block-rounded" href="<?php echo htmlentities($menu['url_value']); ?>" target="<?php echo htmlentities($menu['url_target']); ?>">
                                <div class="block-content text-white <?php echo $menu['id']==$_location[0]['id'] ? 'bg-primary'  :  'bg-primary-dark'; ?>">
                                    <i class="<?php echo htmlentities($menu['icon']); ?> fa-2x"></i>
                                    <div class="font-w600 push-15-t push-15"><?php echo htmlentities($menu['title']); ?></div>
                                </div>
                            </a>
                            <?php endif; ?>
                        </div>
                        <?php endforeach; endif; else: echo "" ;endif; ?>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
            <!-- END Apps Block -->
        </div>
    </div>
</div>
<!-- END Apps Modal -->
<!-- OneUI Core JS: jQuery, Bootstrap, slimScroll, scrollLock, Appear, CountTo, Placeholder, Cookie and App.js -->
<?php if(app('config')->get('minify_status') == '1'): ?>
<script src="<?php echo minify('group', 'core_js,libs_js'); ?>"></script>
<?php else: ?>
<script src="/static/admin/js/core/jquery.min.js?v=<?php echo config('asset_version'); ?>"></script>
<script src="/static/admin/js/core/bootstrap.min.js?v=<?php echo config('asset_version'); ?>"></script>
<script src="/static/admin/js/core/jquery.slimscroll.min.js?v=<?php echo config('asset_version'); ?>"></script>
<script src="/static/admin/js/core/jquery.scrollLock.min.js?v=<?php echo config('asset_version'); ?>"></script>
<script src="/static/admin/js/core/jquery.appear.min.js?v=<?php echo config('asset_version'); ?>"></script>
<script src="/static/admin/js/core/jquery.countTo.min.js?v=<?php echo config('asset_version'); ?>"></script>
<script src="/static/admin/js/core/jquery.placeholder.min.js?v=<?php echo config('asset_version'); ?>"></script>
<script src="/static/admin/js/core/js.cookie.min.js?v=<?php echo config('asset_version'); ?>"></script>
<script src="/static/libs/magnific-popup/magnific-popup.min.js?v=<?php echo config('asset_version'); ?>"></script>
<script src="/static/admin/js/app.js?v=<?php echo config('asset_version'); ?>"></script>
<script src="/static/admin/js/dolphin.js?v=<?php echo config('asset_version'); ?>"></script>
<script src="/static/admin/js/builder/form.js?v=<?php echo config('asset_version'); ?>"></script>
<script src="/static/admin/js/builder/aside.js?v=<?php echo config('asset_version'); ?>"></script>
<script src="/static/admin/js/builder/table.js?v=<?php echo config('asset_version'); ?>"></script>
<script src="/static/libs/bootstrap-notify/bootstrap-notify.min.js?v=<?php echo config('asset_version'); ?>"></script>
<script src="/static/libs/sweetalert/sweetalert.min.js?v=<?php echo config('asset_version'); ?>"></script>
<script src="/static/libs/js-xss/xss.min.js?v=<?php echo config('asset_version'); ?>"></script>
<script src="/static/libs/viewer/viewer.min.js?v=<?php echo config('asset_version'); ?>"></script>
<?php endif; ?>

<!-- Page JS Plugins -->
<script src="/static/libs/layer/layer.js?v=<?php echo config('asset_version'); ?>"></script>
<?php if(!(empty($_js_files) || (($_js_files instanceof \think\Collection || $_js_files instanceof \think\Paginator ) && $_js_files->isEmpty()))): if(app('config')->get('minify_status') == '1'): ?>
        <script src="<?php echo minify('group', $_js_files); ?>"></script>
    <?php else: if(is_array($_js_files) || $_js_files instanceof \think\Collection || $_js_files instanceof \think\Paginator): $i = 0; $__LIST__ = $_js_files;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$js): $mod = ($i % 2 );++$i;?>
        <?php echo load_assets($js, 'js'); ?>
        <?php endforeach; endif; else: echo "" ;endif; ?>
    <?php endif; ?>
<?php endif; ?>

<script>
    jQuery(function () {
        App.initHelpers(['appear', 'slimscroll', 'magnific-popup', 'table-tools']);
        <?php if(!(empty($_js_init) || (($_js_init instanceof \think\Collection || $_js_init instanceof \think\Paginator ) && $_js_init->isEmpty()))): ?>
        App.initHelpers(<?php echo $_js_init; ?>);
        <?php endif; ?>
    });
</script>

<!--页面js-->

<script src="/static/admin/js/core/jquery.countTo.min.js"></script>
<script>
    jQuery(function () {
        App.initHelpers(['appear-countTo']);
    });
</script>


<!--插件js钩子-->
<?php echo hook('page_plugin_js'); ?>


<?php echo (isset($extra_html) && ($extra_html !== '')?$extra_html:''); ?>
</body>
</html>