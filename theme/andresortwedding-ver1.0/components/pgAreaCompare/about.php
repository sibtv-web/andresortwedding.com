<?php 
  $data = [
    [
      'subtitle' => '海外のチャペルも日系が多く',
      'title' => '日本語が通じるので安心！',
      'desc' => 'ハワイやグアムなら日本人スタッフ常駐のチャペルも多く、打ち合わせから当日までずっと日本語でOK！<br/>海外が初めての人でも安心です。',
      'img' => 'about_img_01.jpg',
    ],
    [
      'subtitle' => '高齢のゲストや小さな子どもも',
      'title' => '安心して参列できる',
      'desc' => 'リゾートは移動が大変なイメージがありますが、<strong>空港から式場までの導線が整っているので移動も安心◎</strong><br/>&nbsp;<br/>家族旅行を兼ねてゆっくり過ごせるのがポイントです。',
      'img' => 'about_img_02.jpg',
    ],
    [
      'subtitle' => '海外挙式の費用も日本決済だから',
      'title' => '為替の影響もほとんどなし',
      'desc' => '<strong>挙式料や宿泊費もウェディング会社が日本で事前に手配&決済！</strong><br/>&nbsp;<br/>為替の影響を受けず、費用の見通しを立てやすいのが魅力です。',
      'img' => 'about_img_03.jpg',
    ],
  ];
  $counter = 1;
?>
<section id="pgAreaCompare_about" class="pgAreaCompare__about pgAreaCompare_section bg-beg-4">
	<div class="pgAreaCompare_container">
		<div class="pgAreaCompare_head fade-anime" data-fade="fade-up">
      <p class="pgAreaCompare_head_txt mt-0">
        リゾートウェディングで人気なハワイ・グアム・沖縄。<br/>
        それぞれに異なる魅力があり、どこを選ぶかで結婚式や旅行の過ごし方も変わります。        
			</p>
			<h2 class="pgAreaCompare_head_ttl cls-org">
				<img src="<?php echo esc_url(get_theme_file_uri('assets/images/area/compare/nav_icon_ring.svg')); ?>" alt="アイコン">
				<span>まず知ろう！<br class="sp">リゾートウェディング共通の<br class="sp"><span class="bg__line">安心ポイント</span></span>
			</h2>
			<p class="pgAreaCompare_head_txt">
        3つのエリアを比較する前に、まずはどのエリアにも共通する「リゾートウェディングの安心ポイント」を見ていきましょう。        
			</p>
		</div>
		<div class="pgAreaCompare__about-main">
      <ul class="flex list fade-anime" data-fade="fade-up-cont">
        <?php foreach ($data as $item) :?>
        <li class="list__itm">
          <p class="list__itm-num ft-org-1"><span>POINT</span><strong><?php echo sprintf('%02d',$counter); ?></strong></p>
          <div class="list__itm-img">
            <img src="<?php echo esc_url(get_theme_file_uri('assets/images/area/compare/'. $item["img"])); ?>" alt="<?php echo $item["title"]; ?>">
          </div>
          <div class="list__itm-ttl">
            <h3><span class="ft-sm"><?php echo $item["subtitle"]; ?></span><br/><?php echo $item["title"]; ?></h3>
          </div>
          <p class="list__itm-desc">
            <?php echo $item["desc"]; ?>
          </p>
        </li>
        <?php
          $counter++;
          endforeach;
        ?>
      </ul>
		</div>
	</div>
</section>