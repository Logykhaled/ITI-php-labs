<?php

//************ first task ***********

//    echo nl2br("my name is logyn \n hello world"); 

// **************** string methods*************

      //***** join function ************** 

// $arr = array('logyn','khaled!','iti','student');
// echo join(" ",$arr);

//************** ltrim fumction*************
// $name = "Logyn Khaled ";
// echo $name . "<br>";
// echo ltrim($name,"Logyn");

//************ str_repeat ********************
// echo str_repeat("iti",3);
//****************** third task **************
// $sum=0;
// $average=0;
// $arr=array(12,45,10,25);
// $arrlen=count($arr);
//   $sum= $arr[0]+$arr[1]+$arr[2]+$arr[3];
 
//   $average=$sum/$arrlen;
//     echo "Sum is ".$sum ."<br>"."Average is ". $average;
//     echo "<br>";
//     echo "<br>";
//     echo "Reverse order (highest to lowest).";
//     rsort($arr);
//     for($x = 0; $x < $arrlen; $x++) {
//         echo "The value is  ".$arr[$x];
//         echo "<br>";
//     };

//*************** Fourth task **************
// echo "ascending order sort by value <br>";
// $age = array("Sara"=>31,"John"=>41,"Walaa"=>39,"Ramy"=>40);
//     asort($age);

//     foreach($age as $x => $x_value) {
//         echo "Key=" . $x . ", Value=" . $x_value;
//         echo "<br>";
//     };

//     echo "ascending order sort by Key <br>";
//     ksort($age);
//     foreach($age as $x => $x_value) {
//         echo "Key=" . $x . ", Value=" . $x_value;
//         echo "<br>";
//       };
//     echo " descending order sorting by Value";
//     echo "<br>";
//     arsort($age);
//     foreach($age as $x => $x_value) {
//         echo "Key=" . $x . ", Value=" . $x_value;
//         echo "<br>";
        
//       };
    
//       echo " descending order sorting by Key  ";
//       echo "<br>";
     
//       krsort($age);
//       foreach($age as $x => $x_value) {
//         echo "Key=" . $x . ", Value=" . $x_value;
//         echo "<br>";
//       };
      

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

</head>

<body>

    
        <?php
       
            $students = array (
                array('name' => 'Alaa', 'email' => 'alaa@test.com', 'status' => 'PHP'),
                array ('name' => 'Shamy', 'email' => 'shamy@test.com', 'status' => '.Net'),
                array ('name' => 'Youssef', 'email' => 'youssef@test.com', 'status' => 'Testing'),
                array  ('name' => 'Waleid', 'email' => 'waleid@test.com', 'status' => 'PHP'),
                array ('name' => 'Rahma', 'email' => 'rahma@test.com', 'status' => 'Front End'),
            );
           
             $arrylen=count(  $students);
            echo " <table style='width:100%'>
            <tr>
                <td>Name</td>
                <td>Email</td>
                <td>Status </td>
            </tr>
        
            ";
         
            for ($row = 0; $row < $arrylen; $row++) {
            
               echo "<tr>";
               foreach($students[$row] as $x => $x_value) {
                    echo "<td>".$x_value. "</td>";
               }
            
              echo "</tr>";
            }
          
        ?>

      <?php
      for ($row = 0; $row < $arrylen; $row++) {
            
      
         echo "<style>
             tr:nth-child(2) {
               color:red;
             }
             tr:nth-child(5) {
                color:red;
              }
            </style>";
    
      }
      ?>

 
</body>
</html>
