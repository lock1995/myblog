<!doctype html>
<html class="no-js">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>edit blog</title>
  <meta name="description" content="这是一个 table 页面">
  <meta name="keywords" content="table">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
  <meta name="renderer" content="webkit">
  <meta http-equiv="Cache-Control" content="no-siteapp" />
  <base href="<?php echo site_url();?>">

  <link rel="icon" type="image/png" href="assets/i/favicon.png">
  <link rel="apple-touch-icon-precomposed" href="assets/i/app-icon72x72@2x.png">
  <meta name="apple-mobile-web-app-title" content="Amaze UI" />
  <link rel="stylesheet" href="assets/css/amazeui.min.css"/>
  <link rel="stylesheet" href="assets/css/admin.css">
  <style>
    .top{
      text-align: center;
      font-size: 28px;
      font-weight: bold;
    }
    .box{
      margin-top: 100px;
      margin-left: 500px;
      height: 500px;
      width: 500px;
    }
    .title{
      border: 0;
      padding: 10px;
      width: 85%;
      color: #9198A3;
      background: #fff;
      height: 40px;
      border: 1px solid #eee;
    }
    .content{
      border: 0;
      padding: 10px;
      width: 85%;
      background: #fff;
      border: 1px solid #eee;
      color: #9198A3;
      resize: none;
      height: 150px;
    }
    .submit{
      margin-top: 10px;
      padding: 10px;
      border: 0;
      background: #fff;
    }
    .box p{
      font-size: 16px;
      color: #000;
      margin-bottom: 5px;
      font-weight: 400;
    }
    .upload{
      border: 0;
      background: #e7e7e7;
    }
  </style>
</head>
<body>
<!--[if lte IE 9]>
<p class="browsehappy">你正在使用<strong>过时</strong>的浏览器，Amaze UI 暂不支持。 请 <a href="http://browsehappy.com/" target="_blank">升级浏览器</a>
  以获得更好的体验！</p>
<![endif]-->

<?php include 'admin-header.php'; ?>
<div class="am-cf admin-main">
  <?php include 'admin-sidebar.php'; ?>
  <p class="top">新增文章</p>
  <div class="box">
    <form action="admin/add_blog" method="post">
      <!-- <p>标题： </p><input type="text" value="" name="title" class="title">
      <p>内容： </p><textarea name="content" cols="30" rows="10" class="content"></textarea> -->
      <!-- <p>图片： </p><input type="file" name="img" class="img"> -->
      <!-- <p>图片： </p><input type="button" value="上传图片" class="upload"> -->
      <!-- <div><input type="submit" class="submit" value="提 交"></div> -->
    </form>
  </div>
</div>

<a href="#" class="am-icon-btn am-icon-th-list am-show-sm-only admin-menu" data-am-offcanvas="{target: '#admin-offcanvas'}"></a>

<footer>
  <hr>
  <p class="am-padding-left">© 2014 AllMobilize, Inc. Licensed under MIT license.</p>
</footer>

<!--[if lt IE 9]>
<script src="http://libs.baidu.com/jquery/1.11.1/jquery.min.js"></script>
<script src="http://cdn.staticfile.org/modernizr/2.8.3/modernizr.js"></script>
<script src="assets/js/amazeui.ie8polyfill.min.js"></script>
<![endif]-->

<!--[if (gte IE 9)|!(IE)]><!-->
<script src="assets/js/jquery.min.js"></script>
<!--<![endif]-->
<script src="assets/js/amazeui.min.js"></script>
<script src="assets/js/app.js"></script>
<script>
  // var $upload = $('.upload');
  // $upload.on('click',function(){
  //   location.href = 'admin/upload';
  // });

</script>

</body>
</html>

























