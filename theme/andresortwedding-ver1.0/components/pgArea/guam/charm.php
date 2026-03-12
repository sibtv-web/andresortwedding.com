<section id="charm" class="charm pgarea_charm">
  <div class="charm__inner section__inner">
    <div class="charm__title section__title fade-anime" data-fade="fade-up">
      <p class="en ft-blu-1">Charm</p>
      <h2 class="jp">グアムでのウェディングの魅力</h2>
    </div>
    <ul class="charm__list flex fade-anime" data-fade="fade-up-cont">
      <?php
        for ($i = 1; $i <= 3; $i++) :
        $text = [
          "海沿いのチャペルで眺める<br/><strong>絶景オーシャンビュー</strong>",
          "日本から約3.5時間と近く<br/><strong>ゲストを招待しやすい</strong>",
          "一年中泳げるほどに暖かく<br/><strong>時期を選ばず楽しめる</strong>",
        ];
        $subtext = [
          "グアムのチャペルは、ほとんどが海沿いに建っています。祭壇の向こうに広がる青い海を眺めながら、感動的なセレモニーが叶います。",
          "日本から直行便で約3.5時間。時差もわずか1時間なので、体への負担が少なく、ご年配のゲストや小さなお子様連れのご家族も安心して招待できます。",
          "年間平均気温は約26〜27℃で、一年を通して海やプールを楽しめます。シュノーケリングやジェットスキーなど、マリンアクティビティも充実！",
        ];
      ?>
        <li class="charm__list-itm <?php echo "no".$i;?>" style="background-image:url(<?php echo esc_url(get_theme_file_uri('assets/images/area/guam/img_charm_0'.$i.'.jpg')); ?>);">
          <div class="cl">
            <p class="cl-no">No<span><?php echo "0".$i;?></span></p>
            <div class="cl-img">
              <img
                src="<?php echo esc_url(get_theme_file_uri('assets/images/area/guam/img_charm_0'.$i.'.jpg')); ?>"
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