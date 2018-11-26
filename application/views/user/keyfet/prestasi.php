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
				<?php foreach ($prestasi as $data_pres) { ?>
					<div class="panel panel-default" style="margin-bottom: 0px">
						<div class="container">
							<div class="inner-wrapper">
								<div id="primary" class="content-area">
									<main id="main" class="site-main" >
										<section class="section portfolio-single-main">
											<div class="container">
												<div class="inner-wrapper">
													<div class="col-grid-6">
														<img style="height: 300px; width: 450px" src="<?php echo base_url($data_pres->gambar_prestasi )?>">
													</div>
													<div class="col-grid-6">
														<h3><?php echo $data_pres->judul_prestasi;?></h3>
														<p><?php echo $data_pres->isi_prestasi;?></p>
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

			</div> <!--#page-->
			<div id="btn-scrollup">
				<a  title="Go Top"  class="scrollup" href="#"><i class="fas fa-angle-up"></i></a>
			</div>
			<?php $this->load->view('user/jscript') ?>	
		</body>

		</html>