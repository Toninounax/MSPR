<?php
require_once '../includes/helpers.php';


$msg = "";
if(isset($_POST['buttonLogin'])) {
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);
    if ($email != "" && $password != "") {
        try {
            $query = "select * from `users` where `email`=:email and `password`=:password";
            $stmt = $db->prepare($query);
            $stmt->bindParam('username', $email, PDO::PARAM_STR);
            $stmt->bindValue('password', $password, PDO::PARAM_STR);
            $stmt->execute();
            $count = $stmt->rowCount();
            $row = $stmt->fetch(PDO::FETCH_ASSOC);
            if ($count == 1 && !empty($row)) {
                /******************** Your code ***********************/
                $_SESSION['sess_user_id'] = $row['uid'];


            } else {

            }
        } catch (PDOException $e) {
            echo "Error : " . $e->getMessage();
        }
    } else {
        $msg = "Both fields are required!";
    }
}