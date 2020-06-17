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
		<title>Blog Detail | Love2share</title>
		<?php echo $css; ?>
	</head>
	<body class="page">
		<div id="preloader">
			<div id="status"></div>
		</div>
		<?php echo $navbar; ?>
		<div id="mt_banner" class="innerbanner">
			<div class="container-fluid">
				<div class="featured-image" style="background-image:url(/inti/images/slider/bg2.jpg)"></div>
				<div class="banner-caption">
					<div class="banner_caption_text">
						<div class="post-category">
							<ul>
								<li class="cat-yellow"><a href="#" class="white">Popular</a></li>
							</ul>
						</div>
						<h1><a href="#"><?php echo $lol['judul_ar']; ?></a></h1>
						<div class="item-meta">
							<span>by</span>
							<a href="#"><?php echo $lol['id_adm']; ?></a><br>
							<time datetime="YYYY-MM-DDThh:mm:ssTZD"><?php echo $lol['tanggal_ar']; ?></time>
						</div>
					</div>
				</div>
			</div>
		</div>
		<section id="blog_main_sec" class="section-inner">
			<div class="container">
				<div class="blog-detail-main">
					<div class="post_body">
						<p>
							<?php echo $lol['ayat_ar']; ?>
						</p>
						<blockquote>
							<p>Sed felis est, placerat a ornare vel, tempor id est. Phasellus ac urna vitae massa porttitor lacinia. Integer mollis, nulla pretium porttitor sagittis, urna nibh lobortis eros, ut lacinia elit velit nec diam.</p>
							<span>Arthur & Molly Weasley</span>
						</blockquote>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.Ut
							enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
						</p>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.Ut
							enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat incidunt dicta eius corporis iste, nihil nam atque.
							Deserunt vel, velit cum aut error nam. Unde in ipsa quos earum. Atque.
						</p>
					</div>
					<div class="follow_us">
						<ul class="social_icons">
							<li><a href="#"> <i class="fa fa-facebook"></i></a></li>
							<li><a href="#"><i class="fa fa-twitter"></i></a></li>
							<li><a href="#"><i class="fa fa-instagram"></i></a></li>
							<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
						</ul>
					</div>
					<div class="tag mar-top-30">
						<div class="widget-tags-main">
							<h5 class="bg-orange">Tags:</h5>
							<a href="#" class="">Beach</a>
							<a href="#" class="">Dress</a>
							<a href="#" class="">Food</a>
							<a href="#" class="">Fashion</a>
							<a href="#" class="">Gadget</a>
							<a href="#" class="">Holiday</a>
							<a href="#" class="">Nature</a>
							<a href="#" class="">Photography</a>
							<a href="#" class="">Tips</a>
							<a href="#" class="">Travel</a>
						</div>
					</div>
					<div class="author_box">
						<div class="author_img">
							<img src="<?php echo base_url('/inti/images/blog/author.png'); ?>" alt="Author">
						</div>
						<div class="author_bio">
							<h5>Jhon Snow</h5>
							<p>Duis a enim vel mauris ultrices. Nullam aliquet velit ac velit tempus in semper an neque auctor. Aenean ligula mi, auctor sed tempus.Duis a enim vel mauris ultrices. Nullam aliquet velit ac velit tempus in semper an neque auctor.
								Aenean ligula mi, auctor sed tempus.
							</p>
							<ul>
								<li>
									<a href="#">
									<i class="fa fa-facebook"></i>
									</a>
								</li>
								<li>
									<a href="#">
									<i class="fa fa-twitter"></i>
									</a>
								</li>
								<li>
									<a href="#">
									<i class="fa fa-google-plus"></i>
									</a>
								</li>
								<li>
									<a href="#">
									<i class="fa fa-linkedin"></i>
									</a>
								</li>
							</ul>
						</div>
					</div>
					<div id="comments">
						<div class="comments-wrap">
							<h3 class="single-post_heading blog_heading_border">Comments</h3>

							<?php echo $comments; ?>

							<div class="leave_comment">
								<h3 class="blog_heading_border"> Leave a Comment </h3>
								<p class="notice error"><?= $this->session->flashdata('error_msg') ?></p><br/>
				                <a href="<?php echo site_url('nyoba/index/'.$lol['id_ar']); ?>" class="btn btn-success">Comment disini</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<?php echo $footer; ?>
		<a id="back-to-top" href="#" class="btn btn-primary btn-lg back-to-top" role="button" title="" data-placement="left">
		<span class="fa fa-arrow-up"></span>
		</a>
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