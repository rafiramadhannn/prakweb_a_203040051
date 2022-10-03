<?php
session_start();

require 'function.php';

$id = $_GET["id"];
$book = query("SELECT * FROM buku WHERE id = $id")[0];

if (isset($_POST["submit"])) {
    if (ubah($_POST) > 0) {
        echo "<script>
                alert('Successfully Update!');
                document.location.href = '../admin.php';
                </script>";
    } else {
        echo "Failed!";
    }
}
?>


<<<<<<< HEAD
<h3>Ubah Data</h3>
=======
<h3>Change</h3>
>>>>>>> 9402c6e58f5250a008511948b8f4af153964d6d2
<form action="" method="post">
<input type="hidden" name="id" value="<?= $book['id']; ?>">
    <ul>
        <li>
            <label for="nama">Tittle :</label><br>
            <input type="text" name="nama" id="nama" required value="<?= $book['nama']; ?>"><br><br>
        </li>
        <li>
            <label for="img">Writer :</label><br>
            <input type="text" name="penulis" id="penulis" required value="<?= $book['penulis']; ?>"><br><br>
        </li>
        <li>
            <label for="img">Image :</label><br>
            <input type="text" name="gambar" id="gambar" required value="<?= $book['gambar']; ?>"><br><br>
        </li>
        <button type="submit" name="submit">Update</button>
        <button type="submit">
            <a href="index.php" style="text-decoration: none; color: black;">Back</a>
        </button>
    </ul>
</form>