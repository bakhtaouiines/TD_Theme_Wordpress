<!-- single.php définit la mise en page lors de la visualisation d’un seul ARTICLE sur votre site.  -->
<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <div id="main">
            <article class="post">
                <header>
                    <div class="title">
                        <h2><?php the_title(); ?></h2>
                    </div>
                    <div class="meta">
                        <time class="published"><?php the_date(); ?></time>
                        <a class="author" href="<?php the_author(); ?>">
                            <span class="name author"><?php the_author(); ?></span>
                        </a>
                    </div>
                </header>
                <?php the_content(); ?>
                <footer>
                    <ul class="stats">
                        <li><a href="#"><?php the_category(); ?></a></li>
                        <li><a href="#" class="icon solid fa-heart">28</a></li>
                        <li><a href="#" class="icon solid fa-comment"><?php comments_number('0', '1', '%'); ?></a></li>
                    </ul>
                </footer>
                <?php comments_template(); ?>
            </article>
        </div>

    <?php endwhile;
else : ?>
    <article>
        <p>Sorry, no post was found!</p>
    </article>
<?php endif; ?>
</div>
<?php get_footer(); ?>