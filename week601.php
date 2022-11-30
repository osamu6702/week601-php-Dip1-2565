<?php
    $role = 'subscribe';
    $message = '';

    if('admin' === $role){
        $message = 'Welcome, Admin';
    }elseif('author' === $role){
        $message = 'Welcome, author';
    }elseif('subscriube' === $role){
        $message = 'Welcome, subscriube';
    }else{
        $message = 'Sorry';
    }
    print($message);
?>

