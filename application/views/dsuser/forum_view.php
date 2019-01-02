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
						<li class="trail-item trail-end"><span>Forum</span></li>
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
									<h3 class="panel-title">Forum Anda</h3>
								</div>
								<div class="col col-xs-6 text-right">
									<a href="<?php echo base_url('Dashboard_user/tambah_forum')?>" class="btn btn-info" role="button">Tambah Forum</a>
								</div>
							</div>
						</div>
						<div class="panel-body">
							<table class="table table-bordered table-list">
								<thead>
									<tr>
										<th style="text-align: center;">Judul Forum</th>
										<th style="text-align: center;">Kategori</th>
										<th style="text-align: center;">Tanggal</th>
										<th style="text-align: center;">Action</th>
									</tr> 
								</thead>
								<?php foreach ($forum1 as $key ): ?>
								<tbody>
											<tr>
										<td style="text-align: center;"><?php echo $key->judul; ?></td>
										<td style="text-align: center;"><?php echo $key->nama_kategori; ?></td>
										<td style="text-align: center;" class="hidden-xs"><?php echo $key->tanggal; ?></td>
										<td style="text-align: center;" align="center">
											<a class="btn btn-default" href="<?php echo base_url('Dashboard_user/edit_forum/'.$key->id_forum); ?>"><i class="fas fa-pencil-alt"></i></a>
											<a class="btn btn-danger" href="<?php echo base_url('Dashboard_user/del_for/'.$key->id_forum); ?>"><em class="fa fa-trash"></em></a>
										</td>
									</tr>
								</tbody>
								<?php endforeach ?>
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
