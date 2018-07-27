<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:69:"D:\phpStudy\WWW\adminui/public\theme\admin\articles\article_edit.html";i:1500431396;s:61:"D:\phpStudy\WWW\adminui/public\theme\admin\layout\layout.html";i:1500431397;s:61:"D:\phpStudy\WWW\adminui/public\theme\admin\layout\static.html";i:1500431396;s:57:"D:\phpStudy\WWW\adminui/public\theme\admin\layout\js.html";i:1500431396;}*/ ?>
<!DOCTYPE html><html><head><meta charset="utf-8"><meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no"><meta name="renderer" content="webkit"><title><?php echo $admin_title; ?></title><meta name="keywords" content=""><meta name="description" content=""><!-- 引入公共css/js --><!-- 字体图标 --><link rel="shortcut icon" href="<?php echo $web_public; ?>favicon.ico"><link href="<?php echo $web_static; ?>/css/font-awesome.min.css" rel="stylesheet"><!-- JQuery --><script src="<?php echo $web_static; ?>/js/jquery.min.js"></script><script src="<?php echo $web_static; ?>/plugins/metisMenu/jquery.metisMenu.js"></script><!-- bootstrap --><link href="<?php echo $web_static; ?>/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet"><script src="<?php echo $web_static; ?>/plugins/bootstrap/js/bootstrap.min.js"></script><!-- 自定义样式 --><link href="<?php echo $css; ?>/animate.css" rel="stylesheet"><link href="<?php echo $css; ?>/style.css" rel="stylesheet"><!-- checkbox 和radio 美化 --><link href="<?php echo $web_static; ?>/css/input.css" rel="stylesheet"><!-- <link href="<?php echo $web_static; ?>/css/checkbox.css" rel="stylesheet"><script src="<?php echo $web_static; ?>/js/checkbox.js"></script> --><!-- select 美化 --><link href="<?php echo $web_static; ?>/css/select.css" rel="stylesheet"><link href="<?php echo $web_static; ?>/plugins/jquery/scrollbar.css" rel="stylesheet"><script src="<?php echo $web_static; ?>/plugins/jquery/scrollbar.js"></script><script src="<?php echo $web_static; ?>/js/select.js"></script><link href="<?php echo $web_static; ?>/css/common.css" rel="stylesheet"><link href="<?php echo $web_static; ?>/plugins/editor/wangEditor.min.css" rel="stylesheet"><style>        .layout-return-btn{
            position: relative;
            top: -8px;
            left: -6px;
            margin: 0!important;
        }
        body{
            height: 1vh;
        }
    </style></head><body class="gray-bg  animated fadeIn"><div class="wrapper wrapper-content ibox float-e-margins" ><div class="ibox-title visible-lg"><!-- <h5> --><ul class="breadcrumb inline pull-left" ><li><?php echo $menu['pmenu']; ?></li><li><?php echo $menu['menu_name']; ?></li></ul><!-- </h5> --><a class="pull-right btn btn-default btn-xs" title="刷新当前" href=""><i class="fa fa-refresh"></i></a></div><div class="ibox-content"><script src="<?php echo $web_static; ?>/js/uploadImg.js"></script><form class="form-horizontal js-ajax-form clearfix" action="<?php echo U('Articles/article_edit',['article_id'=>input('article_id')]); ?>" method='post' enctype=multipart/form-data><!-- 自定义大小 --><div class="form-group"><label for="cate_id" class="col-sm-2 control-label">文章类别</label><div class="col-sm-4"><select class=" form-control" name="cate_id" id="cate_id"><?php if(is_array($articles) || $articles instanceof \think\Collection || $articles instanceof \think\Paginator): $i = 0; $__LIST__ = $articles;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option value="<?php echo $vo['cate_id']; ?>" <?php if($article_info['cate_id'] == $vo['cate_id']): ?>selected<?php endif; ?>><?php echo $vo['cate_name']; ?></option><?php endforeach; endif; else: echo "" ;endif; ?></select></div></div><div class="form-group"><label for="article_title" class="col-sm-2 control-label">文章标题</label><div class="col-sm-4"><input type="text" name="article_title" class="form-control" id="article_title" value="<?php echo $article_info['article_title']; ?>"></div></div><div class="form-group"><label for="excerpt" class="col-sm-2 control-label">关键字</label><div class="col-sm-4"><input type="text" name="excerpt" class="form-control" id="excerpt" value="<?php echo $article_info['excerpt']; ?>"></div></div><div class="form-group"><label for="article_href" class="col-sm-2 control-label">文章链接</label><div class="col-sm-4"><input type="url" name="href" class="form-control" id="article_href" value="<?php echo $article_info['href']; ?>"></div></div><div class="form-group"><label for="article_content" class="col-sm-2 control-label">文章内容</label><div class="col-sm-9 "><div id="div2" class="text"><?php echo $article_info['article_content']; ?></div></div><input type="hidden" name="article_content" id="article_content"  value=""/></div><div class="form-group"><label for="image" class="col-sm-2 control-label">当前图片</label><div class="img_cont col-sm-10"><img src="<?php echo $article_info['image']; ?>" alt=""></div></div><div class="form-group"><label for="image" class="col-sm-2 control-label">上传图片</label><div class="img_cont col-sm-10"><div class="img_prev"></div><input type="file" name="iamge" id="image" /></div></div><div class="form-group"><label class="col-sm-2 control-label"></label><div class="col-sm-3"><button type="submit" class="btn btn-info js-submit-btn mr_3px">确认</button><button type="reset" class="btn btn-info">重置</button></div></div></form><script src="<?php echo $web_static; ?>/plugins/editor/wangEditor.min.js"></script><script type="text/javascript">    var E = window.wangEditor
    var editor1 = new E('#div2');//必须以 editorxxxxx 方式命名
    editor1.customConfig = {
        uploadImgServer    :'<?php echo url("layouts/text"); ?>',// 上传图片服务器
        showLinkImg        : false,// 隐藏“网络图片”tab
        uploadImgMaxSize   : 3*1024*1024,//限制图片大小
        uploadImgMaxLength : 5,// 限制一次最多上传 5 张图片
        uploadFileName     : 'image',//自定义上传文件名
        uploadImgParams    : {
            token: 'abcdef12345'   // 自定义上传参数，属性值会自动进行 encode ，此处无需 encode
        },
    }
    editor1.create();
    $('.js-submit-btn').click(function () {
        $("#article_content").attr('value',editor1.txt.html());
        console.log(editor1.txt.html());
    })

</script><script type="text/javascript">    $('#image').imgUpload({
        width:100,//预览宽度
        height:100,//预览高度
        imgWidth:100,//图片上传宽度
        imgHeight:100,//图片上传高度
        isCut:false,//是否裁剪
        maxSize: 10240,//允许上传最大值(KB)
        allowedNum:1//允许上传最大数量
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