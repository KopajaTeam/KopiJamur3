<?php $this->load->view("admin/side/header") ?>
<?php $this->load->view("admin/side/js") ?>

<script type="text/javascript">
	if (document.readyState === 'complete') {
		if (window.location != window.parent.location) {
			const elements = document.getElementsByClassName("iframe-extern");
			while (elemnts.lenght > 0) elements[0].remove();
            // $(".iframe-extern").remove();
        }
    };
</script>

<div class="wrapper wrapper-full-page">
	<div class="page-header login-page header-filter" filter-color="black" style="background-image: url('<?php echo base_url(); ?>master/admin/img/login.jpg'); background-size: cover; background-position: top center;">
		<div class="container">
			<div class="col-md-6 col-sm-8 ml-auto mr-auto">
				<form class="form" method="post" action="<?php echo base_url('Register_user/insert') ?>" enctype="multipart/form-data">
					<div class="card card-login card-hidden">
						<div class="card-header card-header-rose text-center">
							<h4 class="card-title"><b>Register User</b></h4>
							<div class="social-line">
								Kopi Jamur Prestasi
							</div>
						</div>
						<div class="card-body ">
							<p class="card-description text-center">Sudah punya akun, <a href="<?php echo base_url('Login_user') ?>">Klik disini</a></p>
							<span class="bmd-form-group">
								<div class="input-group">
									<div class="input-group-prepend">
										<span class="input-group-text">
											<i class="material-icons">account_circle</i>
										</span>
									</div>
									<input type="text" name="nama_user" class="form-control" placeholder="Nama Lengkap...">
								</div>
							</span>
							<span class="bmd-form-group">
								<div class="input-group">
									<div class="input-group-prepend">
										<span class="input-group-text">
											<i class="material-icons">room</i>
										</span>
									</div>
									<input type="text" name="alamat_user" class="form-control" placeholder="Alamat Lengkap...">
								</div>
							</span>
							<span class="bmd-form-group">
								<div class="input-group">
									<div class="input-group-prepend">
										<span class="input-group-text">
											<i class="material-icons">email</i>
										</span>
									</div>
									<input type="email" name="email_user" class="form-control" placeholder="Email...">
								</div>
							</span>
							<span class="bmd-form-group">
								<div class="input-group">
									<div class="input-group-prepend">
										<span class="input-group-text">
											<i class="material-icons">lock_outline</i>
										</span>
									</div>
									<input type="password" name="password_user" class="form-control" placeholder="Password...">
								</div>
							</span>
<!-- 							<span class="bmd-form-group">
								<div class="input-group">
									<div class="input-group-prepend">
										<span class="input-group-text">
											<i class="material-icons">lock_outline</i>
										</span>
									</div>
									<input type="password" class="form-control" placeholder="Konfirmasi Password...">
								</div>
							</span> -->
							<span class="bmd-form-group">
								<div class="input-group" style="margin-top: 30px">
									<div class="input-group-prepend">
										<span class="input-group-text" style="margin-top: -85px">
											<i class="material-icons">contacts</i>
										</span>
									</div>
									<div class="fileinput fileinput-new text-center" data-provides="fileinput">
										<div class="fileinput-new thumbnail">
											<img src="<?php echo base_url(); ?>master/admin/img/image_placeholder.jpg" alt="...">
										</div>
										<div class="fileinput-preview fileinput-exists thumbnail"></div>
										<div>
											<span class="btn btn-rose btn-round btn-file">
												<span class="fileinput-new">Pilih Foto Profil	</span>
												<span class="fileinput-exists">Change</span>
												<input type="file" name="gambar_user" />
											</span>
											<a href="#pablo" class="btn btn-danger btn-round fileinput-exists" data-dismiss="fileinput"><i class="fa fa-times"></i> Remove</a>
										</div>
									</div>
								</div>
							</span>
						</div>
						<div class="card-footer justify-content-center">
							<button type="submit" class="btn btn-rose btn-link btn-lg">Register</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>

<script type="text/javascript">
	$().ready(function(){
		demo.checkFullPageBackgroundImage();

		setTimeout(function(){
            // after 1000 ms we add the class animated to the login/register card
            $('.card').removeClass('card-hidden');
        }, 700)
	});
</script>