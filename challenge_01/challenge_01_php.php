<?php
    $string_read = "";
    $words_array = array();

    $string_read = file_get_contents("message_01.txt");
    $words_array = explode(" ", $string_read);
    $words_count = array_count_values($words_array);

    foreach ($words_count as $index => $item) {
        echo "$index$item";
    }
?>