<hgroup id="main-feature">
  <div id="header-fx">
    <h1>Firefox 跨年許願卡</h1>
    <h2>5, 4, 3, 2, 1….我的新年願望是與Firefox一同捍衛網路開放自由</h2>
  </div>
</hgroup>
<div id="main-content">
  <section>
    <?php echo $content;?>
    <!-- Place this tag where you want the +1 button to render. -->
  </section>
  <section class="again_bt">
    <div class="c_bt">
      <a href="/newyear/"><span class="bt_title">再玩一次</span></a>
    </div>
    <div class="c_bt">
      <a href="<?php echo $u_imgsrc;?>" target="_blank"><span class="bt_title">另存卡片</span></a>
    </div>
    <ul class="sharelist">
      <li>
        <a class="fb" target="_blank" href="http://www.facebook.com/sharer/sharer.php?s=100&p[url]=<?php echo $cards_url; ?>&p[title]=<?php echo $title; ?>&p[images][0]=http://fun.mozilla.com.tw/assets/pic/xmas2012/share_FB.jpg&p[summary]=<?php echo $meta_desc; ?>">
          Facebook
        </a>
      </li>
      <li>
        <a class="pk" href="javascript: void(window.open('http://www.plurk.com/?qualifier=shares&amp;status=' .concat(encodeURIComponent('<?php echo $cards_url; ?>')) .concat(' ') .concat('(') .concat(encodeURIComponent('Firefox 聖誕報佳音')) .concat(')')));">
          [推到Plurk]
        </a>
      </li>
      <li id="gplist" class="default-gp">
        <div class="g-plusone" data-size="medium" data-annotation="inline"  data-href="<?php echo $cards_url; ?>" data-width="120"></div>
      </li>
    </ul>
  </section>
  <section class="url_link">
  將您的聖誕卡專屬網址分享給好友： <br/>
  <input type="text" value="<?php echo $cards_url; ?>" id="c_url">
  </section>
</div>
<!-- Place this tag after the last +1 button tag. -->
<script type="text/javascript">
  window.___gcfg = {lang: 'zh-TW'};

  (function() {
    var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
    po.src = 'https://apis.google.com/js/plusone.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
  })();
</script>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/zh_TW/all.js#xfbml=1&appId=266112973491035";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));
</script>
<section class="social_content">
  <h2>留言給創作者</h2>
  <div class="fb-comments" data-href="<?php echo $cards_url; ?>" data-width="950" data-num-posts="20" data-colorscheme="dark"></div>
</section>