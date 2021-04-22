<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Meta Tag -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Seo Meta -->
    <meta name="description" content="Listen App - Online Music Streaming App Template">
    <meta name="keywords" content="music template, music app, music web app, responsive music app, music, themeforest, html music app template, css3, html5">

    <title>Listen App - Online Music Streaming App</title>

    <!-- Favicon -->
    <link href="../assets/images/logos/favicon.png" rel="icon"/>

    <!-- IOS Touch Icons -->
    <link rel="apple-touch-icon" href="../assets/images/logos/touch-icon-iphone.png">
    <link rel="apple-touch-icon" sizes="152x152" href="../assets/images/logos/touch-icon-ipad.png">
    <link rel="apple-touch-icon" sizes="180x180" href="../assets/images/logos/touch-icon-iphone-retina.png">
    <link rel="apple-touch-icon" sizes="167x167" href="../assets/images/logos/touch-icon-ipad-retina.png">

    <!-- Styles -->
    <link href="../assets/css/vendors.bundle.css" rel="stylesheet" type="text/css"/>
    <link href="../assets/css/styles.bundle.css" rel="stylesheet" type="text/css"/>

    <!-- Google fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:100,300,400,700" rel="stylesheet">

    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>

<!-- Begin | Loading [[ Find at scss/framework/base/loader/loader.scss ]] -->
<div id="loading">
    <div class="loader">
        <div class="eq">
            <span class="eq-bar eq-bar--1"></span>
            <span class="eq-bar eq-bar--2"></span>
            <span class="eq-bar eq-bar--3"></span>
            <span class="eq-bar eq-bar--4"></span>
            <span class="eq-bar eq-bar--5"></span>
            <span class="eq-bar eq-bar--6"></span>
        </div>
        <span class="text">Loading</span>
    </div>
</div>
<!-- End | Loading -->

