<?php get_header(); ?>
  <div id="page" class="page-padding">
    <div class="container-titulo-pagina">
      <h2>PROS</h2>
    </div>
    <div class="content">

      <div class="pros">
        <ul id="pros-list">
          <?php
            if(have_posts()) : while(have_posts()) : the_post();
              echo '<li><a href="';
              the_permalink();
              echo '"><div class="pro-img">';
              the_post_thumbnail('full');
              echo '</div></a>';
              the_title();
              echo '</li>';
            endwhile; endif;
          ?>
        </ul>
      </div>



    </div>
  </div>
  <?php include('footer.php'); ?>
