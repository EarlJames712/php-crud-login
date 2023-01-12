<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Log In | AMA Education System</title>
    <link rel="stylesheet" href="css/font-awesome-6-2-1.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/jquery-v3-6-3-min.js"></script>
</head>
<body style="background-color: #e7e7e7">
<div class="container px-4 py-3 mt-5 h-100"> <!--container-->
    <div class="row d-flex justify-content-center h-100"> <!--grid-->
        <div class="col-9 col-sm-8 col-md-7 col-lg-6 col-xl-5 "> <!--column-->
            <div class="bg-white text-black rounded-4"> <!--background-->
                <div class="p-1 px-5 py-3 text-center rounded-4" style="box-shadow: 1px 3px 12px #888888;"> <!--padding-->
                    <div class="mb-md-2 mt-md-2"> <!--margin-->
                        <form action="login.php" method="post">
                            <img src="img/aclc-college-vector.png" alt="Logo" width="15%" height="15%" class="py-3"><!--aclc-logo-->
                            <h2 class="fw-bold mb-4 text-uppercase">ACLC Login</h2>
                            <div class="form-floating form-outline form-white mb-3">
                                <input type="text" id="username" name="uname" class="form-control form-control" placeholder="Username">
                                <label for="username" class="text-muted">Username</label>
                            </div>
                            <div class="form-floating form-outline form-white mb-3">
                                <input type="password" id="password" name="password" class="form-control form-control" placeholder="Password">
                                <label for="password" class="text-muted">Password</label>
                            </div>
                            <button class="btn btn-outline-dark btn-md px-5" type="submit"><b>Login</b></button>
                        </form>
                    </div>
                    <hr>
                    <div>
                        <p class="mb-3 text-muted">&copy; 2022 ACLC College of Iriga, Inc</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>