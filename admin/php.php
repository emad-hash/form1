<?php
session_start();
require '../config.php';

if(isset($_POST['delete']))
{
    $Admin_id = mysqli_real_escape_string($conn, $_POST['delete']);

    $query = "DELETE FROM users WHERE id='$Admin_id' ";
    $query_run = mysqli_query($conn, $query);

    if($query_run)
    {   

        $_SESSION['message'] = "users Deleted Successfully";
        header("Location: admin.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "users Not Deleted";
        header("Location: admin.php");
        exit(0);
    }
}

if(isset($_POST['update']))
{
    $Admin_id = mysqli_real_escape_string($conn, $_POST['id']);

    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    $mobile = mysqli_real_escape_string($conn, $_POST['mobile']);
    $DateofBirth = mysqli_real_escape_string($conn, $_POST['DateofBirth']);

    $query = "UPDATE users SET username='$username', email='$email', password='$password', mobile='$mobile' , DateofBirth='$DateofBirth' WHERE id='$Admin_id' ";
    $query_run = mysqli_query($conn, $query);

    if($query_run)
    {
        $_SESSION['message'] = "users Updated Successfully";
        header("Location: admin.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "users Not Updated";
        header("Location: admin.php");
        exit(0);
    }

}
