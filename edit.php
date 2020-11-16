<?php
include 'koneksi.php';
// var_dump($_GET);
$id = abs($_GET['id']);
$query_anggota = mysqli_query($koneksi, "SELECT * FROM tb_anggota WHERE id= '$id'");
$array_anggota = mysqli_fetch_array($query_anggota);
// var_dump($array_anggota);
if (isset($_POST['nama'])) {
	$nama = $_POST['nama'];
	$kelas = $_POST['kelas'];
	$hp = $_POST['hp'];
	$query_update = mysqli_query($koneksi,"UPDATE tb_anggota SET nama='$nama', kelas= '$kelas', hp= '$hp' WHERE id='$id' ");
if ($query_update) {
	echo "<script>alert('edit berhasil')</script>";
	echo "<script>window.location.href='index.php'</script>";
}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<title>edit data anggota</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col col-1"></div>
			<div class="col col-10">
			<h1 class="text-center">Edit Data Anggota</h1>
			<br>
			<form action="" method="POST">
				<div class="form-group">
					<label for="">Nama lengkap</label>
					<input type="text" class="form-control" name="nama" value="<?php echo htmlspecialchars($array_anggota['nama']) ?>">
				</div>
				<div class="form-group">
					<label for="">Kelas</label>
					<select name="kelas" class="form-control">	
					<option value="X" class="form-control" <?php if ($array_anggota['kelas']=="X") {
						echo "selected";
					}?>>X</option>
						<option value="XI" class="form-control" <?php if ($array_anggota['kelas']=="XI") {
						echo "selected";
					}?>>XI</option>
						<option value="XII" class="form-control" <?php if ($array_anggota['kelas']=="XII") {
						echo "selected";
					}?>>XII</option>
					</select>
				</div>
				<div class="form-group">
					<label for="">Hp Anggota</label>
					<input type="number" class="form-control" name="hp" value="<php <?php echo htmlspecialchars($array_anggota['hp']);?>">
				</div>
				<button class="btn btn-success">Simpan</button>
				<a class="btn btn-warning" href="index.php">kembali</a>
			</form>
		</div>
		<div class="col col-1"> </div>
	</div>
	</div>
	<script type="js/bootstrap.js"></script>
</body>
</html>