<?php if (!defined('THINK_PATH')) exit(); /*a:9:{s:79:"D:\phpStudy\WWW\adminui/public\theme\shop\default\seller_center\edit_goods.html";i:1503654459;s:68:"D:\phpStudy\WWW\adminui/public\theme\shop\default\layout\layout.html";i:1500431396;s:69:"D:\phpStudy\WWW\adminui/public\theme\shop\default\layout\top_bar.html";i:1500431396;s:72:"D:\phpStudy\WWW\adminui/public\theme\shop\default\layout\logo_serch.html";i:1500431396;s:66:"D:\phpStudy\WWW\adminui/public\theme\shop\default\layout\logo.html";i:1500431396;s:79:"D:\phpStudy\WWW\adminui/public\theme\shop\default\seller_center\seller_bar.html";i:1500431395;s:72:"D:\phpStudy\WWW\adminui/public\theme\shop\default\layout\bottom_bar.html";i:1500431396;s:72:"D:\phpStudy\WWW\adminui/public\theme\shop\default\layout\bottom_nav.html";i:1500431396;s:68:"D:\phpStudy\WWW\adminui/public\theme\shop\default\layout\footer.html";i:1500431396;}*/ ?>
<!DOCTYPE html><html lang="zh-cn"><head><meta charset="UTF-8"><meta name="renderer" content="Webkit" /><meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"><title><?php echo $title; ?></title><link href="<?php echo $web_static; ?>/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet"><link rel="stylesheet" type="text/css" href="<?php echo $css; ?>headfoot.css" /><link href="<?php echo $web_static; ?>/css/font-awesome.min.css" rel="stylesheet"><link href="<?php echo $web_static; ?>/css/animate.css" rel="stylesheet"><script src="<?php echo $web_static; ?>/js/jquery.min.js"></script><script src="<?php echo $web_static; ?>/plugins/bootstrap/js/bootstrap.min.js"></script><script src="<?php echo $web_static; ?>/plugins/layui/layer/layer.js"></script><!--时间日期插件--><script src="<?php echo $web_static; ?>/plugins/layui/laydate/laydate.js"></script><script src="<?php echo $web_static; ?>/js/layer.com.js"></script><link rel="stylesheet" href="<?php echo $css; ?>/icon/iconfont.css"></head><body><div class="d_container-fluid"><div class="container"><div class="row"><div class="col-sm-4 d_padi d_top"><a href="<?php echo url('index/index'); ?>" class="d_redp">商城首页</a><?php $user = session('user');; if($user): ?><a href="<?php echo url('user_center/index'); ?>" class="d_redp">hello <?php echo $user['account']; ?></a><?php else: ?><a href="<?php echo url('user_center/login'); ?>" class="d_redp">请登录 </a><a href="<?php echo url('user_center/reg'); ?>" class="d_huip">免费注册</a><?php endif; ?><a href="" class="d_huip">手机app</a></div><div class="col-sm-8 d_padi d_float"><a href="">帮助中心</a><a href="<?php echo url('seller_center/index'); ?>">卖家中心<img src="<?php echo $img; ?>/jiantou.png" alt="" /></a><div class="activ"></div><a class="shouc" href="<?php echo url('user_center/u_collection'); ?>"><img src="<?php echo $img; ?>/shoucang.png" />我的收藏</a><a href="<?php echo url('cart/index'); ?>"><img src="<?php echo $img; ?>/gouwuche.png" alt="" />我的购物车</a><a href="<?php echo url('user_center/index'); ?>">个人中心 <img src="<?php echo $img; ?>/jiantou.png" /></a></div></div></div></div><?php if(!isset($load_search) || $load_search !== false): ?><form action="" method="post"><div class="container mag-top"><div class="row"><div class="col-sm-4 d_padi"><div class="d_logo"><img src="<?php echo getImg(config($logo='web_logo')); ?>" alt="logo" /></div></div><div class="col-sm-6 d_padi pull-right input"><input class="input1" type="text" name="" id="" placeholder="输入关键字" /><input class="input2" type="button" value="搜索"></div></div></div></form><?php endif; ?><!DOCTYPE html><html lang="en"><html><head><meta charset="UTF-8"><title>编辑</title></head><link rel="stylesheet" href="<?php echo $css; ?>/usernew.css"><body><form class="js-ajax-form" action="<?php echo url('SellerCenter/edit_goods'); ?>"><input type="hidden" name="goods_id" value="<?php echo $good_info['goods_id']; ?>"><div class="h_concent"><div class="position"><p>您的位置：</p><a href="">首页 ></a><p>卖家中心 ></p><p>编辑商品</p></div><div class="indent_fl"><div class="h_sidebar"><div class="sidebar_centre"><ul><div class="h_square"><img src="<?php echo $img; ?>/dian.png" class="ceimg"/><span>全部功能</span></div><li><a href="<?php echo urldo('seller_center/basic_settings'); ?>">店铺基本信息</a></li><li><a href="<?php echo urldo('seller_center/cash'); ?>">我的钱包</a></li><li><a href="<?php echo urldo('seller_center/s_good_mgr'); ?>">商品管理</a></li><li><a href="<?php echo urldo('seller_center/release_good'); ?>" >发布商品</a></li><li><a href="<?php echo urldo('seller_center/in_application'); ?>">资质认证</a></li><li><a href="">店铺经营许可证</a></li><li><a href="<?php echo urldo('seller_center/logistics'); ?>">物流管理</a></li><li><a href="<?php echo urldo('seller_center/deliver'); ?>">发货</a></li><li><a href="<?php echo urldo('seller_center/manage'); ?>">评价管理</a></li><li><a href="<?php echo urldo('seller_center/s_order'); ?>">订单列表</a></li><li><a href="<?php echo urldo('seller_center/s_nav'); ?>">分类菜单设置</a></li><div class="h_borde"></div></ul></div><script type="text/javascript">
    var url = window.location.href;
    var $a  = $('.sidebar_centre ul li').find('a');
    $a.parent().removeClass('sidebar_lired');
    $a.removeClass('sidebar_red');
    $a.each(function() {
        if($(this).attr('href') == url){
            $(this).addClass('sidebar_red');
        }
    });
