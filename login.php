<?php
     $title = 'Login';
     session_start();
     include('./functions/_login.php');
     login();
     if (isset($_SESSION['login'])) {
          echo "
          <script>
          window.location.href='./index.php';
          </script>
          ";
     }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous">
    </script>

    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
    <link href="./assets/css/styles.css" rel="stylesheet" />
    <link rel="stylesheet" href="./assets/css/style.css">
    <title><?php echo $title ?></title>
</head>

<body class="sb-nav-fixed">
    <div class="bg-primary" id="layoutAuthentication">
        <div id="layoutAuthentication_content">
            <main>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-5">
                            <div class="card shadow-lg border-0 rounded-lg mt-5">
                                <div class="card-header">
                                    <h3 class="text-center font-weight-light my-4">Login</h3>
                                </div>
                                <div class="card-body">
                                    <div class="text-center bg-danger rounded">
                                        <p class="lead mt-1 text-light">
                                            <?php echo $errors['msg'] ?>
                                        </p>
                                    </div>
                                    <form id="login-form" action="<?php $_SERVER['PHP_SELF'] ?>" method="POST">
                                        <div class="form-floating mb-3">
                                            <input class="form-control" name="inputEmail" id="inputEmail" type="text"
                                                placeholder="name@example.com" />
                                            <label for="inputEmail">Email address</label>
                                            <div class=" text-center  bg-danger rounded">
                                                <p class="lead mt-1 text-light">
                                                    <?php echo $errors['email'] ?>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <input class="form-control" name="inputPassword" id="inputPassword"
                                                type="password" placeholder="Password" />
                                            <label for="inputPassword">Password</label>
                                            <div class="text-center bg-danger rounded">
                                                <p class="lead mt-1 text-light">
                                                    <?php echo $errors['password'] ?>
                                                </p>
                                            </div>
                                        </div>

                                        <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                            <button class="btn btn-primary" type="submit" name="submit">Login</button>
                                        </div>
                                    </form>
                                </div>
                                <div class="card-footer text-center py-3">
                                    <div class="small"><a href="./signup.php">Haven't any account? Signup Now</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
            crossorigin="anonymous">
        </script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous">
        </script>
        <script src="./assets/vendors/demo/chart-area-demo.js"></script>
        <script src="./assets/vendors/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
        <script src="./assets/js/datatables-simple-demo.js"></script>
        <script src="./assets/js/scripts.js"></script>
</body>

</html>
