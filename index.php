<?php get_header(); ?>


<div class="grid lg:grid-cols-3 gap-6 mb-12">
  <?php $main_posts = carbon_get_theme_option('crb_main_posts'); ?>
  <!-- Main Featured Article -->
  <div class="lg:col-span-2">
    <div class="relative rounded-2xl overflow-hidden group">
      <a href="<?php echo get_the_permalink($main_posts[0]['id']); ?>" target="_blank" class="w-full h-full absolute left-0 top-0 z-1"></a>
      <img src="<?php echo get_the_post_thumbnail_url($main_posts[0]['id'], 'large'); ?>" alt="<?php echo get_the_title($main_posts[0]['id']); ?>" class="w-full h-[504px] object-cover">
      <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/50 to-transparent"></div>
      <div class="absolute bottom-0 left-0 right-0 p-6">
        <?php 
          $main_categories_one = get_the_category($main_posts[0]['id']); 
          foreach($main_categories_one as $main_category_one):
        ?>
        <?php $main_category_one_color = carbon_get_term_meta($main_category_one->term_id, 'crb_category_color' ); ?>
        <div class="flex items-center gap-2 mb-4">
          <span class="w-2 h-2 rounded-full bg-<?php echo $main_category_one_color; ?>-600"></span>
          <span class="text-white font-medium"><?php echo $main_category_one->cat_name; ?></span>
        </div>
        <?php endforeach; ?>
        <div class="text-3xl font-bold text-white mb-4"><?php echo get_the_title($main_posts[0]['id']); ?></div>
        <p class="text-gray-200 mb-4">
          <?php $main_content_one = get_post_field('post_content', $main_posts[0]['id']); echo wp_trim_words( $main_content_one, 25, '...' ); ?>
        </p>
        <div class="flex items-center justify-between">
          <div class="flex items-center gap-3">
            <?php 
              $author_id_one = get_post_field ('post_author', $main_posts[0]['id']); 
              $display_name_one = get_the_author_meta( 'display_name' , $author_id_one ); 
            ?>
            <span class="text-white font-medium"><?php echo $display_name_one; ?></span>
            <div class="flex items-center text-gray-300">
              <svg class="w-4 h-4 mr-1" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M12 8V12L15 15" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                <circle cx="12" cy="12" r="9" stroke="currentColor" stroke-width="2"/>
              </svg>
              <?php echo getTimeReading($main_posts[0]['id']); ?> хв.читання
            </div>
          </div>
          <div class="text-white hover:text-gray-300 transition-colors">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 6H5.25A2.25 2.25 0 0 0 3 8.25v10.5A2.25 2.25 0 0 0 5.25 21h10.5A2.25 2.25 0 0 0 18 18.75V10.5m-10.5 6L21 3m0 0h-5.25M21 3v5.25" /></svg>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Right Side Articles -->
  <div class="space-y-6">
    <!-- Article 1 -->
    <div class="relative rounded-2xl overflow-hidden group">
      <a href="<?php echo get_the_permalink($main_posts[1]['id']); ?>" target="_blank" class="w-full h-full absolute left-0 top-0 z-1"></a>
      <img src="<?php echo get_the_post_thumbnail_url($main_posts[1]['id'], 'large'); ?>" alt="<?php echo get_the_title($main_posts[1]['id']); ?>" class="w-full h-[240px] object-cover">
      <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/50 to-transparent"></div>
      <div class="absolute bottom-0 left-0 right-0 p-6">
        <?php 
          $main_categories_two = get_the_category($main_posts[1]['id']); 
          foreach($main_categories_two as $main_category_two):
        ?>
        <?php $main_category_two_color = carbon_get_term_meta($main_category_two->term_id, 'crb_category_color' ); ?>
        <div class="flex items-center gap-2 mb-3">
          <span class="w-2 h-2 rounded-full bg-<?php echo $main_category_two_color; ?>-600"></span>
          <span class="text-white font-medium"><?php echo $main_category_two->cat_name; ?></span>
        </div>
        <?php endforeach; ?>
        <div class="text-xl font-bold text-white mb-3"><?php echo get_the_title($main_posts[1]['id']); ?></div>
        <div class="flex items-center justify-between">
          <div class="flex items-center gap-3">
            <?php 
              $author_id_two = get_post_field ('post_author', $main_posts[1]['id']); 
              $display_name_two = get_the_author_meta( 'display_name' , $author_id_two ); 
            ?>
            <span class="text-white font-medium"><?php echo $display_name_two; ?></span>
            <div class="flex items-center text-gray-300">
              <svg class="w-4 h-4 mr-1" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M12 8V12L15 15" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                <circle cx="12" cy="12" r="9" stroke="currentColor" stroke-width="2"/>
              </svg>
              <?php echo getTimeReading($main_posts[1]['id']); ?> хв.читання
            </div>
          </div>
          <div class="text-white hover:text-gray-300 transition-colors">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 6H5.25A2.25 2.25 0 0 0 3 8.25v10.5A2.25 2.25 0 0 0 5.25 21h10.5A2.25 2.25 0 0 0 18 18.75V10.5m-10.5 6L21 3m0 0h-5.25M21 3v5.25" /></svg>
          </div>
        </div>
      </div>
    </div>

    <!-- Article 2 -->
    <div class="relative rounded-2xl overflow-hidden group">
      <a href="<?php echo get_the_permalink($main_posts[2]['id']); ?>" target="_blank" class="w-full h-full absolute left-0 top-0 z-1"></a>
      <img src="<?php echo get_the_post_thumbnail_url($main_posts[2]['id'], 'large'); ?>" alt="<?php echo get_the_title($main_posts[2]['id']); ?>" class="w-full h-[240px] object-cover">
      <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/50 to-transparent"></div>
      <div class="absolute bottom-0 left-0 right-0 p-6">
        <?php 
          $main_categories_three = get_the_category($main_posts[2]['id']); 
          foreach($main_categories_three as $main_category_three):
        ?>
        <?php $main_category_three_color = carbon_get_term_meta($main_category_three->term_id, 'crb_category_color' ); ?>
        <div class="flex items-center gap-2 mb-3">
          <span class="w-2 h-2 rounded-full bg-<?php echo $main_category_three_color; ?>-600"></span>
          <span class="text-white font-medium"><?php echo $main_category_three->cat_name; ?></span>
        </div>
        <?php endforeach; ?>
        <div class="text-xl font-bold text-white mb-3"><?php echo get_the_title($main_posts[2]['id']); ?></div>
        <div class="flex items-center justify-between">
          <div class="flex items-center gap-3">
            <?php 
              $author_id_three = get_post_field ('post_author', $main_posts[2]['id']); 
              $display_name_three = get_the_author_meta( 'display_name' , $author_id_three ); 
            ?>
            <span class="text-white font-medium"><?php echo $display_name_three; ?></span>
            <div class="flex items-center text-gray-300">
              <svg class="w-4 h-4 mr-1" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M12 8V12L15 15" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                <circle cx="12" cy="12" r="9" stroke="currentColor" stroke-width="2"/>
              </svg>
              <?php echo getTimeReading($main_posts[2]['id']); ?> хв.читання
            </div>
          </div>
          <div class="text-white hover:text-gray-300 transition-colors">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 6H5.25A2.25 2.25 0 0 0 3 8.25v10.5A2.25 2.25 0 0 0 5.25 21h10.5A2.25 2.25 0 0 0 18 18.75V10.5m-10.5 6L21 3m0 0h-5.25M21 3v5.25" /></svg>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<section class="mb-12">
  <div class="flex justify-between items-center mb-6">
    <h2 class="text-2xl font-bold flex items-center gap-2">
      Зараз читають
      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6"><path stroke-linecap="round" stroke-linejoin="round" d="m11.99 16.5 3.75 3.75m0 0 3.75-3.75m-3.75 3.75V3.75H4.49" /></svg>
    </h2>
    
    <div class="text-lg text-black hover:text-gray-700 flex items-center">
      <a href="#" class="font-medium hover:text-red-600">Переглянути всі</a>
      <div class="w-5 h-5 flex items-center justify-center bg-red-600 rounded-full ml-2">
        <svg class="w-3 h-3 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" /></svg>
      </div>
    </div>
  </div>

  <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 cut-block">
    <?php 
    $rand_post = new WP_Query( array( 
      'post_type' => 'post', 
      'posts_per_page' => 4,
      'order' => 'DESC',
      'orderby' => 'rand_post'
    ) );
    if ($rand_post->have_posts()) : while ($rand_post->have_posts()) : $rand_post->the_post(); ?>
    <!-- Article 1 -->
    <article class="group mb-3">
      <div class="relative rounded-xl overflow-hidden mb-4">
        <img src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'large'); ?>" alt="<?php the_title(); ?>" class="w-full h-48 object-cover">
      </div>
      <div class="space-y-3">
        <?php $now_categories = get_the_terms( get_the_ID(), 'category' );
        foreach (array_slice($now_categories,0,1) as $now_category){ ?>
        <?php $now_category_color = carbon_get_term_meta($now_category->term_id, 'crb_category_color' ); ?>
        <div class="flex items-center gap-2">
          <span class="w-2 h-2 rounded-full bg-<?php echo $now_category_color; ?>-600"></span>
          <span class="text-<?php echo $now_category_color; ?>-600 font-medium"><?php echo $now_category->name; ?></span>
        </div>
        <?php } ?>
        <div class="font-bold text-lg hover:underline hover:text-indigo-500 cut-line"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></div>
        <div class="flex items-center justify-between">
          <div class="flex items-center gap-3">
            <span class="font-medium">
              <?php if (carbon_get_the_post_meta('crb_post_author')): ?>
                <?php echo carbon_get_the_post_meta('crb_post_author'); ?>
              <?php else: ?>
                <?php echo get_the_author(); ?>
              <?php endif; ?>
            </span>
            <span class="text-gray-500 text-sm"><?php echo getTimeReading(get_the_ID()); ?> хв.читання</span>
          </div>
          <div class="text-gray-500 relative">
            <a href="<?php the_permalink(); ?>" class="w-full h-full absolute left-0 top-0 z-1" target="_blank"></a>
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 6H5.25A2.25 2.25 0 0 0 3 8.25v10.5A2.25 2.25 0 0 0 5.25 21h10.5A2.25 2.25 0 0 0 18 18.75V10.5m-10.5 6L21 3m0 0h-5.25M21 3v5.25" /></svg>
          </div>
        </div>
      </div>
    </article>
    <?php endwhile; endif; wp_reset_postdata(); ?>
  </div>
