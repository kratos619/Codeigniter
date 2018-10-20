<h2><?php echo $post['title'] ?></h2>
<p class="lead"><?php echo $post['body'] ?></p>
<hr>
<?php echo form_open('/posts/delete/'.$post['id']); ?>
<input type="submit" class="btn btn-danger" value="delete">
<?php echo form_close(); ?>
<hr>
<a href="<?php echo base_url(); ?>posts/edit/<?php echo $post['slug']; ?>" class="btn btn-warning">edit</a>
