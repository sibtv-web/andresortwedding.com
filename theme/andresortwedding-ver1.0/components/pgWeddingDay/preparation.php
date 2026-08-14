<?php
  $data = [
    [
      'time' => '8:00~10:00',
      'imgSrcSp' => 'img_preparation_sp_01.jpg',
      'imgSrcPc' => 'img_preparation_pc_01.jpg',
      'title' => 'お部屋でゆったり支度<br/>ヘアメイク＆着付け',
      'txt' => 'ホテルのお部屋で支度をスタート。移動の必要がないので、リラックスして過ごせるのが魅力です。'
    ],
    [
      'time' => '10:00~11:00',
      'imgSrcSp' => 'img_preparation_sp_02.jpg',
      'imgSrcPc' => 'img_preparation_pc_02.jpg',
      'title' => 'ファーストミートで<br/>感動の対面',
      'txt' => '着飾った姿を初めて見せあう瞬間は、ふたりの表情が自然とほころぶ感動のシーンです。'
    ],
    [
      'time' => '11:00~11:30',
      'imgSrcSp' => 'img_preparation_sp_03.jpg',
      'imgSrcPc' => 'img_preparation_pc_03.jpg',
      'title' => '入場前の最終準備',
      'txt' => '晴れ姿を家族に披露したり、ベールダウンをしたり、家族との対面や記念撮影のひとときを過ごしましょう。'
    ],
    [
      'time' => '11:30~12:30',
      'imgSrcSp' => 'img_preparation_sp_04.jpg',
      'imgSrcPc' => 'img_preparation_pc_04.jpg',
      'title' => '青い海に囲まれた<br/>挙式・フラワーシャワー',
      'txt' => 'いよいよ挙式の時間。どこまでも続く海と空をバックに、永遠を誓い合います。'
    ],
  ];
?>
<section id="pgWeddingDay_preparation" class="pgWeddingDay__preparation pginfo_section">
	<div class="pgWeddingDay_container">
		<div class="pgWeddingDay_head fade-anime" data-fade="fade-up">
			<h2 class="pgWeddingDay_head_ttl cls-grn">
				<img src="<?php echo esc_url(get_theme_file_uri('assets/images/weddingDay/nav_icon_chapel.svg')); ?>" alt="アイコン">
				<span class="sp-inline">朝〜挙式<br/><span class="ft-sm">支度から誓いの瞬間までの<br/>過ごし方</span></span>
				<span class="pc-inline">朝〜挙式｜支度から誓いの瞬間までの過ごし方</span>
			</h2>
			<p class="pgWeddingDay_head_txt">
        挙式当日の朝は、お部屋での支度からスタート。慌ただしさとは無縁の、リゾートならではのゆったりした時間を楽しめます。
			</p>
		</div>
    <ul class="pgWeddingDay__preparation-ls flex fade-anime" data-fade="fade-up-cont">
      <?php foreach ($data as $item) : ?>
      <li class="item">
        <p class="item__time ft-grn-1"><?php echo $item['time'] ;?></p>
        <div class="item__img">
          <picture>
            <source media="(min-width: 750px)" srcset="<?php echo esc_url(get_theme_file_uri('assets/images/weddingDay/') . $item['imgSrcPc']); ?>">
            <img
              src="<?php echo esc_url(get_theme_file_uri('assets/images/weddingDay/') . $item['imgSrcSp']); ?>"
              alt="<?php echo $item['title'] ;?>"
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