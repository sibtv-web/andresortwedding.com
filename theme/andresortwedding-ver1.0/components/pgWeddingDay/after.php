<?php
  $data = [
    [
      'time' => '12:30~14:00',
      'imgSrcSp' => 'img_after_sp_01.jpg',
      'imgSrcPc' => 'img_after_pc_01.jpg',
      'title' => 'アフタータイム＆フォトタイムで<br class="sp"/>思い出を撮影',
      'txt' => 'ビーチやガーデンで、ふたりだけのショットはもちろん、家族や友人を交えた撮影も思いのままに残しましょう！'
    ],
    [
      'time' => '14:00~16:00',
      'imgSrcSp' => 'img_after_sp_02.jpg',
      'imgSrcPc' => 'img_after_pc_02.jpg',
      'title' => '料理を囲んで<br/>アットホームなパーティ',
      'txt' => 'かしこまった進行に追われることなく、まるで親しい人たちとの食事会のような、温かくリラックスした時間が続きます。'
    ],
    [
      'time' => '18:00~',
      'imgSrcSp' => 'img_after_sp_03.jpg',
      'imgSrcPc' => 'img_after_pc_03.jpg',
      'title' => '余韻を楽しむ<br/>リラックスのひととき',
      'txt' => 'パーティのあとは、沈みゆく夕日を眺めながらのリラックスタイム。一日の感動を振り返りながら、ゲストとのんびり過ごせます。'
    ],
  ];
?>
<section id="pgWeddingDay_after" class="pgWeddingDay__after pginfo_section">
	<div class="pgWeddingDay_container">
		<div class="pgWeddingDay_head fade-anime" data-fade="fade-up">
			<h2 class="pgWeddingDay_head_ttl cls-org">
				<img src="<?php echo esc_url(get_theme_file_uri('assets/images/weddingDay/nav_icon_cake.svg')); ?>" alt="アイコン">
				<span class="sp-inline">挙式後〜パーティ<br/><span class="ft-sm">大切な人とゆっくり過ごす時間</span></span>
				<span class="pc-inline">挙式後〜パーティ｜大切な人とゆっくり過ごす時間</span>
			</h2>
			<p class="pgWeddingDay_head_txt">
        挙式を終えてからも、リゾートウェディングの1日はまだまだ続きます。
			</p>
		</div>
    <ul class="pgWeddingDay__after-ls flex fade-anime" data-fade="fade-up-cont">
      <?php foreach ($data as $item) : ?>
      <li class="item">
        <p class="item__time ft-org-1"><?php echo $item['time'] ;?></p>
        <div class="item__img">
          <picture>
            <source media="(min-width: 750px)" srcset="<?php echo esc_url(get_theme_file_uri('assets/images/weddingDay/') . $item['imgSrcPc']); ?>">
            <img
              src="<?php echo esc_url(get_theme_file_uri('assets/images/weddingDay/') . $item['imgSrcSp']); ?>"
              alt="挙式後〜パーティ イメージ"
            >
          </picture>
        </div>
        <p class="item__title"><?php echo $item['title'] ;?></p>
        <p class="item__txt"><?php echo $item['txt'] ;?></p>
      </li>
      <?php endforeach; ?>
    </ul>
	</div>
</section>