<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4><i class="fas fa-database"></i>ASSET MESIN</h4>
                    </div>
                    <div class="card-body">
                        <br><br>
                       <table id="example" class="table table-striped table-bordered dt-responsive nowrap" style="width:100%">
                            <thead>
						        <tr>
						            <th>Kode</th>
						            <th>Nama Mesin</th>
                                    <th>Aksi</th>
						        </tr>
						    </thead>
						    <tbody>
						    <?php foreach ($mesin as $prb) { ?>
						    	<tr>
						    	<td><?= $prb->id_asset ?></td>
						      	<td><?= $prb->nama_asset ?></td>
						       	<td>
                                    <a href="<?= base_url('mesin/detail/').$prb->id_asset?>" class="btn btn-primary"><span class="fa fa-edit"></span> Detail</a>
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
