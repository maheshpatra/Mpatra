<?php
include './conn.php';

?>

<!DOCTYPE html>
<html lang="en">

<!-- index-854:31-->
<head>
	<!--===== Meta Tag =====-->
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<meta name="description" content="Mpatra - Personal Portfolio">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="keywords" content="business, agency, blog, cv, creative, html, one page, personal, portfolio, resume, responsive, bootstrap, photography, designer, developer">
	<meta name="author" content="root">

     <!--	Css Links
    ==================================================-->
     <link rel="stylesheet" href="css/bootstrap.min.css">
     <link rel="stylesheet" href="css/font-awesome.min.css">
     <link rel="stylesheet" href="fonts/flaticon.css">
     <link rel="stylesheet" href="css/plugins.css">
     <link rel="stylesheet" href="css/style.css">
     <link rel="stylesheet" href="css/color.css" id="color-change">

     <!-- Favicon 
    ==================================================-->
	<link rel="icon" type="image/png" sizes="32x32" href="images/favicon.ico">

      <!--	Title
    ==================================================-->
	<title>Mpatra - Personal Portfolio</title>

</head>

<body id="top" class="page-load">
	<!--	Start Back to top
	=================================================-->
	<a href="#" id="scroll" style="display: none;"><span></span></a>
	<!--	End Back to top
	==================================================-->
	<!--	Preloader
	==================================================-->
	<div class="preloader">
		<div class="lds-css ng-scope">
			<div class="lds-spinner" style="100%;height:100%">
				<div></div>
				<div></div>
				<div></div>
				<div></div>
				<div></div>
				<div></div>
				<div></div>
				<div></div>
				<div></div>
				<div></div>
				<div></div>
				<div></div>
			</div>
		</div>
	</div>
	<!-- Color Settings Start
	==================================================-->
	<!-- <div class="color-panel">
		<div class="on-panel color_white bg_primary">
			<div class="text-center icon-spinner">
			  <i class="fa fa-cog fa-spin fa-3x fa-fw"></i>
			</div>
		</div>
		<div class="panel-box">
			<span class="panel-title">Theme Colors</span>
			<ul class="color-box">
				<li class="color_13" data-name="color_13" data-path="css/color/color-13.css" data-image="images/logo/15.png" data-target="images/logo/15.png"></li>
				<li class="color_2" data-name="color_2" data-path="css/color/color-1.css" data-image="images/logo/16.png" data-target="images/logo/16.png"></li>
				<li class="color_3" data-name="color_3" data-path="css/color/color-2.css" data-image="images/logo/17.png" data-target="images/logo/17.png"></li>
				<li class="color_4" data-name="color_4" data-path="css/color/color-3.css" data-image="images/logo/18.png" data-target="images/logo/18.png"></li>
				<li class="color_5" data-name="color_5" data-path="css/color/color-4.css" data-image="images/logo/19.png" data-target="images/logo/19.png"></li>
				<li class="color_6" data-name="color_6" data-path="css/color/color-5.css" data-image="images/logo/20.png" data-target="images/logo/20.png"></li>
				<li class="color_7" data-name="color_7" data-path="css/color/color-6.css" data-image="images/logo/21.png" data-target="images/logo/21.png"></li>
				<li class="color_8" data-name="color_8" data-path="css/color/color-7.css" data-image="images/logo/22.png" data-target="images/logo/22.png"></li>
				<li class="color_9" data-name="color_9" data-path="css/color/color-8.css" data-image="images/logo/23.png" data-target="images/logo/23.png"></li>
				<li class="color_10" data-name="color_10" data-path="css/color/color-9.css" data-image="images/logo/24.png" data-target="images/logo/24.png"></li>
				<li class="color_11" data-name="color_11" data-path="css/color/color-10.css" data-image="images/logo/25.png" data-target="images/logo/25.png"></li>
				<li class="color_12" data-name="color_12" data-path="css/color/color-11.css" data-image="images/logo/26.png" data-target="images/logo/26.png"></li>
				<li class="color_13" data-name="color_13" data-path="css/color/color-12.css" data-image="images/logo/27.png" data-target="images/logo/27.png"></li>
				<li class="color_14" data-name="color_14" data-path="css/color/color-13.css" data-image="images/logo/28.png" data-target="images/logo/28.png"></li>
			</ul>
		</div>
		<div class="switcher_layout">
			<span class="layout_title">Layout Style</span>
			<div class="radio_check">
				<input type="checkbox" id="layout_type" name="layout" value="Yes">
				<label class="bg_default text-left" for="layout_type"><span class="white_color">Full</span><span class="secondary_color">Box</span></label>
			</div>
		</div>
		<div class="template_style">
			<span class="layout_title">Template Style</span>
			<ul>
				<li><a class="btn_link" href="index-7.html" target="blank">White Version</a></li>
				<li><a class="btn_link" href="index-8.html" target="blank">Black Version</a></li>
			</ul>
		</div>
		<div class="box_bg_style">
			<span class="layout_title">Background pattern</span>
			<div class="select_bg">
				<ul>
					<li><input type="radio" name="radio" id="patrn1" value="pattern_1" /><label for="patrn1" class="radios pattern1"></label></li>
					<li><input type="radio" name="radio" id="patrn2" value="pattern_2" /><label for="patrn2" class="radios pattern2"></label></li>
					<li><input type="radio" name="radio" id="patrn3" value="pattern_3" /><label for="patrn3" class="radios pattern3"></label></li>
					<li><input type="radio" name="radio" id="patrn4" value="pattern_4" /><label for="patrn4" class="radios pattern4"></label></li>
					<li><input type="radio" name="radio" id="patrn5" value="pattern_5" /><label for="patrn5" class="radios pattern5"></label></li>
				</ul>
			</div>
			<span class="layout_title">Background pattern</span>
			<div class="select_bg">
				<ul>
					<li><input type="radio" name="radio" id="bg_img1" value="body_bg_1" /><label for="bg_img1" class="radios body_image1"></label></li>
					<li><input type="radio" name="radio" id="bg_img2" value="body_bg_2" /><label for="bg_img2" class="radios body_image2"></label></li>
					<li><input type="radio" name="radio" id="bg_img3" value="body_bg_3" /><label for="bg_img3" class="radios body_image3"></label></li>
					<li><input type="radio" name="radio" id="bg_img4" value="body_bg_4" /><label for="bg_img4" class="radios body_image4"></label></li>
					<li><input type="radio" name="radio" id="bg_img5" value="body_bg_5" /><label for="bg_img5" class="radios body_image5"></label></li>
					<li><input type="radio" name="radio" id="bg_img6" value="body_bg_6" /><label for="bg_img6" class="radios body_image6"></label></li>
					<li><input type="radio" name="radio" id="bg_img7" value="body_bg_7" /><label for="bg_img7" class="radios body_image7"></label></li>
					<li><input type="radio" name="radio" id="bg_img8" value="body_bg_8" /><label for="bg_img8" class="radios body_image8"></label></li>
					<li><input type="radio" name="radio" id="bg_img9" value="body_bg_9" /><label for="bg_img9" class="radios body_image9"></label></li>
					<li><input type="radio" name="radio" id="bg_img10" value="body_bg_10" /><label for="bg_img10" class="radios body_image10"></label></li>
				</ul>
			</div>
			<div class="select_bg">
				<ul>
					<li><input type="checkbox" name="runaway" id="bg_over" value="" /> Overlay</li>
				</ul>
			</div>
		</div>
	</div> -->
	<!--  Color Settings End
	==============================================-->
