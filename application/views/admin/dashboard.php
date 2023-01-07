<div class="content">
    <div class="py-4 px-3 px-md-4">

        <div class="mb-3 mb-md-4 d-flex justify-content-between">
            <div class="h3 mb-0">Dashboard</div>
        </div>

        <div class="row">

            <div class="col-md-6 col-xl-4 mb-3 mb-xl-4">
                <!-- Widget -->
                <div class="card flex-row align-items-center p-3 p-md-4">
                    <div class="icon icon-lg bg-soft-primary rounded-circle mr-3">
                        <i class="gd-bar-chart icon-text d-inline-block text-primary"></i>
                    </div>
                    <div>
                        <h4 class="lh-1 mb-1"><?= $product; ?></h4>
                        <h6 class="mb-0">Total Produk</h6>
                    </div>
                    <a href="<?= base_url(); ?>c_admin/product"><svg xmlns="http://www.w3.org/2000/svg" style="margin-left: 150px;" width="25" height="25" fill="currentColor" class="bi bi-arrow-right-circle" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM4.5 7.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H4.5z" />
                        </svg></a>

                </div>
                <!-- End Widget -->
            </div>

            <div class="col-md-6 col-xl-4 mb-3 mb-xl-4">
                <!-- Widget -->
                <div class="card flex-row align-items-center p-3 p-md-4">
                    <div class="icon icon-lg bg-soft-secondary rounded-circle mr-3">
                        <i class="gd-wallet icon-text d-inline-block text-secondary"></i>
                    </div>
                    <div>
                        <h4 class="lh-1 mb-1"> </h4>
                        <h6 class="mb-0">Tambah Data</h6>
                    </div>
                    <a href="<?= base_url(); ?>c_admin/add"><svg xmlns="http://www.w3.org/2000/svg" style="margin-left: 150px;" width="25" height="25" fill="currentColor" class="bi bi-arrow-right-circle" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM4.5 7.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H4.5z" />
                        </svg></a>
                </div>
                <!-- End Widget -->
            </div>
            <!-- End Widget -->
        </div>

    </div>