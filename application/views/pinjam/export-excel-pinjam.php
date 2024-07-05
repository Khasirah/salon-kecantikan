<?php
header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=$title.xls");
header("Pragma: no-cache");
header("Expires: 0");
?>
<style type="text/css">
    .table-data {
        width: 100%;
        border-collapse: collapse;
    }

    .table-data tr th,
    .table-data tr td {
        border: 1px solid black;
        font-size: 11pt;
        font-family: Verdana;
        padding: 10px 10px 10px 10px;
    }

    .table-data th {
        background-color: grey;
    }

    h3 {
        font-family: Verdana;
    }
</style>
<h3>
    <center>LAPORAN DATA BOOKING SERVICE</center>
</h3>
<br />
<table class="table-data" border=1>
    <thead>
        <tr>
            <th>No</th>
            <th scope="col">Nama Member</th>
            <th scope="col">No.Telp</th>
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
                            <td><?= $l['jam']; ?></td>
                            <td>Rp. <?= number_format($l['biaya'], 2, ',', '.'); ?></td>
                            <td><?= $l['status']; ?></td>
                        </tr>
                    <?php } ?>
                </tbody>
</table>