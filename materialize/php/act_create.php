<?php
include 'koneksi.php';

$nama = $_GET['nama'];
$email = $_GET['email'];
$phone = $_GET['phone'];
$pesan = $_GET['pesan'];

$query = "INSERT INTO tbl_kategori(nama,email,phone,pesan) VALUES('$nama','$email','$phone','$pesan')";
$hasil = mysqli_query($koneksi, $query);


if ($hasil) {
    echo "<script>
    alert('simpan data berhasil');
    window.location='view_contact.php';
    </script>";
} else {
    echo "<script>
    alert('simpan data gagal!');
    window.location='index.php';
    </script>";
}
?>