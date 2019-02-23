<?php

    $nameCode = $_GET['name'];//การส่งค่าแบบ GET และต้องรับค่าแบบ GET เช่นกัน โดยรับค่าจาก Url http://localhost/Test-workshop/page1.php?name=ssru&country=Thailand
    $countryCode = $_GET['country']; // ใช้ $_GET รับค่าจาก URL จากตัวแปลที่มีชื่อว่า country

    //echo 'Hi this is page 2'." ".$nameCode;
   // echo ' From '." ".$countryCode;    //ดึงค่าจากตัวแปลที่มีชื่อว่า $countryCode ที่มีค่า country เก็บอยู่

?>
 <div>
    
    <h1>Profile<h1>
    Hi <b><?php echo $nameCode; ?></b>
    <br>
    From <u><?php echo $countryCode; ?></u>
    <hr />

</div>