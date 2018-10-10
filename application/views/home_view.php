<p class="bg-success">
<?php if($this->session->flashdata('login_success')): ?>
<?php echo $this->session->flashdata('login_success'); ?>
<?php echo "loged in"; ?>
<?php endif; ?>

</p>

<?php if($this->session->flashdata('login_failed')): ?>
<?php echo $this->session->flashdata('login_failed'); ?>
<?php endif; ?>