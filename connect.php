<?php

//connect.php

//connect to DB
function connect()
{

    $username = 'dasgreen_cscuser';
    $password = 'AIMuzYO07^IS';
    $hostname = 'localhost';
    $database = 'dasgreen_coneybeare';
    
    $cnxn = @mysqli_connect($hostname, $username, $password, $database)
    or die("Error connecting to database!");
    return $cnxn;

}
