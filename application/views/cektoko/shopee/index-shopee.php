<br><br><br>
<div class="container">
    <div class="container-fluid">
        <form action="<?php echo base_url() . 'cektoko/cekshopee' ?>" method="post">
            <div class="card mt-5">
                <div class="card-header">
                    <br>
                    <img alt="dropcuan" src="<?php echo base_url() . 'assets/img/shopee.png' ?>" height="50" width="160" />
                    <br>
                    <p class="info"><i> <br>*Update terakhir Perhitungan ini tanggal 07/06/2021</i></p>
                    <?= $this->session->flashdata('messageshop'); ?>
                </div>

                <div class="card-body">
                    <select class="form-select mb-3" name="jenisshopee" aria-label="Default select example" required>
                        <option disabled selected>Jenis Toko</option>
                        <option value="1">Non Star</option>
                        <option value="2">Non Star Khusus</option>
                        <option value="3">Star</option>
                        <option value="4">Star Khusus</option>
                        <option value="5">Star++</option>
                        <option value="6">Star++ Khusus</option>
                    </select>
                    <div class="input-group mb-3">
                        <tr>
                            <input type="text" name="barangshopee" class="form-control" placeholder="Nama Barang" aria-label="Nama Barang" aria-describedby="basic-addon1" required>
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
                    <!--  <small class="text-danger pl-3">*Untung tidak lebih dari 3 digit</small> -->
                </div>
                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                    <a href="<?php echo site_url('home'); ?>">
                        <button class="btn btn-primary me-md-2" type="button">Kembali</button>
                    </a>
                    <button class="btn btn-primary" type="submit">Cektak</button>
                </div>
        </form>
    </div>
</div>
</div>
<br><br><br>