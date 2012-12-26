					</div><!-- #main -->
     </div><!--end of wrapper-->
      <!-- start sub-footer-->
      <div id="footer">  
        <footer>
          <div id="footer-wrapper">
            <div id="footer-logo" class="footer-content">
              <a href="http://mozilla.org" target="_blank">
                <img src="/assets/less/img/mozcomtw/footer-mozilla.png" alt="mozilla" border="0" />
              </a>
            </div>
            <div id="sub-footer" class="footer-content">
             <div id="sub-footer-contents">
              <strong>與我們為友</strong>
              <ul>
                <li id="footer-Facebook">
                  <a href="https://www.facebook.com/MozillaTaiwan">Facebook</a>
                </li>
                <li id="footer-Google+">
                  <a href="https://plus.google.com/u/0/114653167240123163859/posts">Google+</a>
                </li>
                <li id="footer-Plurk">
                  <a href="http://plurk.com/MozillaTaiwan">Plurk</a>
                </li>
                <li id="footer-Youtube">
                  <a href="http://www.youtube.com/user/MozillaTaiwan">Youtube</a>
                </li>
                <li id="footer-Flickr">
                  <a href="http://www.flickr.com/photos/mozillataiwan/">Flickr</a>
                </li>
                <li id="footer-電子報">
                  <a href="http://mozilla.com.tw/join_us/">電子報</a>
                </li>
                <li class="close"></li>
              </ul>
            </div>
           </div><!--end sub-footer-->
            <div id="copyright" class="footer-content">
              <p id="footer-links">
                <a href="http://www.mozilla.org/zh-TW/privacy-policy.html">隱私資料政策</a> &nbsp;|&nbsp;
                <a href="http://www.mozilla.org/zh-TW/about/legal.html">法律資訊</a> &nbsp;|&nbsp;
                <a href="http://www.mozilla.org/zh-TW/legal/fraud-report/index.html">回報商標濫用</a>
              </p>
              <p>除另有<a href="http://www.mozilla.org/zh-TW/about/legal.html#site">註明</a>外，本站內容皆採用<br><a href="http://creativecommons.org/licenses/by-sa/3.0/">創用 CC 姓名標示—相同方式分享條款 3.0 </a>或更新版本授權大眾使用。</p>
           </div><!-- end copyright-->
           <div class='close'></div>
          </div><!-- end footer-wrapper--!>
       </footer>
      </div><!-- end footer-->
    </div><!-- end #outer-wrapper -->
    <noscript>
    </noscript>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.min.js"></script>
		<?php echo $js_arr;?>
		<script type="text/javascript">
      $(function(){
        $('.fb').on('click',function(e){
          e.preventDefault();
          _gaq.push(['_trackEvent', '2012Xmas', 'fb', 'fbshare']);
          var encode_url=fixedEncodeURI($(this).attr('href'));
          window.open(encode_url);
        });
        
        $('.mozilla').click(function(e){
          e.preventDefault();
          if ($('.click_mozilla').is('*')){
            $('.mozilla').removeClass('click_mozilla');
              $('#default-header').css('height','0px');
            
          }else{
            $('.mozilla').addClass('click_mozilla');
            $('#default-header').css('height','150px');
          }
        });
         $('#show').css('display','none');
        $('.menu-bt').click(function(){
          var text = $(this).attr('id');
          $(this).css('display','none');
          if(text==='hide'){
            $('.bg-menu').addClass('hide-menu');
            $('#show').css('display','block');
          }
          if(text==='show'){
            $('.bg-menu').removeClass('hide-menu');
            $('#hide').css('display','block');
          }
        });
		  });
		  
    function fixedEncodeURI (str) {
      if(navigator.appVersion.indexOf('MSIE 9.0')!=-1){
      str=encodeURI(str);
      }
      //return encodeURI(str).replace(/%5B/g, '[').replace(/%5D/g, ']');
      return str;
    }
		</script>
    <noscript>
      <style>
      div#default-header{
        height:150px;
      }
      </style>
    </noscript>
		</body>
</html>