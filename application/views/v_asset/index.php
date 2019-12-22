<div class="card-header">
    <h4><i class="fas fa-database"></i> DATA ASSETS</h4>
</div>
<div class="card-body">
    <a href="<?= base_url('asset/tambah'); ?>" class="btn btn-primary"><span class="fa fa-plus"></span> Tambah Data</a>
    <br><br>
   <table id="example" class="table table-striped table-bordered dt-responsive nowrap" style="width:100%">
        <thead>
            <tr>
                <th>Kode</th>
                <th>NIP</th>
                <th>Nama Asset</th>
                <th>Satuan</th>
                <th>Jumlah</th>
                <th>Harga</th>
                <th>Tanggal Masuk</th>
                <th>Kategori</th>
                <th>Keterangan</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
        <?php foreach ($asset as $data) { ?>
            <tr>
            <td><?= $data->id_asset ?></td>
            <td><?= $data->nip ?></td>
            <td><?= $data->nama_asset ?></td>
            <td><?= $data->satuan ?></td>
            <td><?= $data->jumlah ?></td>
            <td>Rp.<?= $data->harga_asset ?></td>
            <td><?= $data->tgl_masuk ?></td>
            <td><?= $data->nama_kategori ?></td>
            <td><?= $data->keterangan ?></td>
            <td>
                <a href="<?= base_url('asset/edit/');echo $data->id_asset;?>" class="btn btn-primary" role="button"><span class="fa fa-edit"></span> Edit</a>
                <a href="<?= base_url('asset/hapus/');echo $data->id_asset;?>" class="btn btn-danger"><span class="fa fa-trash-alt"></span> Hapus</a>
            </td>
        <?php } ?>
        </tbody>
    </table>
</div>
