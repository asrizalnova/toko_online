<div class="form-group row">
    <label class="col-md-3 col-form-label">Category</label>
    <div class="col-md-9">
        <select class="form-control" id="category_name" name="category_name">
            <option selected="0">select..</option>
            <?php foreach ($cats as $cat) : ?>
                <option value="<?php echo $cat->cat_id; ?>"> <?php echo $cat->cat_name; ?></option>
            <?php endforeach; ?>
        </select>
    </div>
</div>