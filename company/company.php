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
    <link rel="stylesheet" href="assets/vendors/owlcarousel/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/vendors/owlcarousel/assets/owl.theme.default.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/dataTables.bootstrap5.min.css">
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
      <div class="d-flex align-items-center justify-content-center mb-3 d-sm-none mt-3">
        <a class="navbar-brand brand-logo m-0" href="index.html"><img src="assets/images/logo.png" alt="logo" /></a>
      </div>
      <nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
        <div class="navbar-menu-wrapper d-flex align-items-center justify-content-between">
          <button class="navbar-toggler navbar-toggler align-self-center d-sm-none" type="button" data-toggle="minimize">
            <span class="mdi mdi-menu"></span>
          </button>
          <h1 class="page-title mb-0 fs-5 fw-600">Company</h1>
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
          <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
            <span class="mdi mdi-menu"></span>
          </button>
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
                  <p class="mb-2 text-black fw-600">David Greymaax</p>
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
            <li class="nav-item">
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
              <div class="collapse dropdown-menu" id="ui-basic">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="pages/ui-features/jobposting.php">Job Posting</a></li>
                  <li class="nav-item"> <a class="nav-link" href="pages/ui-features/recruitmentprocess.html">Recruitment Process</a></li>
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
          <div class="owl-carousel sidebar-slide">
            <div>
              <a href="#" class="sidebar-slide-data">
                <img src="assets/images/decaoration-slide.png">
                <svg xmlns="http://www.w3.org/2000/svg" width="22" height="30" viewBox="0 0 22 30" fill="none">
                  <path d="M2.75 1.44888C2.75 2.22386 2.13439 2.85211 1.375 2.85211C0.615608 2.85211 0 2.22386 0 1.44888C0 0.6739 0.615608 0.0456543 1.375 0.0456543C2.13439 0.0456543 2.75 0.6739 2.75 1.44888Z" fill="white"/>
                  <path d="M9.16667 1.44888C9.16667 2.22386 8.55106 2.85211 7.79167 2.85211C7.03228 2.85211 6.41667 2.22386 6.41667 1.44888C6.41667 0.6739 7.03228 0.0456543 7.79167 0.0456543C8.55106 0.0456543 9.16667 0.6739 9.16667 1.44888Z" fill="white"/>
                  <path d="M15.5833 1.44888C15.5833 2.22386 14.9677 2.85211 14.2083 2.85211C13.4489 2.85211 12.8333 2.22386 12.8333 1.44888C12.8333 0.6739 13.4489 0.0456543 14.2083 0.0456543C14.9677 0.0456543 15.5833 0.6739 15.5833 1.44888Z" fill="white"/>
                  <path d="M22 1.44888C22 2.22386 21.3844 2.85211 20.625 2.85211C19.8656 2.85211 19.25 2.22386 19.25 1.44888C19.25 0.6739 19.8656 0.0456543 20.625 0.0456543C21.3844 0.0456543 22 0.6739 22 1.44888Z" fill="white"/>
                  <path d="M2.75 7.99727C2.75 8.77225 2.13439 9.40049 1.375 9.40049C0.615608 9.40049 0 8.77225 0 7.99727C0 7.22229 0.615608 6.59404 1.375 6.59404C2.13439 6.59404 2.75 7.22229 2.75 7.99727Z" fill="white"/>
                  <path d="M9.16667 7.99727C9.16667 8.77225 8.55106 9.40049 7.79167 9.40049C7.03228 9.40049 6.41667 8.77225 6.41667 7.99727C6.41667 7.22229 7.03228 6.59404 7.79167 6.59404C8.55106 6.59404 9.16667 7.22229 9.16667 7.99727Z" fill="white"/>
                  <path d="M15.5833 7.99727C15.5833 8.77225 14.9677 9.40049 14.2083 9.40049C13.4489 9.40049 12.8333 8.77225 12.8333 7.99727C12.8333 7.22229 13.4489 6.59404 14.2083 6.59404C14.9677 6.59404 15.5833 7.22229 15.5833 7.99727Z" fill="white"/>
                  <path d="M22 7.99727C22 8.77225 21.3844 9.40049 20.625 9.40049C19.8656 9.40049 19.25 8.77225 19.25 7.99727C19.25 7.22229 19.8656 6.59404 20.625 6.59404C21.3844 6.59404 22 7.22229 22 7.99727Z" fill="white"/>
                  <path d="M2.75 14.5457C2.75 15.3206 2.13439 15.9489 1.375 15.9489C0.615608 15.9489 0 15.3206 0 14.5457C0 13.7707 0.615608 13.1424 1.375 13.1424C2.13439 13.1424 2.75 13.7707 2.75 14.5457Z" fill="white"/>
                  <path d="M9.16667 14.5457C9.16667 15.3206 8.55106 15.9489 7.79167 15.9489C7.03228 15.9489 6.41667 15.3206 6.41667 14.5457C6.41667 13.7707 7.03228 13.1424 7.79167 13.1424C8.55106 13.1424 9.16667 13.7707 9.16667 14.5457Z" fill="white"/>
                  <path d="M15.5833 14.5457C15.5833 15.3206 14.9677 15.9489 14.2083 15.9489C13.4489 15.9489 12.8333 15.3206 12.8333 14.5457C12.8333 13.7707 13.4489 13.1424 14.2083 13.1424C14.9677 13.1424 15.5833 13.7707 15.5833 14.5457Z" fill="white"/>
                  <path d="M22 14.5457C22 15.3206 21.3844 15.9489 20.625 15.9489C19.8656 15.9489 19.25 15.3206 19.25 14.5457C19.25 13.7707 19.8656 13.1424 20.625 13.1424C21.3844 13.1424 22 13.7707 22 14.5457Z" fill="white"/>
                  <path d="M2.75 21.094C2.75 21.869 2.13439 22.4973 1.375 22.4973C0.615608 22.4973 0 21.869 0 21.094C0 20.3191 0.615608 19.6908 1.375 19.6908C2.13439 19.6908 2.75 20.3191 2.75 21.094Z" fill="white"/>
                  <path d="M9.16667 21.094C9.16667 21.869 8.55106 22.4973 7.79167 22.4973C7.03228 22.4973 6.41667 21.869 6.41667 21.094C6.41667 20.3191 7.03228 19.6908 7.79167 19.6908C8.55106 19.6908 9.16667 20.3191 9.16667 21.094Z" fill="white"/>
                  <path d="M15.5833 21.094C15.5833 21.869 14.9677 22.4973 14.2083 22.4973C13.4489 22.4973 12.8333 21.869 12.8333 21.094C12.8333 20.3191 13.4489 19.6908 14.2083 19.6908C14.9677 19.6908 15.5833 20.3191 15.5833 21.094Z" fill="white"/>
                  <path d="M22 21.094C22 21.869 21.3844 22.4973 20.625 22.4973C19.8656 22.4973 19.25 21.869 19.25 21.094C19.25 20.3191 19.8656 19.6908 20.625 19.6908C21.3844 19.6908 22 20.3191 22 21.094Z" fill="white"/>
                  <path d="M2.75 27.6424C2.75 28.4174 2.13439 29.0457 1.375 29.0457C0.615608 29.0457 0 28.4174 0 27.6424C0 26.8674 0.615608 26.2392 1.375 26.2392C2.13439 26.2392 2.75 26.8674 2.75 27.6424Z" fill="white"/>
                  <path d="M9.16667 27.6424C9.16667 28.4174 8.55106 29.0457 7.79167 29.0457C7.03228 29.0457 6.41667 28.4174 6.41667 27.6424C6.41667 26.8674 7.03228 26.2392 7.79167 26.2392C8.55106 26.2392 9.16667 26.8674 9.16667 27.6424Z" fill="white"/>
                  <path d="M15.5833 27.6424C15.5833 28.4174 14.9677 29.0457 14.2083 29.0457C13.4489 29.0457 12.8333 28.4174 12.8333 27.6424C12.8333 26.8674 13.4489 26.2392 14.2083 26.2392C14.9677 26.2392 15.5833 26.8674 15.5833 27.6424Z" fill="white"/>
                  <path d="M22 27.6424C22 28.4174 21.3844 29.0457 20.625 29.0457C19.8656 29.0457 19.25 28.4174 19.25 27.6424C19.25 26.8674 19.8656 26.2392 20.625 26.2392C21.3844 26.2392 22 26.8674 22 27.6424Z" fill="white"/>
                </svg>
                <div class="fw-bold text-white mt-2 text-sm">Simplify your recruitment process and talent search</div>
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="12" viewBox="0 0 24 12" fill="none">
                  <path d="M23.725 5.19454C23.7248 5.19426 23.7245 5.19393 23.7242 5.19365L18.8256 0.318651C18.4586 -0.0465519 17.865 -0.0451928 17.4997 0.321838C17.1345 0.688823 17.1359 1.2824 17.5028 1.64765C18.714 2.85291 17.8604 4.92065 16.1518 4.92065H0.9375C0.419719 4.92065 0 5.34037 0 5.85815C0 6.37593 0.419719 6.79565 0.9375 6.79565H16.1518C17.8604 6.79565 18.714 8.86338 17.5029 10.0687C17.1359 10.4339 17.1345 11.0275 17.4998 11.3945C17.865 11.7615 18.4587 11.7628 18.8256 11.3977L23.7242 6.52265C23.7245 6.52237 23.7248 6.52204 23.7251 6.52176C24.0923 6.15529 24.0911 5.55979 23.725 5.19454Z" fill="white"/>
                </svg>
              </a>
            </div>
            <div>
              <a href="#" class="sidebar-slide-data">
                <img src="assets/images/decaoration-slide.png">
                <svg xmlns="http://www.w3.org/2000/svg" width="22" height="30" viewBox="0 0 22 30" fill="none">
                  <path d="M2.75 1.44888C2.75 2.22386 2.13439 2.85211 1.375 2.85211C0.615608 2.85211 0 2.22386 0 1.44888C0 0.6739 0.615608 0.0456543 1.375 0.0456543C2.13439 0.0456543 2.75 0.6739 2.75 1.44888Z" fill="white"/>
                  <path d="M9.16667 1.44888C9.16667 2.22386 8.55106 2.85211 7.79167 2.85211C7.03228 2.85211 6.41667 2.22386 6.41667 1.44888C6.41667 0.6739 7.03228 0.0456543 7.79167 0.0456543C8.55106 0.0456543 9.16667 0.6739 9.16667 1.44888Z" fill="white"/>
                  <path d="M15.5833 1.44888C15.5833 2.22386 14.9677 2.85211 14.2083 2.85211C13.4489 2.85211 12.8333 2.22386 12.8333 1.44888C12.8333 0.6739 13.4489 0.0456543 14.2083 0.0456543C14.9677 0.0456543 15.5833 0.6739 15.5833 1.44888Z" fill="white"/>
                  <path d="M22 1.44888C22 2.22386 21.3844 2.85211 20.625 2.85211C19.8656 2.85211 19.25 2.22386 19.25 1.44888C19.25 0.6739 19.8656 0.0456543 20.625 0.0456543C21.3844 0.0456543 22 0.6739 22 1.44888Z" fill="white"/>
                  <path d="M2.75 7.99727C2.75 8.77225 2.13439 9.40049 1.375 9.40049C0.615608 9.40049 0 8.77225 0 7.99727C0 7.22229 0.615608 6.59404 1.375 6.59404C2.13439 6.59404 2.75 7.22229 2.75 7.99727Z" fill="white"/>
                  <path d="M9.16667 7.99727C9.16667 8.77225 8.55106 9.40049 7.79167 9.40049C7.03228 9.40049 6.41667 8.77225 6.41667 7.99727C6.41667 7.22229 7.03228 6.59404 7.79167 6.59404C8.55106 6.59404 9.16667 7.22229 9.16667 7.99727Z" fill="white"/>
                  <path d="M15.5833 7.99727C15.5833 8.77225 14.9677 9.40049 14.2083 9.40049C13.4489 9.40049 12.8333 8.77225 12.8333 7.99727C12.8333 7.22229 13.4489 6.59404 14.2083 6.59404C14.9677 6.59404 15.5833 7.22229 15.5833 7.99727Z" fill="white"/>
                  <path d="M22 7.99727C22 8.77225 21.3844 9.40049 20.625 9.40049C19.8656 9.40049 19.25 8.77225 19.25 7.99727C19.25 7.22229 19.8656 6.59404 20.625 6.59404C21.3844 6.59404 22 7.22229 22 7.99727Z" fill="white"/>
                  <path d="M2.75 14.5457C2.75 15.3206 2.13439 15.9489 1.375 15.9489C0.615608 15.9489 0 15.3206 0 14.5457C0 13.7707 0.615608 13.1424 1.375 13.1424C2.13439 13.1424 2.75 13.7707 2.75 14.5457Z" fill="white"/>
                  <path d="M9.16667 14.5457C9.16667 15.3206 8.55106 15.9489 7.79167 15.9489C7.03228 15.9489 6.41667 15.3206 6.41667 14.5457C6.41667 13.7707 7.03228 13.1424 7.79167 13.1424C8.55106 13.1424 9.16667 13.7707 9.16667 14.5457Z" fill="white"/>
                  <path d="M15.5833 14.5457C15.5833 15.3206 14.9677 15.9489 14.2083 15.9489C13.4489 15.9489 12.8333 15.3206 12.8333 14.5457C12.8333 13.7707 13.4489 13.1424 14.2083 13.1424C14.9677 13.1424 15.5833 13.7707 15.5833 14.5457Z" fill="white"/>
                  <path d="M22 14.5457C22 15.3206 21.3844 15.9489 20.625 15.9489C19.8656 15.9489 19.25 15.3206 19.25 14.5457C19.25 13.7707 19.8656 13.1424 20.625 13.1424C21.3844 13.1424 22 13.7707 22 14.5457Z" fill="white"/>
                  <path d="M2.75 21.094C2.75 21.869 2.13439 22.4973 1.375 22.4973C0.615608 22.4973 0 21.869 0 21.094C0 20.3191 0.615608 19.6908 1.375 19.6908C2.13439 19.6908 2.75 20.3191 2.75 21.094Z" fill="white"/>
                  <path d="M9.16667 21.094C9.16667 21.869 8.55106 22.4973 7.79167 22.4973C7.03228 22.4973 6.41667 21.869 6.41667 21.094C6.41667 20.3191 7.03228 19.6908 7.79167 19.6908C8.55106 19.6908 9.16667 20.3191 9.16667 21.094Z" fill="white"/>
                  <path d="M15.5833 21.094C15.5833 21.869 14.9677 22.4973 14.2083 22.4973C13.4489 22.4973 12.8333 21.869 12.8333 21.094C12.8333 20.3191 13.4489 19.6908 14.2083 19.6908C14.9677 19.6908 15.5833 20.3191 15.5833 21.094Z" fill="white"/>
                  <path d="M22 21.094C22 21.869 21.3844 22.4973 20.625 22.4973C19.8656 22.4973 19.25 21.869 19.25 21.094C19.25 20.3191 19.8656 19.6908 20.625 19.6908C21.3844 19.6908 22 20.3191 22 21.094Z" fill="white"/>
                  <path d="M2.75 27.6424C2.75 28.4174 2.13439 29.0457 1.375 29.0457C0.615608 29.0457 0 28.4174 0 27.6424C0 26.8674 0.615608 26.2392 1.375 26.2392C2.13439 26.2392 2.75 26.8674 2.75 27.6424Z" fill="white"/>
                  <path d="M9.16667 27.6424C9.16667 28.4174 8.55106 29.0457 7.79167 29.0457C7.03228 29.0457 6.41667 28.4174 6.41667 27.6424C6.41667 26.8674 7.03228 26.2392 7.79167 26.2392C8.55106 26.2392 9.16667 26.8674 9.16667 27.6424Z" fill="white"/>
                  <path d="M15.5833 27.6424C15.5833 28.4174 14.9677 29.0457 14.2083 29.0457C13.4489 29.0457 12.8333 28.4174 12.8333 27.6424C12.8333 26.8674 13.4489 26.2392 14.2083 26.2392C14.9677 26.2392 15.5833 26.8674 15.5833 27.6424Z" fill="white"/>
                  <path d="M22 27.6424C22 28.4174 21.3844 29.0457 20.625 29.0457C19.8656 29.0457 19.25 28.4174 19.25 27.6424C19.25 26.8674 19.8656 26.2392 20.625 26.2392C21.3844 26.2392 22 26.8674 22 27.6424Z" fill="white"/>
                </svg>
                <div class="fw-bold text-white mt-2 text-sm">Simplify your recruitment process and talent search</div>
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="12" viewBox="0 0 24 12" fill="none">
                  <path d="M23.725 5.19454C23.7248 5.19426 23.7245 5.19393 23.7242 5.19365L18.8256 0.318651C18.4586 -0.0465519 17.865 -0.0451928 17.4997 0.321838C17.1345 0.688823 17.1359 1.2824 17.5028 1.64765C18.714 2.85291 17.8604 4.92065 16.1518 4.92065H0.9375C0.419719 4.92065 0 5.34037 0 5.85815C0 6.37593 0.419719 6.79565 0.9375 6.79565H16.1518C17.8604 6.79565 18.714 8.86338 17.5029 10.0687C17.1359 10.4339 17.1345 11.0275 17.4998 11.3945C17.865 11.7615 18.4587 11.7628 18.8256 11.3977L23.7242 6.52265C23.7245 6.52237 23.7248 6.52204 23.7251 6.52176C24.0923 6.15529 24.0911 5.55979 23.725 5.19454Z" fill="white"/>
                </svg>
              </a>
            </div>
            <div>
              <a href="#" class="sidebar-slide-data">
                <img src="assets/images/decaoration-slide.png">
                <svg xmlns="http://www.w3.org/2000/svg" width="22" height="30" viewBox="0 0 22 30" fill="none">
                  <path d="M2.75 1.44888C2.75 2.22386 2.13439 2.85211 1.375 2.85211C0.615608 2.85211 0 2.22386 0 1.44888C0 0.6739 0.615608 0.0456543 1.375 0.0456543C2.13439 0.0456543 2.75 0.6739 2.75 1.44888Z" fill="white"/>
                  <path d="M9.16667 1.44888C9.16667 2.22386 8.55106 2.85211 7.79167 2.85211C7.03228 2.85211 6.41667 2.22386 6.41667 1.44888C6.41667 0.6739 7.03228 0.0456543 7.79167 0.0456543C8.55106 0.0456543 9.16667 0.6739 9.16667 1.44888Z" fill="white"/>
                  <path d="M15.5833 1.44888C15.5833 2.22386 14.9677 2.85211 14.2083 2.85211C13.4489 2.85211 12.8333 2.22386 12.8333 1.44888C12.8333 0.6739 13.4489 0.0456543 14.2083 0.0456543C14.9677 0.0456543 15.5833 0.6739 15.5833 1.44888Z" fill="white"/>
                  <path d="M22 1.44888C22 2.22386 21.3844 2.85211 20.625 2.85211C19.8656 2.85211 19.25 2.22386 19.25 1.44888C19.25 0.6739 19.8656 0.0456543 20.625 0.0456543C21.3844 0.0456543 22 0.6739 22 1.44888Z" fill="white"/>
                  <path d="M2.75 7.99727C2.75 8.77225 2.13439 9.40049 1.375 9.40049C0.615608 9.40049 0 8.77225 0 7.99727C0 7.22229 0.615608 6.59404 1.375 6.59404C2.13439 6.59404 2.75 7.22229 2.75 7.99727Z" fill="white"/>
                  <path d="M9.16667 7.99727C9.16667 8.77225 8.55106 9.40049 7.79167 9.40049C7.03228 9.40049 6.41667 8.77225 6.41667 7.99727C6.41667 7.22229 7.03228 6.59404 7.79167 6.59404C8.55106 6.59404 9.16667 7.22229 9.16667 7.99727Z" fill="white"/>
                  <path d="M15.5833 7.99727C15.5833 8.77225 14.9677 9.40049 14.2083 9.40049C13.4489 9.40049 12.8333 8.77225 12.8333 7.99727C12.8333 7.22229 13.4489 6.59404 14.2083 6.59404C14.9677 6.59404 15.5833 7.22229 15.5833 7.99727Z" fill="white"/>
                  <path d="M22 7.99727C22 8.77225 21.3844 9.40049 20.625 9.40049C19.8656 9.40049 19.25 8.77225 19.25 7.99727C19.25 7.22229 19.8656 6.59404 20.625 6.59404C21.3844 6.59404 22 7.22229 22 7.99727Z" fill="white"/>
                  <path d="M2.75 14.5457C2.75 15.3206 2.13439 15.9489 1.375 15.9489C0.615608 15.9489 0 15.3206 0 14.5457C0 13.7707 0.615608 13.1424 1.375 13.1424C2.13439 13.1424 2.75 13.7707 2.75 14.5457Z" fill="white"/>
                  <path d="M9.16667 14.5457C9.16667 15.3206 8.55106 15.9489 7.79167 15.9489C7.03228 15.9489 6.41667 15.3206 6.41667 14.5457C6.41667 13.7707 7.03228 13.1424 7.79167 13.1424C8.55106 13.1424 9.16667 13.7707 9.16667 14.5457Z" fill="white"/>
                  <path d="M15.5833 14.5457C15.5833 15.3206 14.9677 15.9489 14.2083 15.9489C13.4489 15.9489 12.8333 15.3206 12.8333 14.5457C12.8333 13.7707 13.4489 13.1424 14.2083 13.1424C14.9677 13.1424 15.5833 13.7707 15.5833 14.5457Z" fill="white"/>
                  <path d="M22 14.5457C22 15.3206 21.3844 15.9489 20.625 15.9489C19.8656 15.9489 19.25 15.3206 19.25 14.5457C19.25 13.7707 19.8656 13.1424 20.625 13.1424C21.3844 13.1424 22 13.7707 22 14.5457Z" fill="white"/>
                  <path d="M2.75 21.094C2.75 21.869 2.13439 22.4973 1.375 22.4973C0.615608 22.4973 0 21.869 0 21.094C0 20.3191 0.615608 19.6908 1.375 19.6908C2.13439 19.6908 2.75 20.3191 2.75 21.094Z" fill="white"/>
                  <path d="M9.16667 21.094C9.16667 21.869 8.55106 22.4973 7.79167 22.4973C7.03228 22.4973 6.41667 21.869 6.41667 21.094C6.41667 20.3191 7.03228 19.6908 7.79167 19.6908C8.55106 19.6908 9.16667 20.3191 9.16667 21.094Z" fill="white"/>
                  <path d="M15.5833 21.094C15.5833 21.869 14.9677 22.4973 14.2083 22.4973C13.4489 22.4973 12.8333 21.869 12.8333 21.094C12.8333 20.3191 13.4489 19.6908 14.2083 19.6908C14.9677 19.6908 15.5833 20.3191 15.5833 21.094Z" fill="white"/>
                  <path d="M22 21.094C22 21.869 21.3844 22.4973 20.625 22.4973C19.8656 22.4973 19.25 21.869 19.25 21.094C19.25 20.3191 19.8656 19.6908 20.625 19.6908C21.3844 19.6908 22 20.3191 22 21.094Z" fill="white"/>
                  <path d="M2.75 27.6424C2.75 28.4174 2.13439 29.0457 1.375 29.0457C0.615608 29.0457 0 28.4174 0 27.6424C0 26.8674 0.615608 26.2392 1.375 26.2392C2.13439 26.2392 2.75 26.8674 2.75 27.6424Z" fill="white"/>
                  <path d="M9.16667 27.6424C9.16667 28.4174 8.55106 29.0457 7.79167 29.0457C7.03228 29.0457 6.41667 28.4174 6.41667 27.6424C6.41667 26.8674 7.03228 26.2392 7.79167 26.2392C8.55106 26.2392 9.16667 26.8674 9.16667 27.6424Z" fill="white"/>
                  <path d="M15.5833 27.6424C15.5833 28.4174 14.9677 29.0457 14.2083 29.0457C13.4489 29.0457 12.8333 28.4174 12.8333 27.6424C12.8333 26.8674 13.4489 26.2392 14.2083 26.2392C14.9677 26.2392 15.5833 26.8674 15.5833 27.6424Z" fill="white"/>
                  <path d="M22 27.6424C22 28.4174 21.3844 29.0457 20.625 29.0457C19.8656 29.0457 19.25 28.4174 19.25 27.6424C19.25 26.8674 19.8656 26.2392 20.625 26.2392C21.3844 26.2392 22 26.8674 22 27.6424Z" fill="white"/>
                </svg>
                <div class="fw-bold text-white mt-2 text-sm">Simplify your recruitment process and talent search</div>
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="12" viewBox="0 0 24 12" fill="none">
                  <path d="M23.725 5.19454C23.7248 5.19426 23.7245 5.19393 23.7242 5.19365L18.8256 0.318651C18.4586 -0.0465519 17.865 -0.0451928 17.4997 0.321838C17.1345 0.688823 17.1359 1.2824 17.5028 1.64765C18.714 2.85291 17.8604 4.92065 16.1518 4.92065H0.9375C0.419719 4.92065 0 5.34037 0 5.85815C0 6.37593 0.419719 6.79565 0.9375 6.79565H16.1518C17.8604 6.79565 18.714 8.86338 17.5029 10.0687C17.1359 10.4339 17.1345 11.0275 17.4998 11.3945C17.865 11.7615 18.4587 11.7628 18.8256 11.3977L23.7242 6.52265C23.7245 6.52237 23.7248 6.52204 23.7251 6.52176C24.0923 6.15529 24.0911 5.55979 23.725 5.19454Z" fill="white"/>
                </svg>
              </a>
            </div>
          </div>
        </nav>
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper" id="company-page">
            <div class="row">
              <div class="col-12">
                <ul class="nav nav-tabs mb-4" id="candidatesTab" role="tablist">
                  <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="companyactive-tab" data-bs-toggle="tab" data-bs-target="#companyactive" type="button" role="tab" aria-controls="comapanyactive" aria-selected="true">Active</button>
                  </li>
                  <li class="nav-item" role="presentation">
                    <button class="nav-link" id="companyinactive-tab" data-bs-toggle="tab" data-bs-target="#companyinactive" type="button" role="tab" aria-controls="companyinactive" aria-selected="false">Inactive</button>
                  </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                  <div class="tab-pane fade show active" id="companyactive" role="tabpanel" aria-labelledby="companyactive-tab">
                    <div class="filter-form d-flex">
                      <div class="dropdown show me-3">
                        <a class="btn btn-secondary dropdown-toggle bg-white border-0 px-3 py-2 rounded-3 text-xs fw-500 text-muted d-flex align-items-center" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <svg width="20" height="20" class="me-2" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                          <mask id="mask0_2_9828" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="25" height="25">
                          <rect x="0.916016" y="0.766113" width="23.33" height="23.33" fill="url(#pattern0)"/>
                          </mask>
                          <g mask="url(#mask0_2_9828)">
                          <rect x="0.916016" y="0.766113" width="23.33" height="23.33" fill="#16A799"/>
                          </g>
                          <defs>
                          <pattern id="pattern0" patternContentUnits="objectBoundingBox" width="1" height="1">
                          <use xlink:href="#image0_2_9828" transform="scale(0.0078125)"/>
                          </pattern>
                          <image id="image0_2_9828" width="128" height="128" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAIAAAACACAMAAAD04JH5AAAAA3NCSVQICAjb4U/gAAAACXBIWXMAAC99AAAvfQHNrEeoAAAAGXRFWHRTb2Z0d2FyZQB3d3cuaW5rc2NhcGUub3Jnm+48GgAAAXRQTFRF////AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAARmHy3gAAAHt0Uk5TAAECAwQFBggLDA4REhQVFhcaHB4fICIkJSkqKy4vMjY3ODk7PD1BQ0dJSkxNUFFSV1haXV5iZWpsbW5wcnN6fX+Bg4iOj5CUlpidnqCkqKuvsLK1uLm/wMHFxsfJzM3O0NPW19jb3d7f4uPn6err7O/x8vT1+Pr7/P3+22Zr8QAAAfVJREFUeNrt09dTU0EAxeHNNQaCBQsiKooFRBF7bCCi0owaG4Jij6JGEQuaiPn98z44GUJyEwhzd3ccznncPTvne1ljFEVR7CbZZcyhZm/ziYH5cWPSc5c2epkPUjkYNyYNH87F3O/3Z6EEgDfHHc/3zEA5AJ4edjjfOQmVAHi4z9F8e6ZIGIA/d9sczG+bKEA4APJjWy3Pt9z8CbUBsHA9aXG+aegb1AfA/EDC0vyGC59gZQDkUoGN/dNvYXUAyPZHPn/0BaweADM9kc4fmILGADDZGdl8x70ijQMoZtojmQ/Sv2EtAChMRPL3YK0AEEAAAQQQQAAB/i9AhzE74v4A3Y/fGTP4/mzMD6B3GmaNGYTXxzwA+p5BCQDTB90CYqde/iuXAPBgrztAcCZbKi8BWLyz0w0gnppdKpcBID+6xT4gcfFjeXkZAH4MJ+0Cmi5/Xl6uAMCXKwl7gOahucpyFQBy5wM7gJZrX6vLIQDYZQOw+cb3sLIrQOvIQnjZDWD72K9aZReAtlv52mX7gN23C/XKtgF7MovgD7D/fhH8AboesXLsAbqnwCOg9wl4BPQ9B5+AV+AXgAACCCCAAAIIIIAAAggggAACCCCAAAIIIIAAAggggAACCLDuASMN5KoxR6oON5l4vTcnjDlZ794oirLu8xccRUwjTVlGsQAAAABJRU5ErkJggg=="/>
                          </defs>
                          </svg>Company
                        </a>

                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                          <a class="dropdown-item text-xs" href="#">Google, Inc</a>
                          <a class="dropdown-item text-xs" href="#">Google, Inc</a>
                          <a class="dropdown-item text-xs" href="#">Google, Inc</a>
                        </div>
                      </div>
                      <div class="dropdown show me-3">
                        <a class="btn btn-secondary dropdown-toggle bg-white border-0 px-3 py-2 rounded-3 text-xs fw-500 text-muted d-flex align-items-center" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <svg width="20" height="20" class="me-2" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                          <mask id="mask0_2_12525" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="24" height="24">
                          <rect x="0.621094" y="0.431152" width="23.33" height="23.33" fill="url(#pattern1)"/>
                          </mask>
                          <g mask="url(#mask0_2_12525)">
                          <rect x="0.621094" y="0.431152" width="23.33" height="23.33" fill="#16A799"/>
                          </g>
                          <defs>
                          <pattern id="pattern1" patternContentUnits="objectBoundingBox" width="1" height="1">
                          <use xlink:href="#image0_2_12525" transform="scale(0.0078125)"/>
                          </pattern>
                          <image id="image0_2_12525" width="128" height="128" xlink:href="data:image/png;base64,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"/>
                          </defs>
                          </svg>Location
                        </a>

                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                          <a class="dropdown-item text-xs" href="#">Jakarta</a>
                          <a class="dropdown-item text-xs" href="#">Bogor</a>
                          <a class="dropdown-item text-xs" href="#">Depok</a>
                        </div>
                      </div>
                      <div class="dropdown show">
                        <a class="btn btn-secondary dropdown-toggle bg-white border-0 px-3 py-2 rounded-3 text-xs fw-500 text-muted d-flex align-items-center" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <svg width="20" height="20" class="me-2" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                          <mask id="mask0_2_12539" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="24" height="24">
                          <rect x="0.213867" y="0.431152" width="23.33" height="23.33" fill="url(#pattern2)"/>
                          </mask>
                          <g mask="url(#mask0_2_12539)">
                          <rect x="0.213867" y="0.431152" width="23.33" height="23.33" fill="#16A799"/>
                          </g>
                          <defs>
                          <pattern id="pattern2" patternContentUnits="objectBoundingBox" width="1" height="1">
                          <use xlink:href="#image0_2_12539" transform="scale(0.0078125)"/>
                          </pattern>
                          <image id="image0_2_12539" width="128" height="128" xlink:href="data:image/png;base64,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"/>
                          </defs>
                          </svg>Industry
                        </a>

                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                          <a class="dropdown-item text-xs" href="#">Accounting</a>
                          <a class="dropdown-item text-xs" href="#">Airlines/Aviation</a>
                          <a class="dropdown-item text-xs" href="#">Alternative Dispute Resolution</a>
                        </div>
                      </div>
                    </div>
                    <div class="hero-company-list__wrapper row">
                      <div class="hero-company-list__item col-12 col-sm-3 mt-sm-5 add-company">
                        <div class="card rounded-4">
                          <a href="company-add.php" class="add-button">
                            <div class="plus-icon">+</div>
                            <div class="label-button">Create Company</div>
                          </a>
                        </div>
                      </div>
                      <div class="hero-company-list__item col-12 col-sm-3 mt-5">
                        <div class="card rounded-4">
                          <div class="action-company">
                            <a href="#" class="companyedit bg-white"><img src="assets/images/icon/company-edit.svg"></a>
                            <a href="#" class="companyedit bg-white"><img src="assets/images/icon/company-suitcase.svg"></a>
                            <a href="#" class="companyedit bg-white"><img src="assets/images/icon/company-check.svg"></a>
                          </div>
                          <div class="card-body text-sm">
                            <div class="row">
                              <div class="col-4 col-sm-5 pe-0">
                                <div class="hero-loker-list__item-image mb-3 rounded overflow-hidden">
                                  <div class="ratio ratio-1x1">
                                      <div>
                                          <img src="assets/images/company.png" alt="Image" class="object-fit-cover w-100 h-100 position-absolute top-0 start-0 bottom-0 end-0">
                                      </div>
                                  </div>
                                </div>
                              </div>
                              <div class="col-7 ps-3">
                                <div class="fw-bold text-black">Google, Inc</div>
                              </div>
                            </div>
                            <div class="text-xs text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut et sapien augue. Cras ut rutrum nisi. Etiam sit amet dolor enim. Donec maximus</div>
                            <div class="d-flex data-company mt-3 align-items-center">
                              <img src="assets/images/icon/career-icon.svg"> 
                              <div class="text-sm ms-2">Web Design & Development</div>
                            </div>
                            <div class="d-flex data-company mt-2 align-items-center">
                              <img src="assets/images/icon/user-icon.svg"> 
                              <div class="text-sm ms-2">100 employees</div>
                            </div>
                            <div class="d-flex data-company mt-2 align-items-center">
                              <img src="assets/images/icon/time-icon.svg"> 
                              <div class="text-sm ms-2">Monday - Friday</div>
                            </div>
                            <div class="d-flex data-company mt-2 align-items-center">
                              <img src="assets/images/icon/location-icon.svg"> 
                              <div class="text-sm ms-2">Bekasi</div>
                            </div>
                            <div class="d-flex data-company mt-2 align-items-center">
                              <img src="assets/images/icon/black-phone-icon.svg"> 
                              <div class="text-sm ms-2">0812-4567-8910</div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="hero-company-list__item col-12 col-sm-3 mt-5">
                        <div class="card rounded-4">
                          <div class="action-company">
                            <a href="#" class="companyedit bg-white"><img src="assets/images/icon/company-edit.svg"></a>
                            <a href="#" class="companyedit bg-white"><img src="assets/images/icon/company-suitcase.svg"></a>
                            <a href="#" class="companyedit bg-white"><img src="assets/images/icon/company-check.svg"></a>
                          </div>
                          <div class="card-body text-sm">
                            <div class="row">
                              <div class="col-4 col-sm-5 pe-0">
                                <div class="hero-loker-list__item-image mb-3 rounded overflow-hidden">
                                  <div class="ratio ratio-1x1">
                                      <div>
                                          <img src="assets/images/company.png" alt="Image" class="object-fit-cover w-100 h-100 position-absolute top-0 start-0 bottom-0 end-0">
                                      </div>
                                  </div>
                                </div>
                              </div>
                              <div class="col-7 ps-3">
                                <div class="fw-bold text-black">Google, Inc</div>
                              </div>
                            </div>
                            <div class="text-xs text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut et sapien augue. Cras ut rutrum nisi. Etiam sit amet dolor enim. Donec maximus</div>
                            <div class="d-flex data-company mt-3 align-items-center">
                              <img src="assets/images/icon/career-icon.svg"> 
                              <div class="text-sm ms-2">Web Design & Development</div>
                            </div>
                            <div class="d-flex data-company mt-2 align-items-center">
                              <img src="assets/images/icon/user-icon.svg"> 
                              <div class="text-sm ms-2">100 employees</div>
                            </div>
                            <div class="d-flex data-company mt-2 align-items-center">
                              <img src="assets/images/icon/time-icon.svg"> 
                              <div class="text-sm ms-2">Monday - Friday</div>
                            </div>
                            <div class="d-flex data-company mt-2 align-items-center">
                              <img src="assets/images/icon/location-icon.svg"> 
                              <div class="text-sm ms-2">Bekasi</div>
                            </div>
                            <div class="d-flex data-company mt-2 align-items-center">
                              <img src="assets/images/icon/black-phone-icon.svg"> 
                              <div class="text-sm ms-2">0812-4567-8910</div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="hero-company-list__item col-12 col-sm-3 mt-5">
                        <div class="card rounded-4">
                          <div class="action-company">
                            <a href="#" class="companyedit bg-white"><img src="assets/images/icon/company-edit.svg"></a>
                            <a href="#" class="companyedit bg-white"><img src="assets/images/icon/company-suitcase.svg"></a>
                            <a href="#" class="companyedit bg-white"><img src="assets/images/icon/company-check.svg"></a>
                          </div>
                          <div class="card-body text-sm">
                            <div class="row">
                              <div class="col-4 col-sm-5 pe-0">
                                <div class="hero-loker-list__item-image mb-3 rounded overflow-hidden">
                                  <div class="ratio ratio-1x1">
                                      <div>
                                          <img src="assets/images/company.png" alt="Image" class="object-fit-cover w-100 h-100 position-absolute top-0 start-0 bottom-0 end-0">
                                      </div>
                                  </div>
                                </div>
                              </div>
                              <div class="col-7 ps-3">
                                <div class="fw-bold text-black">Google, Inc</div>
                              </div>
                            </div>
                            <div class="text-xs text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut et sapien augue. Cras ut rutrum nisi. Etiam sit amet dolor enim. Donec maximus</div>
                            <div class="d-flex data-company mt-3 align-items-center">
                              <img src="assets/images/icon/career-icon.svg"> 
                              <div class="text-sm ms-2">Web Design & Development</div>
                            </div>
                            <div class="d-flex data-company mt-2 align-items-center">
                              <img src="assets/images/icon/user-icon.svg"> 
                              <div class="text-sm ms-2">100 employees</div>
                            </div>
                            <div class="d-flex data-company mt-2 align-items-center">
                              <img src="assets/images/icon/time-icon.svg"> 
                              <div class="text-sm ms-2">Monday - Friday</div>
                            </div>
                            <div class="d-flex data-company mt-2 align-items-center">
                              <img src="assets/images/icon/location-icon.svg"> 
                              <div class="text-sm ms-2">Bekasi</div>
                            </div>
                            <div class="d-flex data-company mt-2 align-items-center">
                              <img src="assets/images/icon/black-phone-icon.svg"> 
                              <div class="text-sm ms-2">0812-4567-8910</div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="hero-company-list__item col-12 col-sm-3 mt-5">
                        <div class="card rounded-4">
                          <div class="action-company">
                            <a href="#" class="companyedit bg-white"><img src="assets/images/icon/company-edit.svg"></a>
                            <a href="#" class="companyedit bg-white"><img src="assets/images/icon/company-suitcase.svg"></a>
                            <a href="#" class="companyedit bg-white"><img src="assets/images/icon/company-check.svg"></a>
                          </div>
                          <div class="card-body text-sm">
                            <div class="row">
                              <div class="col-4 col-sm-5 pe-0">
                                <div class="hero-loker-list__item-image mb-3 rounded overflow-hidden">
                                  <div class="ratio ratio-1x1">
                                      <div>
                                          <img src="assets/images/company.png" alt="Image" class="object-fit-cover w-100 h-100 position-absolute top-0 start-0 bottom-0 end-0">
                                      </div>
                                  </div>
                                </div>
                              </div>
                              <div class="col-7 ps-3">
                                <div class="fw-bold text-black">Google, Inc</div>
                              </div>
                            </div>
                            <div class="text-xs text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut et sapien augue. Cras ut rutrum nisi. Etiam sit amet dolor enim. Donec maximus</div>
                            <div class="d-flex data-company mt-3 align-items-center">
                              <img src="assets/images/icon/career-icon.svg"> 
                              <div class="text-sm ms-2">Web Design & Development</div>
                            </div>
                            <div class="d-flex data-company mt-2 align-items-center">
                              <img src="assets/images/icon/user-icon.svg"> 
                              <div class="text-sm ms-2">100 employees</div>
                            </div>
                            <div class="d-flex data-company mt-2 align-items-center">
                              <img src="assets/images/icon/time-icon.svg"> 
                              <div class="text-sm ms-2">Monday - Friday</div>
                            </div>
                            <div class="d-flex data-company mt-2 align-items-center">
                              <img src="assets/images/icon/location-icon.svg"> 
                              <div class="text-sm ms-2">Bekasi</div>
                            </div>
                            <div class="d-flex data-company mt-2 align-items-center">
                              <img src="assets/images/icon/black-phone-icon.svg"> 
                              <div class="text-sm ms-2">0812-4567-8910</div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="hero-company-list__item col-12 col-sm-3 mt-5">
                        <div class="card rounded-4">
                          <div class="action-company">
                            <a href="#" class="companyedit bg-white"><img src="assets/images/icon/company-edit.svg"></a>
                            <a href="#" class="companyedit bg-white"><img src="assets/images/icon/company-suitcase.svg"></a>
                            <a href="#" class="companyedit bg-white"><img src="assets/images/icon/company-check.svg"></a>
                          </div>
                          <div class="card-body text-sm">
                            <div class="row">
                              <div class="col-4 col-sm-5 pe-0">
                                <div class="hero-loker-list__item-image mb-3 rounded overflow-hidden">
                                  <div class="ratio ratio-1x1">
                                      <div>
                                          <img src="assets/images/company.png" alt="Image" class="object-fit-cover w-100 h-100 position-absolute top-0 start-0 bottom-0 end-0">
                                      </div>
                                  </div>
                                </div>
                              </div>
                              <div class="col-7 ps-3">
                                <div class="fw-bold text-black">Google, Inc</div>
                              </div>
                            </div>
                            <div class="text-xs text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut et sapien augue. Cras ut rutrum nisi. Etiam sit amet dolor enim. Donec maximus</div>
                            <div class="d-flex data-company mt-3 align-items-center">
                              <img src="assets/images/icon/career-icon.svg"> 
                              <div class="text-sm ms-2">Web Design & Development</div>
                            </div>
                            <div class="d-flex data-company mt-2 align-items-center">
                              <img src="assets/images/icon/user-icon.svg"> 
                              <div class="text-sm ms-2">100 employees</div>
                            </div>
                            <div class="d-flex data-company mt-2 align-items-center">
                              <img src="assets/images/icon/time-icon.svg"> 
                              <div class="text-sm ms-2">Monday - Friday</div>
                            </div>
                            <div class="d-flex data-company mt-2 align-items-center">
                              <img src="assets/images/icon/location-icon.svg"> 
                              <div class="text-sm ms-2">Bekasi</div>
                            </div>
                            <div class="d-flex data-company mt-2 align-items-center">
                              <img src="assets/images/icon/black-phone-icon.svg"> 
                              <div class="text-sm ms-2">0812-4567-8910</div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="hero-company-list__item col-12 col-sm-3 mt-5">
                        <div class="card rounded-4">
                          <div class="action-company">
                            <a href="#" class="companyedit bg-white"><img src="assets/images/icon/company-edit.svg"></a>
                            <a href="#" class="companyedit bg-white"><img src="assets/images/icon/company-suitcase.svg"></a>
                            <a href="#" class="companyedit bg-white"><img src="assets/images/icon/company-check.svg"></a>
                          </div>
                          <div class="card-body text-sm">
                            <div class="row">
                              <div class="col-4 col-sm-5 pe-0">
                                <div class="hero-loker-list__item-image mb-3 rounded overflow-hidden">
                                  <div class="ratio ratio-1x1">
                                      <div>
                                          <img src="assets/images/company.png" alt="Image" class="object-fit-cover w-100 h-100 position-absolute top-0 start-0 bottom-0 end-0">
                                      </div>
                                  </div>
                                </div>
                              </div>
                              <div class="col-7 ps-3">
                                <div class="fw-bold text-black">Google, Inc</div>
                              </div>
                            </div>
                            <div class="text-xs text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut et sapien augue. Cras ut rutrum nisi. Etiam sit amet dolor enim. Donec maximus</div>
                            <div class="d-flex data-company mt-3 align-items-center">
                              <img src="assets/images/icon/career-icon.svg"> 
                              <div class="text-sm ms-2">Web Design & Development</div>
                            </div>
                            <div class="d-flex data-company mt-2 align-items-center">
                              <img src="assets/images/icon/user-icon.svg"> 
                              <div class="text-sm ms-2">100 employees</div>
                            </div>
                            <div class="d-flex data-company mt-2 align-items-center">
                              <img src="assets/images/icon/time-icon.svg"> 
                              <div class="text-sm ms-2">Monday - Friday</div>
                            </div>
                            <div class="d-flex data-company mt-2 align-items-center">
                              <img src="assets/images/icon/location-icon.svg"> 
                              <div class="text-sm ms-2">Bekasi</div>
                            </div>
                            <div class="d-flex data-company mt-2 align-items-center">
                              <img src="assets/images/icon/black-phone-icon.svg"> 
                              <div class="text-sm ms-2">0812-4567-8910</div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="hero-company-list__item col-12 col-sm-3 mt-5">
                        <div class="card rounded-4">
                          <div class="action-company">
                            <a href="#" class="companyedit bg-white"><img src="assets/images/icon/company-edit.svg"></a>
                            <a href="#" class="companyedit bg-white"><img src="assets/images/icon/company-suitcase.svg"></a>
                            <a href="#" class="companyedit bg-white"><img src="assets/images/icon/company-check.svg"></a>
                          </div>
                          <div class="card-body text-sm">
                            <div class="row">
                              <div class="col-4 col-sm-5 pe-0">
                                <div class="hero-loker-list__item-image mb-3 rounded overflow-hidden">
                                  <div class="ratio ratio-1x1">
                                      <div>
                                          <img src="assets/images/company.png" alt="Image" class="object-fit-cover w-100 h-100 position-absolute top-0 start-0 bottom-0 end-0">
                                      </div>
                                  </div>
                                </div>
                              </div>
                              <div class="col-7 ps-3">
                                <div class="fw-bold text-black">Google, Inc</div>
                              </div>
                            </div>
                            <div class="text-xs text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut et sapien augue. Cras ut rutrum nisi. Etiam sit amet dolor enim. Donec maximus</div>
                            <div class="d-flex data-company mt-3 align-items-center">
                              <img src="assets/images/icon/career-icon.svg"> 
                              <div class="text-sm ms-2">Web Design & Development</div>
                            </div>
                            <div class="d-flex data-company mt-2 align-items-center">
                              <img src="assets/images/icon/user-icon.svg"> 
                              <div class="text-sm ms-2">100 employees</div>
                            </div>
                            <div class="d-flex data-company mt-2 align-items-center">
                              <img src="assets/images/icon/time-icon.svg"> 
                              <div class="text-sm ms-2">Monday - Friday</div>
                            </div>
                            <div class="d-flex data-company mt-2 align-items-center">
                              <img src="assets/images/icon/location-icon.svg"> 
                              <div class="text-sm ms-2">Bekasi</div>
                            </div>
                            <div class="d-flex data-company mt-2 align-items-center">
                              <img src="assets/images/icon/black-phone-icon.svg"> 
                              <div class="text-sm ms-2">0812-4567-8910</div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="tab-pane fade" id="companyinactive" role="tabpanel" aria-labelledby="companyinactive-tab">
                    <div class="filter-form d-flex">  
                      <div class="filter-matchingcandidates text-xs fw-500 py-2 mt-1">
                        <svg width="30" height="20" viewBox="0 0 42 29" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g opacity="0.5">
                        <path d="M8.70117 8.81616H32.9672" stroke="black" stroke-width="1.85186" stroke-linecap="round"/>
                        <path d="M10.7231 14.4783H30.9449" stroke="black" stroke-width="1.85186" stroke-linecap="round"/>
                        <path d="M12.7451 20.1404H28.9225" stroke="black" stroke-width="1.85186" stroke-linecap="round"/>
                        </g>
                        </svg> Filter
                      </div>
                    </div>
                      
                    <div class="card mb-4">
                      <div class="card-body">
                      
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
    <script src="assets/vendors/owlcarousel/owl.carousel.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.7/js/dataTables.bootstrap5.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
    <!-- End custom js for this page -->
    <script>
      $(document).ready(function(){
        

        $('.sidebar-slide').owlCarousel({
            stagePadding: 20,
            center:false,
            items:1,
            loop:false,
            margin:10,
            responsive:{
                600:{
                    items:1
                }
            }
        });
      });
    </script>
  </body>
</html>