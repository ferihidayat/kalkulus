<br><br><br>
<div class="container">
    <div class="container-fluid">
        <div class="card mt-5">
            <div class="card-header">
                <br>
                <img alt="dropcuan" src="<?php echo base_url() . 'assets/img/dropcuan.png' ?>" height="35" width="140" />
                <br>
                <br>
                <p> Rincian Harga <b><?php echo $namabarang; ?></b> Dropcuan <br>
                    <b>Dengan Untung : <?php echo $untung; ?>%</b>
                </p>
            </div>
            <table class="table table-bordered">
                <tr>
                    <th scope="col">Modal</th>
                    <td><?php echo "Rp " . number_format("$modal", 0, ",", "."); ?></td>
                </tr>
                </thead>
                <tbody>
                    <th scope="row">Harga Jual</th>
                    <th><?php
                        $op = 4750;
                        $up = 1.025;
                        $persen = $untung / 100;
                        $q = 1 + $persen;
                        $modalnberat = ($op * $berat) + ($modal * $up);


                        $hasil = ($modalnberat) * ($q);
                        echo "Rp " . number_format("$hasil", 0, ",", ".");
                        ?></th>
                <tfoot>

                </tfoot>
                </tbody>
            </table>
            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                <a href="<?php echo site_url('cektoko/dropcuan'); ?>">
                    <button class="btn btn-primary me-md-2" type="button">Kembali</button> </a>
                <button class="btn btn-primary" type="button">Cetak</button>
            </div>

        </div>
    </div>
</div>
<br><br><br>
</body>

</html>