</section>

<section class="mb-12">
  <div class="flex justify-between items-center mb-6">
    <h2 class="text-2xl font-bold flex items-center gap-2">
      Популярні категорії
      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6"><path stroke-linecap="round" stroke-linejoin="round" d="m11.99 16.5 3.75 3.75m0 0 3.75-3.75m-3.75 3.75V3.75H4.49" /></svg>
    </h2>
  </div>
  <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-6 gap-4">
    <?php $home_categories = get_terms( array( 
      'taxonomy' => 'category', 
      'parent' => 0, 
      'hide_empty' => false,
      'meta_query' => array(
        array(
          'key'       => '_crb_category_home_show',
          'value'     => 'yes',
          'compare'   => '='
        )
      )
    ));
    shuffle($home_categories);
    foreach ( array_slice($home_categories, 0, 6) as $home_category ): ?>
    <div class="relative h-48 rounded-xl group">
      <a href="<?php echo get_term_link($home_category); ?>" class="w-full h-full absolute top-0 left-0 z-1"></a>
      <img src="<?php echo carbon_get_term_meta($home_category->term_id, 'crb_category_img' ); ?>" alt="<?php echo $home_category->name ?>" class="absolute inset-0 w-full h-full object-cover rounded-xl">
      <div class="absolute rounded-xl inset-0 bg-gradient-to-t from-blue-900/50 to-blue-900/10 group-hover:from-blue-900/70 group-hover:to-blue-900/30 transition-all"></div>
      <div class="absolute inset-0 p-4 flex flex-col justify-end">
        <div class="text-white text-base font-bold"><?php echo $home_category->name ?></div>
      </div>
      <span class="absolute top-4 right-4 bg-white/90 text-black w-6 h-6 rounded-full flex items-center justify-center text-sm font-medium"><?php echo $home_category->count; ?></span>
    </div>
    <?php endforeach; ?>
  </div>
