<?php
  $data = [
    [
      'catch' => '街・自然・海すべてが揃う<br class="sp"/>クラシックな雰囲気',
      'title-en' => 'Hawaii',
      'title-jp' => 'ハワイ',
      'lead' => 'ワイキキの街並みやダイアモンドヘッドをはじめとする壮大な自然、美しいビーチなど、幅広いロケーションが魅力。<br/>映画のワンシーンのような王道リゾートフォトを撮影できます。',
      'class' => 'hawaii',
      'color' => 'blu-2',
      'img' => [
        [
          'src' => 'img_hawaii_slide_01.jpg',
          'title' => '街並みでクラシカルフォト',
        ],
        [
          'src' => 'img_hawaii_slide_02.jpg',
          'title' => 'ハワイの大自然のなかで',
        ],
        [
          'src' => 'img_hawaii_slide_03.jpg',
          'title' => '空と海に包まれる絶景チャペル',
        ],
        [
          'src' => 'img_hawaii_slide_04.jpg',
          'title' => 'ダイヤモンドヘッドをバックに',
        ],
        [
          'src' => 'img_hawaii_slide_05.jpg',
          'title' => '祝福のフラワーシャワー',
        ],
        [
          'src' => 'img_hawaii_slide_06.jpg',
          'title' => 'どこまでも続く青い海を背景に',
        ],
      ]
    ],
    [
      'catch' => 'どこまでも青い海と空、<br class="sp"/>トロピカルな開放感',
      'title-en' => 'Guam',
      'title-jp' => 'グアム',
      'lead' => '透明度の高い海と開放感あふれる景色はもちろん、海とチャペルの距離が近い式場が多いのがグアムの魅力。<br/>チャペルの内側からビーチを見渡せる構図でも撮影でき、海をふたりで貸切っているかのような特別感のあるウェディングフォトが残せます。',
      'class' => 'guam',
      'color' => 'grn-1',
      'img' => [
        [
          'src' => 'img_guam_slide_01.jpg',
          'title' => 'ヤシの木が彩るロケーション',
        ],
        [
          'src' => 'img_guam_slide_02.jpg',
          'title' => '南国らしいサンセットフォト',
        ],
        [
          'src' => 'img_guam_slide_03.jpg',
          'title' => '海と空が広がる絶景チャペル',
        ],
        [
          'src' => 'img_guam_slide_04.jpg',
          'title' => '透明な海をバックに',
        ],
        [
          'src' => 'img_guam_slide_05.jpg',
          'title' => 'グアムの街並みを散策しながら',
        ],
        [
          'src' => 'img_guam_slide_06.jpg',
          'title' => 'リゾートホテルをバックに撮影',
        ],
      ]
    ],
    [
      'catch' => '透き通る海や地域ならではの<br class="sp"/>伝統・文化も',
      'title-en' => 'Okinawa',
      'title-jp' => '沖縄',
      'lead' => 'エメラルドグリーンの海はもちろん、沖縄らしい街並みや自然、文化を感じられる撮影も魅力。<br/>おふたりでの撮影はもちろん、家族や友人も一緒に。ナチュラルで温かみのあるウェディングフォトが残せます。',
      'class' => 'okinawa',
      'color' => 'pnk-1',
      'img' => [
        [
          'src' => 'img_okinawa_slide_01.jpg',
          'title' => '沖縄ならではの古民家で',
        ],
        [
          'src' => 'img_okinawa_slide_02.jpg',
          'title' => '透明な海を背景に',
        ],
        [
          'src' => 'img_okinawa_slide_03.jpg',
          'title' => '美しい夕日をバックに',
        ],
        [
          'src' => 'img_okinawa_slide_04.jpg',
          'title' => '海と花々に囲まれて',
        ],
        [
          'src' => 'img_okinawa_slide_05.jpg',
          'title' => '自然を感じるリゾートフォト',
        ],
        [
          'src' => 'img_okinawa_slide_06.jpg',
          'title' => '緑が映えるナチュラルフォト',
        ],
        
      ]
    ],
  ];
?>
<section id="pgAreaCompare_photo" class="pgAreaCompare__photo pginfo_section">
	<div class="pgAreaCompare_container">
		<div class="pgAreaCompare_head fade-anime" data-fade="fade-up">
			<h2 class="pgAreaCompare_head_ttl cls-grn">
				<img src="<?php echo esc_url(get_theme_file_uri('assets/images/area/compare/nav_icon_camera.svg')); ?>" alt="アイコン">
				<span>エリアごとに撮れる写真も違う！<br class="sp"/>フォト比較</span>
			</h2>
			<p class="pgAreaCompare_head_txt">
        同じリゾートウェディングでも、エリアによって写真の雰囲気は大きく変わります。<br class="sp"/>理想の世界観からエリアを選ぶのもおすすめです。
			</p>
		</div>
	</div>
  <?php foreach ($data as $item) :?>
    <div class="pgAreaCompare__photo-gallery fade-anime" data-fade="fade-up">
      <p class="catch"><?php echo $item["catch"]; ?></p>
      <div class="title">
        <h3 class="ft-<?php echo $item["color"]; ?>">
          <strong><?php echo $item["title-en"]; ?></strong>
          <span><?php echo $item["title-jp"]; ?></span>
        </h3>
      </div>
      <p class="lead"><?php echo $item["lead"]; ?></p>
      <div class="splide slider">
        <div class="splide__track slide__track">
          <ul class="splide__list slide__list">
            <?php 
              $counter = 1;
              foreach ($item["img"] as $img) :
            ?>
              <li class="splide__slide slide">
                <div class="slide__image">
                  <img class="<?php echo $item["class"] . '-' . $counter; ?>" src="<?php echo esc_url(get_theme_file_uri('assets/images/area/compare/slider/'. $img["src"])); ?>" alt="<?php echo $img["title"]; ?>">
                </div>
              </li>
            <?php 
              $counter++;
              endforeach;
            ?>
          </ul>
        </div>
      </div>
    </div>
  <?php endforeach;?>
</section>
<div class="modal">
  <div class="modal__container flex">
    <span class="modal__close"></span>
    <div class="modal__contents">
      <div class="modal__image">
        <img src="<?php echo esc_url(get_theme_file_uri('assets/images/area/compare/slider/img_hawaii_slide_01.jpg')); ?>" alt="ポップアップウィンドウ 画像">
      </div>
    </div>
  </div>
</div>