<?php
namespace app\common\model;
use think\Model;
use traits\model\SoftDelete;

/**
* 收藏管理控制器
* @version gucangfa 2017/6/23
*/
class Collection extends Model{
	use SoftDelete;
    protected $deleteTime = 'delete_time';
    protected $readonly = [];//只读字段

    public function shop(){//关联收藏店铺
    	return $this->hasOne('shop','shop_id','target_id');
    }

    public function goods(){
    	return $this->hasOne('goods','goods_id','target_id');
    }


    public function select_user($data){
    	// $result = $this->where('user_id ='.$data)->field('collection_type,target_id')->paginate('',false,['query'=>$data]);
    	// $type = [];
    	// foreach ($result as &$v) {
    	// 	if($v['collection_type'] == 'shop'){//收藏店铺
    	// 		$type['shop'][] = $v->shop;
    	// 	}elseif($v['collection_type'] == 'goods'){//收藏商品
    	// 		$type['goods'][] = $v->goods;
    	// 	}
    	// }

        $result = $this->where('user_id = '.$data['user_id']." AND collection_type = 'goods'")->field('collection_type,target_id')->paginate('',false,['query'=>$data]);
        foreach ($result as &$v) {
                $v = $v->goods;
        }
    	
        return $result;
    }

    public function add_Or_del_collection($data){
        $where['target_id'] = $data['id'];
        $where['collection_type'] = $data['type'];
        $where['user_id'] = session('user.user_id');

        $result = $this->where($where)->find();
        if($result != false){
            $this->where($where)->delete(true);
            return '-1';//取消收藏
            exit;
        }else{
            if($where['collection_type'] == 'goods'){
                model('Goods')->where('goods_id ='.$where['target_id'])->setInc('look_num');//人气添加
            }
            $this->save($where);
            return '1';//添加收藏
            exit;
        }
    }

    public function add_all_collection($data){
        $where['collection_type'] = $data['type'];
        $where['user_id'] = session('user.user_id');
        $ctype=isset($data['ctype'])?$data['ctype']:0;
        if($ctype==1){
            $goods_id=model('ShoppingCart')->where("id","IN",$data['id'])->column("goods_id");
            $goods_id=array_unique($goods_id);
            foreach ($goods_id as $v){
                $where['target_id'] = $v;
                $result = $this->where($where)->find();
                if($result == false){
                    if($where['collection_type'] == 'goods'){
                        model('Goods')->where('goods_id ='.$v)->setInc('look_num');//人气添加
                    }
                    $this->insert($where);
                }
            }
            return 1;
        }
    }

    public function ajax_collection($data){
        $type = $data['type'];
        $result = $this->where('user_id = '.$data['user_id']." AND collection_type = '".$type."'")->field('collection_type,target_id')->paginate('',false,['query'=>$data]);
        foreach ($result as &$v) {
            if($v['collection_type'] == 'shop'){//收藏店铺
                $v = $v->shop;
            }elseif($v['collection_type'] == 'goods'){//收藏商品
                $v = $v->goods;
            }
        }
        return $result;
    }
}