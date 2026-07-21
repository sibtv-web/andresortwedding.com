<?php
  $data = [
    [
      'img-sp' => 'img_result_okinawa.jpg',
      'img-pc' => 'img_area_03.jpg',
      'class' => '#F8ECF4',
      'flight' => '約2.5時間',
      'cost' => '約123万円',
      'avg' => '19人',
      'link' => 'okinawa',
    ],
    [
      'img-sp' => 'img_result_guam.jpg',
      'img-pc' => 'img_area_02.jpg',
      'class' => '#E4F1E9',
      'flight' => '約3.5時間',
      'cost' => '約146万円',
      'avg' => '8.7人',
      'link' => 'guam',
    ],
    [
      'img-sp' => 'img_result_hawaii.jpg',
      'img-pc' => 'img_area_01.jpg',
      'class' => '#D9EBF5',
      'flight' => '約7時間',
      'cost' => '約156万円',
      'avg' => '7.8人',
      'link' => 'hawaii',
    ],
  ];
  $recommend = [
    'gourmet' => [
      'img_hawaii_gourmet_04.jpg',
      'img_guam_gourmet_04.jpg',
      'img_okinawa_gourmet_04.jpg',
    ],
    'culture' => [
      'img_hawaii_spend_01.jpg',
      'img_guam_spend_01.jpg',
      'img_okinawa_spend_01.jpg',
    ],
  ];
