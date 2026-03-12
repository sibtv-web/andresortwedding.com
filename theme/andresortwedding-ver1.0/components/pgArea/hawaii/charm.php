<section id="charm" class="charm pgarea_charm">
  <div class="charm__inner section__inner">
    <div class="charm__title section__title fade-anime" data-fade="fade-up">
      <p class="en ft-blu-1">Charm</p>
      <h2 class="jp">ハワイでのウェディングの魅力</h2>
    </div>
    <ul class="charm__list flex fade-anime" data-fade="fade-up-cont">
      <?php
        for ($i = 1; $i <= 3; $i++) :
        $text = [
          "とにかく憧れのハワイ！<br/><strong>最高の気候とロケーション</strong>",
          "雄大な自然が広がる<br/><strong>アロハ精神息づく自然美</strong>",
          "グルメ・観光・アクティビティ<br/><strong>旅行時間も最高の思い出に</strong>",
        ];
        $subtext = [
          "一年中穏やかな気候に包まれ、目の前には絵画のように美しい海と空が広がるハワイ。<br>誰もが一度は夢見る王道リゾートで、憧れのリゾートウェディングが叶います。",
          "ハワイの式場はオアフ島が中心。ワイキキビーチ、ダイヤモンドヘッドなど名所が揃っています。<br>ダイナミックな大自然と、人々の温かなアロハの心が調和するハワイが、おふたりの一生に一度の日を彩ります。",
          "挙式の前後には、ハワイアングルメや豊富なアクティビティを満喫でき、滞在中のすべてが特別な体験に。<br>ゲストと一緒に観光を楽しめるのもうれしいポイントです！",
        ];
      ?>
        <li class="charm__list-itm <?php echo "no".$i;?>" style="background-image:url(<?php echo esc_url(get_theme_file_uri('assets/images/area/hawaii/img_charm_0'.$i.'.jpg')); ?>);">
          <div class="cl">
            <p class="cl-no">No<span><?php echo "0".$i;?></span></p>
            <div class="cl-img">
              <img
                src="<?php echo esc_url(get_theme_file_uri('assets/images/area/hawaii/img_charm_0'.$i.'.jpg')); ?>"
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