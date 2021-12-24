<?php
include("ayar.php");

session_start();

if (!isset($_SESSION["login"])) {

  echo "Bu sayfayı görüntüleme yetkiniz yoktur.";
  header("Refresh: 2; url=admin.php");
} else {

 


?>

  <html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs-3.3.7/jq-2.2.4/jszip-3.1.3/pdfmake-0.1.27/dt-1.10.15/b-1.3.1/b-html5-1.3.1/b-print-1.3.1/r-2.1.1/rg-1.0.0/datatables.min.css" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/site.css" rel="stylesheet">
    <title>Admin Paneli</title>
  </head>


  <body style="background-color:darkgray; ">
    <div class="container">
      
   
      <div class="row">
        <h1 class="baslık">Admin Paneli</h1>
        <hr>
      </div>
<div class="row">
<div class="col-md-10"><br>
      <div style="margin-left: 250px; margin-top:50px">
      <?php echo "<a href=\"logout.php\" class='btn btn-warning' style='width:100px;height:50px; padding:10px'><h3>Çıkış Yap</h3></a>"; ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <button onclick="gizleGoster();" class="btn btn-outline-dark" style="width:100px;height:50px ;padding:15px"><h3>Yapraklar</h3></button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <button onclick="ackapa();" class="btn btn-outline-dark" style="width:100px;height:50px;padding:15px""><h3>Mesajlar</h3></button>
      <br><br>
      </div>
    
        <div id="yapraklar" style="display:none">
        <table id="myTable" class="table table-bordered border-primary">
              <thead>
                <tr>
                  <th>Yaprak Ad</th>
                  <th>Ön Bilgi</th>
                  <th>Baslık-1</th>
                  <th>Bilgi-1</th>
                  <th>Baslık-2</th>
                  <th>Bilgi-2</th>
                  <th>resim url-1</th>
                  <th>resim url-2</th>
                  <th>resim url-3</th>
                </tr>
              </thead>
          <?php
          require_once "database.php";

          $veri = new Database();

          $veriler = $veri->getRows("SELECT * FROM yapraklar");
          foreach ($veriler as $degerler) {

          ?>


          
              <tbody>
                <tr>
                  <td><?php echo $degerler->yaprakAD ?></td>
                  <td><?php echo $degerler->yaprakÖnBilgi ?></td>
                  <td><?php echo $degerler->baslık1 ?></td>
                  <td><?php echo $degerler->yaprakBİLGİ1 ?></td>
                  <td><?php echo $degerler->baslık2 ?></td>
                  <td><?php echo $degerler->yaprakBİLGİ2 ?></td>
                  <td><?php echo $degerler->yaprakURL1 ?></td>
                  <td><?php echo $degerler->yaprakURL2 ?></td>
                  <td><?php echo $degerler->yaprakURL3 ?></td>
                  <td>
                    <a href="detay-admin.php?ID=<?= $degerler->yaprakID;  ?>" class="btn btn-success"  style="width: 75px;">Güncelle</a>
                    <br>
                    <br>
                    <a href="sil-admin.php?ID=<?= $degerler->yaprakID;  ?>" class="btn btn-danger" style="width: 75px;">Sil</a>

                  </td>
                </tr>
              </tbody>
              <?php } ?>
            </table>
       
         
          </div>

              <div id="mesajlar" style="display:none">
              <table id="myTable" class="table table-bordered border-primary">
                    <thead>
                      <tr>
                        <th>Ad Soyad</th>
                        <th>E Posta</th>
                        <th>konu</th>
                        <th>Mesaj</th>
                        <th>Tarih</th>

                      </tr>
                    </thead>
                <?php
                require_once "database.php";

                $veri = new Database();

                $mesajlar = $veri->getRows("SELECT * FROM mesajlar");
                foreach ($mesajlar as $deger2) {

                ?>


                 
                    <tbody>
                      <tr>
                        <td><?php echo $deger2->adsoyad ?></td>
                        <td><?php echo $deger2->mail ?></td>
                        <td><?php echo $deger2->mesaj ?></td>
                        <td><?php echo $deger2->tarih ?></td>

                        <td>
                        <a href="sil-admin-mesaj.php?ID=<?= $deger2->mesajID;  ?>" class="btn btn-danger" style="width: 75px;">Sil</a>

                        </td>
                      </tr>
                    </tbody>
                    <?php } ?>
                  </table>
                
              </div>
            </div>
          </div>
</div>
      


          <!-- Modal -->









          <script type="text/javascript" src="https://cdn.datatables.net/v/bs-3.3.7/jq-2.2.4/jszip-3.1.3/pdfmake-0.1.27/dt-1.10.15/b-1.3.1/b-html5-1.3.1/b-print-1.3.1/r-2.1.1/rg-1.0.0/datatables.min.js"></script>

          <script src="js/bootstrap.min.js"></script>
          <script>
           
            var yaprak = document.getElementById('yapraklar');
              var mesaj = document.getElementById('mesajlar');
             
            function gizleGoster() {
             
             
              if (yaprak.style.display == "none") 
              {
                yaprak.style.display ="";
                yaprak.style.background="white";
                mesaj.style.display="none";
              }else{
                yaprak.style.display ="none";
             
              }
               
             
            }
              function ackapa() {
             
                if (mesaj.style.display == "none") 
             {
               yaprak.style.display ="none";
               mesaj.style.display="";
               mesaj.style.background="white";
             }else{
               mesaj.style.display ="none";
            
             }}


            
          </script>


  </body>

  </html>
<?php
}


?>