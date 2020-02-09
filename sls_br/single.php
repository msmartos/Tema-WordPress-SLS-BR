  <?php get_header(); ?>
  <div id="page" class="page-padding">
    <div class="content">
      <div class="content-left">
        <div class="container-titulo-pagina">
          <h2 class="titulo-noticia"><?php the_title() ?></h2>
          <div class="post-content">
            <?= $post->post_content; ?>
          </div>
        </div>
      </div>
      <div class="content-right single-news">
        <?php include get_template_directory().'/right-aside.php'; ?>
      </div>
    </div>
  </div>
  <?php include('footer.php'); ?>
