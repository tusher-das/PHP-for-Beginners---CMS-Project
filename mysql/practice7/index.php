<?php

if (isset($_POST['submit'])) {
    $name     = $_POST['username'];
    $batch    = $_POST['batch'];
    $password = $_POST['password'];

    $connection = mysqli_connect("localhost", "root", "", "practice7");
    if (!$connection) {
        echo "Database connection failed!";
    }

    $query = "INSERT INTO students(name,batch,password) ";
    $query .= "VALUES ('$name','$batch','$password')";

    $result = mysqli_query($connection, $query);

    if (!$result) {
        die("Querey Failed" . mysqli_error());
    } else {
        echo "Student created successfully!";
    }
}

function showStudentList()
{
    global $connection;

    $query = "SELECT * FROM students";

    $result = mysqli_query($connection, $query);

    if (!$result) {
        die("Querey Failed" . mysqli_error());
    } else {
        while ($row = mysqli_fetch_assoc($result)) {
            ?>
            <pre>
                            <?php
                            print_r($row);
                            ?>
                        </pre>
            <?php
        }
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practice 7</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
</head>

<body>
    <h1 class="text-center">Practice 7</h1>

    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h3 class="text-center">Create Students</h3>
                <form action="index.php" method="POST">
                    <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" name="username" class="form-control" id="" required>
                    </div>
                    <div class="form-group">
                        <label for="batch">Batch</label>
                        <input type="text" name="batch" class="form-control" id="" required>
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" name="password" class="form-control" id="" required>
                    </div>
                    <br>
                    <input type="submit" value="CREATE" name="submit" class="btn btn-primary">
                </form>
            </div>
            <div class="col-md-6">
                <h3 class="text-center">Student List</h3>
                <?php showStudentList(); ?>
            </div>
        </div>
    </div>
</body>

</html>