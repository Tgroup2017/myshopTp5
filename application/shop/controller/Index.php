<?php
namespace app\shop\controller;
use think\session;
header("Content-type: text/html; charset=utf-8");
class Index extends MallBase{
	/**
	 * 商城首页
	 */
    public function index(){

        $data = input();
        // dump($data);die;
    	$cate            = $this->cate_nav();//商品分类
    	$cates           = $this->good_list_cate();//独立商品分类
        $top_nav         = $this->nav_top();//顶部导航
        $recycle         =$this->status_order();//不同状态的订单量
        $article         = getArticle();//文章分类
        $user_info       = $this->user_info();
        //dump($cates);exit;
        return view([
            'cate'           => $cate,
            'top_nav'        => $top_nav,
            'article'        => $article,
            'recycle'        => $recycle,
            'cates'          => $cates,
            'user_info'      => $user_info,
        ]);
    }
    /*
     * 不同状态的订单数量
     * */
    public function status_order(){
        $data['user_id']     = session('user.user_id');
        $recycle             = model('order')->recycle(['recycle'=>1,'user_id'=>$data['user_id']]);//不同状态的订单量
        return $recycle;
    }

    /**
     *文章详情
     * @author pengqiang
     * @version 2017/7/4
     */
    public function article_detail(){
        $data             = input();
        if(isset($data['article_id'])){
            $info         = model('article')->where(['article_id'=>$data['article_id']])->find()->toArray();
            $info['type'] = 'article';
            if(!isset($_SERVER["HTTP_CACHE_CONTROL"])){
                model('article')->save(['hits'=>$info['hits']+1],['article_id'=>$data['article_id']]);
            }
        }
        if(isset($data['message_id'])){
            $info         = model('Message')->where(['msg_id'=>$data['message_id']])->find()->toArray();
            $info['type'] = 'message';
            model('Message')->save(['status'=>1],['msg_id'=>$data['message_id']]);
        }
        return view([
            'rticle_info'=>$info,
            ]);
    }
    /**
     * 登录后个人资料
     * by pengqiang 2017/6/10
     */
    public  function user_info(){
      $data = session::get('user');
        return $data;
    }


    /**
     * 分类商品查询 以及分类侧边banner
     * @author wanggang
     * @version 2017/6/13
     */
    public function select_goods(&$value,$key){
    	$value['goods_rec']   = model('goods')->where("is_sale = 1")->where(['cate_id1|cate_id2|cate_id3'=>['eq',$value['cate_id']]])->order('rand(),is_admin_recom desc')->limit(8)->select();
    	$value['goods_hot']   = model('goods')->where("is_sale = 1")->where(['cate_id1|cate_id2|cate_id3'=>['eq',$value['cate_id']]])->order('sale_count desc')->limit(5)->select();
    	$value['cate_banner'] = model('CateBanner')->where(['cate_id'=>['eq',$value['cate_id']],'start_time'=>['<',time()],'end_time'=>['>',time()]])->find();
    }
    /**
     * 独立显示的商品分类
     * @author wanggang
     * @version 2017/6/12
     */
    public function good_list_cate(){
    	$cates = model('GoodsCate')->where(['is_show'=>['eq',1]])->order('sort asc')->select();
    	resultToArray($cates);
    	array_walk($cates,"self::select_goods");
    	return $cates;
    }



}
