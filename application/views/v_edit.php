<!DOCTYPE html>
<html lang="en" dir="ltr">
   <head>
      <meta charset="utf-8">
      <title>Quiz Pra UTS WP II</title>
   </head>
   <body>
      <center>
         <h1>Quiz Membuat Crud Pra UTS Web Programming II</h1>
         <h3>Form Edit Data Identitas</h3>
      </center>
      <?php foreach ($user as $u) { ?>
         <form action="<?php echo base_url() . 'crud/update'?>" method="post">
            <table style="margin:30px auto;">
                <tr>
                  <td>Nama</td>
                  <td>:</td>
                  <td><input type="text" name="nama" value="<?php echo $u->nama ?>"></td>
               </tr>
               <tr>
                  <td>NIM</td>
                  <td>:</td>
                  <td><input type="text" name="nim" value="<?php echo $u->nim ?>"></td>
               </tr>
               <tr>
                  <td>Kelas</td>
                  <td>:</td>
                  <td><input type="text" name="kelas" value="<?php echo $u->kelas ?>"></td>
               </tr>
               <tr>
                  <td>Alamat</td>
                  <td>:</td>
                  <td><input type="text" name="alamat" value="<?php echo $u->alamat ?>"></td>
               </tr>
               
               <td><input type="submit" value="Simpan"></td>
            </table>
         </form>
      <?php } ?>
   </body>
</html>