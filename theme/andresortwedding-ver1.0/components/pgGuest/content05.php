<?php 
  $data = [
    [
      'title' => '打診のベストタイミングは<br/>6〜4ヶ月前',
      'desc' => 'ゲストへの打診は、挙式の6〜4ヶ月前が目安です。<br/>リゾートウェディングは旅行を兼ねるため、休暇の調整やパスポートの準備が必要になることも。',
      'img' => 'img_content_05-01.jpg',
      'point' => '<p>正式な招待状の前に、電話やメッセージで早めに伝えておくこと！</p><p>早いほど予定を立てやすく、遠方のゲストも参加しやすくなります。</p>',
    ],
    [
      'title' => '最初に伝えるのは<br/>「日程・場所・費用」',
      'desc' => '<strong>最初の打診で伝えるべきは、日程・場所・費用負担です。</strong>参加の判断に必要な情報を先に伝えることで、「費用がわからなくて返事できない......」というモヤモヤを防げます。',
      'img' => 'img_content_05-02.jpg',
      'point' => '<p>滞在日数の目安も添えると休暇の調整もスムーズ！</p><p>詳細は招待状で改めて案内すればOKです。</p>',
    ],
    [
      'title' => '招待状も旅行手配も<br/>会場にお任せでラクラク',
      'desc' => 'ゲスト対応の実務は、会場やウェディング会社にまとめてお任せできるのがリゾートウェディングの魅力です。',
      'img' => 'img_content_05-03.jpg',
      'point' => '<p>招待状の作成から、ゲストの航空券・ホテルの手配まで依頼OK！</p><p>手配をまとめることで料金がお得になる場合もあり、ふたりの準備の負担もぐっと減ります。</p>',
    ],
  ];
?>
<section id="pgGuest__content05" class="pgGuest__content05 pgInfo_section bg-beg-4">
  <div class="pgGuest_container">
    <div class="pgGuest_head fade-anime" data-fade="fade-up">
			<h2 class="pgGuest_head_ttl cls-blu">
				<img src="<?php echo esc_url(get_theme_file_uri('assets/images/guest/nav_icon_letter.svg')); ?>" alt="アイコン">
				<span>いつ・どう伝える？<br class="sp"/>ゲストへの声のかけ方</span>
			</h2>
			<p class="pgGuest_head_txt">
        ゲストに気持ちよく参加してもらうカギは、早めの連絡と情報のわかりやすさ！
			</p>
		</div>
    <div class="pgGuest__content05-main">
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
            <?php echo $item["point"]; ?>
          </div>
        </li>
        <?php endforeach;?>
      </ul>
		</div>
  </div>
</section>