<!DOCTYPE html>
<html>
    <head>
        <title>Tugas 2 - 118140025 - Mahdia Nisrina Maharani M</title>
    </head>
    <body>
        <form action="" method="get">
            <label for="nama">Masukkan nama: </label>
            <input type="text" id="nama" name="nama" required><br><br>
            <label for="warna">Masukkan warna font: </label>
            <input type="text" id="warna" name="warna" placeholder="kuning,biru,hijau"><br><br>
            <button type="submit" name="input">Input</button>
    </form><br>
    <?php
        function show($nama,$warna){
            $countname=strlen($nama);
            $sum=0;

            if ($countname<=10 && $countname>=1){
                for($i=1;$i<=$countname;$i++){
                    $sum=$sum+300;
                }
                if ($warna=="kuning"||$warna=="Kuning"){
                    echo "<font style='color:yellow;'>Nama: $nama <br> Total Harga: $sum <br></font>";
                }
                else if ($warna=="biru"||$warna=="Biru"){
                    echo "<font style='color:blue;'>Nama: $nama <br> Total Harga: $sum <br></font>"; 
                }
                else if ($warna=="hijau"||$warna=="Hijau"){
                    echo "<font style='color:green;'>Nama: $nama <br> Total Harga: $sum <br></font>";
                }
                else if ($warna==""){
                    echo "<font style='color:red;'>Nama: $nama <br> Harga total: $sum <br></font>";
                }
                else {
                    echo "Pilihan Warna tidak tersedia. *hanya tersedia kuning, biru dan hijau";
                }
            }
            else if ($countname>=11&& $countname<=20){
                for($i=1;$i<=$countname;$i++){
                    $sum=$sum+500;
                }
                if ($warna=="kuning"||$warna=="Kuning"){
                    echo "<font style='color:yellow;'>Nama: $nama <br> Total Harga: $sum <br></font>";
                }
                else if ($warna=="biru"||$warna=="Biru"){
                    echo "<font style='color:blue;'>Nama: $nama <br> Total Harga: $sum <br></font>"; 
                }
                else if ($warna=="hijau"||$warna=="Hijau"){
                    echo "<font style='color:green;'>Nama: $nama <br> Total Harga: $sum <br></font>";
                }
                else if ($warna==""){
                    echo "<font style='color:red;'>Nama: $nama <br> Harga total: $sum <br></font>";
                }
                else {
                    echo "Pilihan Warna tidak tersedia. *hanya tersedia kuning, biru dan hijau";
                }
            }
            else if ($countname>20){
                for($i=1;$i<=$countname;$i++){
                    $sum=$sum+700;
                }
                if ($warna=="kuning"||$warna=="Kuning"){
                    echo "<font style='color:yellow;'>Nama: $nama <br> Total Harga: $sum <br></font>";
                }
                else if ($warna=="biru"||$warna=="Biru"){
                    echo "<font style='color:blue;'>Nama: $nama <br> Total Harga: $sum <br></font>"; 
                }
                else if ($warna=="hijau"||$warna=="Hijau"){
                    echo "<font style='color:green;'>Nama: $nama <br> Total Harga: $sum <br></font>";
                }
                else if ($warna==""){
                    echo "<font style='color:red;'>Nama: $nama <br> Harga total: $sum <br></font>";
                }
                else {
                    echo "Pilihan Warna tidak tersedia. *hanya tersedia kuning, biru dan hijau";
                }
            }
        }
        if(isset($_GET["input"])){
            show($_GET["nama"],$_GET["warna"]);
        }
    ?>
    </body>
</html>