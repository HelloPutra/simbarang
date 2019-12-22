<div class="card-header">
    <h4><i class="fas fa-database"></i> EDIT BAGIAN MESIN</h4>
</div>
<div class="card-body">
	<?php foreach($tb_bg_mesin as $bgn){ ?>
	<form action="<?= base_url(). 'bgmesin/update'; ?>" method="post">
		<input type="hidden" name="id_bg_mesin" value="<?php echo $bgn->id_bg_mesin ?>">
	  	<div class="form-row">
	  		<div class="col">
	  	           		<label>Nama Mesin</label>
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
				<label class="control-label">Nama Bagian Mesin</label>
				<input type="text" class="form-control" value="<?= $bgn->nama_bagian ?>" name="nama_bagian">
			</div>
		</div>
		<div class="form-row">
			<div class="col">
				<label class="control-label">Status</label>
				<select name="status" class="form-control">
					<optgroup>
						<option value="<?= $bgn->status ?>" selected="selected"> <?= $bgn->status ?> </option>
						<option value="Baik">Baik</option>
						<option value="Rusak">Rusak</option>
					</optgroup>
					
				</select>
			</div>
			<div class="col">
				<label class="control-label">Keterangan</label>
				<input type="text" class="form-control" value="<?= $bgn->keterangan ?>" name="keterangan">
			</div>
		</div>
		
		<div class="modal-footer">
        	<a href="<?= base_url('bgmesin/index'); ?>" class="btn btn-secondary">Batal</a>
        	<button type="submit" class="btn btn-primary" value="Tambah">Tambah</button>
      	</div>
	</form>
	<?php } ?>
</div>




