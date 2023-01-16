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
              Students
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="shopping-cart" class="align-text-bottom"></span>
              Faculty
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="users" class="align-text-bottom"></span>
              Developer 
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
              Social engagement
            </a>
          </li>
        </ul>
      </div>
    </nav>

    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2 text-center">Welcome Admin!</h1>
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
        <div class="mt-3 ">
            <div class="m-auto">
                <!-- Add New Button trigger modal -->
                <button type="button" class="btn btn-success rounded-5 my-4" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                    Add New Data
                </button>

                <!-- Modal -->
                <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="staticBackdropLabel">Add your data</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <form action="insertData.php" class="record" method="post">
                            <div class="modal-body">
                                <ul class="nav nav-tabs justify-content-center mb-4">
                                    <li class="nav-item">
                                        <a class="nav-link text-dark active" aria-current="page" href="#">Main form</a>
                                    </li>
                                </ul>
                                <div class="form-floating mb-3">
                                    <input type="text" name="fn" class="form-control" id="first-name" placeholder="Your First Name" autofocus>
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
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button class="btn btn-success" type="submit">Add</button>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>

                <!--      Data table      -->
                <table id="myTable" class="display table text-center">
                  <thead>
                  <tr>
                      <th class="text-center">#</th>
                      <th class="text-center">First Name</th>
                      <th class="text-center">Last Name</th>
                      <th class="text-center">Department</th>
                      <th class="text-center">Action/s</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php
                      require_once 'conn.php';
                      $no =  1 ;
                      $data = mysqli_query($conn, "SELECT * FROM student_list");
                      while($row = mysqli_fetch_array($data)){ ?>
                      <tr>
                          <td><?= $no; ?></td>
                          <td><?= $row['firstname']; ?></td>
                          <td><?= $row['lastname']; ?></td>
                          <td><?= $row['department']; ?></td>
                          <td>
                              <a type="button" id="delete" class="btn btn-danger" href="deleteData.php?id=<?= $row['id']?>">Delete</a>
                              <a type="button" class="btn btn-primary ms-3" data-bs-toggle="modal" data-bs-target="#editData<?= $row['id']?>">Edit</a>
                          </td>
                      </tr>
                      <!-- Modal -->
                      <div class="modal fade" id="editData<?= $row['id']?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h1 class="modal-title fs-5" id="staticBackdropLabel">Update <?= $row['firstname']?>'s data</h1>
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <form action="updateData.php" method="post">
                                <div class="modal-body">
                                  <div class="form-floating mb-3">
                                    <input type="hidden" name="id" value="<?= $row['id']?>">
                                      <input type="text" name="fn" class="form-control" value="<?= $row['firstname']?>" placeholder="Your First Name">
                                      <label for="first-name" class="form-label">New First Name</label>
                                  </div>
                                  <div class="form-floating mb-3">
                                      <input type="text" name="ln" class="form-control" value="<?= $row['lastname']; ?>" id="floatingPassword" placeholder="Your Last Name">
                                      <label for="floatingPassword">New Last Name</label>
                                  </div>
                                  <div class="form-floating mb-3">
                                      <input name="d" class="form-control form-control-lg" value="<?= $row['department']; ?>" type="text" placeholder="Department">
                                      <label for="exampleFormControlTextarea1" class="form-label">New Department</label>
                                  </div>
                                </div>
                                <div class="modal-footer">
                                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <button class="btn btn-success" type="submit">Update</button>
                                </div>
                            </form>
                          </div>
                        </div>
                      </div>
                      <?php $no++; } ?>
                  </tbody>
                </table>
            </div>
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
?>