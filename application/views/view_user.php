<html>

<head>
    <title>View User</title>
</head>

<body>
    <h1>Daftar User</h1>

    <a href="<?= base_url('Dosen/create'); ?>">Tambah Pengguna</a>

    <table border="1px solid black">
        <tr>
            <!-- <th>ID</th> -->
            <th>Nama</th>
            <th>NIM</th>
            <th>Action</th>
        </tr>

        <?php foreach ($dosen as $dsn) : ?>
            <tr>
                <!-- <td><?php echo $dsn['id']; ?></td> -->
                <td><?php echo $dsn['nik_dosen']; ?></td>
                <td><?php echo $dsn['nama_dosen']; ?></td>
                <td>
                    <a href="<?= site_url('Dosen/edit/' . $dsn['id']) ?>">Edit </a>|
                    <a href="<?= site_url('Dosen/delete/' . $dsn['id']) ?>">Hapus</a>
                </td>
            </tr>
        <?php endforeach; ?>

    </table>
</body>

</html>