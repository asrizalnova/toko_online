<div class="container-fluid">

    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">


        <div class="row text-center">
            <?php foreach ($customer as $cus) : ?>

                <div class="card ml-2" style="width: 12rem;">
                    <img src="<?php echo base_url() . '/uploads/' . $cus->image ?>" class="card-img-top " height="200" width="200" alt="...">
                    <div class="card-body">
                        <h5 class="card-title mb-1"><?php echo $nama_customer ?></h5>
                        
                        <small class="badge text-center mb-3"><?php echo $cus->kategori ?></small>
                        <small class="badge text-center mb-3"><?php echo $cus->alamat ?></small>
                        <small class="badge text-center mb-3"><?php echo $cus->ttl ?></small>
                        <small class="badge text-center mb-3"><?php echo $cus->gender ?></small>
                        <small class="badge text-center mb-3"><?php echo $cus->nomor_ktp ?></small>
                        <small class="badge text-center mb-3"><?php echo $cus->username ?></small>
                        <small class="badge text-center mb-3"><?php echo $cus->password ?></small>
                        <small class="badge text-center mb-3"><?php echo $cus->tgl_bergabung ?></small>
                    </div>
                </div>

            <?php endforeach; ?>

        </div>
    </div>
