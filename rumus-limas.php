<form action="rumus-limas.php" method="POST">
    <h1> Rumus Volume Limas </h1>
    <p>Luas (a) :</p>
    <input type="number" name="alas" placeholder="Ex. 5" />
    <p>Tinggi (t) :</p>
    <input type="number" name="tinggi" placeholder="Ex. 5" /><br>
    <input type="submit" name="proses" value="Hitung Volume Limas" />
</form>

<?php
    if ( isset($_POST["proses"]) ) {
        echo "<hr>";
        $LuasAlas = $_POST["alas"];
        $tinggi = $_POST["tinggi"];
        $v = 1/3;
        $LPermukaan = $LuasAlas + $tinggi;
        $volume = 1/3 * $LuasAlas * $tinggi;

        echo "Alas : $LuasAlas <br>";
        echo "Tinggi : $tinggi <br>";
        echo "Luas Permukaan  : $LPermukaan <br>";
        echo "Volume Limas: $volume <br>";
    }
?>