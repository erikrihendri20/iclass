<?= $this->extend('templates/admin/index'); ?>
<?= $this->section('content'); ?>
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Atur Jadwal Pertemuan</h1>
    
    <div class="row">
        <div class="col">
            <form action="">
            <div class="form-group">
                <label for="exampleFormControlSelect1">Kelas</label>
                <select class="form-control" name="kode_kelas" id="kode-kelas">
                    <?php foreach($kelas as $k): ?>
                        <option value="<?= $k['id']; ?>"><?= $k['nama']; ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
            </form>
        </div>
    </div>

    <div id="modalTambahJadwal" class="modal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Tambah Jadwal Pertemuan</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="tutupModal();">
                      <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="judulEvent">Judul</label>
                        <input type="text" class="form-control form-control-sm" id="judulEvent" placeholder="Judul">
                    </div>
                    <div class="form-group">
                        <label for="pertemuan">Pertemuan ke-</label>
                        <input type="text" class="form-control form-control-sm" id="pertemuan" placeholder="00">
                    </div>
                    <div class="form-group">
                        <label for="thumbnailPertemuan">Thumbnail Pertemuan</label>
                        <input type="file" class="form-control-file form-control-sm" id="thumbnailPertemuan">
                    </div>
                    <input type="hidden" id="eventId" value="">
                    <input type="hidden" id="start">
                    <input type="hidden" id="end">
                    <input type="hidden" id="kode_kelas">
                    <input type="hidden" id="jenis">
                    <input type="hidden" id="class_name">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" onclick="tambahJadwal();">Selesai</button>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col">
            <div id='calendar' class="border border-secondary rounded"></div>
        </div>
    </div>

    <script>
        function tutupModal() {
            $('#modalTambahJadwal').hide();
        }
        
        function tambahJadwal() {
    	    var fd = new FormData();
            var files = $('#thumbnailPertemuan')[0].files[0];
            
            if (document.getElementById('eventId').value!="") {
                fd.append('id', document.getElementById('eventId').value);
            }
            
            fd.append('title', document.getElementById('judulEvent').value);
            fd.append('pertemuan', document.getElementById('pertemuan').value);
            fd.append('thumbnailPertemuan', files);
            fd.append('start', document.getElementById('start').value);
            fd.append('end', document.getElementById('end').value);
            fd.append('kode_kelas', document.getElementById('kode_kelas').value);
            fd.append('jenis', document.getElementById('jenis').value);
            fd.append('class_name', document.getElementById('class_name').value);
            
            $.ajax({
                url: '<?= base_url()?>/admin/tambahJadwal',
                type: 'post',
                data: fd,
                contentType: false,
                processData: false,
                success: function(response){
                    console.log(response);
                    alert('Perubahan sukses dilakukan');
                    $('#modalTambahJadwal').hide();
                    tutupModal();
                },
            });
    	}
    </script>
</div>
<?= $this->endSection(); ?>
