<!DOCTYPE html>
<html>

<head>
    <title></title>
</head>

<body>
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

        h3 {
            font-family: Verdana;
        }
    </style>
    <h3>
        <center>Laporan Data service Nail Art Studio</center>
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
    <script type="text/javascript">
        window.print();
    </script>
</body>

</html>