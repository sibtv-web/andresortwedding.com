<?php
  $data = [
    [
      'id' => 'A',
      'title' => 'ゲストに関わること',
      'list' => [
        '報告・招待ゲストの決定',
        '招待状の作成・発送<span>（少人数のためコンパクト）</span>',
        '乾杯の発声やスピーチの依頼',
        'ゲスト衣装の検討・確定',
        '席次の検討＆式場に提出',
        '旅行手配（新郎新婦で旅費を負担する場合）',
        'ゲストのアレルギー確認',
      ],
      'point' => [
        [
          'main' => 'ゲスト衣装もまとめて手配が可能！<br/>リゾートらしい衣装をお揃いを準備して、ゲストも安心',
          'notes' => '',
          'result' => '',
        ],
        [
          'main' => 'リゾートウェディングの準備の特徴は“ホテル・航空券の手配”',
          'notes' => '',
          'result' => 'ゲストの旅行手配も挙式と合わせて依頼ができる会社も◎',
        ],
      ],
    ],
    [
      'id' => 'B',
      'title' => '衣装・美容に関わること',
      'list' => [
        'ドレス・タキシードの試着・決定',
        'アクセサリーの試着・決定',
        'ヘア・ネイルサロンの予約',
        'エステサロンの予約',
        'シェービングの予約',
        'ヘアメイクリハーサルの実施',
        '衣装の最終フィッティング',
      ],
      'point' => [
        [
          'main' => 'リゾートに映える衣装を日本にいる間に確認できる会社も多い',
          'notes' => '※リゾートまで衣装を自分で運ぶ必要があるか、同じものが現地に用意されているかは会社により異なるため事前に確認！',
          'result' => '日本で試着したものと同じ衣装を現地に用意し、手ぶら移動が叶う会場も！',
        ],
      ],
    ],
    [
      'id' => 'C',
      'title' => 'アイテム決め',
      'list' => [
        'ブーケ・ブートニア',
        'ウェルカムボードのデザイン',
        'リングピロー',
        '席札・席次表・メニュー表',
        'お料理の内容',
        'ウェディングケーキ',
        'ギフトの内容',
        'フォトスポット',
        'ムービースポット',
      ],
      'point' => [
        [
          'main' => 'イチから構想を練って、伝えて、確認して、当日手配をする必要は一切なし！',
          'notes' => '',
          'result' => '',
        ],
        [
          'main' => '自然が彩る素敵な空間が用意されているので、<br class="pc"/>好きなアイテムをカタログから選ぶだけでOK',
          'notes' => '',
          'result' => '',
        ],
      ],
    ],
    [
      'id' => 'D',
      'title' => '演出に関わること',
      'list' => [
        '演出の検討・確定',
        'BGMの検討・確定',
      ],
      'point' => [
        [
          'main' => 'リゾートウェディングはすべて会場のスタッフが担ってくれるから、<br class="pc"/>司会者の手配やすり合わせは不要',
          'notes' => '',
          'result' => '',
        ],
        [
          'main' => 'おふたりのやりたいことを書き込んでプランナーに依頼するだけでOK',
          'notes' => '',
          'result' => '',
        ],
      ],
    ],
  ];
