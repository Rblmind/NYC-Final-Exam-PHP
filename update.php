<?php 

include "config.php";

if(isset($_GET['id'])){
    $user_id = $_GET['id'];

    $sql = "Select * from users where id ='$user_id'";

    $result = $conn->query($sql);

    if($result->num_rows >0){
        while($row = $result->fetch_assoc()){
            $firstname = $row['Firstname'];
            $lastname = $row['Lastname'];
            $middlename = $row['Middlenname'];
            $gender = $row['Gender'];
            $age = $row['Age'];
            $id = $row['Id'];
        }
    }
}


if(isset($_POST['submit'])){
    $firstname = $_POST['fname'];
    $lastname = $_POST['lname'];
    $middlename = $_POST['mname'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];

    $sql = "Update users set Firstname='$firstname', Middlenname='$middlename', Lastname='$lastname', Gender='$gender', Age='$age' where Id = '$user_id'";

    $result = $conn->query($sql);

    if($result == TRUE){
        echo "<script>window.location.href='dashboard.php'</script>";
    }
    else{
        echo "Error : " .$conn->error;
    }
}


?>





<!DOCTYPE html>
<html>

<head>
    <title>Update Users</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

</head>

<body style="padding-top: 50px;">

    <div class="container">
        <form class="form-horizontal" method="POST">
            <input type="hidden" value="<?php echo $id; ?>" />
            <div class="form-group">
                <label class="control-label col-sm-2" for="fname" >First name:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="fname" name="fname" value="<?php echo $firstname; ?>">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="lname">Last name:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="lname" name="lname" value="<?php echo $lastname; ?>">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="mname">Middle name:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="mname" name="mname" value="<?php echo $middlename; ?>">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="age">Age:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="age" name="age" value="<?php echo $age; ?>">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="gender">Gender:</label>
                <div class="col-sm-10">
                    <select class="form-control" name="gender"><br>
                        <option value="M" <?php if($gender == 'M'){ echo 'selected'; } ?>>M</option>
                        <option value="F" <?php if($gender == 'F'){ echo 'selected'; } ?>>F</option>
                    </select><br>
                </div>
            </div>

            <button class="btn btn-primary" type="submit" id="submit" name="submit">Update</button>
            <button class="btn btn-danger" type="button" id="cancel" name="cancel" onclick="window.location.href='dashboard.php'">Cancel</button>
        </form>

    </div>


</body>

</html>