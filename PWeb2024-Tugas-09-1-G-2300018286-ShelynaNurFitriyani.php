<!DOCTYPE html>
<html>
<head>
    <title>Kalkulator Gaji Bersih</title>
</head>
<body>
    <h2>Masukkan Detail Gaji Anda</h2>
    <form method="post" action="">
        Gaji Sebelum Pajak: <input type="text" name="gaji"><br><br>
        Persentase Pajak (%): <input type="text" name="pajak"><br><br>
        <input type="submit" name="submit">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $gaji = $_POST['gaji'];
        $pajak = $_POST['pajak'] / 100;  
        
        $jumlah_pajak = $gaji * $pajak;
        $thp = $gaji - $jumlah_pajak;

        echo "<h3>Hasil Perhitungan</h3>";
        echo "Gaji sebelum pajak = Rp. $gaji <br>";
        echo "Jumlah pajak yang dibayar = Rp. $jumlah_pajak <br>";
        echo "Gaji yang dibawa pulang = Rp. $thp";
    }
    ?>
</body>
</html>
