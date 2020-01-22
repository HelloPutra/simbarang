<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4><i class="fas fa-database"></i> DATA KATEGORI ASSET</h4>
                    </div>
                    <div class="card-body">
                        <a href="<?= base_url('perbaikan_bangunan/tambah');?>" class="btn btn-primary"><span class="fa fa-plus"></span> Tambah Data</a>
                        <br><br>
                       <table id="example" class="table table-striped table-bordered dt-responsive nowrap" style="width:100%">
                            <thead>
						        <tr>
						            <th>No</th>
						            <th>Nama Bangunan</th>
                                    <th>Bagian Bangunan</th>
						            <th>Tanggal Perbaikan</th>
						            <th>Tanggal Selesai</th>
						            <th>Biaya Perbaikan</th>
						            <th>Status</th>
						            <th>Aksi</th>
						        </tr>
						    </thead>
						    <tbody>
						    <?php foreach ($data as $d) { ?>
						    	<tr>
						    	<td><?= $d->id_perbaikan_bangunan ?></td>
						      	<td><?= $d->nama_bangunan ?></td>
                                <td><?= $d->nama_bagian ?></td>
						       	<td><?= $d->tgl_perbaikan ?></td>
						       	<td><?= $d->tgl_selesai ?></td>
						       	<td>Rp.<?= $d->biaya ?></td>
						       	<td><?= $d->status ?></td>
						       	<td>
                                    <a href="<?= base_url('perbaikan_bangunan/edit/');echo $d->id_perbaikan_bangunan;?>" class="btn btn-primary"><span class="fa fa-edit"></span> Edit</a>
                                    <a href="<?= base_url('perbaikan_bangunan/hapus/');echo $d->id_perbaikan_bangunan;?>" class="btn btn-danger"><span class="fa fa-trash-alt"></span> Hapus</a>
                                    <a href="<?= base_url('perbaikan_bangunan/fungsi_proses/');echo $d->id_perbaikan_bangunan;?>" class="btn btn-info"><span class="fa fa-check"></span> Proses</a>
                                    <a href="<?= base_url('perbaikan_bangunan/fungsi_setuju/');echo $d->id_perbaikan_bangunan;?>" class="btn btn-success"><span class="fa fa-check"></span> Setujui</a>
                                    <a href="<?= base_url('perbaikan_bangunan/fungsi_tolak/');echo $d->id_perbaikan_bangunan;?>" class="btn btn-danger"><span class="fa fa-times"></span> Tolak</a>
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
