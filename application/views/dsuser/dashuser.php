<?php $this->load->model('K_jamur') ?>
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



			<!-- Panji ini dashboard user -->
			<?php $this->load->view('user/header')?>

			<?php $this->load->view('user/mainnav') ?>
			<!-- <?php //$this->load->view('user/slide') ?> -->

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
				<div class="container">
					<hr class="">
					<div class="container target">
						<?php 
						$where = array('id_user' => $this->session->userdata('id_user'), );
						$dat= $this->K_jamur->selectwhere('user',$where)->row(); ?>
						<div class="row">
							<div class="col-sm-10">
								<h1 class=""><?php echo $dat->nama; ?></h1>

								<button type="button" class="btn btn-success">Ganti Password</button>  <a href="<?php echo base_url("Dashboard_user/edit_users/".$dat->id_user) ?>"><button type="button" class="btn btn-info">Edit Profile</button></a>
								<br>
							</div>
							<div class="col-sm-2"><a href="/users" class="pull-right"><img title="profile image" class="img-circle img-responsive" src="<?php echo base_url().$dat->foto; ?>"></a>

							</div>
						</div>
						<br>
						<div class="row">
							<?php $this->load->view('dsuser/sidenav_dashuser') ?>
							<!--/col-3-->
							<div class="col-sm-9" style="" contenteditable="false">
								<div class="panel panel-default">
									<div class="panel-heading">User Identity</div>
									<div class="panel-body">
										<h6>Nama Lengkap   : <?php echo $dat->nama; ?></h6>
										<h6>Alamat Lengkap : <?php echo $dat->alamat;?></h6>
										<h6>No. HP         : <?php echo $dat->telp;?></h6>
										<h6>Alamat E-Mail  : <?php echo $dat->email;?></h6>
									</div>
								</div>
								<div class="panel panel-default target">
									<div class="panel-heading" contenteditable="false">Pesanan Saya</div>
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
													<div class="panel-body	">
														<img class="col-grid-1" src="<?php echo base_url(); ?>master/admin/img/image_placeholder.jpg" style="margin-bottom: 15px;height: 150px;width: 180px">
														<div class="col-grid-4">
															<p>nama barang</p> <br>
															<p>status transaksi</p>
														</div>
														<div class="col-grid-4" style="float: right;">
															<a style="color: #34ace0" href="<?php echo base_url('Dashboard_user/detail_pesanan') ?>">Detail Pesanan</a>
														</div>
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
													<div class="panel-body" c>
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
				<?php $this->load->view('user/wiget') ?>
				<?php $this->load->view('user/sosmed') ?>

				<?php $this->load->view('user/footer') ?>	
				<?php $this->load->view('user/jscript') ?>	
			</body>

			</html>