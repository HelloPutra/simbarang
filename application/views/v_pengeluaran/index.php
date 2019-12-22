<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4><i class="fas fa-database"></i> DATA PENGELUARAN ASSET</h4>
                    </div>
                    <div class="card-body">
                        <a href="<?= base_url('pengeluaran/tambah');?>" class="btn btn-primary"><span class="fa fa-plus"></span> Tambah Data</a>
                        <br><br>
                       <table id="example" class="table table-striped table-bordered dt-responsive nowrap" style="width:100%">
                            <thead>
                                <tr>
                                    <th>No </th>
                                    <th>Nama Asset</th>
                                    <th>Tanggal Keluar</th>
                                    <th>Jumlah Keluar</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php $no = 1; foreach ($tb_keluar as $kel) { ?>
                                <tr>
                                <td><?= $no++ ?></td>
                                <td><?= $kel->nama_asset ?></td>
                                <td><?= $kel->tgl_keluar ?></td>
                                <td><?= $kel->jumlah_keluar ?></td>
                                <td>
                                    <a href="<?= base_url('pengeluaran/edit/');echo $kel->id_keluar;?>" class="btn btn-primary"><span class="fa fa-edit"></span> Edit</a>
                                    <a href="<?= base_url('pengeluaran/hapus/');echo $kel->id_keluar;?>" class="btn btn-danger"><span class="fa fa-trash-alt"></span> Hapus</a>
                                </td>
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
