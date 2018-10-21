<h2><?php echo $title; ?></h2>
<div class="row">
    <div class="col-md-6">
    <h3> Add Categories</h3>
    <hr>
        <?php if(validation_errors()){ ?>
        <div class="alert alert-dismissible alert-danger">
        <?php echo validation_errors(); ?>
        </div>
        <?php } ?>
        <?php echo form_open('categories/create'); ?>
        <fieldset>
            <div class="form-group">
            <label for="title">Cat Name</label>
            <input class="form-control" name="cat_name" aria-describedby="cat_name" placeholder="Category name" type="text">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </fieldset>
        </form>
    </div>
    <div class="col-md-6">
    <h3> All Categories</h3>
    
            <ul class="list-group list-group-flush">
            <?php foreach($categories as $category): ?>
                 <li class="list-group-item">
                    <div class="float-right">
                            <?php echo form_open('categories/delete/'.$category['id']); ?>
                        <input  type="submit" class="btn btn-danger" value="delete">
                        <?php echo form_close(); ?>
                    </div>
                    <?php echo $category['name'] ?>
                    
                 </li>
                 <?php endforeach ?>
            </ul>
    </div>
</div>
