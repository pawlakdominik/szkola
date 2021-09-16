<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8">
    <title>Dołączanie pliku 3_1.php</title>
</head>
<body>
    <h3>Początek pliku</h3>
    <?php
    include '3_1.php';
    include_once '3_1.php';
    require '3_1.php';
    require_once '3_1.php'; 
    ?>
    <h3>Koniec pliku</h3>
</body>
</html>