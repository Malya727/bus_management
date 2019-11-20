<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="dns-prefetch" href="https://fonts.gstatic.com">
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
  <script src="https://kit.fontawesome.com/a2d9fe4007.js" crossorigin="anonymous"></script>
  <title>Welcome Admin</title>

    <style type="text/css">
        .bg {
            background: url(Images/admin_back.jpg) no-repeat center center fixed;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
        }
    </style>
  
</head>

<body class="bg">

  <nav class="navbar navbar-inverse">
    <div class="container-fluid">
      <div class="nav navbar-nav">
        <a class="navbar-brand" href="admin_after_login.php">Bus Management System</a>
      </div>
      <ul class="nav navbar-nav">
        <li><a href="add_bus.php">Add Bus</a></li>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <li><a href="update_delete.php">Update/Delete Bus</a></li>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <li><a href="view_bus.php">View Bus</a></li>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <li><a href="bus_booking.php">Bus Bookings</a></li>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <li><a href="add_bus.php">Add Bus Price</a></li>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <li><a href="update_bus_price.php">Update Bus Price</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#"><span class="glyphicon glyphicon glyphicon-user"></span> <?php session_start();echo "Hello, " . $_SESSION['name']; ?></a></li>
        <li><a href="admin_login.php"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
      </ul>
    </div>

  </nav>
  <div class="container" style="background-color:white">


  </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
</body>

</html>