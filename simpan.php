<?php
if(isset($_POST['simpan'])){
include 'koneksi.php';

$nama = $_POST['nama'];
$noktp = $_POST['ktp'];
$notelp = $_POST['hp'];
$alamat = $_POST['alamat'];
$email = $_POST['email'];
$mobilsewa = $_POST['mobil'];
$tanggalsewa = $_POST['tanggal'];
$jumlahhari = $_POST['hari'];
$jumlahjam = $_POST['jam'];
$bulan = $_POST['bulan'];

$query = "INSERT INTO datacustomer VALUES('$nama','$noktp','$notelp','$alamat','$email','$mobilsewa','$tanggalsewa','$jumlahhari','$jumlahjam','$bulan')";

$sql = mysqli_query($koneksi,$query);
}
	
?>

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
  <div class="container text-center" >
  <h1 class="display-4">Rental Mobil</h1><!-- batas atas -->
<div style="color:white;background-color: rgba(25,0,0,0.5);background-size: 200;padding: 100px;" >
	<table align="center">
		
		<tr>
			<td><H1 >TERIMAKASIH TELAH MEMPERCAYAI KAMI</H1></td>
		</tr>
			<tr>
			<td><H1 ></H1></td>
		</tr>
		<tr>
			<td><h4>tekan tombol di bawah untuk kembali ke halaman utama</h4></td>
		</tr>
		<tr>
			<td colspan="2"> <p style= width: 30%" ><a  href="masuk.html" class="btn btn-primary btn-lg btn-block" >kembali ke halaman utama </a></p></td>
		</tr>
	</table>
</div>

    
    
  

    <!-- batas bawah -->
   
  </div>
</div>


<!-- footer atas-->
<div style="background-color: #e3e5e8;margin-top: 500px"  >
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