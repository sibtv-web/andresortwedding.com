<section id="charm" class="charm pgarea_charm">
  <div class="charm__inner section__inner">
    <div class="charm__title section__title fade-anime" data-fade="fade-up">
      <p class="en ft-blu-1">Charm</p>
      <h2 class="jp">沖縄でのウェディングの魅力</h2>
    </div>
    <ul class="charm__list flex fade-anime" data-fade="fade-up-cont">
      <?php
        for ($i = 1; $i <= 3; $i++) :
        $text = [
          "国内にこだわるなら一択<br/><strong>絶景のビーチリゾート</strong>",
          "沖縄でしか出会えない<br/><strong>自然や景色と多彩な文化</strong>",
          "3日間で楽しめる<br/><strong>たくさんの観光スポット</strong>",
        ];
        $subtext = [
          "エメラルドグリーンの海と白い砂浜が広がる沖縄は、パスポート不要で本格的なリゾート気分を味わえる特別な場所。<br/>ゲストも気軽に参加しやすいのが魅力です。",
          "瀬良垣島の絶景など、沖縄にはさまざまなロケーションが揃っています。<br/>ビーチ、森、サンセットなど、おふたりの好みに合わせて選べます。",
          "美ら海水族館や古宇利島、首里城、やんばるの森など、観光スポットが充実。<br>挙式前後にゲストとの思い出づくりや、ハネムーンも一緒に楽しめます。",
        ];
      ?>
        <li class="charm__list-itm <?php echo "no".$i;?>" style="background-image:url(<?php echo esc_url(get_theme_file_uri('assets/images/area/okinawa/img_charm_0'.$i.'.jpg')); ?>);">
          <div class="cl">
            <p class="cl-no">No<span><?php echo "0".$i;?></span></p>
            <div class="cl-img">
              <img
                src="<?php echo esc_url(get_theme_file_uri('assets/images/area/okinawa/img_charm_0'.$i.'.jpg')); ?>"
                alt="魅力<?php echo $i;?> イメージ画像"
              >
            </div>
            <p class="cl-txt ft-wht-1"><?php echo $text[$i - 1];?></p>
            <p class="cl-subtxt ft-wht-1"><?php echo $subtext[$i - 1];?></p>
          </div>
        </li>
      <?php endfor; ?>
    </ul>
  </div>
</section>