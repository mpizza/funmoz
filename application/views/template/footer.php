					</div><!-- #main -->
     </div><!--end of wrapper-->
      <!-- start sub-footer-->
      <div id="footer">  
        <footer>
          <div id="footer-wrapper">
            <div id="footer-logo" class="footer-content">
              <a href="http://mozilla.org" target="_blank">
                <img src="/assets/css/img/mozcomtw/footer-mozilla.png" alt="mozilla" border="0" />
              </a>
            </div>
            <div id="sub-footer" class="footer-content">
             <div id="sub-footer-contents">
              <strong>與我們為友</strong>
              <?php
                // show footer  
                //sub_footerBar();
              ?>
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
		<!--<script type="text/javascript" src="/assets/js/main.js"></script>-->
		<script type="text/javascript" src="/assets/js/xmas.js"></script>
		<script type="text/javascript">
      $(function(){
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