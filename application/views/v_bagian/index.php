<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4><i class="fas fa-database"></i>BAGIAN MESIN</h4>
                    </div>
                    <div class="card-body">
                        <a href="<?= base_url('bgmesin/tambah');?>" class="btn btn-primary"><span class="fa fa-plus"></span> Tambah Data</a>
                        <br><br>
                       <table id="example" class="table table-striped table-bordered dt-responsive nowrap" style="width:100%">
                            <thead>
                                <tr>
                                    <th>Kode Bagian Mesin</th>
                                    <th>Nama Mesin</th>
                                    <th>Bagian Mesin</th>
                                    <th>Status</th>
                                    <th>Keterangan</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php foreach ($mesin as $bgn) { ?>
                                <tr>
                                <td><?= $bgn->id_bg_mesin ?></td>
                                <td><?= $bgn->nama_asset?></td>
                                <td><?= $bgn->nama_bagian ?></td>
                                <td><?= $bgn->status ?></td>
                                <td><?= $bgn->keterangan ?></td>      
                                <td>
                                    <a href="<?= base_url('bgmesin/edit/');echo $bgn->id_bg_mesin;?>" class="btn btn-primary"><span class="fa fa-edit"></span> Edit</a>
                                    <a href="<?= base_url('bgmesin/hapus/');echo $bgn->id_bg_mesin;?>" class="btn btn-danger"><span class="fa fa-trash-alt"></span> Hapus</a>
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

    <!-- Modal -->
