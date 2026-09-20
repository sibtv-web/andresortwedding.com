<?php
  $data = [
    [
      'sub' => '家族のみ',
      'title' => '少人数でアットホームな挙式に',
      'imgSrc' => 'img_content_03-01.jpg',
      'imgSrcSp' => 'img_content_03-01-sp.jpg',
      'desc' => '<span class="marker">家族のみの結婚式は、親やきょうだいを中心とした約6〜8名で行うスタイルです。</span><br/>
        日程調整がしやすく、費用もコンパクトに収まります。<br/>
        &nbsp;<br/>
        気を使う相手がいないので、両家の顔合わせを兼ねて、家族旅行のように自然体で過ごせるのが魅力。ふたりと家族の時間を何よりたいせつにしたいふたりに向いています。',
    ],
    [
      'sub' => '家族・親族',
      'title' => '両家の絆を深める挙式に',
      'imgSrc' => 'img_content_03-02.jpg',
      'imgSrcSp' => 'img_content_03-02-sp.jpg',
      'desc' => '<span class="marker">きょうだいの家族やいとこ、おじ・おばまで招く場合は、10〜20名ほどの規模に。</span><br/>
        祖父母も含めた三世代で楽しめて、親族へのお披露目もきちんと叶うスタイルです。<br/>
        &nbsp;<br/>
        人数が増えても手配は会場にまとめて依頼できるので、家族旅行と結婚式を一度に叶えられるのも大きな魅力です！',
    ],
    [
      'sub' => '友人まで',
      'title' => '大切な人とも特別な時間を',
      'imgSrc' => 'img_content_03-03.jpg',
      'imgSrcSp' => 'img_content_03-03-sp.jpg',
      'desc' => '<span class="marker">親しい友人まで招いて、20名以上のにぎやかな結婚式も。</span><br/>
      会場によっては約30〜50名規模も叶い、特に沖縄では人気の招待範囲です。<br/>
      &nbsp;<br/>
      参列が難しいゲストがいたり、もっと大人数を招きたい場合には、後日国内で開く1.5次会（改めて開くカジュアルなお披露目パーティ）で、写真や映像とあわせて報告するフォローもおすすめです。',
    ],
  ];
?>
<section id="pgGuest__content03" class="pgGuest__content03 pgInfo_section bg-beg-4">
  <div class="pgGuest_container">
    <div class="pgGuest_head fade-anime" data-fade="fade-up">
			<h2 class="pgGuest_head_ttl cls-org">
				<img src="<?php echo esc_url(get_theme_file_uri('assets/images/guest/nav_icon_bouquet.svg')); ?>" alt="アイコン">
				<span>どこまで呼ぶ？招待範囲の決め方</span>
			</h2>
			<p class="pgGuest_head_txt">
      招待範囲に正解はなく、ふたりだけの貸切挙式という選択肢も。ゲストを招くなら、家族のみ・親族まで・友人までの3パターンが主流です。
			</p>
		</div>
    <div class="pgGuest__content03-contents">
      <?php foreach ($data as $item) : ?>
        <div class="item fade-anime" data-fade="fade-up">
          <div class="item__block flex">
            <div class="sp">
              <h4 class="item__title flex"><span class="sub"><?php echo $item['sub'] ;?></span><span class="main"><?php echo $item['title'] ;?></span></h4>
            </div>
            <div class="item__img">
              <picture>
                <source
                  media="(min-width: 750px)"
                  srcset="<?php echo esc_url(get_theme_file_uri('assets/images/guest/') . $item['imgSrc']); ?>"
                >
                <img src="<?php echo esc_url(get_theme_file_uri('assets/images/guest/') . $item['imgSrcSp']); ?>" alt="<?php echo $item['title'] ;?> イメージ">
              </picture>
            </div>
            <div class="item__txt">
              <div class="pc">
                <h4 class="item__title flex"><span class="sub"><?php echo $item['sub'] ;?></span><span class="main"><?php echo $item['title'] ;?></span></h4>
              </div>
              <p class="desc"><?php echo $item['desc'] ;?></p>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>