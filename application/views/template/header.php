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
<meta http-equiv="content-type" content="text/html; charset=UTF-8"/> 
<meta name="viewport" content="width=device-width" />
<meta name="description" content="<?php echo @$meta_desc; ?>" />
<meta name="keywords" content="Firefox, Firefox Desktop, Firefox OS, Firefox for Android, Firefox 行動, Firefox 繁體中文, Firefox 正體中文, Firefox 官方, Firefox tw, Firefox blog, Firefox 文章, Firefox 部落格, Firefox 討論, Mozilla, Mozilla Taiwan, browser, 好用瀏覽器" />
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
</head>
<body>
    <div id="default-header" style="height:0px;">
      <div class="header-promo">
          <a href="https://play.google.com/store/apps/details?id=org.mozilla.firefox" onClick="_gaq.push(['_trackEvent', 'home-link', 'nav-firefox-mobile', '']);" target="_blank"><img src="http://mozilla.com.tw/assets/pic/FirefoxforAndroid.png" alt="Firefox for Android"></a>
      </div>
    <?php
      // print site map
      //sitemap();
    ?>
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