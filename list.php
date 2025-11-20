<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>data tabel</title>
</head>

<body>
    <table border="1" cellpadding="10" cellspacing="0" style="text-align: center;">
        <thead>
            <tr>
                <th>No</th>
                <th>ID</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Komentar</th>
                <th>Aksi</th>
            </tr>
        </thead>

        <?php
        include('koneksi.php');

        $tampil = mysqli_query($koneksi, 'SELECT * FROM tamu');
        $no = 1;
        while ($data = mysqli_fetch_array($tampil)) {
        ?>

            <tbody>
                <tr>
                    <td><?php echo $no ?></td>
                    <td><?php echo $data["id"] ?></td>
                    <td><?php echo $data['nama']; ?></td>
                    <td><?php echo $data['email']; ?></td>
                    <td><?php echo $data['komentar']; ?></td>
                    <td><button type="Edit" name="edit" style="background-color: #00d3bb; margin-right: 12px; width: 50px; border-radius: 6px;"><a href="update.php?id=<?php echo $data['id'] ?>" style="text-decoration: none; color:#1d232a;">Edit</a></button>
                        |<button type="Delete" name="delete" style="background-color: #00d3bb; margin-left: 12px; border-radius: 6px;"><a href="hapus.php?id=<?php echo $data['id'] ?>" style="text-decoration: none; color:#1d232a;">Hapus</a></button></td>
                </tr>
            </tbody>
        <?php
            $no++;
        }
        ?>
    </table>
        <a href="proses.php">Input data kembali</a>
</body>

</html>