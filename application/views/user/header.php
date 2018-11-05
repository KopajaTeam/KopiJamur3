<?php
	if ($this->session->userdata('status')=="login") {
		$where=array('id_user' => $this->session->userdata('id_user'));
		$data_user=$this->k_jamur->selectwhere("user", $where)->row();
	}
?>
<header id="masthead" class="site-header" >
	<div class="container">
		<div class="site-branding">
			<div id="site-identity">
				<h1 class="site-title"><a href="home-v1.html"  rel="home"><img alt="logo" src="<?php echo base_url('assets/images')?>/test1.png"></a></h1>
			</div><!-- #site-identity -->
		</div><!-- .site-branding -->
		<?php if ($this->session->userdata('status')!="login") { ?>
			<a href="<?php echo base_url('Login_user')?>" class="custom-button apply-now" style="background-color: #975425" >LOGIN</a>
		<?php }else{ ?>
			<a href="<?php echo base_url('Login_user/logout')?>" class="custom-button apply-now" style="background-color: #975425" >LOGOUT</a>
		<?php } ?>
		<div id="quick-contact">
			<!-- <a href="#" class="custom-button apply-now" style="background-color: #975425" ><i class="fa fa-shopping-cart"></i></a> -->
			<ul>
				<li class="quick-email">
					<div class="header-box-icon">
						<i class="icon-envelope"></i>
					</div>
					<div class="header-box-info">
						<strong>Email</strong>
						<a href="mailto:mail@example.com" >kopijamurprestasi@gmail.com</a>
					</div>
				</li>
				<li class="quick-address">
					<div class="header-box-icon">
						<i class="icon-map"></i>
					</div>
					<div class="header-box-info">
						<strong>Address</strong>
						Jember, Jl. Mastrip Timur No.102
					</div>
				</li>
				<?php if ($this->session->userdata('status')=="login") { ?>
				<li class="open-time">
					<div class="header-box-icon thumbnail img-circle">
						<img style="height: 40px; width: 40px; border-radius: 50%;" src="<?php echo base_url($data_user->foto); ?>">
					</div>
					<div class="header-box-info">
						<strong>Welcome,</strong>
						<a href="#"><?php echo $data_user->nama; ?></a>
					</div>
				</li>
				<?php } ?>
			</ul>
		</div> <!-- .quick-contact -->
	</div> <!-- .container -->
</header> <!-- .site-header -->