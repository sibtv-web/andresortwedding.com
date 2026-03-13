  <?php
    if ( is_feed() ):
      global $post;
      $post_id = get_the_ID();
      $image_id  = get_field('cade-image');
      $image_url = wp_get_attachment_image_url( $image_id , 'full' );
    ?>
    <p><img src="<?php echo esc_url($image_url); ?>" alt="<?php echo nl2br(get_field('cade-subtitle')); ?>"></p>
    <p><?php echo nl2br(get_field('cade-subtitle')); ?> | <?php echo nl2br(get_field('cade-title')); ?></p>
    <p>
      <?php if (get_field('cade-price')): ?>
        金額：<?php echo nl2br(get_field('cade-price')); ?><br/>
      <?php endif; ?>
      <?php if (get_field('cade-time')): ?>
        営業時間：<?php echo nl2br(get_field('cade-time')); ?><br/>
      <?php endif; ?>
      <?php if (get_field('cade-map')): ?>
        Google Map：<?php the_field('cade-map'); ?><br/>
      <?php endif; ?>
      <?php if (get_field('cade-address')): ?>
        住所：<?php the_field('cade-address'); ?><br/>
      <?php endif; ?>
      <?php if (get_field('cade-link')): ?>
        関連リンク：<?php the_field('cade-link'); ?>
      <?php endif; ?>
    </p>
    <?php
      $group = get_field('cade-free');
      // $title = $group['cade-free-title'];
    ?>
  <?php
    else:
    $imgClass = 'flow-1';
  ?>
  <div class="wp-acf-cade">
    <?php if (get_field('cade-title')|| get_field('cade-subtitle')): ?>
        <div class="wp-acf-cade-title">
          <p>
            <span class="subtitle"><?php echo nl2br(get_field('cade-subtitle')); ?></span>
            <br class="sp"/>
            <span><?php echo nl2br(get_field('cade-title')); ?></span>
          </p>
        </div>
      <?php endif; ?>

    <div class="wp-acf-contents">
      <?php
        if (get_field('cade-image')):
        $imgClass = '';
      ?>
        <div class="wp-acf-cade-image">
          <img src="<?php the_field('cade-image'); ?>" alt="<?php the_field('cade-title'); ?>">
        </div>
      <?php endif; ?>
      <div class="wp-acf-contents-txt <?php echo $imgClass;?>">
        <?php if (get_field('cade-chapel')): ?>
          <div class="wp-acf-cade-chapel wp-acf-cade-item">
            <p>
              <?php echo nl2br(get_field('cade-chapel')); ?>
            </p>
          </div>
        <?php endif; ?>
        <?php if (get_field('cade-feature')): ?>
          <div class="wp-acf-cade-feature wp-acf-cade-item">
            <p>
              <?php echo nl2br(get_field('cade-feature')); ?>
            </p>
          </div>
        <?php endif; ?>
        <?php if (get_field('cade-price')): ?>
          <div class="wp-acf-cade-price wp-acf-cade-item">
            <p>
              <?php echo nl2br(get_field('cade-price')); ?>
            </p>
          </div>
        <?php endif; ?>
        <?php if (get_field('cade-time')): ?>
          <div class="wp-acf-cade-time wp-acf-cade-item">
            <p>
              <?php echo nl2br(get_field('cade-time')); ?>
            </p>
          </div>
        <?php endif; ?>
        <?php if (get_field('cade-address')): ?>
          <div class="wp-acf-cade-address wp-acf-cade-item">
            <p>
              <?php the_field('cade-address'); ?>
            </p>
          </div>
        <?php endif; ?>
        <?php if (get_field('cade-map')): ?>
          <div class="wp-acf-cade-map wp-acf-cade-item">
            <a href="<?php the_field('cade-map'); ?>" target="_blank">
              Google Map
            </a>
          </div>
        <?php endif; ?>
        <?php if (get_field('cade-link')): ?>
          <!-- <div class="wp-acf-cade-link wp-acf-cade-item">
            <a href="<?php the_field('cade-link'); ?>" target="_blank">
              <?php the_field('cade-link'); ?>
            </a>
          </div> -->
        <?php endif; ?>

       <?php
        $links = get_field('cade-links');
        ?>
        <?php if (!empty($links['cade-links-cmn'])): ?>
          <?php foreach ($links['cade-links-cmn'] as $item): ?>
            <?php if (!empty($item['cade-links-cmn-url'])): ?>
              <div class="wp-acf-cade-link wp-acf-cade-item">
                <a href="<?php echo esc_url($item['cade-links-cmn-url']); ?>" target="_blank" rel="noopener noreferrer">
                  <?php echo !empty($item['cade-links-cmn-txt'])
                    ? esc_html($item['cade-links-cmn-txt'])
                    : esc_html($item['cade-links-cmn-url']); ?>
                </a>
              </div>
            <?php endif; ?>
          <?php endforeach; ?>
        <?php endif; ?>

        <?php if (get_field('cade-company')): ?>
          <div class="wp-acf-cade-company wp-acf-cade-item">
            <p>
              <?php echo nl2br(get_field('cade-company')); ?>
            </p>
          </div>
        <?php endif; ?>

        <?php
          $group = get_field('cade-free');
          if ($group['cade-free-title']):
        ?>
          <div class="wp-acf-cade-free">
            <p><?php echo $group['cade-free-title']; ?></p>
            <?php if (isset($group['cade-free-desc'])):?>
              <ul>
                <?php foreach ($group['cade-free-desc'] as $item):?>
                  <li><span><?php echo $item['cade-free-item'];?></span></li>
                <?php endforeach; ?>
              </ul>
            <?php endif; ?>
          </div>
        <?php endif; ?>
      </div>
    </div>
  </div>
  <?php endif; ?>