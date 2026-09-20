<?php 
  $data = [
    'topImg' => [
      'img_content07_01.jpg',
      'img_content07_02.jpg',
    ],
    'bottomImg' => [
      'img_content07_03.jpg',
      'img_content07_04.jpg',
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
        <h2 class="jp">ゲスト招待の不安を解消して、<br />大切な人と最幸の思い出を</h2>
      </div>
    </div>
  </div>
  <div class="pgGuest__content07-contents flex fade-anime" data-fade="fade-up">
    <ul class="img__ls img__ls-front flex">
      <?php 
        foreach ($data['topImg'] as $item) :
        $counter++;
      ?>
        <li class="img__ls-item img__ls-item-0<?php echo $counter;?>">
          <img
            src="<?php echo esc_url(get_theme_file_uri('assets/images/guest/') . $item); ?>"
            alt="イメージ <?php echo $counter;?>"
          >
        </li>
      <?php endforeach; ?>
    </ul>
    <p class="summary">
      「遠くまで来てもらうのは申し訳ない」と感じるカップルは多いですが、<br/>
      実際は旅行を兼ねた結婚式としてゲストに喜ばれることがほとんど！<br/>
      &nbsp;<br/>
      招待範囲とお金の方針さえ決まれば、あとは会場がしっかりサポートしてくれます。<br/>
      まずはふたりに合うエリア選びから、<br/>
      理想のリゾートウェディングへの一歩を踏み出してみませんか？
    </p>
    <ul class="img__ls img__ls-back flex">
      <?php 
        foreach ($data['bottomImg'] as $item) :
        $counter++;
      ?>
        <li class="img__ls-item img__ls-item-0<?php echo $counter;?>">
          <img
            src="<?php echo esc_url(get_theme_file_uri('assets/images/guest/') . $item); ?>"
            alt="イメージ <?php echo $counter;?>"
          >
        </li>
      <?php endforeach; ?>
    </ul>
  </div>
</section>