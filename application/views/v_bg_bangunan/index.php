<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4><i class="fas fa-database"></i>ASSET BANGUNAN</h4>
                    </div>
                    <div class="card-body">
                       <table id="example" class="table table-striped table-bordered dt-responsive nowrap" style="width:100%">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Bangunan</th>
                                    <th>Lokasi</th>
                                    <th>Luas</th>
                                    <th>Keterangan</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no=1; foreach ($data as $r) { ?>
                                    <tr>
                                        <td><?= $no++ ?></td>
                                        <td><?= $r->nama_bangunan ?></td>
                                        <td><?= $r->lokasi ?></td>
                                        <td><?= $r->luas ?></td>
                                        <td><?= $r->keterangan ?></td>    
                                        <td>
                                            <a href="<?= base_url('bgbangunan/show/').$r->id_bangunan; ?>" class="btn btn-primary"><span class="fa fa-edit"></span> Detail</a>
                                            <!-- <a href="<?= base_url('bangunan/hapus/').$r->id_bangunan; ?>" class="btn btn-danger"><span class="fa fa-trash-alt"></span> Hapus</a> -->
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
