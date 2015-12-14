<?xml version="1.0" encoding="UTF-8"?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="ja" xml:lang="ja">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<title></title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<meta http-equiv="Content-Style-Type" content="text/css" />
<meta http-equiv="Content-Script-Type" content="text/javascript" />
<link  href="<?php echo DEFAULT_CSS_PATH; ?>/styles.css" rel="stylesheet" type="text/css" />
<link  href="<?php echo DEFAULT_CSS_PATH; ?>/responsive.css" rel="stylesheet" type="text/css" />
<!-- js common BEGIN -->
<script src="<?php echo DEFAULT_JS_PATH; ?>/jquery.js" type="text/javascript"></script>
<script src="<?php echo DEFAULT_JS_PATH; ?>/jquery.scroll.js" type="text/javascript"></script>
<script type="text/javascript" src="<?= ADMIN_JS_PATH ?>/jquery.validate.js"></script>
<script src="<?php echo DEFAULT_JS_PATH; ?>/rollover.min.js" type="text/javascript"></script>
<script src="<?php echo DEFAULT_JS_PATH; ?>/jquery-sweetlink.js" type="text/javascript"></script>
<script charset="UTF-8" src="<?php echo DEFAULT_JS_PATH; ?>/biggerlink.js" type="text/javascript"></script>
<script charset="UTF-8" src="<?php echo DEFAULT_JS_PATH; ?>/scripts.js" type="text/javascript"></script>
<!-- js common END -->
<script type="text/javascript">
    var VALIDATE_REQUIRED = '<?php echo $this->lang->line('error_required');?>';
    var VALIDATE_EMAIL = '<?php echo $this->lang->line('error_email');?>';
</script>
</head>
<body>
<div id="wrapper">
    <div id="header" class="clearfix">
        <div id="headerInner">
            <div class="hSection clearfix">
                <h1 id="logo"><a href="#"><img src="<?php echo DEFAULT_IMAGE_PATH; ?>/logo.png" alt="SANKO MOLD VIETNAM" class="hide-sp" /><img src="<?php echo DEFAULT_IMAGE_PATH; ?>/logo_sp.png" alt="SANKO MOLD VIETNAM" class="hide-pc" /></a></h1>
                <div class="headerR">
                    <ul class="langList">
                        <li class="jp"><a href="#"><img src="<?php echo DEFAULT_IMAGE_PATH; ?>/flag_jp.jpg" alt="Japanese" /></a></li>
                        <li class="en"><a href="#"><img src="<?php echo DEFAULT_IMAGE_PATH; ?>/flag_en.jpg" alt="English" /></a></li>
                    </ul>
                    <p class="hTel hide-sp"><span>(+84)</span>61-393-6635</p>
                    <p class="hTel-sp hide-pc"><a href="tel:+84613936635" class="sweetlink"><img src="<?php echo DEFAULT_IMAGE_PATH; ?>/icon_tel_sp.png" alt="tel:+84613936635" /></a></p>
                </div>
            </div>
        </div>
        <p class="header-bg"><img src="<?php echo DEFAULT_IMAGE_PATH; ?>/hspace.gif" alt="SANKO MOLD VIETNAM" class="img-responsive" /></p>
        <p class="g-menu hide-pc"> <a href="javascript:;"> <span class="bar"><span class="bar1"></span><span class="bar2"></span><span class="bar3"></span></span> </a> </p>
    </div>
    <div id="g-nav" class="hide-pc">
        <ul class="gNav clearfix">
            <li><a href="index.html">ホームページ<span>Home</span></a></li>
            <li class="sub"><a href="javascript:;">会社概要<span>About Us</span></a>
                <ul class="sublink">
                    <li><a href="vision_mission.html">ミッション・ビジョン</a></li>
                    <li><a href="message_from_ceo.html">CEOからのメッセージ</a></li>
                    <li><a href="company_information.html">会社紹介</a></li>
                    <li><a href="company_history.html">沿革</a></li>
                </ul>
            </li>
            <li class="sub"><a href="javascript:;">製品<span>Product</span></a>
                <ul class="sublink">
                    <li><a href="mold.html">金型の設計・制作</a></li>
                    <li><a href="plastic.html">プラスチック部品の製造・組立</a></li>
                    <li><a href="battery.html">電池式携帯電話充電器の組立</a></li>
                </ul>
            </li>
            <li><a href="main_equipment.html">主な設備、機械<span>The main equipment, machinery</span></a></li>
            <li><a href="news.html">ニュース<span>News</span></a></li>
            <li><a href="career.html">採用情報<span>Careers</span></a></li>
            <li><a href="contact.html">お問い合わせ<span>Contact Us</span></a></li>
            <li><a href="sitemap.html">サイトマップ<span>Site Map</span></a></li>
        </ul>
        <!-- /#g-nav -->
    </div>
    <ul class="topicPath">
        <li><a href="index.html">ホームページ</a> &gt;</li>
        <li>会社概要 &gt;</li>
        <li>CEOからのメッセージ</li>
    </ul>
    