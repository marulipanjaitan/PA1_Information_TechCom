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

<body>
  <nav class="navbar navbar-default navbar-fixed-top">
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbarCollapse" aria-expanded="false">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="index.php">
        <img class="img" alt="logo" src="image/31.png"></a>
      </div>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="nav navbar-nav navbar-right">
        <ul class="nav navbar-nav navbar-right">
        <li><a class="hover-line " href="index.php">HOME</a></li>
				<li><a class="hover-line " href="informasi.php">INFORMASI</a></li>
				<li><a class="hover-line " href="kontak.php">KONTAK</a></li>
				<li><a class="hover-line " href="login.php">Logout</a></li>
        </ul>
      </div>
    </div>
  </nav>
  <div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-8">
  </header><br>
  
  <body>
       <button>
            <a href="form_upload.php">Tambahkan Informasi</a>
        </button>
    </body>

			   <article class="banner-content col-xs-12">
         <h2>Deskripsi Umum</h2> <p>Program Studi Teknik Komputer adalah salah satu program studi yang diselenggarakan Institut Teknologi Del yang terletak di daerah pedesaan Tobasa, yang membuka peluang bagi siswa berprestasi untuk mengenyam pendidikan dengan mutu yang tidak kalah dengan pendidikan bermutu bagus yang diselenggarakan di kota besar.</p>

<h2>D3 TEKNIK KOMPUTER IT DEL</h2> <p>Program Studi ini merupakan salah satu program studi tertua yang ada di IT Del. Sejak IT Del berdiri tahun 2001, program studi D3 Teknik Komputer sudah banyak peminatnya. Kaprodi jurusan ini adalah Eka Stephani Sinambela, SST., M.Sc.
Program Studi Teknik Komputer (Computer Enngineering) mempunyai sasaran utama untuk menyelenggarakan  proses pembelajaran yang dapat menumbuh kembangkan tenaga ahli yang berprilaku marTuhan, Marroha dan Marbisuk, yang mempunyai ciri-ciri utama beriman dan bertakwa kepada TuhanYang Maha Esa, bijak, ahli dan terampil dalam bidangnya, berwawasan luas, memiliki sifat kepemimpinan, kesadaran dan tanggung jawab social dan keterampilan yang tinggi, yang dapat dikomunikasikan dan diaplikasikan pada bidang kehidupan.
Fasilitas yang ada deprogram studi ini antara lain Lab. Pemrograman, Lab. Automation, Lab. Embedded System, Lab. Networking, Lab. Cisco Academik, Lab. Cloud Computing dan Lab. Sistem Digital.
Lulusan dari program studi D3 Teknik Kompter ini memiliki sangat banyak lapangan pekerjaan. Diantaranya dapat menempati posisi IT, Hardware Enginner and Web Developer, Network Administrator, Software Engineer, Network Security Specialist, Management Trainee, Embedded System Engineer dan lain-lain.
</p>
<h2>Visi dan Misi Program Studi Teknologi Komputer Program Diploma Tiga</h2> <p>Visi

Menjadikan Program Studi Teknologi Komputer Program Diploma Tiga sebagai batu loncatan menuju masa depan yang mengintegrasikan dunia pendidikan, penelitian dan pengabdian masyarakat di bidang Teknik Komputer dengan kebutuhan dunia usaha akan tenaga profesional Teknik Komputer yang mampu bersaing secara global.

Misi

Menyelenggarakan pengajaran yang mencetak dan membina Sumber Daya Manusia yang mampu bekerja pada industri teknik komputer yang mempunyai sikap pemimpin, penuh kreativitas, berdisiplin tinggi, dan mampu memberikan solusi di bidang teknik komputer dan membuat terobosan dalam dunia pendidikan dengan menciptakan lingkungan pendidikan yang sehat dengan dukungan tenaga pengajar yang ahli dan profesional.
Menyelenggarakan program penelitian yang menghasilkan produk unggul tepat guna untuk penerapan teknik komputer di berbagai bidang kehidupan masyarakat.
Menyelenggarakan pengabdian kepada masyarakat di bidang Teknik Komputer melalui berbagai program diseminasi teknologi terhadap masyarakat di berbagai bidang.
Menciptakan lingkungan civitas akademika dan unit pendukung yang kondusif.</p>
	
<?php 
include('koneksi2.php');
$query = mysqli_query($koneksi,"select * from tb_gambar");
?>
<html>
    <head>
        <title></title>
    </head>
    <body>
      
           
              
          
            <?php 
            $no = 1;
            while($row = mysqli_fetch_array($query))
            {
                ?>
              <?php echo $no++; ?></td>
                    <td><?php echo $row['keterangan']; ?></td>
                    
            
                <?php
            }
            ?>
       
    </body>
</html>
				  
         </article>

          

         </div>
         </div>
         
         <footer class="main-footer">
          
	<div class="container-fluid footer-bottom">	
		<div class="col-xs-12 col-sm-6 bottom-left">
			<br>
				<h6>by:kelompok_16</h6</a>
			<br>			
		</div>
	</footer>
	<script type="text/javascript" src="js/app.js"></script>
</html>