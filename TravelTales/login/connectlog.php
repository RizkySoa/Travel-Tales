<?php
    $username = $_POST['username'];
    $password = $_POST['password'];

    //connection
    $conn = new mysqli('localhost','root','','test');
    if($conn->connect_error){
        die("Connection Failed : ". $conn->connect_error);
    } else{
        //verif user
        $stmt = $conn->prepare("SELECT * FROM login WHERE username = ? AND password = ?");
        $stmt->bind_param("ss", $username, $password);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            header("Location: /TravelTales/LandingPage/");
            exit();
        } else {
            echo "Login User Gagal";
        }

        $stmt->close();
        $conn->close();
    }
?>