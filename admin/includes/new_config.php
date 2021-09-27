<?php 

// Database Connection Constants 

define('DB_HOST','sql146.main-hosting.eu');
define('DB_USER','u490444716_Joe_Karl');
define('DB_PASS','Krampusjake1991');
define('DB_NAME','u490444716_galleryProject');


$connection = mysqli_connect(DB_HOST,DB_USER, DB_PASS, DB_NAME);


if($connection){

    echo "true";

}


?>