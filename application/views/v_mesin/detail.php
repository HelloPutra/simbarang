<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                         <?php foreach ($nama as $tbg) { ?>
                        <h4><i class="fas fa-database"></i> Bagian <?= $tbg->nama_asset ?></h4>
                    <?php } ?>
                    </div>
                    <div class="card-body">
                      <br>
                       <table id="example" class="table table-striped table-bordered dt-responsive nowrap" style="width:100%">
                            <thead>
						        <tr>
						            <th>Kode</th>
						            <th>Bagian Mesin</th>
                                    <th>Kondisi</th>
                                    <th>Aksi</th>
						        </tr>
						    </thead>
						    <tbody>
						    <?php foreach ($tb_bg_mesin as $tbg) { ?>
						    	<tr>
						    	<td><?= $tbg->id_bg_mesin ?></td>
						      	<td><?= $tbg->nama_bagian ?></td>
						       	<td>
                                    <?php if ($tbg->status == 'Baik') { ?>
                                       <span class="badge badge-success">Baik</span>
                                    <?php }else { ?>
                                         <span class="badge badge-danger">Rusak</span>
                                    <?php } ?>
                                    
                                </td>
                                <td>
                                    <a href="<?= base_url('mesin/edit/').$tbg->id_bg_mesin?>" class="btn btn-primary"><span class="fa fa-edit"></span> Ubah</a>
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
