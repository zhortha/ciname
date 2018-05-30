<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <title>Registrasi</title>
</head>
<div class="container">
    <div class="col-lg-4"></div>
        <div class="col-lg-5">
            <div class="jumbotron" style="margin-top:150px">
                <h3>Registration Form</h3>
                <?php echo form_open('Home/registerpage'); ?>
                <?php if (isset($_SESSION['success'])) {?>
                    <div class="alert alert-success"><?php echo $_SESSION['success'];?></div>
                <?php } ?>
                <?php echo validation_errors('<div class="alert alert-danger">','</div>');?>
                <form action="" method="post">
                    <div class="form-group">
                        <label for="">Nama:</label> <br>
                        <input type="text" class="form-control" name="nama" placeholder="Nama"> 
                    </div>

                    <div class="form-group">
                        <label for="">Kodepos:</label> <br>
                        <input type="text" class="form-control" name="kodepos" placeholder="kodepos">
                    </div>

                    <div class="form-group">
                        <label for="">Email:</label> <br>
                        <input type="text" class="form-control" name="email" placeholder="email">
                    </div>

                    <div class="form-group">
                        <label for="">Username:</label> <br>
                        <input type="text" class="form-control" name="username" placeholder="Username">
                    </div>

                    <div class="form-group">
                        <label for="">Password:</label> <br>
                        <input type="password" class="form-control" name="password" placeholder="Passwords">
                    </div>

                    <input type="submit" class="btn-primary form-control" name="submit"><br>
                    <button type="button" class="btn btn-default"><a href="<?php echo site_url('home/index')?>">Back</a></button>
                    You're a member? login <a href="<?php echo site_url('home/loginpage')?>">here</a>
                </form>
            </div>
        </div>
</div>