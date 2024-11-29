<div>
  <h2 class="text-2xl font-bold flex items-center gap-2 mb-6">
    Цікавеньке
    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6"><path stroke-linecap="round" stroke-linejoin="round" d="m11.99 16.5 3.75 3.75m0 0 3.75-3.75m-3.75 3.75V3.75H4.49" /></svg>
  </h2>

  <!-- Рандомні статті -->
  <div class="space-y-4 mb-12">
    <?php 
    $sidebar_rand_posts = new WP_Query( array( 
      'post_type' => 'post', 
      'posts_per_page' => 9,
      'order' => 'DESC',
      'orderby' => 'rand'
    ) );
    if ($sidebar_rand_posts->have_posts()) : while ($sidebar_rand_posts->have_posts()) : $sidebar_rand_posts->the_post(); ?>
    <article class="flex gap-4">
      <img src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'large'); ?>" alt="<?php the_title(); ?>" class="w-24 h-24 rounded-xl object-cover">
      <div>
        <?php $sidebar_rand_categories = get_the_terms( get_the_ID(), 'category' );
        foreach (array_slice($sidebar_rand_categories,0,1) as $sidebar_rand_category){ ?>
          <?php $sidebar_rand_category_color = carbon_get_term_meta($sidebar_rand_category->term_id, 'crb_category_color' ); ?>
          <span class="inline-flex items-center px-2 py-1 rounded-full text-xs bg-<?php echo $sidebar_rand_category_color; ?>-100 text-<?php echo $sidebar_rand_category_color; ?>-800">
            <span class="w-1 h-1 rounded-full bg-<?php echo $sidebar_rand_category_color; ?>-600 mr-1"></span>
            <?php echo $sidebar_rand_category->name; ?>
          </span>
        <?php } ?>
        <div class="font-bold mt-1"><a href="<?php the_permalink(); ?>" class="hover:text-purple-600"><?php the_title(); ?></a></div>
        <div class="flex items-center text-sm text-gray-500 mt-1">
          <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
          </svg>
          2 хв.читання
        </div>
      </div>
    </article>
    <?php endwhile; endif; wp_reset_postdata(); ?>
  </div>
</div>

<div>
  <h2 class="text-2xl font-bold flex items-center gap-2 mb-6">
    Категорії
    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6"><path stroke-linecap="round" stroke-linejoin="round" d="m11.99 16.5 3.75 3.75m0 0 3.75-3.75m-3.75 3.75V3.75H4.49" /></svg>
  </h2>

  <div>
    <?php $sidebar_categories = get_terms( array( 
        'taxonomy' => 'category', 
        'parent' => 0, 
        'hide_empty' => false,
      ));
      shuffle($sidebar_categories);
      foreach ( $sidebar_categories as $sidebar_category ): ?>
      <?php $sidebar_dream_category_color = carbon_get_term_meta($sidebar_category->term_id, 'crb_category_color' ); ?>
      <div class="flex flex-wrap items-center border-b-2 border-dotted border-gray-200 pb-2 mb-2 last-of-type:mb-0 last-of-type:pb-0 last-of-type:border-transparent">
      <div class="mr-2 pl-4">
        <img src="<?php echo carbon_get_term_meta($sidebar_category->term_id, 'crb_category_img' ); ?>" alt="<?php echo $sidebar_category->name ?>" loading="lazy" class="w-[75px] h-[65px] min-w-[75px] min-h-[65px] object-cover rounded-lg">
      </div>
      <div class="pr-4">
        <div class=""><a href="<?php echo get_term_link($sidebar_category); ?>" class="hover:text-indigo-500 text-lg font-semibold"><?php echo $sidebar_category->name ?></a></div>
        <div class="text-sm text-gray-600"><?php _e("Записів", "web-g"); ?>: <?php echo $sidebar_category->count; ?></div>
      </div>
    </div>
    <?php endforeach; ?>
  </div>
</div>