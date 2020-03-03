<!--
Template Name: Charity Hope
Title: charity website template free download bootstrap Charity Hope
Description: charity website template with bootstrap framework for free download and best suited for ngos charities.
Keyword: charity website template, bootstrap charity template free, charity website templates bootstrap, donation website template free, charity website templates bootstrap free download
Author: Bootstrap Website Templates
Author URI: https://bootstrapwebtemplates.com/
Template URI: https://bootstrapwebtemplates.com/free-download-bootstrap-charity-website-template
Tags: charity, charity hub, donate, donations, foundation, fundraising, ngo, non profit, non-profit, nonprofit, organization, social, volunteer, welfare, Causes
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->

<!DOCTYPE HTML>
<html class="no-js" lang="de">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="">
		<meta name="keywords" content="">
		<meta name="robots" content="index,follow">
	
		<title>Syria Care</title>

		<?php session_start(); ?>
		<?php include('header_link.php'); ?>
	
	</head>
	<body>
		
		<?php

			$login = "";


			if(isset($_SESSION['username']) && isset($_SESSION['userid']) && ($_SESSION['username']!="")
			 && ($_SESSION['userid']!="")){
				
				$login = "yes";
				
				if( isset($_GET['syc']) && ($_GET['syc']!="") ){
					
					$menu = $_GET['syc'];

					switch ($menu) {
						case 1:
							$filepage = "user/userprofile.php";
							break;
						case 2:
							$filepage = "donate/history_donation.php";
							break;
						
						default:
							$filepage = "homepage.php";
							break;
					}

				}else{
					$filepage = "homepage.php";
				}


			}else{
				
				$login = "no";

				$filepage = "homepage.php";

			}


		?>


		<?php include('top_navigation.php'); ?>

		<?php include($filepage); ?>
		

		<!-- this is real footer -->
		<?php include('footer.php'); ?>

		<?php include('script_link.php'); ?>
		
		<script type="text/javascript">
			$( document ).ready(function() {
			
					/* Basic Gallery */
					$( '.swipebox' ).swipebox();
			
					/* Video */
					$( '.swipebox-video' ).swipebox();
			
					/* Dynamic Gallery */
					$( '#gallery' ).click( function( e ) {
						e.preventDefault();
						$.swipebox( [
							{ href : 'http://swipebox.csag.co/mages/image-1.jpg', title : 'My Caption' },
							{ href : 'http://swipebox.csag.co/images/image-2.jpg', title : 'My Second Caption' }
						] );
					} );
				
		      });
		</script>
	</body>
</html>
