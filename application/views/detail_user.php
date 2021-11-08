<div class="container-fluid">

        <div class="card">
        <h5 class="card-header">Profil</h5>
        <div class="card-body">

        <?php foreach ($customer as $cus): ?>
        <div class="row">
            <div class="col-md-4">
                    <img src="<?php echo base_url(). '/uploads/' .$cus-> image ?>"
                     class="card-img-top">
                     
                </div>
                <div class="col-md-8">
                    <table class="table">
                        <tr>
                            <td>Nama Customer</td>
                            <td><strong><?php echo $cus->nama_customer ?></strong></td>
                         </tr>

                         <tr>
                            <td>Kategori</td>
                            <td><strong><?php echo $cus->kategori ?></strong></td>
                         </tr>

                         <tr>
                            <td>Alamat</td>
                            <td><strong><?php echo $cus->alamat ?></strong></td>
                         </tr>

                         <tr>
                            <td>TTL</td>
                            <td><strong><?php echo $cus->ttl ?></strong></td>
                         </tr>

                         <tr>
                            <td>Gender</td>
                            <td><strong><?php echo $cus->gender ?></strong></td>
                         </tr>

                         <tr>
                            <td>Nomor KTP</td>
                            <td><strong><?php echo $cus->nomor_ktp ?></strong></td>
                         </tr>

                         <tr>
                            <td>Username</td>
                            <td><strong><?php echo $cus->username ?></strong></td>
                         </tr>

                         <tr>
                            <td>Tgl Bergabung</td>
                            <td><strong><?php echo $cus->tgl_bergabung ?></strong></td>
                         </tr>
                         <br>
                    </table>

                          <a href="<?php echo base_url('dashboard') ?>"><div class="btn btn-sm btn-primary">Kembali</div></a>
                          
                </div>
         </div>
         <?php endforeach; ?>
    </div>
</div>
