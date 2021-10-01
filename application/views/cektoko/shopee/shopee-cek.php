<br><br><br>
<div class="container">
    <div class="container-fluid">
        <div class="card mt-5">
            <div class="card-header">
                <img alt="Shopee" src="<?php echo base_url() . 'assets/img/shopee.png' ?>" height="50" width="160" />
                <br>
                Rincian Harga <b><?php echo $barangshopee ?></b> Toko <b><?php if ($jenisshopee == "1") {
                                                                                $toko = "Non Star";
                                                                            } elseif ($jenisshopee == "2") {
                                                                                $toko = "Non Star Khusus";
                                                                            } elseif ($jenisshopee == "3") {
                                                                                $toko = "Star";
                                                                            } elseif ($jenisshopee == "4") {
                                                                                $toko = "Star Khusus";
                                                                            } elseif ($jenisshopee == "5") {
                                                                                $toko = "Star++";
                                                                            } elseif ($jenisshopee == "6") {
                                                                                $toko = "Star++ Khusus";
                                                                            }
                                                                            echo $toko ?> Shopee</b>
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
                        <th scope="row">Modal + Biaya Admin</th>
                        <td><?php
                            if ($jenisshopee == "1") {
                                $badmin = 1.016;
                                $ongkir = 1.04;
                                $cashback = 1.014;
                            } elseif ($jenisshopee == "2") {
                                $badmin = 1.0075;
                                $ongkir = 1.03;
                                $cashback = 1.014;
                            } elseif ($jenisshopee == "3") {
                                $badmin = 1;
                                $ongkir = 1.036;
                                $cashback = 1.014;
                            } elseif ($jenisshopee == "4") {
                                $badmin = 1;
                                $ongkir = 1.025;
                                $cashback = 1.014;
                            } elseif ($jenisshopee == "5") {
                                $badmin = 1.02;
                                $ongkir = 1.036;
                                $cashback = 1.014;
                            } elseif ($jenisshopee == "6") {
                                $badmin = 1.0125;
                                $ongkir = 1.025;
                                $cashback = 1.030;
                            }

                            $jenisshopee = $jenisshopee;

                            $persen = $untung / 100;
                            $q = 1 + $persen;

                            $hasil = $modal * $badmin * $q;

                            echo "Rp " . number_format("$hasil", 0, ",", "."); ?></td>
                    </tr>
                    <th scope="row">Biaya Admin + Gratis Ongkir Xtra</th>
                    <td><?php
                        if ($jenisshopee == "1") {
                            $badmin = 1.016;
                            $ongkir = 1.04;
                            $cashback = 1.014;
                        } elseif ($jenisshopee == "2") {
                            $badmin = 1.0075;
                            $ongkir = 1.03;
                            $cashback = 1.014;
                        } elseif ($jenisshopee == "3") {
                            $badmin = 1;
                            $ongkir = 1.036;
                            $cashback = 1.014;
                        } elseif ($jenisshopee == "4") {
                            $badmin = 1;
                            $ongkir = 1.025;
                            $cashback = 1.014;
                        } elseif ($jenisshopee == "5") {
                            $badmin = 1.02;
                            $ongkir = 1.036;
                            $cashback = 1.014;
                        } elseif ($jenisshopee == "6") {
                            $badmin = 1.0125;
                            $ongkir = 1.025;
                            $cashback = 1.030;
                        }
                        $persen = $untung / 100;
                        $q = 1 + $persen;

                        $hasil = ($modal * $badmin) * $ongkir * $q;

                        echo "Rp " . number_format("$hasil", 0, ",", "."); ?></td>
                    <tr>

                        <th scope="row">Biaya Admin + Cashback</th>
                        <td scope="row"><?php
                                        if ($jenisshopee == "1") {
                                            $badmin = 1.016;
                                            $ongkir = 1.04;
                                            $cashback = 1.014;
                                        } elseif ($jenisshopee == "2") {
                                            $badmin = 1.0075;
                                            $ongkir = 1.03;
                                            $cashback = 1.014;
                                        } elseif ($jenisshopee == "3") {
                                            $badmin = 1;
                                            $ongkir = 1.036;
                                            $cashback = 1.014;
                                        } elseif ($jenisshopee == "4") {
                                            $badmin = 1;
                                            $ongkir = 1.025;
                                            $cashback = 1.014;
                                        } elseif ($jenisshopee == "5") {
                                            $badmin = 1.02;
                                            $ongkir = 1.036;
                                            $cashback = 1.014;
                                        } elseif ($jenisshopee == "6") {
                                            $badmin = 1.0125;
                                            $ongkir = 1.025;
                                            $cashback = 1.030;
                                        }

                                        $persen = $untung / 100;
                                        $q = 1 + $persen;

                                        $hasil = ($modal * $badmin) * $cashback * $q;
                                        echo "Rp " . number_format("$hasil", 0, ",", "."); ?></td>
                    </tr>
                    <tr>
                        <th scope="row">Biaya Admin + Cashback + Gratis Ongkir</th>
                        <td scope="row"><?php
                                        if ($jenisshopee == "1") {
                                            $badmin = 1.016;
                                            $ongkir = 1.04;
                                            $cashback = 1.014;
                                        } elseif ($jenisshopee == "2") {
                                            $badmin = 1.0075;
                                            $ongkir = 1.03;
                                            $cashback = 1.014;
                                        } elseif ($jenisshopee == "3") {
                                            $badmin = 1;
                                            $ongkir = 1.036;
                                            $cashback = 1.014;
                                        } elseif ($jenisshopee == "4") {
                                            $badmin = 1;
                                            $ongkir = 1.025;
                                            $cashback = 1.014;
                                        } elseif ($jenisshopee == "5") {
                                            $badmin = 1.02;
                                            $ongkir = 1.036;
                                            $cashback = 1.014;
                                        } elseif ($jenisshopee == "6") {
                                            $badmin = 1.0125;
                                            $ongkir = 1.025;
                                            $cashback = 1.030;
                                        }

                                        $persen = $untung / 100;
                                        $q = 1 + $persen;
                                        $hasil = ($modal * $badmin) * ($cashback) * ($ongkir) * $q;
                                        echo "Rp " . number_format("$hasil", 0, ",", "."); ?></td>
                    </tr>

                <tfoot>
                </tfoot>
                </tbody>
            </table>
            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                <a href="<?php echo site_url('cektoko/shopee'); ?>">
                    <button class="btn btn-primary me-md-2" type="button">Kembali</button> </a>
                <button class="btn btn-primary" onclick="printFunction()" type="button">Cetak</button>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        
        function printFunction(){
            window.print();
        }
    </script>
</div>
<br><br><br>
</body>

</html>