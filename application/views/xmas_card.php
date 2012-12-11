<hgroup id="main-feature">
  <div id="header-fx">
    <h1>Firefox 聖誕報佳音</h1>
    <h2>我愛網路，我願意與Firefox一同守護網路開放自由</h2>
  </div>
</hgroup>
<div id="fb-root"></div>
<script>
  (function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "//connect.facebook.net/zh_TW/all.js#xfbml=1&appId=266112973491035";
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));
</script>
<!-- Place this tag after the last +1 button tag. -->
<script type="text/javascript">
  window.___gcfg = {lang: 'zh-TW'};

  (function() {
    var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
    po.src = 'https://apis.google.com/js/plusone.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
  })();
</script>
<div id="main-content">
  <section>
    <?php echo $content;?>
    <!-- Place this tag where you want the +1 button to render. -->
    <div class="social-tool">
      <div class="g-plusone" data-size="medium" href="<?php echo $cards_url; ?>"></div>
      <div class="fb-like" data-href="<?php echo $cards_url; ?>" data-send="false" data-layout="button_count" data-width="250" data-show-faces="false" data-font="arial"></div>
    </div>
  </section>
  <section class="again_bt">
    <div class="c_bt">
      <a href="/xmas/"><span class="bt_title">再玩一次</span></a>
    </div>
  </section>
</div>
<section class="social_content">
  <h2>留言</h2>
  <div class="fb-comments" data-href="<?php echo $cards_url; ?>" data-width="950" data-num-posts="20" data-colorscheme="dark"></div>
</section>