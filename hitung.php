<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Audiowide&display=swap" rel="stylesheet">
</head>
<body>
    <div class="container">
    <h1>Luas Permukaan Prisma Segitiga</h1>

    

    <form action="" method="post">
        <table>
            <tr>
                <td><label for="panjang_sisi_segitiga">Panjang Sisi Segitiga</label></td>
                <td>: <input type="number" name="panjang_sisi_segitiga" required><br></td>
            </tr>
            <tr>
                <td><label for="tinggi_prisma">Tinggi Prisma</label></td>
                <td>: <input type="number" name="tinggi_prisma" required><br></td>
            </tr>
            <tr>
                <td colspan='2' align='center'><button type="submit" name="hitung">Hitung Luas Permukaan</button></td>
            </tr>
        </table> 
    </form>

    <?php
    if (isset($_POST['hitung'])) {
        $alas = $_POST['panjang_sisi_segitiga'];
        $tinggi_prisma = $_POST['tinggi_prisma'];

        //Luas alas prisma segitiga
        $a =(sqrt(pow($alas, 2) - pow($alas * 0.5, 2))); 
        $l_segitiga = 0.5 * ($alas * $a);
        // Rumus luas permukaan prisma segitiga
        $L_permukaan = ($l_segitiga * 2) + (($tinggi_prisma * $alas) * 3);


    echo "<div class='wrap-hasil'>";
    echo "<table class='hasil'>";
    echo "<tr>";
    echo "<td>Panjang Sisi Alas Prisma Segitiga adalah</td>";
    echo "<td>: $alas</td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td> Tinggi Prisma Segitiga adalah </td>";
    echo "<td>: $tinggi_prisma </td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td> Luas Permukaan Prisma Segitiga adalah </td>";
    echo "<td>: " . number_format($L_permukaan,2). " </td>";
    echo "</tr>";
    echo "</table>";
    echo "</div>";

    }

    ?>
    </div>
</body>
</html>