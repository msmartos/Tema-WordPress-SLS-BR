  <?php get_header(); ?>
  <div id="page">
    <div id="container-home-left">
      <a href="<?php echo $posts[0]->post_name; ?>">
        <div id="post-destaque">
          <div id="img-post-destaque">
            <?php echo get_the_post_thumbnail($posts[0]->ID); ?>
          </div>
          <div id="container-title-post-destaque">
            <h1><?php echo $posts[0]->post_title; ?></h1>
            <h2><?php echo substr(strip_tags($posts[0]->post_content), 0, 250); ?>...</h2>
          </div>
        </div>
      </a>

      <div id="ultimas-noticias">
        <h3>Ultimas Notícias</h3>
        <a id="ver-mais" href="https://streetleague.com.br/noticias/">Todas as Notícias ></a>
        <ul id="noticias-home">
          <?php
            if(have_posts()){
              while(have_posts()){
                the_post();

                ?>
                <li class="noticia-home-item">
                  <a href="<?php the_permalink(); ?>">
                    <article>
                      <div class="post-img">
                        <?php the_post_thumbnail('thumbnail'); ?>
                      </div>
                      <h2 class="post-title"><?php the_title(); ?></h2>
                      <div class="post-resumo">
                        <?php the_excerpt() ?>
                      </div>
                    </article>
                  </a>
                </li>
                <?php
              }
            }
          ?>
        </ul>
      </div>
    </div>
    <div id="container-home-right">
      <a href="https://streetleague.com.br/como-assistir-a-sls-londres-2019/"><img id="img-results" src="<?= get_template_directory_uri() ?>/img/2019_LA_schedule_sidepod_3.jpg" alt="Agenda SLS World Championship"/></a>
    </div>
  </div>
  <?php get_footer(); ?>
