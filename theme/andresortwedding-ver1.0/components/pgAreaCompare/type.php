<?php
  $data = [
    [
      'en' => 'Hawaii',
      'jp' => 'ハワイ',
      'class' => 'blu-2',
      'catch' => '誰もが憧れる海外リゾートで挙げたいなら',
      'image' => [
        'img_hawaii_01.jpg',
        'img_hawaii_02.jpg',
        'img_hawaii_03.jpg',
        'img_hawaii_04.jpg',
      ],
      'desc' => '青い海だけでなく、街並みや自然、ショッピングまで楽しめるハワイは、特別な海外ウェディングを叶えたいふたりに人気。<br/><span class="sp-inline">&nbsp;<br/></span>ホテルやレストランでも日本語が通じやすいのも魅力のひとつ。挙式だけでなく、滞在そのものが一生の思い出になります。',
      'recommend' => [
        '圧倒的なスケールで非日常感、特別感を満喫したい',
        '挙式だけでなくハネムーンも一緒に楽しみたい',
        '街・自然・海、さまざまなスポットで思い出の写真を残したい',
      ],
    ],
    [
      'en' => 'Guam',
      'jp' => 'グアム',
      'class' => 'grn-1',
      'catch' => '気軽に海外で挙式！<br class="sp"/>でも家族・友人みんなを呼びたいなら',
      'image' => [
        'img_guam_01.jpg',
        'img_guam_02.jpg',
        'img_guam_03.jpg',
        'img_guam_04.jpg',
      ],
      'desc' => '日本から近く、時差もたった+1時間のグアムは、海外挙式のハードルを下げてくれる人気エリアです。<br/><span class="sp-inline">&nbsp;<br/></span>現地のホテルやレストランでも日本語が通じる場面が多く、海外に不慣れなゲストがいても安心！<br/>短期間でも行きやすく、家族や親族も招待しやすいバランスの良さが魅力です。',
      'recommend' => [
        '移動や準備の負担はほぼ無しで、海外ウェディングを楽しみたい',
        '家族や親族をしっかり招待したい',
        'プライベート感たっぷりな空間で自然を独占した滞在を楽しみたい',
      ],
    ],
    [
      'en' => 'Okinawa',
      'jp' => '沖縄',
      'class' => 'pnk-1',
      'catch' => '国内でたくさんのゲストと<br class="sp"/>アットホームに！なら',
      'image' => [
        'img_okinawa_01.jpg',
        'img_okinawa_02.jpg',
        'img_okinawa_03.jpg',
        'img_okinawa_04.jpg',
      ],
      'desc' => '国内リゾートならではの参加しやすさが魅力の沖縄。友人も招待しやすく、旅行気分を楽しみながらリラックスした挙式が叶います。<br/><span class="sp-inline">&nbsp;<br/></span>沖縄ならではのグルメを楽しめたり、離島へ足を伸ばしたりなど、滞在の満足度と費用のバランスを重視したいふたりに人気です。',
      'recommend' => [
        '国内で気軽にリゾートウェディングを叶えたい',
        '友人も含めてゲストを多めに招待したい',
        '費用を抑えつつクオリティは譲りたくない',
      ],
    ],
  ];
  $counter = 1;
?>
<section id="pgAreaCompare_type" class="pgAreaCompare__type pginfo_section bg-beg-4">
	<div class="pgAreaCompare_container">
		<div class="pgAreaCompare_head">
			<h2 class="pgAreaCompare_head_ttl cls-blu fade-anime" data-fade="fade-up">
				<img src="<?php echo esc_url(get_theme_file_uri('assets/images/area/compare/nav_icon_couple.svg')); ?>" alt="アイコン">
				<span>私たちにはどこが合う？<br class="sp">エリアのタイプ別比較</span>
			</h2>
      <ul class="pgAreaCompare_head_comment flex fade-anime" data-fade="fade-up-cont">
        <li class="no1">
          <img src="<?php echo esc_url(get_theme_file_uri('assets/images/area/compare/img_comment_01.png')); ?>" alt="海外感を重視したい！">
        </li>
        <li class="no2">
          <img src="<?php echo esc_url(get_theme_file_uri('assets/images/area/compare/img_comment_02.png')); ?>" alt="ゲストをたくさん呼びたい">
        </li>
        <li class="no3">
          <img src="<?php echo esc_url(get_theme_file_uri('assets/images/area/compare/img_comment_03.png')); ?>" alt="家族で旅行が楽しめるエリアがいい">
        </li>
      </ul>
      <p class="pgAreaCompare_head_txt fade-anime" data-fade="fade-up">
        「リゾートウェディングは高そう」というイメージをお持ちの人は多いでしょう。<br/>
        しかし、実際に数字を見てみると、近場ウェディングよりもリーズナブルに叶えられるケースがほとんどです。
			</p>
		</div>
    <?php foreach ($data as $item) :?>
      <div class="pgAreaCompare__type-block fade-anime" data-fade="fade-up">
        <p class="catch"><?php echo $item["catch"]; ?></p>
        <div class="title ft-<?php echo $item["class"]; ?>"><strong><?php echo $item["en"]; ?></strong><span><?php echo $item["jp"]; ?></span></div>
        <ul class="image flex">
          <?php 
            foreach ($item['image'] as $img) :
            $imgCounter = 1;
          ?>
            <li class="image__item">
              <img src="<?php echo esc_url(get_theme_file_uri('assets/images/area/compare/'. $img)); ?>" alt="イメージ<?php echo $imgCounter; ?>">
            </li>
          <?php
            $imgCounter++;
            endforeach;
          ?>
        </ul>
        <p class="desc"><?php echo $item["desc"]; ?></p>
        <div class="recommend bg-beg-3">
          <p class="recommend__main ft-<?php echo $item["class"]; ?> flex">こんなふたりにおすすめ</p>
          <ul class="recommend__ls">
            <?php foreach ($item['recommend'] as $rec) : ?>
              <li class="recommend__ls-itm <?php echo $item["class"]; ?> flex"><span><?php echo $rec; ?></span></li>
            <?php endforeach;?>
          </ul>
        </div>
      </div>
    <?php
      $counter++;
      endforeach;
    ?>
	</div>
</section>