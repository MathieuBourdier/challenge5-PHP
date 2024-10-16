<?php
$weapons = ['fists', 'whip', 'gun'];
$opponentWeapon = $weapons[rand(0, 2)];

echo "The opponent weapon is: " . $opponentWeapon . "\n";

switch ($opponentWeapon) {
    case "fists":
        $stevensonWeapon = "gun";
        break;
    case "whip":
        $stevensonWeapon = "fists";
        break;
    case "gun":
        $stevensonWeapon = "whip";
        break;
}

echo "Stevenson's weapon is: " . $stevensonWeapon . "\n";
?>


    

