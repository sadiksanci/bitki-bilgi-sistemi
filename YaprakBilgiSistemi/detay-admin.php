<?php
require_once "database.php";
$yaprakıd = $_GET['ID'];
$veri = new Database();

$yaprakad = $veri->getColumn("SELECT yaprakAD FROM yapraklar WHERE yaprakID=$yaprakıd")
?>


<html>

<head>
    <title><?php echo $yaprakad ?></title>
    <?php
    require_once "database.php";


    ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/site.css" rel="stylesheet">
</head>

<body>
    <?php
    require_once "database.php";
    $veri = new Database();

    $yaprakad = $veri->getColumn("SELECT yaprakAD FROM yapraklar WHERE yaprakID=$yaprakıd")
    ?>

    <div class="container">
        <form action="güncel.php" method="post">
            <?php
            require_once "database.php";

            $veri = new Database();
            $deger = $veri->getRows("SELECT * FROM yapraklar");
            $deger2 = $veri->getRow("SELECT * FROM yapraklar WHERE yaprakID= $yaprakıd ");
            ?>
            <div class="row" style="margin-top: 25px;">
                <div class="col-6">
                    <br><br>
                    <h1><?php echo $yaprakad ?></h1>
                    <div>Yaprak ID:
                        <input type="text" readonly value="<?php echo $yaprakıd ?>" name="yaprakId" width="20px" class="form-group">

                    </div>


                </div>
                <div class="col-6" style="margin-top: 25px;">
                    <div style="float: right;">
                        <input type="submit" class="btn btn-success btn-sm" id="gonder" name="gonder"  style="padding:15px" value="Güncelle">
                       
                        
                    </div>

                </div>

            </div>
            <div class="row">
                <br>
                <div class="col-4">
                    <br>
                    <div>
                        <img src="foto/<?php echo $deger2->yaprakURL1 ?>" class="rounded" style="width: 250px; height:250px">
                    </div>
                </div>
                <div class="col-4">
                    <div>
                        <img src="foto/<?php echo $deger2->yaprakURL2 ?>" class="rounded" style="width: 250px; height:250px">

                    </div>
                </div>
                <div class="col-4">
                    <div>
                        <img src="foto/<?php echo $deger2->yaprakURL3 ?>" class="rounded" style="width: 250px; height:250px">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    <h3>ön bilgi</h3>
                    <textarea type="text" rows="8" style="width: 500px; height: 250px;" name="yaprakÖnBilgi"><?php echo $deger2->yaprakÖnBilgi  ?></textarea>
                </div>
                <div class="col-6">
                    <h3><?php echo $deger2->baslık1 ?></h3>
                    <textarea type="text" rows="8" style="width: 500px; height: 250px;" name="yaprakBilgi1"><?php echo $deger2->yaprakBİLGİ1 ?></textarea>
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    <h3><?php echo $deger2->baslık2 ?></h3>
                    <textarea type="text" rows="8" style="width: 500px; height: 250px;" name="yaprakBilgi2"><?php echo $deger2->yaprakBİLGİ2 ?></textarea>
                </div>
                <div class="col-6" style="margin-top: 150px;">
                
                </div>

            </div>


        </form>
    </div>


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>

</html>