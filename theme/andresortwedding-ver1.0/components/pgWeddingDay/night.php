<?php
  $data = [
    [
      'ft-color' => 'ft-blu-2',
      'bf-color' => 'blu-2',
      'title-jp' => 'ハワイ',
      'title-en' => 'Hawaii',
      'catch' => '街の夜景とハワイアングルメで華やかに',
      'lead' => '挙式後はワイキキの街へ。<br class="sp"/>海沿いのレストランやライトアップされた街並みで、にぎやかな夜を満喫できます。',
      'link' => 'hawaii',
      'imgSrc' => [
        'img_night_hawaii_01.jpg',
        'img_night_hawaii_02.jpg',
        'img_night_hawaii_03.jpg',
        'img_night_hawaii_04.jpg',
      ],
      'point' => [
        '挙式後も街歩きやグルメを楽しみたい',
        '華やかでにぎやかな雰囲気が好き',
        'ショッピング・お土産探しも一緒に満喫したい',
      ],
    ],
    [
      'ft-color' => 'ft-grn-1',
      'bf-color' => 'grn-1',
      'title-jp' => 'グアム',
      'title-en' => 'Guam',
      'catch' => 'ディナーショーを楽しみながら、<br class="sp"/>開放的なリゾートの夜',
      'lead' => '夜はホテルで開催されるショーを見ながらディナータイム。移動の負担なく、開放的なリゾートの夜を楽しめます。',
      'link' => 'guam',
      'imgSrc' => [
        'img_night_guam_01.jpg',
        'img_night_guam_02.jpg',
        'img_night_guam_03.jpg',
        'img_night_guam_04.jpg',
      ],
      'point' => [
        '移動の負担なくゆったり過ごしたい',
        '家族みんなでアットホームに楽しみたい',
        '華やかなディナーショー・BBQを楽しみたい',
      ],
    ],
    [
      'ft-color' => 'ft-pnk-1',
      'bf-color' => 'pnk-1',
      'title-jp' => '沖縄',
      'title-en' => 'Okinawa',
      'catch' => '沖縄グルメと島時間でリラックス',
      'lead' => '国内リゾートの沖縄は、夜も気軽に外へ出かけやすいのが魅力。言葉や習慣の心配がないぶん、ゲストも気兼ねなくくつろげます。',
      'link' => 'okinawa',
      'imgSrc' => [
        'img_night_okinawa_01.jpg',
        'img_night_okinawa_02.jpg',
        'img_night_okinawa_03.jpg',
        'img_night_okinawa_04.jpg',
      ],
      'point' => [
        '気軽に外食や街歩きも楽しみたい',
        'ゲストにリラックスして過ごしてほしい・のんびりした島時間を味わいたい',
        '沖縄料理・泡盛で楽しいディナータイムを過ごしたい',
      ],
    ],
  ];
?>
<section id="pgWeddingDay_night" class="pgWeddingDay__night pginfo_section">
	<div class="pgWeddingDay_container">
		<div class="pgWeddingDay_head fade-anime" data-fade="fade-up">
			<h2 class="pgWeddingDay_head_ttl cls-blu">
				<img src="<?php echo esc_url(get_theme_file_uri('assets/images/weddingDay/nav_icon_moon.svg')); ?>" alt="アイコン">
				<span>エリアで異なる！<br class="sp"/>夜の過ごし方<br class="sp"/>〜ハワイ・グアム・沖縄〜</span>
			</h2>
			<p class="pgWeddingDay_head_txt">
        挙式当日の夜の楽しみ方は、エリアによって大きく変わります。<br/>
        どんな夜を過ごしたいかをイメージしながら、ぴったりのエリアを選んでみましょう！
			</p>
		</div>
    <?php foreach ($data as $item) : ?>
      <div class="pgWeddingDay__night-contents fade-anime" data-fade="fade-up">
        <div class="block">
          <div class="title flex <?php echo $item["ft-color"]; ?>">
            <strong><?php echo $item["title-en"]; ?></strong><span><?php echo $item["title-jp"]; ?></span>
          </div>
          <p class="catch"><?php echo $item["catch"]; ?></p>
          <p class="lead"><?php echo $item["lead"]; ?></p>
          <ul class="img__ls flex">
            <?php 
              $srcCounter = 1;
              foreach ($item['imgSrc'] as $src) :
            ?>
              <li class="img__ls-item">
                <div class="img">
                  <img src="<?php echo esc_url(get_theme_file_uri('assets/images/weddingDay/'. $src)); ?>" alt="イメージ<?php echo $srcCounter; ?>">
                </div>
              </li>
            <?php
              $srcCounter++;
              endforeach;
            ?>
          </ul>
          <div class="point bg-beg-3">
            <h4 class="point__title flex <?php echo $item["ft-color"]; ?>"><span>こんな過ごし方なら、<?php echo $item["title-jp"]; ?>がおすすめ</span></h4>
            <ul class="point__ls">
              <?php foreach ($item['point'] as $point) : ?>
                <li class="flex <?php echo $item["bf-color"]; ?>"><span><?php echo $point; ?></span></li>
              <?php endforeach;?>
            </ul>
          </div>
          <p class="link pc">
            <a href="<?php echo esc_url(home_url() . '/' . $item["link"]);?>"><span><?php echo $item["title-jp"]; ?>ウェディングの基本情報を見る</span></a>
          </p>
          <p class="link sp">
            <a href="<?php echo esc_url(home_url() . '/' . $item["link"]);?>"><span><?php echo $item["title-jp"]; ?>挙式の基本情報を見る</span></a>
          </p>
        </div>
      </div>
    <?php endforeach; ?>
	</div>
</section>