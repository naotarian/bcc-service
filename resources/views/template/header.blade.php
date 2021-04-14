<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('/css/style.css') }}" rel="stylesheet">
    <title>Document</title>
</head>
<body>
  <div class="pconly">
    <div class="over_header">
        <ul>
            <li>サンプルテキスト</li>
            <li>サンプルテキスト</li>
        </ul>
    </div>
    <nav>
      <ul id="main">
        <li>Home</li>
        <li>About</li>
        <li>Skills
          <ul class="drop">
            <div>
            <li>scss</li>
            <li>jquery</li>
            <li>html</li>
            </div>
          </ul>
        </li>
        <li>Contact</li>
        <div id="marker"></div>
      </ul>
    </nav>
  </div>
  
  <div class="sponly">
    <div class="header_sp">
      
    </div>
    <div class="el_humburger"><!--ハンバーガーボタン-->
      <div class="el_humburger_wrapper">
        <span class="el_humburger_bar top"></span>
        <span class="el_humburger_bar middle"></span>
        <span class="el_humburger_bar bottom"></span>
      </div>
    </div>
   
    <header class="navi">
      <div class="navi_inner">
   {{--
        <div class="navi_item js_openParent"><a href="">WORKS</a>
            <div class="el_spChildNavOpen js_openSwitch">
              <div class="el_spChildNavOpen_wrapper"></div>
            </div>
            <div class="nav_child js_openTarget">
              <div class="nav_child_item">
                <a class="hp_coverLink" href=""></a>
                WORKSの子ページ
              </div>
              <div class="nav_child_item">
                <a class="hp_coverLink" href=""></a>
                WORKSの子ページ
              </div>
              <div class="nav_child_item">
                <a class="hp_coverLink" href=""></a>
                WORKSの子ページ
              </div>
              <div class="nav_child_item">
                <a class="hp_coverLink" href=""></a>
                WORKSの子ページ
              </div>
              <div class="nav_child_item">
                <a class="hp_coverLink" href=""></a>
                WORKSの子ページ
              </div>
            </div>
            <div class="bl_nav_item_spToggle"></div>
        </div>
        --}}
        <div class="navi_item"><a href="">TOP</a></div>
        <div class="navi_item"><a href="">ご利用の流れ</a></div>
        <div class="navi_item js_openParent"><a href="">お申し込み</a>
            <div class="el_spChildNavOpen js_openSwitch">
              <div class="el_spChildNavOpen_wrapper"></div>
            </div>
            <div class="nav_child js_openTarget">
              <div class="nav_child_item">
                <a href=""></a>
                scss
              </div>
              <div class="nav_child_item">
                <a href=""></a>
                jquery
              </div>
              <div class="nav_child_item">
                <a href=""></a>
                html
              </div>
            </div>
            <div class="bl_nav_item_spToggle"></div>
        </div>
        <div class="navi_item"><a href="">よくある質問</a></div>
        <div class="navi_item"><a href="">お問い合わせ</a></div>
      </div>
    </div>
  </header>
<!--CDNでjQuery読み込む-->
<script
src="https://code.jquery.com/jquery-2.2.4.min.js"
integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
crossorigin="anonymous"></script>
</body>
</html>

<script>
  var navigationOpenFlag = false;
var navButtonFlag = true;
var focusFlag = false;
 
//toggle
$(function(){
  $(document).on('click','.js_openSwitch',function(){
    $(this).parent('.js_openParent').find(' > .js_openTarget').slideToggle("fast");
    $(this).parent('.js_openParent').toggleClass('js_fire');
  });
});
 
//ハンバーガーメニュー
    $(function(){
 
      $(document).on('click','.el_humburger',function(){
        if(navButtonFlag){
          spNavInOut.switch();
          //一時的にボタンを押せなくする
          setTimeout(function(){
            navButtonFlag = true;
          },200);
          navButtonFlag = false;
        }
      });
      $(document).on('click touchend', function(event) {
        if (!$(event.target).closest('.navi,.el_humburger').length && $('body').hasClass('js_humburgerOpen') && focusFlag) {
          focusFlag = false;
          //scrollBlocker(false);
          spNavInOut.switch();
        }
      });
    });
 
//ナビ開く処理
function spNavIn(){
  $('body').removeClass('js_humburgerClose');
  $('body').addClass('js_humburgerOpen');
  setTimeout(function(){
    focusFlag = true;
  },200);
  setTimeout(function(){
    navigationOpenFlag = true;
  },200);
}
 
//ナビ閉じる処理
function spNavOut(){
  $('body').removeClass('js_humburgerOpen');
  $('body').addClass('js_humburgerClose');
  setTimeout(function(){
    $(".uq_spNavi").removeClass("js_appear");
    focusFlag = false;
  },200);
  navigationOpenFlag = false;
}
 
//ナビ開閉コントロール
var spNavInOut = {
  switch:function(){
    if($('body.spNavFreez').length){
      return false;
    }
    if($('body').hasClass('js_humburgerOpen')){
     spNavOut();
    } else {
     spNavIn();
    }
  }
};
</script>