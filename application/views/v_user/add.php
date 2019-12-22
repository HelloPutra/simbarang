<div class="card-header">
    <h4><i class="fas fa-database"></i> TAMBAH DATA USER</h4>
</div>
<div class="card-body">
	<form action="<?= base_url(). 'user/tambah_aksi'; ?>" method="post">
		<div class="form-row">
			<div class="col">
				<label>NIP</label>
				<input type="text" class="form-control" placeholder="Masukan NIP" name="nip">
			</div>
			<div class="col">
				<label>Nama</label>
				<input type="text" class="form-control" placeholder="Masukan Nama" name="nama">
			</div>
		</div>
		<div class="form-row">
			<div class="col">
				<label>Jabatan</label>
				<select name="jabatan" class="form-control">
					<option value="admin">Admin</option>
					<option value="kb">Kepala Bagian</option>
					<option value="ka">Kepala Asset</option>
					<option value="kk">Kepala Keuangan</option>
					<option value="direktur">Direktur</option>
				</select>
			</div>
			<div class="col">
				<label>Nomor Telepon</label>
				<input type="text" class="form-control" placeholder="Masukan Nomor Tlpn" name="no_telp">
			</div>
		</div>
		<div class="form-row">
			<div class="col">
				<label>UserName</label>
				<input type="text" class="form-control" placeholder="Masukan Username" name="username">
			</div>
			<div class="col">
				<label>Password</label>
				<input type="password" class="form-control" placeholder="Masukan Password" name="password">
			</div>
		</div>
		<div class="modal-footer">
	    	<a href="<?= base_url('dashboard/data_user'); ?>" class="btn btn-secondary">Batal</a>
	    	<button type="submit" class="btn btn-primary" value="Tambah">Tambah</button>
	  	</div>
	</form>
</div>