<?php

          $hostName = 'localhost';
          $dbUserName = 'root';
          $dbPassword = '';
          $dbName = 'dashboard';

          $db = mysqli_connect($hostName, $dbUserName, $dbPassword, $dbName);
          if (!$db) {
               die('DB Connection Error');
          }else{
               // echo 'DB OK';
               
          }


?>
