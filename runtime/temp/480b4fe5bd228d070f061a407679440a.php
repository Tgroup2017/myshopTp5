<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:61:"D:\phpStudy\WWW\adminui/public\theme\admin\good\setbrand.html";i:1500431396;s:61:"D:\phpStudy\WWW\adminui/public\theme\admin\layout\layout.html";i:1500431397;s:61:"D:\phpStudy\WWW\adminui/public\theme\admin\layout\static.html";i:1500431396;s:57:"D:\phpStudy\WWW\adminui/public\theme\admin\layout\js.html";i:1500431396;}*/ ?>
<!DOCTYPE html><html><head><meta charset="utf-8"><meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no"><meta name="renderer" content="webkit"><title><?php echo $admin_title; ?></title><meta name="keywords" content=""><meta name="description" content=""><!-- 引入公共css/js --><!-- 字体图标 --><link rel="shortcut icon" href="<?php echo $web_public; ?>favicon.ico"><link href="<?php echo $web_static; ?>/css/font-awesome.min.css" rel="stylesheet"><!-- JQuery --><script src="<?php echo $web_static; ?>/js/jquery.min.js"></script><script src="<?php echo $web_static; ?>/plugins/metisMenu/jquery.metisMenu.js"></script><!-- bootstrap --><link href="<?php echo $web_static; ?>/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet"><script src="<?php echo $web_static; ?>/plugins/bootstrap/js/bootstrap.min.js"></script><!-- 自定义样式 --><link href="<?php echo $css; ?>/animate.css" rel="stylesheet"><link href="<?php echo $css; ?>/style.css" rel="stylesheet"><!-- checkbox 和radio 美化 --><link href="<?php echo $web_static; ?>/css/input.css" rel="stylesheet"><!-- <link href="<?php echo $web_static; ?>/css/checkbox.css" rel="stylesheet"><script src="<?php echo $web_static; ?>/js/checkbox.js"></script> --><!-- select 美化 --><link href="<?php echo $web_static; ?>/css/select.css" rel="stylesheet"><link href="<?php echo $web_static; ?>/plugins/jquery/scrollbar.css" rel="stylesheet"><script src="<?php echo $web_static; ?>/plugins/jquery/scrollbar.js"></script><script src="<?php echo $web_static; ?>/js/select.js"></script><link href="<?php echo $web_static; ?>/css/common.css" rel="stylesheet"><link href="<?php echo $web_static; ?>/plugins/editor/wangEditor.min.css" rel="stylesheet"><style>        .layout-return-btn{
            position: relative;
            top: -8px;
            left: -6px;
            margin: 0!important;
        }
        body{
            height: 1vh;
        }
    </style></head><body class="gray-bg  animated fadeIn"><div class="wrapper wrapper-content ibox float-e-margins" ><div class="ibox-title visible-lg"><!-- <h5> --><ul class="breadcrumb inline pull-left" ><li><?php echo $menu['pmenu']; ?></li><li><?php echo $menu['menu_name']; ?></li></ul><!-- </h5> --><a class="pull-right btn btn-default btn-xs" title="刷新当前" href=""><i class="fa fa-refresh"></i></a></div><div class="ibox-content"><form class="form-horizontal js-ajax-form clearfix" action="<?php echo U('setBrand'); ?>" ><input type="hidden" name="cate_id" value="<?php echo $cate_id; ?>"><div class="row"><div class="col-xs-5"><label style="position: relative;width:100%;">待选择的品牌
            <input type="text" name="search" placeholder="关键字" id="search" style="border: 1px solid #02c873;position: absolute;right: 0;bottom: 0px;padding-left: 5px"></label><select name="from" id="multiselect" class="form-control" size="15" style="height: 300px" multiple="multiple"><?php if(is_array($brands) || $brands instanceof \think\Collection || $brands instanceof \think\Paginator): $i = 0; $__LIST__ = $brands;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option title="<?php echo $vo['des']; ?>" value="<?php echo $vo['brand_id']; ?>"><?php echo $vo['brand_name']; ?></option><?php endforeach; endif; else: echo "" ;endif; ?></select></div><div class="col-xs-2"><label class="col-xs-10"></label><button type="button" id="multiselect_rightAll" class="btn btn-block"><i class="glyphicon glyphicon-forward"></i></button><button type="button" id="multiselect_rightSelected" class="btn btn-block"><i class="glyphicon glyphicon-chevron-right"></i></button><button type="button" id="multiselect_leftSelected" class="btn btn-block"><i class="glyphicon glyphicon-chevron-left"></i></button><button type="button" id="multiselect_leftAll" class="btn btn-block"><i class="glyphicon glyphicon-backward"></i></button></div><div class="col-xs-5"><label class="col-xs-5">已选择的品牌</label><select name="brand_ids" id="multiselect_to" class="form-control" size="15" multiple="multiple" style="height: 300px"><?php if(is_array($has_brands) || $has_brands instanceof \think\Collection || $has_brands instanceof \think\Paginator): $i = 0; $__LIST__ = $has_brands;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><option value="<?php echo $v['brand_id']; ?>"><?php echo $v['brand_name']; ?></option><?php endforeach; endif; else: echo "" ;endif; ?></select></div></div><button type="submit" class="btn btn-primary center-block js-submit-btn" id="submit" submit-before="submit_before">确认</button></form><script src="<?php echo $web_static; ?>/plugins/multiselect/multiselect.min.js"></script><script type="text/javascript">    $('#multiselect').multiselect();
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
</script><style type="text/css">    option:checked, option:hover {
            color: white;
            background:url("data:image/gif;base64,R0lGODlhAQABAIAAAEmPjwAAACH/C1hNUCBEYXRhWE1QPD94cGFja2V0IGJlZ2luPSLvu78iIGlkPSJXNU0wTXBDZWhpSHpyZVN6TlRjemtjOWQiPz4gPHg6eG1wbWV0YSB4bWxuczp4PSJhZG9iZTpuczptZXRhLyIgeDp4bXB0az0iQWRvYmUgWE1QIENvcmUgNS4zLWMwMTEgNjYuMTQ1NjYxLCAyMDEyLzAyLzA2LTE0OjU2OjI3ICAgICAgICAiPiA8cmRmOlJERiB4bWxuczpyZGY9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkvMDIvMjItcmRmLXN5bnRheC1ucyMiPiA8cmRmOkRlc2NyaXB0aW9uIHJkZjphYm91dD0iIiB4bWxuczp4bXA9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC8iIHhtbG5zOmRjPSJodHRwOi8vcHVybC5vcmcvZGMvZWxlbWVudHMvMS4xLyIgeG1sbnM6eG1wTU09Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9tbS8iIHhtbG5zOnN0UmVmPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvc1R5cGUvUmVzb3VyY2VSZWYjIiB4bXA6Q3JlYXRvclRvb2w9IkFkb2JlIFBob3Rvc2hvcCBDUzYgKFdpbmRvd3MpIiB4bXA6Q3JlYXRlRGF0ZT0iMjAxNC0wMS0yM1QxNDo0NDoxOCswMTowMCIgeG1wOk1vZGlmeURhdGU9IjIwMTQtMDEtMjNUMTQ6NDQ6MzIrMDE6MDAiIHhtcDpNZXRhZGF0YURhdGU9IjIwMTQtMDEtMjNUMTQ6NDQ6MzIrMDE6MDAiIGRjOmZvcm1hdD0iaW1hZ2UvZ2lmIiB4bXBNTTpJbnN0YW5jZUlEPSJ4bXAuaWlkOjdDRkY3OTYyODQzNDExRTNBRUI0QUY0MzMyNkVBREZBIiB4bXBNTTpEb2N1bWVudElEPSJ4bXAuZGlkOjdDRkY3OTYzODQzNDExRTNBRUI0QUY0MzMyNkVBREZBIj4gPHhtcE1NOkRlcml2ZWRGcm9tIHN0UmVmOmluc3RhbmNlSUQ9InhtcC5paWQ6N0NGRjc5NjA4NDM0MTFFM0FFQjRBRjQzMzI2RUFERkEiIHN0UmVmOmRvY3VtZW50SUQ9InhtcC5kaWQ6N0NGRjc5NjE4NDM0MTFFM0FFQjRBRjQzMzI2RUFERkEiLz4gPC9yZGY6RGVzY3JpcHRpb24+IDwvcmRmOlJERj4gPC94OnhtcG1ldGE+IDw/eHBhY2tldCBlbmQ9InIiPz4B//79/Pv6+fj39vX08/Lx8O/u7ezr6uno5+bl5OPi4eDf3t3c29rZ2NfW1dTT0tHQz87NzMvKycjHxsXEw8LBwL++vby7urm4t7a1tLOysbCvrq2sq6qpqKempaSjoqGgn56dnJuamZiXlpWUk5KRkI+OjYyLiomIh4aFhIOCgYB/fn18e3p5eHd2dXRzcnFwb25tbGtqaWhnZmVkY2JhYF9eXVxbWllYV1ZVVFNSUVBPTk1MS0pJSEdGRURDQkFAPz49PDs6OTg3NjU0MzIxMC8uLSwrKikoJyYlJCMiISAfHh0cGxoZGBcWFRQTEhEQDw4NDAsKCQgHBgUEAwIBAAAh+QQAAAAAACwAAAAAAQABAAACAkQBADs=");
        }
</style></div></div></body><!-- 全局js --><script src="<?php echo $web_static; ?>plugins/slimscroll/jquery.slimscroll.min.js"></script><!-- 第三方插件，加载进度条 --><script src="<?php echo $web_static; ?>/plugins/pace/pace.min.js"></script><!-- layui --><script src="<?php echo $web_static; ?>/plugins/layui/layer/layer.js"></script><script src="<?php echo $web_static; ?>/plugins/layui/laydate/laydate.js"></script><!-- 自定义js --><script src="<?php echo $web_static; ?>/js/layer.com.js"></script><script src="<?php echo $web_static; ?>/js/common.js"></script><script src="<?php echo $web_static; ?>/js/vue.js"></script><script src="<?php echo $js; ?>/hplus.js?v=4.1.0"></script><script src="<?php echo $js; ?>/contabs.js"></script></html><style type="text/css">    .panel-heading{
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