<?= $this->extend('templates/index'); ?>
<?= $this->section('content'); ?>
<div class="content mnya-5 mb-0">
    <div class="row bg-primary border-20 mx-0 mt5 px5 py-3">
        <div class="col-4 px-0">
            <div class="row mx-0">
                <div class="col-2 px-0">
                    <div class="row bg-white border rounded-circle position-relative w-75 mx-auto">
                        <img src="<?= base_url() ?>/img/profil.png" alt="" class="w-100 rounded-circle position-relative p-1">
                        <img src="<?= base_url() ?>/img/profil/<?= session('username') ?>.jpg" alt="" class="w-100 h-100 rounded-circle position-absolute p-1" style="object-fit: cover;" onerror='this.style.display = "none"'>
                    </div>
                </div>
                <div class="col-10 d-flex align-items-center px-0">
                    <h2 class="text-white font-weight-bold mb-0" style="line-height: 100%;">Hai <?php echo explode(' ', session('nama'))[0]; ?>...</h2>
                </div>
            </div>
        </div>
        <div class="col-8 px-0">
            <div class="row justify-content-end align-content-center h-100 mx-0">
                <h4 class="h5 bg-white font-weight-bold px-3 py-2 mb-0" style="color: #12336D; border-radius: 10px;"><?= $latihan ?></h4>
            </div>
        </div>
    </div>

    <div class="row mt-2 mx-0">
        <div class="col-8 pl-0">
            <div class="row bg-primary border-20 shadow h-100 mx-0 px5 py5">
                <div class="col-9 pl-0" style="height: 500px; overflow-y: auto;">
                    <div class="row bg-white mx-0" style="border-radius: 10px;">
                        <img id="soal" src="<?= base_url() ?>/img/latihan/<?php echo $latihan."/".$paket; ?>/soal/1.jpg" alt="" class="w-100">
                    </div>
                </div>
                <div class="col-3 pr-0">
                    <div class="row justify-content-center align-items-center bg-white ml-0" style="height: 7%; border-radius: 10px 0 0 10px; margin-right: -35px;">
                        <h5 id="nomorSoal" class="text-center font-weight-bold mb-0" style="color: #12336D;">Soal Nomor 1</h5>
                    </div>
                    <div class="row justify-content-center mt5 mx-0" style="height: 78%;">
                        <div class="col-12 text-center px-0">
                            <label id="jawabanA" class="btn btn-light font-weight-bold w-75 mt-2 py-2" style="color: #12336D; border-radius: 10px;" onclick="jawab('0A');">
                                <input type="radio" name="jawaban" value="A" autocomplete="off" style="display: none;">A
                            </label>
                            <label id="jawabanB" class="btn btn-light font-weight-bold w-75 mt-2 py-2" style="color: #12336D; border-radius: 10px;" onclick="jawab('0B');">
                                <input type="radio" name="jawaban" value="B" autocomplete="off" style="display: none;">B
                            </label>
                            <label id="jawabanC" class="btn btn-light font-weight-bold w-75 mt-2 py-2" style="color: #12336D; border-radius: 10px;" onclick="jawab('0C');">
                                <input type="radio" name="jawaban" value="C" autocomplete="off" style="display: none;">C
                            </label>
                            <label id="jawabanD" class="btn btn-light font-weight-bold w-75 mt-2 py-2" style="color: #12336D; border-radius: 10px;" onclick="jawab('0D');">
                                <input type="radio" name="jawaban" value="D" autocomplete="off" style="display: none;">D
                            </label>
                            <label id="jawabanE" class="btn btn-light font-weight-bold w-75 mt-2 py-2" style="color: #12336D; border-radius: 10px;" onclick="jawab('0E');">
                                <input type="radio" name="jawaban" value="E" autocomplete="off" style="display: none;">E
                            </label>
                        </div>
                    </div>
                    <div class="row justify-content-center align-items-between mx-0" style="height: 10%;">
                        <button id="sebelumnya" class="btn btn-warning font-weight-bold border-20 h-75 mx-auto px-3" style="color: #12336D; visibility: hidden;" onclick="sebelumnya();"><span class="fas fa-arrow-left"></span></button>
                        <button id="selanjutnya" class="btn btn-warning font-weight-bold border-20 h-75 mx-auto px-3" style="color: #12336D;" onclick="selanjutnya();"><span class="fas fa-arrow-right"></span></button>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-4 pr-0">
            <div class="bg-white border-20 shadow w-100 h-100 mx-0 px5 py5">
                <h5 class="bg-primary text-white text-center font-weight-bold w-75 mx-auto px-3 py-2" style="border-radius: 10px;">Pembahasan</h5>
                <button id="btnPembahasan" class="btn btn-light border-0 w-100 h-100 p-0" style="max-height: 450px; overflow-y: auto;" onclick="lihatPembahasan();" disabled>
                    <img src="<?= base_url() ?>/img/latihan/<?php echo $latihan."/".$paket; ?>/pembahasan/1.jpg" alt="" id="pembahasan" class="w-100" style="visibility: hidden;">
                </button>
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
            if (soal<=0) {
                soal=0;
                document.getElementById('sebelumnya').style.visibility="hidden";
            } else {
                document.getElementById('sebelumnya').style.visibility="visible";
            }

            if (soal<4) {
                const selanjutnya = document.getElementById('selanjutnya');
                selanjutnya.style.visibility="visible";
            } else {
                soal=4;
                const selanjutnya = document.getElementById('selanjutnya');
                selanjutnya.style.visibility="hidden";
            }

            var jawaban = store.getState().jawaban[soal];
            jawaban = jawaban.length!=0 ? jawaban : 'F';

            document.getElementById('nomorSoal').innerHTML="Soal Nomor "+(soal+1);
            document.getElementById('soal').src="<?= base_url() ?>/img/latihan/<?php echo $latihan."/".$paket; ?>/soal/"+(soal+1)+".jpg";
            document.getElementById('pembahasan').src="<?= base_url() ?>/img/latihan/<?php echo $latihan."/".$paket; ?>/pembahasan/"+(soal+1)+".jpg";
            document.getElementById('imgPembahasan').src="<?= base_url() ?>/img/latihan/<?php echo $latihan."/".$paket; ?>/pembahasan/"+(soal+1)+".jpg";
            document.getElementById('jawabanA').setAttribute('onclick', "javascript: jawab('"+soal+"A');");
            document.getElementById('jawabanB').setAttribute('onclick', "javascript: jawab('"+soal+"B');");
            document.getElementById('jawabanC').setAttribute('onclick', "javascript: jawab('"+soal+"C');");
            document.getElementById('jawabanD').setAttribute('onclick', "javascript: jawab('"+soal+"D');");
            document.getElementById('jawabanE').setAttribute('onclick', "javascript: jawab('"+soal+"E');");

            document.getElementById('jawabanA').setAttribute('class', 'btn btn-light font-weight-bold w-75 mt-2');
            document.getElementById('jawabanB').setAttribute('class', 'btn btn-light font-weight-bold w-75 mt-2');
            document.getElementById('jawabanC').setAttribute('class', 'btn btn-light font-weight-bold w-75 mt-2');
            document.getElementById('jawabanD').setAttribute('class', 'btn btn-light font-weight-bold w-75 mt-2');
            document.getElementById('jawabanE').setAttribute('class', 'btn btn-light font-weight-bold w-75 mt-2');
            const jawabanA = document.getElementById('jawaban'+jawaban);
            if (jawabanA!=undefined) jawabanA.setAttribute('class', 'btn btn-lignt bg-warning font-weight-bold w-75 mt-2 active');
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
            if (active!=undefined) active.setAttribute('class', 'btn btn-light font-weight-bold w-75 mt-2');
            document.getElementById('jawaban'+jawaban[1]).setAttribute('class', 'btn btn-lignt bg-warning font-weight-bold w-75 mt-2 active');
            document.getElementById('pembahasan').style.visibility="visible";
            document.getElementById('btnPembahasan').disabled=false;
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