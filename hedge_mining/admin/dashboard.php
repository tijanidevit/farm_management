<?php 
    session_start();
    if (!isset($_SESSION['admin'])) {
        header('location: login.php');
    }
    include_once '../php/conn.php';
?> 
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Dashboard</title>
    <meta name="robots" content="noindex">

    <!-- Simplebar -->
    <link type="text/css" href="assets/vendor/simplebar.min.css" rel="stylesheet">

    <!-- App CSS -->
    <link type="text/css" href="assets/css/app.css" rel="stylesheet">
    <link type="text/css" href="assets/css/app.rtl.css" rel="stylesheet">

    <!-- Material Design Icons -->
    <link type="text/css" href="assets/css/vendor-material-icons.css" rel="stylesheet">
    <link type="text/css" href="assets/css/vendor-material-icons.rtl.css" rel="stylesheet">

    <!-- Font Awesome FREE Icons -->
    <link type="text/css" href="assets/css/vendor-fontawesome-free.css" rel="stylesheet">
    <link type="text/css" href="assets/css/vendor-fontawesome-free.rtl.css" rel="stylesheet">

    <!-- ion Range Slider -->
    <link type="text/css" href="assets/css/vendor-ion-rangeslider.css" rel="stylesheet">
    <link type="text/css" href="assets/css/vendor-ion-rangeslider.rtl.css" rel="stylesheet">


    <!-- Flatpickr -->
    <link type="text/css" href="assets/css/vendor-flatpickr.css" rel="stylesheet">
    <link type="text/css" href="assets/css/vendor-flatpickr.rtl.css" rel="stylesheet">
    <link type="text/css" href="assets/css/vendor-flatpickr-airbnb.css" rel="stylesheet">
    <link type="text/css" href="assets/css/vendor-flatpickr-airbnb.rtl.css" rel="stylesheet">

    <!-- Vector Maps -->
    <link type="text/css" href="assets/vendor/jqvmap/jqvmap.min.css" rel="stylesheet">



</head>

