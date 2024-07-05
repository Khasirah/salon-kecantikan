<?php
header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=$title.xls");
header("Pragma: no-cache");
header("Expires: 0");
?>

<h3>
        <center>Laporan Data Anggota Perputakaan Online</center>
    </h3>
    <br />
    <table class="table-data">
    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Photo</th>
                        <th scope="col">Nama</th>
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
                            <td><picture>
                                    <source srcset="" type="image/svg+xml">
                                    <img src="<?= base_url('assets/img/profile/') . $c['image']; ?>" class="img-fluid img-thumbnail" alt="..." style="width:60px;height:80px;">
                                </picture></td>
                            <td><?= $c['nama']; ?></td>
                            <td><?= date('d F Y', $c['tanggal_input']); ?></td>
                            <td><?= $c['is_active']; ?></td>
                        </tr>
                    <?php } ?>
                </tbody>
    </table>
</body>

</html>