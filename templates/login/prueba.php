<?php

$opciones = [
    'cost' => 12,
];
echo password_hash("Mateo&Lucia", PASSWORD_BCRYPT, $opciones)."\n";


$hash = '$2y$12$G/n5mHBXh.dMUWcOt7jAJ.70LRr5QQWnISbAsaHfdKInkxuMkW4YO';
if( password_verify ( "Mateo&Lucia" , $hash ) ){
    echo "Login COrrecto\n";
} else {
    echo "Error Login";
}

?>