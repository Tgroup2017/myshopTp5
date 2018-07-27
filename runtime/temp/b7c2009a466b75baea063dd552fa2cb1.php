<?php if (!defined('THINK_PATH')) exit(); /*a:9:{s:76:"D:\phpStudy\WWW\adminui/public\theme\shop\default\seller_center\s_order.html";i:1500431395;s:68:"D:\phpStudy\WWW\adminui/public\theme\shop\default\layout\layout.html";i:1500431396;s:69:"D:\phpStudy\WWW\adminui/public\theme\shop\default\layout\top_bar.html";i:1500431396;s:72:"D:\phpStudy\WWW\adminui/public\theme\shop\default\layout\logo_serch.html";i:1500431396;s:66:"D:\phpStudy\WWW\adminui/public\theme\shop\default\layout\logo.html";i:1500431396;s:79:"D:\phpStudy\WWW\adminui/public\theme\shop\default\seller_center\seller_bar.html";i:1500431395;s:72:"D:\phpStudy\WWW\adminui/public\theme\shop\default\layout\bottom_bar.html";i:1500431396;s:72:"D:\phpStudy\WWW\adminui/public\theme\shop\default\layout\bottom_nav.html";i:1500431396;s:68:"D:\phpStudy\WWW\adminui/public\theme\shop\default\layout\footer.html";i:1500431396;}*/ ?>
<!DOCTYPE html><html lang="zh-cn"><head><meta charset="UTF-8"><meta name="renderer" content="Webkit" /><meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"><title><?php echo $title; ?></title><link href="<?php echo $web_static; ?>/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet"><link rel="stylesheet" type="text/css" href="<?php echo $css; ?>headfoot.css" /><link href="<?php echo $web_static; ?>/css/font-awesome.min.css" rel="stylesheet"><link href="<?php echo $web_static; ?>/css/animate.css" rel="stylesheet"><script src="<?php echo $web_static; ?>/js/jquery.min.js"></script><script src="<?php echo $web_static; ?>/plugins/bootstrap/js/bootstrap.min.js"></script><script src="<?php echo $web_static; ?>/plugins/layui/layer/layer.js"></script><!--时间日期插件--><script src="<?php echo $web_static; ?>/plugins/layui/laydate/laydate.js"></script><script src="<?php echo $web_static; ?>/js/layer.com.js"></script><link rel="stylesheet" href="<?php echo $css; ?>/icon/iconfont.css"></head><body><div class="d_container-fluid"><div class="container"><div class="row"><div class="col-sm-4 d_padi d_top"><a href="<?php echo url('index/index'); ?>" class="d_redp">商城首页</a><?php $user = session('user');; if($user): ?><a href="<?php echo url('user_center/index'); ?>" class="d_redp">hello <?php echo $user['account']; ?></a><?php else: ?><a href="<?php echo url('user_center/login'); ?>" class="d_redp">请登录 </a><a href="<?php echo url('user_center/reg'); ?>" class="d_huip">免费注册</a><?php endif; ?><a href="" class="d_huip">手机app</a></div><div class="col-sm-8 d_padi d_float"><a href="">帮助中心</a><a href="<?php echo url('seller_center/index'); ?>">卖家中心<img src="<?php echo $img; ?>/jiantou.png" alt="" /></a><div class="activ"></div><a class="shouc" href="<?php echo url('user_center/u_collection'); ?>"><img src="<?php echo $img; ?>/shoucang.png" />我的收藏</a><a href="<?php echo url('cart/index'); ?>"><img src="<?php echo $img; ?>/gouwuche.png" alt="" />我的购物车</a><a href="<?php echo url('user_center/index'); ?>">个人中心 <img src="<?php echo $img; ?>/jiantou.png" /></a></div></div></div></div><?php if(!isset($load_search) || $load_search !== false): ?><form action="" method="post"><div class="container mag-top"><div class="row"><div class="col-sm-4 d_padi"><div class="d_logo"><img src="<?php echo getImg(config($logo='web_logo')); ?>" alt="logo" /></div></div><div class="col-sm-6 d_padi pull-right input"><input class="input1" type="text" name="" id="" placeholder="输入关键字" /><input class="input2" type="button" value="搜索"></div></div></div></form><?php endif; ?><script src="<?php echo $web_static; ?>/plugins/layui/laydate/laydate.js" charset="utf-8"></script><script type="text/javascript" src="<?php echo $web_static; ?>/js//uploadImg.js"></script><link rel="stylesheet" href="<?php echo $css; ?>/usernew.css"><div class="h_concent"><div class="position"><p>您的位置：</p><a href="">首页 ></a><p>卖家中心 ></p><p>商品管理</p></div><div class="indent_fl"><div class="h_sidebar"><div class="sidebar_centre"><ul><div class="h_square"><img src="<?php echo $img; ?>/dian.png" class="ceimg"/><span>全部功能</span></div><li><a href="<?php echo urldo('seller_center/basic_settings'); ?>">店铺基本信息</a></li><li><a href="<?php echo urldo('seller_center/cash'); ?>">我的钱包</a></li><li><a href="<?php echo urldo('seller_center/s_good_mgr'); ?>">商品管理</a></li><li><a href="<?php echo urldo('seller_center/release_good'); ?>" >发布商品</a></li><li><a href="<?php echo urldo('seller_center/in_application'); ?>">资质认证</a></li><li><a href="">店铺经营许可证</a></li><li><a href="<?php echo urldo('seller_center/logistics'); ?>">物流管理</a></li><li><a href="<?php echo urldo('seller_center/deliver'); ?>">发货</a></li><li><a href="<?php echo urldo('seller_center/manage'); ?>">评价管理</a></li><li><a href="<?php echo urldo('seller_center/s_order'); ?>">订单列表</a></li><li><a href="<?php echo urldo('seller_center/s_nav'); ?>">分类菜单设置</a></li><div class="h_borde"></div></ul></div><script type="text/javascript">
    var url = window.location.href;
    var $a  = $('.sidebar_centre ul li').find('a');
    $a.parent().removeClass('sidebar_lired');
    $a.removeClass('sidebar_red');
    $a.each(function() {
        if($(this).attr('href') == url){
            $(this).addClass('sidebar_red');
        }
    });
