<h1>Tambah RPS</h1>
<form action="<?= base_url('rps_sampul/create_post'); ?>" method="post">
    <div>
        <label for="no_dokumen">No Dokumen : </label>
        <input type="text" name="no_dokumen">
    </div>
    <div>
        <label for="tgl_penyusunan">TGL penyusunan : </label>
        <input type="date" name="tgl_penyusunan">
    </div>
    <div>
        <label for="tgl_berlaku">TGL berlaku : </label>
        <input type="date" name="tgl_berlaku">
    </div>
    <div>
        <label for="id_matkul">Matkul : </label>
        <input type="text" name="id_matkul">
    </div>
    <div>
        <select name="cmb_dosen" id="cmb_dosen">
            <?php foreach ($dosen as $d) : ?>
                <option value="<?= $d['id']; ?>">
                    <?= $d['nama_dosen']; ?>
                </option>
            <?php endforeach; ?>
        </select>
    </div>

    <button type="submit" name="submit">Submit</button>
</form>