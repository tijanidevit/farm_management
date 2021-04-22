<!DOCTYPE html>
<html lang="ng">

<head>
    <title>Saamu Alajo</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8" />
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
    <link href="css/font-awesome.css" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Source+Sans+Pro:200,200i,300,300i,400,400i,600,600i,700,700i,900" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800" rel="stylesheet">
</head>

<body>
    <section class="main-content" id="home">
        <header>
            <div class="container-fluid px-lg-5 px-3">
                <nav class="py-2 d-lg-flex">
                    <div id="logo">
                        <h1><a class="navbar-brand logo" href="index.php">
                        Saamu <span class="gold-text">Alajo</span>
                            </a></h1>
                    </div>

                    <label for="drop" class="toggle">Menu</label>
                    <input type="checkbox" id="drop" />
                    <ul class="menu ml-auto">
                        <li class="active"><a href="index.php">Home</a></li>
                        <li><a href="about.php">About</a></li>
                        <li><a href="services.php">Services</a></li>
                        <li><a href="contact.php">Contact</a></li>
                        <?php 
                            if (isset($_SESSION['user'])) {
                                echo '<li><a href="logout.php">Logout</a></li>';
                            }
                            else
                            {
                                echo '<li><a href="#member">Login</a></li>';
                            }
                        ?>
                    </ul>

                </nav>
                <!-- //nav -->
            </div>
        </header>
        <!-- //header -->
