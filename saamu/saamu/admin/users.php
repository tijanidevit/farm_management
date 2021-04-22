<?php 
    include_once '../includes/connect.php';
    include_once 'dependencies/session.php';
    session_unexist();
    
    $user_query = $db->prepare("SELECT * FROM users");
    $user_query->execute([]);
    $user_row = $user_query->fetchAll();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Homepage</title>
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/style.css" type="text/css" media="all" />
    <link href="../css/font-awesome.css" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Source+Sans+Pro:200,200i,300,300i,400,400i,600,600i,700,700i,900" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800" rel="stylesheet">
</head>
<body>
    <div class="container">
        <div class="jumbotron mt-5">
            <h4 class="mt-5 mb-5 text-center">
                 <a href="homepage.php">Homepage</a>
            </h4>
            <div class="card p-4">
                <div class="card-item">
                    <div class="card-body">
                        <h3>Users</h3>
                        
                    <table class = 'table table-striped table-hover'>
                        <thead>
                            <th>Fullname</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Balance</th>
                        </thead>

                        <tbody>
                            <?php 
                                foreach ($user_row as $row) {
                            ?>
                                    <tr>
                                        <td> <?php echo $row['fullname'] ?></td>
                                        <td> <?php echo $row['email'] ?></td>
                                        <td> <?php echo $row['phone'] ?></td>
                                        <td> <?php echo $row['balance'] ?></td>
                                    </tr>
                            <?php
                                }
                            ?>
                        </tbody>
                    </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>