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
					<div class="panel panel-default">
						<div class="panel-heading">Konfirmasi Pembayaran</div>
						<div class="panel-body">
							<h3>Tentang Saya
							</h3>
							<div class="card rounded-0 px-5 py-3">
								<table cellpadding="10">
									<thead>
										<tr>
											<td class="text-muted">Nama</td>
											<td>:</td>
											<td>Nama Lengkap</td>
										</tr>
										<tr>
											<td class="text-muted">Email</td>
											<td>:</td>
											<td>Email</td>
										</tr>
										<tr>
											<td class="text-muted">Member Sejak</td>
											<td>:</td>
											<td>Member Sejak</td>
										</tr>
										<tr>
											<td class="text-muted">Tanggal Lahir</td>
											<td>:</td>
											<td>Tanggal Lahir</td>
										</tr>
										<tr>
											<td class="text-muted">Jenis Kelamin</td>
											<td>:</td>
											<td>Jenis Kelamin</td>
										</tr>
										<tr>
											<td class="text-muted">No.Telepon</td>
											<td>:</td>
											<td>No.Telpon</td>
										</tr>
										<tr>
											<td class="text-muted">Alamat</td>
											<td>:</td>
											<td>Alamat</td>
										</tr>
									</thead>
								</table>
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