<!DOCTYPE html>
<html lang="en">
<head>
  <title>IIT ISM Dhanbad</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,400i,500,600,700" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="../../css/dept_styles.css">
  <link rel="stylesheet" type="text/css" href="slick/slick.css">
  <link rel="stylesheet" type="text/css" href="css/animations.css">
  <link rel="stylesheet" type="text/css" href="http://kenwheeler.github.io/slick/slick/slick-theme.css"/>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="colors">
	
</div>

<?php

	include 'header.php';
?>
<div id="agp">
	<div class="container">
		<p class="display-4">Industrial Interaction</p>
	</div>
</div>
<div class="container">
<div class="row well">
<div class="col-md-12 form-group">

                <div class="row"> <h3 style="text-align:center;" ><span class='label label-info chngebgcolor'><br>Industrial Interaction</span></h3></div><hr>
          
                <div style="text-align: justify;"><p>A MOU has been signed between ISM, Society of Petroleum Geophysicist (SPG), DehraDun, Silicon Graphic India (SGI) and Paradigm Geophysical Limited in September, 2002 for establishing a state of art seismic data processing laboratories. Under this MOU, SGI and Paradigm Geophysical has provided computer hardware and necessary seismic data processing softwares to the Deptt. of Applied Geophysics in the month of March, 2005.</p><br>
                <br><hr>
                • Imparted Training to NTPC executives
                <br><br>
               • Faculty are getting trained regularly by the PETROTECH-ONGC Dehradun under the industry academy programme.
                <br>
                <p style="text-align: justify;color:blue;"><a href=#>Consultancy project completed
                </a></p>
                <br>
                <p style="text-align: justify;color:#922B21  ;"><b>ONGOING/COMPLETED CONSULTANCY PROJECTS:</b></p>
                Overseas Consultancy during the Month of March 2010 at OMAN for Chromite Exploration Services provided to ISPAT ALLOYS, Balasore for Chromite Exploration.<br> <br>

                <p style="text-align: justify;"><strong><br></strong><strong></strong></p>
                </div>
</div>                
</div>
</div>





<?php

	include 'footer.php';
?>

<script type="text/javascript" src="slick/slick.min.js"></script>
<script type="text/javascript" src="js/css3-animate-it.js"></script>

<script type="text/javascript">



    $(document).ready(function(){
      $('.slickcarousel').slick({
		  slidesToShow: 4,
		  slidesToScroll: 1,
		  autoplay: true,
		  autoplaySpeed: 2000,
		  arrow:true,
		  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 3,
        infinite: true,
        dots: true
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
    // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
  ]

		});
    });
    $(window).scroll(function() {
    var height = $(window).scrollTop();
    if (height > 300) {
        $('#back2Top').fadeIn();
    } else {
        $('#back2Top').fadeOut();
    }
    if(height>$(window).height()-100){
    	$('#top_header').hide();
    	$('#clg_name').addClass('clgnamefont');
    	$('.navbar').addClass('fixedTop');
    }else{
    	$('#top_header').show();
    	$('#clg_name').removeClass('clgnamefont');
    	$('.navbar').removeClass('fixedTop');
    }
});
	$(document).ready(function() {
	    $("#back2Top").click(function(event) {
	        event.preventDefault();
	        $("html, body").animate({ scrollTop: 0 }, "slow");
	        return false;
	    });

	});


	function openSearch() {
		var myOverlay = document.getElementById("myOverlay");
	    myOverlay.style.display = "block";
	    window.addEventListener("click", function(e){
	    	if(e.target == myOverlay){
	    		myOverlay.style.display = "none";
	    	}
	    });
	}

	function closeSearch() {
	  document.getElementById("myOverlay").style.display = "none";
	}

  </script>

</body>
</html>