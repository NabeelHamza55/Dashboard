<?php

$title = 'Dashboard';
include('./components/HTML_Start.php');
include('./components/header.php');
include('./functions/_product.php');
$result = productList();

?>

<h1 class="mt-4">Products</h1>

<ol class="breadcrumb mb-4">
    <li class="breadcrumb-item">Dashboard</li>
    <li class="breadcrumb-item active">Products</li>
</ol>

<div class="card">
    <div class="card-header d-flex justify-content-between align-items-center">
        <h4 class="card-title">Product List</h4>
        <a href="./SetInventoryValues.php" class="btn btn-primary">Set Values</a>
    </div>
    <div class="card-body">
        <table class="table table-responsive table-hover" id="datatablesSimple">
            <thead>
                <tr>
                    <th>Sr.No.</th>
                    <th>Name</th>
                    <th>Product Type</th>
                    <th>Brand</th>
                    <th>Model</th>
                    <th>SKU</th>
                    <th>Unit Weight</th>
                    <th>Retail</th>
                    <th>20% Profit</th>
                    <th>40% Profit</th>
                    <th>60% Profit</th>
                    <th>80% Profit</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if ($result == 0) {
               ?>
                <tr>
                    <td class="text-center" colspan="10">No Product Found</td>
                </tr>
                <?php
                }else{
                     $sr = 1;
                    foreach ($result as $product) {
                        ?>
                <tr>
                    <td><?php echo $sr; ?></td>
                    <td>
                        <?php echo $product['name']; ?>
                    </td>
                    <td>
                        <?php echo $product['product_type']; ?>
                    </td>
                    <td>
                        <?php echo $product['brand']; ?>
                    </td>
                    <td>
                        <?php echo $product['model']; ?>
                    </td>
                    <td>
                        <?php echo $product['sku']; ?>
                    </td>
                    <td>
                        <?php echo $product['unit_weight']; ?>
                    </td>
                    <td>
                        <?php echo $product['retail']; ?>
                    </td>
                    <td>
                        <?php 
                            $percentage = 0.2;
                            $retail = $product['retail'];
                            $price =  ($retail / 100) * $percentage; 
                            echo $price;
                        ?>
                    </td>
                    <td>
                        <?php 
                            $percentage = 0.4;
                            $retail = $product['retail'];
                            $price =  ($retail / 100) * $percentage; 
                            echo $price;
                        ?>
                    </td>
                    <td>
                        <?php 
                            $percentage = 0.6;
                            $retail = $product['retail'];
                            $price =  ($retail / 100) * $percentage; 
                            echo $price;
                        ?>
                    </td>
                    <td>
                        <?php 
                            $percentage = 0.8;
                            $retail = $product['retail'];
                            $price =  ($retail / 100) * $percentage; 
                            echo $price;
                        ?>
                    </td>
                    <td>
                        <div class="container p-1 d-flex justify-content-around align-items-center">
                            <a href="./productUpdate.php?id=<?php echo $product['id']; ?>"
                                class="btn mx-1 btn-primary"><i class="fa fa-edit" aria-hidden="true"></i></a>
                            <a onclick="confirm('Are you Sure');"
                                href="./functions/_delete_product.php?id=<?php echo $product['id']; ?>"
                                class="btn mx-1 btn-primary"><i class="fa fa-trash" aria-hidden="true"></i></a>
                        </div>
                    </td>
                </tr>
                <?php
                $sr++;
                    }
                }
                ?>
            </tbody>
            <tfoot>
                <tr>
                    <th>Name</th>
                    <th>Position</th>
                    <th>Office</th>
                    <th>Age</th>
                    <th>Start date</th>
                    <th>Salary</th>
                </tr>
            </tfoot>
        </table>
    </div>
    <div class="card-footer"></div>
</div>
<br>
<?php
include('./components/footer.php');
include('./components/HTML_End.php');
  ?>
