<div class="bg-sky-50 rounded-xl overflow-hidden md:flex">
  <div class="md:w-1/2 relative">
    <img src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'large'); ?>" alt="<?php the_title(); ?>" class="w-full h-48 md:h-full object-cover">
  </div>

  <div class="md:w-1/2 p-6 md:p-8 flex flex-col justify-center">
    <?php $now_categories = get_the_terms( get_the_ID(), 'category' );
    foreach (array_slice($now_categories,0,1) as $now_category){ ?>
      <?php $now_category_color = carbon_get_term_meta($now_category->term_id, 'crb_category_color' ); ?>
      <div class="inline-flex items-center px-3 py-1 rounded-full text-sm bg-<?php echo $now_category_color; ?>-100 text-<?php echo $now_category_color; ?>-800 w-fit mb-4">
        <span class="w-2 h-2 rounded-full bg-<?php echo $now_category_color; ?>-600 mr-2"></span>
        <?php echo $now_category->name; ?>
      </div>
    <?php } ?>
    
    <div class="text-lg md:text-xl font-bold mb-4"><a href="<?php the_permalink(); ?>" class="hover:text-indigo-500"><?php the_title(); ?></a></div>

    <!-- Excerpt -->
    <p class="text-gray-600 mb-6">
      <?php 
      $content_text = wp_strip_all_tags( get_the_content() );
      echo mb_strimwidth($content_text, 0, 110, '...');
      unset($content_text);
      ?>
    </p>

    <!-- Author and Meta -->
    <div class="flex items-center justify-between">
      <div class="flex items-center">
        <div class="mr-1">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
            <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z" />
          </svg>
        </div>
        <span class="font-medium">
          <?php if (carbon_get_the_post_meta('crb_post_author')): ?>
            <?php echo carbon_get_the_post_meta('crb_post_author'); ?>
          <?php else: ?>
            <?php echo get_the_author(); ?>
          <?php endif; ?>
        </span>
        <div class="hidden items-center text-gray-500">
          <svg class="w-4 h-4 mr-1" viewBox="0 0 24 24" fill="none" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
          </svg>
          <?php echo getTimeReading(get_the_ID()); ?> хв. читання
        </div>
      </div>
    </div>
  </div>
</div>