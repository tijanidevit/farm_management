<!DOCTYPE html>
<html lang="en">
<?php include_once 'components/head.php'; ?>
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
<?php include_once 'components/sidebar.php'; ?>
    
    <!-- End | Sidebar -->

    <!-- Begin | Page Wrapper [[ Find at scss/framework/base/wrapper/wrapper.scss ]] -->
    <main id="pageWrapper">

        <!-- Begin | Header [[ Find at scss/framework/base/header/header.scss ]] -->
        <?php include_once 'components/header.php'; ?>
        <!-- End | Header -->

        <!-- Page Banner [[ Find at scss/base/core.scss ]] -->
        <div class="banner bg-home"></div>

        <!-- Begin | Main Container [[ Find at scss/base/core.scss ]] -->
        <div class="main-container" id="appRoute">

            <!-- Begin | Section [[ Find at scss/base/core.scss ]] -->
            <div class="section">

                <div class="heading">
                    <div class="d-flex flex-wrap align-items-end">
                        <div class="flex-grow-1">
                            <h4>Top Charts</h4>
                            <p>Listen top chart</p>
                        </div>
                        <a href="songs.html" class="btn btn-sm btn-pill btn-air btn-primary">View All</a>
                    </div>
                    <hr>
                </div>

                <div class="carousel-item-5 arrow-pos-3">
                    <div class="custom-card">
                        <div class="custom-card--img">
                            <div class="custom-card--info">
                                <ul class="custom-card--labels d-flex">
                                    <li><span class="badge badge-pill badge-warning"><i class="la la-star"></i></span></li>
                                </ul>
                                <div class="dropdown dropdown-icon">
                                    <a href="javascript:void(0);" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="ion-md-more"></i>
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-right">
                                        <li class="dropdown-item">
                                            <a href="javascript:void(0);" class="dropdown-link favorite">
                                                <i class="la la-heart-o"></i>
                                            </a>
                                        </li>
                                        <li class="dropdown-item">
                                            <a href="javascript:void(0);" class="dropdown-link">
                                                <i class="la la-plus"></i>
                                            </a>
                                        </li>
                                        <li class="dropdown-item">
                                            <a href="javascript:void(0);" class="dropdown-link">
                                                <i class="la la-download"></i>
                                            </a>
                                        </li>
                                        <li class="dropdown-item">
                                            <a href="javascript:void(0);" class="dropdown-link">
                                                <i class="la la-share-alt"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <a href="javascript:void(0);" class="external" data-audio='{"name": "I Love You Mummy", "artist": "Arebica Luna", "album": "Mummy", "url": "../assets/audio/ringtone-1.mp3", "cover_art_url": "../assets/images/cover/small/1.jpg"}'>
                                <img src="../assets/images/cover/large/1.jpg" alt="I Love You Mummy" class="card-img--radius-lg">
                            </a>
                        </div>

                        <a href="song-details.html" class="custom-card--link mt-2">
                            <h6>I Love You Mummy</h6>
                            <p>Arebica Luna</p>
                        </a>
                    </div>
                    <div class="custom-card">
                        <div class="custom-card--img">
                            <div class="custom-card--info">
                                <div class="dropdown dropdown-icon">
                                    <a href="javascript:void(0);" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="ion-md-more"></i>
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-right">
                                        <li class="dropdown-item">
                                            <a href="javascript:void(0);" class="dropdown-link favorite">
                                                <i class="la la-heart-o"></i>
                                            </a>
                                        </li>
                                        <li class="dropdown-item">
                                            <a href="javascript:void(0);" class="dropdown-link">
                                                <i class="la la-plus"></i>
                                            </a>
                                        </li>
                                        <li class="dropdown-item">
                                            <a href="javascript:void(0);" class="dropdown-link">
                                                <i class="la la-download"></i>
                                            </a>
                                        </li>
                                        <li class="dropdown-item">
                                            <a href="javascript:void(0);" class="dropdown-link">
                                                <i class="la la-share-alt"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <a href="javascript:void(0);" class="external" data-audio='{"name": "Shack your butty", "artist": "Gerrina Linda", "album": "Hot Shot", "url": "../assets/audio/ringtone-2.mp3", "cover_art_url": "../assets/images/cover/small/2.jpg"}'>
                                <img src="../assets/images/cover/large/2.jpg" alt="Shack your butty" class="card-img--radius-lg">
                            </a>
                        </div>

                        <a href="song-details.html" class="custom-card--link mt-2">
                            <h6>Shack your butty</h6>
                            <p>Gerrina Linda</p>
                        </a>
                    </div>
                    <div class="custom-card">
                        <div class="custom-card--img">
                            <div class="custom-card--info">
                                <ul class="custom-card--labels d-flex">
                                    <li><span class="badge badge-pill badge-danger"><i class="la la-heart"></i></span></li>
                                </ul>
                                <div class="dropdown dropdown-icon">
                                    <a href="javascript:void(0);" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="ion-md-more"></i>
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-right">
                                        <li class="dropdown-item">
                                            <a href="javascript:void(0);" class="dropdown-link favorite">
                                                <i class="la la-heart-o"></i>
                                            </a>
                                        </li>
                                        <li class="dropdown-item">
                                            <a href="javascript:void(0);" class="dropdown-link">
                                                <i class="la la-plus"></i>
                                            </a>
                                        </li>
                                        <li class="dropdown-item">
                                            <a href="javascript:void(0);" class="dropdown-link">
                                                <i class="la la-download"></i>
                                            </a>
                                        </li>
                                        <li class="dropdown-item">
                                            <a href="javascript:void(0);" class="dropdown-link">
                                                <i class="la la-share-alt"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <a href="javascript:void(0);" class="external" data-audio='{"name": "Do it your way(Female)", "artist": "Zunira Willy & Nutty Nina", "album": "Own Way", "url": "../assets/audio/ringtone-3.mp3", "cover_art_url": "../assets/images/cover/small/3.jpg"}'>
                                <img src="../assets/images/cover/large/3.jpg" alt="Do it your way(Female)" class="card-img--radius-lg">
                            </a>
                        </div>

                        <a href="song-details.html" class="custom-card--link mt-2">
                            <h6>Do it your way(Female)</h6>
                            <p>Zunira Willy & Nutty Nina</p>
                        </a>
                    </div>
                    <div class="custom-card">
                        <div class="custom-card--img">
                            <div class="custom-card--info">
                                <div class="dropdown dropdown-icon">
                                    <a href="javascript:void(0);" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="ion-md-more"></i>
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-right">
                                        <li class="dropdown-item">
                                            <a href="javascript:void(0);" class="dropdown-link favorite">
                                                <i class="la la-heart-o"></i>
                                            </a>
                                        </li>
                                        <li class="dropdown-item">
                                            <a href="javascript:void(0);" class="dropdown-link">
                                                <i class="la la-plus"></i>
                                            </a>
                                        </li>
                                        <li class="dropdown-item">
                                            <a href="javascript:void(0);" class="dropdown-link">
                                                <i class="la la-download"></i>
                                            </a>
                                        </li>
                                        <li class="dropdown-item">
                                            <a href="javascript:void(0);" class="dropdown-link">
                                                <i class="la la-share-alt"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <a href="javascript:void(0);" class="external" data-audio='{"name": "Say yes", "artist": "Johnny Marro", "album": "Say yes", "url": "../assets/audio/ringtone-4.mp3", "cover_art_url": "../assets/images/cover/small/4.jpg"}'>
                                <img src="../assets/images/cover/large/4.jpg" alt="Say yes" class="card-img--radius-lg">
                            </a>
                        </div>

                        <a href="song-details.html" class="custom-card--link mt-2">
                            <h6>Say yes</h6>
                            <p>Johnny Marro</p>
                        </a>
                    </div>
                    <div class="custom-card">
                        <div class="custom-card--img">
                            <div class="custom-card--info">
                                <ul class="custom-card--labels d-flex">
                                    <li><span class="badge badge-pill badge-warning"><i class="la la-star"></i></span></li>
                                    <li><span class="badge badge-pill badge-danger"><i class="la la-heart"></i></span></li>
                                </ul>
                                <div class="dropdown dropdown-icon">
                                    <a href="javascript:void(0);" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="ion-md-more"></i>
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-right">
                                        <li class="dropdown-item">
                                            <a href="javascript:void(0);" class="dropdown-link favorite">
                                                <i class="la la-heart-o"></i>
                                            </a>
                                        </li>
                                        <li class="dropdown-item">
                                            <a href="javascript:void(0);" class="dropdown-link">
                                                <i class="la la-plus"></i>
                                            </a>
                                        </li>
                                        <li class="dropdown-item">
                                            <a href="javascript:void(0);" class="dropdown-link">
                                                <i class="la la-download"></i>
                                            </a>
                                        </li>
                                        <li class="dropdown-item">
                                            <a href="javascript:void(0);" class="dropdown-link">
                                                <i class="la la-share-alt"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <a href="javascript:void(0);" class="external" data-audio='{"name": "Where is your letter", "artist": "Jina Moore & Lenisa Gory", "album": "Letter", "url": "../assets/audio/ringtone-5.mp3", "cover_art_url": "../assets/images/cover/small/5.jpg"}'>
                                <img src="../assets/images/cover/large/5.jpg" alt="Where is your letter" class="card-img--radius-lg">
                            </a>
                        </div>

                        <a href="song-details.html" class="custom-card--link mt-2">
                            <h6>Where is your letter</h6>
                            <p>Jina Moore & Lenisa Gory</p>
                        </a>
                    </div>
                    <div class="custom-card">
                        <div class="custom-card--img">
                            <div class="custom-card--info">
                                <ul class="custom-card--labels d-flex">
                                    <li><span class="badge badge-pill badge-warning"><i class="la la-star"></i></span></li>
                                </ul>
                                <div class="dropdown dropdown-icon">
                                    <a href="javascript:void(0);" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="ion-md-more"></i>
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-right">
                                        <li class="dropdown-item">
                                            <a href="javascript:void(0);" class="dropdown-link favorite">
                                                <i class="la la-heart-o"></i>
                                            </a>
                                        </li>
                                        <li class="dropdown-item">
                                            <a href="javascript:void(0);" class="dropdown-link">
                                                <i class="la la-plus"></i>
                                            </a>
                                        </li>
                                        <li class="dropdown-item">
                                            <a href="javascript:void(0);" class="dropdown-link">
                                                <i class="la la-download"></i>
                                            </a>
                                        </li>
                                        <li class="dropdown-item">
                                            <a href="javascript:void(0);" class="dropdown-link">
                                                <i class="la la-share-alt"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <a href="javascript:void(0);" class="external" data-audio='{"name": "Hey not me", "artist": "Rasomi Pelina", "album": "Find Soul", "url": "../assets/audio/ringtone-6.mp3", "cover_art_url": "../assets/images/cover/small/6.jpg"}'>
                                <img src="../assets/images/cover/large/6.jpg" alt="Hey not me" class="card-img--radius-lg">
                            </a>
                        </div>

                        <a href="song-details.html" class="custom-card--link mt-2">
                            <h6>Hey not me</h6>
                            <p>Rasomi Pelina</p>
                        </a>
                    </div>
                </div>

            </div>
            <!-- End | Section -->

            <div class="row">
                <!-- Begin | Section [[ Find at scss/base/core.scss ]] -->
                <div class="section col-xl-7 col-lg-6">
                    <div class="row h-100">
                        <div class="col-sm-5 pb-4">
                            <div class="h-100 event event-v bg-img bg-img-radius-lg" style="background-image: url('../assets/images/background/vertical/1.jpg')">
                                <div class="event-content p-4">
                                    <a href="event-details.html"><h6>New Year Party</h6></a>
                                    <span class="countdown mb-3"></span>
                                    <a href="#" class="btn btn-bold btn-pill btn-air btn-warning btn-sm">Buy Ticket</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-7">
                            <div class="h-50 pb-4">
                                <div class="h-100 event event-h bg-img bg-img-radius-lg" style="background-image: url('../assets/images/background/horizontal/1.jpg')">
                                    <div class="event-content p-4">
                                        <a href="event-details.html"><h6>Dance with DJ Nowan</h6></a>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae consectetur, ex explicabo.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="h-50 pb-4">
                                <div class="h-100 event event-h bg-img bg-img-radius-lg" style="background-image: url('../assets/images/background/horizontal/2.jpg')">
                                    <div class="event-content p-4">
                                        <a href="event-details.html"><h6>Move You's Legs</h6></a>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae consectetur, ex explicabo.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End | Section -->

                <!-- Begin | Section [[ Find at scss/base/core.scss ]] -->
                <div class="section col-xl-5 col-lg-6">
                    <!-- Begin | Line Tabs [[ Find at scss/framework/components/line-tabs.scss ]] -->
                    <ul class="nav nav-tabs line-tabs line-tabs-primary text-uppercase mb-4" id="songsList" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="recent-tab" data-toggle="tab" href="#recent" role="tab" aria-controls="recent" aria-selected="true">Recent</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="trending-tab" data-toggle="tab" href="#trending" role="tab" aria-controls="trending" aria-selected="false">Trending</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="international-tab" data-toggle="tab" href="#international" role="tab" aria-controls="international" aria-selected="false">International</a>
                        </li>
                    </ul>
                    <!-- End | Line Tabs -->

                    <!-- Begin | Tab Content -->
                    <div class="tab-content" id="songsListContent">
                        <div class="tab-pane fade show active" id="recent" role="tabpanel" aria-labelledby="recent-tab">
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
                        <div class="tab-pane fade" id="trending" role="tabpanel" aria-labelledby="trending-tab">
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
                        <div class="tab-pane fade" id="international" role="tabpanel" aria-labelledby="international-tab">
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
                    </div>
                    <!-- End | Tab Content -->

                </div>
                <!-- End | Section -->
            </div>

            <!-- Begin | Section [[ Find at scss/base/core.scss ]] -->
            <div class="section">

                <div class="heading">
                    <div class="d-flex flex-wrap align-items-end">
                        <div class="flex-grow-1">
                            <h4>New Releases</h4>
                            <p>Listen recently release music</p>
                        </div>
                        <a href="songs.html" class="btn btn-sm btn-pill btn-air btn-primary">View All</a>
                    </div>
                    <hr>
                </div>

                <div class="carousel-item-5 arrow-pos-3">
                    <div class="custom-card">
                        <div class="custom-card--img">
                            <div class="custom-card--info">
                                <ul class="custom-card--labels d-flex">
                                    <li><span class="badge badge-pill badge-warning"><i class="la la-star"></i></span></li>
                                </ul>
                                <div class="dropdown dropdown-icon">
                                    <a href="javascript:void(0);" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="ion-md-more"></i>
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-right">
                                        <li class="dropdown-item">
                                            <a href="javascript:void(0);" class="dropdown-link favorite">
                                                <i class="la la-heart-o"></i>
                                            </a>
                                        </li>
                                        <li class="dropdown-item">
                                            <a href="javascript:void(0);" class="dropdown-link">
                                                <i class="la la-plus"></i>
                                            </a>
                                        </li>
                                        <li class="dropdown-item">
                                            <a href="javascript:void(0);" class="dropdown-link">
                                                <i class="la la-download"></i>
                                            </a>
                                        </li>
                                        <li class="dropdown-item">
                                            <a href="javascript:void(0);" class="dropdown-link">
                                                <i class="la la-share-alt"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <a href="javascript:void(0);" class="external" data-audio='{"name": "I Love You Mummy", "artist": "Arebica Luna", "album": "Mummy", "url": "../assets/audio/ringtone-1.mp3", "cover_art_url": "../assets/images/cover/small/1.jpg"}'>
                                <img src="../assets/images/cover/large/1.jpg" alt="I Love You Mummy" class="card-img--radius-lg">
                            </a>
                        </div>

                        <a href="song-details.html" class="custom-card--link mt-2">
                            <h6>I Love You Mummy</h6>
                            <p>Arebica Luna</p>
                        </a>
                    </div>
                    <div class="custom-card">
                        <div class="custom-card--img">
                            <div class="custom-card--info">
                                <div class="dropdown dropdown-icon">
                                    <a href="javascript:void(0);" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="ion-md-more"></i>
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-right">
                                        <li class="dropdown-item">
                                            <a href="javascript:void(0);" class="dropdown-link favorite">
                                                <i class="la la-heart-o"></i>
                                            </a>
                                        </li>
                                        <li class="dropdown-item">
                                            <a href="javascript:void(0);" class="dropdown-link">
                                                <i class="la la-plus"></i>
                                            </a>
                                        </li>
                                        <li class="dropdown-item">
                                            <a href="javascript:void(0);" class="dropdown-link">
                                                <i class="la la-download"></i>
                                            </a>
                                        </li>
                                        <li class="dropdown-item">
                                            <a href="javascript:void(0);" class="dropdown-link">
                                                <i class="la la-share-alt"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <a href="javascript:void(0);" class="external" data-audio='{"name": "Shack your butty", "artist": "Gerrina Linda", "album": "Hot Shot", "url": "../assets/audio/ringtone-2.mp3", "cover_art_url": "../assets/images/cover/small/2.jpg"}'>
                                <img src="../assets/images/cover/large/2.jpg" alt="Shack your butty" class="card-img--radius-lg">
                            </a>
                        </div>

                        <a href="song-details.html" class="custom-card--link mt-2">
                            <h6>Shack your butty</h6>
                            <p>Gerrina Linda</p>
                        </a>
                    </div>
                    <div class="custom-card">
                        <div class="custom-card--img">
                            <div class="custom-card--info">
                                <ul class="custom-card--labels d-flex">
                                    <li><span class="badge badge-pill badge-danger"><i class="la la-heart"></i></span></li>
                                </ul>
                                <div class="dropdown dropdown-icon">
                                    <a href="javascript:void(0);" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="ion-md-more"></i>
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-right">
                                        <li class="dropdown-item">
                                            <a href="javascript:void(0);" class="dropdown-link favorite">
                                                <i class="la la-heart-o"></i>
                                            </a>
                                        </li>
                                        <li class="dropdown-item">
                                            <a href="javascript:void(0);" class="dropdown-link">
                                                <i class="la la-plus"></i>
                                            </a>
                                        </li>
                                        <li class="dropdown-item">
                                            <a href="javascript:void(0);" class="dropdown-link">
                                                <i class="la la-download"></i>
                                            </a>
                                        </li>
                                        <li class="dropdown-item">
                                            <a href="javascript:void(0);" class="dropdown-link">
                                                <i class="la la-share-alt"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <a href="javascript:void(0);" class="external" data-audio='{"name": "Do it your way(Female)", "artist": "Zunira Willy & Nutty Nina", "album": "Own Way", "url": "../assets/audio/ringtone-3.mp3", "cover_art_url": "../assets/images/cover/small/3.jpg"}'>
                                <img src="../assets/images/cover/large/3.jpg" alt="Do it your way(Female)" class="card-img--radius-lg">
                            </a>
                        </div>

                        <a href="song-details.html" class="custom-card--link mt-2">
                            <h6>Do it your way(Female)</h6>
                            <p>Zunira Willy & Nutty Nina</p>
                        </a>
                    </div>
                    <div class="custom-card">
                        <div class="custom-card--img">
                            <div class="custom-card--info">
                                <div class="dropdown dropdown-icon">
                                    <a href="javascript:void(0);" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="ion-md-more"></i>
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-right">
                                        <li class="dropdown-item">
                                            <a href="javascript:void(0);" class="dropdown-link favorite">
                                                <i class="la la-heart-o"></i>
                                            </a>
                                        </li>
                                        <li class="dropdown-item">
                                            <a href="javascript:void(0);" class="dropdown-link">
                                                <i class="la la-plus"></i>
                                            </a>
                                        </li>
                                        <li class="dropdown-item">
                                            <a href="javascript:void(0);" class="dropdown-link">
                                                <i class="la la-download"></i>
                                            </a>
                                        </li>
                                        <li class="dropdown-item">
                                            <a href="javascript:void(0);" class="dropdown-link">
                                                <i class="la la-share-alt"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <a href="javascript:void(0);" class="external" data-audio='{"name": "Say yes", "artist": "Johnny Marro", "album": "Say yes", "url": "../assets/audio/ringtone-4.mp3", "cover_art_url": "../assets/images/cover/small/4.jpg"}'>
                                <img src="../assets/images/cover/large/4.jpg" alt="Say yes" class="card-img--radius-lg">
                            </a>
                        </div>

                        <a href="song-details.html" class="custom-card--link mt-2">
                            <h6>Say yes</h6>
                            <p>Johnny Marro</p>
                        </a>
                    </div>
                    <div class="custom-card">
                        <div class="custom-card--img">
                            <div class="custom-card--info">
                                <ul class="custom-card--labels d-flex">
                                    <li><span class="badge badge-pill badge-warning"><i class="la la-star"></i></span></li>
                                    <li><span class="badge badge-pill badge-danger"><i class="la la-heart"></i></span></li>
                                </ul>
                                <div class="dropdown dropdown-icon">
                                    <a href="javascript:void(0);" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="ion-md-more"></i>
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-right">
                                        <li class="dropdown-item">
                                            <a href="javascript:void(0);" class="dropdown-link favorite">
                                                <i class="la la-heart-o"></i>
                                            </a>
                                        </li>
                                        <li class="dropdown-item">
                                            <a href="javascript:void(0);" class="dropdown-link">
                                                <i class="la la-plus"></i>
                                            </a>
                                        </li>
                                        <li class="dropdown-item">
                                            <a href="javascript:void(0);" class="dropdown-link">
                                                <i class="la la-download"></i>
                                            </a>
                                        </li>
                                        <li class="dropdown-item">
                                            <a href="javascript:void(0);" class="dropdown-link">
                                                <i class="la la-share-alt"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <a href="javascript:void(0);" class="external" data-audio='{"name": "Where is your letter", "artist": "Jina Moore & Lenisa Gory", "album": "Letter", "url": "../assets/audio/ringtone-5.mp3", "cover_art_url": "../assets/images/cover/small/5.jpg"}'>
                                <img src="../assets/images/cover/large/5.jpg" alt="Where is your letter" class="card-img--radius-lg">
                            </a>
                        </div>

                        <a href="song-details.html" class="custom-card--link mt-2">
                            <h6>Where is your letter</h6>
                            <p>Jina Moore & Lenisa Gory</p>
                        </a>
                    </div>
                    <div class="custom-card">
                        <div class="custom-card--img">
                            <div class="custom-card--info">
                                <ul class="custom-card--labels d-flex">
                                    <li><span class="badge badge-pill badge-warning"><i class="la la-star"></i></span></li>
                                </ul>
                                <div class="dropdown dropdown-icon">
                                    <a href="javascript:void(0);" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="ion-md-more"></i>
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-right">
                                        <li class="dropdown-item">
                                            <a href="javascript:void(0);" class="dropdown-link favorite">
                                                <i class="la la-heart-o"></i>
                                            </a>
                                        </li>
                                        <li class="dropdown-item">
                                            <a href="javascript:void(0);" class="dropdown-link">
                                                <i class="la la-plus"></i>
                                            </a>
                                        </li>
                                        <li class="dropdown-item">
                                            <a href="javascript:void(0);" class="dropdown-link">
                                                <i class="la la-download"></i>
                                            </a>
                                        </li>
                                        <li class="dropdown-item">
                                            <a href="javascript:void(0);" class="dropdown-link">
                                                <i class="la la-share-alt"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <a href="javascript:void(0);" class="external" data-audio='{"name": "Hey not me", "artist": "Rasomi Pelina", "album": "Find Soul", "url": "../assets/audio/ringtone-6.mp3", "cover_art_url": "../assets/images/cover/small/6.jpg"}'>
                                <img src="../assets/images/cover/large/6.jpg" alt="Hey not me" class="card-img--radius-lg">
                            </a>
                        </div>

                        <a href="song-details.html" class="custom-card--link mt-2">
                            <h6>Hey not me</h6>
                            <p>Rasomi Pelina</p>
                        </a>
                    </div>
                </div>

            </div>
            <!-- End | Section -->

            <!-- Begin | Section [[ Find at scss/base/core.scss ]] -->
            <div class="section">

                <div class="heading">
                    <div class="d-flex flex-wrap align-items-end">
                        <div class="flex-grow-1">
                            <h4>Featured Artists</h4>
                            <p>Select you best to listen</p>
                        </div>
                        <a href="artists.html" class="btn btn-sm btn-pill btn-air btn-primary">View All</a>
                    </div>
                    <hr>
                </div>

                <div class="carousel-item-6 arrow-pos-2">
                    <div class="custom-card">
                        <div class="custom-card--img">
                            <a href="artist-details.html">
                                <img src="../assets/images/cover/large/1.jpg" alt="Arebica Luna" class="card-img--radius-lg">
                            </a>
                        </div>

                        <a href="artist-details.html" class="custom-card--link mt-2">
                            <h6 class="mb-0">Arebica Luna</h6>
                        </a>
                    </div>
                    <div class="custom-card">
                        <div class="custom-card--img">
                            <a href="artist-details.html">
                                <img src="../assets/images/cover/large/2.jpg" alt="Gerrina Linda" class="card-img--radius-lg">
                            </a>
                        </div>

                        <a href="artist-details.html" class="custom-card--link mt-2">
                            <h6 class="mb-0">Gerrina Linda</h6>
                        </a>
                    </div>
                    <div class="custom-card">
                        <div class="custom-card--img">
                            <a href="artist-details.html">
                                <img src="../assets/images/cover/large/3.jpg" alt="Zunira Willy" class="card-img--radius-lg">
                            </a>
                        </div>

                        <a href="artist-details.html" class="custom-card--link mt-2">
                            <h6 class="mb-0">Zunira Willy</h6>
                        </a>
                    </div>
                    <div class="custom-card">
                        <div class="custom-card--img">
                            <a href="artist-details.html">
                                <img src="../assets/images/cover/large/4.jpg" alt="Johnny Marro" class="card-img--radius-lg">
                            </a>
                        </div>

                        <a href="artist-details.html" class="custom-card--link mt-2">
                            <h6 class="mb-0">Johnny Marro</h6>
                        </a>
                    </div>
                    <div class="custom-card">
                        <div class="custom-card--img">
                            <a href="artist-details.html">
                                <img src="../assets/images/cover/large/5.jpg" alt="Jina Moore" class="card-img--radius-lg">
                            </a>
                        </div>

                        <a href="artist-details.html" class="custom-card--link mt-2">
                            <h6 class="mb-0">Jina Moore</h6>
                        </a>
                    </div>
                    <div class="custom-card">
                        <div class="custom-card--img">
                            <a href="artist-details.html">
                                <img src="../assets/images/cover/large/6.jpg" alt="Rasomi Pelina" class="card-img--radius-lg">
                            </a>
                        </div>

                        <a href="artist-details.html" class="custom-card--link mt-2">
                            <h6 class="mb-0">Rasomi Pelina</h6>
                        </a>
                    </div>
                    <div class="custom-card">
                        <div class="custom-card--img">
                            <a href="artist-details.html">
                                <img src="../assets/images/cover/large/9.jpg" alt="Lenisa Gory" class="card-img--radius-lg">
                            </a>
                        </div>

                        <a href="artist-details.html" class="custom-card--link mt-2">
                            <h6 class="mb-0">Lenisa Gory</h6>
                        </a>
                    </div>
                    <div class="custom-card">
                        <div class="custom-card--img">
                            <a href="artist-details.html">
                                <img src="../assets/images/cover/large/10.jpg" alt="Nutty Nina" class="card-img--radius-lg">
                            </a>
                        </div>

                        <a href="artist-details.html" class="custom-card--link mt-2">
                            <h6 class="mb-0">Nutty Nina</h6>
                        </a>
                    </div>
                </div>

            </div>
            <!-- End | Section -->

            <!-- Begin | Section [[ Find at scss/base/core.scss ]] -->
            <div class="section">

                <div class="heading">
                    <div class="d-flex flex-wrap align-items-end">
                        <div class="flex-grow-1">
                            <h4>Your Playlist</h4>
                            <p>You best to listen</p>
                        </div>
                        <a href="playlist.html" class="btn btn-sm btn-pill btn-air btn-primary">View All</a>
                    </div>
                    <hr>
                </div>

                <div class="carousel-item-4 arrow-pos-1">
                    <div class="custom-card">
                        <div class="custom-card--img">
                            <a href="javascript:void(0);">
                                <img src="../assets/images/background/horizontal/1.jpg" alt="DJ Remix" class="card-img--radius-lg">
                                <span class="bg-blur">DJ Remix</span>
                            </a>
                        </div>
                    </div>
                    <div class="custom-card">
                        <div class="custom-card--img">
                            <a href="javascript:void(0);">
                                <img src="../assets/images/background/horizontal/2.jpg" alt="Rock Band" class="card-img--radius-lg">
                                <span class="bg-blur">Rock Band</span>
                            </a>
                        </div>
                    </div>
                    <div class="custom-card">
                        <div class="custom-card--img">
                            <a href="javascript:void(0);">
                                <img src="../assets/images/background/horizontal/3.jpg" alt="Solo Special" class="card-img--radius-lg">
                                <span class="bg-blur">Solo Special</span>
                            </a>
                        </div>
                    </div>
                    <div class="custom-card">
                        <div class="custom-card--img">
                            <a href="javascript:void(0);">
                                <img src="../assets/images/background/horizontal/4.jpg" alt="Romantic" class="card-img--radius-lg">
                                <span class="bg-blur">Romantic</span>
                            </a>
                        </div>
                    </div>
                    <div class="custom-card">
                        <div class="custom-card--img">
                            <a href="javascript:void(0);">
                                <img src="../assets/images/background/horizontal/5.jpg" alt="GYM" class="card-img--radius-lg">
                                <span class="bg-blur">GYM</span>
                            </a>
                        </div>
                    </div>
                    <div class="custom-card">
                        <div class="custom-card--img">
                            <a href="javascript:void(0);">
                                <img src="../assets/images/background/horizontal/6.jpg" alt="Retro Special" class="card-img--radius-lg">
                                <span class="bg-blur">Retro Special</span>
                            </a>
                        </div>
                    </div>
                </div>

            </div>
            <!-- End | Section -->

            <!-- Begin | Section [[ Find at scss/base/core.scss ]] -->
            <div class="section">

                <div class="heading">
                    <div class="d-flex flex-wrap align-items-end">
                        <div class="flex-grow-1">
                            <h4>Retro Classic</h4>
                            <p>Old is gold</p>
                        </div>
                        <a href="songs.html" class="btn btn-sm btn-pill btn-air btn-primary">View All</a>
                    </div>
                    <hr>
                </div>

                <div class="carousel-item-6 arrow-pos-3">
                    <div class="custom-card">
                        <div class="custom-card--img">
                            <div class="custom-card--info">
                                <ul class="custom-card--labels d-flex">
                                    <li><span class="badge badge-pill badge-warning"><i class="la la-star"></i></span></li>
                                </ul>
                                <div class="dropdown dropdown-icon">
                                    <a href="javascript:void(0);" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="ion-md-more"></i>
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-right">
                                        <li class="dropdown-item">
                                            <a href="javascript:void(0);" class="dropdown-link favorite">
                                                <i class="la la-heart-o"></i>
                                            </a>
                                        </li>
                                        <li class="dropdown-item">
                                            <a href="javascript:void(0);" class="dropdown-link">
                                                <i class="la la-plus"></i>
                                            </a>
                                        </li>
                                        <li class="dropdown-item">
                                            <a href="javascript:void(0);" class="dropdown-link">
                                                <i class="la la-download"></i>
                                            </a>
                                        </li>
                                        <li class="dropdown-item">
                                            <a href="javascript:void(0);" class="dropdown-link">
                                                <i class="la la-share-alt"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <a href="javascript:void(0);" class="external" data-audio='{"name": "I Love You Mummy", "artist": "Arebica Luna", "album": "Mummy", "url": "../assets/audio/ringtone-1.mp3", "cover_art_url": "../assets/images/cover/small/1.jpg"}'>
                                <img src="../assets/images/cover/large/1.jpg" alt="I Love You Mummy" class="card-img--radius-lg">
                            </a>
                        </div>

                        <a href="song-details.html" class="custom-card--link mt-2">
                            <h6>I Love You Mummy</h6>
                            <p>Arebica Luna</p>
                        </a>
                    </div>
                    <div class="custom-card">
                        <div class="custom-card--img">
                            <div class="custom-card--info">
                                <div class="dropdown dropdown-icon">
                                    <a href="javascript:void(0);" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="ion-md-more"></i>
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-right">
                                        <li class="dropdown-item">
                                            <a href="javascript:void(0);" class="dropdown-link favorite">
                                                <i class="la la-heart-o"></i>
                                            </a>
                                        </li>
                                        <li class="dropdown-item">
                                            <a href="javascript:void(0);" class="dropdown-link">
                                                <i class="la la-plus"></i>
                                            </a>
                                        </li>
                                        <li class="dropdown-item">
                                            <a href="javascript:void(0);" class="dropdown-link">
                                                <i class="la la-download"></i>
                                            </a>
                                        </li>
                                        <li class="dropdown-item">
                                            <a href="javascript:void(0);" class="dropdown-link">
                                                <i class="la la-share-alt"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <a href="javascript:void(0);" class="external" data-audio='{"name": "Shack your butty", "artist": "Gerrina Linda", "album": "Hot Shot", "url": "../assets/audio/ringtone-2.mp3", "cover_art_url": "../assets/images/cover/small/2.jpg"}'>
                                <img src="../assets/images/cover/large/2.jpg" alt="Shack your butty" class="card-img--radius-lg">
                            </a>
                        </div>

                        <a href="song-details.html" class="custom-card--link mt-2">
                            <h6>Shack your butty</h6>
                            <p>Gerrina Linda</p>
                        </a>
                    </div>
                    <div class="custom-card">
                        <div class="custom-card--img">
                            <div class="custom-card--info">
                                <ul class="custom-card--labels d-flex">
                                    <li><span class="badge badge-pill badge-danger"><i class="la la-heart"></i></span></li>
                                </ul>
                                <div class="dropdown dropdown-icon">
                                    <a href="javascript:void(0);" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="ion-md-more"></i>
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-right">
                                        <li class="dropdown-item">
                                            <a href="javascript:void(0);" class="dropdown-link favorite">
                                                <i class="la la-heart-o"></i>
                                            </a>
                                        </li>
                                        <li class="dropdown-item">
                                            <a href="javascript:void(0);" class="dropdown-link">
                                                <i class="la la-plus"></i>
                                            </a>
                                        </li>
                                        <li class="dropdown-item">
                                            <a href="javascript:void(0);" class="dropdown-link">
                                                <i class="la la-download"></i>
                                            </a>
                                        </li>
                                        <li class="dropdown-item">
                                            <a href="javascript:void(0);" class="dropdown-link">
                                                <i class="la la-share-alt"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <a href="javascript:void(0);" class="external" data-audio='{"name": "Do it your way(Female)", "artist": "Zunira Willy & Nutty Nina", "album": "Own Way", "url": "../assets/audio/ringtone-3.mp3", "cover_art_url": "../assets/images/cover/small/3.jpg"}'>
                                <img src="../assets/images/cover/large/3.jpg" alt="Do it your way(Female)" class="card-img--radius-lg">
                            </a>
                        </div>

                        <a href="song-details.html" class="custom-card--link mt-2">
                            <h6>Do it your way(Female)</h6>
                            <p>Zunira Willy & Nutty Nina</p>
                        </a>
                    </div>
                    <div class="custom-card">
                        <div class="custom-card--img">
                            <div class="custom-card--info">
                                <div class="dropdown dropdown-icon">
                                    <a href="javascript:void(0);" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="ion-md-more"></i>
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-right">
                                        <li class="dropdown-item">
                                            <a href="javascript:void(0);" class="dropdown-link favorite">
                                                <i class="la la-heart-o"></i>
                                            </a>
                                        </li>
                                        <li class="dropdown-item">
                                            <a href="javascript:void(0);" class="dropdown-link">
                                                <i class="la la-plus"></i>
                                            </a>
                                        </li>
                                        <li class="dropdown-item">
                                            <a href="javascript:void(0);" class="dropdown-link">
                                                <i class="la la-download"></i>
                                            </a>
                                        </li>
                                        <li class="dropdown-item">
                                            <a href="javascript:void(0);" class="dropdown-link">
                                                <i class="la la-share-alt"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <a href="javascript:void(0);" class="external" data-audio='{"name": "Say yes", "artist": "Johnny Marro", "album": "Say yes", "url": "../assets/audio/ringtone-4.mp3", "cover_art_url": "../assets/images/cover/small/4.jpg"}'>
                                <img src="../assets/images/cover/large/4.jpg" alt="Say yes" class="card-img--radius-lg">
                            </a>
                        </div>

                        <a href="song-details.html" class="custom-card--link mt-2">
                            <h6>Say yes</h6>
                            <p>Johnny Marro</p>
                        </a>
                    </div>
                    <div class="custom-card">
                        <div class="custom-card--img">
                            <div class="custom-card--info">
                                <ul class="custom-card--labels d-flex">
                                    <li><span class="badge badge-pill badge-warning"><i class="la la-star"></i></span></li>
                                    <li><span class="badge badge-pill badge-danger"><i class="la la-heart"></i></span></li>
                                </ul>
                                <div class="dropdown dropdown-icon">
                                    <a href="javascript:void(0);" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="ion-md-more"></i>
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-right">
                                        <li class="dropdown-item">
                                            <a href="javascript:void(0);" class="dropdown-link favorite">
                                                <i class="la la-heart-o"></i>
                                            </a>
                                        </li>
                                        <li class="dropdown-item">
                                            <a href="javascript:void(0);" class="dropdown-link">
                                                <i class="la la-plus"></i>
                                            </a>
                                        </li>
                                        <li class="dropdown-item">
                                            <a href="javascript:void(0);" class="dropdown-link">
                                                <i class="la la-download"></i>
                                            </a>
                                        </li>
                                        <li class="dropdown-item">
                                            <a href="javascript:void(0);" class="dropdown-link">
                                                <i class="la la-share-alt"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <a href="javascript:void(0);" class="external" data-audio='{"name": "Where is your letter", "artist": "Jina Moore & Lenisa Gory", "album": "Letter", "url": "../assets/audio/ringtone-5.mp3", "cover_art_url": "../assets/images/cover/small/5.jpg"}'>
                                <img src="../assets/images/cover/large/5.jpg" alt="Where is your letter" class="card-img--radius-lg">
                            </a>
                        </div>

                        <a href="song-details.html" class="custom-card--link mt-2">
                            <h6>Where is your letter</h6>
                            <p>Jina Moore & Lenisa Gory</p>
                        </a>
                    </div>
                    <div class="custom-card">
                        <div class="custom-card--img">
                            <div class="custom-card--info">
                                <ul class="custom-card--labels d-flex">
                                    <li><span class="badge badge-pill badge-warning"><i class="la la-star"></i></span></li>
                                </ul>
                                <div class="dropdown dropdown-icon">
                                    <a href="javascript:void(0);" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="ion-md-more"></i>
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-right">
                                        <li class="dropdown-item">
                                            <a href="javascript:void(0);" class="dropdown-link favorite">
                                                <i class="la la-heart-o"></i>
                                            </a>
                                        </li>
                                        <li class="dropdown-item">
                                            <a href="javascript:void(0);" class="dropdown-link">
                                                <i class="la la-plus"></i>
                                            </a>
                                        </li>
                                        <li class="dropdown-item">
                                            <a href="javascript:void(0);" class="dropdown-link">
                                                <i class="la la-download"></i>
                                            </a>
                                        </li>
                                        <li class="dropdown-item">
                                            <a href="javascript:void(0);" class="dropdown-link">
                                                <i class="la la-share-alt"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <a href="javascript:void(0);" class="external" data-audio='{"name": "Hey not me", "artist": "Rasomi Pelina", "album": "Find Soul", "url": "../assets/audio/ringtone-6.mp3", "cover_art_url": "../assets/images/cover/small/6.jpg"}'>
                                <img src="../assets/images/cover/large/6.jpg" alt="Hey not me" class="card-img--radius-lg">
                            </a>
                        </div>

                        <a href="song-details.html" class="custom-card--link mt-2">
                            <h6>Hey not me</h6>
                            <p>Rasomi Pelina</p>
                        </a>
                    </div>
                </div>

            </div>
            <!-- End | Section -->

            <!-- Begin | Section [[ Find at scss/base/core.scss ]] -->
            <div class="section">

                <div class="heading">
                    <div class="d-flex flex-wrap align-items-end">
                        <div class="flex-grow-1">
                            <h4>Radio</h4>
                            <p>Listen live now</p>
                        </div>
                        <a href="stations.html" class="btn btn-sm btn-pill btn-air btn-primary">View All</a>
                    </div>
                    <hr>
                </div>

                <div class="carousel-item-6 arrow-pos-2">
                    <div class="custom-card">
                        <div class="custom-card--img">
                            <a href="javascript:void(0);">
                                <img src="../assets/images/cover/large/1.jpg" alt="International" class="card-img--radius-lg">
                            </a>
                        </div>

                        <a href="javascript:void(0);" class="custom-card--link mt-2">
                            <h6 class="mb-0">International</h6>
                        </a>
                    </div>
                    <div class="custom-card">
                        <div class="custom-card--img">
                            <a href="javascript:void(0);">
                                <img src="../assets/images/cover/large/2.jpg" alt="Network" class="card-img--radius-lg">
                            </a>
                        </div>

                        <a href="javascript:void(0);" class="custom-card--link mt-2">
                            <h6 class="mb-0">Network</h6>
                        </a>
                    </div>
                    <div class="custom-card">
                        <div class="custom-card--img">
                            <a href="javascript:void(0);">
                                <img src="../assets/images/cover/large/3.jpg" alt="Alpha Gamma" class="card-img--radius-lg">
                            </a>
                        </div>

                        <a href="javascript:void(0);" class="custom-card--link mt-2">
                            <h6 class="mb-0">Alpha Gamma</h6>
                        </a>
                    </div>
                    <div class="custom-card">
                        <div class="custom-card--img">
                            <a href="javascript:void(0);">
                                <img src="../assets/images/cover/large/4.jpg" alt="Leanne Hutton" class="card-img--radius-lg">
                            </a>
                        </div>

                        <a href="javascript:void(0);" class="custom-card--link mt-2">
                            <h6 class="mb-0">Leanne Hutton</h6>
                        </a>
                    </div>
                    <div class="custom-card">
                        <div class="custom-card--img">
                            <a href="javascript:void(0);">
                                <img src="../assets/images/cover/large/5.jpg" alt="K S N F" class="card-img--radius-lg">
                            </a>
                        </div>

                        <a href="javascript:void(0);" class="custom-card--link mt-2">
                            <h6 class="mb-0">K S N F</h6>
                        </a>
                    </div>
                    <div class="custom-card">
                        <div class="custom-card--img">
                            <a href="javascript:void(0);">
                                <img src="../assets/images/cover/large/6.jpg" alt="Clay Gandy" class="card-img--radius-lg">
                            </a>
                        </div>

                        <a href="javascript:void(0);" class="custom-card--link mt-2">
                            <h6 class="mb-0">Clay Gandy</h6>
                        </a>
                    </div>
                    <div class="custom-card">
                        <div class="custom-card--img">
                            <a href="javascript:void(0);">
                                <img src="../assets/images/cover/large/9.jpg" alt="Get Reehl" class="card-img--radius-lg">
                            </a>
                        </div>

                        <a href="javascript:void(0);" class="custom-card--link mt-2">
                            <h6 class="mb-0">Get Reehl</h6>
                        </a>
                    </div>
                    <div class="custom-card">
                        <div class="custom-card--img">
                            <a href="javascript:void(0);">
                                <img src="../assets/images/cover/large/10.jpg" alt="Morning one" class="card-img--radius-lg">
                            </a>
                        </div>

                        <a href="javascript:void(0);" class="custom-card--link mt-2">
                            <h6 class="mb-0">Morning one</h6>
                        </a>
                    </div>
                </div>

            </div>
            <!-- End | Section -->

            <!-- Begin | Section [[ Find at scss/base/core.scss ]] -->
            <div class="section">

                <div class="heading">
                    <div class="d-flex flex-wrap align-items-end">
                        <div class="flex-grow-1">
                            <h4>Genres</h4>
                            <p>Select you genre</p>
                        </div>
                        <a href="genres.html" class="btn btn-sm btn-pill btn-air btn-primary">View All</a>
                    </div>
                    <hr>
                </div>

                <div class="carousel-item-6 arrow-pos-1">
                    <div class="custom-card">
                        <div class="custom-card--img">
                            <a href="javascript:void(0);">
                                <img src="../assets/images/background/horizontal/1.jpg" alt="Remix Songs" class="card-img--radius-md">
                                <span class="bg-blur">Remix Songs</span>
                            </a>
                        </div>
                    </div>
                    <div class="custom-card">
                        <div class="custom-card--img">
                            <a href="javascript:void(0);">
                                <img src="../assets/images/background/horizontal/2.jpg" alt="Rock Songs" class="card-img--radius-md">
                                <span class="bg-blur">Rock Songs</span>
                            </a>
                        </div>
                    </div>
                    <div class="custom-card">
                        <div class="custom-card--img">
                            <a href="javascript:void(0);">
                                <img src="../assets/images/background/horizontal/3.jpg" alt="Sufi Songs" class="card-img--radius-md">
                                <span class="bg-blur">Sufi Songs</span>
                            </a>
                        </div>
                    </div>
                    <div class="custom-card">
                        <div class="custom-card--img">
                            <a href="javascript:void(0);">
                                <img src="../assets/images/background/horizontal/4.jpg" alt="Romantic Songs" class="card-img--radius-md">
                                <span class="bg-blur">Romantic Songs</span>
                            </a>
                        </div>
                    </div>
                    <div class="custom-card">
                        <div class="custom-card--img">
                            <a href="javascript:void(0);">
                                <img src="../assets/images/background/horizontal/5.jpg" alt="Sports Songs" class="card-img--radius-md">
                                <span class="bg-blur">Sports Songs</span>
                            </a>
                        </div>
                    </div>
                    <div class="custom-card">
                        <div class="custom-card--img">
                            <a href="javascript:void(0);">
                                <img src="../assets/images/background/horizontal/6.jpg" alt="Old Songs" class="card-img--radius-lg">
                                <span class="bg-blur">Old Songs</span>
                            </a>
                        </div>
                    </div>
                </div>

            </div>
            <!-- End | Section -->

        </div>
        <!-- End | Main Container -->

        <!-- Begin | Footer [[ Find at scss/framework/base/footer/footer.scss ]] -->
        <?php include_once 'components/footer.php'; ?>
        <!-- End | Footer -->

        <!-- Begin | Audio Player [[ Find at scss/framework/base/audio-player/audio-player.scss ]] -->
        <?php include_once 'components/audio_player.php'; ?>
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
<!-- End | Language Modal -->

<!-- Back Drop -->
<div class="backdrop header-backdrop"></div>
<div class="backdrop sidebar-backdrop"></div>

<!-- Scripts -->
<script src="assets/js/vendors.bundle.js"></script>
<script src="assets/js/scripts.bundle.js"></script>
</body>
</html>