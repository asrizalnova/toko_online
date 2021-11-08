<body class="bg-gradient-primary">

    <div class="container">

        <div class="card o-hidden border-0 shadow-lg col-lg-7 my-5 mx-auto">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">

                    <div class="col-lg">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
                            </div>
                            <form method="post" action="<?php echo base_url('register/index') ?>" class="user">

                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" id="exampleInputEmail" placeholder="Nama" name="nama">

                                    <?php echo form_error('nama', '<div class="text-danger small ml-2">', '</div>') ?>
                                </div>

                                <div>
                                    <select class="form-control" class="kategori">
                                        <option selected>Kategori</option>
                                        <option value="Reseller">Reseller</option>
                                        <option value="Agen">Agen</option>
                                        <option value="Master Agen">Master Agen</option>
                                        <option value="VIP Agen">VIP Agen</option>
                                    </select>
                                </div><br>

                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" id="exampleInputEmail" placeholder="Alamat" name="alamat">
                                    <?php echo form_error('alamat', '<div class="text-danger small ml-2">', '</div>') ?>

                                </div>
                                <div>
                                    <select class="form-control" class="kategori">
                                        <option selected>Gender</option>
                                        <option value="L">Laki -laki</option>
                                        <option value="P">Perempuan</option>
                                    </select>
                                </div><br>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" id="exampleInputEmail" placeholder="No Identitas / KTP" name="nomor_ktp">

                                    <?php echo form_error('nomor_ktp', '<div class="text-danger small ml-2">', '</div>') ?>

                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" id="exampleInputEmail" placeholder="Tempat Tanggal Lahir" name="ttl">

                                    <?php echo form_error('ttl', '<div class="text-danger small ml-2">', '</div>') ?>

                                </div>

                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" id="exampleInputEmail" placeholder="Username" name="username">

                                    <?php echo form_error('username', '<div class="text-danger small ml-2">', '</div>') ?>

                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Password" name="password_1">

                                        <?php echo form_error('password_1', '<div class="text-danger small ml-2">', '</div>') ?>

                                    </div>
                                    <div class="col-sm-6">
                                        <input type="password" class="form-control form-control-user" id="exampleRepeatPassword" placeholder="Repeat Password" name="password_2">
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary btn-user btn-block">Register Account</button </form>
                                <hr>
                                <div class="text-center">
                                    <a class="max" href="<?php echo base_url('auth/login') ?>
                                ">Already have an account? Login!</a>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>


</body>

</html>