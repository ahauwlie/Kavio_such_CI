<header id="inner-navigation">
	<nav class="navbar navbar-default navbar-fixed-top navbar-sticky-function navbar-arrow">
		<div class="container">
			<div class="logo pull-left">
				<h1><a href="<?php echo site_url('home'); ?>"><img src="<?php echo base_url('/inti/images/'); ?>" alt="logo yakk!"></a></h1>
			</div>
			<div id="navbar" class="navbar-nav-wrapper text-center">
				<ul class="nav navbar-nav navbar-right" id="responsive-menu">

					<?php if ($this->session->userdata('login')) { ?>
						<?php  
							$session = $this->session->userdata('login');
							$id_adm = $session['id_adm'];
							$username = $session['username'];
							$nama_adm = $session['nama_adm'];
							$foto_adm = $session['foto_adm'];
							$moto_adm = $session['moto_adm'];
							$whatsapp = $session['whatsapp'];
							$instagram = $session['instagram'];
							$facebook = $session['facebook'];
							$twitter = $session['twitter'];
							$active = $session['active'];
						?>
						<li class="active">
							<a href="<?php echo site_url('home'); ?>">Home</a>
						</li>
						<li><a href="<?php echo site_url('home/contact_us'); ?>">Contact Us</a></li>
						<li>Halo, <span class="hidden-xs"><?php echo $nama_adm; ?></span></li>
						<li><a href="<?php echo site_url('login/logout'); ?>">Logout</a></li>
                    <?php } else { ?>
                    	<li class="active">
							<a href="<?php echo site_url('Home'); ?>">Home</a>
						</li>
						<li><a href="<?php echo site_url('Home/contact_us'); ?>">Contact Us</a></li>
                        <li><a href="<?php echo site_url('Login'); ?>">Login</a></li>
                    <?php } ?>

					<li><a href="#search" class="mt_search"><i class="fa fa-search"></i></a></li>
				</ul>
			</div>
		</div>
		<div id="slicknav-mobile"></div>
	</nav>
</header>