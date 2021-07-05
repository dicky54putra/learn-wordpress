<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <p> <?= get_the_date('l jS F, Y') ?></p>
        <?php the_content(); ?>
        <?php
        $fname = get_the_author_meta('first_name');
        $lname = get_the_author_meta('last_name');
        ?>
        <p>Post By: <?= $fname . ' ' . $lname; ?></p>
        <?php
        $tags = get_the_tags();
        if ($tags) {
            foreach ($tags as $tag) {
        ?>
                <a class="badge bg-success" href="<?= get_tag_link($tag->term_id); ?>"><?= $tag->name ?></a>
            <?php } ?>
        <?php } ?>
        <?php
        $categories = get_the_category();
        foreach ($categories as $cat) {
        ?>
            <a class="" href="<?= get_category_link($cat->term_id); ?>"><?= $cat->name ?></a>
        <?php
        }
        ?>

        <?php //comments_template() 
        ?>
<?php endwhile;
else :
endif; ?>