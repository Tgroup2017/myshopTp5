<?php if (!defined('THINK_PATH')) exit(); /*a:9:{s:74:"D:\phpStudy\WWW\adminui/public\theme\shop\default\seller_center\s_nav.html";i:1500431395;s:68:"D:\phpStudy\WWW\adminui/public\theme\shop\default\layout\layout.html";i:1500431396;s:69:"D:\phpStudy\WWW\adminui/public\theme\shop\default\layout\top_bar.html";i:1500431396;s:72:"D:\phpStudy\WWW\adminui/public\theme\shop\default\layout\logo_serch.html";i:1500431396;s:66:"D:\phpStudy\WWW\adminui/public\theme\shop\default\layout\logo.html";i:1500431396;s:79:"D:\phpStudy\WWW\adminui/public\theme\shop\default\seller_center\seller_bar.html";i:1500431395;s:72:"D:\phpStudy\WWW\adminui/public\theme\shop\default\layout\bottom_bar.html";i:1500431396;s:72:"D:\phpStudy\WWW\adminui/public\theme\shop\default\layout\bottom_nav.html";i:1500431396;s:68:"D:\phpStudy\WWW\adminui/public\theme\shop\default\layout\footer.html";i:1500431396;}*/ ?>
<!DOCTYPE html><html lang="zh-cn"><head><meta charset="UTF-8"><meta name="renderer" content="Webkit" /><meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"><title><?php echo $title; ?></title><link href="<?php echo $web_static; ?>/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet"><link rel="stylesheet" type="text/css" href="<?php echo $css; ?>headfoot.css" /><link href="<?php echo $web_static; ?>/css/font-awesome.min.css" rel="stylesheet"><link href="<?php echo $web_static; ?>/css/animate.css" rel="stylesheet"><script src="<?php echo $web_static; ?>/js/jquery.min.js"></script><script src="<?php echo $web_static; ?>/plugins/bootstrap/js/bootstrap.min.js"></script><script src="<?php echo $web_static; ?>/plugins/layui/layer/layer.js"></script><!--时间日期插件--><script src="<?php echo $web_static; ?>/plugins/layui/laydate/laydate.js"></script><script src="<?php echo $web_static; ?>/js/layer.com.js"></script><link rel="stylesheet" href="<?php echo $css; ?>/icon/iconfont.css"></head><body><div class="d_container-fluid"><div class="container"><div class="row"><div class="col-sm-4 d_padi d_top"><a href="<?php echo url('index/index'); ?>" class="d_redp">商城首页</a><?php $user = session('user');; if($user): ?><a href="<?php echo url('user_center/index'); ?>" class="d_redp">hello <?php echo $user['account']; ?></a><?php else: ?><a href="<?php echo url('user_center/login'); ?>" class="d_redp">请登录 </a><a href="<?php echo url('user_center/reg'); ?>" class="d_huip">免费注册</a><?php endif; ?><a href="" class="d_huip">手机app</a></div><div class="col-sm-8 d_padi d_float"><a href="">帮助中心</a><a href="<?php echo url('seller_center/index'); ?>">卖家中心<img src="<?php echo $img; ?>/jiantou.png" alt="" /></a><div class="activ"></div><a class="shouc" href="<?php echo url('user_center/u_collection'); ?>"><img src="<?php echo $img; ?>/shoucang.png" />我的收藏</a><a href="<?php echo url('cart/index'); ?>"><img src="<?php echo $img; ?>/gouwuche.png" alt="" />我的购物车</a><a href="<?php echo url('user_center/index'); ?>">个人中心 <img src="<?php echo $img; ?>/jiantou.png" /></a></div></div></div></div><?php if(!isset($load_search) || $load_search !== false): ?><form action="" method="post"><div class="container mag-top"><div class="row"><div class="col-sm-4 d_padi"><div class="d_logo"><img src="<?php echo getImg(config($logo='web_logo')); ?>" alt="logo" /></div></div><div class="col-sm-6 d_padi pull-right input"><input class="input1" type="text" name="" id="" placeholder="输入关键字" /><input class="input2" type="button" value="搜索"></div></div></div></form><?php endif; ?><link rel="stylesheet" href="<?php echo $css; ?>/usernew.css"><link rel="stylesheet" href="<?php echo $web_static; ?>icon/iconfont.css"><div class="h_concent"><div class="position"><p>您的位置：</p><a href="">首页 ></a><p>卖家中心 ></p><p>分类菜单设置</p></div><div class="indent_fl"><div class="h_sidebar"><div class="sidebar_centre"><ul><div class="h_square"><img src="<?php echo $img; ?>/dian.png" class="ceimg"/><span>全部功能</span></div><li><a href="<?php echo urldo('seller_center/basic_settings'); ?>">店铺基本信息</a></li><li><a href="<?php echo urldo('seller_center/cash'); ?>">我的钱包</a></li><li><a href="<?php echo urldo('seller_center/s_good_mgr'); ?>">商品管理</a></li><li><a href="<?php echo urldo('seller_center/release_good'); ?>" >发布商品</a></li><li><a href="<?php echo urldo('seller_center/in_application'); ?>">资质认证</a></li><li><a href="">店铺经营许可证</a></li><li><a href="<?php echo urldo('seller_center/logistics'); ?>">物流管理</a></li><li><a href="<?php echo urldo('seller_center/deliver'); ?>">发货</a></li><li><a href="<?php echo urldo('seller_center/manage'); ?>">评价管理</a></li><li><a href="<?php echo urldo('seller_center/s_order'); ?>">订单列表</a></li><li><a href="<?php echo urldo('seller_center/s_nav'); ?>">分类菜单设置</a></li><div class="h_borde"></div></ul></div><script type="text/javascript">
    var url = window.location.href;
    var $a  = $('.sidebar_centre ul li').find('a');
    $a.parent().removeClass('sidebar_lired');
    $a.removeClass('sidebar_red');
    $a.each(function() {
        if($(this).attr('href') == url){
            $(this).addClass('sidebar_red');
        }
    });
