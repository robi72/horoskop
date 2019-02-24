<?php
session_start();




/* parse_str(file_get_contents("php://input"), $_PUT);
echo json_encode($_PUT); */

if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST)) {
    if(isset($_SESSION["horoscope"]) && isset($_POST["day"]) && isset($_POST["month"] )) {

        $day = $_POST["day"];
        $month = $_POST["month"];
        $zodiac = "";

        include 'zodiacs.php';
        
        if(isset($_SESSION["horoscope"]))  {
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