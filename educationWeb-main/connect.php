<?php
    $email = $_POST['email'];
    $password = $_POST['password']

    //datbase connection
    $conn = new mysqli('localhost','root','','test');
    if($conn->connect_error){
        die('connection Failed : '.$conn->connect_error);
    }
    else{
        $stmt = $conm->prepare("Insert into Log in(email,password)")
        $stmt->bind_peram("ss",$email, $password);
        $stmt->execute();
        echo "Log in Sucessfull";
        $stmt->close();
        $conm->close();
    }
?>