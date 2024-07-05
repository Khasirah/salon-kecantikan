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
                    <td>
                        <picture>
                            <source srcset="" type="image/svg+xml">
                            <img src="<?= base_url('assets/img/profile/') . $c['image']; ?>" class="img-fluid img-thumbnail"
                                alt="..." style="width:60px;height:80px;">
                        </picture>
                    </td>
                    <td><?= $c['nama']; ?></td>
                    <td><?= date('d F Y', $c['tanggal_input']); ?></td>
                    <td><?= $c['is_active']; ?></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
    <script type="text/javascript">
        var css = '@page { size: landscape; }',
            head = document.head || document.getElementsByTagName('head')[0],
            style = document.createElement('style');
        style.type = 'text/css';
        style.media = 'print';
        if (style.styleSheet) {
            style.styleSheet.cssText = css;
        } else {
            style.appendChild(document.createTextNode(css));
        }
        head.appendChild(style);
        window.print();
    </script>

</body>

</html>