<!-- Begin | Wrapper [[ Find at scss/framework/base/wrapper/wrapper.scss ]] -->
<div id="wrapper" data-scrollable="true">

    <!-- Begin | Sidebar [[ Find at scss/framework/base/sidebar/left/sidebar.scss ]] -->
    <aside id="sidebar" class="sidebar-primary">

        <!-- Begin | Sidebar Header -->
        <div class="sidebar-header d-flex align-items-center">
            <a href="../index.html" class="brand">
                <img src="../assets/images/logos/logo.svg" alt="listen-app">
            </a>

            <button type="button" class="btn p-0 ml-auto" id="hideSidebar">
                <i class="ion-md-arrow-back h3"></i>
            </button>

            <button type="button" class="btn toggle-menu" id="toggleSidebar">
                <span></span>
                <span></span>
                <span></span>
            </button>
        </div>
        <!-- End | Sidebar Header -->

        <!-- Begin | Navbar [[ Find at scss/framework/components/navbar/navbar.scss ]] -->
        <nav class="navbar">
            <ul class="navbar-nav" data-scrollable="true">
                <li class="nav-item nav-header">Browse Music</li>
                <li class="nav-item">
                    <a href="home.html" class="nav-link"><i class="la la-home"></i><span>Home</span></a>
                </li>
                <li class="nav-item">
                    <a href="genres.html" class="nav-link"><i class="la la-diamond"></i><span>Genres</span></a>
                </li>
                <li class="nav-item">
                    <a href="music.html" class="nav-link"><i class="la la-music"></i><span>Free Music</span></a>
                </li>
                <li class="nav-item">
                    <a href="artists.html" class="nav-link active"><i class="la la-microphone"></i><span>Artists</span></a>
                </li>
                <li class="nav-item">
                    <a href="stations.html" class="nav-link"><i class="la la-bullseye"></i><span>Stations</span></a>
                </li>
                <li class="nav-item nav-header">Your Music</li>
                <li class="nav-item">
                    <a href="analytics.html" class="nav-link"><i class="la la-bar-chart"></i><span>Analytics</span></a>
                </li>
                <li class="nav-item">
                    <a href="favorites.html" class="nav-link"><i class="la la-heart-o"></i><span>Favorites</span></a>
                </li>
                <li class="nav-item">
                    <a href="history.html" class="nav-link"><i class="la la-history"></i><span>History</span></a>
                </li>
                <li class="nav-item nav-header">Music Events</li>
                <li class="nav-item">
                    <a href="events.html" class="nav-link"><i class="la la-calendar"></i><span>Events</span></a>
                </li>
                <li class="nav-item">
                    <a href="event-details.html" class="nav-link"><i class="la la-newspaper-o"></i><span>Event Details</span></a>
                </li>
                <li class="nav-item">
                    <a href="add-event.html" class="nav-link"><i class="la la-pencil-square-o"></i><span>Add Event</span></a>
                </li>
                <li class="nav-item nav-header">Extra Pages</li>
                <li class="nav-item">
                    <a href="error.html" class="nav-link load-page"><i class="la la-times-circle-o"></i><span>Error</span></a>
                </li>
                <li class="nav-item">
                    <a href="blank.html" class="nav-link"><i class="la la-file"></i><span>Blank</span></a>
                </li>
            </ul>
        </nav>
        <!-- End | Navbar -->

        <!-- Begin | Sidebar Footer -->
        <div class="sidebar-footer">
            <a href="add-music.html" class="btn btn-block btn-danger btn-air btn-bold">
                <i class="ion-md-musical-note"></i>
                <span>Add Music</span>
            </a>
        </div>
        <!-- End | Sidebar Footer -->

    </aside>
    <!-- End | Sidebar -->

    <!-- Begin | Page Wrapper [[ Find at scss/framework/base/wrapper/wrapper.scss ]] -->
    <main id="pageWrapper">

        <!-- Begin | Header [[ Find at scss/framework/base/header/header.scss ]] -->
        <header id="header" class="bg-primary">

            <div class="d-flex align-items-center">

                <button type="button" class="btn toggle-menu mr-3" id="openSidebar">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>

                <form action="#" id="searchForm">

                    <button type="button" class="btn ion-ios-search"></button>
                    <input type="text" placeholder="Search..." id="searchInput" class="form-control">

                    <!-- Begin | Search Card [[ Find at scss/framework/base/search/search.scss ]] -->
                    <div class="search-card" data-scrollable="true">
                        <!-- Begin | Search Result List -->
                        <div class="mb-3">
                            <!-- Begin | Search Result List Header -->
                            <div class="d-flex">
                                <span class="text-uppercase mr-auto font-weight-bold text-dark">Artists</span>
                                <a href="artists.html">View All</a>
                            </div>
                            <!-- End | Search Result List Header -->
                            <hr>
                            <!-- Begin | Result List -->
                            <div class="row">
                                <div class="col-xl-2 col-md-4 col-6">
                                    <div class="custom-card mb-3">
                                        <a href="artist-details.html" class="text-dark">
                                            <img src="../assets/images/cover/medium/1.jpg" alt="" class="card-img--radius-md">
                                            <p class="text-truncate mt-2">Arebica Luna</p>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-xl-2 col-md-4 col-6">
                                    <div class="custom-card mb-3">
                                        <a href="artist-details.html" class="text-dark">
                                            <img src="../assets/images/cover/medium/2.jpg" alt="" class="card-img--radius-md">
                                            <p class="text-truncate mt-2">Gerrina Linda</p>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-xl-2 col-md-4 col-6">
                                    <div class="custom-card mb-3">
                                        <a href="artist-details.html" class="text-dark">
                                            <img src="../assets/images/cover/medium/3.jpg" alt="" class="card-img--radius-md">
                                            <p class="text-truncate mt-2">Zunira Willy</p>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-xl-2 col-md-4 col-6">
                                    <div class="custom-card mb-3">
                                        <a href="artist-details.html" class="text-dark">
                                            <img src="../assets/images/cover/medium/4.jpg" alt="" class="card-img--radius-md">
                                            <p class="text-truncate mt-2">Johnny Marro</p>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-xl-2 col-md-4 col-6">
                                    <div class="custom-card mb-3">
                                        <a href="artist-details.html" class="text-dark">
                                            <img src="../assets/images/cover/medium/5.jpg" alt="" class="card-img--radius-md">
                                            <p class="text-truncate mt-2">Jina Moore</p>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-xl-2 col-md-4 col-6">
                                    <div class="custom-card mb-3">
                                        <a href="artist-details.html" class="text-dark">
                                            <img src="../assets/images/cover/medium/6.jpg" alt="" class="card-img--radius-md">
                                            <p class="text-truncate mt-2">Rasomi Pelina</p>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <!-- End | Result List -->
                        </div>
                        <!-- End | Search Result List -->

                        <!-- Begin | Search Result List -->
                        <div class="mb-3">
                            <!-- Begin | Search Result List Header -->
                            <div class="d-flex">
                                <span class="text-uppercase mr-auto font-weight-bold text-dark">Track</span>
                                <a href="songs.html">View All</a>
                            </div>
                            <!-- End | Search Result List Header -->
                            <hr>
                            <!-- Begin | Result List -->
                            <div class="row">
                                <div class="col-xl-4 col-md-6 col-12">
                                    <div class="custom-card mb-3">
                                        <a href="song-details.html" class="text-dark custom-card--inline">
                                            <div class="custom-card--inline-img">
                                                <img src="../assets/images/cover/small/1.jpg" alt="" class="card-img--radius-sm">
                                            </div>

                                            <div class="custom-card--inline-desc">
                                                <p class="text-truncate mb-0">I Love You Mummy</p>
                                                <p class="text-truncate text-muted font-sm">Arebica Luna</p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-md-6 col-12">
                                    <div class="custom-card mb-3">
                                        <a href="song-details.html" class="text-dark custom-card--inline">
                                            <div class="custom-card--inline-img">
                                                <img src="../assets/images/cover/small/2.jpg" alt="" class="card-img--radius-sm">
                                            </div>

                                            <div class="custom-card--inline-desc">
                                                <p class="text-truncate mb-0">Shack your butty</p>
                                                <p class="text-truncate text-muted font-sm">Gerrina Linda</p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-md-6 col-12">
                                    <div class="custom-card mb-3">
                                        <a href="song-details.html" class="text-dark custom-card--inline">
                                            <div class="custom-card--inline-img">
                                                <img src="../assets/images/cover/small/3.jpg" alt="" class="card-img--radius-sm">
                                            </div>

                                            <div class="custom-card--inline-desc">
                                                <p class="text-truncate mb-0">Do it your way(Female)</p>
                                                <p class="text-truncate text-muted font-sm">Zunira Willy & Nutty Nina</p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <!-- End | Result List -->
                        </div>
                        <!-- End | Search Result List -->

                        <!-- Begin | Search Result List -->
                        <div>
                            <!-- Begin | Search Result List Header -->
                            <div class="d-flex">
                                <span class="text-uppercase mr-auto font-weight-bold text-dark">Albums</span>
                                <a href="songs.html">View All</a>
                            </div>
                            <!-- End | Search Result List Header -->
                            <hr>
                            <!-- Begin | Result List -->
                            <div class="row">
                                <div class="col-xl-4 col-md-6 col-12">
                                    <div class="custom-card mb-3">
                                        <a href="song-details.html" class="text-dark custom-card--inline">
                                            <div class="custom-card--inline-img">
                                                <img src="../assets/images/cover/small/4.jpg" alt="" class="card-img--radius-sm">
                                            </div>

                                            <div class="custom-card--inline-desc">
                                                <p class="text-truncate mb-0">Say yes</p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-md-6 col-12">
                                    <div class="custom-card mb-3">
                                        <a href="song-details.html" class="text-dark custom-card--inline">
                                            <div class="custom-card--inline-img">
                                                <img src="../assets/images/cover/small/5.jpg" alt="" class="card-img--radius-sm">
                                            </div>

                                            <div class="custom-card--inline-desc">
                                                <p class="text-truncate mb-0">Where is your letter</p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-md-6 col-12">
                                    <div class="custom-card mb-3">
                                        <a href="song-details.html" class="text-dark custom-card--inline">
                                            <div class="custom-card--inline-img">
                                                <img src="../assets/images/cover/small/6.jpg" alt="" class="card-img--radius-sm">
                                            </div>

                                            <div class="custom-card--inline-desc">
                                                <p class="text-truncate mb-0">Hey not me</p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <!-- End | Result List -->
                        </div>
                        <!-- End | Search Result List -->
                    </div>
                    <!-- End | Search Card -->

                </form>

                <!-- Begin | Header Options -->
                <ul class="header-options d-flex align-items-center">
                    <li>
                        <a href="javascript:void(0);" data-toggle="modal" data-target="#lang" class="language">
                            <span>Language</span>
                            <img src="../assets/images/svg/translate.svg" alt="">
                        </a>
                    </li>
                    <li class="dropdown fade-in">
                        <a href="javascript:void(0);" class="d-flex align-items-center py-2" role="button" id="userMenu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <div class="avatar avatar-sm avatar-circle"><img src="../assets/images/users/thumb.jpg" alt="user"></div>
                            <span class="pl-2">Halo Admin</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userMenu">
                            <a class="dropdown-item" href="profile.html"><i class="ion-md-contact"></i> <span>Profile</span></a>
                            <a class="dropdown-item" href="plan.html"><i class="ion-md-radio-button-off"></i> <span>Your Plan</span></a>
                            <a class="dropdown-item" href="settings.html"><i class="ion-md-settings"></i> <span>Settings</span></a>
                            <div class="dropdown-divider"></div>
                            <div class="px-4 py-2">
                                <a href="#" class="btn btn-sm btn-air btn-pill btn-danger">Logout</a>
                            </div>
                        </div>
                    </li>
                </ul>
                <!-- End | Header Options -->
            </div>

        </header>
        <!-- End | Header -->

        <!-- Page Banner [[ Find at scss/base/core.scss ]] -->
        <div class="banner bg-artists"></div>

        <!-- Begin | Main Container [[ Find at scss/base/core.scss ]] -->
        <div class="main-container" id="appRoute">
            <div class="row section text-center text-md-left">
                <div class="col-xl-3 col-lg-4 col-sm-5">
                    <img src="../assets/images/cover/large/10.jpg" alt="" class="card-img--radius-lg">
                </div>
                <div class="col-xl-9 col-lg-8 col-sm-7">
                    <div class="row pt-4">
                        <div class="col-xl-8 col-lg-6">
                            <h5>Nutty Nina</h5>
                            <p>DOB: 12/03/1986</p>
                            <div class="text-warning stars">
                                <i class="la la-star"></i>
                                <i class="la la-star"></i>
                                <i class="la la-star"></i>
                                <i class="la la-star"></i>
                                <i class="la la-star-half-empty"></i>
                            </div>
                            <div class="mt-4">
                                <a href="javascript:void(0);" class="btn btn-pill btn-air btn-bold btn-danger">Play All</a>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6">
                            <div class="pt-3 pt-lg-0 text-lg-right">
                                <button class="btn btn-pill btn-air btn-danger btn-icon-only"><i class="la la-heart-o"></i></button>
                                <button class="btn btn-pill btn-air btn-brand btn-icon-only"><i class="la la-share-alt"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Begin | Section [[ Find at scss/base/core.scss ]] -->
            <div class="section">
                <!-- Begin | Line Tabs [[ Find at scss/framework/components/line-tabs.scss ]] -->
                <ul class="nav nav-tabs line-tabs line-tabs-primary text-uppercase mb-4" id="artistDetails" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="song-tab" data-toggle="tab" href="#song" role="tab" aria-controls="song" aria-selected="true">Top Songs</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="album-tab" data-toggle="tab" href="#album" role="tab" aria-controls="album" aria-selected="false">Top Albums</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="bio-tab" data-toggle="tab" href="#bio" role="tab" aria-controls="bio" aria-selected="false">Biography</a>
                    </li>
                </ul>
                <!-- End | Line Tabs -->

                <!-- Begin | Tab Content -->
                <div class="tab-content" id="artistDetailsContent">
                    <div class="tab-pane fade show active" id="song" role="tabpanel" aria-labelledby="song-tab">
                        <div class="row align-items-end">
                            <span class="col-6 font-weight-bold">125 Track</span>
                            <div class="col-6 ml-auto">
                                <form action="#" class="form-inline justify-content-end">
                                    <label class="mr-2" for="filter1">Sorted By:</label>
                                    <select class="custom-select mr-sm-2" id="filter1">
                                        <option selected>Popular</option>
                                        <option value="1">A-Z</option>
                                        <option value="2">Z-A</option>
                                    </select>
                                </form>
                            </div>
                            <div class="col-12"><hr></div>
                        </div>
                        <!-- Begin | Custom List [[ Find at scss/framework/components/custom-list.scss ]] -->
                        <div class="custom-list">
                            <!-- Begin | Custom List Item -->
                            <div class="custom-list--item">
                                <div class="text-dark custom-card--inline">
                                    <div class="custom-card--inline-img">
                                        <img src="../assets/images/cover/small/1.jpg" alt="" class="card-img--radius-sm">
                                    </div>

                                    <div class="custom-card--inline-desc">
                                        <p class="text-truncate mb-0">I Love You Mummy</p>
                                        <p class="text-truncate text-muted font-sm">Arebica Luna</p>
                                    </div>
                                </div>
                                <ul class="custom-card--labels d-flex ml-auto">
                                    <li><span class="badge badge-pill badge-warning"><i class="la la-star"></i></span></li>
                                    <li>05:03</li>
                                    <li class="dropleft">
                                        <a href="javascript:void(0);" class="btn btn-icon-only p-0 w-auto h-auto" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="la la-ellipsis-h"></i>
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li class="dropdown-item">
                                                <a href="javascript:void(0);" class="dropdown-link favorite">
                                                    <i class="la la-heart-o"></i>
                                                    <span>Favorite</span>
                                                </a>
                                            </li>
                                            <li class="dropdown-item">
                                                <a href="javascript:void(0);" class="dropdown-link">
                                                    <i class="la la-plus"></i>
                                                    <span>Add to Playlist</span>
                                                </a>
                                            </li>
                                            <li class="dropdown-item">
                                                <a href="javascript:void(0);" class="dropdown-link">
                                                    <i class="la la-download"></i>
                                                    <span>Download</span>
                                                </a>
                                            </li>
                                            <li class="dropdown-item">
                                                <a href="javascript:void(0);" class="dropdown-link">
                                                    <i class="la la-share-alt"></i>
                                                    <span>Share</span>
                                                </a>
                                            </li>
                                            <li class="dropdown-item">
                                                <a href="song-details.html" class="dropdown-link">
                                                    <i class="la la-info-circle"></i>
                                                    <span>Song Info</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                            <!-- End | Custom List Item -->

                            <!-- Begin | Custom List Item -->
                            <div class="custom-list--item">
                                <div class="text-dark custom-card--inline">
                                    <div class="custom-card--inline-img">
                                        <img src="../assets/images/cover/small/2.jpg" alt="" class="card-img--radius-sm">
                                    </div>

                                    <div class="custom-card--inline-desc">
                                        <p class="text-truncate mb-0">Shack your butty</p>
                                        <p class="text-truncate text-muted font-sm">Gerrina Linda</p>
                                    </div>
                                </div>
                                <ul class="custom-card--labels d-flex ml-auto">
                                    <li>04:12</li>
                                    <li class="dropleft">
                                        <a href="javascript:void(0);" class="btn btn-icon-only p-0 w-auto h-auto" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="la la-ellipsis-h"></i>
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li class="dropdown-item">
                                                <a href="javascript:void(0);" class="dropdown-link favorite">
                                                    <i class="la la-heart-o"></i>
                                                    <span>Favorite</span>
                                                </a>
                                            </li>
                                            <li class="dropdown-item">
                                                <a href="javascript:void(0);" class="dropdown-link">
                                                    <i class="la la-plus"></i>
                                                    <span>Add to Playlist</span>
                                                </a>
                                            </li>
                                            <li class="dropdown-item">
                                                <a href="javascript:void(0);" class="dropdown-link">
                                                    <i class="la la-download"></i>
                                                    <span>Download</span>
                                                </a>
                                            </li>
                                            <li class="dropdown-item">
                                                <a href="javascript:void(0);" class="dropdown-link">
                                                    <i class="la la-share-alt"></i>
                                                    <span>Share</span>
                                                </a>
                                            </li>
                                            <li class="dropdown-item">
                                                <a href="song-details.html" class="dropdown-link">
                                                    <i class="la la-info-circle"></i>
                                                    <span>Song Info</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                            <!-- End | Custom List Item -->

                            <!-- Begin | Custom List Item -->
                            <div class="custom-list--item">
                                <div class="text-dark custom-card--inline">
                                    <div class="custom-card--inline-img">
                                        <img src="../assets/images/cover/small/3.jpg" alt="" class="card-img--radius-sm">
                                    </div>

                                    <div class="custom-card--inline-desc">
                                        <p class="text-truncate mb-0">Do it your way(Female)</p>
                                        <p class="text-truncate text-muted font-sm">Zunira Willy & Nutty Nina</p>
                                    </div>
                                </div>
                                <ul class="custom-card--labels d-flex ml-auto">
                                    <li><span class="badge badge-pill badge-danger"><i class="la la-heart"></i></span></li>
                                    <li><span class="badge badge-pill badge-warning"><i class="la la-star"></i></span></li>
                                    <li>03:10</li>
                                    <li class="dropleft">
                                        <a href="javascript:void(0);" class="btn btn-icon-only p-0 w-auto h-auto" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="la la-ellipsis-h"></i>
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li class="dropdown-item">
                                                <a href="javascript:void(0);" class="dropdown-link favorite">
                                                    <i class="la la-heart-o"></i>
                                                    <span>Favorite</span>
                                                </a>
                                            </li>
                                            <li class="dropdown-item">
                                                <a href="javascript:void(0);" class="dropdown-link">
                                                    <i class="la la-plus"></i>
                                                    <span>Add to Playlist</span>
                                                </a>
                                            </li>
                                            <li class="dropdown-item">
                                                <a href="javascript:void(0);" class="dropdown-link">
                                                    <i class="la la-download"></i>
                                                    <span>Download</span>
                                                </a>
                                            </li>
                                            <li class="dropdown-item">
                                                <a href="javascript:void(0);" class="dropdown-link">
                                                    <i class="la la-share-alt"></i>
                                                    <span>Share</span>
                                                </a>
                                            </li>
                                            <li class="dropdown-item">
                                                <a href="song-details.html" class="dropdown-link">
                                                    <i class="la la-info-circle"></i>
                                                    <span>Song Info</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                            <!-- End | Custom List Item -->

                            <!-- Begin | Custom List Item -->
                            <div class="custom-list--item">
                                <div class="text-dark custom-card--inline">
                                    <div class="custom-card--inline-img">
                                        <img src="../assets/images/cover/small/4.jpg" alt="" class="card-img--radius-sm">
                                    </div>

                                    <div class="custom-card--inline-desc">
                                        <p class="text-truncate mb-0">Say yes</p>
                                        <p class="text-truncate text-muted font-sm">Johnny Marro</p>
                                    </div>
                                </div>
                                <ul class="custom-card--labels d-flex ml-auto">
                                    <li>06:16</li>
                                    <li class="dropleft">
                                        <a href="javascript:void(0);" class="btn btn-icon-only p-0 w-auto h-auto" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="la la-ellipsis-h"></i>
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li class="dropdown-item">
                                                <a href="javascript:void(0);" class="dropdown-link favorite">
                                                    <i class="la la-heart-o"></i>
                                                    <span>Favorite</span>
                                                </a>
                                            </li>
                                            <li class="dropdown-item">
                                                <a href="javascript:void(0);" class="dropdown-link">
                                                    <i class="la la-plus"></i>
                                                    <span>Add to Playlist</span>
                                                </a>
                                            </li>
                                            <li class="dropdown-item">
                                                <a href="javascript:void(0);" class="dropdown-link">
                                                    <i class="la la-download"></i>
                                                    <span>Download</span>
                                                </a>
                                            </li>
                                            <li class="dropdown-item">
                                                <a href="javascript:void(0);" class="dropdown-link">
                                                    <i class="la la-share-alt"></i>
                                                    <span>Share</span>
                                                </a>
                                            </li>
                                            <li class="dropdown-item">
                                                <a href="song-details.html" class="dropdown-link">
                                                    <i class="la la-info-circle"></i>
                                                    <span>Song Info</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                            <!-- End | Custom List Item -->

                            <!-- Begin | Custom List Item -->
                            <div class="custom-list--item">
                                <div class="text-dark custom-card--inline">
                                    <div class="custom-card--inline-img">
                                        <img src="../assets/images/cover/small/5.jpg" alt="" class="card-img--radius-sm">
                                    </div>

                                    <div class="custom-card--inline-desc">
                                        <p class="text-truncate mb-0">Where is your letter</p>
                                        <p class="text-truncate text-muted font-sm">Jina Moore & Lenisa Gory</p>
                                    </div>
                                </div>
                                <ul class="custom-card--labels d-flex ml-auto">
                                    <li><span class="badge badge-pill badge-danger"><i class="la la-heart"></i></span></li>
                                    <li>05:35</li>
                                    <li class="dropleft">
                                        <a href="javascript:void(0);" class="btn btn-icon-only p-0 w-auto h-auto" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="la la-ellipsis-h"></i>
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li class="dropdown-item">
                                                <a href="javascript:void(0);" class="dropdown-link favorite">
                                                    <i class="la la-heart-o"></i>
                                                    <span>Favorite</span>
                                                </a>
                                            </li>
                                            <li class="dropdown-item">
                                                <a href="javascript:void(0);" class="dropdown-link">
                                                    <i class="la la-plus"></i>
                                                    <span>Add to Playlist</span>
                                                </a>
                                            </li>
                                            <li class="dropdown-item">
                                                <a href="javascript:void(0);" class="dropdown-link">
                                                    <i class="la la-download"></i>
                                                    <span>Download</span>
                                                </a>
                                            </li>
                                            <li class="dropdown-item">
                                                <a href="javascript:void(0);" class="dropdown-link">
                                                    <i class="la la-share-alt"></i>
                                                    <span>Share</span>
                                                </a>
                                            </li>
                                            <li class="dropdown-item">
                                                <a href="song-details.html" class="dropdown-link">
                                                    <i class="la la-info-circle"></i>
                                                    <span>Song Info</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                            <!-- End | Custom List Item -->

                            <!-- Begin | Custom List Item -->
                            <div class="custom-list--item">
                                <div class="text-dark custom-card--inline">
                                    <div class="custom-card--inline-img">
                                        <img src="../assets/images/cover/small/6.jpg" alt="" class="card-img--radius-sm">
                                    </div>

                                    <div class="custom-card--inline-desc">
                                        <p class="text-truncate mb-0">Hey not me</p>
                                        <p class="text-truncate text-muted font-sm">Rasomi Pelina</p>
                                    </div>
                                </div>
                                <ul class="custom-card--labels d-flex ml-auto">
                                    <li>04:54</li>
                                    <li class="dropleft">
                                        <a href="javascript:void(0);" class="btn btn-icon-only p-0 w-auto h-auto" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="la la-ellipsis-h"></i>
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li class="dropdown-item">
                                                <a href="javascript:void(0);" class="dropdown-link favorite">
                                                    <i class="la la-heart-o"></i>
                                                    <span>Favorite</span>
                                                </a>
                                            </li>
                                            <li class="dropdown-item">
                                                <a href="javascript:void(0);" class="dropdown-link">
                                                    <i class="la la-plus"></i>
                                                    <span>Add to Playlist</span>
                                                </a>
                                            </li>
                                            <li class="dropdown-item">
                                                <a href="javascript:void(0);" class="dropdown-link">
                                                    <i class="la la-download"></i>
                                                    <span>Download</span>
                                                </a>
                                            </li>
                                            <li class="dropdown-item">
                                                <a href="javascript:void(0);" class="dropdown-link">
                                                    <i class="la la-share-alt"></i>
                                                    <span>Share</span>
                                                </a>
                                            </li>
                                            <li class="dropdown-item">
                                                <a href="song-details.html" class="dropdown-link">
                                                    <i class="la la-info-circle"></i>
                                                    <span>Song Info</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                            <!-- End | Custom List Item -->

                            <!-- Begin | Custom List Item -->
                            <div class="custom-list--item">
                                <div class="text-dark custom-card--inline">
                                    <div class="custom-card--inline-img">
                                        <img src="../assets/images/cover/small/7.jpg" alt="" class="card-img--radius-sm">
                                    </div>

                                    <div class="custom-card--inline-desc">
                                        <p class="text-truncate mb-0">Deep inside</p>
                                        <p class="text-truncate text-muted font-sm">Pimila Holliwy</p>
                                    </div>
                                </div>
                                <ul class="custom-card--labels d-flex ml-auto">
                                    <li>05:47</li>
                                    <li class="dropleft">
                                        <a href="javascript:void(0);" class="btn btn-icon-only p-0 w-auto h-auto" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="la la-ellipsis-h"></i>
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li class="dropdown-item">
                                                <a href="javascript:void(0);" class="dropdown-link favorite">
                                                    <i class="la la-heart-o"></i>
                                                    <span>Favorite</span>
                                                </a>
                                            </li>
                                            <li class="dropdown-item">
                                                <a href="javascript:void(0);" class="dropdown-link">
                                                    <i class="la la-plus"></i>
                                                    <span>Add to Playlist</span>
                                                </a>
                                            </li>
                                            <li class="dropdown-item">
                                                <a href="javascript:void(0);" class="dropdown-link">
                                                    <i class="la la-download"></i>
                                                    <span>Download</span>
                                                </a>
                                            </li>
                                            <li class="dropdown-item">
                                                <a href="javascript:void(0);" class="dropdown-link">
                                                    <i class="la la-share-alt"></i>
                                                    <span>Share</span>
                                                </a>
                                            </li>
                                            <li class="dropdown-item">
                                                <a href="song-details.html" class="dropdown-link">
                                                    <i class="la la-info-circle"></i>
                                                    <span>Song Info</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                            <!-- End | Custom List Item -->
                        </div>
                        <!-- End | Custom List -->
                    </div>
                    <div class="tab-pane fade show" id="album" role="tabpanel" aria-labelledby="album-tab">
                        <div class="row align-items-end">
                            <span class="col-6 font-weight-bold">12 Album</span>
                            <div class="col-6 ml-auto">
                                <form action="#" class="form-inline justify-content-end">
                                    <label class="mr-2" for="filter2">Sorted By:</label>
                                    <select class="custom-select mr-sm-2" id="filter2">
                                        <option selected>Popular</option>
                                        <option value="1">A-Z</option>
                                        <option value="2">Z-A</option>
                                    </select>
                                </form>
                            </div>
                            <div class="col-12"><hr></div>
                        </div>
                        <!-- Begin | Custom List [[ Find at scss/framework/components/custom-list.scss ]] -->
                        <div class="custom-list">
                            <!-- Begin | Custom List Item -->
                            <div class="custom-list--item">
                                <div class="text-dark custom-card--inline">
                                    <div class="custom-card--inline-img">
                                        <img src="../assets/images/cover/small/1.jpg" alt="" class="card-img--radius-sm">
                                    </div>

                                    <div class="custom-card--inline-desc">
                                        <p class="text-truncate mb-0">I Love You Mummy</p>
                                        <p class="text-truncate text-muted font-sm">Arebica Luna</p>
                                    </div>
                                </div>
                                <ul class="custom-card--labels d-flex ml-auto">
                                    <li><span class="badge badge-pill badge-warning"><i class="la la-star"></i></span></li>
                                    <li>05:03</li>
                                    <li class="dropleft">
                                        <a href="javascript:void(0);" class="btn btn-icon-only p-0 w-auto h-auto" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="la la-ellipsis-h"></i>
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li class="dropdown-item">
                                                <a href="javascript:void(0);" class="dropdown-link favorite">
                                                    <i class="la la-heart-o"></i>
                                                    <span>Favorite</span>
                                                </a>
                                            </li>
                                            <li class="dropdown-item">
                                                <a href="javascript:void(0);" class="dropdown-link">
                                                    <i class="la la-plus"></i>
                                                    <span>Add to Playlist</span>
                                                </a>
                                            </li>
                                            <li class="dropdown-item">
                                                <a href="javascript:void(0);" class="dropdown-link">
                                                    <i class="la la-download"></i>
                                                    <span>Download</span>
                                                </a>
                                            </li>
                                            <li class="dropdown-item">
                                                <a href="javascript:void(0);" class="dropdown-link">
                                                    <i class="la la-share-alt"></i>
                                                    <span>Share</span>
                                                </a>
                                            </li>
                                            <li class="dropdown-item">
                                                <a href="song-details.html" class="dropdown-link">
                                                    <i class="la la-info-circle"></i>
                                                    <span>Song Info</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                            <!-- End | Custom List Item -->

                            <!-- Begin | Custom List Item -->
                            <div class="custom-list--item">
                                <div class="text-dark custom-card--inline">
                                    <div class="custom-card--inline-img">
                                        <img src="../assets/images/cover/small/2.jpg" alt="" class="card-img--radius-sm">
                                    </div>

                                    <div class="custom-card--inline-desc">
                                        <p class="text-truncate mb-0">Shack your butty</p>
                                        <p class="text-truncate text-muted font-sm">Gerrina Linda</p>
                                    </div>
                                </div>
                                <ul class="custom-card--labels d-flex ml-auto">
                                    <li>04:12</li>
                                    <li class="dropleft">
                                        <a href="javascript:void(0);" class="btn btn-icon-only p-0 w-auto h-auto" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="la la-ellipsis-h"></i>
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li class="dropdown-item">
                                                <a href="javascript:void(0);" class="dropdown-link favorite">
                                                    <i class="la la-heart-o"></i>
                                                    <span>Favorite</span>
                                                </a>
                                            </li>
                                            <li class="dropdown-item">
                                                <a href="javascript:void(0);" class="dropdown-link">
                                                    <i class="la la-plus"></i>
                                                    <span>Add to Playlist</span>
                                                </a>
                                            </li>
                                            <li class="dropdown-item">
                                                <a href="javascript:void(0);" class="dropdown-link">
                                                    <i class="la la-download"></i>
                                                    <span>Download</span>
                                                </a>
                                            </li>
                                            <li class="dropdown-item">
                                                <a href="javascript:void(0);" class="dropdown-link">
                                                    <i class="la la-share-alt"></i>
                                                    <span>Share</span>
                                                </a>
                                            </li>
                                            <li class="dropdown-item">
                                                <a href="song-details.html" class="dropdown-link">
                                                    <i class="la la-info-circle"></i>
                                                    <span>Song Info</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                            <!-- End | Custom List Item -->

                            <!-- Begin | Custom List Item -->
                            <div class="custom-list--item">
                                <div class="text-dark custom-card--inline">
                                    <div class="custom-card--inline-img">
                                        <img src="../assets/images/cover/small/3.jpg" alt="" class="card-img--radius-sm">
                                    </div>

                                    <div class="custom-card--inline-desc">
                                        <p class="text-truncate mb-0">Do it your way(Female)</p>
                                        <p class="text-truncate text-muted font-sm">Zunira Willy & Nutty Nina</p>
                                    </div>
                                </div>
                                <ul class="custom-card--labels d-flex ml-auto">
                                    <li><span class="badge badge-pill badge-danger"><i class="la la-heart"></i></span></li>
                                    <li><span class="badge badge-pill badge-warning"><i class="la la-star"></i></span></li>
                                    <li>03:10</li>
                                    <li class="dropleft">
                                        <a href="javascript:void(0);" class="btn btn-icon-only p-0 w-auto h-auto" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="la la-ellipsis-h"></i>
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li class="dropdown-item">
                                                <a href="javascript:void(0);" class="dropdown-link favorite">
                                                    <i class="la la-heart-o"></i>
                                                    <span>Favorite</span>
                                                </a>
                                            </li>
                                            <li class="dropdown-item">
                                                <a href="javascript:void(0);" class="dropdown-link">
                                                    <i class="la la-plus"></i>
                                                    <span>Add to Playlist</span>
                                                </a>
                                            </li>
                                            <li class="dropdown-item">
                                                <a href="javascript:void(0);" class="dropdown-link">
                                                    <i class="la la-download"></i>
                                                    <span>Download</span>
                                                </a>
                                            </li>
                                            <li class="dropdown-item">
                                                <a href="javascript:void(0);" class="dropdown-link">
                                                    <i class="la la-share-alt"></i>
                                                    <span>Share</span>
                                                </a>
                                            </li>
                                            <li class="dropdown-item">
                                                <a href="song-details.html" class="dropdown-link">
                                                    <i class="la la-info-circle"></i>
                                                    <span>Song Info</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                            <!-- End | Custom List Item -->

                            <!-- Begin | Custom List Item -->
                            <div class="custom-list--item">
                                <div class="text-dark custom-card--inline">
                                    <div class="custom-card--inline-img">
                                        <img src="../assets/images/cover/small/4.jpg" alt="" class="card-img--radius-sm">
                                    </div>

                                    <div class="custom-card--inline-desc">
                                        <p class="text-truncate mb-0">Say yes</p>
                                        <p class="text-truncate text-muted font-sm">Johnny Marro</p>
                                    </div>
                                </div>
                                <ul class="custom-card--labels d-flex ml-auto">
                                    <li>06:16</li>
                                    <li class="dropleft">
                                        <a href="javascript:void(0);" class="btn btn-icon-only p-0 w-auto h-auto" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="la la-ellipsis-h"></i>
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li class="dropdown-item">
                                                <a href="javascript:void(0);" class="dropdown-link favorite">
                                                    <i class="la la-heart-o"></i>
                                                    <span>Favorite</span>
                                                </a>
                                            </li>
                                            <li class="dropdown-item">
                                                <a href="javascript:void(0);" class="dropdown-link">
                                                    <i class="la la-plus"></i>
                                                    <span>Add to Playlist</span>
                                                </a>
                                            </li>
                                            <li class="dropdown-item">
                                                <a href="javascript:void(0);" class="dropdown-link">
                                                    <i class="la la-download"></i>
                                                    <span>Download</span>
                                                </a>
                                            </li>
                                            <li class="dropdown-item">
                                                <a href="javascript:void(0);" class="dropdown-link">
                                                    <i class="la la-share-alt"></i>
                                                    <span>Share</span>
                                                </a>
                                            </li>
                                            <li class="dropdown-item">
                                                <a href="song-details.html" class="dropdown-link">
                                                    <i class="la la-info-circle"></i>
                                                    <span>Song Info</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                            <!-- End | Custom List Item -->

                            <!-- Begin | Custom List Item -->
                            <div class="custom-list--item">
                                <div class="text-dark custom-card--inline">
                                    <div class="custom-card--inline-img">
                                        <img src="../assets/images/cover/small/5.jpg" alt="" class="card-img--radius-sm">
                                    </div>

                                    <div class="custom-card--inline-desc">
                                        <p class="text-truncate mb-0">Where is your letter</p>
                                        <p class="text-truncate text-muted font-sm">Jina Moore & Lenisa Gory</p>
                                    </div>
                                </div>
                                <ul class="custom-card--labels d-flex ml-auto">
                                    <li><span class="badge badge-pill badge-danger"><i class="la la-heart"></i></span></li>
                                    <li>05:35</li>
                                    <li class="dropleft">
                                        <a href="javascript:void(0);" class="btn btn-icon-only p-0 w-auto h-auto" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="la la-ellipsis-h"></i>
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li class="dropdown-item">
                                                <a href="javascript:void(0);" class="dropdown-link favorite">
                                                    <i class="la la-heart-o"></i>
                                                    <span>Favorite</span>
                                                </a>
                                            </li>
                                            <li class="dropdown-item">
                                                <a href="javascript:void(0);" class="dropdown-link">
                                                    <i class="la la-plus"></i>
                                                    <span>Add to Playlist</span>
                                                </a>
                                            </li>
                                            <li class="dropdown-item">
                                                <a href="javascript:void(0);" class="dropdown-link">
                                                    <i class="la la-download"></i>
                                                    <span>Download</span>
                                                </a>
                                            </li>
                                            <li class="dropdown-item">
                                                <a href="javascript:void(0);" class="dropdown-link">
                                                    <i class="la la-share-alt"></i>
                                                    <span>Share</span>
                                                </a>
                                            </li>
                                            <li class="dropdown-item">
                                                <a href="song-details.html" class="dropdown-link">
                                                    <i class="la la-info-circle"></i>
                                                    <span>Song Info</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                            <!-- End | Custom List Item -->

                            <!-- Begin | Custom List Item -->
                            <div class="custom-list--item">
                                <div class="text-dark custom-card--inline">
                                    <div class="custom-card--inline-img">
                                        <img src="../assets/images/cover/small/6.jpg" alt="" class="card-img--radius-sm">
                                    </div>

                                    <div class="custom-card--inline-desc">
                                        <p class="text-truncate mb-0">Hey not me</p>
                                        <p class="text-truncate text-muted font-sm">Rasomi Pelina</p>
                                    </div>
                                </div>
                                <ul class="custom-card--labels d-flex ml-auto">
                                    <li>04:54</li>
                                    <li class="dropleft">
                                        <a href="javascript:void(0);" class="btn btn-icon-only p-0 w-auto h-auto" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="la la-ellipsis-h"></i>
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li class="dropdown-item">
                                                <a href="javascript:void(0);" class="dropdown-link favorite">
                                                    <i class="la la-heart-o"></i>
                                                    <span>Favorite</span>
                                                </a>
                                            </li>
                                            <li class="dropdown-item">
                                                <a href="javascript:void(0);" class="dropdown-link">
                                                    <i class="la la-plus"></i>
                                                    <span>Add to Playlist</span>
                                                </a>
                                            </li>
                                            <li class="dropdown-item">
                                                <a href="javascript:void(0);" class="dropdown-link">
                                                    <i class="la la-download"></i>
                                                    <span>Download</span>
                                                </a>
                                            </li>
                                            <li class="dropdown-item">
                                                <a href="javascript:void(0);" class="dropdown-link">
                                                    <i class="la la-share-alt"></i>
                                                    <span>Share</span>
                                                </a>
                                            </li>
                                            <li class="dropdown-item">
                                                <a href="song-details.html" class="dropdown-link">
                                                    <i class="la la-info-circle"></i>
                                                    <span>Song Info</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                            <!-- End | Custom List Item -->

                            <!-- Begin | Custom List Item -->
                            <div class="custom-list--item">
                                <div class="text-dark custom-card--inline">
                                    <div class="custom-card--inline-img">
                                        <img src="../assets/images/cover/small/7.jpg" alt="" class="card-img--radius-sm">
                                    </div>

                                    <div class="custom-card--inline-desc">
                                        <p class="text-truncate mb-0">Deep inside</p>
                                        <p class="text-truncate text-muted font-sm">Pimila Holliwy</p>
                                    </div>
                                </div>
                                <ul class="custom-card--labels d-flex ml-auto">
                                    <li>05:47</li>
                                    <li class="dropleft">
                                        <a href="javascript:void(0);" class="btn btn-icon-only p-0 w-auto h-auto" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="la la-ellipsis-h"></i>
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li class="dropdown-item">
                                                <a href="javascript:void(0);" class="dropdown-link favorite">
                                                    <i class="la la-heart-o"></i>
                                                    <span>Favorite</span>
                                                </a>
                                            </li>
                                            <li class="dropdown-item">
                                                <a href="javascript:void(0);" class="dropdown-link">
                                                    <i class="la la-plus"></i>
                                                    <span>Add to Playlist</span>
                                                </a>
                                            </li>
                                            <li class="dropdown-item">
                                                <a href="javascript:void(0);" class="dropdown-link">
                                                    <i class="la la-download"></i>
                                                    <span>Download</span>
                                                </a>
                                            </li>
                                            <li class="dropdown-item">
                                                <a href="javascript:void(0);" class="dropdown-link">
                                                    <i class="la la-share-alt"></i>
                                                    <span>Share</span>
                                                </a>
                                            </li>
                                            <li class="dropdown-item">
                                                <a href="song-details.html" class="dropdown-link">
                                                    <i class="la la-info-circle"></i>
                                                    <span>Song Info</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                            <!-- End | Custom List Item -->
                        </div>
                        <!-- End | Custom List -->
                    </div>
                    <div class="tab-pane fade show" id="bio" role="tabpanel" aria-labelledby="bio-tab">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dignissimos ex magnam magni odit praesentium, recusandae reiciendis sequi tempora? Ad commodi consequatur deleniti dolorum fugiat iste minima rerum sed similique voluptate.</p>
                    </div>
                </div>
                <!-- End | Tab Content -->
            </div>
            <!-- End | Section -->

            <!-- Begin | Section [[ Find at scss/base/core.scss ]] -->
            <div class="section">
                <div class="mb-4">
                    <div class="d-flex mb-3">
                        <span>Rate:</span>
                        <div class="text-warning stars pl-2">
                            <i class="la la-star"></i>
                            <i class="la la-star"></i>
                            <i class="la la-star"></i>
                            <i class="la la-star"></i>
                            <i class="la la-star"></i>
                        </div>
                    </div>
                    <textarea name="comment" id="comment" cols="30" rows="5" class="form-control"></textarea>
                    <div class="text-right mt-2">
                        <button class="btn btn-info">Comment</button>
                    </div>
                </div>
                <div class="d-flex mb-4">
                    <div class="avatar avatar-sm avatar-circle">
                        <img src="../assets/images/users/thumb.jpg" alt="">
                    </div>
                    <div class="pl-3 flex-grow-1 flex-basis-0">
                        <span class="d-block font-weight-bold mb-1">Lorem ipsum dolor sit amet, consectetur adipisicing</span>
                        <div class="text-warning stars mb-2 font-md">
                            <i class="la la-star"></i>
                            <i class="la la-star"></i>
                            <i class="la la-star"></i>
                            <i class="la la-star"></i>
                            <i class="la la-star-half-empty"></i>
                        </div>
                        <p class="mb-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet assumenda commodi debitis eaque iusto labore, officiis perspiciatis quisquam! Cumque delectus excepturi ipsum maiores numquam officia omnis porro quae quam sapiente. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto cupiditate est et eveniet excepturi exercitationem, fugiat incidunt nesciunt odio placeat reprehenderit sed soluta tempore velit voluptatum. Adipisci delectus nesciunt tempore!</p>
                        <a href="#" class="btn p-0"><i class="la la-reply"></i> Reply</a>
                    </div>
                </div>
                <div class="ml-5 mb-4">
                    <div class="d-flex mb-4">
                        <div class="avatar avatar-sm avatar-circle">
                            <img src="../assets/images/users/thumb.jpg" alt="">
                        </div>
                        <div class="pl-3 flex-grow-1 flex-basis-0">
                            <span class="d-block font-weight-bold mb-1">Lorem ipsum dolor sit amet, consectetur adipisicing</span>
                            <div class="text-warning stars mb-2 font-md">
                                <i class="la la-star"></i>
                                <i class="la la-star"></i>
                                <i class="la la-star"></i>
                                <i class="la la-star"></i>
                                <i class="la la-star-half-empty"></i>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet assumenda commodi debitis eaque iusto labore, officiis perspiciatis quisquam! Cumque delectus excepturi ipsum maiores numquam officia omnis porro quae quam sapiente. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto cupiditate est et eveniet excepturi exercitationem, fugiat incidunt nesciunt odio placeat reprehenderit sed soluta tempore velit voluptatum. Adipisci delectus nesciunt tempore!</p>
                        </div>
                    </div>
                </div>
                <div class="d-flex">
                    <div class="avatar avatar-sm avatar-circle">
                        <img src="../assets/images/users/thumb.jpg" alt="">
                    </div>
                    <div class="pl-3 flex-grow-1 flex-basis-0">
                        <span class="d-block font-weight-bold mb-1">Lorem ipsum dolor sit amet, consectetur adipisicing</span>
                        <div class="text-warning stars mb-2 font-md">
                            <i class="la la-star"></i>
                            <i class="la la-star"></i>
                            <i class="la la-star"></i>
                            <i class="la la-star"></i>
                            <i class="la la-star-half-empty"></i>
                        </div>
                        <p class="mb-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet assumenda commodi debitis eaque iusto labore, officiis perspiciatis quisquam! Cumque delectus excepturi ipsum maiores numquam officia omnis porro quae quam sapiente. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto cupiditate est et eveniet excepturi exercitationem, fugiat incidunt nesciunt odio placeat reprehenderit sed soluta tempore velit voluptatum. Adipisci delectus nesciunt tempore!</p>
                        <a href="#" class="btn p-0"><i class="la la-reply"></i> Reply</a>
                    </div>
                </div>
            </div>
            <!-- End | Section -->

        </div>
        <!-- End | Main Container -->

        <!-- Begin | Footer [[ Find at scss/framework/base/footer/footer.scss ]] -->
        <footer id="footer" class="bg-img">
            <div class="footer-content">
                <a href="#" class="email">info@listenapp.com</a>
                <div class="platform-btn-inline">
                    <a href="#" class="btn btn-dark btn-air platform-btn">
                        <i class="ion-logo-android"></i>
                        <div class="platform-btn-info">
                            <span class="platform-desc">Available on</span>
                            <span class="platform-name">Android</span>
                        </div>
                    </a>
                    <a href="#" class="btn btn-danger btn-air platform-btn">
                        <i class="ion-logo-apple"></i>
                        <div class="platform-btn-info">
                            <span class="platform-desc">Available on</span>
                            <span class="platform-name">App Store</span>
                        </div>
                    </a>
                </div>
            </div>
        </footer>
        <!-- End | Footer -->

        <!-- Begin | Audio Player [[ Find at scss/framework/base/audio-player/audio-player.scss ]] -->
        <div id="audioPlayer" class="player-primary">

            <!-- Begin | Audio Player Progress -->
            <div id="progress-container">
                <input type="range" class="amplitude-song-slider">
                <progress class="audio-progress audio-progress--played amplitude-song-played-progress"></progress>
                <progress class="audio-progress audio-progress--buffered amplitude-buffered-progress" value="0"></progress>
            </div>
            <!-- End | Audio Player Progress -->

            <!-- Begin | Audio -->
            <div class="audio">
                <div class="song-image"><img data-amplitude-song-info="cover_art_url" src="../assets/images/cover/small/1.jpg" alt=""></div>
                <div class="song-info pl-3">
                    <span class="song-name d-inline-block text-truncate" data-amplitude-song-info="name"></span>
                    <span class="song-artists d-block text-muted" data-amplitude-song-info="artist"></span>
                </div>
            </div>
            <!-- End | Audio -->

            <!-- Begin | Audio Controls -->
            <div class="audio-controls">
                <div class="audio-controls--left d-flex mr-auto">
                    <button class="btn btn-icon-only amplitude-repeat"><i class="ion-md-sync"></i></button>
                </div>
                <div class="audio-controls--main d-flex">
                    <button class="btn btn-icon-only amplitude-prev"><i class="ion-md-skip-backward"></i></button>
                    <button class="btn btn-air btn-pill btn-default btn-icon-only amplitude-play-pause">
                        <i class="ion-md-play"></i>
                        <i class="ion-md-pause"></i>
                    </button>
                    <button class="btn btn-icon-only amplitude-next"><i class="ion-md-skip-forward"></i></button>
                </div>
                <div class="audio-controls--right d-flex ml-auto">
                    <button class="btn btn-icon-only amplitude-shuffle amplitude-shuffle-off"><i class="ion-md-shuffle"></i></button>
                </div>
            </div>
            <!-- End | Audio Controls -->

            <!-- Begin | Audio Info -->
            <div class="audio-info d-flex align-items-center pr-4">
                    <span class="mr-4">
                        <span class="amplitude-current-minutes" ></span>:<span class="amplitude-current-seconds"></span> /
                        <span class="amplitude-duration-minutes"></span>:<span class="amplitude-duration-seconds"></span>
                    </span>
                <div class="audio-volume dropdown">
                    <button class="btn btn-icon-only" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="ion-md-volume-low"></i>
                    </button>
                    <div class="dropdown-menu dropdown-menu-right volume-dropdown-menu">
                        <input type="range" class="amplitude-volume-slider" value="100">
                    </div>
                </div>

                <div class="dropleft">
                    <button class="btn btn-icon-only" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="la la-ellipsis-v"></i>
                    </button>
                    <ul class="dropdown-menu">
                        <li class="dropdown-item">
                            <a href="javascript:void(0);" class="dropdown-link">
                                <i class="la la-heart-o"></i> <span>Favorite</span>
                            </a>
                        </li>
                        <li class="dropdown-item">
                            <a href="javascript:void(0);" class="dropdown-link">
                                <i class="la la-plus"></i> <span>Add to Playlist</span>
                            </a>
                        </li>
                        <li class="dropdown-item">
                            <a href="javascript:void(0);" class="dropdown-link">
                                <i class="la la-download"></i> <span>Download</span>
                            </a>
                        </li>
                        <li class="dropdown-item">
                            <a href="javascript:void(0);" class="dropdown-link">
                                <i class="la la-share-alt"></i> <span>Share</span>
                            </a>
                        </li>
                        <li class="dropdown-item">
                            <a href="song-details.html" class="dropdown-link">
                                <i class="la la-info-circle"></i>
                                <span>Song Info</span>
                            </a>
                        </li>
                    </ul>
                </div>
                <button class="btn btn-icon-only" id="playList"><i class="ion-md-musical-note"></i></button>
            </div>
            <!-- End | Audio Info -->

        </div>
        <!-- End | Audio Player -->

    </main>
    <!-- End | Page Wrapper -->

    <!-- Begin | Right Sidebar [[ Find at scss/framework/base/sidebar/right/sidebar.scss ]] -->
    <aside id="rightSidebar">
        <div class="right-sidebar-header">Listen Special</div>
        <div class="right-sidebar-body" data-scrollable="true">
            <ul class="list-group list-group-flush">
                <!-- Begin | Custom List Item -->
                <li class="custom-list--item list-group-item">
                    <div class="text-dark custom-card--inline amplitude-song-container amplitude-play-pause" data-amplitude-song-index="0" data-amplitude-playlist="special">
                        <div class="custom-card--inline-img">
                            <img src="../assets/images/cover/small/1.jpg" alt="" class="card-img--radius-sm">
                        </div>

                        <div class="custom-card--inline-desc">
                            <p class="text-truncate mb-0">I Love You Mummy</p>
                            <p class="text-truncate text-muted font-sm">Arebica Luna</p>
                        </div>
                    </div>
                    <ul class="custom-card--labels d-flex ml-auto">
                        <li class="dropleft">
                            <a href="javascript:void(0);" class="btn btn-icon-only p-0 w-auto h-auto" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="la la-ellipsis-h"></i>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="dropdown-item">
                                    <a href="javascript:void(0);" class="dropdown-link favorite">
                                        <i class="la la-heart-o"></i>
                                        <span>Favorite</span>
                                    </a>
                                </li>
                                <li class="dropdown-item">
                                    <a href="javascript:void(0);" class="dropdown-link">
                                        <i class="la la-plus"></i>
                                        <span>Add to Playlist</span>
                                    </a>
                                </li>
                                <li class="dropdown-item">
                                    <a href="javascript:void(0);" class="dropdown-link">
                                        <i class="la la-download"></i>
                                        <span>Download</span>
                                    </a>
                                </li>
                                <li class="dropdown-item">
                                    <a href="javascript:void(0);" class="dropdown-link">
                                        <i class="la la-share-alt"></i>
                                        <span>Share</span>
                                    </a>
                                </li>
                                <li class="dropdown-item">
                                    <a href="song-details.html" class="dropdown-link">
                                        <i class="la la-info-circle"></i>
                                        <span>Song Info</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <!-- End | Custom List Item -->

                <!-- Begin | Custom List Item -->
                <li class="custom-list--item list-group-item">
                    <div class="text-dark custom-card--inline amplitude-song-container amplitude-play-pause" data-amplitude-song-index="1" data-amplitude-playlist="special">
                        <div class="custom-card--inline-img">
                            <img src="../assets/images/cover/small/2.jpg" alt="" class="card-img--radius-sm">
                        </div>

                        <div class="custom-card--inline-desc">
                            <p class="text-truncate mb-0">Shack your butty</p>
                            <p class="text-truncate text-muted font-sm">Gerrina Linda</p>
                        </div>
                    </div>
                    <ul class="custom-card--labels d-flex ml-auto">
                        <li class="dropleft">
                            <a href="javascript:void(0);" class="btn btn-icon-only p-0 w-auto h-auto" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="la la-ellipsis-h"></i>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="dropdown-item">
                                    <a href="javascript:void(0);" class="dropdown-link favorite">
                                        <i class="la la-heart-o"></i>
                                        <span>Favorite</span>
                                    </a>
                                </li>
                                <li class="dropdown-item">
                                    <a href="javascript:void(0);" class="dropdown-link">
                                        <i class="la la-plus"></i>
                                        <span>Add to Playlist</span>
                                    </a>
                                </li>
                                <li class="dropdown-item">
                                    <a href="javascript:void(0);" class="dropdown-link">
                                        <i class="la la-download"></i>
                                        <span>Download</span>
                                    </a>
                                </li>
                                <li class="dropdown-item">
                                    <a href="javascript:void(0);" class="dropdown-link">
                                        <i class="la la-share-alt"></i>
                                        <span>Share</span>
                                    </a>
                                </li>
                                <li class="dropdown-item">
                                    <a href="song-details.html" class="dropdown-link">
                                        <i class="la la-info-circle"></i>
                                        <span>Song Info</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <!-- End | Custom List Item -->

                <!-- Begin | Custom List Item -->
                <li class="custom-list--item list-group-item">
                    <div class="text-dark custom-card--inline amplitude-song-container amplitude-play-pause" data-amplitude-song-index="2" data-amplitude-playlist="special">
                        <div class="custom-card--inline-img">
                            <img src="../assets/images/cover/small/3.jpg" alt="" class="card-img--radius-sm">
                        </div>

                        <div class="custom-card--inline-desc">
                            <p class="text-truncate mb-0">Do it your way(Female)</p>
                            <p class="text-truncate text-muted font-sm">Zunira Willy & Nutty Nina</p>
                        </div>
                    </div>
                    <ul class="custom-card--labels d-flex ml-auto">
                        <li class="dropleft">
                            <a href="javascript:void(0);" class="btn btn-icon-only p-0 w-auto h-auto" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="la la-ellipsis-h"></i>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="dropdown-item">
                                    <a href="javascript:void(0);" class="dropdown-link favorite">
                                        <i class="la la-heart-o"></i>
                                        <span>Favorite</span>
                                    </a>
                                </li>
                                <li class="dropdown-item">
                                    <a href="javascript:void(0);" class="dropdown-link">
                                        <i class="la la-plus"></i>
                                        <span>Add to Playlist</span>
                                    </a>
                                </li>
                                <li class="dropdown-item">
                                    <a href="javascript:void(0);" class="dropdown-link">
                                        <i class="la la-download"></i>
                                        <span>Download</span>
                                    </a>
                                </li>
                                <li class="dropdown-item">
                                    <a href="javascript:void(0);" class="dropdown-link">
                                        <i class="la la-share-alt"></i>
                                        <span>Share</span>
                                    </a>
                                </li>
                                <li class="dropdown-item">
                                    <a href="song-details.html" class="dropdown-link">
                                        <i class="la la-info-circle"></i>
                                        <span>Song Info</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <!-- End | Custom List Item -->

                <!-- Begin | Custom List Item -->
                <li class="custom-list--item list-group-item">
                    <div class="text-dark custom-card--inline amplitude-song-container amplitude-play-pause" data-amplitude-song-index="3" data-amplitude-playlist="special">
                        <div class="custom-card--inline-img">
                            <img src="../assets/images/cover/small/4.jpg" alt="" class="card-img--radius-sm">
                        </div>

                        <div class="custom-card--inline-desc">
                            <p class="text-truncate mb-0">Say yes</p>
                            <p class="text-truncate text-muted font-sm">Johnny Marro</p>
                        </div>
                    </div>
                    <ul class="custom-card--labels d-flex ml-auto">
                        <li class="dropleft">
                            <a href="javascript:void(0);" class="btn btn-icon-only p-0 w-auto h-auto" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="la la-ellipsis-h"></i>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="dropdown-item">
                                    <a href="javascript:void(0);" class="dropdown-link favorite">
                                        <i class="la la-heart-o"></i>
                                        <span>Favorite</span>
                                    </a>
                                </li>
                                <li class="dropdown-item">
                                    <a href="javascript:void(0);" class="dropdown-link">
                                        <i class="la la-plus"></i>
                                        <span>Add to Playlist</span>
                                    </a>
                                </li>
                                <li class="dropdown-item">
                                    <a href="javascript:void(0);" class="dropdown-link">
                                        <i class="la la-download"></i>
                                        <span>Download</span>
                                    </a>
                                </li>
                                <li class="dropdown-item">
                                    <a href="javascript:void(0);" class="dropdown-link">
                                        <i class="la la-share-alt"></i>
                                        <span>Share</span>
                                    </a>
                                </li>
                                <li class="dropdown-item">
                                    <a href="song-details.html" class="dropdown-link">
                                        <i class="la la-info-circle"></i>
                                        <span>Song Info</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <!-- End | Custom List Item -->

                <!-- Begin | Custom List Item -->
                <li class="custom-list--item list-group-item">
                    <div class="text-dark custom-card--inline amplitude-song-container amplitude-play-pause" data-amplitude-song-index="4" data-amplitude-playlist="special">
                        <div class="custom-card--inline-img">
                            <img src="../assets/images/cover/small/5.jpg" alt="" class="card-img--radius-sm">
                        </div>

                        <div class="custom-card--inline-desc">
                            <p class="text-truncate mb-0">Where is your letter</p>
                            <p class="text-truncate text-muted font-sm">Jina Moore & Lenisa Gory</p>
                        </div>
                    </div>
                    <ul class="custom-card--labels d-flex ml-auto">
                        <li class="dropleft">
                            <a href="javascript:void(0);" class="btn btn-icon-only p-0 w-auto h-auto" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="la la-ellipsis-h"></i>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="dropdown-item">
                                    <a href="javascript:void(0);" class="dropdown-link favorite">
                                        <i class="la la-heart-o"></i>
                                        <span>Favorite</span>
                                    </a>
                                </li>
                                <li class="dropdown-item">
                                    <a href="javascript:void(0);" class="dropdown-link">
                                        <i class="la la-plus"></i>
                                        <span>Add to Playlist</span>
                                    </a>
                                </li>
                                <li class="dropdown-item">
                                    <a href="javascript:void(0);" class="dropdown-link">
                                        <i class="la la-download"></i>
                                        <span>Download</span>
                                    </a>
                                </li>
                                <li class="dropdown-item">
                                    <a href="javascript:void(0);" class="dropdown-link">
                                        <i class="la la-share-alt"></i>
                                        <span>Share</span>
                                    </a>
                                </li>
                                <li class="dropdown-item">
                                    <a href="song-details.html" class="dropdown-link">
                                        <i class="la la-info-circle"></i>
                                        <span>Song Info</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <!-- End | Custom List Item -->

                <!-- Begin | Custom List Item -->
                <li class="custom-list--item list-group-item">
                    <div class="text-dark custom-card--inline amplitude-song-container amplitude-play-pause" data-amplitude-song-index="5" data-amplitude-playlist="special">
                        <div class="custom-card--inline-img">
                            <img src="../assets/images/cover/small/6.jpg" alt="" class="card-img--radius-sm">
                        </div>

                        <div class="custom-card--inline-desc">
                            <p class="text-truncate mb-0">Hey not me</p>
                            <p class="text-truncate text-muted font-sm">Rasomi Pelina</p>
                        </div>
                    </div>
                    <ul class="custom-card--labels d-flex ml-auto">
                        <li class="dropleft">
                            <a href="javascript:void(0);" class="btn btn-icon-only p-0 w-auto h-auto" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="la la-ellipsis-h"></i>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="dropdown-item">
                                    <a href="javascript:void(0);" class="dropdown-link favorite">
                                        <i class="la la-heart-o"></i>
                                        <span>Favorite</span>
                                    </a>
                                </li>
                                <li class="dropdown-item">
                                    <a href="javascript:void(0);" class="dropdown-link">
                                        <i class="la la-plus"></i>
                                        <span>Add to Playlist</span>
                                    </a>
                                </li>
                                <li class="dropdown-item">
                                    <a href="javascript:void(0);" class="dropdown-link">
                                        <i class="la la-download"></i>
                                        <span>Download</span>
                                    </a>
                                </li>
                                <li class="dropdown-item">
                                    <a href="javascript:void(0);" class="dropdown-link">
                                        <i class="la la-share-alt"></i>
                                        <span>Share</span>
                                    </a>
                                </li>
                                <li class="dropdown-item">
                                    <a href="song-details.html" class="dropdown-link">
                                        <i class="la la-info-circle"></i>
                                        <span>Song Info</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <!-- End | Custom List Item -->

                <!-- Begin | Custom List Item -->
                <li class="custom-list--item list-group-item">
                    <div class="text-dark custom-card--inline amplitude-song-container amplitude-play-pause" data-amplitude-song-index="6" data-amplitude-playlist="special">
                        <div class="custom-card--inline-img">
                            <img src="../assets/images/cover/small/7.jpg" alt="" class="card-img--radius-sm">
                        </div>

                        <div class="custom-card--inline-desc">
                            <p class="text-truncate mb-0">Deep inside</p>
                            <p class="text-truncate text-muted font-sm">Pimila Holliwy</p>
                        </div>
                    </div>
                    <ul class="custom-card--labels d-flex ml-auto">
                        <li class="dropleft">
                            <a href="javascript:void(0);" class="btn btn-icon-only p-0 w-auto h-auto" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="la la-ellipsis-h"></i>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="dropdown-item">
                                    <a href="javascript:void(0);" class="dropdown-link favorite">
                                        <i class="la la-heart-o"></i>
                                        <span>Favorite</span>
                                    </a>
                                </li>
                                <li class="dropdown-item">
                                    <a href="javascript:void(0);" class="dropdown-link">
                                        <i class="la la-plus"></i>
                                        <span>Add to Playlist</span>
                                    </a>
                                </li>
                                <li class="dropdown-item">
                                    <a href="javascript:void(0);" class="dropdown-link">
                                        <i class="la la-download"></i>
                                        <span>Download</span>
                                    </a>
                                </li>
                                <li class="dropdown-item">
                                    <a href="javascript:void(0);" class="dropdown-link">
                                        <i class="la la-share-alt"></i>
                                        <span>Share</span>
                                    </a>
                                </li>
                                <li class="dropdown-item">
                                    <a href="song-details.html" class="dropdown-link">
                                        <i class="la la-info-circle"></i>
                                        <span>Song Info</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <!-- End | Custom List Item -->
            </ul>
        </div>
    </aside>
    <!-- End | Right Sidebar -->

