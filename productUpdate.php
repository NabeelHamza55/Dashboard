<?php
$title = 'Dashboard';
include('./components/HTML_Start.php');
include('./components/header.php');
include('./functions/_product.php');
$product = singleProduct();
editProduct();
?>

<h1 class="mt-4">Products</h1>
<ol class="breadcrumb mb-4">
    <li class="breadcrumb-item">Dashboard</li>
    <li class="breadcrumb-item">Products</li>
    <li class="breadcrumb-item active">Edit Products</li>
</ol>

<div class="card">
    <div class="card-header d-flex justify-content-between align-items-center">
        <h4 class="card-title">Edit Product</h4>
        <a href="./productList.php" class="btn btn-primary">Product List</a>
    </div>
    <form action="" method="POST">
        <div class="card-body">
            <section class="container">
                <div class="row ">
                    <div class="col">
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" name="name" value="<?php echo $product['name'] ?>" class="form-control"
                                id="name" required>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label for="productType">Product Type</label>
                            <input type="text" name="productType" value="<?php echo $product['product_type'] ?>"
                                class="form-control" id="productType" required>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label for="brand">Brand</label>
                            <input type="text" name="brand" value="<?php echo $product['brand'] ?>" class="form-control"
                                id="brand" required>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="row ">
                    <div class="col-6">
                        <div class="form-group">
                            <label for="model">Model</label>
                            <input type="text" name="model" value="<?php echo $product['model'] ?>" class="form-control"
                                id="model" required>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label for="sku">SKU</label>
                            <input type="text" name="sku" value="<?php echo $product['sku'] ?>" class="form-control"
                                id="sku" required>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="form-group">
                            <label for="unitWeight">Unit Weight</label>
                            <input type="text" name="unitWeight" value="<?php echo $product['unit_weight'] ?>"
                                class="form-control" id="unitWeight" required>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="form-group">
                            <label for="retail">Retail</label>
                            <input type="text" name="retail" value="<?php echo $product['retail'] ?>"
                                class="form-control" id="retail" required>
                        </div>
                    </div>
                    <div class="col-4">
                        <label for="discount">Discount</label>
                        <div class="input-group">
                            <input type="text" name="discount" value="<?php echo $product['discount'] ?>"
                                class="form-control" id="discount" required>
                            <div class="input-group-append">
                                <span class="input-group-text">%</span>
                            </div>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col">
                        <label for="description">Product Description</label>
                        <textarea class="w-100 form-control" rows="3" name="description"
                            id="description"><?php echo $product['description'] ?></textarea>
                    </div>
                </div>
            </section>
        </div>
        <div class="card-footer">
            <button class="btn btn-primary float-end" value="update" type="submit" name="update">Update Product</button>
        </div>
    </form>
</div>
<br>
<?php
include('./components/footer.php');
include('./components/HTML_End.php');
  ?>
