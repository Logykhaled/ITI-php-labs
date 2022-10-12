<?php include"db.php";

$id = intval($_GET['id']);	
$query="SELECT * FROM login_users WHERE userid=$id";
$result=mysqli_query($conn,$query);
if(!$result){
  die('Query failed'. mysqli_error());
}

while ($row= mysqli_fetch_assoc($result)){
   $viewName= $row['username'];
   $viewEmail=$row['useremail'];
   $viewGender=$row['gender'];
   if($row['mail_status']=='yes'){
    $viewStatus="You will Receive SMS From Us";
   }
   else {
    $viewStatus="";
   }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/ef1986dbfa.js" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
<div class="card" style="width: 30rem;">
    <center>
        <h1>View record</h1>
    </center>
    <hr>
    
    <div class="form-outline mb-4">
          <label class="form-label" for="form3Example3">Email address</label>
            <input type="email" id="form3Example3" class="form-control form-control-lg"
              placeholder="Enter a valid email address" value="<?php echo $viewEmail?>" name="email" readonly/>
           
    </div>

          <!-- name input -->
        <div class="form-outline mb-3">
            <label class="form-label" for="form3Example4">name</label>
            <input type="text" id="form3Example4" class="form-control form-control-lg "
              placeholder="Enter Name"  value="<?php echo $viewName?>"  name="username"readonly/>
           
        </div> 
        <!-- gender -->
        <div class="form-outline mb-3">
            <label class="form-label" for="form3Example4">gender</label>
            <input type="text" id="form3Example4" class="form-control form-control-lg "
              placeholder="Enter Name"  value="<?php echo $viewGender?>"  name="gender"readonly/>
           
        </div> 
        <div class="form-outline mb-3">
            <label class="form-label" for="form3Example4"><?php echo $viewStatus?></label>
            
        </div> 
       <a href="userdatails.php"><button type="button" class="btn btn-primary"  style=" width:'20px'">Back</button></a> 
        

  
    </div>
    </div>
</body>
</html>