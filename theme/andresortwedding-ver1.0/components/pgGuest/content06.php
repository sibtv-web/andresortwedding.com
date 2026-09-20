<?php 
  $data = [
    [
      'title' => '<small>空港からホテルまで導線バッチリで</small><br/>移動もラク',
      'desc' => '送迎付きのプランが多く、チャペルはホテルの敷地内がほとんど。',
      'img' => 'img_content_06-01.jpg',
      'point' => '当日はお部屋から会場まで移動するだけなので、高齢のゲストや小さな子どもにもやさしい環境です。',
    ],
    [
      'title' => '<small>滞在型だからゲストも</small><br/>旅行気分で楽しめる',
      'desc' => '数時間でお開きになる近場ウェディングと違い、リゾートウェディングは数日間の滞在型。',
      'img' => 'img_content_06-02.jpg',
      'point' => '休憩をはさみながら自分のペースで参加できて、挙式の前後はビーチや観光ものんびり楽しめます。',
    ],
    [
      'title' => '<small>ゲストの服装は</small><br/>式場レンタルもOK',
      'desc' => 'ゲストの衣装は式場でレンタルできる場合がほとんどで、事前にサイズを伝えておけば現地で着替えるだけ。',
      'img' => 'img_content_06-03.jpg',
      'point' => '礼服を持っていく負担がなく、リゾートウエディングならかりゆしやアロハシャツで参加するスタイルも人気！',
    ],
    [
      'title' => '<small>気になることは</small><br/>会場がサポート',
      'desc' => '車椅子での移動や子どもの食事、アレルギー対応など、気になることは会場がサポートしてくれます。',
      'img' => 'img_content_06-04.jpg',
      'point' => '事前にゲストや希望をプランナーに伝えるだけでOK！みなさん、安心して当日を迎えることができます。',
    ],
  ];
?>
<section id="pgGuest__content06" class="pgGuest__content06 pgInfo_section">
  <div class="pgGuest_container">
    <div class="pgGuest_head fade-anime" data-fade="fade-up">
			<h2 class="pgGuest_head_ttl cls-grn">
				<img src="<?php echo esc_url(get_theme_file_uri('assets/images/guest/nav_icon_birds.svg')); ?>" alt="アイコン">
				<span>高齢ゲストも子どもも安心！<br class="sp"/>ゲストへの配慮ポイント</span>
			</h2>
      <ul class="pgGuest_head_comment flex fade-anime" data-fade="fade-up-cont">
        <li class="no1">
          <img src="<?php echo esc_url(get_theme_file_uri('assets/images/guest/img_comment_02.png')); ?>" alt="おじいちゃん・おばあちゃんは大丈夫？">
        </li>
        <li class="no2">
          <img src="<?php echo esc_url(get_theme_file_uri('assets/images/guest/img_comment_01.png')); ?>" alt="子ども連れでも平気？">
        </li>
      </ul>
      <p class="pgGuest_head_bubble flex fade-anime" data-fade="fade-up">
        <span>そんな心配はほとんど不要！</span>
			</p>
		</div>
    <div class="pgGuest__content06-main">
      <ul class="flex list fade-anime" data-fade="fade-up-cont">
        <?php foreach ($data as $item) :?>
        <li class="list__itm">
          <div class="list__itm-img">
            <img src="<?php echo esc_url(get_theme_file_uri('assets/images/guest/'. $item["img"])); ?>" alt="<?php echo $item["title"]; ?>">
          </div>
          <div class="list__itm-ttl">
            <h3><?php echo $item["title"]; ?></h3>
          </div>
          <p class="list__itm-desc">
            <?php echo $item["desc"]; ?>
          </p>
          <div class="list__itm-point bg-beg-3">
            <p><?php echo $item["point"]; ?></p>
          </div>
        </li>
        <?php endforeach;?>
      </ul>
		</div>
  </div>
</section>