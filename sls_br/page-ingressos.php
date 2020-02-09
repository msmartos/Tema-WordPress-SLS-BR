<?php get_header(); ?>
<div id="page" class="page-padding ingressos">
  <div class="container-titulo-pagina">
    <h2>aaa</h2>
  </div>
  <div class="content">
    <div class="content-left post-left-content">
      <?php echo $post->post_content; ?>
    </div>
    <div class="content-right">
      <?php include get_template_directory().'/right-aside.php'; ?>
    </div>
  </div>
</div>
<?php get_footer(); ?>
