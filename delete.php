<?php 

include "config.php";

if(isset($_GET['id'])){
    $user_id = $_GET['id'];

    $sql = "Delete from users where Id = '$user_id'";

    $result = $conn->query($sql);

    if($result == TRUE){
        echo "<script>window.location.href='dashboard.php'</script>";
    }
    else{
        echo "Error : " .$conn->error;
    }
}

?>