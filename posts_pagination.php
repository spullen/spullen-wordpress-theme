<?php if ( $wp_query->max_num_pages > 1 ) : ?>
<div class="posts-navigation">
  <div class="nav-previous"><?php next_posts_link( __( '<span class="posts-nav">&larr;</span> Older posts', 'spullen' ) ); ?></div>
  <div class="nav-next"><?php previous_posts_link( __( 'Newer posts <span class="posts-nav">&rarr;</span>', 'spullen' ) ); ?></div>
</div>
<?php endif; ?>