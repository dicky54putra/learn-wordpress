<?php get_header(); ?>


<section class="page-wrap">
    <div class="container">
        <section class="row">
            <div class="col-lg-3">
                <?php if (is_active_sidebar('blog-sidebar')) { ?>
                    <?php dynamic_sidebar('blog-sidebar') ?>
                <?php } ?>
            </div>
            <div class="col-lg-9">

                <h1>Search result for '<?= get_search_query() ?>'</h1>
                <?php get_template_part('includes/section', 'searchresults') ?>

                <?php previous_posts_link()
                ?>
                <?php next_posts_link()
                ?>

                <?php
                global $wp_query;
                // $big = 9999999;

                // echo paginate_links([
                //     'base' => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
                //     'format' => '?paged=%#%',
                //     'current' => max(1, get_query_var('paged')),
                //     'total' => $wp_query->max_num_pages
                // ])
                ?>
            </div>
        </section>
    </div>
</section>

<?php get_footer(); ?>