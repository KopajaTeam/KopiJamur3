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
		<form method="post" action="" enctype="multipart/form-data">
			<div class="row">
				<div class="col-lg-9">
					<div class="form-group">
						<input type="text" placeholder="Masukkan Judul Forum" name="judul" class="form-control">
					</div>
				</div>
				<div class="col-lg-1">
					<button type="submit" name="tambah" class="btn btn-primary">Publish</button>
				</div>
			</div>
			<hr>
			<div class="row">
				<div class="col-lg-9">
					<div class="form-group">
						<textarea class="form-control" name="isi_berita" id="wysiwyg"></textarea>
					</div>
				</div>
				<div class="col-lg-3">
					<div class="form-group">
						<label for="kategoriberita">Kategori</label>
						<select required data-plugin="select2" class="form-control" name="Kategori" style="width: 100%">
							<option>--Pilih Kategori Forum--</option>
						</select>
					</div>
					<div class="form-group">
						<label for="gambar-ikan">Gambar Headline Forum</label>
	      				<img class="card-img-top img-thumbnail mb-2" src="<?php echo base_url(); ?>master/admin/img/image_placeholder.jpg" alt="Card image cap" id="preview_fp">
					</div>
					<div class="form-group">
						<label class="custom-file">
						  <input type="file" id="file2" name="headline_berita" accept="image/*"  onchange="tampilkanPreview(this,'preview_fp')" class="custom-file-input">
						  <span class="custom-file-control btn btn-success">Pilih Gambar</span>
						</label>
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