</script></div></div><div class="indent_rirgt_basic"><div class="right_nav_basic"><span class="right_nav_hen"></span><div class="right_nav_hen_henh">基本信息</div></div><p class="right_nav_basic_goods"><span class="right_nav_basic_goodsspan">商品名称</span><input type="text" class="right_nav_basic_goodsinput" value="<?php echo $good_info['goods_name']; ?>"  name="goods_name"></p><p class="right_nav_basic_goods"><span class="right_nav_basic_goodsspan">商品所属菜单分类</span><?php echo $select; ?></p><div class="right_nav_basic"><span class="right_nav_hen"></span><div class="right_nav_hen_henh">宝贝属性</div><span class="right_nav_basic_goodsspans">：错误填写宝贝属性，可能会引起宝贝下架或搜索流量减少，影响您的正常销售，请认真准确填写！</span></div><div class="right_nav_basic_goodsbaby"><?php if(is_array($attrs) || $attrs instanceof \think\Collection || $attrs instanceof \think\Paginator): $i = 0; $__LIST__ = $attrs;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="right_nav_basic_goodsbabyinput"><span class="right_nav_basic_goodsbabyinputspan"><?php echo $vo['attr_name']; ?></span><?php if($vo['type'] == 'text'): ?><input type="text" class="right_nav_basic_goodsbabyinputs" name="value[]"><?php elseif($vo['type'] == 'select'): ?><select name="value[<?php echo $vo['attr_id']; ?>]" id="" class="right_nav_basic_goodsbabyinputs"><?php if(is_array($vo['value']) || $vo['value'] instanceof \think\Collection || $vo['value'] instanceof \think\Paginator): $i = 0; $__LIST__ = $vo['value'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v1): $mod = ($i % 2 );++$i;?><option value="<?php echo $v1['value']; ?>"><?php echo $v1['value']; ?></option><?php endforeach; endif; else: echo "" ;endif; ?></select><?php elseif($vo['type'] == 'checkbox'): if(is_array($vo['value']) || $vo['value'] instanceof \think\Collection || $vo['value'] instanceof \think\Paginator): $k = 0; $__LIST__ = $vo['value'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v1): $mod = ($k % 2 );++$k;?><input type="checkbox" name="value[<?php echo $vo['attr_id']; ?>][<?php echo $k; ?>]" value="<?php echo $v1['value']; ?>" class=""><?php echo $v1['value']; endforeach; endif; else: echo "" ;endif; endif; ?></div><?php endforeach; endif; else: echo "" ;endif; ?></div><div class="right_nav_basic"><span class="right_nav_hen"></span><div class="right_nav_hen_henh">商品图片</div><span class="right_nav_basic_goodsspans">：商品图大小不能超过3MB；700*700 以上图片上传后宝贝详情页自动提供放大镜功能</span></div><div class="img_cont"><div class="img_prev"></div><input type="file" name="file1" id="file1" /></div><div class="right_nav_basic"><span class="right_nav_hen"></span><div class="right_nav_hen_henh">商品规格</div></div><div class="img_cont"><div class="indent_rirgt_basic_color" id="goods_color"><span class="indent_rirgt_basic_colors">颜色 <img src="<?php echo $img; ?>/goodssss.jpg" alt="" class="indent_rirgt_basic_colorimg"></span><p class="indent_rirgt_basic_colorp"><span>选择标准颜色可增加搜索/导购机会</span>，标准颜色还可填写备注信息（偏深、偏亮）！ <a href="">查看详情</a></p><?php if(count($goods_color_attr) == 0): ?><div class="indent_rirgt_basic_colordiv"><div class="indent_rirgt_basic_colordivonediv"><i class="fa fa-plus add_color"></i></div><input type="text" placeholder="输入商品颜色" class="indent_rirgt_basic_colordivtwo" name="color_val[0]" value=""><input type="text" placeholder="备注（如偏深偏浅等）" class="indent_rirgt_basic_colordivthree" name="color_des[0]" value=""><div class="img_cont" style="display: inline;"><input type="file" name="file[]" id="0" /><!-- <span class="img_prev"></span> --></div></div><?php else: if(is_array($goods_color_attr) || $goods_color_attr instanceof \think\Collection || $goods_color_attr instanceof \think\Paginator): $i = 0; $__LIST__ = $goods_color_attr;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="indent_rirgt_basic_colordiv"><div class="indent_rirgt_basic_colordivonediv"><i class="fa fa-plus add_color"></i></div><input type="text" placeholder="输入商品颜色" class="indent_rirgt_basic_colordivtwo" name="color_val[<?php echo $key; ?>]" value="<?php echo $vo['val']; ?>"><input type="text" placeholder="备注（如偏深偏浅等）" class="indent_rirgt_basic_colordivthree" name="color_des[<?php echo $key; ?>]" value="<?php echo $vo['des']; ?>"><div class="img_cont" style="display: inline;"><!-- <span class="img_prev"></span> --></div><input type="file" name="file[<?php echo $key; ?>]" id="<?php echo $key; ?>" /><?php echo $key; ?></div><?php endforeach; endif; else: echo "" ;endif; endif; ?></div></div><div class="indent_rirgt_basic_color"></div><div class="right_nav_basic"><span class="right_nav_hen"></span><div class="right_nav_hen_henh">商品价格</div></div><div class="right_nav_basic_table"><div class="right_nav_basic_tables"><span class="right_nav_basic_tabless">价格</span><input type="text" name="shop_price" value="<?php echo $good_info['shop_price']; ?>"></div><div class="right_nav_basic_tables"><span class="right_nav_basic_tabless">数量</span><input type="text" name="inventory" value="<?php echo $good_info['inventory']; ?>"></div><div class="right_nav_basic_tables"><span class="right_nav_basic_tabless">快递费</span><input type="text" name="courier_fees" value="<?php echo $good_info['courier_fees']; ?>"></div></div><div class="right_nav_basic"><span class="right_nav_hen"></span><div class="right_nav_hen_henh">商品描述</div></div><div class="right_nav_basic_fuwenben"><!--非全屏模式--><div id="container"><!--菜单栏--><div id="toolbar-container"><div id="editor-toolbar"></div><div id="btn-container"><button id="btn1">全屏</button></div></div><!--编辑区域--><div id="editor-text"><input type="hidden" name="recom_desc" value="<?php echo $good_info['recom_desc']; ?>" id="recom_desc"><div><?php echo $good_info['recom_desc']; ?></div></div></div><!--全屏模式--><div id="cover"></div></div></div></div></div><div class="right_nav_basicfabushangpin"><a href="" class="right_nav_basicfabushangpins js-submit-btn">保存</a></div></form></body><script type="text/javascript" src="<?php echo $web_static; ?>js/uploadImg.js"></script><script type="text/javascript" src="<?php echo $web_static; ?>plugins/editor/wangEditor.min.js"></script><script type="text/javascript">    // 创建编辑器
    var E = window.wangEditor
    var editor2 = new E('#editor-toolbar', '#editor-text')
    editor2.create()
    $('.js-submit-btn').click(function () {
        $("#recom_desc").attr('value',editor2.txt.text());
        console.log(editor2.txt.text());
    })

    // 获取使用到的元素
    var toolbarContaner = document.getElementById('toolbar-container')
    var editorText = document.getElementById('editor-text')
    var cover = document.getElementById('cover')
    var container = document.getElementById('container')

    // 全屏事件
    function doFullScreen() {
        cover.style.display = 'block'
        editorText.style.height = '460px';
        cover.appendChild(toolbarContaner)
        cover.appendChild(editorText)
    }

    // 退出全屏事件
    function unDoFullScreen() {
        container.appendChild(toolbarContaner)
        container.appendChild(editorText)
        editorText.style.height = '300px';
        cover.style.display = 'none'
    }

    // 是否是全屏的标志
    var isFullScreen = false

    // 点击事件
    var btn1 = document.getElementById('btn1')
    btn1.addEventListener('click', function () {
        if (isFullScreen) {
            isFullScreen = false
            unDoFullScreen()
        } else {
            isFullScreen = true
            doFullScreen()
        }
    }, false)
