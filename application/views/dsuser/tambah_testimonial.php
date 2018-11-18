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
						<div class="panel-heading">Tambah Testimonial</div>
						<div class="panel-body">
							<div class="row">
								<div class="col-md-12 col-sm-6 col-xs-12">
									<div class="panel panel-default">
										<div class="panel-body">
											<form class="form-horizontal row-border" action="#">
												<div class="form-group">
													<label class="col-md-3 control-label">Default input field</label>
													<div class="col-md-9">
														<input type="text" name="regular" class="form-control">
													</div>
												</div>
												<div class="form-group">
													<label class="col-md-3 control-label">Password</label>
													<div class="col-md-9">
														<input class="form-control" type="text" name="pass">
													</div>
												</div>
												<div class="form-group">
													<label class="col-md-3 control-label">Password</label>
													<div class="col-md-9">
														<input class="form-control" type="text" name="pass">
													</div>
												</div>
												<div class="form-group row">
													<label class="col-md-3 control-label" for="kode_order">Bukti Pembayaran*</label>
													<div class="col-lg-8">
														<div class="row">
															<div class="col-lg-4">
																<img class="img-thumbnail img-fluid mb-5" src="<?php echo base_url(); ?>master/admin/img/image_placeholder.jpg" alt="Card image cap" id="preview_fp">
															</div>
														</div>
														<div class="row" style="margin-top: -40px">
															<div class="col-lg-6">
																<label class="custom-file">
																	<input type="file" id="file2" required name="filebukti" accept="image/*"  onchange="tampilkanPreview(this,'preview_fp')" class="custom-file-input" style="margin-top: -30px">
																	<span class="custom-file-control"></span>
																</label>
															</div>
														</div>
														<div class="size15 trans-0-4">
															<a href="#"><button class="flex-c-m bg1 bo-rad-23 hov1 s-text1 trans-0-4" style="margin-left:120px; margin-top: 70px;">
																Simpan
															</button></a>
														</div>
													</div>
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