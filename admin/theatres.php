<?php
include 'admin-session.php';
include '../db_conn.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags-->
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="au theme template">
  <meta name="author" content="Hau Nguyen">
  <meta name="keywords" content="au theme template">

  <!-- Title Page-->
  <title>Theatres</title>

  <!-- Fontfaces CSS-->
  <link href="css/font-face.css" rel="stylesheet" media="all">
  <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
  <link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
  <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

  <!-- Bootstrap CSS-->
  <link href="vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">
  <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css" />


  <!-- Vendor CSS-->
  <link href="vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
  <link href="vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
  <link href="vendor/wow/animate.css" rel="stylesheet" media="all">
  <link href="vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
  <link href="vendor/slick/slick.css" rel="stylesheet" media="all">
  <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
  <link href="vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

  <!-- Main CSS-->
  <link href="css/theme.css" rel="stylesheet" media="all">
  <style>
    .parsley-errors-list{
      list-style-type: none;
      color: red;
    }
  </style>
  <style>
    #custom-text {
      margin-left: 10px;
      font-family: sans-serif;
      color: #aaa;
    }
  </style>
</head>

<body class="animsition">
  <div class="page-wrapper">
    <!-- HEADER MOBILE-->
    <header class="header-mobile d-block d-lg-none">
      <div class="header-mobile__bar">
        <div class="container-fluid">
          <div class="header-mobile-inner">
            <a class="logo" href="index.html">
              <img src="images/icon/main-logo-black.png" alt="BookMyTickets" />
            </a>
            <button class="hamburger hamburger--slider" type="button">
              <span class="hamburger-box">
                <span class="hamburger-inner"></span>
              </span>
            </button>
          </div>
        </div>
      </div>
      <nav class="navbar-mobile">
        <div class="container-fluid">
          <ul class="navbar-mobile__list list-unstyled">
            <li class="has-sub">
              <a class="js-arrow" href="index.php">
                <i class="fas fa-tachometer-alt"></i>Dashboard</a>
            </li>
            <li class="has-sub">
              <a class="js-arrow" href="users.php">
                <i class="fas fa-user-alt"></i>Users</a>
            </li>
          </ul>
        </div>
      </nav>
    </header>
    <!-- END HEADER MOBILE-->

    <!-- MENU SIDEBAR-->
    <aside class="menu-sidebar d-none d-lg-block">
      <div class="logo">
        <a href="index.php">
          <img src="images/icon/main-logo-black.png" alt="" width="300px" height="80px">
        </a>
        <!-- <img src="images/icon/main-logo-black.png" alt="" width="300px" height="80px">&ensp; -->
      </div>
      <div class="menu-sidebar__content js-scrollbar1">
        <nav class="navbar-sidebar">
          <ul class="list-unstyled navbar__list">
            <li class="has-sub">
              <a class="js-arrow" href="index.php">
                <i class="fas fa-tachometer-alt"></i>Dashboard</a>
            </li>
            <li class="has-sub">
              <a class="js-arrow" href="users.php">
                <i class="fas fa-users"></i>Users</a>
            </li>
            <li class="has-sub">
              <a class="js-arrow" href="movies.php">
                <i class="fas fa-film"></i>Movies</a>
            </li>
            <li class="active has-sub">
              <a class="js-arrow" href="theatres.php">
                <i class="fa fa-building"></i>Theatres</a>
            </li>
            <li class="has-sub">
              <a class="js-arrow" href="movierequests.php">
                <i class="fa fa-check-circle"></i>Movie requests</a>
            </li>
          </ul>
        </nav>
      </div>
    </aside>
    <!-- END MENU SIDEBAR-->

    <!-- PAGE CONTAINER-->
    <div class="page-container">
      <!-- HEADER DESKTOP-->
      <header class="header-desktop">
        <div class="section__content section__content--p30">
          <div class="container-fluid">
            <div class="header-wrap">
              <div class="header-button">
                <div class="account-wrap">
                  <div class="account-item clearfix js-item-menu">
                    <div class="content" style="margin-left: 1050px;">
                      <a class="js-acc-btn" href="#">ADMIN</a>
                    </div>
                    <div class="account-dropdown js-dropdown">
                      <div class="account-dropdown__footer">
                        <a href="change-pass.php">
                          <i class="fas fa-lock"></i>Change password</a>
                      </div>
                      <div class="account-dropdown__footer">
                        <a href="logout.php">
                          <i class="zmdi zmdi-power"></i>Logout</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </header>
      <!-- HEADER DESKTOP-->
      <div class="main-content">
        <div class="section__content section__content--p30">
          <div class="container-fluid">
            <div class="alert alert-success" id="addTheatre" style="display:none;">
              Theatre added successfully
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="alert alert-info" id="updateTheatre" role="alert" style="display:none;">
              Theatre updated successfully
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="alert alert-danger" id="delTheatre" role="alert" style="display:none;">
              Theatre deleted successfully
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="row">
              <div class="col-md-12">
                <div class="card">
                  <div class="card-header">
                    <h4>Theatres

                      <button type="button" class="btn btn-success" style="float: right;" data-bs-toggle="modal"
                        data-bs-target="#studentAddModal">
                        <i class="fa fa-plus"></i>&nbsp; Add theatre
                      </button>
                      <button type="button" class="btn btn-success" style="float: right; margin-right: 1%;"
                        data-toggle="modal" data-target="#csvmodal">
                        <i class="fa fa-file-text"></i>&nbsp; Upload CSV
                      </button>
                    </h4>
                  </div>
                  <div class="card-body">

                    <table id="myTable" class="table table-bordered table-striped">
                      <thead>
                        <tr>
                          <th>Sl.No.</th>
                          <th>Name</th>
                          <th>Email</th>
                          <th>Place</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php
                        require '../db_conn.php';
                        $query = "SELECT a.*,b.* FROM tbl_theatres as a INNER JOIN tbl_login as b ON a.login_id = b.login_id and del_status='0'";
                        $query_run = mysqli_query($conn, $query);
                        $i = 1;
                        while ($thtr = mysqli_fetch_array($query_run)) {

                        ?>
                        <tr>
                          <td>
                            <?php echo $i; ?>
                          </td>
                          <td>
                            <?= $thtr['thtr_name'] ?>
                          </td>
                          <td>
                            <?= $thtr['email'] ?>
                          </td>
                          <td>
                            <?= $thtr['thtr_place'] ?>
                          </td>
                          <td>
                            <button type="button" value="<?php echo $thtr['thtr_id']; ?>"
                              class="editMovieBtn fa fa-edit" style="color: #0056b3;"></button> &nbsp;
                            <button type="button" value="<?php echo $thtr['thtr_id']; ?>"
                              class="deleteMovieBtn fa fa-trash" style="color: #0056b3;"></button>
                          </td>
                        </tr>
                        <?php
                          $i++;
                        }
                        ?>

                      </tbody>
                    </table>

                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- MAIN CONTENT-->

      <!-- Upload CSV -->
      <div class="modal fade" id="csvmodal" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabel"
        aria-hidden="true" style="display: none;">
        <div class="modal-dialog modal-md" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="mediumModalLabel">Upload CSV movie data </h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
              </button>
            </div>
            <div class="modal-body">
              <form id="csv_movie">
                <input type="file" name="csv" id="real-file" required="" data-parsley-required-message="Required" hidden="hidden" />
                <button type="button" class="btn btn-secondary" id="custom-button">Choose a file</button>
                <span id="custom-text">No file chosen, yet.</span>
            </div>
            <div class="modal-footer">
              <button type="submit" class="btn btn-danger">
                <i class="fas fa-upload"></i>
                Upload</button>
            </div>
            </form>
          </div>
        </div>
      </div>
      <!-- Add Theatre -->
      <div class="modal fade" id="studentAddModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Enter theatre details</h5>
              <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close"><span
                  aria-hidden="true">&times;</span></button>

            </div>
            <form id="save_theatre">
              <div class="modal-body">
                <div class="mb-3">
                  <label for="">Theatre name</label>
                  <input type="text" name="name" class="form-control" required="" data-parsley-required-message="Required" placeholder="Enter the theatre name here"
                    required />
                </div>
                <div class="mb-3">
                  <label for="">Email</label>
                  <input type="text" name="email" id="ema" class="form-control" data-parsley-type="email" data-parsley-type-message="Invalid email"
                    placeholder="Enter the email address of the theatre here" required="" data-parsley-required-message="Required" />
                  <span id="emmsg" style="color: red; font-size: 90%;"></span>
                </div>
                <div class="mb-3">
                  <label for="">Place</label>
                  <input type="text" name="location" class="form-control"
                    placeholder="Enter the location of the theatre here" required="" data-parsley-required-message="Required" />
                </div>
              </div>
              <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Save theatre</button>
              </div>
            </form>
          </div>
        </div>
      </div>
      <!-- Edit Theatre Modal -->
      <div class="modal fade" id="studentEditModal" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Edit Student</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form id="updateStudent">
              <div class="modal-body">

                <input type="hidden" name="thtr_id" id="thtr_id">
                <div class="mb-3">
                  <label for="">Theatre name</label>
                  <input type="text" name="name" id="name" class="form-control"
                    placeholder="Enter the theatre name here"  required="" data-parsley-required-message="Required">
                </div>
                <div class="mb-3">
                  <div class="mb-3">
                    <label for="">Email</label>
                    <input type="text" name="email" id="email" class="form-control"
                      placeholder="Enter the email address of the theatre here" data-parsley-type="email" data-parsley-type-message="Invalid email" required="" data-parsley-required-message="Required">
                  </div>
                  <label for="">Place</label>
                  <input type="text" name="location" id="location" class="form-control"
                    placeholder="Enter the location of the theatre here"  required="" data-parsley-required-message="Required">
                </div>
              </div>
              <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Update Movie</button>
              </div>
            </form>
          </div>
        </div>
      </div>
      <!-- END MAIN CONTENT-->
      <!-- END PAGE CONTAINER-->
    </div>

  </div>

  <!-- Jquery JS-->
  <script src="vendor/jquery-3.2.1.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <!-- Bootstrap JS-->
  <script src="vendor/bootstrap-4.1/popper.min.js"></script>
  <script src="vendor/bootstrap-4.1/bootstrap.min.js"></script>
  <!-- Vendor JS       -->
  <script src="vendor/slick/slick.min.js">
  </script>
  <script src="vendor/wow/wow.min.js"></script>
  <script src="vendor/animsition/animsition.min.js"></script>
  <script src="vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
  </script>
  <script src="vendor/counter-up/jquery.waypoints.min.js"></script>
  <script src="vendor/counter-up/jquery.counterup.min.js">
  </script>
  <script src="vendor/circle-progress/circle-progress.min.js"></script>
  <script src="vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
  <script src="vendor/chartjs/Chart.bundle.min.js"></script>
  <script src="vendor/select2/select2.min.js">
  </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

  <script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>
  <!-- Main JS-->
  <script src="js/main.js"></script>
  <script src="js/parsley.js"></script>
  <script>
  $('#save_theatre').parsley();
  $('#updateStudent').parsley();
  </script>
  <script>
    const realFileBtn = document.getElementById("real-file");
    const customBtn = document.getElementById("custom-button");
    const customTxt = document.getElementById("custom-text");

    customBtn.addEventListener("click", function () {
      realFileBtn.click();
    });

    realFileBtn.addEventListener("change", function () {
      if (realFileBtn.value) {
        customTxt.innerHTML = realFileBtn.value.match(
          /[\/\\]([\w\d\s\.\-\(\)]+)$/
        )[1];
      } else {
        customTxt.innerHTML = "No file chosen, yet.";
      }
    });
  </script>
  <script>
    $(document).on('submit', '#csv_movie', function (e) {
      e.preventDefault();

      var formData = new FormData(this);
      formData.append("save_csv", true);
      
      if ( $(this).parsley().isValid() ) {
      $.ajax({
        type: "POST",
        url: "save.php",
        data: formData,
        processData: false,
        contentType: false,
        success: function (response) {
            window.location.replace('theatres.php');
            $('#myTable').load(location.href + " #myTable");

        }
      });
      }
    });

    $(document).on('submit', '#save_theatre', function (e) {
      e.preventDefault();
      if ( $(this).parsley().isValid() ) {
      var formData = new FormData(this);
      formData.append("savethtr", true);

      $.ajax({
        type: "POST",
        url: "save.php",
        data: formData,
        processData: false,
        contentType: false,
        success: function (response) {
            $('#addTheatre').show();
            $('#studentAddModal').modal('hide');
            $('#save_theatre')[0].reset();
            $('#myTable').load(location.href + " #myTable");
        }
      });
      }
    });

    $(document).on('click', '.editMovieBtn', function () {

      var thtr_id = $(this).val();

      $.ajax({
        type: "GET",
        url: "save.php?thtr_id=" + thtr_id,
        success: function (response) {

          // console.log(thtr_id);
          var res = jQuery.parseJSON(response);

          // console.log(res.status);
          if (res.status == 200) {

            $('#thtr_id').val(res.data.thtr_id);
            $('#name').val(res.data.thtr_name);
            $('#email').val(res.data.email);
            $('#location').val(res.data.thtr_place);

            $('#studentEditModal').modal('show');
          }
        }
      });

    });

    $(document).on('submit', '#updateStudent', function (e) {
      e.preventDefault();
      if ( $(this).parsley().isValid() ) {
      var formData = new FormData(this);
      formData.append("update_thtr", true);

      $.ajax({
        type: "POST",
        url: "save.php",
        data: formData,
        processData: false,
        contentType: false,
        success: function (response) {
          $('#studentEditModal').modal('hide');
          $('#updateStudent')[0].reset();
          $('#updateTheatre').show();
          $('#myTable').load(location.href + " #myTable");

        }
      });
      }
    });

    $(document).on('click', '.deleteMovieBtn', function (e) {
      e.preventDefault();

      if (confirm('Are you sure you want to delete this data?')) {
        var thtr_id = $(this).val();
        $.ajax({
          type: "POST",
          url: "save.php",
          data: {
            'delete_thtr': true,
            'thtr_id': thtr_id
          },
          success: function (response) {
            $('#delTheatre').show();
            $('#myTable').load(location.href + " #myTable");
          }
        });
      }
    });
  </script>

</body>

</html>
<!-- end document-->