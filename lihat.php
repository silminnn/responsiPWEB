<?php 
$fp = fopen("pesanan.txt", "r");
?>

<html>
<head>
    <title>Dulux</title>
    <style type="text/css">
        table{
            border-color: black;
            background-color: white;
            box-shadow: 8px 8px 8px rgba(0,0,0,0.8);
        }
        h1{
            border-style: dashed;
            border-color: white;
            color: white;
        }
        a{
            color: white;
        }
    </style>
</head>
<body bgcolor="#fc0664">
    <h1 align="center">DATA PESANAN</h1>
    <div align="center"><strong><a href="data_pesanan.php">::KLIK UNTUK PESAN KEMBALI::</a></strong></div>
    <hr>
    <table border="2" width="80%" style="margin: 0 auto;" >
        <thead>
            <tr>
                <td>Tanggal</td>
                <td>Nama &nbsp;</td>
                <td>Provinsi</td>
                <td>Alamat</td>
                <td>No Telp</td>
                <td>Jenis Kelamin</td>
                <td>Alat</td>
                <td>Bahan</td>

            </tr>
        </thead>
        <tbody>
            <?php while ($isi = fgets($fp)): ?>
                <?php $data = explode('|', $isi) ?>
                <tr>
                    <td><?php echo $data[0] ?></td>
                    <td><?php echo $data[1] ?></td>
                    <td><?php echo $data[2] ?></td>
                    <td><?php echo $data[3] ?></td>
                    <td><?php echo $data[4] ?></td>
                    <td><?php echo $data[5] ?></td>
                    <td><?php echo $data[6] ?></td>
                    <td><?php echo $data[7] ?></td>
                </tr>
            <?php endwhile ?>
        </tbody>
    </table>

</body>
</html>