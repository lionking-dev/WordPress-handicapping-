<?php
get_header(); // Include the header template
?>

<div id="primary" class="content-area">
    <main id="main" class="site-main">
        <?php
        // Start the loop
        while (have_posts()) :
            the_post();
        ?>

        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <header class="entry-header">
                <h1 class="entry-title"><?php the_title(); ?></h1>
            </header>

            <div class="entry-content">
                <?php the_content(); ?>
            </div>

            <footer class="entry-footer">
                <?php
                // Display post meta information
                echo '<p>Posted on ' . get_the_date() . ' by ' . get_the_author() . '</p>';
                ?>
            </footer>
        </article>

        <?php
        // End the loop
        endwhile;
        ?>
    </main>
</div>

<?php get_footer(); // Include the footer template ?>