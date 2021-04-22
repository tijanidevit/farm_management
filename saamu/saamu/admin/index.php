<?php 
    include_once '../includes/connect.php';
    include_once 'dependencies/session.php';
    session_exist();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="Admin">
    <title>Admin - Saamu Alajo</title>
    
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
                Login Here
            </h4>
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-6">
                    <div class="card p-4">
                        <div class="card-item">
                            <div class="card-body">
                                <form id="loginForm" method="post">
                                    <div class="alert alert-danger" id="message"></div>
                                    <div class="form-group">
                                        <label>Username</label>
                                        <input type="text" class="form-control" name="username" placeholder="Micheal002" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Password</label>
                                        <input type="password" class="form-control" name="password" placeholder="********" required>
                                    </div>
                                    <div class="form-group">
                                        <button class="btn btn-dark" name="login">Login</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3"></div>
            </div>
        </div>
    </div>
</body>
</html>
<script src="../js/jquery.js"></script>
<script src="../js/bootstrap.min.js"></script>

<script>
    $(document).ready(function(){ 
        $('#message').hide();
        $('#loginForm').submit(function(e){
            e.preventDefault();
            $.ajax({
                url: 'dependencies/login.php',
                type: 'POST',
                data: $('#loginForm').serialize(),
                beforeSend: function(){
                    $('.btn').append('  <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>')
                },
                success: function(data){
                    setTimeout(function() {
                        if(data == 1){
                            window.location.href = "homepage.php";
                        }
                        else{
                            $('#message').show();
                            $('#message').html(data);
                        }
                        $('.spinner-border').remove();
                    },1000);
                }
            })
        })
        $('#loginForm').click(function(){
            $('#message').hide();
        })
    })
</script>