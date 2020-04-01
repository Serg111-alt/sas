<?php
define("SIGN", "С уважением, Деканат.");

$events = array(
    "sipend" => "Вам начислена стипендия",
    "deduct" => "Вы отчислены",
    "award" => "Вам начислена премия!");

$people = array(
    "ivan" => array(
        "name" => "Иван Иванов",
        "email" => "ivan@mail.com"),
    "petr" => array(
        "name" => "Петр Петров",
        "email" => "petr@mail.com"),
    "semen" => array(
        "name" => "Семен Семенов"));

$event["ivan"] = "sipend";
$event["petr"] = "deduct";
$event["semen"] = "award";