<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<?php $this->load->view('user/head') ?>

<body class="home header-v1">
	<!-- <div id="fakeloader"></div> -->
	<!-- <div class="color-switcher" id="choose_color"> -->
		<!-- <a href="#." class="picker_close"><i class="fas fa-cog fa-spin"></i></a> -->
		<!-- </div> -->
		<div id="page" class="site">
			<!-- Mobile main menu -->
			<a href="#" id="mobile-trigger"><i class="fa fa-list" aria-hidden="true"></i></a>
			
			<?php $this->load->view('user/header') ?>
			<?php $this->load->view('user/mainnav') ?>
			<?php $this->load->view('user/headnav') ?>
			<div id="content" class="site-content global-layout-no-sidebar">
				<?php foreach ($unggulan as $data_key) { ?>
					<div class="panel panel-default" style="margin-bottom: 0px">
						<div class="container">
							<div class="inner-wrapper">
								<div id="primary" class="content-area">
									<main id="main" class="site-main" >
										<section class="section portfolio-single-main" style="margin-bottom: -100px;">
											<div class="container">
												<div class="inner-wrapper">
													<div class="col-grid-6" style="margin-bottom: 100px;">
														<img style="height: 300px; width: 450px" src="<?php echo base_url($data_key->gambar_unggulan )?>">
													</div>
													<div class="col-grid-6" >
														<h3><?php echo $data_key->judul_unggulan;?></h3>
														<p><?php echo $data_key->isi_unggulan;?></p>
													</div>
												</div>
											</div><!-- .container -->
										</section><!-- .portfolio-single-main -->
									</main> <!-- #main -->
								</div> <!-- #primary -->
							</div> <!-- .inner-wrapper -->
						</div>
					</div> <!-- .container -->
				<?php } ?>	

			</div> <!-- #content-->
				<?php $this->load->view('user/wiget') ?>
				<?php $this->load->view('user/sosmed') ?>

				<?php $this->load->view('user/footer') ?>	
				<?php $this->load->view('user/jscript') ?>	

		</div> <!--#page-->
		
	</body>

	</html>