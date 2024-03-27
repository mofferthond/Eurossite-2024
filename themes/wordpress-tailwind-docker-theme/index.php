<?php get_header(); ?>

<main>
    <div class="container mx-auto my-8">
        <?php if (have_posts()) : ?>
            <?php
            while (have_posts()) :
                the_post();
            ?>
                <article>
                    <h1 class="text-4xl font-bold"><?php the_title(); ?></h1>
                    <div class="my-4">
                        <?php the_content(); ?>
                    </div>
                </article>
            <?php endwhile; ?>
        <?php endif; ?>
    </div>
</main>

<?php
get_footer();
