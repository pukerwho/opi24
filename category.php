<?php get_header(); ?>

<div class="flex flex-wrap flex-col lg:flex-row lg:-mx-4 mb-8">
  <div class="w-full lg:w-2/3 lg:px-4 mb-12 lg:mb-0">
    <h1 class="text-3xl font-bold mb-6"><?php the_archive_title(); ?></h1>
    <div class="grid md:grid-cols-1 gap-y-6">
      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <?php get_template_part('template-parts/post-item'); ?>
      <?php endwhile; endif; wp_reset_postdata(); ?>
    </div>
    <div class="flex justify-between items-center prose-a:inline-block prose-a:bg-indigo-500 prose-a:text-gray-200 prose-a:rounded prose-a:px-6 prose-a:py-3">
      <?php posts_nav_link(); ?>	
    </div>
  </div>
  <div class="w-full lg:w-1/3 lg:px-4">
    <?php get_template_part('template-parts/sidebar'); ?>
  </div>
</div>

<?php get_footer(); ?>