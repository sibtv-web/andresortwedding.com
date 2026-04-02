<?php
  $baseUrl;
  $infoUrl;
  if(is_home() || is_front_page()) {
    $baseUrl = '';
  } else {
    $baseUrl = home_url() . '/';
  }
  if (is_page('weddinginfo')) {
    $infoUrl = '';
  } else {
    $infoUrl = home_url() . '/weddinginfo/';
  }
?>
<nav class="f__nav">
  <div class="f__nav-container flex">
    <ul class="f__list">
      <li class="f__list-ttl">
        <a href="<?php echo esc_url(home_url());?>/weddinginfo/"><span>リゾートウェディングの基本情報</span></a>
      </li>
      <li class="f__list-itm">
        <a href="<?php echo $infoUrl;?>#pgInfo_charm"><span>リゾート挙式の魅力</span></a>
      </li>
      <li class="f__list-itm">
        <a href="<?php echo $infoUrl;?>#pgInfo_area"><span>人気エリアと選び方</span></a>
      </li>
      <li class="f__list-itm">
        <a href="<?php echo $infoUrl;?>#pgInfo_money"><span>お金のハナシ</span></a>
      </li>
      <li class="f__list-itm">
        <a href="<?php echo $infoUrl;?>#pgInfo_chapel"><span>チャペル・式場の選び方</span></a>
      </li>
      <li class="f__list-itm">
        <a href="<?php echo $infoUrl;?>#pgInfo_guest"><span>ゲストの招待</span></a>
      </li>
      <li class="f__list-itm">
        <a href="<?php echo $infoUrl;?>#pgInfo_preparation"><span>事前準備とダンドリ</span></a>
      </li>
      <li class="f__list-itm">
        <a href="<?php echo $infoUrl;?>#pgInfo_daybefore"><span>挙式前日の過ごし方</span></a>
      </li>
      <li class="f__list-itm">
        <a href="<?php echo $infoUrl;?>#pgInfo_ontheday"><span>挙式当日のスケジュール</span></a>
      </li>
    </ul>
    <ul class="f__list">
      <li class="f__list-ttl">
        <span><span>エリア別ガイド</span></span>
      </li>
      <li class="f__list-itm">
        <a href="<?php echo esc_url(home_url());?>/okinawa/"><span>沖縄</span></a>
      </li>
      <li class="f__list-itm">
        <a href="<?php echo esc_url(home_url());?>/hawaii/"><span>ハワイ</span></a>
      </li>
      <li class="f__list-itm">
        <a href="<?php echo esc_url(home_url());?>/guam/"><span>グアム</span></a>
      </li>
    </ul>
    <ul class="f__list">
      <li class="f__list-ttl">
        <a href="<?php echo esc_url($baseUrl);?>/#voice"><span>先輩カップルの声</span></a>
      </li>
      <li class="f__list-ttl">
        <a href="<?php echo esc_url($baseUrl);?>/#faq"><span>よくある質問</span></a>
      </li>
      <li class="f__list-ttl">
        <a href="<?php echo esc_url(home_url());?>/article/"><span>お役立ち記事</span></a>
      </li>
      <li class="f__list-ttl">
        <a class="exlink" href="https://www.instagram.com/and_resortwedding/" target="_blank"><span>公式Instagram</span></a>
      </li>
    </ul>
  </div>
</nav>