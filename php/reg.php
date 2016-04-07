<?php
     
     $db_link = @mysql_connect("localhost", "root", "");
     mysql_select_db("Notes", $db_link);
     $query = "INSERT INTO `Notes`.`users` (`id`, `login`, `pass`) VALUES (NULL,'". $_POST['login']."', '".$_POST['password']."');";
     $login = $_POST['login'];
     mysql_query($query);
     mysql_query("CREATE TABLE $login (note TEXT)");
     
     exit();
     
?>