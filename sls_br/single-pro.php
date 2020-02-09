  <?php get_header(); ?>
  <div id="page" class="page-padding">
    <div class="content">










      <div class="pro-details">
        <div class="pro-header">
          <img class="featured-image" src="https://streetleague.com.br/wp-content/uploads/<?php echo get_post_meta( $post->ID, 'proimg', TRUE ); ?>" />

          <div id="pro-info">
            <div class="pro-nome">
              <h1><?php the_title() ?></h1>
              <!--img class="bandeira-pais" src="http://streetleague.wpengine.netdna-cdn.com/wp-content/themes/sls_2015/library/images/flags/us-sls-pro-flag.png" alt="pro image"-->
              <div style="clear: both"></div>
            </div>

            <div class="pro-carreira">

    					<p><span>BORN:</span> <?php echo get_post_meta( $post->ID, 'nascimento', TRUE ); ?></p>
    					<p><span>STANCE:</span> <?php echo get_post_meta( $post->ID, 'base', TRUE ); ?></p>
    					<p><span>SPONSORS:</span> <?php echo get_post_meta( $post->ID, 'patrocinadores', TRUE ); ?></p>
    					<p><span>INSTAGRAM:</span> <a class="pro-ig" href="#"><?php echo get_post_meta( $post->ID, 'instagram', TRUE ); ?></a></span><br>
    				</div>
          </div>

        </div>

        <div class="content-left">
          <p class="pro-text"><?= $post->post_content; ?></p>
        </div>

        <div class="content-right">

          <!--div class="skater-stats">
            <h2>STATS</h2>

            <div class="tabs">
              <button class="tablinks" onclick="openTab(event, 'y2018')">2018</button>
              <button class="tablinks" onclick="openTab(event, 'y2017')">2017</button>
              <button class="tablinks" onclick="openTab(event, 'y2016')">2016</button>
            </div>

            <div id="y2018" class="tabcontent">
              <p>
                Text left
                <span class="stats-right">
                  text right
                </span>
              </p>
              <p>
                Text left
                <span class="stats-right">
                  text right
                </span>
              </p>
              <p>
                Text left
                <span class="stats-right">
                  text right
                </span>
              </p>
              <p class="stats-title">Teste</p>

              <h4 class="stats-heading">Head</h4>
              <p class="stats-title">Teste</p>
              <p class="stats-title">Teste</p>
              <p class="stats-title">Teste</p>
              <p class="stats-title">Teste</p>

            </div>
            <div id="y2017" class="tabcontent">
              2017
            </div>
            <div id="y2016" class="tabcontent">
              2016
            </div>
          </div-->
          <script type="text/javascript">
            function openTab(evt, year){
              var i, tabcontent, tablinks;

              tabcontent = document.getElementsByClassName("tabcontent");
              for (i=0; i<tabcontent.length; i++){
                tabcontent[i].style.display = "none";
              }

              tablinks = document.getElementsByClassName("tablinks");
              for(i=0; i<tablinks.length; i++){
                tablinks[i].className = tablinks[i].className.replace(" active", "");
              }

              document.getElementById(year).style.display = "block";
              evt.currentTarget.className += " active";
            }
          </script>

        </div>
      </div>

    </div>
  </div>
  <?php include('footer.php'); ?>
