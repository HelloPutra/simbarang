<div class="card-header">
    <h4><i class="fas fa-database"></i> PENGADAAN DATA ASSETS</h4>
</div>
<div class="card-body">
	<form action="<?= base_url(). 'pengadaan/tambah_aksi'; ?>" method="post">
	  	<div class="form-row">
	  		    	<div class="col">
	  	           		<label>Kode Asset</label>
	  	            	<select name="id_asset" class="form-control">
	  	            	<optgroup>
	  	                	<?php foreach ($tb_asset as $data) {	?>
	  						<option value="<?= $data->id_asset ?>"><?= $data->id_asset ?> - <?= $data->nama_asset ?> </option>
	  						<?php } ?>
	  	            	</optgroup>
	  	            	</select>
	  	        	</div>
	  		    	<div class="col">
	  		    		<label class="control-label">Tanggal Pengadaan</label>
	  		      		<input type="date" class="form-control" name="tgl_pengadaan">
	  		    	</div>
	  		  	</div>
	  		  	<div class="form-row">
	  				<div class="col">
	  					<label>Jumlah Kebutuhan</label>
	  					<input type="text" class="form-control" placeholder="Masukan Jumlah Kebutuhan" name="jumlah_kebutuhan">
	  				</div>
	  				<div class="col">
	  					<label>Total Harga</label>
	  					<input type="text" class="form-control" placeholder="Masukan Total Harga" name="total_harga">
	  				</div>
	  				<div class="col">
	  					<label>Keterangan</label>
	  					<input type="text" class="form-control" placeholder="Masukan Keterangan" name="keterangan">
	  				</div>
	  			</div>
		<div class="modal-footer">
        	<a href="<?= base_url('pengadaan/index'); ?>" class="btn btn-secondary">Batal</a>
        	<button type="submit" class="btn btn-primary" value="Tambah">Tambah</button>
      	</div>
	</form>
</div>






