<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
     $data= array(
        "January" => "01.02.2020",
        "December" => "12.03.2020",
        "February" => "02.11.2020");
     // функция обратного вызова
     $a = $data[$key];
     $str = "";
     function replace_year($a){
        global $data,$str,$a;
       switch ($a){
        case "January" : $str = "1 января 2020 год"; break;
        default:$str .='Укажите правильно дату';
       }
     }
     
     echo preg_replace_callback("/\d{4}/", "replace_year", $a);
    ?>
</body>
</html>