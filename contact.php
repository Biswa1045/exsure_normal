<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Exsure</title>

    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <!-- Our Custom CSS -->
     <link rel="stylesheet" href="css/sidenavbar.css">
	<link rel="stylesheet" href="css/mainstyle.css">
	<style>
        .error{
            color:red;
        }
        
        #contact {padding:25px;}
        .btn-primary {
            color: #fff;
            background-color: #293a85;
            border-color:#293a85;
        }
        
    </style>
    <!-- Scrollbar Custom CSS -->
	
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/fontawesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css">
	 <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>

</head>

<body>

    <div class="wrapper">
        <!-- Sidebar  -->
        <nav id="sidebar">
            <div class="sidebar-header">
                <img src="image/exsure-logo.png" width="180px" alt="logo" class="img-fluid"/>			
            </div>
			<div class="wrap">
				<ul class="wrap-nav">
					<li><!--<a href="#">THE POTENTIAL OF CONDENSATES</a>-->
						<ul>
							<li><a href="index.html">Home</a></li>
							<li><a href="about.html">About Us</a></li>
							<li><a href="service.php">Science and Services</a></li>
							<li><a href="news.html">News</a></li>
						</ul>
					</li>
					<li><!--<a href="#">THE POWER OF EXSURE</a>-->
					<ul>
					    <li><a href="publications.html">Publications </a></li>
						<li><a href="contact.php">Contact Us</a></li>
						<li><a href="join us.html">Join Us</a></li>
						<!--<li><a href="#">News</a></li>-->
					</ul>
					</li>
				</ul>					
			</div>								
            <ul class="list-unstyled CTAs">
				<li><a href="contact.php">CONTACT</a></li>
				<li><a href="#">PRIVACY POLICY</a></li>
			   <li><a href="#">TERMS OF USE © 2022</a></li>
            </ul>
        </nav>

        <!-- Page Content  -->
        <div id="content">
            <nav class="navbar navbar-expand-lg navbar-light">
                <div class="container-fluid">					
                    <button type="button" id="sidebarCollapse" class="btn btn-info">
                        <i class="fas fa-align-left"></i>                    
                    </button>                                      
                </div>
            </nav>
		
			<div class="back4">
				<div class="container">
					<div class="row text-center">
						<div class="col-lg-12 col-md-12 col-12">
							<div class="mtitle" data-aos="fade-right" duration="1000">
								<h2>CONTACT US </h2>
							</div>
						</div>
					</div>
				</div>
			</div>
			
			<section class="about py-5">
				<div class="container text-center">
				    <div class="text">
    							<h2>GET IN TOUCH<span> WITH US</span></h2>
    							<p class="text-center">Contact us today, and get reply with in 24 hours!</p>
    						</div>
					<div class="row">
						<div class="col-lg-6 col-md-6 col-12">
						    <!-- php code start-->
						    <?php 
                                include('connect.php');
                                ?>
                            <!-- php code end--> 
                                
    						<form id="contact" action="<?= $_SERVER['PHP_SELF'] ?>" method="post">
                                <div class="form-group">
                                  <input placeholder="Full Name" type="text" tabindex="1" class="form-control" name="name" value="<?= $name ?>">
                                  <span class="error"><?= $name_error ?></span>
                                </div>
                                
                                <div class="form-group">
                                  <input placeholder="Email Address" type="email" tabindex="2" class="form-control" name="email"  value="<?= $email ?>">
                                  <span class="error"><?= $email_error ?></span>
                                </div>
                                
                                <div class="form-group">
                                  <input placeholder="Contact Number" type="tel" tabindex="3" class="form-control" name="phone" value="<?= $phone ?>">
                                  <span class="error"><?= $phone_error ?></span>
                                </div>
                                
                                <div class="form-group">
                                  <input placeholder="Institute Name" type="text" class="form-control" tabindex="4" name="insti" 
                                  value="<?= $insti ?>">
                                  <span class="error"><?= $insti_error ?></span>
                                </div>
                                
                               <div class="form-group">
                                  <textarea placeholder="Your Queries.." tabindex="5" class="form-control" name="message" value="<?= $message ?>"></textarea>
                                  <span class="error"><?= $message_error ?></span>
                                </div>
                                
                                <div class="form-group">
                                  <button name="submit" class="btn btn-primary" type="submit" id="contact-submit" data-submit="...Sending">Submit</button>
                                </div>
                                  <span class="success"><?= $success ?></span>
                            </form>
					    </div>
					    <!--- second-->
					    <div class="col-lg-6 col-md-6 col-12 pt-2" data-aos="fade-up">
						    <div class="row">
						       <div class="col-lg-12 col-md-12 col-12 pt-3">
        							<div class="contact-detail">
        								<h6>Address</h6>
        								<p>KIIT TBI, Campus-11, Room No.301,<br> KIIT UNIVERSITY,
        									Patia, Bhubaneswar, <br>Khordha, Odisha, 751024</p>
        							</div>	  
						        </div>
						        <div class="col-lg-12 col-md-12 col-12 pt-3">
        							<div class="contact-detail">
        								<h6>Email Id</h6>
        								<p>info@exsure.in <br>
        									sales@exsure.in</p>
        							</div>	  
        						</div>
        						<div class="col-lg-12 col-md-12 col-12 pt-3">
        							<div class="contact-detail">
        								<h6>Contact No.</h6>
        								<p>+91 7980457752/9836956514<br>
        									   +91 7980402341</p>   	
        							</div>	  
        						</div>	
						    </div>		
						</div>
					</div>
				</div>
			</section>
			
			<!--<section class="about py-5">
				<div class="container text-center">
					<div class="row">
						<div class="col-lg-12 col-md-12 col-12 pb-5" data-aos="fade-up">
							<div class="text">
								<h2>GET IN TOUCH<span> WITH US</span></h2>
							</div>	
						</div>
						<div class="col-lg-4 col-md-4 col-12" data-aos="fade-up">
							<div class="contact-detail">
								<h6>Address</h6>
								<p>KIIT TBI, Campus-11, Room No.301,<br> KIIT UNIVERSITY,
									Patia, Bhubaneswar, <br>Khordha, Odisha, 751024</p>
							</div>	  
						</div>	
						<div class="col-lg-4 col-md-4 col-12" data-aos="fade-up">
							<div class="contact-detail">
								<h6>Email Id</h6>
								<p>info@exsure.in <br>
									sales@exsure.in</p>
							</div>	  
						</div>
						<div class="col-lg-4 col-md-4 col-12" data-aos="fade-up">
							<div class="contact-detail">
								<h6>Contact No.</h6>
								<p>+91 7980457752/9836956514<br>
									   +91 7980402341</p>   	
							</div>	  
						</div>			
					</div>
				</div>			
			</section>-->
			
			<section class="Map">
				<div class="container">	
					<div class="col-12 p-0">
						<iframe src= "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7481.396105441798!2d85.81576317177014!3d20.35408884547059!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a19091813dab8d5%3A0xa033051ccddbbcbc!2sKalinga%20Institute%20of%20Industrial%20Technology!5e0!3m2!1sen!2sin!4v1643265081378!5m2!1sen!2sin" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>					
					</div>
				</div>			
			</section>
			
			
			<section class="footer py-2">
				<div class="container">					
					<div class="row">
						<div class="col-12 clogo">
							<img src="image/exsure-logo.png" width="180px" class="img-fluid"/>
						</div>
					</div>	
				</div>
			</section>		
		</div>
	</div>

    <!-- jQuery CDN - Slim version (=without AJAX) -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <!-- Popper.JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
    <!-- jQuery Custom Scroller CDN -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.concat.min.js"></script>
	 <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
	  <script>
		AOS.init({		
		duration:2000,
		});
	  </script>
    <script type="text/javascript">
        $(document).ready(function () {
            $("#sidebar").mCustomScrollbar({
                theme: "minimal"
            });

            $('#sidebarCollapse').on('click', function () {
                $('#sidebar, #content').toggleClass('active');
                $('.collapse.in').toggleClass('in');
                $('a[aria-expanded=true]').attr('aria-expanded', 'false');
            });
        });
    </script>
</body>

</html>