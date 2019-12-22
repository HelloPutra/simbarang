<div class="card-header">
    <h4><i class="fas fa-database"></i> PENGELUARAN DATA ASSETS</h4>
</div>
<div class="card-body">
	<form action="<?= base_url(). 'pengeluaran/tambah_aksi'; ?>" method="post">
	  	<div class="form-row">
	    	<div class="col">
           		<label>Nama Asset</label>
            	<select name="id_asset" class="form-control">
            	<optgroup>
                	<?php foreach ($tb_asset as $data) {	?>
					<option value="<?= $data->id_asset ?>"><?= $data->nama_asset ?></option>
					<?php } ?>
            	</optgroup>
            	</select>
        	</div>
	    	<div class="col">
	    		<label class="control-label">Tanggal Pengeluaran</label>
	      		<input type="date" class="form-control" name="tgl_keluar">
	    	</div>
	  	</div>
	  	<div class="form-row">
	  		<div class="col">
	    		<label class="control-label">Jumlah Keluar</label>
	      		<input type="number" class="form-control" placeholder="Masukan Jumlah Keluar" name="jumlah_keluar">
	    	</div>
	  	</div>
	  	<div class="modal-footer">
        	<a href="<?= base_url('pengeluaran/index'); ?>" class="btn btn-secondary">Batal</a>
        	<button type="submit" class="btn btn-primary" value="Tambah">Tambah</button>
      	</div>
	</form>
</div>