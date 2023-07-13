
<section>
  <div class="container">
    <h1 class="section__title">Businesses Cards Module </h1>
    <div class="bussiness__list">

      <?php
      if (get_row_layout() === 'business_cards') {
          $relation_items = get_sub_field('cards_relationship');
          if ($relation_items) {
              foreach ($relation_items as $relation_item) {
                  $biznesi_title = $relation_item->post_title;
                  $biznesi_id = $relation_item->ID;
                  $biznesi_images = get_field('foto', $biznesi_id);
                  $biznesi_permalink = get_permalink($biznesi_id);
                  $biznesi_text = get_field('informata', $biznesi_id);
                  $biznesi_reviews = get_field('reviews', $biznesi_id);
                  if ($biznesi_images) {
                      foreach ($biznesi_images as $biznesi_image) {
                          ?>
                          <div class="bussiness__card">
                              <div class="bussines__card--image">
                                  <img src="<?php echo esc_url($biznesi_image['url']); ?>" alt="<?php echo esc_attr($biznesi_image['alt']); ?>" />
                              </div>
                              <div class="bussiness__card--headlines">
                                  <h3 class="bussiness__card--title"><?php echo $biznesi_title; ?></h3>
                                  <div class="bussiness__card--stars">
                                      <i class="fa-solid fa-star"></i>
                                      <?php echo $biznesi_reviews; ?>/<?php echo $biznesi_reviews; ?>
                                  </div>
                              </div>
                              <p class="bussiness__card--description">
                                  <?php echo implode(' ', array_slice(explode(' ', $biznesi_text), 0, 5)) . "\n"; ?>
                                  ...
                              </p>
                              <button class="button-btn"><a href="<?php echo $biznesi_permalink; ?>">View Business</a></button>
                          </div>
                          <?php
                      }
                  }
              }
          }
      }
      ?>
    </div>
  </div>
</section>
