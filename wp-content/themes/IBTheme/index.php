<!-- index.php définit la page d’accueil et sera également utilisé comme mise en page par défaut si des templates spécifiques (c’est-à-dire single.php , page.php ) ne sont pas trouvés. -->


<?php get_header(); ?>

<div id="main">
    <?php get_sidebar(); ?>
    <div>
        <!-- La boucle indique à WordPress que SI il y a des articles, JUSQU’À CE QU‘il y ait des articles, on AFFICHE les articles. -->
        <?php
        if (have_posts()) : while (have_posts()) : the_post(); ?>
                <header>
                    <?php
                    get_template_part('content', get_post_format());
                    ?>
                </header>
        <?php
            endwhile;
        endif;

        ?>
        <!-- Pagination -->
        <ul class="actions pagination">
            <li class="button large previous"><?php previous_posts_link(); ?></li>
            <li class="button large next"><?php next_posts_link(); ?></li>
        </ul>
    </div>
</div>
<?php get_footer(); ?>
</div>