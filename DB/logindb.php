
<?php
session_start();
if(isset($_POST['login-btn'])){
    require 'connect.php';

    $_SESSION['icnum'] = $_POST['icnum'];
    $_SESSION['password'] = $_POST['psw'];



        
            $sql = "SELECT * FROM admine WHERE icnum=?;";
            $stmt = mysqli_stmt_init($conn);
            if(!mysqli_stmt_prepare($stmt,$sql)){
                header("location: ../login.php?error=sqlerror");
                exit();
            }
            else{
                mysqli_stmt_bind_param($stmt, "s", $_SESSION['icnum']);
                mysqli_stmt_execute($stmt);
                $result= mysqli_stmt_get_result($stmt);

                if($row = mysqli_fetch_assoc($result)){
                    // $passcheck = password_verify($password, $row['pass']);

                    //if($passcheck == false){
                    if($_SESSION['password'] != $row['pass']){
                        header("location: ../login.php?error=wrongpassword");
                        session_destroy();
                        exit();
                    
                    }
                    else {
                        $_SESSION['userid'] = $row['adID'];
                        $_SESSION['name'] = $row['names'];

                        header("location: ../index.php?login=success");
                        exit(); 
                        
                    }
                
            }
            else{
                header("location: ../login.php?error=no user");
                exit();
            }
        }
    }
    


else {
    header("location: ../login.php");
    exit();
}