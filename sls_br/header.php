<!doctype HTML>
<html lang="pt-br">
<head>
  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-130165635-1"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-130165635-1');
  </script>

  <link rel="icon" href="<?php bloginfo('template_url'); ?>/img/favicon.png"/>
  <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>"/>
  <!--link type="text/css" rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/style.css" /-->

  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <meta name="description" content="<?php bloginfo('description') ?>"/>
  <title><?php bloginfo('name'); ?></title>
</head>
<body>
  <div class="compare"></div>
  <header>
    <div class="menu-container">
      <div id="nav-mobile">
        <div id="btn-menu-mobile" class="btn-menu">
          menu
        </div>
        <div class="menu-secundario-container">
          <!--ul id="menu-secundario">
            <li>
              <a href="">
                <img src="<?php bloginfo('template_url'); ?>/img/sls_world_tour_nav_tab.png" /><br/>
                Turnê Mundial
              </a>
            </li>
            <li>
              <a href="">
                <img src="<?php bloginfo('template_url'); ?>/img/trick-of-the-year.png" /><br/>
                Manobra do Ano
              </a>
            </li>
            <li>
              <a href="">
                <img src="<?php bloginfo('template_url'); ?>/img/foundation-nav.png" /><br/>
                Fundação
              </a>
            </li>
            <li>
              <a href="">
                <img src="<?php bloginfo('template_url'); ?>/img/foundation-nav.png" /><br/>
                Fundação
              </a>
            </li>
          </ul-->
        </div>
        <nav id="main-nav-container-mobile">
          <a href="<?php bloginfo('url'); ?>">
            <img src="<?php bloginfo('template_url'); ?>/img/sls-logo.png" class="top-logo"  alt="Logo SLS Topo"/>
          </a>
          <?php wp_nav_menu(
              array('theme_location' => 'celular-menu')
            );
          ?>
        </nav>
      </div>

      <div id="nav">
        <div class="borda-menu">
        </div>
        <div class="menu-secundario-container">
          <!--ul id="menu-secundario">
            <li>
              <a href="">
                <img src="<?php bloginfo('template_url'); ?>/img/sls_world_tour_nav_tab.png" /><br/>
                Turnê Mundial
              </a>
            </li>
            <li>
              <a href="">
                <img src="<?php bloginfo('template_url'); ?>/img/trick-of-the-year.png" /><br/>
                Manobra do Ano
              </a>
            </li>
            <li>
              <a href="">
                <img src="<?php bloginfo('template_url'); ?>/img/foundation-nav.png" /><br/>
                Fundação
              </a>
            </li>

          </ul-->
        </div>
        <nav id="main-nav-container-desktop">
          <a href="<?php bloginfo('url'); ?>">
            <img src="<?php bloginfo('template_url'); ?>/img/sls-logo.png" class="top-logo" alt="Logo SLS Topo" />
          </a>
          <?php wp_nav_menu(
              array('theme_location' => 'main-menu')
            );
          ?>
        </nav>
      </div>
    </div>
  </header>
