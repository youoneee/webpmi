<?php
// ============= Stok Darah

include 'koneksi.php';

$query = "select wb as WBA,\n" .
    "(select wb from stokdarah where golda='B') as WBB,\n" .
    "(select wb from stokdarah where golda='O') as WBO,\n" .
    "(select wb from stokdarah where golda='AB') as WBAB,\n" .
    "(select prc from stokdarah where golda='A') as PRA,\n" .
    "(select prc from stokdarah where golda='B') as PRB,\n" .
    "(select prc from stokdarah where golda='O') as PRO,\n" .
    "(select prc from stokdarah where golda='AB') as PRAB,\n" .
    "(select tc from stokdarah where golda='A') as TCA,\n" .
    "(select tc from stokdarah where golda='B') as TCB,\n" .
    "(select tc from stokdarah where golda='O') as TCO,\n" .
    "(select tc from stokdarah where golda='AB') as TCAB,\n" .
    "(select ffp from stokdarah where golda='A') as FFA,\n" .
    "(select ffp from stokdarah where golda='B') as FFB,\n" .
    "(select ffp from stokdarah where golda='O') as FFO,\n" .
    "(select ffp from stokdarah where golda='AB') as FFAB\n" .
    "from stokdarah where golda='A'";
$res = mysqli_query($conn, $query);
$row = mysqli_fetch_array($res);
$JUMA = $row['WBA'] + $row['PRA'] + $row['TCA'] + $row['FFA'];
$JUMB = $row['WBB'] + $row['PRB'] + $row['TCB'] + $row['FFB'];
$JUMO = $row['WBO'] + $row['PRO'] + $row['TCO'] + $row['FFO'];
$JUMAB = $row['WBAB'] + $row['PRAB'] + $row['TCAB'] + $row['FFAB'];


// ======================================== Berita           
$inf = "SELECT
            berita.id_berita,
            kategori_berita.nama_kat,
            berita.nama_berita,
            berita.nama_beritaseo,
            berita.deskripsi,
            DATE_FORMAT(tgl_masuk,'%d %M %Y') AS tgl_masuk,
            berita.gambar,
            berita.pembuat,
            berita.komentar
            FROM
            berita
            INNER JOIN kategori_berita ON berita.id_kategori = kategori_berita.id_kategori
            ORDER BY tgl_masuk DESC ";


$info = mysqli_query($conn, $inf);
$infoa = mysqli_fetch_array($info);
