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
                <li><a href="view_bus.php">View Bus</a></li>
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
    <div class="container">
        <h2>Add Bus Price</h2>
        
        <form action="add_bus_price.php" method="post">
            <div class="form-group">
                <label for="email">Bus Number:</label>
                <select id="gender" class="form-control" name="bus_number">
                <option value="--">--Select--</option>
                <?php
                     $query = "SELECT * FROM bus";
                     $result = mysqli_query($conn, $query);
                     if (mysqli_num_rows($result) > 0) {
                       while ($row = mysqli_fetch_array($result)) {
                         ?><option value="<?php echo $row['bus_number'];?>"><?php echo $row['bus_number'];   ?></option><?php
                       }
                    }
                ?>
                </select>
            </div>
            <div class="form-group bg">
                <label for="email">Starting Point:</label>
                <select id="gender" class="form-control" name="b_s">
                                <option value="--">--Select--</option>
                                    <option value="karkala">Karkala</option>
                                    <option value="bangalore">Bangalore</option>
                                    <option value="moodbidri">Moodbidri</option>
                                    <option value="naravi">Naravi</option>
                                    <option value="dharmastal">Dharmastal</option>
                                    <option value="hasan">Hasan</option>
                                    <option value="mandya">Mandya</option>
                                    <option value="ramnagar">Ramnagar</option>
                </select>
            </div>
            <div class="form-group">
                <label for="pwd">Ending Point:</label>
                <select id="gender" class="form-control" name="b_e">
                                <option value="--">--Select--</option>
                                <option value="karkala">Karkala</option>
                                <option value="Bangalore">Bangalore</option>
                </select>
            </div>
            <div class="form-group">
                <label for="pwd">Price:</label>
                <input type="text" class="form-control" id="pwd" placeholder="Enter Cost per Person" name="b_cost">
            </div>
            <center><button type="submit" class="btn btn-success">Add</button></center>
        </form>

    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
</body>

</html>