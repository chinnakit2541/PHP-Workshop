<?php
    session_start();//session จะต้องอยู่ข้างบนเสมอ
    
    $username = $_POST['username'];

    // echo $username

    $_SESSION['uname'] = $username;

?>

    <form action="session1.php" method="post">
        Username : <input type="text" name="username" >
            <input type="submit" value="กดดิ">
    </form>