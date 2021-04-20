<table id="daftar-peserta" class="display nowrap" style="width:100%">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Username</th>
                <th>Kelas</th>
                <th>Telepon</th>
                <th>Email</th>
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
                    <td>
                        <div class="form-group">
                            <select class="form-control paket" name="kode_kelas" id="<?= $u['id']; ?>">
                                <option>-</option>
                                <?php foreach($kelas as $k): ?>
                                    <?php if($k['kode_paket']==$u['kode_paket']): ?>
                                        <option <?= ($k['id']==$u['kode_kelas']) ? 'selected' : '' ?> value="<?= $k['id']; ?>"><?= $k['nama']; ?></option>
                                    <?php endif; ?>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </td>
                    <td><?= $u['telepon']; ?></td>
                    <td><?= $u['email']; ?></td>
                    <td>
                        <a class="badge badge-success text-light" type="submit" href="<?= base_url(); ?>/admin/editPeserta/<?= $u['id']; ?>" name="edit">Edit</a>
                        <a class="badge badge-danger text-light" type="submit" href="<?= base_url(); ?>/admin/hapusPeserta/<?= $u['id']; ?>" name="hapus">Hapus</a>
                    </td>
                </tr>
            <?php 
            $no++;
            endforeach; ?>
        </tbody>
    </table>


    