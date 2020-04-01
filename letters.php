<?php
require("data.php");

foreach ($people as $key => $man_info) {
    $event_key = $event[$key];
    if ($event_key != "") {
        foreach ($man_info as $key1 => $info) {
            if ($key1 == "name")
                $str = "Уважаемый $info!";
            if ($key1 == "email")
                $email = $info;
        }
        $str .= " " .
                $events[$event_key];
        switch ($event_key) {
            case "sipend":
                $str .= "\nПодтвердите Ваше участие по телефону!";
                break;
            case "deduct":
                $str .= "\nПриходите за 15 минут до открытия!";
                break;
            case "award":
                $str .= "\nНе забудьте подарок :-)";
                break;
            default: $str .= "\nИзвините, но Вас пока никуда не приглашают...";
        }
        $str .= "\n" . SIGN . "\n";

        echo $str;
    }
}
