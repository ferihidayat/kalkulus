<br><br><br>
<div class="container">
    <div class="container-fluid">
        <div class="card mt-5">
            <form action="">
                <div class="card-header">
                    <br>
                    <img alt="lazada" src="<?php echo base_url() . 'assets/img/lazada.png' ?>" height="35" width="140" />
                    <br>
                    <p class="info"> <br>*Update terakhir Perhitungan ini tanggal 07/06/2021</p>
                </div>
                <div class="card-body">
                    <select class="form-select mb-2" aria-label="Default select example" required>
                        <option disabled selected>Jenis Toko</option>
                        <option value="1">----------</option>
                        <option value="2">----------</option>
                        <option value="3">----------</option>

                    </select>
                    <div class="input-group mb-2">
                        <span class="input-group-text">Rp</span>
                        <input type="number" class="form-control" aria-label="Amount (to the nearest dollar)" placeholder="Modal" required>
                        <span class="input-group-text">.00</span>
                    </div>
                </div>


                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                    <a href="<?php echo site_url('home'); ?>">
                        <button class="btn btn-primary me-md-2" type="button">Kembali</button> </a>
                    <a href="<?php echo site_url('cektoko/ceklazada'); ?>">
                        <button class="btn btn-primary" type="button">Cek</button></a>
                </div>
            </form>
        </div>
    </div>
</div>
<br><br><br>
</body>

</html>