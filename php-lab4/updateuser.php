<?php include"db.php";

$id = intval($_GET['id']);	
$query="SELECT * FROM login_users WHERE userid=$id";
$result=mysqli_query($conn,$query);
if(!$result){
  die('Query failed'. mysqli_error());
}

while ($row= mysqli_fetch_assoc($result)){
   $editName= $row['username'];
   $editEmail=$row['useremail'];
   $editGender=$row['gender'];
   $editStatus=$row['mail_status'];
}
 

?>
<?php
    if(isset($_POST['submit'])){
        // echo "ay hagaaaa";
        $updateName=$_POST['username'];
        $updateEmail=$_POST['email'];
        $updateGender=$_POST['gender'];
        $updateStatus=$_POST['mail_status'];
        //echo $updateName;
        $query="UPDATE login_users SET username='$updateName',useremail='$updateEmail',gender='$updateGender',mail_status='$updateStatus' WHERE userid=$id " ;
        // $query.="username='$updateName', ";
        // $query.="useremail='$updateEmail', ";
        // $query.="gender='$updateGender', ";
        // $query.="mail_status='$updateStatus' ";
        // $query.="WHERE userid=$id";
        $result=mysqli_query($conn,$query);
            if(!$result){
                die('Query failed'. mysqli_error($conn));
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
    <title>Edit</title>
</head>
<body>
<div class="card" style="width: 30rem;">
    <center>
        <h1>Edit record</h1>
    </center>
    <hr>
    <form  action="<?php $_SERVER['PHP_SELF'];?>" method="post" >
    <div class="form-outline mb-4">
          <label class="form-label" for="form3Example3">Email address</label>
            <input type="email" id="form3Example3" class="form-control form-control-lg"
              placeholder="Enter a valid email address"  value=<?php  if(!isset($_POST['submit'])){echo $editEmail;}else{echo $updateEmail;}?> name="email" />
           
    </div>

          <!-- name input -->
        <div class="form-outline mb-3">
            <label class="form-label" for="form3Example4">name</label>
            <input type="text" id="form3Example4" class="form-control form-control-lg"
               value=<?php if(!isset($_POST['submit'])){ echo $editName;}else{echo $updateName;}?>  name="username"/>
           
        </div> 
        <!-- gender -->
        <div class="form-outline mb-3">
            <latype="text" id="form3Example4" class="form-control form-control-lg "bel class="form-label" for="form3Example4">gender</label>
            <input type="text" id="form3Example4" class="form-control form-control-lg "
              value=<?php  if(!isset($_POST['submit'])){echo $editGender;}else{echo $updateGender;}?>  name="gender"/>
           
        </div> 
        <div class="form-outline mb-3">
            <label class="form-label" for="form3Example4">Mail Status</label>
            <input type="text" id="form3Example4" class="form-control form-control-lg" name="mail_status" value="<?php  if(!isset($_POST['submit'])){ echo $editStatus;}else{echo $updateStatus;}?>"/>
            
        </div> 
     <button type="submit" class="btn btn-primary"  style=" width:'50px'" name="submit">Save</button>
        
</form>
  
    </div>
    </div>


</body>
</html>