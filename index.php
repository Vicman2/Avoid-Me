<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/style.css">
    <title>Avoid me</title>
</head>
<body>
    <header>
        <nav>
            <div class="logo">
                <img src="./assets/images/logo.png" alt="">
            </div>
        </nav>
    </header>
    <main>
        <div class="landing">
            <div>
                <p class="avoid_warn">Avoid people with ease
                    Just a notification from us</p>
                <p class="app_detail">This app helps you avoid people you
                     wish not to see and provides alternative route for you.</p>
            </div>
            <div>
                <img src="./assets/images/Screens.png" alt="">
            </div>
        </div>
        <div class="notification">
            <p class="get_notified">GET NOTIFIED WHEN WE LAUNCH</p>
            <form action="">
                <input class="email" type="email" name="email" id="">
                <button class="submit" type="submit">Get Notified</button>
            </form>
        </div>
    </main>
  



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