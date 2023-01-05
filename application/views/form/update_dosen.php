<html>

<head>
    <title>Edit Dosen</title>
</head>

<body>
    <h1>Edit Dosen</h1>
    <form action="<?= site_url('Dosen/update'); ?>" method="post">
        <div hidden>
            <input type="text" name="id" id="id" value="<?= $get_dosen_id->id ?>">
        </div>
        <label for="nik_dosen">Kode : </label>
        <input type="text" name="nik_dosen" id="nik_dosen" value="<?= $get_dosen_id->nik_dosen ?>">
        <label for="nama_dosen">Nama : </label>
        <input type="text" name="nama_dosen" id="nama_dosen" value="<?= $get_dosen_id->nama_dosen ?>">
        <button type=" submit" name="submit">Submit</button>
    </form>
</body>

</html>