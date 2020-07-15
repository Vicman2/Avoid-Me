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

        <?php 
            if(isset($_POST["submitButton"])){
                processForm(); // If the user submits the form, call this function
            }else{
                displayForm(""); // Display This if the the user loads the page
            }
        ?>

        <div class="notification">
            <p class="get_notified">GET NOTIFIED WHEN WE LAUNCH</p>
            <?php 
                function displayForm($message){
            ?>
                <p> <?php if($message) echo $message ?> </p>

                <form action="">
                    <input class="email" type="email" name="email" id="">
                    <button class="submit" type="submit" name="submitButton">Get Notified</button>
                </form>
            <?php } ?>
        </div>
    </main>
  
<?php 
    function processForm(){
        $requiredField = "email"; 

        if(!isset($_POST[$requiredField]) or !trim($_POST[$requiredField])){
            displayForm("Please enter a valid email");
        }else{
            insertToDb(); // if there is no missing field , display the congrats/ thenks message
            displayForm("We have gotten your email and you will be notified when the app is launched.");
        }
    }
?>


<?php
    function  insertToDb(){
        $dsn = "mysql:host=ftpupload.net;dbname=epiz_25618144_avoidme";
        $username = "epiz_25618144";
        $password = "hx490qf7";

        try{
            $conn = new PDO($dsn, $username, $password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }catch(PDOException $e){
            echo "Connection failed: " . $e->getMessage();
        }

        $email = $_POST["email"];

        $sql = "INSERT INTO avoidMe(email)  VALUES(:emailAddress)";

        try{
            $st = $conn->prepare($sql);
            $st->bindValue(":emailAddress", $email, PDO::PARAM_STR);
            $st->execute();
        }catch(PDOException $e){
            die("Query failed: ". $e->getMessage());
        }
    }

    
?>
 

</body>
</html>