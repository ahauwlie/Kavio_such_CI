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
							<h3 class="single-post_heading blog_heading_border">Comments (4)</h3>
							<ol class="comments-lists">
								<li class="comment">
									<div class="activity_rounded">
										<img src="<?php echo base_url('/inti/images/blog/cmnt-1.jpg'); ?>" alt="image" /> 
									</div>
									<div class="comment-body">
										<h4 class="text-left"> NIKLOS DELSON &nbsp;&nbsp;
											<small class="date-posted pull-right">18th Mar, 2018</small>
										</h4>
										<p> Duis a enim vel mauris ultrices. Nullam aliquet velit ac velit tempus in semper neque auctor. Etiam pellentesque, magna eget lobortis placerat, leo leo consequat ante, non iaculis turpis augue ac ligula. Duis a
											enim vel mauris ultrices, leo. 
										</p>
										<a href="#" class="pull-left btn-blog">Reply</a>
										<div class="clearfix"></div>
									</div>
									<ol class="children">
										<li class="comment">
											<div class="activity_rounded">
												<img src="<?php echo base_url('/inti/images/blog/cmnt-2.jpg'); ?>" alt="image" /> 
											</div>
											<div class="comment-body">
												<h4 class="text-left"> NIKLOS DELSON &nbsp;&nbsp;
													<small class="date-posted pull-right">18th Mar, 2018</small>
												</h4>
												<p> Duis a enim vel mauris ultrices. Nullam aliquet velit ac velit tempus in semper neque auctor. Etiam pellentesque, magna eget lobortis placerat, leo leo consequat ante, non iaculis turpis augue ac ligula.
													Duis a enim vel mauris ultrices, leo. 
												</p>
												<a href="#" class="pull-left btn-blog">Reply</a>
												<div class="clearfix"></div>
											</div>
										</li>
									</ol>
								</li>
								<li class="comment">
									<div class="activity_rounded">
										<img src="<?php echo base_url('/inti/images/blog/cmnt-3.jpg'); ?>" alt="image" /> 
									</div>
									<div class="comment-body">
										<h4 class="text-left"> NIKLOS DELSON &nbsp;&nbsp;
											<small class="date-posted pull-right">18th Mar, 2018</small>
										</h4>
										<p> Duis a enim vel mauris ultrices. Nullam aliquet velit ac velit tempus in semper neque auctor. Etiam pellentesque, magna eget lobortis placerat, leo leo consequat ante, non iaculis turpis augue ac ligula. Duis a
											enim vel mauris ultrices, leo. 
										</p>
										<a href="#" class="pull-left btn-blog">Reply</a>
										<div class="clearfix"></div>
									</div>
								</li>
							</ol>
							<div class="leave_comment">
								<h3 class="blog_heading_border"> Leave a Comment </h3>
								<form action="#" method="post">
									<div class="row">
										<div class="col-sm-6">
											<div class="form-group">
												<input placeholder="Name" class="form-control" type="text" required> 
											</div>
										</div>
										<div class="col-sm-6">
											<div class="form-group">
												<input placeholder="Email" class="form-control" type="email" required> 
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-sm-12">
											<textarea placeholder="Message" class="form-control" required></textarea>
										</div>
									</div>
									<div class="row">
										<div class="col-md-12">
											<button type="submit" class="btn-blog">Submit</button>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section id="mt_blog" class="light-bg pad-top-0">
			<div class="container">
				<div class="blog_post_sec blog_post_inner">
					<div class="row">
						<div class="col-md-8 col-sm-12 mar-bottom-30">
							<div class="blog-post_wrapper image-wrapper">
								<div class="blog-post-image">
									<img src="<?php echo base_url('/inti/images/blog-listing/blog_02.jpg'); ?>" alt="image" class="img-responsive center-block post_img" />
								</div>
								<div class="post-content">
									<div class="post-category">
										<ul>
											<li class="cat-yellow"><a href="#" class="white">Populor</a></li>
											<li class="cat-pink"><a href="#" class="white">Fashion</a></li>
										</ul>
									</div>
									<div class="post-date">
										<p><a href="#">15th August 2019</a></p>
									</div>
									<h2 class="entry-title">
										<a href="blog-details.html" class="white">I'm passionate about food, the tradition of it, cooking it, sharing it</a>
									</h2>
									<div class="item-meta white">
										<span>by</span>
										<a class="author-name white" href="#">Patricia Jenkins</a>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-4 col-sm-12 mar-bottom-30">
							<div class="blog-post_wrapper image-wrapper blog-wrapper-list">
								<div class="blog-post-image">
									<img src="<?php echo base_url('/inti/images/blog-listing/blog_101.jpg'); ?>" alt="image" class="img-responsive center-block post_img" />
									<div class="post-category">
										<ul>
											<li class="cat-green mar-0"><a href="#" class="white">Health</a></li>
										</ul>
									</div>
								</div>
								<div class="post-content">
									<div class="post-date">
										<p><a href="#">15th August 2019</a></p>
									</div>
									<h2 class="entry-title">
										<a href="blog-details.html" class="">I Thought My Glasses Made Me Unattractive</a>
									</h2>
									<div class="item-meta">
										<span>by</span>
										<a class="author-name" href="author.html">Admin Jackson</a>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-4 col-sm-12 mar-bottom-30">
							<div class="blog-post_wrapper front-wrapper bg-orange">
								<div class="post-content">
									<div class="post-category">
										<ul>
											<li class="cat-blue"><a href="#" class="white">Technology</a></li>
											<li class="cat-green"><a href="#" class="white">Health</a></li>
										</ul>
									</div>
									<div class="post-date">
										<p><a href="#">15th August 2019</a></p>
									</div>
									<h2 class="entry-title">
										<a href="blog-details.html" class="white">The future of architecture is culture</a>
									</h2>
									<div class="item-meta white">
										<span>by</span>
										<a class="author-name white" href="#">Patricia Jenkins</a>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-4 col-sm-12 mar-bottom-30">
							<div class="blog-post_wrapper front-wrapper bg-gray">
								<div class="post-content">
									<div class="post-category">
										<ul>
											<li class="cat-pink"><a href="#" class="white">Fashion</a></li>
											<li class="cat-green"><a href="#" class="white">Health</a></li>
										</ul>
									</div>
									<div class="post-date">
										<p><a href="#">15th August 2019</a></p>
									</div>
									<h2 class="entry-title">
										<a href="blog-details.html">Architecture belongs to culture, not to civilization</a>
									</h2>
									<div class="item-meta">
										<span>by</span>
										<a class="author-name" href="#">Patricia Jenkins</a>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-4 col-sm-12 mar-bottom-30">
							<div class="blog-post_wrapper image-wrapper">
								<div class="blog-post-image">
									<img src="<?php echo base_url('/inti/images/blog-listing/blog_10.jpg'); ?>" alt="image" class="img-responsive center-block post_img" />
								</div>
								<div class="post-content">
									<div class="post-category">
										<ul>
											<li class="cat-green"><a href="#" class="white">Health</a></li>
										</ul>
									</div>
									<div class="post-date">
										<p><a href="#">15th August 2019</a></p>
									</div>
									<h2 class="entry-title white">
										<a href="blog-details.html" class="white">I think it's the responsibility of a designer to try to break rules and barriers</a>
									</h2>
									<div class="item-meta white">
										<span>by</span>
										<a class="author-name white" href="#">Patricia Jenkins</a>
									</div>
								</div>
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