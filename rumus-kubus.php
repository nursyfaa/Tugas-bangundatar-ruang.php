<form action="rumus-kubus.php" method="POST">
    <h1> Rumus Volume Kubus </h1>
    <p>Sisi :</p>
    <input type="number" name="sisi" placeholder="Ex. 5" /><br>
    <input type="number" name="sisi" placeholder="Ex. 5" /><br>
    <input type="number" name="sisi" placeholder="Ex. 5" /><br>
    <input type="submit" name="proses" value="Hitung Volume Kubus" />
</form>

<?php
    if ( isset($_POST["proses"]) ) {
        echo "<hr>";
        $sisi = $_POST["sisi"];
        $volume = $sisi * $sisi * $sisi;

        echo "Sisi : $sisi <br>";
        echo "Volume : $volume <br>";
    }
?>