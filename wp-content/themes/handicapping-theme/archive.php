<?php
get_header(); // Include the header template
?>

<div id="primary" class="content-area">
    <main id="main" class="site-main">
        <header class="archive-header">
            <h1 class="archive-title">
                <?php
                if (is_category()) {
                    single_cat_title();
                } elseif (is_tag()) {
                    single_tag_title();
                } elseif (is_author()) {
                    the_post();
                    echo 'Author Archives: ' . get_the_author();
                    rewind_posts();
                } elseif (is_day()) {
                    echo 'Daily Archives: ' . get_the_date();
                } elseif (is_month()) {
                    echo 'Monthly Archives: ' . get_the_date('F Y');
                } elseif (is_year()) {
                    echo 'Yearly Archives: ' . get_the_date('Y');
                } else {
                    echo 'Archives:';
                }
                ?>
            </h1>
        </header>

        <?php
        // Start the loop
        while (have_posts()) :
            the_post();
        ?>

        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <header class="entry-header">
                <h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
            </header>

            <div class="entry-content">
                <?php the_excerpt(); ?>
            </div>
        </article>

        <?php
        // End the loop
        endwhile;
        ?>

        <?php
        // Display pagination links if necessary
        the_posts_pagination();
        ?>
    </main>
</div>

<?php get_footer(); // Include the footer template ?>