?>
<section id="pgAreaCompare_diagnosis" class="pgAreaCompare__diagnosis pginfo_section">
	<div class="pgAreaCompare_container">
		<div class="pgAreaCompare_head fade-anime" data-fade="fade-up">
			<h2 class="pgAreaCompare_head_ttl cls-pnk">
				<img src="<?php echo esc_url(get_theme_file_uri('assets/images/area/compare/nav_icon_window.svg')); ?>" alt="アイコン">
				<span>ふたりにぴったりな<br class="sp"/>リゾートウェディングは？<br class="sp"/>エリア相性診断</span>
			</h2>
      <ul class="pgAreaCompare_head_comment flex fade-anime" data-fade="fade-up-cont">
        <li class="no4">
          <img src="<?php echo esc_url(get_theme_file_uri('assets/images/area/compare/img_comment_04.png')); ?>" alt="ロケーション撮影にこだわりたい">
        </li>
        <li class="no5">
          <img src="<?php echo esc_url(get_theme_file_uri('assets/images/area/compare/img_comment_05.png')); ?>" alt="海外らしさを重視したい">
        </li>
        <li class="no6">
          <img src="<?php echo esc_url(get_theme_file_uri('assets/images/area/compare/img_comment_06.png')); ?>" alt="ゲストとたくさん思い出を作りたい">
        </li>
      </ul>
			<p class="pgAreaCompare_head_txt">
        ふたりが大切にしたいポイントはさまざま。<br/>
        ハワイ・グアム・沖縄、それぞれの魅力や特徴をふまえて、理想のリゾートウェディングを叶えられるエリアをチェックしてみましょう！
			</p>
		</div>
    <ul class="pgAreaCompare__diagnosis-grid fade-anime" data-fade="fade-up">
      <li class="grid__item grid__item-1">
        <div class="inner-1">
          <p class="no">Q1</p>
          <p class="main">費用と特別感、どちらが優先？</p>
          <div class="q flex">
            <p class="q__a flex bg-wht-1"><span class="a ft-wht-1 bg-org-3">A</span><span>できるだけ費用を抑えたい</span></p>
            <p class="q__b flex bg-wht-1"><span class="b ft-wht-1 bg-blu-7">B</span><span>金額より特別感を重視したい</span></p>
          </div>
        </div>
      </li>
      <li class="grid__item grid__item-2">
        <div class="arr__short-a">
          <picture>
            <source
              media="(min-width: 750px)"
              srcset="<?php echo esc_url(get_theme_file_uri('assets/images/area/compare/img_arrow_short_a_pc.png')); ?>"
            >
            <img src="<?php echo esc_url(get_theme_file_uri('assets/images/area/compare/img_arrow_short_a.png')); ?>" alt="A">
          </picture>
        </div>
      </li>
      <li class="grid__item grid__item-3">
        <div class="arr__short-b">
          <picture>
            <source
              media="(min-width: 750px)"
              srcset="<?php echo esc_url(get_theme_file_uri('assets/images/area/compare/img_arrow_short_b_pc.png')); ?>"
            >
            <img src="<?php echo esc_url(get_theme_file_uri('assets/images/area/compare/img_arrow_short_b.png')); ?>" alt="B">
          </picture>
        </div>
      </li>
      <li class="grid__item grid__item-4">
        <div class="inner-2">
          <p class="no">Q2</p>
          <p class="main">ゲストの規模は？</p>
          <div class="q flex">
            <p class="q__a flex bg-wht-1"><span class="a ft-wht-1 bg-org-3">A</span><span>友人も含めて<br class="sp"/>たくさん招待</span></p>
            <p class="q__b flex bg-wht-1"><span class="b ft-wht-1 bg-blu-7">B</span><span>家族や親族を<br class="sp"/>招待</span></p>
          </div>
        </div>
      </li>
      <li class="grid__item grid__item-5">
        <div class="inner-2">
          <p class="no">Q2</p>
          <p class="main">滞在期間は？</p>
          <div class="q flex">
            <p class="q__a flex bg-wht-1"><span class="a ft-wht-1 bg-org-3">A</span><span>コンパクトに<br class="sp"/>滞在</span></p>
            <p class="q__b flex bg-wht-1"><span class="b ft-wht-1 bg-blu-7">B</span><span>じっくり<br class="sp"/>1週間</span></p>
          </div>
        </div>
      </li>
      <li class="grid__item grid__item-6">
        <div class="arr__long-a">
          <picture>
            <source
              media="(min-width: 750px)"
              srcset="<?php echo esc_url(get_theme_file_uri('assets/images/area/compare/img_arrow_long_a_pc.png')); ?>"
            >
            <img src="<?php echo esc_url(get_theme_file_uri('assets/images/area/compare/img_arrow_long_a.png')); ?>" alt="A">
          </picture>
        </div>
      </li>
      <li class="grid__item grid__item-7">
        <div class="arr__short-b">
          <picture>
            <source
              media="(min-width: 750px)"
              srcset="<?php echo esc_url(get_theme_file_uri('assets/images/area/compare/img_arrow_short_b_pc.png')); ?>"
            >
            <img src="<?php echo esc_url(get_theme_file_uri('assets/images/area/compare/img_arrow_short_b.png')); ?>" alt="B">
          </picture>
        </div>
      </li>
      <li class="grid__item grid__item-8">
        <div class="inner-3">
          <p class="no">Q3</p>
          <p class="main">滞在中の過ごし方で<br/>理想的なのは？</p>
          <div class="q flex">
            <p class="q__a flex bg-wht-1"><span class="a ft-wht-1 bg-org-3">A</span><span>海＆文化体験</span></p>
            <p class="q__b flex bg-wht-1"><span class="b ft-wht-1 bg-blu-7">B</span><span>海＆ショッピング</span></p>
          </div>
        </div>
      </li>
      <li class="grid__item grid__item-9 flex">
        <div class="arr__short-a">
          <picture>
            <source
              media="(min-width: 750px)"
              srcset="<?php echo esc_url(get_theme_file_uri('assets/images/area/compare/img_arrow_short_a_pc.png')); ?>"
            >
            <img src="<?php echo esc_url(get_theme_file_uri('assets/images/area/compare/img_arrow_short_a.png')); ?>" alt="A">
          </picture>
        </div>
        <div class="arr__short-b">
          <picture>
            <source
              media="(min-width: 750px)"
              srcset="<?php echo esc_url(get_theme_file_uri('assets/images/area/compare/img_arrow_short_b_pc.png')); ?>"
            >
            <img src="<?php echo esc_url(get_theme_file_uri('assets/images/area/compare/img_arrow_short_b.png')); ?>" alt="B">
          </picture>
        </div>
      </li>
      <li class="grid__item grid__item-10">
        <div class="arr__long-a">
          <picture>
            <source
              media="(min-width: 750px)"
              srcset="<?php echo esc_url(get_theme_file_uri('assets/images/area/compare/img_arrow_long_a_pc.png')); ?>"
            >
            <img src="<?php echo esc_url(get_theme_file_uri('assets/images/area/compare/img_arrow_long_a.png')); ?>" alt="A">
          </picture>
        </div>
      </li>
      <li class="grid__item grid__item-11">
        <div class="arr__long-b">
          <picture>
            <source
              media="(min-width: 750px)"
              srcset="<?php echo esc_url(get_theme_file_uri('assets/images/area/compare/img_arrow_long_b_pc.png')); ?>"
            >
            <img src="<?php echo esc_url(get_theme_file_uri('assets/images/area/compare/img_arrow_long_b.png')); ?>" alt="B">
          </picture>
        </div>
      </li>
    </ul>
    <ul class="pgAreaCompare__diagnosis-result flex fade-anime" data-fade="fade-up-cont">
      <?php foreach ($data as $item) :?>
        <li class="item">
          <div class="img">
            <picture>
              <source media="(min-width: 750px)" srcset="<?php echo esc_url(get_theme_file_uri('assets/images/area/compare/'. $item["img-pc"])); ?>">
              <img src="<?php echo esc_url(get_theme_file_uri('assets/images/area/compare/'. $item["img-sp"])); ?>" alt="イメージ画像">
            </picture>
          </div>
          <div class="item__inner" style="background-color: <?php echo $item["class"]; ?>;">
            <div class="item__inner-f">
              <p class="flex"><span class="main">フライト時間</span><br class="sp"/><span><?php echo $item["flight"]; ?></span></p>
              <p class="flex"><span class="main">平均挙式総額</span><br class="sp"/><span><?php echo $item["cost"]; ?></span></p>
              <p class="flex"><span class="main">平均ゲスト人数</span><br class="sp"/><span><?php echo $item["avg"]; ?></span></p>
            </div>
          </div>
          <p class="link">
            <a href="<?php echo esc_url(home_url($item["link"]));?>"><span>くわしく見る</span></a>
          </p>
        </li>
      <?php endforeach;?>
    </ul>
    <div class="pgAreaCompare__diagnosis-recommend bg-beg-3 flex fade-anime" data-fade="fade-up">
      <div class="inner__gourmet">
        <p class="main flex"><span>おすすめグルメ</span></p>
        <ul class="ls flex">
          <?php foreach ($recommend['gourmet'] as $gourmet) : ?>
            <li class="ls__item">
              <img src="<?php echo esc_url(get_theme_file_uri('assets/images/area/compare/'. $gourmet)); ?>" alt="グルメイメージ">
            </li>
          <?php endforeach;?>
        </ul>
      </div>
      <div class="inner__culture">
        <p class="main flex"><span>おすすめの過ごし方</span></p>
        <ul class="ls flex">
          <?php foreach ($recommend['culture'] as $culture) : ?>
            <li class="ls__item">
              <img src="<?php echo esc_url(get_theme_file_uri('assets/images/area/compare/'. $culture)); ?>" alt="カルチャーイメージ">
            </li>
          <?php endforeach;?>
        </ul>
      </div>
    </div>
    <p class="pgAreaCompare__diagnosis-summary pc fade-anime" data-fade="fade-up">
      ハワイ・グアム・沖縄、それぞれに違った魅力があるリゾートウェディング。<br/>
      費用や移動時間、招待したいゲストの人数など、ふたりが大切にしたいポイントから選べば、理想の結婚式が叶います。<br/>
      &nbsp;<br/>
      まずは気になるエリアを見つけ、具体的な準備を始めて行きましょう！
    </p>
	</div>
</section>