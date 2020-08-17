<?php get_header() ?>
    <article>
        <h2><?php echo the_title(); ?></h2>
        <p>On single.php</p>
        <p>Published on 
            <time datetime="<?php echo get_the_date( DATE_ATOM ); ?>">
                <?php echo get_the_date( ); ?>
            </time>
        </p>

        <h3>Categories:</h3>
  <ul>
    <?php
      // Get the categories for this post.
      $post_categories = wp_get_post_categories( get_the_id() ); // get_the_id() gets the current post/page ID.
      // Loop through the categories for this post.
      foreach($post_categories as $c){
        // Get the category object (WP_Term class instance.)
        $cat = get_category( $c );
        // Get the URL for this category so we can link to it.
        $catURL = get_term_link( $cat );
        // Echo each category as a list item.
        echo "<li><a href=\"{$catURL}\">{$cat->name}</a></li>";
      }
    ?>
  </ul>

  <h3>Post Contant</h3>
        <?php the_content(); ?>
    </article>
<?php get_footer() ?>