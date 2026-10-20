<section id="faq" class=" pgGallery_faq bg-wht-1">
  <div class="pgGallery_faq__inner">
    <div class="fade-anime" data-fade="fade-up">
      <div class="pgGallery_head_ttl">
        <img src="<?php echo esc_url(get_theme_file_uri('assets/images/gallery/heading_icon_couple.svg')); ?>" alt="アイコン">
        <h2 class="pgGallery_head_txt">
          リゾートフォトの<br><span>よくある質問</span>
        </h2>
      </div>
    </div>
    <ul class="pgGallery_faq__block fade-anime" data-fade="fade-up-cont">
      <?php
      $data = [
        [
          'q' => '家族や子どもと一緒に撮影できますか？',
          'a' => '家族や子どもと一緒に撮影できる会社も多くあります。<br>同行人数や撮影時間、追加料金の有無などが決められている場合があるため、事前に確認しておきましょう。',
        ],
        [
          'q' => 'リゾートフォトの費用相場はどのくらいですか？',
          'a' => '撮影場所やプラン内容、衣装、撮影カット数などによって異なります。<br>基本プランだけでなく、衣装やヘアメイク、データ追加などのオプション料金も含めて確認しておきましょう。',
          'list-ttl' => [
            'ハワイの場合',
            'グアムの場合',
            '沖縄の場合'
          ],
          'list-desc' => [
            '<p class="flex"><span>平均費用：</span><span>60～110万円<br/>（2名・撮影費・旅費・滞在費込み）</span></p>',
            '<p class="flex"><span>平均費用：</span><span>50～90万円<br/>（2名・撮影費・旅費・滞在費込み）</span></p>',
            '<p class="flex"><span>平均費用：</span><span>25万〜50万円<br/>（2名・撮影費・旅費・滞在費込み）</span></p>'
          ],
        ],
        [
          'q' => '撮影データはいつ頃もらえますか？',
          'a' => '納品時期は手配会社やプランによって異なります。<br>数週間から数か月かかる場合もあるため、結婚報告やSNS投稿など使用したい予定がある場合は、事前に納期を確認しておくと安心です。',
        ],
        [
          'q' => 'ハワイやグアムは日本語通じますか？',
          'a' => 'ホテルやウェディングサロン、主要な観光エリアでは日本語に対応しているスタッフがいる場合もあります。ただし、すべての場所で日本語が通じるわけではありません。<br>撮影当日に日本語スタッフや通訳が同行するか、事前に確認しておくと安心です。',
        ]
      ];
      $counter = 1;
      foreach ($data as $item):
      ?>
        <li class="pgGallery_faq__block-itm">
          <div class="q bg-beg-2" data-faq="faq-<?php echo $counter; ?>">
            <h3 class="flex"><span class="ft-blu-1">Q</span><?php echo $item["q"]; ?></h3>
          </div>
          <div id="faq-<?php echo $counter; ?>" class="a">
            <div class="flex-bt">
              <p class="a__txt ft-blu-1">A</p>
              <div class="a__content">
                <p class="a__main"><?php echo $item["a"]; ?></p>
                <?php
                if (isset($item['list-ttl']) && is_array($item['list-ttl']) && !empty($item['list-ttl'])):
                  $cnt = 0;
                ?>
                  <ul class="a__tb flex-bt">
                    <?php foreach ($item["list-ttl"] as $d): ?>
                      <li class="a__dt bg-beg-2">
                        <div class="inner">
                          <p class="inner__ttl"><?php echo $d; ?></p>
                          <div class="inner__dsc">
                            <?php echo $item["list-desc"][$cnt]; ?>
                          </div>
                        </div>
                      </li>
                    <?php
                      $cnt++;
                    endforeach;
                    ?>
                  </ul>
                <?php endif; ?>
              </div>
            </div>
          </div>
        </li>
      <?php
        $counter++;
      endforeach;
      ?>
    </ul>
  </div>
</section>