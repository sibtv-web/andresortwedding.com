<?php
$data = [
  'topImg' => [
    'img_close_01.png',
    'img_close_02.png',
  ],
  'bottomImg' => [
    'img_close_03.png',
    'img_close_04.png',
  ],
];
$counter = 0;
?>
<section id="pgGuest__content07" class="pgGuest__content07 pginfo_section bg-beg-4">
  <div class="pgGuest_container">
    <div class="fade-anime" data-fade="fade-up">
      <p class="sub-title flex"><span>さいごに</span></p>
      <div class="pgGuest__content07-title section__title">
        <div class="en">
          <img src="<?php echo esc_url(get_theme_file_uri('assets/images/font/ft_ttl_resort-wedding.svg')); ?>" alt="Resort Wedding">
        </div>
        <h2 class="jp ft-md">憧れのロケーションで<br />ふたりらしい写真を残そう</h2>
      </div>
    </div>
  </div>
  <div class="pgGuest__content07-contents flex fade-anime" data-fade="fade-up">
    <ul class="img__ls img__ls-front flex">
      <?php
      foreach ($data['topImg'] as $item) :
        $counter++;
      ?>
        <li class="img__ls-item img__ls-item-0<?php echo $counter; ?>">
          <img
            src="<?php echo esc_url(get_theme_file_uri('assets/images/gallery/') . $item); ?>"
            alt="イメージ <?php echo $counter; ?>">
        </li>
      <?php endforeach; ?>
    </ul>
    <p class="summary">
      青い海や街並み、ガーデン、大自然など、<br />
      リゾートフォトだからこそ叶うロケーションはさまざま。<br />
      &nbsp;<br />
      ハワイ・グアム・沖縄、それぞれの魅力を知って、<br />ふたりが「ここで撮りたい」と思える場所を見つけてみてください。<br>
      &nbsp;<br />
      撮影時期やプラン内容もしっかり確認しながら、<br>
      何度も見返したくなるような、特別な一枚を残してみませんか？
    </p>
    <ul class="img__ls img__ls-back flex">
      <?php
      foreach ($data['bottomImg'] as $item) :
        $counter++;
      ?>
        <li class="img__ls-item img__ls-item-0<?php echo $counter; ?>">
          <img
            src="<?php echo esc_url(get_theme_file_uri('assets/images/gallery/') . $item); ?>"
            alt="イメージ <?php echo $counter; ?>">
        </li>
      <?php endforeach; ?>
    </ul>
  </div>
</section>