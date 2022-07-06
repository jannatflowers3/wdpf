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


// // print_r ($_POST);
// if(isset($_POST['fname'])){

// // echo "yes";

// $fname = $_POST['fname'];
// $lname = $_POST['lname'];
// // $result = $fname + $lname;
// // echo $result;

// echo "your first name is $fname <br>";
// echo "your last name is $lname <br>";

// echo "your last name is " .$lname - $lname ."<br>";



// if($_SERVER['REQUEST_METHOD']=='POST'){

//     // echo "yes";

//     $fname =$_POST['fname'];
//     $lname =$_POST['lname'];
    
//    if($fname=='' || $lname==''){
    
// echo "put your value";
//    }

   

//    else{


//     $fname = $_POST['fname'];
//     $lname = $_POST['lname'];
//     $result = $fname + $lname;
// //  echo "your first name is $fname  $lname <br>";
// //  echo "your first name is $fname + $lname <br>";
//  echo "your first name is $fname  <br>";
//  echo "your last name is   $lname <br>";


// echo "your last name is" .  $result  ;
//    }

// }



// empty diye o kora jai

if($_SERVER['REQUEST_METHOD']=='POST'){

    $fname =$_POST['fname'];
    $lname =$_POST['lname'];
    
    // if(empty($fname) || empty($lname))
    // ai doivabei kora jai
    if(($fname==null) || ($lname==null))
 {
    
echo "put your value";
   }
   else{


    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $result = $fname + $lname;
//  echo "your first name is $fname  $lname <br>";
//  echo "your first name is $fname + $lname <br>";
 echo "your first name is $fname  <br>";
 echo "your last name is   $lname <br>";


echo "your last name is" .  $result  ;
   }

}
?>

<h1>Calculation form</h1>
    <form action="<?php  $_SERVER['PHP_SELF']   ?>" method="post">
    <input type="text" name="fname" placeholder="enter your name"><br>
    <input type="text" name="lname" placeholder="enter your last name"><br>

    <input type="submit" name="submit" value="calculation">

    </form>
</body>
</html>