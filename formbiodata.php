<!DOCTYPE html>
<html>
 <head>
  <title>Biodata</title>
 </head>
 <body>
  <table border="0">
  <form action="cek.php" method="POST">
  
   <tr>
    <td>Nama Lengkap</td>
    <td>:</td>
    <td><input type="text" name="nama"></td>
   </tr>
  
   <tr>
    <td>Alamat</td>
    <td>:</td>
    <td><input type=textfield name=alamat></td>
   </tr>  

   <tr>
    <td>Jenis Kelamin</td>
    <td>:</td>
    <td><input type=radio name=jk value=Laki-laki>Laki-laki<input type=radio name=jk value=Perempuan>Perempuan</td>
   </tr>
   
   
   <tr>
    <td>Tempat dan Tanggal Lahir</td>
    <td>:</td>
    <td><input type=text name=tempat size=15>
    <select name=tgl>
    <option name=tgl>Tanggal
    <option name=tgl>1
    <option name=tgl>2
    <option name=tgl>3
    <option name=tgl>4
    <option name=tgl>5
    <option name=tgl>6
    <option name=tgl>7
    <option name=tgl>8
    <option name=tgl>9
    <option name=tgl>10
    <option name=tgl>11
    <option name=tgl>12
    <option name=tgl>13
    <option name=tgl>14
    <option name=tgl>15
    <option name=tgl>16
    <option name=tgl>17
    <option name=tgl>18
    <option name=tgl>19
    <option name=tgl>20
    <option name=tgl>21
    <option name=tgl>22
    <option name=tgl>23
    <option name=tgl>24
    <option name=tgl>26
    <option name=tgl>27
    <option name=tgl>28
    <option name=tgl>29
    <option name=tgl>30
    <option name=tgl>31
    </select>
    <select name=bln>
    <option name=bln>Bulan
    <option name=bln>Januari
    <option name=bln>Februari
    <option name=bln>Maret
    <option name=bln>April
    <option name=bln>Mei
    <option name=bln>Juni
    <option name=bln>Juli
    <option name=bln>Agustus
    <option name=bln>September
    <option name=bln>Oktober
    <option name=bln>November
    <option name=bln>Desember
    </select>
    <select name=thn>
    <option name=thn>2012
    <option name=thn>2011
    <option name=thn>2010
    <option name=thn>2008
    <option name=thn>2007
    <option name=thn>2006
    <option name=thn>2005
    <option name=thn>2004
    <option name=thn>2003
    <option name=thn>2002
    <option name=thn>2001
    <option name=thn>2000
    <option name=thn>1999
    </select>
    </td>
   </tr>
   

   
   <tr>
    <td>Usia</td>
    <td>:</td>
    <td><input type=text name=usia size=5></td>
   </tr>
   
   <tr>
    
    <td><input type="submit" name="submit" value="Submit">
    <input type="reset" name="reset" value="Reset"></td>
   </tr>
  </form>
  </table>
 </body>
</html>