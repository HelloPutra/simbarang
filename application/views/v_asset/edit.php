<div class="card-header">
    <h4><i class="fas fa-database"></i> EDIT DATA ASSETS</h4>
</div>
<div class="card-body">
	<?php foreach($tb_asset as $br){ ?>
	<form action="<?php echo base_url(). 'asset/update'; ?>" method="post">
		<input type="hidden" name="id_asset" value="<?php echo $br->id_asset ?>">
	  	<div class="form-row">
	    	<div class="col">
            	<label class="control-label">NIP</label>
            	<input type="text" name="nip" class="form-control" value="<?php echo $br->nip ?>" readonly>

        	</div>
	    	<div class="col">
	    		<label class="control-label">Nama Assets</label>
	    		<input type="text" name="nama_asset"  class="form-control" value="<?php echo $br->nama_asset ?>">
	    	</div>
	  	</div>
	  	<div class="form-row">
			<div class="col">
				<label class="control-label">Satuan</label>
				<input type="text"  class="form-control" name="satuan" value="<?php echo $br->satuan ?>">
			</div>
			<div class="col">
				<label class="control-label">Jumlah</label>
				<input type="text"  class="form-control" name="jumlah" value="<?php echo $br->jumlah ?>">
			</div>
		</div>
		<div class="form-row">
			<div class="col">
				<label class="control-label">Harga Asset</label>
				<input type="text" class="form-control" name="harga_asset" value="<?php echo $br->harga_asset ?>">
			</div>
			<div class="col">
				<label class="control-label">Tanggal Masuk</label>
				<input type="date" class="form-control" name="tgl_masuk" value="<?php echo $br->tgl_masuk ?>">
			</div>
		</div>
		<div class="form-row">
			<div class="col">
				<label>Kategori</label>
				<select name="kategori" class="form-control">
				<optgroup>
					<?php foreach ($kat as $data) {	?>
				<option value="<?= $data->id_kategori ?>"><?= $data->id_kategori ?> - <?= $data->nama_kategori ?></option>
					<?php } ?>
				</optgroup>
				</select>
			</div>
			<div class="col">
				<label class="control-label">Keterangan</label>
				<input type="text" class="form-control" name="keterangan" value="<?php echo $br->keterangan ?>">
			</div>
		</div>
		<div class="modal-footer">
        	<a href="<?= base_url('asset/index'); ?>" class="btn btn-secondary">Batal</a>
        	<button type="submit" class="btn btn-primary" value="Simpan">Simpan</button>
      	</div>
	</form>	
	<?php } ?>
</div>