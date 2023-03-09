<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="21081010176_Annisa_biodata(2)style.css">
</head>
<body>
    <?php
        $nama_panggilan = "Annisa";
        $nama_panjang = "Annisa Rachmania Putri";
        $alamat = "Jl. Simo Sidomulyo IX No.57A Surabaya";
        $agama = "Islam";
        $status = "Pelajar/Mahasiswa";
        $jenis_kelamin ="Perempuan";
        $no_telepon = "081249443453";
        $email = "annisarachma404@gmail.com";
        $smp = "SMP Negeri 1 Surabaya";
        $sma = "SMA Negeri 2 Surabaya";
        $kuliah = "Informatika UPN Vetera Jawa Timur";
        $tempatlahir = "Surabaya";
    ?>
    <?php
        $tanggallahir = "2003-05-05"; 
        $umur = date_diff(date_create($tanggallahir), date_create('today'))->y;
    ?>


     <!-- NAVIGATION BAR -->
     <div class="div-navbar">
        <h2 class="title-navbar"><?php echo "$nama_panggilan's Profile" ?></h2>
        <ul class="menu-navbar">
            <li class="li-menu">
                <a href="21081010176_Annisa_biodata(1).php" class="a-menu"><?php echo "HOME" ?></a> </li>
            <li class="li-menu">
                <a href="21081010176_Annisa_biodata(2).php" class="a-menu"><?php echo "PROFILE" ?></a></li>
        </ul>
    </div>
    <!-- END NAVIGATION BAR -->

    <!-- CONTENT  -->
    <div class="div-content">
        <div class="div-content-1">
            <div class="div-img"><img src="WhatsApp Image 2023-02-18 at 19.25.37.jpeg" height="90%" ></div>
            <div class="persegipanjang"></div><div class="persegipanjang-2"></div>
        </div>
        <div class="div-content-2">
            <div>
                <h2 style="color: white;display: flex; position: absolute; left: 655px; font-size: 35px;">
                    <?php echo "Data Diri" ?></h2><br>
                <div class="lingkaran-5"></div><div class="lingkaran-6"></div><div class="lingkaran-7"></div>
                
                <div class="div-datadiri">
                    <table cellpadding="10" cellspacing="15">
                        <tr ><td><?php echo "Nama"?></td><td><?php echo":"?></td><td><?php echo"$nama_panjang"?></td></tr>
                        <tr><td><?php echo "TTL"?></td><td><?php echo":"?></td><td><?php echo"$tempatlahir, $tanggallahir"?></td></tr>
                        <tr><td><?php echo "Umur"?></td><td><?php echo":"?></td><td><?php echo"$umur tahun"?></td></tr>
                        <tr><td><?php echo "Alamat"?></td><td><?php echo":"?></td><td><?php echo "$alamat"?></td></tr>
                        <tr><td><?php echo "Agama"?></td><td><?php echo":"?></td><td><?php echo "$agama"?></td></tr>
                        <tr><td><?php echo "Jenis Kelamin"?></td><td><?php echo":"?></td><td><?php echo "$jenis_kelamin"?></td></tr>
                        <tr><td><?php echo "Status"?></td><td><?php echo":"?></td><td><?php echo"$status"?></td></tr>
                        <tr><td><?php echo "No.Telepon"?></td><td><?php echo":"?></td><td><?php echo"$no_telepon"?></td></tr>
                        <tr><td><?php echo "Email"?></td><td><?php echo":"?></td><td><?php echo"$email"?></td></tr>
                    </table>
                </div>
                </div>
        </div>
    </div>

    <div class="div-navbar-2"></div>

    <div class="div-content2">
    <div class="div-content-3">
        <div class="lingkaran-3"></div>
        <div class="lingkaran-4"></div>
        <div class="div-pendidikan">
            <h2 style="color: white;display: flex; position: absolute; left: 110px; font-size: 35px; top: 700px;">Riwayat Pendidikan</h2><br>
        </div>
        <div >
          
                <div class="pend-1">
                    <h2 style="font-size: 28px;"><?php echo"SMP : "?></h2>
                    <p style="font-size: 28px;"><?php echo"$smp"?></p>
                </div>
                <div class="pend-2">
                    <h3 style="font-size: 28px;"><?php echo "SMA : "?></h3>
                    <p style="font-size: 28px;"><?php echo"$sma"?></p>
                </div>
                <div class="pend-3">
                    <h3 style="font-size: 28px;"><?php echo "PT : "?></h3>
                    <p style="font-size: 28px;"><?php echo "$kuliah"?></p>
                </div>
        </div>

    </div>
    <div style="width: 100px; height: 5px; background-color: white; position: absolute: top: 150px; left:10px"></div>
    <div  class="div-content-4">
        <div class="lingkaran-2"></div>
        <img class="div-img-2" src="WhatsApp Image 2023-03-07 at 19.27.00.jpeg" height="85%" width="90%">
        <div class="segitiga-2"></div>
    </div>
    </div>

    <div class="div-navbar-2"></div>

    <div class="div-content2">
        <div class="kotak-1">
            <div style="height: 450px; width: 700px; background-color: white; position: absolute; top: 1360px; left: 280px; display: flex; justify-content: center; align-items: center">
            <h1 style="font-size: 35px;"><?php echo"Thank You!!"?></h1></div>
            <div class="persegipanjang-4"></div>
        </div>
        <div class="kotak-2">
        <div class="persegipanjang-3"></div>
        </div>
    </div>

</body>
</html>