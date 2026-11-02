<?php
$data = [
  [
    'title' => '手配会社は相見積もり',
    'desc' => '手配会社を決める際は、2～3社から相見積もりをとるのがおすすめです。<br/>&nbsp;<br/><strong>手配会社によって、基本プランに含まれる内容やオプション、料金は大きく異なります。</strong><br/>&nbsp;<br/>1社だけで判断せず、プラン内容や料金をしっかり比較・検討しましょう。',
    'img' => 'img_about_01.jpg',
  ],
  [
    'title' => '雨天時の対応について確認',
    'desc' => 'リゾートフォトは天候に左右されやすいため、<strong>雨天時の対応や雨天保証の有無を事前に確認しておきましょう。</strong><br/>&nbsp;<br/>また、当日の風の強さによってはヘアメイクが崩れやすくなることもあります。撮影場所や時期に合わせて、事前にヘアメイクについて相談しておくのがおすすめです。',
    'img' => 'img_about_02.jpg',
  ],
  [
    'title' => '衣装用意の方法を確認',
    'desc' => '<strong>衣装は、事前に最寄りの店舗で選び、現地で同じものを用意してもらう場合と、撮影日当日に現地のサロンで選ぶ場合があります。</strong><br/>&nbsp;<br/>どちらを選ぶかによって、現地での準備時間や旅行中の過ごし方も変わるため、事前に確認しておきましょう。<br>自身で手配する場合は、郵送時の発着日や飛行機の重量制限にも注意が必要です。',
    'img' => 'img_about_03.jpg',
  ],
];
$counter = 1;
?>
<section id="about" class="pgGallery_about pgGallery_section bg-beg-4">
  <div class="pgGallery_container">
    <div class="pgGallery_head fade-anime" data-fade="fade-up">
      <div class="pgGallery_head_ttl">
        <img src="<?php echo esc_url(get_theme_file_uri('assets/images/gallery/heading_icon_camera.svg')); ?>" alt="アイコン">
        <h2 class="pgGallery_head_txt">
          後悔しないために<br class="sp">知っておきたい！ <br><span>リゾートフォトのポイント</span>
        </h2>
      </div>
    </div>
    <div class="pgGallery_about-main">
      <ul class="flex list fade-anime" data-fade="fade-up-cont">
        <?php foreach ($data as $item) : ?>
          <li class="list__itm">
            <p class="list__itm-num ft-pnk-1"><span>POINT</span><strong><?php echo sprintf('%02d', $counter); ?></strong></p>
            <div class="list__itm-img">
              <img src="<?php echo esc_url(get_theme_file_uri('assets/images/gallery/' . $item["img"])); ?>" alt="<?php echo $item["title"]; ?>">
            </div>
            <div class="list__itm-ttl">
              <h3 class="">
                <span class="bg__line"><?php echo $item["title"]; ?></span>
              </h3>
            </div>
            <p class="list__itm-desc">
              <?php echo $item["desc"]; ?>
            </p>
          </li>
        <?php
          $counter++;
        endforeach;
        ?>
      </ul>
    </div>
  </div>
</section>