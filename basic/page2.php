<?php
    $name = $_POST['fName'];//การรับค่าจาก form.php โดยใช้การส่งค่าแบบ $_POST เป็นการส่งค่าแบบไฟล์ต่อไฟล์
    $lastname = $_POST['lName'];
    
    echo $name.' '.$lastname;
?>