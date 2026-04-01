<section id="info" class="info">
  <div class="info__inner">
    <div class="svg-1">
      <picture>
        <source
          media="(min-width: 750px)"
          srcset="<?= esc_url(get_theme_file_uri('assets/images/idx/info/bg_round_pc.svg')) ?>"
        >
        <img
          src="<?php echo esc_url(get_theme_file_uri('assets/images/idx/info/bg_round_sp.svg')); ?>"
          alt="背景1"
        >
      </picture>
    </div>
    <div class="info__block flex-bt">
      <div class="info__left">
        <nav class="info__left-nav fade-anime" data-fade="fade-up-cont">
          <?php
            for ($i = 1; $i <= 4; $i++) : 
            $title = [
              "リゾート挙式の魅力",
              "人気エリアと選び方",
              "お金のハナシ",
              "チャペル・式場の選び方",
            ];
            $color = [
              "ft-blu-1",
              "ft-grn-1",
              "ft-org-1",
              "ft-pnk-1",
            ];
            $link = [
              "#pgInfo_charm",
              "#pgInfo_area",
              "#pgInfo_money",
              "#pgInfo_chapel",
            ];
          ?>
            <div class="itm">
              <a class="bg-wht-1" href="<?php echo esc_url(home_url());?>/weddinginfo/<?php echo $link[$i - 1]; ?>">
                <div class="ico <?php echo 'ico-'.$i; ?>">
                  <p class="ttl <?php echo $color[$i - 1]; ?>"><?php echo $title[$i - 1]; ?></p>
                </div>
              </a>
            </div>
          <?php endfor; ?>
        </nav>
      </div>
      <div class="info__title fade-anime" data-fade="fade-up">
        <h2 class="ft-wht-1">
          <span class="sp-il">まるわかり！</span>
          <span class="pc-il">これでバッチリ！</span><br/>
          リゾートウェディングの<br/>
          基本情報
        </h2>
        <p class="info__btn btn__more pc">
          <a class="ft-wht-1 btn__more-1" href="<?php echo esc_url(home_url());?>/weddinginfo/"><span>すべて見る</span></a>
        </p>
      </div>
      <div class="info__right">
        <nav class="info__right-nav fade-anime" data-fade="fade-up-cont">
          <?php
            for ($i = 5; $i <= 8; $i++) : 
            $title = [
              "ゲストの招待",
              "事前準備とダンドリ",
              "挙式前日の過ごし方",
              "挙式当日のスケジュール",
            ];
            $color = [
              "ft-blu-1",
              "ft-grn-1",
              "ft-org-1",
              "ft-pnk-1",
            ];
            $link = [
              "#pgInfo_guest",
              "#pgInfo_preparation",
              "#pgInfo_daybefore",
              "#pgInfo_ontheday",
            ];
          ?>
            <div class="itm">
              <a class="bg-wht-1" href="<?php echo esc_url(home_url());?>/weddinginfo/<?php echo $link[$i - 5]; ?>">
                <div class="ico <?php echo 'ico-'.$i; ?>">
                  <p class="ttl <?php echo $color[$i - 5]; ?>"><?php echo $title[$i - 5]; ?></p>
                </div>
              </a>
            </div>
          <?php endfor; ?>
        </nav>
      </div>
      <p class="info__btn btn__more sp fade-anime" data-fade="fade-up">
        <a class="ft-wht-1 btn__more-1" href="<?php echo esc_url(home_url());?>"><span>すべて見る</span></a>
      </p>
    </div>
    <div class="svg-2">
      <picture>
        <source
          media="(min-width: 750px)"
          srcset="<?= esc_url(get_theme_file_uri('assets/images/idx/info/bg_round_pc.svg')) ?>"
        >
        <img
          src="<?php echo esc_url(get_theme_file_uri('assets/images/idx/info/bg_round_sp.svg')); ?>"
          alt="背景2"
        >
      </picture>
    </div>    
  </div>
</section>