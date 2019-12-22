<div class="card-header">
    <h4><i class="fas fa-database"></i>MENGELOLA PERBAIKAN MESIN</h4>
</div>
<div class="card-body">
	<form action="<?php echo base_url(). 'perbaikan/update'; ?>" method="post">
	    <?php foreach($tb_perbaikan_where as $prb){ ?>
		<div class="form-row">
			<input type="hidden" name="id_perbaikan" value="<?= $prb -> id_perbaikan?>">
			<div class="col">
           		<label>Nama Asset</label>
	            <select name="id_asset" class="form-control">
	            <optgroup>
	            	<?php foreach ($selected as $sel) { ?>
	            	<option value="<?= $sel->id_asset ?>" selected="selected"><?= $sel->id_asset ?> -<?= $sel->nama_asset ?></option>
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
           		<label>Nama Bagian</label>
            	<select name="id_bg_mesin" class="form-control">
            	<optgroup>
                	<?php foreach ($tb_bg_mesin as $data) {	?>
					<option value="<?= $data->id_bg_mesin ?>"><?= $data->nama_bagian ?></option>
					<?php } ?>
            	</optgroup>
            	</select>
        	</div>
	  	</div>
	  	</fieldset>
	  	<div class="form-row">
	  		<div class="col">
	    		<label class="control-label">Tanggal Perbaikan</label>
	      		<input type="date" class="form-control" name="tgl_perbaikan" value="<?= $prb->tgl_perbaikan ?>">
	    	</div>
			<div class="col">
				<label>Tanggal Selesai</label>
				<input type="date" class="form-control" name="tgl_selesai" value="<?= $prb->tgl_selesai ?>">
			</div>
		</div>
		<div class="form-row">
			<div class="col">
				<label>Jumlah Yang Diperbaiki</label>
				<input type="number" class="form-control" placeholder="Jumlah" name="jumlah_perbaikan" value="<?= $prb->jumlah_perbaikan ?>">
			</div>
			<div class="col">
				<label>Biaya Perbaikan</label>
				<input type="number" class="form-control" placeholder="Masukan Biaya" name="biaya_perbaikan" value="<?= $prb->biaya_perbaikan ?>">
			</div>
		</div>
		</div>


		<div class="modal-footer">
        	<a href="<?= base_url('perbaikan/index'); ?>" class="btn btn-secondary">Batal</a>
        	<button type="submit" class="btn btn-primary" value="Tambah">Tambah</button>
      	</div>
	</form>
	<?php } ?>
</div>