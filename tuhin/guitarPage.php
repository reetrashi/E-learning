<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Guiter Page</title>
    <link rel="stylesheet" href="CSS/bootstrap.min.css">
    <link rel="stylesheet" href="CSS/all.min.css">
    <link rel="stylesheet" href="CSS/style.css">
    
</head>

<body>
    <!-- header or navbar content -->
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark fixed-top ">
        <div class="container-fluid">
          <a class="navbar-brand" href="index.php">E-learning</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <ul class="navbar-nav custom-nav pl-5">
             <li class="nav-item custom-nav-item"><a href="/E-learning/home page/mainpage.php" class="nav-link">Home</a></li>
             <!-- <li class="nav-item custom-nav-item"><a href="index.php#Courses" class="nav-link">Courses</a></li> -->
             <li class="nav-item custom-nav-item"><a href="" class="nav-link">Payment</a></li>
             <li class="nav-item custom-nav-item"><a href="" class="nav-link">My profile </a></li>
             <!-- <li class="nav-item custom-nav-item"><a href="./project/courses.php" class="nav-link">Courses</a></li> -->
             <li class="nav-item custom-nav-item"><a href="" class="nav-link">Login</a></li>
             <li class="nav-item custom-nav-item"><a href="" class="nav-link">Signup</a></li>
             <li class="nav-item custom-nav-item"><a href="./Quiz/index.html" class="nav-link">Quiz</a></li>
             <li class="nav-item custom-nav-item"><a href="index.php#Contact" class="nav-link">Contact</a></li>
      </ul>
        </div>
      </nav>

    <!-- Side bar content -->

    <div class="container-fluid">
        <div class="row flex-nowrap">
            <div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0 bg-body-secondary ">

                <div
                    class="sidebar d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100 ">
                    <a href="#" class="d-flex align-items-center pb-3 mb-md-0 me-md-auto text-black fw-bold my-2">
                        <span class="fs-4 d-none d-sm-inline">Guitar Tutorials For Beginners</span>
                    </a>

                    <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start"
                        id="menu">
                        <li class="nav-item">
                            <a href="#" class="boder nav-link align-middle px-0 my-2">
                                <span class="ms-1 d-none d-sm-inline fs-5">Introduction of Guitar</span>
                            </a>
                        </li>

                        <li>
                            <a href="#" class="boder nav-link px-0 align-middle my-2">
                                <span class="ms-1 d-none d-sm-inline fs-5">Strings of Guitar</span></a>
                        </li>

                        <li>
                            <a href="#" class="boder nav-link px-0 align-middle my-2">
                                <span class="ms-1 d-none d-sm-inline fs-5">Basic Guitar Chords</span></a>
                        </li>

                        <li>
                            <a href="#" class="boder nav-link px-0 align-middle my-2">
                                <span class="ms-1 d-none d-sm-inline fs-5">Chords and Strumming</span></a>
                        </li>

                        <li>
                            <a href="#" class="boder nav-link px-0 align-middle my-2">
                                <span class="ms-1 d-none d-sm-inline fs-5">Sharp and Flats</span> </a>
                        </li>

                        <li>
                            <a href="#" class="boder nav-link px-0 align-middle my-2">
                                <span class="ms-1 d-none d-sm-inline fs-5">Shifting Chords</span>
                            </a>
                        </li>

                        <li>
                            <a href="#" class="boder nav-link px-0 align-middle my-2">
                                <span class="ms-1 d-none d-sm-inline fs-5">Palm Mute</span> </a>
                        </li>

                        <li>
                            <a href="#" class="boder nav-link px-0 align-middle my-2">
                                <span class="ms-1 d-none d-sm-inline fs-5">How To Play Bar Chords</span> </a>
                        </li>

                        <li>
                            <a href="#" class="boder nav-link px-0 align-middle my-2">
                                <span class="ms-1 d-none d-sm-inline fs-5">Major Scale</span> </a>
                        </li>

                        <li>
                            <a href="#" class="boder nav-link px-0 align-middle my-2">
                                <span class="ms-1 d-none d-sm-inline fs-5">Minor Scale</span> </a>
                        </li>
                    </ul>

                </div>
            </div>
            <div class="col py-3">

                <!-- courosel video and Description and review parts -->

                <!-- For video 1 -->
                <div id="carouselExample" class="carousel slide">
                    <div class="carousel-inner">

                        <div class="carousel-item active" id="">
                            <h2>Introduction of Guitar</h2>
                            <video controls >
                            <source src="Videos/Guiter videos/video1.mp4" type="video/mp4">
                            Your browser does not support the video tag.
                            </video>>
                            <!-- Reviews part -->
                            <div class="container text-center">
                                <div class="row-review">
                                    <div class="col-3 text-start">
                                        <button type="button" class="btn btn-primary fa fa-thumbs-up"></button>
                                        <span class="mx-2 fw-semibold">Like</span></a>
                                    </div>
                                    <div class="col-3 text-start">
                                        <button type="button" class="btn btn-primary fa-solid fa-thumbs-down"></button>
                                        <span class="mx-2 fw-semibold">Dislike</span></a>
                                    </div>
                                    <div class="col-3 text-start">
                                        <button type="button" class="btn btn-primary fa-solid fa-flag"></button>
                                        <span class="mx-2 fw-semibold">Report</span></a>
                                    </div>
                                    <div class="col-3 text-start">
                                        <button type="button"
                                            class="btn btn-primary fa-solid fa-share-from-square"></button>
                                        <span class="mx-2 fw-semibold">Share</span></a>
                                    </div>
                                </div>
                            </div>
                            <!-- Description and instructor part -->
                            <div class="container text-center">
                                <div class="Row">
                                    <div class="col-4 text-start fs-5 fw-semibold">Description</div>
                                    <div class="col-8 text-start fs-6">In this video we will get introduced about the Guitar and learn the basics for palying the Guitar.</div>
                                </div>
                                <div class="Row">
                                    <div class="col-4 text-start fs-5 fw-semibold">Instructor</div>
                                    <div class="col-8 text-start fs-6">Sandeep Pahadi </div>
                                </div>
                            </div>
                        </div>

                        <!-- For video 2 -->
                        <div class="carousel-item" id="">
                            <h2>Strings of Guitar</h2>
                            <video controls >
                            <source src="Videos/Guiter videos/video2.mp4" type="video/mp4">
                            Your browser does not support the video tag.
                            </video>>

                            <!-- Reviews part -->
                            <div class="container text-center">
                                <div class="row-review">
                                    <div class="col-3 text-start">
                                        <button type="button" class="btn btn-primary fa fa-thumbs-up"></button>
                                        <span class="mx-2 fw-semibold">Like</span></a>
                                    </div>
                                    <div class="col-3 text-start">
                                        <button type="button" class="btn btn-primary fa-solid fa-thumbs-down"></button>
                                        <span class="mx-2 fw-semibold">Dislike</span></a>
                                    </div>
                                    <div class="col-3 text-start">
                                        <button type="button" class="btn btn-primary fa-solid fa-flag"></button>
                                        <span class="mx-2 fw-semibold">Report</span></a>
                                    </div>
                                    <div class="col-3 text-start">
                                        <button type="button"
                                            class="btn btn-primary fa-solid fa-share-from-square"></button>
                                        <span class="mx-2 fw-semibold">Share</span></a>
                                    </div>
                                </div>
                            </div>
                            <!-- Description and instructor part -->
                            <div class="container text-center">
                                <div class="Row">
                                    <div class="col-4 text-start fs-5 fw-semibold">Description</div>
                                    <div class="col-8 text-start fs-6">In this video we will learn about the different types of strings notes of the Guitar and its uses.</div>
                                </div>
                                <div class="Row">
                                    <div class="col-4 text-start fs-5 fw-semibold">Instructor</div>
                                    <div class="col-8 text-start fs-6">Sandeep Pahadi </div>
                                </div>
                            </div>
                        </div>

                        <!-- For video 3 -->
                        <div class="carousel-item" id="">
                            <h2>Basic Guitar Chords</h2>
                            <video controls >
                            <source src="Videos/Guiter videos/video3.mp4" type="video/mp4">
                            Your browser does not support the video tag.
                            </video>>

                            <!-- Reviews part -->
                            <div class="container text-center">
                                <div class="row-review">
                                    <div class="col-3 text-start">
                                        <button type="button" class="btn btn-primary fa fa-thumbs-up"></button>
                                        <span class="mx-2 fw-semibold">Like</span></a>
                                    </div>
                                    <div class="col-3 text-start">
                                        <button type="button" class="btn btn-primary fa-solid fa-thumbs-down"></button>
                                        <span class="mx-2 fw-semibold">Dislike</span></a>
                                    </div>
                                    <div class="col-3 text-start">
                                        <button type="button" class="btn btn-primary fa-solid fa-flag"></button>
                                        <span class="mx-2 fw-semibold">Report</span></a>
                                    </div>
                                    <div class="col-3 text-start">
                                        <button type="button"
                                            class="btn btn-primary fa-solid fa-share-from-square"></button>
                                        <span class="mx-2 fw-semibold">Share</span></a>
                                    </div>
                                </div>
                            </div>
                            <!-- Description and instructor part -->
                            <div class="container text-center">
                                <div class="Row">
                                    <div class="col-4 text-start fs-5 fw-semibold">Description</div>
                                    <div class="col-8 text-start fs-6">In this video we will learn about how to play the basic Guitar chords as a beginners.</div>
                                </div>
                                <div class="Row">
                                    <div class="col-4 text-start fs-5 fw-semibold">Instructor</div>
                                    <div class="col-8 text-start fs-6">Sandeep Pahadi </div>
                                </div>
                            </div>
                        </div>

                        <!-- For video 4 -->
                        <div class="carousel-item" id="">
                            <h2>Chords and Strumming</h2>
                            <video controls >
                            <source src="Videos/Guiter videos/video4.mp4" type="video/mp4">
                            Your browser does not support the video tag.
                            </video>>

                            <!-- Reviews part -->
                            <div class="container text-center">
                                <div class="row-review">
                                    <div class="col-3 text-start">
                                        <button type="button" class="btn btn-primary fa fa-thumbs-up"></button>
                                        <span class="mx-2 fw-semibold">Like</span></a>
                                    </div>
                                    <div class="col-3 text-start">
                                        <button type="button" class="btn btn-primary fa-solid fa-thumbs-down"></button>
                                        <span class="mx-2 fw-semibold">Dislike</span></a>
                                    </div>
                                    <div class="col-3 text-start">
                                        <button type="button" class="btn btn-primary fa-solid fa-flag"></button>
                                        <span class="mx-2 fw-semibold">Report</span></a>
                                    </div>
                                    <div class="col-3 text-start">
                                        <button type="button"
                                            class="btn btn-primary fa-solid fa-share-from-square"></button>
                                        <span class="mx-2 fw-semibold">Share</span></a>
                                    </div>
                                </div>
                            </div>
                            <!-- Description and instructor part -->
                            <div class="container text-center">
                                <div class="Row">
                                    <div class="col-4 text-start fs-5 fw-semibold">Description</div>
                                    <div class="col-8 text-start fs-6">In this video we will learn how to read and play the chords and strumming patterns. </div>
                                </div>
                                <div class="Row">
                                    <div class="col-4 text-start fs-5 fw-semibold">Instructor</div>
                                    <div class="col-8 text-start fs-6">Sandeep Pahadi </div>
                                </div>
                            </div>
                        </div>

                        <!-- For video 5-->
                        <div class="carousel-item" id="">
                            <h2>Sharp and Flats</h2>
                            <video controls >
                            <source src="Videos/Guiter videos/video5.mp4" type="video/mp4">
                            Your browser does not support the video tag.
                            </video>>

                            <!-- Reviews part -->
                            <div class="container text-center">
                                <div class="row-review">
                                    <div class="col-3 text-start">
                                        <button type="button" class="btn btn-primary fa fa-thumbs-up"></button>
                                        <span class="mx-2 fw-semibold">Like</span></a>
                                    </div>
                                    <div class="col-3 text-start">
                                        <button type="button" class="btn btn-primary fa-solid fa-thumbs-down"></button>
                                        <span class="mx-2 fw-semibold">Dislike</span></a>
                                    </div>
                                    <div class="col-3 text-start">
                                        <button type="button" class="btn btn-primary fa-solid fa-flag"></button>
                                        <span class="mx-2 fw-semibold">Report</span></a>
                                    </div>
                                    <div class="col-3 text-start">
                                        <button type="button"
                                            class="btn btn-primary fa-solid fa-share-from-square"></button>
                                        <span class="mx-2 fw-semibold">Share</span></a>
                                    </div>
                                </div>
                            </div>
                            <!-- Description and instructor part -->
                            <div class="container text-center">
                                <div class="Row">
                                    <div class="col-4 text-start fs-5 fw-semibold">Description</div>
                                    <div class="col-8 text-start fs-6">In this video we will learn abaout the sharp and flats on a the Guiter and how to play it.</div>
                                </div>
                                <div class="Row">
                                    <div class="col-4 text-start fs-5 fw-semibold">Instructor</div>
                                    <div class="col-8 text-start fs-6">Sandeep Pahadi </div>
                                </div>
                            </div>
                        </div>

                        <!-- For video 6-->
                        <div class="carousel-item" id="">
                            <h2>Shifting Chords</h2>
                            <video controls >
                            <source src="Videos/Guiter videos/video6.mp4" type="video/mp4">
                            Your browser does not support the video tag.
                            </video>>

                            <!-- Reviews part -->
                            <div class="container text-center">
                                <div class="row-review">
                                    <div class="col-3 text-start">
                                        <button type="button" class="btn btn-primary fa fa-thumbs-up"></button>
                                        <span class="mx-2 fw-semibold">Like</span></a>
                                    </div>
                                    <div class="col-3 text-start">
                                        <button type="button" class="btn btn-primary fa-solid fa-thumbs-down"></button>
                                        <span class="mx-2 fw-semibold">Dislike</span></a>
                                    </div>
                                    <div class="col-3 text-start">
                                        <button type="button" class="btn btn-primary fa-solid fa-flag"></button>
                                        <span class="mx-2 fw-semibold">Report</span></a>
                                    </div>
                                    <div class="col-3 text-start">
                                        <button type="button"
                                            class="btn btn-primary fa-solid fa-share-from-square"></button>
                                        <span class="mx-2 fw-semibold">Share</span></a>
                                    </div>
                                </div>
                            </div>
                            <!-- Description and instructor part -->
                            <div class="container text-center">
                                <div class="Row">
                                    <div class="col-4 text-start fs-5 fw-semibold">Description</div>
                                    <div class="col-8 text-start fs-6">In this video we will learn how to shift the chords in guitar while playing.</div>
                                </div>
                                <div class="Row">
                                    <div class="col-4 text-start fs-5 fw-semibold">Instructor</div>
                                    <div class="col-8 text-start fs-6">Sandeep Pahadi </div>
                                </div>
                            </div>
                        </div>

                        <!-- For video 7 -->
                        <div class="carousel-item" id="">
                            <h2>Palm Mute</h2>
                            <video controls >
                            <source src="Videos/Guiter videos/video7.mp4" type="video/mp4">
                            Your browser does not support the video tag.
                            </video>>

                            <!-- Reviews part -->
                            <div class="container text-center">
                                <div class="row-review">
                                    <div class="col-3 text-start">
                                        <button type="button" class="btn btn-primary fa fa-thumbs-up"></button>
                                        <span class="mx-2 fw-semibold">Like</span></a>
                                    </div>
                                    <div class="col-3 text-start">
                                        <button type="button" class="btn btn-primary fa-solid fa-thumbs-down"></button>
                                        <span class="mx-2 fw-semibold">Dislike</span></a>
                                    </div>
                                    <div class="col-3 text-start">
                                        <button type="button" class="btn btn-primary fa-solid fa-flag"></button>
                                        <span class="mx-2 fw-semibold">Report</span></a>
                                    </div>
                                    <div class="col-3 text-start">
                                        <button type="button"
                                            class="btn btn-primary fa-solid fa-share-from-square"></button>
                                        <span class="mx-2 fw-semibold">Share</span></a>
                                    </div>
                                </div>
                            </div>
                            <!-- Description and instructor part -->
                            <div class="container text-center">
                                <div class="Row">
                                    <div class="col-4 text-start fs-5 fw-semibold">Description</div>
                                    <div class="col-8 text-start fs-6">In this video we will learn how to mute the tune using our palm.</div>
                                </div>
                                <div class="Row">
                                    <div class="col-4 text-start fs-5 fw-semibold">Instructor</div>
                                    <div class="col-8 text-start fs-6">Sandeep Pahadi </div>
                                </div>
                            </div>
                        </div>

                        <!-- For video 8 -->
                        <div class="carousel-item" id="">
                            <h2>How To Play Bar Chords</h2>
                            <video controls >
                            <source src="Videos/Guiter videos/video8.mp4" type="video/mp4">
                            Your browser does not support the video tag.
                            </video>>

                            <!-- Reviews part -->
                            <div class="container text-center">
                                <div class="row-review">
                                    <div class="col-3 text-start">
                                        <button type="button" class="btn btn-primary fa fa-thumbs-up"></button>
                                        <span class="mx-2 fw-semibold">Like</span></a>
                                    </div>
                                    <div class="col-3 text-start">
                                        <button type="button" class="btn btn-primary fa-solid fa-thumbs-down"></button>
                                        <span class="mx-2 fw-semibold">Dislike</span></a>
                                    </div>
                                    <div class="col-3 text-start">
                                        <button type="button" class="btn btn-primary fa-solid fa-flag"></button>
                                        <span class="mx-2 fw-semibold">Report</span></a>
                                    </div>
                                    <div class="col-3 text-start">
                                        <button type="button"
                                            class="btn btn-primary fa-solid fa-share-from-square"></button>
                                        <span class="mx-2 fw-semibold">Share</span></a>
                                    </div>
                                </div>
                            </div>
                            <!-- Description and instructor part -->
                            <div class="container text-center">
                                <div class="Row">
                                    <div class="col-4 text-start fs-5 fw-semibold">Description</div>
                                    <div class="col-8 text-start fs-6">In this video we will learn how to play the bar chords in Guitar.</div>
                                </div>
                                <div class="Row">
                                    <div class="col-4 text-start fs-5 fw-semibold">Instructor</div>
                                    <div class="col-8 text-start fs-6">Sandeep Pahadi </div>
                                </div>
                            </div>
                        </div>

                    <!-- For video 9 -->
                    <div class="carousel-item" id="">
                        <h2>Major Scale</h2>
                        <video controls >
                            <source src="Videos/Guiter videos/video9.mp4" type="video/mp4">
                            Your browser does not support the video tag.
                            </video>>

                        <!-- Reviews part -->
                        <div class="container text-center">
                            <div class="row-review">
                                <div class="col-3 text-start">
                                    <button type="button" class="btn btn-primary fa fa-thumbs-up"></button>
                                    <span class="mx-2 fw-semibold">Like</span></a>
                                </div>
                                <div class="col-3 text-start">
                                    <button type="button" class="btn btn-primary fa-solid fa-thumbs-down"></button>
                                    <span class="mx-2 fw-semibold">Dislike</span></a>
                                </div>
                                <div class="col-3 text-start">
                                    <button type="button" class="btn btn-primary fa-solid fa-flag"></button>
                                    <span class="mx-2 fw-semibold">Report</span></a>
                                </div>
                                <div class="col-3 text-start">
                                    <button type="button"
                                        class="btn btn-primary fa-solid fa-share-from-square"></button>
                                    <span class="mx-2 fw-semibold">Share</span></a>
                                </div>
                            </div>
                        </div>
                        <!-- Description and instructor part -->
                        <div class="container text-center">
                            <div class="Row">
                                <div class="col-4 text-start fs-5 fw-semibold">Description</div>
                                <div class="col-8 text-start fs-6">In this video we will learn about the major scales that are used in Guitar. </div>
                            </div>
                            <div class="Row">
                                <div class="col-4 text-start fs-5 fw-semibold">Instructor</div>
                                <div class="col-8 text-start fs-6">Sandeep Pahadi </div>
                            </div>
                        </div>
                    </div>

                    <!-- For video 10 -->
                    <div class="carousel-item" id="">
                        <h2>Minor Scale</h2>
                        <video controls >
                            <source src="Videos/Guiter videos/video10.mp4" type="video/mp4">
                            Your browser does not support the video tag.
                            </video>>

                        <!-- Reviews part -->
                        <div class="container text-center">
                            <div class="row-review">
                                <div class="col-3 text-start">
                                    <button type="button" class="btn btn-primary fa fa-thumbs-up"></button>
                                    <span class="mx-2 fw-semibold">Like</span></a>
                                </div>
                                <div class="col-3 text-start">
                                    <button type="button" class="btn btn-primary fa-solid fa-thumbs-down"></button>
                                    <span class="mx-2 fw-semibold">Dislike</span></a>
                                </div>
                                <div class="col-3 text-start">
                                    <button type="button" class="btn btn-primary fa-solid fa-flag"></button>
                                    <span class="mx-2 fw-semibold">Report</span></a>
                                </div>
                                <div class="col-3 text-start">
                                    <button type="button"
                                        class="btn btn-primary fa-solid fa-share-from-square"></button>
                                    <span class="mx-2 fw-semibold">Share</span></a>
                                </div>
                            </div>
                        </div>
                        <!-- Description and instructor part -->
                        <div class="container text-center">
                            <div class="Row">
                                <div class="col-4 text-start fs-5 fw-semibold">Description</div>
                                <div class="col-8 text-start fs-6">In this video we will learn about the minor scales that are used in Guitar.</div>
                            </div>
                            <div class="Row">
                                <div class="col-4 text-start fs-5 fw-semibold">Instructor</div>
                                <div class="col-8 text-start fs-6">Sandeep Pahadi </div>
                            </div>
                        </div>
                    </div>
                </div>

                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon bg-dark" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExample"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon bg-dark" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>

                <!-- rating part-->
                <div class="rating-inner">
                <!--div class="rating-box">
                    <header>How was your experience?</header>
                    <div class="stars">
                      <i class="fa-solid fa-star"></i>
                      <i class="fa-solid fa-star"></i>
                      <i class="fa-solid fa-star"></i>
                      <i class="fa-solid fa-star"></i>
                      <i class="fa-solid fa-star"></i>
                    </div>
                  </div>
                </div-->
                <?php
