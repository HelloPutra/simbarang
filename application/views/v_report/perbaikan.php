<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4>LAPORAN PERBAIKAN</h4>
                    </div>                    
                    <div class="card-body">
                        <form action="<?= base_url(). 'perbaikan_report/show'; ?>" method="post">
                            <div class="form-row">
                                <div class="col">
                                    <label class="control-label">Dari Tanggal</label>
                                    <input type="date" class="form-control" placeholder="Masukan Tanggal Masuk" name="one">
                                </div>
                                <div class="col">
                                    <label class="control-label">Sampai Tanggal</label>
                                    <input type="date" class="form-control" placeholder="Masukan Tanggal Masuk" name="two">
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-primary" value="Tambah">Proses</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>