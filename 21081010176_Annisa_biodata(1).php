<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="21081010176_Annisa_biodata(1)style.css">

    <style>
        position : fixed;
    </style>
</head>
<body>
    <?php 
        $nama = "Annisa" ;
        $aboutme = "I am such a student who is studying at Informatics department UPN Veteran Jawa Timur. And now I'm in the 4th semester. A little information about me: I am a person who likes to learn new things and really likes music.
        So if you want to know more about me, please click ‘profile’ to see my bio, thank you!";
    ?>

    <!-- NAVIGATION BAR -->
    <div class="div-navbar">
        <h2 class="title-navbar"><?php echo "$nama's Profile"?></h2>
        <ul class="menu-navbar">
            <li class="li-menu">
                <a href="#" class="a-menu"><?php echo"HOME"?></a> </li>
            <li class="li-menu">
                <a href="21081010176_Annisa_biodata(2).php" class="a-menu"><?php echo"PROFILE"?></a></li>
        </ul>
    </div>
    <!-- END NAVIGATION BAR -->

    <!-- CONTENT -->
    <div class="div-content">
        <div class="div-content-1">
            <div style="width: 3px; height: 110px; background-color:white; position:absolute; top: 210px; left: 50px;" ></div>
            <div style="width: 3px; height: 110px; background-color:rgb(142, 13, 43); position:absolute; top: 320px; left: 50px;"></div>
            <div class="div-description">
                <table class="table-description">
                    <tbody >
                        <tr><td><h2 style="font-size: 35px;"><?php echo "Hello I'm $nama" ?></h2></td></tr>
                        <tr><td><br><h2><?php echo"About me"?></h2></td></tr>
                        <tr><td>
                            <br><p style="text-align: justify; font-size: 20px;"><?php echo "$aboutme" ?></p><br></td></tr>
                    </tbody>
                </table>          
            </div>
        </div>
        
        
        <div class="div-content-2">
            <div class="div-lingkaran">
            <div class="lingkaran"></div>
            </div>
            <div class="div-image"><img src="WhatsApp Image 2023-02-18 at 18.55.56 (1).jpeg" width="390px" height="390px"  ></div>
            <div class="segitiga"></div>
        </div>
    </div>
    
<!-- END CONTENT -->
</body>
</html>