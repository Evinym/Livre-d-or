<?php

if(isset($_POST['login-submit'])){
    require 'dbh.inc.php';

    $mailuid = $_POST['mail'];
    $password = $_POST['pwd'];
    
    if (empty($mailuid) || empty($password)) {
        header("Location: ../portail.php?error=emptyfields");
    exit();
    }
    else {
        $sql = "SELECT * FROM users WHERE uidUsers=? OR emailUsers=?;";
        $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt, $sql)){
            header("Location: ../portail.php?error=sqlerror");
            exit();
        }
        else{

            mysqli_stmt_bind_param($stmt, "ss", $mailuid, $mailuid);
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_get_result($stmt);
            if ($row = mysqli_fetch_assoc($result)) {
                $pwdCheck = password_verify($password, $row['pwdUsers']);
                if ($pwdCheck == false) {
                    header("Location: ../portail.php?error=wrongpwd");
                    exit();
                }
                else if ($pwdCheck == true) {
                    session_start();
                    $_SESSION['userId'] = $row['idUsers'];
                    $_SESSION['userUid'] = $row['uidUsers'];

                    header("Location: ../public/home.php?login=sucess");
                    exit();
                }
                else {
                    header("Location: ../portail.php?error=wrongpwd");
                    exit();
                }
            }
            else {
                header("Location: ../portail.php?error=nousers");
                exit();
            }

        }
    }

}
else {
    header("Location: ../portail.php");
    exit();
}