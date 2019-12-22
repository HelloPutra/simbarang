<div class="card-header">
    <h4><i class="fas fa-database"></i> TAMBAH DATA ASSET</h4>
</div>
<div class="card-body">
	<form action="<?= base_url(). 'asset/tambah_aksi'; ?>" method="post">
	  	<div class="form-row">
	    	<div class="col">
           		<label>NIP</label>
            	<select name="nip" class="form-control">
            	<optgroup>
                	<?php foreach ($nip as $data) {	?>
            	<option value="<?= $data->nip ?>"><?= $data->nip ?> - <?= $data->nama ?></option>
                	<?php } ?>
            	</optgroup>
            	</select>
        	</div>
	    	<div class="col">
	    		<label class="control-label">Nama Assets</label>
	      		<input type="text" class="form-control" placeholder="Masukan Nama Asset" name="nama_asset">
	    	</div>
	  	</div>
	  	<div class="form-row">
			<div class="col">
				<label class="control-label">Satuan</label>
				<input type="text" class="form-control" placeholder="Masukan Satuan Asset" name="satuan">
			</div>
			<div class="col">
				<label class="control-label">Jumlah</label>
				<input type="text" class="form-control" placeholder="Masukan Jumlah" name="jumlah">
			</div>
		</div>
		<div class="form-row">
			<div class="col">
				<label class="control-label">Harga Asset</label>
				<input type="text" class="form-control" placeholder="Masukan Harga Asset" name="harga_asset">
			</div>
			<div class="col">
				<label class="control-label">Tanggal Masuk</label>
				<input type="date" class="form-control" placeholder="Masukan Tanggal Masuk" name="tgl_masuk">
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
				<input type="text" class="form-control" placeholder="Masukan Keterangan" name="keterangan">
			</div>
		</div>
		<div class="modal-footer">
        	<a href="<?= base_url('asset/index'); ?>" class="btn btn-secondary">Batal</a>
        	<button type="submit" class="btn btn-primary" value="Tambah">Tambah</button>
      	</div>
	</form>
</div>
