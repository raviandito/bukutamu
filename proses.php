<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
</head>

<body style="margin: 30px;">

    <form method="POST">

        <div class="mb-3">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" class="form-control" name="nama" style="width: 50%;" required>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email address</label>
            <input type="email" class="form-control" aria-describedby="emailHelp" name="email" style="width: 50%;" required>
            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>
        <div class="mb-3">
            <label for="komentar" class="form-label">Komentar</label>
            <input type="textarea" class="form-control" name="komentar" style="width: 50%;" required>
        </div>

        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
    </form>

    <?php
    include('koneksi.php');

    if (isset($_POST['submit'])) {
        $nama = $_POST['nama'];
        $email = $_POST['email'];
        $komentar = $_POST['komentar'];

        $sql = mysqli_query($koneksi, "INSERT INTO tamu(nama,email,komentar)
    VALUES ('$nama', '$email', '$komentar')");

        if ($sql) {
            echo "data berhasil di input ";

            echo "<a href=list.php>tampilkan data</a>";
        } else {
            echo "input buku tamu gagal";
        }
    }
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>

</html>
</body>

</html>