<!DOCTYPE html>
<html>
<head>
    <title>Menampilkan Data Tabel MySQL</title>
    <style>
        body {font-family: tahoma, arial}
        table {border-collapse: collapse}
        th, td {font-size: 13px; border: 1px solid #DEDEDE; padding: 3px 5px; color: #303030}
        th {background: #CCCCCC; font-size: 12px; border-color: #B0B0B0}
    </style>
</head>
<body>
    <center><h1>tabel data bus</h1></center>

    <h3>Tabel Pelanggan</h3>
    <table>
        <thead>
            <tr>
                <th>ID Pelanggan</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Tanggal Lahir</th>
                <th>Nomor Telepon</th>
                <th>Status Keanggotaan</th>
                <th>Tanggal Bergabung</th>
            </tr>
        </thead>
        <?php
        include 'koneksi.php';
        $sql = 'SELECT * FROM pelanggan';
        $query = mysqli_query($koneksi, $sql);
        while ($row = mysqli_fetch_array($query)) {
        ?>
        <tbody>
            <tr>
                <td><?php echo $row['ID_pelanggan'] ?></td>
                <td><?php echo $row['nama'] ?></td>
                <td><?php echo $row['alamat'] ?></td>
                <td><?php echo $row['tanggal_lahir'] ?></td>
                <td><?php echo $row['nomor_telepon'] ?></td>
                <td><?php echo $row['status_keanggotaan'] ?></td>
                <td><?php echo $row['tanggal_bergabung'] ?></td>
            </tr>
        </tbody>
        <?php
        }
        ?>
    </table>

    <h3>Tabel Bus</h3>
    <table>
        <thead>
            <tr>
                <th>ID Bus</th>
                <th>Nomor Plat</th>
                <th>Kapasitas</th>
                <th>Merek</th>
            </tr>
        </thead>
        <?php
        $sql = 'SELECT * FROM bus';
        $query = mysqli_query($koneksi, $sql);
        while ($row = mysqli_fetch_array($query)) {
        ?>
        <tbody>
            <tr>
                <td><?php echo $row['ID_bus'] ?></td>
                <td><?php echo $row['nomor_plat'] ?></td>
                <td><?php echo $row['kapasitas'] ?></td>
                <td><?php echo $row['merek'] ?></td>
            </tr>
        </tbody>
        <?php
        }
        ?>
    </table>

    <h3>Tabel Jadwal</h3>
    <table>
        <thead>
            <tr>
                <th>ID Jadwal</th>
                <th>ID Bus</th>
                <th>Tujuan</th>
                <th>Tanggal Berangkat</th>
            </tr>
        </thead>
        <?php
        $sql = 'SELECT * FROM jadwal';
        $query = mysqli_query($koneksi, $sql);
        while ($row = mysqli_fetch_array($query)) {
        ?>
        <tbody>
            <tr>
                <td><?php echo $row['ID_jadwal'] ?></td>
                <td><?php echo $row['ID_bus'] ?></td>
                <td><?php echo $row['tujuan'] ?></td>
                <td><?php echo $row['tanggal_berangkat'] ?></td>
            </tr>
        </tbody>
        <?php
        }
        ?>
    </table>

    <h3>Tabel Pemesanan</h3>
    <table>
        <thead>
            <tr>
                <th>ID Pemesanan</th>
                <th>ID Pelanggan</th>
                <th>ID Jadwal</th>
                <th>Tanggal Pemesanan</th>
                <th>Jumlah Tiket</th>
            </tr>
        </thead>
        <?php
        $sql = 'SELECT * FROM pemesanan';
        $query = mysqli_query($koneksi, $sql);
        while ($row = mysqli_fetch_array($query)) {
        ?>
        <tbody>
            <tr>
                <td><?php echo $row['ID_pemesanan'] ?></td>
                <td><?php echo $row['ID_pelanggan'] ?></td>
                <td><?php echo $row['ID_jadwal'] ?></td>
                <td><?php echo $row['tanggal_pemesanan'] ?></td>
                <td><?php echo $row['jumlah_tiket'] ?></td>
            </tr>
        </tbody>
        <?php
        }
        ?>
    </table>

    <h3>Tabel Detail Pemesanan</h3>
    <table>
        <thead>
            <tr>
                <th>ID Pemesanan</th>
                <th>ID Bus</th>
                <th>Nomor Kursi</th>
            </tr>
        </thead>
        <?php
        $sql = 'SELECT * FROM detail_pemesanan';
        $query = mysqli_query($koneksi, $sql);
        while ($row = mysqli_fetch_array($query)) {
        ?>
        <tbody>
            <tr>
                <td><?php echo $row['ID_pemesanan'] ?></td>
                <td><?php echo $row['ID_bus'] ?></td>
                <td><?php echo $row['nomor_kursi'] ?></td>
            </tr>
        </tbody>
        <?php
        }
        ?>
    </table>
</body>
</html>
