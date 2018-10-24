
<h2><?php echo $title ?></h2>

<div class="row">
    <div class="col-md-8 mx-auto">
        <?php if(validation_errors()){ ?>
            <div class="alert alert-dismissible alert-danger">
            <?php echo validation_errors(); ?>
            </div>
        <?php } ?>

        <?php echo form_open('users/register') ?>
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" class="form-control" placeholder="Your Name" id="">
        </div>
        <div class="form-group">
            <label for="name">Email</label>
            <input type="text" name="email" class="form-control" placeholder="Your Name" id="">
        </div>
        <div class="form-group">
            <label for="name">Username</label>
            <input type="text" name="username" class="form-control" placeholder="Your Name" id="">
        </div>
        <div class="form-group">
            <label for="name">Password</label>
            <input type="password" name="password" class="form-control" placeholder="Your Name" id="">
        </div>
        <div class="form-group">
            <label for="name">Confirm Password</label>
            <input type="password" name="matchpassword" class="form-control" placeholder="Your Name" id="">
        </div>

        <div class="form-group">
            <input type="submit" value="Register" class="btn btn-success">
        </div>
        <?php echo form_close(); ?>

    </div>
</div>
