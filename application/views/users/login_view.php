<h2>Login form</h2>
<?php $attribute = array('id'=>'login_form','class' => "form-horizontal"); ?>

<?php if($this->session->flashdata('errors')){?>
<?php  echo $this->session->flashdata('errors'); ?>
<?php } ?>

<?php echo form_open('users/login',$attribute) ?>

<div class="form-group">
<?php echo form_label('Username'); ?>
<?php $data = array('class' => 'form-control','name' => 'username','placeholder' => 'Enter User Name'); ?>
<?php echo form_input($data); ?>
</div>


<div class="form-group">
<?php echo form_label('Password'); ?>
<?php $data2 = array('class' => 'form-control','type'=> 'password','name' => 'password','placeholder' => 'Enter User Password'); ?>
<?php echo form_input($data2); ?>
</div>

<div class="form-group">
<?php echo form_label('Confirm Password'); ?>
<?php $data2 = array('class' => 'form-control','type'=> 'password','name' => 'confirm_password','placeholder' => 'Confirm Password'); ?>
<?php echo form_input($data2); ?>
</div>



<div class="form-group">
<?php $data2 = array('class' => 'btn btn-success','name' => 'login','value' => 'Login'); ?>
<?php echo form_submit($data2); ?>
</div>



<?php echo form_close(); ?>