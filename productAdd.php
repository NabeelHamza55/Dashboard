<?php
$title = 'Add Product';
include('./functions/_product.php');
addProduct();
include('./components/HTML_Start.php');
include('./components/header.php');
?>

<h1 class="mt-4">Products</h1>
<ol class="breadcrumb mb-4">
    <li class="breadcrumb-item">Dashboard</li>
    <li class="breadcrumb-item">Products</li>
    <li class="breadcrumb-item active">Add Products</li>
</ol>

<div class="card">
    <div class="card-header d-flex justify-content-between align-items-center">
        <h4 class="card-title">Add Product</h4>
        <a href="./productList.php" class="btn btn-primary">Product List</a>
    </div>
    <form action="" method="POST">
        <div class="card-body">
            <section class="container">
                <div class="row ">
                    <div class="col">
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" name="name" class="form-control" id="name" required>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label for="productType">Product Type</label>
                            <input type="text" name="productType" class="form-control" id="productType" required>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label for="brand">Brand</label>
                            <input type="text" name="brand" class="form-control" id="brand" required>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="row ">
                    <div class="col-6">
                        <div class="form-group">
                            <label for="model">Model</label>
                            <input type="text" name="model" class="form-control" id="model" required>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label for="sku">SKU</label>
                            <input type="text" name="sku" class="form-control" id="sku" required>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label for="UPC">UPC</label>
                            <input type="text" name="UPC" class="form-control" id="UPC" required>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label for="manufactor">Manufactor</label>
                            <input type="text" name="manufactor" class="form-control" id="manufactor" required>
                        </div>
                    </div>
                    <div class="col-4">
                        <label for="cost">Cost Price</label>
                        <div class="input-group">
                            <div class="input-group-append">
                                <span class="input-group-text">$</span>
                            </div>
                            <input type="number" name="cost" class="form-control" id="cost" required>
                        </div>
                    </div>
                    <div class="col-4">
                        <label for="retail">Retail Price</label>
                        <div class="input-group">
                            <div class="input-group-append">
                                <span class="input-group-text">$</span>
                            </div>
                            <input type="number" name="retail" class="form-control" id="retail" required>
                        </div>
                    </div>
                    <div class="col-4">
                    <div class="form-group">
                            <label for="quantity">Quantity</label>
                            <input type="text" name="quantity" class="form-control" id="quantity" required>
                        </div>
                        <!-- <label for="discount">Discount</label>
                        <div class="input-group">
                            <input type="text" name="discount" class="form-control" id="discount" required>
                            <div class="input-group-append">
                                <span class="input-group-text">%</span>
                            </div>
                            <input type="text" value="" class="form-control" id="discount" disabled>
                        </div> -->
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-4">
                        <div class="form-group">
                            <label for="unitWeight">Unit Weight</label>
                            <input type="text" name="unitWeight" class="form-control" id="unitWeight" required>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="form-group">
                            <label for="dimension">Dimension</label>
                            <input type="text" name="dimension" class="form-control" id="dimension" required>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="form-group">
                            <label for="unitWeight">Conditions</label>
                            <select class="form-control" name="" id="">
                                <option disabled selected value="">Select</option>
                                <option value="new">New</option>
                                <option value="used">Used</option>
                                <option value="refurbished">Refurbished</option>
                                <option value="selvage">Selvage</option>
                                <option value="shelfPulls">Shelf Pulls</option>
                                <option value="costumersReturn">Costumers Return/</option>
                            </select>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col">
                        <label for="description">Product Description</label>
                        <textarea class="w-100 form-control" rows="3" name="description"
                            id="description"></textarea>
                    </div>
                </div>
            </section>
        </div>
        <div class="card-footer">
            <button class="btn btn-primary" value="add" type="submit" name="add">Add Product</button>
        </div>
    </form>
</div>
<br>
<?php
include('./components/footer.php');
include('./components/HTML_End.php');
  ?>
