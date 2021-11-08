<div class="container-fluid">
    <h3><i class="fas fa-edit"></i> EDIT DATA PRODUCT</h3>

    <?php foreach ($product as $prd) : ?>

        <form method="post" action="<?php echo base_url() . 'admin/data_product/update' ?>">
</div>

<div class="form-group">
    <label>Nama Product</label>
    <input type="text" name="nama_product" class="form-control" value="<?php echo $prd->nama_product ?>">
</div>

<div class="form-group">
    <label>Harga</label>
    <input type="text" name="harga" class="form-control" value="<?php echo $prd->harga ?>">
</div>

<div class="form-group">
    <label>Kategori</label>
    <input type="text" name="kategori" class="form-control" value="<?php echo $prd->kategori ?>">
</div>

<div class="form-group">
    <label>Image</label>
    <input type="text" name="" class="form-control" value="<?php echo $prd->image ?>">
</div>

<div class="form-group">
    <label>Keterangan</label>
    <input type="hidden" name="id_product" class="form-control" value="<?php echo $prd->id_product ?>">
    <input type="text" name="keterangan" class="form-control" value="<?php echo $prd->keterangan ?>">
</div>

<div class="form-group">
    <label>Stok</label>
    <input type="text" name="stok" class="form-control" value="<?php echo $prd->stok ?>">
</div>

<button type="submit" class="btn btn-primary btn-sm">Save</button>
</form>

<?php endforeach; ?>
</div>