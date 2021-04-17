<table id="daftar-peserta" class="display nowrap" style="width:100%">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Username</th>
                <th>Bukti Pembayaran</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            $no=1;
            foreach($user as $u):?>
                <tr>
                    <td><?= $no; ?></td>
                    <td><?= $u['nama']; ?></td>
                    <td><?= $u['username']; ?></td>
                    <td><img src="<?= $u['bukti_pembayaran']; ?>" class="rounded mx-auto d-block" alt="..."></td>
                    <td><?= $u['status']; ?></td>
                    <td>
                        <?php if($u['status']==1): ?>
                            <button type="button" style="border: none;" class="badge badge-success">Konfirmasi</button>
                            <button type="button" style="border: none;" class="badge badge-danger">Tolak</button>
                        <?php elseif($u['status']==2): ?>
                            <button type="button" style="border: none;" class="badge badge-warning">Batalkan</button>
                        <?php endif; ?>
                    </td>
                </tr>
            <?php 
            $no++;
            endforeach; ?>
        </tbody>
    </table>