<?php
    include('koneksi.php');
    $edit = mysqli_query($koneksi, "SELECT * FROM tamu WHERE id=$_GET[id]");
    $data = mysqli_fetch_array($edit);
?>
<h2>Ubah data buku tamu</h2>
<form method="post" action="">
<table width="100%" border="0">
<tr>
    <td>Nama</td>
    <td><input type="text" name="nama" value="<?php echo $data['nama']; ?>"></td>
</tr>
<tr>

<tr>
    <td>Email</td>
    <td><input type="text" name="email" value="<?php echo $data['email']; ?>"></td>
</tr>
<tr>

<tr>
    <td>Komentar</td>
    <td><textarea name="komentar" cols="50" rows="5"><?php echo $data['komentar']; ?></textarea></td>
</tr>
<tr>

<tr>
    <td>&nbsp;</td>
    <td>
        <input type="submit" name="submit" value="Update" />
        <input type="reset" name="reset" value="Reset">
    </td>
</tr>
</table>
</form>

<?php
if(isset($_POST['submit'])){
    $update=mysqli_query($koneksi, "UPDATE tamu SET nama='$_POST[nama]', email='$_POST[email]', komentar='$_POST[komentar]' WHERE id=$_GET[id]");
    if($update){
        header ("Location: list.php");
    }
    else{
        echo "edit data gagal";
    }
}  
?>
