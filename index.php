<?php
	$dblocation = "localhost";
    $dbuser = "root";
    $dbpass = "";
    $dbLink = @mysql_connect($dblocation, $dbuser, $dbpass);
    if(!$dbLink) echo 'Connecting problem';
    /* else 
    {
        if(mysql_query($sql)) echo 'Table has alredy created';
        else {
            mysql_select_db('Notes'); 
            $sql = "CREATE TABLE  `users` (`id` INT NOT NULL ,`user` VARCHAR( 100 ) CHARACTER 
            SET utf8 COLLATE utf8_general_ci NOT NULL , PRIMARY KEY (  `id` ))";   
            if(mysql_query($sql)) echo 'Table is created';
            else echo 'Table is not created';
        }
    } */
?>