<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Avoid me</title>
</head>
<body>
    <p>  </p>

    <form action="">
        <input type="email" name="email" id="">
    </form>


<?php

    function  insertToDb(){
        $url = parse_url(getenv("CLEARDB_DATABASE_URL"));
        //  Getting info from enviromental variables
        $server = $url["host"];
        $username = $url["user"];
        $password = $url["pass"];
        $db = substr($url["path"], 1);

        $dsn = "mysql:host=". $server . ";dbname=" . $dsn;
        try{
            $conn = new PDO($dsn, $username, $password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }catch(PDOException $e){
            echo "Connection failed: " . $e->getMessage();
        }

        $email = $_POST["email"];

        $sql = "INSERT INTO (clientName, mobile, emailAddress, contactDate, messages )  VALUES(:clientName, :mobile, :emailAddress,  :orderDate,:messages)";

        try{
            $st = $conn->prepare($sql);
            $st->bindValue(":clientName", $compName, PDO::PARAM_STR);
            $st->bindValue(":mobile", $phoneNumber, PDO::PARAM_STR);
            $st->bindValue(":emailAddress", $email, PDO::PARAM_STR);
            $st->bindValue(":messages", $messages, PDO::PARAM_STR);
            $st->bindValue(":orderDate", $contactDate, PDO::PARAM_STR);
            $st->execute();
        }catch(PDOException $e){
            die("Query failed: ". $e->getMessage());
        }
    }
 ?>

</body>
</html>