<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4>AGRAPANA &mdash; MANAGEMENT SYSTEM</h4>
                    </div>                    
                    <div class="card-body">
                        <div class="row">
                            <!-- Earnings (Monthly) Card Example -->
                            <div class="col-xl-3 col-md-6 mb-4">
                                <div class="card border-left-primary shadow h-100 py-2">
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2">
                                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Data Assets</div>
                                                <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                    <?php foreach ($countasset as $s) {
                                                        echo $s->data." Data Asset";
                                                    } ?>
                                                </div>
                                            </div>
                                            <div class="col-auto">
                                                <i class="fas fa-archive fa-2x text-gray-300"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer">
                                        <button type="button" class="btn btn-link text-dark" style="float: right;">Detail <span class="fa fa-eye"></span></button>
                                    </div>
                                </div>
                            </div>
                            <!-- Earnings (Monthly) Card Example -->
                            <div class="col-xl-3 col-md-6 mb-4">
                                <div class="card border-left-success shadow h-100 py-2">
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2">
                                                <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Pengajuan Asset</div>
                                                <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                    <?php foreach ($countpengajuan as $s) {
                                                        echo $s->data." Data Pengajuan";
                                                    } ?>
                                                </div>
                                            </div>
                                            <div class="col-auto">
                                                <i class="fas fa-file-signature fa-2x text-gray-300"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer">
                                        <button type="button" class="btn btn-link text-dark" style="float: right;">Detail <span class="fa fa-eye"></span></button>
                                    </div>
                                </div>
                            </div>
                            <!-- Earnings (Monthly) Card Example -->
                            <div class="col-xl-3 col-md-6 mb-4">
                                <div class="card border-left-info shadow h-100 py-2">
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2">
                                                <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Pengeluaran Barang</div>
                                                <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                    <?php foreach ($countkeluar as $s) {
                                                        echo $s->data." Data Asset Keluar";
                                                    } ?>
                                                </div>
                                            </div>
                                            <div class="col-auto">
                                                <i class="fas fa-sync-alt fa-2x text-gray-300"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer">
                                        <button type="button" class="btn btn-link text-dark" style="float: right;">Detail <span class="fa fa-eye"></span></button>
                                    </div>
                                </div>
                            </div>
                            <!-- Pending Requests Card Example -->
                            <div class="col-xl-3 col-md-6 mb-4">
                                <div class="card border-left-info shadow h-100 py-2">
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2">
                                                <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">Perbaikan Mesin</div>
                                                <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                    <?php foreach ($countperbaikan as $s) {
                                                        echo $s->data." Data Perbaikan Asset";
                                                    } ?>
                                                </div>
                                            </div>
                                            <div class="col-auto">
                                                <i class="fas fa-cogs fa-2x text-gray-300"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer">
                                        <button type="button" class="btn btn-link text-dark" style="float: right;">Detail <span class="fa fa-eye"></span></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
    </section>
</div>