<?php
header("content-type:text/html; charset=utf-8");

require("config.php");
$link = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
$sql = "SELECT * FROM book";
$result = mysqli_query($link, $sql);


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- for font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,400;0,700;1,100;1,300;1,400&family=Noto+Sans+TC:wght@100..900&display=swap"
        rel="stylesheet">
    <!-- for fontawesome icon -->
    <script src="https://kit.fontawesome.com/5b778b23e2.js" crossorigin="anonymous"></script>
    <!-- for bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <!-- for bootstrap-icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="icon" href="./icon/favicon.ico.ico" type="image/x-icon" />
    <!-- <link rel="shortcut icon" href="./favicon.ico.ico" type="image/x-icon" /> -->

    <title>COMICS</title>
    <style>
        * {
            box-sizing: border-box;
            font-family: "Lato", "Noto Sans TC", sans-serif;
            margin: 0;
            /* padding: 0; */
            /* background-color: #f9f9f9; */

            /* min-height: 75rem;
            padding-top: 4.5rem; */
        }

        body {
            background-color: #ffff;
            min-height: 75rem;
            padding-top: 3.5rem;
        }



        /* Carousel base class */
        .carousel {
            margin-bottom: 4rem;
        }

        /* Since positioning the image, we need to help out the caption */
        .carousel-caption {
            bottom: 3rem;
            z-index: 10;
        }

        /* Declare heights because of positioning of img element */
        .carousel-item {
            height: 32rem;
        }

        .divider {
            font-size: 30px;
            display: flex;
            align-items: center;
            width: 100%;
            padding: 5px 20px;;
        }


        .divider::after {
            flex: 1;
            content: '';
            padding: 1.5px;
            background-color: #B8B8B8;
            /* margin: 5px 20px; */
            margin: auto;


        }

        .card {
            border-width: 0px;
        }


        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }


        /* RESPONSIVE CSS
-------------------------------------------------- */
        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
            /* .divider{
            display: none;
        } */
        }

        .featurette-heading {
            letter-spacing: -.05rem;
        }
        



        @media (min-width: 40em) {

            /* Bump up size of carousel content */
            .carousel-caption p {
                margin-bottom: 1.25rem;
                font-size: 1.25rem;
                line-height: 1.4;
            }

            .featurette-heading {
                font-size: 50px;
            }
           
        }

        @media (min-width: 62em) {
            .featurette-heading {
                margin-top: 7rem;
            }
        }
    </style>
</head>

