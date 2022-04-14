<?= $this->extend('templates/index'); ?>
<?= $this->section('content'); ?>
<div class="content mb-0 py-3">
    <div class="row mx-auto mt-5" style="width: 80%;">
        <div class="row justify-content-between w-100 mx-0 px-5">
            <h5 class="w-50 my-auto pl-4">Kuis Harian</h5>
            <h5 class="text-left text-truncate w-50 my-auto"><?= $kuis['soal'] ?></h5>
        </div>
        <div class="row w-100 mx-0 mt-5">
            <div class="row mx-0 pr-3" style="width: 70%;">
                <div class="row border border-30 w-100 mx-0 px-4 pt-4 pb-3">
                    <div class="row align-content-center justify-content-between w-100 mx-0 mt-3">
                        <div class="row align-content-center w-50 mx-0">
                            <h5 id="soal-nomor" class="pl-5">Soal Nomor 1</h5>
                        </div>
                        <div class="row align-content-center justify-content-end w-50 mx-0">
                            <button id="sebelumnya" class="btn btn-link text-dark font-weight-bold" style="visibility: hidden;" onclick="sebelumnya();">
                                <h4 class="fas fa-chevron-circle-left mb-0"></h4>
                            </button>
                            <button id="selanjutnya" class="btn btn-link text-dark font-weight-bold" style="" onclick="selanjutnya();">
                                <h4 class="fas fa-chevron-circle-right mb-0"></h4>
                            </button>
                        </div>
                    </div>
                    <div class="row w-100 mx-0 mt-3" style="height: 230px; overflow-y: auto;">
                        <div class="row bg-white w-100 mx-0" style="min-height: 100%">
                            <img id="soal" src="<?= base_url() ?>/img/kuis/<?php echo $kuis['soal']." - ".$kuis['event_id']; ?>/soal/1.jpg" alt="" class="w-100" style="border-radius: 10px; object-fit: contain;">
                        </div>
                    </div>
                    <div class="row w-100 mx-0 mt-5 px-5">
                        <div class="row w-100 mt-5 mx-0">
                            <div class="pr-3 mt-5" style="width: 15%">
                                <label id="jawabanA" class="btn bg-white border font-weight-bold w-100 border-20 mt-2 mb-0 py-2" onclick="jawab('A');">
                                    <input type="radio" name="jawaban" value="A" autocomplete="off" style="display: none;">A
                                </label>
                            </div>
                            <div class="pr-3 mt-5" style="width: 15%">
                                <label id="jawabanB" class="btn bg-white border font-weight-bold w-100 border-20 mt-2 mb-0 py-2" onclick="jawab('B');">
                                    <input type="radio" name="jawaban" value="B" autocomplete="off" style="display: none;">B
                                </label>
                            </div>
                            <div class="pr-3 mt-5" style="width: 15%">
                                <label id="jawabanC" class="btn bg-white border font-weight-bold w-100 border-20 mt-2 mb-0 py-2" onclick="jawab('C');">
                                    <input type="radio" name="jawaban" value="C" autocomplete="off" style="display: none;">C
                                </label>
                            </div>
                            <div class="pr-3 mt-5" style="width: 15%">
                                <label id="jawabanD" class="btn bg-white border font-weight-bold w-100 border-20 mt-2 mb-0 py-2" onclick="jawab('D');">
                                    <input type="radio" name="jawaban" value="D" autocomplete="off" style="display: none;">D
                                </label>
                            </div>
                            <div class="pr-3 mt-5" style="width: 15%">
                                <label id="jawabanE" class="btn bg-white border font-weight-bold w-100 border-20 mt-2 mb-0 py-2" onclick="jawab('E');">
                                    <input type="radio" name="jawaban" value="E" autocomplete="off" style="display: none;">E
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-end w-100 mx-0 mt-2 pr-3">
                        <button id="btnPembahasan" class="btn btn-link font-weight-bold px-0" onclick="lihatPembahasan();">
                            Pembahasan
                        </button>
                    </div>
                </div>
            </div>
            <div class="mx-0 pl-3" style="width: 333px;">
                <div class="border border-30 w-100 mx-0 p-3">
                    <div class="row w-100 mx-0">
                        <div class="mr-2 mt-2" style="width: 50px;">
                            <button id="cek1"  onclick="pindahSoal(0)"
                                class="btn bg-white text-dark text-center font-weight-bold border w-100 p-0" style="border-radius: 15px; width: 50px; height: 50px;">01</button>
                        </div>
                        <div class="mr-2 mt-2" style="width: 50px;">
                            <button id="cek2" onclick="pindahSoal(1)"
                                class="btn bg-white text-dark text-center font-weight-bold border w-100 p-0" style="border-radius: 15px; width: 50px; height: 50px;">02</button>
                        </div>
                        <div class="mr-2 mt-2" style="width: 50px;">
                            <button id="cek3" onclick="pindahSoal(2)"
                                class="btn bg-white text-dark text-center font-weight-bold border w-100 p-0" style="border-radius: 15px; width: 50px; height: 50px;">03</button>
                        </div>
                        <div class="mr-2 mt-2" style="width: 50px;">
                            <button id="cek4" onclick="pindahSoal(3)"
                                class="btn bg-white text-dark text-center font-weight-bold border w-100 p-0" style="border-radius: 15px; width: 50px; height: 50px;">04</button>
                        </div>
                        <div class="mt-2" style="width: 50px;">
                            <button id="cek5" onclick="pindahSoal(4)"
                                class="btn bg-white text-dark text-center font-weight-bold border w-100 p-0" style="border-radius: 15px; width: 50px; height: 50px;">05</button>
                        </div>
                        <div class="mr-2 mt-2" style="width: 50px;">
                            <button id="cek6" onclick="pindahSoal(5)"
                                class="btn bg-white text-dark text-center font-weight-bold border w-100 p-0" style="border-radius: 15px; width: 50px; height: 50px;">06</button>
                        </div>
                        <div class="mr-2 mt-2" style="width: 50px;">
                            <button id="cek7" onclick="pindahSoal(6)"
                                class="btn bg-white text-dark text-center font-weight-bold border w-100 p-0" style="border-radius: 15px; width: 50px; height: 50px;">07</button>
                        </div>
                        <div class="mr-2 mt-2" style="width: 50px;">
                            <button id="cek8" onclick="pindahSoal(7)"
                                class="btn bg-white text-dark text-center font-weight-bold border w-100 p-0" style="border-radius: 15px; width: 50px; height: 50px;">08</button>
                        </div>
                        <div class="mr-2 mt-2" style="width: 50px;">
                            <button id="cek9" onclick="pindahSoal(8)"
                                class="btn bg-white text-dark text-center font-weight-bold border w-100 p-0" style="border-radius: 15px; width: 50px; height: 50px;">09</button>
                        </div>
                        <div class="mt-2" style="width: 50px;">
                            <button id="cek10" onclick="pindahSoal(9)"
                                class="btn bg-white text-dark text-center font-weight-bold border w-100 p-0" style="border-radius: 15px; width: 50px; height: 50px;">10</button>
                        </div>
                    </div>
                </div>
                <div class="row w-100 mx-0 mt-4 px-3">
                    <div class="row w-100 mx-0 border-bottom pb-2">
                        <div class="bg-primary h-100" style="width: 19.2px; border-radius: 5px;"></div>
                        <h6 class="mb-0 ml-2">Sudah terisi</h6>
                        <h6 id="terisi" class="mb-0 ml-auto">0</h6>
                    </div>
                    <div class="row w-100 mx-0 mt-3 border-bottom pb-2">
                        <div class="border h-100" style="width: 19.2px; border-radius: 5px;"></div>
                        <h6 class="mb-0 ml-2">Belum terisi</h6>
                        <h6 id="belumterisi" class="mb-0 ml-auto">10</h6>
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

    <div class="modal fade" id="modalPembahasan" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Pembahasan</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <img id="imgPembahasan" src="<?= base_url() ?>/img/kuis/<?php echo $kuis['soal']." - ".$kuis['event_id']; ?>/pembahasan/1.jpg" alt="" class="w-100">
                </div>
            </div>
        </div>
    </div>

    <script>
        var soal = 0;

        var jawabanBenar = <?= json_encode($kuis['jawaban']) ?>;
        jawabanBenar = jawabanBenar.split(',');

        var initialState = {
            jawaban: ['','','','','','','','','','']
        };

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
                        jawaban: state.jawaban.map(
                            (jawab, i) => i === parseInt(soal) ? action.payload : jawab
                        )
                    };
                default:
                    return state;
            }
        }

        const store = Redux.createStore(jawabanReducer);

        function selanjutnya() {
            soal+=1;
            pindah();
        }

        function sebelumnya() {
            soal-=1;
            pindah();
        }
        
        function pindahSoal(nomor) {
            soal = nomor;
            pindah();
        }

        function pindah() {
            document.getElementById('soal-nomor').innerHTML="Soal Nomor "+(soal+1);
            
            if (soal<=0) {
                soal=0;
                document.getElementById('sebelumnya').style.visibility="hidden";
            } else {
                document.getElementById('sebelumnya').style.visibility="visible";
            }

            if (soal<9) {
                document.getElementById('selanjutnya').style.visibility="visible";
            } else {
                soal=9;
                document.getElementById('selanjutnya').style.visibility="hidden";
            }

            var jawaban = store.getState().jawaban[soal];
            jawaban = jawaban.length!=0 ? jawaban : 'F';

            document.getElementById('soal').src="<?= base_url() ?>/img/kuis/<?php echo $kuis['soal']." - ".$kuis['event_id']; ?>/soal/"+(soal+1)+".jpg";
            document.getElementById('imgPembahasan').src="<?= base_url() ?>/img/kuis/<?php echo $kuis['soal']." - ".$kuis['event_id']; ?>/pembahasan/"+(soal+1)+".jpg";
            document.getElementById('jawabanA').setAttribute('onclick', "javascript: jawab('A');");
            document.getElementById('jawabanB').setAttribute('onclick', "javascript: jawab('B');");
            document.getElementById('jawabanC').setAttribute('onclick', "javascript: jawab('C');");
            document.getElementById('jawabanD').setAttribute('onclick', "javascript: jawab('D');");
            document.getElementById('jawabanE').setAttribute('onclick', "javascript: jawab('E');");

            if (jawaban!='F') {
                document.getElementById('jawabanA').setAttribute('class', 'btn bg-white border font-weight-bold w-100 border-10 mt-2 py-2 disabled');
                document.getElementById('jawabanA').onclick="";
                document.getElementById('jawabanB').setAttribute('class', 'btn bg-white border font-weight-bold w-100 border-10 mt-2 py-2 disabled');
                document.getElementById('jawabanB').onclick="";
                document.getElementById('jawabanC').setAttribute('class', 'btn bg-white border font-weight-bold w-100 border-10 mt-2 py-2 disabled');
                document.getElementById('jawabanC').onclick="";
                document.getElementById('jawabanD').setAttribute('class', 'btn bg-white border font-weight-bold w-100 border-10 mt-2 py-2 disabled');
                document.getElementById('jawabanD').onclick="";
                document.getElementById('jawabanE').setAttribute('class', 'btn bg-white border font-weight-bold w-100 border-10 mt-2 py-2 disabled');
                document.getElementById('jawabanE').onclick="";

                const jawabanA = document.getElementById('jawaban'+jawaban);
                if (jawabanA!=undefined) jawabanA.setAttribute('class', 'btn bg-warning border font-weight-bold w-100 border-10 mt-2 py-2 active disabled');

                const jawabanB = document.getElementById('jawaban'+jawabanBenar[soal]);
                if (jawabanA!=undefined) jawabanA.setAttribute('class', 'btn bg-success border font-weight-bold w-100 border-10 mt-2 py-2 disabled');
            } else {
                document.getElementById('jawabanA').setAttribute('class', 'btn bg-white border font-weight-bold w-100 border-10 mt-2 py-2');
                document.getElementById('jawabanB').setAttribute('class', 'btn bg-white border font-weight-bold w-100 border-10 mt-2 py-2');
                document.getElementById('jawabanC').setAttribute('class', 'btn bg-white border font-weight-bold w-100 border-10 mt-2 py-2');
                document.getElementById('jawabanD').setAttribute('class', 'btn bg-white border font-weight-bold w-100 border-10 mt-2 py-2');
                document.getElementById('jawabanE').setAttribute('class', 'btn bg-white border font-weight-bold w-100 border-10 mt-2 py-2');
            }

            if (jawaban=='A' || jawaban=='B' || jawaban=='C' || jawaban=='D' || jawaban=='E') {
                document.getElementById('btnPembahasan').disabled=false;
                document.getElementById('pembahasan').style.visibility="visible";
            } else {
                document.getElementById('btnPembahasan').disabled=true;
                document.getElementById('pembahasan').style.visibility="hidden";
            }
        }

        function jawab(jawaban) {
            const active = document.getElementsByClassName('active')[0];
            if (active!=undefined) active.setAttribute('class', 'btn bg-white border font-weight-bold w-100 border-10 mt-2 py-2');

            document.getElementById('jawabanA').setAttribute('class', 'btn bg-white border font-weight-bold w-100 border-10 mt-2 py-2 disabled');
            document.getElementById('jawabanA').onclick="";
            document.getElementById('jawabanB').setAttribute('class', 'btn bg-white border font-weight-bold w-100 border-10 mt-2 py-2 disabled');
            document.getElementById('jawabanB').onclick="";
            document.getElementById('jawabanC').setAttribute('class', 'btn bg-white border font-weight-bold w-100 border-10 mt-2 py-2 disabled');
            document.getElementById('jawabanC').onclick="";
            document.getElementById('jawabanD').setAttribute('class', 'btn bg-white border font-weight-bold w-100 border-10 mt-2 py-2 disabled');
            document.getElementById('jawabanD').onclick="";
            document.getElementById('jawabanE').setAttribute('class', 'btn bg-white border font-weight-bold w-100 border-10 mt-2 py-2 disabled');
            document.getElementById('jawabanE').onclick="";

            document.getElementById('jawaban'+jawaban).setAttribute('class', 'btn bg-warning border font-weight-bold w-100 border-10 mt-2 py-2 active disabled');
            
            document.getElementById('jawaban'+jawabanBenar[soal]).setAttribute('class', 'btn bg-success border font-weight-bold w-100 border-10 mt-2 py-2 disabled');
            
            document.getElementById('btnPembahasan').disabled=false;

            document.getElementById('cek'+(soal+1)).setAttribute('class', 'bg-primary text-white text-center font-weight-bold border-10 p-2');
            terisi = parseInt(document.getElementById('terisi').innerHTML)+1;
            document.getElementById('terisi').innerHTML=terisi;
            document.getElementById('belumterisi').innerHTML=10-terisi;

            store.dispatch(jawabanAction(jawaban));
        }

        function lihatPembahasan(){
            $('#modalPembahasan').modal('show');
        }

        <?php if ((date('Y-m-d', strtotime($kuis['start_event']))<=date('Y-m-d')) && (date('Y-m-d', strtotime($kuis['end_event']))>date('Y-m-d')) && (empty($hasil))) { ?>
            function selesai() {
                $.ajax({
                    url: '<?= base_url() ?>/kelasku/kuisJawab/<?= $kuis['id'] ?>/'+store.getState().jawaban.toString(),
                    success: function(result) {
                        console.log(result);
                        window.location.replace("<?= base_url() ?>/kelasku/kuis_hasil/<?= $kuis['id'] ?>");
                    }
                });
            }
        <?php } else { ?>
            function selesai() {
                window.location.replace("<?= base_url() ?>/kelasku/kuis_hasil/<?= $kuis['id'] ?>");
            }
        <?php } ?>
    </script>
</div>
<?= $this->endSection(); ?>