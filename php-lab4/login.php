<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
        <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/ef1986dbfa.js" crossorigin="anonymous"></script>
    
</head>
<body>
<section class="vh-100">
  <div class="container-fluid h-custom">
    <div class="row d-flex justify-content-center align-items-center h-100">
     
      <center>
      <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
        <form  action="<?php $_SERVER['PHP_SELF'];?>" method="post" >
         
          <!-- Email input -->
          <div class="form-outline mb-4">
          <label class="form-label" for="form3Example3">Email address</label>
            <input type="email" id="form3Example3" class="form-control form-control-lg"
              placeholder="Enter a valid email address"  name="email"/>
           
          </div>

          <!-- name input -->
          <div class="form-outline mb-3">
          <label class="form-label" for="form3Example4">name</label>
           <input type="text" id="form3Example4" class="form-control form-control-lg"
              placeholder="Enter Name"  value=""  name="username"/>
           
          </div>

          <div class="d-flex justify-content-between align-items-center">
        <!-- gender radio btn -->
          <div class="form-group">
                    <label class="col-md-4 control-label">Gender  </label>
                    <div class="col-md-4">
                        <div class="radio">
                            <label>
                                <input type="radio" name="gender" value="female" /> Female
                            </label>
                        </div>
                        <div class="radio">
                            <label>
                                <input type="radio" name="gender" value="male" /> Male
                            </label>
                        </div>
                    </div>
                </div>

            <!-- Checkbox -->
            <div class="form-check mb-0">
              <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3" name="mail_status" />
              <label class="form-check-label" for="form2Example3">
                Receive email from us
              </label>
           

          <div class="text-center text-lg-start mt-4 pt-2">
            <button  type="submit" name="submit" class="btn btn-primary btn-lg"
              style="padding-left: 2.5rem; padding-right: 2.5rem;">Login</button>
           
          
        </form>
      </div>
</center>
    </div>
  </div>
  
</section>
<?php include "db.php";


    $username=$_POST['username'];
    $email=$_POST['email'];
    $usergender=$_POST['gender'];
    $mail_status=$_POST['mail_status'];
    if(isset($_POST['submit'])){
        if(isset($_POST['mail_status']))
     {
         $mail_status = "yes";
     }
     else
     {
         $mail_status = "no";
     } 
    
    
//  echo $usergender;
  

 $query="INSERT INTO login_users(username,useremail,gender,mail_status)";
 $query.="VALUES ('$username','$email',' $usergender','$mail_status')";

 $result=mysqli_query($conn,$query);
 if(!$result){
    die('Query failed'. mysqli_error());
 }

}
?>
</body>
</html>