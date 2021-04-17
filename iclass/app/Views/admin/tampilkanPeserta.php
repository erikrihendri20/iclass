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
                        <!-- <button class="badge badge-success" style="border: none;" data-toggle="modal" data-target="#editpeserta<?= $u['id']; ?>">Edit</button> -->
                        <a class="badge badge-danger text-light" type="submit" href="<?= base_url(); ?>/admin/hapusPeserta/<?= $u['id']; ?>" name="hapus" href="">Hapus</a>
                    </td>
                    <div class="modal fade" id="editpeserta<?= $u['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Edit Kelas</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form>
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                                <button type="submit" name="submit" class="btn btn-primary editPeserta" data-dismiss="modal">Simpan</button>
                            </form>
                        </div>
                        </div>
                    </div>
                    </div>

                    <div class="modal fade" id="edit<?= $u['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Edit Kelas</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form action="<?= base_url(); ?>/admin/editPeserta" method="POST">
                                        <input type="hidden" name="id" value="<?= $u['id']; ?>">
                                        <div class="form-group">
                                            <input type="text" name="nama" class="form-control" placeholder="Nama Kelas" value="<?= $u['nama']; ?>">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="username" class="form-control" placeholder="Username" value="<?= $u['username']; ?>">
                                        </div>
                                        <div class="form-group">
                                            <select class="form-control paket" name="kode-kelas" id="<?= $u['id']; ?>">
                                                <?php foreach($kelas as $k): ?>
                                                    <?php if($k['kode_paket']==$u['kode_paket']): ?>
                                                        <option <?= ($k['id']==$u['kode_kelas']) ? 'selected' : '' ?> value="<?= $k['id']; ?>"><?= $k['nama']; ?></option>
                                                    <?php endif; ?>
                                                <?php endforeach; ?>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="jurusan" class="form-control" placeholder="Jurusan" value="<?= $u['jurusan']; ?>">
                                        </div>
                                        <div class="form-group">
                                                    <select class="form-control" name="kode-paket">
                                                    <?php foreach ($paket as $p) :?>
                                                        <option <?= ($p['id']==$u['kode_paket']) ? 'selected' : '' ?> value="<?= $p['id']; ?>"><?= $p['nama']; ?></option>
                                                    <?php endforeach; ?>
                                                    </select>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="telepon" class="form-control" placeholder="No Whatsapp" value="<?= $u['telepon']; ?>">
                                        </div>
                                        <div class="form-group">
                                            <input type="email" name="email" class="form-control" placeholder="Email" value="<?= $u['email']; ?>">
                                        </div>
                                        <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                                        <button type="submit" name="submit" class="btn btn-primary">Simpan</button>
                                        </div>
                                    </form>
                                </div>
                                </div>
                            </div>
                        </div>
                </tr>
            <?php 
            $no++;
            endforeach; ?>
        </tbody>
    </table>


    