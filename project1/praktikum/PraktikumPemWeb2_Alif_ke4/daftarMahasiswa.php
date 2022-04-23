<?php 
require_once "classMahasiswa.php";

$Alif=new Mahasiswa("Alif Wijaya","0110121018","Sistem informasi","2021",3.4);
$Afgan=new Mahasiswa("Afgan Hanif","12103912","Sistem informasi","2021", 3.06);
$Nia=new Mahasiswa("Nia Anggraini","12103913","Sistem informasi","2021", 3.7);
$Ilyasha=new Mahasiswa("Ilyasha Erfian","12103914","Sistem informasi","2021", 3.7);
$data=[$Alif, $Afgan, $Nia, $Ilyasha];
 ?>
 <!DOCTYPE html>
 <html>
 <head>
     <meta charset="utf-8">
     <title>Daftar Mahasiswa</title>
 </head>
 <body>
<div class="container">
 <div class="row">
     <div class="col-12">
         <h1 class="text-center">Daftar Mahasiswa</h1> 
         <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
     </div>
 </div>
 <div class="row">
     <div class="col-12">
         <table class="table text-center">
              <thead class="thead-dark">
                <tr>
                  <th>Nama</th>
                  <th>NIM</th>
                  <th>Prodi</th>
                  <th>IPK</th>
                  <th>Predikat</th>
                  <th>Tahun Angkatan</th>
                </tr>
              </thead>
              <tbody>
                <?php foreach ($data as $mahasiswa) : ?>
                <tr>
                  <td><?= $mahasiswa->nama; ?></td>
                  <td><?= $mahasiswa->nim; ?></td>
                  <td><?= $mahasiswa->prodi; ?></td>
                  <td><?= $mahasiswa->ipk; ?></td>
                  <td><?= $mahasiswa->predikat_ipk(); ?></td>
                  <td><?= $mahasiswa->thn_angkatan; ?></td>
              </tbody>
                <?php endforeach; ?>
            </table>
     </div>
 </div>
 </div>
 </body>
 </html>