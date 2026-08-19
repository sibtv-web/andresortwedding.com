<?php
  $data = [
    [
      'title' => '前日',
      'titleClass' => 'bg-beg-1',
      'content' => [
        [
          'time' => '前日',
          'timeClass' => 'pc ft-b',
          'imgSrc' => 'img_schedule_01.jpg',
          'desc' => '現地に到着！<br class="sp"/>明日に備えてゆったり休息',
        ],
      ],
    ],
    [
      'title' => '当日朝',
      'titleClass' => 'bg-org-1',
      'content' => [
        [
          'time' => '8:00~10:00',
          'timeClass' => '',
          'imgSrc' => 'img_schedule_02.jpg',
          'desc' => 'ヘアメイク＆着付けから<br class="sp"/>特別な一日がスタート',
        ],
        [
          'time' => '10:00~11:00',
          'timeClass' => '',
          'imgSrc' => 'img_schedule_03.jpg',
          'desc' => 'ファーストミートで<br class="sp"/>初めての対面',
        ],
        [
          'time' => '11:00~11:30',
          'timeClass' => '',
          'imgSrc' => 'img_schedule_04.jpg',
          'desc' => '入場前の最終準備！<br class="sp"/>家族と過ごすひととき',
        ],
      ],
    ],
    [
      'title' => '挙式',
      'titleClass' => 'bg-org-1',
      'content' => [
        [
          'time' => '11:30~12:30',
          'timeClass' => '',
          'imgSrc' => 'img_schedule_05.jpg',
          'desc' => '青い海と空に囲まれた挙式で、永遠の誓いを',
        ],
      ],
    ],
    [
      'title' => '挙式後',
      'titleClass' => 'bg-org-1',
      'content' => [
        [
          'time' => '12:30~14:00',
          'timeClass' => '',
          'imgSrc' => 'img_schedule_06.jpg',
          'desc' => 'アフタータイム＆フォトタイムで<br class="pc"/>ゲストと思い出づくり',
        ],
        [
          'time' => '14:00~16:00',
          'timeClass' => '',
          'imgSrc' => 'img_schedule_07.jpg',
          'desc' => 'みんなで囲む<br class="sp"/>お祝いのパーティタイム',
        ],
        [
          'time' => '18:00~',
          'timeClass' => '',
          'imgSrc' => 'img_schedule_08.jpg',
          'desc' => 'サンセットを眺めて<br class="sp"/>余韻を楽しむひととき',
        ],
      ],
    ],
    [
      'title' => '翌日以降',
      'titleClass' => 'bg-beg-1',
      'content' => [
        [
          'time' => '翌日以降',
          'timeClass' => 'pc ft-b',
          'imgSrc' => 'img_schedule_09.jpg',
          'desc' => 'ハネムーン・家族旅行へ！<br/>思い出の時間はまだまだ続く',
        ],
      ],
    ],
  ];
?>
<section id="pgWeddingDay_schedule" class="pgWeddingDay__schedule pginfo_section bg-beg-4">
	<div class="pgWeddingDay_container">
		<div class="pgWeddingDay_head fade-anime" data-fade="fade-up">
			<p class="pgWeddingDay_head_intro">
        リゾートウェディングの当日は、朝の支度から夜のディナーまで、まる1日かけてゆったり進むのが魅力。<br/>
        朝から夜までの過ごし方を、時間を追ってご紹介します。
      </p>
			<h2 class="pgWeddingDay_head_ttl cls-org">
				<img src="<?php echo esc_url(get_theme_file_uri('assets/images/weddingDay/nav_icon_ring-2.svg')); ?>" alt="アイコン">
				<span>【早見表】<br class="sp">リゾートウェディング挙式<br class="sp">当日の運び</span>
			</h2>
			<p class="pgWeddingDay_head_txt">​​まずは挙式当日の過ごし方を、早見表でざっくりつかんでみましょう。下記はリゾートウェディングでの一般的なタイムラインです。</p>
		</div>
    <div class="pgWeddingDay__schedule-contents fade-anime" data-fade="fade-up">
      <ul class="schedule__ls">
        <?php
          $count = 0;
          foreach ($data as $item) :
          $count++;
        ?>
          <li class="schedule__ls-item">
            <h4 class="title sp"><span class="ft-wht-1 <?php echo $item['titleClass'] ;?>"><?php echo $item['title'] ;?></span></h4>
            <ul class="subList">
              <?php foreach ($item['content'] as $subitem) : ?>
                <li class="subList__item flex">
                  <div class="time">
                    <p class="<?php echo $subitem['timeClass'] ;?>"><?php echo $subitem['time'] ;?></p>
                  </div>
                  <div class="content">
                    <div class="img">
                      <img src="<?php echo esc_url(get_theme_file_uri('assets/images/weddingDay/') . $subitem['imgSrc']); ?>" alt="<?php echo $subitem['time'] ;?> イメージ">
                    </div>
                    <p class="desc">
                      <?php echo $subitem['desc'] ;?>
                    </p>
                  </div>
                </li>
              <?php endforeach; ?>
            </ul>
          </li>
        <?php endforeach; ?>

      </ul>
    </div>
    <div class="fade-anime" data-fade="fade-up">
      <p class="schedule__notes">※上記は一例です。挙式スタイルや会場・演出内容によって時間は変動します。</p>
      <p class="schedule__summary">
        近場ウェディングでは当日が3〜4時間ほどでお開きになるのに対し、リゾートウェディングは滞在中まるごとが結婚式の時間。<br/>
        <span class="sp-inline">&nbsp;</span><br class="sp"/>
        だからこそ、たいせつな人と一つひとつの瞬間をゆっくり味わえるんです！
      </p>
    </div>
	</div>
</section>