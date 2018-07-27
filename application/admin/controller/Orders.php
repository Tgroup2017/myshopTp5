<?php
namespace app\admin\controller;
use app\common\controller\AdminBase;

class Orders extends AdminBase{

    public function defaults(){
        $this->redirect(url('Orders/index'));
    }
/*
 * 订单列表
 * */
    public function  index(){
        $data =input();
        if(!empty($data['user_id'])){//账号转id
            $account         = model('user')->where(['account'=>$data['user_id']])->find();
            $data['user_id'] = $account['user_id']?$account['user_id']:-1;
        }
        $data['size']        = (input('size')== null) ? 10:input('size');//每页显示条数
        $order               = model('Order')->order_list($data);
        $status              = model('order_status')->where(['status'=>1])->select();
        return view(['orders'=>$order,'size'=> $data['size'],'status'=>$status]);
    }
    /*
     * 订单列表_详情
     * */
    public function  edit(){
        $order_sn   = input('order_sn');
        $order_info = model('Order')->oder_info($order_sn);//订单详情
        $order_id   = $order_info['order_id'];
        $orders     = model('OrderInfo')->order_list($order_id);
        return view(['order_info'=>$order_info,'orders'=>$orders]);
    }

    /*
     * 订单列表_删除
     * */
     public function del(){
         if(request()->isAjax()){//多选删除
             $data = input();
             $time = time();
             $del  = $this->setStatus('Order',$time,$data['id'],'order_id','delete_time');
             if(1 == $del->code){
                 Api()->setApi('url',input('location'))->ApiSuccess();
             }else{
                 Api()->setApi('url',0)->ApiError();
             }
         }
     }
    /*
     * 退款列表
     * */
    public function  refund(){
        $data['user_id']     = input('user_id');
        $data['account_sn']  = input('account_sn');
        $data['datestart']   = input('datestart');
        $data['dateend']     = input('dateend');
        if(!empty($data['user_id'])){//账号转id
            $account         = model('user')->where(['account'=>$data['user_id']])->find();
            $data['user_id'] = $account['user_id']?$account['user_id']:-1;
        }
        $data['size']        = (input('size')== null) ? 10:input('size');//每页显示条数
        $refunds             = model('UserAccountLog')->refund_list($data);
        return view(['refunds'=>$refunds,'size'=> $data['size']]);
    }

    /*
     * 退款列表_删除
     * */
    public function refund_del(){
       if(request()->isAjax()){
           $data = input();
           $time = time();
           $del  = $this->setStatus('UserAccountLog',$time,$data['id'],'id','delete_time');
           if(1 == $del->code){
               Api()->setApi('url',input('location'))->ApiSuccess();
           }else{
               Api()->setApi('url',0)->ApiError();
           }
       }
    }
    /*
     * 投诉列表
     * */
    public function  complaints(){
        return view();
    }
    /*
     * 状态列表
     * */
    public function  status(){
        $data['size'] = (input('size')== null) ? 10:input('size');//每页显示条数
        $statue_list  = model('OrderStatus')-> get_status($data);
        return view(['statue_list'=>$statue_list,'size'=> $data['size']]);
    }
    /*
     * 状态列表-->编辑
     * */
     public function status_edit() {
        if(request()->isAjax()){
            $data       = input();
            $edit       = model('OrderStatus')->edit($data);
            if($edit >0){
                Api()->setApi('url',url('Orders/status',['page'=>input('page')]))->ApiSuccess($edit);
            }else{
                Api()->setApi('msg',$edit)->setApi('url',0)->ApiError();
            }
        }else{
            $data['id'] =  input('id');
            $info       = model('OrderStatus')->get_status($data);
            $status     = $info->toArray($info);
            return view(['info'=>$status['data'][0]]);
        }

     }
    /*
    *状态列表-->添加
    */
    public function status_add(){

        if(request()->isAjax()){
            $data['name']   = input('name');
            $data['status'] = input('status');
            $data['order']  = input('order');
            $add            = model('OrderStatus')->add($data);
            if($add >0){
                Api()->setApi('url',url('Orders/status',['page'=>input('page')]))->ApiSuccess($add);
            }else{
                Api()->setApi('msg',$add)->setApi('url',0)->ApiError();
            }
        }
      return view();
    }
    /*
     * 状态列表-->删除
     * */
    public  function status_del(){
        if(request()->isAjax()){
            $data = input();
            $time = time();
            $del  = $this->setStatus('OrderStatus',$time,$data['id'],'id','delete_time');
            if(1 == $del->code){
                Api()->setApi('url',input('location'))->ApiSuccess();
            }else{
                Api()->setApi('url',0)->ApiError();
            }
        }
    }



}