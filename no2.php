<html> 
    <head> 
        <title>Web Porsi</title> 
    </head> 
    <body> <h2>Diskon Makan</h2> 

    <form method="post" action=""> 
    Langganan: <br>
    <input type="radio" name="langganan" value="Y" /> Ya<br />
    <input type="radio" name="langganan" value="T" /> Tidak<br />
    <input type="submit" name="submit" value="Submit" /> 
    </form> 

<?php
if(isset($_POST['langganan'])){ 
$langganan=$_POST['langganan'];
$porsi = 1;
echo "Porsi: $porsi <br>";
if ($langganan == "Y" ){
   if($porsi >= 1){
    $diskon = 15000 * 10/100;
    $hargaTotal = 15000 * $porsi - $diskon;
    echo "Harga Total-nya : $hargaTotal";
   }
}
else{
    if($porsi >= 2){
        $diskon = 15000 * 5/100;
        $hargaTotal = 15000 * $porsi - $diskon;
        echo "Harga Total-nya : $hargaTotal";
    }else{
        $hargaTotal = 15000 * $porsi;
        echo "Harga Total-nya : $hargaTotal";
    }
}
}
?>
</body> 
</html>