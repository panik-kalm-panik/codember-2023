<?php
    $string_read = "";
    $count_var = 0;

    $string_read = file_get_contents("message_02.txt");
    $string_read = str_split($string_read);

    foreach ($string_read as $char) {
        switch($char) {
            case "#":
                $count_var++;
                break;
            case "@":
                $count_var--;
                break;
            case "*":
                $count_var *= $count_var;
                break;
            case "&":
                echo $count_var;
                break;
            default:
                break;
        }
    } 
?>