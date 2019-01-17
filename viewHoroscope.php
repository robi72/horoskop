<?php
if($_SERVER["REQUEST_METHOD"]=="GET")   {
    if(!isset($_SESSION["horoscope"]) || ($_SESSION["horoscope"] == "")) 
    echo "sessionen är tom ";
}
    else
    echo "Ditt tecken i horoskop är: " . $_SESSION["horoscope"] . ".<br>";

?>