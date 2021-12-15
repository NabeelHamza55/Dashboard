<?php

          $hostName = 'localhost';
          $dbUserName = 'root';
          $dbPassword = '';
          $dbName = 'dashboard';

          $db = mysqli_connect($hostName, $dbUserName, $dbPassword, $dbName);
          if ($db) {
               echo 'DB OK';
               return $db;
          }else{
               die('DB Connection Error');
          }


?>
