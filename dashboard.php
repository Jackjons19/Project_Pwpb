<?php 
require 'koneksi.php';

if(isset($_POST['bsimpan']))
{
   
    if($_GET ['hal'] == "update")
    {
        //Data Akan Di Update
        $update = mysqli_query($koneksi, "UPDATE tb_user set username = 
                                                         '$_POST[tusername]',
                                                            email = 
                                                            '$_POST[temail]' 
                                                               WHERE username and email = '$_GET[username]' ");
                                                                $data = mysqli_fetch_array($tampil);
                                                                    if($update)
                                                                    {
                                                                        echo"<script>
                                                                        alert('Update Data Succsess!');
                                                                        document.location = 'dashbord.php;
                                                                        </script>
                                                                        ";
                                                                    }
                                                                    else{
                                                                        echo"<script>
                                                                        alert('Update Data Gagal!!!!!');
                                                                        document.location = 'dashboard.php;
                                                                        </script>
                                                                        ";
                                                                    }
    }else{
        //Data Akan DiSimpan Baru
        $simpan = mysqli_query($koneksi, "INSERT INTO tb_user(username,email)
                                     VALUES ('$_POST[tusername]',
                                              '$_POST[temail]')");
                                               $data = mysqli_fetch_array($tampil);
                                              if($simpan)
                                              {
                                                  echo"<script>
                                                  alert('Simpan Data Succsess!');
                                                  document.location = 'dashbord.php;
                                                  </script>
                                                  ";
                                              }
                                              else{
                                                  echo"<script>
                                                  alert('Simpan Data Gagal!!!!!');
                                                  document.location = 'dashboard.php;
                                                  </script>
                                                  ";
                                              }

    }
    if($data)
    {
        //Jika Data Ditemukan, Maka Data Akan Ditampung Ke Dalam Variabel
        $vusername = ['username'];
        $vemail = ['email'];
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body>
    <div class="container" >
        <div class="text-center">CRUD</div>


<!--Awal Card From-->
<div class="card mt-3">
       <div class="card-header bg-primary text-white">
           Data Mahkluk Mars
       </div>
       <div class="card-body">
           <form method="post" action="">
               <div class="form-group">
                   <label>Username</label>
                   <input type="text" name="tusername" value="<?php echo $vusername?>" class="form-control" placeholder="Input Nama Anda Disini!" required>
               </div>
               <div class="form-group">
                   <label>Email</label>
                   <input type="text" name="temail" value="<?php echo $vemail?>" class="form-control" placeholder="Input Email Anda Disini!" required>
               </div>
               <br>
               <button type="submit" class="btn btn-success" name="bsimpan">Simpan</button>
               <button type="reset" class="btn btn-danger" name="breset">Reset</button>
           </form>
       </div>
</div>
    <!--Akhir Card Form-->

             <!--Awal Card Tabel-->
<div class="card mt-3">
   <div class="card-header bg-success text-white">
           Daftar Mahkluk Mars
   </div>
       <div class="card-body">
           <table class="table table-bordered table-striped">
               <tr>
                   <td>Nomer</td>
                   <td>Username</td>
                   <td>Email</td>
                   <td>Update</td>
                   <td>Delete</td>
               </tr>
               <?php
               $no = 1;
               $tampil = mysqli_query($koneksi, "SELECT * from tb_user order by username desc");
               while ($data = mysqli_fetch_array($tampil)) :
               ?>
               <tr>
                   <td><?=$no++;?></td>
                   <td><?=$data['username']?></td>
                   <td><?=$data['email']?></td>
                   <td>
                       <a href="dashboard.php?hal=update&username<?php echo $username ?>"> <button type="button" class="btn btn-info">
                           Update
                       </button>
                       </a>
                   </td>
                   <td>
                       <a href="dashboard.php?hal=delete&username<?php echo $username ?>" onclick="return confirm('Yakin Mau Delete Data?')"> <button type="button" class="btn btn-danger">
                           Delete
                    </button>
                      </a>
                   </td>

               </tr>
               <?php endwhile; //Penutup Perulangan While ?>
           </table>
       </div>
    </div>
    <!--Akhir Card Tabel-->
    
</body>
</html>