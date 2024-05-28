<?php

function check_password_lenght($password){

    if (strlen($password) >= 8 &&  strlen($password) <= 18) {
        
        return true;
        
    }
    
    return false;
    
    
}

$password = 'password';

echo check_password_lenght($password) . "\n";