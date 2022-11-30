<?php
    $role = 'subscribe';
    $message = '';
    switch($role){
        case 'sdmin';
            $message = 'Welcome, Admin';
            break;
        case 'author';
            $message = 'Welcome, Author';
             break;  
        case 'subscribe';
            $message = 'Welcome, Subscribe';
            break;
        default:
        $message = 'Sorry';
    }
    print($message);
?>
