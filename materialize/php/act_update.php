<?php
include 'koneksi.php';


$id = $_GET['id'];
$nama = $_GET['nama'];
$email = $_GET['email'];
$phone = $_GET['phone'];
$pesan = $_GET['pesan'];


$query = "UPDATE tbl_kategori SET nama ='$nama',email ='$email',phone='$phone',pesan='$pesan' WHERE id='$id'";
mysqli_query($koneksi, $query);
echo "<script>
     alert('Ubah data berhasil!');
     window.location='view_contact.php';
     </script>";