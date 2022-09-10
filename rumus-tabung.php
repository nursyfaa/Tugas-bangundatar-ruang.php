<form action="rumus-tabung.php" method="POST">
    <h1> Rumus Luas dan Volume Tabung </h1>
    <p>Jari-Jari :</p>
    <input type="number" name="r" placeholder="Ex. 5" />
    <p>Tinggi :</p>
    <input type="number" name="t" placeholder="Ex. 5" /><br>
    <input type="submit" name="proses" value="Hitung Luas dan Volume" />
</form>

<?php
    if ( isset($_POST["proses"]) ) {
        echo "<hr>";
        $jari = $_POST["r"];
        $tinggi = $_POST["t"];
        $pi = 3.14;
        $luas = 2 * $pi * $jari * ($jari + $tinggi);
        $volume = $pi * $jari * $jari * $tinggi;

        echo "Jari-Jari  : $jari <br>";
        echo "Tinggi  : $tinggi <br>";
        echo "Luas Tabung : $luas <br>";
        echo "Volume Tabung  : $volume <br>";
        echo "<hr>";
    }
?>