</script></div></div><div class="indent_rirgt_basic"><div class="right_nav_basic"><span class="right_nav_hen"></span><div class="right_nav_hen_henh">分类菜单设置</div><span class="right_nav_basic_goodsspans"> :  该功能为店铺中的菜单分类,方便于用户进入店铺后可以根据不同的菜单类型查找对应的商品信息!最多可设置7个菜单</span></div><div class="right_nav_basic_menu"><button class="right_nav_basic_menubutton"><img src="<?php echo $img; ?>/cetegory.png" alt="">新增菜单</button><div class="right_nav_basic_menus"><div class="right_nav_basic_menuss"><?php if(is_array($tree) || $tree instanceof \think\Collection || $tree instanceof \think\Paginator): $i = 0; $__LIST__ = $tree;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;if($vo['pid'] == 0): ?><div class="right_nav_basic_menusson"><input type="text" name="name" class="right_nav_basic_menussonspan" value="<?php echo $vo['name']; ?>" mid="<?php echo $vo['id']; ?>" /><button class="right_nav_basic_menussonbutton">新增子菜单</button><span  class="right_nav_basic_menussona">编辑</span><button class="right_nav_basic_menussonbuttontwo" mid="<?php echo $vo['id']; ?>" pid="<?php echo $vo['pid']; ?>">删除</button></div><?php else: ?><div class="right_nav_basic_menusson"><input type="text" name="name" class="right_nav_basic_menussonspaner" value="<?php echo $vo['name']; ?>" mid="<?php echo $vo['id']; ?>"/><span  class="right_nav_basic_menussona">编辑</span><button class="right_nav_basic_menussonbuttontwos" mid="<?php echo $vo['id']; ?>">删除</button></div><?php endif; endforeach; endif; else: echo "" ;endif; ?></div></div></div></div></div><script>
//增加爹菜单

    $(".right_nav_basic_menubutton").click(function () {
//        $('<div class="right_nav_basic_menuss"><div class="right_nav_basic_menusson"><input class="right_nav_basic_menussonspan" value="请更新菜单名称"><button class="right_nav_basic_menussonbutton">新增子菜单</button><span href="" class="right_nav_basic_menussona">编辑</span><button class="right_nav_basic_menussonbuttontwo">删除</button></div></div>').appendTo(".right_nav_basic_menus")
        var pid = 0;
        var name = '请更新菜单名称';
        addShopMenu(pid,name);
    });

    $(".right_nav_basic_menussonbutton").click(function () {
//        $(this).parents(".right_nav_basic_menuss").children('input').append(' <div class="right_nav_basic_menusson"><input class="right_nav_basic_menussonspaner" value="请更新菜单名称"><span href="" class="right_nav_basic_menussona">编辑</span><button class="right_nav_basic_menussonbuttontwos" >删除</button></div>')
        var pid = $(this).parent(".right_nav_basic_menusson").children(".right_nav_basic_menussonspan").attr('mid');
        var name = '请更新菜单名称';
        addShopMenu(pid,name);
    })
//   删除爹菜单
    $(document).on('click','.right_nav_basic_menussonbuttontwo',function(){
        var id = $(this).attr('mid');
        layer.alert("是否确定要删除？",{title:'提示信息',closeBtn: 1,icon:7},function () {
            delShopMenu(id);
            layer.closeAll();
        })
    });
 //   删除子菜单
    $(document).on('click','.right_nav_basic_menussonbuttontwos',function(){
        var id = $(this).attr('mid');
        layer.alert("是否确定要删除？",{title:'提示信息',closeBtn: 1,icon:7},function () {
            delShopMenu(id);
            layer.closeAll();
        });
//        $(this).parent(".right_nav_basic_menusson").remove();
    });

    $(document).on('click','.right_nav_basic_menussona',function(){
        $(this).parent(".right_nav_basic_menusson").children("input").focus();
    });
//  ajax处理数据
    function addShopMenu(pid,name) {
        $.ajax({
            url: '<?php echo U("s_nav"); ?>',
            type: "post",
            data:{"pid":pid,"name":name},
            success: function (res){
                if(res){
                    console.log(res);
                    layer.msg(res,{time:2000,shade:0.2});
                    setTimeout(function () {
                        window.location.href ='';
                    },2000)
                }else {
                    window.location.href ='';
                }
            }
        })
    }

    function delShopMenu(id) {
        $.ajax({
            url: '<?php echo U("del_nav"); ?>',
            type: "post",
            data:{"id":id},
            success: function (res){
                window.location.href ='';
            }
        })
    }

    $("input[type='text']").change(function(){
        var value    =$(this).val();
        var id  =$(this).attr('mid');
        $.ajax({
            url:"<?php echo U('edit_nav'); ?>",
            data:{name:value,id:id},
            type:"post",
            dataType:"json",
            beforeSend:function(){
                layer.load(2,{shade:0.2});
            },
            complete:function(){
                layer.closeAll();
                layer.msg('已经修改',{time:1000,shade:0.2});
            }
        })
    })
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