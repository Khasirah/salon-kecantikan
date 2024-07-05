<?php
header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=$title.xls");
header("Pragma: no-cache");
header("Expires: 0");
?>

<h3>
        <center>Laporan Data service Nail Art</center>
    </h3>
    <br />
    <table class="table-data">
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
                <td>Rp. <?= number_format($b['biaya'], 2, ',', '.'); ?></td>
                <td>Rp. <?= number_format($total, 2, ',', '.'); ?></td>
            </tr>
        <?php } ?>
    </tbody>
    <tfoot>
        <tr>
            <td colspan="4" style="text-align:right;"><strong>Total Pendapatan:</strong></td>
            <td><strong>Rp. <?= number_format($total_pendapatan, 2, ',', '.'); ?></strong></td>
        </tr>
    </tfoot>
    </table>
</body>

</html>