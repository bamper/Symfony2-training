<?php

$users = array(
    (object)array( 'username'=> 'mikhail', 'password'=> 'secret' ),
    (object)array( 'username'=> 'hadi', 'password'=> 'spaniard' ),
    (object)array( 'username'=> 'marten', 'password'=> 'secret' )
);

function matches($a, $b) {
    return $a == $b;
}

function authenticate($users, $username, $password){
    for($i=0; $i < count($users); $i++){
        if (matches($users[$i]->username, $username) && matches($users[$i]->password, $password)){
            return true;
        }
    }
    return false;
}

$isAuthenticated = authenticate($users, 'marten', 'secret');
if($isAuthenticated){
    echo 'Welcome, well-known user!';
} else{
    echo 'Not authenticated.';
}