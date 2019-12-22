<!-- Main Content -->
<?php $session = $this->session->userdata('login'); ?>
<div class="main-content">
    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4><i class="fas fa-database"></i> DATA PENGAJUAN PENGADAAN ASSET</h4>
                    </div>
                    <div class="card-body">
                        <?php if ($session['jabatan'] != 'Direktur') { ?>
                        <a href="<?= base_url('pengadaan/tambah');?>" class="btn btn-primary" ><span class="fa fa-plus"></span> Tambah Data</a>
                        <?php } 
                        ?>
                        <br><br>
                        <table id="example" class="table table-striped table-bordered dt-responsive nowrap" style="width:100%">
                            <thead>
                                <tr>
                                    <th>Kode</th>
                                    <th>Nama Asset</th>
                                    <th>Tanggal Pengadaan</th>
                                    <th>Jumlah Kebutuhan</th>
                                    <th>Total Harga</th>
                                    <th>Status</th>
                                    <th>Keterangan</th>
                                    <?php if ($session['jabatan'] != 'Direktur') { ?>
                                    <th>Aksi</th>
                                    <?php } ?>
                                </tr>
                            </thead>
                            <tbody>
                                
                            <?php foreach ($tb_pengadaan as $pg) { ?>
                                <tr>
                                    <td><?= $pg->id_pengadaan ?></td>
                                    <td><?= $pg->nama_asset ?></td>
                                    <td><?= $pg->tgl_pengadaan ?></td>
                                    <td><?= $pg->jumlah_kebutuhan ?></td>
                                    <td>Rp.<?= $pg->total_harga ?></td>
                                    <td><?= $pg->status ?></td>
                                    <td><?= $pg->keterangan ?></td>
                                <?php if ($session['jabatan'] != 'Direktur') { ?>
                                    <td>
                                        <?php if ($session['jabatan'] == 'Kepala Bagian') { ?>
                                            <a href="<?= base_url('pengadaan/edit/');echo $pg->id_pengadaan;?>" class="btn btn-primary">Edit</a>
                                            <a href="<?= base_url('pengadaan/hapus/');echo $pg->id_pengadaan;?>" class="btn btn-danger">Hapus</a>
                                        <?php }elseif ($session['jabatan'] == 'Kepala Asset') { ?>
                                            <a href="<?= base_url('pengadaan/fungsi_proses/');echo $pg->id_pengadaan;?>" class="btn btn-success">Proses</a>
                                            <a href="<?= base_url('pengadaan/fungsi_tolak/');echo $pg->id_pengadaan;?>" class="btn btn-danger">Tolak</a>
                                        <?php }elseif ($session['jabatan'] == 'Kepala Keuangan') { ?>
                                            <a href="<?= base_url('pengadaan/fungsi_setuju/');echo $pg->id_pengadaan;?>" class="btn btn-success">Setujui</a>
                                            <a href="<?= base_url('pengadaan/fungsi_tolak/');echo $pg->id_pengadaan;?>" class="btn btn-danger">Tolak</a>
                                        <?php }else{  ?>
                                            <a href="<?= base_url('pengadaan/edit/');echo $pg->id_pengadaan;?>" class="btn btn-primary"><span class="fa fa-edit"></span> Edit</a>
                                            <a href="<?= base_url('pengadaan/hapus/');echo $pg->id_pengadaan;?>" class="btn btn-danger"><span class="fa fa-trash-alt"></span> Hapus</a>
                                            <a href="<?= base_url('pengadaan/fungsi_proses/');echo $pg->id_pengadaan;?>" class="btn btn-info"><span class="fa fa-clock"></span> Proses</a>
                                            <a href="<?= base_url('pengadaan/fungsi_setuju/');echo $pg->id_pengadaan;?>" class="btn btn-success"><span class="fa fa-check"></span> Setujui</a>
                                            <a href="<?= base_url('pengadaan/fungsi_tolak/');echo $pg->id_pengadaan;?>" class="btn btn-danger"><span class="fa fa-times"></span> Tolak</a>
                                        <?php } ?>
                                    </td>
                                <?php } ?>
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
