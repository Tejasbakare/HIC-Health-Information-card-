



<html>

<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
 <style>
        body{
            margin: 0%;
        }
        section.demo{
            border: double;
            border-color:chartreuse;
            margin-top: 250px;
        }
        
        form{
            margin-top: 100px;
        }
    
    </style>

</head>

<body>

   
            <form name="feedback_form" id="feedback_form" method="post">

                <section class=" demo container my-2 w-50  p-3">
                    <h2 color="red">Feedback</h2>
    <div class="mb-4 small">
        Please provide your feedback in the form below
    </div>
                <section class="de">
                <label>How do you rate your overall experience?</label>
                <div class="mb-3 d-flex flex-row py-1">
                    <div class="form-check mr-3">
                        <input class="form-check-input" type="radio" name="rating" id="rating_bad" value="bad">
                        <label class="form-check-label" for="rating_bad">
                            Bad
                        </label>
                    </div>

                    <div class="form-check mx-3">
                        <input class="form-check-input" type="radio" name="rating" id="rating_good" value="good">
                        <label class="form-check-label" for="rating_good">
                            Good
                        </label>
                    </div>

                    <div class="form-check mx-3">
                        <input class="form-check-input" type="radio" name="rating" id="rating_excellent"
                            value="excellent">
                        <label class="form-check-label" for="rating_excellent">
                            Excellent!
                        </label>
                    </div>
                </div>
            </section>
            <section>
                <div class="mb-4">
                    <label class="form-label" for="feedback_comments">Comments:</label>

                    <textarea class="form-control" required rows="6" name="comments" id="feedback_comments"></textarea>
                </div>
            </section>
            <section>
                <div class="row">
                    <div class="col">
                        <label class="form-label" for="feedback_name">Your Name:</label>
                        <input type="text" required name="name" class="form-control" id="feedback_name" />
                    </div>

                    <div class="col mb-4">
                        <label class="form-label" for="feedback_email">Email:</label>
                        <input type="email" name="email" required class="form-control" id="feedback_email" />
                    </div>
                </div>
            </section>
            <button type="submit" value="submit" name="submit" class="btn btn-success btn-lg">Post</button>
            
        </form>
    </section>
</body>

</html>


<?php
include("connection.php");

if(isset($_POST["submit"]))
{

    $rating=$_POST['rating'];
    $comment=$_POST['comments'];
    $name=$_POST['name'];
    $email=$_POST['email'];
   
echo $rating;
echo $name;
echo $email;
echo $comment;


  $Sql= "INSERT INTO `feedback`(`name`, `rating`, `email`, `comment`) VALUES ('$name','$rating','$email','$comment')";

   $result = (mysqli_query($conn,$Sql));
    
   if($result)
   {
       echo '<script>alert("The Feedback has been Recorded Successfully")</script>';
     
       header("Refresh: 1; url=switch.php");
   }
   else
   
   {
       echo '<script>alert("Something went wrong please try again later")</script>';
   
   }
}

   




?>