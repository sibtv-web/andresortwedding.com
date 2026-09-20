<?php 
  $list01 = [
    [
      'title' => '全額負担',
      'desc' => '旅費・宿泊費をふたりが負担。<br class="sp"/>ご祝儀は通常どおり',
    ],
    [
      'title' => '一部負担',
      'desc' => '宿泊費のみ、お車代として一部など',
    ],
    [
      'title' => 'ゲスト負担',
      'desc' => 'ゲストが少ないぶ旅費はゲスト持ち。<br class="sp"/>ご祝儀を辞退するケースが主流',
    ],
  ];
  $list02 = [
    [
      'desc' => '<span>旅費と宿泊費はふたりで負担します。</span>お祝いの気持ちだけで、旅行気分で気軽に参加してもらえたらうれしいです。',
    ],
    [
      'desc' => '<span>宿泊先はこちらで手配させてもらう予定ですので、交通費のご負担をお願いできたら嬉しいです。</span><br/>当日会えるのを楽しみにしています。',
    ],
    [
      'desc' => '<span>交通費と宿泊費をご負担いただくため、ご祝儀は辞退させていただきます。</span><br/>旅行を兼ねてぜひ楽しんでいってください。',
    ],
  ];

?>

<section id="pgGuest__content04" class="pgGuest__content04 pgInfo_section">
  <div class="pgGuest_container">
    <div class="pgGuest_head fade-anime" data-fade="fade-up">
			<h2 class="pgGuest_head_ttl cls-pnk">
				<img src="<?php echo esc_url(get_theme_file_uri('assets/images/guest/nav_icon_money.svg')); ?>" alt="アイコン">
				<span>気になるお金の話！<br class="sp"/>ゲストの旅費は誰が負担する？</span>
			</h2>
			<p class="pgGuest_head_txt">
        リゾートウェディングで一番の悩みどころが、ゲストの旅費・宿泊費。実は、誰が負担するかに決まったルールはありません。<br/>
        &nbsp;<br/>
        負担のパターンとご祝儀の考え方、気まずくならない伝え方まで紹介します！
			</p>
		</div>
    <div class="pgGuest__content04-main">
      <div class="block fade-anime" data-fade="fade-up">
        <div class="block__title">
          <h3 class="flex"><span>負担パターンは3つ！<br class="sp"/>相場とあわせてチェック</span></h3>
        </div>
        <p class="block__lead">ゲストの旅費負担は、全額負担・一部負担・ゲスト負担の3パターンが基本です。</p>
        <div class="block__column flex">
          <div class="img">
            <picture>
                <source
                  media="(min-width: 750px)"
                  srcset="<?php echo esc_url(get_theme_file_uri('assets/images/guest/img_content_04-01-pc.jpg')); ?>"
                >
                <img src="<?php echo esc_url(get_theme_file_uri('assets/images/guest/img_content_04-01-sp.jpg')); ?>" alt="イメージ">
              </picture>
          </div>
          <div class="txt">
            <h4>ご祝儀の受け取りについて<span>（一例）</span></h4>
            <ul>
              <?php foreach ($list01 as $item) :?>
                <li class="flex">
                  <span class="head"><?php echo $item["title"]; ?></span>
                  <span class="content"><?php echo $item["desc"]; ?></span>
                </li>
              <?php endforeach;?>
            </ul>
          </div>
        </div>
        <p class="block__lead">旅費のひとりあたりの目安は以下の金額です。予算とゲストの顔ぶれに合わせて選びましょう。</p>
        <div class="block__table">
          <div class="notes__scroll sp"><p class="flex"><span>SCROLL</span></p></div>
          <div class="table">
            <table class="table__container">
              <thead>
                <tr>
                  <th class="bg-beg-2"></th>
                  <th>
                    <p class="inner bg-pnk-2 ft-wht-1">ハワイ</p>
                  </th>
                  <th>
                    <p class="inner bg-pnk-2 ft-wht-1">グアム</p>
                  </th>
                  <th>
                    <p class="inner bg-pnk-2 ft-wht-1">沖縄</p>
                  </th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th class="bg-beg-2"><small>旅費・宿泊費の<br class="sp"/>目安<br/>（1人あたり）</small></th>
                  <td>約20万〜35万円</td>
                  <td>約10万〜20万円</td>
                  <td>約5万〜10万円</td>
                </tr>
              </tbody>
            </table>
          </div>
          <div class="notes__txt">
            <p>※時期や滞在日数により変動します。</p>
          </div>
        </div>
      </div>
      <div class="block fade-anime" data-fade="fade-up">
        <div class="block__title">
          <h3 class="flex"><span>気まずくならない伝え方＆<br class="sp"/>メッセージ例</span></h3>
        </div>
        <p class="block__lead">お金の話はあいまいにせず、招待の打診と同じタイミングで方針をはっきり伝えるのが正解です。</p>
        <ul class="block__ls">
          <?php foreach ($list02 as $item) :?>
            <li class="flex bg-wht-2">
              <div class="img">
                <img src="<?php echo esc_url(get_theme_file_uri('assets/images/guest/ico_message.svg')); ?>" alt="アイコン">
              </div>
              <p class="txt"><?php echo $item["desc"]; ?></p>
            </li>
          <?php endforeach;?>
        </ul>
        <p class="block__lead">招待状にも同じ内容を明記して、誠実に伝えるのがポイント。迷ったときはプランナーに相談してみてください。</p>
      </div>
		</div>
  </div>
</section>