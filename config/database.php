<?php 

        define('DB_HOST' , 'localhost');
        define('DB_USER' , 'Niten');
        define('DB_PASS' , 'nitensapkota175');
        define('DB_NAME' , 'FeedBack_App');


        // create connections

        $conn = new mysqli(DB_HOST,DB_USER,DB_PASS,DB_NAME);

        // Check connection
        if($conn->connect_error){

            die('Connection Failed'.$conn->connect_error);
        }

    
        