// Connecting to the Database
$servername = "localhost";
$username = "root";
$password = "";
$database = "dbshown";
// Create a connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Die if connection was not successful
if (!$conn){
    die("Sorry we failed to connect: ". mysqli_connect_error());
}
else{

}
// Variables to be inserted into the table
if (isset($_POST['name'])||isset($_POST['about'])){
    $name = $_POST['name'];
    $about = $_POST['about'];
   
$sql = "INSERT INTO `comment` (`name`, `about`) VALUES ('$name', '$about')";
$result = mysqli_query($conn, $sql);
}
?>
<style>input[type=submit] {
  width: 3cm;
  background-color: rgb(24, 131, 225);
  color: white;
  padding: 8px 10px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: rgba(2, 2, 240, 0.751);
}
</style>

      <form action = "cPage.php" method="POST">
        <div >
         <b>Name:</b> <input type = "text" id = "name" name ="name" style="width: 5cm;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;" />
         </div> <div>
         <b>Your Review:</b> <input type = "text" id= "about" name="about" style="width: 11cm; 
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;"
  
  />
         </div>
         <input   type = "Submit" />
      </form>   
<?php  
?>
            </div>
        </div>
    </div>


                <!-- Footer part-->
                <footer class="bg-dark text-center text-white">
                    <!-- Grid container -->
                    <div class="container p-4 pb-0">
                      <!-- Section: Social media -->
                      <section class="mb-4">
                        <!-- Facebook -->
                        <a
                          class="btn text-white btn-floating m-1"
                          style="background-color: #3b5998;"
                          href="#!"
                          role="button"
                          ><i class="fab fa-facebook-f"></i
                        ></a>
                  
                        <!-- Twitter -->
                        <a
                          class="btn text-white btn-floating m-1"
                          style="background-color: #55acee;"
                          href="#!"
                          role="button"
                          ><i class="fab fa-twitter"></i
                        ></a>
                  
                        <!-- Google -->
                        <a
                          class="btn text-white btn-floating m-1"
                          style="background-color: #dd4b39;"
                          href="#!"
                          role="button"
                          ><i class="fab fa-google"></i
                        ></a>
                  
                        <!-- Instagram -->
                        <a
                          class="btn text-white btn-floating m-1"
                          style="background-color: #ac2bac;"
                          href="#!"
                          role="button"
                          ><i class="fab fa-instagram"></i
                        ></a>
                  
                        <!-- Linkedin -->
                        <a
                          class="btn text-white btn-floating m-1"
                          style="background-color: #0082ca;"
                          href="#!"
                          role="button"
                          ><i class="fab fa-linkedin-in"></i
                        ></a>
                        <!-- Github -->
                        <a
                          class="btn text-white btn-floating m-1"
                          style="background-color: #333333;"
                          href="#!"
                          role="button"
                          ><i class="fab fa-github"></i
                        ></a>
                      </section>
                      <!-- Section: Social media -->
                    </div>
                    <!-- Grid container -->
                  
                    <!-- Copyright -->
                    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
                      © 2023 Copyright:
                      <h4 class="text-white">E-learning
                    </div>
                    <!-- Copyright -->
                  </footer>
        

        <script src="JS/bootstrap.min.js"></script>
        <script src="JS/jquery-3.6.3.js"></script>
        <script src="JS/all.min.js"></script>
        <script src="JS/rating.js"></script>
</body>

</html>