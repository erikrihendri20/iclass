<?= $this->extend('templates/index'); ?>
<?= $this->section('content'); ?>
<div class="content mb-0">
<div class="row mx-auto mt-4" style="width: 80%;">
        <div class="row justify-content-between w-100 mx-0">
            <h4 class="font-weight-bold w-50 my-auto">Latihan</h4>
            <h4 class="font-weight-bold text-left text-truncate w-50 my-auto"><?= $latihan.' - '.$paket ?></h4>
        </div>
        <div class="row w-100 mx-0 mt-4">
            <div class="row w-75 mx-0 pr-3">
                <div class="row border border-30 w-100 mx-0 px-4 py-5">
                    <div class="row align-content-center justify-content-between w-100 mx-0">
                        <div class="row align-content-center w-50 mx-0">
                            <h5 id="soal-nomor" class="font-weight-bold">Soal Nomor 1</h5>
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
                    <div class="row w-100 mx-0 mt-3" style="height: 500px; overflow-y: auto;">
                        <div class="row bg-white w-100 mx-0" style="min-height: 100%">
                            <img id="soal" src="<?= base_url() ?>/img/latihan/<?php echo $latihan."/".$paket; ?>/soal/1.jpg" alt="" class="w-100" style="border-radius: 10px; object-fit: contain;">
                        </div>
                    </div>
                    <div class="row w-100 mx-0">
                        <div class="row justify-content-center w-100 mt-4 mx-0">
                            <div class="pr-2" style="width: 20%">
                                <label id="jawabanA" class="btn bg-white border font-weight-bold w-100 border-10 mt-2 py-2" onclick="jawab('A');">
                                    <input type="radio" name="jawaban" value="A" autocomplete="off" style="display: none;">A
                                </label>
                            </div>
                            <div class="px-2" style="width: 20%">
                                <label id="jawabanB" class="btn bg-white border font-weight-bold w-100 border-10 mt-2 py-2" onclick="jawab('B');">
                                    <input type="radio" name="jawaban" value="B" autocomplete="off" style="display: none;">B
                                </label>
                            </div>
                            <div class="px-2" style="width: 20%">
                                <label id="jawabanC" class="btn bg-white border font-weight-bold w-100 border-10 mt-2 py-2" onclick="jawab('C');">
                                    <input type="radio" name="jawaban" value="C" autocomplete="off" style="display: none;">C
                                </label>
                            </div>
                            <div class="px-2" style="width: 20%">
                                <label id="jawabanD" class="btn bg-white border font-weight-bold w-100 border-10 mt-2 py-2" onclick="jawab('D');">
                                    <input type="radio" name="jawaban" value="D" autocomplete="off" style="display: none;">D
                                </label>
                            </div>
                            <div class="pl-2" style="width: 20%">
                                <label id="jawabanE" class="btn bg-white border font-weight-bold w-100 border-10 mt-2 py-2" onclick="jawab('E');">
                                    <input type="radio" name="jawaban" value="E" autocomplete="off" style="display: none;">E
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-end w-100 mx-0 mt-4">
                        <button id="btnPembahasan" class="btn btn-link font-weight-bold px-0" onclick="lihatPembahasan();">
                            Pembahasan
                        </button>
                    </div>
                </div>
            </div>
            <div class="w-25 mx-0 pl-3">
                <div class="border border-30 w-100 mx-0 p-3">
                    <div class="row w-100 mx-0">
                        <div class="pr-1" style="width: 20%;">
                            <h4 id="cek1" class="bg-white text-dark text-center font-weight-bold border border-10 p-2">01</h4>
                        </div>
                        <div class="pr-1" style="width: 20%;">
                            <h4 id="cek2" class="bg-white text-dark text-center font-weight-bold border border-10 p-2">02</h4>
                        </div>
                        <div class="pr-1" style="width: 20%;">
                            <h4 id="cek3" class="bg-white text-dark text-center font-weight-bold border border-10 p-2">03</h4>
                        </div>
                        <div class="pr-1" style="width: 20%;">
                            <h4 id="cek4" class="bg-white text-dark text-center font-weight-bold border border-10 p-2">04</h4>
                        </div>
                        <div class="pr-1" style="width: 20%;">
                            <h4 id="cek5" class="bg-white text-dark text-center font-weight-bold border border-10 p-2">05</h4>
                        </div>
                    </div>
                </div>
                <div class="row w-100 mx-0 mt-4 px-3">
                    <div class="row w-100 mx-0">
                        <div class="bg-primary h-100" style="width: 25px; border-radius: 5px;"></div>
                        <h5 class="mb-0 ml-2">Sudah terisi</h5>
                        <h5 id="terisi" class="mb-0 ml-auto">0</h5>
                    </div>
                    <div class="row w-100 mx-0 mt-2">
                        <div class="border h-100" style="width: 25px; border-radius: 5px;"></div>
                        <h5 class="mb-0 ml-2">Belum terisi</h5>
                        <h5 id="belumterisi" class="mb-0 ml-auto">5</h5>
                    </div>
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
                    <img id="imgPembahasan" src="<?= base_url() ?>/img/latihan/<?php echo $latihan."/".$paket; ?>/pembahasan/1.jpg" alt="" class="w-100">
                </div>
            </div>
        </div>
    </div>

    <script>
        var soal = 0;

        var initialState = {
            jawaban: ['','','','','']
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
                            (jawab, i) => i === parseInt(action.payload[0]) ? action.payload[1] : jawab
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

        function pindah() {
            document.getElementById('soal-nomor').innerHTML="Soal Nomor "+(soal+1);
            
            if (soal<=0) {
                soal=0;
                document.getElementById('sebelumnya').style.visibility="hidden";
            } else {
                document.getElementById('sebelumnya').style.visibility="visible";
            }

            if (soal<4) {
                const selanjutnya = document.getElementById('selanjutnya');
                selanjutnya.style.visibility="visible";
                selanjutnya.innerHTML='<h4 class="fas fa-chevron-circle-right mb-0"></h4>';
                selanjutnya.setAttribute('onclick', "javascript: selanjutnya();");
            } else {
                soal=4;
                const selanjutnya = document.getElementById('selanjutnya');
                selanjutnya.innerHTML="Selesai";
                selanjutnya.setAttribute('onclick', "javascript: selesai();");
            }

            var jawaban = store.getState().jawaban[soal];
            jawaban = jawaban.length!=0 ? jawaban : 'F';

            document.getElementById('soal').src="<?= base_url() ?>/img/latihan/<?php echo $latihan."/".$paket; ?>/soal/"+(soal+1)+".jpg";
            document.getElementById('imgPembahasan').src="<?= base_url() ?>/img/latihan/<?php echo $latihan."/".$paket; ?>/pembahasan/"+(soal+1)+".jpg";

            if (jawaban!='F') {
                document.getElementById('jawabanA').setAttribute('class', 'btn bg-white border font-weight-bold w-100 border-10 mt-2 py-2');
                document.getElementById('jawabanB').setAttribute('class', 'btn bg-white border font-weight-bold w-100 border-10 mt-2 py-2');
                document.getElementById('jawabanC').setAttribute('class', 'btn bg-white border font-weight-bold w-100 border-10 mt-2 py-2');
                document.getElementById('jawabanD').setAttribute('class', 'btn bg-white border font-weight-bold w-100 border-10 mt-2 py-2');
                document.getElementById('jawabanE').setAttribute('class', 'btn bg-white border font-weight-bold w-100 border-10 mt-2 py-2');

                const jawabanA = document.getElementById('jawaban'+jawaban);
                if (jawabanA!=undefined) jawabanA.setAttribute('class', 'btn bg-primary text-white border font-weight-bold w-100 border-10 mt-2 py-2 active');
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

            document.getElementById('jawabanA').setAttribute('class', 'btn bg-white border font-weight-bold w-100 border-10 mt-2 py-2');
            document.getElementById('jawabanB').setAttribute('class', 'btn bg-white border font-weight-bold w-100 border-10 mt-2 py-2');
            document.getElementById('jawabanC').setAttribute('class', 'btn bg-white border font-weight-bold w-100 border-10 mt-2 py-2');
            document.getElementById('jawabanD').setAttribute('class', 'btn bg-white border font-weight-bold w-100 border-10 mt-2 py-2');
            document.getElementById('jawabanE').setAttribute('class', 'btn bg-white border font-weight-bold w-100 border-10 mt-2 py-2');

            document.getElementById('jawaban'+jawaban).setAttribute('class', 'btn bg-primary text-white border font-weight-bold w-100 border-10 mt-2 py-2 active');
            
            document.getElementById('btnPembahasan').disabled=false;

            document.getElementById('cek'+(soal+1)).setAttribute('class', 'bg-primary text-white text-center font-weight-bold border-10 p-2');
            terisi = parseInt(document.getElementById('terisi').innerHTML)+1;
            document.getElementById('terisi').innerHTML=terisi;
            document.getElementById('belumterisi').innerHTML=5-terisi;

            store.dispatch(jawabanAction(jawaban));
        }

        function lihatPembahasan(){
            $('#modalPembahasan').modal('show');
        }

        function selesai() {
            window.location.replace("<?= base_url() ?>/materi");
        }
    </script>
</div>
<?= $this->endSection(); ?>