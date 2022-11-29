<?php

$koneksi = mysqli_connect('localhost','root','','company_db');

$id = $_GET ['id'];

$query = "DELETE FROM tbl_kategori WHERE id='$id'";
$hasil = mysqli_query($koneksi, $query);

if ($hasil) {
    echo "<script>
    alert('Hapus data berhasil!');
    window.location='view_contact.php';
    </script>";

} else {
    echo "<script>
    alert('Hapus data gagal!');
    window.location='view_contact.php';
    </script>";
}
