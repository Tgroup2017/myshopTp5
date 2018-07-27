<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:60:"D:\phpStudy\WWW\adminui/public\theme\admin\configs\edit.html";i:1500431396;s:61:"D:\phpStudy\WWW\adminui/public\theme\admin\layout\layout.html";i:1500431397;s:61:"D:\phpStudy\WWW\adminui/public\theme\admin\layout\static.html";i:1500431396;s:57:"D:\phpStudy\WWW\adminui/public\theme\admin\layout\js.html";i:1500431396;}*/ ?>
<!DOCTYPE html><html><head><meta charset="utf-8"><meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no"><meta name="renderer" content="webkit"><title><?php echo $admin_title; ?></title><meta name="keywords" content=""><meta name="description" content=""><!-- 引入公共css/js --><!-- 字体图标 --><link rel="shortcut icon" href="<?php echo $web_public; ?>favicon.ico"><link href="<?php echo $web_static; ?>/css/font-awesome.min.css" rel="stylesheet"><!-- JQuery --><script src="<?php echo $web_static; ?>/js/jquery.min.js"></script><script src="<?php echo $web_static; ?>/plugins/metisMenu/jquery.metisMenu.js"></script><!-- bootstrap --><link href="<?php echo $web_static; ?>/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet"><script src="<?php echo $web_static; ?>/plugins/bootstrap/js/bootstrap.min.js"></script><!-- 自定义样式 --><link href="<?php echo $css; ?>/animate.css" rel="stylesheet"><link href="<?php echo $css; ?>/style.css" rel="stylesheet"><!-- checkbox 和radio 美化 --><link href="<?php echo $web_static; ?>/css/input.css" rel="stylesheet"><!-- <link href="<?php echo $web_static; ?>/css/checkbox.css" rel="stylesheet"><script src="<?php echo $web_static; ?>/js/checkbox.js"></script> --><!-- select 美化 --><link href="<?php echo $web_static; ?>/css/select.css" rel="stylesheet"><link href="<?php echo $web_static; ?>/plugins/jquery/scrollbar.css" rel="stylesheet"><script src="<?php echo $web_static; ?>/plugins/jquery/scrollbar.js"></script><script src="<?php echo $web_static; ?>/js/select.js"></script><link href="<?php echo $web_static; ?>/css/common.css" rel="stylesheet"><link href="<?php echo $web_static; ?>/plugins/editor/wangEditor.min.css" rel="stylesheet"><style>        .layout-return-btn{
            position: relative;
            top: -8px;
            left: -6px;
            margin: 0!important;
        }
        body{
            height: 1vh;
        }
    </style></head><body class="gray-bg  animated fadeIn"><div class="wrapper wrapper-content ibox float-e-margins" ><div class="ibox-title visible-lg"><!-- <h5> --><ul class="breadcrumb inline pull-left" ><li><?php echo $menu['pmenu']; ?></li><li><?php echo $menu['menu_name']; ?></li></ul><!-- </h5> --><a class="pull-right btn btn-default btn-xs" title="刷新当前" href=""><i class="fa fa-refresh"></i></a></div><div class="ibox-content"><form class="form-horizontal js-ajax-form clearfix" action="<?php echo U('Configs/edit'); ?>" method='post'><!-- 自定义大小 --><input type="hidden" name="page" value="<?php echo $page; ?>"><input type="hidden" name="config_mark" value="<?php echo $config_info['config_mark']; ?>"><div class="form-group"><label  class="col-sm-2 control-label">标识</label><div class="col-sm-4"><p class="form-control-static"><?php echo $config_info['config_mark']; ?></p></div></div><div class="form-group"><label for="config_name" class="col-sm-2 control-label">名称</label><div class="col-sm-4"><input type="text" name="config_name" class="form-control" id="config_name" placeholder="名称" value="<?php echo $config_info['config_name']; ?>"></div></div><div  class="form-group" ><label for="sort" class="col-sm-2 control-label">排序</label><div class="col-sm-2"><input type="text" name="sort" class="form-control" id="sort" placeholder="排序" value="<?php echo $config_info['sort']; ?>"></div></div><div class="form-group"><label for="type" class="col-sm-2 control-label">控件类型</label><div class="col-sm-4"><select class=" form-control" name="type" id="type" onchange="type_val()"><?php if(is_array($type) || $type instanceof \think\Collection || $type instanceof \think\Paginator): $i = 0; $__LIST__ = $type;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$types): $mod = ($i % 2 );++$i;if($config_info['type'] == $types): ?><option value="<?php echo $types; ?>" selected="selected" ><?php echo $types; ?></option><?php else: ?><option value="<?php echo $types; ?>"  ><?php echo $types; ?></option><?php endif; endforeach; endif; else: echo "" ;endif; ?></select></div></div><div id="config_type_value" class="form-group" ><label for="type_value" class="col-sm-2 control-label">控件值</label><div class="col-sm-2"><a href="#config_type_input" class="btn btn-primary btn-m-w js-window-load">查看/编辑控件值</a></div></div><div class="form-group"><label for="group" class="col-sm-2 control-label">配置类型</label><div class="col-sm-4"><?php $mall_config_type=config('mall_config_type'); ?><select class="form-control" name="group" id="group"><?php if(is_array($mall_config_type) || $mall_config_type instanceof \think\Collection || $mall_config_type instanceof \think\Paginator): $i = 0; $__LIST__ = $mall_config_type;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$c): $mod = ($i % 2 );++$i;if($config_info['group'] == $key): ?><option value="<?php echo $key; ?>" selected="selected" ><?php echo $c; ?></option><?php else: ?><option value="<?php echo $key; ?>"><?php echo $c; ?></option><?php endif; endforeach; endif; else: echo "" ;endif; ?></select></div></div><div class="form-group"><label for="config_des" class="col-sm-2 control-label">描述</label><div class="col-sm-4"><input type="text" name="config_des" class="form-control" id="config_des" placeholder="配置描述" value="<?php echo $config_info['config_des']; ?>"></div></div><div class="form-group"><label  class="col-sm-2 control-label"></label><div class="col-sm-4"><button type="submit" class="btn btn-info js-submit-btn mr_3px">确认</button><button type="reset" class="btn btn-info">重置</button></div></div><div id="config_type_input" class="display-none"><table class="table table-hover table-bordered table-condensed"><thead><tr><th colspan="3">关闭该窗口自动保存</th></tr></thead><tr><th>值</th><th></th></tr><?php if($config_info['type_value'] != ''): if(is_array($config_info['type_value']) || $config_info['type_value'] instanceof \think\Collection || $config_info['type_value'] instanceof \think\Paginator): if( count($config_info['type_value'])==0 ) : echo "" ;else: foreach($config_info['type_value'] as $k=>$config): ?><tr><td><input type="text" name="type_val[<?php echo $k; ?>]" class="form-control" value="<?php echo $config['value']; ?>"></td><td><?php if($k == 0): ?><a href="" class="btn btn-danger add_type"><i class="fa fa-plus"></i></a><?php else: ?><a href="" class="btn btn-default close_type"><i class="fa fa-minus"></i></a><?php endif; ?></td></tr><?php endforeach; endif; else: echo "" ;endif; else: ?><tr><td><input type="text" name="type_val[0]" class="form-control" value=""></td><td><a href="" class="btn btn-danger add_type"><i class="fa fa-plus"></i></a></td></tr><?php endif; ?></table></div></form><script>    $(document).ready(function(){
        var type_val = $("#type").val();
        if(type_val == 'checkbox'|| type_val == 'select' ||type_val == 'radio'){
            $("#config_type_value").css('display','block');
        }else{
            $("#config_type_value").css('display','none');
        }
    })
    $('select[name="type"]').change(function(){
        var type_val = $(this).val();
        if(type_val == 'checkbox'|| type_val == 'select' ||type_val == 'radio'){
            $("#config_type_value").css('display','block');
        }else{
            $('.close_type').parents('tr').remove();
            $('input[name^="type_"]').val('');
            $("#config_type_value").css('display','none');
        }
    })
    var num  = $('input[name^="type_val"]').length;
    $(document).on('click','.add_type',function(){
        num++;
        var html = '<tr><td><input type="text" name="type_val['+num+']" class="form-control"></td>'
            + '<td><a href="" class="btn btn-default close_type"><i class="fa fa-minus"></i></a></td></tr>'
        $(this).parents('table').append(html)
        return false;
    })
    $(document).on('click','.close_type',function(){
        $(this).parents('tr').remove();
        return false;
    })
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