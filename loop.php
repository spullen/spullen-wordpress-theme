<?php get_posts_pagination(); ?>

<?php while ( have_posts() ) : the_post(); ?>
  <div class="post" id="post-<?php the_ID(); ?>">
    
  </div>
<?php endwhile; ?>

<?php get_posts_pagination(); ?>