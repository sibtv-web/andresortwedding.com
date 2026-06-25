<?php
  $data_tl = [
    [
      'title' => 'START',
      'link' => '',
      'txt' => 'お申し込み・ご予約'
    ],
    [
      'title' => '約8ヶ月前',
      'link' => 'schedule-1',
      'txt' => '日程調整　航空券＆ホテルの手配'
    ],
    [
      'title' => '約6ヶ月前',
      'link' => 'schedule-2',
      'txt' => 'ドレス試着'
    ],
    [
      'title' => '約6〜4ヶ月前',
      'link' => 'schedule-2',
      'txt' => 'ゲストの招待'
    ],
    [
      'title' => '約4ヶ月前',
      'link' => 'schedule-2',
      'txt' => '1回目の打ち合わせ　ドレス決定'
    ],
    [
      'title' => '約2ヶ月前',
      'link' => 'schedule-3',
      'txt' => '2回目の打ち合わせ<br/>タキシード決定＆アクセサリーなど小物決定'
    ],
    [
      'title' => '約1ヶ月前',
      'link' => 'schedule-4',
      'txt' => '最終打ち合わせ<br/>最終フィッティング'
    ],
    [
      'title' => '2〜1日前',
      'link' => 'schedule-4',
      'txt' => 'いよいよ出発！'
    ],
  ];
  $data_ls = [
    [
      'tag' => '約8ヶ月前',
      'title' => '結婚式準備のスタート！式場を決定しよう',
      'desc' => '準備の最初のステップは、式場決定とお申し込み。お申し込みのタイミングで内金を支払い、すぐに日程調整と航空券・ホテルの手配へ進みます。<br/>8ヶ月前から動き出すと、人気シーズンや希望の日取りも押さえやすいので安心！',
      'price__ls' => [
        '申込時の内金（5〜10万円）',
        'おふたり分の航空券・宿泊代（10万〜60万円程度）',
      ],
      'price__note' => '最初のまとまった支払いが発生するタイミングなので、予算を準備しておくと安心です。',
    ],
    [
      'tag' => '約6〜4ヶ月前',
      'title' => 'ドレスの試着や大切な人への招待を進めよう',
      'desc' => '約6ヶ月前からドレスの試着がスタートし、約4ヶ月前にドレスを決定するのが一般的なスケジュールです。同じ時期に、ゲストへの招待も進めていきます。<br/>リゾートウェディングは旅行も兼ねるので、ゲストには日程と費用負担の方針を早めに伝えるのがポイントです！',
      'price__ls' => [
        '招待状の印刷費',
        'インナー類など一部衣装費前払い（式場による）',
        'パスポートの取得・更新費用（必要に応じて）',
      ],
      'price__note' => '',
    ],
    [
      'tag' => '約2ヶ月前',
      'title' => '細かい内容を調整！不安はここで解消しておこう',
      'desc' => '2回目の打合せでは、新郎のタキシードや、アクセサリー・ブーケなどの小物を決めていきます。挙式当日の細かい進行もこのタイミングで詰めるので、おふたりのこだわりを伝える絶好のチャンスです！',
      'price__ls' => [],
      'price__note' => '',
    ],
    [
      'tag' => '約1ヶ月前〜直前',
      'title' => 'いよいよカウントダウン！リゾートへ出発',
      'desc' => '挙式の約1ヶ月前には、最終打ち合わせと最終フィッティングを。最終人数の確定や当日の進行確認、衣裳のサイズ調整など、最後の仕上げを行います。<br/>挙式代金とお申込みアイテムの支払いもこのタイミングが一般的。そして2〜1日前にはいよいよ現地へ出発し、前日のリハーサルを経て挙式を迎えます。',
      'price__ls' => [
        '基本挙式料の残金',
        '衣装（20万〜40万円）',
      ],
      'price__note' => '別途、お申込みアイテムがある場合はそのオプション費用も支払いの対象となります。',
    ],
  ];
