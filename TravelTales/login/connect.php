<?php
    $username = $_POST['username'];
    $password = $_POST['password'];

    //connection
    $conn = new mysqli('localhost','root','','test');
    if($conn->connect_error){
        die("Connection Failed : ". $conn->connect_error);
    } else{
        $stmt = $conn->prepare("insert into login(username, password) 
            values(?, ?)");
        $stmt->bind_param("ss",$username, $password);
        $stmt->execute();

        if ($stmt->affected_rows > 0) {
            header("Location: /TravelTales/login/index2.php");
            exit();
        } else {
            echo "Sign Up Gagal";
        }

        $stmt->close();
        $conn->close();
    }
?>