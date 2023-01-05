    <h1>Daftar User</h1>

    <a href="<?= base_url('rps_sampul/create_get'); ?>">Tambah Pengguna</a>

    <table class="table">
        <tr>
            <!-- <th>ID</th> -->
            <th>no</th>
            <th>tgl penyusun</th>
            <th>tgl berlaku</th>
            <th>matkul</th>
            <th>dosen</th>
            <th>action</th>
        </tr>

        <?php foreach ($sampul as $smpl) : ?>
            <tr>
                <td><?php echo $smpl['no_dokumen']; ?></td>
                <td><?php echo $smpl['tgl_penyusunan']; ?></td>
                <td><?php echo $smpl['tgl_berlaku']; ?></td>
                <td><?php echo $smpl['id_matkul']; ?></td>
                <td><?php echo $smpl['nama_dosen']; ?></td>
                <td>
                    <a href="<?= site_url() ?>">Edit </a>|
                    <a href="<?= site_url() ?>">Hapus</a>
                </td>
            </tr>
        <?php endforeach; ?>

    </table>