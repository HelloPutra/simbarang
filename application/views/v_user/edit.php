<div class="card-header">
    <h4><i class="fas fa-database"></i> EDIT DATA USER</h4>
</div>
<div class="card-body">
	<?php foreach($tb_user as $u){ ?>
	<form action="<?php echo base_url(). 'user/update'; ?>" method="post">
	  	<div class="form-row">
	    	<div class="col">
            	<label class="control-label">NIP</label>
            	<input type="text"  class="form-control" name="nip" value="<?php echo $u->nip ?>" readonly>

        	</div>
	    	<div class="col">
	    		<label class="control-label">Nama User</label>
	    		<input type="text" name="nama" class="form-control" value="<?php echo $u->nama ?>">
	    	</div>
	  	</div>
	  	<div class="form-row">
			<div class="col">
				<label>Jabatan</label>
				<select name="jabatan" class="form-control">
				<optgroup>
					<option value="Admin">Admin</option>
					<option value="Kepala Bagian">Kepala Bagian</option>
					<option value="Kepala Asset">Kepala Asset</option>
					<option value="Kepala Keuangan">Kepala Keuangan</option>
					<option value="Direktur">Direktur</option>
				</optgroup>
				</select>
			</div>
			<div class="col">
				<label class="control-label">No Telp</label>
				<input type="text" class="form-control" name="no_telp" value="<?php echo $u->no_telp ?>">
			</div>
		</div>
		<div class="form-row">
			<div class="col">
				<label class="control-label">Username</label>
				<input type="text" class="form-control" name="username" value="<?php echo $u->username ?>">
			</div>
			<div class="col">
				<label class="control-label">Password</label>
				<input type="Password" class="form-control" name="password" value="" required>
			</div>
		</div>
		<div class="modal-footer">
        	<a href="<?= base_url('user/index'); ?>" class="btn btn-secondary">Batal</a>
        	<button type="submit" class="btn btn-primary" value="Simpan">Simpan</button>
      	</div>
	</form>	
	<?php } ?>
</div>