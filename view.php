<?php 

include "config.php";

$sql = "Select * from users";

$result = $conn->query($sql);


?>




<table class="table" style="width:100%">

<thead>
<tr>
    <th>Firstname</th>
    <th>Lastname</th>
    <th>Middlename</th>
    <th>Gender</th>
    <th>Age</th>
    <th>Action</th>
  </tr>
</thead>
<tbody>
    <?php 
    if($result->num_rows > 0){
        while($row = $result->fetch_assoc()){
    ?>
    <tr>
    <td><?php echo $row['Firstname']; ?></td>
    <td><?php echo $row['Lastname']; ?></td>
    <td><?php echo $row['Middlenname']; ?></td>
    <td><?php echo $row['Gender']; ?></td>
    <td><?php echo $row['Age']; ?></td>
    <td>
            <a class="btn btn-success" href="update.php?id=<?php echo $row['Id']; ?>"> Update</a>
            <a class="btn btn-danger" href="delete.php?id=<?php echo $row['Id']; ?>"> Delete</a>
    </td>
    </tr>
    <?php      
        }
    }
    ?>
</tbody>

</table>
