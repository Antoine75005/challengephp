<?php

$Movies = [
    'the Black Arrow'=>['Louis Hayward','Janet Blair', 'George Macready '],
    'the Secret of Saint Ives'=>['Richard Ney', 'Vanessa Brown', 'Henry Daniell'],
    'the Suicide Club'=>['Montagu Love', 'Elisabeth Risdon', 'Fred Groves']
];

foreach ($Movies as $title => $actors){
    echo "Dans le film  $title  les principaux acteurs sont:\n";
    foreach ($actors as $name){
        echo $name . ", "; 
    }
    echo "\n";
}

?>