<!DOCTYPE html>
<html lang="en">
<head>

     <title>UTS Pemrograman Web2</title>

     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=Edge">
     <meta name="description" content="">
     <meta name="keywords" content="">
     <meta name="author" content="">
     <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

     <link rel="stylesheet" href="css/bootstrap.min.css">
     <link rel="stylesheet" href="css/font-awesome.min.css">
     <link rel="stylesheet" href="css/owl.carousel.css">
     <link rel="stylesheet" href="css/owl.theme.default.min.css">

     <!-- MAIN CSS -->
     <link rel="stylesheet" href="css/style.css">

</head>

<?php

    include "koneksi.php";

    //Cek apakah ada nilai dari method GET dengan nama id_anggota
    if (isset($_GET['id_anggota'])) {
        $id_anggota=htmlspecialchars($_GET["id_anggota"]);

        $sql="delete from anggota where id_anggota='$id_anggota' ";
        $hasil=mysqli_query($kon,$sql);

        //Kondisi apakah berhasil atau tidak
            if ($hasil) {
                header("Location:index.php");

            }
            else {
                echo "<div class='alert alert-danger'> Data Gagal dihapus.</div>";

            }
        }
?>

<body id="top" data-spy="scroll" data-target=".navbar-collapse" data-offset="50">

     <!-- PRE LOADER -->
     <section class="preloader">
          <div class="spinner">
               <span class="spinner-rotate"></span>
          </div>
     </section>


     <!-- MENU -->
     <section class="navbar custom-navbar navbar-fixed-top" role="navigation">
          <div class="container">

               <div class="navbar-header">
                    <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                         <span class="icon icon-bar"></span>
                         <span class="icon icon-bar"></span>
                         <span class="icon icon-bar"></span>
                    </button>

                    <!-- lOGO TEXT HERE -->
                    <a href="#" class="navbar-brand">LOGO</a>
               </div>

               <!-- MENU LINKS -->
               <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-nav-first">
                         <li><a href="index.php">Home</a></li>
                         <li class="active"><a href="biodata.php">Biodata</a></li>
                         <!-- <li><a href="viginere.php">Viginere</a></li> -->
                    </ul>
               </div>

          </div>
     </section>

     <section id="testimonial">
          <div class="container">
               <div class="row">

                    <div class="col-md-12 col-sm-12">
                         <div class="section-title text-center">
                              <h2>Data <small>Biodata</small></h2>
                         </div>
                         
                         <div class="text-left">
                              <a href="create.php" class="btn btn-primary" role="button">Tambah Data</a>
                         </div>

                         <table class="table table-bordered table-hover">
                              <br>
                              <thead>
                              <tr>
                                   <th>No</th>
                                   <th>Username</th>
                                   <th>Nama</th>
                                   <th>Alamat</th>
                                   <th>Email</th>
                                   <th>No HP</th>
                                   <th colspan='2'>Aksi</th>

                              </tr>
                              </thead>
                              <?php
                              include "koneksi.php";
                              $sql="select * from anggota order by id_anggota desc";

                              $hasil=mysqli_query($kon,$sql);
                              $no=0;
                              while ($data = mysqli_fetch_array($hasil)) {
                                   $no++;

                                   ?>
                                   <tbody>
                                   <tr>
                                        <td><?php echo $no;?></td>
                                        <td><?php echo $data["username"]; ?></td>
                                        <td><?php echo $data["nama"];   ?></td>
                                        <td><?php echo $data["alamat"];   ?></td>
                                        <td><?php echo $data["email"];   ?></td>
                                        <td><?php echo $data["no_hp"];   ?></td>
                                        <td>
                                        <a href="update.php?id_anggota=<?php echo htmlspecialchars($data['id_anggota']); ?>" class="btn btn-warning" role="button">View</a>
                                        <a href="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>?id_anggota=<?php echo $data['id_anggota']; ?>" class="btn btn-danger" role="button">Delete</a>
                                        </td>
                                   </tr>
                                   </tbody>
                                   <?php
                              }
                              ?>
                         </table>
                    </div>
               </div>
          </div>
     </section> 

<!-- SCRIPTS -->
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/smoothscroll.js"></script>
<script src="js/custom.js"></script>

</body>
</html>