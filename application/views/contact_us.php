<?php
/**
 * Created by PhpStorm.
 * User: Hauw
 * Date: 9/26/2018
 * Time: 9:11 AM
 */
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="zxx">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="Suchana is an online blog, news & magazine dedicated to different categories html template">
		<title>Contact Us | Love2share</title>
		<?php echo $css; ?>
	</head>
	<body>
		<div id="preloader">
			<div id="status"></div>
		</div>
		<?php echo $navbar; ?>
		<div class="map">
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d810.0686209858403!2d106.60970702708323!3d-6.228164561312673!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69fd4ffab42333%3A0xec5cb4279487e7f0!2sGBI%20Glow%20Fellowship%20Center%20Dynaplast!5e0!3m2!1sid!2sid!4v1590437000255!5m2!1sid!2sid" frameborder="0" style="border:0; height: 350px; width: 100%;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
		</div>
		<section class="contact">
			<div class="container">
				<div class="row">
					<div class="col-md-8">
						<div id="contact-form" class="contact-form">
							<div id="contactform-error-msg"></div>
							<form method="post" action="#" name="contactform" id="contactform">
								<div class="row">
									<div class="form-group col-xs-12">
										<label>Name:</label>
										<input type="text" name="full_name" class="form-control" id="Name" placeholder="Enter full name" required>
									</div>
									<div class="form-group col-xs-6">
										<label>Email:</label>
										<input type="email" name="email" class="form-control" id="email" placeholder="abc@xyz.com" required>
									</div>
									<div class="form-group col-xs-6 col-left-padding">
										<label>Phone Number:</label>
										<input type="text" name="phone" class="form-control" id="phnumber" placeholder="XXXX-XXXXXX" required>
									</div>
									<div class="form-group textarea col-xs-12">
										<label>Message:</label>
										<textarea name="comments" placeholder="Enter a message" required></textarea>
									</div>
									<div class="col-xs-12">
										<div class="comment-btn">
											<input type="submit" class="btn-blog" id="submit" value="Send Message">
										</div>
									</div>
								</div>
							</form>
						</div>
					</div>
					<div class="col-md-4">
						<div class="contact-about footer-margin">
							<div class="about-logo mar-bottom-20">
								<img src="<?php echo base_url('/inti/images/blog/'); ?>" alt="Logo love2share">
							</div>
							<p>Sedikit kisahin Love2share aja ka, atau lu kasih moto apa gitu wkwkwkwk</p>
							<div class="contact-location">
								<ul>
									<li><i class="fa fa-map-marker" aria-hidden="true"></i> Alamat kantor atau team</li>
									<li><i class="fa fa-phone"></i> Nomer admin yang ada wa'nya kalo bisa</li>
									<li><i class="fa fa-envelope"></i> emailnya</li>
								</ul>
							</div>
							<div class="follow_us">
								<ul class="social_icons">
									<li><a href="#"> <i class="fa fa-facebook"></i></a></li>
									<li><a href="#"><i class="fa fa-twitter"></i></a></li>
									<li><a href="#"><i class="fa fa-instagram"></i></a></li>
									<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<?php echo $footer; ?>
		<div id="back-to-top">
			<a href="#"></a>
		</div>
		<div id="search">
			<button type="button" class="close">×</button>
			<form>
				<input type="search" value="" placeholder="type keyword(s) here" />
				<button type="submit" class="btn btn-primary">Search</button>
			</form>
		</div>
		<?php echo $js; ?>
	</body>
</html>