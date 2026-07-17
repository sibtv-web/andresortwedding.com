<?php
  $data = [
    [
      'catch' => 'ハワイアン料理や街歩き・ショッピングを楽しめる！',
      'en' => 'Hawaii',
      'jp' => 'ハワイ',
      'class' => 'blu-2',
      'day' => [
        [
          'imgSrc' => 'img_hawai_day1.jpg',
          'title' => '到着後はワイキキ散策と<br/>サンセットディナーへ',
          'desc' => 'チェックイン後はワイキキビーチ周辺を散策。<br/>夕方は海沿いのレストランで、サンセットとハワイアングルメを楽しめます。',
        ],
        [
          'imgSrc' => 'img_hawai_day2.jpg',
          'title' => '挙式当日！青い海に囲まれた<br/>特別なセレモニー',
          'desc' => 'ホテルで支度を済ませ、チャペルやビーチで挙式とフォト撮影。<br/>夜は家族や友人とのディナーで思い出を振り返る1日に。',
        ],
        [
          'imgSrc' => 'img_hawai_day3.jpg',
          'title' => '人気観光スポットや<br/>大自然を満喫',
          'desc' => '少し足を伸ばしてノースショアやハレイワへ。<br/>キッチンカーのグルメや街並みの散策で、ワイキキとは違う雰囲気を楽しめます。',
        ],
        [
          'imgSrc' => 'img_hawai_day1.jpg',
          'title' => 'ショッピングや街歩きを<br/>楽しみながら帰国準備',
          'desc' => '午前はダイヤモンドヘッドでハイキング、午後はアラモアナセンターで買い物！<br/>帰国直前までリゾートを満喫できます。',
        ],
      ],
      'gourmet' => [
        'img_hawaii_gourmet_01.jpg',
        'img_hawaii_gourmet_02.jpg',
        'img_hawaii_gourmet_03.jpg',
      ],
      'culture' => [
        'img_hawaii_culture_01.jpg',
        'img_hawaii_culture_02.jpg',
        'img_hawaii_culture_03.jpg',
      ],
    ],
    [
      'catch' => 'チャモロ料理と<br class="sp"/>マリンアクティビティを堪能',
      'en' => 'Guam',
      'jp' => 'グアム',
      'class' => 'grn-1',
      'day' => [
        [
          'imgSrc' => 'img_guam_01.jpg',
          'title' => '到着後すぐに<br/>ビーチリゾートを満喫',
          'desc' => '日本からたったの3.5時間で到着！<br/>初日からビーチやプール、夜はディナーショーも楽しめます。',
        ],
        [
          'imgSrc' => 'img_guam_02.jpg',
          'title' => '挙式当日！開放感あふれる<br/>ビーチウェディング',
          'desc' => '青い海と空に囲まれた挙式をした後は、サンセットを眺めながら、家族との時間も楽しめます。',
        ],
        [
          'imgSrc' => 'img_guam_03.jpg',
          'title' => 'マリンアクティビティや<br/>ショッピングへ',
          'desc' => 'シュノーケリングやイルカウォッチングを満喫！<br/>ジャングルツアーなど大自然を感じられる体験も。',
        ],
        [
          'imgSrc' => 'img_guam_04.jpg',
          'title' => 'ホテルステイを<br/>楽しみながら帰国',
          'desc' => 'マイクロネシアモールなどで最後の買い物を！<br/>ホテルやビーチでリゾートを満喫してから帰国へ。',
        ],
      ],
      'gourmet' => [
        'img_guam_gourmet_01.jpg',
        'img_guam_gourmet_02.jpg',
        'img_guam_gourmet_03.jpg',
      ],
      'culture' => [
        'img_guam_culture_01.jpg',
        'img_guam_culture_02.jpg',
        'img_guam_culture_03.jpg',
      ],
    ],
    [
      'catch' => '透き通る海や<br/>地域ならではの伝統・文化も',
      'en' => 'Okinawa',
      'jp' => '沖縄',
      'class' => 'pnk-1',
      'day' => [
        [
          'imgSrc' => 'img_okinawa_day1.jpg',
          'title' => 'ドライブがてら<br/>沖縄グルメを満喫',
          'desc' => '到着後は海沿いをドライブ！<br/>沖縄グルメを味わいながら、ゆったりした島時間を感じられます。',
        ],
        [
          'imgSrc' => 'img_okinawa_day2.jpg',
          'title' => '挙式当日！ゲストとの距離が近い<br/>温かな時間',
          'desc' => 'チャペルでの挙式後はビーチ撮影やパーティへ！<br/>家族や友人とアットホームに過ごせるのも魅力。',
        ],
        [
          'imgSrc' => 'img_okinawa_day3.jpg',
          'title' => 'フライト時間まで<br/>民芸体験やお買い物を満喫',
          'desc' => 'やちむん体験や、琉球ガラス体験で思い出の作品作りを。<br/>フライト時間まで国際通りでお買い物を楽しめます。',
        ],
      ],
      'gourmet' => [
        'img_okinawa_gourmet_01.jpg',
        'img_okinawa_gourmet_02.jpg',
        'img_okinawa_gourmet_03.jpg',
      ],
      'culture' => [
        'img_okinawa_culture_01.jpg',
        'img_okinawa_culture_02.jpg',
        'img_okinawa_culture_03.jpg',
      ],
    ],
  ];
