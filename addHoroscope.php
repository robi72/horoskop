<?php

if($_SERVER["REQUEST_METHOD"]=="POST")  {
    if(isset($_POST["action"]) && $_POST["action"] == "addHoroscope" && isset($_POST["day"]) && isset($_POST["month"])) {
        
        $day = $_POST["day"];
        $month = $_POST["month"];
        $zodiac = "";

        if (($month == "mars" && $day > 20) || ($month == "april" && $day < 20))    {
            $zodiac = "väduren";
        }
        elseif (($month == "april" && $day > 19) || ($month == "maj" && $day < 21))    {
            $zodiac = "oxen";
        }
        elseif (($month == "maj" && $day > 20) || ($month == "juni" && $day < 22))    {
            $zodiac = "tvillingarna";
        }
        elseif (($month == "juni" && $day > 21) || ($month == "juli" && $day < 23))    {
            $zodiac = "Kräftan";
        }
        elseif (($month == "juli" && $day > 22) || ($month == "augusti" && $day < 23))    {
            $zodiac = "Lejonet";
        }
        elseif (($month == "augusti" && $day > 22) || ($month == "september" && $day < 23))    {
            $zodiac = "Jungfrun";
        }
        elseif (($month == "september" && $day > 22) || ($month == "oktober" && $day < 23))    {
            $zodiac = "Vågen";
        }
        elseif (($month == "oktober" && $day > 22) || ($month == "november" && $day < 22))    {
            $zodiac = "Skorpionen";
        }
        elseif (($month == "november" && $day > 21) || ($month == "december" && $day < 22))    {
            $zodiac = "Skytten";
        }
        elseif (($month == "december" && $day > 21) || ($month == "januari" && $day < 20))    {
            $zodiac = "Stenbocken";
        }
        elseif (($month == "januari" && $day > 19) || ($month == "februari" && $day < 19))    {
            $zodiac = "Vattumannen";
        }
        elseif (($month == "februari" && $day > 19) || ($month == "mars" && $day < 21))    {
            $zodiac = "Fiskarna";
        }
        
        $_SESSION["horoscope"] = $zodiac;
        echo json_encode(array("status"=>true));
        
        
         
    }
}


    
?>
