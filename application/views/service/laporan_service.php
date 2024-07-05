<!-- Begin Page Content -->
<div class="container-fluid">
    <?= $this->session->flashdata('pesan'); ?>
    <div class="row">
        <div class="col-lg-12">
            <?php if (validation_errors()) { ?>
                <div class="alert alert-danger" role="alert">
                    <?= validation_errors(); ?>
                </div>
            <?php } ?>
            <?= $this->session->flashdata('pesan'); ?>
            <a href="<?= base_url('laporan/cetak_laporan_service'); ?>" class="btn btn-primary mb-3"><i
                    class="fas fa-print"></i> Print</a>
            <a href="<?= base_url('laporan/laporan_service_pdf'); ?>" class="btn btn-warning mb-3"><i
                    class="far fa-file-pdf"></i> Download Pdf</a>
            <a href="<?= base_url('laporan/export_excel'); ?>" class="btn btn-success mb-3"><i
                    class="far fa-file-excel"></i> Export ke Excel</a>
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Service</th>
                        <th scope="col">Booking</th>
                        <th scope="col">Harga</th>
                        <th scope="col">Total</th>
                    </tr>
                </thead>
                <tbody>
        <?php
        $a = 1;
        $total_pendapatan = 0;
        foreach ($service as $b) {
            $total = $b['dibooking'] * $b['biaya'];
            $total_pendapatan += $total;
        ?>
            <tr>
                <th scope="row"><?= $a++; ?></th>
                <td><?= $b['judul_service']; ?></td>
                <td><?= $b['dibooking']; ?> orang</td>
                <td><?= number_format($b['biaya'], 2, ',', '.'); ?></td>
                <td><?= number_format($total, 2, ',', '.'); ?></td>
            </tr>
        <?php } ?>
    </tbody>
    <tfoot>
        <tr>
            <td colspan="4" style="text-align:right;"><strong>Total Pendapatan:</strong></td>
            <td><strong><?= number_format($total_pendapatan, 2, ',', '.'); ?></strong></td>
        </tr>
    </tfoot>
            </table>
        </div>
    </div>
</div>
<!-- /.container-fluid -->
</div>
<!-- End of Main Content -->