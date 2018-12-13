<?php $this->load->view("admin/side/header") ?>
<?php $this->load->view("admin/side/sidebar") ?>

<div class="content">
    <div class="container-fluid">
        <div class="col-md-12">
            <div class="card ">
                <div class="card-header card-header-rose card-header-text">
                    <div class="card-text">
                        <h4 class="card-title">Edit Data Gallery</h4>
                    </div>
                </div>
                <div class="card-body ">
                    <form method="post" action="<?php echo base_url('admin/Gallery/update') ?>" class="form-horizontal" enctype="multipart/form-data">
                        <div class="row">
                            <label class="col-sm-2 col-form-label">Nama Gallery : </label>
                            <div class="col-sm-9">
                                <div class="form-group">
                                	<input type="hidden" class="form-control" name="id" value="<?php echo $id_gallery ?>">
                                    <input type="text" class="form-control" name="nama_gallery" value="<?php echo $nama_gallery ?>">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <label class="col-sm-2 col-form-label">Deskripsi Gallery : </label>
                            <div class="col-sm-9">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="deskripsi_gallery" value="<?php echo $deskripsi_gallery ?>">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <label class="col-sm-2 col-form-label">Pilih Gambar : </label>
                            <div class="fileinput fileinput-new text-center" data-provides="fileinput">
                                <div class="fileinput-new thumbnail">
                                    <img src="<?php echo base_url($gambar_galeri); ?>" alt="...">
                                </div>
                                <div class="fileinput-preview fileinput-exists thumbnail"></div>
                                <div>
                                    <span class="btn btn-rose btn-file">
                                        <span class="fileinput-new">Select image</span>
                                        <span class="fileinput-exists">Change</span>
                                        <input type="file" name="gambar_galeri" />
                                    </span>
                                    <a href="#pablo" class="btn btn-danger btn-round fileinput-exists" data-dismiss="fileinput"><i class="fa fa-times"></i> Remove</a>
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-rose float-right ">Simpan</button> 
                    </form>
                </div>   
            </div>
        </div>
    </div>
</div>

<?php $this->load->view("admin/side/footer") ?>
<?php $this->load->view("admin/side/js") ?>