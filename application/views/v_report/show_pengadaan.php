<!-- Main Content -->
<?php $session = $this->session->userdata('login'); ?>
<div class="main-content">
    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4><i class="fas fa-database"></i> DATA LAPORAN PENGAJUAN PENGADAAN ASSET</h4>
                    </div>
                    <div class="card-body">
                        <a href="<?= base_url('pengadaan_report/index');?>" class="btn btn-primary" ><span class="fa fa-arrow-left"></span>  Kembali</a>
                        <br><br>
                        <table id="example" class="table table-striped table-bordered dt-responsive nowrap" style="width:100%">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Asset</th>
                                    <th>Tanggal Pengadaan</th>
                                    <th>Jumlah Kebutuhan</th>
                                    <th>Total Harga</th>
                                    <th>Status</th>
                                    <th>Keterangan</th>
                                </tr>
                            </thead>
                            <tbody>
                                
                            <?php $no=1; foreach ($tb_pengadaan as $pg) { ?>
                                <tr>
                                    <td><?= $no++ ?></td>
                                    <td><?= $pg->nama_asset ?></td>
                                    <td><?= $pg->tgl_pengadaan ?></td>
                                    <td><?= $pg->jumlah_kebutuhan ?></td>
                                    <td>Rp.<?= $pg->total_harga ?></td>
                                    <td><?= $pg->status ?></td>
                                    <td><?= $pg->keterangan ?></td>
                                </tr>
                            <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

    <!-- Modal -->
