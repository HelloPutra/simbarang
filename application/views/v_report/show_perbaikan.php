<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4><i class="fas fa-database"></i> DATA LAPORAN PERBAIKAN  ASSET</h4>
                    </div>
                    <div class="card-body">
                        <a href="<?= base_url('perbaikan_report/index');?>" class="btn btn-primary" ><span class="fa fa-arrow-left"></span>  Kembali</a>
                        <br><br>
                       <table id="example" class="table table-striped table-bordered dt-responsive nowrap" style="width:100%">
                            <thead>
						        <tr>
						            <th>Kode</th>
						            <th>Nama Mesin</th>
                                    <th>Bagian Mesin</th>
						            <th>Tanggal Perbaikan</th>
						            <th>Tanggal Selesai</th>
						            <th>Jumlah Yang Diperbaiki</th>
						            <th>Biaya Perbaikan</th>
						            <th>Status</th>
						        </tr>
						    </thead>
						    <tbody>
						    <?php foreach ($tb_perbaikan as $prb) { ?>
						    	<tr>
						    	<td><?= $prb->id_perbaikan ?></td>
						      	<td><?= $prb->nama_asset ?></td>
                                <td><?= $prb->nama_bagian ?></td>
						       	<td><?= $prb->tgl_perbaikan ?></td>
						       	<td><?= $prb->tgl_selesai ?></td>
						       	<td><?= $prb->jumlah_perbaikan ?></td>
						       	<td>Rp.<?= $prb->biaya_perbaikan ?></td>
						       	<td><?= $prb->status ?></td>
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
