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
<div style="background-color: rgba(25,0,0,0.5);background-size: 200">

  <table align="center" width="50%" style="color: white ;" >

  <form action="simpan.php" method="post">
     <h1 style="color:  white">BOOKING</h1>
     <h4 align="center" style="color: white">Form Wajib Diisi dengan Lengkap : </h4>

      <tr>
        <td align="left">NAMA </td>
        <td>:</td>
        <td><input type="text" name="nama" placeholder="Nama Anda" required=""></td>
      </tr>
       <tr>
        <td align="left">NOMOR KTP</td>
        <td>:  </td>
        <td><input type="text" name="ktp" placeholder="Nomor  KTP" required=""></td>
       </tr>   
      <tr>
        <td align="left">NOMOR TELEPON</td>
        <td>:</td>
        <td><input type="text" name="hp" placeholder="Nomor Telepon" required=""></td>
      </tr>
      <tr>
        <td align="left">ALAMAT</td>
        <td>:</td>
        <td><textarea name="alamat" rows="3" cols="22" placeholder="Alamat....." required=""></textarea>
      </td>
      </tr>
      <tr>
        <td align="left">EMAIL</td>
        <td>:</td>
        <td><input type="email" placeholder="E-mail" name="email" required="">
        </td>
      </tr>
      <tr>
        <td align="left">JENIS MOBL & HARGA </td>
 
          <td>:</td>
          <td>
          <select name="mobil" required="">
            <option value="pilih">Pilih</option>
            <option  value="avanza">Avanza - 1 Juta/hari</option>
            <option  value="kijang">Kijang inova - 2 Juta/hari </option>
            <option  value="alphard">Alphard - 3 Juta/hari</option>
            <option  value="terios">Terios - 4 Juta/hari</option>
            <option  value="terios">Lambhorgini - 8 Juta/hari</option>
            </select>
          </td>
      </tr>
      <tr>
        <td align="left">DISEWA PADA TANGGAL </td>
                <td>:</td>
                <td><input type="date" name="tanggal" value="tanggal" required="">
                </td>
      </tr>
      
      
      <tr>
        <td align="left">JUMLAH HARI PEMINJAMAN</td>
        <td>:</td>
        <td><input type="number" name="hari" placeholder="Jumlah Hari" required="">
        </td>
      </tr>
      <tr>
        <td align="left">JUMLAH JAM PEMINJAMAN</td>
        <td>:</td>
        <td><input type="number" name="jam" placeholder="Jumlah Jam" required=""></td>
        
      </tr>
      <tr>
       
        
      </tr>
      <tr  >
          <td></td>
           <td></td>
          <td ><br>       
            <!-- <input class="btn btn-primary" type="submit" name="simpan" value="simpan"> -->
            <button class="btn btn-primary" style="margin-bottom: 20px;width: 150px;" name="simpan" value="simpan">SEWA</button>
          </td>
      </tr>

      
    
  </form>
  </table>
</div>


    
    
  

    <!-- batas bawah -->
   
  </div>
</div>


<!-- footer atas-->
<div style="background-color: #e3e5e8;margin-top: 550px"  >
  <div class="card-header " ><h3 >More Info</h3></div>
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
         <td>ikuti kami di Web,Instagram, dan Facebook</td>
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