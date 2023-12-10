<?php
    $username = $_POST['username'];
    $password = $_POST['password'];

    //connection
    $conn = new mysqli('localhost','root','','test');
    if($conn->connect_error){
        die("Connection Failed : ". $conn->connect_error);
    } else{
        //verif admin
        $stmt = $conn->prepare("SELECT * FROM admin WHERE username = ? AND password = ?");
        $stmt->bind_param("ss", $username, $password);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            header("Location: ../admin/category.php");
            exit();
        } else {
            echo "Login Admin Gagal";
        }

        $stmt->close();
        $conn->close();
    }
?>