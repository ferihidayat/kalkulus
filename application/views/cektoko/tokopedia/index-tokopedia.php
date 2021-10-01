<br><br><br>
<div class="container">
    <div class="container-fluid">
        <div class="card mt-5">
            <form action="<?php echo base_url() . 'cektoko/cektokopedia' ?>" method="post">
                <div class="card-header">
                    <br>
                    <img alt="tokopedia" src="<?php echo base_url() . 'assets/img/tokopedia.png' ?>" height="35" width="140" />
                    <br>
                    <p class="info"> <br>*Update terakhir Perhitungan ini tanggal 07/06/2021</p>
                    <?= $this->session->flashdata('messagetoko'); ?>
                </div>
                <div class="card-body">
                    <select class="form-select mb-2" name="jenistoko" aria-label="Default select example" required>
                        <option disabled selected>Jenis Toko</option>
                        <option value="1">Regular Merchant</option>
                        <option value="2">Power Merchant</option>
                        <option value="3">Power Merchant Pro</option>

                    </select>
                    <div class="input-group mb-3">
                        <tr>
                            <input type="text" name="namabarang" class="form-control" placeholder="Nama Barang" aria-label="Nama Barang" aria-describedby="basic-addon1" required>
                        </tr>
                    </div>
                    <div class="input-group mb-4">
                        <span class="input-group-text">Rp</span>
                        <input type="number" name="modal" class="form-control" aria-label="Amount (to the nearest dollar)" placeholder="Modal" required>
                        <span class="input-group-text">.00</span>
                    </div>
                    <div class="input-group mb-3">
                        <input type="number" name="untung" class="form-control" aria-label="Amount (to the nearest dollar)" placeholder="Untung" required>
                        <span class="input-group-text">%</span>
                    </div>
                </div>
                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                    <a href="<?php echo site_url('home'); ?>">
                        <button class="btn btn-primary me-md-2" type="button">Kembali</button> </a>
                    <button class="btn btn-primary" type="submit">Cek</button>
                </div>
            </form>
        </div>
    </div>
</div>
<br><br><br>
</body>

</html>