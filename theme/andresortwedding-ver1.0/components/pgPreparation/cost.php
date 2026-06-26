<?php
  $data = [
    [
      'ico' => '',
      'title' => '基本挙式料',
      'cost' => '<span class="num">30~40</span>万円',
      'txt' => '申込時に内金、1ヶ月前に残金'
    ],
    [
      'ico' => '',
      'title' => '衣装',
      'cost' => '<span class="num">20~40</span>万円',
      'txt' => '約4ヶ月前〜1ヶ月前に支払い'
    ],
    [
      'ico' => '',
      'title' => '写真・映像撮影',
      'cost' => '<span class="num">20~60</span>万円',
      'txt' => '1ヶ月前に支払い'
    ],
    [
      'ico' => '',
      'title' => 'パーティ・会食費',
      'cost' => '<span class="num">60</span>万円~',
      'txt' => '1ヶ月前に支払い'
    ],
    [
      'ico' => '',
      'title' => 'ブーケ・装花',
      'cost' => '<span class="num">10~20</span>万円',
      'txt' => '1ヶ月前に支払い'
    ],
    [
      'ico' => '',
      'title' => '引き出物・ギフト',
      'cost' => '<span class="num">2~10</span>万円',
      'txt' => '1ヶ月前に支払い'
    ],
    [
      'ico' => '',
      'title' => '招待状・印刷物',
      'cost' => '<span class="num">~3</span>万円程度',
      'txt' => '約4ヶ月前に支払い'
    ],
    [
      'ico' => '',
      'title' => 'おふたりの旅費',
      'cost' => '<span class="num">10~60</span>万円',
      'txt' => '約8ヶ月前に支払い'
    ],
  ];
?>
<section id="pgPreparation_cost" class="pgPreparation__cost pginfo_section">
	<div class="pgPreparation_container">
		<div class="pgPreparation_head fade-anime" data-fade="fade-up">
			<h2 class="pgPreparation_head_ttl cls-org">
				<img src="<?php echo esc_url(get_theme_file_uri('assets/images/preparation/nav_icon_money.svg')); ?>" alt="アイコン">
				<span>費用まとめと支払うタイミング</span>
			</h2>
			<p class="pgPreparation_head_txt">
        リゾートウェディングの総額は、ゲスト人数やプラン、エリアで大きく変わります。<br/>
        <span class="ft-bl">ゲスト20名を招いた場合の一般的な費用イメージ</span>を見ながら、費用の全体像をざっくり把握していきましょう。        
			</p>
		</div>
    <ul class="pgPreparation__cost-ls flex fade-anime" data-fade="fade-up-cont">
      <?php
        $count = 0;
        foreach ($data as $item) :
        $count++;
      ?>
      <li class="item flex bg-beg-4">
        <div class="item__img">
          <img
            src="<?php echo esc_url(get_theme_file_uri('assets/images/preparation/ico_cost_item_0'.$count.'.svg')); ?>"
            alt="アイコン <?php echo $count ;?>"
          >
        </div>
        <p class="item__title"><?php echo $item['title'] ;?></p>
        <p class="item__cost"><?php echo $item['cost'] ;?></p>
        <p class="item__txt"><?php echo $item['txt'] ;?></p>
      </li>
      <?php endforeach; ?>
    </ul>
    <div class="pgPreparation__about-summary fade-anime" data-fade="fade-up">
      <div class="summary__wrap-block bg-beg-5">
        <p class="summary__wrap-name">総額</p>
        <h4 class="summary__wrap-main"><span>155~293</span>万円</h4>
        <p  class="summary__wrap-text">その他　準備しておいた方が良い費用</p>
        <ul class="summary__wrap-ls">
          <li class="item flex"><span>美容費（エステ・シェービング・ネイルなど）：おふたりで5万〜15万円程度</span></li>
          <li class="item flex"><span>現地での滞在費（飲食・観光・お土産など）：おふたりで5万〜20万円程度</span></li>
        </ul>
      </div>
    </div>
	</div>
</section>