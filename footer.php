    <footer>
        <h2><?php bloginfo("title"); ?></h2>
        <p>
            &copy; copyright
            <?php echo date("Y"); ?>
            <a href="<?php echo site_url(); ?>"><?php bloginfo("title"); ?></a>
            All Rights Reserved.
        </p>
    </footer>
    <?php
        // wp_footer() is similar to wp_head()/ it outputs footer scripts and outputs.
        wp_footer();
    ?>
</body>
</html>