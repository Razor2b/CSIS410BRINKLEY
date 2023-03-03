<?php
	try{
        if ($db = new PDO("mysql:host=localhost;dbname=cms", "root", "")) {
            
        }else{
            throw new Exception("Error Processing Request", 1);
            
        }
        if ($con = mysqli_connect("localhost", "root", "", "cms")) {
        	
            
        }else{
            throw new Exception("Error Processing Request", 1);
            
        }
    }
    catch(Exception $e){
        echo $e->getMessage();

    }
?>