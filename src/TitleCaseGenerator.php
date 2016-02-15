<?php

    class TitleCaseGenerator
    {
        function makeTitleCase($input_title)
        {
            $lower_case_input = strtolower($input_title);
            $input_array_of_words = explode(" ", $lower_case_input);
            $output_titlecased = array();
            $designated_words = array('a');

            foreach ($input_array_of_words as $word) {

                if (in_array($word, $designated_words)) {
                    array_push($output_titlecased, $word);
                }
                else {
                    array_push($output_titlecased, ucfirst($word));
                }
            }

            $output_titlecased[0] = ucfirst($output_titlecased[0]);

            if (is_numeric($output_titlecased[0])) {
                $output_titlecased[1] = ucfirst($output_titlecased[1]);
            }

            return implode(" ", $output_titlecased);
        }
    }

 ?>


 <!-- // if (gettype($output_titlecased[0] == "integer")) {
 //     $output_titlecased[0] = ucfirst($output_titlecased[0]);
 // } -->
