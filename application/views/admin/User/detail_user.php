<?php $this->load->view("admin/side/header") ?>
<?php $this->load->view("admin/side/sidebar") ?>

<div class="content">
	<div class="container-fluid">
		<div class="col-md-12">
			<div class="card ">
				<div class="card-header card-header-rose card-header-text">
					<div class="card-text">
						<h4 class="card-title">Detail User</h4>
					</div>
				</div>
				<div class="card-body ">
					<div class="row mb-3" >
						<div class="col-lg-4">
							<div class="card">
								<img src="#" class="card-img-top img-fluid">
								<div class="card-body text-center">
									<h2 class="h2">Nama</h2>
									<i class="text-muted"></i>
								</div>
							</div>
						</div>
						<div class="col-lg-8">
							<div class="card">
								<div class="card-body">
									<h3 class="h3 mb-2">Data Diri</h3>
									<table cellpadding="10">
										<tr>
											<td>Nama Lengkap</td>
											<td>:</td>
											<td>#</td>
										</tr>
										<tr>
											<td>Tanggal Lahir</td>
											<td>:</td>
											<td>###</td>
										</tr>
										<tr>
											<td>Jenis Kelamin</td>
											<td>:</td>
											<td>###</td>
										</tr>
										<tr>
											<td>Member Sejak</td>
											<td>:</td>
											<td>###</td>
										</tr>
									</table>
									<h3 class="h3 mt-4 mb-2">Data Kontak</h3>
									<table cellpadding="10">
										<tr>
											<td>Email</td>
											<td>:</td>
											<td>###</td>
										</tr>
										<tr>
											<td>Nomor Telepon</td>
											<td>:</td>
											<td>###</td>
										</tr>
										<tr>
											<td>Alamat</td>
											<td>:</td>
											<td>
												###
											</td>
										</tr>
									</table>
								</div>
							</div>
						</div>
					</div>   
				</div>
			</div>
		</div>
	</div>

	<?php $this->load->view("admin/side/footer") ?>
	<?php $this->load->view("admin/side/js") ?>