</script></div></div><div class="indent_rirgt_basic"><div class="right_nav_basic"><span class="right_nav_hen"></span><div class="right_nav_hen_henh">商品管理</div></div><div class="management_right"><form action="<?php echo U('SellerCenter/s_order'); ?>" method="post"><div class="management_rightson"><span>商品名称</span><input type="text" name="goods_id" class="management_rightsoninput" value="<?php echo input('good_name'); ?>"></div><div class="management_rightson"><span>订单状态</span><select name="status" id="" class="management_rightsoninput"><option></option><?php if(is_array($status) || $status instanceof \think\Collection || $status instanceof \think\Paginator): $i = 0; $__LIST__ = $status;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$type): $mod = ($i % 2 );++$i;?><option value="<?php echo $type['id']; ?>"><?php echo $type['name']; ?></option><?php endforeach; endif; else: echo "" ;endif; ?></select></div><div class="management_rightson"><span>订单编号</span><input type="text " name="order_sn" class="management_rightsoninput" value="<?php echo input('order_sn'); ?>"></div><div class="management_rightson"><span>买家名称</span><input type="text" name="user_id" class="management_rightsoninput" value="<?php echo input('realname'); ?>"></div><div class="management_rightson setime"><span>创建时间</span><input type="text" name="datestart" class="management_rightsoninputone  i-datestart" id="date3" placeholder="开始日期" />
                        至
                        <input type="text" name="dateend" class="management_rightsoninputone  i-dateend" placeholder="结束日期" /></div><div class="clear"></div><div class="management_rightson"><input type="submit" value="搜索" class="management_rightsoninputbutton sousuo-btn" /></div></form></div><div class="management_rightcont"><div class="management_rightcontone"><a href="javascript:;" class="management_rightcontone_addback" onclick="order_status(0)">全部订单</a><a href="javascript:;" onclick="order_status(2)">等待买家付款</a><a href="javascript:;" onclick="order_status(4)">等待发货</a><a href="javascript:;" onclick="order_status(5)">已发货</a><a href="javascript:;" onclick="order_status(7)">退款中</a><a href="javascript:;" onclick="order_status(11)">未评价</a><a href="javascript:;" onclick="order_status(6)">交易成功</a><a href="javascript:;" onclick="order_status(12)">取消订单</a></div><div class="management_rightconttwo"><span class="management_rightconttwospanone">商品名称</span><span class="management_rightconttwospanstwo">价格/数量</span><span class="management_rightconttwospanstwo">买家</span><span class="management_rightconttwospanstwo">状态</span><span class="management_rightconttwospanstwo">实收款</span><span class="management_rightconttwospanstwo">操作</span></div><div class="ordercont  order_checkbox"><!-- <div class="orderconts"><input type="checkbox"></div><input type="button" value="批量发货">--></div><form id="order_check_all" action="<?php echo U('SellerCenter/deliver'); ?>" method="post"><div class="order_list" id="check_arr"><?php if(is_array($orders) || $orders instanceof \think\Collection || $orders instanceof \think\Paginator): $i = 0; $__LIST__ = $orders;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$order): $mod = ($i % 2 );++$i;?><div class="management_rightcontthreeparent"><div class="management_rightcontthreesons"><div class="ordercont"><div class="orderconts"><input type="checkbox" name="order_id[]" value="<?php echo $order['order_id']; ?>"></div><span> 订单编号：<span class="order_sn"><?php echo $order['order_sn']; ?></span></span><span class="orderconts_left"> 创建时间：<span class="create_time"><?php echo $order['create_time']; ?></span></span><span class="orderconts_leftwao"><?php echo $order['method']; ?></span><span class="orderconts_lefttwo"> 运单号：<span class="waybill_sn"><?php echo $order['waybill_sn']; ?></span></span></div></div><div class="good_list"><?php if(is_array($order['goods_info']) || $order['goods_info'] instanceof \think\Collection || $order['goods_info'] instanceof \think\Paginator): $i = 0; $__LIST__ = $order['goods_info'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$good): $mod = ($i % 2 );++$i;?><div class="management_rightcontthree_son"><span class="management_rightconttwospanss"><img src="<?php echo $upload; ?><?php echo $good['good_image']; ?>" alt="" class="management_rightconttwospansonimg"><div class="management_rightconttwospansononesin"><p class="goods_name"><?php echo $good['goods_name']; ?></p><div class="attr_list "><?php if(is_array($good['good_attr']) || $good['good_attr'] instanceof \think\Collection || $good['good_attr'] instanceof \think\Paginator): $i = 0; $__LIST__ = $good['good_attr'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$attr): $mod = ($i % 2 );++$i;?><p class="goods_attr"><?php echo $key; ?>：<?php echo $attr; ?></p><?php endforeach; endif; else: echo "" ;endif; ?></div></div></span><div class="management_rightconttwospanstwoparent"><span class="management_rightconttwospanstw">￥<?php echo $good['price']; ?>x<?php echo $good['goods_count']; ?></span><span class="management_rightconttwospanstw  user_id"><?php echo $order['user_id']; ?></span><span class="status"><p class="status1"><?php echo $good['statusText']; ?></p><a href="<?php echo urldo('seller_center/order_detail',['order_id'=>$order['order_id']]); ?>"  class="management_rightconttwospanstwa">物流订单详情</a></span><span class="total_price"><p class="total_price1"><?php echo $good['total_price']; ?></p><p class="despatch_money">（含运费￥<?php echo $order['despatch_money']; ?>）</p></span><a  class="management_rightconttwospanstw good_info">详情</a></div></div><?php endforeach; endif; else: echo "" ;endif; ?></div></div><?php endforeach; endif; else: echo "" ;endif; ?></div></form><div class="page"><?php echo $orders->render(); ?></div></div></div></div><script>
    var htmlobj = $(".management_rightcontthreeparent").eq(0).clone();
    var goodsobj = htmlobj.find('.management_rightcontthree_son').eq(0).clone();
 function order_status(status){
     var url = "<?php echo U('SellerCenter/s_order'); ?>";
     var  status = status;
     $.ajax({
         url:url,
         type:'post',
         data:{'status':status},
         dataType:'json',
         success:function(msg){
             $(".management_rightcontthreeparent").remove();
             htmlobj.find(".management_rightcontthree_son").remove();
             htmlobj.find(".attr_list").empty();
             $('.order_checkbox').empty();
             $(".page").empty();
             var data    = msg.data;
             var length  = data.length;
             if(length>0){
                 for (var i=0;i<length;i++){
                     var html = htmlobj.clone();
                     html.find('.order_sn').html(data[i].order_sn);
                     html.find('.create_time').html(data[i].create_time);
                     html.find('.orderconts_leftwao').html(data[i].method);
                     html.find('.waybill_sn').html(data[i].waybill_sn);
                     for (var j=0;j<data[i].goods_info.length;j++){
                         var goods = goodsobj.clone();
                         goods.find('.management_rightconttwospansonimg').attr('src',data[i].good_image+data[i].goods_info[j].good_image);
                         goods.find('.goods_name').html(data[i].goods_info[j].goods_name);
                         goods.find('.management_rightconttwospanstw').html("￥"+data[i].goods_info[j].price+"x"+data[i].goods_info[j].goods_count);
                         goods.find('.user_id').html(data[i].user_id);
                         goods.find('.status1').html(data[i].goods_info[j].statusText);
                         goods.find('.management_rightconttwospanstwa').attr('href',data[i].url_info+"?order_id="+data[i].order_id);
                         goods.find('.management_rightconttwospanstwa').html("物流订单详情");
                         goods.find('.total_price1').html(data[i].goods_info[j].total_price);
                         goods.find('.despatch_money').html("(包含运费￥"+data[i].despatch_money+")");//物流费
                         goods.find('.good_info').attr('href',data[i].url_info+"?waybill_sn="+data[i].waybill_sn);//商品详情
                         goods.find('.good_info').html('详情')
                         html.find('.good_list').append(goods[0].outerHTML);
                         var good_attr = data[i].goods_info[j].good_attr;
                         for (var l in good_attr){
                             var attr ="";
                             attr =" <p class='goods_attr'>"+l+':'+good_attr[l]+"</p>"
                             html.find('.attr_list').eq(j).append(attr);
                         }
                     }
                 }
                if(data[0].order_status ==4){
                     var checkbox = "";
                     checkbox = "<div class='orderconts'><input type='checkbox' id='order_all' onclick='order_all()' name='order_id[]' ></div><input type='button' onclick='order_check()' value='批量发货'>"
                     $(checkbox).appendTo('.order_checkbox');
                 }
                 $(data[0].page).appendTo(".page");
                 $(".active").addClass("adcol");
                 $(html).appendTo(".order_list");
             }
        }
    })
     return false;
 }
    //分页样式
    $(function(){
        $(".active").addClass("adcol");
        $(".active").unbind();
    })
 function order_all(){
     var check_all = $("#order_all").is(':checked');
     if(check_all === true){
        $("#check_arr :checkbox").prop("checked", true);
     }else{
        $("#check_arr :checkbox").prop("checked",false);
     }
 }
