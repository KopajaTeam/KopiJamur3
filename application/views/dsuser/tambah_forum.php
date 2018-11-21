<?php echo form_open('Dashboard_user/tambah_forum'); ?>
<?php $this->load->view('user/head') ?>
<?php $this->load->view('user/header')?>>
<?php $this->load->view('user/mainnav') ?>

<!-- Include CSS for icons. -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />

<!-- Include Editor style. -->
<link href="https://cdn.jsdelivr.net/npm/froala-editor@2.9.0/css/froala_editor.pkgd.min.css" rel="stylesheet" type="text/css" />
<link href="https://cdn.jsdelivr.net/npm/froala-editor@2.9.0/css/froala_style.min.css" rel="stylesheet" type="text/css" />

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
	<div class="container">
		<hr class="">
		<div class="container target">
			<div class="row">
				<?php $this->load->view('dsuser/sidenav_dashuser') ?>
				<!--/col-3-->
				<div class="col-sm-9" style="" contenteditable="false">
					<div class="panel panel-default">
						<div class="panel-heading">Tambah Forum</div>
						<div class="panel-body">
							<div class="content">
								<div class="container-fluid">
									<div class="card ">
										<div class="card-header card-header-rose card-header-text">
										</div>
										<div class="card-body">
											<!-- button simpan -->

											<form method="post" action="<?php echo base_url('Dashboard_user/simpan_forum') ?>" enctype="multipart/form-data">
												<div class="row">
													<div class="col-lg-9">
														<div class="form-group">
															<!-- disini judul -->

															<input type="text" placeholder="Masukkan Judul Forum" name="judul_forum" class="form-control" name="judul">

														</div>
													</div>
													<div class="col-lg-1">
														<button type="submit" name="publish" class="btn btn-primary">Publish</button>
													</div>
												</div>
												<hr style="margin-top: -30px;margin-bottom: 15px">
												<div class="row">
													<!-- disini deskripsi forum -->

													<div class="col-lg-9">
															<input type="text" placeholder="Masukkan Deskripsi Forum" name="desc_forum" class="form-control" name="judul">
														</div>
														<br>
														<br>
												<!-- <div class="col-lg-9">
														<div class="form-group">
															<textarea class="form-control" name="desc_forum" id="desc"></textarea>
														</div>
													</div> -->
													<div class="col-lg-9">
														<!-- input forum disnni -->

														<div class="form-group">
															<textarea class="form-control" name="isi_forum" id="inputforum"></textarea>
														</div>
													</div>
													<div class="col-lg-3">
															<div class="dropdown">
																<button id="dLabel" style="margin-top: -55px;width: 172px;color: #000;height: 35px;padding: 0.5px 16px" class="dropdown-select" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
																	Pilih Kategori
																	<span class="caret"></span>
																	<!--  untuk option -->

																</button>
																<ul class="dropdown-menu" aria-labelledby="dLabel">
																	<li>Option 1</li>
																	<li>Option 2</li>
																	<li>Option 3</li>
																	<li>Option 4</li>
																	<li>Option 5</li>
																	<li>Option 6</li>
																</ul>
															</div>
													</div>
													<div class="col-lg-3" style="margin-top: 10px">
														<img id="blah" src="<?php echo base_url(); ?>master/admin/img/image_placeholder.jpg" alt="your image" / style="margin-bottom: 15px;height: 185px;width: 180px">
														<input style="" type='file' onchange="readURL(this);" />
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
			</div>
		</div>
	</aside>
	<?php $this->load->view("admin/side/js") ?>

	<!-- Include jQuery lib. -->
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>

	<!-- Include Editor JS files. -->
	<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/froala-editor@2.9.0/js/froala_editor.pkgd.min.js"></script>

	<!-- Initialize the editor. -->
	<script>
		$(function() {
			$('textarea').froalaEditor()
		});
	</script>
	<script>
		     function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#blah')
                        .attr('src', e.target.result);
                };

                reader.readAsDataURL(input.files[0]);
            }
        }
	</script>
	<script>
		$('.dropdown-menu li').on('click', function() {
			var getValue = $(this).text();
			$('.dropdown-select').text(getValue);
		});
	</script>

	<?php $this->load->view('user/wiget') ?>
	<?php $this->load->view('user/sosmed') ?>

	<?php $this->load->view('user/footer') ?>
	<?php echo form_close(''); ?>