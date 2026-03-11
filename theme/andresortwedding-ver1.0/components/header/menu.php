<?php
  $baseUrl;
  if(is_home() || is_front_page()) {
    $baseUrl = home_url() . '/';
  } else {
    $baseUrl = home_url() . '/';
  }
?>
<ul class="nav__menu flex-bt">
  <li class="nav__menu-itm">
    <p class="ttl flex ft-blk-2" data-nav="nav-1">
      <span>リゾートウェディングの基本情報</span>
    </p>
    <div id="nav-1" class="submenu">
      <ul class="submenu__ls info flex-bt">
        <li class="submenu__ls-ttl flex pc">
          <p>リゾートウェディングの基本情報</p>
          <a href="/"><span>TOPを見る</span></a>
        </li>
        <li class="submenu__ls-itm">
          <a class="bg-wht-1" href="<?php echo esc_url(home_url());?>">
            <p class="itm__name flex ft-blu-1 ico-1"><span>リゾート挙式の<br class="sp"/>魅力</span></p>
          </a>
        </li>
        <li class="submenu__ls-itm">
          <a class="bg-wht-1" href="<?php echo esc_url(home_url());?>">
            <p class="itm__name flex ft-grn-1 ico-2"><span>人気エリアと<br class="sp"/>選び方</span></p>
          </a>
        </li>
        <li class="submenu__ls-itm">
          <a class="bg-wht-1" href="<?php echo esc_url(home_url());?>">
            <p class="itm__name flex ft-org-1 ico-3"><span>お金の<br class="sp"/>ハナシ</span></p>
          </a>
        </li>
        <li class="submenu__ls-itm">
          <a class="bg-wht-1" href="<?php echo esc_url(home_url());?>">
            <p class="itm__name flex ft-pnk-1 ico-4"><span>チャペル・式場の<br class="sp"/>選び方</span></p>
          </a>
        </li>
        <li class="submenu__ls-itm">
          <a class="bg-wht-1" href="<?php echo esc_url(home_url());?>">
            <p class="itm__name flex ft-blu-1 ico-5"><span>ゲストの<br class="sp"/>招待</span></p>
          </a>
        </li>
        <li class="submenu__ls-itm">
          <a class="bg-wht-1" href="<?php echo esc_url(home_url());?>">
            <p class="itm__name flex ft-grn-1 ico-6"><span>事前準備と<br class="sp"/>ダンドリ</span></p>
          </a>
        </li>
        <li class="submenu__ls-itm">
          <a class="bg-wht-1" href="<?php echo esc_url(home_url());?>">
            <p class="itm__name flex ft-org-1 ico-7"><span>挙式前日の<br class="sp"/>過ごし方</span></p>
          </a>
        </li>
        <li class="submenu__ls-itm">
          <a class="bg-wht-1" href="<?php echo esc_url(home_url());?>">
            <p class="itm__name flex ft-pnk-1 ico-8"><span>挙式当日の<br class="sp"/>スケジュール</span></p>
          </a>
        </li>
      </ul>
    </div>
  </li>
  <li class="nav__menu-itm">
    <p class="ttl flex ft-blk-2" data-nav="nav-2">
      <span>エリア別ガイド</span>
    </p>
    <div id="nav-2" class="submenu">
      <ul class="submenu__ls area flex-bt">
        <li class="submenu__ls-ttl flex pc">
          <p>エリア別ガイド</p>
          <a href="/"><span>TOPを見る</span></a>
        </li>
        <li class="submenu__ls-area">
          <a class="hawaii" href="<?php echo esc_url(home_url());?>">
            <p class="jp ft-wht-1">ハワイ</p>
            <p class="en ft-wht-1">Hawaii</p>
          </a>
        </li>
        <li class="submenu__ls-area">
          <a class="guam" href="<?php echo esc_url(home_url());?>">
            <p class="jp ft-wht-1">グアム</p>
            <p class="en ft-wht-1">Guam</p>
          </a>
        </li>
        <li class="submenu__ls-area">
          <a class="okinawa" href="<?php echo esc_url(home_url());?>">
            <p class="jp ft-wht-1">沖縄</p>
            <p class="en ft-wht-1">Okinawa</p>
          </a>
        </li>
      </ul>
    </div>
  </li>
  <li class="nav__menu-itm">
    <a class="ttl flex ft-blk-2" href="<?php echo $baseUrl?>#voice">
      <span>先輩カップルの声</span>
    </a>
  </li>
  <li class="nav__menu-itm">
    <a class="ttl flex ft-blk-2" href="<?php echo $baseUrl?>#faq">
      <span>よくある質問</span>
    </a>
  </li>
  <li class="nav__menu-itm">
    <a class="ttl flex ft-blk-2" href="/">
      <span>お役立ち記事</span>
    </a>
  </li>
</ul>
