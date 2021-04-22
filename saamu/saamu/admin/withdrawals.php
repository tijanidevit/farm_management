<?php 
    include_once '../includes/connect.php';
    include_once 'dependencies/session.php';
    session_unexist();
    
    $withdraws_query = $db->prepare("SELECT * FROM withdraws JOIN users on users.user_id = withdraws.user_id");
    $withdraws_query->execute([]);
    $withdraws_row = $withdraws_query->fetchAll();
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
                        <h3>Withdraws</h3>
                        
                    
                        <table class = 'table table-striped table-hover'>
                        <thead>
                            <th>User</th>
                            <th>Reference Id</th>
                            <th>Amount Saved</th>
                            <th>Date</th>
                            <th>Action</th>
                        </thead>

                        <tbody>
                            <?php 
                                foreach ($withdraws_row as $row) {
                            ?>
                                    <tr>
                                        <td> <?php echo $row['fullname'] ?></td>
                                        <td> <?php echo $row['reference_id'] ?></td>
                                        <td> <?php echo $row['amount'] ?></td>
                                        <td> <?php echo $row['date'] ?></td>
                                        <td> <?php if($row['processed'] == 0)
                                            echo '<a href="confirm_withdraw.php?id='.$row['withdraws_id'].'">Confirm Withdraw</a>'
                                        ?>
                                            
                                        </td>
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