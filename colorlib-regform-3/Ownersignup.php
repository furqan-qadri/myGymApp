<?php
session_start();
$firstName= $_POST['firstName'];
// $lastName= $_POST['lastName'];
$gender= $_POST['gender'];
$email= $_POST['email'];
$birthday= $_POST['birthday'];
$password= $_POST['password'];
$phone= $_POST['phone'];
$ic= $_POST['ic'];

// echo "dfdfds";



$conn = new mysqli ('localhost','root','','gym2');
 
if ($conn->connect_error){
    die('Connection Failed : '.$conn->connect_error);}
// } else{
//     $stmt= $conn ->prepare("insert into owner(ownerName,ownerGender,ownerEmail,ownerDOB,ownerPassword,ownerPhone,ownerIC) values(?,?,?,?,?,?,?)");

//     $stmt->bind_param("sssssss", $firstName,$gender,$email,$birthday,$password,$phone,$ic);
//     $stmt->execute();


//     echo "registration successful";
//     $stmt->close();
//     $conn->close();
// }




$query = "insert into owners (ownerName,ownerGender,ownerEmail,ownerDOB,ownerPassword,ownerPhone,ownerIC) values ('$firstName','$gender','$email','$birthday','$password','$phone','$ic' )";

// $query = "insert into owners (ownerName,ownerGender,ownerEmail) values ('$firstName','$gender','$email')";

// $query = "insert into owners (ownerName) values ('$firstName')";


$query_run = mysqli_query($conn, $query);

// echo ("$firstName,$gender,$email");

// echo ("$name,$email,$gender,$status,$planId, $name',$email,$phone,$dob,$ic,'$gender,$salary,$planId,$status");

// $sql = "INSERT INTO owner (firstname, lastname, email)
//     VALUES ('John', 'Doe', 'john@example.com')";
    
//     if ($conn->query($sql) === TRUE) {
//         echo "New record created successfully";
//     } else {
//         echo "Error: " . $sql . "<br>" . $conn->error;
//     }

// echo "$query_run";
    if($query_run)
    {
        $_SESSION['message'] = "Trainer Created Successfully";
        header("Location: ownersignupsuccess.php"); 
        exit(0);
    }

    echo $_SESSION['message'];
    // else
    // {
    //     // $_SESSION['message'] = "Trainer Not Created";
    //     // header("Location: index.html");
    //     // exit(0);
    //     echo "not successful";
    // }


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge"> -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
</head>
<body>
<div>
<a href="form copy.php">Login</a>

</div>
</body>
</html>