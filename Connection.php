<?php

    $connection = mysqli_connect('localhost', 'root', '', 'registration');
    
    if(!$connection)
    {
        die('ERROR' .mysqli_connect_error());
    }

    else{
        echo "CONNECTION ESTABLISHED <hr>";
    }

?>
