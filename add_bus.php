<?php

session_start();

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "shifali_shetty";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user = $_SESSION['email'];
    $bus_name = $_POST['bus_name'];
    $bus_number = $_POST['b_id'];
    $bus_start = $_POST['b_s_d'];
    $bus_end = $_POST['b_e_d'];
    $bus_capacity = $_POST['b_c'];


    $na = $_FILES["image"]["name"];
    $ext = explode(".", $na);
    $_FILES["image"]["name"] = $bus_number . "." . end($ext);
    $filepath = "bus/" . $_FILES["image"]["name"];
    move_uploaded_file($_FILES["image"]["tmp_name"], $filepath);

    $sql = "INSERT INTO bus VALUES ('$user' , '$bus_name' , '$filepath' , '$bus_number' , '$bus_start' , '$bus_end' , '$bus_capacity')";

    if ($conn->query($sql) === TRUE) {
        ?>
        <script>
            alert("Item Added Successfully!!");
            window.location = "http://localhost/shillu_shetty/add_bus.php";
        </script>
    <?php
        } 
        else {
            ?>
        <script>
            alert("Failed to Add Item!!");
            window.location = "http://localhost/shillu_shetty/add_bus.php";
        </script>
<?php
    }
    $conn->close();
}
?>


<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <title>Add Bus</title>
</head>

<body style="background-color: #475d62;">

<nav class="navbar navbar-inverse">
    <div class="container-fluid">
      <div class="nav navbar-nav">
        <a class="navbar-brand" href="admin_after_login.php">Bus Management System</a>
      </div>
      <ul class="nav navbar-nav">
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
        <li><a href="#"><span class="glyphicon glyphicon-user"></span> <?php echo "Hello, ".$_SESSION['name']; ?></a></li>
        <li><a href="admin_login.php"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
      </ul>
    </div>

  </nav>
    <div class="container">

        <div style="text-align: center; color: white; text-shadow: 3px 3px black;">
            <h2>Add Bus Details</h2>
        </div>
        <br />
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <div class="panel panel-primary">
                    <div class="panel-heading">Please Fill Below Form</div>
                    <div class="panel-body">
                        <form role="Form" method="post" action="#" accept-charset="UTF-8" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="fname">Bus Name</label>
                                <input type="text" id="fname" class="form-control" name="bus_name" placeholder="Enter Bus Name">
                            </div>
                            <div class="form-group">
                                <label>Bus Image</label>
                                <input type="file" name="image" id="pic">
                                <div id="error_msg" style="color:red"></div>
                            </div>
                            <div class="form-group">
                                <label for="emailaddr">Bus Number</label>
                                <input type="text" id="lname" class="form-control" name="b_id" placeholder="Enter Bus Number">
                            </div>
                            <div class="form-group">
                                <label for="emailaddr">Bus Starting Destination</label>
                                <input type="text" id="lname" class="form-control" name="b_s_d" placeholder="Enter Bus Starting Place">
                            </div>
                            <div class="form-group">
                                <label for="emailaddr">Bus Ending Place</label>
                                <input type="text" id="lname" class="form-control" name="b_e_d" placeholder="Enter Bus Ending Place">
                            </div>
                            <div class="form-group">
                                <label for="emailaddr">Bus Capacity</label>
                                <input type="text" id="lname" class="form-control" name="b_c" placeholder="Enter Bus Capacity">
                            </div>


                            <div class="form-group text-center">
                                <button type="submit" class="btn btn-primary btn-lg" id="submitbtn" name="submit">Add</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>