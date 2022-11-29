<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="1">
        <thead>
            <tr>
                <th>no</th>
                <th>nama</th>
                <th>email</th>
                <th>phone</th>
                <th>pesan</th>
                <th>action</th>
            </tr>
        </thead>
        <tbody>
            <?php
            include 'koneksi.php';
            $no = 1;
            $query = "SELECT * FROM tbl_kategori";
            $hasil = mysqli_query($koneksi, $query);
            while ($data = mysqli_fetch_array($hasil)) {
                ?> 
            <tr>
                    <td><?=  $no; ?></td>
                    <td><?=  $data['nama']; ?></td>
                    <td><?=  $data['email']; ?></td>
                    <td><?=  $data['phone']; ?></td>
                    <td><?=  $data['pesan']; ?></td>

                    <td>
                        <a href="form_update.php?id=<?= $data['id']; ?>">Edit</a>
                        <a href="act_delete.php?id=<?= $data['id']; ?>">hapus</a>
                    </td>
            </tr>
            <?php $no++;
            } ?>
            </tbody>
        </table>
</body>
</html>