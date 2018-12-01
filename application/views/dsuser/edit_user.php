<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<body class="home header-v1">
		<!-- <div id="fakeloader"></div> -->
		<!-- <div class="color-switcher" id="choose_color"> -->
			<!-- <a href="#." class="picker_close"><i class="fas fa-cog fa-spin"></i></a> -->
		<!-- </div> -->
		<div id="page" class="site">
			<!-- Mobile main menu -->
			<a href="#" id="mobile-trigger"><i class="fa fa-list" aria-hidden="true"></i></a>
<?php $this->load->view('user/head') ?>
<?php $this->load->view('user/header')?>
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
	<div class="container" style="margin-top: 35px">
		<div class="container target">
			<div class="row">
				<?php $this->load->view('dsuser/sidenav_dashuser') ?>
				<!--/col-3-->
				<div class="col-sm-9" style="" contenteditable="false">
					<div class="panel panel-default">
						<div class="panel-heading">Edit User</div>
						<div class="panel-body">
							<div class="card mt-4">
								<div class="card-body">
									<form action="<?php echo base_url('Dashboard_user/update_users') ?>" method="post" enctype="multipart/form-data">
										<div class="form-group row">
											<label class="col-form-label col-lg-4" for="nama">Nama Lengkap</label>
											<div class="col-lg-8">
												<input type="text"  name="nama" id="nama" value="<?php echo $nama ?>">
											</div>
										</div>
										<div class="form-group row">
											<label class="col-form-label col-lg-4" for="nama">Alamat</label>
											<div class="col-lg-8">
												<textarea type="text"  name="alamat" id="nama"><?php echo $alamat ?></textarea>
											</div>
										</div>
										<div class="form-group row">
											<label class="col-form-label col-lg-4" for="nama">E-Mail</label>
											<div class="col-lg-8">
												<input type="email" disabled=""  name="email" id="nama" value="<?php echo $email ?>"></input>
											</div>
										</div>
										<div class="form-group row">
											<label class="col-form-label col-lg-4" for="nama">Password</label>
											<div class="col-lg-8">
												<input type="password"  name="password" id="nama" value="<?php echo $password ?>"></input>
											</div>
										</div>
										<div class="form-group row">
											<label class="col-form-label col-lg-4" for="tgl_transfer">Tanggal Lahir</label>
											<div class="col-lg-8">
												<input type="date"  name="tgl_lahir" id="tgl_transfer" value="<?php echo $tgl_lahir ?>">
											</div>
										</div>
										<div class="form-group row">
											<label class="col-form-label col-lg-4" for="tgl_transfer">Jenis Kelamin</label>
											<div class="col-lg-8">
												<input type="text"  name="jenis_kelamin" id="tgl_transfer" value="<?php echo $jenis_kelamin ?>">
											</div>
										</div>
										<div class="form-group row">
											<label class="col-form-label col-lg-4" for="tgl_transfer">No. Telepon</label>
											<div class="col-lg-8">
												<input type="text"  name="telp" id="tgl_transfer" value="<?php echo $telp ?>">
											</div>
										</div>
										<div class="form-group row">
											<label class="col-form-label col-lg-4" for="kode_order">Bukti Pembayaran*</label>
											<div class="col-lg-8">
												<div class="row">
													<div class="col-lg-4">
														<img class="img-thumbnail img-fluid mb-5" src="<?php echo base_url($foto); ?>" alt="Card image cap" id="preview_fp">
													</div>
												</div>
												<div class="row" style="margin-top: -40px">
													<div class="col-lg-6">
														<label class="custom-file">
															<input type="file" id="file2"  name="foto" accept="image/*"  onchange="tampilkanPreview(this,'preview_fp')" class="custom-file-input" style="margin-top: -30px">
															<span class="custom-file-control"></span>
														</label>
													</div>
												</div>
											</div>
										</div>
										<div class="row justify-content-center">
											<div class="col-lg-4" style="margin-left: 270px">
												<button type="submit" style="width: 350px; padding-right: 10px">Simpan</button>
											</div>
										</div>
									</form>
								</div>
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
	<script>
		function tampilkanPreview(gambar,idpreview){
    var gb = gambar.files;
    
    for (var i = 0; i < gb.length; i++){
        var gbPreview = gb[i];
        var imageType = /image.*/;
        var preview=document.getElementById(idpreview);            
        var reader = new FileReader();
        
        if (gbPreview.type.match(imageType)) {
            preview.file = gbPreview;
            reader.onload = (function(element) { 
                return function(e) { 
                    element.src = e.target.result; 
                }; 
            })(preview);

            reader.readAsDataURL(gbPreview);
        }else{
            alert("Type file tidak sesuai. Khusus image.");
        }
    }    
}
	</script>