<body>
    <div></div>

    <!-- heading -->

    <nav class="navbar navbar-expand-lg navbar-dark fixed-top " aria-label="Offcanvas navbar large" style="background-color: #323F3E;">
        <div class="container-fluid px-5">
            <a class="navbar-brand fw-bolder fs-3" href="#">
                COMICS
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar2"
                aria-controls="offcanvasNavbar2">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="offcanvas offcanvas-end text-bg-dark" tabindex="-1" id="offcanvasNavbar2"
                aria-labelledby="offcanvasNavbar2Label">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasNavbar2Label">Offcanvas</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas"
                        aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">

                    <form class="d-flex   m-auto " role="search">
                        <input class="form-control form-control-sm me-1" type="search" placeholder="Search"
                            aria-label="Search">

                        <button class="btn btn-outline-light btn-sm" type="submit">Search</button>
                    </form>

                    <ul class="navbar-nav ">
                        <li class="nav-item dropdown ms-2">
                            <a class="nav-link  bi bi-cart text-light  fs-4" href="#" >
                            </a>
                            <!-- <a class="nav-link dropdown-toggle bi bi-cart text-light " href="#" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                            </a> -->
                            <!-- <ul class="dropdown-menu pe-5">
                                <li><a class="dropdown-item" href="#">Action</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                            </ul> -->
                        </li>
                        <li class="nav-item ms-2">
                            <a href="#" class="nav-link active bi bi-heart-fill text-light fs-4" aria-current="page"
                                href="#"></a>
                        </li>
                        <li class="nav-item ms-2">
                            <a class="nav-link  bi bi-person-circle fs-4" href="#"></a>
                        </li>

                    </ul>

                </div>
            </div>
        </div>
    </nav>


    <!-- 目錄 -->
    <nav class="navbar navbar-expand-lg navbar-dark " aria-label="Eighth navbar example " style="background-color: #323F3E;">
        <div class="container mx-auto ">
            <div class="collapse navbar-collapse " id="navbarsExample07">
                <ul class="navbar-nav mx-auto mb-0 mb-lg-0 ">

                    <li class="nav-item dropdown mx-auto">
                        <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown"
                            aria-expanded="false">全站分類</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown mx-auto">
                        <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown"
                            aria-expanded="false">特價活動</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown mx-auto">
                        <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown"
                            aria-expanded="false">新書上架</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown mx-auto">
                        <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown"
                            aria-expanded="false">人氣排行</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li>
                </ul>

            </div>
        </div>
    </nav>

    <!-- Slide -->
    <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true"
                aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg"
                    aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
                    <rect width="100%" height="100%" fill="#777" />
                </svg>

                <div class="container">
                    <div class="carousel-caption text-start">
                        <h1>Example headline.</h1>
                        <p>Some representative placeholder content for the first slide of the carousel.</p>
                        <p><a class="btn btn-lg btn-primary" href="#">Sign up today</a></p>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg"
                    aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
                    <rect width="100%" height="100%" fill="#777" />
                </svg>

                <div class="container">
                    <div class="carousel-caption">
                        <h1>Another example headline.</h1>
                        <p>Some representative placeholder content for the second slide of the carousel.</p>
                        <p><a class="btn btn-lg btn-primary" href="#">Learn more</a></p>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg"
                    aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
                    <rect width="100%" height="100%" fill="#777" />
                </svg>

                <div class="container">
                    <div class="carousel-caption text-end">
                        <h1>One more for good measure.</h1>
                        <p>Some representative placeholder content for the third slide of this carousel.</p>
                        <p><a class="btn btn-lg btn-primary" href="#">Browse gallery</a></p>
                    </div>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <!-- title -->
    <div class="container d-flex  justify-content-between my-5">

        <h4 class="text-dark text-nowrap fs-2 fw-bolder">即將出版 Coming soon</h4>
        <div class="divider">
        </div>
        <button class="btn btn-outline-secondary btn-sm">more</button>
    </div>

    <!-- Card_small -->
    <div class="container ">
        <div class="row ">

        <?php while($row = mysqli_fetch_assoc($result)) : ?>
            <div class="col-sm-0 col-md-2 col-lg-2 mt-4">

                <div class="card">
                    <img src="./image/<?= $row["Img_ID"] ?>" class="rounded-4 img-fluid" alt="...">
                    <div class="card-body">
                        <p class="card-title text-start fw-bold text-nowrap"><?= $row["Book_Title"] ?></p>
                        <p class="card-text text-start fs-6"><small class="text-muted"><?= $row["Book_Author"] ?></small>

                        </p>
                    </div>
                    <span class="d-flex justify-content-between">
                        <a href="" class="bi bi-heart text-dark fs-4"></a>
                        <a href="" class=" bi bi-cart text-dark  fs-4"></a>
                    </span>
                </div>
            </div>

            <?php endwhile ?>



            <!-- <div class="col-sm-0 col-md-2 col-lg-2 mt-4">
                <div class="card">
                    <img src="https://dummyimage.com/148x210/000/fff&text=148x210" class="rounded-4 img-fluid" alt="..."
                        class="">
                    <div class="card-body">
                        <p class="card-title text-start fw-bold">火影忍者</p>
                        <p class="card-text text-start fs-6"><small class="text-muted">岸本齊史</small>

                        </p>
                    </div>
                    <span class="d-flex justify-content-between">
                        <a href="" class="bi bi-heart text-dark fs-4"></a>
                        <a href="" class=" bi bi-cart text-dark  fs-4"></a>
                    </span>
                </div>
            </div>

            <div class="col-sm-0 col-md-2 col-lg-2 mt-4">
                <div class="card">
                    <img src="https://dummyimage.com/148x210/000/fff&text=148x210" class="rounded-4 img-fluid" alt="..."
                        class="">
                    <div class="card-body">
                        <p class="card-title text-start fw-bold">火影忍者</p>
                        <p class="card-text text-start fs-6"><small class="text-muted">岸本齊史</small>

                        </p>
                    </div>
                    <span class="d-flex justify-content-between">
                        <a href="" class="bi bi-heart text-dark fs-4"></a>
                        <a href="" class=" bi bi-cart text-dark  fs-4"></a>
                    </span>
                </div>
            </div>

            <div class="col-sm-0 col-md-2 col-lg-2 mt-4">
                <div class="card">
                    <img src="https://dummyimage.com/148x210/000/fff&text=148x210" class="rounded-4 img-fluid" alt="..."
                        class="">
                    <div class="card-body">
                        <p class="card-title text-start fw-bold">火影忍者</p>
                        <p class="card-text text-start fs-6"><small class="text-muted">岸本齊史</small>

                        </p>
                    </div>
                    <span class="d-flex justify-content-between">
                        <a href="" class="bi bi-heart text-dark fs-4"></a>
                        <a href="" class=" bi bi-cart text-dark  fs-4"></a>
                    </span>
                </div>
            </div>

            <div class="col-sm-0 col-md-2 col-lg-2 mt-4">
                <div class="card">
                    <img src="https://dummyimage.com/148x210/000/fff&text=148x210" class="rounded-4 img-fluid" alt="..."
                        class="">
                    <div class="card-body">
                        <p class="card-title text-start fw-bold">火影忍者</p>
                        <p class="card-text text-start fs-6"><small class="text-muted">岸本齊史</small>

                        </p>
                    </div>
                    <span class="d-flex justify-content-between">
                        <a href="" class="bi bi-heart text-dark fs-4"></a>
                        <a href="" class=" bi bi-cart text-dark  fs-4"></a>
                    </span>
                </div>
            </div>

            <div class="col-sm-0 col-md-2 col-lg-2 mt-4">
                <div class="card">
                    <img src="https://dummyimage.com/148x210/000/fff&text=148x210" class="rounded-4 img-fluid" alt="..."
                        class="">
                    <div class="card-body">
                        <p class="card-title text-start fw-bold">火影忍者</p>
                        <p class="card-text text-start fs-6"><small class="text-muted">岸本齊史</small>

                        </p>
                    </div>
                    <span class="d-flex justify-content-between">
                        <a href="" class="bi bi-heart text-dark fs-4"></a>
                        <a href="" class=" bi bi-cart text-dark  fs-4"></a>
                    </span>
                </div>
            </div> -->
        </div>
    </div>

    <!-- title -->
    <div class="container d-flex  justify-content-between my-5">

        <h4 class="text-dark text-nowrap fs-2 fw-bolder">人氣排行 Popular comics</h4>
        <div class="divider">
        </div>
        <button class="btn btn-outline-secondary btn-sm">more</button>
    </div>


    <!-- Card_YOKO -->
    <div class="container  ">
        <div class="row ">
            <div class="col-md-4 ">
                <div class="card mb-3">
                    <div class="row g-0">
                        <div class="col-md-6">
                            <img src="https://dummyimage.com/148x210/000/fff&text=148x210" class="img-fluid rounded-4 "
                                alt="...">
                        </div>
                        <div class="col-md-6 d-flex flex-column justify-content-between ">
                            <div class="card-body">
                                <p class="card-title text-start fw-bold text-nowrap">葬送的芙莉蓮</h5><br>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                <p class="card-text text-start"><small class="text-muted">山田鐘人 阿部司</small></p>
                            </div>
                            <span class="card-body d-flex justify-content-between align-items-end  ">
                                <span>
                                    <a href="" class="bi bi-heart text-dark fs-4"></a>
                                    <a href="" class=" bi bi-cart text-dark fs-4  "></a>
                                </span>

                                <button class="mybtn" type="button" style="background-color: #d45542 ; border-radius: 50px; color: #FCFBFA; height: 37px; width: 90px;border-width: 0px; ">試讀</button>
                            </span>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-md-4 ">
                <div class="card mb-3">
                    <div class="row g-0">
                        <div class="col-md-6">
                            <img src="https://dummyimage.com/148x210/000/fff&text=148x210" class="img-fluid rounded-4 "
                                alt="...">
                        </div>
                        <div class="col-md-6 d-flex flex-column justify-content-between ">
                            <div class="card-body">
                                <p class="card-title text-start fw-bold text-nowrap">葬送的芙莉蓮</h5><br>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                <p class="card-text text-start"><small class="text-muted">山田鐘人 阿部司</small></p>
                            </div>
                            <span class="card-body d-flex justify-content-between align-items-end  ">
                                <span>
                                    <a href="" class="bi bi-heart text-dark fs-4"></a>
                                    <a href="" class=" bi bi-cart text-dark fs-4  "></a>
                                </span>

                                <a href="#" class="btn btn-outline-secondary btn-sm">試讀</a>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 ">
                <div class="card mb-3">
                    <div class="row g-0">
                        <div class="col-md-6">
                            <img src="https://dummyimage.com/148x210/000/fff&text=148x210" class="img-fluid rounded-4 "
                                alt="...">
                        </div>
                        <div class="col-md-6 d-flex flex-column justify-content-between ">
                            <div class="card-body">
                                <p class="card-title text-start fw-bold text-nowrap">葬送的芙莉蓮</h5><br>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                <p class="card-text text-start"><small class="text-muted">山田鐘人 阿部司</small></p>
                            </div>
                            <span class="card-body d-flex justify-content-between align-items-end  ">
                                <span>
                                    <a href="" class="bi bi-heart text-dark fs-4"></a>
                                    <a href="" class=" bi bi-cart text-dark fs-4  "></a>
                                </span>

                                <a href="#" class="btn btn-outline-secondary btn-sm">試讀</a>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>


    <!-- CM -->
    <div class="container  ">
        <div class="p-5 mt-5 bg-light rounded-4 " style="background-image: url(https://plus.unsplash.com/premium_photo-1661371634490-66741daf55c9?q=80&w=2670&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D);background-position: center;
        background-repeat: no-repeat;
        background-size: cover;">
            <div class="container-fluid py-5">
                <!-- <h1 class="display-5 fw-bold">Custom jumbotron</h1> -->
                <p class="col-md-8 fs-3 text-light w-50 text-center">熱銷漫畫限時折扣，立即享受超值優惠，不容錯過的數位閱讀盛宴！</p>
                <!-- <button class="btn btn-primary btn-lg" type="button">Example button</button> -->
            </div>
        </div>
    </div>

    <!-- title -->
    <div class="container d-flex  justify-content-between mt-5 mb-1">

        <h4 class="text-dark text-nowrap fs-2 fw-bolder">熱門推薦 Recommendation</h4>
        <div class="divider">
        </div>
        <button class="mybtn" type="button" style="background-color: #D45542 ; border-radius: 50px; color: #FCFBFA; height: 37px; border-width: 0px; width: 10%;">more</button>
    </div>

    <!-- Card_large -->
    <div class="container my-4 ">
        <div class="row ">
            <div class="col-sm-12 col-md-6 col-lg-3 mt-4">
                <div class="card">
                    <img src="https://dummyimage.com/148x210/000/fff&text=148x210" class="rounded-4" alt="..." class="">
                    <div class="card-body">
                        <h5 class="card-title">鋼之鍊金術師</h5>
                        <p class="card-text">
                            荒川 弘
                        </p>
                    </div>
                    <span class="d-flex justify-content-between align-items-center">
                        <span>
                            <a href="" class="bi bi-heart text-dark fs-4"></a>
                            <a href="" class=" bi bi-cart text-dark fs-4 ms-2 "></a>
                        </span>

                        <button class=""style="background-color: #D45542 ; border-radius: 50px; color: #FCFBFA; height: 37px; width: 90px; border-width: 0px;">試讀</button>
                    </span>
                </div>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-3 mt-4">
                <div class="card">
                    <img src="https://dummyimage.com/148x210/000/fff&text=148x210" class="rounded-4" alt="..." class="">
                    <div class="card-body">
                        <h5 class="card-title">鋼之鍊金術師</h5>
                        <p class="card-text">
                            荒川 弘
                        </p>
                    </div>
                    <span class="d-flex justify-content-between align-items-center">
                        <span>
                            <a href="" class="bi bi-heart text-dark fs-4"></a>
                            <a href="" class=" bi bi-cart text-dark fs-4 ms-2 "></a>
                        </span>

                        <a href="#" class="btn btn-outline-secondary btn-sm">試讀</a>
                    </span>
                </div>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-3 mt-4">
                <div class="card">
                    <img src="https://dummyimage.com/148x210/000/fff&text=148x210" class="rounded-4" alt="..." class="">
                    <div class="card-body">
                        <h5 class="card-title">鋼之鍊金術師</h5>
                        <p class="card-text">
                            荒川 弘
                        </p>
                    </div>
                    <span class="d-flex justify-content-between align-items-center">
                        <span>
                            <a href="" class="bi bi-heart text-dark fs-4"></a>
                            <a href="" class=" bi bi-cart text-dark fs-4 ms-2 "></a>
                        </span>

                        <a href="#" class="btn btn-outline-secondary btn-sm">試讀</a>
                    </span>
                </div>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-3 mt-4">
                <div class="card">
                    <img src="https://dummyimage.com/148x210/000/fff&text=148x210" class="rounded-4" alt="..." class="">
                    <div class="card-body">
                        <h5 class="card-title">鋼之鍊金術師</h5>
                        <p class="card-text">
                            荒川 弘
                        </p>
                    </div>
                    <span class="d-flex justify-content-between align-items-center">
                        <span>
                            <a href="" class="bi bi-heart text-dark fs-4"></a>
                            <a href="" class=" bi bi-cart text-dark fs-4 ms-2 "></a>
                        </span>

                        <a href="#" class="btn btn-outline-secondary btn-sm">試讀</a>
                    </span>
                </div>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-3 mt-4">
                <div class="card">
                    <img src="https://dummyimage.com/148x210/000/fff&text=148x210" class="rounded-4" alt="..." class="">
                    <div class="card-body">
                        <h5 class="card-title">鋼之鍊金術師</h5>
                        <p class="card-text">
                            荒川 弘
                        </p>
                    </div>
                    <span class="d-flex justify-content-between align-items-center">
                        <span>
                            <a href="" class="bi bi-heart text-dark fs-4"></a>
                            <a href="" class=" bi bi-cart text-dark fs-4 ms-2 "></a>
                        </span>

                        <a href="#" class="btn btn-outline-secondary btn-sm">試讀</a>
                    </span>
                </div>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-3 mt-4">
                <div class="card">
                    <img src="https://dummyimage.com/148x210/000/fff&text=148x210" class="rounded-4" alt="..." class="">
                    <div class="card-body">
                        <h5 class="card-title">鋼之鍊金術師</h5>
                        <p class="card-text">
                            荒川 弘
                        </p>
                    </div>
                    <span class="d-flex justify-content-between align-items-center">
                        <span>
                            <a href="" class="bi bi-heart text-dark fs-4"></a>
                            <a href="" class=" bi bi-cart text-dark fs-4 ms-2 "></a>
                        </span>

                        <a href="#" class="btn btn-outline-secondary btn-sm">試讀</a>
                    </span>
                </div>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-3 mt-4">
                <div class="card">
                    <img src="https://dummyimage.com/148x210/000/fff&text=148x210" class="rounded-4" alt="..." class="">
                    <div class="card-body">
                        <h5 class="card-title">鋼之鍊金術師</h5>
                        <p class="card-text">
                            荒川 弘
                        </p>
                    </div>
                    <span class="d-flex justify-content-between align-items-center">
                        <span>
                            <a href="" class="bi bi-heart text-dark fs-4"></a>
                            <a href="" class=" bi bi-cart text-dark fs-4 ms-2 "></a>
                        </span>

                        <a href="#" class="btn btn-outline-secondary btn-sm">試讀</a>
                    </span>
                </div>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-3 mt-4">
                <div class="card">
                    <img src="https://dummyimage.com/148x210/000/fff&text=148x210" class="rounded-4" alt="..." class="">
                    <div class="card-body">
                        <h5 class="card-title">鋼之鍊金術師</h5>
                        <p class="card-text">
                            荒川 弘
                        </p>
                    </div>
                    <span class="d-flex justify-content-between align-items-center">
                        <span>
                            <a href="" class="bi bi-heart text-dark fs-4"></a>
                            <a href="" class=" bi bi-cart text-dark fs-4 ms-2 "></a>
                        </span>

                        <a href="#" class="btn btn-outline-secondary btn-sm">試讀</a>
                    </span>
                </div>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-3 mt-4">
                <div class="card">
                    <img src="https://dummyimage.com/148x210/000/fff&text=148x210" class="rounded-4" alt="..." class="">
                    <div class="card-body">
                        <h5 class="card-title">鋼之鍊金術師</h5>
                        <p class="card-text">
                            荒川 弘
                        </p>
                    </div>
                    <span class="d-flex justify-content-between align-items-center">
                        <span>
                            <a href="" class="bi bi-heart text-dark fs-4"></a>
                            <a href="" class=" bi bi-cart text-dark fs-4 ms-2 "></a>
                        </span>

                        <a href="#" class="btn btn-outline-secondary btn-sm">試讀</a>
                    </span>
                </div>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-3 mt-4">
                <div class="card">
                    <img src="https://dummyimage.com/148x210/000/fff&text=148x210" class="rounded-4" alt="..." class="">
                    <div class="card-body">
                        <h5 class="card-title">鋼之鍊金術師</h5>
                        <p class="card-text">
                            荒川 弘
                        </p>
                    </div>
                    <span class="d-flex justify-content-between align-items-center">
                        <span>
                            <a href="" class="bi bi-heart text-dark fs-4"></a>
                            <a href="" class=" bi bi-cart text-dark fs-4 ms-2 "></a>
                        </span>

                        <a href="#" class="btn btn-outline-secondary btn-sm">試讀</a>
                    </span>
                </div>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-3 mt-4">
                <div class="card">
                    <img src="https://dummyimage.com/148x210/000/fff&text=148x210" class="rounded-4" alt="..." class="">
                    <div class="card-body">
                        <h5 class="card-title">鋼之鍊金術師</h5>
                        <p class="card-text">
                            荒川 弘
                        </p>
                    </div>
                    <span class="d-flex justify-content-between align-items-center">
                        <span>
                            <a href="" class="bi bi-heart text-dark fs-4"></a>
                            <a href="" class=" bi bi-cart text-dark fs-4 ms-2 "></a>
                        </span>

                        <a href="#" class="btn btn-outline-secondary btn-sm">試讀</a>
                    </span>
                </div>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-3 mt-4">
                <div class="card">
                    <img src="https://dummyimage.com/148x210/000/fff&text=148x210" class="rounded-4" alt="..." class="">
                    <div class="card-body">
                        <h5 class="card-title">鋼之鍊金術師</h5>
                        <p class="card-text">
                            荒川 弘
                        </p>
                    </div>
                    <span class="d-flex justify-content-between align-items-center">
                        <span>
                            <a href="" class="bi bi-heart text-dark fs-4"></a>
                            <a href="" class=" bi bi-cart text-dark fs-4 ms-2 "></a>
                        </span>

                        <a href="#" class="btn btn-outline-secondary btn-sm">試讀</a>
                    </span>
                </div>
            </div>
        </div>
    </div>

    <!-- CM -->
    <div class="container_fill bg-light mt-5" style="height: 550px;">
        <div class="row featurette w-100 ">
            <div class="col-md-6 order-md-2 text-center ">
                <h2 class="featurette-heading fw-bold lh-1 fs-2">
                    「數位漫畫讓讀者隨時隨地享受閱讀的樂趣，不再受限於實體書籍的攜帶與保存。」
                    <!-- <span class="text-muted">See for
                        yourself.</span> -->
                </h2>
                <p class="lead fw-bold">
                    ——《數位時代的閱讀革命》
                </p>
                <!-- <button class="btn btn-primary btn-lg" type="button">Example button</button> -->
            </div>
            <div class="col-md-6 order-md-1">

                <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto my-100" 

                     xmlns="http://www.w3.org/2000/svg" role="img" a ria-label="Placeholder: 500x500"

                    preserveAspectRatio="xMidYMid slice" focusable="false">

                    <!-- <title>Placeholder</title> -->

                    <!-- <rect width="100%" height="100%" fill="#eee" />
                    <text x="50%" y="50%" fill="#aaa" dy=".3em">500x500</text> -->
                </svg>

            </div>
        </div>
    </div>

    <!-- footer -->
    <div class="container-fluid  text-light" style="background-color:#323F3E ;">
        <footer class="p-5 ">
            <div class="row w-100 ">
                <div class="col-6 col-md-2 mb-3">
                    <h5>Section</h5>
                    <ul class="nav flex-column">
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Home</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Features</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Pricing</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">FAQs</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">About</a></li>
                    </ul>
                </div>

                <div class="col-6 col-md-2 mb-3">
                    <h5>Section</h5>
                    <ul class="nav flex-column">
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Home</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Features</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Pricing</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">FAQs</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">About</a></li>
                    </ul>
                </div>

                <div class="col-6 col-md-2 mb-3">
                    <h5>Section</h5>
                    <ul class="nav flex-column">
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Home</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Features</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Pricing</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">FAQs</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">About</a></li>
                    </ul>
                </div>

                <div class="col-md-5 offset-md-1 mb-3">
                    <form>
                        <h5>Subscribe to our newsletter</h5>
                        <p>Monthly digest of what's new and exciting from us.</p>
                        <div class="d-flex flex-column flex-sm-row w-100 gap-2">
                            <label for="newsletter1" class="visually-hidden">Email address</label>
                            <input id="newsletter1" type="text" class="form-control" placeholder="Email address">

                            <button class="mybtn" type="button" style="background-color: #D45542 ; border-radius: 50px; color: #FCFBFA; height: 37px; width: 90px;border-width: 0px; ">訂閱</button>
                        </div>
                    </form>
                </div>
            </div>

            <div class="d-flex flex-column flex-sm-row justify-content-between py-4 my-4 border-top">
                <p>&copy; 2022 Company, Inc. All rights reserved.</p>
                <ul class="list-unstyled d-flex">
                    <li class="ms-3 ">
                        <a class="link-dark text-light" href="#">
                            <i class="bi bi-twitter-x"></i>
                        </a>
                    </li>
                    <li class="ms-3">
                        <a class="link-dark text-light" href="#">
                            <i class="bi bi-instagram"></i>
                        </a>
                    </li>
                    <li class="ms-3"><a class="link-dark text-light" href="#">
                            <i class="bi bi-facebook"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </footer>
    </div>





    <!-- bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js"
        integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js"
        integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK"
        crossorigin="anonymous"></script>
    <!-- bootstrap -->
    <?php
mysqli_close ( $link );
?>

</body>

</html>