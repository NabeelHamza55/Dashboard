<?php
     include('db.php');
     // session_start();
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
              $vendors = mysqli_real_escape_string($db, $_POST['vendors']);
              $costPrice = mysqli_real_escape_string($db, $_POST['cost']);
              $retailPrice = mysqli_real_escape_string($db, $_POST['retail']);
          //     $discount = mysqli_real_escape_string($db, $_POST['discount']);
              $unit_weight =  mysqli_real_escape_string($db, $_POST['unitWeight']);
              $dimension =  mysqli_real_escape_string($db, $_POST['dimension']);
              $quantity = mysqli_real_escape_string($db, $_POST['quantity']);
              $condition =  mysqli_real_escape_string($db, $_POST['condition']);
              $picture =  mysqli_real_escape_string($db, $_FILES["picture"]["name"]);
              $description = mysqli_real_escape_string($db, $_POST['description']);

              // File Upload
                    // Check if file was uploaded without errors
                    if($_FILES["picture"]["error"] == 0){
                         $allowed = array("jpg" => "image/jpg", "jpeg" => "image/jpeg", "gif" => "image/gif", "png" => "image/png");
                         $filename = $name. "_New_" .$picture;
                         $filetype = $_FILES["picture"]["type"];
                         $filesize = $_FILES["picture"]["size"];
                         $filename = $name."_New_".$picture ;
                         $upload_dir = 'assets/uploads/images/';

                         // Verify file extension
                         $ext = pathinfo($filename, PATHINFO_EXTENSION);
                         if(!array_key_exists($ext, $allowed)) die("Error: Please select a valid file format.");

                         // Verify file size - 5MB maximum
                         // $maxsize = 10 * 1024 * 1024;
                         // if($filesize > $maxsize) die("Error: File size is larger than the allowed limit.");

                         // Verify MYME type of the file
                         if(in_array($filetype, $allowed)){
                         // Check whether file exists before uploading it
                         if(file_exists($upload_dir . $filename)){
                              echo $filename . " is already exists.";
                         } else{
                              move_uploaded_file($_FILES["picture"]["tmp_name"], $upload_dir . $filename);
                              // echo "Your file was uploaded successfully.";
                         }
                         } else{
                         echo "Error: There was a problem uploading your file. Please try again.";
                         }
                         $p_picture = $upload_dir . $filename;
                    } else{
                         echo "Error: " . $_FILES["picture"]["error"];
                    }

               $query = "INSERT INTO products (name, product_type, brand, model, sku, upc, manufactor, vendors, cost, retail, unit_weight, dimension, quantity, conditions, image, description, created_at, updated_at) VALUE ('$name', '$product_type', '$brand', '$model', '$sku', '$upc', '$manufactor', $vendors, '$costPrice', '$retailPrice', '$unit_weight', '$dimension', '$quantity', '$condition', '$p_picture', '$description', NOW(), NOW())";


               if (mysqli_query($db, $query)) {
                    echo "<script>
                         window.location.href= './productList.php';
                    </script>";
               }else{
                    echo "<script>
                    alert('unsuccessfull');
                    window.location.href= './productAdd.php';
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
               $vendors = mysqli_real_escape_string($db, $_POST['vendors']);
               $costPrice = mysqli_real_escape_string($db, $_POST['cost']);
               $retailPrice = mysqli_real_escape_string($db, $_POST['retail']);
               // $discount = mysqli_real_escape_string($db, $_POST['discount']);
               $unit_weight =  mysqli_real_escape_string($db, $_POST['unitWeight']);
               $dimension =  mysqli_real_escape_string($db, $_POST['dimension']);
               $quantity = mysqli_real_escape_string($db, $_POST['quantity']);
               $condition =  mysqli_real_escape_string($db, $_POST['condition']);
               $picture =  mysqli_real_escape_string($db, $_FILES["picture"]["name"]);
               $description = mysqli_real_escape_string($db, $_POST['description']);


               // File Upload
                    // Check if file was uploaded without errors
                    if($_FILES["picture"]["error"] == 0){
                         $allowed = array("jpg" => "image/jpg", "jpeg" => "image/jpeg", "gif" => "image/gif", "png" => "image/png");
                         $filename = $name. "_Update_" .$picture;
                         $filetype = $_FILES["picture"]["type"];
                         $filesize = $_FILES["picture"]["size"];
                         // $filename = $name.time(). "_" .$picture;
                         $filename = $name. "_Update_" .$picture;
                         $upload_dir = 'assets/uploads/images/';

                         // Verify file extension
                         $ext = pathinfo($filename, PATHINFO_EXTENSION);
                         if(!array_key_exists($ext, $allowed)){
                              $_SESSION['errors'] = 'Error: Please select a valid file format.';
                         }

                         // Verify file size - 5MB maximum
                         // $maxsize = 10 * 1024 * 1024;
                         // if($filesize > $maxsize) die("Error: File size is larger than the allowed limit.");

                         // Verify MYME type of the file
                         if(in_array($filetype, $allowed)){
                         // Check whether file exists before uploading it
                         if(file_exists($upload_dir . $filename)){
                              unlink($upload_dir . $filename);
                              move_uploaded_file($_FILES["picture"]["tmp_name"], $upload_dir . $filename);

                         } else{
                              move_uploaded_file($_FILES["picture"]["tmp_name"], $upload_dir . $filename);
                              // echo "Your file was uploaded successfully.";
                         }
                         } else{
                              $_SESSION['errors'] = "Error: There was a problem uploading your file. Please try again.";
                         }
                         $p_picture = $upload_dir . $filename;
                    } else{
                         $_SESSION['errors'] =  "Error: " . $_FILES["picture"]["error"];
                    }

                    if (!empty($_FILES['picture']['name'])) {
                    $query = "UPDATE products SET name = '$name', product_type = '$product_type', brand = '$brand', model = '$model', sku = '$sku', upc = '$upc', manufactor = '$manufactor', vendors = '$vendors', cost = '$costPrice', retail = '$retailPrice', unit_weight = '$unit_weight', dimension = '$dimension', quantity = '$quantity', conditions = '$condition', image = '$p_picture', description = '$description', updated_at = NOW() WHERE id = '$id'";
               }else{
                    $query = "UPDATE products SET name = '$name', product_type = '$product_type', brand = '$brand', cost = '$costPrice', retail = '$retailPrice', unit_weight = '$unit_weight', dimension = '$dimension', quantity = '$quantity', conditions = '$condition',  model = '$model', sku = '$sku', upc = '$upc', manufactor = '$manufactor', vendors = '$vendors', description = '$description', updated_at = NOW() WHERE id = '$id'";
               }


               if (isset($_SESSION['errors'])) {
                    echo $_SESSION['errors'];
               }

               if (mysqli_query($db, $query)) {
                    $_SESSION['status'] =  "Product Updated Successfully";
                    echo "<script>
                         window.location.href= './productList.php';
                    </script>";
               }else{
                    $_SESSION['errors'] =  "Failed";
                    echo "<script>
                    window.location.href= './productUpdate.php?id='".$id.";
               </script>";
               }
          }

     }

     function importCSV(){
          global $db;
          global $errors;
          if (isset($_POST['import'])) {
               $filename = $_FILES['CSV']['name'];
               $upload_dir = 'assets/uploads/documents/';

               // Allowed mime types
               $csvMimes = array('text/x-comma-separated-values', 'text/comma-separated-values', 'application/octet-stream', 'application/vnd.ms-excel', 'application/x-csv', 'text/x-csv', 'text/csv', 'application/csv', 'application/excel', 'application/vnd.msexcel', 'text/plain');

               // Validate whether selected file is a CSV file
               if(!empty($_FILES['CSV']['name']) && in_array($_FILES['CSV']['type'], $csvMimes)){

                    // If the file is uploaded
                    if(is_uploaded_file($_FILES['CSV']['tmp_name'])){

                         // Open uploaded CSV file with read-only mode
                         $csvFile = fopen($_FILES['CSV']['tmp_name'], 'r');

                         // Skip the first line

                         fgetcsv($csvFile, 10000, ',');
                         // Parse data from CSV file line by line
                         while( ($product = fgetcsv($csvFile, 10000, ',')) !== FALSE){
                              // Get row data

                              // echo '<pre>';
                              // print_r($product);
                              // echo '</pre><br>';

                              // Insert member data in the database
                               $query = "INSERT INTO products (name, product_type, brand, model, sku, upc, manufactor, vendors, cost, retail, unit_weight, dimension, quantity, conditions, image, description) VALUE ('$product[0]', '$product[2]', '$product[3]', '$product[4]', '$product[5]', '$product[5]', '$product[6]', '$product[7]', '$product[8]', '$product[9]', '$product[10]', '$product[11]', '$product[12]', '$product[13]', '$product[14]', '$product[15]')";

                               mysqli_query($db, $query);

                         }

                         // Close opened CSV file
                         fclose($csvFile);
                         // if (isset($_SESSION['errors'])) {
                         //      echo $_SESSION['errors'];
                         // }

                         if (!isset($_SESSION['errors'])) {
                              $_SESSION['status'] =  "Products Added Successfully";
                              echo "<script>
                                   window.location.href= './productList.php';
                              </script>";
                         }
                    }else{
                         $_SESSION['errors'] =  "System Errors";
                              echo "<script>
                              window.location.href= './CSVImport.php';
                         </script>";
                    }
               }else{
                    if (!isset($_SESSION['status'])) {
                         $_SESSION['errors'] =  "The File Is not A CSV FILE";
                              echo "<script>
                              window.location.href= './CSVImport.php';
                              </script>";
                    }
               }
          }

     }

?>
