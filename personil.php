<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
	<link rel="shortcut icon" href="img/icon.svg">
	<title>Project</title>
</head>
<body>
	<header class="top-head">
		<div class="container-manual">
			<div class="medsos">
				<ul>
					<li><a class="icon" href="#"><i class="fab fa-facebook"></i></a></li>
					<li><a class="icon" href="#"><i class="fab fa-instagram"></i></a></li>
					<li><a class="icon" href="#"><i class="fab fa-youtube"></i></a></li>
					<li><a class="bnsp" href="#">BNSP-LSP-1565-IDa</a></li>
				</ul>
			</div>
		</div>	
	</header>
	<div class="navbar">
		<div class="container-manual">
			<label>LOGO</label>
			<ul>
				<li><a href="index.html">Home</a></li>
				<li><a href="#">Profil</a>
					<ul class="dropdown">
						<li><a href="#">lembaga sertifikasi</a></li>
						<li><a href="visi-misi.html">visi & misi</a></li>
					</ul>
				</li>
				<li><a href="#">Sertifikasi</a>
					<ul class="dropdown">		
						<li><a href="skema-sertifikasi.php">skema sertifikasi</a></li>
						<li><a href="#">unit kompetensi</a></li>
						
					</ul>
				</li>
				<li><a href="#">Media</a></li>
				<li><a href="registrasi.html">Registrasi</a></li>
			</ul>
		</div>
	</div>
	<div class="container-manual">
		<section class="konten">
			<div class="box1">
				<div class="kiri1">
				<ul>
					<li><a href="index.html">LSP BPPTIK</a></li>
					<li><a href="visi-misi.html">Visi dan Misi LSP BPPTIK</a></li>
					<li><a href="struktur-organisasi.html">Struktur Oganisasi</a></li>
					<li><a href="ruang-lingkup.html">Ruang Lingkup LSP BPPTIK</a></li>
					<li><a href="skema-sertifikasi.php">Skema Sertifikasi</a></li>
				</ul>
				</div>
				<div class="kiri2">
					<h3>Location</h3>
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d22437.777685428548!2d106.93066749375949!3d-6.2007366294890645!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e698b7bd6aac3af%3A0xe2c873238ab0cb69!2sPulo%20Gebang%2C%20Kec.%20Cakung%2C%20Kota%20Jakarta%20Timur%2C%20Daerah%20Khusus%20Ibukota%20Jakarta!5e0!3m2!1sid!2sid!4v1628096373770!5m2!1sid!2sid" width="280px" height="480px" allowfullscreen="" loading="lazy"></iframe>
				</div>
			</div>
			<div class="box2">
				<h1 class="judul">PERSONIL LSP BPPTIK</h1>
				<h5 style="font-weight: bold;">Unsur Pengarah</h5>
				<?php
					$namalengkappengarah = array("DR. Nusirwan, S.Ag., M.Si.", "Luhur Pidekso Arif, S.T., M.Eng", "Hamdani Pratama", "Hary Yudhanto, S.Kom", "Anik Hastutiningsih, S.E");//membuat array yg berisi nama lengkap pengarah
					$jabatan = array("Ketua Dewan Pengarah", "Anggota Dewan Pengarah", "Anggota Dewan Pengarah", "Anggota Dewan Pengarah", "Anggota Dewan Pengarah");//membuat array yg berisi jabatan
					$totalarray = count($jabatan);//membuat variabel yg isinya angka jumlah indeks variabel jabatan

					echo "<table>";//membuat tabel
					echo "<tr>";//membuat baris paling atas tabel
					echo "<th>Nama Lengkap</th>";//membuat dan mengisi kolom Nama Lengkap dengan keterangan font tebal
					echo "<th>Jabatan</th>";//membuat dan mengisi kolom jabatan keterangan font tebal
					echo "</tr>";

					for ($i=0;$i<$totalarray;$i++) {//membuat perulangan sebanyak jumlah totalarray
						echo "<tr>";//membuat baris baru
						echo "<td>$namalengkappengarah[$i]</td>";//membuat dan mengisi kolom nama lengkap dengan isi 
						echo "<td>$jabatan[$i]</td>";//membuat dan mengisi kolom jabatan dengan isi 
						echo "</tr>";
					}

					echo "</table>";
				?>
				<h5 style="font-weight: bold;">Unsur Pelaksana</h5>
				<?php //untuk keterangan script php yg tabel kedua, sama seperti tabel pertama, hanya mengganti variabel dan isi 
					$namalengkappelaksana = array("Erni Rachmawati Tholib, S.Pd., M.M", "Firman Ahmad Nur Fauzi, S.Kom", "Hapid Abdillah, S.Kom", "Katrina Permassari, S.Pd");
					$jabatanpelaksana = array("Direktur", "Manajer Sertifikasi", "Manajer Mutu", "Manajer Adminstrasi");
					$totalarray2 = count($jabatanpelaksana);

					echo "<table>";
					echo "<tr>";
					echo "<th>Nama Lengkap</th>";
					echo "<th>Jabatan</th>";
					echo "</tr>";

					for ($j=0;$j<$totalarray2;$j++) {
						echo "<tr>";
						echo "<td>$namalengkappelaksana[$j]</td>";
						echo "<td>$jabatanpelaksana[$j]</td>";
						echo "</tr>";
					}

					echo "</table>";
				?>
			</div>
	</section>
	</div>
	<footer class="footer">
		<div class="container-manual">
			<div class="baris-footer">
				<div class="kolom-footer">
					<h4><a href="#">Mitra LSP</a></h4>
					<ul>
						<li><a href="#">LSP MIGAS</a></li>
						<li><a href="#">LSP Manajemen Resiko</a></li>
						<li><a href="#">LSP STP Bandung</a></li>
						<li><a href="#">LSP Kimia Industri</a></li>
						<li><a href="#">Indonesia Kompeten</a></li>
					</ul>
				</div>
				<div class="kolom-footer">
					<h4><a href="#">Link Popular</a></h4>
					<ul>
						<li><a href="#">Training Online</a></li>
						<li><a href="#">Pelatihan Asesor BNSP</a></li>
						<li><a href="#">Sertifikasi Digital Marketing</a></li>
						<li><a href="#">Registrasi Sertifikasi</a></li>
						<li><a href="#">Pemegang Sertifikat</a></li>
					</ul>
				</div>
				<div class="kolom-footer">
					<h4><a href="#">Kontak</a></h4>
						<ul>
							<li>
								<i class="fas fa-map-marked-alt"></i>
								<a href="#">Jakarta : Pulogebang Indah Blok J11 No 34, Jakarta Timur, 021-22859837</a>
							</li>
							<li>
								<i class="fas fa-map-marked-alt"></i>
								<a href="#">Yogyakarta : Jalan Demangan Baru No. 8, Catur Tunggal, Depok, Demangan Baru, DIY</a>
							</li>
							<li>
								<i class="fas fa-map-marked-alt"></i>
								<a href="#">Bogor : Pusat Inovasi LIPI Tenant A3, Cibinong, 0817 401157g</a>
							</li>
							<li>
								<i class="fas fa-envelope-open-text"></i>
								<a href="#">info@lspdigital.id</a>
							</li>
							<li>
								<i class="fab fa-whatsapp"></i>
								<a href="#">085329489247</a>
							</li>
							<li>
								<i class="fab fa-whatsapp"></i>
								<a href="#">082122064698</a>
							</li>
						</ul>
				</div>
			</div>
		</div>
	</footer>
</body>
</html>