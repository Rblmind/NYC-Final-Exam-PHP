<!DOCTYPE html>
<html>

<head>
    <title>Mysql CRUD</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

</head>

<body style="padding-top : 50px;">


    <div class="container">
    <div class="row">
    <button type="button" class="btn btn-info" onclick="window.location.href='create.php'"> CREATE
    </button>
    </div>
        <div class="table-responsive" style="margin-top: 20px;">
            <?php

            include "view.php";

            ?>
        </div>
    </div>



</body>

</html>