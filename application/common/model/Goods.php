<?php
namespace app\common\model;
use think\Model;
use traits\model\SoftDelete;
/**
 * 商品模型
 * @author  wangang 
 * @version 2017/5/20
 */
class Goods extends Model{
	use SoftDelete;
    protected $deleteTime = 'delete_time';
    protected $readonly = [];//只读字段
    //商品 品牌关联
    public function brand(){
    	return $this->hasOne('GoodsBrand','brand_id','brand_id');
    }
    // 商品 分类关联
    public function cate1(){
    	return $this->hasOne('GoodsCate','cate_id','cate_id1');
    }
    public function cate2(){
    	return $this->hasOne('GoodsCate','cate_id','cate_id2');
    }
    public function cate3(){
    	return $this->hasOne('GoodsCate','cate_id','cate_id3');
    }
    //商品 店铺关联
    public function shop(){
    	return $this->hasOne('shop','shop_id','shop_id');
    }
	/**
	 * 商品列表查询
	 */
	public function select_goods($data,$where=array()){
		if(isValue($data,'shop_name')){
    		$shop_ids =model('shop')->where(['shop_name'=>['like','%'.(string)$data['shop_name'].'%']])->column('shop_id');
			$where['shop_id'] =['in',$shop_ids];
		}
		if(isValue($data,'goods_name')){
			$where['goods_name'] =['like','%'.(string)$data['goods_name'].'%'];
		}
		if(isValue($data,'cate_id1')){
			$where['cate_id1']=['eq',$data['cate_id1']];
		}
		if(isValue($data,'cate_id2')){
			$where['cate_id2']=['eq',$data['cate_id2']];
		}
		if(isValue($data,'cate_id3')){
			$where['cate_id3']=['eq',$data['cate_id3']];
		}
		if(isValue($data,'statr_time') && isValue($data,'end_time')){
			$data['statr_time'] =strtotime($data['statr_time']);
			$data['end_time'] =strtotime($data['end_time']);
			$where['create_time']=['BETWEEN',[$data['statr_time'],$data['end_time']]];
		}
		if(isValue($data,'brand_id')){
			$where['brand_id']=['eq',$data['brand_id']];
		}
		if(isValue($data,'is_admin_recom')){
			$where['is_admin_recom']=['eq',$data['is_admin_recom']];
		}
		if(isValue($data,'status')){
			$where['status']=['eq',$data['status']];
		}
		if(isValue($data,'goods_sn')){
			$where['goods_sn']=['like','%'.(string)$data['goods_sn'].'%'];
		}
		if(isValue($data,'is_check')){
			$where['is_check']=['eq',$data['is_check']];
		}
        if(isValue($data,'goods_id')){
            $where['goods_id']=$data['goods_id'];
        }
		// TODO 关联查询 待完善
        $query = $data;
		$list  = $this->where($where)->paginate('',false,['query' => $query]);
		resultToArray($list);
		foreach ($list as $key => $goods) {
			if($goods->brand){
				$list[$key]['brand_name'] = $goods->brand->brand_name;
			}else{
				$list[$key]['brand_name'] ="--";
			}
			if($goods->cate1){
				$list[$key]['cate_name1'] = $goods->cate1->data['name'];
			}else{
				$list[$key]['cate_name1'] ="--";
			}
			if($goods->cate1){
				$list[$key]['cate_name2'] = $goods->cate1->data['name'];
			}else{
				$list[$key]['cate_name2'] ="--";
			}
			if($goods->cate3){
				$list[$key]['cate_name3'] = $goods->cate3->data['name'];
			}else{
				$list[$key]['cate_name3'] ="--";
			}
			if($goods->shop){
				$list[$key]['shop_name']  = $goods->shop->data['shop_name'];
			}else{
				$list[$key]['shop_name'] ="--";
			}
		}
		return $list;
	}

