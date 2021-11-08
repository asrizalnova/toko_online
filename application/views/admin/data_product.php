<div class="container-fluid">
    <button class="btn btn-sm btn-primary mb-3 center-block" data-toggle="modal" data-target="#tambah_product"><i class="fas fa-plus fa-sm"></i> Tambah Product</button>

    <table class="table table-bordered">
        <tr>
            <th>ID PRODUCT</th>
            <th>NAMA PRODUCT</th>
            <th>HARGA</th>
            <th>KATEGORI</th>
            <th>IMAGE</th>
            <th>KETERANGAN</th>
            <th>STOK</th>
            <th colspan="3">AKSI</th>
        </tr>

        <?php
        $id_product = 1;
        foreach ($product as $prd) : ?>

            <tr>
                <td><?php echo $id_product++ ?></td>
                <td><?php echo $prd->nama_product ?></td>
                <td><?php echo $prd->harga ?></td>
                <td><?php echo $prd->kategori ?></td>
                <td><?php echo $prd->image ?></td>
                <td><?php echo $prd->keterangan ?></td>
                <td><?php echo $prd->stok ?></td>
                <td><?php echo anchor('admin/data_product/edit/' . $prd->id_product, '<div class="btn btn-warning btn-sm"><i class="fa fa-edit"></i></div>') ?></td>
                <!-- <td><a href="admin/data_product/edit/<?php echo $prd->id_product ?>">edit</a></td> -->
                <td><?php echo anchor('admin/data_product/hapus/' . $prd->id_product, '<div class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></div>') ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</div>

<!-- membuat Modal untuk form tambah data -->
<div class="modal fade" id="tambah_product" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">FORM INPUT PRODUCT</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="<?php echo base_url() . 'admin/data_product/tambah_aksi'; ?>" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label>ID Product</label>
                        <input type="text" name="id_product" class="form-control">
                    </div>

                    <div class="form-group">
                        <label>Nama Product</label>
                        <input type="text" name="nama_product" class="form-control">
                    </div>

                    <div class="form-group">
                        <label> Harga</label>
                        <input type="text" name="harga" class="form-control">
                    </div>

                    <div class="form-group">
                        <label>Kategori</label>
                        <input type="text" name="kategori" class="form-control">
                    </div>

                    <div class="form-group">
                        <label>Gambar Product</label><br>
                        <input type="file" name="image" class="form-control">
                    </div>

                    <div class="form-group">
                        <label>Keterangan</label>
                        <input type="text" name="keterangan" class="form-control">
                    </div>

                    <div class="form-group">
                        <label>Stok</label>
                        <input type="text" name="stok" class="form-control">
                    </div>

            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancel</button>
                <button type="submit" class="btn btn-primary">Save</button>
            </div>
            </form>
        </div>
    </div>
</div>