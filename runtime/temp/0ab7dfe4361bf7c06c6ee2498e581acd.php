<?php if (!defined('THINK_PATH')) exit(); /*a:11:{s:74:"D:\phpStudy\WWW\adminui/public\theme\shop\default\user_center\u_order.html";i:1500431396;s:68:"D:\phpStudy\WWW\adminui/public\theme\shop\default\layout\layout.html";i:1500431396;s:69:"D:\phpStudy\WWW\adminui/public\theme\shop\default\layout\top_bar.html";i:1500431396;s:72:"D:\phpStudy\WWW\adminui/public\theme\shop\default\layout\logo_serch.html";i:1500431396;s:66:"D:\phpStudy\WWW\adminui/public\theme\shop\default\layout\logo.html";i:1500431396;s:75:"D:\phpStudy\WWW\adminui/public\theme\shop\default\user_center\side_bar.html";i:1503654459;s:77:"D:\phpStudy\WWW\adminui/public\theme\shop\default\user_center\order_list.html";i:1500431396;s:81:"D:\phpStudy\WWW\adminui/public\theme\shop\default\user_center\recom_goodlist.html";i:1500431396;s:72:"D:\phpStudy\WWW\adminui/public\theme\shop\default\layout\bottom_bar.html";i:1500431396;s:72:"D:\phpStudy\WWW\adminui/public\theme\shop\default\layout\bottom_nav.html";i:1500431396;s:68:"D:\phpStudy\WWW\adminui/public\theme\shop\default\layout\footer.html";i:1500431396;}*/ ?>
<!DOCTYPE html><html lang="zh-cn"><head><meta charset="UTF-8"><meta name="renderer" content="Webkit" /><meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"><title><?php echo $title; ?></title><link href="<?php echo $web_static; ?>/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet"><link rel="stylesheet" type="text/css" href="<?php echo $css; ?>headfoot.css" /><link href="<?php echo $web_static; ?>/css/font-awesome.min.css" rel="stylesheet"><link href="<?php echo $web_static; ?>/css/animate.css" rel="stylesheet"><script src="<?php echo $web_static; ?>/js/jquery.min.js"></script><script src="<?php echo $web_static; ?>/plugins/bootstrap/js/bootstrap.min.js"></script><script src="<?php echo $web_static; ?>/plugins/layui/layer/layer.js"></script><!--时间日期插件--><script src="<?php echo $web_static; ?>/plugins/layui/laydate/laydate.js"></script><script src="<?php echo $web_static; ?>/js/layer.com.js"></script><link rel="stylesheet" href="<?php echo $css; ?>/icon/iconfont.css"></head><body><div class="d_container-fluid"><div class="container"><div class="row"><div class="col-sm-4 d_padi d_top"><a href="<?php echo url('index/index'); ?>" class="d_redp">商城首页</a><?php $user = session('user');; if($user): ?><a href="<?php echo url('user_center/index'); ?>" class="d_redp">hello <?php echo $user['account']; ?></a><?php else: ?><a href="<?php echo url('user_center/login'); ?>" class="d_redp">请登录 </a><a href="<?php echo url('user_center/reg'); ?>" class="d_huip">免费注册</a><?php endif; ?><a href="" class="d_huip">手机app</a></div><div class="col-sm-8 d_padi d_float"><a href="">帮助中心</a><a href="<?php echo url('seller_center/index'); ?>">卖家中心<img src="<?php echo $img; ?>/jiantou.png" alt="" /></a><div class="activ"></div><a class="shouc" href="<?php echo url('user_center/u_collection'); ?>"><img src="<?php echo $img; ?>/shoucang.png" />我的收藏</a><a href="<?php echo url('cart/index'); ?>"><img src="<?php echo $img; ?>/gouwuche.png" alt="" />我的购物车</a><a href="<?php echo url('user_center/index'); ?>">个人中心 <img src="<?php echo $img; ?>/jiantou.png" /></a></div></div></div></div><?php if(!isset($load_search) || $load_search !== false): ?><form action="" method="post"><div class="container mag-top"><div class="row"><div class="col-sm-4 d_padi"><div class="d_logo"><img src="<?php echo getImg(config($logo='web_logo')); ?>" alt="logo" /></div></div><div class="col-sm-6 d_padi pull-right input"><input class="input1" type="text" name="" id="" placeholder="输入关键字" /><input class="input2" type="button" value="搜索"></div></div></div></form><?php endif; ?><link type="text/css" rel="stylesheet" href="<?php echo $css; ?>/myindent.css" /><div class="h_concent"><div class="position"><p>您的位置：</p><a href="">首页 ></a><a href="">订单中心 ></a><p>我的订单</p></div><div class="h_indent"><div class="indent_fl"><div class="h_sidebar"><div class="sidebar_centre"><ul><div class="h_square"><i class="icon i-wodedingdan"></i><span>订单中心</span></div><li><a href="<?php echo urldo('user_center/u_order'); ?>">我的订单</a></li><li><a href="<?php echo urldo('user_center/order_recycle'); ?>">订单回收站</a></li><li><a href="<?php echo urldo('user_center/evaluate'); ?>">评价管理</a></li><li><a href="#">购买过的店铺</a></li><li><a href="#">我的积分</a></li><li><a href="<?php echo urldo('user_center/u_message'); ?>">消息中心</a></li><li><a href="<?php echo urldo('user_center/u_collection'); ?>">我的收藏</a></li><li><a href="<?php echo urldo('cart/index'); ?>">购物车</a></li><li><a href="#">我的足迹</a></li><div class="h_borde"></div></ul><ul><div class="h_square"><i class="icon i-shezhi"></i><span>设置</span></div><li><a href="<?php echo urldo('user_center/u_info'); ?>">个人信息</a></li><li><a href="<?php echo urldo('user_center/u_safe'); ?>">账户安全</a></li><li><a href="<?php echo urldo('user_center/u_address'); ?>">收货地址</a></li><li><a href="<?php echo urldo('user_center/u_binding'); ?>">账户绑定</a></li><li><a href="<?php echo urldo('user_center/u_changepass'); ?>">修改密码</a></li><div class="h_borde"></div></ul></div><script type="text/javascript">
    var url = window.location.href;
    var $a  = $('.sidebar_centre ul li').find('a');
    $a.parent().removeClass('sidebar_lired');
    $a.removeClass('sidebar_red');
    $a.each(function() {
        if($(this).attr('href') == url){
            $(this).addClass('sidebar_red');
        }
    });
