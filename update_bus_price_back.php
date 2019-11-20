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
            if($_SERVER["REQUEST_METHOD"] == "POST")
            {
                $b_number = $_POST['bus_number'];
                $start = $_POST['b_s'];
                $end = $_POST['b_e'];
                $cost = $_POST['b_cost'];
                $sql = "UPDATE 'bus_price' SET 'start' = '$start' , 'end' = '$end' , 'price' = '$cost' WHERE 'bus_number' = '$b_number' ;";
                if ($conn->query($sql) == TRUE) {
                    ?>
                    <script>
                        alert("Updated Successfully!!");
                        window.location = "http://localhost/shillu_shetty/update_bus_price.php";
                    </script>
                <?php
                    } 
                    else {
                        ?>
                    <script>
                        alert("No Data Found to Update!!");
                        window.location = "http://localhost/shillu_shetty/update_bus_price.php";
                    </script>
                <?php
                        }
                            $conn->close();
            }
            ?>