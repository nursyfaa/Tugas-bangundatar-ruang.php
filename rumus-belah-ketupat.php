<form action="rumus-belahketupat.php" method="POST">
    <h1> Rumus luas dan keliling belah ketupat</h1>
    <p>luas :</p>
    <input type="number" name="d1"  placehorder="Ex. 5"/>
    <input type="number" name="d2"  placehorder="Ex. 5"/><br>
    <p>Keliling :</p><br>
    <input type="number" name="s"  placehorder="Ex. 5"/><br><br>
    <input type="submit" name="proses"  value="Hitung Luas & Keliling"
    />
</from>

<?php
if ( isset($_POST["proses"]) ) {
    echo "<hr>";
    $d1 = $_POST["d1"];
    $d2 = $_POST["d2"];
    $s = $_POST["s"];
    $y = 1/2;
    $luas = y * $d1 * $d2 ;
    $keliling = 4 * $s;

    echo "Luas belah ketupat : $luas <br>";
    echo "Keliling belah ketupat : $keliling <br>";
}
?>