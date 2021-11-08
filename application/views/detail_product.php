<div class="container-fluid">
   
        <div class="card">
        <h5 class="card-header">Detail Product</h5>
        <div class="card-body">

        <?php foreach ($product as $prd): ?>
        <div class="row">
            <div class="col-md-4">
                    <img src="<?php echo base_url().'/uploads/'.$prd->image ?>"
                     class="card-img-top">
                </div>
                <div class="col-md-8">
                    <table class="table">
                        <tr>
                            <td>Nama Product</td>
                            <td><strong><?php echo $prd->nama_product ?></strong></td>
                         </tr>

                         <tr>
                            <td>Kategori</td>
                            <td><strong><?php echo $prd->kategori ?></strong></td>
                         </tr>

                         <tr>
                            <td>keterangan</td>
                            <td><strong><?php echo $prd->keterangan ?></strong></td>
                         </tr>

                         <tr>
                            <td>Stok</td>
                            <td><strong><?php echo $prd->stok ?></strong></td>
                         </tr>

                         <tr>
                            <td>Harga</td>
                            <td><strong><div class="btn btn-sm btn-success">Rp. <?php echo 
                            number_format($prd->harga,0,',','.') ?></div></strong></td>
                         </tr>

                    </table>
                     <form method="POST" action="<?php echo base_url();?>/dashboard/add_to_cart">
                           <input type="hidden" name="id_product" value="<?php echo $prd->id_product;?>" class="form-control" placeholder="Jumlah barang">
                           <input type="text" style="width:30%;" name="qty" class="form-control mb-3" placeholder="Jumlah barang">
                           <button type="submit" style="float:left;" class="btn btn-sm btn-primary">Add to cart</button>
                     </form>

                    <?php echo anchor(
                            'dashboard/index/' . $prd->id_product,
                            '<div style="float:right;" class="btn btn-sm btn-danger">Continue Shop</div>') ?>


                </div>
         </div>
         <?php endforeach; ?>
    </div>
</div>