</section>

<section class="mb-12">
  <div class="flex justify-between items-center mb-6">
    <h2 class="text-2xl font-bold flex items-center gap-2">
      Вибір редакції
      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6"><path stroke-linecap="round" stroke-linejoin="round" d="m11.99 16.5 3.75 3.75m0 0 3.75-3.75m-3.75 3.75V3.75H4.49" /></svg>
    </h2>
  </div>
  <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">
    <?php $our_posts = carbon_get_theme_option('crb_our_posts');
    foreach ($our_posts as $our_post): ?>
    <div class="group relative rounded-xl overflow-hidden">
      <a href="<?php echo get_the_permalink($our_post['id']); ?>" class="w-full h-full absolute left-0 top-0 z-1"></a>
      <div class="aspect-[3/4] relative">
        <img src="<?php echo get_the_post_thumbnail_url($our_post['id'], 'large'); ?>" alt="<?php echo get_the_title($our_post['id']); ?>" class="absolute inset-0 w-full h-full object-cover">
        <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/50 to-black/30"></div>
      </div>
      <div class="absolute inset-0 p-4 flex flex-col justify-between">
        <?php $our_categories = get_the_category($our_post['id']);
        foreach ($our_categories as $our_category): ?>
        <?php $our_category_color = carbon_get_term_meta($our_category->term_id, 'crb_category_color' ); ?>
        <div class="inline-flex items-center px-3 py-1 rounded-full text-sm bg-<?php echo $our_category_color; ?>-100 text-<?php echo $our_category_color; ?>-800 w-fit">
          <span class="w-2 h-2 rounded-full bg-<?php echo $our_category_color; ?>-600 mr-2"></span>
          <?php echo $our_category->cat_name; ?>
        </div>
        <?php endforeach; ?>
        <div class="space-y-3">
          <div class="text-lg font-bold text-white group-hover:text-gray-200 transition-colors line-clamp-2"><?php echo get_the_title($our_post['id']); ?></div>
          <div class="flex items-center gap-3">
            <div class="flex items-center">
              <span class="text-white text-sm font-medium">
                <?php 
                  $author_our_id = get_post_field ('post_author', $our_post['id']);
                  $display_our_name = get_the_author_meta( 'display_name' , $author_our_id ); 
                  echo $display_our_name;
                ?>
              </span>
            </div>
            <div class="flex items-center text-gray-300 text-sm">
              <svg class="w-4 h-4 mr-1" viewBox="0 0 24 24" fill="none" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
              </svg>
              <?php echo getTimeReading($our_post['id']); ?> хв.читання
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php endforeach; ?>
  </div>
