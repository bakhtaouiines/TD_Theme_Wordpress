<!DOCTYPE HTML>
<!--
	Future Imperfect by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html <?php language_attributes(); ?>>

<head>
    <title><?php bloginfo('name'); ?></title>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>

<body class="is-preload" <?php body_class(); ?>>
    <!-- body_class = permet à des plugins et à différentes fonctions d’ajouter des éléments à cet endroit précis -->

    <?php wp_body_open(); ?>

    <div id="wrapper">
        <!-- Header -->
        <header id="header">
            <nav class="navbar navbar-expand-lg navbar-light">
                <div class="container-fluid">
                    <h1 class="fs-5 m-0"><a class="navbar-brand " href="<?= bloginfo('wpurl'); ?>"><?= bloginfo('name'); ?></a></h1>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0 links">
                            <li class="nav-item">
                                <!--Menu Widget -->
                                <?= wp_nav_menu(array('theme_location' => 'main')); ?>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <nav class="main">
                <ul>
                    <li class="search">
                        <a class="fa-search" href="#search">Search</a>
                        <form id="search" method="get" action="#">
                            <input type="text" name="query" placeholder="Search" />
                        </form>
                    </li>
                    <li class="menu">
                        <button class="mybutton px-4 m-0" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvas" role="button">
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-list" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z" />
                            </svg>
                        </button>
                    </li>
                </ul>
            </nav>

            <!-- Side Menu Widget-->
            <div class="offcanvas offcanvas-end w-10" tabindex="-1" id="offcanvas" data-bs-keyboard="false" data-bs-backdrop="false">
                <div class="offcanvas-header">
                    <div class="d-none d-sm-block" id="offcanvas">
                        <!-- Search -->
                        <section>
                            <form class="search" method="get" action="#">
                                <input type="text" name="query" placeholder="Search">
                            </form>
                        </section>
                    </div>
                    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <hr>
                <div class="offcanvas-body px-0">
                    <section>
                        <ul class="links">
                            <li>
                                <h3>
                                    <?= wp_nav_menu(array('theme_location' => 'side')); ?>
                                </h3>
                            </li>
                        </ul>
                    </section>
                    <hr>
                    <!-- Actions -->
                    <section>
                        <ul class="actions stacked">
                            <li><a href="#" class="button large fit">Log In</a></li>
                        </ul>
                    </section>
                </div>
            </div>
        </header>