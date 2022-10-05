
<?php
 $nameErr = $emailErr = $genderErr =  "";
 $usename = $useremail = $usergender = $usertext = $usergroup = "";
 if ($_SERVER["REQUEST_METHOD"] == "POST") {
 if (preg_match("/[^A-Za-z]/",$_POST['name'] )) {
    $nameErr="invalid name and name should be alpha";
}

if (empty($_POST["name"])) {
    $nameErr = "Name is required";
    
}else {
    $usename=test_input($_POST["name"]);;
}
if (empty($_POST["email"])) {
    $emailErr = "Email is required";
    
}else {
    $useremail=test_input($_POST["email"]);;
}
if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
    
}else {
    $usergender=test_input($_POST["gender"]);
}
if (empty($_POST["content"])) {
    $usertext = "";
  } else {
    $usertext = test_input($_POST["content"]);
  }
  if (empty($_POST["group"])) {
    $usergroup = "";
  } else {
    $usergroup = test_input($_POST["group"]);
  }
 }
function test_input($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }
 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<style>
.error {color: #FF0000;}
</style>
    </head>
    <h3><span class="error">* required field</span></h3>
<form class="well form-horizontal" action="<?php $_SERVER['PHP_SELF'];?>" method="post"  id="contact_form">



<!-- Text input-->

<div class="form-group">
<label class="col-md-4 control-label" > Name <span class="error">* <?php echo $nameErr;?></span></label> 
<div class="col-md-4 inputGroupContainer">
<div class="input-group">
<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
<input name="name" placeholder="Name" class="form-control"  type="text" require>
</div>
</div>
</div>

<!-- Text input-->
   <div class="form-group">
<label class="col-md-4 control-label">E-Mail <span class="error">* <?php echo $emailErr;?></label>  
<div class="col-md-4 inputGroupContainer">
<div class="input-group">
    <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
<input name="email" placeholder="E-Mail Address" class="form-control"  type="text" require>
</div>
</div>
</div>


<!-- Text input-->
   
<div class="form-group">
<label class="col-md-4 control-label"># Group </label>  
<div class="col-md-4 inputGroupContainer">
<div class="input-group">
   
<input name="group"  class="form-control" type="text"> <span class="input-group-addon"></span>
</div>
</div>
</div>



<!-- Select Basic -->

<div class="form-group"> 
<label class="col-md-4 control-label">select courses</label>
<div class="col-md-4 selectContainer">
<div class="input-group">
    <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
<select  name="courses[]" class="form-control selectpicker" multiple="multiple" >
  <option value=" " disabled selected>Please select your courses</option>
  <option value="php">php</option>
  <option value="java script" >java script</option>
  <option value ="my sql" >my sql</option>
  <option  value ="html">html</option>

</select>
</div>
</div>
</div>

<!-- Text area -->

<div class="form-group">
<label class="col-md-4 control-label">Class details</details></label>
<div class="col-md-4 inputGroupContainer">
<div class="input-group">
    <span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
        <textarea class="form-control" name="content" placeholder="class details"></textarea>
</div>
</div>
</div>

<!-- radio checks -->
<div class="form-group">
                    <label class="col-md-4 control-label">Gender <span class="error">* <?php echo $genderErr;?> </label>
                    <div class="col-md-4">
                        <div class="radio">
                            <label>
                                <input type="radio" name="gender" value="Female" /> Female
                            </label>
                        </div>
                        <div class="radio">
                            <label>
                                <input type="radio" name="gender" value="Male" /> Male
                            </label>
                        </div>
                    </div>
                </div>

<!-- Button -->
<div class="form-group">
<label class="col-md-4 control-label"></label>
<div class="col-md-4">
<button type="submit"  name="submit" class="btn btn-warning" >Send <span class="glyphicon glyphicon-send"></span></button>
</div>
</div>


</form>
</div>
</div>


<h1>User Data</h1>
<?php

if(isset ($_POST['submit'])){
    echo "Your Name is "." : ".$usename;
    echo "<br>";
    echo "Your Email is "." : ".$useremail;
    echo "<br>";
    echo "Your Group is "." : ".$usergroup;
    echo "<br>";
    echo "Your Gender is "." : ".$usergender;
    echo "<br>";
    echo "Class details is "." : ".$usertext;
    echo "<br>";
     if(!empty($_POST['courses'])) {
        echo "Selected courses"." : ";
            foreach($_POST['courses'] as $selected){
               echo " ".  $selected ;
            } 
        
          }

}
?>
<!-- <?php
    // setcookie("names",$usename,time()+3600, "/","", 0);
    // echo $_COOKIE["names"]. "<br />";

?> 

    
</body>
</html>


