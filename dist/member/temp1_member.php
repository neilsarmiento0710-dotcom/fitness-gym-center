<?php
  session_start();
  if(isset($_POST['submit'])){

  } else {

?>
<!doctype html>
<html lang="en" data-pc-preset="preset-1" data-pc-sidebar-caption="true" data-pc-direction="ltr" dir="ltr" data-pc-theme="light">
<head>
  <title>Workouts</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="." />
    <meta name="keywords" content="." />
    <meta name="author" content="Sniper 2025" />
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500;600&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="../assets/fonts/phosphor/duotone/style.css" />
    <link rel="stylesheet" href="../assets/fonts/tabler-icons.min.css" />
    <link rel="stylesheet" href="../assets/fonts/feather.css" />
    <link rel="stylesheet" href="../assets/fonts/fontawesome.css" />
    <link rel="stylesheet" href="../assets/fonts/material.css" />
    <link rel="stylesheet" href="../assets/css/style.css" id="main-style-link" />
</head>
<body>
  <!-- [ Pre-loader ] start -->
<div class="loader-bg fixed inset-0 bg-white dark:bg-themedark-cardbg z-[1034]">
  <div class="loader-track h-[5px] w-full inline-block absolute overflow-hidden top-0">
    <div class="loader-fill w-[300px] h-[5px] bg-primary-500 absolute top-0 left-0 animate-[hitZak_0.6s_ease-in-out_infinite_alternate]"></div>
  </div>
</div>
<!-- [ Pre-loader ] End -->
 <!-- [ Sidebar Menu ] start -->
  <?php include '../includes/member-sidebar.php'; ?>
<!-- [ Sidebar Menu ] end -->
 <!-- [ Header Topbar ] start -->
  <?php include '../includes/member-header.php'; ?>
<!-- [ Header ] end -->

  <!-- [ Main Content ] start -->
  <div class="pc-container">
    <div class="pc-content">
      <!-- [ breadcrumb ] start -->
      <div class="page-header">
        <div class="page-block">
          <div class="page-header-title">
            <h5 class="mb-0 font-medium">Workouts</h5>
          </div>
          <ul class="breadcrumb">
            <li class="breadcrumb-item"><a href="../member/member_dashboard.php">Home</a></li>
            <li class="breadcrumb-item" aria-current="page">Workouts</li>
          </ul>
        </div>
      </div>
      <!-- [ breadcrumb ] end -->

      <!-- [ Main Content ] start -->
      <div class="grid grid-cols-12 gap-x-6">
        <!-- [ sample-page ] start -->
        <div class="col-span-12">
          <div class="card">
            <div class="card-header">
              <h5>Title Head Here</h5>
            </div>
            <div class="card-body">
              <form class="form-horizontal"> <!-- Form elements -->
                <table class="table table-striped table-bordered">
                  <thead>
                    <tr class="bg-dark text-white text-center font-weight-bold">
                      <th class="font-weight-bold">No</th>
                      <th class="font-weight-bold">User Name</th>
                      <th class="font-weight-bold">Fullname</th>
                      <th class="font-weight-bold">Contact Number</th>
                      <th class="font-weight-bold">Email</th>
                      <th class="font-weight-bold">Entry Date</th>
                      <th class="font-weight-bold">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td class="text-center">1</td>
                      <td class="text-center">admin</td>
                      <td class="text-center">Administrator</td>
                      <td class="text-center">1234567890</td>
                      <td class="text-center">admin@example.com</td>
                      <td class="text-center">2023-01-01</td>
                      <td class="text-center">
                        <button type="button" class="btn btn-warning btn-sm">Edit</button>
                        <button type="button" class="btn btn-danger btn-sm">Delete</button>
                      </td>
                    </tr>
                  </tbody>
                </table>
                <div class="flex mt-1 justify-between items-center flex-wrap">
                  <div class="form-check">
                    <button type="button" class="btn btn-primary mx-auto shadow-2xl"><a href="#">Button 1</a></button>
                    <button type="button" class="btn btn-warning mx-auto shadow-2xl"><a href="#">Button 2</a></button>
                  </div>
                </div>
              </form> <!-- Form ends -->
            </div>
          </div>
        </div>
        <!-- [ sample-page ] end -->
      </div>
      <!-- [ Main Content ] end -->
    </div>
  </div>
  <!-- [ Main Content ] end -->

<!-- Required Js -->
<script src="../assets/js/plugins/simplebar.min.js"></script>
<script src="../assets/js/plugins/popper.min.js"></script>
<script src="../assets/js/icon/custom-icon.js"></script>
<script src="../assets/js/plugins/feather.min.js"></script>
<script src="../assets/js/component.js"></script>
<script src="../assets/js/theme.js"></script>
<script src="../assets/js/script.js"></script>

<?php include '../includes/footer.php'; ?>
</body>
</html>
<?php } ?>