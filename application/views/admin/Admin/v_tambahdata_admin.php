<?php $this->load->view("admin/side/header") ?>
<?php $this->load->view("admin/side/sidebar") ?>

<div class="content">
	<div class="container-fluid">
		<div class="col-md-12">
			<div class="card ">
				<div class="card-header card-header-rose card-header-text">
					<div class="card-text">
						<h4 class="card-title">Tambah Data Admin</h4>
					</div>
				</div>
				<div class="card-body ">
					<form method="post" action="<?php echo base_url('admin/Admin/insert') ?>" class="form-horizontal" enctype="multipart/form-data">
						<div class="row">
							<label class="col-sm-2 col-form-label">Nama Lengkap : </label>
							<div class="col-sm-10">
								<div class="form-group">
									<input type="text" class="form-control" name="nama_admin">
								</div>
							</div>
						</div>
						<div class="row">
							<label class="col-sm-2 col-form-label">Alamat Lengkap : </label>
							<div class="col-sm-10">
								<div class="form-group">
									<input type="text" class="form-control" name="alamat_admin">
								</div>
							</div>
						</div>
						<div class="row">
							<label class="col-sm-2 col-form-label">E-Mail : </label>
							<div class="col-sm-10">
								<div class="form-group">
									<input type="email" class="form-control" name="email_admin">
								</div>
							</div>
						</div>
						<div class="row">
							<label class="col-sm-2 col-form-label">Password : </label>
							<div class="col-sm-10">
								<div class="form-group">
									<input type="password" class="form-control" name="password_admin">
								</div>
							</div>
						</div>
						<<div class="row col-sm-6">
						<label class="col-sm-4 col-form-label">Pilih Foto : </label>
						<div class="col-sm-8" style="margin-top: -8px">
							<br>
							<div class="fileinput fileinput-new text-center" data-provides="fileinput">
								<div class="fileinput-new thumbnail">
									<img src="<?php echo base_url(); ?>master/admin/img/image_placeholder.jpg" alt="...">
								</div>
								<div class="fileinput-preview fileinput-exists thumbnail"></div>
								<div>
									<span class="btn btn-rose btn-file">
										<span class="fileinput-new">Select image</span>
										<span class="fileinput-exists">Change</span>
										<input type="file" name="foto_admin" />
									</span>
									<a href="#pablo" class="btn btn-danger btn-round fileinput-exists" data-dismiss="fileinput"><i class="fa fa-times"></i> Remove</a>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12 col-sm-12 text-center">
							
						</div>
					</div>
						<button type="submit" name="tambah" class="btn btn-rose float-right">Tambah</button>	
					</form>
				</div>   
			</div>
		</div>
	</div>
</div>

<?php $this->load->view("admin/side/footer") ?>
<?php $this->load->view("admin/side/js") ?>