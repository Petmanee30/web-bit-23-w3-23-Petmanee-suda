<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        echo "<h1 style='color:pink'>w1-Petmanee suda BIT 2/3 No.23<h1>";
    ?>

    <form action="">
        <label for="">เลขแม่สูตรคูณ</label> <br>
        <input type="number" name="num" id="">

        <input type="submit" value="คำนวณ">
        
    </form>

    <?php
    if(isset($_GET["num"])){

        $num = $_GET["num"];

        echo "<h2>สูตรคูณแม่ " . $num . "</h2>";

        for($i = 1; $i <= 12; $i++){
            echo $i . "<br>";

        }

    }

    ?>

</body>
</html>