<body class="layout-default">











    <div class="preloader"></div>

    <div class="mdk-drawer-layout js-mdk-drawer-layout" data-push data-responsive-width="992px" data-fullbleed>
        <div class="mdk-drawer-layout__content">

            <!-- Header Layout -->
            <div class="mdk-header-layout js-mdk-header-layout" data-has-scrolling-region>

                <!-- Header -->

                
                <?php include_once 'header.php'; ?>

                <!-- // END Header -->

                <!-- Header Layout Content -->
                <div class="mdk-header-layout__content mdk-header-layout__content--fullbleed mdk-header-layout__content--scrollable page">




                    <div class="container-fluid page__container">

                        <div class="row">
                            <div class="col-md">
                                <div class="card card-stats">
                                    <div class="d-flex align-items-center mb-2">
                                        <div class="card-header__title flex">Sales</div>
                                        $3,181 <span class="text-muted">&nbsp;/ $3,200</span>
                                    </div>
                                    <div class="position-relative d-flex align-items-start z-0">
                                        <div class="progress flex" style="height: 4px;">
                                            <div class="progress-bar bg-success" role="progressbar" style="width: 100%;" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <i class="material-icons text-success bg-white position-absolute" style="right: -4px; top: -10px; z-index: 2;">check_box</i>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md">
                                <div class="card card-stats">
                                    <div class="d-flex align-items-center mb-2">
                                        <div class="card-header__title flex">Visitors</div>
                                        <strong class="text-primary">340</strong>&nbsp;/ 2,122
                                    </div>
                                    <div class="progress" style="height: 4px;">
                                        <div class="progress-bar bg-primary" role="progressbar" style="width: 33%;" aria-valuenow="33" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md">
                                <div class="card card-stats">
                                    <div class="d-flex align-items-center mb-2">
                                        <div class="card-header__title flex">Expenses</div>
                                        $1,395 <span class="text-muted">&nbsp;/ $8,210</span>
                                    </div>
                                    <div class="progress" style="height: 4px;">
                                        <div class="progress-bar bg-warning" role="progressbar" style="width: 17%;" aria-valuenow="17" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row card-group-row">
                            <div class="col-lg-4 col-md-5 card-group-row__col">
                                <div class="card card-group-row__card">
                                    <div class="card-header card-header-large bg-light d-flex align-items-center">
                                        <div class="flex">
                                            <h4 class="card-header__title">Current Balance</h4>
                                            <div class="card-subtitle text-muted">This billing cycle</div>
                                        </div>
                                        <div class="dropdown ml-auto">
                                            <a href="#" data-toggle="dropdown" data-caret="false" class="text-dark-gray"><i class="material-icons">more_horiz</i></a>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a href="javascript:void(0)" class="dropdown-item">Go to Report</a>
                                                <a href="javascript:void(0)" class="dropdown-item">Next Cycle</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body d-flex align-items-center justify-content-center" style="height: 250px;">
                                        <div class="chart z-0" style="width: calc(250px - 1.25rem * 2); height: calc(250px - 1.25rem * 2);">
                                            <div style="width: calc(250px - 1.25rem * 2); height: calc(250px - 1.25rem * 2); position: absolute; top: 0; left: 0;" class="d-flex flex-column align-items-center justify-content-center">
                                                <div class="text-muted mb-1">Next bill</div>
                                                <div class="card-header__title">15.03.2019</div>
                                            </div>
                                            <canvas class="position-relative" id="billingChart" style="z-index: 2;"></canvas>
                                        </div>
                                    </div>
                                    <div class="card-body pt-0 text-center">
                                        <div class="text-amount mb-1">&dollar;37,290</div>
                                        <div class="text-muted">Current balance this billing cycle</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-8 col-md-7 card-group-row__col">
                                <div class="card card-group-row__card">
                                    <div class="card-header card-header-large bg-light d-flex align-items-center">
                                        <div class="flex">
                                            <h4 class="card-header__title">Total Transactions</h4>
                                            <div class="card-subtitle text-muted">This billing cycle</div>
                                        </div>
                                        <div class="dropdown ml-auto">
                                            <a href="#" data-toggle="dropdown" data-caret="false" class="text-dark-gray"><i class="material-icons">more_horiz</i></a>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a href="javascript:void(0)" class="dropdown-item">Action</a>
                                                <a href="javascript:void(0)" class="dropdown-item">Other Action</a>
                                                <div class="dropdown-divider"></div>
                                                <a href="javascript:void(0)" class="dropdown-item">Some Other Action</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body d-flex align-items-center">
                                        <div class="chart w-100" style="height: calc(328px - 1.25rem * 2);">
                                            <canvas id="transactionsChart"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row card-group-row">
                            <div class="col-lg-7 card-group-row__col">
                                <div class="card card-group-row__card">
                                    <div class="card-header card-header-large bg-light d-flex align-items-center">
                                        <div class="flex">
                                            <h4 class="card-header__title">Patient Statistics</h4>
                                        </div>
                                        <div class="dropdown ml-auto">
                                            <a href="#" data-toggle="dropdown" data-caret="false" class="text-dark-gray"><i class="material-icons">more_horiz</i></a>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a href="javascript:void(0)" class="dropdown-item">Some Action</a>
                                                <a href="javascript:void(0)" class="dropdown-item">Another Action</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body d-flex">
                                        <div>
                                            <div class="text-muted mb-1">Female patients</div>
                                            <div class="text-amount">64%</div>
                                        </div>
                                        <div class="border-left mx-3"></div>
                                        <div>
                                            <div class="text-muted mb-1">Male patients</div>
                                            <div class="text-amount">36%</div>
                                        </div>
                                    </div>
                                    <div class="card-body d-flex align-items-center" style="height: 250px;">
                                        <div class="chart w-100" style="height: calc(250px - 1.25rem * 2);">
                                            <canvas id="genderChart"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-5 card-group-row__col">
                                <div class="card card-group-row__card">
                                    <div class="card-header card-header-large bg-light d-flex align-items-center">
                                        <div class="flex">
                                            <h4 class="card-header__title">Upcoming Appointments</h4>
                                        </div>
                                        <div class="dropdown ml-auto">
                                            <a href="#" data-toggle="dropdown" data-caret="false" class="text-dark-gray"><i class="material-icons">more_horiz</i></a>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a href="javascript:void(0)" class="dropdown-item">Some Action</a>
                                                <a href="javascript:void(0)" class="dropdown-item">Another Action</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="list-group list-group-flush">


                                        <div class="list-group-item list-group-item-action d-flex align-items-center">
                                            <div class="avatar avatar-sm mr-3">
                                                <img src="assets/images/256_rsz_1andy-lee-642320-unsplash.jpg" alt="Avatar" class="avatar-img rounded-circle">
                                            </div>

                                            <div class="d-flex flex-column flex">
                                                <strong class="text-15pt">Jenell D. Matney</strong>
                                                <small class="text-muted">28 February 2019, 10:00 AM</small>
                                            </div>

                                            <i class="material-icons icon-muted ml-3">arrow_forward</i>
                                        </div>

                                        <div class="list-group-item list-group-item-action d-flex align-items-center">
                                            <div class="avatar avatar-sm mr-3">
                                                <img src="assets/images/256_daniel-gaffey-1060698-unsplash.jpg" alt="Avatar" class="avatar-img rounded-circle">
                                            </div>

                                            <div class="d-flex flex-column flex">
                                                <strong class="text-15pt">Sherri J. Cardenas</strong>
                                                <small class="text-muted">28 February 2019, 11:00 AM</small>
                                            </div>

                                            <i class="material-icons icon-muted ml-3">arrow_forward</i>
                                        </div>

                                        <div class="list-group-item list-group-item-action d-flex align-items-center">
                                            <div class="avatar avatar-sm mr-3">
                                                <img src="assets/images/256_jeremy-banks-798787-unsplash.jpg" alt="Avatar" class="avatar-img rounded-circle">
                                            </div>

                                            <div class="d-flex flex-column flex">
                                                <strong class="text-15pt">Joseph S. Ferland</strong>
                                                <small class="text-muted">28 February 2019, 12:00 PM</small>
                                            </div>

                                            <i class="material-icons icon-muted ml-3">arrow_forward</i>
                                        </div>

                                        <div class="list-group-item list-group-item-action d-flex align-items-center">
                                            <div class="avatar avatar-sm mr-3">
                                                <img src="assets/images/256_joao-silas-636453-unsplash.jpg" alt="Avatar" class="avatar-img rounded-circle">
                                            </div>

                                            <div class="d-flex flex-column flex">
                                                <strong class="text-15pt">Bryan K. Davis</strong>
                                                <small class="text-muted">28 February 2019, 01:00 PM</small>
                                            </div>

                                            <i class="material-icons icon-muted ml-3">arrow_forward</i>
                                        </div>

                                        <div class="list-group-item list-group-item-action d-flex align-items-center">
                                            <div class="avatar avatar-sm mr-3">
                                                <img src="assets/images/256_michael-dam-258165-unsplash.jpg" alt="Avatar" class="avatar-img rounded-circle">
                                            </div>

                                            <div class="d-flex flex-column flex">
                                                <strong class="text-15pt">Kaci M. Langston</strong>
                                                <small class="text-muted">28 February 2019, 02:00 PM</small>
                                            </div>

                                            <i class="material-icons icon-muted ml-3">arrow_forward</i>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg">
                                <div class="card">
                                    <div class="card-header card-header-large bg-white d-flex align-items-center">
                                        <h4 class="card-header__title flex m-0">Recent Activity</h4>
                                        <div data-toggle="flatpickr" data-flatpickr-wrap="true" data-flatpickr-static="true" data-flatpickr-mode="range" data-flatpickr-alt-format="d/m/Y" data-flatpickr-date-format="d/m/Y">
                                            <a href="javascript:void(0)" class="link-date" data-toggle>13/03/2018 <span class="text-muted mx-1">to</span> 20/03/2018</a>
                                            <input class="d-none" type="hidden" value="13/03/2018 to 20/03/2018" data-input>
                                        </div>
                                    </div>
                                    <div class="card-header card-header-tabs-basic nav" role="tablist">
                                        <a href="#activity_all" class="active" data-toggle="tab" role="tab" aria-controls="activity_all" aria-selected="true">All</a>
                                        <a href="#activity_purchases" data-toggle="tab" role="tab" aria-controls="activity_purchases" aria-selected="false">Purchases</a>
                                        <a href="#activity_emails" data-toggle="tab" role="tab" aria-controls="activity_emails" aria-selected="false">Emails</a>
                                        <a href="#activity_quotes" data-toggle="tab" role="tab" aria-controls="activity_quotes" aria-selected="false">Quotes</a>
                                    </div>
                                    <div class="list-group tab-content list-group-flush">
                                        <div class="tab-pane active show fade" id="activity_all">


                                            <div class="list-group-item list-group-item-action d-flex align-items-center ">
                                                <div class="avatar avatar-xs mr-3">
                                                    <span class="avatar-title rounded-circle  bg-primary">
                                                        <i class="material-icons">monetization_on</i>
                                                    </span>
                                                </div>


                                                <div class="flex">
                                                    <div class="d-flex align-items-middle">
                                                        <div class="avatar avatar-xxs mr-1">
                                                            <img src="assets/images/256_rsz_1andy-lee-642320-unsplash.jpg" alt="Avatar" class="avatar-img rounded-circle">
                                                        </div>


                                                        <strong class="text-15pt mr-1">Jenell D. Matney</strong>
                                                    </div>
                                                    <small class="text-muted">4 days ago</small>
                                                </div>
                                                <div>$573</div>


                                                <i class="material-icons icon-muted ml-3">arrow_forward</i>
                                            </div>

                                            <div class="list-group-item list-group-item-action d-flex align-items-center ">
                                                <div class="avatar avatar-xs mr-3">
                                                    <span class="avatar-title rounded-circle  bg-success">
                                                        <i class="material-icons">email</i>
                                                    </span>
                                                </div>


                                                <div class="flex">
                                                    <div class="d-flex align-items-middle">
                                                        <div class="avatar avatar-xxs mr-1">
                                                            <img src="assets/images/256_daniel-gaffey-1060698-unsplash.jpg" alt="Avatar" class="avatar-img rounded-circle">
                                                        </div>


                                                        <strong class="text-15pt mr-1">Sherri J. Cardenas</strong>
                                                    </div>
                                                    <small>Improve spacings on Projects page</small>
                                                </div>
                                                <small class="text-muted">3 days ago</small>


                                                <i class="material-icons icon-muted ml-3">arrow_forward</i>
                                            </div>

                                            <div class="list-group-item list-group-item-action d-flex align-items-center  bg-light ">
                                                <div class="avatar avatar-xs mr-3">
                                                    <span class="avatar-title rounded-circle  ">
                                                        <i class="material-icons">monetization_on</i>
                                                    </span>
                                                </div>


                                                <div class="flex">
                                                    <div class="d-flex align-items-middle">
                                                        <div class="avatar avatar-xxs mr-1">
                                                            <img src="assets/images/256_jeremy-banks-798787-unsplash.jpg" alt="Avatar" class="avatar-img rounded-circle">
                                                        </div>


                                                        <strong class="text-15pt mr-1">Joseph S. Ferland</strong>
                                                    </div>
                                                    <small class="text-muted">2 days ago</small>
                                                </div>
                                                <div>$244</div>


                                                <i class="material-icons icon-muted ml-3">arrow_forward</i>
                                            </div>

                                            <div class="list-group-item list-group-item-action d-flex align-items-center  bg-light ">
                                                <div class="avatar avatar-xs mr-3">
                                                    <span class="avatar-title rounded-circle  ">
                                                        <i class="material-icons">monetization_on</i>
                                                    </span>
                                                </div>


                                                <div class="flex">
                                                    <div class="d-flex align-items-middle">
                                                        <div class="avatar avatar-xxs mr-1">
                                                            <img src="assets/images/256_joao-silas-636453-unsplash.jpg" alt="Avatar" class="avatar-img rounded-circle">
                                                        </div>


                                                        <strong class="text-15pt mr-1">Bryan K. Davis</strong>
                                                    </div>
                                                    <small class="text-muted">1 day ago</small>
                                                </div>
                                                <div>$664</div>


                                                <i class="material-icons icon-muted ml-3">arrow_forward</i>
                                            </div>

                                            <div class="list-group-item list-group-item-action d-flex align-items-center  bg-light ">
                                                <div class="avatar avatar-xs mr-3">
                                                    <span class="avatar-title rounded-circle  ">
                                                        <i class="material-icons">description</i>
                                                    </span>
                                                </div>


                                                <div class="flex">
                                                    <div class="d-flex align-items-middle">
                                                        <div class="avatar avatar-xxs mr-1">
                                                            <img src="assets/images/256_luke-porter-261779-unsplash.jpg" alt="Avatar" class="avatar-img rounded-circle">
                                                        </div>


                                                        <strong class="text-15pt mr-1">Kaci M. Langston</strong>
                                                    </div>
                                                    <small class="text-muted">just now</small>
                                                </div>
                                                <div>$631</div>


                                                <i class="material-icons icon-muted ml-3">arrow_forward</i>
                                            </div>

                                            <div class="card-footer text-center border-0">
                                                <a class="text-muted" href="">View All (54)</a>
                                            </div>
                                        </div>
                                        <div class="tab-pane" id="activity_purchases">

                                            <div class="list-group-item list-group-item-action d-flex align-items-center ">
                                                <div class="avatar avatar-xs mr-3">
                                                    <span class="avatar-title rounded-circle  bg-primary">
                                                        <i class="material-icons">monetization_on</i>
                                                    </span>
                                                </div>

                                                <div class="flex">
                                                    <div class="d-flex align-items-middle">
                                                        <div class="avatar avatar-xxs mr-1">
                                                            <img src="assets/images/256_rsz_1andy-lee-642320-unsplash.jpg" alt="Avatar" class="avatar-img rounded-circle">
                                                        </div>
                                                        <strong class="text-15pt mr-1">Sherri J. Cardenas</strong>

                                                    </div>
                                                    <small class="text-muted">4 days ago</small>
                                                </div>
                                                <div>$573</div>
                                                <i class="material-icons icon-muted ml-3">arrow_forward</i>
                                            </div>

                                            <div class="list-group-item list-group-item-action d-flex align-items-center ">
                                                <div class="avatar avatar-xs mr-3">
                                                    <span class="avatar-title rounded-circle  bg-primary">
                                                        <i class="material-icons">monetization_on</i>
                                                    </span>
                                                </div>

                                                <div class="flex">
                                                    <div class="d-flex align-items-middle">
                                                        <div class="avatar avatar-xxs mr-1">
                                                            <img src="assets/images/256_daniel-gaffey-1060698-unsplash.jpg" alt="Avatar" class="avatar-img rounded-circle">
                                                        </div>
                                                        <strong class="text-15pt mr-1">Joseph S. Ferland</strong>

                                                    </div>
                                                    <small class="text-muted">3 days ago</small>
                                                </div>
                                                <div>$612</div>
                                                <i class="material-icons icon-muted ml-3">arrow_forward</i>
                                            </div>

                                            <div class="list-group-item list-group-item-action d-flex align-items-center ">
                                                <div class="avatar avatar-xs mr-3">
                                                    <span class="avatar-title rounded-circle  bg-primary">
                                                        <i class="material-icons">monetization_on</i>
                                                    </span>
                                                </div>

                                                <div class="flex">
                                                    <div class="d-flex align-items-middle">
                                                        <div class="avatar avatar-xxs mr-1">
                                                            <img src="assets/images/256_jeremy-banks-798787-unsplash.jpg" alt="Avatar" class="avatar-img rounded-circle">
                                                        </div>
                                                        <strong class="text-15pt mr-1">Bryan K. Davis</strong>

                                                    </div>
                                                    <small class="text-muted">2 days ago</small>
                                                </div>
                                                <div>$244</div>
                                                <i class="material-icons icon-muted ml-3">arrow_forward</i>
                                            </div>

                                            <div class="list-group-item list-group-item-action d-flex align-items-center  bg-light ">
                                                <div class="avatar avatar-xs mr-3">
                                                    <span class="avatar-title rounded-circle ">
                                                        <i class="material-icons">monetization_on</i>
                                                    </span>
                                                </div>

                                                <div class="flex">
                                                    <div class="d-flex align-items-middle">
                                                        <div class="avatar avatar-xxs mr-1">
                                                            <img src="assets/images/256_joao-silas-636453-unsplash.jpg" alt="Avatar" class="avatar-img rounded-circle">
                                                        </div>
                                                        <strong class="text-15pt mr-1">Kaci M. Langston</strong>

                                                    </div>
                                                    <small class="text-muted">1 day ago</small>
                                                </div>
                                                <div>$664</div>
                                                <i class="material-icons icon-muted ml-3">arrow_forward</i>
                                            </div>

                                            <div class="list-group-item list-group-item-action d-flex align-items-center  bg-light ">
                                                <div class="avatar avatar-xs mr-3">
                                                    <span class="avatar-title rounded-circle ">
                                                        <i class="material-icons">monetization_on</i>
                                                    </span>
                                                </div>

                                                <div class="flex">
                                                    <div class="d-flex align-items-middle">
                                                        <div class="avatar avatar-xxs mr-1">
                                                            <img src="assets/images/256_michael-dam-258165-unsplash.jpg" alt="Avatar" class="avatar-img rounded-circle">
                                                        </div>
                                                        <strong class="text-15pt mr-1"></strong>

                                                    </div>
                                                    <small class="text-muted">just now</small>
                                                </div>
                                                <div>$631</div>
                                                <i class="material-icons icon-muted ml-3">arrow_forward</i>
                                            </div>

                                        </div>
                                        <div class="tab-pane" id="activity_emails">

                                            <div class="list-group-item list-group-item-action d-flex align-items-center ">
                                                <div class="avatar avatar-xs mr-3">
                                                    <span class="avatar-title rounded-circle  bg-success">
                                                        <i class="material-icons">email</i>
                                                    </span>
                                                </div>

                                                <div class="flex">
                                                    <div class="d-flex align-items-middle">
                                                        <div class="avatar avatar-xxs mr-1">
                                                            <img src="assets/images/256_rsz_1andy-lee-642320-unsplash.jpg" alt="Avatar" class="avatar-img rounded-circle">
                                                        </div>
                                                        <strong class="text-15pt mr-1">Jenell D. Matney</strong>

                                                    </div>
                                                    <small>Confirmation required for design</small>
                                                </div>
                                                <small class="text-muted">4 days ago</small>
                                                <i class="material-icons icon-muted ml-3">arrow_forward</i>
                                            </div>

                                            <div class="list-group-item list-group-item-action d-flex align-items-center ">
                                                <div class="avatar avatar-xs mr-3">
                                                    <span class="avatar-title rounded-circle  bg-success">
                                                        <i class="material-icons">email</i>
                                                    </span>
                                                </div>

                                                <div class="flex">
                                                    <div class="d-flex align-items-middle">
                                                        <div class="avatar avatar-xxs mr-1">
                                                            <img src="assets/images/256_daniel-gaffey-1060698-unsplash.jpg" alt="Avatar" class="avatar-img rounded-circle">
                                                        </div>
                                                        <strong class="text-15pt mr-1">Sherri J. Cardenas</strong>

                                                    </div>
                                                    <small>Improve spacings on Projects page</small>
                                                </div>
                                                <small class="text-muted">3 days ago</small>
                                                <i class="material-icons icon-muted ml-3">arrow_forward</i>
                                            </div>

                                            <div class="list-group-item list-group-item-action d-flex align-items-center ">
                                                <div class="avatar avatar-xs mr-3">
                                                    <span class="avatar-title rounded-circle  bg-success">
                                                        <i class="material-icons">email</i>
                                                    </span>
                                                </div>

                                                <div class="flex">
                                                    <div class="d-flex align-items-middle">
                                                        <div class="avatar avatar-xxs mr-1">
                                                            <img src="assets/images/256_jeremy-banks-798787-unsplash.jpg" alt="Avatar" class="avatar-img rounded-circle">
                                                        </div>
                                                        <strong class="text-15pt mr-1">Joseph S. Ferland</strong>

                                                    </div>
                                                    <small>You unlocked a new Badge</small>
                                                </div>
                                                <small class="text-muted">2 days ago</small>
                                                <i class="material-icons icon-muted ml-3">arrow_forward</i>
                                            </div>

                                            <div class="list-group-item list-group-item-action d-flex align-items-center  bg-light ">
                                                <div class="avatar avatar-xs mr-3">
                                                    <span class="avatar-title rounded-circle ">
                                                        <i class="material-icons">email</i>
                                                    </span>
                                                </div>

                                                <div class="flex">
                                                    <div class="d-flex align-items-middle">
                                                        <div class="avatar avatar-xxs mr-1">
                                                            <img src="assets/images/256_joao-silas-636453-unsplash.jpg" alt="Avatar" class="avatar-img rounded-circle">
                                                        </div>
                                                        <strong class="text-15pt mr-1">Bryan K. Davis</strong>

                                                    </div>
                                                    <small>Meeting on Friday</small>
                                                </div>
                                                <small class="text-muted">1 day ago</small>
                                                <i class="material-icons icon-muted ml-3">arrow_forward</i>
                                            </div>

                                            <div class="list-group-item list-group-item-action d-flex align-items-center  bg-light ">
                                                <div class="avatar avatar-xs mr-3">
                                                    <span class="avatar-title rounded-circle ">
                                                        <i class="material-icons">email</i>
                                                    </span>
                                                </div>

                                                <div class="flex">
                                                    <div class="d-flex align-items-middle">
                                                        <div class="avatar avatar-xxs mr-1">
                                                            <img src="assets/images/256_luke-porter-261779-unsplash.jpg" alt="Avatar" class="avatar-img rounded-circle">
                                                        </div>
                                                        <strong class="text-15pt mr-1">Kaci M. Langston</strong>

                                                    </div>
                                                    <small>Design a new Brochure</small>
                                                </div>
                                                <small class="text-muted">just now</small>
                                                <i class="material-icons icon-muted ml-3">arrow_forward</i>
                                            </div>

                                        </div>
                                        <div class="tab-pane" id="activity_quotes"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg">
                                <div class="row card-group-row">
                                    <div class="col-lg-6 card-group-row__col">
                                        <div class="card card-group-row__card card-body card-body-x-lg" style="position: relative; padding-bottom: calc(80px - 1.25rem); overflow: hidden; z-index: 0;">
                                            <div class="card-header__title text-muted mb-2">Products</div>
                                            <div class="text-amount">&dollar;8,391</div>
                                            <div class="text-stats text-success">31.5% <i class="material-icons">arrow_upward</i></div>
                                            <div class="chart" style="height: 80px; position: absolute; left: 0; right: 0; bottom: 0;">
                                                <canvas id="productsChart"></canvas>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 card-group-row__col">
                                        <div class="card card-group-row__card card-body card-body-x-lg" style="position: relative; padding-bottom: calc(80px - 1.25rem); overflow: hidden; z-index: 0;">
                                            <div class="card-header__title text-muted mb-2">Courses</div>
                                            <div class="text-amount">15,021</div>
                                            <div class="text-stats text-danger">31.5% <i class="material-icons">arrow_downward</i></div>
                                            <div class="chart" style="height: 80px; position: absolute; left: 0; right: 0; bottom: 0;">
                                                <canvas id="coursesChart"></canvas>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header card-header-large bg-white">
                                        <h4 class="card-header__title">Team Skills</h4>
                                    </div>
                                    <div class="card-body">
                                        <ul class="list-unstyled list-skills">
                                            <li>
                                                <div>HTML</div>
                                                <div class="flex">
                                                    <div class="progress" style="height: 6px;">
                                                        <div class="progress-bar" role="progressbar" style="width: 61%;" aria-valuenow="61" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                                <div class="text-dark-gray"><strong>61%</strong></div>
                                            </li>
                                            <li>
                                                <div>CSS/SCSS</div>
                                                <div class="flex">
                                                    <div class="progress" style="height: 6px;">
                                                        <div class="progress-bar bg-success" role="progressbar" style="width: 39%;" aria-valuenow="39" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                                <div class="text-dark-gray"><strong>39%</strong></div>
                                            </li>
                                            <li>
                                                <div>JAVASCRIPT</div>
                                                <div class="flex">
                                                    <div class="progress" style="height: 6px;">
                                                        <div class="progress-bar bg-dark-gray" role="progressbar" style="width: 76%;" aria-valuenow="76" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                                <div class="text-dark-gray"><strong>76%</strong></div>
                                            </li>
                                            <li>
                                                <div>RUBY ON RAILS</div>
                                                <div class="flex">
                                                    <div class="progress" style="height: 6px;">
                                                        <div class="progress-bar bg-danger" role="progressbar" style="width: 28%;" aria-valuenow="28" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                                <div class="text-dark-gray"><strong>28%</strong></div>
                                            </li>
                                            <li>
                                                <div>VUEJS</div>
                                                <div class="flex">
                                                    <div class="progress" style="height: 6px;">
                                                        <div class="progress-bar bg-dark" role="progressbar" style="width: 50%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                                <div class="text-dark-gray"><strong>50%</strong></div>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="card-footer text-center border-0">
                                        <a href="#">
                                            <span class="text-muted">View All</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>



                </div>
                <!-- // END header-layout__content -->

            </div>
            <!-- // END header-layout -->

        </div>
        <!-- // END drawer-layout__content -->

        <?php include_once 'sidebar.php'; ?>
    </div>
    <!-- // END drawer-layout -->

    <!-- App Settings FAB -->
    <div id="app-settings">
        <app-settings></app-settings>
    </div>

    <!-- jQuery -->
    <script src="assets/vendor/jquery.min.js"></script>

    <!-- Bootstrap -->
    <script src="assets/vendor/popper.min.js"></script>
    <script src="assets/vendor/bootstrap.min.js"></script>

    <!-- Simplebar -->
    <script src="assets/vendor/simplebar.min.js"></script>

    <!-- DOM Factory -->
    <script src="assets/vendor/dom-factory.js"></script>

    <!-- MDK -->
    <script src="assets/vendor/material-design-kit.js"></script>

    <!-- Range Slider -->
    <script src="assets/vendor/ion.rangeSlider.min.js"></script>
    <script src="assets/js/ion-rangeslider.js"></script>

    <!-- App -->
    <script src="assets/js/toggle-check-all.js"></script>
    <script src="assets/js/check-selected-row.js"></script>
    <script src="assets/js/dropdown.js"></script>
    <script src="assets/js/sidebar-mini.js"></script>
    <script src="assets/js/app.js"></script>

    <!-- App Settings (safe to remove) -->
    <script src="assets/js/app-settings.js"></script>



    <!-- Flatpickr -->
    <script src="assets/vendor/flatpickr/flatpickr.min.js"></script>
    <script src="assets/js/flatpickr.js"></script>

    <!-- Global Settings -->
    <script src="assets/js/settings.js"></script>

    <!-- Chart.js -->
    <script src="assets/vendor/Chart.min.js"></script>

    <!-- App Charts JS -->
    <script src="assets/js/chartjs-rounded-bar.js"></script>
    <script src="assets/js/charts.js"></script>

    <!-- Vector Maps -->
    <script src="assets/vendor/jqvmap/jquery.vmap.min.js"></script>
    <script src="assets/vendor/jqvmap/maps/jquery.vmap.world.js"></script>
    <script src="assets/js/vector-maps.js"></script>

    <!-- Chart Samples -->
    <script src="assets/js/page.dashboard.js"></script>

</body>

</html>