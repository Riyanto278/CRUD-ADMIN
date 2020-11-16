<?php
include 'koneksi.php';
if (isset($_GET['id'])) {
	$id = abs($_GET['id']);
	$query_delete = mysqli_query($koneksi, "DELETE FROM tb_anggota WHERE id='$id'");
	if ($query_delete) {
		echo "<script>alert('NJIR HAPUS DATA BERHASIL')</script>";
		echo "<script>window.location.href='index.php'</script>";

	}else {
		echo "<sript>alert('hapus data gagal')</script>";
	}
}
?>