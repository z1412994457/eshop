<?php
// +----------------------------------------------------------------------
// | 海豚PHP框架 [ DolphinPHP ]
// +----------------------------------------------------------------------
// | 版权所有 2016~2019 广东卓锐软件有限公司 [ http://www.zrthink.com ]
// +----------------------------------------------------------------------
// | 官方网站: http://dolphinphp.com
// +----------------------------------------------------------------------

namespace app\cms\home;

use think\App;
use think\console\Input;
use think\Db;

/**
 * 前台首页控制器
 * @package app\cms\admin
 */
class Index extends Common
{

    public function index()
    {
        return $this->fetch(); // 渲染模板
    }
    //搜索产品
    public function search (){
        $keyw =input('keyw');
        $data = Db::view('dp_cms_document', true)
            ->view('dp_cms_document_products', '*', 'dp_cms_document.id=' . 'dp_cms_document_products' . '.aid', 'right')
            ->where(['dp_cms_document.status'=>1],['dp_cms_document_products.product_name','like',"%$keyw%"])
            ->order('update_time', 'desc')
            ->paginate(4);
//
        $this->assign('lists',$data);
        $this->assign('keyword',$keyw);

        return $this->fetch('search/searchp');


    }
    //店铺地址
    public function address (){


        return $this->fetch('index/address');

    }
}
