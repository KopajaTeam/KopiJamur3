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
										<th style="text-align: center;">Statistik</th>
										<th style="text-align: center;">Action</th>
									</tr> 
								</thead>
								<tbody>
									<tr>
										<td style="text-align: center;">Mengapa Kopi Berbeda?</td>
										<td style="text-align: center;">Information</td>
										<td style="text-align: center;"class="hidden-xs">View : 100 <br>Reply : 100</td>
										<td style="text-align: center;" align="center">
											<a class="btn btn-default"><i class="fas fa-pencil-alt"></i></a>
											<a class="btn btn-danger"><em class="fa fa-trash"></em></a>
										</td>
									</tr>
									<tr>
										<td>Mengapa Kopi Berbeda?</td>
										<td>Information</td>
										<td class="hidden-xs">View : 100 <br>Reply : 100</td>
										<td align="center">
											<a class="btn btn-default"><i class="fas fa-pencil-alt"></i></a>
											<a class="btn btn-danger"><em class="fa fa-trash"></em></a>
										</td>
									</tr>
									<tr>
										<td>Mengapa Kopi Berbeda?</td>
										<td>Information</td>
										<td class="hidden-xs">View : 100 <br>Reply : 100</td>
										<td align="center">
											<a class="btn btn-default"><i class="fas fa-pencil-alt"></i></a>
											<a class="btn btn-danger"><em class="fa fa-trash"></em></a>
										</td>
									</tr>
									<tr>
										<td>Mengapa Kopi Berbeda?</td>
										<td>Information</td>
										<td class="hidden-xs">View : 100 <br>Reply : 100</td>
										<td align="center">
											<a class="btn btn-default"><i class="fas fa-pencil-alt"></i></a>
											<a class="btn btn-danger"><em class="fa fa-trash"></em></a>
										</td>
									</tr>
								</tbody>
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