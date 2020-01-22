<div class="card-header">
    <h4><i class="fas fa-database"></i>MENGELOLA PERBAIKAN MESIN</h4>
</div>
<div class="card-body">
	<form action="<?= base_url(). 'perbaikan_bangunan/update'; ?>" method="post">
	    <?php foreach ($data as $r) {	?>
		<div class="form-row">
        	<div class="col">
				<label>Nama Bagian Bangunan</label>
				<input type="text" class="form-control" placeholder="Masukan Biaya" name="biaya" value="<?= $r->nama_bangunan ?> - <?= $r->nama_bagian ?>" readonly>
			</div>
        	<div class="col">
				<label>Biaya Perbaikan</label>
				<input type="number" class="form-control" placeholder="Masukan Biaya" name="biaya" value="<?= $r->biaya ?>">
			</div>
	  	</div>
	  	<br>
	  	<div class="form-row">
	  		<div class="col">
	    		<label class="control-label">Tanggal Perbaikan</label>
	      		<input type="date" class="form-control" name="tgl_perbaikan" value="<?= $r->tgl_perbaikan ?>">
	    	</div>
			<div class="col">
				<label>Tanggal Selesai</label>
				<input type="date" class="form-control" name="tgl_selesai" value="<?= $r->tgl_selesai ?>">
			</div>
		</div>

		<input type="hidden" value="<?= $r->id_perbaikan_bangunan ?>" name="id_perbaikan_bangunan">

		<div class="modal-footer">
        	<a href="<?= base_url('perbaikan_bangunan/index'); ?>" class="btn btn-secondary">Batal</a>
        	<button type="submit" class="btn btn-primary" value="Tambah">Simpan</button>
      	</div>
      	<?php } ?>
	</form>
</div>





	