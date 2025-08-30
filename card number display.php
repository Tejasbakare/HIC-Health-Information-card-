
<?php
session_start();


  $insert_card_number=$_SESSION['insert_card_number'];
  $insert_fname=$_SESSION['insert_fname'];
  $insert_password=$_SESSION['insert_password'];
 
 
  session_unset();
    session_destroy();

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>card numeber</title>
  <link rel="stylesheet" type="text/css" href="css/insert.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css"
		integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

	<style>

		body{
	      padding: 0%;
		  background-color: lightblue;
		  font-family: "elephant";
		  text-align: center;
		  font-size: 25px;
		}
		h4{
			border:solid;
			border-width: 5px;
            
		}
       
    
		
	</style>

</head>
<body>
	<br>
<h3>Welcome <?php echo $insert_fname?></h3> 
<hr><br><br>
<h4>
<br>Card Number is = <?php echo  $insert_card_number?>
<br> <br> Password is:-<?php echo $insert_password?>
<br><br>
</h4>

</body>
</html>
