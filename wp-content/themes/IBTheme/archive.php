<?php
get_header(); ?>

<?php the_post(); ?>
    <h2>Archive Page</h2>
<section>
    <form class="search" method="get" action="#">
        <input type="text" name="query" placeholder="Search">
    </form>
</section>
<article class="post">
    <?php the_post(); ?>
    <header>
        <div class="title">
            <h3><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h3>
        </div>
        <div class="meta">
            <time class="published"><?php the_date(); ?></time>
            <a class="author" href="<?= get_author_posts_url(get_the_author_meta('ID')); ?>">
                <span class="name author"><?php the_author(); ?></span>
                <?= get_avatar(get_the_author_meta('ID'), 40); ?>
            </a>
        </div>
    </header>

    <h2>Mois:</h2>
    <ul>
        <?php wp_get_archives('type=monthly'); ?>
    </ul>

    <h2>Catégories:</h2>
    <ul>
        <?php wp_list_categories(); ?>
    </ul>
</article>
<?php get_footer(); ?>