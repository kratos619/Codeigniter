<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/bootstrap.min.css">

    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="col-xs-3">
        <?php $this->load->view('users/login_view') ?>
        </div>
        <div class="col-xs-9">
         <?php $this->load->view($main_view) ?>
        </div>
    </div>
    <script src="<?php echo base_url(); ?>/assets/css/jquery.js"></script>
    <script src="<?php echo base_url(); ?>/assets/css/bootstrap.min.js"></script>
</body>
</html>