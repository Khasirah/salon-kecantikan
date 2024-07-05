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
            <a href="<?= base_url('laporan/cetak_laporan_anggota'); ?>" class="btn btn-primary mb-3"><i
                    class="fas fa-print"></i> Print</a>
            <a href="<?= base_url('laporan/laporan_anggota_pdf'); ?>" class="btn btn-warning mb-3"><i
                    class="far fa-file-pdf"></i> Download Pdf</a>
            <a href="<?= base_url('laporan/export_excel_anggota'); ?>" class="btn btn-success mb-3"><i
                    class="far fa-file-excel"></i> Export ke Excel</a>
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nama Member</th>
                        <th scope="col">Bergabung</th>
                        <th scope="col">Status</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $a = 1;
                    foreach ($anggota as $c) { ?>
                        <tr>
                            <th scope="row"><?= $a++; ?></th>
                            <td>
                                <div style="display: flex; align-items: center;">
                                    <picture>
                                        <source srcset="" type="image/svg+xml">
                                        <img src="<?= base_url('assets/img/profile/') . htmlspecialchars($c['image']); ?>"
                                            alt="Profile Image" style="width: 50px; height: 50px; border-radius: 50%;">
                                    </picture>
                                    <span style="margin-left: 10px;"><?= htmlspecialchars($c['nama']); ?></span>
                                </div>
                            </td>
                            <td><?= date('d F Y', $c['tanggal_input']); ?></td>
                            <td><?= $c['is_active']; ?></td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<!-- /.container-fluid -->
</div>
<!-- End of Main Content -->