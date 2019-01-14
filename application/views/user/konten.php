<div id="content" class="site-content global-layout-no-sidebar">
	<div class="container">
		<div class="inner-wrapper">
			<div id="primary" class="content-area">
				<main id="main" class="site-main" >
					<aside class="section section-services service-layout-1">
						<div class="container" style="margin-top: -50px">
							<div class="section-title-wrap">
								<h2 class="section-title">Key Features</h2>
								<span class="divider"></span>
							</div>
							<div class="service-block-list">
								<div class="inner-wrapper">
									<div class="col-grid-6 service-block-item">
										<div class="service-block-inner box-shadow-block">
											<a class="service-icon" href="<?php echo base_url("Unggulan") ?>" ><i class="icon-mobile"></i></a>
											<div class="service-block-inner-content">
												<h3 class="service-item-title"><a href="<?php echo base_url("Unggulan") ?>" >Produk Unggulan</a>  </h3>
												<div class="service-block-item-excerpt">
													<p>Kopi jamur sebenarnya sudah sejak lama digunakan dalam pengobatan tradisional China. Bubuk ekstrak jamur yang kemudian dicampur dengan kopi instan organik ternyata efektif untuk mencegah diabetes dan mengurangi risiko kanker ....</p>
													<a href="<?php echo base_url("Unggulan") ?>" class="more-link">Know More</a>
												</div><!-- .service-block-item-excerpt -->
											</div><!-- .service-block-inner-content -->
										</div> <!-- .service-block-inner -->
									</div> <!-- .service-block-item -->
									<div class="col-grid-6 service-block-item">
										<div class="service-block-inner box-shadow-block">
											<a class="service-icon" href="<?php echo base_url("Prestasi") ?>" ><i class="icon-clipboard"></i></a>
											<div class="service-block-inner-content">
												<h3 class="service-item-title"><a href="<?php echo base_url("Prestasi") ?>" >Prestasi</a>  </h3>
												<div class="service-block-item-excerpt">
													<p>Kopi jamur sebenarnya sudah sejak lama digunakan dalam pengobatan tradisional China. Bubuk ekstrak jamur yang kemudian dicampur dengan kopi instan organik ternyata efektif untuk mencegah diabetes dan mengurangi risiko kanker ....</p>
													<a href="<?php echo base_url("Prestasi") ?>" class="more-link">Know More</a>
												</div><!-- .service-block-item-excerpt -->
											</div><!-- .service-block-inner-content -->
										</div> <!-- .service-block-inner -->
									</div> <!-- .service-block-item -->
								</div>
							</div>
							<hr class="stylehr">
							<div class="section-title-wrap">
								<h2 class="section-title">Product</h2>
								<span class="divider"></span>
							</div>
							<div class="service-block-list">
								<div class="inner-wrapper">
									<aside class="section section-teams" style="margin-top: -85px;margin-bottom: -100px">
										<div class="container"> <br>
											<div class="teams-section">
												<div class="inner-wrapper">
													<?php foreach ($produk as $data_produk) { ?>
													<form method="post" action="<?php echo base_url('Produk/insertKranjang') ?>">
														<div class="col-grid-6 team-item">
															<div class="thumb-summary-wrap box-shadow-block">
																<div class="team-thumb">
																	<a href="#" target="-sefl"> <img style="width: 300px;height: 200px" alt="Team" src="<?php echo $data_produk->gambar_produk; ?>"></a>
																</div><!-- .team-thumb-->
																<div class="team-text-wrap">
																	<input type="text"  name="idProduk" hidden="" value="<?php echo $data_produk->id_produk; ?>" >
																	<input type="text" name="hrgProduk" hidden="" value="<?php echo $data_produk->harga_produk; ?>">
																	<h3 class="team-title"><a href="#"><?php echo $data_produk->nama_produk; ?></a></h3>
																	<p class="team-position"><?php echo $data_produk->nama_kategori_produk; ?></p>
																	<p>Rp. <?php echo number_format($data_produk->harga_produk	) ; ?></p>
																</div><!-- .team-text-wrap -->
																<!--  -->
																<div class="row" style="margin-top: -30px;margin-bottom: -50px">
																	<div class="col-grid-12">
																		<a class="custom-button button-curved col-grid-6" style="margin-right: 10px" href="Produk/detail_produk/<?php echo $data_produk->id_produk; ?>"><i class="fas fa-eye"></i> Detail</a>
																		<button type="submit" class="custom-button button-curved col-grid-5" style="margin-left: 9px" href=""><i class="fas fa-cart-plus"></i> Beli</button>
																	</div>
																</div>
																<!-- .social-links -->
															</div> <!-- .team-item -->
														</div> <!-- .team-item  -->
													</form>
													<?php } ?>
												</div> <!-- .inner-wrapper -->
											</div> <!-- .teams-section -->
										</div> <!-- .container -->
									</aside>

								</div>
							</div>
							<hr class="stylehr">
							<aside  class="section section-featured-page" style="margin-bottom: -110px">
								<div class="container" style="margin-top: -100px">
									<img class="alignleft" alt="About Us" src="<?php echo base_url('assets/images/featured-page')?>/kopijamurside.jpg">
									<div class="featured-page-section">
										<h2 class="section-title">Apa Saja Kelebihan dari Kopi Jamur kami?</h2>
										<h5>Kopi Jamur memiliki banyak khasiat unik diantaranya :</h5>
										<!-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean ac lorem pretium, laoreet enim at, malesuada elit. </p> -->
										<ul>
											<li>Kopi jamur tidak mengandung kolesterol dan lemak sehinngga cocok untuk diet, baik bagi pasien diabates, dan penderita tekanan darah rendah.</li>
											<li>membantu merawat kesehatan tulang dan mencegah komplikasi.</li>
											<li>kopi jamur aman diminum oleh orang yang memiliki perut sensitif.</li>
											<li>Kopi jamur juga dikenal rendah kafein.</li>
										</ul>
										<!-- <a href="#"  class="custom-button">Know More</a> -->
									</div><!-- .featured-page-section -->
								</div> <!-- .container -->
							</aside> <!-- .section-featured-page -->
							<hr class="stylehr">
							<div id="content" class="site-content default-full-width blog-grid-layout" style="margin-bottom: -200px;margin-top: -50px" id="forum">
								<div class="container">
									<div class="section-title-wrap">
										<h2 class="section-title">Forum</h2>
										<span class="divider"></span><br><br>
									</div>
									<div class="inner-wrapper">
										<div id="primary" class="content-area">
											<main id="main" class="site-main" style="margin-bottom: -50px">
												<div class="inner-wrapper">
													<?php foreach ($forum as $forum_det) { ?>
													<article class="hentry post col-grid-4">
														<div class="entry-content-wrapper box-shadow-block">
															<div class="entry-thumb aligncenter">
																<a  href="#" >
																	<img style="height: 225px" src="<?php echo base_url($forum_det->gambar_headline); ?>" alt="Blog">
																</a>
															</div> <!-- .entry-thumb -->
															<header class="entry-header" style="min-height: 100px">
																<h2 class="entry-title"><a href="#" rel="bookmark"><?php echo $forum_det->judul; ?></a></h2>
															</header><!-- .entry-header -->
															<div class="entry-meta">
																<span class="posted-on"><?php echo $forum_det->tanggal; ?></span>
																<span class="cat-links"><a href="" rel="category tag"><?php echo $forum_det->nama_kategori; ?></a></span>
															</div><!-- .entry-meta -->
															<div class="entry-content">
																<p><?php echo substr($forum_det->isi_forum, 0, 165); ?>........</p>
																<a style="margin-left: 75px" href="Forum/detail_forum/<?php echo $forum_det->id_forum; ?>" class="custom-button button-curved">Read More</a>
															</div><!-- .entry-content -->
														</div><!-- .entry-content-wrapper -->
													</article><!-- .post -->
													<?php } ?>
													<div class="more-wrapper" style="margin-top: -45px;margin-bottom: 40px">
														<a href="#" class="custom-button button-curved">Explore More</a>
													</div> <!-- .more-wrapper -->
												</div> <!-- .inner-wrapper -->
												<hr class="stylehr" style="margin-top: -100px">
											</div>
										</div>
									</main>
								</div>
								<aside class="section section-teams">
									<div class="container">
										<div class="section-title-wrap">
											<h2 class="section-title">Our Team</h2><span class="divider"></span>
										</div> <!-- .section-title-wrap -->
										<div class="teams-section">
											<div class="inner-wrapper">
												<div class="col-grid-3 team-item">
													<div class="thumb-summary-wrap box-shadow-block">
														<div class="team-thumb">
															<a href="#" target="-sefl"> <img style="width: 250px; height: 250px" alt="Team" src="<?php echo base_url('assets/images/team')?>/Zaenal.png"></a>
														</div><!-- .team-thumb-->
														<div class="team-text-wrap">
															<h3 class="team-title"><a href="#">Mukhammad Zaenal Abidin</a></h3>
															<p class="team-position">Direktur Utama</p>
														</div><!-- .team-text-wrap -->
														<!-- <div class="social-links circle">
															<ul>
																<li><a href="http://facebook.com/" target="_blank">Facebook</a></li>
																<li><a href="http://twitter.com/" target="_blank">Twitter</a></li>
																<li><a href="http://instagram.com/" target="_blank">Instagram</a></li>
															</ul>
														</div --><!-- .social-links -->
													</div> <!-- .team-item -->
												</div> <!-- .team-item  -->
												<div class="col-grid-3 team-item">
													<div class="thumb-summary-wrap box-shadow-block">
														<div class="team-thumb">
															<a href="#" target="-sefl"> <img style="width: 250px; height: 250px" alt="Team" src="<?php echo base_url('assets/images/team')?>/Aula.png"></a>
														</div><!-- .team-thumb-->
														<div class="team-text-wrap">
															<h3 class="team-title"><a href="#">Aula Masfufah</a></h3>
															<p class="team-position">Direktur Keuangan</p>
														</div><!-- .team-text-wrap -->
														<!-- <div class="social-links circle">
															<ul>
																<li><a href="http://facebook.com/" target="_blank">Facebook</a></li>
																<li><a href="https://twitter.com/AulaMasfufah" target="_blank">Twitter</a></li>
																<li><a href="http://instagram.com/" target="_blank">Instagram</a></li>
															</ul>
														</div> --><!-- .social-links -->
													</div> <!-- .team-item -->
												</div> <!-- .team-item  -->
												<div class="col-grid-3 team-item">
													<div class="thumb-summary-wrap box-shadow-block">
														<div class="team-thumb">
															<a href="#" target="-sefl"> <img style="width: 250px; height: 250px" alt="Team" src="<?php echo base_url('assets/images/team')?>/Afdiar.png"></a>
														</div><!-- .team-thumb-->
														<div class="team-text-wrap">
															<h3 class="team-title"><a href="#">Afdiar Prambudi</a></h3>
															<p class="team-position">Divisi Produksi dan R&D</p>
														</div><!-- .team-text-wrap -->
														<!-- div class="social-links circle">
															<ul>
																<li><a href="http://facebook.com/" target="_blank">Facebook</a></li>
																<li><a href="http://twitter.com/" target="_blank">Twitter</a></li>
																<li><a href="http://instagram.com/" target="_blank">Instagram</a></li>
															</ul>
														</div> --><!-- .social-links -->
													</div> <!-- .team-item -->
												</div> <!-- .team-item  -->
												<div class="col-grid-3 team-item">
													<div class="thumb-summary-wrap box-shadow-block">
														<div class="team-thumb">
															<a href="#" target="-sefl"> <img style="width: 250px; height: 250px" alt="Team" src="<?php echo base_url('assets/images/team')?>/Vian.png"></a>
														</div><!-- .team-thumb-->
														<div class="team-text-wrap">
															<h3 class="team-title"><a href="#">Vian Hidayat</a></h3>
															<p class="team-position">Divisi Pemasaran</p>
														</div><!-- .team-text-wrap -->
														<!-- <div class="social-links circle">
															<ul>
																<li><a href="http://facebook.com/" target="_blank">Facebook</a></li>
																<li><a href="http://twitter.com/" target="_blank">Twitter</a></li>
																<li><a href="http://instagram.com/" target="_blank">Instagram</a></li>
															</ul>
														</div> --><!-- .social-links -->
													</div> <!-- .team-item -->
												</div> <!-- .team-item  -->
											</div> <!-- .inner-wrapper -->
										</div> <!-- .teams-section -->
										<hr class="stylehr">
									</div> <!-- .container -->
								</aside> <!-- .section section-teams -->
								<aside class="section section-testimonial white-background" style="margin-top: -200px; margin-bottom: -120px">
									<div class="container">
										<div class="section-title-wrap">
											<h2 class="section-title">Testimonial</h2><span class="divider"></span>
										</div> <!-- .section-title-wrap -->
										<div class="testimonial-carousel-wrapper iteam-col-3 section-carousel-enabled">
											<?php foreach ($testimoni as $testi) { ?>
											<div class="testimonial-item col-grid-6">
												<div class="testimonial-wrapper">
													<div class="testimonial-thumb">
														<a href="#"><img style="margin-bottom: -20px" alt="" src="<?php echo base_url($testi->foto); ?>"></a>
													</div><!-- .testimonial-thumb -->
													<div class="testimonial-summary">
														<p><?php echo $testi->nama; ?></p>
														<h3 class="testimonial-title"><?php echo $testi->nama_produk; ?></h3>
													</div><!-- .testimonial-summary -->
													<div class="portfolio-item  graphic-design"  style="border-radius: 0;">
														<div class="item-inner-wrapper" >
															<img style="border-radius: 0"  src="<?php echo base_url($testi->gambar_testi); ?>" alt="Portfolio" class="portfolio-thumb">
															<div class="overlay"></div>
															<div class="portfolio-content">
																<a data-gal="prettyPhoto[product-gallery]" rel="bookmark" href="<?php echo base_url($testi->gambar_testi); ?>"><i class="fas fa-search" aria-hidden="true"></i></a>
																<h3><a href="#" ></a></h3>
																<p></p>
															</div>
														</div>
													</div><!-- end item -->
													<p class="testimonial-position"  ><?php echo $testi->komentar; ?></p>
												</div> <!-- .testimonial-wrapper -->
											</div> <!-- .testimonial-item  -->
											<?php } ?>
										</div> <!-- .testimonial-carousel-wrapper -->
									</aside> <!-- .section section-testimonial-carousel -->
									<hr class="stylehr">
									<aside  class="section section-Quick-contact lite-background" style="margin-top: -60px">
										<div class="container">
											<div class="inner-wrapper">
												<div class="col-grid-6">
													<div class="contact-form-area contactdesc">
														<h3 class="contact-title"> Kritik dan Saran</h3>
														<p>Beri kami kritik dan saran agar kami dapat mengevaluasi setiap kekurangan kami.</p>
														
														<div id="contact-form" class="contact-form">
															<form action="<?php echo base_url('Kritik_saran/insert') ?>" method="post">
																<input type="text" name="nama_kritik_saran" id="name" class="form-control" placeholder="Name *">
																<br>
																<input type="text" name="email_kritik_saran" id="email_kritik_saran" class="form-control" placeholder="Email *">
																<textarea class="form-control" name="isi_kritik_saran" id="comments" rows="6"></textarea>
																<br>
																<button type="submit" name="submit" class="btn btn-primary btn-lg button-curved">SEND MESSAGE</button>
															</form>
														</div><!-- .contact-form -->
													</div><!-- .contact-form-area -->
												</div>
												<div class="col-grid-6">
													<div class="quick-contact-widget">
														<h3> Quick Contact</h3>
														<span><i class="fas fa-phone" aria-hidden="true"></i> 085843854928 </span>
														<!-- <span><i class="fas fa-envelope" aria-hidden="true"></i>email.contoemail.com </span> -->
														<span><i class="fas fa-map-marker-alt"></i> Jl. Mastrip Timur No. 102, Sumbersari 68121, Jember </span>
													</div>  <!-- .quick-contact-widget -->
													<div class="contact-map">
														<div class="map-inner-wrapper">
															<iframe class="googlemap" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3949.3830329508232!2d113.72188721410116!3d-8.16410919412367!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd695c919e65981%3A0xa57bb1f8d371bfbe!2sJl.+Mastrip+Timur+No.102%2C+Sumbersari%2C+Kabupaten+Jember%2C+Jawa+Timur+68121!5e0!3m2!1sid!2sid!4v1536931344062"" width="700" height="300"></iframe>
														</div> <!-- .map-inner-wrapper -->
													</div><!-- contact-map -->
												</div>
											</div><!-- .inner-wrapper -->
										</div> <!-- .container -->
									</aside> <!-- .section-Quick-contact -->
								</div>
							</aside>
						</main>
					</div>
				</div>
			</div>
		</div>