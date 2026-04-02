<section id="charm" class="charm">
  <div class="charm__inner section__inner">
    <div class="charm__title section__title fade-anime" data-fade="fade-up">
      <p class="en ft-blu-1">Charm</p>
      <h2 class="jp">リゾートウェディングの魅力</h2>
    </div>
    <ul class="charm__list flex fade-anime" data-fade="slide-up-cont-01">
      <?php 
        for ($i = 1; $i <= 3; $i++) :
        $text = [
          "写真にも映える。<br/><strong>最高のロケーション</strong>",
          "おふたりも大人数も。<br/><strong>大切な人とだけ叶う式</strong>",
          "たった3時間じゃない。<br/><strong>人生最高の3日間に</strong>",
        ];
      ?>
        <li class="charm__list-itm <?php echo "no".$i;?>" style="background-image:url(<?php echo esc_url(get_theme_file_uri('assets/images/idx/charm/img_charm_0'.$i.'.jpg')); ?>);">
          <div class="cl">
            <div class="cl__inner">
              <p class="cl-no">No<span><?php echo "0".$i;?></span></p>
              <div class="cl-img">
                <img
                  src="<?php echo esc_url(get_theme_file_uri('assets/images/idx/charm/img_charm_0'.$i.'.jpg')); ?>"
                  alt="魅力<?php echo $i;?> イメージ画像"
                >
              </div>
              <p class="cl-txt ft-wht-1"><?php echo $text[$i - 1];?></p>
            </div>
          </div>
          <span class="mask bg-beg-2"></span>
        </li>
      <?php endfor; ?>
    </ul> 
    <div class="charm__block">
      <div class="charm__block-ttl fade-anime" data-fade="fade-up">
        <img
          src="<?php echo esc_url(get_theme_file_uri('assets/images/idx/charm/img_title_01.png')); ?>"
          alt="近場ウェディングとどこが違う？"
        >
      </div>
      <ul class="charm__block-ls flex-bt">
        <?php 
          for ($i = 1; $i <= 3; $i++) :
          $main = [
            "平均<strong>190</strong>万円",
            "全部まとめて<strong>完結</strong>",
            "<strong>ふたり</strong>でもてなす",
          ];
          $sub = [
            "平均<strong>330</strong>万円",
            "手配・準備が<strong>複雑</strong>",
            "<strong>両家</strong>が主催",
          ];
          $title = [
            "結婚式・ハネムーン費用が<br/><strong>リーズナブル！</strong>",
            "手配や準備にかかる<br/><strong>負担が少ない！</strong>",
            "ルールやマナーにとらわれない<br/><strong>ふたりらしさ</strong>",
          ];
        ?>
        <li class="itm fade-anime" data-fade="z-in">
          <div class="flex">
            <div class="itm__1 flex bg-blu-4">
              <p class="ft-wht-1 bg-blu-4 ttl">リゾートウェディング</p>
              <p class="ft-wht-1 bg-blu-4 main"><?php echo $main[$i - 1];?></p>
              <div class="img">
                <img
                  src="<?php echo esc_url(get_theme_file_uri('assets/images/idx/charm/img_comparison_0'.$i.'_a.jpg')); ?>"
                  alt="イメージ画像<?php echo $i;?>"
                >
              </div>
              <span class="mask bg-beg-2"></span>
            </div>
            <div class="itm__2 bg-brn-2">
              <p class="ft-wht-1 bg-brn-2 ttl">近場ウェディング</p>
              <p class="ft-wht-1 bg-brn-2 sub"><?php echo $sub[$i - 1];?></p>
              <div class="img">
                <img
                  src="<?php echo esc_url(get_theme_file_uri('assets/images/idx/charm/img_comparison_0'.$i.'_b.jpg')); ?>"
                  alt="イメージ画像<?php echo $i;?>"
                >
              </div>
              <span class="mask bg-beg-2"></span>
            </div>
          </div>
          <h3 class="itm__catch"><?php echo $title[$i - 1];?></h3>
        </li>
        <?php endfor; ?>
      </ul>
    </div> 
  </div>
</section>