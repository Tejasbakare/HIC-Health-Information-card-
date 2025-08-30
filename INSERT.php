
<?php
 session_start();
   

if(isset($_POST["Submit"]))
{
   
    $fname=$_POST['fname'];
    $mname=$_POST['mname'];
    $lname=$_POST['lname'];
    $address=$_POST['address'];
    $phone_self=$_POST['phone_self'];
    $relatives_phone=$_POST['relatives_phone'];
    $email=$_POST['email'];
    $birthdate=$_POST['birthdate'];
    $aadhar=$_POST['exampleInputAadharCard'];
    $bloodgroup=$_POST['blood'];
    $cpassword=$_POST['password'];
    $allergy=$_POST['algiracial_medicine'];
    $weight=$_POST['weight'];
    $operations=$_POST['operations'];
   

    $fname=strtoupper($fname);
    $mname=strtoupper($mname);
    $lname=strtoupper($lname);

    
$min = 1000;
$max = 10000; 

$card_number = rand($min, $max);
//session
$_SESSION['insert_card_number']=$card_number;
$_SESSION['insert_fname']=$fname;
$_SESSION['insert_password']=$cpassword;


    //echo "<br>".$lname;
    //echo "".$address;
    //echo "".$phone_self;
    //echo "".$relatives_phone;
    //echo "".$email;
    //echo "".$birthdate;
    //echo "".$aadhar;
    //echo "".$bloodgroup;
    //echo "".$cpassword;
    
    
    include("connection.php");
   

   if($fname !=""&& $mname !="")
    {
      
  //auto increment id was not happen
  $Sql="INSERT INTO `patient_info`(`card_number`,`fname`, `mname`, `lname`, `address`, `phone_self`, `relatives_phone`, `birthdate`, `aadharnumber`, `email`, `bloodgroup`, `weight`, `allergy`, `operations`, `password`)
   VALUES ('$card_number','$fname','$mname','$lname','$address','$phone_self','$relatives_phone','$birthdate','$aadhar','$email','$bloodgroup','$weight','$allergy','$operations','$cpassword')";
   
   //$Sql="INSERT INTO `project`(`card_number`) VALUES ('$fname')";
   $result = (mysqli_query($conn,$Sql));
    
    if($result)
    {
        echo '<script>alert("The Response Has Been Recorded Successfully")</script>';
       // header("location:display.php");
        header("Refresh: 1; url=card number display.php");
    }
    else
    
    {
        echo '<script>alert("All filed sholud be required or you enter a duplicate value")</script>';
    
    }
}
else{
    echo '<script>alert("Please Fill the form properly")</script>';
    return false;
}
   
}


?>
