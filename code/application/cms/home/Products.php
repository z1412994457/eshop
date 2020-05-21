<?php
// +----------------------------------------------------------------------
// | 海豚PHP框架 [ DolphinPHP ]
// +----------------------------------------------------------------------
// | 版权所有 2016~2019 广东卓锐软件有限公司 [ http://www.zrthink.com ]
// +----------------------------------------------------------------------
// | 官方网站: http://dolphinphp.com
// +----------------------------------------------------------------------

namespace app\cms\home;

use think\Db;

/**
 * 前台首页控制器
 * @package app\cms\admin
 */
class Products extends Common
{
// 产品中心
    public function products()
    {

        $products=Db::view('dp_cms_document', true)
            ->view('dp_cms_document_products', '*', 'dp_cms_document.id=' . 'dp_cms_document_products' . '.aid', 'right')
            ->where(['dp_cms_document.status' => 1,])
            ->order('update_time', 'desc')
            ->paginate(4);
        $this->assign('products',$products);

        return $this->fetch("products/products"); // 渲染模板
    }

    //查看产品详情
    public function pdetails(){
        $id =input('id');
        $info =Db::view('dp_cms_document_products', true)
            ->view('dp_cms_document', '*', 'dp_cms_document.id=' . 'dp_cms_document_products' . '.aid', 'right')
            ->view('dp_cms_document_products_details', '*', 'dp_cms_document_products_details.pid=' . 'dp_cms_document_products' . '.aid', 'right')
            ->where(['dp_cms_document.status' => 1,'dp_cms_document_products_details.pid'=>$id])
            ->order('update_time', 'desc')
            ->find();
        $this->assign('info',$info);
       return $this->fetch('products/details');

    }
}
