<?php $this->load->view("admin/side/header") ?>
<?php $this->load->view("admin/side/sidebar") ?>

<div class="content">
    <div class="container-fluid">
        <div class="col-md-12">
            <div class="card ">
                <div class="card-header card-header-rose card-header-text">
                    <div class="card-text">
                        <h4 class="card-title">Tambah Data Testimonial</h4>
                    </div>
                </div>
                <div class="card-body ">
                    <form method="get" action="http://demos.creative-tim.com/" class="form-horizontal">
                        <div class="row">
                            <label class="col-sm-2 col-form-label">Nama User : </label>
                            <div class="col-sm-9">
                                <div class="form-group">
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <label class="col-sm-2 col-form-label">Rate : </label>
                            <div class="col-sm-9">
                                <div class="form-group">
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <label class="col-sm-2 col-form-label">Komentar : </label>
                            <div class="col-sm-9">
                                <div class="form-group">
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                        </div> 
                    </form>
                    <button type="submit" class="btn btn-rose float-right">Tambah</button>
                </div>   
            </div>
        </div>
    </div>
</div>

<?php $this->load->view("admin/side/footer") ?>
<?php $this->load->view("admin/side/js") ?>