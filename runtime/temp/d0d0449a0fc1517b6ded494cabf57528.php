<?php if (!defined('THINK_PATH')) exit(); /*a:9:{s:75:"D:\phpStudy\WWW\adminui/public\theme\shop\default\seller_center\manage.html";i:1500431395;s:68:"D:\phpStudy\WWW\adminui/public\theme\shop\default\layout\layout.html";i:1500431396;s:69:"D:\phpStudy\WWW\adminui/public\theme\shop\default\layout\top_bar.html";i:1500431396;s:72:"D:\phpStudy\WWW\adminui/public\theme\shop\default\layout\logo_serch.html";i:1500431396;s:66:"D:\phpStudy\WWW\adminui/public\theme\shop\default\layout\logo.html";i:1500431396;s:79:"D:\phpStudy\WWW\adminui/public\theme\shop\default\seller_center\seller_bar.html";i:1500431395;s:72:"D:\phpStudy\WWW\adminui/public\theme\shop\default\layout\bottom_bar.html";i:1500431396;s:72:"D:\phpStudy\WWW\adminui/public\theme\shop\default\layout\bottom_nav.html";i:1500431396;s:68:"D:\phpStudy\WWW\adminui/public\theme\shop\default\layout\footer.html";i:1500431396;}*/ ?>
<!DOCTYPE html><html lang="zh-cn"><head><meta charset="UTF-8"><meta name="renderer" content="Webkit" /><meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"><title><?php echo $title; ?></title><link href="<?php echo $web_static; ?>/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet"><link rel="stylesheet" type="text/css" href="<?php echo $css; ?>headfoot.css" /><link href="<?php echo $web_static; ?>/css/font-awesome.min.css" rel="stylesheet"><link href="<?php echo $web_static; ?>/css/animate.css" rel="stylesheet"><script src="<?php echo $web_static; ?>/js/jquery.min.js"></script><script src="<?php echo $web_static; ?>/plugins/bootstrap/js/bootstrap.min.js"></script><script src="<?php echo $web_static; ?>/plugins/layui/layer/layer.js"></script><!--时间日期插件--><script src="<?php echo $web_static; ?>/plugins/layui/laydate/laydate.js"></script><script src="<?php echo $web_static; ?>/js/layer.com.js"></script><link rel="stylesheet" href="<?php echo $css; ?>/icon/iconfont.css"></head><body><div class="d_container-fluid"><div class="container"><div class="row"><div class="col-sm-4 d_padi d_top"><a href="<?php echo url('index/index'); ?>" class="d_redp">商城首页</a><?php $user = session('user');; if($user): ?><a href="<?php echo url('user_center/index'); ?>" class="d_redp">hello <?php echo $user['account']; ?></a><?php else: ?><a href="<?php echo url('user_center/login'); ?>" class="d_redp">请登录 </a><a href="<?php echo url('user_center/reg'); ?>" class="d_huip">免费注册</a><?php endif; ?><a href="" class="d_huip">手机app</a></div><div class="col-sm-8 d_padi d_float"><a href="">帮助中心</a><a href="<?php echo url('seller_center/index'); ?>">卖家中心<img src="<?php echo $img; ?>/jiantou.png" alt="" /></a><div class="activ"></div><a class="shouc" href="<?php echo url('user_center/u_collection'); ?>"><img src="<?php echo $img; ?>/shoucang.png" />我的收藏</a><a href="<?php echo url('cart/index'); ?>"><img src="<?php echo $img; ?>/gouwuche.png" alt="" />我的购物车</a><a href="<?php echo url('user_center/index'); ?>">个人中心 <img src="<?php echo $img; ?>/jiantou.png" /></a></div></div></div></div><?php if(!isset($load_search) || $load_search !== false): ?><form action="" method="post"><div class="container mag-top"><div class="row"><div class="col-sm-4 d_padi"><div class="d_logo"><img src="<?php echo getImg(config($logo='web_logo')); ?>" alt="logo" /></div></div><div class="col-sm-6 d_padi pull-right input"><input class="input1" type="text" name="" id="" placeholder="输入关键字" /><input class="input2" type="button" value="搜索"></div></div></div></form><?php endif; ?><link rel="stylesheet" href="<?php echo $static; ?>icon/iconfont.css"><link rel="stylesheet" href="<?php echo $css; ?>/usernew.css"><div><!--head--><div class="h_concent"><div class="position"><p>您的位置：</p><a href="">首页 ></a><p>卖家中心 ></p><p>发货</p></div><div class="indent_fl"><div class="h_sidebar"><div class="sidebar_centre"><ul><div class="h_square"><img src="<?php echo $img; ?>/dian.png" class="ceimg"/><span>全部功能</span></div><li><a href="<?php echo urldo('seller_center/basic_settings'); ?>">店铺基本信息</a></li><li><a href="<?php echo urldo('seller_center/cash'); ?>">我的钱包</a></li><li><a href="<?php echo urldo('seller_center/s_good_mgr'); ?>">商品管理</a></li><li><a href="<?php echo urldo('seller_center/release_good'); ?>" >发布商品</a></li><li><a href="<?php echo urldo('seller_center/in_application'); ?>">资质认证</a></li><li><a href="">店铺经营许可证</a></li><li><a href="<?php echo urldo('seller_center/logistics'); ?>">物流管理</a></li><li><a href="<?php echo urldo('seller_center/deliver'); ?>">发货</a></li><li><a href="<?php echo urldo('seller_center/manage'); ?>">评价管理</a></li><li><a href="<?php echo urldo('seller_center/s_order'); ?>">订单列表</a></li><li><a href="<?php echo urldo('seller_center/s_nav'); ?>">分类菜单设置</a></li><div class="h_borde"></div></ul></div><script type="text/javascript">
    var url = window.location.href;
    var $a  = $('.sidebar_centre ul li').find('a');
    $a.parent().removeClass('sidebar_lired');
    $a.removeClass('sidebar_red');
    $a.each(function() {
        if($(this).attr('href') == url){
            $(this).addClass('sidebar_red');
        }
    });
