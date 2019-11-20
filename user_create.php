<?php
session_start();

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "shifali_shetty";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error)
{
    die("Connection failed: " . $conn->connect_error);
}

if($_SERVER["REQUEST_METHOD"] == "POST")
{
$name = $_POST["name"];
$number = $_POST["phone"];
$address = $_POST["address"];
$age = $_POST['age'];
$email = $_POST["email"];
$password = $_POST["password"];
$sql = "INSERT INTO user VALUES ('$name' , '$number' , '$address' , '$age' , '$email' , '$password')";
if ($conn->query($sql) === TRUE) 
{
    ?>
    <script>
        alert("Account Created Successfully!!");
        window.location = "http://localhost/shillu_shetty/admin_login.php" ;
    </script>
    <?php
} 
else 
{
    ?><script>
        alert("Account Creation Failed!!");
        window.location = "http://localhost/shillu_shetty/create_new_user.php" ;
    </script><?php
}
}

$conn->close();
?>


<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Login Form</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="assets/css/styles.min.css?h=516f4dd0b8d8130e301c01b4d161d656">
    <link rel="stylesheet" href="CSS/index.css">
    <style>
    .image-admin
    {
        border-radius: 50%;
        height: 150px;
    }
    
    </style>
</head>

<body>
    <div class="login-dark">
        <br/><br/><h2 style="text-align: center; color:white; text-shadow:2px 2px black;">Create Account Form</h2>
        <form method="post" action="#">
            <div class="illustration"><img src="Images/admin.png" alt="Image Not Found" class="image-admin"></div>
            <div class="form-group"><input class="form-control" type="text" name="name" placeholder="Enter your Name"></div>
            <div class="form-group"><input class="form-control" type="text" name="phone" placeholder="Enter Phone Number"></div>
            <div class="form-group"><input class="form-control" type="text" name="address" placeholder="Enter Your Address"></div>
            <div class="form-group"><input class="form-control" type="text" name="age" placeholder="Enter Your Age"></div>
            <div class="form-group"><input class="form-control" type="text" name="email" placeholder="Enter Email ID"></div>
            <div class="form-group"><input class="form-control" type="password" name="password" placeholder="Enter Password"></div>
            <div class="form-group"><button class="btn btn-primary btn-block" type="submit">Create</button></div>
            <a class="forgot" href="admin_login.php">Already Have an Account?</a>
        </form>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
</body>

</html>