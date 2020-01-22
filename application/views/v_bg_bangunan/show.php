<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <?php $no=1; foreach ($bangunan as $k) { ?>
                        <h4 style="text-transform: uppercase;"><i class="fas fa-database"></i>ASSET BAGIAN <?= $k->nama_bangunan ?></h4>
                        <?php } ?>
                    </div>
                    <div class="card-body">
                        <?php $no=1; foreach ($bangunan as $k) { ?>
                        <a href="<?= base_url('bgbangunan/tambah/').$k->id_bangunan;?>" class="btn btn-primary"><span class="fa fa-plus"></span> Tambah Data</a>
                        <a href="<?= base_url('bgbangunan/index/')?>" class="btn btn-primary"><span class="fa fa-arrow-left"></span> Kembali</a>
                        <br><br>
                       <table id="example" class="table table-striped table-bordered dt-responsive nowrap" style="width:100%">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Bagian</th>
                                    <th>Status</th>
                                    <th>Keterangan</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no=1; foreach ($data as $r) { ?>
                                    <tr>
                                        <td><?= $no++ ?></td>
                                        <td><?= $r->nama_bagian ?></td>
                                        <td><?= $r->status ?></td>
                                        <td><?= $r->keterangan ?></td>    
                                        <td>
                                            <a href="<?= base_url('bgbangunan/edit/').$r->id_bg_bangunan; ?>" class="btn btn-primary"><span class="fa fa-edit"></span> Edit</a>
                                            <a href="<?= base_url('bgbangunan/hapus/').$k->id_bangunan.'/'.$r->id_bg_bangunan; ?>" class="btn btn-danger"><span class="fa fa-trash-alt"></span> Hapus</a>
                                        </td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

    <!-- Modal -->