</div>
<!-- End | Wrapper -->

<!-- Begin | Language Modal -->
<div class="modal fade" id="lang" tabindex="-1" role="dialog" aria-labelledby="langTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <div>
                    <h5 class="modal-title mb-1" id="langTitle">Language</h5>
                    <p class="text-muted">Please select the language(s) of the music you listen to.</p>
                </div>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <ul class="list-group row">
                    <li class="list-group-item border-0 col-sm-6">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="ch1" checked>
                            <label class="custom-control-label" for="ch1">Hindi</label>
                        </div>
                    </li>
                    <li class="list-group-item border-0 col-sm-6">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="ch2">
                            <label class="custom-control-label" for="ch2">Punjabi</label>
                        </div>
                    </li>
                    <li class="list-group-item border-0 col-sm-6">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="ch3">
                            <label class="custom-control-label" for="ch3">Tamil</label>
                        </div>
                    </li>
                    <li class="list-group-item border-0 col-sm-6">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="ch4">
                            <label class="custom-control-label" for="ch4">Bengali</label>
                        </div>
                    </li>
                    <li class="list-group-item border-0 col-sm-6">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="ch5">
                            <label class="custom-control-label" for="ch5">Kannada</label>
                        </div>
                    </li>
                    <li class="list-group-item border-0 col-sm-6">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="ch6">
                            <label class="custom-control-label" for="ch6">Gujarati</label>
                        </div>
                    </li>
                    <li class="list-group-item border-0 col-sm-6">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="ch7">
                            <label class="custom-control-label" for="ch7">Urdu</label>
                        </div>
                    </li>
                    <li class="list-group-item border-0 col-sm-6">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="ch8">
                            <label class="custom-control-label" for="ch8">Rajasthani</label>
                        </div>
                    </li>
                    <li class="list-group-item border-0 col-sm-6">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="ch9" checked>
                            <label class="custom-control-label" for="ch9">English</label>
                        </div>
                    </li>
                    <li class="list-group-item border-0 col-sm-6">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="ch10">
                            <label class="custom-control-label" for="ch10">Telugu</label>
                        </div>
                    </li>
                    <li class="list-group-item border-0 col-sm-6">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="ch11">
                            <label class="custom-control-label" for="ch11">Bhojpuri</label>
                        </div>
                    </li>
                    <li class="list-group-item border-0 col-sm-6">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="ch12">
                            <label class="custom-control-label" for="ch12">Malayalam</label>
                        </div>
                    </li>
                    <li class="list-group-item border-0 col-sm-6">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="ch13">
                            <label class="custom-control-label" for="ch13">Marathi</label>
                        </div>
                    </li>
                    <li class="list-group-item border-0 col-sm-6">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="ch14">
                            <label class="custom-control-label" for="ch14">Haryanvi</label>
                        </div>
                    </li>
                    <li class="list-group-item border-0 col-sm-6">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="ch15">
                            <label class="custom-control-label" for="ch15">Assamese</label>
                        </div>
                    </li>
                    <li class="list-group-item border-0 col-sm-6">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="ch16">
                            <label class="custom-control-label" for="ch16">Odia</label>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="modal-footer text-center d-block">
                <button type="button" class="btn btn-primary btn-pill" id="langApply">Apply</button>
            </div>
        </div>
    </div>
</div>
<!-- End | Language Modal -->

<!-- Back Drop -->
<div class="backdrop header-backdrop"></div>
<div class="backdrop sidebar-backdrop"></div>

<!-- Scripts -->
<script src="../assets/js/vendors.bundle.js"></script>
<script src="../assets/js/scripts.bundle.js"></script>
</body>
</html>