<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:60:"D:\phpStudy\WWW\adminui/public\theme\admin\good\setattr.html";i:1500431396;s:61:"D:\phpStudy\WWW\adminui/public\theme\admin\layout\layout.html";i:1500431397;s:61:"D:\phpStudy\WWW\adminui/public\theme\admin\layout\static.html";i:1500431396;s:57:"D:\phpStudy\WWW\adminui/public\theme\admin\layout\js.html";i:1500431396;}*/ ?>
<!DOCTYPE html><html><head><meta charset="utf-8"><meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no"><meta name="renderer" content="webkit"><title><?php echo $admin_title; ?></title><meta name="keywords" content=""><meta name="description" content=""><!-- 引入公共css/js --><!-- 字体图标 --><link rel="shortcut icon" href="<?php echo $web_public; ?>favicon.ico"><link href="<?php echo $web_static; ?>/css/font-awesome.min.css" rel="stylesheet"><!-- JQuery --><script src="<?php echo $web_static; ?>/js/jquery.min.js"></script><script src="<?php echo $web_static; ?>/plugins/metisMenu/jquery.metisMenu.js"></script><!-- bootstrap --><link href="<?php echo $web_static; ?>/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet"><script src="<?php echo $web_static; ?>/plugins/bootstrap/js/bootstrap.min.js"></script><!-- 自定义样式 --><link href="<?php echo $css; ?>/animate.css" rel="stylesheet"><link href="<?php echo $css; ?>/style.css" rel="stylesheet"><!-- checkbox 和radio 美化 --><link href="<?php echo $web_static; ?>/css/input.css" rel="stylesheet"><!-- <link href="<?php echo $web_static; ?>/css/checkbox.css" rel="stylesheet"><script src="<?php echo $web_static; ?>/js/checkbox.js"></script> --><!-- select 美化 --><link href="<?php echo $web_static; ?>/css/select.css" rel="stylesheet"><link href="<?php echo $web_static; ?>/plugins/jquery/scrollbar.css" rel="stylesheet"><script src="<?php echo $web_static; ?>/plugins/jquery/scrollbar.js"></script><script src="<?php echo $web_static; ?>/js/select.js"></script><link href="<?php echo $web_static; ?>/css/common.css" rel="stylesheet"><link href="<?php echo $web_static; ?>/plugins/editor/wangEditor.min.css" rel="stylesheet"><style>        .layout-return-btn{
            position: relative;
            top: -8px;
            left: -6px;
            margin: 0!important;
        }
        body{
            height: 1vh;
        }
    </style></head><body class="gray-bg  animated fadeIn"><div class="wrapper wrapper-content ibox float-e-margins" ><div class="ibox-title visible-lg"><!-- <h5> --><ul class="breadcrumb inline pull-left" ><li><?php echo $menu['pmenu']; ?></li><li><?php echo $menu['menu_name']; ?></li></ul><!-- </h5> --><a class="pull-right btn btn-default btn-xs" title="刷新当前" href=""><i class="fa fa-refresh"></i></a></div><div class="ibox-content"><style type="text/css"></style><form class="form-horizontal js-ajax-form clearfix" action="<?php echo U('setAttr'); ?>" ><input type="hidden" name="cate_id" value="<?php echo $cate_id; ?>"><div class="row"><div class="col-xs-5"><label style="position: relative;width:100%;">待选择的属性
            <input type="text" name="search" placeholder="关键字" id="search" style="border: 1px solid #02c873;position: absolute;right: 0;bottom: 0px;padding-left: 5px"></label><select name="from" id="multiselect" class="form-control" size="15" style="height: 300px" multiple="multiple"><?php if(is_array($attrs) || $attrs instanceof \think\Collection || $attrs instanceof \think\Paginator): $i = 0; $__LIST__ = $attrs;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option value="<?php echo $vo['attr_id']; ?>"><?php echo $vo['attr_name']; ?></option><?php endforeach; endif; else: echo "" ;endif; ?></select></div><div class="col-xs-2"><label class="col-xs-10"></label><button type="button" id="multiselect_rightAll" class="btn btn-block"><i class="glyphicon glyphicon-forward"></i></button><button type="button" id="multiselect_rightSelected" class="btn btn-block"><i class="glyphicon glyphicon-chevron-right"></i></button><button type="button" id="multiselect_leftSelected" class="btn btn-block"><i class="glyphicon glyphicon-chevron-left"></i></button><button type="button" id="multiselect_leftAll" class="btn btn-block"><i class="glyphicon glyphicon-backward"></i></button></div><div class="col-xs-5"><label class="col-xs-5">已选择的属性</label><select name="attr_ids" id="multiselect_to" class="form-control" size="15" multiple="multiple" style="height: 300px"><?php if(is_array($has_attrs) || $has_attrs instanceof \think\Collection || $has_attrs instanceof \think\Paginator): $i = 0; $__LIST__ = $has_attrs;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><option value="<?php echo $v['attr_id']; ?>"><?php echo $v['attr_name']; ?></option><?php endforeach; endif; else: echo "" ;endif; ?></select></div></div><button type="submit" class="btn btn-primary center-block js-submit-btn" id="submit" submit-before="submit_before">确认</button></form><script src="<?php echo $web_static; ?>/plugins/multiselect/multiselect.min.js"></script><script type="text/javascript">    $('#multiselect').multiselect();
    // $("#submit").click(function(){
    //     var cate_id =$("input[name='cate_id']").val();
    //     var options=$("#multiselect_to").children();
    //     var ids =[];
    //     i=0
    //     $(options).each(function(){
    //         ids[i]=$(this).val();
    //         i=i+1;
    //     })
        
    //     $.ajax({
    //         url:"<?php echo url('Cates/setAttr'); ?>",
    //         data:{ids:ids,cate_id:cate_id},
    //         tyep:"post",
    //         dataType:"json",
    //         success:function(msg){
    //             parent.layer.closeAll('iframe');
    //             parent.layer.msg(msg.msg,{time:2000,shade:0.2});
    //         },
    //         error:function(){
    //             console.log(3)
    //         } 
    //     })
    // })
    function submit_before(){
        var cate_id =$("input[name='cate_id']").val();
        var options=$("#multiselect_to").children();
        var ids =[];
        i=0
        $(options).each(function(){
            ids[i]=$(this).val();
            i=i+1;
        });
        ajaxData.data.ids = ids;
        ajaxData.data.cate_id = cate_id;
    }
    $(document).on('input', '#search', function() {
        var search_attr = $(this).val(),
            inputText   = $.trim($(this).val());
            opTag       = $("#multiselect").find('option');
            if (inputText.length>0) {
            opTag.css('display', 'none');
        } else {
            opTag.css('display', 'block');
        }
        for (var i = opTag.length - 1; i >= 0; i--) {
            if ($(opTag[i]).text().indexOf(inputText) > -1) {
                $(opTag[i]).css('display', 'block');
            }
        }
    });

