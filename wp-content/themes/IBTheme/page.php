<!-- page.php définit la façon dont les PAGES sont affichées -->
<?php get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <div id="main">
            <article class="post">
                <header>
                    <div class="title">
                        <h1><?php the_title(); ?></h1>
                    </div>
                </header>
                <div class="post-content">
                    <?php the_content(); ?>
                </div>
            </article>
        <?php endwhile; ?>
    <?php endif; ?>
        </div>
        <?php get_footer(); ?>