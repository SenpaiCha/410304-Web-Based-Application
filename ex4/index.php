<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>6440213209 | Year to day(s)</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1 class="titleText">DAY SINCE CALCULATOR</h1>
    <hr class="style-one">
    <div class="contrainer">
        <div class="box">
            <h2 class="LabelInfo">WHAT IS YOUR BIRTHDAY</h2>
            <form method="post">
                <input class="dateInput" type="date" id="birthday" name="birthday">
                <input type="Submit" value="คำนวณ" class="button-68">
            </form>
            
        </div>
        <?php
        if (isset($_POST["birthday"])) {
            $date = $_POST["birthday"];
            $currentDate = date('Y-m-d');
            $diff = strtotime($currentDate) - strtotime($date);
            $dayDifference = floor($diff / (60 * 60 * 24));
            echo "<p style='color:red; text-align: center'>คุณเกิดมาแล้ว $dayDifference วัน</p>";
        }
        ?>
    </div>
    
</body>
</html>
