<?php

     include('db.php');
     $errors[] = '';
     function productList(){
          global $db;
          global $errors;
          $query = "SELECT * FROM products";
          $result = mysqli_query($db, $query);

          if ($result->num_rows > 0) {
               while ($list = $result->fetch_assoc()) {
                    $arr[] = $list;
               }
               return $arr;
          }else{
               return 0;
          }
     }
     function singleProduct(){
         global $db;
         global $errors;
         $id = $_GET['id'];

         $query = "SELECT * FROM products WHERE id = '$id'";
         $result = mysqli_query($db, $query);

         if ($result->num_rows > 0) {
             $list = $result->fetch_assoc();
             $arr = $list;

             return $arr;
         } else {
             return 0;
         }
     }

     function addProduct(){
          global $db;
          global $errors;
          // $date = date("Y-m-d h:i:sa");
          if (isset($_POST['add'])) {
              $name = mysqli_real_escape_string($db, $_POST['name']);
              $product_type = mysqli_real_escape_string($db, $_POST['productType']);
              $brand = mysqli_real_escape_string($db, $_POST['brand']);
              $model = mysqli_real_escape_string($db, $_POST['model']);
              $sku = mysqli_real_escape_string($db, $_POST['sku']);
              $upc = mysqli_real_escape_string($db, $_POST['upc']);
              $manufactor = mysqli_real_escape_string($db, $_POST['manufactor']);
              $costPrice = mysqli_real_escape_string($db, $_POST['cost']);
              $retailPrice = mysqli_real_escape_string($db, $_POST['retail']);
          //     $discount = mysqli_real_escape_string($db, $_POST['discount']);
              $unit_weight =  mysqli_real_escape_string($db, $_POST['unitWeight']);
              $dimension =  mysqli_real_escape_string($db, $_POST['dimension']);
              $quantity = mysqli_real_escape_string($db, $_POST['quantity']);
              $condition =  mysqli_real_escape_string($db, $_POST['condition']);
              $picture =  mysqli_real_escape_string($db, $_POST['picture']);
              $description = mysqli_real_escape_string($db, $_POST['description']);

               $query = "INSERT INTO products (name, product_type, brand, model, sku, upc, manufactor, cost, retail, unit_weight, dimension, quantity, conditions, image, description, created_at, updated_at) VALUE ('$name', '$product_type', '$brand', '$model', '$sku', '$upc', '$manufactor', '$costPrice', '$retailPrice', '$unit_weight', '$dimension', '$quantity', '$condition', '$picture', '$description', NOW(), NOW())";


               if (mysqli_query($db, $query)) {
                    echo "<script>
                         window.location.href= './productList.php';
                    </script>";
               }else{
                    echo "<script>
                    alert('unsuccessfull');
                    // window.location.href= './productAdd.php';
               </script>";
               }
         }
     }

     function editProduct(){
          global $db;
          global $errors;
          if (isset($_POST['update'])) {
               $id = $_GET['id'];
               // $date = date("Y-m-d h:i:sa");
               $name = mysqli_real_escape_string($db, $_POST['name']);
               $product_type = mysqli_real_escape_string($db, $_POST['productType']);
               $brand = mysqli_real_escape_string($db, $_POST['brand']);
               $model = mysqli_real_escape_string($db, $_POST['model']);
               $sku = mysqli_real_escape_string($db, $_POST['sku']);
               $upc = mysqli_real_escape_string($db, $_POST['upc']);
               $manufactor = mysqli_real_escape_string($db, $_POST['manufactor']);
               $costPrice = mysqli_real_escape_string($db, $_POST['cost']);
               $retailPrice = mysqli_real_escape_string($db, $_POST['retail']);
               $discount = mysqli_real_escape_string($db, $_POST['discount']);
               $unit_weight =  mysqli_real_escape_string($db, $_POST['unitWeight']);
               $dimension =  mysqli_real_escape_string($db, $_POST['dimension']);
               $quantity = mysqli_real_escape_string($db, $_POST['quanity']);
               $condition =  mysqli_real_escape_string($db, $_POST['condition']);
               $picture =  mysqli_real_escape_string($db, $_POST['picture']);
               $description = mysqli_real_escape_string($db, $_POST['description']);

               $query = "UPDATE products SET name = '$name', product_type = '$product_type', brand = '$brand', model = '$model', sku = '$sku', upc = '$upc', manufactor = '$manufactor', cost = '$costPrice', retail = '$retailPrice', unit_weight = '$unit_weight', dimension = '$dimension', quantity = '$quantity', conditions = '$condition', picture = '$picture', description = '$description', updated_at = NOW() WHERE id = '$id'";


               if (mysqli_query($db, $query)) {
                    echo "<script>
                         window.location.href= './productList.php';
                    </script>";
               }else{
                    echo "<script>
                    alert('unsuccessfull');
                    window.location.href= './productUpdate.php?id='".$id.";
               </script>";
               }
         }

     }



?>
