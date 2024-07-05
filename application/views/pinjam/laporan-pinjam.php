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
            <a href="<?= base_url('laporan/cetak_laporan_pinjam'); ?>" class="btn btn-primary mb-3"><i
                    class="fas fa-print"></i> </a>
            <a href="<?= base_url('laporan/laporan_pinjam_pdf'); ?>" class="btn btn-warning mb-3"><i
                    class="far fa-file-pdf"></i> </a>
            <a href="<?= base_url('laporan/export_excel_pinjam'); ?>" class="btn btn-success mb-3"><i
                    class="far fa-file-excel"></i> </a>
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nama Member</th>
                        <th scope="col">No.Telpon</th>
                        <th scope="col">Service</th>
                        <th scope="col">Tanggal Booking</th>
                        <th scope="col">Jam Booking</th>
                        <th scope="col">Total Biaya</th>
                        <th scope="col">Status</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $a = 1;
                    foreach ($laporan as $l) { ?>
                        <tr>
                            <th scope="row"><?= $a++; ?></th>
                            <td>
                                <div style="display: flex; align-items: center;">
                                    <picture>
                                        <source srcset="" type="image/svg+xml">
                                        <img src="<?= base_url('assets/img/profile/') . htmlspecialchars($l['image']); ?>"
                                            alt="Profile Image" style="width: 50px; height: 50px; border-radius: 50%;">
                                    </picture>
                                    <span style="margin-left: 10px;"><?= htmlspecialchars($l['nama']); ?></span>
                                </div>
                            </td>
                            <td><?= $l['no_telp']; ?></td>
                            <td><?= $l['judul_service']; ?></td>
                            <td><?= $l['tanggal']; ?></td>
                            <td><?= date('H:i', strtotime($l['jam'])); ?></td>

                            
                            <td>Rp. <?= number_format($l['biaya'], 2, ',', '.'); ?></td>
                            <td><?= $l['status']; ?></td>
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