<table id="daftar-peserta" class="display nowrap" style="width:100%">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Paket Saat Ini</th>
            <th>Pilihan Paket Baru</th>
            <th>Kekurangan Pembayaran</th>
            <th>Bukti Pembayaran Kekurangan</th>
            <th>Diajukan pada</th>
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
                <td><?= $u['paketSaatIni']; ?></td>
                <td><?= $u['pilihanPaketBaru']; ?></td>
                <td><?= $u['kekuranganPembayaran']; ?></td>
                <td><button type="button" class="btn" data-toggle="modal" data-target="#zoom<?= $u['id']; ?>"><img id="img<?= $u['id'] ?>" style="max-height: 100px;" src="../img/ubahpaket/<?= $u['buktiPembayaran']; ?>" class="rounded mx-auto d-block" alt="..."></button></td>
                <td><?= date('j F Y', strtotime($u['created_at'])) ?></td>
                <td id="bagianTombol<?= $u['id']; ?>">
                    <button type="button" style="border: none;" class="konfirmasi badge badge-success" onclick="konfirmasi('<?= $u['id']; ?>', '<?= $u['pilihanPaketBaru']; ?>');">Konfirmasi</button>
                    <button type="button" style="border: none;" class="tolak badge badge-danger" onclick="tolak('<?= $u['username']; ?>');">Tolak</button>
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
                            <img style="width: 100%;" src="../img/ubahpaket/<?= $u['buktiPembayaran']; ?>" class="rounded mx-auto d-block" alt="...">
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

    function konfirmasi(id, paket) {
        let kode;
        switch (paket) {
            case 'Reguler':
                kode='1'; break;
            case 'Premium':
                kode='2'; break;
            case 'Premium+':
                kode='3'; break;
            case 'Intensif (1 Semester)':
                kode='4'; break;
            case 'Intensif (1 Tahun)':
                kode='5'; break;
        }

        $.get("<?= base_url() ?>/admin/konfirmasiUbahPaket/"+id+"/"+kode, function( response ) {
            console.log(response);
            if (response == '1') {
                alert('Berhasil dikonfirmasi.');
                $.get('tampilkanUbahPaket', function(result) {
                    function init() {
                        $('#tabel-peserta').html(result);
                        $('#daftar-peserta').DataTable();
                    }
                    init();
                });
            } else {
                alert('Gagal dikonfirmasi');
            }
        });
        
    }
    
    function tolak(username) {
        $.get("<?= base_url() ?>/admin/tolakUbahPaket/"+username, function( response ) {
            console.log(response);
            if (response == '1') {
                alert('Berhasil ditolak.');
                $.get('tampilkanUbahPaket', function(result) {
                    function init() {
                        $('#tabel-peserta').html(result);
                        $('#daftar-peserta').DataTable();
                    }
                    init();
                });
            } else {
                alert('Gagal ditolak');
            }
        });
    }
</script>