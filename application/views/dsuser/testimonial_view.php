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
<?php $this->load->view('user/header')?>>
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
	<div class="container">
		<hr class="">
		<div class="container target">
			<div class="row">
				<?php $this->load->view('dsuser/sidenav_dashuser') ?>
				<!--/col-3-->
				<div class="col-sm-9" style="" contenteditable="false">

					<div class="panel panel-default panel-table">
						<div class="panel-heading">
							<div class="row">
								<div class="col col-xs-6">
									<h3 class="panel-title">Testimonial Anda</h3>
								</div>
								<div class="col col-xs-6 text-right">
									<a href="<?php echo base_url('Dashboard_user/simpan_testi')?>" class="btn btn-info" role="button">Tambah Testimonial</a>
								</div>
							</div>
						</div>
						<div class="panel-body">
							<table class="table table-bordered table-list">
								<thead>
									<tr>
										<th>Nama Produk</th>
										<th>Isi testimoni</th>
										
										<th>Action</th>
									</tr> 
								</thead>
								<tbody>
									<?php foreach ($testimoni as $testie) {?>

									<!-- <?php //foreach ($Dashboard_user as $testtab) { ?> -->
									<tr>
										<td><?php echo $testie->nama_produk; ?></td>
										<td><?php echo $testie->komentar; ?></td>

										<td align="center">
											<a class="btn btn-default" href="<?php echo base_url('Dashboard_user/testi_action/'.$testie->id_testimoni)?>"><i class="fas fa-pencil-alt"></i></a>
											<a class="btn btn-danger" href="<?php echo base_url('Dashboard_user/del_testi/'.$testie->id_testimoni); ?>"><em class="fa fa-trash"></em></a>
										</td>
									</tr>
									<?php  } ?>
								</tbody>
							</table>
							<nav class="navigation pagination">
								<div class="nav-links">
									<span class="page-numbers current">1</span>
									<a class="page-numbers" href="#" >2</a>
									<a class="page-numbers" href="#" >3</a>
									<a class="next page-numbers" href="#" >Next »</a>
								</div> <!-- .nav-links -->
							</nav> <!-- .navigation.pagination -->
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