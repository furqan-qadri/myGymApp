<?php
session_start();
require 'dbcon.php';

if(isset($_POST['delete_student']))
{
    $student_id = mysqli_real_escape_string($con, $_POST['delete_student']);

    $query = "DELETE FROM trainers WHERE id='$student_id' ";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Student Deleted Successfully";
        header("Location: index.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Student Not Deleted";
        header("Location: index.php");
        exit(0);
    }
}

if(isset($_POST['update_student']))
{
    $student_id = mysqli_real_escape_string($con, $_POST['student_id']);

    $name = mysqli_real_escape_string($con, $_POST['name']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $phone = mysqli_real_escape_string($con, $_POST['phone']);
    $birthday = mysqli_real_escape_string($con, $_POST['birthday']);

    $ic = mysqli_real_escape_string($con, $_POST['ic']);
    $gender = mysqli_real_escape_string($con, $_POST['gender']);
    $plan = mysqli_real_escape_string($con, $_POST['plan']);
    $status = mysqli_real_escape_string($con, $_POST['status']);

    $query = "UPDATE trainers SET name='$name', email='$email', phone='$phone', birthday='$birthday',ic='$ic', gender='$gender', plan='$plan', status='$status',  WHERE id='$student_id' ";


    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Student Updated Successfully";
        header("Location: index.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Student Not Updated";
        header("Location: index.php");
        exit(0);
    }

}


if(isset($_POST['save_student']))
{
    $name = mysqli_real_escape_string($con, $_POST['name']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $phone = mysqli_real_escape_string($con, $_POST['phone']);
    $course = mysqli_real_escape_string($con, $_POST['course']);

    $ic = mysqli_real_escape_string($con, $_POST['ic']);
    $gender = mysqli_real_escape_string($con, $_POST['gender']);
    $plan = mysqli_real_escape_string($con, $_POST['plan']);
    $status = mysqli_real_escape_string($con, $_POST['status']);

    // $query = "INSERT INTO trainer (
    //     firstName,email,ic,lastName) VALUES ('$name','$email','$phone','$course')";

$query = "INSERT INTO trainers (
    name,email,phone,birthday,ic,gender,plan,status) VALUES ('$name','$email','$phone','$course','$ic','$gender','$plan','$status')";




    // firstName,lastName,ic,email
    // name,email,phone,course
    // )

    $query_run = mysqli_query($con, $query);
    // echo ("$name,$email");
    if($query_run)
    {
        $_SESSION['message'] = "Trainer Created Successfully";
        header("Location: trainer-create.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Trainer Not Created";
        header("Location: trainer-create.php");
        exit(0);
    }
}

?>