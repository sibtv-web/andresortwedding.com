<section id="voice" class="voice bg-wht-1">
  <div class="voice__inner section__inner">
    <div class="voice__title section__title fade-anime" data-fade="fade-up">
      <p class="en ft-blu-1">Voice</p>
      <h2 class="jp"><span class="ft-sm">リゾートウェディングを挙げた</span><br/>先輩カップルの声</h2>
    </div>
    <div class="voice__comment flex">
      <?php 
        $data = [
          '最初は「準備が大変そう…費用が高そう」と、<br/>パートナーと意見が合わないことも。<br/>でも実際は<span class="ft-blu-4">想像以上に準備がスムーズ。</span><br/><span class="ft-blu-4">新婚旅行も一緒に楽しめて</span>最高の思い出になりました。',
          'チャペルの扉が開いた瞬間、<br/><span class="ft-blu-4">海の青さが一気に広がって</span>、思わず涙が出ました。<br/>緊張が消えて<span class="ft-blu-4">「人生で今が一番幸せ」って思いました。<span class="ft-blu-4">',
          '少人数だったので、<span class="ft-blu-4">大切な人たちの表情が<br/>一人ひとりちゃんと見えて</span>、みんなの祝福がすごく温かかった。<br/>家族旅行も兼ねた親孝行ができたのも良かったです。',
          '<span class="ft-blu-4">夕日のビーチフォト</span>は、結婚式で一番の宝物です。<br/>妥協せず、<span class="ft-blu-4">思い切ってリゾートにして<br/>本当に良かった</span>と思いました。',
        ];
        $count = 0;
        foreach ($data as $item):
      ?>
        <div class="voice__comment-inner flex-cn fade-anime" data-fade="fade-up-text">
          <p class="voice__comment-txt split-txt"><?php echo $item;?></p>
        </div>
      <?php
        $count++;
        endforeach;
      ?>
    </div>
    <div class="voice__image fade-anime" data-fade="fade-up">
      <img
        src="<?php echo esc_url(get_theme_file_uri('assets/images/idx/voice/img_voice_main_01.png')); ?>"
        alt="先輩カップル"
      >
    </div>
  </div>
</section>