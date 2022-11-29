<?php 
        // menghubungkan koneksi ke database
        $koneksi = mysqli_connect('localhost','root','','company_db');

        $id = $_GET['id'];
        $query = "SELECT * FROM tbl_kategori WHERE id='$id' ";
        $hasil = mysqli_query($koneksi, $query);
        $data1 = mysqli_fetch_array($hasil);
        ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Contact</title>
    
<body>
    <form action="act_update.php" method="post" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?= $data1 ['id']; ?>">
        <label>Nama :</label>
        <input type="text" name="nama" value="<?= $data1 ['nama']; ?>">
        <br><br>
        <label>Email :</label>
        <input type="text" name="email" value="<?= $data1 ['email']; ?>">
        <br><br>
        <label>Phone Number :</label>
        <input type="text" name="phone" value="<?= $data1 ['phone']; ?>">
        <br><br>
        <label>Message :</label> <br>
        <textarea name="pesan" id="pesan" cols="30" rows="10" ><?= $data1['pesan'] ?></textarea>
        <br><br>
        <button type="submit">SEND</button>
    </form>
</body>
</html>