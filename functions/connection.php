<?php 


function connect_database(){
    $servername = 'localhost';
    $username = 'root';
    $password = '';
    $database = 'market';


    return $conn = new mysqli($servername,$username,$password,$database); // string connection - the code that connects PHP to MYSQL
}



// print_r(connect_database());


?>