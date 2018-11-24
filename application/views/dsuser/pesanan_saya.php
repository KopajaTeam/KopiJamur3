<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<body class="home header-v1">
		<!-- <div id="fakeloader"></div> -->
		<!-- <div class="color-switcher" id="choose_color"> -->
			<!-- <a href="#." class="picker_close"><i class="fas fa-cog fa-spin"></i></a> -->
		<!-- </div> -->
		<div id="page" class="site">
			<!-- Mobile main menu -->
			<a href="#" id="mobile-trigger"><i class="fa fa-list" aria-hidden="true"></i></a>
<?php $this->load->view('user/head') ?>
<?php $this->load->view('user/header')?>
<?php $this->load->view('user/mainnav') ?>

<div id="custom-header">
	<div class="custom-header-content">
		<div class="container">
			<h1 class="page-title">Dashboard User</h1>
			<div id="breadcrumb">
				<div  aria-label="Breadcrumbs" class="breadcrumbs breadcrumb-trail">
					<ul class="trail-items">
						<li class="trail-item trail-begin"><span><u>Home</u></span></a></li>
						<li class="trail-item trail-end"><span>Manggil Nama User</span></li>
					</ul>
				</div> <!-- .breadcrumbs -->
			</div> <!-- #breadcrumb -->
		</div> <!-- .container -->
	</div>  <!-- .custom-header-content -->
</div> <!-- .custom-header -->
<aside class="section section-services service-layout-1">
	<div class="container" style="margin-top: 35px">
		<div class="container target">
			<div class="row">
				<?php $this->load->view('dsuser/sidenav_dashuser') ?>
				<!--/col-3-->
				<div class="col-sm-9" style="" contenteditable="false">
					<div class="panel panel-default">
						<div class="panel-heading">Pesanan Saya</div>
						<div class="panel-body">
							<div class="panel-group" id="accordion">
								<div class="panel panel-default">
									<div class="panel-heading">
										<h4 class="panel-title">
											<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
												Pesanan #1
											</a>
										</h4>
									</div>
									<div id="collapseOne" class="panel-collapse collapse in">
										<div class="panel-body">
											<img src="<?php echo base_url(); ?>master/admin/img/image_placeholder.jpg" style="margin-bottom: 15px;height: 150px;width: 180px">
										</div>
									</div>
								</div>
								<div class="panel panel-default">
									<div class="panel-heading">
										<h4 class="panel-title">
											<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
												Pesanan #2
											</a>
										</h4>
									</div>
									<div id="collapseTwo" class="panel-collapse collapse">
										<div class="panel-body">
											<img src="<?php echo base_url(); ?>master/admin/img/image_placeholder.jpg" style="margin-bottom: 15px;height: 150px;width: 180px">
										</div>
									</div>
								</div>
								<div class="panel panel-default">
									<div class="panel-heading">
										<h4 class="panel-title">
											<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
												Pesanan #3
											</a>
										</h4>
									</div>
									<div id="collapseThree" class="panel-collapse collapse">
										<div class="panel-body">
											<img src="<?php echo base_url(); ?>master/admin/img/image_placeholder.jpg" style="margin-bottom: 15px;height: 150px;width: 180px">
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</aside>
	<?php $this->load->view("admin/side/js") ?>
	<?php $this->load->view('user/wiget') ?>
	<?php $this->load->view('user/sosmed') ?>
	<?php $this->load->view('user/footer') ?>
