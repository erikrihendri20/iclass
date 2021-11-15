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
                <td><button type="button" class="btn" data-toggle="modal" data-target="#zoom<?= $u['id']; ?>"><img id="img<?= $u['id'] ?>" style="max-height: 100px;" src="../img/bukti-pembayaran/<?= $u['bukti_pembayaran']; ?>" class="rounded mx-auto d-block" alt="..."></button></td>
                <td id="bagianStatus<?= $u['id']; ?>"><?= $u['status']; ?></td>
                <td id="bagianTombol<?= $u['id']; ?>">
                    <?php if($u['status']==1): ?>
                        <button type="button" style="border: none;" class="konfirmasi badge badge-success" value="<?= $u['id']; ?>" onclick="konfirmasi(<?= $u['id']; ?>);">Konfirmasi</button>
                        <button type="button" style="border: none;" class="tolak badge badge-danger" value="<?= $u['id']; ?>" onclick="tolak('<?= $u['id']; ?>');">Tolak</button>
                    <?php elseif($u['status']==2): ?>
                        <button type="button" style="border: none;" class="batalkan badge badge-warning" value="<?= $u['id']; ?>" onclick="batalkan(<?= $u['id']; ?>);">Batalkan</button>
                    <?php endif; ?>
                </td>
                <div class="modal fade" id="zoom<?= $u['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Bukti Pembayaran <?= $u['nama']; ?></h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <img style="width: 100%;" src="../img/bukti-pembayaran/<?= $u['bukti_pembayaran']; ?>" class="rounded mx-auto d-block" alt="...">
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
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

<script>
    function tolak(id) {
        $.get("<?= base_url() ?>/admin/tolakPembayaran/"+id, function( response ) {
            console.log(response);
            if (response == '1') {
                document.getElementById('img'+id).src="";
                document.getElementById('img'+id).style.visibility="hidden";
                document.getElementById('bagianTombol'+id).style.visibility="hidden";
                document.getElementById('bagianStatus'+id).innerHTML="0";
                alert('Berhasil ditolak.');
            } else {
                alert('Gagal ditolak');
            }
        });
    }
</script>