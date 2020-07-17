<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:ital,wght@0,200;0,300;0,400;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <link rel="stylesheet" href="./assets/css/slick-theme.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
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
            <div class="text_actions" data-aos="zoom-out-down">
                <p class="avoid_warn">Avoid people with ease<br>
                    Just a notification from us</p>
                <p class="app_detail">This app helps you avoid people you
                     wish not to see and provides alternative route for you.</p>
                <div class="btn_landing_wrapper">
                    <button  class="btn" onclick="window.location.href='#notification_form';">Get Notified</button>
                </div>
            </div>
            <div class="img_on_desktop" data-aos="zoom-out-left">
                <img src="./assets/images/Screens.png" alt="">
            </div>
        </div>

        <div class="section2">
            <div class="purple_phone">
                <div class="purple_img_cont">
                    <img src="./assets/images/curvePurple1.png" alt="purple background">
                </div>
                <div class="phone_container_onPurple">
                    <img src="./assets/images/phoneOnPurple.png" alt="">
                </div>
            </div> 
            <div class="digital_quest">
                <div data-aos="zoom-in-up">
                    <p class="digital">Are you still the window type?</p>
                    <p class="digital">You need to go digital !</p>
                    <p class="smart_way">The new  smart way to avoid people is to use avoid me, 
                        with your account set up you can monitor their movement 
                        and get a notification whenever they are 10 - 20 meters
                         away from you</p>
                </div>
            </div>
        </div>

        <div class="feature_section">
            <p class="feature_text" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1500">APP FEATURES</p>
            <div class="featuring">
                <div class="feature_column">
                    <div class="feature" data-aos="fade-down-right">
                        <img src="./assets//images/gprsIcon.png" alt="GPRS">
                        <p class="feature_name">GPS Feature</p>
                        <p class="feature_detials">we use the gps feature to keep of track locations</p>
                    </div>
                    <div class="feature" data-aos="fade-left" data-aos="fade-down-left">
                        <img src="./assets//images/gprsIcon.png" alt="GPRS">
                        <p class="feature_name">Maximum Security</p>
                        <p class="feature_detials">This app is designed to protect users information</p>
                    </div>
                </div>
                <div class="feature_middle_img">
                    <img src="./assets/images/feature_middle_img.png" alt="">
                </div>
                <div class="feature_column">
                    <div class="feature">
                        <img src="./assets//images/gprsIcon.png" alt="GPRS">
                        <p class="feature_name">Saves to Cloud</p>
                        <p class="feature_detials">All informations are saved  to cloud avoid loses</p>
                    </div>
                    <div class="feature" data-aos="fade-up-left">
                        <img src="./assets//images/gprsIcon.png" alt="GPRS">
                        <p class="feature_name">Perfectly designed</p>
                        <p class="feature_detials">The interface of the app was carefully designed </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="app_review">
            <p class="preview_header" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1500">APP PREVIEW</p>
            <p class="quick_view">Take a quick view of the awesome screens of our app</p>
            <div class="myCarousel">
                <div class="cells">
                    <div class="slide_container">
                        <img class="image_Slider" src="./assets/images/Group 25.png" alt="">
                    </div>
                    <div class="slide_container">
                        <img class="image_Slider" src="./assets/images/Group 28.png" alt="">
                    </div>
                    <div class="slide_container">
                        <img class="image_Slider" src="./assets/images/Group 29.png" alt="">
                    </div>
                    <div class="slide_container">
                        <img class="image_Slider" src="./assets/images/Group 30.png" alt="">
                    </div>
                    <div class="slide_container">
                        <img class="image_Slider" src="./assets/images/Group 31.png" alt="">
                    </div>
                    <div class="slide_container">
                        <img class="image_Slider" src="./assets/images/Group 32.png" alt="">
                    </div>
                </div>
            </div>
        </div>

        <div class="modal Hide_Modal">
            <p><ion-icon name="close" id="close_modal"></ion-icon></p>
            <img  id="modalSrc" src="" alt="">
        </div>

        <div class="countDown">
            <p class="countdown_text" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1500">COUNTDOWN TO RELEASE</p>
            <div class="the_CountDown">

                <div class="oneTime">
                    <p class="timeValue" id="monthTime"></p>
                    <p class="timeTitle">Months</p>
                </div>
                <div class="column_timer">
                    <p>:</p>
                </div>
                <div class="oneTime">
                    <p class="timeValue" id="dayTime"></p>
                    <p class="timeTitle">Days</p>
                </div>
                <div class="column_timer">
                    <p>:</p>
                </div>
                <div class="oneTime">
                    <p class="timeValue" id="hoursTime"></p>
                    <p class="timeTitle">Hours</p>
                </div>
                <div class="column_timer">
                    <p>:</p>
                </div>
                <div class="oneTime">
                    <p class="timeValue" id="minsTime"></p>
                    <p class="timeTitle">Minutes</p>
                </div>
                <div class="column_timer">
                    <p>:</p>
                </div>
                <div class="oneTime">
                    <p class="timeValue" id="secondsTime"></p>
                    <p class="timeTitle">Seconds</p>
                </div>
            </div>
        </div>

        <p class="get_notified" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1500">GET NOTIFIED WHEN WE LAUNCH</p>
        <p class="belong">Be among the first to be notified when we launch</p>

        <?php
            if(isset($_POST["submitButton"])){
                processForm(); // If the user submits the form, call this function
            }else{
                displayForm(""); // Display This if the the user loads the page
            }
        ?> 
        <?php 
                function displayForm($message){
        ?>
                <p> <?php if($message) echo $message ?> </p>
                <form method="post" id="notification_form">
                    <div class="formInput">
                        <input type="email" name="email" id="email" placeholder="Email" >
                        <small id="errorMsg"></small>
                    </div>
                    <div class="submit_btn_wrp">
                        <button class="btn" type="submit" name="submitButton">Get Notified</button>
                    </div>
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
        $dsn = "mysql:host=sql209.epizy.com;dbname=epiz_25618144_avoidme";
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
    <footer>
        <p class="footer_text">© Avoid me, Inc. 2020. All rights reserved</p>
        <p class="footer_socials">
            <img src="./assets/images/facebook.png" alt="">
            <img src="./assets/images/twitter.png" alt="">
            <img src="/assets/images/instagram.png" alt="">
        </p>

    </footer>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script type="text/javascript" src="./assets/js/slick.min.js"></script>
    <script src="https://unpkg.com/ionicons@5.1.2/dist/ionicons.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="./assets/js/main.js"></script>
</body>
</html>