<div class="card-header">
    <h4><i class="fas fa-database"></i> DATA USER</h4>
</div>
<div class="card-body">
    <a href="<?= base_url('user/tambah');?>" class="btn btn-primary"><span class="fa fa-plus"></span> Tambah Data</a>
    <br><br>
    <table id="example" class="table table-striped table-bordered dt-responsive nowrap" style="width:100%">
        <thead>
            <tr>
                <th>NIP</th>
                <th>Nama</th>
                <th>Jabatan</th>
                <th>No. Telp</th>
                <th>Username</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
        <?php foreach ($tb_user as $us) { ?>
            <tr>
            <td><?= $us->nip ?></td>
            <td><?= $us->nama ?></td>
            <td><?= $us->jabatan ?></td>
            <td><?= $us->no_telp ?></td>
            <td><?= $us->username ?></td>
            <td>
                <a href="<?= base_url('user/edit/');echo $us->nip;?>" class="btn btn-primary"><span class="fa fa-edit"></span> Edit</a>
                <a href="<?= base_url('user/hapus/');echo $us->nip;?>" class="btn btn-danger"><span class="fa fa-trash-alt"></span> Hapus</a>
            </td>
            </tr>
        <?php } ?>
        </tbody>
    </table>
</div>
