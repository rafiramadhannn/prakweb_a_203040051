<?php
require 'function.php';

$buku = query("SELECT * FROM buku");


 if( isset($_POST["cari"]) ) {
  $buku = cari($_POST["keyword"]);
}

?>
<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>List Of Books</title>
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
        <link rel="stylesheet" href="css/style.css">
</head>

<body style="background-color: lightgrey">
    <!--Navbar-->
    <div class="navbar-fixed">
      <nav class="teal lighten-2">
            <div class="container">
            <div class="nav-wrapper">
                <a href="#!" class="brand-logo left">List Of Books</a>
                <a href="#" data-target="mobile-nav" class="sidenav-trigger"><i class="material-icons">menu</i></a>
                <ul class="right">
                </ul>
            </div>
        </div>
        </nav>
    </div>

    <div class="search">
        <div class="container">
            <form action="" method="POST">
                <input type="text" name="keyword" placeholder="Search" autocomplete="off" autofocus id="keyword">
                <input type="submit" name="cari" id="tombol-cari"></button>
            </form>
        </div>
    </div>

    <div class="container">
    <h3>List Of Books</h3>
    <div id="container">
    <table class="table center">
    <thead>
        <tr>
            <th scope="col">No</th>
            <th scope="col">Title</th>
            <th scope="col">Writer</th>
            <th scope="col">Image</th>
        </tr>
    </thead>
    <tbody>
        <?php $i = 1?>
        <?php foreach($buku as $book) : ?>
                <tr>
                    <th scope="row"><?=$i?></th>
                    <td><?= $book["nama"]?> </td>
                    <td><?= $book["penulis"]?> </td>
                    <td><img width="100px" src="assets/img/<?= $book["gambar"] ?>" alt="gambar"></td>
                    <td>
                    <a href="ubah.php?id=<?= $book['id']; ?>">Change</a> |
                    <a href="tambah.php">Add</a> |
                    <a href="hapus.php?id=<?= $book['id']; ?>" onclick="return confirm('Are You Sure?');">Delete</a>
                    </td>
                </tr>
        <?php
            $i++;
        endforeach;
        ?>
    </tbody>
    </table>
    </div>
    </div>


    
    <!--Footer-->    
    <footer class="teal lighten-2 white-text center">
        <p class="flow-text"><small>Copyright &copy; 2022 - Rafi Ramadhan</small></p>
    </footer>
    

    <script src="js/script.js"></script>
    <!--JavaScript at end of body for optimized loading-->
    <script type="text/javascript" src="js/materialize.min.js"></script>
    <script>
        const sidenav = document.querySelectorAll('.sidenav');
        M.Sidenav.init(sidenav);
    </script>
</body>
</html>