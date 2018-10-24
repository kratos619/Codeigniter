<h2 class="text-center"><?= $title ?></h2>
<div class="row">
    <div class="col-md-5 mx-auto">
        <?php if(validation_errors()){ ?>
            <div class="alert alert-dismissible alert-danger">
            <?php echo validation_errors(); ?>
            </div>
        <?php } ?>
        <?php if(isset($login_failed)){ ?>
            <div class="alert alert-dismissible alert-danger">
            <?php echo $this->session->flashdata('login_failed');?>
            </div>
        <?php } ?>
            <br/>
            <br/>
        <?php echo form_open('users/login'); ?>
        <div class="form-group">
            <label for="username">Username</label>
            <input type="text" name="username" class="form-control">
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="text" name="password" class="form-control">
        </div>
        <div class="form-group">
            
            <input type="submit" value="Login" class="btn btn-block btn-success">
        </div>
        <?php echo form_close() ?>
            
    </div>
</div>
