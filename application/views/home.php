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
		<title>Home | Love2share</title>
		<link rel="shortcut icon" type="image/x-icon" href="">
		<?php echo $css; ?>
	</head>
	<body>
		<!-- jam loading diawal -->
		<div id="preloader">
			<div id="status"></div>
		</div>
		<?php echo $navbar; ?>
		<section id="mt_banner">
			<div class="swiper-container">
				<div class="swiper-wrapper">
					<div class="swiper-slide">
						<div class="slide-inner" style="background-image:url(/inti/images/slider/bg2.jpg)"></div>
						<div class="banner_caption_text">
							<div class="post-category">
								<ul>
									<li class="cat-yellow"><a href="#" class="white">Popular</a></li>
								</ul>
							</div>
							<h1><a href="#">Every Next Level of Your Life Will Demand a Different You</a></h1>
							<div class="item-meta">
								<span>by</span>
								<a href="author.html">Admin Jackson</a>
							</div>
						</div>
					</div>
					<div class="swiper-slide">
						<div class="slide-inner" style="background-image:url(/inti/images/slider/bg1.jpg)"></div>
						<div class="banner_caption_text">
							<div class="post-category">
								<ul>
									<li class="cat-blue"><a href="#" class="white">Technology</a></li>
								</ul>
							</div>
							<h1><a href="#">The creation of beauty is art to break rules and barriers</a></h1>
							<div class="item-meta">
								<span>by</span>
								<a href="author.html">Admin Jackson</a>
							</div>
						</div>
					</div>
					<div class="swiper-slide">
						<div class="slide-inner" style="background-image:url(/inti/images/slider/bg3.jpg)"></div>
						<div class="banner_caption_text">
							<div class="post-category">
								<ul>
									<li class="cat-blue"><a href="#" class="white">Technology</a></li>
									<li class="cat-yellow"><a href="#" class="white">Popular</a></li>
								</ul>
							</div>
							<h1><a href="#">Get Scary With This Vegan Spooky Spider Crackle Cake!</a></h1>
							<div class="item-meta">
								<span>by</span>
								<a href="author.html">Admin Jackson</a>
							</div>
						</div>
					</div>
				</div>
				<div class="swiper-button-next swiper-button-white"></div>
				<div class="swiper-button-prev swiper-button-white"></div>
			</div>
		</section>
		<section id="mt_blog" class="">
			<div class="container">
				<div class="row">
					<div class="col-md-9 width70">
						<div class="blog_post_sec blog_post_inner">
							<div class="row">
								<div class="col-md-6 col-sm-12 mar-bottom-30">
									<div class="blog-post_wrapper image-wrapper">
										<div class="blog-post-image">
											<img src="<?php echo base_url('/inti/images/blog-listing/blog_08.jpg'); ?>" alt="image" class="img-responsive center-block post_img" />
										</div>
										<div class="post-content">
											<div class="post-category">
												<ul>
													<li class="cat-yellow"><a href="#" class="white">Populor</a></li>
													<li class="cat-pink"><a href="#" class="white">Fashion</a></li>
												</ul>
											</div>
											<div class="post-date">
												<p><a href="#">25th May 2020</a></p>
											</div>
											<h2 class="entry-title">
												<a href="<?php echo site_url('Blog'); ?>" class="white">I'm passionate about food, the tradition of it, cooking it, sharing it</a>
											</h2>
											<div class="item-meta white">
												<span>by</span>
												<a class="author-name white" href="author.html">Patricia Jenkins</a>
											</div>
										</div>
									</div>
								</div>
								<div class="col-md-6 col-sm-12 mar-bottom-30">
									<div class="blog-post_wrapper image-wrapper blog-wrapper-list">
										<div class="blog-post-image">
											<img src="<?php echo base_url('/inti/images/blog-listing/blog_103.jpg'); ?>" alt="image" class="img-responsive center-block post_img" />
											<div class="post-category">
												<ul>
													<li class="cat-blue mar-0"><a href="#" class="white">Technology</a></li>
												</ul>
											</div>
										</div>
										<div class="post-content">
											<div class="post-date">
												<p><a href="#">25th May 2020</a></p>
											</div>
											<h2 class="entry-title">
												<a href="<?php echo site_url('Blog'); ?>" class="">Designer to try to break rules and barriers</a>
											</h2>
											<div class="item-meta">
												<span>by</span>
												<a class="author-name" href="author.html">Admin Jackson</a>
											</div>
										</div>
									</div>
								</div>
								<div class="col-md-6 col-sm-12 mar-bottom-30">
									<div class="blog-post_wrapper front-wrapper bg-gray">
										<div class="post-content">
											<div class="post-category">
												<ul>
													<li class="cat-pink"><a href="#" class="white">Fashion</a></li>
													<li class="cat-green"><a href="#" class="white">Health</a></li>
												</ul>
											</div>
											<div class="post-date">
												<p><a href="#">25th May 2020</a></p>
											</div>
											<h2 class="entry-title">
												<a href="<?php echo site_url('Blog'); ?>">Architecture belongs to culture, not to civilization</a>
											</h2>
											<div class="item-meta">
												<span>by</span>
												<a class="author-name" href="author.html">Patricia Jenkins</a>
											</div>
										</div>
									</div>
								</div>
								<div class="col-md-6 col-sm-12 mar-bottom-30">
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
												<p><a href="#">25th May 2020</a></p>
											</div>
											<h2 class="entry-title white">
												<a href="<?php echo site_url('Blog'); ?>" class="white">I think it's the responsibility of a designer to try to break rules and barriers</a>
											</h2>
											<div class="item-meta white">
												<span>by</span>
												<a class="author-name white" href="author.html">Patricia Jenkins</a>
											</div>
										</div>
									</div>
								</div>
								<div class="col-md-6 col-sm-12 mar-bottom-30">
									<div class="blog-post_wrapper image-wrapper blog-wrapper-list">
										<div class="blog-post-image">
											<img src="<?php echo base_url('/inti/images/blog-listing/blog_101.jpg'); ?>" alt="image" class="img-responsive center-block post_img" />
											<div class="post-category">
												<ul>
													<li class="cat-blue mar-0"><a href="#" class="white">Technology</a></li>
												</ul>
											</div>
										</div>
										<div class="post-content">
											<div class="post-date">
												<p><a href="#">25th May 2020</a></p>
											</div>
											<h2 class="entry-title">
												<a href="<?php echo site_url('Blog'); ?>" class="">Designer to try to break rules and barriers</a>
											</h2>
											<div class="item-meta">
												<span>by</span>
												<a class="author-name" href="author.html">Admin Jackson</a>
											</div>
										</div>
									</div>
								</div>
								<div class="col-md-6 col-sm-12 mar-bottom-30">
									<div class="blog-post_wrapper front-wrapper bg-green">
										<div class="post-content">
											<div class="post-category">
												<ul>
													<li class="cat-blue"><a href="#" class="white">Technology</a></li>
													<li class="cat-yellow"><a href="#" class="white">Popular</a></li>
												</ul>
											</div>
											<div class="post-date">
												<p><a href="#">25th May 2020</a></p>
											</div>
											<h2 class="entry-title">
												<a href="<?php echo site_url('Blog'); ?>" class="white">The future of architecture is culture</a>
											</h2>
											<div class="item-meta white">
												<span>by</span>
												<a class="author-name white" href="author.html">Patricia Jenkins</a>
											</div>
										</div>
									</div>
								</div>
								<div class="col-md-6 col-sm-12 mar-bottom-30">
									<div class="blog-post_wrapper image-wrapper">
										<div class="blog-post-image">
											<img src="<?php echo base_url('/inti/images/blog-listing/blog_09.jpg'); ?>" alt="image" class="img-responsive center-block post_img" />
										</div>
										<div class="post-content">
											<div class="post-category">
												<ul>
													<li class="cat-yellow"><a href="#" class="white">Popular</a></li>
													<li class="cat-blue"><a href="#" class="white">Technology</a></li>
												</ul>
											</div>
											<div class="post-date">
												<p><a href="#">25th May 2020</a></p>
											</div>
											<h2 class="entry-title">
												<a href="<?php echo site_url('Blog'); ?>" class="white">I'm passionate about food, the tradition of it, cooking it, sharing it</a>
											</h2>
											<div class="item-meta white">
												<span>by</span>
												<a class="author-name white" href="author.html">Patricia Jenkins</a>
											</div>
										</div>
									</div>
								</div>
								<div class="col-md-6 col-sm-12 mar-bottom-30">
									<div class="blog-post_wrapper image-wrapper">
										<div class="blog-post-image">
											<img src="<?php echo base_url('/inti/images/blog-listing/blog_07.jpg'); ?>" alt="image" class="img-responsive center-block post_img" />
										</div>
										<div class="post-content">
											<div class="post-date">
												<p><a href="#">25th May 2020</a></p>
											</div>
											<h2 class="entry-title white">
												<a href="<?php echo site_url('Blog'); ?>" class="white">Look at life with the eyes of a child</a>
											</h2>
											<div class="item-meta white">
												<span>by</span>
												<a class="author-name white" href="author.html">Patricia Jenkins</a>
											</div>
										</div>
									</div>
								</div>
								<div class="col-md-6 col-sm-12 mar-bottom-30">
									<div class="blog-post_wrapper front-wrapper bg-red">
										<div class="post-content">
											<div class="post-date">
												<p><a href="#">25th May 2020</a></p>
											</div>
											<h2 class="entry-title white">
												<a href="<?php echo site_url('Blog'); ?>" class="white">Architecture belongs to culture, not to civilization</a>
											</h2>
											<div class="item-meta">
												<span class="white">by</span>
												<a class="author-name white" href="author.html">Patricia Jenkins</a>
											</div>
										</div>
									</div>
								</div>
								<div class="col-md-6 col-sm-12 mar-bottom-30">
									<div class="blog-post_wrapper image-wrapper">
										<div class="blog-post-image">
											<img src="<?php echo base_url('/inti/images/blog-listing/blog_08.jpg'); ?>" alt="image" class="img-responsive center-block post_img" />
										</div>
										<div class="post-content">
											<div class="post-date">
												<p><a href="#">25th May 2020</a></p>
											</div>
											<h2 class="entry-title">
												<a href="<?php echo site_url('Blog'); ?>" class="white">I think it's the responsibility of a designer to try to break rules and barriers</a>
											</h2>
											<div class="item-meta white">
												<span>by</span>
												<a class="author-name white" href="author.html">Patricia Jenkins</a>
											</div>
										</div>
									</div>
								</div>
								<div class="col-md-6 col-sm-12 mar-bottom-30">
									<div class="blog-post_wrapper image-wrapper">
										<div class="blog-post-image">
											<img src="<?php echo base_url('/inti/images/blog-listing/blog_13.jpg'); ?>" alt="image" class="img-responsive center-block post_img" />
										</div>
										<div class="post-content">
											<div class="post-date">
												<p><a href="#">25th May 2020</a></p>
											</div>
											<h2 class="entry-title white">
												<a href="<?php echo site_url('Blog'); ?>" class="white">Look at life with the eyes of a child</a>
											</h2>
											<div class="item-meta white">
												<span>by</span>
												<a class="author-name white" href="author.html">Patricia Jenkins</a>
											</div>
										</div>
									</div>
								</div>
								<div class="col-md-6 col-sm-12 mar-bottom-30">
									<div class="blog-post_wrapper image-wrapper">
										<div class="blog-post-image">
											<img src="<?php echo base_url('/inti/images/blog-listing/blog_15.jpg'); ?>" alt="image" class="img-responsive center-block post_img" />
										</div>
										<div class="post-content">
											<div class="post-date">
												<p><a href="#">25th May 2020</a></p>
											</div>
											<h2 class="entry-title">
												<a href="<?php echo site_url('Blog'); ?>" class="white">I think it's the responsibility of a designer to try to break rules and barriers</a>
											</h2>
											<div class="item-meta white">
												<span>by</span>
												<a class="author-name white" href="author.html">Patricia Jenkins</a>
											</div>
										</div>
									</div>
								</div>
								<div class="pagination__wrapper">
									<ul class="pagination">
										<li><button class="prev" title="previous page">&#10094;</button></li>
										<li><button title="first page - page 1">1</button></li>
										<li><button class="active" title="current page">2</button></li>
										<li><button>3</button></li>
										<li><button class="next" title="next page">&#10095;</button></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-3 width30">
						<div class="sidebar">
							<div class="widget widget-author text-center">
								<div class="widget-image">
									<img src="<?php echo base_url('/inti/images/blog/author.png'); ?>" alt="...">
								</div>
								<div class="widget-author-content">
									<div class="widget-author mar-bottom-15">
										<h3 class="mar-bottom-5">Nama Team lu kak</h3>
										<span class="author-profession">bergerak dibidang apa</span>
									</div>
									<p>sedikit penjelasan aja wkwkwk</p>
									<div class="follow_us mar-bottom-15">
										<ul class="social_icons">
											<li><a href="#"> <i class="fa fa-facebook"></i></a></li>
											<li><a href="#"><i class="fa fa-twitter"></i></a></li>
											<li><a href="#"><i class="fa fa-instagram"></i></a></li>
											<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
										</ul>
									</div>
									<div class="widget-author-signature">
										<!-- <img src="<?php echo base_url('/inti/images/blog/'); ?>" alt="isi foto atau tanda tangan pemimpin atau bisa juga lu kasih foto team lagi"> -->
									</div>
								</div>
							</div>
							<div class="widget widget-category">
								<div class="widget-content">
									<div class="widget-title">
										<h3 class="white">Category</h3>
									</div>
									<div class="widget-category-main">
										<ul class="widget-category-list">
											<li><a href="#">Kategori tiap post</a></li>
											<li><a href="#">Health</a></li>
											<li><a href="#">Article</a></li>
											<!-- <li><a href="#">Travel</a></li>
											<li><a href="#">Uncategorised</a></li>
											<li><a href="#">Popular</a></li>
											<li><a href="#">World</a></li>
											<li><a href="#">Stylish</a></li> -->
										</ul>
									</div>
								</div>
							</div>
							<div class="widget widget-popular-post">
								<div class="widget-content">
									<div class="widget-title">
										<h3 class="white">Popular Posts</h3>
									</div>
									<div class="widget-popular-post-main">
										<div class="widget-posts">
											<div class="post-thumb">
												<img src="<?php echo base_url('/inti/images/blog/r-post-1.jpg'); ?>" alt=".....">
											</div>
											<div class="post-title">
												<div class="widget-cats">
													<a href="#">Technology</a>
													<a href="#">Travel</a>
												</div>
												<h4><a href="#">Ceritanya ini yang paling banyak viewnya</a></h4>
											</div>
										</div>
										<div class="widget-posts">
											<div class="post-thumb">
												<img src="<?php echo base_url('/inti/images/blog/r-post-2.jpg'); ?>" alt=".....">
											</div>
											<div class="post-title">
												<div class="widget-cats">
													<a href="#">Technology</a>
													<a href="#">Travel</a>
												</div>
												<h4><a href="#">Yang sering diliat bakal muncul disini</a></h4>
											</div>
										</div>
										<div class="widget-posts">
											<div class="post-thumb">
												<img src="<?php echo base_url('/inti/images/blog/r-post-3.jpg'); ?>" alt=".....">
											</div>
											<div class="post-title">
												<div class="widget-cats">
													<a href="#">Technology</a>
													<a href="#">Travel</a>
												</div>
												<h4><a href="#">cuma 3 aja yaa biar ga banyak"</a></h4>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="widget widget-tags">
								<div class="widget-content">
									<div class="widget-title">
										<h3 class="white">Trending Tags</h3>
									</div>
									<div class="widget-tags-main">
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
							</div>
						</div>
						<!-- <div class="widget widget-popular-post">
							<div class="widget-content">
								<div class="widget-title">
									<h3 class="white">Trending Posts</h3>
								</div>
								<div class="widget-popular-post-main">
									<div class="widget-posts">
										<div class="post-thumb">
											<img src="<?php echo base_url('/inti/images/blog/r-post-1.jpg'); ?>" alt=".....">
										</div>
										<div class="post-title">
											<div class="widget-cats">
												<a href="#">Technology</a>
												<a href="#">Travel</a>
											</div>
											<h4><a href="#">Is It Safe to Have These Things Listening to Us?</a></h4>
										</div>
									</div>
									<div class="widget-posts">
										<div class="post-thumb">
											<img src="<?php echo base_url('/inti/images/blog/r-post-2.jpg'); ?>" alt=".....">
										</div>
										<div class="post-title">
											<div class="widget-cats">
												<a href="#">Technology</a>
												<a href="#">Travel</a>
											</div>
											<h4><a href="#">8 Most Awesome Gadgets For 2020</a></h4>
										</div>
									</div>
									<div class="widget-posts">
										<div class="post-thumb">
											<img src="<?php echo base_url('/inti/images/blog/r-post-3.jpg'); ?>" alt=".....">
										</div>
										<div class="post-title">
											<div class="widget-cats">
												<a href="#">Technology</a>
												<a href="#">Travel</a>
											</div>
											<h4><a href="#">Top 15 Social Network App You Need To Travel</a></h4>
										</div>
									</div>
								</div>
							</div>
						</div> -->
						<div class="widget widget-advertisement">
							<div class="widget-content">
								<div class="widget-title">
									<h3 class="white">Advertisement</h3>
								</div>
								<div class="widget-ads-image text-center">
									<img src="<?php echo base_url('/inti/images/blog-listing/blog_07.jpg'); ?>" alt="ads">
									<img src="<?php echo base_url('/inti/images/blog-listing/blog_07.jpg'); ?>" alt="ads">
									<img src="<?php echo base_url('/inti/images/blog-listing/'); ?>" alt="Siapa tau ada yang mau ngiklan di web ini">
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			</div>
		</section>
		<div class="mt_instagram">
			<div class="container">
				<div class="row">
					<div class="col-sm-2 col-xs-6"><a href="#"><img src="<?php echo base_url('/inti/images/insta/insta_01.jpg'); ?>" alt="Image"></a></div>
					<div class="col-sm-2 col-xs-6"><a href="#"><img src="<?php echo base_url('/inti/images/insta/insta_02.jpg'); ?>" alt="Image"></a></div>
					<div class="col-sm-2 col-xs-6"><a href="#"><img src="<?php echo base_url('/inti/images/insta/insta_03.jpg'); ?>" alt="Image"></a></div>
					<div class="col-sm-2 col-xs-6"><a href="#"><img src="<?php echo base_url('/inti/images/insta/insta_04.jpg'); ?>" alt="Image"></a></div>
					<div class="col-sm-2 col-xs-6"><a href="#"><img src="<?php echo base_url('/inti/images/insta/insta_05.jpg'); ?>" alt="Image"></a></div>
					<div class="col-sm-2 col-xs-6"><a href="#"><img src="<?php echo base_url('/inti/images/insta/insta_06.jpg'); ?>" alt="Image"></a></div>
					<div class="col-sm-2 col-xs-6"><a href="#"><img src="<?php echo base_url('/inti/images/insta/insta_07.jpg'); ?>" alt="Image"></a></div>
					<div class="col-sm-2 col-xs-6"><a href="#"><img src="<?php echo base_url('/inti/images/insta/insta_08.jpg'); ?>" alt="Image"></a></div>
					<div class="col-sm-2 col-xs-6"><a href="#"><img src="<?php echo base_url('/inti/images/insta/insta_09.jpg'); ?>" alt="Image"></a></div>
					<div class="col-sm-2 col-xs-6"><a href="#"><img src="<?php echo base_url('/inti/images/insta/insta_10.jpg'); ?>" alt="Image"></a></div>
					<div class="col-sm-2 col-xs-6"><a href="#"><img src="<?php echo base_url('/inti/images/insta/insta_11.jpg'); ?>" alt="Image"></a></div>
					<div class="col-sm-2 col-xs-6"><a href="#"><img src="<?php echo base_url('/inti/images/insta/insta_12.jpg'); ?>" alt="Image"></a></div>
				</div>
				<div class="sectio-title">
					<h3 class="mar-0"><a href="#">Follow @ Instagram</a></h3>
					<p class="mar-0">kalo ini bisa isi instagram team lu atau instagram lu sendiri</p>
				</div>
			</div>
		</div>
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