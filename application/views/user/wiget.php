<?php $this->load->model('M_galery'); ?>
<div id="footer-widgets">
	<div class="container">
		<div class="inner-wrapper">
			<aside  class="footer-active-4 footer-widget-area">
				<h3 class="widget-title">About Us</h3>
				<p style="text-align: justify;text-indent: 60px">Berawal dari tugas kulaih dari owner Kopi Jamur Prestasi, Mukhamamd Zaenal Abidin. Kopi Jamur Prestasi ini merupakan perusahaan yang meproduksi minuman kopi yang dicampur dengan extrac jamur bahakan minuman ini terjamin amam dan tidak mebuat perut kembung karena bahan yang dipakai 100% alami bahkan pegawet yang digunakan terbuat dari bahan alami, gula yang digunakan merupakan gula tebu cair.</p><a style="margin-left: 45px" href="<?php echo base_url("About_us") ?>">Click here to Know More</a>
			</aside> <!-- .footer-widget-area -->
			<aside class="footer-active-4 footer-widget-area">
				<h3 class="widget-title">Popular Threads</h3>
				<div  class="recent-posts-widget">
					<?php $forg = $this->M_galery->limitG('id_forum','forum')->result(); foreach ($forg as $forem) {?>
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
					<?php $prodk=$this->M_galery->limitG('id_produk','produk')->result(); foreach ($prodk as $data_produk) {?>
					<li><a href="#" title="Category"><?php echo $data_produk->nama_produk; ?></a></li>
					<?php } ?>
				</ul>
			</aside> <!-- .footer-widget-area -->
			<aside class="footer-active-4 footer-widget-area">
				<h3 class="widget-title">Gallery</h3>
				<div id="gallery-1" class="gallery gallery-columns-2">
					<figure class="gallery-item">
						<?php $gal=$this->M_galery->limitG('id_gallery','gallery')->result(); foreach ($gal as $galleries) {?>
						<div class="gallery-icon landscape">
							<a href="#"><img style="width: 115px;height: 60px" src="<?php echo base_url("$galleries->gambar_galeri"); ?>"></a>
						</div>
						<br>
						<?php } ?>
					</figure>
				</div>
			</aside> <!-- .footer-widget-area -->
		</div><!-- .inner-wrapper -->
	</div>  <!-- .container -->
			</div> <!-- #footer-widgets -->