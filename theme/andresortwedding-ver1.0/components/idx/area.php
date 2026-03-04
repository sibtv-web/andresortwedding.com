<section id="area" class="area">
  <div class="area__inner section__inner">
    <div class="area__title section__title fade-anime" data-fade="fade-up">
      <p class="en ft-blu-1">Area guides</p>
      <h2 class="jp">エリア別ガイド</h2>
    </div>
    <?php 
      $data = [
        [
          'catch' => 'ハネムーンも大人気！<br/>誰もが憧れる海外リゾート',
          'name-en' => 'Hawaii',
          'name-jp' => 'ハワイ',
          'tag' => ['#世界中が憧れる王道リゾート','#観光もグルメも最強','#家族旅行にも大人気','#ロケーションの選択肢が多い'],
          'link' => 'hawaii'
        ],
        [
          'catch' => 'フライトわずか約3.5時間、時差も+1時間！<br/>海外なのに招待しやすい気軽なリゾート',
          'name-en' => 'Guam',
          'name-jp' => 'グアム',
          'tag' => ['#ゲストに負担がかからない','#アットホームなリゾート','#英語苦手でも安心','#気軽に非日常的な特別感を味わえる'],
          'link' => 'guam'
        ],
        [
          'catch' => '近くて安心！<br/>みんなで楽しめる国内リゾートの王道',
          'name-en' => 'Okinawa',
          'name-jp' => '沖縄',
          'tag'   => ['#国内で叶う非日常','#家族みんなで行きやすい','#和とリゾートの良いとこ取り','#移動がスムーズで安心'],
          'link' => 'okinawa'
        ],
      ];
      $count = 0;
      foreach ($data as $item):
      $count++;
    ?>
    <div class="area__block" class="<?php echo $item['link'];?>">
      <div class="area__block-inner flex">
        <a href="<?php echo esc_url(home_url('/'.$item['link']));?>">
          <div class="cl fade-anime" data-fade="fade-op">
            <div>
              <div class="cl__map">
                <img
                  src="<?php echo esc_url(get_theme_file_uri('assets/images/idx/area/img_map_0'.$count.'.png')); ?>"
                  alt="<?php echo $item['name-jp'];?> Map画像"
                >
              </div>
              <p class="cl__catch ft-wht-1"><?php echo $item['catch'];?></p>
              <h3 class="cl__title ft-wht-1">
                <span class="en"><?php echo $item['name-en'];?></span>
                <span class="jp"><?php echo $item['name-jp'];?></span>
              </h3>
              <p class="cl__tag ft-wht-1">
                <?php 
                  $count2 = 1;
                  foreach ($item['tag'] as $tag):
                ?>
                  <span><?php echo $tag;?></span>
                  <?php if($count2 == 2) {
                    echo "<br/>";
                  }?>
                <?php
                $count2++;
                  endforeach; 
                ?>
              </p>
              <p class="cl__btn btn__more">
                <span class="ft-wht-1 btn__more-1" href="<?php echo esc_url(home_url());?>"><span>くわしく見る</span></ｓ>
              </p>
            </div>
          </div>
        </a>
      </div>
    </div>
    <?php endforeach; ?>
    <?php get_template_part('components/idx/voice'); ?>
  </div>
</section>