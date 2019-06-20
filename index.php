<!DOCTYPE html>
<html>
<head>
	<title>Boxigo</title>

	<!-- ----------------------------basic add ons------------------------- -->
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link href='https://fonts.googleapis.com/css?family=Voces' rel='stylesheet' type='text/css'>
	<!-- ============================basic add ons end--------------------- -->

	<!-- --------------------------------Boot strap link------------------------------------------------------------------- -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


	<!-- font awesome -->

	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
	<!-- --------------------------------Boot strap link end-->

	<!-- -------------------------------------------style-------------------------------------------------------- -->



	<link rel="stylesheet" type="text/css" href="style.css">
<!----------------------------------------------form section style----------------------------------------------  -->

	<link rel="stylesheet" type="text/css" href="form-section.css">
<!-- --------------------------------form section style end----------------------------------------------------- -->


<!-- -------------------------------------------style end---------------------------------------------------- -->

</head>
<body onload="myFunction()">


	<!-- -----------------------------preload---------------------------------------------------------------------- -->

	<div id="loading">
		
	</div>


	<!-- ----------------------------preload end------------------------------------------------------------------- -->

	<!-- --------------------------------------------nav bar---------------------------------------------------------- -->
	<nav class="navbar navbar-expand-md navbar-light bg-light">
	  <a class="navbar-brand" href="#">Boxigo</a>
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
		    <span class="navbar-toggler-icon"></span>
		  </button>
		  <div class="collapse navbar-collapse " id="navbarNav">
		    <ul class="navbar-nav">
		      <li class="nav-item">
		        <a class="nav-link" href="#">Home</a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="#aboutus">About Us</a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="#contactus">Contact Us</a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="#estimate">Get quote</a>
		      </li> 
		    </ul>
		  </div>
	</nav>
	<!-- --------------------------------------------nav bar end------------------------------------------------------ -->

	<!-- ============================================Estimate cost region-------------------(section 1)-------------------------- -->
	<div class="section1" id="estimate">

	<div id="particles-js"></div>
	<script src="http://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>


		<div class="container estimate-region" style="z-index: 10">
			<h1>Pack Your Emotions</h1>
			<p>We will revive you at your new location</p>
			<button onclick="nextsection()">Estimate Now</button>
		</div>
	</div>
	<!-- ============================================Estimate cost region--------------------(section 1 end)------------------------- -->

	<!-- ============================================Estimate cost region (form)--------------------(section 1 form)------------------------- -->
	<div class="form-section" id="form" style="display: none;">

	

		<?php include_once('form-section.php'); ?>
	</div>

	<!-- ============================================Estimate cost region  (form end)--------------------(section 1 form)------------------------- -->

	<!-- =====================================================About us region-------------------(section 2)-------------------------- -->

	<div class="section2" id="aboutus">
		<div class="aboutus container">
			<h1><b>"Alone we can do so little ; Together we can do so much"</b></h1>
			<hr>
			<p>We accumulate multiple vendors at one place for one cause “reaching the sights of customers”.  We join our hands to bridge the chasm between customers and vendors.</p>
			<h4>We put ours hands together, to serve you better.</h4>
		</div>
	</div>

	<!-- =====================================================About us region end---------------(section 2)-------------------------- -->




	<!-- =====================================================Our Mission region---------------(section 3)-------------------------- -->


	<div class="section3" id="ourmission">
		<div class="ourmission container-fluid">
			<div class="row">
				<div class="col-sm-6 image-section">
					<img src="images/ourmission.png">
				</div>

				<div class="col-sm-6 content-section ">
					<div class="row content">
						<i class="fas fa-trophy"></i>
						<h3>OUR MISSION</h3>
						
						<p>To spread the power of optimism in hassle free shifting and ensure a healthier connect between our clients and customer.</p>
					</div>
					<div class="row content">
						<i class="fas fa-thumbs-up"></i><h3>OUR PROMISE</h3>
						
						<p>To lead the market on behalf of Packers and Movers, To be the Voice of Customers.Promising entity for the growth of vendors and services to the customers at its best</p>
					</div>
				</div>
			</div>
		</div>
		
	</div>





	<!-- =====================================================Our Mission region end---------------(section 3)-------------------------- -->




<!-- ----------------------------------contact section-----------------------------------------------(section 4) -->

<div class="section4" id="contactus">
	<div class="social-media container-fluid">
		<div class="row">
			<div class="col-md-12 icons" >
				<i class="fab fa-twitter"></i>
				<i class="fab fa-facebook-f"></i>
				<i class="fab fa-instagram"></i>
				<i class="fab fa-youtube"></i>
				<i class="fab fa-google"></i>
			</div>
		</div>
	</div>
</div>


<!-- ----------------------------------contact section-----------------------------------------------(section 4) -->

<div class="section5">
	<div class="footer container">
		<div class="row address-map">
			<div class="col-sm-6 address-area">
				<div class="row add">
					<h1>Main office location</h1>
				</div>
				<div class="row add">
					<i class="fas fa-map-marked-alt"></i>
					<p>No 5, 5th Cross,Kalasipalyam <br>
					 New Extension,JC Road, <br>
					 Bangalore 560002 KARNATAKA
					</p>	
				</div>
				<div class="row add">
					<i class="fas fa-phone-square"></i>
					<p>93428 59689 / 99862 18146</p>
				</div>
				<div class="row add">
					<i class="fas fa-fax"></i>
					<p>2222 2342/ 2223 4772</p>
				</div>
				<div class="row add">
					<i class="fas fa-envelope"></i>
					<p>planpackers@yahoo.com</p>	
				</div>
			</div>

			<div class="col-sm-6 map-area">
				<div id="googleMap" style="width:100%;height:450px;"></div>
			</div>
		</div>
	</div>
</div>







