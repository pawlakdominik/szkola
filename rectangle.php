<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prostokąt</title>
</head>
<body>
    <h3>Kwadrat</h3>
    <form method="get">
        <input type="text" name="sideA" placeholder="Podaj długość boku a"><br>
        <input type="text" name="sideB" placeholder="Podaj długość boku b"><br><br>
        <input type="submit" name="button" value="Oblicz"><br>
    </form >
    <?php
    if (isset($_GET['button'])){
    if(!empty($_GET['sideA'])&&!empty($_GET['sideB'])){
        $sideA=str_replace(',','.', $_GET['sideA']);
        $sideB=str_replace(',','.', $_GET['sideB']);
        $area=$sideA*$sideB;
        $circuit=$sideA*2+$sideB*2;
        echo <<< RESULT
        <hr>
        Pole prostokąta wynosi: $area cm<sup>2</sup><br>
        Obwod prostokąta wynosi: $circuit cm
RESULT;
    }
    else{
        echo 'Wypelnij wszystkie pola';
        }
    }
    ?>
</body>
</html>