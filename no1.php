<!DOCTYPE html>
<html>
    <head></head>
    <body>
        <?php
             $tarif = 55500000;
             $kelas = "";
             echo "Tarif: $tarif <br>";
             if ($tarif >= 175000 && $tarif <= 300000) {
                 $kelas = "Basic";
                 echo "Tarif hotel adalah $tarif, Mendapat Hotel kelas $kelas";
             } else if ($tarif >= 300000 && $tarif <= 500000) {
                 $kelas = "Deluxe";
                 echo "Tarif hotel adalah $tarif, Mendapat Hotel kelas $kelas";
             } else if ($tarif >= 500000 && $tarif <= 1100000) {
                 $kelas = "Superior";
                 echo "Tarif hotel adalah $tarif, Mendapat Hotel kelas $kelas";
             } else if ($tarif >= 1100000 && $tarif <= 5000000) {
                 $kelas = "President";
                 echo "Tarif hotel adalah $tarif, Mendapat Hotel kelas $kelas";
             } else {
                 echo "Tarif hotel adalah $tarif, Tidak ada Hotel dengan harga $tarif";
             }
        ?>
    </body>
</html>