?>
<section id="pgPreparation_list" class="pgPreparation__list pginfo_section">
	<div class="pgPreparation_container">
		<div class="pgPreparation_head fade-anime" data-fade="fade-up">
			<h2 class="pgPreparation_head_ttl cls-blu">
				<img src="<?php echo esc_url(get_theme_file_uri('assets/images/preparation/nav_icon_note.svg')); ?>" alt="アイコン">
				<span>結婚式準備のやることリスト</span>
			</h2>
			<p class="pgPreparation_head_txt pc">
        結婚式の準備は、大きく分けると4つのカテゴリーに整理できます。<br/>
        &nbsp;<br/>
        一般的な結婚式の準備は、席次やゲスト対応、衣装・美容、装花や引出物などのアイテム決め、演出……など、<br/>一つひとつをおふたりで決めて、業者への発注から最終チェックまで行う必要があります。<br/>
        &nbsp;<br/>
        一方、リゾートウェディングは装飾・演出・料理・打合せがパッケージプランに集約されるため、おふたりが個別に動くものはかなり少ないのが特徴です。<br/>
        &nbsp;<br/>
        下記のチェックリストを使って、楽しく準備を進めましょう！
			</p>
			<p class="pgPreparation_head_txt sp">
        結婚式の準備は、4つのカテゴリーに分けられます。<br/>
        &nbsp;<br/>
        一般的な結婚式では、席次やゲスト対応、衣装、装花、引出物、演出などをおふたりで決め、業者への発注まで進めます。<br/>
        &nbsp;<br/>
        リゾートウェディングは、それらの多くがパッケージプランにまとまるため、個別に動くことが少ないのが特徴です。<br/>
        &nbsp;<br/>
        下記のチェックリストで準備を進めましょう。
			</p>
		</div>
    <ul class="pgPreparation__list-main flex fade-anime" data-fade="fade-up-cont">
      <?php
        $count = 0;
        foreach ($data as $item) :
        $count++;
      ?>
      <li class="item <?php echo 'item-'.$count;?>">
        <div class="ttl__container">
          <h3 class="ttl__container-main bg-blu-6 flex"><?php echo $item['title'];?></h3>
        </div>
        <div class="flex notes">
          <ul class="notes__list">
            <?php
              $input = 0;
              foreach ($item['list'] as $notes) :
              $input++;
            ?>
            <li class="notes__list-item flex">
              <input id="chk-<?php echo $item['id'];?>-<?php echo $input;?>" type="checkbox" name="chk-<?php echo $item['id'];?>-<?php echo $input;?>" value="">
              <label for="chk-<?php echo $item['id'];?>-<?php echo $input;?>">
                <p class="flex">
                  <span class="input"></span>                
                  <span><?php echo $notes;?></span>
                </p>
              </label>
            </li>
            <?php endforeach; ?>
          </ul>
          <div class="image">
            <picture>
              <source
                media="(min-width: 750px)"
                srcset="<?php echo esc_url(get_theme_file_uri('assets/images/preparation/img_todo_0'.$count.'_pc.jpg')); ?>"
              >
              <img
                src="<?php echo esc_url(get_theme_file_uri('assets/images/preparation/img_todo_0'.$count.'_sp.jpg')); ?>"
                alt="画像 <?php echo $count ;?>"
              >
            </picture>
          </div>
        </div>
        <div class="point bg-beg-3">
          <ul class="point__list">
            <?php
              foreach ($item["point"] as $point) :
            ?>
            <li class="point__list-item">
              <?php if( $point["main"] && $point["main"] != '' ) : ?>
                <p class="main"><span><?php echo $point["main"];?></span></p>
              <?php endif; ?>
              <?php if( $point["result"] && $point["result"] != '' ) : ?>
                <p class="result"><span><?php echo $point["result"];?></span></p>
              <?php endif; ?>
              <?php if( $point["notes"] && $point["notes"] != '' ) : ?>
                <p class="notes"><span><?php echo $point["notes"];?></span></p>
              <?php endif; ?>
            </li>
            <?php endforeach; ?>
          </ul>
        </div>
      </li>
      <?php endforeach; ?>
    </ul>
    <div class="pgPreparation__about-summary fade-anime" data-fade="fade-up">
      <div class="summary__wrap bg-beg-3">
        <h4 class="bbl ft-blu-2 flex"><span>リゾートウェディングは<br class="sp"/>基本すべて会場にお任せができます</span></h4>
        <p>
        カタログから好みのアイテムを選ぶだけですべてが完結！<br/>
        その分、滞在地での過ごし方や、エステやネイルなどの美容に集中できます。<br/>
        加えて、面倒になりがちな旅行手配はゲスト分もまとめて会場に依頼することで、さらに気軽に当日を迎えられます。
        </p>
      </div>
    </div>
	</div>
</section>