<?php
    $wordTextArrayOne = explode(' ', $_GET['text_1']);
    $wordTextArrayTwo = explode(' ', $_GET['text_2']);

    function getCommonWords ($wordTextArrayOne, $wordTextArrayTwo) {
        $wordText = array();
        foreach ($wordTextArrayOne as $number) {
            foreach ($wordTextArrayTwo as $value) {
                if ($number == $value) {
                    $wordText[] = $number;
                }
            }
        }
        foreach ($wordText as $some) {
            echo $some.' ';
        }
    }
    echo getCommonWords ($wordTextArrayOne, $wordTextArrayTwo);


