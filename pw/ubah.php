<?php
session_start();

require 'function.php';

$id = $_GET["id"];
$book = query("SELECT * FROM buku WHERE id = $id")[0];

if (isset($_POST["submit"])) {
    if (ubah($_POST) > 0) {
        echo "<script>
                alert('Successfully Changed!');
                document.location.href = '../admin.php';
                </script>";
    } else {
        echo "failed!";
    }
}
?>


<h3>Changed</h3>
<form action="" method="post">
<input type="hidden" name="id" value="<?= $book['id']; ?>">
    <ul>
        <li>
            <label for="nama">Book :</label><br>
            <input type="text" name="nama" id="nama" required value="<?= $book['nama']; ?>"><br><br>
        </li>
        <li>
            <label for="penulis">Writer :</label><br>
            <input type="text" name="penulis" id="penulis" required value="<?= $book['penulis']; ?>"><br><br>
        </li>
        <li>
            <label for="rilis">Publisher :</label><br>
            <input type="text" name="penerbit" id="penerbit" required value="<?= $book['penerbit']; ?>"><br><br>
        </li>
        <li>
            <label for="gambar">Image :</label><br>
            <input type="text" name="img" id="img" required value="<?= $book['img']; ?>"><br><br>
        </li>
        <button type="submit" name="submit">Change</button>
        <button type="submit">
            <a href="admin.php" style="text-decoration: none; color: black;">Back</a>
        </button>
    </ul>
</form>