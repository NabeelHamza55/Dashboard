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
        <h4 class="card-title">Product List <?php echo $_SESSION['status']?></h4>
        <a href="./productAdd.php" class="btn btn-primary">Add Product</a>
    </div>
    <?php 
        if (isset($_SESSION['status'])) {
    ?>
    <!-- <div class="card-body">
        <div class="container">
            <div class="alert alert-success">
                <strong>Success!</strong> <?php echo $_SESSION['status']; ?>.
            </div>
            <?php
                // unset($_SESSION['status']);
                }
    ?>
    <div class="card-footer">
        <table class="table table-responsive table-hover" id="datatablesSimple">
            <thead>
                <tr>
                    <th>Sr.No.</th>
                    <th>Product Image</th>
                    <th>Name</th>
                    <th>Product Type</th>
                    <th>Brand</th>
                    <th>Model</th>
                    <th>SKU</th>
                    <th>UPC</th>
                    <th>Manufactor</th>
                    <th>COST</th>
                    <th>Retail</th>
                    <th>Unit Weight</th>
                    <th>Dimensions</th>
                    <th>Quantity</th>
                    <th>Conditions</th>
                    <th>Description</th>
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
                        <img class="img-thumbnail" src="<?php echo $product['image']; ?>"
                            alt="<?php echo $product['name']; ?>">
                    </td>
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
                        <?php echo $product['upc']; ?>
                    </td>
                    <td>
                        <?php echo $product['manufactor']; ?>
                    </td>
                    <td>
                        $<?php echo $product['cost']; ?>
                    </td>
                    <td>
                        $<?php echo $product['retail']; ?>
                    </td>
                    <!-- <td>
                        <?php // echo $product['discount']; ?>
                    </td> -->
    <td>
        <?php echo $product['unit_weight']; ?>
    </td>
    <td>
        <?php echo $product['dimension']; ?>
    </td>
    <td>
        <?php echo $product['quantity']; ?>
    </td>
    <td>
        <?php echo $product['conditions']; ?>
    </td>
    <td>
        <?php echo $product['description']; ?>
    </td>

    <td>
        <div class="container p-1 d-flex justify-content-around align-items-center">
            <a href="./productUpdate.php?id=<?php echo $product['id']; ?>" class="btn mx-1 btn-primary"><i
                    class="fa fa-edit" aria-hidden="true"></i></a>
            <a onclick="confirm('Are you Sure');"
                href="./functions/_delete_product.php?id=<?php echo $product['id']; ?>" class="btn mx-1 btn-primary"><i
                    class="fa fa-trash" aria-hidden="true"></i></a>
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
    </tfoot>
    </table>
</div>
</div>
<br>
<?php
include('./components/footer.php');
include('./components/HTML_End.php');
  ?>
