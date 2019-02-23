<?php include 'template/header.php'; ?>
<?php
    if($_SESSION['username']){
        header("Location: home.php");
        exit();
    }
?>
<?php
    $actinon = $_GET['action'];

    if($actinon) {
        if($actinon === 'register') {
         $username = $_POST['username'];
         $password = $_POST['password'];
         $name     = $_POST['name'];
         $lastName = $_POST['lastName'];
         $email    = $_POST['email'];
         $gender   = $_POST['gender'];

            $hashPassword = hash('SHA256',$password);
            
            $sql = "INSERT INTO table_member (
                                        member_username,
                                        member_password,
                                        member_role,
                                        member_name,
                                        member_lastName,
                                        member_email,
                                        member_gender
                                    ) VALUES (
                                        '$username',
                                        '$hashPassword',
                                        '0',
                                        '$name',
                                        '$lastName',
                                        '$email',
                                        '$gender'
                                    )";
            $result = $conn->exec($sql);

            if($result) {
                echo "<script>alert('ลงทะเบียนสำเร็จ !')</script>";
                echo "<script>window.location= 'login.php'</script>";
            } else {
                echo "<script>alert('ลงทะเบียนไม่สำเร็จ !!')</script>";
                echo "<script>window.history.back('')</script>";
            }
        }
    }
    
    
?>

<div class="container"> 
<h2>Register</h2>
    <form action="register.php?action=register" method="post">
        <div class="form-group">
        <label for="username">Username</label>
        <input type="text" placeholder="Username" name="username" id="username" class="form-control">
        </div>

        <div class="form-group">
        <label for="password">Password</label>
        <input type="password" placeholder="Password" name="password" id="password" class="form-control">
        </div>

        <div class="form-group">
        <label for="name">Name</label>
        <input type="text" placeholder="Name" name="name" id="name" class="form-control">
        </div>

        <div class="form-group">
        <label for="lastname">Lastname</label>
        <input type="text" placeholder="lastname" name="lastName" id="lastName" class="form-control">
        </div>

        <div class="form-group">
        <label for="email">Email</label>
        <input type="email" placeholder="Email" name="email" id="email" class="form-control">
        </div>

        <div class="form-check">
        <input type="radio" name="gender"  value="M" id="m" class="form-check-input">
        <label for="m" class="form-check-label">Male</label>
        </div>

        <div class="form-check">
        <input type="radio" name="gender" value="F" id="f" class="form-check-input">
        <label for="f" class="form-check-label">Female</label>
        </div>

        <div class="form=check">
        <input type="submit" class="btn btn-primary" value="register">
        </div>
    </form>
</div>

<?php include 'template/footer.php'; ?>