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
          <h1 class="page-title mb-0 fs-5 fw-600">Candidates</h1>
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
          <div class="content-wrapper" id="candidates-table">
            <div class="row">
              <div class="col-12">
                  <ul class="nav nav-tabs mb-4" id="candidatesTab" role="tablist">
                  <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="matchingapplicant-tab" data-bs-toggle="tab" data-bs-target="#matchingapplicant" type="button" role="tab" aria-controls="matchingapplicant" aria-selected="true">Matching Applicant</button>
                  </li>
                  <li class="nav-item" role="presentation">
                    <button class="nav-link" id="matchingcandidates-tab" data-bs-toggle="tab" data-bs-target="#matchingcandidates" type="button" role="tab" aria-controls="matchingcandidates" aria-selected="false">Matching Candidates</button>
                  </li>
                  <li class="nav-item" role="presentation">
                    <button class="nav-link" id="allcandidates-tab" data-bs-toggle="tab" data-bs-target="#allcandidates" type="button" role="tab" aria-controls="allcandidates" aria-selected="false">All Candidates</button>
                  </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                  <div class="tab-pane fade show active" id="matchingapplicant" role="tabpanel" aria-labelledby="matchingapplicant-tab">
                    <div class="filter-form d-flex">
                      <div class="dropdown show me-4">
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
                      <div class="dropdown show">
                        <a class="btn btn-secondary dropdown-toggle bg-white border-0 px-3 py-2 rounded-3 text-xs fw-500 text-muted d-flex align-items-center" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <svg xmlns="http://www.w3.org/2000/svg" class="me-2" width="20" height="20" viewBox="0 0 21 21" fill="none">
                            <path d="M18.8226 9.1871C18.4044 5.39619 15.3953 2.3871 11.6044 1.96892V0.0961914H9.78622V1.96892C5.99531 2.3871 2.98622 5.39619 2.56804 9.1871H0.695312V11.0053H2.56804C2.98622 14.7962 5.99531 17.8053 9.78622 18.2235V20.0962H11.6044V18.2235C15.3953 17.8053 18.4044 14.7962 18.8226 11.0053H20.6953V9.1871H18.8226ZM10.6953 16.4598C7.17713 16.4598 4.33168 13.6144 4.33168 10.0962C4.33168 6.57801 7.17713 3.73256 10.6953 3.73256C14.2135 3.73256 17.0589 6.57801 17.0589 10.0962C17.0589 13.6144 14.2135 16.4598 10.6953 16.4598Z" fill="#16A799"/>
                          </svg>Vacancy Applied For
                        </a>

                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                          <a class="dropdown-item text-xs" href="#">Chief Designer Officer</a>
                          <a class="dropdown-item text-xs" href="#">Chief Designer Officer</a>
                          <a class="dropdown-item text-xs" href="#">Chief Designer Officer</a>
                        </div>
                      </div>
                      <div class="ms-4 text-xs">Experience</div>
                      <div class=wrapper>
                        <div class="range">
                          <input type="range" min="0" max="100" value="0" id="range" /> 
                          <div class="value">0 years</div>
                        </div>
                      </div>
                    </div>
                    <div class="card mb-4">
                      <div class="card-body">
                      <table id="table1" class="table data-candidates" style="width:100%">
                        <thead class="text-xs">
                            <tr>
                                <th></th>
                                <th></th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Experience</th>
                                <th>Vacancy Applied For</th>
                                <th>Matching Score</th>
                                <th>Status</th>
                                <th>City</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody class="fw-500 text-s">
                            <tr>
                                <td><input type="checkbox" name="" id=""></td>
                                <td><div class="bg-grey rounded-pill fw-600 text-black initial-name">N</div></td>
                                <td>Namaku Panjang Sekali Z</td>
                                <td>Namaku.Panjang@gmail.com</td>
                                <td>17 years</td>
                                <td>Chief Design Officer</td>
                                <td class="text-center percentage-image"><img src="assets/images/90-circle.png"></td>
                                <td class="text-warning">Review</td>
                                <td>Jakarta</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" name="" id=""></td>
                                <td><div class="bg-grey rounded-pill fw-600 text-black initial-name">N</div></td>
                                <td>Namaku Panjang Sekali Z</td>
                                <td>Namaku.Panjang@gmail.com</td>
                                <td>17 years</td>
                                <td>Chief Design Officer</td>
                                <td class="text-center percentage-image"><img src="assets/images/90-circle.png"></td>
                                <td class="text-warning">Review</td>
                                <td>Jakarta</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" name="" id=""></td>
                                <td><div class="bg-grey rounded-pill fw-600 text-black initial-name">N</div></td>
                                <td>Namaku Panjang Sekali Z</td>
                                <td>Namaku.Panjang@gmail.com</td>
                                <td>17 years</td>
                                <td>Chief Design Officer</td>
                                <td class="text-center percentage-image"><img src="assets/images/90-circle.png"></td>
                                <td class="text-warning">Review</td>
                                <td>Jakarta</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" name="" id=""></td>
                                <td><div class="bg-grey rounded-pill fw-600 text-black initial-name">N</div></td>
                                <td>Namaku Panjang Sekali Z</td>
                                <td>Namaku.Panjang@gmail.com</td>
                                <td>17 years</td>
                                <td>Chief Design Officer</td>
                                <td class="text-center percentage-image"><img src="assets/images/90-circle.png"></td>
                                <td class="text-warning">Review</td>
                                <td>Jakarta</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" name="" id=""></td>
                                <td><div class="bg-grey rounded-pill fw-600 text-black initial-name">N</div></td>
                                <td>Namaku Panjang Sekali Z</td>
                                <td>Namaku.Panjang@gmail.com</td>
                                <td>17 years</td>
                                <td>Chief Design Officer</td>
                                <td class="text-center percentage-image"><img src="assets/images/90-circle.png"></td>
                                <td class="text-warning">Review</td>
                                <td>Jakarta</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" name="" id=""></td>
                                <td><div class="bg-grey rounded-pill fw-600 text-black initial-name">N</div></td>
                                <td>Namaku Panjang Sekali Z</td>
                                <td>Namaku.Panjang@gmail.com</td>
                                <td>17 years</td>
                                <td>Chief Design Officer</td>
                                <td class="text-center percentage-image"><img src="assets/images/90-circle.png"></td>
                                <td class="text-warning">Review</td>
                                <td>Jakarta</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" name="" id=""></td>
                                <td><div class="bg-grey rounded-pill fw-600 text-black initial-name">N</div></td>
                                <td>Namaku Panjang Sekali Z</td>
                                <td>Namaku.Panjang@gmail.com</td>
                                <td>17 years</td>
                                <td>Chief Design Officer</td>
                                <td class="text-center percentage-image"><img src="assets/images/90-circle.png"></td>
                                <td class="text-warning">Review</td>
                                <td>Jakarta</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" name="" id=""></td>
                                <td><div class="bg-grey rounded-pill fw-600 text-black initial-name">N</div></td>
                                <td>Namaku Panjang Sekali Z</td>
                                <td>Namaku.Panjang@gmail.com</td>
                                <td>17 years</td>
                                <td>Chief Design Officer</td>
                                <td class="text-center percentage-image"><img src="assets/images/90-circle.png"></td>
                                <td class="text-warning">Review</td>
                                <td>Jakarta</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" name="" id=""></td>
                                <td><div class="bg-grey rounded-pill fw-600 text-black initial-name">N</div></td>
                                <td>Namaku Panjang Sekali Z</td>
                                <td>Namaku.Panjang@gmail.com</td>
                                <td>17 years</td>
                                <td>Chief Design Officer</td>
                                <td class="text-center percentage-image"><img src="assets/images/90-circle.png"></td>
                                <td class="text-warning">Review</td>
                                <td>Jakarta</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" name="" id=""></td>
                                <td><div class="bg-grey rounded-pill fw-600 text-black initial-name">N</div></td>
                                <td>Namaku Panjang Sekali Z</td>
                                <td>Namaku.Panjang@gmail.com</td>
                                <td>17 years</td>
                                <td>Chief Design Officer</td>
                                <td class="text-center percentage-image"><img src="assets/images/90-circle.png"></td>
                                <td class="text-warning">Review</td>
                                <td>Jakarta</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" name="" id=""></td>
                                <td><div class="bg-grey rounded-pill fw-600 text-black initial-name">N</div></td>
                                <td>Namaku Panjang Sekali Z</td>
                                <td>Namaku.Panjang@gmail.com</td>
                                <td>17 years</td>
                                <td>Chief Design Officer</td>
                                <td class="text-center percentage-image"><img src="assets/images/90-circle.png"></td>
                                <td class="text-warning">Review</td>
                                <td>Jakarta</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" name="" id=""></td>
                                <td><div class="bg-grey rounded-pill fw-600 text-black initial-name">N</div></td>
                                <td>Namaku Panjang Sekali Z2</td>
                                <td>Namaku.Panjang@gmail.com</td>
                                <td>17 years</td>
                                <td>Chief Design Officer</td>
                                <td class="text-center percentage-image"><img src="assets/images/90-circle.png"></td>
                                <td class="text-warning">Review</td>
                                <td>Jakarta</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" name="" id=""></td>
                                <td><div class="bg-grey rounded-pill fw-600 text-black initial-name">N</div></td>
                                <td>Namaku Panjang Sekali Z1</td>
                                <td>Namaku.Panjang@gmail.com</td>
                                <td>17 years</td>
                                <td>Chief Design Officer</td>
                                <td class="text-center percentage-image"><img src="assets/images/90-circle.png"></td>
                                <td class="text-warning">Review</td>
                                <td>Jakarta</td>
                                <td></td>
                            </tr>
                          </tbody>
                        </table><table id="table2" class="table data-candidates" style="width:100%">
                        <thead class="text-xs">
                            <tr>
                                <th></th>
                                <th></th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Experience</th>
                                <th>Vacancy Applied For</th>
                                <th>Matching Score</th>
                                <th>Status</th>
                                <th>City</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody class="fw-500 text-s">
                            <tr>
                                <td><input type="checkbox" name="" id=""></td>
                                <td><div class="bg-grey rounded-pill fw-600 text-black initial-name">N</div></td>
                                <td>Namaku Panjang Sekali Z</td>
                                <td>Namaku.Panjang@gmail.com</td>
                                <td>17 years</td>
                                <td>Chief Design Officer</td>
                                <td class="text-center percentage-image"><img src="assets/images/90-circle.png"></td>
                                <td class="text-warning">Review</td>
                                <td>Jakarta</td>
                                <td>
                                  <a href="" class=""><img src="assets/images/icon/cv-icon.svg"></a>
                                  <a href="" class="mx-2"><img src="assets/images/icon/blue-phone-icon.svg"></a>
                                  <a href="" class=""><img src="assets/images/icon/option-icon.svg"></a>
                                </td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" name="" id=""></td>
                                <td><div class="bg-grey rounded-pill fw-600 text-black initial-name">N</div></td>
                                <td>Namaku Panjang Sekali Z</td>
                                <td>Namaku.Panjang@gmail.com</td>
                                <td>17 years</td>
                                <td>Chief Design Officer</td>
                                <td class="text-center percentage-image"><img src="assets/images/90-circle.png"></td>
                                <td class="text-warning">Review</td>
                                <td>Jakarta</td>
                                <td>
                                  <a href="" class=""><img src="assets/images/icon/cv-icon.svg"></a>
                                  <a href="" class="mx-2"><img src="assets/images/icon/blue-phone-icon.svg"></a>
                                  <a href="" class=""><img src="assets/images/icon/option-icon.svg"></a>
                                </td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" name="" id=""></td>
                                <td><div class="bg-grey rounded-pill fw-600 text-black initial-name">N</div></td>
                                <td>Namaku Panjang Sekali Z</td>
                                <td>Namaku.Panjang@gmail.com</td>
                                <td>17 years</td>
                                <td>Chief Design Officer</td>
                                <td class="text-center percentage-image"><img src="assets/images/90-circle.png"></td>
                                <td class="text-warning">Review</td>
                                <td>Jakarta</td>
                                <td>
                                  <a href="" class=""><img src="assets/images/icon/cv-icon.svg"></a>
                                  <a href="" class="mx-2"><img src="assets/images/icon/blue-phone-icon.svg"></a>
                                  <a href="" class=""><img src="assets/images/icon/option-icon.svg"></a>
                                </td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" name="" id=""></td>
                                <td><div class="bg-grey rounded-pill fw-600 text-black initial-name">N</div></td>
                                <td>Namaku Panjang Sekali Z</td>
                                <td>Namaku.Panjang@gmail.com</td>
                                <td>17 years</td>
                                <td>Chief Design Officer</td>
                                <td class="text-center percentage-image"><img src="assets/images/90-circle.png"></td>
                                <td class="text-warning">Review</td>
                                <td>Jakarta</td>
                                <td>
                                  <a href="" class=""><img src="assets/images/icon/cv-icon.svg"></a>
                                  <a href="" class="mx-2"><img src="assets/images/icon/blue-phone-icon.svg"></a>
                                  <a href="" class=""><img src="assets/images/icon/option-icon.svg"></a>
                                </td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" name="" id=""></td>
                                <td><div class="bg-grey rounded-pill fw-600 text-black initial-name">N</div></td>
                                <td>Namaku Panjang Sekali Z</td>
                                <td>Namaku.Panjang@gmail.com</td>
                                <td>17 years</td>
                                <td>Chief Design Officer</td>
                                <td class="text-center percentage-image"><img src="assets/images/90-circle.png"></td>
                                <td class="text-warning">Review</td>
                                <td>Jakarta</td>
                                <td>
                                  <a href="" class=""><img src="assets/images/icon/cv-icon.svg"></a>
                                  <a href="" class="mx-2"><img src="assets/images/icon/blue-phone-icon.svg"></a>
                                  <a href="" class=""><img src="assets/images/icon/option-icon.svg"></a>
                                </td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" name="" id=""></td>
                                <td><div class="bg-grey rounded-pill fw-600 text-black initial-name">N</div></td>
                                <td>Namaku Panjang Sekali Z</td>
                                <td>Namaku.Panjang@gmail.com</td>
                                <td>17 years</td>
                                <td>Chief Design Officer</td>
                                <td class="text-center percentage-image"><img src="assets/images/90-circle.png"></td>
                                <td class="text-warning">Review</td>
                                <td>Jakarta</td>
                                <td>
                                  <a href="" class=""><img src="assets/images/icon/cv-icon.svg"></a>
                                  <a href="" class="mx-2"><img src="assets/images/icon/blue-phone-icon.svg"></a>
                                  <a href="" class=""><img src="assets/images/icon/option-icon.svg"></a>
                                </td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" name="" id=""></td>
                                <td><div class="bg-grey rounded-pill fw-600 text-black initial-name">N</div></td>
                                <td>Namaku Panjang Sekali Z</td>
                                <td>Namaku.Panjang@gmail.com</td>
                                <td>17 years</td>
                                <td>Chief Design Officer</td>
                                <td class="text-center percentage-image"><img src="assets/images/90-circle.png"></td>
                                <td class="text-warning">Review</td>
                                <td>Jakarta</td>
                                <td>
                                  <a href="" class=""><img src="assets/images/icon/cv-icon.svg"></a>
                                  <a href="" class="mx-2"><img src="assets/images/icon/blue-phone-icon.svg"></a>
                                  <a href="" class=""><img src="assets/images/icon/option-icon.svg"></a>
                                </td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" name="" id=""></td>
                                <td><div class="bg-grey rounded-pill fw-600 text-black initial-name">N</div></td>
                                <td>Namaku Panjang Sekali Z</td>
                                <td>Namaku.Panjang@gmail.com</td>
                                <td>17 years</td>
                                <td>Chief Design Officer</td>
                                <td class="text-center percentage-image"><img src="assets/images/90-circle.png"></td>
                                <td class="text-warning">Review</td>
                                <td>Jakarta</td>
                                <td>
                                  <a href="" class=""><img src="assets/images/icon/cv-icon.svg"></a>
                                  <a href="" class="mx-2"><img src="assets/images/icon/blue-phone-icon.svg"></a>
                                  <a href="" class=""><img src="assets/images/icon/option-icon.svg"></a>
                                </td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" name="" id=""></td>
                                <td><div class="bg-grey rounded-pill fw-600 text-black initial-name">N</div></td>
                                <td>Namaku Panjang Sekali Z</td>
                                <td>Namaku.Panjang@gmail.com</td>
                                <td>17 years</td>
                                <td>Chief Design Officer</td>
                                <td class="text-center percentage-image"><img src="assets/images/90-circle.png"></td>
                                <td class="text-warning">Review</td>
                                <td>Jakarta</td>
                                <td>
                                  <a href="" class=""><img src="assets/images/icon/cv-icon.svg"></a>
                                  <a href="" class="mx-2"><img src="assets/images/icon/blue-phone-icon.svg"></a>
                                  <a href="" class=""><img src="assets/images/icon/option-icon.svg"></a>
                                </td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" name="" id=""></td>
                                <td><div class="bg-grey rounded-pill fw-600 text-black initial-name">N</div></td>
                                <td>Namaku Panjang Sekali Z</td>
                                <td>Namaku.Panjang@gmail.com</td>
                                <td>17 years</td>
                                <td>Chief Design Officer</td>
                                <td class="text-center percentage-image"><img src="assets/images/90-circle.png"></td>
                                <td class="text-warning">Review</td>
                                <td>Jakarta</td>
                                <td>
                                  <a href="" class=""><img src="assets/images/icon/cv-icon.svg"></a>
                                  <a href="" class="mx-2"><img src="assets/images/icon/blue-phone-icon.svg"></a>
                                  <a href="" class=""><img src="assets/images/icon/option-icon.svg"></a>
                                </td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" name="" id=""></td>
                                <td><div class="bg-grey rounded-pill fw-600 text-black initial-name">N</div></td>
                                <td>Namaku Panjang Sekali Z</td>
                                <td>Namaku.Panjang@gmail.com</td>
                                <td>17 years</td>
                                <td>Chief Design Officer</td>
                                <td class="text-center percentage-image"><img src="assets/images/90-circle.png"></td>
                                <td class="text-warning">Review</td>
                                <td>Jakarta</td>
                                <td>
                                  <a href="" class=""><img src="assets/images/icon/cv-icon.svg"></a>
                                  <a href="" class="mx-2"><img src="assets/images/icon/blue-phone-icon.svg"></a>
                                  <a href="" class=""><img src="assets/images/icon/option-icon.svg"></a>
                                </td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" name="" id=""></td>
                                <td><div class="bg-grey rounded-pill fw-600 text-black initial-name">N</div></td>
                                <td>Namaku Panjang Sekali Z2</td>
                                <td>Namaku.Panjang@gmail.com</td>
                                <td>17 years</td>
                                <td>Chief Design Officer</td>
                                <td class="text-center percentage-image"><img src="assets/images/90-circle.png"></td>
                                <td class="text-warning">Review</td>
                                <td>Jakarta</td>
                                <td>
                                  <a href="" class=""><img src="assets/images/icon/cv-icon.svg"></a>
                                  <a href="" class="mx-2"><img src="assets/images/icon/blue-phone-icon.svg"></a>
                                  <a href="" class=""><img src="assets/images/icon/option-icon.svg"></a>
                                </td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" name="" id=""></td>
                                <td><div class="bg-grey rounded-pill fw-600 text-black initial-name">N</div></td>
                                <td>Namaku Panjang Sekali Z1</td>
                                <td>Namaku.Panjang@gmail.com</td>
                                <td>17 years</td>
                                <td>Chief Design Officer</td>
                                <td class="text-center percentage-image"><img src="assets/images/90-circle.png"></td>
                                <td class="text-warning">Review</td>
                                <td>Jakarta</td>
                                <td>
                                  <a href="" class=""><img src="assets/images/icon/cv-icon.svg"></a>
                                  <a href="" class="mx-2"><img src="assets/images/icon/blue-phone-icon.svg"></a>
                                  <a href="" class=""><img src="assets/images/icon/option-icon.svg"></a>
                                </td>
                            </tr>
                          </tbody>
                        </table>
 
                    </div>
                  </div>
                </div>
                <div class="tab-pane fade" id="matchingcandidates" role="tabpanel" aria-labelledby="matchingcandidates-tab">
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
                  <div class="blur-bg premium-only">
                    <div class="text-black fw-bold fs-3 text-center">
                      <span style="color:#C1A822">Premium</span> Features</span>
                      <div class="text-black fw-600 fs-5"><a href="#" style="color:#16A799">Click here</a> to open</div>
                    </div>
                    </div>
                    <div class="card mb-4">
                      <div class="card-body">
                      <table id="table1mactingcandidates" class="table data-candidates " style="width:100%">
                        <thead class="text-xs">
                            <tr>
                                <th></th>
                                <th></th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Experience</th>
                                <th>Vacancy Applied For</th>
                                <th>Matching Score</th>
                                <th>Status</th>
                                <th>City</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody class="fw-500 text-s">
                            <tr>
                                <td><input type="checkbox" name="" id=""></td>
                                <td><div class="bg-grey rounded-pill fw-600 text-black initial-name">N</div></td>
                                <td>Namaku Panjang Sekali Z</td>
                                <td>Namaku.Panjang@gmail.com</td>
                                <td>17 years</td>
                                <td>Chief Design Officer</td>
                                <td class="text-center percentage-image"><img src="assets/images/90-circle.png"></td>
                                <td class="text-warning">Review</td>
                                <td>Jakarta</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" name="" id=""></td>
                                <td><div class="bg-grey rounded-pill fw-600 text-black initial-name">N</div></td>
                                <td>Namaku Panjang Sekali Z</td>
                                <td>Namaku.Panjang@gmail.com</td>
                                <td>17 years</td>
                                <td>Chief Design Officer</td>
                                <td class="text-center percentage-image"><img src="assets/images/90-circle.png"></td>
                                <td class="text-warning">Review</td>
                                <td>Jakarta</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" name="" id=""></td>
                                <td><div class="bg-grey rounded-pill fw-600 text-black initial-name">N</div></td>
                                <td>Namaku Panjang Sekali Z</td>
                                <td>Namaku.Panjang@gmail.com</td>
                                <td>17 years</td>
                                <td>Chief Design Officer</td>
                                <td class="text-center percentage-image"><img src="assets/images/90-circle.png"></td>
                                <td class="text-warning">Review</td>
                                <td>Jakarta</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" name="" id=""></td>
                                <td><div class="bg-grey rounded-pill fw-600 text-black initial-name">N</div></td>
                                <td>Namaku Panjang Sekali Z</td>
                                <td>Namaku.Panjang@gmail.com</td>
                                <td>17 years</td>
                                <td>Chief Design Officer</td>
                                <td class="text-center percentage-image"><img src="assets/images/90-circle.png"></td>
                                <td class="text-warning">Review</td>
                                <td>Jakarta</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" name="" id=""></td>
                                <td><div class="bg-grey rounded-pill fw-600 text-black initial-name">N</div></td>
                                <td>Namaku Panjang Sekali Z</td>
                                <td>Namaku.Panjang@gmail.com</td>
                                <td>17 years</td>
                                <td>Chief Design Officer</td>
                                <td class="text-center percentage-image"><img src="assets/images/90-circle.png"></td>
                                <td class="text-warning">Review</td>
                                <td>Jakarta</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" name="" id=""></td>
                                <td><div class="bg-grey rounded-pill fw-600 text-black initial-name">N</div></td>
                                <td>Namaku Panjang Sekali Z</td>
                                <td>Namaku.Panjang@gmail.com</td>
                                <td>17 years</td>
                                <td>Chief Design Officer</td>
                                <td class="text-center percentage-image"><img src="assets/images/90-circle.png"></td>
                                <td class="text-warning">Review</td>
                                <td>Jakarta</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" name="" id=""></td>
                                <td><div class="bg-grey rounded-pill fw-600 text-black initial-name">N</div></td>
                                <td>Namaku Panjang Sekali Z</td>
                                <td>Namaku.Panjang@gmail.com</td>
                                <td>17 years</td>
                                <td>Chief Design Officer</td>
                                <td class="text-center percentage-image"><img src="assets/images/90-circle.png"></td>
                                <td class="text-warning">Review</td>
                                <td>Jakarta</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" name="" id=""></td>
                                <td><div class="bg-grey rounded-pill fw-600 text-black initial-name">N</div></td>
                                <td>Namaku Panjang Sekali Z</td>
                                <td>Namaku.Panjang@gmail.com</td>
                                <td>17 years</td>
                                <td>Chief Design Officer</td>
                                <td class="text-center percentage-image"><img src="assets/images/90-circle.png"></td>
                                <td class="text-warning">Review</td>
                                <td>Jakarta</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" name="" id=""></td>
                                <td><div class="bg-grey rounded-pill fw-600 text-black initial-name">N</div></td>
                                <td>Namaku Panjang Sekali Z</td>
                                <td>Namaku.Panjang@gmail.com</td>
                                <td>17 years</td>
                                <td>Chief Design Officer</td>
                                <td class="text-center percentage-image"><img src="assets/images/90-circle.png"></td>
                                <td class="text-warning">Review</td>
                                <td>Jakarta</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" name="" id=""></td>
                                <td><div class="bg-grey rounded-pill fw-600 text-black initial-name">N</div></td>
                                <td>Namaku Panjang Sekali Z</td>
                                <td>Namaku.Panjang@gmail.com</td>
                                <td>17 years</td>
                                <td>Chief Design Officer</td>
                                <td class="text-center percentage-image"><img src="assets/images/90-circle.png"></td>
                                <td class="text-warning">Review</td>
                                <td>Jakarta</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" name="" id=""></td>
                                <td><div class="bg-grey rounded-pill fw-600 text-black initial-name">N</div></td>
                                <td>Namaku Panjang Sekali Z</td>
                                <td>Namaku.Panjang@gmail.com</td>
                                <td>17 years</td>
                                <td>Chief Design Officer</td>
                                <td class="text-center percentage-image"><img src="assets/images/90-circle.png"></td>
                                <td class="text-warning">Review</td>
                                <td>Jakarta</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" name="" id=""></td>
                                <td><div class="bg-grey rounded-pill fw-600 text-black initial-name">N</div></td>
                                <td>Namaku Panjang Sekali Z2</td>
                                <td>Namaku.Panjang@gmail.com</td>
                                <td>17 years</td>
                                <td>Chief Design Officer</td>
                                <td class="text-center percentage-image"><img src="assets/images/90-circle.png"></td>
                                <td class="text-warning">Review</td>
                                <td>Jakarta</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" name="" id=""></td>
                                <td><div class="bg-grey rounded-pill fw-600 text-black initial-name">N</div></td>
                                <td>Namaku Panjang Sekali Z1</td>
                                <td>Namaku.Panjang@gmail.com</td>
                                <td>17 years</td>
                                <td>Chief Design Officer</td>
                                <td class="text-center percentage-image"><img src="assets/images/90-circle.png"></td>
                                <td class="text-warning">Review</td>
                                <td>Jakarta</td>
                                <td></td>
                            </tr>
                          </tbody>
                        </table><table id="table2mactingcandidates" class="table data-candidates data-action" style="width:100%">
                        <thead class="text-xs">
                            <tr>
                                <th></th>
                                <th></th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Experience</th>
                                <th>Vacancy Applied For</th>
                                <th>Matching Score</th>
                                <th>Status</th>
                                <th>City</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody class="fw-500 text-s">
                            <tr>
                                <td><input type="checkbox" name="" id=""></td>
                                <td><div class="bg-grey rounded-pill fw-600 text-black initial-name">N</div></td>
                                <td>Namaku Panjang Sekali Z</td>
                                <td>Namaku.Panjang@gmail.com</td>
                                <td>17 years</td>
                                <td>Chief Design Officer</td>
                                <td class="text-center percentage-image"><img src="assets/images/90-circle.png"></td>
                                <td class="text-warning">Review</td>
                                <td>Jakarta</td>
                                <td>
                                  <a href="" class=""><img src="assets/images/icon/cv-icon.svg"></a>
                                  <a href="" class="mx-2"><img src="assets/images/icon/blue-phone-icon.svg"></a>
                                  <a href="" class=""><img src="assets/images/icon/option-icon.svg"></a>
                                </td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" name="" id=""></td>
                                <td><div class="bg-grey rounded-pill fw-600 text-black initial-name">N</div></td>
                                <td>Namaku Panjang Sekali Z</td>
                                <td>Namaku.Panjang@gmail.com</td>
                                <td>17 years</td>
                                <td>Chief Design Officer</td>
                                <td class="text-center percentage-image"><img src="assets/images/90-circle.png"></td>
                                <td class="text-warning">Review</td>
                                <td>Jakarta</td>
                                <td>
                                  <a href="" class=""><img src="assets/images/icon/cv-icon.svg"></a>
                                  <a href="" class="mx-2"><img src="assets/images/icon/blue-phone-icon.svg"></a>
                                  <a href="" class=""><img src="assets/images/icon/option-icon.svg"></a>
                                </td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" name="" id=""></td>
                                <td><div class="bg-grey rounded-pill fw-600 text-black initial-name">N</div></td>
                                <td>Namaku Panjang Sekali Z</td>
                                <td>Namaku.Panjang@gmail.com</td>
                                <td>17 years</td>
                                <td>Chief Design Officer</td>
                                <td class="text-center percentage-image"><img src="assets/images/90-circle.png"></td>
                                <td class="text-warning">Review</td>
                                <td>Jakarta</td>
                                <td>
                                  <a href="" class=""><img src="assets/images/icon/cv-icon.svg"></a>
                                  <a href="" class="mx-2"><img src="assets/images/icon/blue-phone-icon.svg"></a>
                                  <a href="" class=""><img src="assets/images/icon/option-icon.svg"></a>
                                </td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" name="" id=""></td>
                                <td><div class="bg-grey rounded-pill fw-600 text-black initial-name">N</div></td>
                                <td>Namaku Panjang Sekali Z</td>
                                <td>Namaku.Panjang@gmail.com</td>
                                <td>17 years</td>
                                <td>Chief Design Officer</td>
                                <td class="text-center percentage-image"><img src="assets/images/90-circle.png"></td>
                                <td class="text-warning">Review</td>
                                <td>Jakarta</td>
                                <td>
                                  <a href="" class=""><img src="assets/images/icon/cv-icon.svg"></a>
                                  <a href="" class="mx-2"><img src="assets/images/icon/blue-phone-icon.svg"></a>
                                  <a href="" class=""><img src="assets/images/icon/option-icon.svg"></a>
                                </td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" name="" id=""></td>
                                <td><div class="bg-grey rounded-pill fw-600 text-black initial-name">N</div></td>
                                <td>Namaku Panjang Sekali Z</td>
                                <td>Namaku.Panjang@gmail.com</td>
                                <td>17 years</td>
                                <td>Chief Design Officer</td>
                                <td class="text-center percentage-image"><img src="assets/images/90-circle.png"></td>
                                <td class="text-warning">Review</td>
                                <td>Jakarta</td>
                                <td>
                                  <a href="" class=""><img src="assets/images/icon/cv-icon.svg"></a>
                                  <a href="" class="mx-2"><img src="assets/images/icon/blue-phone-icon.svg"></a>
                                  <a href="" class=""><img src="assets/images/icon/option-icon.svg"></a>
                                </td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" name="" id=""></td>
                                <td><div class="bg-grey rounded-pill fw-600 text-black initial-name">N</div></td>
                                <td>Namaku Panjang Sekali Z</td>
                                <td>Namaku.Panjang@gmail.com</td>
                                <td>17 years</td>
                                <td>Chief Design Officer</td>
                                <td class="text-center percentage-image"><img src="assets/images/90-circle.png"></td>
                                <td class="text-warning">Review</td>
                                <td>Jakarta</td>
                                <td>
                                  <a href="" class=""><img src="assets/images/icon/cv-icon.svg"></a>
                                  <a href="" class="mx-2"><img src="assets/images/icon/blue-phone-icon.svg"></a>
                                  <a href="" class=""><img src="assets/images/icon/option-icon.svg"></a>
                                </td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" name="" id=""></td>
                                <td><div class="bg-grey rounded-pill fw-600 text-black initial-name">N</div></td>
                                <td>Namaku Panjang Sekali Z</td>
                                <td>Namaku.Panjang@gmail.com</td>
                                <td>17 years</td>
                                <td>Chief Design Officer</td>
                                <td class="text-center percentage-image"><img src="assets/images/90-circle.png"></td>
                                <td class="text-warning">Review</td>
                                <td>Jakarta</td>
                                <td>
                                  <a href="" class=""><img src="assets/images/icon/cv-icon.svg"></a>
                                  <a href="" class="mx-2"><img src="assets/images/icon/blue-phone-icon.svg"></a>
                                  <a href="" class=""><img src="assets/images/icon/option-icon.svg"></a>
                                </td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" name="" id=""></td>
                                <td><div class="bg-grey rounded-pill fw-600 text-black initial-name">N</div></td>
                                <td>Namaku Panjang Sekali Z</td>
                                <td>Namaku.Panjang@gmail.com</td>
                                <td>17 years</td>
                                <td>Chief Design Officer</td>
                                <td class="text-center percentage-image"><img src="assets/images/90-circle.png"></td>
                                <td class="text-warning">Review</td>
                                <td>Jakarta</td>
                                <td>
                                  <a href="" class=""><img src="assets/images/icon/cv-icon.svg"></a>
                                  <a href="" class="mx-2"><img src="assets/images/icon/blue-phone-icon.svg"></a>
                                  <a href="" class=""><img src="assets/images/icon/option-icon.svg"></a>
                                </td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" name="" id=""></td>
                                <td><div class="bg-grey rounded-pill fw-600 text-black initial-name">N</div></td>
                                <td>Namaku Panjang Sekali Z</td>
                                <td>Namaku.Panjang@gmail.com</td>
                                <td>17 years</td>
                                <td>Chief Design Officer</td>
                                <td class="text-center percentage-image"><img src="assets/images/90-circle.png"></td>
                                <td class="text-warning">Review</td>
                                <td>Jakarta</td>
                                <td>
                                  <a href="" class=""><img src="assets/images/icon/cv-icon.svg"></a>
                                  <a href="" class="mx-2"><img src="assets/images/icon/blue-phone-icon.svg"></a>
                                  <a href="" class=""><img src="assets/images/icon/option-icon.svg"></a>
                                </td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" name="" id=""></td>
                                <td><div class="bg-grey rounded-pill fw-600 text-black initial-name">N</div></td>
                                <td>Namaku Panjang Sekali Z</td>
                                <td>Namaku.Panjang@gmail.com</td>
                                <td>17 years</td>
                                <td>Chief Design Officer</td>
                                <td class="text-center percentage-image"><img src="assets/images/90-circle.png"></td>
                                <td class="text-warning">Review</td>
                                <td>Jakarta</td>
                                <td>
                                  <a href="" class=""><img src="assets/images/icon/cv-icon.svg"></a>
                                  <a href="" class="mx-2"><img src="assets/images/icon/blue-phone-icon.svg"></a>
                                  <a href="" class=""><img src="assets/images/icon/option-icon.svg"></a>
                                </td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" name="" id=""></td>
                                <td><div class="bg-grey rounded-pill fw-600 text-black initial-name">N</div></td>
                                <td>Namaku Panjang Sekali Z</td>
                                <td>Namaku.Panjang@gmail.com</td>
                                <td>17 years</td>
                                <td>Chief Design Officer</td>
                                <td class="text-center percentage-image"><img src="assets/images/90-circle.png"></td>
                                <td class="text-warning">Review</td>
                                <td>Jakarta</td>
                                <td>
                                  <a href="" class=""><img src="assets/images/icon/cv-icon.svg"></a>
                                  <a href="" class="mx-2"><img src="assets/images/icon/blue-phone-icon.svg"></a>
                                  <a href="" class=""><img src="assets/images/icon/option-icon.svg"></a>
                                </td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" name="" id=""></td>
                                <td><div class="bg-grey rounded-pill fw-600 text-black initial-name">N</div></td>
                                <td>Namaku Panjang Sekali Z2</td>
                                <td>Namaku.Panjang@gmail.com</td>
                                <td>17 years</td>
                                <td>Chief Design Officer</td>
                                <td class="text-center percentage-image"><img src="assets/images/90-circle.png"></td>
                                <td class="text-warning">Review</td>
                                <td>Jakarta</td>
                                <td>
                                  <a href="" class=""><img src="assets/images/icon/cv-icon.svg"></a>
                                  <a href="" class="mx-2"><img src="assets/images/icon/blue-phone-icon.svg"></a>
                                  <a href="" class=""><img src="assets/images/icon/option-icon.svg"></a>
                                </td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" name="" id=""></td>
                                <td><div class="bg-grey rounded-pill fw-600 text-black initial-name">N</div></td>
                                <td>Namaku Panjang Sekali Z1</td>
                                <td>Namaku.Panjang@gmail.com</td>
                                <td>17 years</td>
                                <td>Chief Design Officer</td>
                                <td class="text-center percentage-image"><img src="assets/images/90-circle.png"></td>
                                <td class="text-warning">Review</td>
                                <td>Jakarta</td>
                                <td>
                                  <a href="" class=""><img src="assets/images/icon/cv-icon.svg"></a>
                                  <a href="" class="mx-2"><img src="assets/images/icon/blue-phone-icon.svg"></a>
                                  <a href="" class=""><img src="assets/images/icon/option-icon.svg"></a>
                                </td>
                            </tr>
                          </tbody>
                        </table>
 
                    </div>
                  </div>
                    </div>
                    <div class="tab-pane fade" id="allcandidates" role="tabpanel" aria-labelledby="allcandidates-tab">
                      <div class="filter-form d-flex">  
                        <div class="filter-allcandidates text-xs fw-500 py-2 mt-1 text-blue">
                          <svg width="30" height="20" viewBox="0 0 42 29" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <g opacity="0.5">
                          <path d="M8.70117 8.81616H32.9672" stroke="#16A799" stroke-width="1.85186" stroke-linecap="round"/>
                          <path d="M10.7231 14.4783H30.9449" stroke="#16A799" stroke-width="1.85186" stroke-linecap="round"/>
                          <path d="M12.7451 20.1404H28.9225" stroke="#16A799" stroke-width="1.85186" stroke-linecap="round"/>
                          </g>
                          </svg> Apply Filter

                        </div>
                      </div>
                      <div class="card mb-4">
                        <div class="card-body">
                          <table id="table1allcandidates" class="table data-candidates " style="width:100%">
                            <thead class="text-xs">
                                <tr>
                                    <th></th>
                                    <th></th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Experience</th>
                                    <th>Vacancy Applied For</th>
                                    <th>Matching Score</th>
                                    <th>Status</th>
                                    <th>City</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody class="fw-500 text-s">
                                <tr>
                                    <td><input type="checkbox" name="" id=""></td>
                                    <td><div class="bg-grey rounded-pill fw-600 text-black initial-name">N</div></td>
                                    <td>Namaku Panjang Sekali Z</td>
                                    <td>Namaku.Panjang@gmail.com</td>
                                    <td>17 years</td>
                                    <td>Chief Design Officer</td>
                                    <td class="text-center percentage-image"><img src="assets/images/90-circle.png"></td>
                                    <td class="text-warning">Review</td>
                                    <td>Jakarta</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td><input type="checkbox" name="" id=""></td>
                                    <td><div class="bg-grey rounded-pill fw-600 text-black initial-name">N</div></td>
                                    <td>Namaku Panjang Sekali Z</td>
                                    <td>Namaku.Panjang@gmail.com</td>
                                    <td>17 years</td>
                                    <td>Chief Design Officer</td>
                                    <td class="text-center percentage-image"><img src="assets/images/90-circle.png"></td>
                                    <td class="text-warning">Review</td>
                                    <td>Jakarta</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td><input type="checkbox" name="" id=""></td>
                                    <td><div class="bg-grey rounded-pill fw-600 text-black initial-name">N</div></td>
                                    <td>Namaku Panjang Sekali Z</td>
                                    <td>Namaku.Panjang@gmail.com</td>
                                    <td>17 years</td>
                                    <td>Chief Design Officer</td>
                                    <td class="text-center percentage-image"><img src="assets/images/90-circle.png"></td>
                                    <td class="text-warning">Review</td>
                                    <td>Jakarta</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td><input type="checkbox" name="" id=""></td>
                                    <td><div class="bg-grey rounded-pill fw-600 text-black initial-name">N</div></td>
                                    <td>Namaku Panjang Sekali Z</td>
                                    <td>Namaku.Panjang@gmail.com</td>
                                    <td>17 years</td>
                                    <td>Chief Design Officer</td>
                                    <td class="text-center percentage-image"><img src="assets/images/90-circle.png"></td>
                                    <td class="text-warning">Review</td>
                                    <td>Jakarta</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td><input type="checkbox" name="" id=""></td>
                                    <td><div class="bg-grey rounded-pill fw-600 text-black initial-name">N</div></td>
                                    <td>Namaku Panjang Sekali Z</td>
                                    <td>Namaku.Panjang@gmail.com</td>
                                    <td>17 years</td>
                                    <td>Chief Design Officer</td>
                                    <td class="text-center percentage-image"><img src="assets/images/90-circle.png"></td>
                                    <td class="text-warning">Review</td>
                                    <td>Jakarta</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td><input type="checkbox" name="" id=""></td>
                                    <td><div class="bg-grey rounded-pill fw-600 text-black initial-name">N</div></td>
                                    <td>Namaku Panjang Sekali Z</td>
                                    <td>Namaku.Panjang@gmail.com</td>
                                    <td>17 years</td>
                                    <td>Chief Design Officer</td>
                                    <td class="text-center percentage-image"><img src="assets/images/90-circle.png"></td>
                                    <td class="text-warning">Review</td>
                                    <td>Jakarta</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td><input type="checkbox" name="" id=""></td>
                                    <td><div class="bg-grey rounded-pill fw-600 text-black initial-name">N</div></td>
                                    <td>Namaku Panjang Sekali Z</td>
                                    <td>Namaku.Panjang@gmail.com</td>
                                    <td>17 years</td>
                                    <td>Chief Design Officer</td>
                                    <td class="text-center percentage-image"><img src="assets/images/90-circle.png"></td>
                                    <td class="text-warning">Review</td>
                                    <td>Jakarta</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td><input type="checkbox" name="" id=""></td>
                                    <td><div class="bg-grey rounded-pill fw-600 text-black initial-name">N</div></td>
                                    <td>Namaku Panjang Sekali Z</td>
                                    <td>Namaku.Panjang@gmail.com</td>
                                    <td>17 years</td>
                                    <td>Chief Design Officer</td>
                                    <td class="text-center percentage-image"><img src="assets/images/90-circle.png"></td>
                                    <td class="text-warning">Review</td>
                                    <td>Jakarta</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td><input type="checkbox" name="" id=""></td>
                                    <td><div class="bg-grey rounded-pill fw-600 text-black initial-name">N</div></td>
                                    <td>Namaku Panjang Sekali Z</td>
                                    <td>Namaku.Panjang@gmail.com</td>
                                    <td>17 years</td>
                                    <td>Chief Design Officer</td>
                                    <td class="text-center percentage-image"><img src="assets/images/90-circle.png"></td>
                                    <td class="text-warning">Review</td>
                                    <td>Jakarta</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td><input type="checkbox" name="" id=""></td>
                                    <td><div class="bg-grey rounded-pill fw-600 text-black initial-name">N</div></td>
                                    <td>Namaku Panjang Sekali Z</td>
                                    <td>Namaku.Panjang@gmail.com</td>
                                    <td>17 years</td>
                                    <td>Chief Design Officer</td>
                                    <td class="text-center percentage-image"><img src="assets/images/90-circle.png"></td>
                                    <td class="text-warning">Review</td>
                                    <td>Jakarta</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td><input type="checkbox" name="" id=""></td>
                                    <td><div class="bg-grey rounded-pill fw-600 text-black initial-name">N</div></td>
                                    <td>Namaku Panjang Sekali Z</td>
                                    <td>Namaku.Panjang@gmail.com</td>
                                    <td>17 years</td>
                                    <td>Chief Design Officer</td>
                                    <td class="text-center percentage-image"><img src="assets/images/90-circle.png"></td>
                                    <td class="text-warning">Review</td>
                                    <td>Jakarta</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td><input type="checkbox" name="" id=""></td>
                                    <td><div class="bg-grey rounded-pill fw-600 text-black initial-name">N</div></td>
                                    <td>Namaku Panjang Sekali Z2</td>
                                    <td>Namaku.Panjang@gmail.com</td>
                                    <td>17 years</td>
                                    <td>Chief Design Officer</td>
                                    <td class="text-center percentage-image"><img src="assets/images/90-circle.png"></td>
                                    <td class="text-warning">Review</td>
                                    <td>Jakarta</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td><input type="checkbox" name="" id=""></td>
                                    <td><div class="bg-grey rounded-pill fw-600 text-black initial-name">N</div></td>
                                    <td>Namaku Panjang Sekali Z1</td>
                                    <td>Namaku.Panjang@gmail.com</td>
                                    <td>17 years</td>
                                    <td>Chief Design Officer</td>
                                    <td class="text-center percentage-image"><img src="assets/images/90-circle.png"></td>
                                    <td class="text-warning">Review</td>
                                    <td>Jakarta</td>
                                    <td></td>
                                </tr>
                              </tbody>
                            </table>
                            <table id="table2allcandidates" class="table data-candidates data-action" style="width:100%">
                            <thead class="text-xs">
                                <tr>
                                    <th></th>
                                    <th></th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Experience</th>
                                    <th>Vacancy Applied For</th>
                                    <th>Matching Score</th>
                                    <th>Status</th>
                                    <th>City</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody class="fw-500 text-s">
                                <tr>
                                    <td><input type="checkbox" name="" id=""></td>
                                    <td><div class="bg-grey rounded-pill fw-600 text-black initial-name">N</div></td>
                                    <td>Namaku Panjang Sekali Z</td>
                                    <td>Namaku.Panjang@gmail.com</td>
                                    <td>17 years</td>
                                    <td>Chief Design Officer</td>
                                    <td class="text-center percentage-image"><img src="assets/images/90-circle.png"></td>
                                    <td class="text-warning">Review</td>
                                    <td>Jakarta</td>
                                    <td>
                                      <a href="" class=""><img src="assets/images/icon/cv-icon.svg"></a>
                                      <a href="" class="mx-2"><img src="assets/images/icon/blue-phone-icon.svg"></a>
                                      <a href="" class=""><img src="assets/images/icon/option-icon.svg"></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td><input type="checkbox" name="" id=""></td>
                                    <td><div class="bg-grey rounded-pill fw-600 text-black initial-name">N</div></td>
                                    <td>Namaku Panjang Sekali Z</td>
                                    <td>Namaku.Panjang@gmail.com</td>
                                    <td>17 years</td>
                                    <td>Chief Design Officer</td>
                                    <td class="text-center percentage-image"><img src="assets/images/90-circle.png"></td>
                                    <td class="text-warning">Review</td>
                                    <td>Jakarta</td>
                                    <td>
                                      <a href="" class=""><img src="assets/images/icon/cv-icon.svg"></a>
                                      <a href="" class="mx-2"><img src="assets/images/icon/blue-phone-icon.svg"></a>
                                      <a href="" class=""><img src="assets/images/icon/option-icon.svg"></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td><input type="checkbox" name="" id=""></td>
                                    <td><div class="bg-grey rounded-pill fw-600 text-black initial-name">N</div></td>
                                    <td>Namaku Panjang Sekali Z</td>
                                    <td>Namaku.Panjang@gmail.com</td>
                                    <td>17 years</td>
                                    <td>Chief Design Officer</td>
                                    <td class="text-center percentage-image"><img src="assets/images/90-circle.png"></td>
                                    <td class="text-warning">Review</td>
                                    <td>Jakarta</td>
                                    <td>
                                      <a href="" class=""><img src="assets/images/icon/cv-icon.svg"></a>
                                      <a href="" class="mx-2"><img src="assets/images/icon/blue-phone-icon.svg"></a>
                                      <a href="" class=""><img src="assets/images/icon/option-icon.svg"></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td><input type="checkbox" name="" id=""></td>
                                    <td><div class="bg-grey rounded-pill fw-600 text-black initial-name">N</div></td>
                                    <td>Namaku Panjang Sekali Z</td>
                                    <td>Namaku.Panjang@gmail.com</td>
                                    <td>17 years</td>
                                    <td>Chief Design Officer</td>
                                    <td class="text-center percentage-image"><img src="assets/images/90-circle.png"></td>
                                    <td class="text-warning">Review</td>
                                    <td>Jakarta</td>
                                    <td>
                                      <a href="" class=""><img src="assets/images/icon/cv-icon.svg"></a>
                                      <a href="" class="mx-2"><img src="assets/images/icon/blue-phone-icon.svg"></a>
                                      <a href="" class=""><img src="assets/images/icon/option-icon.svg"></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td><input type="checkbox" name="" id=""></td>
                                    <td><div class="bg-grey rounded-pill fw-600 text-black initial-name">N</div></td>
                                    <td>Namaku Panjang Sekali Z</td>
                                    <td>Namaku.Panjang@gmail.com</td>
                                    <td>17 years</td>
                                    <td>Chief Design Officer</td>
                                    <td class="text-center percentage-image"><img src="assets/images/90-circle.png"></td>
                                    <td class="text-warning">Review</td>
                                    <td>Jakarta</td>
                                    <td>
                                      <a href="" class=""><img src="assets/images/icon/cv-icon.svg"></a>
                                      <a href="" class="mx-2"><img src="assets/images/icon/blue-phone-icon.svg"></a>
                                      <a href="" class=""><img src="assets/images/icon/option-icon.svg"></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td><input type="checkbox" name="" id=""></td>
                                    <td><div class="bg-grey rounded-pill fw-600 text-black initial-name">N</div></td>
                                    <td>Namaku Panjang Sekali Z</td>
                                    <td>Namaku.Panjang@gmail.com</td>
                                    <td>17 years</td>
                                    <td>Chief Design Officer</td>
                                    <td class="text-center percentage-image"><img src="assets/images/90-circle.png"></td>
                                    <td class="text-warning">Review</td>
                                    <td>Jakarta</td>
                                    <td>
                                      <a href="" class=""><img src="assets/images/icon/cv-icon.svg"></a>
                                      <a href="" class="mx-2"><img src="assets/images/icon/blue-phone-icon.svg"></a>
                                      <a href="" class=""><img src="assets/images/icon/option-icon.svg"></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td><input type="checkbox" name="" id=""></td>
                                    <td><div class="bg-grey rounded-pill fw-600 text-black initial-name">N</div></td>
                                    <td>Namaku Panjang Sekali Z</td>
                                    <td>Namaku.Panjang@gmail.com</td>
                                    <td>17 years</td>
                                    <td>Chief Design Officer</td>
                                    <td class="text-center percentage-image"><img src="assets/images/90-circle.png"></td>
                                    <td class="text-warning">Review</td>
                                    <td>Jakarta</td>
                                    <td>
                                      <a href="" class=""><img src="assets/images/icon/cv-icon.svg"></a>
                                      <a href="" class="mx-2"><img src="assets/images/icon/blue-phone-icon.svg"></a>
                                      <a href="" class=""><img src="assets/images/icon/option-icon.svg"></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td><input type="checkbox" name="" id=""></td>
                                    <td><div class="bg-grey rounded-pill fw-600 text-black initial-name">N</div></td>
                                    <td>Namaku Panjang Sekali Z</td>
                                    <td>Namaku.Panjang@gmail.com</td>
                                    <td>17 years</td>
                                    <td>Chief Design Officer</td>
                                    <td class="text-center percentage-image"><img src="assets/images/90-circle.png"></td>
                                    <td class="text-warning">Review</td>
                                    <td>Jakarta</td>
                                    <td>
                                      <a href="" class=""><img src="assets/images/icon/cv-icon.svg"></a>
                                      <a href="" class="mx-2"><img src="assets/images/icon/blue-phone-icon.svg"></a>
                                      <a href="" class=""><img src="assets/images/icon/option-icon.svg"></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td><input type="checkbox" name="" id=""></td>
                                    <td><div class="bg-grey rounded-pill fw-600 text-black initial-name">N</div></td>
                                    <td>Namaku Panjang Sekali Z</td>
                                    <td>Namaku.Panjang@gmail.com</td>
                                    <td>17 years</td>
                                    <td>Chief Design Officer</td>
                                    <td class="text-center percentage-image"><img src="assets/images/90-circle.png"></td>
                                    <td class="text-warning">Review</td>
                                    <td>Jakarta</td>
                                    <td>
                                      <a href="" class=""><img src="assets/images/icon/cv-icon.svg"></a>
                                      <a href="" class="mx-2"><img src="assets/images/icon/blue-phone-icon.svg"></a>
                                      <a href="" class=""><img src="assets/images/icon/option-icon.svg"></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td><input type="checkbox" name="" id=""></td>
                                    <td><div class="bg-grey rounded-pill fw-600 text-black initial-name">N</div></td>
                                    <td>Namaku Panjang Sekali Z</td>
                                    <td>Namaku.Panjang@gmail.com</td>
                                    <td>17 years</td>
                                    <td>Chief Design Officer</td>
                                    <td class="text-center percentage-image"><img src="assets/images/90-circle.png"></td>
                                    <td class="text-warning">Review</td>
                                    <td>Jakarta</td>
                                    <td>
                                      <a href="" class=""><img src="assets/images/icon/cv-icon.svg"></a>
                                      <a href="" class="mx-2"><img src="assets/images/icon/blue-phone-icon.svg"></a>
                                      <a href="" class=""><img src="assets/images/icon/option-icon.svg"></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td><input type="checkbox" name="" id=""></td>
                                    <td><div class="bg-grey rounded-pill fw-600 text-black initial-name">N</div></td>
                                    <td>Namaku Panjang Sekali Z</td>
                                    <td>Namaku.Panjang@gmail.com</td>
                                    <td>17 years</td>
                                    <td>Chief Design Officer</td>
                                    <td class="text-center percentage-image"><img src="assets/images/90-circle.png"></td>
                                    <td class="text-warning">Review</td>
                                    <td>Jakarta</td>
                                    <td>
                                      <a href="" class=""><img src="assets/images/icon/cv-icon.svg"></a>
                                      <a href="" class="mx-2"><img src="assets/images/icon/blue-phone-icon.svg"></a>
                                      <a href="" class=""><img src="assets/images/icon/option-icon.svg"></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td><input type="checkbox" name="" id=""></td>
                                    <td><div class="bg-grey rounded-pill fw-600 text-black initial-name">N</div></td>
                                    <td>Namaku Panjang Sekali Z2</td>
                                    <td>Namaku.Panjang@gmail.com</td>
                                    <td>17 years</td>
                                    <td>Chief Design Officer</td>
                                    <td class="text-center percentage-image"><img src="assets/images/90-circle.png"></td>
                                    <td class="text-warning">Review</td>
                                    <td>Jakarta</td>
                                    <td>
                                      <a href="" class=""><img src="assets/images/icon/cv-icon.svg"></a>
                                      <a href="" class="mx-2"><img src="assets/images/icon/blue-phone-icon.svg"></a>
                                      <a href="" class=""><img src="assets/images/icon/option-icon.svg"></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td><input type="checkbox" name="" id=""></td>
                                    <td><div class="bg-grey rounded-pill fw-600 text-black initial-name">N</div></td>
                                    <td>Namaku Panjang Sekali Z1</td>
                                    <td>Namaku.Panjang@gmail.com</td>
                                    <td>17 years</td>
                                    <td>Chief Design Officer</td>
                                    <td class="text-center percentage-image"><img src="assets/images/90-circle.png"></td>
                                    <td class="text-warning">Review</td>
                                    <td>Jakarta</td>
                                    <td>
                                      <a href="" class=""><img src="assets/images/icon/cv-icon.svg"></a>
                                      <a href="" class="mx-2"><img src="assets/images/icon/blue-phone-icon.svg"></a>
                                      <a href="" class=""><img src="assets/images/icon/option-icon.svg"></a>
                                    </td>
                                </tr>
                              </tbody>
                            </table>
    
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
    <script src="assets/js/todolist.js"></script>
    <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.7/js/dataTables.bootstrap5.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
    <!-- End custom js for this page -->
    <script>
      $(document).ready(function(){
        
        new DataTable('#table1mactingcandidates',{
          scrollX: true,
          "dom": 'rtip',
          columnDefs: [
              {
                  target: 9,
                  visible: false,
                  searchable: false
              }
          ]
        });
        var table1mactingcandidates = $('#table1mactingcandidates').DataTable();
        $( "#matchingcandidates-tab" ).on( "click", function () {
          setTimeout(function () {
            table1mactingcandidates.draw();
          }, 200);
        } );
        new DataTable('#table2mactingcandidates',{
          "dom": 'rtip',
          "ordering": false,
        });


        new DataTable('#table1allcandidates',{
          scrollX: true,
          "dom": 'rtip',
          columnDefs: [
              {
                  target: 9,
                  visible: false,
                  searchable: false
              }
          ]
        });
        var table1allcandidates = $('#table1allcandidates').DataTable();
        $( "#allcandidates-tab" ).on( "click", function () {
          setTimeout(function () {
            table1allcandidates.draw();
          }, 200);
        } );
        new DataTable('#table2allcandidates',{
          "dom": 'rtip',
          "ordering": false,
        });

        new DataTable('#table1',{
          scrollX: true,
          "dom": 'rtip',
          columnDefs: [
              {
                  target: 9,
                  visible: false,
                  searchable: false
              }
          ]
        });
        
        new DataTable('#table2',{
          "dom": 'rtip',
          "ordering": false,
        });
        var table1 = $('#table1').DataTable();
        var table2 = $('#table2').DataTable();
        var table1mactingcandidates = $('#table1mactingcandidates').DataTable();
        var table2mactingcandidates = $('#table2mactingcandidates').DataTable();
        var table1allcandidates = $('#table1allcandidates').DataTable();
        var table2allcandidates = $('#table2allcandidates').DataTable();

        // Event listener for pagination change on table1
        $('#table1').on('page.dt', function() {
          // Get the current page index of table1
          var currentPage = table1.page();

          // Go to the same page on table2
          table2.page(currentPage).draw(false);
        });
        // Event listener for sorting change on table1
        $('#table1').on('order.dt', function() {
          // Get the current sorting information from table1
          var order = table1.order();

          // Apply the same sorting to table2
          table2.order(order).draw();
        });
        
        // Event listener for pagination change on table1
        $('#table1mactingcandidates').on('page.dt', function() {
          // Get the current page index of table1
          var currentPage = table1mactingcandidates.page();

          // Go to the same page on table2
          table2mactingcandidates.page(currentPage).draw(false);
        });
        // Event listener for sorting change on table1
        $('#table1mactingcandidates').on('order.dt', function() {
          // Get the current sorting information from table1
          var order = table1mactingcandidates.order();

          // Apply the same sorting to table2
          table2mactingcandidates.order(order).draw();
        });
        
        
        // Event listener for pagination change on table1
        $('#table1allcandidates').on('page.dt', function() {
          // Get the current page index of table1
          var currentPage = table1allcandidates.page();

          // Go to the same page on table2
          table2allcandidates.page(currentPage).draw(false);
        });
        // Event listener for sorting change on table1
        $('#table1allcandidates').on('order.dt', function() {
          // Get the current sorting information from table1
          var order = table1allcandidates.order();

          // Apply the same sorting to table2
          table2allcandidates.order(order).draw();
        });

        const sliderEl = document.querySelector("#range")
        const sliderValue = document.querySelector(".value")

        sliderEl.addEventListener("input", (event) => {
          const tempSliderValue = event.target.value; 
          
          sliderValue.textContent = tempSliderValue + ' years';
          
          const progress = (tempSliderValue / sliderEl.max) * 100;
          const thumbWidth = parseFloat(getComputedStyle(sliderEl).getPropertyValue('--thumb-width')) || 20; // Get thumb width
          const thumbPosition = (tempSliderValue / (sliderEl.max - sliderEl.min)) * sliderEl.clientWidth; // Calculate thumb position
          sliderEl.style.background = `linear-gradient(to right, #075256 ${progress}%, #ccc ${progress}%)`;
          sliderValue.style.left = `calc(${thumbPosition}px)`;
        })


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