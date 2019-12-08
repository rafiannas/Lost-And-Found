<div class="row mt-4">
        <div class="col-xl-12 col-lg-12">
            <h1>List Temuan Barang</h1>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">No Laporan</th>
                    <th scope="col">Id Barang</th>
                    <th scope="col">Id User</th>
                    <th scope="col">Tanggal temuan</th>
                    <th scope="col">Lokasi temuan</th>
                </tr>
                <?php foreach ($temuan as $temu): ?>
                <tr>
                <td><?= $temu['no_laporan'] ?></td>
                <td><?= $temu['id_barang'] ?></td>
                <td><?= $temu['id_user'] ?></td>
                <td><?= $temu['tgl_temuan'] ?></td>
                <td><?= $temu['lokasi_penemuan'] ?></td>
                </tr>
                <?php endforeach; ?> 
            </thead>
        </table>
        </div>
    </div>