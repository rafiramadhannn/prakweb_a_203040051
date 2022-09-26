<?php
session_start();

require 'function.php';

if (isset($_POST['submit'])) {
    if (tambah($_POST) > 0) {
        echo "<script>
                alert('Added Succsessfully!');
                document.location.href = 'admin.php';
            </script>";
    } else {
        echo "<script>
                alert('Failed!');
                document.location.href = 'admin.php';
            </script>";
    }
}
?>


<h3>Add Book</h3>
<form action="" method="post" enctype="multipart/form-data">
    <ul>
        <li>
            <label for="nama">Book :</label><br>
            <input type="text" name="nama" id="nama" required><br><br>
        </li>
        <li>
            <label for="penulis">Writer :</label><br>
            <input type="text" name="penulis" id="penulis" required><br><br>
        </li>
        <li>
            <label for="penerbit">Publisher :</label><br>
            <input type="text" name="penerbit" id="penerbit" required><br><br>
        </li>
        <li>
            <label for="gambar">Image :</label><br>
            <input type="file" name="gambar" id="gambar" required><br><br>
        </li>
        <button type="submit" name="submit">ADD</button>
        <button type="submit">
            <a href="admin.php" style="text-decoration: none; color: black;">Back</a>
        </button>
    </ul>
</form>