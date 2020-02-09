<div class="footer-container">
  <footer id="footer">
    <div id="nav-menu-footer-container">
      <h4>Navegue</h4>
      <?php wp_nav_menu(
        array('theme_location' => 'main-menu')
      );
      ?>
    </div>
    <div id="recent-posts-footer-container">
      <h4>Últimas Notícias</h4>
      
      <ul id="menu-footer">
        <?php
          if(have_posts()){
            while(have_posts()){
                the_post();
        ?>
        <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
        <?php
            }
          }
        ?>
      </ul>
    </div>
  </footer>
</div>
<script>
  var btnmenu = document.getElementById('btn-menu-mobile');
  var menu = document.getElementById('menu-menu-celular');
  btnmenu.addEventListener('click', function (event){
    if(btnmenu.classList.contains('active')){
      menu.classList.remove("show-menu");
      btnmenu.classList.remove("active");
    }
    else{
      menu.classList.add("show-menu");
      btnmenu.classList.add("active");
    }
  });
</script>
</body>
</html>
