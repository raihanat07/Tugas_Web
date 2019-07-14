<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="hore.css">
    <title>
      website Carrental Kelompok 2 </title>
  </head>

  <body     style="background-image:url(sky_car.jpg); background-size:cover; background-attachment: fixed;">

<div class="fixed-top" >
<nav class="navbar navbar-light" style="background-color: #56d0e2;">
  <div class="container">
  <a class="navbar-brand" href="#">Booking</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="  #navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false"            aria-label="Toggle navigation" style="background-color: #27b9dd">
          <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse " id="navbarNavAltMarkup" style="background-color: #27b9dd">
    <div class="navbar-nav ">
      <a class="btn btn-outline-dark" href="index.html" ><p align="left">home </p><span class="sr-only">(current)</span></a>
       <a class="btn btn-outline-dark" href="masuk.html" ><p align="left">masuk</p><span class="sr-only">(current)</span></a>
      <a class="btn btn-outline-dark" href="contact.html" ><p align="left">contact</p><span class="sr-only">(current)</span></a>
      <a class="btn btn-outline-dark" href="booking.php" ><p align="left">booking </p><span class="sr-only">(current)</span></a>
   
      
  </div>
</div>
</nav>
</div>

<div class="jumbotron jumbotron-fluid" align="center" style="height: 20px;" >
  
  <h1 class="display-4">Rental Mobil</h1><!-- batas atas -->
<div style="background-color: rgba(25,0,0,0.3);padding-bottom: 100px;padding-top: 40px">
<h1 style="color: white;" >DAFTAR PENYEWA MOBIL</h1>

<?php 
    include 'koneksi.php';
    ?>

    <form method="get">
      <label style="color: white">PILIH TANGGAL</label>
      <input type="date" name="tanggalsewa">
      <input type="submit" value="FILTER">
    </form>
 
    <br/> <br/>
 
    <table align="center"  border="3"  style="color:white;width:10px " class="   table-striped table-dark gray" >

  <tr class="bg-info">
  <td><ul> nama</ul></td>
  <td><ul> noktp</ul></td>
  <td><ul> notelp</ul></td>
  <td><ul> alamat</ul></td>
  <td><ul> email</ul></td>
  <td><ul> mobil</ul></td>
  <td><ul> tanggal sewa</ul></td>
  <td><ul> jumlah hari</ul></td>
  <td><ul> jumlah jam</ul></td>
  </tr>
      <?php 
      $no = 1;
 
      if(isset($_GET['tanggalsewa'])){
        $tgl = $_GET['tanggalsewa'];
        $sql = mysqli_query($koneksi,"select * from datacustomer where tanggalsewa='$tgl'");
      }else{
        $sql = mysqli_query($koneksi,"select * from datacustomer");
      }
      
      while($data = mysqli_fetch_array($sql)){
      ?>
      <tr>
        <td><?php echo $data['nama']; ?></td>
        <td><?php echo $data['noktp']; ?></ul></td>
        <td><?php echo $data['notelp']; ?></ul></td>
        <td><?php echo $data['alamat']; ?></ul></td>
        <td><?php echo $data['email']; ?></ul></td>
        <td><?php echo $data['mobilsewa']; ?></ul></td>
        <td><?php echo $data['tanggalsewa']; ?></td>
        <td><?php echo $data['jumlahhari']; ?></ul></td>
        <td><?php echo $data['jumlahjam']; ?></td>
        
      </tr>
      <?php 
      }
      ?>
    </table>



</div>

    
    
  

    <!-- batas bawah -->
   
  </div>
</div>


<!-- footer atas-->
<div style="background-color: #e3e5e8;margin-top: 800px"  >
  <div class="card-header " ><h3 >more info</h3></div>
  <div class="card-body " align="center">
    <p class="card-text">
      <table width="80%;" style="margin-top: 3%">
      <tr >
        <th> LOKASI </th>
        <th>TENTANG KAMI</th>
         <th>LAINNYA</th>
      </tr>
      <tr>
        <td>  Kampus 4 uad Jln. Ringroad Selatan, Tamanan, Bantul. Kota Yogyakarta,Daerah Istimewa Yogyakarta </td>
        <td>situs web rental mobil ,memiliki berbagai jenis mobil</td>
         <td>ikuti kami di web,istagram, dan facebook</td>
      </tr>
       </table>
    </p>
  </div>
<!-- footer bawah-->

<div class="card text-white bg-info mb-3" style="width: 100%">
    <div class="card-footer" ><h5  align="center" >&copy;Kelompok 2 Pemrograman WEB </h5 ></div>
  </div>
</div>




    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html> 