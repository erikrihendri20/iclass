<?= $this->extend('templates/index'); ?>
<?= $this->section('content'); ?>
<div class="content mb-0 py-3">
    <div class="row mx-auto mt-5" style="width: 80%;">
        <div class="row justify-content-between w-100 mx-0 px-5">
            <h5 class="w-50 my-auto pl-4"><?= $event['title'] ?></h5>
            <div class="row justify-content-end w-50 mx-0">
                <h5 class="font-weight-bold my-auto">
                    <?php if (date('Y-m-d')==date('Y-m-d', strtotime($event['start_event'])) && $peserta['selesai']!='1') { ?>
                        Waktu Tersisa&nbsp;
                        <span id="span" class="bg-white px-3 py-2" style="color:#12336D; border-radius: 10px;"></span>
                        <script>
                            var span = document.getElementById('span');
                            
                            var dt = "<?= $now ?>";
                            dt = dt.split(/[- :]/);
                            dt = new Date(dt[0], dt[1]-1, dt[2], dt[3], dt[4], dt[5]);
                            dt = new Date(dt);
                            
                            function time() {
                                var d = new Date();
                                d = new Date(d.toLocaleString("en-US", {timeZone: "Asia/Jakarta"})).getTime();
                                var distance = dt - d;
                                
                                var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                                var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                                var seconds = Math.floor((distance % (1000 * 60)) / 1000);
                                
                                span.textContent = hours + ":" + minutes + ":" + seconds;
                                
                                if (distance <= 0) {
                                    selesaiBanget();
                                }
                            }

                            setInterval(time, 1000);
                        </script>
                    <?php } ?>
                </h5>
            </div>
        </div>
        <div class="row w-100 mx-0 mt-5">
            <div class="row w70 mx-0 pr-3">
                <div class="row border border-30 w-100 mx-0 px-4 pt-4 pb-3">
                    <div class="row align-content-center justify-content-between w-100 mx-0">
                        <div class="row align-content-center w-50 mx-0">
                            <h5 id="no-soal" class="pl-5">Soal Nomor 1</h5>
                        </div>
                        <div class="row align-content-center justify-content-end w-50 mx-0">
                            <button id="sebelumnya" class="btn btn-link text-dark font-weight-bold" style="visibility: hidden;" onclick="sebelumnya();">
                                <h4 class="fas fa-chevron-circle-left mb-0"></h4>
                            </button>
                            <button id="raguBtn" class="btn btn-secondary font-weight-bold border-10 mx-1 px-3" onclick="ragu();">Ragu</button>
                            <button id="selanjutnya" class="btn btn-link text-dark font-weight-bold" style="" onclick="selanjutnya();">
                                <h4 class="fas fa-chevron-circle-right mb-0"></h4>
                            </button>
                        </div>
                    </div>
                    <div class="row w-100 mx-0 mt-3 hsoal" style="overflow-y: auto;">
                        <div class="row bg-white w-100 mx-0" style="min-height: 100%">
                            <img id="soal" src="<?= base_url() ?>/img/tryout/<?php echo $event['title']." - ".$event['id']; ?>/soal/TWK/1.jpg" alt="" class="w-100" style="border-radius: 10px; object-fit: contain;">
                        </div>
                    </div>
                    <div class="row w-100 mx-0 mt-4 px-5">
                        <div class="row w-100 mx-0">
                            <div class="pr-3" style="width:15%">
                                <label id="labelA" class="btn bg-white border font-weight-bold w-100 border-20 mt-2 mb-0 py-2">
                                    <input id="radioA" type="radio" name="jawaban" value="A" autocomplete="off" style="display: none;" onclick="jawab('A');">A
                                </label>
                            </div>
                            <div class="pr-3" style="width:15%">
                                <label id="labelB" class="btn bg-white border font-weight-bold w-100 border-20 mt-2 mb-0 py-2">
                                    <input id="radioB" type="radio" name="jawaban" value="B" autocomplete="off" style="display: none;" onclick="jawab('B');">B
                                </label>
                            </div>
                            <div class="pr-3" style="width:15%">
                                <label id="labelC" class="btn bg-white border font-weight-bold w-100 border-20 mt-2 mb-0 py-2">
                                    <input id="radioC" type="radio" name="jawaban" value="C" autocomplete="off" style="display: none;" onclick="jawab('C');">C
                                </label>
                            </div>
                            <div class="pr-3" style="width:15%">
                                <label id="labelD" class="btn bg-white border font-weight-bold w-100 border-20 mt-2 mb-0 py-2">
                                    <input id="radioD" type="radio" name="jawaban" value="D" autocomplete="off" style="display: none;" onclick="jawab('D');">D
                                </label>
                            </div>
                            <div class="pr-3" style="width:15%">
                                <label id="labelE" class="btn bg-white border font-weight-bold w-100 border-20 mt-2 mb-0 py-2">
                                    <input id="radioE" type="radio" name="jawaban" value="E" autocomplete="off" style="display: none;" onclick="jawab('E');">E
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="w30 mx-0 pl3">
                <div class="border border-30 w-100 mx-0 pl-3 py-3 pr-2">
                    <div style="max-height: 350px; overflow-y:auto;">
                        <h6 class="font-weight-bold w-100 mt-2">TWK</h6>
                        <div class="w-100 mx-0 pb-2 nomor-skd">
                            <?php foreach ($twk as $t) { ?>
                                <div class="mr-2 mt-2 nomor">
                                    <button id="TWK<?= $t['nomor'] ?>"
                                        <?php if (!empty($jawaban_twk) && !empty($jawaban_twk[$t['nomor']-1])) { ?>
                                            class="btn bg-primary text-white text-center font-weight-bold border p-2"
                                        <?php } else { ?>
                                            class="btn bg-white text-dark text-center font-weight-bold border p-0" 
                                        <?php } ?>
                                        style="width: 50px; height: 50px; border-radius: 15px;"
                                        onclick="pindahSoal('TWK','<?= $t['nomor']-1 ?>');"><?= $t['nomor'] ?></button>
                                </div>
                            <?php } ?>
                        </div>
                        <h6 class="font-weight-bold w-100 mt-4">TIU</h6>
                        <div class="w-100 mx-0 pb-2 nomor-skd">
                            <?php foreach ($tiu as $t) { ?>
                                <div class="mr-2 mt-2 nomor">
                                    <button id="TIU<?= $t['nomor'] ?>"
                                        <?php if (!empty($jawaban_tiu) && !empty($jawaban_tiu[$t['nomor']-31])) { ?>
                                            class="btn bg-primary text-white text-center font-weight-bold border p-2"
                                        <?php } else { ?>
                                            class="btn bg-white text-dark text-center font-weight-bold border p-0" 
                                        <?php } ?>
                                        style="width: 50px; height: 50px; border-radius: 15px;"
                                        onclick="pindahSoal('TIU','<?= $t['nomor']-1 ?>');"><?= $t['nomor'] ?></button>
                                </div>
                            <?php } ?>
                        </div>
                        <h6 class="font-weight-bold w-100 mt-4">TKP</h6>
                        <div class="w-100 mx-0 pb-2 nomor-skd">
                            <?php foreach ($tkp as $t) { ?>
                                <div class="mr-2 mt-2 nomor">
                                    <button id="TKP<?= $t['nomor'] ?>"
                                        <?php if (!empty($jawaban_tkp) && !empty($jawaban_tkp[$t['nomor']-66])) { ?>
                                            class="btn bg-primary text-white text-center font-weight-bold border p-2"
                                        <?php } else { ?>
                                            class="btn bg-white text-dark text-center font-weight-bold border p-0" 
                                        <?php } ?>
                                        style="width: 50px; height: 50px; border-radius: 15px;"
                                        onclick="pindahSoal('TKP','<?= $t['nomor']-1 ?>');"><?= $t['nomor'] ?></button>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
                <div class="row w-100 mx-0 mt-4 px-3">
                    <div class="row border-bottom w-100 mx-0 pb-2">
                        <div class="bg-primary h-100" style="width: 19.2px; border-radius: 5px;"></div>
                        <h6 class="mb-0 ml-2">Sudah terisi</h6>
                        <h6 id="terisi" class="mb-0 ml-auto"><?= $terisi ?></h6>
                    </div>
                    <div class="row border-bottom w-100 mx-0 mt-3 pb-2">
                        <div class="bg-secondary h-100" style="width: 19.2px; border-radius: 5px;"></div>
                        <h6 class="mb-0 ml-2">Ragu</h6>
                        <h6 id="ragu" class="mb-0 ml-auto">0</h6>
                    </div>
                    <div class="row border-bottom w-100 mx-0 mt-3 pb-2">
                        <div class="border h-100" style="width: 19.2px; border-radius: 5px;"></div>
                        <h6 class="mb-0 ml-2">Belum terisi</h6>
                        <h6 id="kosong" class="mb-0 ml-auto"><?= $kosong ?></h6>
                    </div>
                </div>                
                <div class="row justify-content-end w-100 mx-0 mt-4 px-3">
                    <button class="btn btn-primary text-white border-30 px-4 py-2" onclick="selesai();">
                        <h6 class="mb-0 p-1">Selesai</h6>
                    </button>
                </div>
            </div>
        </div>
    </div>

    <div id="modalSelesai" class="modal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>Apakah Anda yakin ingin menyelesaikan try out?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-success" onclick="selesaiBanget();">Yakin</button>
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <script>
        var soal = ['TWK', 0];
        var initialState = {
            kosong: <?= $kosong ?>,
            terisi: <?= $terisi ?>,
            jawaban_twk: <?= empty($jawaban_twk) ? "['','','','','','','','','','','','','','','','','','','','','','','','','','','','','','']" : json_encode(explode(',', $peserta['jawaban_twk'])) ?>,
            jawaban_tiu: <?= empty($jawaban_tiu) ? "['','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','']" : json_encode(explode(',', $peserta['jawaban_tiu'])) ?>,
            jawaban_tkp: <?= empty($jawaban_tkp) ? "['','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','']" : json_encode(explode(',', $peserta['jawaban_tkp'])) ?>,
        };
        let raguan = [];

        function twkAction(jawaban) {
            return {
                type: 'jawab-twk',
                payload: jawaban
            };
        }

        function tiuAction(jawaban) {
            return {
                type: 'jawab-tiu',
                payload: jawaban
            };
        }

        function tkpAction(jawaban) {
            return {
                type: 'jawab-tkp',
                payload: jawaban
            };
        }

        function jawabanReducer(state = initialState, action) {
            switch (action.type) {
                case 'jawab-twk':
                    return { 
                        ...state,
                        jawaban_twk: state.jawaban_twk.map(
                            (jawab, i) => i === parseInt(soal[1]) ? action.payload : jawab
                        )
                    };
                case 'jawab-tiu':
                    return {
                        ...state,
                        jawaban_tiu: state.jawaban_tiu.map(
                            (jawab, i) => i === parseInt(soal[1]-30) ? action.payload : jawab
                        )
                    };
                case 'jawab-tkp':
                    return {
                        ...state,
                        jawaban_tkp: state.jawaban_tkp.map(
                            (jawab, i) => i === parseInt(soal[1]-65) ? action.payload : jawab
                        )
                    };
                case 'terisi':
                    return {
                        ...state,
                        terisi: state.terisi+1,
                        kosong: state.kosong-1
                    }
                default:
                    return state;
            }
        }

        const store = Redux.createStore(jawabanReducer);
        
        function render() {
            document.getElementById('ragu').innerHTML=raguan.length;
            document.getElementById('terisi').innerHTML=store.getState().terisi.toString();
            document.getElementById('kosong').innerHTML=store.getState().kosong.toString();
        }
        store.subscribe(render);

        function selanjutnya() {
            if (soal[0]=='TWK' && soal[1]==29) {
                soal[0]='TIU';
                soal[1]+=1;
            } else if (soal[0]=='TIU' && soal[1]==64) {
                soal[0]='TKP';
                soal[1]+=1;
            } else if (soal[0]=='TKP' && soal[1]==109) {
                soal[0]='TKP';
                soal[1]=109;
            } else {
                soal[1]+=1;
            }
            pindah();
        }

        function sebelumnya() {
            if (soal[0]=='TKP' && soal[1]==65) {
                soal[0]='TIU';
                soal[1]-=1;
            } else if (soal[0]=='TIU' && soal[1]==30) {
                soal[0]='TWK';
                soal[1]-=1;
            } else if (soal[0]=='TWK' && soal[1]==0) {
                soal[0]='TWK';
                soal[1]=0;
            } else {
                soal[1]-=1;
            }
            pindah();
        }

        function pindah() {
            if (soal[0]=='TWK' && soal[1]<=0) {
                soal[0]='TWK';
                soal[1]=0;
                document.getElementById('sebelumnya').style.visibility="hidden";
            } else {
                document.getElementById('sebelumnya').style.visibility="visible";
            }

            if (soal[0]=='TKP' && soal[1]>=109) {
                soal[0]='TKP';
                soal[1]=109;
                document.getElementById('selanjutnya').style.visibility="hidden";
            } else {
                document.getElementById('selanjutnya').style.visibility="visible";
            }

            if (soal[0]=='TWK') {
                var jawaban = store.getState().jawaban_twk[soal[1]];
            } else if (soal[0]=='TIU') {
                var jawaban = store.getState().jawaban_tiu[soal[1]-30];
            } else {
                var jawaban = store.getState().jawaban_tkp[soal[1]-65];
            }
            jawaban = jawaban!='' ? jawaban : 'F';

            document.getElementById('no-soal').innerHTML="Soal <span class='font-weight-bold text-uppercase'>"+soal[0]+"</span> "+(soal[1]+1);
            document.getElementById('soal').src="<?= base_url() ?>/img/tryout/<?php echo $event['title']." - ".$event['id']; ?>/soal/"+soal[0]+"/"+(soal[1]+1)+".jpg";
            document.getElementById('radioA').setAttribute('onclick', "javascript: jawab('A');");
            document.getElementById('radioB').setAttribute('onclick', "javascript: jawab('B');");
            document.getElementById('radioC').setAttribute('onclick', "javascript: jawab('C');");
            document.getElementById('radioD').setAttribute('onclick', "javascript: jawab('D');");
            document.getElementById('radioE').setAttribute('onclick', "javascript: jawab('E');");

            document.getElementById('labelA').setAttribute('class', 'btn bg-white border font-weight-bold w-100 border-20 mt-2 py-2');
            document.getElementById('labelB').setAttribute('class', 'btn bg-white border font-weight-bold w-100 border-20 mt-2 py-2');
            document.getElementById('labelC').setAttribute('class', 'btn bg-white border font-weight-bold w-100 border-20 mt-2 py-2');
            document.getElementById('labelD').setAttribute('class', 'btn bg-white border font-weight-bold w-100 border-20 mt-2 py-2');
            document.getElementById('labelE').setAttribute('class', 'btn bg-white border font-weight-bold w-100 border-20 mt-2 py-2');
            const jawabanA = document.getElementById('label'+jawaban);
            if (jawabanA!=undefined) jawabanA.setAttribute('class', 'btn bg-primary text-white border font-weight-bold w-100 border-20 mt-2 py-2 active');
        }

        function pindahSoal(jenis, nomor) {
            soal[0]=jenis;
            soal[1]=parseInt(nomor);
            pindah();
        }

        function jawab(jawaban) {
            const active = document.getElementsByClassName('active')[0];
            if (active!=undefined) active.setAttribute('class', 'btn bg-white border font-weight-bold w-100 border-20 mt-2 py-2');
            document.getElementById('label'+jawaban).setAttribute('class', 'btn bg-primary text-white border font-weight-bold w-100 border-20 mt-2 py-2 active');
            
            document.getElementById(soal[0]+(soal[1]+1).toString()).setAttribute('class', 'btn bg-primary text-white text-center font-weight-bold border border-10 p-2');
            
            let benar=false;
            for (let i=0; i<raguan.length; i++) {
                if (raguan[i]==(soal[0]+(soal[1]+1).toString())) {
                    raguan.splice(i, 1);
                    break;
                }
            }

            if (soal[0]=='TWK') {
                if (store.getState().jawaban_twk[soal[1]]=='') store.dispatch({type: 'terisi'});
                store.dispatch(twkAction(jawaban));
            } else if (soal[0]=='TIU') {
                if (store.getState().jawaban_tiu[soal[1]-30]=='') store.dispatch({type: 'terisi'});
                store.dispatch(tiuAction(jawaban));
            } else {
                if (store.getState().jawaban_tkp[soal[1]-65]=='') store.dispatch({type: 'terisi'});
                store.dispatch(tkpAction(jawaban));
            }
            
            <?php if (date('Y-m-d', strtotime($event['start_event']))==date('Y-m-d') && $peserta['selesai']!='1') { ?>
                $.ajax({
                    url: '<?= base_url() ?>/peserta/jawabSKD/<?= $event['id'] ?>/'+store.getState().jawaban_twk.toString()+'/'+store.getState().jawaban_tiu.toString()+'/'+store.getState().jawaban_tkp.toString(),
                    success: function(res) {
                        console.log(res);
                    }
                });
            <?php } ?>
        }

        function ragu() {
            if (!raguan.includes(soal[0]+(soal[1]+1).toString())) {
                raguan.push(soal[0]+(soal[1]+1).toString());
            }
            
            document.getElementById('ragu').innerHTML=raguan.length;
            document.getElementById(soal[0]+(soal[1]+1).toString()).setAttribute('class', 'btn bg-secondary text-black text-center font-weight-bold border border-10 p-2');
        }

        <?php if (date('Y-m-d', strtotime($event['start_event']))==date('Y-m-d') && $peserta['selesai']!='1') { ?>
            function selesai() {
                $('#modalSelesai').modal('show');
            }

            function selesaiBanget() {
                $.ajax({
                    url: '<?= base_url() ?>/peserta/jawabSKD/<?= $event['id'] ?>/'+store.getState().jawaban_twk.toString()+'/'+store.getState().jawaban_tiu.toString()+'/'+store.getState().jawaban_tkp.toString()+'/selesai',
                    success: function(res) {
                        window.location.replace("<?= base_url() ?>/peserta/skd_hasil/<?= $event['id'] ?>");
                    }
                })
            }
        <?php } else { ?>
            function selesai() {
                window.location.replace("<?= base_url() ?>/peserta/skd_hasil/<?= $event['id'] ?>");
            }
        <?php } ?>

        pindahSoal('TWK', 0);
    </script>
</div>
<?= $this->endSection(); ?>