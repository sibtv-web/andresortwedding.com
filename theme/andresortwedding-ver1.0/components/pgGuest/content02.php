<?php 
  $data = [
    [
      'title' => 'ゲスト一人ひとりと<br/>ゆっくり過ごせる',
      'desc' => '<strong>大人数の結婚式では、挨拶まわりに追われてゲストとほとんど話せなかった……という声も。</strong><br/>&nbsp;<br/>少人数なら一人ひとりと近い距離で語り合えて、感謝の気持ちをゆっくり伝えられます。',
      'img' => 'img_content_02-01.jpg',
    ],
    [
      'title' => '家族が当日を<br/>思い切り楽しめる',
      'desc' => '<strong>招待ゲストが限られているからこそ、家族もゲスト気分に浸ることができます。</strong><br/>&nbsp;<br/>家族だからと気を遣い、末席に座り、お酌周りで緊張してしまい、なかなか楽しめない。そんなことがないのが少人数婚の魅力です。',
      'img' => 'img_content_02-02.jpg',
    ],
    [
      'title' => '一人ひとりのおもてなしに<br/>費用をかけられる',
      'desc' => 'ゲストが少ないぶん、<strong>料理やギフトなどひとりあたりのおもてなしの質を高めやすいのも少人数ならでは。</strong><br/>&nbsp;<br/>「来てくれてありがとう」といった感謝の気持ちをしっかりと届けられます。',
      'img' => 'img_content_02-03.jpg',
    ],
  ];
  $counter = 1;
?>
<section id="pgGuest__content02" class="pgGuest__content02 pgInfo_section">
  <div class="pgGuest_container">
    <div class="pgGuest_head fade-anime" data-fade="fade-up">
			<h2 class="pgGuest_head_ttl cls-grn">
				<img src="<?php echo esc_url(get_theme_file_uri('assets/images/guest/nav_icon_chapel.svg')); ?>" alt="アイコン">
				<span>少人数ゲストで行う結婚式の魅力</span>
			</h2>
			<p class="pgGuest_head_txt">
        家族や親しい友人だけを招く少人数の結婚式には、大人数にはない良さがたくさんあります！
			</p>
		</div>
    <div class="pgGuest__content02-main">
      <ul class="flex list fade-anime" data-fade="fade-up-cont">
        <?php foreach ($data as $item) :?>
        <li class="list__itm">
          <p class="list__itm-num ft-grn-1"><span>魅力</span><strong><?php echo sprintf('%02d',$counter); ?></strong></p>
          <div class="list__itm-img">
            <img src="<?php echo esc_url(get_theme_file_uri('assets/images/guest/'. $item["img"])); ?>" alt="<?php echo $item["title"]; ?>">
          </div>
          <div class="list__itm-ttl">
            <h3><?php echo $item["title"]; ?></h3>
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