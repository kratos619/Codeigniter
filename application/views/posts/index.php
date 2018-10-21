<h2><?= $title?></h2>
<?php foreach($posts as $post): ?>
<h3><?php echo $post['title'] ?></h3>
<div class="row">
    <div class="col-md-3">
        <img class="img-fluid rounded" src="<?php echo site_url()?>assets/images/posts/<?php echo $post['postimage']; ?>" alt="">
    </div>
    <div class="col-md-9">
    <div>
        <p class="text-muted"><small><strong class="badge badge-pill badge-primary">In: <?php echo $post['name']; ?>, Posted On: <?php echo $post['created_at']; ?></strong></small></p>
    
    </div>
    
        <p class="lead"><?php echo word_limiter( $post['body'],50); ?></p>
        <p class="text-muted"><a href="<?php echo site_url('/posts/'.$post['slug']); ?>">Read More</a></p>    
    </div>
    </div>
    <hr>
    <?php endforeach; ?>


