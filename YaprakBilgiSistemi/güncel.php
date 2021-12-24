

<?php
require_once "database.php";


$yaprakbilgi1=$_POST['yaprakÖnBilgi'];
$yaprakbilgi2=$_POST['yaprakBilgi1'];
$yaprakbilgi3=$_POST['yaprakBilgi2'];
$yaprakıd=$_POST['yaprakId'];

 


$veri = new Database();
$veriler = $veri->Update("UPDATE yapraklar  SET yaprakÖnBilgi='$yaprakbilgi1',
                                                yaprakBİLGİ1='$yaprakbilgi2',
                                                yaprakBİLGİ2='$yaprakbilgi3'
                                             WHERE yaprakID='$yaprakıd'"        
) ;

 

 
?>


<script>

function uyarı(){
    alert("Güncelleme İşlemi yapıldı..");
    window.location.href = "admincontrol.php";
    
}
uyarı();



</script>