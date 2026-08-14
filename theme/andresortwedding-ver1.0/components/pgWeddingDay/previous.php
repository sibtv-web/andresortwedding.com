<?php
  $data = [
    [
      'title' => '現地到着後の過ごし方',
      'imgSrc' => 'img_previous_01.jpg',
      'desc' => '到着日は、空港からホテルへ移動してチェックイン。<br/>
        長時間のフライトで疲れている場合は、まずはお部屋でゆっくり身体を休めましょう。<br/>
        &nbsp;<br/>
        少し休んだら、ホテル周辺を散策したり、軽くお食事を楽しんだり。リゾートならではのゆったりした時間を、さっそく満喫するのがおすすめです。',
    ],
    [
      'title' => '前日の打ち合わせ',
      'imgSrc' => 'img_previous_02.jpg',
      'desc' => '会場によっては、挙式前日にスタッフとの打ち合わせがある場合もあります。<br/>当日のスケジュールや動きを確認しながら、明日の本番をイメージしておきましょう。',
    ],
  ];
?>
<section id="pgWeddingDay_previous" class="pgWeddingDay_previous pgWeddingDay_section bg-wht-1">
	<div class="pgWeddingDay_container">
		<div class="pgWeddingDay_head fade-anime" data-fade="fade-up">
			<h2 class="pgWeddingDay_head_ttl cls-blu">
				<img src="<?php echo esc_url(get_theme_file_uri('assets/images/weddingDay/nav_icon_sunset.svg')); ?>" alt="アイコン">
				<span class="sp-inline">挙式前日の過ごし方<br/><span class="ft-sm">現地に到着、<br/>明日に備えてリラックス</span></span>
				<span class="pc-inline">挙式前日の過ごし方｜現地に到着、明日に備えてリラックス</span>
			</h2>
			<p class="pgWeddingDay_head_txt">
        いよいよ現地に到着！<br class="sp"/>
        挙式前日は、明日に向けてリラックスしながら過ごす大切な時間です。<br/>
        <span class="sp-inline">&nbsp;</span><br class="sp"/>
        リゾートウェディングの会場の多くは、ホテルの敷地内に併設されています。<br class="sp"/>
        そのため、宿泊先のホテルでそのまま準備を進めるのが一般的です。        
			</p>
		</div>
    <div class="pgWeddingDay__previous-contents">
    <?php foreach ($data as $item) : ?>
      <div class="item fade-anime" data-fade="fade-up">
        <h4 class="item__title flex"><span><?php echo $item['title'] ;?></span></h4>
        <div class="item__block flex">
          <div class="img">
            <img src="<?php echo esc_url(get_theme_file_uri('assets/images/weddingDay/') . $item['imgSrc']); ?>" alt="<?php echo $item['title'] ;?> イメージ">
          </div>
          <p class="desc"><?php echo $item['desc'] ;?></p>
        </div>
      </div>
    <?php endforeach; ?>
    </div>
	</div>
</section>