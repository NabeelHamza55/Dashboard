<?php

include('db.php');

$id = $_GET['id'];

$query = "DELETE FROM products WHERE id = $id";
if (mysqli_query($db, $query)) {
     echo "
          <script>
               window.location.href='../productList.php';
          </script>
     ";
}else{
     die('System Error');
}

?>
