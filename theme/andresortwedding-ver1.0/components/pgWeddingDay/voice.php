<?php
  $data = [
    [
      'title' => '海の見えるチャペルと、<br class="sp"/>挙式後のビーチタイムに感動',
      'left' => [
        'iconSrc' => 'ico_voice_01.svg',
        'class' => 'bg-sp-1 bg-pc-1',
        'text' => 'ガラス張りの窓からビーチが見えるチャペルに<br class="sp"/>感動しました',
      ],
      'right' => [
        'iconSrc' => 'ico_voice_02.svg',
        'class' => 'bg-sp-2 bg-pc-2',
        'text' => '挙式後は目の前の砂浜で、<br/><span class="ft-blu-4">家族や友人とカクテルを飲みながら<br class="sp"/>ラフに過ごせました</span>',
      ],
    ],
    [
      'title' => '日本語が通じるスタッフがいて<br class="sp"/>安心できた',
      'left' => [
        'iconSrc' => 'ico_voice_02.svg',
        'class' => 'bg-sp-3 bg-pc-3',
        'text' => '海外のチャペルでも、<br/><span class="ft-blu-4">日本語が通じるスタッフ</span>が<br class="sp"/>ずっと居てくれて安心でした',
      ],
      'right' => [
        'iconSrc' => 'ico_voice_03.svg',
        'class' => 'bg-sp-4 bg-pc-4',
        'text' => '海外のカメラマンもフレンドリーで、<br/><span class="ft-blu-4">自然な表情で撮影できました</span>',
      ],
    ],
    [
      'title' => '初めての海外挙式でも、<br class="sp"/>不安なく当日を迎えられた',
      'left' => [
        'iconSrc' => 'ico_voice_04.svg',
        'class' => 'bg-sp-3 bg-pc-5',
        'text' => '<span class="ft-blu-4">打ち合わせから持ち物の案内まで、</span><br/>プランナーさんがサポートしてくれたので<br class="sp"/><span class="ft-blu-4">安心でした</span>',
      ],
      'right' => [
        'iconSrc' => 'ico_voice_05.svg',
        'class' => 'bg-sp-4 bg-pc-6',
        'text' => '初めての海外挙式でも、<br class="sp"/>不安なく当日を迎えられました',
      ],
    ],
  ];
?>
<section id="pgWeddingDay_voice" class="pgWeddingDay__voice pginfo_section bg-wht-1">
	<div class="pgWeddingDay_container">
		<div class="pgWeddingDay_head fade-anime" data-fade="fade-up">
			<h2 class="pgWeddingDay_head_ttl cls-pnk">
				<img src="<?php echo esc_url(get_theme_file_uri('assets/images/weddingDay/nav_icon_couple.svg')); ?>" alt="アイコン">
				<span>リゾートウェディングをした<br class="sp"/>先輩カップルの声</span>
			</h2>
		</div>
    <ul class="pgWeddingDay_voice-ls">
      <?php foreach ($data as $item) : ?>
        <li class="item fade-anime" data-fade="fade-up">
          <div class="title__block">
            <h3 class="title flex"><span><?php echo $item['title'] ;?></span></h3>
          </div>
          <div class="contents flex">
            <div class="contents__left flex">
              <div class="img">
                <img
                  src="<?php echo esc_url(get_theme_file_uri('assets/images/weddingDay/') . $item['left']['iconSrc']); ?>"
                  alt="先輩カップル イメージ"
                >
              </div>
              <div class="txt <?php echo $item['left']['class'];?> flex">
                <p><?php echo $item['left']['text'];?></p>
              </div>
            </div>
            <div class="contents__right flex">
              <div class="img">
                <img
                  src="<?php echo esc_url(get_theme_file_uri('assets/images/weddingDay/') . $item['right']['iconSrc']); ?>"
                  alt="先輩カップル イメージ"
                >
              </div>
              <div class="txt <?php echo $item['right']['class'];?> flex">
                <p><?php echo $item['right']['text'] ;?></p>
              </div>
            </div>
          </div>
        </li>
      <?php endforeach; ?>
    </ul>
	</div>
</section>