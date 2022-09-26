<?php
require 'function.php';

$buku = query("SELECT * FROM buku");

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>BOOK</title>
</head>

<body>
  <div class="container">
    <h1>Book List</h1>

    <a href="tambah.php">Add Book</a>
    <br><br>

    <form action="" method="POST">
      <input type="text" name="keyword" size="50" placeholder="enter search keyword.." autocomplete="off" autofocus>
      <button type="submit" name="cari">Search!</button>
    </form>
    <br><br>


    <table border="1" cellpadding="10" cellspacing="0">

      <tr>
        <th>No</th>
        <th>Book</th>
        <th>Writer</th>
        <th>Publisher</th>
        <th>Image</th>
        <th>Action</th>
      </tr>


      <?php if (empty($buku)) : ?>
        <tr>
          <td colspan="7">
            <p style="color: red; font-style:italic;"><B> Book Data Not Found! </B></p>
          </td>
        </tr>
      <?php endif; ?>

      <?php $i = 1; ?>
      <?php foreach ($buku as $row) : ?>
        <tr>
          <td><?= $i; ?></td>
          <td><?= $row["nama"]; ?></td>
          <td><?= $row["penulis"]; ?></td>
          <td><?= $row["penerbit"]; ?></td>
          <td><img src="assets/img/<?php echo $row["gambar"]; ?>" width="100"></td>
          <td>
            <a href="ubah.php?id_buku=<?= $row['id']; ?>">Change</a> |
            <a href="hapus.php?id_buku=<?= $row['id']; ?>" onclick="return confirm('Are You Sure?');">Delete</a>
          </td>
        </tr>
        <?php $i++; ?>
      <?php endforeach; ?>
    </table>
  </div>



</body>

</html>