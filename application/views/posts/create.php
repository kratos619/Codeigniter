<h2><?php echo $title; ?></h2>
<?php if(validation_errors()){ ?>
<div class="alert alert-dismissible alert-danger">
<?php echo validation_errors(); ?>
</div>
<?php } ?>

<?php echo form_open('posts/create'); ?>
  
  <fieldset>
    <div class="form-group">
      <label for="title">Title</label>
      <input class="form-control" name="title" aria-describedby="title" placeholder="title" type="text">

    </div>
    <!-- <div class="form-group">
      <label for="exampleInputPassword1">Password</label>
      <input class="form-control" id="exampleInputPassword1" placeholder="Password" type="password">
    </div> -->
    
    <div class="form-group">
      <label for="exampleSelect1">Select Categories</label>
      <select name="categories_id" class="form-control" id="selectcat">
      <option >choose...</option>
        <?php foreach($categories as $cat): ?>
        <option value="<?php echo $cat['id']; ?>" ><?php echo $cat['name']; ?></option>
        <?php endforeach ?>
      </select>
    </div>
    <div class="form-group">
      <label for="exampleTextarea">Body</label>
      <textarea class="form-control" name="body" id="body" rows="6"></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </fieldset>
</form>