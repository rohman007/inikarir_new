<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Dashboard Company</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="assets/vendors/css/vendor.bundle.base.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,400;1,500&display=swap" rel="stylesheet">
    <!-- Layout styles -->
    <link rel="stylesheet" href="assets/css/style.css?v=<?= rand(); ?>">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="assets/images/favicon.png" />
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_navbar.html -->
      <nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
        <div class="navbar-menu-wrapper d-flex align-items-center justify-content-between">
          <button class="navbar-toggler navbar-toggler align-self-center d-sm-none" type="button" data-toggle="minimize">
            <span class="mdi mdi-menu"></span>
          </button>
          <h1 class="page-title mb-0 fs-5 fw-600">Dashboard</h1>
          <div class="search-field d-none d-md-block">
            <form class="d-flex align-items-center h-100" action="#">
              <div class="input-group">
                <input type="text" class="form-control bg-transparent border-0 rounded-3" placeholder="Search">
                <button class="input-group-prepend bg-transparent position-absolute top-0 end-0 p-0">
                  <i class="input-group-text border-0 mdi mdi-magnify"></i>
                </button>
              </div>
            </form>
          </div>
          <ul class="navbar-nav">
            <li class="nav-item dropdown">
              <a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" href="#" data-bs-toggle="dropdown">
                <i class="mdi mdi-bell-outline"></i>
              </a>
              <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="notificationDropdown">
                <h6 class="p-3 mb-0">Notifications</h6>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <div class="preview-icon bg-success">
                      <i class="mdi mdi-calendar"></i>
                    </div>
                  </div>
                  <div class="preview-item-content d-flex align-items-start flex-column justify-content-center">
                    <h6 class="preview-subject font-weight-normal mb-1">Event today</h6>
                    <p class="text-gray ellipsis mb-0"> Just a reminder that you have an event today </p>
                  </div>
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <div class="preview-icon bg-warning">
                      <i class="mdi mdi-settings"></i>
                    </div>
                  </div>
                  <div class="preview-item-content d-flex align-items-start flex-column justify-content-center">
                    <h6 class="preview-subject font-weight-normal mb-1">Settings</h6>
                    <p class="text-gray ellipsis mb-0"> Update dashboard </p>
                  </div>
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <div class="preview-icon bg-info">
                      <i class="mdi mdi-link-variant"></i>
                    </div>
                  </div>
                  <div class="preview-item-content d-flex align-items-start flex-column justify-content-center">
                    <h6 class="preview-subject font-weight-normal mb-1">Launch Admin</h6>
                    <p class="text-gray ellipsis mb-0"> New admin wow! </p>
                  </div>
                </a>
                <div class="dropdown-divider"></div>
                <h6 class="p-3 mb-0 text-center">See all notifications</h6>
              </div>
            </li>
            <li class="nav-item dropdown languange-button ms-4">
              <a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" href="#" data-bs-toggle="dropdown">
                <img src="assets/images/icon/en.svg"> English
              </a>
              <div class="dropdown-menu navbar-dropdown dropdown-menu-right" aria-labelledby="profileDropdown">
                <a class="dropdown-item" href="#">
                  <img src="assets/images/icon/in.png"> Indonesia
                </a>
              </div>
            </li>
            <li class="nav-item nav-profile dropdown ms-4">
              <a class="nav-link dropdown-toggle" id="profileDropdown" href="#" data-bs-toggle="dropdown" aria-expanded="false">
                <div class="nav-profile-text text-end">
                  <p class="mb-2 text-black fw-600 fs-6">David Greymaax</p>
                  <p class="text-grey text-sm mb-0">Admin</p>
                </div>
                <div class="nav-profile-img">
                  <img src="assets/images/faces/face1.jpg" alt="image">
                </div>
              </a>
              <div class="dropdown-menu navbar-dropdown dropdown-menu-right" aria-labelledby="profileDropdown">
                <a class="dropdown-item" href="#">
                  <i class="mdi mdi-cached me-2 text-success"></i> Activity Log </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">
                  <i class="mdi mdi-logout me-2 text-primary"></i> Signout </a>
              </div>
            </li>
          </ul>
          <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
            <span class="mdi mdi-menu"></span>
          </button>
        </div>
      </nav>
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_sidebar.html -->
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
          <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center mb-3">
            <a class="navbar-brand brand-logo" href="index.html"><img src="assets/images/logo.png" alt="logo" /></a>
            <a class="switch-link" href="">Switch back to<br/>personal dashboard <img src="assets/images/icon/switch.png"></a>
          </div>
          <ul class="nav">
            <li class="nav-item active">
              <a class="nav-link" href="index.php">
                <img src="assets/images/icon/home.svg">
                <span class="menu-title">Dashboard</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="company.php">
                <img src="assets/images/icon/company.svg">
                <span class="menu-title">Company</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
                <img src="assets/images/icon/suitcase.svg">
                <span class="menu-title">Job Vacancy</span>
                <i class="menu-arrow"></i>
              </a>
              <div class="collapse" id="ui-basic">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="pages/ui-features/buttons.html">Buttons</a></li>
                  <li class="nav-item"> <a class="nav-link" href="pages/ui-features/typography.html">Typography</a></li>
                </ul>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="candidates.php">
                <img src="assets/images/icon/candidates.svg">
                <span class="menu-title">Candidates</span>
                <span class="number-candidates">17</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="interview.php">
                <img src="assets/images/icon/interview.svg">
                <span class="menu-title">Interview</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="report.php">
                <img src="assets/images/icon/report.svg">
                <span class="menu-title">Report</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="candidates.php">
                <img src="assets/images/icon/candidates.svg">
                <span class="menu-title">Candidates</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="calendar.php">
                <img src="assets/images/icon/calendar.svg">
                <span class="menu-title">Calendar</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="membership.php">
                <img src="assets/images/icon/membership.svg">
                <span class="menu-title">Membership</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="ourteam.php">
                <img src="assets/images/icon/team.svg">
                <span class="menu-title">Our Team</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="setting.php">
                <img src="assets/images/icon/setting.svg">
                <span class="menu-title">Settings</span>
              </a>
            </li>
          </ul>
        </nav>
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="mb-4 mt-2 pb-2 d-sm-flex align-items-center">
              <div class="text-black fw-bold fs-6 col-sm-4  mb-3 mb-md-0">Hello HR professionals! <br/>Wishing you a fantastic start to the day</div>
              <div class="account-status-step text-xs d-flex w-100 justify-content-center">
                <div class="list-step text-center me-5 check">
                  <img src="assets/images/icon/check-step.svg" class="mb-2" style="width:35px">
                  <div class="text-green fw-bold">Account Setup</div>
                </div>
                <div class="list-step text-center me-5 check">
                  <img src="assets/images/icon/check-step.svg" class="mb-2" style="width:35px">
                  <div class="text-green fw-bold">Add Job</div>
                </div>
                <div class="list-step text-center me-5">
                  <img src="assets/images/icon/default-step.svg" class="mb-2" style="width:35px">
                  <div class="text-green fw-500">Connect Email</div>
                </div>
                <div class="list-step text-center me-5">
                  <img src="assets/images/icon/default-step.svg" class="mb-2" style="width:35px">
                  <div class="text-green fw-500">Connect Social Media</div>
                </div>
                <div class="list-step text-center me-5">
                  <img src="assets/images/icon/default-step.svg" class="mb-2" style="width:35px">
                  <div class="text-green fw-500">Add Team</div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6 grid-margin pe-md-4">
                <div class="card mb-4">
                  <div class="card-body">
                    <div class="align-items-center d-flex justify-content-between mb-3">
                      <div>
                        <h4 class="card-title float-left fw-bold text-black mb-1 fs-6">Job Applied</h4>
                        <div class="text-muted text-xs">Daily applicant reports</div>
                      </div>
                      <div class="position-relative">
                        <input type="text" name="daterange" value="01/01/2024 - 01/15/2024" class="text-green form-control w-auto text-xs py-1 px-2 fw-500 ps-4 rounded-pill"/>
                      </div>
                    </div>
                    <canvas id="lineChart" style="height:100px" height="100"></canvas>
                  </div>
                </div>
                <div id="last-activity" class="card">
                  <div class="card-body">
                    <h4 class="card-title float-left fw-bold text-black mb-4">Latest Activity</h4>
                    <div class="activity-block">
                        <div class="activity-list">
                          <div class="date-activity text-muted fw-500 text-sm">Dec 12</div>
                          <div class="title activity text-black text-sm mb-2">20 applied for chief design officer</div>
                          <div class="desc activity text-muted text-xs mb-2 fw-500">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ullamcorper ullamcorper quis.</div>
                          <a href="#" class="btn btn-primary bg-white text-purple text-xs px-2 py-2 rounded-2 blockquote-secondary">Candidates</a>
                        </div>
                        <div class="activity-list">
                          <div class="date-activity text-muted fw-500 text-sm">Dec 1</div>
                          <div class="title activity text-black text-sm mb-2">Chief design officer job vacancy created</div>
                          <div class="desc activity text-muted text-xs mb-2 fw-500">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ullamcorper ullamcorper quis.</div>
                          <table class="table table-borderless">
                            <tbody>
                              <tr>
                                <td class="p-0 text-xs fw-500 text-muted">
                                  <img src="assets/images/faces/face1.jpg" class="me-1" alt="image"> <span>Jane Doe</span> <span class="ms-3">2hrs ago</span>
                                </td>
                              </tr>
                            </tbody>
                          </table>
                        </div>
                        <div class="activity-list">
                          <div class="date-activity text-muted fw-500 text-sm">Nov 18</div>
                          <div class="title activity text-black text-sm mb-2">17 candidates invited to interview</div>
                          <div class="desc activity text-muted text-xs mb-2 fw-500">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ullamcorper ullamcorper quis.</div>
                          <a href="#" class="btn btn-primary bg-white text-red text-xs px-2 py-2 rounded-2 blockquote-secondary">Calendar</a>
                        </div>
                        <div class="activity-list">
                          <div class="date-activity text-muted fw-500 text-sm">Nov 4</div>
                          <div class="title activity text-black text-sm mb-2">10 applicants processed</div>
                          <div class="desc activity text-muted text-xs mb-2 fw-500">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ullamcorper ullamcorper quis.</div>
                          <a href="#" class="btn btn-primary bg-white text-purple text-xs px-2 py-2 rounded-2 blockquote-secondary">Candidates</a>
                        </div>
                      </div>
                    </div>
                </div>
              </div>
              <div class="col-md-6 ps-md-0">
                <div class="row">
                  <div class="col-12 col-md-7 pe-md-4 d-md-flex">
                    <div class="card mb-4">
                      <div class="card-body">
                        <h4 class="card-title float-left fw-bold text-black mb-3">New Applicant</h4>
                        <div class="table-responsive text-xs">
                          <table class="table table-borderless">
                            <tbody>
                              <tr>
                                <td class="fw-500">
                                  <img src="assets/images/faces/face1.jpg" class="me-2" alt="image"> David Grey
                                </td>
                                <td> Chief Technology </td>
                                <td> <img src="assets/images/100.svg" class="match-persentage"> </td>
                              </tr>
                              <tr>
                                <td class="fw-500">
                                  <img src="assets/images/faces/face2.jpg" class="me-2" alt="image"> Stella Johnson
                                </td>
                                <td> Chief Technology </td>
                                <td> <img src="assets/images/100.svg" class="match-persentage"> </td>
                              </tr>
                              <tr>
                                <td class="fw-500">
                                  <img src="assets/images/faces/face3.jpg" class="me-2" alt="image"> Marina Michel
                                </td>
                                <td> Chief Technology </td>
                                <td> <img src="assets/images/100.svg" class="match-persentage"> </td>
                              </tr>
                              <tr>
                                <td class="fw-500">
                                  <img src="assets/images/faces/face4.jpg" class="me-2" alt="image"> John Doe
                                </td>
                                <td> Chief Technology </td>
                                <td> <img src="assets/images/100.svg" class="match-persentage"> </td>
                              </tr>
                              <tr>
                                <td class="fw-500">
                                  <img src="assets/images/faces/face1.jpg" class="me-2" alt="image"> David Grey
                                </td>
                                <td> Chief Technology </td>
                                <td> <img src="assets/images/100.svg" class="match-persentage"> </td>
                              </tr>
                              <tr>
                                <td class="fw-500">
                                  <img src="assets/images/faces/face2.jpg" class="me-2" alt="image"> Stella Johnson
                                </td>
                                <td> Chief Technology </td>
                                <td> <img src="assets/images/100.svg" class="match-persentage"> </td>
                              </tr>
                              <tr>
                                <td class="fw-500">
                                  <img src="assets/images/faces/face3.jpg" class="me-2" alt="image"> Marina Michel
                                </td>
                                <td> Chief Technology </td>
                                <td> <img src="assets/images/100.svg" class="match-persentage"> </td>
                              </tr>
                            </tbody>
                          </table>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-12 col-md-5 ps-md-0 d-md-flex">
                    <div class="card mb-4">
                      <div class="card-body">
                        <h4 class="card-title float-left fw-bold text-black mb-3">Recently Added Company</h4>
                        <div class="table-responsive text-xs">
                          <table class="table table-borderless">
                            <tbody>
                              <tr>
                                <td>
                                  <img src="assets/images/faces/face1.jpg" class="me-2" alt="image"> PT. Talent A
                                </td>
                              </tr>
                              <tr>
                                <td>
                                  <img src="assets/images/faces/face2.jpg" class="me-2" alt="image"> PT. Talent B
                                </td>
                              </tr>
                              <tr>
                                <td>
                                  <img src="assets/images/faces/face3.jpg" class="me-2" alt="image"> PT. Talent C
                                </td>
                              </tr>
                              <tr>
                                <td>
                                  <img src="assets/images/faces/face4.jpg" class="me-2" alt="image"> PT. Talent D
                                </td>
                              </tr><tr>
                                <td>
                                  <img src="assets/images/faces/face1.jpg" class="me-2" alt="image"> PT. Talent A
                                </td>
                              </tr>
                              <tr>
                                <td>
                                  <img src="assets/images/faces/face2.jpg" class="me-2" alt="image"> PT. Talent B
                                </td>
                              </tr>
                              <tr>
                                <td>
                                  <img src="assets/images/faces/face3.jpg" class="me-2" alt="image"> PT. Talent C
                                </td>
                              </tr>
                              <tr>
                                <td>
                                  <img src="assets/images/faces/face4.jpg" class="me-2" alt="image"> PT. Talent D
                                </td>
                              </tr>
                            </tbody>
                          </table>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-6 pe-md-3 pe-2 d-flex">
                    <div class="card px-2 mb-4">
                      <div class="card-body px-3 px-sm-4 py-2 py-sm-4">
                        <div class="dashboard-title text-muted fs-5 fw-500 mt-3">Total Companies</div>
                        <div class="dashboard-number text-black fs-1 fw-500 mb-2">20</div>
                      </div>
                    </div>
                  </div>
                  <div class="col-6 ps-md-2 ps-2 d-flex">
                    <div class="card px-2 mb-4">
                      <div class="card-body px-3 px-sm-4 py-2 py-sm-4">
                        <div class="dashboard-title text-muted fs-5 fw-500 mt-3">Active Jobs</div>
                        <div class="dashboard-number text-black fs-1 fw-500 mb-2">170</div>
                      </div>
                    </div>
                  </div>
                  <div class="col-6 pe-md-3 pe-2 d-flex">
                    <div class="card px-2 mb-4">
                      <div class="card-body px-3 px-sm-4 py-2 py-sm-4">
                        <div class="dashboard-title text-muted fs-5 fw-500 mt-3">Total Candidates</div>
                        <div class="dashboard-number text-black fs-1 fw-500 mb-2">5k</div>
                      </div>
                    </div>
                  </div>
                  <div class="col-6 ps-md-2 ps-2 d-flex">
                    <div class="card px-2 mb-4">
                      <div class="card-body px-3 px-sm-4 py-2 py-sm-4">
                        <div class="dashboard-title text-muted fs-5 fw-500 mt-3">Today Interviews</div>
                        <div class="dashboard-number text-black fs-1 fw-500 mb-2">200</div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- content-wrapper ends -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="assets/vendors/chart.js/Chart.min.js"></script>
    <script src="assets/js/jquery.cookie.js" type="text/javascript"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="assets/js/off-canvas.js"></script>
    <script src="assets/js/hoverable-collapse.js"></script>
    <script src="assets/js/misc.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="assets/js/dashboard.js?v=<?= rand();?>"></script>
    <script src="assets/js/todolist.js"></script>
    
    <script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
    <!-- End custom js for this page -->
  </body>
</html>