<!-- -----------------------------------------------jquery------------------------------------------------------------------------------ -->

<script src="https://code.jquery.com/jquery-3.4.1.js"integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="crossorigin="anonymous"></script>

<!-- --------------------------------------------------------------------jquery end----------------------------------------------------- -->

<!-- -------------------------------------------bootstrap script------------------------------------------------------ -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<!-- -------------------------------------------bootstrap script end-------------------------------------------------- -->

<!-- -------------------------------------------hide and show script-------------------------------------------------- -->

<script type="text/javascript">
	function nextsection(){
		document.getElementById('estimate').style.display="none";
		document.getElementById('form').style.display="block";
	}
</script>

<!-- -------------------------------------------hide and show script end-------------------------------------------------- -->

<!----------------------------------------------scroll script--------------------------------------------------------- -->
<script type="text/javascript">
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();

        document.querySelector(this.getAttribute('href')).scrollIntoView({
            behavior: 'smooth'
        });
    });
});
</script>
<!-- -------------------------------------------scroll script end ------------------------------------------------------->





<!-- --------------------------------particle script------------------------------------------------------------------ -->
<script type="text/javascript">
	particlesJS("particles-js", {
	  particles: {
	    number: { value: 200, density: { enable: true, value_area: 500 } },
	    color: { value: "#61ce70" },
	    shape: {
	      type: "circle",
	      stroke: { width: 5, color: "#000000" },
	      polygon: { nb_sides: 3 },
	      image: { src: "img/github.svg", width: 100, height: 100 }
	    },
	    opacity: {
	      value: 0.5,
	      random: false,
	      anim: { enable: false, speed: 1, opacity_min: 0.1, sync: false }
	    },
	    size: {
	      value: 0,
	      random: false,
	      anim: {
	        enable: false,
	        speed: 85.20998174071825,
	        size_min: 0.1,
	        sync: false
	      }
	    },
	    line_linked: {
	      enable: true,
	      distance: 150,
	      color: "#ffffff",
	      opacity: 0.4,
	      width: 1
	    },
	    move: {
	      enable: true,
	      speed: 6,
	      direction: "none",
	      random: false,
	      straight: false,
	      out_mode: "out",
	      bounce: false,
	      attract: { enable: false, rotateX: 600, rotateY: 1200 }
	    }
	  },
	  interactivity: {
	    detect_on: "canvas",
	    events: {
	      onhover: { enable: true, mode: "repulse" },
	      onclick: { enable: true, mode: "push" },
	      resize: true
	    },
	    modes: {
	      grab: { distance: 400, line_linked: { opacity: 1 } },
	      bubble: { distance: 400, size: 40, duration: 2, opacity: 8, speed: 3 },
	      repulse: { distance: 120, duration: 0.4 },
	      push: { particles_nb: 4 },
	      remove: { particles_nb: 2 }
	    }
	  },
	  retina_detect: true
	});
	var count_particles, stats, update;
	stats = new Stats();
	stats.setMode(0);
	stats.domElement.style.position = "absolute";
	stats.domElement.style.left = "0px";
	stats.domElement.style.top = "0px";
	document.body.appendChild(stats.domElement);
	count_particles = document.querySelector(".js-count-particles");
	update = function() {
	  stats.begin();
	  stats.end();
	  if (window.pJSDom[0].pJS.particles && window.pJSDom[0].pJS.particles.array) {
	    count_particles.innerText = window.pJSDom[0].pJS.particles.array.length;
	  }
	  requestAnimationFrame(update);
	};
	requestAnimationFrame(update);
</script>


<!-- --------------------------------------particle end=------------------------------------------------------------- -->


<!-- --------------------------------------------------------map csript--------------------------------------- -->
<script>
function myMap() {
var mapProp= {
  center:new google.maps.LatLng(12.972442,77.580643),
  zoom:10,
};
var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);
}
</script>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAuZOC4rw7Uu9JIr4_rcT0rwl--mhBWLaQ&callback=myMap"></script>

<!-- ------------------------------------------------map script -->


<!-- ---------------------------------------preload script------------------------------------------------------------ -->

<script>

		// var preloader = document.getElementById("loading");

		// function myFunction(){
		// 	preloader.style.display = 'none';
		// };

	var loading;
    function loadNow(opacity){
        if(opacity <=0){
            displayContent();
        }
        else{
            loading.style.opacity = opacity;
            window.setTimeout(function() {
                loadNow(opacity - 0.05)
            }, 100);
        }
    }
    
    function displayContent(){
        loading.style.display = 'none';
        document.getElementById('content').style.display ='block';
            
        }
    document.addEventListener("DOMContentLoaded",function(){
        loading = document.getElementById('loading');
        loadNow(1);
    });


</script>

<!-- ==========================================preload script end--------------------------------------------------------- -->


</body>


<!-- -------------------particle style-------------------------------------------------------- -->

<style type="text/css">
	
canvas {
  display: block;
  vertical-align: bottom;
} 
#particles-js {
  position: absolute;
  width: 100%;
  height: 100vh;
  background-color: lightgrey;
  background-repeat: no-repeat;
  background-size: cover;
  z-index: -1;
}
@media(max-width: 620px){
	#particles-js{
		height: 50vh;
		width: auto;
	}
}

/*-----------------------particle style end------------------------------------------------------------*/

/*---------------------------preload style-------------------------------------------------------------*/

#loading{
	position: fixed;
	width: 100%;
	height: 100vh;	
	z-index: 99999;
	background:url("https://digitalsynopsis.com/wp-content/uploads/2016/06/loading-animations-preloader-gifs-ui-ux-effects-18.gif");
	background-repeat: no-repeat;
	background-size: cover;
}

/*---------------------------------------preload style end---------------------------------------------*/

</style>

</html>