?>
<section id="pgAreaCompare_spend" class="pgAreaCompare__spend pginfo_section bg-beg-4">
	<div class="pgAreaCompare_container">
		<div class="pgAreaCompare_head fade-anime" data-fade="fade-up">
			<h2 class="pgAreaCompare_head_ttl cls-org">
				<img src="<?php echo esc_url(get_theme_file_uri('assets/images/area/compare/nav_icon_cutlery.svg')); ?>" alt="アイコン">
				<span>挙式後も楽しみが続く！滞在中の過ごし方比較</span>
			</h2>
		</div>
    <?php foreach ($data as $item) :?>
      <div class="pgAreaCompare__spend-block fade-anime" data-fade="fade-up">
        <p class="catch"><?php echo $item["catch"]; ?></p>
        <div class="title ft-<?php echo $item["class"]; ?>"><strong><?php echo $item["en"]; ?></strong><span><?php echo $item["jp"]; ?></span></div>
        <ul class="day flex">
          <?php 
            foreach ($item['day'] as $day) :
            $dayCounter = 1;
          ?>
            <li class="day__item">
              <p class="day__item-num">Day<?php echo $dayCounter; ?></p>
              <div class="day__item-img">
                <img src="<?php echo esc_url(get_theme_file_uri('assets/images/area/compare/'. $day["imgSrc"])); ?>" alt="イメージ<?php echo $dayCounter; ?>">
              </div>
              <p class="day__itm-ttl"><?php echo $day["title"]; ?></p>
              <p class="day__item-desc"><?php echo $day["desc"]; ?></p>
            </li>
          <?php
            $dayCounter++;
            endforeach;
          ?>
        </ul>
        <div class="inner bg-beg-3">
          <div class="inner__gourmet">
            <p class="main ft-<?php echo $item["class"]; ?> flex">こんなグルメが楽しめる</p>
            <ul class="ls">
              <?php foreach ($item['gourmet'] as $gourmet) : ?>
                <li class="ls-itm">
                  <img src="<?php echo esc_url(get_theme_file_uri('assets/images/area/compare/'. $gourmet)); ?>" alt="グルメイメージ">
                </li>
              <?php endforeach;?>
            </ul>
          </div>
          <div class="inner__culture">
            <p class="main ft-<?php echo $item["class"]; ?> flex">こんなグルメが楽しめる</p>
            <ul class="ls">
              <?php foreach ($item['culture'] as $culture) : ?>
                <li class="ls-itm">
                  <img src="<?php echo esc_url(get_theme_file_uri('assets/images/area/compare/'. $culture)); ?>" alt="カルチャーイメージ">
                </li>
              <?php endforeach;?>
            </ul>
          </div>
        </div>
      </div>
    <?php
      endforeach;
    ?>
	</div>
</section>