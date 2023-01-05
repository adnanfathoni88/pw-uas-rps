<html>

<head>
    <title>Add Dosen</title>
</head>

<body>
    <h1>Tambah Dosen</h1>
    <form action="<?= base_url('Dosen/create'); ?>" method="post">
        <label for="nik_dosen">Kode : </label>
        <input type="text" name="nik_dosen" id="nik_dosen">
        <label for="nama_dosen">Nama : </label>
        <input type="text" name="nama_dosen" id="nama_dosen">
        <button type="submit" name="submit">Submit</button>
    </form>
</body>

</html>