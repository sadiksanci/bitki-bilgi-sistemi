<html>

<head>
  <title></title>
  <?php
  require_once "database.php";
  $yaprakıd = 1;

  ?>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/site.css" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
</head>

<body>
  <div class="container">
    <div class="row">
      <div class="col-12">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark ">
          <a class="navbar-brand" href="index.html">&nbsp;&nbsp;Yaprak Bilgi Sistemi</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end mr-5" id="navbarNavDropdown">
            <ul class="navbar-nav">
              <li class="nav-item active">
                <a class="nav-link active" href="index.php">Anasayfa <span class="sr-only"></span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="hakkimizda.php">Hakkımızda</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="iletisim.php">İletişim</a>
              </li>


            </ul>
          </div>
        </nav>
      </div>
    </div>

    <div class="row">
      <div class="col-md-4">
        <img src="foto/1.jpg" class="rounded float-start" alt="...">
      </div>
      <div class="col-md-4">
        <b>
          <h1 class="baslık">Yaprak Bilgi Sistemi</h1>
          <hr>
        </b>


      </div>
      <div class="col-md-4">
        <img src="foto/01.jpg" class="rounded float-end" alt="...">
      </div>
    </div><br>

    <div class="row">

      <div class="col-8">
        <?php
        require_once "database.php";
        $veri = new Database();

        $baslik = $veri->getColumn("SELECT baslik1 FROM anasayfa WHERE anasayfaID=$yaprakıd")
        ?>

        <h1> <?php echo $baslik ?></h1>
        <hr color="green" /> <br>



      </div>

    </div>

    <?php
    require_once "database.php";

    $veri = new Database();
    $deger = $veri->getRows("SELECT * FROM yapraklar");
    $deger2 = $veri->getRow("SELECT * FROM anasayfa WHERE anasayfaID= $yaprakıd ");
    $tur1 = $veri->getRow("SELECT * FROM yapraktür WHERE turID=1");
    $tur2 = $veri->getRow("SELECT * FROM yapraktür WHERE turID=2");
    $tur3 = $veri->getRow("SELECT * FROM yapraktür WHERE turID=3");
    $tur4 = $veri->getRow("SELECT * FROM yapraktür WHERE turID=4");
    $tur5 = $veri->getRow("SELECT * FROM yapraktür WHERE turID=5");

    ?>
    <div class="row">
      <div class="col-md-10">
        <div class="row">
          <div class="col-md-5">
            <div class="text-center">
              <img src="foto/<?php echo $deger2->resimURL1 ?>" class="rounded" alt="...">
            </div>

          </div>
          <div class="col-md"></div>
          <div class="col-md-5">
            <p class="h6"> &nbsp;&nbsp;
              <?php echo $deger2->bilgi1 ?>
            </p>
          </div>
        </div><br> <br>
        <div class="row">
          <div class="col-8">
          <h2>Yaprak Türleri</h2> <br>
            <p class="h6"> &nbsp;&nbsp;
              <?php echo $deger2->baslik2 ?>

            </p>
           
            <div class="card-group">
              <div class="card">
                <img src="foto/<?php echo $tur1->turRESİM ?>" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title"> <?php echo $tur1->turAD ?></h5>
                  <p class="card-text"> <?php echo $tur1->turBİLGİ ?></p>
                  <p class="card-text"><small class="text-muted"></small></p>
                </div>
              </div>
              <div class="card">
                <img src="foto/<?php echo $tur2->turRESİM ?>" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title"><?php echo $tur2->turAD ?></h5>
                  <p class="card-text"><?php echo $tur2->turBİLGİ ?></p>
                  <p class="card-text"><small class="text-muted"></small></p>
                </div>
              </div>
              <div class="card">
                <img src="foto/<?php echo $tur5->turRESİM ?>" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title"><?php echo $tur5->turAD ?></h5>
                  <p class="card-text"><?php echo $tur5->turBİLGİ ?></p>
                  <p class="card-text"><small class="text-muted"></small></p>
                </div>
              </div>
            </div>
            <div class="card-group">
              <br>
              <div class="card">
                <img src="foto/<?php echo $tur4->turRESİM ?>" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title"> <?php echo $tur4->turAD ?></h5>
                  <p class="card-text"> <?php echo $tur4->turBİLGİ ?></p>
                  <p class="card-text"><small class="text-muted"></small></p>
                </div>
              </div>
              <div class="card">
                <img src="foto/<?php echo $tur3->turRESİM ?>" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title"><?php echo $tur3->turAD ?></h5>
                  <p class="card-text"><?php echo $tur3->turBİLGİ ?></p>
                  <p class="card-text"><small class="text-muted"></small></p>
                </div>
              </div>
             
            </div>

          </div>

        </div>


        <div class="row">
          <div class="col-md-8">

            <br>
            <p>&nbsp;&nbsp;
              <?php echo $deger2->bilgi2 ?>
            </p>
          </div><br><br>
          <div class="col-md-4">

            <div style="margin-top: 20px;">
              <img src="foto/<?php echo $deger2->resimURL2 ?>" class="img-thumbnail" alt="...">

            </div>
            <div style="margin-top: 50px;">
              <img src="foto/<?php echo $deger2->resimURL3 ?>" class="img-thumbnail" alt="...">
            </div>


          </div>
          <div class="row">
          </div>
          <div class="row">

            <div class="card" style="width: 18rem; ">
              <a href="detay.php?ID=10" class="a">
                <img src="foto/okaliptus2.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <p class="card-text">
                  <h4>Okaliptüs yaprağı</h4> mersingiller familyasından olan okaliptüs bitkisinin yapraklarıdır</p>
                </div>
              </a>
            </div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

            <div class="card" style="width: 18rem; ">
              <a href="detay.php?ID=5" class="a">
                <img src="foto/incir1.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <p class="card-text">
                  <h4>İncir Yaprağı</h4> Türkiye'de hemen hemen her yerde yetişebilen, yatıştırıcı bir etkiye sahip olan incir yaprağı Allah'ın verdiği nimetlerden biridir
                  </p>
                </div>
              </a>
            </div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

            <div class="card" style="width: 18rem; ">
              <a href="detay.php?ID=19" class="a">
                <img src="foto/baga2.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <p class="card-text">
                  <h4>Bağa yaprağı</h4>halk arasında sinirli ot olarak bilinen bitki insan sağlığı için şifa dağıtan bitkiler arasında yer alır.
                  </p>
                </div>
              </a>
            </div>


          </div>
          <div class="row">

            <div class="card" style="width: 18rem; ">
              <a href="detay.php?ID=17" class="a">
                <img src="foto/domates2.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <p class="card-text">
                  <h4>Domates Yaprağı</h4> Domates öyle faydalı ve öyle kullanışlı bir sebzedir ki yemeklerde salatalarda,
                  turşularda, konservelerde ve salçalarda vazgeçilmezdir.</p>
                </div>
              </a>
            </div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

            <div class="card" style="width: 18rem; ">
              <a href="detay.php?ID=15" class="a">
                <img src="foto/gül1.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <p class="card-text">
                  <h4>Gül Yaprakları</h4> Anavatanı Asya olan gül bitkisinin birçok türü ve oldukça gösterişli yaprakları vardır. Rengarenk güller tüm dünyada oldukça yaygın 
                  yetiştirilmektedir.
                  </p>
                </div>
              </a>
            </div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

            <div class="card" style="width: 18rem; ">
              <a href="detay.php?ID=8" class="a">
                <img src="foto/mese1.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <p class="card-text">
                  <h4>Meşe yaprağı</h4>Kayıngiller familyasından olan meşe ağacı 
                  dağlık alanları erozyonlara karşı bol miktarda ekilmiş bir bitkidir.
                  </p>
                </div>
              </a>
            </div>


          </div>
        </div>

      </div>


      <div class="col-md-2">
        <div class="card" style="width:200px;">
          <?php foreach ($deger as $degerler) {
          ?>
            <a href="detay.php?ID=<?= $degerler->yaprakID; ?>" class="list-group-item list-group-item-action list-group-item-success"><?php echo $degerler->yaprakAD ?></a>



          <?php } ?>
        </div>
      </div>
    </div>

  </div>
  <footer class="bd-footer py-5 mt-5 bg-dark">
    <div class="container ">
      <div class="row">
        <div class="col-4">




        </div>
        <div class="col-4">

          <div style="float:left;">
            <a href="#" class="icon-text fab fa-facebook-f a"> <span> | </span> Facebook</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <a href="#" class="icon-text fab fa-twitter a"><span> | </span> Twitter </a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <a href="#" class="icon-text fab fa-google a"><span> | </span> Google </a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <br>
            <a href="#" class="icon-text fab fa-linkedin a"><span> | </span> Linkedin </a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <a href="#" class="icon-text fab fa-youtube a"><span> | </span> Youtube </a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <a href="#" class="icon-text fab fa-instagram a"><span> | </span>Instagram </a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          </div>

        </div>
        <div class="col-4">



        </div>

      </div>
    </div>
  </footer>

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>

</html>