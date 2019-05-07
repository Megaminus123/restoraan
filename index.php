<?php
require ('conf.php');
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Osihiteo Restoran</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lovers+Quarrel" rel="stylesheet">
    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">

    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">


    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>

	  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href="index.php">Osihiteo</a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	        	<li class="nav-item active"><a href="index.php" class="nav-link">Avaleht</a></li>
	        	<li class="nav-item"><a href="menu.php" class="nav-link">Menüü</a></li>
	        	<li class="nav-item"><a href="reservation.php" class="nav-link">Reserveerimine</a></li>
	          <li class="nav-item"><a href="contact.html" class="nav-link">Kontakt</a></li>
	        </ul>
	      </div>
	    </div>
	  </nav>
    <!-- END nav -->

    <section class="home-slider js-fullheight owl-carousel bg-white">
      <div class="slider-item js-fullheight">
      	<div class="overlay"></div>
        <div class="container-fluid p-0">
          <div class="row d-md-flex no-gutters slider-text js-fullheight align-items-center justify-content-end" data-scrollax-parent="true">
          	<div class="one-third order-md-last img js-fullheight" style="background-image:url(images/bg_3.jpg);">
          		<div class="overlay"></div>
          	</div>
	          <div class="one-forth d-flex js-fullheight align-items-center ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
	          	<div class="text mt-md-5">
		            <h1 class="mb-4">Söö tervislikult <br> ja looduslikku toitu</h1>
		            <p>Väike jõgi nimega Duden voolab ja varustab seda vajaliku regelialiaga. See on paradisemaatiline riik.</p>
		            <div class="thumb mt-4 mb-3 d-flex">
		            	<a href="#" class="thumb-menu pr-md-4 text-center">
		            		<div class="img" style="background-image: url(images/menu-1.jpg);"></div>
		            		<h4>Austraalia orgaaniline veiseliha</h4>
		            	</a>
		            	<a href="#" class="thumb-menu pr-md-4 text-center">
		            		<div class="img" style="background-image: url(images/menu-2.jpg);"></div>
		            		<h4>Austraalia orgaaniline veiseliha</h4>
		            	</a>
		            	<a href="#" class="thumb-menu pr-md-4 text-center">
		            		<div class="img" style="background-image: url(images/menu-3.jpg);"></div>
		            		<h4>Austraalia orgaaniline veiseliha</h4>
		            	</a>
		            </div>
		            <p><a href="reservation.php" class="btn btn-primary px-4 py-3 mt-3">Broneeri laud</a></p>
	            </div>
	          </div>
        	</div>
        </div>
      </div>

      <div class="slider-item js-fullheight">
      	<div class="overlay"></div>
        <div class="container-fluid p-0">
          <div class="row d-flex no-gutters slider-text js-fullheight align-items-center justify-content-end" data-scrollax-parent="true">
          	<div class="one-third order-md-last img js-fullheight" style="background-image:url(images/bg_2.jpg);">
          		<div class="overlay"></div>
          	</div>
	          <div class="one-forth d-flex js-fullheight align-items-center ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
	          	<div class="text mt-md-5">
		            <h1 class="mb-4">Me Armastame <br> Maitsvat toitu</h1>
		            <p>Väike jõgi nimega Duden voolab oma koha järgi ja varustab seda vajaliku regelialiaga. See on paradisemaatiline riik.</p>
		            <div class="thumb mt-4 mb-3 d-flex">
		            	<a href="#" class="thumb-menu pr-md-4 text-center">
		            		<div class="img" style="background-image: url(images/menu-1.jpg);"></div>
		            		<h4>Austraalia orgaaniline veiseliha</h4>
		            	</a>
		            	<a href="#" class="thumb-menu pr-md-4 text-center">
		            		<div class="img" style="background-image: url(images/menu-2.jpg);"></div>
		            		<h4>Austraalia orgaaniline veiseliha</h4>
		            	</a>
		            	<a href="#" class="thumb-menu pr-md-4 text-center">
		            		<div class="img" style="background-image: url(images/menu-3.jpg);"></div>
		            		<h4>Austraalia orgaaniline veiseliha</h4>
		            	</a>
		            </div>
		            <p><a href="reservation.php" class="btn btn-primary px-4 py-3 mt-3">Broneeri laud</a></p>
	            </div>
	          </div>
        	</div>
        </div>
      </div>
    </section>


		<section class="ftco-section ftco-wrap-about ftco-no-pb ftco-no-pt">
			<div class="container">
				<div class="row no-gutters">
					<div class="col-sm-5 img img-2 d-flex align-items-center justify-content-center justify-content-md-end" style="background-image: url(images/about.jpg); position: relative">

  					</a>
					</div>
					<div class="col-sm-7 wrap-about py-5 ftco-animate">
	          <div class="heading-section mt-5 mb-4">
	          	<div class="pl-lg-5 ml-md-5">
		          	<span class="subheading">Kohta </span>
		            <h2 class="mb-4">Tere tulemast Oshiteo Restorani</h2>
	            </div>
	          </div>
	          <div class="pl-lg-5 ml-md-5">
							<p>Ilmselt ei ole meie maitsvad hamburgerid teile võõrad, kuid kui palju te meie ettevõttest teate? Kas näiteks teate, milles peitub Hesburgeri edu saladus? Millest on valmistatud meie biolagunevad salatikarbid? Või mida me Bangladeshis teeme? Lugege ja imestage.</p>
							<h3 class="mt-5">Eriretseptid</h3>
							<div class="thumb my-4 d-flex">
	            	<a href="#" class="thumb-menu pr-md-4 text-center">
	            		<div class="img" style="background-image: url(images/lunch-4.jpg);"></div>
	            		<h4>Austraalia orgaaniline veiseliha</h4>
	            	</a>
	            	<a href="#" class="thumb-menu pr-md-4 text-center">
	            		<div class="img" style="background-image: url(images/lunch-7.jpg);"></div>
	            		<h4>Austraalia orgaaniline veiseliha</h4>
	            	</a>
	            	<a href="#" class="thumb-menu pr-md-4 text-center">
	            		<div class="img" style="background-image: url(images/lunch-6.jpg);"></div>
	            		<h4>Austraalia orgaaniline veiseliha</h4>
	            	</a>
	            </div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section class="ftco-section ftco-counter img" id="section-counter" style="background-image: url(images/bg_4.jpg);" data-stellar-background-ratio="0.5">
    	<div class="container">
    		<div class="row d-md-flex align-items-center justify-content-center">
    			<div class="col-lg-10">
    				<div class="row d-md-flex align-items-center">
		          <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18">
		              <div class="text">
		                <strong class="number" data-number="3">0</strong>
		                <span>Kogemus Aastad</span>
		              </div>
		            </div>
		          </div>
		          <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18">
		              <div class="text">
		                <strong class="number" data-number="1337">0</strong>
		                <span>Rahuldatud Kliendid</span>
		              </div>
		            </div>
		          </div>
		          <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18">
		              <div class="text">
		                <strong class="number" data-number="322">0</strong>
		                <span>Tööpäevad</span>
		              </div>
		            </div>
		          </div>
	          </div>
          </div>
        </div>
    	</div>
    </section>


    <section class="ftco-section">
    	<div class="container">
    		<div class="row justify-content-center mb-5 pb-2">
          <div class="col-md-7 text-center heading-section ftco-animate">

            <h2 class="mb-4">Meie Menüü</h2>
          </div>
        </div>
        <div class="row">
        	<div class="col-md-6 col-lg-4 menu-wrap">
        		<div class="heading-menu text-center ftco-animate">
        			<h3>Eelroad</h3>
        		</div>
            <?php
            $palju= 0;
            $kask=$yhendus->prepare("SELECT id, nimi,maksab,sisaldus,kategooria,pilt FROM menuu  WHERE kategooria = 'Eelroad'");
            $kask->bind_result($id, $nimi, $maksab, $sisaldus, $kategooria,$pilt);
            $kask->execute();
            while($kask->fetch()){
              if($palju == 3){

              }
              else{
                echo '<div class="menus d-flex ftco-animate">';
                echo '<div class="menu-img img" style="background-image: url(images/restoraan/'.$pilt.');">';
                echo '</div>';
                echo '<div class="text">';
                echo '<div class="d-flex">';
                echo '<div class="one-half">';
                echo '<h3>'.$nimi.'</h3>';
                echo '</div>';
                echo '<div class="one-forth">';
                echo '<span class="price">'.$maksab.' €</span>';
                echo '</div>';
                echo '</div>';
                echo '<p><span>'.$sisaldus.'</span></p>';
                echo '</div>';
                echo '</div>';
                $palju = $palju + 1;
              }

          }
            ?>
            </div>
        	<div class="col-md-6 col-lg-4 menu-wrap">
        		<div class="heading-menu text-center ftco-animate">
        			<h3>Pearoad</h3>
        		</div>
            <?php
            $paljuu= 0;
            $kask=$yhendus->prepare("SELECT id, nimi,maksab,sisaldus,kategooria,pilt FROM menuu  WHERE kategooria = 'Pearoad'");
            $kask->bind_result($id, $nimi, $maksab, $sisaldus, $kategooria,$pilt);
            $kask->execute();
            while($kask->fetch()){
              if($paljuu == 3){

              }
              else{
                echo '<div class="menus d-flex ftco-animate">';
                echo '<div class="menu-img img" style="background-image: url(images/restoraan/'.$pilt.');">';
                echo '</div>';
                echo '<div class="text">';
                echo '<div class="d-flex">';
                echo '<div class="one-half">';
                echo '<h3>'.$nimi.'</h3>';
                echo '</div>';
                echo '<div class="one-forth">';
                echo '<span class="price">'.$maksab.' €</span>';
                echo '</div>';
                echo '</div>';
                echo '<p><span>'.$sisaldus.'</span></p>';
                echo '</div>';
                echo '</div>';
                $paljuu = $paljuu + 1;
              }
          }
            ?>
        </div>

        	<div class="col-md-6 col-lg-4 menu-wrap">
        		<div class="heading-menu text-center ftco-animate">
        			<h3>Magustoit</h3>
        		</div>
            <?php
            $paljuu= 0;
            $kask=$yhendus->prepare("SELECT id, nimi,maksab,sisaldus,kategooria,pilt FROM menuu  WHERE kategooria = 'Magustoit'");
            $kask->bind_result($id, $nimi, $maksab, $sisaldus, $kategooria,$pilt);
            $kask->execute();
            while($kask->fetch()){
              if($paljuu == 3){

              }
              else{
                echo '<div class="menus d-flex ftco-animate">';
                echo '<div class="menu-img img" style="background-image: url(images/restoraan/'.$pilt.');">';
                echo '</div>';
                echo '<div class="text">';
                echo '<div class="d-flex">';
                echo '<div class="one-half">';
                echo '<h3>'.$nimi.'</h3>';
                echo '</div>';
                echo '<div class="one-forth">';
                echo '<span class="price">'.$maksab.' €</span>';
                echo '</div>';
                echo '</div>';
                echo '<p><span>'.$sisaldus.'</span></p>';
                echo '</div>';
                echo '</div>';
                $paljuu = $paljuu + 1;
              }
          }
            ?>
        </div>

        	<!--  -->


        	<div class="col-md-6 col-lg-4 menu-wrap">
        		<div class="heading-menu text-center ftco-animate">
        			<h3>Joogid</h3>
        		</div>
            <?php
            $paljuu= 0;
            $kask=$yhendus->prepare("SELECT id, nimi,maksab,sisaldus,kategooria,pilt FROM menuu  WHERE kategooria = 'Joogid'");
            $kask->bind_result($id, $nimi, $maksab, $sisaldus, $kategooria,$pilt);
            $kask->execute();
            while($kask->fetch()){
              if($paljuu == 3){

              }
              else{
                echo '<div class="menus d-flex ftco-animate">';
                echo '<div class="menu-img img" style="background-image: url(images/restoraan/'.$pilt.');">';
                echo '</div>';
                echo '<div class="text">';
                echo '<div class="d-flex">';
                echo '<div class="one-half">';
                echo '<h3>'.$nimi.'</h3>';
                echo '</div>';
                echo '<div class="one-forth">';
                echo '<span class="price">'.$maksab.' €</span>';
                echo '</div>';
                echo '</div>';
                echo '<p><span>'.$sisaldus.'</span></p>';
                echo '</div>';
                echo '</div>';
                $paljuu = $paljuu + 1;
              }
          }
            ?>
        </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center ftco-animate">
            <p><a href="menu.php" class="btn btn-black py-3 px-5">Vaata Tervet Menüüd</a></p>
          </div>
        </div>
      </div>


    </section>

    <section class="ftco-section testimony-section" style="background-image: url(images/bg_5.jpg);" data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row justify-content-center mb-5 pb-2">
          <div class="col-md-7 text-center heading-section heading-section-white ftco-animate">
          	<span class="subheading">Tunnistus</span>
            <h2 class="mb-4">Õnnelik Klient</h2>
          </div>
        </div>
        <div class="row ftco-animate justify-content-center">
          <div class="col-md-7">
            <div class="carousel-testimony owl-carousel ftco-owl">
              <div class="item">
                <div class="testimony-wrap text-center py-4 pb-5">
                  <div class="user-img mb-4" style="background-image: url(images/restoraan/customers/customer1.jpg)">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text p-3">
                    <p class="mb-4">Parim restoran maailmas</p>
                    <p class="name">Daniil Kuzitškin</p>
                    <span class="position">Klient</span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap text-center py-4 pb-5">
                  <div class="user-img mb-4" style="background-image: url(images/restoraan/customers/customer2.jpg)">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text p-3">
                    <p class="mb-4">Ma olin väga rahul</p>
                    <p class="name">Kaneki Ken</p>
                    <span class="position">Klient</span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap text-center py-4 pb-5">
                  <div class="user-img mb-4" style="background-image: url(images/restoraan/customers/customer3.jpg)">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text p-3">
                    <p class="mb-4">Parim Restoraan</p>
                    <p class="name">Artjom Dmitriev</p>
                    <span class="position">Klient</span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap text-center py-4 pb-5">
                  <div class="user-img mb-4" style="background-image: url(images/restoraan/customers/customer4.jpg)">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text p-3">
                    <p class="mb-4">Väga hea teenindus</p>
                    <p class="name">Oleg Avtomobilev</p>
                    <span class="position">Klient</span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap text-center py-4 pb-5">
                  <div class="user-img mb-4" style="background-image: url(images/person_3.jpg)">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text p-3">
                    <p class="mb-4">Parim Restoraan maailmas.Hea teenindus</p>
                    <p class="name">Vladimir Putin</p>
                    <span class="position">Klient</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

		<section class="ftco-section">
			<div class="container">
				<div class="row justify-content-center mb-5 pb-2">
          <div class="col-md-7 text-center heading-section ftco-animate">
          	<span class="subheading">Parimad</span>
            <h2 class="mb-4">Meie kokad</h2>
          </div>
        </div>
				<div class="row">
					<div class="col-md-6 col-lg-3 ftco-animate">
						<div class="staff">
							<div class="img" style="background-image: url(images/chef-4.jpg);"></div>
							<div class="text px-4 pt-4">
								<h3>John Smooth</h3>
								<span class="position mb-2">Kokk</span>
							</div>
						</div>
					</div>
					<div class="col-md-6 col-lg-3 ftco-animate">
						<div class="staff">
							<div class="img" style="background-image: url(images/chef-2.jpg);"></div>
							<div class="text px-4 pt-4">
								<h3>Rebeca Welson</h3>
								<span class="position mb-2">PeaKokk</span>
							</div>
						</div>
					</div>
					<div class="col-md-6 col-lg-3 ftco-animate">
						<div class="staff">
							<div class="img" style="background-image: url(images/chef-3.jpg);"></div>
							<div class="text px-4 pt-4">
								<h3>Kharl Branyt</h3>
								<span class="position mb-2">Kokk</span>
							</div>
						</div>
					</div>
					<div class="col-md-6 col-lg-3 ftco-animate">
						<div class="staff">
							<div class="img" style="background-image: url(images/chef-1.jpg);"></div>
							<div class="text px-4 pt-4">
								<h3>Luke Simon</h3>
								<span class="position mb-2">Kokk</span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
    <footer class="ftco-footer ftco-bg-dark ftco-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md-6 col-lg-3">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Osihiteo</h2>
              <p>Parim restoran planeedil, kus saab ilma toiduga osta</p>
              <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-3">
                <li class="ftco-animate"><a href="https://www.instagram.com/terkecorejz"><span class="icon-instagram"></span></a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-6 col-lg-3">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Oleme Avatud</h2>
              <ul class="list-unstyled open-hours">
                <li class="d-flex"><span>Esmaspäev</span><span>9:00 - 22:00</span></li>
                <li class="d-flex"><span>Teisipäev</span><span>9:00 - 21:00</span></li>
                <li class="d-flex"><span>Kolmapäev</span><span>9:00 - 23:00</span></li>
                <li class="d-flex"><span>Neljapäev</span><span>10:00 - 00:00</span></li>
                <li class="d-flex"><span>Reede</span><span>9:00 - 02:00</span></li>
                <li class="d-flex"><span>Laupäev</span><span>9:00 - 02:00</span></li>
                <li class="d-flex"><span>Pühapäev</span><span> Suletud</span></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center">

            <p>Ootame kõiki ja näljaseid inimesi meie restoranis<i class="icon-heart" aria-hidden="true"></i></p>
          </div>
        </div>
      </div>
    </footer>


  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>
  <script src="js/jquery.timepicker.min.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>

  </body>
</html>