</script></div></div></body><!-- 全局js --><script src="<?php echo $web_static; ?>plugins/slimscroll/jquery.slimscroll.min.js"></script><!-- 第三方插件，加载进度条 --><script src="<?php echo $web_static; ?>/plugins/pace/pace.min.js"></script><!-- layui --><script src="<?php echo $web_static; ?>/plugins/layui/layer/layer.js"></script><script src="<?php echo $web_static; ?>/plugins/layui/laydate/laydate.js"></script><!-- 自定义js --><script src="<?php echo $web_static; ?>/js/layer.com.js"></script><script src="<?php echo $web_static; ?>/js/common.js"></script><script src="<?php echo $web_static; ?>/js/vue.js"></script><script src="<?php echo $js; ?>/hplus.js?v=4.1.0"></script><script src="<?php echo $js; ?>/contabs.js"></script></html><style type="text/css">    .panel-heading{
        display: none;
    }
    .panel-footer{
        background-color: #fff;
        border: none
    }
    .panel-body.form-inline .form-group{
        margin-right: 10px!important;
        margin-bottom: 10px!important;

    }
    .panel-body.form-inline .form-group .form-control{
        width: 200px;
    }
    .panel-body.form-inline .form-group.group1 .form-control,
    .panel-body.form-inline .form-group.group2 .form-control
    {
        width: 205px;
    }
    .panel-body.form-inline{
        padding-bottom: 0;
    }
    .panel-body.form-inline .form-group.pull-right {
        margin: 0!important;
    }
    .panel-body.form-inline .form-group.group1{
        margin-right: 0px!important;
    }
</style><script type="text/javascript">    // 页面初始化
    $(function(){
        $('a').click(function(){
            $(this).blur();
        })
        $('.city-picker-span').css('width', '');
    })

</script>