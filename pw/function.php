<?php
// koneksi ke database
function koneksi()
{
    return mysqli_connect('localhost', 'root', '', 'prakweb_a_203040051_pw');
}

function query($sql) {
    $conn = koneksi();
    $result = mysqli_query($conn, "$sql");
    $rows = [];
    while ( $row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

function tambah($data)
{

    $conn = koneksi();

    $nama = htmlspecialchars($data['nama']);
    $penulis = htmlspecialchars($data['penulis']);
    $gambar = htmlspecialchars($data['gambar']);

    $query = "INSERT INTO
                buku
            VALUES
            (null, '$nama', '$penulis', '$gambar');
            ";
    mysqli_query($conn, $query) or die(mysqli_error($conn));
    return mysqli_affected_rows($conn);
}


function hapus($id)
{
    $conn = koneksi();
    mysqli_query($conn, "DELETE FROM buku WHERE id = $id") or die(mysqli_error($conn));
    return mysqli_affected_rows($conn);
}


function ubah($data)
{
    $conn = koneksi();

    $id = $data['id'];
    $nama = htmlspecialchars($data['nama']);
    $penulis = htmlspecialchars($data['penulis']);
    $gambar = htmlspecialchars($data['gambar']);

    $query = "UPDATE buku SET
              nama = '$nama',
              penulis = '$penulis',
              gambar = '$gambar',
            WHERE id = $id";
    mysqli_query($conn, $query) or die(mysqli_error($conn));
    return mysqli_affected_rows($conn);
}


function cari($keyword)
{

    $conn = koneksi();

    $query = "SELECT * FROM buku
    WHERE 
    nama LIKE '%$keyword%' OR
    penulis LIKE '%$keyword%' OR
    gambar LIKE '%$keyword%'
    ";


    $result = mysqli_query($conn, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }

    return $rows;
}