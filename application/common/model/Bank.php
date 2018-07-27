<?php
namespace app\common\model;
use think\Model;
use traits\model\SoftDelete;
/**
 *银行类
 * @author 彭强
 * @version 2017/7/7
 */
class Bank extends Model{
	use SoftDelete;
	/**
	 *用户银行卡列表
     */
    public function bank_list($data){
        if(isset($data['bank_id']) && !empty($data['bank_id'])){
            $where['bank_id'] = $data['bank_id'];
        }
        if(isset($data['user_id']) && !empty($data['user_id'])){
            $where['user_id'] = $data['user_id'];
        }
        $bank_arr = $this->where($where)->select();
        resultToArray($bank_arr);
        foreach ($bank_arr as $k =>&$v){
            $v['account_end'] = substr($v['account'],-4);
        }
        return $bank_arr;
    }
    /**
     * 添加银行卡
     */
    public function addBank($data){
        unset($data['phone'],$data['money_code']);
        $bank = $this->validate('bank.add')->save($data);
        if($bank === false){
            return $this ->getError();
        }else{
            return   $bank;
        }
    }




}
