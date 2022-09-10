<form action="rumus-persegi-panjang.php" method="POST">
    <h1> Rumus Luas dan Keliling Persegi Panjang </h1>
    <p>Panjang (P) :</p>
    <input type="number" name="panjang" placeholder="Ex. 5" />
    <br>
    <p>Lebar (L) :</p>
    <input type="number" name="lebar" placeholder="Ex. 5" /><br>
    <input type="submit" name="proses" value="Hitung Luas & Keliling" />
</form>

<?php
    if ( isset($_POST["proses"]) ) {
        echo "<hr>";
        $panjang = $_POST["panjang"];
        $lebar = $_POST["lebar"];
        $luas = $panjang * $lebar;
        $keliling = 2 * ($panjang + $lebar);

        echo "panjang : $panjang <br>";
        echo "Lebar : $lebar <br>";
        echo "Luas Persegi Panjang : $luas <br>";
        echo "Keliling Persegi Panjang : $keliling <br>";
    }
?>