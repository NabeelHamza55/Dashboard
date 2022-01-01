<?php
$title = 'Dashboard';
include('./components/HTML_Start.php');
include('./components/header.php');
include('./functions/_product.php');
importCSV();
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
    <form action="" method="post" enctype="multipart/form-data">
        <div class="card-body">
            <?php
        if (isset($_SESSION['errors'])) {
    ?>
            <div class="container">
                <div class="alert alert-danger">
                    <strong>Danger!</strong> <?php echo $_SESSION['errors']; ?>.
                </div>
                <?php
                 unset($_SESSION['errors']);
                }
    ?>
                <div class="form-group mx-1">
                    <label for="CSV">Import From CSV</label>
                    <input class="form-control" type="file" id="CSV" name="CSV">
                </div>
            </div>
        </div>
        <div class="card-footer">
            <button type="submit" name="import" value="import" class="btn btn-primary">Import</button>
        </div>
    </form>
</div>
<?php
include('./components/HTML_End.php');
include('./components/HTML_End.php');
?>
