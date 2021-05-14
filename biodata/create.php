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
    //Include file koneksi, untuk koneksikan ke database
    include "koneksi.php";
    
    //Fungsi untuk mencegah inputan karakter yang tidak sesuai
    function input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    //Cek apakah ada kiriman form dari method post
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $username=input($_POST["username"]);
        $nama=input($_POST["nama"]);
        $alamat=input($_POST["alamat"]);
        $email=input($_POST["email"]);
        $no_hp=input($_POST["no_hp"]);

        //Query input menginput data kedalam tabel anggota
        $sql="insert into anggota (username,nama,alamat,email,no_hp) values
		('$username','$nama','$alamat','$email','$no_hp')";

        //Mengeksekusi/menjalankan query diatas
        $hasil=mysqli_query($kon,$sql);

        //Kondisi apakah berhasil atau tidak dalam mengeksekusi query diatas
        if ($hasil) {
            header("Location:biodata.php");
        }
        else {
            echo "<div class='alert alert-danger'> Data Gagal disimpan.</div>";

        }

    }
    if(isset($_POST['submit1'])){
        function Cipher($ch, $key)
        {
            if (!ctype_alpha($ch))
                    return $ch;

            $offset = ord(ctype_upper($ch) ? 'A' : 'a');
            return chr(fmod(((ord($ch) + $key) - $offset), 26) + $offset);
        }

        function Encipher($input, $key)
        {
            $output = "";

            $inputArr = str_split($input);
            foreach ($inputArr as $ch)
                    $output .= Cipher($ch, $key);

            return $output;
        }

        function Decipher($input, $key)
        {
                return Encipher($input, 26 - $key);
        }
            
            
    }else if(isset($_POST['submit2'])){
        function Cipher($ch, $key)
        {
            if (!ctype_alpha($ch))
                    return $ch;

            $offset = ord(ctype_upper($ch) ? 'A' : 'a');
            return chr(fmod(((ord($ch) + $key) - $offset), 26) + $offset);
        }

        function Encipher($input, $key)
        {
            $output = "";

            $inputArr = str_split($input);
            foreach ($inputArr as $ch)
                    $output .= Cipher($ch, $key);

            return $output;
        }

        function Decipher($input, $key)
        {
                return Encipher($input, 26 - $key);
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
                    <a href="#" class="navbar-brand">192410101015</a>
               </div>

               <!-- MENU LINKS -->
               <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-nav-first">
                         <li><a href="index.php">Home</a></li>
                         <li class="active"><a href="biodata.php">Biodata</a></li>
                    </ul>
               </div>

          </div>
     </section>
    
    <div class="container">
        <div class="text-center">
            <h2>Input Data</h2>
        </div>
        <div class="container">
            <div class="d-flex justify-content-center">
                <form class="col-sm-9" action="<?php echo $_SERVER["PHP_SELF"];?>" method="post">
                    <div class="form-group">
                        <label>Username:</label>
                        <input type="text" name="username" class="form-control" placeholder="Masukan Username" required />
                    </div>
                    <div class="form-group">
                        <label>Nama:</label>
                        <input type="text" name="nama" class="form-control" placeholder="Masukan Nama" required/>

                    </div>
                    <div class="form-group">
                        <label>Alamat:</label>
                        <textarea name="alamat" class="form-control" rows="5"placeholder="Masukan Alamat" required></textarea>

                    </div>
                    <div class="form-group">
                        <label>Email:</label>
                        <input type="email" name="email" class="form-control" placeholder="Masukan Email" required/>
                    </div>
                    <div class="form-group">
                        <label>No HP:</label>
                        <input type="text" name="no_hp" class="form-control" placeholder="Masukan No HP" required/>
                    </div>
                    <button type="submit" name="submit1" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>

    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/smoothscroll.js"></script>
    <script src="js/custom.js"></script>

</body>
</html>