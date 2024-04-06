<?php

function mostRecent(string $text){
    
    $userText = mb_strtolower($text);
    $userText = preg_replace('/\s+/', ' ', $userText);
    $userText = preg_replace('/[^ a-zа-яё\d]/ui', '',$userText );
    $words = explode(" ", $userText);

    $coutWords = array_count_values($words);
    arsort($coutWords);

    $mostCommonWordCount = reset($coutWords);
    $mostCommonWord = array_keys($coutWords, $mostCommonWordCount);

    return implode('', $mostCommonWord);



}

$input = readline("Введите текст: ");

// print mb_strtolower($userText);

print mostRecent($input);


// print strlen($userText).PHP_EOL;