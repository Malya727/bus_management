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
if($_SERVER["REQUEST_METHOD"]=="POST")
{
    $username = $_POST['email'];
    $password = $_POST['password'];
    $querry="select * from admin where email= '$username' and password= '$password'";
    $user_authentication_result=mysqli_query($conn,$querry) or die(mysqli_error($conn));
    $rows_fetched=mysqli_num_rows($user_authentication_result);
    echo $rows_fetched;
    if($rows_fetched==0)
    {
        ?>
        <script>
            window.alert("Wrong username or password");
            window.location = "http://localhost/shillu_shetty/admin_login.php"
        </script>
        <?php
    }
    else
    {
        $row=mysqli_fetch_array($user_authentication_result);
        $_SESSION['name'] = $row['name'];
        $_SESSION['email'] = $row['email'];
        ?>
        <script>
        window.location = "http://localhost/shillu_shetty/admin_after_login.php" ;
        </script>
        <?php
    }

}

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
<nav class="navbar navbar-inverse">
    <div class="container-fluid">
      <div class="nav navbar-nav">
        <a class="navbar-brand" href="index.html">Bus Management System</a>
      </div>
    </div>
</nav>
    <div class="login-dark">
        <br/><br/><h2 style="text-align: center; color:white; text-shadow:2px 2px black;">Login Form</h2>
        <form method="post" action="#">
            <div class="illustration"><img src="Images/admin.png" alt="Image Not Found" class="image-admin"></div>
            <div class="form-group"><input class="form-control" type="text" name="email" placeholder="Enter Email ID"></div>
            <div class="form-group"><input class="form-control" type="password" name="password" placeholder="Enter Password"></div>
            <div class="form-group"><button class="btn btn-primary btn-block" type="submit">Login</button></div>
            <a class="forgot" href="create_new_user.php">Create Account?</a>
        </form>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
</body>

</html>