<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <title>PENGGAJIHAN</title>
  </head>
  <body>
    
  <!-- NAVBAR-->
<nav class="navbar navbar-expand-lg navbar-light bg-info">
  <a class="navbar-brand" href="#"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="uts.php"><span class="sr-only">(current)</span></a>
      </li>
    </ul>
  </div>
</nav>
  <!--/NAVBAR-->

<!--CONTENT-->
    <center>
  <center>
<div class="card mt-5 ml-5 mr-5 md-5 text-left" style="max-width: 40rem;">
<div class="card-header bg-info">
    <img src="download.jpg" alt="">
    PENGGAJIHAN GURU/KARYAWAN YAYASAN ASSALAAM
  </div>
    <div class="card-body">
        <form method="post" action="">
            <div class="form-group">
                <label for="exampleInputName1">No</label>
                <input type="name" class="form-control" name="no" id="exampleInputName1" aria-describedby="emailHelp">
                <small id="emailHelp" class="form-text text-muted"></small>
            </div>
            <div class="form-group">
                <label for="exampleInputName2">Nama</label>
                <input type="name" class="form-control" name="nama" id="exampleInputName2">
            </div>
            <div class="form-group">
                <label for="exampleFormControlSelect1">Unit Pendidikan</label>
                <select class="form-control" name="unit_pendidikan" id="exampleFormControlSelect1">
                <option selected>PILIH UNIT PENDIDIKAN</option>
                    <option>TK</option>
                    <option>SD</option>
                    <option>SMP</option>
                    <option>SMA</option>
                    <option>SMK</option>
                </select>
            </div>
            <div class="form-group">
                <label for="exampleInputDate">TANGGAL GAJI</label>
                <input type="date" class="form-control" name="tanggal_gaji" id="exampleInputDate">
            </div>
            <div class="row">
                <div class="col">
                    <center><h4>Gaji</h4></center>
                    <div class="form-group">
                        <label for="exampleFormControlSelect1">JABATAN</label>
                        <select class="form-control" name="jabatan" id="exampleFormControlSelect1">
                            <option selected>PILIH JABATAN</option>
                            <option>KEPALA SEKOLAH</option>
                            <option>WAKASEK</option>
                            <option>GURU</option>
                            <option>KARYAWAN</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputName2">LAMA KERJA</label>
                        <input type="name" class="form-control" name="lama_kerja" id="exampleInputName2">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlSelect1">STATUS KERJA</label>
                        <select class="form-control" name="status_kerja" id="exampleFormControlSelect1">
                            <option selected>PILIH STATUS</option>
                            <option>KONTRAK</option>
                            <option>TETAP</option>
                        </select>
                    </div>
                </div>
                <div class="col">
                    <center><h4>Potongan</h4></center>
                    <div class="form-group">
                        <label for="exampleInputName2">BPJS</label>
                        <input type="name" class="form-control" name="bpjs" id="exampleInputName2">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputName2">PINJAMAN</label>
                        <input type="name" class="form-control" name="pinjaman" id="exampleInputName2">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputName2">TABUNGAN</label>
                        <input type="name" class="form-control" name="tabungan" id="exampleInputName2">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputName2">LAINNYA</label>
                        <input type="name" class="form-control" name="lainnya" id="exampleInputName2">
                    </div>
                </div>
            </div>
            <center> 
            <button type="submit" name="daftar" class="btn btn-info">SUBMIT</button>
            </center>
        </form>
    </div>
</div>
  </center>
</center>
<!--/ CONTENT-->

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
    -->
  </body>
</html>

<!-- PHP -->

