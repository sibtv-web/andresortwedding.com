<?php
  $data = [
    [
      'catch' => '',
      'en' => '',
      'jp' => '',
      'day' => [
        'imgSrc' => '',
        'title' => '',
        'desc' => '',
      ],
      'gourmet' => [
        '',
        '',
        '',
      ],
      'culture' => [
        '',
        '',
        '',
      ],
    ],
    [
      'catch' => '',
      'en' => '',
      'jp' => '',
      'day' => [
        'imgSrc' => '',
        'title' => '',
        'desc' => '',
      ],
      'gourmet' => [
        '',
        '',
        '',
      ],
      'culture' => [
        '',
        '',
        '',
      ],
    ],
    [
      'catch' => '',
      'en' => '',
      'jp' => '',
      'day' => [
        'imgSrc' => '',
        'title' => '',
        'desc' => '',
      ],
      'gourmet' => [
        '',
        '',
        '',
      ],
      'culture' => [
        '',
        '',
        '',
      ],
    ],
    [
      'catch' => '',
      'en' => '',
      'jp' => '',
      'day' => [
        'imgSrc' => '',
        'title' => '',
        'desc' => '',
      ],
      'gourmet' => [
        '',
        '',
        '',
      ],
      'culture' => [
        '',
        '',
        '',
      ],
    ],
  ];
?>
<section id="pgAreaCompare_spend" class="pgAreaCompare__spend pginfo_section bg-beg-4">
	<div class="pgAreaCompare_container">
		<div class="pgAreaCompare_head fade-anime" data-fade="fade-up">
			<h2 class="pgAreaCompare_head_ttl cls-org">
				<img src="<?php echo esc_url(get_theme_file_uri('assets/images/area/compare/nav_icon_cutlery.svg')); ?>" alt="アイコン">
				<span>挙式後も楽しみが続く！滞在中の過ごし方比較</span>
			</h2>
		</div>
    <?php foreach ($data as $item) :?>
      <div class="pgAreaCompare__spend-block fade-anime" data-fade="fade-up">
        <p class="catch"><?php echo $item["catch"]; ?></p>
        <div class="title ft-<?php echo $item["class"]; ?>"><strong><?php echo $item["en"]; ?></strong><span><?php echo $item["jp"]; ?></span></div>
        <ul class="day flex">
          <?php 
            foreach ($item['day'] as $img) :
            $dayCounter = 1;
          ?>
            <li class="day__item">
              <p class="day__item-num">Day<?php echo $dayCounter; ?></p>
              <div class="day__item-img">
                <img src="<?php echo esc_url(get_theme_file_uri('assets/images/area/compare/'. $img)); ?>" alt="イメージ<?php echo $dayCounter; ?>">
              </div>
              <p class="day__itm-ttl"></p>
              <p class="day__item-desc"></p>
            </li>
          <?php
            $dayCounter++;
            endforeach;
          ?>
        </ul>
        <div class="inner bg-beg-3">
          <div class="inner__gourmet">
            <p class="main ft-<?php echo $item["class"]; ?> flex">こんなグルメが楽しめる</p>
            <ul class="ls">
              <?php foreach ($item['gourmet'] as $gourmet) : ?>
                <li class="ls-itm <?php echo $item["class"]; ?> flex"><span><?php echo $gourmet; ?></span></li>
              <?php endforeach;?>
            </ul>
          </div>
          <div class="inner__culture">
            <p class="main ft-<?php echo $item["class"]; ?> flex">こんなグルメが楽しめる</p>
            <ul class="ls">
              <?php foreach ($item['culture'] as $culture) : ?>
                <li class="ls-itm <?php echo $item["class"]; ?> flex"><span><?php echo $culture; ?></span></li>
              <?php endforeach;?>
            </ul>
          </div>
        </div>
      </div>
    <?php
      $counter++;
      endforeach;
    ?>
	</div>
</section>