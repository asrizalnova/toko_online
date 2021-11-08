<body>
    <nav class="navbar navbar-expand-md bg-danger navbar-danger sticky-top" id="home">
        <a href="" target="blank">
            <img src="book.png" width="70">
        </a>

        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#menu">
            <span class="navbar navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="menu">
            <ul class="navbar-nav ">
                <li class="nav-item"><a href="" class="nav-link"></i></a></li>
                <li class="nav-item"><a href="" class="nav-link"></a></li>
                <li class="nav-item"><a href="tampilan_customer.php" class="nav-link"><i class="fa fa-home"></i></a></li>
                <li class="nav-item"><a href="cart.php" class="nav-link"><i class="fa fa-shopping-cart"></i></i> (<?php echo count($_SESSION["cart"]); ?>)</a></li>
                <li class="nav-item"><a href="" class="nav-link link-disabled text-warning"><i class="fa fa-user"></i></a></li>
                <li class="nav-item"><a href="" class="nav-link text-warning"><?php echo $_SESSION["nama"] ?></a></li>
                <li class="nav-item"><a href="proses_login_customer.php?logout=true" class="nav-link text-white"><i class="fa fa-sign-out-alt"></i></a></li>
            </ul>
        </div>
    </nav>
    <br>
    <div class="container">
        <div class="card mt-3">
            <div class="card-header bg-danger">
                <h4 class="text-white">Riwayat Transaksi</h4>
            </div>
            <div class="card-body">
                <?php
                $sql = "select * from transaksi t inner join customer c
           on t.id_customer = c.id_customer
           where t.id_customer = '" . $_SESSION["id_customer"] . "' order by t.tgl desc";
                $query = mysqli_query($connect, $sql);
                ?>

                <ul class="list-group">
                    <?php foreach ($query as $transaksi) : ?>
                        <li class="list-group-item mb-4">
                            <h6>ID Transaksi: <?php echo $transaksi["id_transaksi"]; ?></h6>
                            <h6>Nama Pembeli: <?php echo $transaksi["nama"]; ?></h6>
                            <h6>Tgl. Transaksi: <?php echo $transaksi["tgl"]; ?></h6>
                            <h6>List Barang: </h6>

                            <?php
                            $sql2 = "select * from detail_transaksi d inner join buku b
                on d.kode_buku = b.kode_buku
                where d.id_transaksi = '" . $transaksi["id_transaksi"] . "'";
                            $query2 = mysqli_query($connect, $sql2);
                            ?>

                            <table class="table table-borderless">
                                <thead>
                                    <tr>
                                        <th>Judul</th>
                                        <th>Jumlah</th>
                                        <th>Harga</th>
                                        <th>Total</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $total = 0;
                                    foreach ($query2 as $detail) : ?>
                                        <tr>
                                            <td><?php echo $detail["judul"] ?></td>
                                            <td><?php echo $detail["jumlah"] ?></td>
                                            <td>Rp <?php echo number_format($detail["harga_beli"]); ?></td>
                                            <td>
                                                Rp <?php echo number_format($detail["harga_beli"] * $detail["jumlah"]); ?>
                                            </td>
                                        </tr>
                                    <?php $total += ($detail['harga_beli'] * $detail["jumlah"]);
                                    endforeach; ?>
                                </tbody>
                            </table>
                            <h6 class="text-danger">Rp <?php echo number_format($total); ?></h6>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>
    </div>
    <br>
    <div class="footer" align="center">
        &copy; Copyright by Aulia

    </div>
    <br>
</body>

</html>