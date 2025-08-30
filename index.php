<!DOCTYPE html>
<html lang="en">
<?php
include("connection.php");
?>
<head>
    
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <style>
     
html{
 
    overflow-x: hidden;
    scroll-padding-top: 7rem;
    scroll-behavior: smooth;
}
.banner{
    box-shadow: 0 .5rem 1.5rem rgba(0, 0, 0, .1);
    z-index: 1000;
}
        body {
            background-image: url('oip3.jpeg');
            background-size: cover;
            background-repeat: no-repeat;
           
        }

        .banner {
            width: 100%;
            height: 130px;
            background-image: url('r2.jpeg');
            background-size: cover;
            background-position: center;
        }

        .navbar {
            width: 85%;
            height: 10px;
            font-size: larger;
            padding: 40px;
            display: flex;
            align-items: center;
            justify-content: space-between;

        }


        .navbar ul li {
            list-style: none;
            display: inline-block;
            margin-left: 20px;
            margin: 0 20;
            position: relative;
        }

        .navbar ul li a {
            text-decoration: none;
            color: white;
            font-size: 110%;

            text-transform: uppercase;
        }

        .navbar ul li::after {
            content: '';
            height: 3px;
            width: 0;
            background: rgb(255, 255, 255);
            position: absolute;
            left: 0;
            bottom: 0;
            bottom: -10px;
            transition: 0.5s;
        }

        .navbar ul li:hover::after {
            width: 100%;

        }

        .logo {
            width: 150px;
            cursor: pointer;
            border: solid;
            border-radius: 25px;
        }

        div.para {
            margin-top: 10%;
            text-align: center;
            font-family:"sura";
            font-size:35px;
            
        }

        footer.footer {
            margin-top: 3%;
            text-align: center;
            font-size:25px;
        }

        section.About {
            text-align: center;
            font-style: oblique;
            scroll-behavior: smooth;
         
        }

.icons-container{
    display: grid;
    gap:1rem;
    grid-template-columns: auto auto;
    padding-top: 17rem;
    margin-right:58rem;

}

.icons-container .icons{
    border:var(--border);
    box-shadow: var(--box-shadow);
    border-radius: .2rem;
    text-align: center;
    padding: 3rem;
}

.icons-container .icons i{
    font-size: 3.5rem;
    color:var(--green);
    padding-bottom: .7rem;
}

.icons-container .icons h3{
    font-size: 3.5rem;
    color:var(--black);
    padding: .4rem 0;
    text-shadow: var(--text-shadow);
}

.icons-container .icons p{
    font-size: 1.3rem;
    color:var(--light-color);
}

        
    </style>
</head>

<body>
    <div class="banner">
        <div class="navbar">
            <img class="logo" src="oip1.jpeg" alt="#section2">
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="INSERT HTML.php">Create A New Card</a></li>
                <li><a href="user/user_login html.php">Hospital Login</a></li>
                <li><a href="admin login/admin login html.php">Admin Login</a></li>
                <li><a href="#section2">About</a></li>
            </ul>
        </div>

    </div>
    <marquee behavior="" direction="">
<h2><i>Ready health information card to your service</i>   </h2> 
</marquee>
 <section class="icons-container">

<?php
$sql = "SELECT * from patient_info";

if ($result = mysqli_query($conn, $sql)) {

    $patientcount = mysqli_num_rows( $result );

 }
?>
    <div class="icons">
        <i class="fas fa-users"></i>
        <h3><?php echo $patientcount;?></h3>
        <p>Satisfied patients</p>
    </div>

    <?php
$sql = "SELECT * from user";

if ($result = mysqli_query($conn, $sql)) {

    $usercount = mysqli_num_rows( $result );
    
 }
?>
    <div class="icons">
        <i class="fas fa-hospital"></i>
        <h3><?php echo $usercount; ?></h3>
        <p>Available hospitals</p>
    </div>
    

</section>
    <div class="para"></div>
    <section class="About" id="section2">
        <h2>About
        </h2>
       <b><P> Health Information Card  (HIC) is a web base application enabling hospitals to manage information and data related to all aspects of healthcare. 
       </P><P>brHIC  serves as a concise and portable document that contains essential details about an individual's health history and medical information.
       </P><P>It is a convenient and accessible way to carry critical health-related information, ensuring that patient details are readily available in 
       </P><P>case of emergencies or when seeking medical care from different healthcare providers. The primary purpose of a Health Information Card is to 
       </P><P>provide quick and accurate information to healthcare professionals, especially in situations where immediate access to medical history can 
       <P>significantly impact the quality and efficiency of care.
        </P>
    </b>
    </section>
    </div>
 <center>
    <div class="box">
        <a href=https://twitter.com/home> <i class="fab fa-twitter" height="55px"></i> twitter </a>
        <a href=https://www.instagram.com> <i class="fab fa-instagram"></i> instagram </a>
        <a href=https://www.linkedin.com/feed> <i class="fab fa-linkedin"></i> linkedin </a>
        <a href=https://www.facebook.com> <i class="fab fa-facebook"></i> facebook </a>
    </div>
    </center>

    <footer class="footer">
        <hr>
        <p>&copy; wwwtejas_onkar | health_info@gmail.com</p>
<br>
    </footer>


</body>

</html>