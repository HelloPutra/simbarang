<div class="card-header">
    <h4><i class="fas fa-database"></i> PENGELUARAN DATA ASSETS</h4>
</div>
<div class="card-body">
	<?php foreach($tb_keluar as $tbk){ ?>
	<form action="<?php echo base_url(). 'pengeluaran/update'; ?>" method="post">
		<input type="hidden" name="id_keluar" value="<?php echo $tbk->id_keluar ?>">
	  	<div class="form-row">
	    	<div class="col">
           		<label>Nama Asset</label>
            	<select name="id_asset" class="form-control">
            	<optgroup>
            		<?php foreach ($selected as $sel) { ?>
	  	            			<option value="<?= $sel->id_asset ?>" selected="selected"><?= $sel->id_asset ?> - <?= $sel->nama_asset ?></option>
	  	            			<?php $terpilih = $sel->id_asset; ?>
	  	            		<?php } ?>
	  	                	<?php 
						foreach ($edit_asset as $data) {	?>
							<?php if ($data->id_asset != $terpilih): ?>
								<option value="<?= $data->id_asset ?>"><?= $data->id_asset ?> - <?= $data->nama_asset ?> </option>
							<?php endif ?>
						<?php } ?>
            	</optgroup>
            	</select>
        	</div>
	    	<div class="col">
	    		<label class="control-label">Tanggal Pengeluaran</label>
	      		<input type="date" class="form-control" name="tgl_keluar" value="<?php echo $tbk->tgl_keluar ?>">
	    	</div>
	  	</div>
	  	<div class="form-row">
	  		<div class="col">
	    		<label class="control-label">Jumlah Keluar</label>
	      		<input type="number" class="form-control" value="<?php echo $tbk->jumlah_keluar ?>" name="jumlah_keluar">
	    	</div>
	  	</div>
	  	<div class="modal-footer">
        	<a href="<?= base_url('pengeluaran/index'); ?>" class="btn btn-secondary">Batal</a>
        	<button type="submit" class="btn btn-primary" value="Tambah">Simpan</button>
      	</div>
	</form>
		<?php } ?>
</div>