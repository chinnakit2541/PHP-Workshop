<?php
    $host   ='localhost';
    $user   ='root';
    $pwd    ='12345678';
    $dbName ='webboard';


    try {
        $conn = new PDO("mysql:host=$host;dbname=$dbName", $user, $pwd);
       

        //$sql = 'SELECT * FROM profile_table';
        //$query = $conn->query($sql);//คือการดึงข้อมูลจาก data basae
       // $results = $query->fetchAll(PDO::FETCH_ASSOC);//FETCH_ASSOC คือการดึงข้อมูลจากหัวตาราง


        //print_r($results);

        //foreach($dbh->query('') as $row) {
        //      print_r($row);
        //}
        //$dbh = null;
    } catch (PDOException $e) {
        print "Error!: " . $e->getMessage() . "<br/>";
        die();
    }
?>
