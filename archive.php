<?php get_header() ?>

<h2><?php echo get_the_archive_title(); // this will display the current archive we are viewing ?></h2>
<?php while( have_posts() ): // wordpress iterator that loops through posts, if they exist?>
    <?php the_post(); // get the data for the current post being looped ?>
    <article>
        <h3><?php the_title(); // get the title from post as specified after running the_post() ?></h3>
        <p><?php the_excerpt(); // summary of the post/page ?><p>
        <p>
          <a href="<?php the_permalink(); // the link to the post set by the_post() ?>">View All</a>
        </p>
    </article>

<?php endwhile; ?>

<?php get_footer() ?>