<?php 

    $firstMessage='0@sn9sirppa@#?ia’jgtvryko1';
    $lenght= mb_strlen($firstMessage) /2;
    $substring=mb_substr($firstMessage, 5, $lenght);
    $replace=str_replace('@#?',' ',$substring);
    $answer1=strrev($replace);
   

    $secondMessage='q8e?wsellecif@#?sel@#?setuotpazdsy0*b9+mw@x1vj';
    $lenght= mb_strlen($secondMessage) /2;
    $substring=mb_substr($secondMessage, 5, $lenght);
    $replace=str_replace('@#?', ' ',$substring);
    $answer2=strrev($replace);  
    
    $thirdMessage='aopi?sgnirts@#?sedhtg+p9l!';
    $lenght= mb_strlen($thirdMessage) /2;
    $substring=mb_substr($thirdMessage, 5, $lenght);
    $replace= str_replace('@#?', ' ', $substring);
    $answer3= strrev($replace);
    echo $answer1 .' '. $answer2 .' '. $answer3

?>