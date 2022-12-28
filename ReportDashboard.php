<?php
require_once('Login2.php');

$query = 'SELECT member.memberId,plan.planId, plan.planCost, trainer.trainerId, trainer.trainerSalary, member.memberStatus
                            FROM member, plan, trainer
                            WHERE member.planId = plan.planId And member.trainerId = trainer.trainerId';
                            $query_run = mysqli_query($con, $query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="stylesheet" href="style.css" />
<title>Report</title>
 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"  />
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</head>

<style>
.bg-container {
	background-image: url("Login2.jpg");
	width: 100%;
	height: 100%;
	border: 1px solid white;
	box-sizing: border-box;
	background-size: cover;
	background-repeat: no-repeat;
	background-position: center center;
}
h1 {
	text-align: center;
}
</style>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light bg-warning">

<div >
    <a class="navbar-brand" href="#">
      <img src="Logo.jpg" height="80" alt="Logo"
        loading="lazy" />
    </a>
  </div>

  <div class="container-fluid">
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="dashboard.html">Dashboard</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="memberBranch1.php">Members</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="plan.php">Plans</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Trainers</a>
        </li>
      </ul>
    </div>
  </div>
</nav>


	<div class="bg-container rounded" >
	<div class="container p-3 my-3 border bg-white rounded-pill">
	
  <h1><i class="fa-solid fa-user"></i>  Total Members</h1>
  <h2 align="center">
    <?php $query = "SELECT *  FROM member";
        if ($result = mysqli_query($con, $query)) {
  
    // Return the number of rows in result set
    $rowcount = mysqli_num_rows( $result );
      
    // Display result
    printf($rowcount);
}
     ?>
     </h2>
</div>

<div class="container p-3 my-3 bg-white text-black rounded-pill">
  <h1>  <i class="fa-solid fa-dumbbell"></i>  Total Trainers </h1>
  <h2 align="center"><?php $query = "SELECT *  FROM trainer";
        if ($result = mysqli_query($con, $query)) {
  
    // Return the number of rows in result set
    $rowcount = mysqli_num_rows( $result );
      
    // Display result
    printf($rowcount);
}
     ?></h2>
</div>


<div class="container p-3 my-3 bg-white text-black rounded-pill">
  <h1> <i class="fa-solid fa-person-walking"></i>    Number of Plans</h1>
  <h2 align="center"><?php $query = "SELECT *  FROM plan";
        if ($result = mysqli_query($con, $query)) {
  
    // Return the number of rows in result set
    $rowcount = mysqli_num_rows( $result );
      
    // Display result
    printf( $rowcount);
}
     ?></h2>
</div>


<div class="container p-3 my-3 bg-white text-black rounded-pill">
  <h1>   <i class="fa-solid fa-up-long"></i>   Profit</h1>
  <h2 align="center"><?php $query = "SELECT SUM(planCost)  FROM member, plan WHERE plan.planId = member.planId";
        if ($result = mysqli_query($con, $query)) {
  
    // Return the number of rows in result set
    $rowcount = mysqli_num_rows( $result );
    while($row = mysqli_fetch_array($result)){
        echo " Total profit: ". $row['SUM(planCost)'];
        echo "<br>";
    }
    // Display result
    //printf("Total rows in this table : %d\n", $rowcount);
}
     ?></h2>
</div>

<div class="container p-3 my-3 bg-white text-black rounded-pill">
  <h1><i class="fa-solid fa-arrow-down-long"></i>   Expenses</h1>
  <h2 align="center"><?php $query = "SELECT  SUM(trainerSalary)  FROM trainer";
        if ($result = mysqli_query($con, $query)) {
  
    // Return the number of rows in result set
    $rowcount = mysqli_num_rows( $result );
    while($row = mysqli_fetch_array($result)){
        echo " Total cost: ". $row['SUM(trainerSalary)'];
        echo "<br>";
    }
    

    // Display result
    //printf("Total rows in this table : %d\n", $rowcount);
}
     ?></h2>
</div>
<div class="container p-3 my-3 bg-white text-black rounded-pill">
  <h1><i class="fa-solid fa-user"></i>    Total active members</h1>
  <h2 align="center"><?php $query = "SELECT  *  FROM member where memberStatus='Active'";
        if ($result = mysqli_query($con, $query)) {
  
    // Return the number of rows in result set
    $rowcount = mysqli_num_rows( $result );
    
    

    // Display result
    printf("Total rows in this table : %d\n", $rowcount);
}
     ?></h2>
</div>

<div class="container p-3 my-3 bg-white text-black rounded-pill">
  <h1><i class="fa-solid fa-user"></i>    Total Inactive members</h1>
  <h2 align="center"><?php $query = "SELECT  *  FROM member where memberStatus='Not Active'";
        if ($result = mysqli_query($con, $query)) {
  
    // Return the number of rows in result set
    $rowcount = mysqli_num_rows( $result );
    
    

    // Display result
    printf("Total rows in this table : %d\n", $rowcount);
}
     ?></h2>
</div>
	</div>
    <footer class="bg-light text-center text-lg-start">
  <!-- Grid container -->
  <div class="container p-4">
    <!--Grid row-->
    <div class="row">
      <!--Grid column-->
      <div class="col-lg-6 col-md-12 mb-4 mb-md-0">
        <h5 class="text-uppercase">My Gym</h5>

        <p>
        By educating, motivating, and offering the most effective workout programme and nutrition lifestyle system ever developed, My Gym Fitness will significantly improve the quality of life for thousands of Malaysians. While pursuing their passions and serving their clients, our employees will change lives and have many possibilities for growth.
        </p>

      </div>
      <!--Grid column-->

      <!--Grid column-->
      <div class="col-lg-6 col-md-12 mb-4 mb-md-0">
        <h5 class="text-uppercase">Contacts</h5>
        <h5>Alhadi@graduate.utm.my</h5>
        <h5>+601137122623</h5>
</body>
</html>