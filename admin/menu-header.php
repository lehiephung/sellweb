<?php
include'connect.php'; 

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <title>Page Title</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link  rel="stylesheet" type="text/css" href="css/style-login.css">
       <link  rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
  </head>
<body>
  <style>
    
.navbar-nav{
      display: flex;
      align-items: flex-start;
    }
.bg-white {
    background-color: #fff!important;
    width: 150%;
}
.d-flex {
        display: flex!important;
    width: auto;
    margin: -30 4;
    border-color: #fff;
}
.logo{
  vertical-align: middle;
    border-radius: 10px;
    width: 350;
    height: 100;
}/* Thêm các quy tắc CSS sau vào stylesheet của bạn */
.navbar-nav li {
    margin-right: 50px; /* Tăng khoảng cách bên phải giữa các mục */
}

.navbar-nav li:last-child {
    margin-right: 0; /* Loại bỏ khoảng cách bên phải của mục cuối cùng */
}

/* Nếu bạn muốn thêm khoảng cách giữa các mục khi nó ở trong dropdown */
.dropdown-menu a {
    margin: 5px 0;
}

  </style>
   
<div class="container">
    <div class="menu">
        
        <nav class="navbar navbar-expand-lg navbar-light bg-white">
            <div class="container-fluid">
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarScroll">
                <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="home.php">Home</a>
                  </li>
                </ul>
              </div>
            </div>
          </nav>
        </div>

      
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>




    
    </body>
 </html>