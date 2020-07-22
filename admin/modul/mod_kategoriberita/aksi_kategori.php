<?php
session_start();
if (empty($_SESSION['username']) and empty($_SESSION['passuser']) and empty($_SESSION['leveluser'])) {
  echo "<link href='style.css' rel='stylesheet' type='text/css'>
 <center>Untuk mengakses modul, Anda harus login <br>";
  echo "<a href=../../index.php><b>LOGIN</b></a></center>";
} else {
  include "../../configurasi/koneksi.php";
  include "../../configurasi/fungsi_seo.php";

  $module = $_GET[module];
  $act = $_GET[act];

  // Hapus Kategori
  if ($module == 'kategoriberita' and $act == 'hapus') {
    mysql_query("DELETE FROM kategori_berita WHERE id_kategori='$_GET[id]'");
    header('location:../../media_admin.php?module=' . $module);
  }

  // Input kategori
  elseif ($module == 'kategoriberita' and $act == 'input') {
    $katberita_seo = seo_title($_POST['nama_kat']);

    mysql_query("INSERT INTO kategori_berita(nama_kat,katberita_seo) VALUES('$_POST[nama_kat]','$katberita_seo')");
    header('location:../../media_admin.php?module=' . $module);
  }

  // Update kategori
  elseif ($module == 'kategoriberita' and $act == 'update') {
    $katberita_seo = seo_title($_POST['nama_kat']);

    mysql_query("UPDATE kategori_berita SET nama_kat = '$_POST[nama_kat]', katberita_seo='$katberita_seo' WHERE id_kategori = '$_POST[id]'");
    header('location:../../media_admin.php?module=' . $module);
  }
}
