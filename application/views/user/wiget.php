<div id="footer-widgets">
				<div class="container">
					<div class="inner-wrapper">
						<aside  class="footer-active-4 footer-widget-area">
							<h3 class="widget-title">About Us</h3>
							<p> Kopi jamur prestasi merupakan suatu bisnis kopi yang berawal dari tugas akhir alsdasjdlijasdijasdolijasdljasd ljasdla jsdl djaskl djakl jasdkl jasdkl jasdkl jasdkljadddkl a</p>
						</aside> <!-- .footer-widget-area -->
						<aside class="footer-active-4 footer-widget-area">
							<h3 class="widget-title">Popular Threads</h3>
							<div  class="recent-posts-widget">
								<?php foreach ($forum as $forem) {?>
								<div class="recent-post-item">
									<h4><a href="#" ><?php echo $forem->judul; ?></a></h4>
									<p><?php echo $forem->tanggal; ?></p>
								</div>
								<?php } ?>
							</div><!--   .recent-posts-widget -->
						</aside> <!-- .footer-widget-area -->
						<aside  class="footer-active-4 footer-widget-area">
							<h3 class="widget-title">Produk</h3>
							<ul>
								<?php foreach ($produk as $data_produk) {?>
								<li><a href="#" title="Category"><?php echo $data_produk->nama_produk; ?></a></li>
								<?php } ?>
							</ul>
						</aside> <!-- .footer-widget-area -->
						<aside class="footer-active-4 footer-widget-area">
							<h3 class="widget-title">Gallery</h3>
							<div id="gallery-1" class="gallery gallery-columns-2">
								<figure class="gallery-item">
									<div class="gallery-icon landscape">
										<a href="#"><img  alt="Gallery" src="<?php echo base_url('assets/images/blog')?>/gal.jpg"></a>
									</div>
								</figure>
								<figure class="gallery-item">
									<div class="gallery-icon landscape">
										<a href="#"><img  alt="Gallery" src="<?php echo base_url('assets/images/blog')?>/gal.jpg"></a>
									</div>
								</figure>
								<figure class="gallery-item">
									<div class="gallery-icon landscape">
										<a href="#"><img alt="Gallery" src="<?php echo base_url('assets/images/blog')?>/gal.jpg"></a>
									</div>
								</figure>
								<figure class="gallery-item">
									<div class="gallery-icon landscape">
										<a href="#"><img alt="Gallery" src="<?php echo base_url('assets/images/blog')?>/gal.jpg"></a>
									</div>
								</figure>
								<figure class="gallery-item">
									<div class="gallery-icon landscape">
										<a href="#"><img alt="Gallery" src="<?php echo base_url('assets/images/blog')?>/gal.jpg"></a>
									</div>
								</figure>
								<figure class="gallery-item">
									<div class="gallery-icon landscape">
										<a href="#"><img alt="Gallery" src="<?php echo base_url('assets/images/blog')?>/gal.jpg"></a>
									</div>
								</figure>
							</div>
						</aside> <!-- .footer-widget-area -->
					</div><!-- .inner-wrapper -->
				</div>  <!-- .container -->
			</div> <!-- #footer-widgets -->