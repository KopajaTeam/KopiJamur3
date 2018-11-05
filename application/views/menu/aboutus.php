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
<?php $this->load->view('user/headnav') ?>	


			<div id="content" class="site-content default-full-width">
				<div class="container">
					<div class="inner-wrapper">
						<div id="primary" class="content-area">
							<main id="main" class="site-main">
								<article>
									<div class="entry-content">
										<hr>
										<h5>Moto Perusahaan</h5>
										<blockquote><p>Kerja, Kerja, Kerja<cite>Owner</cite></p></blockquote>
										<hr>
										<h1>Sejarah Perusahaan</h1>
										<p>Jamur umumnya diolah sebagai campuran masakan pasta, sup, atau piza. Namun dengan sedikit sentuhan kreativitas, jamur kini bisa diolah menjadi campuran kopi. Tetapi jangan bayangkan anda minum kopi dengan potongan-potongan jamur.</p>

										<p>Jamur yang dicampur dengan kopi sudah diproses terlebih dahulu menjadi berbentuk serbuk. Kopi yang disilangkan dengan bubuk jamur ini ternyata punya banyak manfaat bagi kesehatan. Hal itu tidak mengherankan karena jamur adalah salah satu bahan penting dalam sejarah pengobatan tradisional Cina.</p>

										<p>Four Sigmatic, produsen kopi jamur yang berbasis di Amerika Serikat, menyarankan waktu yang tepat untuk mengonsumsi minuman ini. Waktu terbaik untuk minum kopi jamur adalah sore hari antara pukul 16.00 sampai 18.00. Dengan meminumnya di saat yang tepat, kopi jamur mampu meningkatkan konsentrasi, kreativitas, daya ingat, dan kesehatan otak.</p>

										<p>Dilansir dari Indian Express, ada beberapa keuntungan yang dipetik dari mengonsumsi kopi dicampur jamur. Jamur dikenal sebagai peningkat imunitas tubuh serta kaya akan antioksidan.</p>

										<p>Jamur juga merupakan sumber vitamin dan mineral seperti selenium dan potasium. Jamur juga mengandung kalsium yang membantu merawat kesehatan tulang dan mencegah komplikasi. Kopi yang dicampur jamur akan berkurang keasamannya daripada kopi biasa. Oleh karena itu, kopi jamur aman diminum oleh orang yang memiliki perut sensitif. Kopi jamur juga dikenal rendah kafein.</p>

										<p>Bagi mereka yang ingin menurunkan berat badan, kopi jamur juga pilihan yang bagus karena tidak mengandung kolesterol dan lemak. Karena karakternya yang tidak berlemak, jamur juga baik bagi pasien diabetes dan penderita tekanan darah rendah. Satu lagi, jamur juga bisa mendorong pertumbuhan rambut, menghilangkan jerawat, dan menyembuhkan aneka masalah kulit.</p>
										
										<hr>
										<h5>Prestasi</h5>
										<ul>
											<li>prestasi 1</li>
											<li>prestasi 2</li>
											<li>prestasi 3</li>
										</ul>
										<hr>
										<h5>pencapaian</h5>
										<ol>
											<li>pencapaian 1</li>
											<li>pencapaian 2</li>
											<li>pencapaian 3</li>
										</ol>
										</div>
									</article>
								</main>
							</div>
						</div>
					</div>
				</div>
			</div>
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