    /**
     * @param 商品goods_id查商品
     * @return array
     */
    public  function getGood($data){
        if(isValue($data,'goods_id')){
            $where['goods_id']=$data['goods_id'];
        }
        $good = $this->where($where)->select();
        foreach ($good as $key => $goods) {
            if($goods->brand){
                $good[$key]['brand_name'] = $goods->brand->brand_name;
            }else{
                $good[$key]['brand_name'] ="--";
            }
            if($goods->cate1){
                $good[$key]['cate_name1'] = $goods->cate1->data['name'];
            }else{
                $good[$key]['cate_name1'] ="--";
            }
            if($goods->cate1){
                $good[$key]['cate_name2'] = $goods->cate1->data['name'];
            }else{
                $good[$key]['cate_name2'] ="--";
            }
            if($goods->cate3){
                $good[$key]['cate_name3'] = $goods->cate3->data['name'];
            }else{
                $good[$key]['cate_name3'] ="--";
            }
            if($goods->shop){
                $good[$key]['shop_name']  = $goods->shop->data['shop_name'];
            }else{
                $good[$key]['shop_name'] ="--";
            }
        }
        return $good;
    }
	/*
	* 页面商品列表
	*/
	public function select_list($cate_id){
		if($cate_id != false){
			$list['goods_list'] = $this->where(['cate_id1|cate_id2|cate_id3'=>['eq',$cate_id]])->order('is_admin_recom desc')->paginate();//商品列表
			$list['goods_rec']   = $this->where(['cate_id1|cate_id2|cate_id3'=>['eq',$cate_id]])->order('rand(),is_admin_recom desc')->limit(3)->select();//推荐商品列表
			$list['goods_count'] = $this->where(['cate_id1|cate_id2|cate_id3'=>['eq',$cate_id]])->count();//商品总数
			$list['cate_name'] = model('GoodsCate')->where('cate_id ='.$cate_id)->value('name');//类别名称
			foreach ($list['goods_list'] as &$v) {
				$v['shop_name'] = $v->shop->shop_name;
			}
			return $list;
		}
	}

	/*
	* ajax查询商品
	*/
	public function ajax_get_goods($data,$ajax_type){
		$data['cate_id'] = cookie('cate_id');
		$where = '1=1';
		if(!empty($data['brands_id'])){
			$where .= ' and brand_id = "'.$data['brands_id'].'"';
		}
		if(!empty($data['goods_id'])){
			$goods_id = implode(',',$data['goods_id']);
			$where .= " and goods_id in ({$goods_id})";
		}
		if(isValue($data,'order')){/*人气/销售/价格排序*/
			$this->order($data['order']);
		}
		if(isValue($data,'is_new')){
			$where .= ' and is_new = 1';
		}
		if(isset($ajax_type['page'])){
		    $page = $ajax_type['page'];
        }else{
		    $page = 1;
        }
		//$query = $data;
        $query = $ajax_type;
		$goods = $this->where($where)->where(['cate_id1|cate_id2|cate_id3'=>['eq',$data['cate_id']]])->paginate('',false,['page'=>$page,'path' => url('Goods/index'),'query' => $query]);
		// dump($this->getLastSql());
			foreach ($goods as &$v) {
				$v['shop_name'] = $v->shop->shop_name;
				$v['detail_url'] = url('Shop/good_detail',['goods_id'=>$v['goods_id']]);
				$v['shop_url'] = url('Shop/index',['shop_id'=>$v['shop_id']]);
				$v['goods_thums'] = getImg($v['goods_thums']);
				unset($v['shop']);
			}
			return $goods;
	}

	public function add_goods($data){
		$result = $this->validate('goods.add')->save($data);
		if($result === false){
			return $this->getError();
		}else{
			return $result;
		}
	}
	/**
	 * 卖家中心商品查询
	 * @author wanggang 
	 * 2017/07/04
	 */
	public function shop_goods_select($shop_id,$data){
		$where['shop_id'] = $shop_id;
		if(isValue($data,'cate_id1')){
			$where['cate_id1']=['eq',$data['cate_id1']];
		}
		if(isValue($data,'statr_price') && isValue($data,'end_price')){
			$data['statr_price']  = (float)$data['statr_price'];
			$data['end_price']    = (float)$data['end_price'];
			$where['shop_price']  = ['BETWEEN',[$data['statr_price'],$data['end_price']]];
		}
		if(isValue($data,'goods_name')){
			$where['goods_name'] =['like','%'.(string)$data['goods_name'].'%'];
		}
		if(isValue($data,'is_check')){
			$where['is_check']=['eq',$data['is_check']];
		}
		if(isValue($data,'is_recom')){
			$where['is_recom']=['eq',$data['is_recom']];
		}
		$query = $data;
		$list  = $this->where($where)->paginate('',false,['query' => $query]);
		return $list;
	}
}