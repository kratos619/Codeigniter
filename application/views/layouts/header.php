<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://bootswatch.com/4/flatly/bootstrap.min.css">
<script src="http://cdn.ckeditor.com/4.10.1/standard/ckeditor.js"></script>
    <title>Document</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="<?php echo base_url(); ?>">Ci Blog</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarColor02">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="<?php echo base_url(); ?>">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url(); ?>about">About</a>
      </li>
        <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url(); ?>posts">Posts</a>
      </li>
      
      
    </ul>
    <ul class="nav navbar-nav navbar-right">
        <li class="nav-item">
          <a class="nav-link" href="<?php echo base_url(); ?>posts/create">Create Post</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo base_url(); ?>categories/create">Create Categories</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo base_url(); ?>users/register">Register user</a>
        </li>
    </ul>
  </div>
</nav>

<div class="container">
<br>
<?php $message = $this->session->flashdata('post_created'); ?>
<?php if(isset($message)){ ?>
<div class="alert alert-success alert-dismissible fade show" role="alert">
   <?php echo '<p>'. $message . '</p>'; ?>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
<?php } ?>
<!-- login error -->
<?php //if(isset($error_message)){?>

<?php //  }?>
