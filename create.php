<?php include 'template/header.php';?>
<?php
    if(!$_SESSION['username']){
        header("Location: login.php");
        exit();
    }
?>
<?php
$action = $_GET['action'];
if($action){
    if($action === 'create'){
        $topic =$_POST['topic'];
        $content = $_POST['content'];
        $userID = $_SESSION['user_id'];

        $sql = "INSERT INTO table_board (board_topic,
                                         board_content,
                                         board_member_id) 
                                         VALUES ( '$topic','$content','$userID')";
        
        $result = $conn->exec($sql);

        if($result){
            echo "<script>alert('สร้างสำเร็จ')</script>";
            echo "<script>window.location='home.php'</script>";
        }else{
            echo "<script>alert('ล้มเหลว')</script>";
            echo "<script>window.history.back()</script>";

            
        }
        
        //echo 'Create worked';
        exit();
    }
}

?>

    <div class="container">
    <h2>Create Board.</h2>
            <form action="create.php?action=create" method= "post">

                <div class="form-group">
                    <label for="topic">Topic</label>
                    <input class="form-control" type="text" name="topic" id="topic"/>
                </div>
                <div class="form-group">
                    <label for="content">Content</label>
                    <textarea class="form-control" name="content" id="content" cols="30" rows="10"></textarea>
                </div>
                <div class="form=group">
                <input type="submit" class="btn btn-primary" value="Create">
                </div>
            </form>
    </div>


 <?php include 'template/footer.php';?>