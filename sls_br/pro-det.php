  <?php include('header.php'); ?>
  <div id="page" class="page-padding">
    <div class="content">

      <div class="pro-details">
        <div class="pro-header">
          <img class="featured-image" src="" />

          <div id="pro-info">
            <div class="pro-nome">
              <h1>TOM<br/>ASTA</h1>
              <img class="bandeira-pais" src="http://streetleague.wpengine.netdna-cdn.com/wp-content/themes/sls_2015/library/images/flags/us-sls-pro-flag.png" alt="pro image">
              <div style="clear: both"></div>
            </div>

            <div class="pro-carreira">
    					<p><span>BORN:</span> January 12, 1990 in Langhorne, PA</p>
    					<p><span>STANCE:</span> Regular</p>
    					<p><span>SPONSORS:</span> Santa Cruz Skateboards, LRG, éS, Thunder Trucks, Ricta Wheels, FKD Bearings, Mob Grip, Braven, Incipio, Electric Eyewear and Watches, Reign Skate Shop</p>
    					<p><span>INSTAGRAM:</span> <a class="pro-ig" href="#">@tomasta</a></span><br>
    				</div>
          </div>

        </div>

        <div class="content-left">
          <p class="pro-text">Reigning from Pennsylvania, Tom Asta started skating when he was 10 and got his first sponsor when he was 14. Tom made his first video appearance in 2009 in Zero’s Strange World but made a name for himself when he dropped his Welcome to Mystery part in 2010. The following year Tom went Pro with his Mystery Color Theory part and in 2012 he joined SLS. Rising up the SLS ranks over the past few years, Tom had his best year in 2016. Taking a 3rd place finish at Tampa Pro, Asta began last season ahead of the curve. He took 4th in Munich and made it to his first Super Crown World Championship finishing 7th overall for the season. His progression in skateboarding has only gotten better year after year.</p>
        </div>

        <div class="content-right">

          <div class="skater-stats">
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
          </div>
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
