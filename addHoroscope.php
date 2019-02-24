<?php
session_start();

   

if ($_SERVER["REQUEST_METHOD"]=="POST")  {
    if (isset($_POST["day"]) && isset($_POST["month"])) {
        

        $day = $_POST["day"];
        $month = ($_POST["month"]);
        $zodiac = "";

        include 'zodiacs.php';
        
        if(!isset($_SESSION["horoscope"]))  {
            $_SESSION["horoscope"] = $zodiac;

            echo json_encode(true);
            die; 

        }
    
        else {
            echo json_encode(false); 
        }
}

}

    
?>
