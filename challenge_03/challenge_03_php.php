<?php
    $lines_array = [];
    $invalid_keys = [];

    $file_path = "encryption_policies.txt";
    $lines_array = file($file_path, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

    foreach ($lines_array as $line) {
        $letters_count = [];

        list($line_parameters, $line_key) = explode(":", $line, 2);

        foreach (str_split($line_key) as $char) {
            if (ctype_alpha($char)) {
                $letters_count[$char] = isset($letters_count[$char]) ? $letters_count[$char] + 1 : 1;
            }
        }

        list($line_parameters_range, $line_parameters_letter) = explode(" ", trim($line_parameters));
        list($line_parameters_range_min, $line_parameters_range_max) = explode("-", $line_parameters_range);

        if (array_key_exists($line_parameters_letter, $letters_count)) {
            if ($letters_count[$line_parameters_letter] < (int)$line_parameters_range_min || $letters_count[$line_parameters_letter] > (int)$line_parameters_range_max) {
                $invalid_keys[] = $line_key;
            }
        } else {
            $invalid_keys[] = $line_key;
        }
    }

    echo str_replace(" ", "", $invalid_keys[41]);
?>