</script><script>    $('#file1').imgUpload({
        allowedNum:6,//允许上传最大数量
        width:'120',//预览框宽度
        height:'120',//预览框高度
//        showBtn:true,  //选择按钮
//        btnClass:'fileimg', //选择按钮的样式
	   files:{
	        0:'<?php echo getImg($good_info['goods_thums']); ?>',
	        1:'<?php echo getImg($good_info['goods_img1']); ?>',
	        2:'<?php echo getImg($good_info['goods_img2']); ?>',
	        3:'<?php echo getImg($good_info['goods_img3']); ?>',
	        4:'<?php echo getImg($good_info['goods_img4']); ?>',
	        5:'<?php echo getImg($good_info['goods_img5']); ?>',
	    }
    })

</script><script>    function clearradio(){
        var x=document.getElementsByName("brand");
        for(var i=0;i<x.length;i++){
            if (x[i].checked==true)
            {
                x[i].checked=false;
            }
        }
    }



    $(".hui").click(function () {
        $(".hei").removeClass("adddis")
        $(this).children(".hei").addClass("adddis")

    })

//   几个复选框
    $(".indent_rirgt_basic_colordivonediv").click(function () {
        $(this).toggleClass("addbackgroundimg2")
    })

    $(".indent_rirgt_basic_color_contssons").click(function () {
        $(this).toggleClass("addbackgroundimg2")
    })

