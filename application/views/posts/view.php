<h2><?php echo $post['title'] ?></h2>
<hr>
<img class="img-fluid rounded" src="<?php echo site_url()?>assets/images/posts/<?php echo $post['postimage']; ?>" alt="">
<br>
<p class="lead"><?php echo $post['body'] ?></p>
<hr>
<?php echo form_open('/posts/delete/'.$post['id']); ?>
<input type="submit" class="btn btn-danger" value="delete">
<?php echo form_close(); ?>
<hr>
<a href="<?php echo base_url(); ?>posts/edit/<?php echo $post['slug']; ?>" class="btn btn-warning">edit</a>
<br>
<hr>

<br><br>

<?php foreach($comments as $comment ){ ?>
<ul class="list-unstyled">
  <li class="media">
    <img class="mr-3 rounded-circle" height="100" width="100" src="<?php echo site_url()?>assets/images/posts/<?php echo $post['postimage']; ?>" alt="Generic placeholder image">
    <div class="media-body">
    <h5 class=""><?php echo $comment['name'];?></h5>
      <p> <?php echo $comment['comment_body']; ?> </p>
    </div>
  </li>
</ul>
<?php }?>

<?php if(validation_errors()){ ?>
<div class="alert alert-dismissible alert-danger">
<?php echo validation_errors(); ?>
</div>
<?php } ?>

<?php echo form_open('comments/create/'.$post['id']) ?>
    <h3>Write Your Response</h3>
    <div class="row">
        <div class="col-md-6">
                <div class="form-group">
                    <input name="name" placeholder="Your Name" type="text" class="form-control">
                </div>
        </div>
        <div class="col-md-6">
                <div class="form-group">
                    <input name="email" placeholder="Email Address" type="email" class="form-control">
                </div>
        </div>
        <textarea name="commentbody" class="form-control" id="" cols="4" placeholder="Write Your Response" rows="4"></textarea>
        <input type="text" name="selected_slug" hidden value="<?php echo  $post['slug']; ?>">
    </div>
    <br>
    <button type="submit" class="btn btn-primary" >Post Comment</button>
</form>