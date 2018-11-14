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

<div id="custom-header">
	<div class="custom-header-content">
		<div class="container">
			<h1 class="page-title">About Us</h1>
			<div id="breadcrumb">
				<div  aria-label="Breadcrumbs" class="breadcrumbs breadcrumb-trail">
					<ul class="trail-items">
						<li class="trail-item trail-begin"><span><u>Home</u></span></a></li>
						<li class="trail-item trail-end"><span>About Us</span></li>
					</ul>
				</div> <!-- .breadcrumbs -->
			</div> <!-- #breadcrumb -->
		</div> <!-- .container -->
	</div>  <!-- .custom-header-content -->
</div> <!-- .custom-header -->	


			<div id="content" class="site-content default-full-width">
				<div class="container">
					<div class="inner-wrapper">
						<div id="primary" class="content-area">
							<main id="main" class="site-main">
								<article>
									<div class="entry-content">
										<hr>
										<h5>Moto Perusahaan</h5>
										<blockquote><p>Belum Tau<cite>Owner</cite></p></blockquote>
										<hr>
										<h1>Profil Perusahaan</h1>
										<p>Hai sahabat pecinta kopi.</p>

										<p>Pernah denger tentang kopi jamur ?, jadi kopi jamur ini adalah kopi yang terbuat dari campuran biji kopi dengan jamur spesial yang dapat dikombinasikan dengan biji kopi.</p>

										<p>Sebenarnya trand kopi jamur di mancanegara sudah cukup terkenal, kami di Indonesia pertama kali dengan produk kopi jamur Indonesia yang tidak kalah dengan kualitas kopi jamur dari manca negara</p>

										<p>Berawal dari tuguas perkuliahan saya sebagai owner, M. Zainudin. saya mencoba untuk berkreasi untuk memberanikan diri membuat produk kopi jamur. Ternyata ketika dipasarkan produk saya dan tim kecil saya mendapat respon yang baik dari masyarakat Jember saat itu.</p>

										<p>Kami juga memberitahukan manfaat dari kopi jamur yang kami buat. Jamur juga merupakan sumber vitamin dan mineral seperti selenium dan potasium. Jamur juga mengandung kalsium yang membantu merawat kesehatan tulang dan mencegah komplikasi. Kopi yang dicampur jamur akan berkurang keasamannya daripada kopi biasa. Oleh karena itu, kopi jamur aman diminum oleh orang yang memiliki perut sensitif. Kopi jamur juga dikenal rendah kafein.</p>

										<p>Bagi mereka yang ingin menurunkan berat badan, kopi jamur juga pilihan yang bagus karena tidak mengandung kolesterol dan lemak. Karena karakternya yang tidak berlemak, jamur juga baik bagi pasien diabetes dan penderita tekanan darah rendah. Satu lagi, jamur juga bisa mendorong pertumbuhan rambut, menghilangkan jerawat, dan menyembuhkan aneka masalah kulit.</p>

										<p>Jadi jangan ragu lagi, coba dan nikmati kopi jamur prestasi. Dijamin tidak akan bikin kembung</p>
										
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