//    商品主图
    $(window).on("load",function () {
          $('.file1').eq(0).append("<p class='file1_zhu'>商品主图</p>")

    })



</script><!-- 颜色input 加减  --><script type="text/javascript">	var count = $('.indent_rirgt_basic_colordiv').length;
    var num   = count+1;
    var obj_s = {
        allowedNum:1,//允许上传最大数量
        picList:false,//显示上传框
        showBtn:true,//是否显示按钮,picList为true,allowedNum为1时可配置,
        width:'120',//预览框宽度
        height:'30',//预览框高度
        showBtn:true,  //选择按钮
        btnText:'上传图片',//按钮文字
        btnClass:'fileimg1', //选择按钮的样式
        maxSize: 500,//允许上传最大值(KB)
        showView:false,
    }
    $('#0').imgUpload(obj_s)
    var img_obj = $('#goods_color').find('.img_cont')
    $(img_obj).each(function(){
    	var id = $(this).children().attr('id')
    	console.log(id)
    	$('#'+id).imgUpload(obj_s)
    })
    $(document).on('click','.add_color',function(){
         num++;
        var html = '<div class="indent_rirgt_basic_colordiv"><div class="indent_rirgt_basic_colordivonediv"><i class="fa fa-minus     close_color"></i></div><input type="text" placeholder="输入商品颜色" class="indent_rirgt_basic_colordivtwo" name="color_val['+num+']"><input type="text" placeholder="备注（如偏深偏浅等）" class="indent_rirgt_basic_colordivthree" name="color_des['+num+']"><div class="img_cont" style="display: inline;"><input type="file" name="file['+num+']" id="'+num+'" /></div></div>';
        $(this).parents('.indent_rirgt_basic_color').append(html)
        $('#'+num).imgUpload(obj_s)
        return false;
    })
    $(document).on('click','.close_color',function(){
        $(this).parents('.indent_rirgt_basic_colordiv').remove();
        return false;
    })

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