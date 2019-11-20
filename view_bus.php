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
  <title>Welcome User</title>
  <style>
    hr {
      position: relative;
      top: 20px;
      border: none;
      height: 2px;
      background: red;
      margin-bottom: 50px;
    }
  </style>
</head>

<body style="background-color:teal">

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
        <li><a href="bus_booking.php">Bus Bookings</a></li>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <li><a href="add_bus.php">Add Bus Price</a></li>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <li><a href="update_bus_price.php">Update Bus Price</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#"><span class="glyphicon glyphicon glyphicon-user"></span> <?php session_start(); echo "Hello, " . $_SESSION['name']; ?></a></li>

        <li><a href="admin_login.php"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
      </ul>
    </div>

  </nav>
  <div class="container" style="background-color:white">

    <?php

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "shifali_shetty";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) 
    {
      die("Connection failed: " . $conn->connect_error);
    }

    ?>
    <div class="container" style="width: 65%">
      <h2 style="text-align:center">Bus Details</h2>
      <hr /><br />
      <?php
      $query = "SELECT * FROM bus";
      $result = mysqli_query($conn, $query);
      if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_array($result)) {
          ?>
        <form method="post" action="print_seller_detail.php? id=<?php echo $row["id"]; ?>">
          <div class="row" style="background-color:thistle">
            <div class="col-md-6">
                <div class="product">
                  <img src="<?php echo $row["image"]; ?>" class="img-responsive">
                </div>
              </div>
              
              <div class="col-md-6">
                <div class="product">
                  <h5 style="color:black"><b>Bus Name :</b> <?php echo $row["bus_name"]; ?></h5>
                  <h5 style="color:black"><b>Bus Number :</b> <?php echo $row["bus_number"]; ?></h5>
                  <h5 style="color:black"><b>Bus Start Destination :</b> <?php echo $row["bus_start"]; ?></h5>
                  <h5 style="color:black"><b>Bus End Destination:</b> <?php echo $row["bus_end"]; ?></h5>
                  <h5 style="color:black"><b>Bus Capacity : </b><?php echo $row["bus_capacity"]; ?></h5>
                  <input type="submit" name="add" style="margin-top: 5px;" class="btn btn-primary" value="View Bus Timing">
                </div>
              </div>
              
            </div>
        </form>
      <?php
          echo "<hr/><br/><br/>";
        }
      }
      ?>


    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
</body>

</html>