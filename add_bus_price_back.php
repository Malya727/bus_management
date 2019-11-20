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
                $sql = "INSERT INTO bus_price VALUES ('$b_number' , '$start' , '$end' , '$cost' )";
                if ($conn->query($sql) === TRUE) {
                    ?>
                    <script>
                        alert("price Added Successfully!!");
                        window.location = "http://localhost/shillu_shetty/bus_price.php";
                    </script>
                <?php
                    } 
                    else {
                        ?>
                    <script>
                        alert("Failed to Add price!!");
                        window.location = "http://localhost/shillu_shetty/bus_price.php";
                    </script>
                <?php
                        }
                            $conn->close();
            }
            ?>