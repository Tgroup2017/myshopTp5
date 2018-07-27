<?php
namespace app\common\model;
use think\Model;
use traits\model\SoftDelete;

/*
 * @table   article
 * @Auth weichunfeng
 * @version 2017.05.24
 * */

class Article extends Model{
    use SoftDelete;
    protected $deleteTime = 'delete_time';
    protected $readonly = [];//只读字段
//    protected $auto = ['status'=>1];//自动完成

    public function select_article($data,$where=array()){
        if(isValue($data,'searchText')){
            $where['article_title'] = ['like','%'.(string)input('searchText').'%'];
        }
        if(isValue($data,'cate_id')){
            $where['cate_id'] = (int)$data['cate_id'];
        }
        if(isValue($data,'article_content')){
            $where['article_content'] = ['like','%'.(string)input('article_content').'%'];
        }
        if(isset($data['page'])){
            $page = $data['page'];
            unset($data['page']);
        }else{
            $page =1;
        }
        $list = $this->where($where)->order('create_time desc')->paginate('',false,['page'=>$page,'query' => $data]);
        resultToArray($list);
        return $list;
    }

    public function add_article($data){
        $result = $this->validate('articles.add')->save($data);
        if($result === false){
            return $this->getError();
        }else{
            return $result;
        }
    }

    public function edit_article($data){
        $result = $this->validate('articles.edit')->save($data,['article_id'=>$data['article_id']]);
        if($result === false){
            return $this->getError();
        }else{
            return $result;
        }
    }



}
