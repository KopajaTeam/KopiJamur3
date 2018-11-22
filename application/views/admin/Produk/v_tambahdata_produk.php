<?php $this->load->view("admin/side/header") ?>
<?php $this->load->view("admin/side/sidebar") ?>

<div class="content">
    <div class="container-fluid">
        <div class="col-md-12">
            <div class="card ">
                <div class="card-header card-header-rose card-header-text">
                    <div class="card-text">
                        <h4 class="card-title">Tambah Data Produk</h4>
                    </div>
                </div>
                <div class="card-body ">
                    <form method="post" action="<?php echo base_url('admin/Produk/insert') ?>" class="form-horizontal" enctype="multipart/form-data">
                        <div class="row">
                            <label class="col-sm-2 col-form-label">Nama Produk : </label>
                            <div class="col-sm-9">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="nama_produk">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <label class="col-sm-2 col-form-label">Kategori Produk</label>
                            <div class="col-sm-9">
                                <select class="selectpicker" data-style="btn select-with-transition" title="Pilih Kategori" data-size="7" name="kategori_produk">
                                    <option disabled> Pilih Kategori</option>
                                    <?php foreach ($kategori_produk as $data_kategori_produk) {?>
                                    <option value="<?php echo $data_kategori_produk->id_kategori_produk ?>"><?php echo $data_kategori_produk->nama_kategori_produk ?> </option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <label class="col-sm-2 col-form-label">Detail Produk : </label>
                            <div class="col-sm-9">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="detail_produk">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <label class="col-sm-2 col-form-label">Jenis Produk (kemasan) : </label>
                            <div class="col-sm-9">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="jenis_produk">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <label class="col-sm-2 col-form-label">Harga : </label>
                            <div class="col-sm-9">
                                <div class="form-group">
                                    <input type="number" class="form-control" name="harga_produk">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <label class="col-sm-2 col-form-label">Berat : </label>
                            <div class="col-sm-9">
                                <div class="form-group">
                                    <input type="number" class="form-control" name="berat_produk">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <label class="col-sm-2 col-form-label">Satuan Berat Produk : </label>
                            <div class="col-sm-9">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="satuan_produk">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <label class="col-sm-2 col-form-label">Pilih Gambar : </label>
                            <div class="fileinput fileinput-new text-center" data-provides="fileinput">
                                <div class="fileinput-new thumbnail">
                                    <img src="<?php echo base_url(); ?>master/admin/img/image_placeholder.jpg" alt="...">
                                </div>
                                <div class="fileinput-preview fileinput-exists thumbnail"></div>
                                <div>
                                    <span class="btn btn-rose btn-file">
                                        <span class="fileinput-new">Select image</span>
                                        <span class="fileinput-exists">Change</span>
                                        <input type="file" name="gambar_produk" />
                                    </span>
                                    <a href="#pablo" class="btn btn-danger btn-round fileinput-exists" data-dismiss="fileinput"><i class="fa fa-times"></i> Remove</a>
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-rose float-right ">Tambah</button> 
                    </form>
                </div>   
            </div>
        </div>
    </div>
</div>

<?php $this->load->view("admin/side/footer") ?>
<?php $this->load->view("admin/side/js") ?>