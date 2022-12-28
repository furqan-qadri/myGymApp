<?php      
   session_start();
   include('Login2.php');  
    $ownerEmail = $_POST['Email'];  
    $ownerPassword = $_POST['Password'];  
      
        //to prevent from mysqli injection  
        $ownerEmail = stripcslashes($ownerEmail);  
        $ownerPassword = stripcslashes($ownerPassword);  
        $ownerEmail = mysqli_real_escape_string($con, $ownerEmail);  
        $ownerPassword = mysqli_real_escape_string($con, $ownerPassword);  
      
        $sql = "select *from owner where ownerEmail = '$ownerEmail' and ownerPassword = '$ownerPassword'";  
        $result = mysqli_query($con, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
        if($count == 1){  
            $_SESSION["ownerId"] = $row['ownerId'];
            $_SESSION["ownerName"] = $row['ownerName'];
            header("Location: dashboard.php");  
        }  
        else{  
            echo "<h1> Invalid username or password.</h1>";  
        }    
        ?>