<?= $this->extend('templates/index'); ?>
<?= $this->section('content'); ?>
<div class="content mb-0 py-3">
    <div class="row mx-auto mt-5" style="width: 80%;">
        <div class="row justify-content-between w-100 mx-0 px-5">
            <h5 class="w-50 my-auto pl-4"><?= $event['title'] ?></h5>
            <div class="row justify-content-end w-50 mx-0">
                <h5 class="font-weight-bold my-auto">
                    <?php if (date('Y-m-d H:i:s')<=date('Y-m-d H:i:s', strtotime($event['end_event']))) { ?>
                        Waktu Tersisa&nbsp;
                        <span id="span" class="bg-white px-3 py-2" style="color:#12336D; border-radius: 10px;"></span>
                        <script>
                            var span = document.getElementById('span');
                            
                            var dt = new Date("<?= $now ?>").getTime();
                            
                            function time() {
                                var d = new Date().getTime();
                                var distance = dt - d;
                                
                                var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                                var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                                var seconds = Math.floor((distance % (1000 * 60)) / 1000);
                                
                                span.textContent = hours + ":" + minutes + ":" + seconds;
                                
                                if (distance < 0) {
                                    selesai();
                                }
                            }

                            setInterval(time, 1000);
                        </script>
                    <?php } ?>
                </h5>
            </div>
        </div>
        <div class="row w-100 mx-0 mt-5">
            <div class="row mx-0 pr-3" style="width: 70%">
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
                    <div class="row w-100 mx-0 mt-3" style="height: 230px; overflow-y: auto;">
                        <div class="row bg-white w-100 mx-0" style="min-height: 100%">
                            <img id="soal" src="<?= base_url() ?>/img/tryout/<?php echo $event['title']." - ".$event['id']; ?>/soal/1.jpg" alt="" class="w-100" style="border-radius: 10px; object-fit: contain;">
                        </div>
                    </div>
                    <div class="row w-100 mx-0 mt-4 px-5">
                        <div class="row w-100 mx-0">
                            <div class="pr-3" style="width:15%">
                                <label id="labelA" class="btn bg-white border font-weight-bold w-100 border-20 mt-2 mb-0 py-2" onclick="jawab('A');">
                                    <input id="radioA" type="radio" name="jawaban" value="A" autocomplete="off" style="display: none;">A
                                </label>
                            </div>
                            <div class="pr-3" style="width:15%">
                                <label id="labelB" class="btn bg-white border font-weight-bold w-100 border-20 mt-2 mb-0 py-2" onclick="jawab('B');">
                                    <input id="radioB" type="radio" name="jawaban" value="B" autocomplete="off" style="display: none;">B
                                </label>
                            </div>
                            <div class="pr-3" style="width:15%">
                                <label id="labelC" class="btn bg-white border font-weight-bold w-100 border-20 mt-2 mb-0 py-2" onclick="jawab('C');">
                                    <input id="radioC" type="radio" name="jawaban" value="C" autocomplete="off" style="display: none;">C
                                </label>
                            </div>
                            <div class="pr-3" style="width:15%">
                                <label id="labelD" class="btn bg-white border font-weight-bold w-100 border-20 mt-2 mb-0 py-2" onclick="jawab('D');">
                                    <input id="radioD" type="radio" name="jawaban" value="D" autocomplete="off" style="display: none;">D
                                </label>
                            </div>
                            <div class="pr-3" style="width:15%">
                                <label id="labelE" class="btn bg-white border font-weight-bold w-100 border-20 mt-2 mb-0 py-2" onclick="jawab('E');">
                                    <input id="radioE" type="radio" name="jawaban" value="E" autocomplete="off" style="display: none;">E
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mx-0 pl-3" style="width: 30%;">
                <div class="border border-30 w-100 mx-0 p-3">
                    <div class="row w-100 mx-0" style="max-height: 250px; overflow-y: auto;">
                        <?php for ($i=1; $i<41; $i++) { ?>
                            <div class="mr-2 mt-2" style="width: 50px;">
                                <button id="<?= $i ?>" class="btn bg-white text-dark text-center font-weight-bold border w-100 p-0" style="width: 50px; height: 50px; border-radius: 15px;"
                                    onclick="pindahSoal('<?= $i-1 ?>');"><?= $i ?></button>
                            </div>
                        <?php } ?>
                    </div>
                </div>
                <div class="row w-100 mx-0 mt-4 px-3">
                    <div class="row border-bottom w-100 mx-0 pb-2">
                        <div class="bg-primary h-100" style="width: 19.2px; border-radius: 5px;"></div>
                        <h6 class="mb-0 ml-2">Sudah terisi</h6>
                        <h6 id="terisi" class="mb-0 ml-auto">0</h6>
                    </div>
                    <div class="row border-bottom w-100 mx-0 mt-3 pb-2">
                        <div class="bg-secondary h-100" style="width: 19.2px; border-radius: 5px;"></div>
                        <h6 class="mb-0 ml-2">Ragu</h6>
                        <h6 id="ragu" class="mb-0 ml-auto">0</h6>
                    </div>
                    <div class="row border-bottom w-100 mx-0 mt-3 pb-2">
                        <div class="border h-100" style="width: 19.2px; border-radius: 5px;"></div>
                        <h6 class="mb-0 ml-2">Belum terisi</h6>
                        <h6 id="kosong" class="mb-0 ml-auto">40</h6>
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
        <?php if ($peserta['jawaban'] != NULL) { ?>
            // console.log('<?php echo json_encode(explode(',', $peserta['jawaban'])); ?>');
        <?php } ?>
        var soal = 0;
        var initialState = {
            kosong: 40,
            terisi: 0,
            jawaban: ['','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','']
        };
        let raguan = [];

        function jawabanAction(jawaban) {
            return {
                type: 'jawab',
                payload: jawaban
            };
        }

        function jawabanReducer(state = initialState, action) {
            switch (action.type) {
                case 'jawab':
                    return { 
                        ...state,
                        kosong: state.kosong-1,
                        terisi: state.terisi+1,
                        jawaban: state.jawaban.map(
                            (jawab, i) => i === parseInt(soal) ? action.payload : jawab
                        )
                    };
                case 'jawab/sama':
                    return {
                        ...state,
                        jawaban: state.jawaban.map(
                            (jawab, i) => i === parseInt(soal) ? action.payload : jawab
                        )
                    };
                case 'hapus':
                    return {
                        ...state,
                        kosong: state.kosong+1,
                        terisi: state.terisi-1,
                        jawaban: state.jawaban.map(
                            (jawab, i) => i === parseInt(soal) ? '' : jawab
                        )
                    }
                default:
                    return state;
            }
        }

        const store = Redux.createStore(jawabanReducer);
        
        function render() {
            document.getElementById('ragu').innerHTML=raguan.length;
            document.getElementById('kosong').innerHTML=store.getState().kosong.toString();
            document.getElementById('terisi').innerHTML=store.getState().terisi.toString();
        }
        store.subscribe(render);

        function selanjutnya() {
            soal+=1;
            pindah();
        }

        function sebelumnya() {
            soal-=1;
            pindah();
        }

        function pindah() {
            if (soal<=0) {
                soal=0;
                document.getElementById('sebelumnya').style.visibility="hidden";
            } else {
                document.getElementById('sebelumnya').style.visibility="visible";
            }

            if (soal>=39) {
                soal=39;
                document.getElementById('selanjutnya').style.visibility="hidden";
            } else {
                document.getElementById('selanjutnya').style.visibility="visible";
            }

            var jawaban = store.getState().jawaban[soal];
            jawaban = jawaban.length!=0 ? jawaban : 'F';

            document.getElementById('no-soal').innerHTML="Soal Nomor "+(soal+1);
            document.getElementById('soal').src="<?= base_url() ?>/img/tryout/<?php echo $event['title']." - ".$event['id']; ?>/soal/"+(soal+1)+".jpg";
            document.getElementById('radioA').setAttribute('onclick', "javascript: jawab('A');");
            document.getElementById('radioB').setAttribute('onclick', "javascript: jawab('B');");
            document.getElementById('radioC').setAttribute('onclick', "javascript: jawab('C');");
            document.getElementById('radioD').setAttribute('onclick', "javascript: jawab('D');");
            document.getElementById('radioE').setAttribute('onclick', "javascript: jawab('E');");

            document.getElementById('labelA').setAttribute('class', 'btn bg-white border font-weight-bold w-100 border-10 mt-2 py-2');
            document.getElementById('labelB').setAttribute('class', 'btn bg-white border font-weight-bold w-100 border-10 mt-2 py-2');
            document.getElementById('labelC').setAttribute('class', 'btn bg-white border font-weight-bold w-100 border-10 mt-2 py-2');
            document.getElementById('labelD').setAttribute('class', 'btn bg-white border font-weight-bold w-100 border-10 mt-2 py-2');
            document.getElementById('labelE').setAttribute('class', 'btn bg-white border font-weight-bold w-100 border-10 mt-2 py-2');
            const jawabanA = document.getElementById('label'+jawaban);
            if (jawabanA!=undefined) jawabanA.setAttribute('class', 'btn bg-primary text-white border font-weight-bold w-100 border-10 mt-2 py-2 active');
        }

        function pindahSoal(nomor) {
            soal=parseInt(nomor);
            pindah();
        }

        function jawab(jawaban) {
            const active = document.getElementsByClassName('active')[0];
            if (active!=undefined) active.setAttribute('class', 'btn bg-white border font-weight-bold w-100 border-10 mt-2 py-2');
            document.getElementById('label'+jawaban).setAttribute('class', 'btn bg-primary text-white border font-weight-bold w-100 border-10 mt-2 py-2 active');
            
            document.getElementById((soal+1).toString()).setAttribute('class', 'btn bg-primary text-white text-center font-weight-bold border border-10 w-100 p-2');
            
            let benar=false;
            for (let i=0; i<raguan.length; i++) {
                if (raguan[i]==(soal+1)) {
                    raguan.splice(i, 1);
                    break;
                }
            }

            if (store.getState().jawaban[soal]=='') {
                store.dispatch(jawabanAction(jawaban));  
            } else {
                store.dispatch({type: 'jawab/sama', payload: jawaban});
            }
            
            <?php if ((date('Y-m-d G:i:s', strtotime($event['start_event']))<=date('Y-m-d G:i:s')) && (date('Y-m-d G:i:s', strtotime($event['end_event']))>date('Y-m-d G:i:s'))) { ?>
                $.ajax({
                    url: '<?= base_url() ?>/peserta/jawabTryout/<?= $event['id'] ?>/'+store.getState().jawaban.toString(),
                    success: function(res) {
                        
                    }
                });
            <?php } ?>
            // console.log(store.getState().jawaban);
        }

        function ragu() {
            if (!raguan.includes(soal+1)) {
                raguan.push(soal+1);
            }

            document.getElementById('ragu').innerHTML=raguan.length;
            document.getElementById((soal+1).toString()).setAttribute('class', 'btn bg-secondary text-dark text-center font-weight-bold border border-10 w-100 p-2');
        }

        <?php if (date('Y-m-d', strtotime($event['start_event']))==date('Y-m-d')) { ?>
            function selesai() {
                $('#modalSelesai').modal('show');
            }
        <?php } else { ?>
            function selesai() {
                window.location.replace("<?= base_url() ?>/peserta/tryout_hasil/<?= $event['id'] ?>");
            }
        <?php } ?>
        
        function selesaiBanget() {
            $.ajax({
                url: '<?= base_url() ?>/peserta/jawabTryout/<?= $event['id'] ?>/'+store.getState().jawaban.toString()+'/selesai',
                success: function(res) {
                    window.location.replace("<?= base_url() ?>/peserta/tryout_hasil/<?= $event['id'] ?>");
                }
            })
        }
        
        // if (store.getState().jawaban[0]!='') {
        //     document.getElementById('label'+store.getState().jawaban[0]).setAttribute('class', 'btn btn-lignt bg-warning font-weight-bold w-75 mt-2 py-2 active');
        // }
    </script>
</div>
<?= $this->endSection(); ?>