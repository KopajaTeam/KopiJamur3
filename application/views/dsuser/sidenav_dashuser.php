<div class="col-sm-3">
	<!--left col-->
	<ul class="list-group">
		<li class="list-group-item text-muted" contenteditable="false" style="color: #323232;text-align: center;"><strong>History Activity</strong></li>
		<li class="list-group-item text-right" style="color: #323232"><span class="pull-left">Total Transaksi</span> <?php echo $this->K_jamur->transaksi($this->session->userdata('id_user'))->num_rows();?></li>
		<li class="list-group-item text-right" style="color: #323232"><span class="pull-left">Total Forum</span> <?php echo $this->K_jamur->beforeforum1($this->session->userdata('id_user'))->num_rows();?></li>
		<li class="list-group-item text-right" style="color: #323232"><span class="pull-left">Total Testimonial</span> <?php echo $this->M_testi->testmon($this->session->userdata('id_user'))->num_rows();?></li>
	</ul>
	<ul class="list-group">
		<a href="<?php echo base_url('Dashboard_user')?>" class="list-group-item"><i class="fa fa-smile" aria-hidden="true"></i> Panel Akun </a>
		<a href="<?php echo base_url('Dashboard_user/pesanan_saya')?>" class="list-group-item" style="color: #323232"><i class="fa fa-shopping-basket" aria-hidden="true"></i> Pesanan Saya</a>
		<a href="<?php echo base_url('Dashboard_user/testimonial_view')?>" class="list-group-item"><i class="fa fa-star" aria-hidden="true"></i> Testimonial Saya</a>
		<a href="<?php echo base_url('Dashboard_user/forum_view')?>" class="list-group-item"><i class="fa fa-comments" aria-hidden="true"></i> Forum Saya</a>
		<a href="<?php echo base_url('Dashboard_user/tentang_saya')?>" class="list-group-item"><i class="fa fa-user" aria-hidden="true"></i> Tentang Saya </a>
		<a href="<?php echo base_url('Dashboard_user/konfirmasi_pembayaran')?>" class="list-group-item"><i class="fa fa-check-square" aria-hidden="true"></i> Konfirmasi Pembayaran </a>
	</ul>
</div>