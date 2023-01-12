<?php

    session_start();

    if (isset($_SESSION['id']) && isset($_SESSION['username'])) {
        require_once 'components/header.php';
?>
<header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
  <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3 fs-6" href="#">ACLC Iriga</a>
  <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <input class="form-control form-control-dark w-100 rounded-0 border-0" type="text" placeholder="Search" aria-label="Search">
  <div class="navbar-nav">
    <div class="nav-item text-nowrap">
    <a class="nav-link text-center p-3" href="logout.php"><i class="fa-solid fa-right-from-bracket"></i> Log Out</a>
    </div>
  </div>
</header>

<div class="container-fluid">
  <div class="row">
    <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
      <div class="position-sticky pt-3 sidebar-sticky">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">
              <span data-feather="home" class="align-text-bottom"></span>
              Dashboard
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="file" class="align-text-bottom"></span>
              Quizzes
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="shopping-cart" class="align-text-bottom"></span>
              Exams
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="users" class="align-text-bottom"></span>
              Projects
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="bar-chart-2" class="align-text-bottom"></span>
              Reports
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="layers" class="align-text-bottom"></span>
              Integrations
            </a>
          </li>
        </ul>

        <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted text-uppercase">
          <span>Saved reports</span>
          <a class="link-secondary" href="#" aria-label="Add a new report">
            <span data-feather="plus-circle" class="align-text-bottom"></span>
          </a>
        </h6>
        <ul class="nav flex-column mb-2">
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="file-text" class="align-text-bottom"></span>
              Current month
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="file-text" class="align-text-bottom"></span>
              Last quarter
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="file-text" class="align-text-bottom"></span>
              Virtual Class 
            </a>
          </li>
        </ul>
      </div>
    </nav>

    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Welcome Faculty!</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
          <div class="btn-group me-2">
            <button type="button" class="btn btn-sm btn-outline-secondary">Share</button>
            <button type="button" class="btn btn-sm btn-outline-secondary">Export</button>
          </div>
          <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle">
            <span data-feather="calendar" class="align-text-bottom"></span>
            This week
          </button>
        </div>
      </div>
        <div class="container d-flex justify-content-center mt-5">
            <center>
                <ul class="nav nav-tabs justify-content-center mb-4">
                    <li class="nav-item">
                        <a class="nav-link text-dark active" aria-current="page" href="#">Main form</a>
                    </li>
                </ul>
                <form class="record" method="post">
                    <div class="form-floating mb-3">
                        <input type="text" name="fn" class="form-control" id="first-name" placeholder="Your First Name">
                        <label for="first-name" class="form-label">First Name</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" name="ln" class="form-control" id="last-name" placeholder="Your Last Name">
                        <label for="last-name" class="form-label">Last Name</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" name="d" class="form-control form-control-lg" id="department" placeholder="Department">
                        <label for="exampleFormControlTextarea1" class="form-label">Department</label>

                    </div>
                    <button class="btn btn-primary" type="submit">ADD</button>
                </form>

                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">First Name</th>
                        <th scope="col">Last Name</th>
                        <th scope="col">Department</th>
                        <th scope="col" colspan="2" class="text-center">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    require_once 'conn.php';
                    $no =  1 ;
                    $data = mysqli_query($conn, "SELECT * FROM student_list");
                    while($row = mysqli_fetch_array($data)){
                        ?>
                        <tr>
                            <td><?= $no; ?></td>
                            <td><?= $row['firstname']; ?></td>
                            <td><?= $row['lastname']; ?></td>
                            <td><?= $row['department']; ?></td>
                            <td><a type="button" id="delete" class="btn btn-danger" href="deleteData.php?id=<?= $row['id']?>">DELETE</a></td>
                            <td><a type="button" id="edit" class="btn btn-warning" href="editData.php?id=<?= $row['id']?>">EDIT</a></td>
                        </tr>
                        <?php $no++; } ?>
                    </tbody>
                </table>

            </center>
        </div>
    </main>
  </div>
</div>
        <?php
        require_once 'components/footer.php';
    }
    else {
        header('Location: index.php');
        exit();
    }
?>>