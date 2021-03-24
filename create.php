<?php

include "config.php";

if (isset($_POST['submit'])) {
    $firstname = $_POST['fname'];
    $lastname = $_POST['lname'];
    $middlename = $_POST['mname'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];

    $sql = "Insert into users values (0,'$firstname','$lastname','$middlename','$age','$gender')";

    $result = $conn->query($sql);

    if ($result == TRUE) {
        echo "<script>window.location.href='dashboard.php'</script>";
    } else {
        echo "Error : " . $conn->error;
    }
}


?>

<!DOCTYPE html>
<html>

<head>
    <title>Create Users</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

</head>

<body style="padding-top: 50px;">

    <div class="container">
        <form class="form-horizontal" method="POST">

            <div class="form-group">
                <label class="control-label col-sm-2" for="fname">First name:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="fname" name="fname"><br>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="lname">Last name:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="lname" name="lname"><br>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="mname">Middle name:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="mname" name="mname"><br>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="age">Age:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="age" name="age"><br>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="gender">Gender:</label>
                <div class="col-sm-10">
                    <select class="form-control" name="gender"><br>
                        <option value="M">M</option>
                        <option value="F">F</option>
                    </select><br>
                </div>
            </div>

            <button class="btn btn-primary" type="submit" id="submit" name="submit">Add</button>
            <button class="btn btn-danger" type="button" id="cancel" name="cancel" onclick="window.location.href='dashboard.php'">Cancel</button>
        </form>

    </div>


</body>

</html>