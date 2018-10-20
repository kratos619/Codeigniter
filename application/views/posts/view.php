<h2><?php echo $post['title'] ?></h2>
<p class="lead"><?php echo $post['body'] ?></p>
<?php echo form_open('/posts/delete/'.$post['id']); ?>
<input type="submit" class="btn btn-danger" value="delete">
<?php echo form_close(); ?>