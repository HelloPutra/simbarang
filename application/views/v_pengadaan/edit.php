<div class="card-header">
    <h4><i class="fas fa-database"></i> PENGADAAN DATA ASSETS</h4>
</div>
<div class="card-body">
	<?php foreach($tb_pengadaan as $pg){ ?>
	<form action="<?php echo base_url(). 'pengadaan/update'; ?>" method="post">
	  	<div class="form-row">
	  		<input type="hidden" name="id_pengadaan" value="<?= $pg -> id_pengadaan?>">
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
	  	        	<?php foreach ($tb_pengadaan as $asd) { ?>
	  		    	<div class="col">
	  		    		<label class="control-label">Tanggal Pengadaan</label>
	  		      		<input type="date" class="form-control" name="tgl_pengadaan" value="<?= $asd->tgl_pengadaan ?>">
	  		    	</div>
	  		    	<?php } ?>
	  		  	</div>
	  		  	<div class="form-row">
	  		  		<?php foreach ($tb_pengadaan as $asd) { ?>
	  				<div class="col">
	  					<label>Jumlah Kebutuhan</label>
	  					<input type="number" class="form-control" placeholder="Masukan Jumlah Kebutuhan" name="jumlah_kebutuhan" value="<?= $asd->jumlah_kebutuhan ?>">
	  				</div>
	  				<div class="col">
	  					<label>Keterangan</label>
	  					<input type="text" class="form-control" placeholder="Masukan Keterangan" name="keterangan" value="<?= $asd->keterangan ?>">
	  				</div>
	  				<?php } ?>
	  			</div>
		<div class="modal-footer">
        	<a href="<?= base_url('pengadaan/index'); ?>" class="btn btn-secondary">Batal</a>
        	<button type="submit" class="btn btn-primary" value="Tambah">Tambah</button>
      	</div>
	</form>
<?php } ?>
</div>



