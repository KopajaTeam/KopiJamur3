<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
	
<?php $this->load->view('user/head') ?>

	<body class="home header-v1">
		<!-- <div id="fakeloader"></div> -->
		<!-- <div class="color-switcher" id="choose_color"> -->
			<!-- <a href="#." class="picker_close"><i class="fas fa-cog fa-spin"></i></a> -->
		<!-- </div> -->
		<div id="page" class="site">
			<!-- Mobile main menu -->
			<a href="#" id="mobile-trigger"><i class="fa fa-list" aria-hidden="true"></i></a>
			
<?php $this->load->view('user/header') ?>

<?php $this->load->view('user/mainnav') ?>			
<br>
<!-- Main content -->
    <section class="content">
    	<div class="container">
    		<div class="row">
        <!-- left column -->
	        <div class="col-md-6">
	          <!-- general form elements -->
	          <div class="box box-primary">
	            <div class="box-header with-border">
	              <h3 class="box-title">Silakan Daftar Disini</h3>
	            </div>
	            <!-- /.box-header -->
	            <!-- form start -->
	            <form class="form-horizontal">
	              <div class="box-body">
	              	<div class="form-group">
	                <label for="email" class="col-sm-2 control-label">Email</label>
	                  <div class="col-sm-10">
	                    <input type="Email" class="form-control" id="inputemail" placeholder="Email">
	                  </div>
	                </div>
	                <div class="form-group">
	                 <label for="nama" class="col-sm-2 control-label">Nama</label>
	                  <div class="col-sm-10">
	                    <input type="name" class="form-control" id="inputnama" placeholder="Nama">
	                  </div>
	                </div>
	                <div class="form-group">
	                 <label for="nomorhp" class="col-sm-2 control-label">Contact</label>
	                  <div class="col-sm-10">
	                    <input type="nomorhp" class="form-control" id="inputhp" placeholder="Nomor telfon">
	                  </div>
	                </div>
	                <div class="form-group">
	                <label for="inputPassword" class="col-sm-2 control-label">Password</label>
	                  <div class="col-sm-10">
	                    <input type="password" class="form-control" id="inputpassword" placeholder="Password">
	                  </div>
	                </div>
	                 <div class="form-group">
	                  <label class="col-sm-2 control-label">Alamat</label>
	                  <div class="col-sm-10">
	                  	<textarea class="form-control" rows="3" id="alamat" placeholder="Alamat"></textarea>
	                  </div>
	                </div>
	               </div>
	            <!-- </form> -->
	               </div>
	              <!-- /.box-body -->
	              <div class="box-footer">
	                <!-- <button type="submit" class="btn btn-default">Cancel</button> -->
	                <button type="submit" class="btn btn-info pull-right">Masuk Pak Eko</button>
	              </div>
	              <!-- /.box-footer -->
	            </form>
	          </div>
	          <!-- /.box -->
	      </div>
  		</div>
    	</div>
</section>
<br>

<?php $this->load->view('user/wiget') ?>	

<?php $this->load->view('user/sosmed') ?>

<?php $this->load->view('user/footer') ?>	
		
		</div> <!--#page-->
		<div id="btn-scrollup">
			<a  title="Go Top"  class="scrollup" href="#"><i class="fas fa-angle-up"></i></a>
		</div>
<?php $this->load->view('user/jscript') ?>	
	</body>

</html>