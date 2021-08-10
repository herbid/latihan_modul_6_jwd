<!DOCTYPE html>
<html>
 <head>
  <title>Biodata</title>
 </head>

 <body>
 <?php
  $nama=$_POST['nama'];
  $alamat=$_POST['alamat'];
  $jk=$_POST['jk'];
  $tempat=$_POST['tempat'];
  $tgl=$_POST['tgl'];
  $bln=$_POST['bln'];
  $thn=$_POST['thn'];

  $usia=$_POST['usia']; ?>
 <table border="1" cellpadding="5" cellspacing="0">
  
  <tr>
     <td>Nama Lengkap</td>
     <td> <?php echo $nama ?> </td>
  </tr>

  <tr>
     <td>Alamat</td>
     <td> <?php echo $alamat ?> </td>
  </tr>

  <tr>
     <td>Jenis Kelamin</td>
     <td> <?php echo $jk ?> </td>
  </tr>

  <tr>
     <td>Tempat tgl lahir</td>
     <td> <?php echo $tempat ?>,<?php echo $tgl ?>/<?php echo $bln ?>/<?php echo $thn ?> </td>
  </tr>

  <tr>
     <td>Usia</td>
     <td> <?php echo $usia ?> </td>
  </tr>
 </table>
 </body>
</html>