<?php
if(isset($_POST['daftar'])){

    $no = $_POST['no'];
    $nama = $_POST['nama'];
    $unit_pendidikan = $_POST['unit_pendidikan'];
    $tanggal_gaji = $_POST ['tanggal_gaji'];
    $jabatan = $_POST['jabatan'];
    $lama_kerja = $_POST['lama_kerja'];
    $status_kerja = $_POST['status_kerja'];
    $bpjs= $_POST['bpjs'];
    $pinjaman = $_POST['pinjaman'];
    $tabungan = $_POST['tabungan'];
    $lainnya = $_POST['lainnya'];
    $gaji = 0;
    $potongan = 0;
    $gaji_bersih = 0;
    $bonus = 0;

    if ($jabatan == "KEPALA SEKOLAH"){
      $gaji = 5000000;
  } elseif ($jabatan == "WAKASEK"){
      $gaji = 4000000;
  } elseif ($jabatan == "GURU"){
      $gaji = 3000000;
  } elseif ($jabatan == "KARYAWAN"){
      $gaji = 2000000;
  } else {
      $gaji = 0; 
  }
  
  
   if($status_kerja == "TETAP") {
      $bonus = 1000000;
  } else {
      $bonus = 0;
  }
  
  $gaji_bersih = ($gaji + $bonus - $bpjs - $pinjaman - $tabungan - $lainnya);

    class hasil{

        public function pendaftaran($no2,$nama2,$unit_pendidikan2,$tanggal_gaji2,$jabatan2, $gaji2, $lama_kerja2,$status_kerja2,$bpjs2,$pinjaman2,$tabungan2,$lainnya2,$bonus2,$gaji_bersih2){
        ?>
        <center>
        <div class="card text-white bg-info mb-2 mt-5" style="max-width: 40rem">
            <div class="card-header"><h4>HASIL PENGGAJIHAN</h4></div>
            <div class="card-body">
                <h5 class="card-title"></h5>
                <table>
                    <tr>
                        <td>No</td>
                        <td>:</td>
                        <td><?php echo $no2 ?></td>
                    </tr>
                    <tr>
                        <td>Nama</td>
                        <td>:</td>
                        <td><?php echo $nama2 ?></td>
                    </tr>
                    <tr>
                        <td>Unit Pendidikan</td>
                        <td>:</td>
                        <td><?php echo $unit_pendidikan2 ?></td>
                    </tr>
                    <tr>
                        <td>Tanggal Gaji</td>
                        <td>:</td>
                        <td><?php echo $tanggal_gaji2 ?></td>
                    </tr>
                    <tr>
                        <td>Jabatan</td>
                        <td>:</td>
                        <td><?php echo $jabatan2 ?></td>
                    </tr>
                        <td>Gaji</td>
                        <td>:</td>
                        <td><?php echo $gaji2 ?> </td>
                    <tr>
                        <td>Lama Kerja</td>
                        <td>:</td>
                        <td><?php echo $lama_kerja2 ?></td>
                    </tr>
                    <tr>
                        <td>Status Kerja</td>
                        <td>:</td>
                        <td><?php echo $status_kerja2 ?></td>
                    </tr>
                    <tr>
                        <td>Bonus</td>
                        <td>:</td>
                        <td><?php echo $bonus2 ?></td>
                    </tr>
                    <tr>
                        <td>BPJS</td>
                        <td>:</td>
                        <td><?php echo $bpjs2 ?></td>
                    </tr>
                    <tr>
                        <td>Pinjaman</td>
                        <td>:</td>
                        <td><?php echo $pinjaman2 ?></td>
                    </tr>
                    <tr>
                        <td>Tabungan</td>
                        <td>:</td>
                        <td><?php echo $tabungan2 ?></td>
                    </tr>
                    <tr>
                        <td>Lainnya</td>
                        <td>:</td>
                        <td><?php echo $lainnya2 ?></td>
                    </tr>
                    <tr>
                        <td>Gaji Bersih</td>
                        <td>:</td>
                        <td><?php echo $gaji_bersih2 ?></td>
                    </tr>
                </table>
            </div>
        </div>
        </center>
        <?php
        }
    }

    $cetak = new hasil();

    echo $cetak->pendaftaran($no,$nama,$unit_pendidikan,$tanggal_gaji,$jabatan, $gaji, $lama_kerja,$status_kerja,$bpjs,$pinjaman,$tabungan,$lainnya,$bonus,$gaji_bersih);
}
?>

<!-- /PHP -->
