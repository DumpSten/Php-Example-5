<?php

/*
    strlen()
    strstr()
    strpos()
    ucwords() ucfirst() strtolower() strtoupper()
    trim() ltrim() rtrim()
    substr()
    str_replace()
    str_repeat()
*/  
    $str = 'alper catal';
   // echo strlen($str) . '<br>';
   // echo strlen('alperçatal'). '<br>';
   // echo strpos('alper çatal' , 'a');

   // echo ucwords($str). '<br>';
   // echo ucfirst($str). '<br>';
   // echo strtolower($str). '<br>';
   // echo strtoupper($str);
   
   $str2 = '-alper-ctl-';
   // echo trim($str2 . '-');
   // echo ltrim($str2 . '-');
   // echo rtrim($str2 . '-');

   // echo substr($str , 3,6);

   $str3 = 'Alper ctl , DumpSten ctl';
   // echo str_replace('ctl' , 'catal', $str3);

    echo str_repeat('*' , 100) . '<br>';
    echo str_repeat('*' , 100) . '<br>';
    echo str_repeat('*' , 100) . '<br>';
    echo str_repeat('*' , 100) . '<br>';
    echo str_repeat('*' , 100) . '<br>';
    echo str_repeat('*' , 100) . '<br>';
    echo str_repeat('*' , 100) . '<br>';

    for ($i=1; $i <= 10; $i++) { 
        echo str_repeat('*',$i).'<br>';
    }

?>