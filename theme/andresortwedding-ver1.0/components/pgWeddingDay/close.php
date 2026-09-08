<?php 
  $data = [
    'topImg' => [
      'img_close_01.jpg',
      'img_close_02.jpg',
    ],
    'bottomImg' => [
      'img_close_03.jpg',
      'img_close_04.jpg',
    ],
  ];
  $counter = 0;
?>
<section id="pgWeddingDay_close" class="pgWeddingDay__close pginfo_section bg-wht-1">
  <div class="pgWeddingDay_container">
    <div class="fade-anime" data-fade="fade-up">
      <p class="sub-title flex"><span>さいごに</span></p>
      <div class="pgWeddingDay__close-title section__title">
        <div class="en">
          <img src="<?php echo esc_url(get_theme_file_uri('assets/images/font/ft_ttl_resort-wedding.svg')); ?>" alt="Resort Wedding">
        </div>
        <h2 class="jp">人生最高の1日を、<br class="sp"/>ふたりらしく過ごそう</h2>
      </div>
    </div>
  </div>
  <div class="pgWeddingDay__close-contents flex fade-anime" data-fade="fade-up">
    <ul class="img__ls img__ls-front flex">
      <?php 
        foreach ($data['topImg'] as $item) :
        $counter++;
      ?>
        <li class="img__ls-item img__ls-item-0<?php echo $counter;?>">
          <img
            src="<?php echo esc_url(get_theme_file_uri('assets/images/weddingDay/') . $item); ?>"
            alt="イメージ <?php echo $counter;?>"
          >
        </li>
      <?php endforeach; ?>
    </ul>
    <p class="summary">
      リゾートウェディングの挙式当日は、<br/>
      朝の支度から夜のディナーまで、まる1日かけてゆったりと過ごせるのが最大の魅力。<br/>
      <span class="sp-inline">&nbsp;<br/></span>
      慌ただしくお開きになってしまうのではなく、<br class="pc"/>
      たいせつな人たちとの時間を一つひとつ味わいながら、心に残る1日を過ごせます。<br/>
      &nbsp;<br/>
      当日の過ごし方がイメージできたら、次はエリア選びや準備のステップへ。<br/>
      ふたりで当日の過ごし方を話し合いながら、理想のリゾートウェディングを叶えてみませんか？
    </p>
    <ul class="img__ls img__ls-back flex">
      <?php 
        foreach ($data['bottomImg'] as $item) :
        $counter++;
      ?>
        <li class="img__ls-item img__ls-item-0<?php echo $counter;?>">
          <img
            src="<?php echo esc_url(get_theme_file_uri('assets/images/weddingDay/') . $item); ?>"
            alt="イメージ <?php echo $counter;?>"
          >
        </li>
      <?php endforeach; ?>
    </ul>
  </div>
</section>