?>
<section id="pgPreparation_schedule" class="pgPreparation__schedule pginfo_section bg-beg-4">
	<div class="pgPreparation_container">
		<div class="pgPreparation_head fade-anime" data-fade="fade-up">
			<h2 class="pgPreparation_head_ttl cls-grn">
				<img src="<?php echo esc_url(get_theme_file_uri('assets/images/preparation/nav_icon_calendar.svg')); ?>" alt="アイコン">
				<span>リゾートウェディングの<br class="sp">準備スケジュール</span>
			</h2>
			<p class="pgPreparation_head_txt">
        リゾートウェディングの準備期間は、約8ヶ月が目安。打ち合わせはオンラインでも可能で2〜3回ほどで、<br>
        近場ウェディングの5〜7回と比べるとかなりコンパクトに進められます。
			</p>
		</div>
    <div class="fade-anime" data-fade="fade-up">
      <ul class="pgPreparation__schedule-tl">
        <?php
          $count = 0;
          foreach ($data_tl as $item) :
          $count++;
        ?>
        <li class="item flex">
          <?php if( $item['link'] != '' ) : ?>
            <p class="ttl">
              <a class="link" href="#<?php echo $item['link']; ?>"><span><?php echo $item['title']; ?></span></a>
            </p>
          <?php else : ?>
            <p class="ttl">
              <span class="link"><span><?php echo $item['title']; ?></span></span>
            </p>
          <?php endif; ?>
          <span class="dots bg-grn-1"></span>
          <p class="txt"><?php echo $item['txt']; ?></p>
        </li>
        <?php endforeach; ?>
      </ul>
      <p class="pgPreparation__schedule-notes">※上記はあくまで、一般的なスケジュールです。</p>
    </div>
    <div class="pgPreparation__schedule-summary fade-anime" data-fade="fade-up">
      <div class="summary__wrap bg-beg-3">
        <h4 class="bbl ft-grn-1 flex">
          <span>沖縄など国内リゾートなら、<br class="sp"/><span class="mk">最短1ヶ月前</span>からでも<br class="sp"/>挙式が可能なこともあります</span>
        </h4>
      </div>
    </div>
    <div class="pgPreparation__schedule-cnt fade-anime" data-fade="fade-up-cont">
      <?php
        $count = 0;
        foreach ($data_ls as $item) :
        $count++;
      ?>
        <div id="schedule-<?php echo $count;?>" class="cnt__item flex">
          <div class="context">
            <div class="ttl flex">
              <p class="ttl__tag ttl__tag-0<?php echo $count;?>"><span><?php echo $item['tag'];?></span></p>
              <p class="ttl__main"><?php echo $item['title'];?></p>
            </div>
            <p class="desc"><?php echo $item['desc'];?></p>
            <?php if( count($item['price__ls']) > 0 || $item['price__note'] != '' ) :?>
            <div class="price bg-wht-1">
              <p class="price__ttl">このフェーズで必要な費用</p>
              <ul class="price__ls">
                <?php foreach ($item['price__ls'] as $item_price) : ?>
                  <li class="price__ls-item flex"><span><?php echo $item_price;?></span></li>
                <?php endforeach; ?>
              </ul>
              <?php if( $item['price__note'] != '' ) :?>
                <p class="price__notes"><?php echo $item['price__note'];?></p>
              <?php endif; ?>
            </div>
            <?php endif; ?>
          </div>
          <div class="image">
            <picture>
              <source
                media="(min-width: 750px)"
                srcset="<?php echo esc_url(get_theme_file_uri('assets/images/preparation/img_schedule_0'.$count.'_pc.jpg')); ?>"
              >
              <img
                src="<?php echo esc_url(get_theme_file_uri('assets/images/preparation/img_schedule_0'.$count.'_sp.jpg')); ?>"
                alt="画像 <?php echo $count ;?>"
              >
            </picture>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
	</div>
</section>