</section>

<section class="hidden">
  <div class="grid lg:grid-cols-3 gap-8">
    <div class="lg:col-span-3">
      <div class="grid md:grid-cols-3 gap-6">
        <?php $home_categories = get_terms( array( 
          'taxonomy' => 'category', 
          'parent' => 0, 
          'hide_empty' => false,
          'meta_query' => array(
            array(
              'key'       => '_crb_category_home_show',
              'value'     => 'yes',
              'compare'   => '='
            )
          )
        ));
        shuffle($home_categories);
        foreach ( array_slice($home_categories, 0, 3) as $home_category ): ?>
        <div class="mb-6">
          <div class="mb-4">
            <div class="text-xl font-bold flex items-center">
              <?php $home_category_color = carbon_get_term_meta($home_category->term_id, 'crb_category_color' ); ?>
              <span class="w-3 h-3 rounded-full bg-<?php echo $home_category_color; ?>-600 mr-2"></span>
              <?php echo $home_category->name; ?>
            </div>
          </div>
          <div>
            <?php 
            $category_posts = new WP_Query( array( 
            'post_type' => 'post', 
            'posts_per_page' => 4,
            'order' => 'DESC',
            'tax_query' => array(
              array(
                'taxonomy' => 'category',
                'terms' => $home_category->term_id,
                'field' => 'term_id',
                'include_children' => true,
                'operator' => 'IN'
              )
            ),
          ) );
          if ($category_posts->have_posts()) : while ($category_posts->have_posts()) : $category_posts->the_post(); ?>
            <article class="group [&:first-child]:col-span-full [&:first-child]:flex-col flex gap-4 items-start cut-block [&:first-child]:mb-10 mb-6">
              <!-- Image -->
              <div class="group-[:first-child]:w-full w-32 h-28 group-[:first-child]:h-[250px] rounded-xl overflow-hidden">
                <img src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'large'); ?>" alt="<?php the_title(); ?>" class="w-full h-full object-cover">
              </div>
              <!-- Content -->
              <div class="flex-1">
                <!-- Category -->
                <?php $now_categories = get_the_terms( get_the_ID(), 'category' );
                foreach (array_slice($now_categories,0,1) as $now_category){ ?>
                <?php $now_category_color = carbon_get_term_meta($now_category->term_id, 'crb_category_color' ); ?>
                <div class="group-[:first-child]:bg-<?php echo $now_category_color; ?>-600 group-[:first-child]:mb-2 mb-1 inline-flex items-center">
                  <span class="w-2 h-2 rounded-full group-[:first-child]:bg-<?php echo $now_category_color; ?>-800 bg-<?php echo $now_category_color; ?>-600"></span>
                  <a href="<?php the_permalink(); ?>" class="ml-2 text-<?php echo $now_category_color; ?>-600 hover:underline font-medium group-[:first-child]:text-base text-sm"><?php echo $now_category->name; ?></a>
                </div>
                <?php } ?>
                <div class="group-[:first-child]:text-xl group-[:first-child]:mb-4 mb-2 font-bold leading-tight hover:text-gray-600 cut-line">
                  <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                </div>
                <p class="hidden group-[:first-child]:block text-gray-600 mb-4">
                  <?php 
                    $content_text = wp_strip_all_tags( get_the_content() );
                    echo mb_strimwidth($content_text, 0, 110, '...');
                    unset($content_text);
                  ?>
                </p>
                <div class="flex items-center group-[:first-child]:justify-between gap-3 text-sm">
                  <div class="group-[:first-child]:flex hidden items-center gap-2">
                    <span class="font-medium">
                      <?php if (carbon_get_the_post_meta('crb_post_author')): ?>
                        <?php echo carbon_get_the_post_meta('crb_post_author'); ?>
                      <?php else: ?>
                        <?php echo get_the_author(); ?>
                      <?php endif; ?>
                    </span>
                  </div>
                  <div class="flex items-center text-gray-500">
                    <svg class="w-4 h-4 mr-1" viewBox="0 0 24 24" fill="none" stroke="currentColor">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                    <?php echo getTimeReading(get_the_ID()); ?> хв.читання
                  </div>
                </div>
              </div>
            </article>
          <?php endwhile; endif; wp_reset_postdata(); ?>
          </div>
        </div>
      <?php endforeach; ?>
      </div>
    </div>
  </div>

</section>

<div class="grid lg:grid-cols-3 gap-8">
  <!-- Blog -->
  <div class="lg:col-span-2">
    <div class="flex justify-between items-center mb-6">
      <h2 class="text-2xl font-bold flex items-center gap-2">
        Нові статті
        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
        </svg>
      </h2>
    </div>

    <div class="grid md:grid-cols-1 gap-y-6">
      <?php 
        $new_post = new WP_Query( array( 
          'post_type' => 'post', 
          'posts_per_page' => 10,
          'order' => 'DESC'
        ) );
        if ($new_post->have_posts()) : while ($new_post->have_posts()) : $new_post->the_post(); 
      ?>
        <?php get_template_part("template-parts/post-item"); ?>
      <?php endwhile; endif; wp_reset_postdata(); ?>
    </div>
  </div>

  <!-- Сайдбар -->
  <div class="lg:col-span-1">
    <?php get_template_part("template-parts/sidebar"); ?>
  </div>
</div>

<?php get_footer(); ?>