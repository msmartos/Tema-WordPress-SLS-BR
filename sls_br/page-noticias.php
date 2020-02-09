  <?php get_header(); ?>
  <div id="page" class="page-padding">
    <div class="container-titulo-pagina">
      <h2>Todas as Notícias</h2>
    </div>
    <div class="content">
      <?php
        //posts destaque
        $ids = array(); //ids dos posts destaques que a próxima wp query irá ignorar
        $argsdestaq = array('post_type' => 'post', 'posts_per_page' => 3 , 'paged' => 1);
        $wp_querydestaques = new WP_Query($argsdestaq);
        if($wp_querydestaques->have_posts()){
          while($wp_querydestaques->have_posts()){
            $wp_querydestaques->the_post();
            array_push($ids, get_the_ID());
          }
        }
      ?>
      <div id="noticias-destaques">
        <div class="noticia-destaque-esq">
          <?= get_the_post_thumbnail($wp_querydestaques->posts[0]->ID) ?>
          <a href="<?php echo $wp_querydestaques->posts[0]->post_name; ?>">
            <div class="destaque-texto">
              <p class="destaque-title principal"><?= $wp_querydestaques->posts[0]->post_title ?></p>
              <!--p class="destaque-resumo"><?php echo substr(strip_tags($posts[0]->post_content), 0, 120); ?>...</p-->
            </div>
          </a>
        </div>
        <div class="noticia-destaque-dir">
          <ul>
            <li>
              <a href="<?php echo $wp_querydestaques->posts[1]->post_name; ?>">
                <?= get_the_post_thumbnail($wp_querydestaques->posts[1]->ID); ?>
                <div class="destaque-texto">
                  <p class="destaque-title"><?= $wp_querydestaques->posts[1]->post_title ?></p>
                </div>
              </a>
            </li>
            <li>
              <a href="<?php echo $wp_querydestaques->posts[2]->post_name; ?>">
                <?= get_the_post_thumbnail($wp_querydestaques->posts[2]->ID); ?>
                <div class="destaque-texto">
                  <p class="destaque-title"><?= $wp_querydestaques->posts[2]->post_title ?></p>
                </div>
              </a>
            </li>
          </ul>
        </div>
      </div>
      <div class="content-noticias">
        <div class="content-left">
          <ul id="noticias-list">
              <?php
                $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                //ver se é a primeira página (para puxar os 10 posts e ignora os 3 primeiros, graças as notícias destaq)
                $args = array( 'post_type' => 'post', 'posts_per_page' => 7, 'paged' => $paged, 'post__not_in' => $ids );
                $wp_query = new WP_Query($args);
                if(have_posts()){
                  while(have_posts()){
                    the_post();
                    ?>
                    <li class="noticia-list-item">
                      <a href="<?php the_permalink() ?>">
                        <article>
                          <div class="post-img">
                            <?php the_post_thumbnail('thumbnail') ?>
                          </div>
                          <h2 class="post-title"><?php the_title() ?></h2>
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

          <?php
            wpbeginner_numeric_posts_nav();
          ?>

        </div>
        <div class="content-right">
          <?php include get_template_directory().'/right-aside.php'; ?>
        </div>
      </div>
    </div>
  </div>
  <?php include('footer.php'); ?>
