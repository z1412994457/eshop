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
        //判断是否筛选种类
        $type = input('type');

        if ($type) {
            if ($type == '吸油烟机') {

                //筛选类型为油烟机
                $products = Db::view('dp_cms_document', true)
                    ->view('dp_cms_document_products', '*', 'dp_cms_document.id=' . 'dp_cms_document_products' . '.aid', 'right')
                    ->where(['dp_cms_document.status' => 1, 'dp_cms_document_products.type' => 0])
                    ->order('update_time', 'desc')
                    ->paginate(4);
                $this->assign('products', $products);
            } elseif ($type == '热水器') {
                //筛选类型为热水器
                $products = Db::view('dp_cms_document', true)
                    ->view('dp_cms_document_products', '*', 'dp_cms_document.id=' . 'dp_cms_document_products' . '.aid', 'right')
                    ->where(['dp_cms_document.status' => 1, 'dp_cms_document_products.type' => 1])
                    ->order('update_time', 'desc')
                    ->paginate(4);
                $this->assign('products', $products);
            } elseif ($type == '燃气灶') {
                //筛选类型为燃气灶
                $products = Db::view('dp_cms_document', true)
                    ->view('dp_cms_document_products', '*', 'dp_cms_document.id=' . 'dp_cms_document_products' . '.aid', 'right')
                    ->where(['dp_cms_document.status' => 1, 'dp_cms_document_products.type' => 2])
                    ->order('update_time', 'desc')
                    ->paginate(4);
                $this->assign('products', $products);
            }
        } else {
            //列出所有厨电
            $products = Db::view('dp_cms_document', true)
                ->view('dp_cms_document_products', '*', 'dp_cms_document.id=' . 'dp_cms_document_products' . '.aid', 'right')
                ->where(['dp_cms_document.status' => 1,])
                ->order('update_time', 'desc')
                ->paginate(12);
            $this->assign('products', $products);
        }

        return $this->fetch("products/products"); // 渲染模板
    }
    //查看厨电详情
    public function pdetails()
    {
        $id = input('id');
        $info = Db::view('dp_cms_document_products', true)
            ->view('dp_cms_document', '*', 'dp_cms_document.id=' . 'dp_cms_document_products' . '.aid', 'right')
            ->view('dp_cms_document_products_details', '*', 'dp_cms_document_products_details.pid=' . 'dp_cms_document_products' . '.aid', 'right')
            ->where(['dp_cms_document.status' => 1, 'dp_cms_document_products_details.pid' => $id])
            ->order('update_time', 'desc')
            ->find();
        $this->assign('info', $info);
        return $this->fetch('products/details');

    }
    //橱柜
    public function cupboard(){
        //判断是否筛选种类
        $type = input('cupboard_type');
        if ($type) {
            if($type=='石材橱柜'){
                $cupboard = Db::view('dp_cms_document', true)
                    ->view('dp_cms_document_cupboard', '*', 'dp_cms_document.id=' . 'dp_cms_document_cupboard' . '.aid', 'right')
                    ->where(['dp_cms_document.status' => 1,'dp_cms_document_cupboard.cupboard_type'=>0])
                    ->order('update_time', 'desc')
                    ->paginate(12);
                $this->assign('cupboard', $cupboard);
            }elseif($type=='砖夹橱柜'){
                $cupboard = Db::view('dp_cms_document', true)
                    ->view('dp_cms_document_cupboard', '*', 'dp_cms_document.id=' . 'dp_cms_document_cupboard' . '.aid', 'right')
                    ->where(['dp_cms_document.status' => 1,'dp_cms_document_cupboard.cupboard_type'=>1])
                    ->order('update_time', 'desc')
                    ->paginate(12);
                $this->assign('cupboard', $cupboard);
            }elseif ($type=='多层木板橱柜'){
                $cupboard = Db::view('dp_cms_document', true)
                    ->view('dp_cms_document_cupboard', '*', 'dp_cms_document.id=' . 'dp_cms_document_cupboard' . '.aid', 'right')
                    ->where(['dp_cms_document.status' => 1,'dp_cms_document_cupboard.cupboard_type'=>2])
                    ->order('update_time', 'desc')
                    ->paginate(12);
                $this->assign('cupboard', $cupboard);
            }

        }else{
            //列出所有橱柜
            $cupboard = Db::view('dp_cms_document', true)
                ->view('dp_cms_document_cupboard', '*', 'dp_cms_document.id=' . 'dp_cms_document_cupboard' . '.aid', 'right')
                ->where(['dp_cms_document.status' => 1])
                ->order('update_time', 'desc')
                ->paginate(12);
            $this->assign('cupboard', $cupboard);

        }
        return $this->fetch('cupboard');
    }
    //查看橱柜详情
    public function cupboard_details(){
        $id = input('id');
        $info = Db::view('dp_cms_document_cupboard', true)
            ->view('dp_cms_document', '*', 'dp_cms_document.id=' . 'dp_cms_document_cupboard' . '.aid', 'right')
            ->view('dp_cms_document_cupboard_details', '*', 'dp_cms_document_cupboard_details.cupboard_pid=' . 'dp_cms_document_cupboard' . '.aid', 'right')
            ->where(['dp_cms_document.status' => 1, 'dp_cms_document_cupboard_details.cupboard_pid' => $id])
            ->order('update_time', 'desc')
            ->find();
        $this->assign('info', $info);
//        echo "<pre>";
//        print_r($info);
//        return;
        return $this->fetch('products/cupboard_details');
    }

}
