
	<div class="topbar">
		<div class="container">
			<div class="row"> 
				<div class="bar-phone">
					<i class="fa fa-phone"></i> <span>Call Us :</span> <strong>+603 5523 4077</strong>
				</div>
				<div class="bar-mail">
					<i class="fa fa-envelope"></i> <span>Mail Us :</span> <strong>syriacare@gmail.com</strong>
				</div>
				<div class="header-social">
					<a class="facebook" href="#" title="facebook" target="_blank" rel="nofollow"><i class="fa fa-facebook"></i>  </a>
					<a class="twitter" href="#" title="twitter" target="_blank" rel="nofollow"><i class="fa fa-twitter"></i>  </a>
					<a class="linkedin" href="#" title="linkedin" target="_blank" rel="nofollow"><i class="fa fa-linkedin"></i>  </a>
					<a class="google" href="#" title="google-plus" target="_blank" rel="nofollow"><i class="fa fa-google-plus"></i>  </a>
					<a class="youtube" href="#" title="youtube-play" target="_blank" rel="nofollow"><i class="fa fa-youtube-play"></i>  </a>
                    
                    <?php

                        if($login=="yes"){
                            echo '<a class="facebook text-danger" style="font-size:13px" href="logout.php" title="Logout" rel="nofollow">Logout</a>';
                        }else if($login=="no"){
                            echo '<a class="youtube text-danger" href="login.php" title="Login" rel="nofollow">Login</a>';   
                        }
                        
                    ?>
                </div>
			</div>
		</div>
	</div>
	<nav class="navbar navbar-default navbar-sticky bootsnav">
		<div class="container">
			<div class="row"> 
				<div class="attr-nav">
                    <i class="fa fa-user-circle" aria-hidden="true"></i>
                    
                    <?php

                        if($login=="yes"){
                            echo '<a class="donation" href="index.php?syc=2">my donation</a>';
                            echo '<a class="sponsor-button" href="index.php?syc=1"><i class="fa fa-user"></i> My Profile</a>';
                        }else if($login=="no"){
                            echo '<a class="donation" href="donate.html">donate now</a>';
                        }
                        
                    ?>
					
				</div>           
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
					<i class="fa fa-bars"></i>
					</button>
					<a class="navbar-brand logo" href="index.html"><img src="images/logo.png" width="90rem" class="img-responsive" /></a>
				</div>
				<div class="collapse navbar-collapse" id="navbar-menu">
					<ul class="nav navbar-nav navbar-right" data-in="fadeInDown" data-out="fadeOutUp">
						<li><a href="index.php">Home</a></li>
						<li><a href="about-us.html">About Us</a></li>
						<li><a href="activities.html">Activities</a></li>
						<li><a href="projects.html">Projects</a></li>
						<li><a href="gallery.html">Gallery</a></li>
						<li><a href="contact.html">Contact Us</a></li>
					</ul>
				</div>
			</div>
		</div>
	</nav>
	