</script></div></div><div class="indent_rirgt_basic"><!--<div class="right_nav_basic"><span class="right_nav_hen"></span><div class="right_nav_hen_henh">发货</div></div>--><!--<div class="right_nav_basic_fenshu"> 好评度：<span class="right_nav_basic_fenshus">5分</span></div>--><div class="indent_ri clearfloat"><table><thead><tr><th></th><th>最近一周</th><th>最近1个月</th><th>最近6个月</th><th>总计</th></tr></thead><tbody><tr><td>非常满意</td><td><?php echo $data5['w']; ?></td><td><?php echo $data5['m']; ?></td><td><?php echo $data5['lm']; ?></td><td><?php echo $data5['z']; ?></td></tr><tr><td>满意</td><td><?php echo $data4['w']; ?></td><td><?php echo $data4['m']; ?></td><td><?php echo $data4['lm']; ?></td><td><?php echo $data4['z']; ?></td></tr><tr><td>一般</td><td><?php echo $data3['w']; ?></td><td><?php echo $data3['m']; ?></td><td><?php echo $data3['lm']; ?></td><td><?php echo $data3['z']; ?></td></tr><tr><td>不满意</td><td><?php echo $data2['w']; ?></td><td><?php echo $data2['m']; ?></td><td><?php echo $data2['lm']; ?></td><td><?php echo $data2['z']; ?></td></tr><tr><td>非常不满意</td><td><?php echo $data1['w']; ?></td><td><?php echo $data1['m']; ?></td><td><?php echo $data1['lm']; ?></td><td><?php echo $data1['z']; ?></td></tr></tbody></table></div><div class="h_managebox"><div class="h_manage"><div class="h_managediv1 h_sp1"><div class="h_divsp1"><span class="h_managesp1"><?php if($id == 0): ?>评价
                                    <?php elseif($id == 1): ?>好评
                                    <?php elseif($id == 2): ?>中评
                                    <?php elseif($id == 3): ?>差评
                                    <?php endif; ?></span><i class="icon i-xiala"></i></div></div><div class="h_managediv2 h_sp1"><span class="h_managesp2">被评价人</span></div><div class="h_managediv3 h_sp1"><span class="h_managesp3">商品信息</span></div><div class="h_managediv4 h_sp1"><span class="h_managesp4">操作</span></div><div class="clear"></div><div class="modhearsp4box1"><ul><li sid="0">评价</li><li sid="1">好评</li><li sid="2">中评</li><li sid="3">差评</li></ul></div></div><?php if(is_array($comments) || $comments instanceof \think\Collection || $comments instanceof \think\Paginator): $i = 0; $__LIST__ = $comments;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="h_managelist"><div class="h_pingjia"><p><?php echo $vo['comment_new']; ?></p><?php if($vo['com_img1'] !=null): ?><img class="h_pingjiaimg" src="<?php echo getImg($vo['com_img1']); ?>"/><?php endif; if($vo['com_img2'] !=null): ?><img class="h_pingjiaimg" src="<?php echo getImg($vo['com_img2']); ?>"/><?php endif; if($vo['com_img3'] !=null): ?><img class="h_pingjiaimg" src="<?php echo getImg($vo['com_img3']); ?>"/><?php endif; if($vo['com_img4'] !=null): ?><img class="h_pingjiaimg" src="<?php echo getImg($vo['com_img4']); ?>"/><?php endif; if($vo['com_img5'] !=null): ?><img class="h_pingjiaimg" src="<?php echo getImg($vo['com_img5']); ?>"/><?php endif; ?><div class="clear"></div><div class="h_xing clearfloat"><div  class="block clearfix " ><ul class="star<?php echo $vo['score']; ?>"></ul><div class="clearfix"><span class="fenshu"><?php echo $vo['score']; ?>分</span><span>[<?php echo $vo['create_time']; ?>]</span></div></div></div><?php if($vo['comment'] != ''): ?><div class="vendor">
                                买家评论：<span><?php echo $vo['comment']; ?></span></div><?php endif; ?><div class="clear"></div></div><div class="merchant_name"><p>商家名称：</p><span><?php echo $vo['shop_name']; ?></span></div><div class="commodity"><p><?php echo $vo['goods_name']; ?></p><span>￥<?php echo $vo['goods_price']; ?></span></div><div class="reply_but"><input type="button" id="reply" value="回复" name="<?php echo $vo['comment_new']; ?>" /></div><div class="clear"></div><div class="h_textbox"><div class="h_textbox1"><div class="sanjiao"></div><img src="<?php echo $img; ?>/h_xxx.png"/><textarea name="comment" ></textarea><span>至多输入255字</span><input type="button"  class="ajax-reply" goodId="<?php echo $vo['goods_id']; ?>" replyId="<?php echo $vo['comment_id']; ?>" orderId="<?php echo $vo['order_id']; ?>" value="发表回复" /></div></div></div><?php endforeach; endif; else: echo "" ;endif; ?><div class="page"><div class="page1"><?php echo $comments->render(); ?></div></div></div></div></div></div></body><script src="<?php echo $js; ?>/jquery.inisStar.js"></script><script type="text/javascript" src="<?php echo $web_static; ?>/js/uploadImg.js"></script><!--分页样式--><script>
        $(function(){
            $(".active").addClass("adcol");
        })
    </script><script>
        $('.star1').initStar({
            score   : 1
        });
        $('.star2').initStar({
            score   : 2
        })
        $('.star3').initStar({
            score   : 3
        });
        $('.star4').initStar({
            score   : 4
        })
        $('.star5').initStar({
            score   : 5
        });

    </script><script>
        $(document).ready(function() {
            //点击回复
            $(".reply_but input").click(function(){
                var reply = $(this).attr('name');
                if(reply == ''){
                    console.log(reply);
                    $(this).parent().next().next().css({display:"block",top:$(this).parent().parent().innerHeight()});
                }else {
                    layer.msg('您已对该评论回复，请勿重复操作！',{time:2000,shade:0.2});
                }

            })
            //点击x
            $(".h_textbox1 img").click(function(){
                $(this).parent().parent().css("display","none")
            })
           //头部收藏

    //侧边栏
            $('.h_sidebar li').click(function(){
            $(this).find('a').parent().parent().parent().find('a').removeClass('sidebar_red')
            $(this).parent().parent().find('li').removeClass('sidebar_lired');
            $(this).find('a').addClass('sidebar_red');
            $(this).addClass('sidebar_lired');
           });
            //全部状态的下拉列表
           $(".modhearsp4box1 li").bind('click', function(){
              $(".h_managesp1").html($(this).html());
          });
            $(".h_managesp1").click(function(){

                $(".modhearsp4box1").toggle();
                $(this).parent().toggleClass("h_spdivbor");
                $(this).addClass("h_spdivborsp");         //上
                $(".h_divsp1").children(".icon ").toggleClass("i-xiala").toggleClass("i-shouqi");

                $(".h_divsp1").css({"border":"1px solid #e6e6e6","border-bottom":"none"});

                if($(".modhearsp4box1").css("display")==="none"){
                    $(".h_managesp1").removeClass("h_spdivborsp");
                    $(".h_divsp1").css({"border":"1px solid #FFF","border-bottom":"none"});
                    $(".modhear_spimg").attr('src','<?php echo $img; ?>/jian.png');  //下

                }
            })
          }).click (function (e){
            e = e || window.event;
            if (e.target != $ ('.h_managesp1')[0] && e.target != $ ('.modhearsp4box1')[0])
            {
                $('.modhearsp4box1').hide();
                $(".modhear_spimg").attr('src','<?php echo $img; ?>/jian.png');  //下
                $(".h_managesp1").removeClass("h_spdivborsp");
                $(".h_divsp1").css({"border":"1px solid #fff","border-bottom":"none"}).children(".icon ").toggleClass("i-xiala").toggleClass("i-shouqi");
            }
          });
    </script><!--ajax提交回复--><script type="text/javascript">
        $(".ajax-reply").click(function () {
            var order_id = $(this).attr('orderId');
//            console.log(order_id);
            var goods_id = $(this).attr('goodId');
//            console.log(goods_id);
            var reply_id =  $(this).attr('replyId');
//            console.log(reply_id);
            var comment = $(this).parent().find('textarea').val();
//            console.log(comment);
            $.ajax({
                url:'<?php echo U("manage"); ?>',
                type:'post',
                data:{order_id:order_id,goods_id:goods_id,comment:comment,reply_id:reply_id},
                success:function (res) {
                    if(isNaN(res)){
                        layer.msg(res,{time:2000,shade:0.2});
                    }else {
                        $('.h_textbox').hide();
                        window.location.href = '';
                    }
                }
            })
        })
    </script><!--传递评价参数--><script>
        $(function () {
            $('.modhearsp4box1 li').click(function () {
                var id = $(this).attr('sid');
//                console.log(id);
                window.location.href = "<?php echo urldo('manage'); ?>?id="+id;
            });
        })
    </script><!--删除最后一条记录的下边框--><script>
       /* $(function () {
            var len = $('.h_managelist').length;
            $('.h_managebox>div').eq(len).css('border-bottom',0)
        })*/
    </script></html><?php if(!isset($bottom_nav) || $bottom_nav !== false): ?><div class="fild"><div class="container"><div class="row d_floarig"><div class="col-sm-2 d_padi "><img src="<?php echo $img; ?>/baozhang.png" /><p>30天退换货保障</p></div><div class="col-sm-2 d_padi magleft"><img src="<?php echo $img; ?>/baoyou.png" /><p>购买满199包运费</p></div><div class="col-sm-2 d_padi magleft"><img src="<?php echo $img; ?>/fukuan.png" /><p>货到付款</p></div><div class="col-sm-2 d_padi flaorigt"><img src="<?php echo $img; ?>/kefu.png" /><p>售后无忧</p></div></div></div></div><div class="container list-style"><?php if(is_array($links) || $links instanceof \think\Collection || $links instanceof \think\Paginator): $i = 0; $__LIST__ = $links;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><ul class="ul2"><?php if(is_array($vo['name']) || $vo['name'] instanceof \think\Collection || $vo['name'] instanceof \think\Paginator): $i = 0; $__LIST__ = $vo['name'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$name): $mod = ($i % 2 );++$i;?><li><a href="<?php echo $name['href']; ?>"><?php echo $name['article_title']; ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?></ul><?php endforeach; endif; else: echo "" ;endif; ?><div class="ul2"><img src="<?php echo getImg(config($logo='qr_code')); ?>" alt=""  class="qr_code" /></div></div><?php endif; ?><div class="container text"><p><?php echo $webInfo; ?></p><div class="bottom"><a href=""><img src="<?php echo $img; ?>/bottom.png" alt="" /></a></div></div><script type="text/javascript">        //收藏夹图标
        $(".shouc").hover(
            function() {
                $(".shouc img").attr("src", "<?php echo $img; ?>/shoucangh.png")
            },
            function() {
                $(".shouc img").attr("src", "<?php echo $img; ?>/shoucang.png")
            }
        );
    </script></body><script src="<?php echo $web_static; ?>/js/common.js"></script><script src="<?php echo $js; ?>/shop.js"></script></html>