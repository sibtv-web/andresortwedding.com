<section id="faq" class="faq">
  <div class="faq__inner section__inner">
    <div class="faq__title section__title fade-anime" data-fade="fade-up">
      <p class="en ft-blu-1">Faq</p>
      <h2 class="jp"><span class="ft-sm">リゾートウェディングのリアル！</span><br/>みんなのQ&Aを総まとめ</h2>
    </div>
    <ul class="faq__block fade-anime" data-fade="fade-up-cont">
      <?php 
        $data = [
          [
            'q' => '準備って本当に大変じゃないの？',
            'a' => '実は想像より断然ラク！打ち合わせはオンライン中心で完結',
            'desc' => '国内のホテル挙式・結婚式場での挙式より準備項目が少なく、打ち合わせはオンラインやメールで進めることも可能です！会場装飾も現地のプロにおまかせでOKなので、忙しいカップルでも進めやすいのが魅力。<br/>海外リゾートの場合でも同様に、国内でお打ち合わせ&ドレス試着などが完結いたします。',
            'img' => [
              'img_faq_01.jpg',
              'img_faq_02.jpg'
            ],
            'list-ttl' => [],
            'list-desc' => [],
          ],
          [
            'q' => '予算が心配…やっぱり高い？',
            'a' => '費用総額は、国内の一般挙式よりリーズナブルに叶います',
            'desc' => '決まりが無く自由におふたりで選択できるため、料理・披露宴費用が少なく済みます。<br/>旅行費込みでも高くないという声が多いのがポイントです！',
            'img' => [],
            'list-ttl' => [
              '沖縄の場合',
              'ハワイの場合',
              'グアムの場合'
            ],
            'list-desc' => [
              '<p class="flex"><span>平均挙式総額：</span><span>約147万円<br/>（旅費 約24万円を含む）</span></p><p class="flex"><span>平均ゲスト人数：</span><span>19人</span></p>',
              '<p class="flex"><span>平均挙式総額：</span><span>約219万円<br/>（旅費 約63万円を含む）</span></p><p class="flex"><span>平均ゲスト人数：</span><span>7.8人</span></p>',
              '<p class="flex"><span>平均挙式総額：</span><span>約203万円<br/>（旅費 約57万円を含む）</span></p><p class="flex"><span>平均ゲスト人数：</span><span>8.7人</span></p>'
            ],
          ],
          [
            'q' => '海外挙式でも日本語は通じるの？',
            'a' => '日本人スタッフがご対応',
            'desc' => '安心ください！日本人のコーディネーターやメイク、カメラマンがおりますので、日本と同じようなクオリティを、より開放感あふれるチャペルで体験いただけます。ビーチでの写真やご家族やゲストとデザインを合わせたムームーでの写真など、海外リゾートならではの思い出もたくさん残していただけます。',
            'img' => [
              'img_faq_03.jpg',
              'img_faq_04.jpg'
            ],
            'list-ttl' => [],
            'list-desc' => [],
          ]
        ];
        $counter = 1;
        foreach ($data as $item):
      ?>
        <li class="faq__block-itm">
          <div class="q bg-wht-1" data-faq="faq-<?php echo $counter;?>">
            <h3 class="flex"><span class="ft-blu-1">Q</span><?php echo $item["q"];?></h3>
          </div>
          <div id="faq-<?php echo $counter;?>" class="a">
            <div class="flex-bt">
              <p class="a__txt ft-blu-1">A</p>
              <div class="a__content">
                <p class="a__main"><?php echo $item["a"];?></p>
                <p class="a__desc"><?php echo $item["desc"];?></p>
                <?php if (is_array($item['img']) && !empty($item['img'])):?>
                  <ul class="a__img flex-bt">
                    <?php foreach ($item["img"] as $img): ?>
                      <li class="a__img-itm">
                        <img
                          src="<?php echo esc_url(get_theme_file_uri('assets/images/idx/faq/'.$img)); ?>"
                          alt="アンサー イメージ画像"
                        >
                      </li>
                    <?php endforeach;?>
                  </ul>
                <?php endif;?>
                <?php 
                  if (is_array($item['list-ttl']) && !empty($item['list-ttl'])):
                  $cnt = 0;
                ?>
                  <ul class="a__tb flex-bt">
                    <?php foreach ($item["list-ttl"] as $d): ?>
                      <li class="a__dt bg-wht-1">
                        <div class="inner">
                          <p class="inner__ttl"><?php echo $d;?></p>
                          <div class="inner__dsc">
                            <?php echo $item["list-desc"][$cnt];?>
                          </div>
                        </div>
                      </li>
                    <?php
                      $cnt++;
                      endforeach;
                    ?>
                  </ul>
                <?php endif;?>
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