function order_check(){
     $("#order_check_all").submit();
}
</script><?php if(!isset($bottom_nav) || $bottom_nav !== false): ?><div class="fild"><div class="container"><div class="row d_floarig"><div class="col-sm-2 d_padi "><img src="<?php echo $img; ?>/baozhang.png" /><p>30天退换货保障</p></div><div class="col-sm-2 d_padi magleft"><img src="<?php echo $img; ?>/baoyou.png" /><p>购买满199包运费</p></div><div class="col-sm-2 d_padi magleft"><img src="<?php echo $img; ?>/fukuan.png" /><p>货到付款</p></div><div class="col-sm-2 d_padi flaorigt"><img src="<?php echo $img; ?>/kefu.png" /><p>售后无忧</p></div></div></div></div><div class="container list-style"><?php if(is_array($links) || $links instanceof \think\Collection || $links instanceof \think\Paginator): $i = 0; $__LIST__ = $links;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><ul class="ul2"><?php if(is_array($vo['name']) || $vo['name'] instanceof \think\Collection || $vo['name'] instanceof \think\Paginator): $i = 0; $__LIST__ = $vo['name'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$name): $mod = ($i % 2 );++$i;?><li><a href="<?php echo $name['href']; ?>"><?php echo $name['article_title']; ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?></ul><?php endforeach; endif; else: echo "" ;endif; ?><div class="ul2"><img src="<?php echo getImg(config($logo='qr_code')); ?>" alt=""  class="qr_code" /></div></div><?php endif; ?><div class="container text"><p><?php echo $webInfo; ?></p><div class="bottom"><a href=""><img src="<?php echo $img; ?>/bottom.png" alt="" /></a></div></div><script type="text/javascript">        //收藏夹图标
        $(".shouc").hover(
            function() {
                $(".shouc img").attr("src", "<?php echo $img; ?>/shoucangh.png")
            },
            function() {
                $(".shouc img").attr("src", "<?php echo $img; ?>/shoucang.png")
            }
        );
    </script></body><script src="<?php echo $web_static; ?>/js/common.js"></script><script src="<?php echo $js; ?>/shop.js"></script></html>