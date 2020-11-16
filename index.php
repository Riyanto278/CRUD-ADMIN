<?php
include 'koneksi.php';
$query = mysqli_query($koneksi,"SELECT * FROM tb_anggota");
/*while ($array = mysqli_fetch_array($query)) {
	echo $array['hp_anggota']."<br>";
}*/

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, intial-scale=1.0">
	<title>Dashboard Admin</title>
	<link rel="stylesheet" href="css/bootstrap.css">
</head>
<body>
	<div class="container">
	<br>
	<div class="row">
		<div class="col col-3"></div>
		<div class="col col-6">
			<h1 class="text-center">Dashboard</h1>
			<br>
		</div>
		<div class="col col-3"></div>	
	</div>
	<div class="row">
		<a href="TAMBAH.PHP" class="btn btn-success">Tambah Data</a>
		<table class="table table-bordered"
>		<thead>
			<tr>
				<th scope="col">no</th>
				<th scope="col">Nama</th>
				<th scope="col">Kelas</th>
				<th scope="col">no</th>
				<th scope="col">Aksi</th>
			</tr>
		</thead>
		<tbody>
			<?php
			$no=0;
			while ($array = mysqli_fetch_array($query)) {
				$no++;
				?>
				<tr>
					<th scope="row"><?php echo $no ?></th>
					<td><?php echo htmlspecialchars($array['nama'])?></td>
					<td><?php echo htmlspecialchars($array['kelas'])?></td>
					<td><?php echo htmlspecialchars($array['hp'])?></td>
					<td>
					<a href="edit.php?id=<?php echo $array['id']; ?>" class="btn btn-success">edit</a>
					<a href="delete.php?id=<?php echo $array['id']; ?>" class="btn btn-danger">Hapus</a>
				</td>
				</tr>
				<?php } ?>
		</tbody>
	</table>
</div>
	</div>
	<script src="js/bootstrap.js"></script>
</body>
</html>