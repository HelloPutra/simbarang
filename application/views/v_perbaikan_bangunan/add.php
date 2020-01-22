<div class="card-header">
    <h4><i class="fas fa-database"></i>MENGELOLA PERBAIKAN MESIN</h4>
</div>
<div class="card-body">
	<form action="<?= base_url(). 'perbaikan_bangunan/tambah_aksi'; ?>" method="post">
	    	
		<div class="form-row">
			<div class="col">
           		<label>Nama Bagian Bangunan</label>
            	<select name="id_bg_bangunan" class="form-control">
            	<optgroup>
                	<?php foreach ($data as $r) {	?>
					<option value="<?= $r->id_bg_bangunan ?>"><?= $r->nama_bangunan ?> - <?= $r->nama_bagian ?></option>
					<?php } ?>
            	</optgroup>
            	</select>
        	</div>
        	<div class="col">
				<label>Biaya Perbaikan</label>
				<input type="number" class="form-control" placeholder="Masukan Biaya" name="biaya">
			</div>
	  	</div>
	  	<br>
	  	<div class="form-row">
	  		<div class="col">
	    		<label class="control-label">Tanggal Perbaikan</label>
	      		<input type="date" class="form-control" name="tgl_perbaikan">
	    	</div>
			<div class="col">
				<label>Tanggal Selesai</label>
				<input type="date" class="form-control" name="tgl_selesai">
			</div>
		</div>

		<div class="modal-footer">
        	<a href="<?= base_url('perbaikan_bangunan/index'); ?>" class="btn btn-secondary">Batal</a>
        	<button type="submit" class="btn btn-primary" value="Tambah">Tambah</button>
      	</div>
	</form>
</div>





	