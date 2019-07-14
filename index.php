<!DOCTYPE html>
<html>
<head>
	<title>Wisata</title>
	<!-- menghubungkan dengan file css -->
	<link rel="stylesheet" type="text/css" href="style.css">
	<!-- menghubungkan dengan file jquery -->
	<script type="text/javascript" src="jquery.js"></script>
</head>
<body>
<!-- 
Author : diki alfarabi hadi 
Site : www.malasngoding.com
-->
<div class="content">
	<header>
		<h1 class="judul">INFORMASI WISATA INDONESIA</h1>
		
	</header>

	<div class="menu">
		<ul>
			<li><a href="index.php?page=home">HOME</a></li>
			<li class="dropdown"><a href="index.php?page=tentang">DESTINASI</a>
				<ul class="isi-dropdown"> 
					<li><a href="bali.php">Bali</a></li>
					<li><a href="#">Korea</a></li>
					<li><a href="#">Inggris</a></li>
					<li><a href="#">Prancis</a></li>
				</ul>
			</li>
			<li><a href="Kontak.php?page=tutorial">Kontak</a></li>
		</ul>
	</div>
 
	<div class="badan">
 		
 	<p><center>Wisata Indonesia</center></p>

<p>	Tempat Wisata di Indonesia sudah dikenal di mancanegara. Daerah wisata di Indonesia banyak menjadi tujuan wisata populer di dunia. Bentang pegunungan dan kepulauan yang beragam memberikan landscape wisata alam yang indah dan menarik untuk dinikmati.</p>


<p>Indonesia yang terletak di daerah tropis menjadi daya tarik tersendiri bagi wisatawan asing. Ditambah dengan kepulauan yang beragam, memberikan daya tarik tersendiri bagi para penyelam, peselancar, dan penikmat wisata laut.</p>


<p>Beberapa tempat wisata di Indonesia yang populer seperti Bali, Lombok, Raja Ampat, dan lain sebagainya telah menjadi ikon wisata dan menjadi destinasi liburan populer dari wisatawan mancanegara maupun lokal.</p>


<p>Kami mengumpulkan informasi tempat wisata di Indonesia yang terkenal, terindah, yang mendunia, ataupun yang masih jarang dikunjungi namun memiliki keindahan yang luar biasa beserta keterangannya.</p>
<style>

   img {
     width: 200px;
     height: 200px;
     border: 4px solid #575D63;
     padding: 10px;
   }
</style>
<img class="gambar1" src="1.jpg"><img class="gambar2" src="2.jpg">
 <img class="gambar3" src="3.jpg"><img class="gambar4" src="4.jpg">
 <img class="gambar5" src="5.jpg"><img class="gambar6" src="6.jpg">
 <img class="gambar7" src="7.jpg"><img class="gambar8" src="8.jpg">

	<?php 
	if(isset($_GET['page'])){
		$page = $_GET['page'];
 
		switch ($page) {
			case 'home':
				include "halaman/home.php";
				break;
			case 'tentang':
				include "halaman/tentang.php";
				break;
			case 'tutorial':
				include "halaman/tutorial.php";
				break;			
			default:
				echo "<center><h3>Maaf. Halaman tidak di temukan !</h3></center>";
				break;
		}
	}else{
		include "halaman/home.php";
	}
 
	 ?>
 
	</div>
</div>
</body>
</html>