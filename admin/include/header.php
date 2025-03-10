<?php 
    session_start();
    if( empty($_SESSION["email"]) ){
        header("Location: login.php?login-first");
    }

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Tin tức-Quản trị viên</title>
    
    <link href="./resorce/css/style.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.slim.min.js"></script>
    <!-- <script src="ckeditor/ckeditor.js"></script> -->

    <style> 
     .hidden {
         display: none;
     }
    </style>

</head>

<body>

    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="loader">
            <svg class="circular" viewBox="25 25 50 50">
                <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="3" stroke-miterlimit="10" />
            </svg>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->

     





    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">

        <!--**********************************
            Nav header start
        <!-- ***********************************-->
        <div class="nav-header">

             <div class="brand-logo">
             <!-- <div>hii</div> -->
                <a >
                    <span class="brand-title">
    
                    </span>
                </a>
            </div> 
        </div>
        <!--**********************************
            Nav header end
        ***********************************-->

        <!--**********************************
            Header start
        ***********************************-->
        <div class="header">    
            <div class="header-content clearfix">
                
                <div class="nav-control">
                    <div class="hamburger">
                        <span class="toggle-icon"><i class="icon-menu"></i></span>
                    </div>
                </div>
               <div class="text-center">
                <h2 class="pt-3"> Tin Tức </h2>
                 </div>
                
            </div>
        </div>
        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->

        <!--**********************************
            Sidebar start
        ***********************************-->
        <div class="nk-sidebar">           
            <div class="nk-nav-scroll">
                <ul class="metismenu" id="menu">
                   <br> <br>       
                    <li>
                        <a href="./index.php"  >
                            <i class="icon-home menu-icon"></i><span class="nav-text">Bảng điều khiển</span>
                        </a>
                    </li>
                    <li>
                    <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <i class="fa fa-list-alt menu-icon"></i><span class="nav-text">Quản lí danh mục</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="./add-category.php"> <i class="icon-plus menu-icon"></i>Thêm danh mục</a></li>
                            <li><a href="./manage-category.php"><i class="fa fa-cog menu-icon"></i>Sửa danh mục</a></li>
                        </ul>
                    </li>
                    <li>
                    <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <i class="fa fa-pencil-square-o menu-icon"></i><span class="nav-text">Quản lí mô tả</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="./add-post-desc.php"> <i class="icon-plus menu-icon"></i>Thêm mô tả bài đăng</a></li>
                            <li><a href="./manage-post-desc.php"><i class="fa fa-cog menu-icon"></i>Sửa mô tả bài đăng</a></li>
                        </ul>
                    </li>

                    <li>
                    <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <i class="fa fa-pencil-square-o menu-icon"></i><span class="nav-text">Quản lí bài viết</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="./add-post-details.php"><i class="icon-plus menu-icon"></i>Thêm bài đăng</a></li>
                            <li><a href="./manage-post-details.php"><i class="fa fa-cog menu-icon"></i>Chỉnh sửa  bài đăng</a></li>

                        </ul>
                      </li>

                     

                    <li>
                        <a href="./about-us.php" >
                            <i class="fa fa-users menu-icon"></i><span class="nav-text">Chỉnh sửa thông tin giới thiệu</span>
                        </a>
                    </li>
                    <li>
                        <a href="./contact-us.php" >
                            <i class="fa fa-address-book menu-icon"></i><span class="nav-text">Liên hệ chúng tôi</span>
                        </a>
                    </li>
    
                    <li>
                        <a href="./logout.php" >
                            <i class="icon-logout menu-icon"></i><span class="nav-text">Thoát</span>
                        </a>
                    </li>
                    <li>
                        <a href="./profile.php"  >
                            <i class="fa fa-user menu-icon"></i><span class="nav-text">Hồ sơ</span>
                        </a>
                    </li>                 
                </ul>
            </div>
        </div>
        <!--**********************************
            Sidebar end
        ***********************************-->

        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">



     
        <div class="modal fade" id="showModal" data-backdrop="static" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div id="modalHead" class="modal-header">
                    <button id="modal_cross_btn" type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span  aria-hidden="true">&times;</span>
                </button>
                </div>
                <div class="modal-body">
                    <p id="addMsg" class="text-center font-weight-bold"></p>
                </div>
                <div class="modal-footer ">
                    <div class="mx-auto">
                        <a type="button" id="linkBtn" href="#" class="btn btn-primary" >Thêm chi phí trong ngày</a>
                        <a type="button" id="closeBtn" href="#" data-dismiss="modal" class="btn btn-primary">Đóng</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
            
            <!-- row -->

            <div class="container-fluid">

            