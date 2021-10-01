<br><br><br>
<div class="container">
    <div class="container-fluid">
        <div class="card mt-5">
            <div class="card-header">
                <br>
                <img alt="lazada" src="<?php echo base_url() . 'assets/img/tokopedia.png' ?>" height="35" width="140" />
                <br>
                Rincian Harga <b><?php echo $namabarang ?></b> Toko <b><?php if ($jenistoko == "1") {
                                                                            $toko = "Regular Merchant";
                                                                        } elseif ($jenistoko == "2") {
                                                                            $toko = "Power Merchant";
                                                                        } elseif ($jenistoko == "3") {
                                                                            $toko = "Power Merchant Pro";
                                                                        }
                                                                        echo $toko ?> Tokopedia </b>
                <br>
                <p><b>Dengan Untung : <?php echo $untung ?>%</b></p>
            </div>
            <table class="table table-bordered">
                <tr>
                    <th scope="col">Modal</th>
                    <td><?php echo "Rp " . number_format("$modal", 0, ",", "."); ?></td>
                </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">Modal + Biaya Layanan</th>
                        <td><?php

                            if ($jenistoko == "1") {
                                $badmin = 1.00;
                                $ongkir = 1.03;
                            } elseif ($jenistoko == "2") {
                                $badmin = 1.0125;
                                $ongkir = 1.0225;
                            } elseif ($jenistoko == "3") {
                                $badmin = 1.015;
                                $ongkir = 1.015;
                            }

                            $jenistoko = $jenistoko;

                            $persen = $untung / 100;
                            $q = 1 + $persen;

                            $hasil = $modal * $badmin * $q;

                            echo "Rp " . number_format("$hasil", 0, ",", "."); ?></td>
                    </tr>
                    <th scope="row">Biaya Layanan + B Ongkir</th>
                    <td><?php if ($jenistoko == "1") {
                            $badmin = 1.00;
                            $ongkir = 1.03;
                        } elseif ($jenistoko == "2") {
                            $badmin = 1.0125;
                            $ongkir = 1.0225;
                        } elseif ($jenistoko == "3") {
                            $badmin = 1.015;
                            $ongkir = 1.015;
                        }

                        $jenistoko = $jenistoko;

                        $persen = $untung / 100;
                        $q = 1 + $persen;

                        $hasil = $modal * $badmin * $ongkir * $q;

                        echo "Rp " . number_format("$hasil", 0, ",", "."); ?></td>
                <tfoot>

                </tfoot>
                </tbody>
            </table>
            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                <a href="<?php echo site_url('cektoko/tokopedia'); ?>">
                    <button class="btn btn-primary me-md-2" type="button">Kembali</button> </a>
                <button class="btn btn-primary" type="button">Cetak</button>
            </div>
        </div>
    </div>
</div>
<br><br><br>