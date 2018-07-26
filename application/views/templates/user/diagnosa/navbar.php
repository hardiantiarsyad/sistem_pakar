			<!-- start banner Area -->
			<section class="banner-area" id="home">
			<!-- Start Header Area -->
			<header class="default-header">
				<nav class="navbar navbar-expand-lg  navbar-light">
					<div class="container">
						  <a class="navbar-brand" href="index.html">
						  	<img src="<?php echo base_url() ?>assets/templateuser/img/logo.png" alt="">
						  </a>
						  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						    <span class="lnr lnr-menu"></span>
						  </button>

						  <div class="collapse navbar-collapse justify-content-end align-items-center" id="navbarSupportedContent">
						    <ul class="navbar-nav">
								<li><a href="<?php echo site_url() ?>/welcome"">Home</a></li>
								<li><a href="<?php echo site_url() ?>/welcome/diagnosa">Diagnosa</a></li>
								<li><a href="<?php echo site_url() ?>/welcome/#feature">Info Penyakit</a></li>
								<li><a href="<?php echo site_url() ?>/welcome/#tentang">Tentang</a></li>				
								<li><a href="<?php echo site_url() ?>/welcome/#kontak">Kontak</a></li>
								<?php 
								if($this->session->userdata('is_login') == TRUE && $this->session->userdata('level') == 'pasien'){
								?>
								<li><a href="<?php echo site_url() ?>/welcome/riwayat">Riwayat</a></li>
								<li><a href="<?php echo site_url() ?>/login_user/logout"><i class="fa fa-user"></i> <?php echo $this->session->userdata('nama') ?>,  Logout </a></li>
								<?php } else{ ?>
								<li><a href="<?php echo site_url() ?>/login_user"><i class="fa fa-user"></i> Login </a></li>
								<?php } ?>
						    </ul>
						  </div>						
					</div>
				</nav>
			</header>
			<!-- End Header Area -->		