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
                            <label for="reatil">Retail</label>
                            <input type="text" name="reatil" class="form-control" id="reatil" required>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label for="costBase">Cost Base</label>
                            <input type="text" name="costBase" class="form-control" id="costBase" required>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label for="profitRange">Profit Range</label>
                            <input type="text" name="profitRange" class="form-control" id="profitRange" required>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="row ">
                    <div class="col-6">
                        <div class="form-group">
                            <label for="difference">Difference</label>
                            <input type="text" name="difference" class="form-control" id="difference" required>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label for="cstRat">CST RAT</label>
                            <input type="text" name="cstRat" class="form-control" id="cstRat" required>
                        </div>
                    </div>
                    <div class="col-4">
                        <label for="profit">Profit</label>
                        <div class="input-group">
                            <input type="text" name="profit" class="form-control" id="profit" required>
                            <div class="input-group-append">
                                <span class="input-group-text">%</span>
                            </div>
                            <input type="text" value="" class="form-control" id="profit" disabled>
                        </div>
                    </div>
                </div>
                <hr>
            </section>
        </div>
        <div class="card-footer">
            <button class="btn btn-primary" value="add" type="submit" name="add">Set Value</button>
        </div>
    </form>
</div>
<br>
<?php
include('./components/footer.php');
include('./components/HTML_End.php');
  ?>
