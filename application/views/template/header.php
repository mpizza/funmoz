<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package Toolbox
 * @since Toolbox 0.1
 */
?>
<!DOCTYPE html>
<html xml:lang="zh-TW" lang="zh-TW">
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="content-type" content="text/html; charset=UTF-8"/> 
  <meta name="description" content="<?php echo $meta_desc; ?>" />
  <meta name="keywords" content="<?php echo $keyword;?>" />
  <meta property="og:title" content="<?php echo $title; ?>" />
  <meta property="og:description" content="<?php echo $title; ?>" />
  <meta property="og:image" content="<?php echo $ogimage; ?>" />
  <meta name="google-site-verification" content="ClhuMhUFrYEw-zfAsWNx5l7JzCyXoFESHZhnirdMcsA" />
  <meta name="msvalidate.01" content="0DCEE643E9ACDEE9FDC2E8036E0CFB78" />
  <link rel="stylesheet" href="/assets/less/moz.css"/>
  <link rel="stylesheet" href="/assets/less/xmas.css"/>
  <title>
  <?php
    echo $title;
  ?>
  | Mozilla Taiwan | 美商謀智台灣分公司
  </title>
  <link rel="shortcut icon" href="http://mozilla.com/favicon.ico" />
  <!--[if lte IE 8]>
  <script src="/assets/js/html5shiv.js"></script>
  <![endif]-->
  <script type="text/javascript">
    var _gaq = _gaq || [];
    _gaq.push(['_setAccount', 'UA-28913145-1']);
    _gaq.push(['_setDomainName', 'mozilla.com.tw']);
    _gaq.push(['_trackPageview']);
  
    (function() {
      var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
      ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
      var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
    })();
  </script>
</head>
<body>
    <div id="default-header" style="height:0px;">
      <div class="header-promo">
          <a href="https://play.google.com/store/apps/details?id=org.mozilla.firefox" onClick="_gaq.push(['_trackEvent', 'home-link', 'nav-firefox-mobile', '']);" target="_blank"><img src="http://mozilla.com.tw/assets/pic/FirefoxforAndroid.png" alt="Firefox for Android"></a>
      </div>
      <ul>
        <li class="sitemap">
          <a href="http://mozilla.com.tw/firefox/" title="下載 Mozilla Firefox 中文版">Firefox</a>
          <ul>
            <li>
              <a href="http://mozilla.com.tw/firefox/features/" title="下載 Mozilla Firefox 中文桌面版">Firefox 桌面版</a>
            </li>
            <li>
              <a href="http://mozilla.com.tw/firefox/mobile/" title="Mozilla Firefox 行動版">Firefox 行動版</a>
            </li>
            <li>
              <a href="http://mozilla.com.tw/firefoxos/" title="Firefox 行動作業系統">Firefox OS</a>
            </li>
            <li>
              <a href="https://addons.mozilla.org/zh-TW/firefox/" title="Firefox 附加元件">附加元件</a>
            </li>
            <li>
              <a href="https://support.mozilla.com/zh-TW/home" title="Firefox 說明文件、支援中心">支援中心</a>
            </li>
          </ul>
        </li>
        <li class="sitemap">
          <a href="http://mozilla.com.tw/community/" title="社群參與">社群參與</a>
          <ul>
            <li>
              <a href="http://mozilla.com.tw/community/student/" title="校園大使">校園大使</a>
            </li>
            </ul>
            </li>
            <li class="sitemap">
              <a href="http://mozilla.com.tw/news/" title="訊息中心">訊息中心</a>
            <ul>
            <li>
              <a href="http://blog.mozilla.com.tw/main" title="部落格">部落格</a>
            </li>
            <li>
              <a href="http://mozilla.com.tw/news/press/" title="Mozilla 新聞">Mozilla 新聞</a>
            </li>
            <li>
              <a href="http://blog.mozilla.com.tw/events-list" title="活動訊息">活動訊息</a>
            </li>
            <li>
              <a href="http://tech.mozilla.com.tw/" title="謀智台客">謀智台客</a>
            </li>
          </ul>
        </li>
        <li class="sitemap">
          <a href="http://mozilla.com.tw/about/" title="關於我們">關於我們</a>
          <ul>
            <li>
              <a href="http://mozilla.com.tw/about/manifesto/" title="Mozilla 宣言">Mozilla 宣言</a>
            </li>
            <li>
              <a href="http://mozilla.com.tw/about/space/" title="Mozilla Space">Mozilla Space</a>
            </li>
            <li>
              <a href="http://mozilla.com.tw/about/careers/" title="工作機會">工作機會</a>
            </li>
            <li>
              <a href="http://mozilla.com.tw/about/contact/" title="聯絡資訊">聯絡資訊</a>
            </li>
          </ul>
        </li>
        </ul>
    </div>
    <div id="outer-wrapper">
    <div id="wrapper">
        <div id="header">
          <header>
            <a href="http://mozilla.com.tw/" title="回首頁" class="close">
              <span id="header_firefox">Mozilla Firefox|美商謀智</span>
            </a>
          </header>
            <a class="mozilla" href="http://mozilla.org/">mozilla</a>
        </div><!--end header-->
        <div id="main">