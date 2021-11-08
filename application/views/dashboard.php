<div class="container-fluid">

    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <!-- <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div> -->
        <!-- <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="<?php echo base_url('assets/image/1.png') ?>" class="d-block w-100" alt="..."> <br>
            </div>
        </div> -->

        <div class="row text-center">
            <?php foreach ($product as $prd) : ?>

                <div class="card ml-2" style="width: 12rem;">
                    <img src="<?php echo base_url() . '/uploads/' . $prd->image ?>" class="card-img-top " height="200" width="200" alt="...">
                    <div class="card-body">
                        <h5 class="card-title mb-1"><?php echo $prd->nama_product ?></h5>
                        <small class="badge text-center mb-3"><?php echo $prd->keterangan ?></small>
                        <span class="badge badge-pill badge-warning mb-3">Rp. <?php echo number_format($prd->harga, 0, ',', '.') ?></span>
                        <form method="POST" action="<?php echo base_url();?>/dashboard/add_to_cart">
                            <input type="hidden" name="id_product" value="<?php echo $prd->id_product;?>" class="form-control" placeholder="Jumlah barang">
                            <input type="text" name="qty" class="form-control mb-3" placeholder="Jumlah barang">
                            <button style="float:left;" type="submit" class="btn btn-sm btn-primary">Add to cart</button>
                        </form>
                        <?php echo anchor(
                            'dashboard/detail/' . $prd->id_product,
                            '<div style="float:right;" class="btn btn-sm btn-success">Detail</div>') ?>
                    </div>
                </div>

            <?php endforeach; ?>

        </div>
    </div>
