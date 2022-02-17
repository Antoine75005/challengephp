<?php

$weapons = ['fists', 'whip', 'gun'];
$opponentWeapon = $weapons[rand(0, 2)];

if ($opponentWeapon === $weapons[0]) {
    $stevensonWeapon = $weapons[2];
} elseif ($opponentWeapon === $weapons[1]) {
    $stevensonWeapon = $weapons[0];
} else {
    $stevensonWeapon = $weapons[1];
}

echo "arme de l'ennemi $opponentWeapon vs arme de Stenvenson $stevensonWeapon";
