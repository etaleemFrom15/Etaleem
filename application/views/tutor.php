
<?php include('header.php');?>
<link href="<?php echo base_url();?>vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>vendor/devicons/css/devicons.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>vendor/simple-line-icons/css/simple-line-icons.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?php echo base_url();?>css/resume.min.css" rel="stylesheet">

			  
			<!-- start banner Area -->
			<section class="banner-area relative about-banner" id="home">	
				<div class="overlay overlay-bg"></div>
				<div class="container">				
					<div class="row d-flex align-items-center justify-content-center">
						<div class="about-content col-lg-12">
							<h1 class="text-white">
								Profile				
							</h1>	
							<p class="text-white link-nav"><a href="<?php echo site_url('main');?>">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href="#"> Profile</a></p>
							<a class="primary-btn" href="#about">Hire Me</a>
						</div>	
					</div>
				</div>
			</section>
			<!-- End banner Area -->	
				
			<!-- Start events-list Area -->
			<nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top" id="sideNav">
				<a class="navbar-brand js-scroll-trigger" href="#page-top">
				  <span class="d-block d-lg-none">Start Bootstrap</span>
				  <span class="d-none d-lg-block">
					<?php
						 if($prof_pic!=null && $prof_pic!=" "){
							echo "<img class='img-fluid img-profile rounded-circle mx-auto mb-2' src=".base_url().$prof_pic." alt='prof-pic'>
							";
						 }
						 else{
                   echo "<img class='img-fluid img-profile rounded-circle mx-auto mb-2' src=".base_url()."img/blank-profile.png alt='prof-pic'>
									 ";
						 }
						  ?>
				  </span>
				</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				  <span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarSupportedContent">
				  <ul class="navbar-nav">
				
					<li class="nav-item">
					  <a class="nav-link js-scroll-trigger" href="#about">About</a>
					</li>
					<li class="nav-item">
					  <a class="nav-link js-scroll-trigger" href="#experience">Experience</a>
					</li>
					<li class="nav-item">
					  <a class="nav-link js-scroll-trigger" href="#education">Education</a>
					</li>
					<li class="nav-item">
					  <a class="nav-link js-scroll-trigger" href="#skills">Skills</a>
					</li>
					<li class="nav-item">
					  <a class="nav-link js-scroll-trigger" href="#interests">Interests</a>
					</li>
					<li class="nav-item">
					  <a class="nav-link js-scroll-trigger" href="#awards">Awards</a>
					</li>
				  </ul>
				</div>
			  </nav>
		  
			  <div class="container-fluid p-0">
		  
				<section class="resume-section p-3 p-lg-5 d-flex d-column" id="about">
				  <div class="my-auto">
					<h1 class="mb-0"><?php echo $fname;?>
					  <span class="text-primary"><?php echo $lname; ?></span>
					</h1>
					<div class="subheading mb-5"><?php echo $address.".".$mob_numb ;?>
					  <a href="mailto:name@email.com"><?php echo $email; ?></a>
					</div>
					<ul class="list-inline list-social-icons mb-0">
					  <li class="list-inline-item">
						<a href="#">
						  <span class="fa-stack fa-lg">
							<i class="fa fa-circle fa-stack-2x"></i>
							<i class="fa fa-facebook fa-stack-1x fa-inverse"></i>
						  </span>
						</a>
					  </li>
					  <li class="list-inline-item">
						<a href="#">
						  <span class="fa-stack fa-lg">
							<i class="fa fa-circle fa-stack-2x"></i>
							<i class="fa fa-twitter fa-stack-1x fa-inverse"></i>
						  </span>
						</a>
					  </li>
					  <li class="list-inline-item">
						<a href="#">
						  <span class="fa-stack fa-lg">
							<i class="fa fa-circle fa-stack-2x"></i>
							<i class="fa fa-linkedin fa-stack-1x fa-inverse"></i>
						  </span>
						</a>
					  </li>
					  <li class="list-inline-item">
						<a href="#">
						  <span class="fa-stack fa-lg">
							<i class="fa fa-circle fa-stack-2x"></i>
							<i class="fa fa-github fa-stack-1x fa-inverse"></i>
						  </span>
						</a>
					  </li>
					</ul>
				  </div>
				</section>
		  
				<section class="resume-section p-3 p-lg-5 d-flex flex-column" id="experience">
				  <div class="my-auto">
					<h2 class="mb-5">Experience</h2>
		  <?php
			foreach($experience as $experiences){
			echo "<div class='resume-item d-flex flex-column flex-md-row mb-5'>
					  <div class='resume-content mr-auto'>
						<h3 class='mb-0'>$experiences->position</h3>
						<div class='subheading mb-3'>$experiences->company_name</div>
					  </div>
					  <div class='resume-date text-md-right'>
						<span class='text-primary'>$experiences->from_year -$experiences->to_year</span>
					  </div>
					</div>";
		  }?>
			
		  
				  </div>
		  
				</section>
		  
				<section class="resume-section p-3 p-lg-5 d-flex flex-column" id="education">
				  <div class="my-auto">
					<h2 class="mb-5">Education</h2>
		  
					<div class="resume-item d-flex flex-column flex-md-row mb-5">
					  <div class="resume-content mr-auto">
						<h3 class="mb-0">University of Colorado Boulder</h3>
						<div class="subheading mb-3">Bachelor of Science</div>
						<div>Computer Science - Web Development Track</div>
						<p>GPA: 3.23</p>
					  </div>
					  <div class="resume-date text-md-right">
						<span class="text-primary">August 2006 - May 2010</span>
					  </div>
					</div>
		  
					<div class="resume-item d-flex flex-column flex-md-row">
					  <div class="resume-content mr-auto">
						<h3 class="mb-0">James Buchanan High School</h3>
						<div class="subheading mb-3">Technology Magnet Program</div>
						<p>GPA: 3.56</p>
					  </div>
					  <div class="resume-date text-md-right">
						<span class="text-primary">August 2002 - May 2006</span>
					  </div>
					</div>
		  
				  </div>
				</section>
		  
				<section class="resume-section p-3 p-lg-5 d-flex flex-column" id="skills">
				  <div class="my-auto">
					<h2 class="mb-5">Skills</h2>
		  
					<div class="subheading mb-3">Programming Languages &amp; Tools</div>
					<ul class="list-inline list-icons">
					  <li class="list-inline-item">
						<i class="devicons devicons-html5"></i>
					  </li>
					  <li class="list-inline-item">
						<i class="devicons devicons-css3"></i>
					  </li>
					  <li class="list-inline-item">
						<i class="devicons devicons-javascript"></i>
					  </li>
					  <li class="list-inline-item">
						<i class="devicons devicons-jquery"></i>
					  </li>
					  <li class="list-inline-item">
						<i class="devicons devicons-sass"></i>
					  </li>
					  <li class="list-inline-item">
						<i class="devicons devicons-less"></i>
					  </li>
					  <li class="list-inline-item">
						<i class="devicons devicons-bootstrap"></i>
					  </li>
					  <li class="list-inline-item">
						<i class="devicons devicons-wordpress"></i>
					  </li>
					  <li class="list-inline-item">
						<i class="devicons devicons-grunt"></i>
					  </li>
					  <li class="list-inline-item">
						<i class="devicons devicons-gulp"></i>
					  </li>
					  <li class="list-inline-item">
						<i class="devicons devicons-npm"></i>
					  </li>
					</ul>
		  
					<div class="subheading mb-3">Workflow</div>
					<ul class="fa-ul mb-0">
					  <li>
						<i class="fa-li fa fa-check"></i>
						Mobile-First, Responsive Design</li>
					  <li>
						<i class="fa-li fa fa-check"></i>
						Cross Browser Testing &amp; Debugging</li>
					  <li>
						<i class="fa-li fa fa-check"></i>
						Cross Functional Teams</li>
					  <li>
						<i class="fa-li fa fa-check"></i>
						Agile Development &amp; Scrum</li>
					</ul>
				  </div>
				</section>
		  
				<section class="resume-section p-3 p-lg-5 d-flex flex-column" id="interests">
				  <div class="my-auto">
					<h2 class="mb-5">Interests</h2>
					<p>Apart from being a web developer, I enjoy most of my time being outdoors. In the winter, I am an avid skiier and novice ice climber. During the warmer months here in Colorado, I enjoy mountain biking, free climbing, and kayaking.</p>
					<p class="mb-0">When forced indoors, I follow a number of sci-fi and fantasy genre movies and television shows, I am an aspiring chef, and I spend a large amount of my free time exploring the latest technolgy advancements in the front-end web development world.</p>
				  </div>
				</section>
		  
				<section class="resume-section p-3 p-lg-5 d-flex flex-column" id="awards">
				  <div class="my-auto">
					<h2 class="mb-5">Awards &amp; Certifications</h2>
					<ul class="fa-ul mb-0">
					  <li>
						<i class="fa-li fa fa-trophy text-warning"></i>
						Google Analytics Certified Developer</li>
					  <li>
						<i class="fa-li fa fa-trophy text-warning"></i>
						Mobile Web Specialist - Google Certification</li>
					  <li>
						<i class="fa-li fa fa-trophy text-warning"></i>
						1<sup>st</sup>
						Place - University of Colorado Boulder - Emerging Tech Competition 2009</li>
					  <li>
						<i class="fa-li fa fa-trophy text-warning"></i>
						1<sup>st</sup>
						Place - University of Colorado Boulder - Adobe Creative Jam 2008 (UI Design Category)</li>
					  <li>
						<i class="fa-li fa fa-trophy text-warning"></i>
						2<sup>nd</sup>
						Place - University of Colorado Boulder - Emerging Tech Competition 2008</li>
					  <li>
					  <li>
						<i class="fa-li fa fa-trophy text-warning"></i>
						1<sup>st</sup>
						Place - James Buchanan High School - Hackathon 2006</li>
					  <li>
						<i class="fa-li fa fa-trophy text-warning"></i>
						3<sup>rd</sup>
						Place - James Buchanan High School - Hackathon 2005</li>
					</ul>
				  </div>
				</section>
		  
			  </div>
		  
				<script src="<?php echo base_url();?>js/resume.min.js"></script>					    		
		
		<!-- Bootstrap core JavaScript -->
		<script src="<?php echo base_url();?>vendor/jquery/jquery.min.js"></script>
				<script src="<?php echo base_url();?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
					
						<!-- Plugin JavaScript -->	
			<script src="<?php echo base_url();?>vendor/jquery-easing/jquery.easing.min.js"></script>
		  
			<!-- End events-list Area -->
				

<?php include('footer.php');?>				
	<!-- Custom scripts for this template -->
	

