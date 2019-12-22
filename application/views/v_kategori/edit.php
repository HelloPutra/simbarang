<div class="card-header">
    <h4><i class="fas fa-database"></i> KATEGORI DATA ASSETS</h4>
</div>
<div class="card-body">
	<?php foreach($tb_kategori as $gori){ ?>
	<form action="<?php echo base_url(). 'kategori/update'; ?>" method="post">
		<input type="hidden" name="id_kategori" value="<?php echo $gori->id_kategori ?>">
		<div class="form-row">
			<div class="col">
				<label>Nama Kategori</label>
				<input type="text" class="form-control" value="<?php echo $gori->nama_kategori ?>" name="nama_kategori">
			</div>
		</div>
		<div class="modal-footer">
        	<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        	<button type="submit" class="btn btn-primary" value="Tambah">Tambah</button>
      	</div>
	</form>
		<?php } ?>
</div>