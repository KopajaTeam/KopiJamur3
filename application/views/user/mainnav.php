<div id ="main-navigation" style="background-color: #7f3012">
	<div class="container" style="background-color: #975425">
		<nav class="main-navigation">
			<ul>
				<li class="<?php if($this->uri->segment(1) == "KopiJamur" and $this->uri->segment(1) ==""){echo "current-menu-item";}?> menu-item""><a href="<?php echo base_url("") ?>">Home</a>
				</li>
				<li class=" <?php if($this->uri->segment(1) == "About_us" ){echo "current-menu-item";}?> menu-item"><a href="<?php echo base_url("About_us") ?>">About Us</a>
				</li>
				<li class=" <?php if($this->uri->segment(1) == "Produk"){echo "current-menu-item";}?> menu-item"><a href="<?php echo base_url("Produk") ?>">Product</a> </li>
				<li class=" <?php if($this->uri->segment(1) == "Testimonial"){echo "current-menu-item";}?> menu-item"><a href="<?php echo base_url("Testimonial") ?>">Testimonial</a></li>

				<li class=" <?php if($this->uri->segment(1) == "Contact"){echo "current-menu-item";}?> menu-item"><a href="<?php echo base_url("Kontak") ?>" >Contact</a>

				<!-- <li class=" <?php //if($this->uri->segment(2) == "contact"){echo "current-menu-item";}?> menu-item"><a href="#" >Contact</a> -->

				<li class=" <?php if($this->uri->segment(1) == "Forum"){echo "current-menu-item";}?> menu-item"><a href="<?php echo base_url("Forum") ?>">Forum</a></li>	
				</li>
				<li class=" <?php if($this->uri->segment(2) == "Galery"){echo "current-menu-item";}?> menu-item"><a href="<?php echo base_url("Gallery")?>">Galery</a></li>
			</ul>
		</nav> <!-- .site-navigation -->
		<?php if ($this->session->userdata('status')=="login") { ?>
		<div id="troli">
			<a href="<?php echo base_url("KopiJamur/bayar") ?>"><i class="fa fa-shopping-cart" style="color: #fff"></i> <span class="badge badge-light">0</span></a>
		</div>
		<?php } ?>
		<div id="header-search" style="margin-right: 1%;">
			<a href="#" class="search-icon"><i class="fa fa-search"></i></a>
			<div class="search-box-wrap">
				<div class="searchform" role="search">
					<form>
						<input type="text" name="s" id="s" placeholder="Search..." value="" class="search-field">
						<input type="submit" class="search-submit" value="Search">
					</form>
				</div>
			</div>
		</div>
		<div class="header-social-wrapper">
			<div class="social-links" >
				<ul>
					<li><a href="https://www.facebook.com/panji.arekmarchingband" ></a></li>
					<li><a href="http://youtube.com/" target="_blank"></a></li>
					<li><a href="http://twitter.com/" target="_blank"></a></li>
					<li><a href="http://instagram.com/" target="_blank"></a></li>
				</ul>
			</div> <!-- .social-links -->
		</div><!-- .header-social-wrapper -->
	</div><!-- .container -->
</div> <!-- #main-navigation -->