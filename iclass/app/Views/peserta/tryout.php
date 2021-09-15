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
        <div class="col-4 px-0">
            <div class="row justify-content-center align-content-center h-100 mx-0">
                <h4 class="h5 bg-white font-weight-bold px-3 py-2 mb-0" style="color: #12336D; border-radius: 10px;"><?= $event['title'] ?></h4>
            </div>
        </div>
        <div class="col-4 px-0">
            <div class="row justify-content-end align-content-center h-100 mx-0">
                <h5 class="text-white font-weight-bold px-3 py-2 mb-0">
                    <?php if (date('Y-m-d H:i:s')<=date('Y-m-d H:i:s', strtotime($event['end_event']))) { ?>
                        Waktu Tersisa&nbsp;
                        <span id="span" class="bg-white px-3 py-2" style="color:#12336D; border-radius: 10px;"></span>
                        <script>
                            var span = document.getElementById('span');

                            function time() {
                                var d = new Date();
                                var s = 60 - parseInt('<?= substr($event['end_event'],17) ?>') - parseInt(d.getSeconds());
                                var m = 59 - parseInt('<?= substr($event['end_event'],14) ?>') - parseInt(d.getMinutes());
                                var h = parseInt('<?= substr($event['end_event'],11) ?>') - parseInt(d.getHours()) - 1;
                                span.textContent = 
                                    h + ":" + m + ":" + s;
                                if (h==0 && m==0 && s==0) {
                                    selesai();
                                }
                            }

                            setInterval(time, 1000);
                        </script>
                    <?php } ?>
                </h5>
            </div>
        </div>
    </div>

    <div class="row mt-2 mx-0">
        <div class="col-8 pl-0">
            <div class="row bg-primary border-20 shadow h-100 mx-0 px5 py5">
                <div class="col-9 pl-0" style="height: 500px; overflow-y: auto;">
                    <div class="row bg-white mx-0" style="border-radius: 10px;">
                        <img id="soal" src="<?= base_url() ?>/img/tryout/<?php echo $event['title']." - ".$event['id']; ?>/soal/1.jpg" alt="" class="w-100">
                    </div>
                </div>
                <div class="col-3 pr-0">
                    <div class="row justify-content-center align-items-center bg-white ml-0" style="height: 7%; border-radius: 10px 0 0 10px; margin-right: -35px;">
                        <h5 id="no-soal" class="text-center font-weight-bold mb-0" style="color: #12336D;">Soal Nomor 1</h5>
                    </div>
                    <div class="row mx-0" style="height: 8%;"></div>
                    <div class="row justify-content-center mx-0" style="height: 75%;">
                        <div class="col-12 text-center px-0">
                            <label id="labelA" class="btn btn-light font-weight-bold w-75 mt-2 py-2" style="color: #12336D; border-radius: 10px;">
                                <input id="radioA" type="radio" name="jawaban" value="A" autocomplete="off" style="display: none;" onclick="jawab('A');">A
                            </label>
                            <label id="labelB" class="btn btn-light font-weight-bold w-75 mt-2 py-2" style="color: #12336D; border-radius: 10px;">
                                <input id="radioB" type="radio" name="jawaban" value="B" autocomplete="off" style="display: none;" onclick="jawab('B');">B
                            </label>
                            <label id="labelC" class="btn btn-light font-weight-bold w-75 mt-2 py-2" style="color: #12336D; border-radius: 10px;">
                                <input id="radioC" type="radio" name="jawaban" value="C" autocomplete="off" style="display: none;" onclick="jawab('C');">C
                            </label>
                            <label id="labelD" class="btn btn-light font-weight-bold w-75 mt-2 py-2" style="color: #12336D; border-radius: 10px;">
                                <input id="radioD" type="radio" name="jawaban" value="D" autocomplete="off" style="display: none;" onclick="jawab('D');">D
                            </label>
                            <label id="labelE" class="btn btn-light font-weight-bold w-75 mt-2 py-2" style="color: #12336D; border-radius: 10px;">
                                <input id="radioE" type="radio" name="jawaban" value="E" autocomplete="off" style="display: none;" onclick="jawab('E');">E
                            </label>
                        </div>
                    </div>
                    <div class="row justify-content-center align-items-end mx-0" style="height: 10%;">
                        <button id="sebelumnya" class="btn btn-light font-weight-bold h-75 mx-auto px-3" style="color: #12336D; border-radius: 10px; visibility: hidden;" onclick="sebelumnya();"><span class="fas fa-chevron-left"></span></button>
                        <button id="raguBtn" class="btn btn-warning font-weight-bold h-75 mx-auto px-3" style="color: #12336D; border-radius: 10px;" onclick="ragu();">Ragu</button>
                        <button id="selanjutnya" class="btn btn-light font-weight-bold h-75 mx-auto px-3" style="color: #12336D; border-radius: 10px;" onclick="selanjutnya();"><span class="fas fa-chevron-right"></span></button>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-4 pr-0">
            <div class="row bg-white border-20 shadow mx-0 px-3 py-3" style="height: 88%;">
                <div class="col-12 px-0">
                    <div class="row mx-0">
                        <?php for ($i=1; $i<41; $i++) { ?>
                            <div class="p-1" style="width: 12.5%">
                                <button id="<?= $i ?>" class="btn btn-light border border-dark h5 text-center font-weight-bold rounded w-100 mb-0 px-1 py-1" style="color: #12336D;" onclick="pindahSoal('<?= $i-1 ?>');"><?= $i ?></button>
                            </div>
                        <?php } ?>
                    </div>
                    <div class="row mx-0 mt-2">
                        <div class="col-6 pl-0 pr-1">
                            <div class="row justify-content-between bg-warning shadow mx-0 px-3 py-2" style="border-radius: 10px;">
                                <h5 class="font-weight-bold mb-0 py-1" style="color: #12336D;">Ragu-ragu</h5>
                                <h5 id="ragu" class="bg-primary text-white mb-0 px-2 py-1" style="border-radius: 10px">0</h5>
                            </div>
                        </div>
                        <div class="col-6 pr-0 pl-1">
                            <div class="row justify-content-between shadow mx-0 px-3 py-2" style="border-radius: 10px;">
                                <h5 class="font-weight-bold mb-0 py-1" style="color: #12336D;">Kosong</h5>
                                <h5 id="kosong" class="bg-primary text-white mb-0 px-2 py-1" style="border-radius: 10px">40</h5>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-center bg-primary mx-0 mt-2 px-3 py-2" style="border-radius: 10px;">
                        <h5 class="text-white font-weight-bold mb-0 py-1">Sudah terisi &nbsp;&nbsp;</h5>
                        <h5 id="terisi" class="bg-white font-weight-bold mb-0 px-2 py-1" style="color: #12336D; border-radius: 10px">0</h5>
                    </div>
                </div>
            </div>
            <div class="row mx-0" style="height: 2%;"></div>
            <button class="btn border-20 shadow w-100 mx-0" style="background-color: #12336D; height: 10%;" onclick="selesai();">
                <h4 class="text-white font-weight-bold mb-0">Selesai</h4>
            </button>
        </div>
    </div>

    <script>
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

            document.getElementById('labelA').setAttribute('class', 'btn btn-light font-weight-bold w-75 mt-2 py-2');
            document.getElementById('labelB').setAttribute('class', 'btn btn-light font-weight-bold w-75 mt-2 py-2');
            document.getElementById('labelC').setAttribute('class', 'btn btn-light font-weight-bold w-75 mt-2 py-2');
            document.getElementById('labelD').setAttribute('class', 'btn btn-light font-weight-bold w-75 mt-2 py-2');
            document.getElementById('labelE').setAttribute('class', 'btn btn-light font-weight-bold w-75 mt-2 py-2');
            const jawabanA = document.getElementById('label'+jawaban);
            if (jawabanA!=undefined) jawabanA.setAttribute('class', 'btn btn-lignt bg-warning font-weight-bold w-75 mt-2 py-2 active');
        }

        function pindahSoal(nomor) {
            soal=parseInt(nomor);
            pindah();
        }

        function jawab(jawaban) {
            const active = document.getElementsByClassName('active')[0];
            if (active!=undefined) active.setAttribute('class', 'btn btn-light font-weight-bold w-75 mt-2 py-2');
            document.getElementById('label'+jawaban).setAttribute('class', 'btn btn-lignt bg-warning font-weight-bold w-75 mt-2 py-2 active');
            
            document.getElementById((soal+1).toString()).setAttribute('class', 'btn btn-primary border border-dark h5 text-center font-weight-bold rounded w-100 mb-0 py-1');
            
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
        }

        function ragu() {
            raguan.push(soal+1);

            if (store.getState().jawaban[soal]!='') {
                document.getElementById('label'+store.getState().jawaban[soal]).setAttribute('class', 'btn btn-light font-weight-bold w-75 mt-2 py-2');
                store.dispatch({type: 'hapus'});
            }

            document.getElementById('ragu').innerHTML=raguan.length;
            document.getElementById((soal+1).toString()).setAttribute('class', 'btn btn-warning border border-dark h5 text-center font-weight-bold rounded w-100 mb-0 py-1');
        }

        <?php if ((date('Y-m-d G:i:s', strtotime($event['start_event']))<=date('Y-m-d G:i:s')) && (date('Y-m-d G:i:s', strtotime($event['end_event']))>date('Y-m-d G:i:s'))) { ?>
            function selesai() {
                $.ajax({
                    url: '<?= base_url() ?>/peserta/jawabTryout/<?= $event['id'] ?>/'+store.getState().jawaban.toString()+'/selesai',
                    success: function(res) {
                        window.location.replace("<?= base_url() ?>/peserta/tryout_hasil/<?= $event['id'] ?>");
                    }
                })
            }
        <?php } else { ?>
            function selesai() {
                window.location.replace("<?= base_url() ?>/peserta/tryout_hasil/<?= $event['id'] ?>");
            }
        <?php } ?>
    </script>
</div>
<?= $this->endSection(); ?>