</script></div></div><div class="indent_ri"><div id="notice-tit" class="notice-tit"><ul><li class="select" >全部订单<span><?php echo $recycle['all']; ?></span></li><li >待付款<span><?php echo $recycle['money']; ?></span></li><li >待发货<span><?php echo $recycle['momentum']; ?></span></li><li >待收货<span><?php echo $recycle['delivery']; ?></span></li><li class="order_11">待评价<span><?php echo $recycle['evaluation']; ?></span></li><div class="h_dustbin"><a href="<?php echo U('order_recycle'); ?>"><i class="icon i-lajixiang"></i><span>订单回收站</span></a></div><div class="clear"></div></ul></div><div class="notice-con" id="notice-con"><div class="mod"><div class="h_modhear"><div class="h_modheardiv1 h_sp"><span class="modhear_sp1">订单详情</span></div><div class="h_modheardiv2 h_sp"><span class="modhear_sp2">收货人</span></div><div class="h_modheardiv3 h_sp"><span class="modhear_sp3">金额</span></div><div class="h_modheardiv4 h_sp"><div class="h_spdiv h_spdivi"><span class="modhear_sp4 clickdddddd">全部状态</span><i class="icon i-xiala"></i></div></div><div class="h_modheardiv5 h_sp"><span class="modhear_sp5">订单详情</span></div><div class="clear"></div><div class="modhearsp4box"><ul><li onclick="status_Ajax(0,0)">全部状态</li><li onclick="status_Ajax(2,0)">等待买家付款</li><li onclick="status_Ajax(3,0)">买家已付款</li><li onclick="status_Ajax(5,0)">卖家已发货</li><li onclick="status_Ajax(6,0)">交易成功</li><li onclick="status_Ajax(7,0)">退款中的订单</li><li onclick="status_Ajax(12,0)">取消交易</li></ul></div></div><div class="indent_list"><!-- 一个订单循环开始 --><input  type="hidden" name="order_css" id="order_css" value="<?php echo $id; ?> "><?php if(is_array($orders) || $orders instanceof \think\Collection || $orders instanceof \think\Paginator): $i = 0; $__LIST__ = $orders;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$order): $mod = ($i % 2 );++$i;?><div class="h_details"><div class="details_top"><span class="order_create_time"><?php echo $order['create_time']; ?></span><span>订单号：<i class="order_sn"><?php echo $order['order_sn']; ?></i></span><span>店铺名称：<i class="order_shop_id"><?php echo $order['shop_id']; ?></i></span><i class="iconfont icon-trash dustbin"></i></div><div class="details_but"><div class="details_butdiv"><?php if(is_array($order['goods_info']) || $order['goods_info'] instanceof \think\Collection || $order['goods_info'] instanceof \think\Paginator): $i = 0; $__LIST__ = $order['goods_info'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$info): $mod = ($i % 2 );++$i;?><div class="details_butdiv1"><img class="good_image" src="<?php echo $upload; ?><?php echo $info['good_image']; ?>"/><p class="goods_name"><?php echo $info['goods_name']; ?></p><span class="goods_count">x<?php echo $info['goods_count']; ?></span><div class="clear"></div></div><?php endforeach; endif; else: echo "" ;endif; ?></div><div class="details_butdiv2"><p class="user_name"><?php echo $order['user_name']; ?></p></div><div class="details_butdiv3"><div class="butdiv3_sp"><a>总额：<b class="total_price">￥<?php echo $order['total_price']; ?></b></a><a>应付：<b class="deal_price">￥<?php echo $order['deal_price']; ?></b></a><span><a href="#" >在线支付</a></span></div></div><div class="details_butdiv4"><a class="status_text"><?php echo $order['statusText']; ?></a><a class="url_info" href="<?php echo url('user_center/u_order_detail',['order_sn'=>$order['order_sn'],'order_id'=>$order['order_id']]); ?>">订单详情</a></div><div class="details_butdiv5"><?php if($order['status'] == 2): ?><a class="url_method" href="<?php echo U('Order/index',['step'=>2,'order_id'=>$order['order_id'],'paytype'=>$order['paytype']]); ?>">去付款</a><a class="cancel_order" href="#">取消订单</a><?php elseif($order['status'] == 5): ?><a class="url_method" href="#">确认收货</a><a class="cancel_order" href="#">取消订单</a><?php elseif($order['status'] == 6): ?><a class="url_method" href="#"></a><a class="cancel_order" href="#"></a><?php elseif($order['status'] == 11): ?><a class="url_method" href="<?php echo url('UserCenter/to_evaluate',['order_sn'=>$order['order_sn']]); ?>">评价</a><a class="cancel_order" href="#">取消订单</a><?php endif; ?></div><div class="clear"></div></div></div><?php endforeach; endif; else: echo "" ;endif; ?></div><div class="page"><div class="page1"><?php echo $orders->render(); ?></div></div></div><div class="mod"><div class="h_modhear"><div class="h_modheardiv1 h_sp"><span class="modhear_sp1">订单详情</span></div><div class="h_modheardiv2 h_sp"><span class="modhear_sp2">收货人</span></div><div class="h_modheardiv3 h_sp"><span class="modhear_sp3">金额</span></div><div class="h_modheardiv4 h_sp"><div class="h_spdiv"><span class="modhear_sp4">买家待付款</span></div></div><div class="h_modheardiv5 h_sp"><span class="modhear_sp5">订单详情</span></div><div class="clear"></div></div><div class="indent_list"><!-- 一个订单循环开始 --><input  type="hidden" name="order_css" id="order_css" value="<?php echo $id; ?> "><?php if(is_array($orders) || $orders instanceof \think\Collection || $orders instanceof \think\Paginator): $i = 0; $__LIST__ = $orders;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$order): $mod = ($i % 2 );++$i;?><div class="h_details"><div class="details_top"><span class="order_create_time"><?php echo $order['create_time']; ?></span><span>订单号：<i class="order_sn"><?php echo $order['order_sn']; ?></i></span><span>店铺名称：<i class="order_shop_id"><?php echo $order['shop_id']; ?></i></span><i class="iconfont icon-trash dustbin"></i></div><div class="details_but"><div class="details_butdiv"><?php if(is_array($order['goods_info']) || $order['goods_info'] instanceof \think\Collection || $order['goods_info'] instanceof \think\Paginator): $i = 0; $__LIST__ = $order['goods_info'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$info): $mod = ($i % 2 );++$i;?><div class="details_butdiv1"><img class="good_image" src="<?php echo $upload; ?><?php echo $info['good_image']; ?>"/><p class="goods_name"><?php echo $info['goods_name']; ?></p><span class="goods_count">x<?php echo $info['goods_count']; ?></span><div class="clear"></div></div><?php endforeach; endif; else: echo "" ;endif; ?></div><div class="details_butdiv2"><p class="user_name"><?php echo $order['user_name']; ?></p></div><div class="details_butdiv3"><div class="butdiv3_sp"><a>总额：<b class="total_price">￥<?php echo $order['total_price']; ?></b></a><a>应付：<b class="deal_price">￥<?php echo $order['deal_price']; ?></b></a><span><a href="#" >在线支付</a></span></div></div><div class="details_butdiv4"><a class="status_text"><?php echo $order['statusText']; ?></a><a class="url_info" href="<?php echo url('user_center/u_order_detail',['order_sn'=>$order['order_sn'],'order_id'=>$order['order_id']]); ?>">订单详情</a></div><div class="details_butdiv5"><?php if($order['status'] == 2): ?><a class="url_method" href="<?php echo U('Order/index',['step'=>2,'order_id'=>$order['order_id'],'paytype'=>$order['paytype']]); ?>">去付款</a><a class="cancel_order" href="#">取消订单</a><?php elseif($order['status'] == 5): ?><a class="url_method" href="#">确认收货</a><a class="cancel_order" href="#">取消订单</a><?php elseif($order['status'] == 6): ?><a class="url_method" href="#"></a><a class="cancel_order" href="#"></a><?php elseif($order['status'] == 11): ?><a class="url_method" href="<?php echo url('UserCenter/to_evaluate',['order_sn'=>$order['order_sn']]); ?>">评价</a><a class="cancel_order" href="#">取消订单</a><?php endif; ?></div><div class="clear"></div></div></div><?php endforeach; endif; else: echo "" ;endif; ?></div><div class="page"><div class="page1"><?php echo $orders->render(); ?></div></div></div><div class="mod"><div class="h_modhear"><div class="h_modheardiv1 h_sp"><span class="modhear_sp1">订单详情</span></div><div class="h_modheardiv2 h_sp"><span class="modhear_sp2">收货人</span></div><div class="h_modheardiv3 h_sp"><span class="modhear_sp3">金额</span></div><div class="h_modheardiv4 h_sp"><div class="h_spdiv"><span class="modhear_sp4">买家待收货</span></div></div><div class="h_modheardiv5 h_sp"><span class="modhear_sp5">订单详情</span></div><div class="clear"></div></div><div class="indent_list"><!-- 一个订单循环开始 --><input  type="hidden" name="order_css" id="order_css" value="<?php echo $id; ?> "><?php if(is_array($orders) || $orders instanceof \think\Collection || $orders instanceof \think\Paginator): $i = 0; $__LIST__ = $orders;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$order): $mod = ($i % 2 );++$i;?><div class="h_details"><div class="details_top"><span class="order_create_time"><?php echo $order['create_time']; ?></span><span>订单号：<i class="order_sn"><?php echo $order['order_sn']; ?></i></span><span>店铺名称：<i class="order_shop_id"><?php echo $order['shop_id']; ?></i></span><i class="iconfont icon-trash dustbin"></i></div><div class="details_but"><div class="details_butdiv"><?php if(is_array($order['goods_info']) || $order['goods_info'] instanceof \think\Collection || $order['goods_info'] instanceof \think\Paginator): $i = 0; $__LIST__ = $order['goods_info'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$info): $mod = ($i % 2 );++$i;?><div class="details_butdiv1"><img class="good_image" src="<?php echo $upload; ?><?php echo $info['good_image']; ?>"/><p class="goods_name"><?php echo $info['goods_name']; ?></p><span class="goods_count">x<?php echo $info['goods_count']; ?></span><div class="clear"></div></div><?php endforeach; endif; else: echo "" ;endif; ?></div><div class="details_butdiv2"><p class="user_name"><?php echo $order['user_name']; ?></p></div><div class="details_butdiv3"><div class="butdiv3_sp"><a>总额：<b class="total_price">￥<?php echo $order['total_price']; ?></b></a><a>应付：<b class="deal_price">￥<?php echo $order['deal_price']; ?></b></a><span><a href="#" >在线支付</a></span></div></div><div class="details_butdiv4"><a class="status_text"><?php echo $order['statusText']; ?></a><a class="url_info" href="<?php echo url('user_center/u_order_detail',['order_sn'=>$order['order_sn'],'order_id'=>$order['order_id']]); ?>">订单详情</a></div><div class="details_butdiv5"><?php if($order['status'] == 2): ?><a class="url_method" href="<?php echo U('Order/index',['step'=>2,'order_id'=>$order['order_id'],'paytype'=>$order['paytype']]); ?>">去付款</a><a class="cancel_order" href="#">取消订单</a><?php elseif($order['status'] == 5): ?><a class="url_method" href="#">确认收货</a><a class="cancel_order" href="#">取消订单</a><?php elseif($order['status'] == 6): ?><a class="url_method" href="#"></a><a class="cancel_order" href="#"></a><?php elseif($order['status'] == 11): ?><a class="url_method" href="<?php echo url('UserCenter/to_evaluate',['order_sn'=>$order['order_sn']]); ?>">评价</a><a class="cancel_order" href="#">取消订单</a><?php endif; ?></div><div class="clear"></div></div></div><?php endforeach; endif; else: echo "" ;endif; ?></div><div class="page"><div class="page1"><?php echo $orders->render(); ?></div></div></div><div class="mod"><div class="h_modhear"><div class="h_modheardiv1 h_sp"><span class="modhear_sp1">订单详情</span></div><div class="h_modheardiv2 h_sp"><span class="modhear_sp2">收货人</span></div><div class="h_modheardiv3 h_sp"><span class="modhear_sp3">金额</span></div><div class="h_modheardiv4 h_sp"><div class="h_spdiv"><span class="modhear_sp4">买家待发货</span></div></div><div class="h_modheardiv5 h_sp"><span class="modhear_sp5">订单详情</span></div><div class="clear"></div></div><div class="indent_list"><!-- 一个订单循环开始 --><input  type="hidden" name="order_css" id="order_css" value="<?php echo $id; ?> "><?php if(is_array($orders) || $orders instanceof \think\Collection || $orders instanceof \think\Paginator): $i = 0; $__LIST__ = $orders;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$order): $mod = ($i % 2 );++$i;?><div class="h_details"><div class="details_top"><span class="order_create_time"><?php echo $order['create_time']; ?></span><span>订单号：<i class="order_sn"><?php echo $order['order_sn']; ?></i></span><span>店铺名称：<i class="order_shop_id"><?php echo $order['shop_id']; ?></i></span><i class="iconfont icon-trash dustbin"></i></div><div class="details_but"><div class="details_butdiv"><?php if(is_array($order['goods_info']) || $order['goods_info'] instanceof \think\Collection || $order['goods_info'] instanceof \think\Paginator): $i = 0; $__LIST__ = $order['goods_info'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$info): $mod = ($i % 2 );++$i;?><div class="details_butdiv1"><img class="good_image" src="<?php echo $upload; ?><?php echo $info['good_image']; ?>"/><p class="goods_name"><?php echo $info['goods_name']; ?></p><span class="goods_count">x<?php echo $info['goods_count']; ?></span><div class="clear"></div></div><?php endforeach; endif; else: echo "" ;endif; ?></div><div class="details_butdiv2"><p class="user_name"><?php echo $order['user_name']; ?></p></div><div class="details_butdiv3"><div class="butdiv3_sp"><a>总额：<b class="total_price">￥<?php echo $order['total_price']; ?></b></a><a>应付：<b class="deal_price">￥<?php echo $order['deal_price']; ?></b></a><span><a href="#" >在线支付</a></span></div></div><div class="details_butdiv4"><a class="status_text"><?php echo $order['statusText']; ?></a><a class="url_info" href="<?php echo url('user_center/u_order_detail',['order_sn'=>$order['order_sn'],'order_id'=>$order['order_id']]); ?>">订单详情</a></div><div class="details_butdiv5"><?php if($order['status'] == 2): ?><a class="url_method" href="<?php echo U('Order/index',['step'=>2,'order_id'=>$order['order_id'],'paytype'=>$order['paytype']]); ?>">去付款</a><a class="cancel_order" href="#">取消订单</a><?php elseif($order['status'] == 5): ?><a class="url_method" href="#">确认收货</a><a class="cancel_order" href="#">取消订单</a><?php elseif($order['status'] == 6): ?><a class="url_method" href="#"></a><a class="cancel_order" href="#"></a><?php elseif($order['status'] == 11): ?><a class="url_method" href="<?php echo url('UserCenter/to_evaluate',['order_sn'=>$order['order_sn']]); ?>">评价</a><a class="cancel_order" href="#">取消订单</a><?php endif; ?></div><div class="clear"></div></div></div><?php endforeach; endif; else: echo "" ;endif; ?></div><div class="page"><div class="page1"><?php echo $orders->render(); ?></div></div></div><div class="mod"><div class="h_modhear"><div class="h_modheardiv1 h_sp"><span class="modhear_sp1">订单详情</span></div><div class="h_modheardiv2 h_sp"><span class="modhear_sp2">收货人</span></div><div class="h_modheardiv3 h_sp"><span class="modhear_sp3">金额</span></div><div class="h_modheardiv4 h_sp"><div class="h_spdiv"><span class="modhear_sp4">买家待评价</span></div></div><div class="h_modheardiv5 h_sp"><span class="modhear_sp5">订单详情</span></div><div class="clear"></div></div><div class="indent_list"><!-- 一个订单循环开始 --><input  type="hidden" name="order_css" id="order_css" value="<?php echo $id; ?> "><?php if(is_array($orders) || $orders instanceof \think\Collection || $orders instanceof \think\Paginator): $i = 0; $__LIST__ = $orders;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$order): $mod = ($i % 2 );++$i;?><div class="h_details"><div class="details_top"><span class="order_create_time"><?php echo $order['create_time']; ?></span><span>订单号：<i class="order_sn"><?php echo $order['order_sn']; ?></i></span><span>店铺名称：<i class="order_shop_id"><?php echo $order['shop_id']; ?></i></span><i class="iconfont icon-trash dustbin"></i></div><div class="details_but"><div class="details_butdiv"><?php if(is_array($order['goods_info']) || $order['goods_info'] instanceof \think\Collection || $order['goods_info'] instanceof \think\Paginator): $i = 0; $__LIST__ = $order['goods_info'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$info): $mod = ($i % 2 );++$i;?><div class="details_butdiv1"><img class="good_image" src="<?php echo $upload; ?><?php echo $info['good_image']; ?>"/><p class="goods_name"><?php echo $info['goods_name']; ?></p><span class="goods_count">x<?php echo $info['goods_count']; ?></span><div class="clear"></div></div><?php endforeach; endif; else: echo "" ;endif; ?></div><div class="details_butdiv2"><p class="user_name"><?php echo $order['user_name']; ?></p></div><div class="details_butdiv3"><div class="butdiv3_sp"><a>总额：<b class="total_price">￥<?php echo $order['total_price']; ?></b></a><a>应付：<b class="deal_price">￥<?php echo $order['deal_price']; ?></b></a><span><a href="#" >在线支付</a></span></div></div><div class="details_butdiv4"><a class="status_text"><?php echo $order['statusText']; ?></a><a class="url_info" href="<?php echo url('user_center/u_order_detail',['order_sn'=>$order['order_sn'],'order_id'=>$order['order_id']]); ?>">订单详情</a></div><div class="details_butdiv5"><?php if($order['status'] == 2): ?><a class="url_method" href="<?php echo U('Order/index',['step'=>2,'order_id'=>$order['order_id'],'paytype'=>$order['paytype']]); ?>">去付款</a><a class="cancel_order" href="#">取消订单</a><?php elseif($order['status'] == 5): ?><a class="url_method" href="#">确认收货</a><a class="cancel_order" href="#">取消订单</a><?php elseif($order['status'] == 6): ?><a class="url_method" href="#"></a><a class="cancel_order" href="#"></a><?php elseif($order['status'] == 11): ?><a class="url_method" href="<?php echo url('UserCenter/to_evaluate',['order_sn'=>$order['order_sn']]); ?>">评价</a><a class="cancel_order" href="#">取消订单</a><?php endif; ?></div><div class="clear"></div></div></div><?php endforeach; endif; else: echo "" ;endif; ?></div><div class="page"><div class="page1"><?php echo $orders->render(); ?></div></div></div></div><div class="h_recommend"><div class="h_recommendtop"><span class="recommend_sp">为你推荐</span><p class="recommend_p"></p><div id="hrecommendtopli_fl"><i class="icon i-arrowleft"></i></div><div id="h_recommendtopli" class="h_recommendtopli"><ul><li class="backradius"></li><li></li><li></li><li></li><div class="clear"></div></ul></div><div id="hrecommendtopli_ri"><i class="icon i-arrowright"></i></div><div class="clear"></div></div><div id="h_commodity" class="h_commodity"><div class="commodity_particulars"><div class="particulars"><a href="#"><img alt="1" class="particulars_img" src=""/></a><span>￥156.33</span><p><a href="#">ubbie女装 舒适亚麻直筒套头上衣527956 纤维亚麻</a></p><span><a href="#">ubbie优彼女装专卖店</a></span><span>2000人付款</span><div class="clear"></div><div class="youxian"><p class="byaone" href="">包邮</p><p class="byatwo" href="">险</p></div></div><div class="clear"></div></div><div class="commodity_particulars"><div class="particulars"><a href="#"><img alt="2"  class="particulars_img" src=""/></a><span>￥156.33</span><p><a href="#">ubbie女装 舒适亚麻直筒套头上衣527956 纤维亚麻</a></p><span><a href="#">ubbie优彼女装专卖店</a></span><span>2000人付款</span><div class="clear"></div><div class="youxian"><p class="byaone" href="">包邮</p><p class="byatwo" href="">险</p></div></div><div class="clear"></div></div><div class="commodity_particulars"><div class="particulars"><a href="#"><img  alt="3"  class="particulars_img" src=""/></a><span>￥156.33</span><p><a href="#">ubbie女装 舒适亚麻直筒套头上衣527956 纤维亚麻</a></p><span><a href="#">ubbie优彼女装专卖店</a></span><span>2000人付款</span><div class="clear"></div><div class="youxian"><p class="byaone" href="">包邮</p><p class="byatwo" href="">险</p></div></div><div class="clear"></div></div><div class="commodity_particulars"><div class="particulars"><a href="#"><img alt="4"  class="particulars_img" src=""/></a><span>￥156.33</span><p><a href="#">ubbie女装 舒适亚麻直筒套头上衣527956 纤维亚麻</a></p><span><a href="#">ubbie优彼女装专卖店</a></span><span>2000人付款</span><div class="clear"></div><div class="youxian"><p class="byaone" href="">包邮</p><p class="byatwo" href="">险</p></div></div><div class="clear"></div></div></div></div></div><div class="clear"></div></div></div><!--foot--><script>
    //定义ajax全局变量开始
    var htmlobj = $('.indent_list .h_details').eq(0).clone();//克隆的部分模板
    var good =  htmlobj.find('.details_butdiv1').eq(0).clone();//克隆的部分模板
    var status_texe = htmlobj.find('.details_butdiv4').eq(0).clone();
    //定义ajax全局变量结束
        $(document).ready(function() {
            var order_css = $("#order_css").val();
            var titles=document.getElementById('notice-tit').getElementsByTagName('li');
            $(titles).removeAttr("class");
            $(titles).eq(order_css).addClass('select');
            //点击删除
            $(".dustbin").click(function(){
                $(this).parent().parent().remove();
            })
           //头部收藏
            $(".shouc").hover(function() {
                $(".shouc img").attr("src", "img/shoucangh.png")
            },function() {
                $(".shouc img").attr("src", "img/shoucang.png")
            });
            //全部状态的下拉列表
        $(".modhearsp4box li").bind('click', function(){
            $(".clickdddddd").html($(this).html());
        });
        $(".clickdddddd").click(function(){
                $(".modhearsp4box").toggle();
                $(this).parent().toggleClass("h_spdivbor");
                $(this).addClass("h_spdivborsp");
                $(".modhear_spimg").attr('src','img/jian2.png');
                $(".h_spdiv").css({"border":"0"});
                if($(".modhearsp4box").css("display")==="none"){
                    $(".clickdddddd").removeClass("h_spdivborsp");
                    $(".h_spdiv").css({"border":"1px solid #FFF","border":"0"});
                    $(".modhear_spimg").attr('src','img/jian.png');
                }
            })
          }).click (function (e){
            e = e || window.event;
            if (e.target != $ ('.clickdddddd')[0] && e.target != $ ('.modhearsp4box')[0])
            {
                $('.modhearsp4box').hide();
                $(".modhear_spimg").attr('src','img/jian.png');
                $(".clickdddddd").removeClass("h_spdivborsp");
                $(".h_spdiv").css({"border":"1px solid #fff","border":"0"});
            }
          });
         //选项卡
            window.onload=function(){
                //全部订单
            var titles=document.getElementById('notice-tit').getElementsByTagName('li');
            var divs=document.getElementById('notice-con').getElementsByClassName('mod');
            if(titles.length!=divs.length)
                return;
                for(var i=0;i<titles.length;i++){
                    titles[i].id=i;
                    titles[i].onclick=function(){
                        for(var j=0;j<titles.length;j++){
                            titles[j].className='';
                            divs[j].style.display='none';
                        }
                        titles[this.id].className='select';
                        divs[this.id].style.display='block';
                        //AJAX切换数据
                        var status;
                        if(this.id==0){
                            status=0;
                        }else if(this.id==1){
                            status=2;
                        }else if(this.id==2){
                            status=4;
                        }else if(this.id==3){
                            status=5;
                        }else if(this.id==4){
                            status=11;
                        }
                        status_Ajax(status,this.id);

                    }
                }
                //为你推荐
                function tab(){
                    var index=0;
                    var timer=null;
                    var commoditys=document.getElementById('h_commodity');
                    var recommendTopli=document.getElementById('h_recommendtopli').getElementsByTagName('li');
                    var commodity=document.getElementById('h_commodity').getElementsByClassName('commodity_particulars');
                    var prev = document.getElementById('hrecommendtopli_fl');
                    var next = document.getElementById('hrecommendtopli_ri');
                    for(var i=0;i<recommendTopli.length;i++){
                        recommendTopli[i].id=i;
                        recommendTopli[i].onmouseover=function(){
                        clearInterval(timer);
                        changeOption(this.id);
                    }
                        recommendTopli[i].onmouseout=function(){
                        timer=setInterval(autoPlay,4000);
                    }
                }
                    commoditys.onmouseover=function(){
                        clearInterval(timer);
                    }
                    commoditys.onmouseout=function(){
                        timer=setInterval(autoPlay,4000);
                    }
                        next.onclick = function() {
                            if(index >=3) {
                             index = 0;
                           } else {
                             index += 1;
                        }
                           changeOption(index);
                        }
                        prev.onclick = function() {
                            if(index <= 0) {
                             index = 3;
                           } else {
                             index -= 1;
                        }
                           changeOption(index);
                        }
                        if(timer){
                           clearInterval(timer);
                           timer=null;
                        }
                        timer=setInterval(autoPlay,4000);
                          function autoPlay(){
                              index++;
                              if(index>=recommendTopli.length){
                              index=0;
                           }
                           changeOption(index);
                       }
                 function changeOption(curIndex){
                    for(var j=0;j<recommendTopli.length;j++){
                       recommendTopli[j].className='';
                       commodity[j].style.display='none';
                   }
                    recommendTopli[curIndex].className='backradius';
                    commodity[curIndex].style.display='block';
                    index=curIndex;
                }
            }
                tab();
        }
        function status_Ajax(status,id) {
            var  url = "<?php echo U('UserCenter/u_order'); ?>";
            var  status = status;
            $.ajax({
                url:url,
                type:'post',
                data:{'status':status,'id':id},
                dataType:'json',
                success:function(order){
                    var data    = order.data;
                    var length  = data.length;
                    htmlobj.find('.details_butdiv1').remove();
                    $(".indent_list").empty();
                    $(".page1").empty();
                    if(length){
                        for (i=0;i<length;i++){
                            var html = htmlobj.clone();
                            //头部循环开始
                            html.find('.order_create_time').html(data[i].create_time);
                            html.find('.order_sn').html(data[i].order_sn);
                            html.find('.order_shop_id').html(data[i].shop_id);
                            //头部循环结束
                            for(j=0;j<data[i].goods_info.length;j++){
                                //商品循环开始
                                var goods =good.clone();
                                goods.find('.good_image').attr('src',data[i].good_image+data[i].goods_info[j].good_image);
                                goods.find('.goods_name').html(data[i].goods_info[j].goods_name);
                                goods.find('.goods_count').html("x"+data[i].goods_info[j].goods_count);
                                html.find('.details_butdiv').append(goods[0].outerHTML);
                                //商品循环结束
                            }
                            html.find('.user_name').html(data[i].user_name);
                            html.find('.total_price').html(data[i].total_price);
                            html.find('.deal_price').html(data[i].deal_price);
                            html.find('.status_text').html(data[i].statusText);
                            html.find('.url_info').attr('href',data[i].url_info +"?order_id="+ data[i].order_id +"& order_sn="+data[i].order_sn);
                            if (data[i].status == 2){
                                html.find('.url_method').html('去付款');
                                html.find('.url_method').attr('href',data[i].url_money +"?order_id="+ data[i].order_id +"& step=2 &paytype="+data[i].paytype);
                                html.find('.cancel_order').html('取消清单');
                                html.find('.cancel_order').attr('href','#');
                            }else if(data[i].status == 5){
                                html.find('.url_method').html('确认收货');
                                html.find('.url_method').attr('href','#');
                                html.find('.cancel_order').html('取消清单');
                                html.find('.cancel_order').attr('href','#');
                            }else if(data[i].status == 6){
                                html.find('.url_method').html('');
                                html.find('.url_method').attr('href','#');
                                html.find('.cancel_order').html('取消清单');
                                html.find('.cancel_order').attr('href','#');
                            }else if(data[i].status == 11){
                                html.find('.url_method').html('去评价');
                                html.find('.url_method').attr('href',data[i].url_evaluate +"?order_sn="+data[i].order_sn);
                                html.find('.cancel_order').html('取消清单');
                                html.find('.cancel_order').attr('href','#');
                            }
                            $(html).appendTo(".indent_list");
                        }
                        $(data[0].page).appendTo(".page1");
                        $(".active").addClass("adcol");
                    }
                },
            })
        }

    //分页
    $(function(){
        $(".active").addClass("adcol");
        $(".active").unbind();
    })
        </script></body></html><?php if(!isset($bottom_nav) || $bottom_nav !== false): ?><div class="fild"><div class="container"><div class="row d_floarig"><div class="col-sm-2 d_padi "><img src="<?php echo $img; ?>/baozhang.png" /><p>30天退换货保障</p></div><div class="col-sm-2 d_padi magleft"><img src="<?php echo $img; ?>/baoyou.png" /><p>购买满199包运费</p></div><div class="col-sm-2 d_padi magleft"><img src="<?php echo $img; ?>/fukuan.png" /><p>货到付款</p></div><div class="col-sm-2 d_padi flaorigt"><img src="<?php echo $img; ?>/kefu.png" /><p>售后无忧</p></div></div></div></div><div class="container list-style"><?php if(is_array($links) || $links instanceof \think\Collection || $links instanceof \think\Paginator): $i = 0; $__LIST__ = $links;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><ul class="ul2"><?php if(is_array($vo['name']) || $vo['name'] instanceof \think\Collection || $vo['name'] instanceof \think\Paginator): $i = 0; $__LIST__ = $vo['name'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$name): $mod = ($i % 2 );++$i;?><li><a href="<?php echo $name['href']; ?>"><?php echo $name['article_title']; ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?></ul><?php endforeach; endif; else: echo "" ;endif; ?><div class="ul2"><img src="<?php echo getImg(config($logo='qr_code')); ?>" alt=""  class="qr_code" /></div></div><?php endif; ?><div class="container text"><p><?php echo $webInfo; ?></p><div class="bottom"><a href=""><img src="<?php echo $img; ?>/bottom.png" alt="" /></a></div></div><script type="text/javascript">        //收藏夹图标
        $(".shouc").hover(
            function() {
                $(".shouc img").attr("src", "<?php echo $img; ?>/shoucangh.png")
            },
            function() {
                $(".shouc img").attr("src", "<?php echo $img; ?>/shoucang.png")
            }
        );
    </script></body><script src="<?php echo $web_static; ?>/js/common.js"></script><script src="<?php echo $js; ?>/shop.js"></script></html>