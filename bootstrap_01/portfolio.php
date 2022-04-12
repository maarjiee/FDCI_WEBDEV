<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- bootstrap  cdn -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
 
    <title>Portfolio</title>
    <style>
        .col{
            border: 1px solid black;
            
        }
        .row{
            border: 1px solid green;
        }
    </style>
</head>
<body>
<header class="container-fluid">
	 	<nav class="navbar navbar-inverse navbar-fixed-top ">
			<div class="navbar-header">
			        <button type="button" class="navbar-toggle " data-toggle="collapse" data-target="#myNavbar">
			          <span class="icon-bar"></span>
			          <span class="icon-bar"></span>
			          <span class="icon-bar"></span>                        
			      </button>
			      <a class="navbar-brand" href="#">LOREM</a>
			</div>

			<div class="collapse navbar-collapse" id="myNavbar">
			    <ul class="nav navbar-nav">
			        <li><a href="#section1">About Me</a></li>
			        <li><a href="#section2">Interest</a></li>
			        <li><a href="#section3">Gallery</a></li>
			        <li><a href="#section4">Blog</a></li>
			        <li><a href="#section5">Contact me</a></li>
			    </ul>
			</div>
		</nav>
	 </header>
     <section >
			<div class="jumbotron h1 text-center section-title" id="section1"> 
				<h1> - ABOUT ME -</h1>
				<p><em>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</em>em></p>
			</div>
		</section> <!-- END OF ABOUT SECTION-->

        <section id="section2">
			<div  class="section db" >
        		<div class="container">
					<h1 class="text-center">- INTERESTS -</h1>
					<div class="col-md-4">
		                <div class="services-inner-box">
							<div class="ser-icon">
								<i class="flaticon-seo"></i>
							</div>
								<h2>PETS</h2>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
						</div>
		             </div><!-- end col -->
               
		             <div class="col-md-4">
		                <div class="services-inner-box">
							<div class="ser-icon">
								<i class="flaticon-seo"></i>
							</div>
								<h2>TRAVEL</h2>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
						</div>
		            </div><!-- end col -->

		            <div class="col-md-4">
		                <div class="services-inner-box">
							<div class="ser-icon">
								<i class="flaticon-seo"></i>
							</div>
								<h2>MOVIE SERIES</h2>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
							</div>
						</div>
            		</div><!-- end col -->
            	</div>
        	</div>
		</section>

        <section id="section3">
			<div  id="portfolio" class="section lb">
				<div class="container">
					<div class="section-title text-center">
		                <h3>GALLERY</h3>
		                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
		         	</div><!-- end title -->
				</div>
			
				<div class="gallery-list row">
					<div class="col-md-4 col-sm-6 gallery-grid gal_a gal_b">
						<div class="gallery-single fix">
							<img src="assets/img/cat1.1.jpg" class="img-fluid" alt="Image">
							<div class="img-overlay">
								<a href="assets/img/cat1.1.jpg" data-rel="prettyPhoto[gal]" class="hoverbutton global-radius">
									<i class="fa fa-picture-o"></i></a>
							</div>
						</div>
					</div>
				
					<div class="col-md-4 col-sm-6 gallery-grid gal_c gal_b">
						<div class="gallery-single fix">
							<img src="assets/img/cat2.jpg" class="img-fluid" alt="Image">
							<div class="img-overlay">
								<a href="assets/img/cat2.jpg" data-rel="prettyPhoto[gal]" class="hoverbutton global-radius"><i class="fa fa-picture-o"></i></a>
							</div>
						</div>
					</div>
				
					<div class="col-md-4 col-sm-6 gallery-grid gal_a gal_c">
						<div class="gallery-single fix">
							<img src="assets/img/cat3.jpg" class="img-fluid" alt="Image">
							<div class="img-overlay">
								<a href="assets/img/cat3.jpg" data-rel="prettyPhoto[gal]" class="hoverbutton global-radius"><i class="fa fa-picture-o"></i></a>
							</div>
						</div>
					</div>
				
					<div class="col-md-4 col-sm-6 gallery-grid gal_b gal_a">
						<div class="gallery-single fix">
							<img src="assets/img/cat5.jpg" class="img-fluid" alt="Image">
							<div class="img-overlay">
								<a href="assets/img/cat5.jpg" data-rel="prettyPhoto[gal]" class="hoverbutton global-radius"><i class="fa fa-picture-o"></i></a>
							</div>
						</div>
					</div>
				
					<div class="col-md-4 col-sm-6 gallery-grid gal_a gal_c">
						<div class="gallery-single fix">
							<img src="assets/img/cat2.jpg" class="img-fluid" alt="Image">
							<div class="img-overlay">
								<a href="assets/img/cat2.jpg" data-rel="prettyPhoto[gal]" class="hoverbutton global-radius"><i class="fa fa-picture-o"></i></a>
							</div>
						</div>
					</div>
				
					<div class="col-md-4 col-sm-6 gallery-grid gal_c gal_a">
						<div class="gallery-single fix">
							<img src="assets/img/cat3.jpg" class="img-fluid" alt="Image">
							<div class="img-overlay">
								<a href="assets/img/cat3.jpg" data-rel="prettyPhoto[gal]" class="hoverbutton global-radius"><i class="fa fa-picture-o"></i></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section> <!-- END OF GALLERY SECTION-->


    </div>
</body>
</html>