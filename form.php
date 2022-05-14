
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1>Fridger</h1>
<form method="POST" action="">
    <label for="height">Выссота</label><input type="number" name="heigth">
    <label for="width">Ширина</label><input type="number" name="width">
    <label for="glyb">Глубина</label><input type="number" name="glyb">
<h1>Door</h1>
    <label for="heightDoor">Выссота</label> <input type="number" name="heightDoor">
    <label for="widthDoor">Выссота</label><input name="widthDoor" type="number">
<p><input type="submit" name="submit"/></p>
</form>

<?php
    if (isset($_POST['submit']))
    {
        $heigth = intval($_POST['heigth']);
        $width = intval($_POST['width']);
        $gl = intval($_POST['glyb']);
        $heightDoor = intval($_POST['heightDoor']);
        $widthDoor = intval($_POST['widthDoor']);

        $perimDoor = $heightDoor + $widthDoor;

        $perimFridge = [];
        $perimFridge[0] = $heigth + $width;
        $perimFridge[1] = $heigth + $gl;
        $perimFridge[2] = $width + $gl;

        foreach ($perimFridge as $value){
            if ($value > $perimDoor){
                echo "Холодилиник не пройдет";
            }
            else{
                echo "Холодилиник пройдет";
            }
        }

    }
?>

</body>
</html>

