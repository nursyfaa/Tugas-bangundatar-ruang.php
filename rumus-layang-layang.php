<form action="rumus-layanglayang.php" method="POST">
    <h1> Rumus Luas dan Keliling Layang - Layang</h1>
    <p>luas :</p>
    <input type="number" name="d1"  placehorder="Ex. 5"/>
    <input type="number" name="d2"  placehorder="Ex. 5"/><br>
    <p>Keliling :</p><br>
    <input type="number" name="ab"  placehorder="Ex. 5"/><br><br>
    <input type="number" name="cd"  placehorder="Ex. 5"/><br><br>
    <input type="submit" name="proses"  value="Hitung Luas & Keliling" />
</from>

<?php
if ( isset($_POST["proses"]) ) {
    echo "<hr>";
    $D1 = $_POST["d1"];
    $D2 = $_POST["d2"];
    $AB = $_POST["ab"];
    $CD = $_POST["cd"];
    $x = 1/2;
    $luas = $x * $D1 * $D2 ;
    $keliling = 2 * ($AB + $CD);
    
     echo "Diagonal 1 : $D1 <br>";
     echo "Diagonal 2 : $D2 <br>";
     echo "AB : $D2 <br>";
     echo "CD : $D2 <br>";
     echo "Luas Layang - Layang : $luas <br>";
     echo "Keliling Layang - Layang : $keliling <br>";
}
?>