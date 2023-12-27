
<!doctype html>
<html lang="en" data-bs-theme="auto">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="Poralia">
        <meta name="generator" content="Poralia">
        <title>Lowongan - Ini Karir</title>

        <!-- Video.js base CSS -->
        <link rel="stylesheet" href="https://unpkg.com/video.js@7/dist/video-js.min.css" />

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,400;0,600;0,800;1,400;1,600;1,800&family=Poppins:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">

        <!-- Stylesheets -->
        <link rel="stylesheet" href="./assets/vendor/bootstrap/css/bootstrap.min.css" />
        <link rel="stylesheet" href="./assets/vendor/bootstrap/css/bootstrap-utilities.min.css" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
        <link rel="stylesheet" href="https://aafarma.id/js/tokeninput/token-input.css" type="text/css" />
        <link rel="stylesheet" href="https://aafarma.id/js/tokeninput/token-input-facebook.css" type="text/css" />
        <link rel="stylesheet" href="./assets/css/style.css?v=11" />


        <!-- Favicons -->
        <link rel="apple-touch-icon" sizes="180x180" href="./assets/favicons/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="./assets/favicons/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="./assets/favicons/favicon-16x16.png">
        <link rel="manifest" href="./assets/favicons/site.webmanifest">
        <meta name="msapplication-TileColor" content="#da532c">
        <meta name="theme-color" content="#ffffff">
    </head>

    <body class="bg-grey">
    <div class="d-flex vh-100 align-items-center">
        <div class="form-block px-3 ps-md-5 col-12 col-sm-6 col-md-4">
        <a class="navbar-brand" href="#">
            <img src="./assets/images/logo.png" alt="Ini Karir" />
        </a>
        <h1>Welcome</h1>
        <p class="fw-500 mb-4">Login to access your IniKarir account</p>
        <form action="" class="login-form">  
            <div class="form-group mb-3">
                <label>Email</label>
                <input type="text" class="form-control" name="nohp" placeholder="" required="">
            </div>
            <div class="form-group mb-3 position-relative">
                <label>Password</label>
                <input id="password-field" type="password" class="form-control" name="password" placeholder="Password" required="">
                <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
            </div>
            <button class="btn btn-primary btn-sm w-100 mb-3" type="submit"><strong>Masuk Sekarang</strong></button>
            <p class="mb-2 text-center">Belum punya akun? <a href="register.php" class="ms-2">Daftar Sekarang</a></p>
            <p class=" text-center"><a href="#" class="">Lupa Password</a></p>
        </form>
        </div>
        <div class="image-form overflow-hidden">
        <img src="./assets/images/hero-login.jpg" class="form-image vh-100">
        </div>
    </div>


        <!-- Video.js -->
        <script src="https://vjs.zencdn.net/8.5.2/video.min.js"></script>
        
        <!-- JavaScripts -->
        <script src="./assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
        <script src="./assets/vendor/fullpage/fullpage.min.js"></script>
        <script src="./assets/js/functions.js"></script>
        <script>
            
            $(document).ready(function() {
            $(".toggle-password").click(function() {

            $(this).toggleClass("fa-eye fa-eye-slash");
            var input = $($(this).attr("toggle"));
            if (input.attr("type") == "password") {
                input.attr("type", "text");
            } else {
                input.attr("type", "password");
            }
            });
            })
            $(document).ready(function() {
                $(".button-grid-thumbnail").click(function () {
                    $(".button-list-thumbnail").removeClass("button-active");
                    $(".hero-loker-list__wrapper").addClass("grid-thumbnail");
                    $(this).addClass("button-active");   
                });
                $(".button-list-thumbnail").click(function () {
                    $(".button-grid-thumbnail").removeClass("button-active");
                    $(".hero-loker-list__wrapper").removeClass("grid-thumbnail");
                    $(this).addClass("button-active");   
                });
            });
        
            // Get the tags and input elements from the DOM 
            const tags = document.getElementById('tags'); 
            const input = document.getElementById('input-tag'); 
    
            // Add an event listener for keydown on the input element 
            input.addEventListener('keydown', function (event) { 
    
                // Check if the key pressed is 'Enter' 
                if (event.key === 'Enter') { 
                
                    // Prevent the default action of the keypress 
                    // event (submitting the form) 
                    event.preventDefault(); 
                
                    // Create a new list item element for the tag 
                    const tag = document.createElement('li'); 
                
                    // Get the trimmed value of the input element 
                    const tagContent = input.value.trim(); 
                
                    // If the trimmed value is not an empty string 
                    if (tagContent !== '') { 
                
                        // Set the text content of the tag to  
                        // the trimmed value 
                        tag.innerText = tagContent; 
    
                        // Add a delete button to the tag 
                        tag.innerHTML += '<button class="delete-button"><img src="assets/images/close-icon.png"></button>'; 
                        
                        // Append the tag to the tags list 
                        tags.appendChild(tag); 
                        
                        // Clear the input element's value 
                        input.value = ''; 
                    } 
                } 
            }); 
    
            // Add an event listener for click on the tags list 
            tags.addEventListener('click', function (event) { 
    
                // If the clicked element has the class 'delete-button' 
                if (event.target.classList.contains('delete-button')) { 
                
                    // Remove the parent element (the tag) 
                    event.target.parentNode.remove(); 
                } 
            }); 

            
            $(function(){
                $(".suggest-delete").on("click", function(e) {
                    $(this).parent().remove();
                });
                $(".all-delete").on("click", function(e) {
                    $("#tags li").remove();
                });
            });
        </script> 
    </body>
</html>