<!-- Wrapper Start 
==================================================-->
<div id="page_wrapper">
	<div class="row">
	<!-- Start Nav Menu 
	==============================================-->
	<header class="main_nav dark_nav">
		<div class="container">
			<nav class="navbar navbar-expand-lg navbar-light w-100"> 
				<a class="navbar-brand" href="#top"><img class="nav-logo" src="images/logo/logo.png" alt="logo"></a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav ml-auto">
					  <li class="nav-item"><a class="nav-link active" href="#top">Home<span class="sr-only">(current)</span></a></li>
					  <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
					  <li class="nav-item"><a class="nav-link" href="#skill">Skill</a></li>
					  <li class="nav-item"><a class="nav-link" href="#services">Services</a></li>
					  <li class="nav-item"><a class="nav-link" href="#portfolio">Portfolio</a></li>	
					  <li class="nav-item"><a class="nav-link" href="#testimonial">Testimonial</a></li>	
					  <!-- <li class="nav-item"><a class="nav-link" href="#blog">Blog</a></li>	 -->
					  <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>	
					</ul>
				</div>		
			</nav>
		</div>	
	</header>
	<!-- End Nav Menu
	==================================================-->
	<!--	Start Main Banner 
	==================================================-->
	<section id="main_banner" class="banner_water_effect background5 overlay_one">
		<div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-md-12 col-lg-12 home-content text-left">
                    <div class="mainbanner_content">
                        <span class="pb_5 banner_title color_white">I Am Mahesh Patra!</span>  
                        <h1 class="cd-headline clip is-full-width text-uppercase">
                            <span class="color_white">I am a</span>
                            <span class="cd-words-wrapper color_default">
								<b class="is-visible">Mobile App Developer.</b>
                                <b>Developer.</b>
                                <b>Freelancer.</b>
                            </span>
                        </h1>
                        <p class="color_white mb_30">As a React and React Native full-stack developer, I specialize in building dynamic and responsive applications for both web and mobile platforms. With a strong foundation in JavaScript and its ecosystem, I thrive on crafting elegant and efficient solutions to complex problems.</p>
                        <a class="btn btn-default" href="#">Download CV</a>
                    </div>
                </div>          
            </div>
        </div>
    </section>
	<!--	End Main Banner 
	==================================================-->
	<!--	Start About
	===================================================-->
	<section id="about" class="py_80 bg_black full_row">
		<div class="container">
			<div class="row">
				<div class="col-md-12 col-lg-12">
					<div class="section_title_1 text-center mx-auto pb_60 wow animated slideInUp">
	                    <h2 class="title text-uppercase color_white"><span class="line_double mx-auto color_default">about</span>about myself</h2>
	                    <span class="sub_title color_lightgray">I have a passion for learning and staying updated with the latest trends and technologies in the web and mobile development space.</span>
	                </div>
				</div>
			</div>
			<div class="about_one">
				<div class="row">
					<div class="col-md-7 col-lg-7">
						<div class="myself color_lightgray wow animated fadeInLeft">
							<p>I enjoy problem-solving and tackling challenges, whether it's debugging an intricate issue or architecting a scalable system.
								I value clean code, following best practices, and writing maintainable and scalable applications.
								I thrive in a collaborative environment where ideas are shared freely, feedback is welcomed, and teamwork is paramount.</p>
							
							<p>In summary, I am a dedicated and versatile React and React Native developer with a strong technical background and a keen eye for detail. I am always eager to take on new projects and contribute my skills to create exceptional digital experiences.</p>
						</div>
						<div class="personal_info color_lightgray">
							<div class="row">
								<div class="col-md-12 col-lg-6">
									<ul>
										<li><span class="color_secondery">Name :</span> Mahesh Patra</li>
										<li><span class="color_secondery">Email :</span> support@mpatra.tech</li>
										
									</ul>
								</div>
								<div class="col-md-12 col-lg-6">
									<ul>
										<li><span class="color_secondery">Exprience :</span> 4 years</li>
										
										<li><span class="color_secondery">Address :</span> kolkata,India.</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-5 col-lg-5">
						<div class="profile_img personal_video wow animated fadeInRight">
							<img src="images/portfolio/mpatra.png" alt="image">
							<div class="iconround"><a class="video-popup" href="https://vimeo.com/134660574" title="video popup">
							<i class="fa fa-play" aria-hidden="true"></i></a></div>
							<div class="loader">
								<div class="loader-inner ball-scale-multiple">
									<div></div>
									<div></div>
									<div></div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--	End About
	===================================================-->
	<!--	Start Skill
	===================================================-->
	<section id="skill" class="py_80 bg_deepblack full_row">
		<div class="container">
			<div class="row">
				<div class="col-md-12 col-lg-12">
					<div class="section_title_1 text-center mx-auto pb_60 wow animated slideInUp">
	                    <h2 class="title text-uppercase color_white"><span class="line_double mx-auto color_default">skill</span>Design & Development</h2>
	                    <span class="sub_title color_lightgray">I'm involved in every stage of the development lifecycle, ensuring high-quality, scalable solutions.</span>
	                </div>
				</div>
			</div>
			<div class="my_skill">
				<div class="row">
					<div class="col-md-12 col-lg-6">
						<div class="about_myskill color_lightgray wow animated fadeInLeft">
							<h2 class="color_lightgray">Some talk about my professional design skill</h2>
							<p class="pt_15">Frontend Development: Proficient in React.js and React Native for creating engaging user interfaces and experiences.
								Backend Development: Skilled in Node.js and Express.js for building robust server-side logic and RESTful APIs.
								Database Management: Experienced in working with various databases, including SQL (e.g., MySQL, PostgreSQL) and NoSQL (e.g., MongoDB).
								State Management: Expertise in using Redux and Context API for managing application state and data flow efficiently.
								UI Frameworks: Familiar with popular UI frameworks/libraries like Material-UI, Ant Design, and Bootstrap for designing visually appealing interfaces.
								Version Control: Proficient in Git for version control, including branching, merging, and collaboration using platforms like GitHub or GitLab.</p>
						</div>
					</div>
					<div class="col-md-12 col-lg-6">
						<div class="skill-progress wow animated slideInRight color_lightgray">

						<?php
                         $query = "SELECT * FROM `skills`";
						 $result = $conn->query($query);
					 
						 if ($result->num_rows > 0) {
						   // output data of each row
						   while($row = $result->fetch_assoc()) {
							 echo "<div class='prgs-bar fact-counter'> <span>".$row['name']."</span>
							 <div class='progress count wow' data-wow-duration='0ms'>
								 <div class='skill-percent'><span class='count-num' data-speed='3000' data-stop='".$row['known']."'>0</span>%</div>
								 <div class='progress-bar' role='progressbar' aria-valuenow='".$row['known']."' aria-valuemax='100'> </div>
							 </div>
							 </div>
							 ";
						   }
						 } else {
						   echo "0 results";
						 }
					 
						 
					  ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--	End Skill
	===================================================-->
	<!--	Start Experience and Projects
	===================================================-->
	<div class="experience background2 overlay_two py_60 full_row">
		<div class="container">
			<div class="row">
				<div class="col-md-12 col-lg-12">
					<div class="fact-counter">
						<div class="row">
							<div class="col-md-4 col-lg-4">
							    <div class="counter count wow text-center" data-wow-duration="300ms">
							    	<span class="flaticon-man-working-on-a-laptop-from-side-view"></span>
					            	<div class="counting_digit color_default mt_15"> <h2 class="count-num" data-speed="3000" data-stop="4">0</h2><span>+</span>
					            	</div>
					            	<h3 class="color_white mt_15">Years of Experience</h3>
					          	</div>
							</div>
							<div class="col-md-4 col-lg-4">
							    <div class="counter count wow text-center" data-wow-duration="300ms">
							    	<span class="flaticon-half-time-work"></span>
					            	<div class="counting_digit color_default mt_15"> <h2 class="count-num" data-speed="3000" data-stop="30">0</h2><span>+</span>
					            	</div>
					            	<h3 class="color_white mt_15">Porjects Done</h3>
					          	</div>
							</div>
							<div class="col-md-4 col-lg-4">
							    <div class="counter count wow text-center" data-wow-duration="300ms">
							    	<span class="flaticon-happy"></span>
					            	<div class="counting_digit color_default mt_15"><h2 class="count-num" data-speed="3000" data-stop="19">0</h2><span>+</span>
					            	</div>
					            	<h3 class="color_white mt_15">Happy Clients</h3>
					          	</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--	End Experience and Projects
	===================================================-->
	<!--	Start Services
	===================================================-->
	<section id="services" class="py_80 bg_black full_row">
		<div class="container">
			<div class="row">
				<div class="col-md-12 col-lg-12">
					<div class="section_title_1 text-center mx-auto pb_60 wow animated slideInUp">
	                    <h2 class="title text-uppercase color_white"><span class="line_double mx-auto color_default">services</span>What i do</h2>
	                    <span class="sub_title color_lightgray">Whether it's building interactive web applications or crafting intuitive mobile experiences, I'm dedicated to creating software that makes a difference. Let's build something amazing together!</span>
	                </div>
				</div>
				<div class="services_item owl-carousel">
				<?php
                         $query = "SELECT * FROM `services`";
						 $result = $conn->query($query);
					 
						 if ($result->num_rows > 0) {
						   // output data of each row
						   while($row = $result->fetch_assoc()) {
							 echo "<div class='service_one text-center p_30 bg_deepblack color_secondery'>
							 <div class='srvicon bg_default color_white mx-auto mb_20'><span class='flaticon-website-design-symbol'></span></div>
							 <h3 class='font-weight-bold color_white'>".$row['name']."</h3>
							 <p>".$row['description']."</p>
						 </div>";
						   }
						 } else {
						   echo "0 results";
						 }
					 
						 
					  ?>

					
				</div>
			</div>
		</div>
	</section>
	<!--	End Services
	===================================================-->
	<!--	Start Portfolio
	===================================================-->
	<section id="portfolio" class="py_80 bg_deepblack full_row">
		<div class="container">
			<div class="row">
				<div class="col-md-12 col-lg-12">
					<div class="section_title_1 text-center mx-auto pb_60 wow animated slideInUp">
	                    <h2 class="title text-uppercase color_white"><span class="line_double mx-auto color_default">portfolio</span>Recent Projects</h2>
	                    <span class="sub_title color_lightgray">Interdum a etiam sagittis vehicula porta. Massa felis eros quam blandit nulla dolor habitant. Ullamcorper quis ornare et proin pellentesque.</span>
	                </div>
				</div>
				<div class="col-md-12 col-lg-12">
					<div class="my_portfolio" id="tab-panel"> 
              			<!--Filter-->
						<div class="row">
							<div class="col-md-12">
								<div class="filters mb_30 w-100 text-center color_lightgray">
									<ul class="filter-tabs mx-auto d-inline-block">
										<li class="active filter" data-role="button" data-filter="all">All</li>
										<li class="filter" data-role="button" data-filter=".design">App Development</li>
										<li class="filter" data-role="button" data-filter=".wordpress">Web Development</li>
										<li class="filter" data-role="button" data-filter=".development">Logo Designing</li>
										<li class="filter" data-role="button" data-filter=".branding">Branding</li>
									</ul>
								</div>
							</div>
						</div>	
			              
						<div class="filter-list">
							<div class="portfolio-items">
								<div class="row">
								  	<div class="column mix mix_all graphic development wordpress mb_30 col-md-4 col-lg-4">
										<div class="default-portfolio-item">
											<a href="images/portfolio/01.jpg" data-fancybox="gallery">
												<img src="images/portfolio/01.jpg" alt="image" />
												<div class="overlay-box">
													<span><i class="fa fa-eye" aria-hidden="true"></i></span>
													<div class="tag">
														<ul>
															<li>Web Development,</li>
															<li>wordpress</li>
														</ul>
													</div>
												</div>
											</a>
										</div>
									</div>
									<div class="column mix mix_all graphic branding mb_30 col-md-4 col-lg-4">
										<div class="default-portfolio-item">
											<a href="images/portfolio/02.jpg" data-fancybox="gallery">
												<img src="images/portfolio/02.jpg" alt="image" />
												<div class="overlay-box">
													<span><i class="fa fa-eye" aria-hidden="true"></i></span>
													<div class="tag">
														<ul>
															<li>Branding,</li>
															<li>Wordpress</li>
														</ul>
													</div>
												</div>
											</a>
										</div>
									</div>
									<div class="column mix mix_all design wordpress development mb_30 col-md-4 col-lg-4">
										<div class="default-portfolio-item">
											<a href="images/portfolio/03.jpg" data-fancybox="gallery">
												<img src="images/portfolio/03.jpg" alt="image" />
												<div class="overlay-box">
													<span><i class="fa fa-eye" aria-hidden="true"></i></span>
													<div class="tag">
														<ul>
															<li>Web Design,</li>
															<li>Web Development</li>
														</ul>
													</div>
												</div>
											</a>
										</div>
									</div>
									<div class="column mix mix_all graphic wordpress branding mb_30 col-md-4 col-lg-4">
										<div class="default-portfolio-item">
											<a href="images/portfolio/04.jpg" data-fancybox="gallery">
												<img src="images/portfolio/04.jpg" alt="image" />
												<div class="overlay-box">
													<span><i class="fa fa-eye" aria-hidden="true"></i></span>
													<div class="tag">
														<ul>
															<li>Branding,</li>
															<li>wordpress</li>
														</ul>
													</div>
												</div>
											</a>
										</div>
									</div>
									<div class="column mix mix_all graphic design branding mb_30 col-md-4 col-lg-4">
										<div class="default-portfolio-item">
											<a href="images/portfolio/05.jpg" data-fancybox="gallery">
												<img src="images/portfolio/05.jpg" alt="image" />
												<div class="overlay-box">
													<span><i class="fa fa-eye" aria-hidden="true"></i></span>
													<div class="tag">
														<ul>
															<li>Web Design,</li>
															<li>wordpress</li>
														</ul>
													</div>
												</div>
											</a>
										</div>
									</div>
									<div class="column mix mix_all development wordpress design mb_30 col-md-4 col-lg-4">
										<div class="default-portfolio-item">
											<a href="images/portfolio/06.jpg" data-fancybox="gallery">
												<img src="images/portfolio/06.jpg" alt="image" />
												<div class="overlay-box">
													<span><i class="fa fa-eye" aria-hidden="true"></i></span>
													<div class="tag">
														<ul>
															<li>Web Design,</li>
															<li>Web Development</li>
														</ul>
													</div>
												</div>
											</a>
										</div>
									</div>
								</div>
							</div>
						</div>		
			        </div>
				</div>
			</div>
		</div>
	</section>
	<!--	End Portfolio
	===================================================-->
	<!--	Start Testimonial
	===================================================-->
	<section id="testimonial" class="py_80 bg_black full_row">
		<div class="container">
			<div class="row">
				<div class="col-md-12 col-lg-12">
					<div class="section_title_1 color_white text-center mx-auto pb_60 wow animated slideInUp">
	                    <h2 class="title text-uppercase"><span class="line_double mx-auto color_default">testimonial</span>What Client Say’s</h2>
	                    <span class="sub_title color_lightgray">Curious about what it's like to work with me? Here's what some of my clients have to say about their experiences:</span>
	                </div>
				</div>
				<div class="col-md-12 col-lg-12">
    				<div class="testimonial_item owl-carousel wow animated slideInUp">
                      <?php
                         $query = "SELECT * FROM `feedback`";
						 $result = $conn->query($query);
					 
						 if ($result->num_rows > 0) {
						   // output data of each row
						   while($row = $result->fetch_assoc()) {
							 echo "<div class='member_feedback color_lightgray p_30'>
							 <div class='client_img'><img src='images/logo/user.jpg' alt='image'></div>
							 <div class='star d-inline-block mt_30 color_default'>
								 <ul>
									 <li><i class='fa fa-star' aria-hidden='true'></i></li>
									 <li><i class='fa fa-star' aria-hidden='true'></i></li>
									 <li><i class='fa fa-star' aria-hidden='true'></i></li>
									 <li><i class='fa fa-star' aria-hidden='true'></i></li>
									 <li><i class='fa fa-star' aria-hidden='true'></i></li>
								 </ul>
							 </div>
							 <h5 class='color_gray mb_15'>".$row['name']."</h5>
							 <h5 class='color_gray mb_15'>".$row['location'].' '.$row['date']."</h5>
							 <p>".$row['message']."</p>
						 </div>";
						   }
						 } else {
						   echo "0 results";
						 }
					 
						 
					  ?>
    				</div>
    			</div>
			</div>
		</div>
	</section>
	<!--	End Testimonial
	===================================================-->
	<!--	Start Blog
	===================================================-->
	<!-- <section id="blog" class="py_80 bg_deepblack full_row">
		<div class="container">
			<div class="row">
				<div class="col-md-12 col-lg-12">
					<div class="section_title_1 text-center mx-auto pb_60 wow animated slideInUp">
	                    <h2 class="title text-uppercase color_white"><span class="line_double mx-auto color_default">blog</span>What’s News</h2>
	                    <span class="sub_title color_lightgray">Interdum a etiam sagittis vehicula porta. Massa felis eros quam blandit nulla dolor habitant. Ullamcorper quis ornare et proin pellentesque.</span>
	                </div>
				</div>
				<div class="col-md-12 col-lg-12">
					<div class="blog_grid_1 wow animated slideInUp">
						<div class="row">
							<div class="col-md-12 col-lg-4">
								<div class="blog_item">
									<div class="comments">
										<i class="fa fa-comment" aria-hidden="true"></i>
										<span class="color_white">12</span>
									</div>
									<div class="blog_img overlay_one"><img src="images/blog/01.jpg" alt="image"></div>
									<div class="blog_content bg_gray color_lightgray">
										<div class="blog_title">
											<a class="color_primary" href="blog-details-black.html"><h5>Convallis pulvinar morbi. Aenean nisi vitae metus nonummy a morbi.</h5></a>
										</div>
										<p class="mt_15 mb_30">Dictumst integer sollicitudin venenatis ornare quam. Ligula integer luctus, blandit egestas molestie facilisi porttitor neque sodal luctus senectus lacinia euismod adipiscing element turpis dolor curae; posuere augue.</p>
										
										<div class="admin">
											<img src="images/about/02.jpg" alt="image">
											<span class="color_white">By - Rockstar Jack</span>
										</div>
										<div class="date float-right color_primary">20 Jan 2019</div>
									</div>
								</div>
							</div>
							<div class="col-md-12 col-lg-4">
								<div class="blog_item">
									<div class="comments">
										<i class="fa fa-comment" aria-hidden="true"></i>
										<span class="color_white">18</span>
									</div>
									<div class="blog_img overlay_one"><img src="images/blog/02.jpg" alt="image"></div>
									<div class="blog_content bg_gray color_lightgray">
										<div class="blog_title">
											<a class="color_primary" href="blog-details-black.html"><h5>Ornare fames imperdiet sapien. Iaculis dictum aptent commodo at iaculis.</h5></a>
										</div>
										<p class="mt_15 mb_30">Dictumst integer sollicitudin venenatis ornare quam. Ligula integer luctus, blandit egestas molestie facilisi porttitor neque sodal luctus senectus lacinia euismod adipiscing element turpis dolor curae; posuere augue.</p>
										
										<div class="admin">
											<img src="images/about/02.jpg" alt="image">
											<span class="color_white">By - Rockstar Jack</span>
										</div>
										<div class="date float-right color_primary">18 Jan 2019</div>
									</div>
								</div>
							</div>
							<div class="col-md-12 col-lg-4">
								<div class="blog_item">
									<div class="comments">
										<i class="fa fa-comment" aria-hidden="true"></i>
										<span class="color_white">23</span>
									</div>
									<div class="blog_img overlay_one"><img src="images/blog/03.jpg" alt="image"></div>
									<div class="blog_content bg_gray color_lightgray">
										<div class="blog_title">
											<a class="color_primary" href="blog-details-black.html"><h5>Vulputate donec sem purus litora varius auctor augue suscipit hac.</h5></a>
										</div>
										<p class="mt_15 mb_30">Dictumst integer sollicitudin venenatis ornare quam. Ligula integer luctus, blandit egestas molestie facilisi porttitor neque sodal luctus senectus lacinia euismod adipiscing element turpis dolor curae; posuere augue.</p>
										
										<div class="admin">
											<img src="images/about/02.jpg" alt="image">
											<span class="color_white">By - Rockstar Jack</span>
										</div>
										<div class="date float-right color_primary">17 Jan 2019</div>
									</div>
								</div>
							</div>
						</div>
						<div class="mx-auto text-center mt_60"><a class="btn btn-default" href="blog-black.html">View Blog</a></div>
					</div>
				</div>
			</div>
		</div>
	</section> -->
	<!--	End Blog
	===================================================-->
	<!--	Start Contact
	===================================================-->
	<section id="contact" class="py_80 bg_black full_row">
		<div class="container">
			<div class="row">
				<div class="col-md-12 col-lg-12">
					<div class="section_title_1 text-center mx-auto pb_60 wow animated slideInUp">
	                    <h2 class="title text-uppercase color_white"><span class="line_double mx-auto color_default">contact</span>Get In Touch</h2>
	                    <span class="sub_title color_lightgray">Feel free to reach out to discuss potential projects, collaborations, or just to say hello! I'm always open to new opportunities and exciting challenges.</span>
	                </div>
				</div>
				<div class="col-md-12 col-lg-12">
					<div class="row">
						<div class="col-md-4 col-lg-4">
							<div class="contact_info wow animated fadeInLeft">
		    					<ul>
		    						<li>
		    							<div class="contact_text">
		    								<h6 class="font-weight-bold color_white">Email</h6>
		    								<span class="color_lightgray">support@mpatra.tech</span>
		    							</div>
		    						</li>
		    						<li>
		    							<div class="contact_text">
		    								<h6 class="font-weight-bold color_white">Phone</h6>
		    								<span class="color_lightgray">+00 61 700 800</span>
		    							</div>
		    						</li>
		    						<li>
		    							<div class="contact_text">
		    								<h6 class="font-weight-bold color_white">Address</h6>
		    								<span class="color_lightgray">kolkata - India </span>
		    							</div>
		    						</li>
		    						<li>
		    							<div class="contact_text">
		    								<h6 class="font-weight-bold color_white">Website</h6>
		    								<span class="color_lightgray">www.mpatra.tech</span>
		    							</div>
		    						</li>
		    					</ul>
		    				</div>
		    				<div class="socal_media_2 mt_15 d-inline-block white_hover">
					            <ul>
					                <li><a href="https://github.com/maheshpatra"><i class="fa fa-github" aria-hidden="true"></i></a></li>
					                <li><a href="https://in.linkedin.com/in/maheswar-patra-11137a25b"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
					                
					            </ul>
					        </div>
						</div>
						<div class="col-md-8 col-lg-8">
							<form  action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" class="form contact_message wow animated fadeInRight">
								<div class="row">
									<div class="col-md-6 col-lg-6">
										<div class="form-group">
											<input class="form-control bg_black" type="text" name="name" placeholder="Your Name" />
										</div>
									</div>
									<div class="col-md-6 col-lg-6">
										<div class="form-group">
											<input class="form-control bg_black" type="email" name="email" placeholder="Email Address" />
										</div>
									</div>
									<div class="col-md-12 col-lg-12">
										<div class="form-group">
										  <input class="form-control bg_black" type="text" name="subject" placeholder="Subject"/>
										</div>
									</div>
									<div class="col-md-12 col-lg-12">
										<div class="form-group">
											<textarea class="form-control bg_black" name="message" rows="7" placeholder="Message"></textarea>
										</div>							
									</div>
									<div class="col-md-12 col-lg-12">
										<div class="form-group">
											<input class="btn btn-default" value="Send Massage" type="submit"/>
										</div>
									</div>
									<div class="col-md-12 col-lg-12">
										<div class="error-handel">
											<div id="success">Your email sent Successfully, Thank you.</div>
											<div id="error"> Error occurred while sending email. Please try again later.</div>
										</div>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<?php
    // Process form submission
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
    // $sql = "INSERT INTO `contact`(`name`, `email`, `date`, `message`, `subject`) VALUES ('$name','$email','$date','$content','$subject')";
	$name =  $_POST["name"];
	$email = $_POST['email'];
	$subject =  $_POST['subject'];
	$content = $_POST['message'];
	$de = date("d-m-Y");
    $sql = "INSERT INTO `contact`(`name`, `email`, `date`, `message`, `subject`) VALUES ('$name','$email','$de','$content','$subject')";
   
    if(mysqli_query($conn, $sql)){
        echo "<div id='success'>Your email sent Successfully, Thank you.</div>";

    }else{
        echo mysqli_error($conn);
    }
        

        
    }
    ?>

	 

	<!--	End Contact
	===================================================-->
	<!--	Start Footer
	===================================================-->
	<!-- <footer class="p_20 color_lightgray bg_deepblack text-center full_row">
		<div class="container">
			<div class="row">
				<div class="col-md-12 col-lg-12">
					<div class="copyright"><p><a href="https://www.templateshub.net" target="_blank">Templates Hub</a></p></div>
				</div>
			</div>
		</div>
	</footer> -->
	<!--	End Footer
	===================================================-->
	</div>
</div>
<!--	Wrapper End
=======================================================-->
	<!--	Js Links
	===================================================-->
	<script src="js/jquery.min.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/plugins.js"></script>
	<script src="js/custom.js"></script>
	<script>
		$(document).ready(function() {
		
		//========================================
		// Water Effect
		//========================================
		
			$('.banner_water_effect').ripples({
			  resolution: 256,
			  dropRadius: 20,
			  perturbance: 0.03,
			  interactive:true,
			});
		//======================================
		//  Smoothscroll js
		//======================================

		  $("a").on('click', function(event) {

			  if (this.hash !== "") {
				event.preventDefault();
			  
				var hash = this.hash;

				$('html, body').animate({
				  scrollTop: $(hash).offset().top 
				}, 1000, function(){
			 
				  window.location.hash = hash;
				});
			  }
			});
		 });
	</script>
</body>

<!-- index-854:31-->
</html>