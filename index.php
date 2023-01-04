<?php
    session_start();
    require 'dbcon.php';
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>Trainer Home</title>
</head>
<body>
  
    <div class="container mt-4">

        <?php include('message.php'); ?>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Trainer Details

                        

                            <a href="trainer-create.php" class="btn btn-primary float-end">Add trainers</a>

                            <a style="margin-right:50px; background-color:green;" href="active-trainers.php" class="btn btn-primary float-end">Active Trainers</a>
                        </h4>
                    </div>
                    <div class="card-body">

                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Email</th>

                                    <th>Phone</th>
                                    <th>Date of Birth</th>
                                    <th>IC</th>

                                    <th>Gender</th>
                                    <th>Plan</th>
                                    <!-- <th>Status</th> -->

                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>


                                <?php 

                                    $query = "SELECT * FROM trainer";
                                    $query_run = mysqli_query($con, $query);

                                    if(mysqli_num_rows($query_run) > 0)
                                    {
                                        foreach($query_run as $student)
                                        {
                                            ?>
                                            <tr>
                                                <td><?= $student['trainerId']; ?></td>
                                                <td><?= $student['trainerName']; ?></td>
                                                <td><?= $student['trainerEmail']; ?></td>
                                                <td><?= $student['trainerPhone']; ?></td>


                                                <td><?= $student['trainerDOB']; ?></td>

                                                <td><?= $student['trainerIC']; ?></td>

                                                <td><?= $student['trainerGender']; ?></td>

                                                <td><?= $student['planId']; ?></td>

                                                <!-- <td><?= $student['status']; ?></td> -->



                                                <td>
                                                    <a href="trainer-view.php?id=<?= $student['trainerId']; ?>" class="btn btn-info btn-sm">View</a>
                                                    <a href="trainer-edit.php?id=<?= $student['trainerId']; ?>" class="btn btn-success btn-sm">Edit</a>
                                                    <form action="code.php" method="POST" class="d-inline">
                                                        <button type="submit" name="delete_student" value="<?=$student['trainerId'];?>" class="btn btn-danger btn-sm">Delete</button>
                                                    </form>
                                                </td>
                                            </tr>

                                            <?php
                                        }
                                    }
                                    else
                                    {
                                        echo "<h5> No Record Found </h5>";
                                    }
                                ?>
                                
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>