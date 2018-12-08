<div id="footer-widgets">
				<div class="container">
					<div class="inner-wrapper">
						<aside  class="footer-active-4 footer-widget-area">
							<h3 class="widget-title">About Us</h3>
							<p>Berawal dari tugas kulaih dari owner Kopi Jamur Prestasi, Mukhamamd Zaenal Abidin. Kopi Jamur Prestasi ini merupakan perusahaan yang meproduksi minuman kopi yang dicampur dengan extrac jamur bahakan minuman ini terjamin amam dan tidak mebuat perut kembung karena bahan yang dipakai 100% alami bahkan pegawet yang digunakan terbuat dari bahan alami, gula yang digunakan merupakan gula tebu cair.</p>
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
									<?php foreach ($gallery as $galleries) {?>
									<div class="gallery-icon landscape">
										<a href="#"><img style="width: 115px;height: 60px" src="<?php echo base_url("$galleries->gambar_gallery"); ?>"></a>
									</div>
									<?php } ?>
									<!-- <?php foreach ($gallery as $detgal) {?>
									<div class="gallery-icon landscape">
										<a href="#"><img  alt="Gallery" src="<?php echo $detgal->gambar_galeri?>"></a>
									</div>
								<?php } ?> -->
								</figure>
							</div>
						</aside> <!-- .footer-widget-area -->
					</div><!-- .inner-wrapper -->
				</div>  <!-- .container -->
			</div> <!-- #footer-widgets -->