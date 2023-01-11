<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- cdn bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <title>EDIT DATA</title>
</head>
<body>
<div class="container d-flex justify-content-center mt-5">
    <center>
        <h2 class="mb-4">EDIT DATA</h2>
        <ul class="nav nav-tabs justify-content-center mb-4">
            <li class="nav-item">
                <a class="nav-link text-dark active" aria-current="page" href="index.php">Main form</a>
            </li>
        </ul>
        <form action="updateData.php?id=<?= $_GET['id']?>" method="post">
            <div class="form-floating mb-3">
                <input type="text" name="fn" class="form-control" id="first-name" placeholder="Your First Name">
                <label for="first-name" class="form-label">New First Name</label>
            </div>
            <div class="form-floating mb-3">
                <input type="text" name="ln" class="form-control" id="floatingPassword" placeholder="Your Last Name">
                <label for="floatingPassword">New Last Name</label>
            </div>
            <div class="form-floating mb-3">
                <input name="d" class="form-control form-control-lg" type="text" placeholder="Department">
                <label for="exampleFormControlTextarea1" class="form-label">New Department</label>
            </div>
            <button class="btn btn-success" type="submit">UPDATE</button>
        </form>
    </center>
</div>
</body>
</html>