<?php include "db.php";

$query="SELECT * FROM login_users";

$result=mysqli_query($conn,$query);
if(!$result){
  die('Query failed'. mysqli_error());
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/ef1986dbfa.js" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
<h3>User Details</h3>

<table class="table table-bordered">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Gender</th>
      <th scope="col">Mail Status</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <?php
    if (mysqli_num_rows($result) > 0) {
    while ($row= mysqli_fetch_assoc($result)){?>
      <tr>
         <td><?php echo $row['userid']; ?></td>
         <td><?php echo $row['username']; ?></td>
         <td><?php echo $row['useremail']; ?></td>
         <td><?php echo $row['gender']; ?></td>
        <td><?php echo $row['mail_status']; ?></td>
        <td>
          <i class="fa-solid fa-trash"></i>
          <a href="updateuser.php?id=<?php echo $row['userid'];?>" ><i class="fa-sharp fa-solid fa-pen-to-square"></i> </a>
          <a href="view.php?id=<?php echo $row['userid'];?>" ><i class="fa-solid fa-eye"></i></a>
        </td>
    </tr>
    <?php
    }}?>
  
  </tbody>
</table>

<div>

  <a href="login.php"><button type="button" class="btn btn-success">Add New user</button>   
</div>
</body>
</html>
