<div class="mdk-drawer  js-mdk-drawer" id="default-drawer" data-align="start">
            <div class="mdk-drawer__content">
                <div class="sidebar sidebar-dark sidebar-left simplebar" data-simplebar>
                    <div class="d-flex align-items-center sidebar-p-a border-bottom sidebar-account flex-shrink-0">
                        <a href="./" class="flex d-flex align-items-center text-underline-0 text-body">
                            <span class="mr-3">
                                <img src="assets/images/logo.svg" width="43" height="43" alt="avatar">
                            </span>
                            <span class="flex d-flex flex-column">
                                <strong style="font-size: 1.125rem;">Fumzy Foods</strong>
                            </span>
                        </a>
                        <div class="dropdown ml-auto">
                            <a href="#" data-toggle="dropdown" data-caret="false" class="text-muted"><i class="material-icons">keyboard_arrow_down</i></a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <div class="dropdown-item-text dropdown-item-text--lh">
                                    <div><strong>Administrator</strong></div>
                                </div>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item active" href="./">Dashboard</a>
                                <a class="dropdown-item" href="profile.php">My profile</a>
                                <a class="dropdown-item" href="edit-account.php">Edit account</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="login.php">Logout</a>
                            </div>
                        </div>
                    </div>
                    <div class="sidebar-stats row no-gutters align-items-center text-center border-bottom flex-shrink-0">
                        <div class="sidebar-stats__col col">
                            <div class="sidebar-stats__title">Orders</div>
                            <div class="sidebar-stats__value">13</div>
                        </div>
                        <div class="sidebar-stats__col col border-left">
                            <div class="sidebar-stats__title">Customers</div>
                            <div class="sidebar-stats__value">12</div>
                        </div>
                    </div>

                    <div class="py-4 text-center flex-shrink-0">
                        <a style="min-width: 157px;" href="add_food_package.php" class="btn btn-primary">Add New Product <i class="material-icons ml-1">add</i></a>
                    </div>

                    <div class="tab-content">
                        <div id="sm-menu" class="tab-pane show active" role="tabpanel" aria-labelledby="sm-menu-tab">
                            <ul class="sidebar-menu flex">
                                <li class="sidebar-menu-item active">
                                    <a class="sidebar-menu-button" href="./">
                                        <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">dvr</i>
                                        <span class="sidebar-menu-text">Dashboard</span>
                                    </a>
                                </li>

                                <li class="sidebar-menu-item">
                                    <a class="sidebar-menu-button" data-toggle="collapse" href="#orders">
                                        <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">add_shopping_cart</i>
                                        <span class="sidebar-menu-text">Orders</span>
                                        <!-- <span class="badge badge-warning rounded-circle badge-notifications ml-auto" style="padding: .1875rem .375rem;">8</span> -->
                                        <span class="sidebar-menu-toggle-icon"></span>
                                    </a>
                                    <ul class="sidebar-submenu collapse" id="orders">
                                        <li class="sidebar-menu-item">
                                            <a class="sidebar-menu-button" href="orders.php">
                                                <span class="sidebar-menu-text">Orders List</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>

                                <li class="sidebar-menu-item">
                                    <a class="sidebar-menu-button" data-toggle="collapse" href="#delivery_spots">
                                        <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">place</i>
                                        <span class="sidebar-menu-text">Delivery Spots</span>
                                        <span class="sidebar-menu-toggle-icon"></span>
                                    </a>
                                    <ul class="sidebar-submenu collapse" id="delivery_spots">
                                        <li class="sidebar-menu-item">
                                            <a class="sidebar-menu-button" href="delivery_spots.php">
                                                <span class="sidebar-menu-text">Delivery spots list</span>
                                            </a>
                                        </li>

                                        <li class="sidebar-menu-item">
                                            <a class="sidebar-menu-button" href="add_delivery_spot.php">
                                                <span class="sidebar-menu-text">Add Delivery Spot</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>

                                <li class="sidebar-menu-item">
                                    <a class="sidebar-menu-button" data-toggle="collapse" href="#food_items">
                                        <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">restaurant_menu</i>
                                        <span class="sidebar-menu-text">Food Items</span>
                                        <span class="sidebar-menu-toggle-icon"></span>
                                    </a>
                                    <ul class="sidebar-submenu collapse" id="food_items">
                                        <li class="sidebar-menu-item">
                                            <a class="sidebar-menu-button" href="food_items.php">
                                                <span class="sidebar-menu-text">Food Items List</span>
                                            </a>
                                        </li>
                                        <li class="sidebar-menu-item">
                                            <a class="sidebar-menu-button" href="add_food_item.php">
                                                <span class="sidebar-menu-text">Add Food Item</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>

                                <li class="sidebar-menu-item">
                                    <a class="sidebar-menu-button" data-toggle="collapse" href="#food_packages">
                                        <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">restaurant</i>
                                        <span class="sidebar-menu-text">Food Packages</span>
                                        <span class="sidebar-menu-toggle-icon"></span>
                                    </a>
                                    <ul class="sidebar-submenu collapse" id="food_packages">
                                        <li class="sidebar-menu-item">
                                            <a class="sidebar-menu-button" href="food_packages.php">
                                                <span class="sidebar-menu-text">Food Packages List</span>
                                            </a>
                                        </li>
                                        <li class="sidebar-menu-item">
                                            <a class="sidebar-menu-button" href="add_food_package.php">
                                                <span class="sidebar-menu-text">Add Food Package</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>

                                <li class="sidebar-menu-item">
                                    <a class="sidebar-menu-button" data-toggle="collapse" href="#customers">
                                        <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">supervisor_account</i>
                                        <span class="sidebar-menu-text">Customers</span>
                                        <span class="sidebar-menu-toggle-icon"></span>
                                    </a>
                                    <ul class="sidebar-submenu collapse" id="customers">
                                        <li class="sidebar-menu-item">
                                            <a class="sidebar-menu-button" href="customers.php">
                                                <span class="sidebar-menu-text">Customers</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="mt-auto sidebar-p-a sidebar-b-t d-flex flex-column flex-shrink-0">
                        <a class="sidebar-link mb-2" href="edit-account.php">Change Password</a>
                        <a class="sidebar-link mb-2" href="edit-account.php">Settings</a>
                        <a class="sidebar-link" href="login.php">
                            Logout
                            <i class="sidebar-menu-icon ml-2 material-icons icon-16pt">exit_to_app</i>
                        </a>
                    </div>

                </div>
            </div>
        </div>