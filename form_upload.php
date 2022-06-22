<!DOCTYPE html>
<html lang="id">

<head>
  <title>
   WEBKOM
  </title>
  <script type="text/javascript">
    window.Laravel = {
      "csrfToken": "NrtIwt5TI7Gj2USMFOHkxuOS1o7JufY5pWx2271V"
    }
  </script>
  <link rel="icon" href="image/31.png" type="image/gif" sizes="16x16">
	<link href="csa/style.css" rel="stylesheet" type="text/css">
</head>
<?php 


include('koneksi2.php');
if(isset($_POST['tombol']))
{
    $keterangan = $_POST['keterangan'];
        mysqli_query($koneksi, "insert into tb_gambar (keterangan) values ('$keterangan')");
        header('location:informasi.php');
    }

?>
<html>
    <head>
        <title>tambahkan infromasi</title>
    </head>
    <body>
        <form method="post" action="" enctype="multipart/form-data">
      
            <tr>
            <center>    <td><h2>Masukkan Informasi</h2></td>
                <textarea name="keterangan" cols="100" rows="10"></textarea>
            </tr>
            <>
            <tr>
                <td></td><br>
                <td><input type="submit" name="tombol"/></td>
                <button>
            <a href="informasi.php">Kembali</a>
        </button>
            </tr>
        </center>
     
        </form>
    </body>
</html>