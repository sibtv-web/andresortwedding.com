<?php
  $data = [
    [
      'title' => '早めの航空券・宿泊手配',
      'desc' => '人気シーズン（春・秋）は半年以上前から動くと選択肢が広がります',
    ],
    [
      'title' => 'パッケージプランの中身を必ず確認',
      'desc' => '含まれるもの・追加料金になるものを整理しておくと、準備すべき内容が明確になり、早めに、お得に、準備ができます',
    ],
    [
      'title' => 'ゲストへの早めの連絡',
      'desc' => '日程と費用負担の方針を早めに伝えると、ゲストも調整しやすく手配もスムーズになります',
    ],
  ];
?>
<section id="pgPreparation_tips" class="pgPreparation__tips pginfo_section bg-beg-4">
	<div class="pgPreparation_container">
		<div class="pgPreparation_head fade-anime" data-fade="fade-up">
			<h2 class="pgPreparation_head_ttl cls-pnk">
				<img src="<?php echo esc_url(get_theme_file_uri('assets/images/preparation/nav_icon_cake.svg')); ?>" alt="アイコン">
				<span>準備をスムーズに<br class="sp"/>進める3つのコツ</span>
			</h2>
			<p class="pgPreparation_head_txt">
        リゾートウェディングは、パッケージ型のプランや少人数構成のおかげで、準備のハードルが意外と低いのが魅力。<br/>
        さらに、準備をスムーズに進める3つのポイントをご紹介します！
			</p>
		</div>
    <ul class="pgPreparation__tips-ls flex fade-anime" data-fade="fade-up-cont">
      <?php
        $count = 0;
        foreach ($data as $item) :
        $count++;
      ?>
        <li class="item">
          <p class="item__num ft-pnk-1"><?php echo sprintf('%02d', $count) ;?></p>
          <h4 class="item__ttl"><?php echo $item['title'] ;?></h4>
          <p class="item__txt"><?php echo $item['desc'] ;?></p>
        </li>
      <?php endforeach; ?>
    </ul>
	</div>
</section>