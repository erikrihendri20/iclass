<table id="daftar-admin" class="display nowrap" style="width:100%">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Username</th>
            <th>Password</th>
            <th>Level</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $no=1; 
        foreach ($admin as $a) :
        ?>
            <tr>
                <td><?= $no; ?></td>
                <td><?= $a['nama']; ?></td>
                <td><?= $a['username']; ?></td>
                <td><?= $a['password']; ?></td>
                <td>
                    <select class="form-control" onchange="ubahRoleAdmin('<?= $a['id'] ?>', this.value);">
                        <option value="1"<?= ($a['role']==1) ? 'selected' : '' ?>>super admin</option>
                        <option value="2"<?= ($a['role']==2) ? 'selected' : '' ?>>pengajar</option>
                        <option value="3"<?= ($a['role']==3) ? 'selected' : '' ?>>admin TO</option>
                    </select>
                </td>
                <td>
                    <?php if($a['username'] != 'erik'): ?>
                        <?php if($a['status']==0): ?>
                            <button class="badge badge-success konfirmasi" value="<?= $a['id']; ?>" style="border: none;">Konfirmasi</button>
                        <?php endif; ?>
                        <button class="badge badge-danger tolak" value="<?= $a['id']; ?>" style="border: none;">Tolak</button>
                    <?php endif; ?>
                </td>
            </tr>
        <?php $no++; endforeach; ?>
    </tbody>
</table>