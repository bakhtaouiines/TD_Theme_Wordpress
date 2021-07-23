<!-- contenu des posts bouclé dans l'index -->
<article class="post">
    <header>
        <div class="title">
            <h2><a href="<?= the_permalink(); ?>"><?php the_title(); ?></a></h2>
        </div>

        <div class="meta">
            <time class="published"><?php the_date(); ?></time>
            <a class="author" href="<?php the_author(); ?>">
                <span class="name author"><?php the_author(); ?></span>
                <?= get_avatar(get_the_author_meta('ID'), 40); ?>
            </a>
        </div>

    </header>

    <?php the_excerpt(); ?>
    <!-- Extrait du post -->

    <footer>
        <ul class="actions">
            <li>
                <a href="<?= the_permalink(); ?>" class="button large">Continue Reading</a>
            </li>
        </ul>
        <ul class="stats">
            <li><a href="#"><?php the_category(); ?></a></li>
            <li><a href="#" class="icon solid fa-heart">28</a></li>
            <li><a href="#" class="icon solid fa-comment"><?php comments_number('0', '1', '%'); ?></a></li>
        </ul>
    </footer>
</article>