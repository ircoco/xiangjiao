<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>香蕉视频</title>
    <meta name="keywords" content="视频资源,电影资源,电视剧,日剧,美剧,韩剧,云盘">
    <meta name="description" content="香蕉视频搜集来自互联网的最新的电影,电视剧资源">
    <meta name="author" content="rochestor">
    <link href="../css/layout.css" rel="stylesheet" type="text/css">
    <link href="../css/drama_detail.css" rel="stylesheet" type="text/css">
</head>
<body>
<!--顶部导航-->
<div class="navbar">
    <div class="navbar-container">
        <div class="logo"><a href="index.php" target="_blank" class="navbar-logo" title="香蕉影视">香蕉影视</a></div>
        <div class="menu">
            <ul>
                <li><a href="index.php"s>首页</a></li>
                <li><a href="movie.php">电影</a></li>
                <li><a href="drama.php">电视剧</a></li>
                <!--<li><a href="">综艺节目</a></li>-->
                <li><a href="about.php">关于我们</a></li>
            </ul>
        </div>
    </div>
</div>
<div class="container clearfix">

    <!--内容主题-->
    <!--推荐的内容-->
    <div class="main-content" id="main">
        <h1 class="post-title"><?php echo $detail_info['movie_name'];?></h1>
        <div class="sub-title">
            <span>百度云电视剧</span>
            <span><?php echo $detail_info['create_time'];?></span>
            <span>©️香蕉影视</span>
        </div>
        <div class="content">
            <p>香蕉影视,目前全站的资源没有做适应手机端的布局,所以为了获得良好的体验,我们希望各位宝宝们用电脑访问页面</p>
            <ul class="pic-list">
                <?php $pics = explode(",", $drama_info['main_pic']);?>
                <?php foreach( $pics as $k => $v ) {?>
                <li>
                    <img src="<?php echo $v;?>" alt="剧照" />
                </li>
                <?php }?>
            </ul>
            <div class="short-intro">
                <dl class="clearfix">
                    <dt>电视剧:</dt>
                    <dd><?php echo $drama_info["drama_name"];?></dd>
                </dl>
                <dl class="clearfix">
                    <dt>上映地区:</dt>
                    <dd><?php echo $drama_info["zone"];?></dd>
                </dl>
                <dl class="clearfix">
                    <dt>上映日期:</dt>
                    <dd><?php echo $drama_info["show_time"];?></dd>
                </dl>
                <dl class="clearfix">
                    <dt>导演:</dt>
                    <dd><?php echo $drama_info["director"];?></dd>
                </dl>
                <dl class="clearfix">
                    <dt>主演:</dt>
                    <dd><?php echo $drama_info["actors"];?></dd>
                </dl>
            </div>
            <div class="brief-desc">
                <p>剧情介绍</p>
                <p class="desc">
                    <?php echo $drama_info["brief_desc"];?>
                </p>
            </div>
            <div class="download-info">
                <span>百度云网盘链接:</span>
                <table cellpadding="1" cellspacing="1">
                    <thead>
                        <tr>
                            <td>序号</td>
                            <td>名字</td>
                            <td>下载</td>
                            <td>提取码</td>
                        </tr>
                    </thead>
                    <tbody>
                    <?php if( $detail_info && is_array( $detail_info )) {?>
                        <?php foreach( $detail_info as $k => $v ) {?>
                        <tr>
                            <td><?php echo $k + 1;?></td>
                            <td><?php echo $v['drama_name']." ".$v['english_name']." S".$v['season']." E".$v['episode'];?></td>
                            <td><a href="<?php echo $v['url'];?>" target="_blank">百度云地址</a></td>
                            <td><?php echo $v['pan_code'] ? $v['pan_code'] : "无" ;?></td>
                        </tr>
                    <?php }}?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="side" id="right-side">
        <div class="post-right-item">
            <h4 class="post-right-title">百度云电视剧频道</h4>
            <div class="tags">
                <?php if( $drama_types && is_array( $drama_types )) {?>
                    <?php foreach( $drama_types as $k => $v ) {?>
                        <a target="_blank" href="<?php echo "drama.php?drama_type=".$v?>"><?php echo $v;?></a>
                    <?}}?>
            </div>
        </div>
        <div class="post-right-item">
            <h4 class="post-right-title">百度云电视剧排行</h4>
            <ul class="hot-list">
                <?php if( $drama_rank && is_array( $drama_rank ) ) { ?>
                    <?php foreach( $drama_rank as $k => $v ) {?>
                        <li><a href="<?php echo $drama_detail_url."?drama_id=".$v['id'];?>" title="<?php echo $v['title']; ?>"><span class="hot-num"><?php echo $k + 1;?></span><?php echo $v['drama_name'];?></a></li>
                    <?php }}?>
            </ul>
        </div>
        <div class="post-right-item">
            <h4 class="post-right-title">百度云电视剧推荐</h4>
            <ul class="hot-list">
                <?php if( $drama_recommend && is_array( $drama_recommend ) ) { ?>
                    <?php foreach( $drama_recommend as $k => $v ) { ?>
                        <li><a href="<?php echo $drama_detail_url."?drama_id=".$v['id'];?>" title="<?php echo $v['drama_name'];?>"><span class="hot-num"><?php echo $k + 1;?></span><?php echo $v['drama_name'];?></a></li>
                    <?php  }}?>
            </ul>
        </div>
        <!--关注我们-->
        <div id="post-right-item" class="post-right-item">
            <h4 class="post-right-title">关注我们</h4>
            <div class="follow-title">
                <p>微信公众平台：</p>
                <p>扫描下方的二维码</p>
            </div>
            <div class="follow-2wm">
                <img src="../image/weixin.jpg" alt="微信二维码" width="224" height="240">
                <span></span>
            </div>
        </div>
        <!--打赏小编-->
        <div id="donate" class="post-right-item clearfix">
            <h4 class="post-right-title">捐赠站长</h4>
            <p>小额资助,站长跟你生猴子</p>
            <ul class="platform-type clearfix">
                <li class="active"><a href="javascript:;">微信</a></li>
                <li><a href="javascript:;">支付宝</a></li>
            </ul>
            <div class="money-range">
                <ul class="money-range">
                    <li><img src="../image/wechat_pay2_1.jpg" alt="微信2元"></li>
                    <li class="dn"><img src="../image/alipay2_1.jpg" alt="支付宝2元"></li>
                </ul>
            </div>
        </div>
    </div>


</div>
<!--页脚,版权信息-->
<div class="footer" id="footer">
    <a href="javascript:;" >关于我们</a>
    <a href="javascript:;" >联系我们</a>
    <a href="javascript:;" >版权声明</a>
    <a href="javascript:;" >网友投稿</a>
    <div class="tip">本站所有资源均来自于网络<br />如涉及版权问题,希望删除相关信息,请发送邮件到2276329692@qq.com,我们会在确认后尽快处理.<br />Copyright © 2015-2016 香蕉影视，百度云资源
    </div>
</div>
<!--回到顶部-->
<div class="go-top dn" id="go-top">
    <a href="javascript:;" class="uc-2wm"></a>
    <div class="uc-2wm-pop dn"></div>
    <a href="javascript:;" class="go"></a>
</div>


<script src="../script/drama_detail.js"></script>
</body>
</html>


