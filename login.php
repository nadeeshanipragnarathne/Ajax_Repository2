<?php


session_start();

$error = ''; // Variable To Store Error Message

    if (empty($_POST['username']) || empty($_POST['password'])) {
        $error = "Username or Password is invalid";
    } else {
// Define $username and $password
        $username1 = $_POST['username'];
        $password = $_POST['password'];
        
        
// To protect MySQL injection for Security purpose

        define('DB_SERVER', "localhost");
        define('DB_USER', "root");
        define('DB_PASSWORD', "");
        define('DB_DATABASE', "db_login");
        define('DB_DRIVER', "mysql");

        
//db connection
        $conn = new PDO(DB_DRIVER . ":dbname=" . DB_DATABASE . ";host=" . DB_SERVER, DB_USER, DB_PASSWORD);


        
// set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $query = "SELECT * from ajax_login where username=? AND password=?";
        $stmt = $conn->prepare($query);

        $stmt->bindParam(1, $username1);
        $stmt->bindParam(2, $password);

        $stmt->execute();
        

        foreach ($stmt->fetchAll() as $row){
            $_SESSION['login_user'] = $row['username']; // Initializing Session
        }
        $num_rows = $stmt->rowCount();

      echo $num_rows;
     
    
    
     
    }



?>





