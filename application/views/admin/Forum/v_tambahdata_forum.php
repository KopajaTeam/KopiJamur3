<?php $this->load->view("admin/side/header") ?>
<?php $this->load->view("admin/side/sidebar") ?>

<div class="content">
	<div class="container-fluid">
		<div class="card ">
			<div class="card-header card-header-rose card-header-text">
				<div class="card-text">
					<h4 class="card-title">Tambah Forum</h4>
				</div>
			</div>
			<div class="card-body">
				<form method="post" action="<?php echo base_url('admin/Forum/simpan') ?>" enctype="multipart/form-data">
					<div class="row">
						<div class="col-lg-9">
							<div class="form-group">
								<input type="text" placeholder="Masukkan Judul Forum" name="judul_forum" class="form-control" name="judul">
							</div>
						</div>
						<div class="col-lg-1">
							<button type="submit" name="publish" class="btn btn-primary">Publish</button>
						</div>
					</div>
					<hr>
					<div class="row">
						<div class="col-lg-9">
							<div class="form-group">
								<textarea class="form-control" name="isi_forum" id="wysiwyg"></textarea>
							</div>
						</div>
						<div class="col-lg-3">
							<div class="col-lg-12 col-md-6 col-sm-3">
								<select class="selectpicker" data-style="btn select-with-transition" title="Pilih Kategori" data-size="7" name="kategori_forum">
									<?php foreach ($kategori_forum as $data_kategori_forum): ?>
										<option value="<?php echo $data_kategori_forum->id_kategori_forum ?>"> <?php echo $data_kategori_forum->nama_kategori; ?></option>
									<?php endforeach ?>
								</select>
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
												<input type="file" name="foto_forum" />
											</span>
											<a href="#pablo" class="btn btn-danger fileinput-exists" data-dismiss="fileinput"><i class="fa fa-times"></i> Remove</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</form>
			</div>
		</div>

	</div>
</div>
<?php $this->load->view("admin/side/footer") ?>
<?php $this->load->view("admin/side/js") ?>