<?php $this->load->view("admin/side/header") ?>
<?php $this->load->view("admin/side/sidebar") ?>

<div class="content">
	<div class="container-fluid">
		<div class="col-md-6">
			<div class="card ">
				<div class="card-header card-header-rose card-header-text">
					<div class="card-text">
						<h4 class="card-title">Tambah Gambar</h4>
					</div> <br><br>
					<div class="row col-sm-12">
						<label class="col-sm-4 col-form-label">Judul Foto : </label>
						<div class="col-sm-8" style="margin-top: -8px">
							<div class="form-group">
								<input type="text" class="form-control" name="judul">
							</div>
						</div>
					</div>
					<div class="row col-sm-12">
						<label class="col-sm-4 col-form-label">Deskripsi Foto : </label>
						<div class="col-sm-8" style="margin-top: -8px">
							<div class="form-group">
								<input type="text" class="form-control" name="deskripsi">
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12 col-sm-12 text-center">
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
										<input type="file" name="foto_galery" />
									</span>
									<a href="#pablo" class="btn btn-danger btn-round fileinput-exists" data-dismiss="fileinput"><i class="fa fa-times"></i> Remove</a>
								</div>
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