<?php
  $data= array(
        "January" => "01.02.2020",
         "December" => "12.03.2020",
         "February" => "02.11.2020");
    
      foreach ($data as $value => $data_info) {
         $a = $data[$value];
          }
         $str = " " ;  
        function replace_year($a){
           global $str,$a;
          switch ($a){
           case "January" : $str .= "1 января 2020 год"; break;
           default:$str .='Укажите правильно дату';
          }
        }
        echo preg_replace_callback("/\d{4}/", "replace_year", $str);
        

        