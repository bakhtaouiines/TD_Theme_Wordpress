<!-- Sidebar -->
<section id="sidebar">
    <!-- Intro -->
    <section id="intro">
        <?php if (function_exists('the_custom_logo')) {
            the_custom_logo();
        } ?>
        <header>
            <h2><?php bloginfo('name'); ?></h2>
            <p><?php bloginfo('description'); ?></p>
        </header>
    </section>

    <!-- Mini Posts -->
    <?php
    if (have_posts()) : while (have_posts()) : the_post(); ?>
            <section>
                <div class="mini-posts">
                    <article class="mini-post">
                        <header>
                            <h3><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h3>
                            <time class="published"><?php the_date(); ?></time>
                            <a href="#" class="author"><?= get_avatar(get_the_author_meta('ID'), 30); ?></a>
                        </header>
                        <a href="<?php the_permalink() ?>" class="image"><?php the_post_thumbnail() ?></a>
                    </article>

                </div>
            </section>
        <?php endwhile; ?>
    <?php endif; ?>

    <!-- Posts List -->
    <?php
    if (have_posts()) : while (have_posts()) : the_post(); ?>
            <section>
                <ul class="posts">
                    <li>
                        <article>
                            <header>
                                <h3><a href="the_permalink()"><?php the_title(); ?></a></h3>
                                <time class="published"><?php the_date(); ?></time>
                            </header>
                            <a href="<?php the_permalink() ?>" class="image"><img src="<?php echo get_template_directory_uri(); ?>/images/pic08.jpg" alt="" /></a>
                        </article>
                    </li>
                </ul>
            </section>
        <?php endwhile; ?>
    <?php endif; ?>

    <!-- About -->
    <section class=" blurb">
        <h3>À Propos</h3>
        <ul class="actions">
            <li><a href="<?= (get_permalink($post->ID)); ?>" class="button">Learn More</a></li>
        </ul>
        <!-- Archives -->
        <h4>Archives</h4>
        <ul class="list-unstyled">
            <li><?php wp_get_archives('type=monthly'); ?></li>
        </ul>
    </section>

    <?php if (is_active_sidebar('sidebar')) : ?>
        <?php dynamic_sidebar('sidebar'); ?>

    <?php endif; ?>
</section>