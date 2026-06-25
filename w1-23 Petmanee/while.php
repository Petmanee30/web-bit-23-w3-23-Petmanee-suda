<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>index Loop</title>

    <style>
        body{
            font-family: Arial, sans-serif;
            background: linear-gradient(to right, #74ebd5, #9face6);
            margin: 0;
            padding: 0;
        }

        .container{
            width: 500px;
            margin: 50px auto;
            background: white;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.2);
        }

        h1{
            color: #ff69b4;
            text-align: center;
        }

        h2{
            color: #4a4a4a;
        }

        a{
            text-decoration: none;
            color: #6a5acd;
            font-weight: bold;
        }

        label{
            font-size: 18px;
            font-weight: bold;
        }

        input[type="number"]{
            width: 60%;
            padding: 10px;
            margin-top: 10px;
            border: 2px solid #ddd;
            border-radius: 8px;
        }

        input[type="submit"]{
            padding: 10px 15px;
            background: #6a5acd;
            color: white;
            border: none;
            border-radius: 8px;
            cursor: pointer;
        }

        input[type="submit"]:hover{
            background: #5848c2;
        }

        .result{
            margin-top: 20px;
            padding: 15px;
            background: #f5f5f5;
            border-radius: 10px;
        }

        .line{
            padding: 5px;
            border-bottom: 1px solid #ddd;
        }
    </style>
</head>

<body>

<div class="container">

<?php
echo "<h1>w1-Petmanee suda BIT 2/3 No.23</h1>";
?>

<a href="index.php">index Loop</a>

<form action="">
    <br><br>

    <label>เลขแม่สูตรคูณ</label><br>

    <input type="number" name="num">
    <input type="submit" value="คำนวณ">

</form>

<?php
if(isset($_GET["num"])){

    $num = $_GET["num"];

    echo "<div class='result'>";
    echo "<h2>สูตรคูณแม่ $num</h2>";

    $i = 1;

    while($i <= 12){
        echo "<div class='line'>$num x $i = ".($num*$i)."</div>";
        $i++;
    }

    echo "</div>";
} 
?>
</body>
</html>