<!DOCTYPE html>
<html>
<head>
	<title>Program PHP Sederhana</title>
</head>
<body>
	<h1>Program PHP Sederhana</h1>
	<form method="post">
		<label for="nama">Nama:</label>
		<input type="text" id="nama" name="nama" required><br><br>
		<label for="tgl_lahir">Tanggal Lahir:</label>
		<input type="date" id="tgl_lahir" name="tgl_lahir" required><br><br>
		<label for="alamat">Alamat:</label>
		<textarea id="alamat" name="alamat" rows="3" required></textarea><br><br>
		<label for="pekerjaan">Pekerjaan:</label>
		<select id="pekerjaan" name="pekerjaan" required>
			<option value="">Pilih Pekerjaan:</option>
			<option value="manager">Manager (Gaji Rp. 10.000.000,-)</option>
			<option value="staff">Staff (Gaji Rp. 5.000.000,-)</option>
			<option value="admin">Admin (Gaji Rp. 3.000.000,-)</option>
		</select><br><br>
		<input type="submit" value="Hitung Umur dan Gaji">
	</form>
	<br>
	<?php
		if(isset($_POST['nama']) && isset($_POST['tgl_lahir']) && isset($_POST['alamat']) && isset($_POST['pekerjaan'])){
			$nama = $_POST['nama'];
			$tgl_lahir = $_POST['tgl_lahir'];
			$alamat = $_POST['alamat'];
			$pekerjaan = $_POST['pekerjaan'];
			$umur = date_diff(date_create($tgl_lahir), date_create('today'))->y;
			switch ($pekerjaan) {
				case 'manager':
					$gaji = 10000000;
					break;
				case 'staff':
					$gaji = 5000000;
					break;
				case 'admin':
					$gaji = 3000000;
					break;
			}
			echo "<p>Halo, $nama! Umur kamu adalah $umur tahun.</p>";
			echo "<p>Alamat kamu adalah $alamat.</p>";
			echo "<p>Pekerjaan kamu adalah $pekerjaan dan gaji kamu sebesar Rp. " . number_format($gaji,0,',','.') . ",-</p>";
		}
	?>
</body>
</html>
