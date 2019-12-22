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
                        <?php echo $this->session->userdata('message1') <> '' ? $this->session->userdata('message1') : ''; ?>
                        <a href="<?= base_url('kategori/tambah');?>" class="btn btn-primary" ><span class="fa fa-plus"></span> Tambah Data</a>
                        <br><br>
                        <table id="example" class="table table-striped table-bordered dt-responsive nowrap" style="width:100%">
                            <thead>
						        <tr>
						            <th>No.</th>
						            <th>Nama Kategori</th>
						            <th>Aksi</th>
						        </tr>
						    </thead>
						    <tbody>
                            <?php $nomor=1; ?>
						    <?php foreach ($tb_kategori as $gori) { ?>
						    	<tr>
						    	<td><?= $nomor++ ?></td>
						       	<td><?= $gori->nama_kategori ?></td>	
						       	<td>
                                    <a href="<?= base_url('kategori/edit/');echo $gori->id_kategori;?>" class="btn btn-primary"><span class="fa fa-edit"></span> Edit</a>
                                    <a href="<?= base_url('kategori/hapus/');echo $gori->id_kategori;?>" class="btn btn-danger"><span class="fa fa-trash-alt"></span> Hapus</a>
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

