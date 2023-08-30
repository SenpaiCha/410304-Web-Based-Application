<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>showdata</title>
    <link rel="stylesheet" type="text/css" href="./style.css">
</head>
<body>
<?php
echo "ชื่อผู้ทำแบบฟอร์ม :".$_POST["pp_name"]."<br>";
echo "เพศผู้เข้าทำแบบฟอร์ม :".$_POST["pp_sex"]."<br>";
echo "คำถามข้อที่ 1 ตอบ ".$_POST["pp_question1"]."<br>";
echo "คำถามข้อที่ 2 ตอบ ".$_POST["pp_question2"]."<br>";

?>
</body>
</html>