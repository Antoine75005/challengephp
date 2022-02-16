<?php

$books['la flèche noire']= '1883';
$books['labouteille endiablée']='1891';
$books['Saint-Yves']='1896';
$books = [
    'la flèche noire' => '1883',
    'la bouteille endiablée' => '1891',
    'Saint-Yves' => '1896'
]; 

asort($books);

foreach ($books as $key=> $value)
{
echo ($key. ' ' . $value .' ');
}

?>