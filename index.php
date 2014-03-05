<?php $result = include 'fetch.php'; ?>
<!DOCTYPE html>
<!--[if lt IE 7 ]> <html class="ie6"> <![endif]-->
<!--[if IE 7 ]>    <html class="ie7">
<style type="text/css">
.thumbnail {
  width: 345px!important;
}
</style>
<![endif]-->
<!--[if IE 8 ]>    <html class="ie8"> <![endif]-->
<!--[if IE 9 ]>    <html class="ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="zh-cn"> <!--<![endif]-->
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>与非网-入口</title>
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="css/entrance.css" rel="stylesheet">
    <script src="js/jquery.min.js"></script>
    <script src="js/sildeshow.js"></script>
    <script src="js/entrance.js"></script>
  </head>
  <body>
    <div class="navbar" role="banner">
      <div class="container clearfix">
        <div class="entrance-container">
          <a class="entrance-brand" href="http://www.eefocus.com">
            与非网
            <!-- <i class="fa fa-angle-down"></i> -->
          </a><!-- 
          <div class="entrance-inner">
            <div class="entrance-item">
              <a href="" class="entrance-icon">
                <i class="fa fa-dashboard"></i>
              </a>
              <a href="" class="entrance-text">
                EEboard
              </a>
            </div>
            <div class="entrance-item">
              <a href="" class="entrance-icon">
                <i class="fa fa-dashboard"></i>
              </a>
              <a href="" class="entrance-text">
                Datasheet5
              </a>
            </div>
            <div class="entrance-item">
              <a href="" class="entrance-icon">
                <i class="fa fa-dashboard"></i>
              </a>
              <a href="" class="entrance-text">
                Cndzz
              </a>
            </div>
            <div class="entrance-item">
            </div>
          </div> -->
        </div>
        <div class="navbar-search">
          <form action="">
            <input type="text" placeholder="关键词" class="navbar-search-input">
          </form>
          <i class="fa fa-search navbar-search-icon"></i>
        </div>
        <ul class="userbar-nav">
          <li>
            <a href="#"><i class="fa fa-envelope-o"></i></a>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              Nickname 
              <b class="caret"></b>
            </a>
        </ul>
      </div>
    </div>
    <div class="container">
      <div class="thumbnail-container">
        <div class="thumbnail eefocus-thumbnail">
          <div class="thumbnail-body">
            <div class="clearfix media">
              <a class="pull-left" href="<?php echo $result['eefocus'][0]['url']; ?>">
                <img src="<?php echo $result['eefocus'][0]['image']; ?>" width="120" height="120">
              </a>
              <div class="media-body">
                <h4 class="media-heading pi-ellipsis pi-ellipsis-2">
                  <a href="<?php echo $result['eefocus'][0]['url']; ?>" title="<?php echo $result['eefocus'][0]['title']; ?>"><?php echo $result['eefocus'][0]['title']; ?></a>
                </h4>
                <div class="pi-ellipsis pi-ellipsis-3 text-muted">
                 <?php echo $result['eefocus'][0]['description']; ?>
                </div>
              </div>
            </div>
          </div>
          <ul class="thumbnail-list">
            <?php foreach ($result['eefocus'] as $key => $value) {
              ?>
              <li>
                <a href="<?php echo $value['url']; ?>" title="<?php echo $value['title']; ?>">
                  <?php echo $value['title']; ?>
                </a>
            <?php } ?>
            </ul>
          <div class="thumbnail-footer">
            <a class="clearfix media thumbnail-footer-media" href="http://www.eefocus.com">
              <img src="img/eefocus.png" class="pull-left">
              <i class="fa fa-angle-right"></i>
              <div class="media-body">
                与非网<br>
                电子工程师社交平台
              </div>
            </a>
          </div>
        </div>
        <div class="thumbnail">
          <div class="m8-slideshow" id="js-m8-slideshow">
            <ul class="slideshow-inner">
            <?php foreach ($result['moore'] as $key => $value) {
              ?>
              <li>
                <a href="<?php echo $value['url']; ?>">
                  <img src="<?php echo $value['image']['img_480x270']; ?>" width="100%" height="320">
                </a>
                <h4 class="m8-slideshow-title">
                  <a href="<?php echo $value['url']; ?>" title="<?php echo $value['title']; ?>"><?php echo $value['title']; ?></a>
                </h4>
            <?php } ?>
            </ul>
            <ul class="slideshow-indicator m8-slideshow-indicator">
              <li>
              <li>
              <li>
              <li>
            </ul>
          </div>
          <div class="thumbnail-footer">
            <a class="clearfix media thumbnail-footer-media" href="http://www.moore8.com">
              <img src="img/moore8.png" class="pull-left">
              <i class="fa fa-angle-right"></i>
              <div class="media-body">
                摩尔吧<br>
                电子工程师的在线课堂
              </div>
            </a>
          </div>
        </div>
        <div class="thumbnail">
         <div class="cndzz-slideshow" id="js-cndzz-slideshow">
            <ul class="slideshow-inner">
            <?php foreach ($result['cndzz'] as $key => $value) {
              ?>
              <li>
                <a href="<?php echo $value['url']; ?>">
                  <img src="<?php echo $value['image']; ?>" width="100%" height="170">
                </a>
                <h4 class="cndzz-slideshow-title">
                  <a href="<?php echo $value['url']; ?>" title="<?php echo $value['title']; ?>"><?php echo $value['title']; ?></a>
                </h4>
                <p class="pi-ellipsis pi-ellipsis-3"><?php echo $value['description']; ?>
            <?php } ?>
            </ul>
            <ul class="slideshow-indicator">
              <li>
              <li>
              <li>
              <li>
            </ul>
          </div>
          <div class="thumbnail-footer">
            <a class="clearfix media thumbnail-footer-media" href="http://www.cndzz.com">
              <img src="img/cndzz.png" class="pull-left">
              <i class="fa fa-angle-right"></i>
              <div class="media-body">
                Cndzz<br>
                电路图分享和下载中心
              </div>
            </a>
          </div>
        </div>
        <div class="thumbnail eeboard-thumbnail">
          <div class="thumbnail-body">
            <?php foreach ($result['eeboard'] as $key => $value) {
              ?>
            <div class="clearfix media">
              <a class="pull-left" href="<?php echo $value['url']; ?>">
                <img width="60" height="60" src="<?php echo $value['image']; ?>">
              </a>
              <div class="media-body">
                <h4 class="media-heading pi-ellipsis pi-ellipsis-1">
                  <a href="<?php echo $value['url']; ?>" title="<?php echo $value['title']; ?>"><?php echo $value['title']; ?></a>
                </h4>
                <div class="pi-ellipsis pi-ellipsis-2 text-muted">
                 <?php echo $value['description']; ?>
                </div>
              </div>
            </div>
            <?php } ?>
          </div>
          <div class="thumbnail-footer">
            <a class="clearfix media thumbnail-footer-media" href="http://www.eeboard.com">
              <img src="img/eeboard.png" class="pull-left">
              <i class="fa fa-angle-right"></i>
              <div class="media-body">
                爱板网<br>
                开发板和评估板选型的首选参考网站
              </div>
            </a>
          </div>
        </div>
        <div class="thumbnail">
          <div class="thumbnail-body">
            <form id="frm-search" class="d5-search-form clearfix" method="get" action="search">
              <input type="text" class="d5-search-input" placeholder="请输入元器件型号或描述">
              <button class="d5-search-btn" type="submit">搜索</button>
            </form>
            <div class="d5-category">
              <a href="http://www.datasheet5.com/search?category=2" title="测试测量">
                测试测量
              </a>
              <a href="http://www.datasheet5.com/search?category=98" title="光电元器件">
                光电元器件
              </a>
              <a href="http://www.datasheet5.com/search?category=141" title="开发、评估系统／应用方案">
                开发、评估系统／应用方案
              </a>
              <a href="http://www.datasheet5.com/search?category=165" title="分立半导体">
                分立半导体
              </a>
              <a href="http://www.datasheet5.com/search?category=2" title="电路保护">
                电路保护
              </a>
              <a href="http://www.datasheet5.com/search?category=334" title="无源元件">
                无源元件
              </a>
              <a href="http://www.datasheet5.com/search?category=346" title="连接器件">
                连接器件
              </a>
              <a href="http://www.datasheet5.com/search?category=433" title="机电产品">
                机电产品
              </a>
              <a href="http://www.datasheet5.com/search?category=446" title="传感器">
                传感器
              </a>
              <a href="http://www.datasheet5.com/search?category=468" title="散热元器件">
                散热元器件
              </a>
              <a href="http://www.datasheet5.com/search?category=474" title="电源供应">
                电源供应
              </a>
              <a href="http://www.datasheet5.com/search?category=496" title="集成电路">
                集成电路
              </a>
            </div>
          </div>
          <div class="thumbnail-footer">
            <a class="clearfix media thumbnail-footer-media" href="http://www.datasheet5.com">
              <img src="img/datasheet5.png" class="pull-left">
              <i class="fa fa-angle-right"></i>
              <div class="media-body">
                Datasheet5<br>
                电路图分享和下载中心
              </div>
            </a>
          </div>
        </div>
        <div class="thumbnail">
          <div class="eef-job">
            <img src="img/eef-job.png">
          </div>
          <table class="table table-striped">
            <thead>
              <tr>
                <th width="80%">
                  <span class="eef-job-indent">职位</span>
                <th>地点
            </thead>
            <tbody>
              <tr>
                <td>
                  <a href="" class="eef-job-indent">硬件开发工程师</a>
                <td>上海
              <tr>
                <td>
                  <a href="" class="eef-job-indent">嵌入式系统开发工程师</a>
                <td>深圳
            </tbody>
          </table>
          <div class="thumbnail-footer">
            <a class="clearfix media thumbnail-footer-media" href="http://job.eefocus.com">
              <img src="img/eefocus.png" class="pull-left">
              <i class="fa fa-angle-right"></i>
              <div class="media-body">
                与非招聘<br>
                电子工程师求职助手
              </div>
            </a>
          </div>
        </div>  
      </div>
      <div class="clearfix entrance-footer">
        <a href="">
          <img width="120" height="50" src="http://www.eefocus.com/images/logo/openhw.gif">
        </a>
        <a href="">
          <img width="120" height="50" src="http://www.eefocus.com/images/logo/FreescaleIC.gif">
        </a>
      </div>
    </div>
  </body>
</html>