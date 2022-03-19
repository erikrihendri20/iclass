<div class="modal fade" id="lihat-skd" tabindex="-1" role="dialog" aria-labelledby="edit_jadwalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <div class="modal-title" id="edit_jadwalLabel">
                    <h5>Soal SKD</h5>
                </div>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body px-4">
                <div>
                    <h6 class="font-weight-bold">TWK</h6>
                    <div id="div-twk" class="row mx-0"></div>
                </div>
                <div class="mt-4">
                    <h6 class="font-weight-bold">TIU</h6>
                    <div id="div-tiu"></div>
                </div>
                <div class="mt-4">
                    <h6 class="font-weight-bold">TKP</h6>
                    <div id="div-tkp"></div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    function lihatSoal(id) {
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                soal = JSON.parse(xhttp.responseText);
                divTwk = document.getElementById('div-twk');
                divTwk.innerHTML="";
                divTiu = document.getElementById('div-tiu');
                divTiu.innerHTML="";
                divTkp = document.getElementById('div-tkp');
                divTkp.innerHTML="";

                soal['twk'].forEach(function(twk) {
                    divTwk.innerHTML+=`<button class="btn bg-white text-dark text-center font-weight-bold border p-0 mt-2 mr-2"
                                            style="width: 40px; height: 40px;"
                                            onclick="soalSkd('${twk['event_id']}', '${twk['nomor']}', '${twk['jenis']}', '${twk['a']}', '${twk['b']}', '${twk['c']}', '${twk['d']}', '${twk['e']}');">
                                            ${twk['nomor']}
                                        </button>`;
                });

                soal['tiu'].forEach(function(tiu) {
                    divTiu.innerHTML+=`<button class="btn bg-white text-dark text-center font-weight-bold border p-0 mt-2 mr-2"
                                            style="width: 40px; height: 40px;"
                                            onclick="soalSkd('${tiu['event_id']}', '${tiu['nomor']}', '${tiu['jenis']}', '${tiu['a']}', '${tiu['b']}', '${tiu['c']}', '${tiu['d']}', '${tiu['e']}');">
                                            ${tiu['nomor']}
                                        </button>`;
                });

                soal['tkp'].forEach(function(tkp) {
                    divTkp.innerHTML+=`<button class="btn bg-white text-dark text-center font-weight-bold border p-0 mt-2 mr-2"
                                            style="width: 40px; height: 40px;"
                                            onclick="soalSkd('${tkp['event_id']}', '${tkp['nomor']}', '${tkp['jenis']}', '${tkp['a']}', '${tkp['b']}', '${tkp['c']}', '${tkp['d']}', '${tkp['e']}');">
                                            ${tkp['nomor']}
                                        </button>`;
                });
            }
        };
        xhttp.open("GET", "<?= base_url() ?>/admin/soalSkd/"+id, true);
        xhttp.send();

        $('#lihat-skd').modal('show');
    }
</script>