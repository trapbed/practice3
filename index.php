<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        form{
            display: flex;
            flex-direction: column;
            gap: 1vmax;
        }
        input[type=date]{
            width: 25vmax;
        }
        input[type=submit]{
            width: 15vmax;
        }
        #birthH1{
            font-family: Arial, Helvetica, sans-serif;
            font-size: 1.4vmax;
        }
        #birthL{
            font-weight: normal;
            font-family: Arial, Helvetica, sans-serif;
            font-size: 1.2vmax;
        }
    </style>
</head>
<body>
    <?php
    // echo "<br>";
    // echo $date, date('d');
    // echo "<br>";
    // echo $month, date('m');
    // echo "<br>";
    // echo $year, date('Y');


    ?>
    <form action='check.php' method='post'>
        <h2 id='birthH1'>Сколько вам лет ?</h2>
        <label for='birth' id='birthL'>Ваша дата рождения:</label>
        <input name='birth' type='date'>
        <input type="submit" value="Отправить">
    </form>
</body>
</html>
<!-- 5 var -->