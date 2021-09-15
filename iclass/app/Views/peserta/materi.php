<?= $this->extend('templates/index'); ?>
<?= $this->section('content'); ?>
<div class="content mnya-5 mb-0">
    <div class="row mx-0 px5" style="background-image: linear-gradient(144deg, #0091e6, #005ccb); border-radius: 0 0 20px 20px; margin-top: -25px; padding-top: 75px; padding-bottom: 35px;">
        <div class="col-12 mt5 px-0">
            <div class="row mx-0">
                <div class="col-3 pl-0">
                    <div class="row justify-content-center align-content-center h-100 mx-0">
                        <h5 class="h4 text-white text-center font-weight-bold w-100">Video Materi</h5>
                        <select name="pilih-kelas" id="pilih-kelas" class="form-control form-control-sm font-weight-bold w-75" value="">
                            <?php if (session('jurusan')=='intensif') : ?><option class="font-weight-bold" selected disabled hidden>Pilih Materi</option><?php endif; ?>
                            <option class="font-weight-bold" value="10" 
                                <?php if (session('jurusan')=='10') { echo "selected";
                                    } elseif ((session('jurusan')!='10') && (session('jurusan')!='intensif')) { echo "hidden"; 
                                    } ?>>10
                            </option>
                            <option class="font-weight-bold" value="11" 
                                <?php if (session('jurusan')=='11') { echo "selected";
                                    } elseif ((session('jurusan')!='11') && (session('jurusan')!='intensif')) { echo "hidden"; 
                                    } ?>>11
                            </option>
                            <option class="font-weight-bold" value="12" 
                                <?php if (session('jurusan')=='12') { echo "selected";
                                    } elseif ((session('jurusan')!='12') && (session('jurusan')!='intensif')) { echo "hidden"; 
                                    } ?>>12
                            </option>
                        </select>
                    </div>
                </div>
                <div class="col-9 border-20 shadow pr-0" style="background-image: linear-gradient(144deg, #0091e6, #005ccb);">
                    <div class="row justify-content-center mx-0 px5">
                        <div class="col-4 pl-0" style="margin-top: -50px; padding-bottom: 50px;">
                            <a href="#" class="btn btn-warning w-100 h-100 mx-auto p-3" style="border-radius: 15px;">
                                <img src="<?= base_url() ?>/img/Video Materi/<?= $materiPilihan['materi'] ?>/1.jpg" alt="" class="w-100" style="border-radius: 15px;" onerror="this.style.visibility='hidden'">
                            </a>
                        </div>
                        <div class="col-8 pr-0">
                            <div id="carouselExampleIndicators" class="carousel slide h-100" data-ride="carousel" data-interval="false">
                                <ol id="indicator-materi" class="carousel-indicators">
                                    <?php for ($i=0; $i<ceil(sizeof($materis)/3); $i++) { ?>
                                        <li data-target="#carouselExampleIndicators" data-slide-to="<?= $i ?>"<?php echo ($i==0) ? ' class="active"' : '' ?>></li>
                                    <?php } ?>
                                </ol>
                                <div id="inner-materi" class="carousel-inner h-100 pb-4">
                                    <?php if (sizeof($materis) != 21) {
                                        $i=0; while ($i<sizeof($materis)) { ?>
                                            <div class="carousel-item h-100<?php echo ($i==0) ? ' active' : ''; ?>" style="min-height: 190px;">
                                                <div class="row justify-content-start h-100 mx-0">
                                                    <?php if (!empty($materis[$i])) { ?>
                                                        <div class="col-4 d-flex py-3">
                                                            <a href="<?= base_url() ?>/materi/materi/<?= $materis[$i]['id'] ?>" class="btn btn-light w-100 h-75 mx-0 p-0" style="min-height: 120px; border-radius: 10px;">
                                                                <img src="<?= base_url() ?>/img/Video Materi/<?= $materis[$i]['materi'] ?>/1.jpg" alt="" class="w-100 h-100" style="border-radius: 10px;" onerror="this.style.visibility='hidden'">
                                                                <h5 class="text-white d-block text-truncate mt-2"><?= $materis[$i]['materi'] ?></h5>
                                                            </a>
                                                        </div>
                                                    <?php $i++; } ?>
                                                    <?php if (!empty($materis[$i])) { ?>
                                                        <div class="col-4 d-flex py-3">
                                                            <a href="<?= base_url() ?>/materi/materi/<?= $materis[$i]['id'] ?>" class="btn btn-light w-100 h-75 mx-0 p-0" style="min-height: 120px; border-radius: 10px;">
                                                                <img src="<?= base_url() ?>/img/Video Materi/<?= $materis[$i]['materi'] ?>/1.jpg" alt="" class="w-100 h-100" style="border-radius: 10px;" onerror="this.style.visibility='hidden'">
                                                                <h5 class="text-white d-block text-truncate mt-2"><?= $materis[$i]['materi'] ?></h5>
                                                            </a>
                                                        </div>
                                                    <?php $i++; } ?>
                                                    <?php if (!empty($materis[$i])) { ?>
                                                        <div class="col-4 d-flex py-3">
                                                            <a href="<?= base_url() ?>/materi/materi/<?= $materis[$i]['id'] ?>" class="btn btn-light w-100 h-75 mx-0 p-0" style="min-height: 120px; border-radius: 10px;">
                                                                <img src="<?= base_url() ?>/img/Video Materi/<?= $materis[$i]['materi'] ?>/1.jpg" alt="" class="w-100 h-100" style="border-radius: 10px;" onerror="this.style.visibility='hidden'">
                                                                <h5 class="text-white d-block text-truncate mt-2"><?= $materis[$i]['materi'] ?></h5>
                                                            </a>
                                                        </div>
                                                    <?php $i++; } ?>
                                                </div>
                                            </div>
                                    <?php }
                                    } ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row mx-0 mt5">
        <div class="col-9 pl-0 pr-4">
            <div class="row border-20 shadow mx-0 px5 py5">
                <div class="col-12 border-20 px-0">
                    <div class="row embed-responsive embed-responsive-16by9 bg-light ml-0">
                        <video id="vid" class="embed-responsive-item" controls controlslist="nodownload"
                            poster="<?= base_url() ?>/img/Video Materi/<?php echo $materiPilihan['materi']."/".$part; ?>.jpg">
                            <source id="vidSrc" src="<?php echo base_url()."/vid/Materi Baru/".$materiPilihan['materi']."/".$part.".mp4"; ?>" type="video/mp4">
                        </video>
                    </div>
                </div>
                <div class="col-6 mt5 px-0">
                    <h5 class="h4 font-weight-bold w-100" style="color: #12336D;"><?= $materiPilihan['materi'] ?></h5>
                    <h6 id="semi-title" class="w-100" style="color: #12336D;"> - <?= $submateris[$part-1]['submateri'] ?></h6>
                </div>
                <div class="col-6 mt5 px-0">
                    <div class="row justify-content-end align-content-center h-100 mx-0">
                        <h6 id="dasarBawah" class="text-white font-weight-bold rounded px-3 py-1" style="background-color: #12336D;">Dasar</h6>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-3 pr-0">
            <div class="row mx-0" style="height: 10%;">
                <div class="col-12 bg-primary border-20 shadow">
                    <div class="row justify-content-center align-content center h-100 mx-0 py-3">
                        <div class="btn-group btn-group-toggle" data-toggle="buttons">
                            <button id="videoMateri" class="btn btn-light h5 font-weight-bold p-1" style="border-radius: 10px 0 0 10px;">
                                <input type="radio" name="options" id="option1" autocomplete="off" checked>Video Materi
                            </button>
                            <button id="rekamanKelas" class="btn btn-light h6 font-weight-bold p-1" style="border-radius: 0 10px 10px 0;">
                                <input type="radio" name="options" id="option2" autocomplete="off">Rekaman Kelas
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mx-0" style="height: 5%;"></div>
            <div id="bagianKanan" class="row mx-0" style="height: 85%;">
                <div id="video-materi" class="col-12 border-20 shadow py-4">
                    <div class="row mx-0" style="max-height: 500px; overflow-y: auto;">
                        <div class="col-4 px-0">
                            <h6 class="text-center font-weight-bold rounded shadow px-3 py-1" style="color: #12336D;">Dasar</h6>
                        </div>
                        <?php if ($materiPilihan['dasar']!='' && $materiPilihan['dasar']!='0') {
                            for ($i=0; $i<(int)$materiPilihan['dasar']; $i++) { ?>
                                <button id="<?= $i ?>" class="btn btn-warning w-100 mt-2 py-0" style="border-radius: 10px;" onclick="tukarBagianMateri('<?= $materiPilihan['materi'] ?>', 'dasar', '<?= $i+1 ?>');">
                                    <div class="row mx-0 py-1">
                                        <div class="col-2 px-0">
                                            <img src="<?= base_url() ?>/img/Aset/Asset 471@300x.png" alt="" class="w-100">
                                        </div>
                                        <div class="col-10 pl-2 pr-0">
                                            <div class="row align-content-center h-100 mx-0">
                                                <h6 class="text-left truncate mb-0" style="color: #12336D;"><?= $submateris[$i]['submateri'] ?></h6>
                                            </div>
                                        </div>
                                    </div>
                                </button>
                        <?php }
                        } else { $i=0; ?>
                            <div class="col-12 px-3 py-1">
                                <h5 class="font-weight-bold mb-0" style="color: #12336D;">_</h5>
                            </div>
                        <?php } ?>
                        <div class="col-4 px-0">
                            <h6 class="text-center font-weight-bold rounded shadow mt-3 px-3 py-1" style="color: #12336D;">Sedang</h6>
                        </div>
                        <?php if ($materiPilihan['sedang']!='' && $materiPilihan['sedang']!='0') { $j=$i;
                            for ($i=0; $i<(int)$materiPilihan['sedang']; $i++) { ?>
                                <button id="<?= $j ?>" class="btn btn-primary w-100 mt-2 py-0" style="border-radius: 10px;" onclick="tukarBagianMateri('<?= $materiPilihan['materi'] ?>', 'sedang', '<?= $j+1 ?>');" <?php echo (!$dasar) ? 'disabled' : ''; ?>>
                                    <div class="row mx-0 py-1">
                                        <div class="col-2 px-0">
                                            <img src="<?= base_url() ?>/img/Aset/Asset 471@300x.png" alt="" class="w-100">
                                        </div>
                                        <div class="col-10 pl-2 pr-0">
                                            <div class="row align-content-center h-100 mx-0">
                                                <h6 class="text-white text-left truncate mb-0"><?php echo $submateris[$j]['submateri']; $j++; ?></h6>
                                            </div>
                                        </div>
                                    </div>
                                </button>
                        <?php }
                        } else { $j=$i; ?>
                            <div class="col-12 px-3 py-1">
                                <h5 class="font-weight-bold mb-0" style="color: #12336D;">_</h5>
                            </div>
                        <?php } ?>
                        <div class="col-4 px-0">
                            <h6 class="text-center font-weight-bold rounded shadow mt-3 px-3 py-1" style="color: #12336D;">Rumit</h6>
                        </div>
                        <?php if ($materiPilihan['sedang']!='' && $materiPilihan['sedang']!='0') { $k=$i;
                            for ($i=0; $i<(int)$materiPilihan['rumit']; $i++) { ?>
                                <button id="<?= $k ?>" class="btn w-100 mt-2 py-0" style="background-color: #12336D; border-radius: 10px;" onclick="tukarBagianMateri('<?= $materiPilihan['materi'] ?>', 'rumit', '<?= $k+1 ?>');" <?php echo (!$sedang) ? 'disabled' : ''; ?>>
                                    <div class="row mx-0 py-1">
                                        <div class="col-2 px-0">
                                            <img src="<?= base_url() ?>/img/Aset/Asset 471@300x.png" alt="" class="w-100">
                                        </div>
                                        <div class="col-10 pl-2 pr-0">
                                            <div class="row align-content-center h-100 mx-0">
                                                <h6 class="text-white text-left truncate mb-0"><?php echo $submateris[$k]['submateri']; $k++; ?></h6>
                                            </div>
                                        </div>
                                    </div>
                                </button>
                        <?php }
                        } else { $i=0;?>
                            <div class="col-12 px-3 py-1">
                                <h5 class="font-weight-bold mb-0" style="color: #12336D;">_</h5>
                            </div>
                        <?php } ?>
                    </div>
                </div>
                <div id="rekaman-kelas" class="col-12 border-20 shadow py-4" style="display: none;">
                <?php if (!empty($rekaman)) { ?>
                    <div class="row mx-0">
                        <div class="col-4 px-0">
                            <h6 class="text-center font-weight-bold rounded shadow px-3 py-1" style="color: #12336D;">Bagian</h6>
                        </div>
                        <?php foreach($rekaman['bagian'] as $bagian) { ?>
                        <button class="btn btn-primary w-100 mt-2 py-0" style="border-radius: 10px;" onclick="tukarBagianRekaman('<?= $bagian ?>');">
                            <div class="row mx-0 py-1">
                                <div class="col-2 px-0">
                                    <img src="<?= base_url() ?>/img/Aset/Asset 471@300x.png" alt="" class="w-100">
                                </div>
                                <div class="col-10 pl-2 pr-0">
                                    <div class="row align-content-center h-100 mx-0">
                                        <h6 class="text-white text-left truncate mb-0">Bagian <?= $bagian ?></h6>
                                    </div>
                                </div>
                            </div>
                        </button>
                        <?php } ?>
                    </div>
                <?php } ?>
                </div>
            </div>
        </div>
    </div>

    <?php if ((int)$materiPilihan['dasar']+(int)$materiPilihan['sedang']+(int)$materiPilihan['rumit']==0) { ?>
        <div class="row border-20 shadow mnya-5 mt5 py-4" style="padding-left: 35px;">
            <div class="px-0" style="width: 94%;">
                <div class="row mx-0">
                    <?php $jmlh = (int)$materiPilihan['dasar']+(int)$materiPilihan['sedang']+(int)$materiPilihan['rumit']; $j=0; $k=0;
                        for ($i=1; $i<=$jmlh; $i++) {
                            if ($i<=(int)$materiPilihan['dasar']) { ?>
                                <div class="col-6 mt-2 pl-0">
                                    <a id="latsol-dasar-<?= $i ?>" <?php echo (strpos($tingkatan['dasar'], (string)$i) !== false) ? 'href="'.base_url().'/peserta/latihan/'.$materiPilihan['materi'].'/'.$i.'"' : ''; ?> class="btn btn-warning text-left w-100 mx-0 px-4 py-2" style="border-radius: 15px;">
                                        <span class="h5 text-truncate mb-0" style="color: #12336D; width: 90%;">
                                            Latihan soal <?= $submateris[$i-1]['submateri'] ?>
                                        </span>
                                        <?php if (strpos($tingkatan['dasar'], (string)$i) === false) : ?><span class="fas fa-lock h5 float-right" style="color: #12336D;"></span><?php endif; ?>
                                    </a>
                                </div>
                            <?php } else if ($i<=((int)$materiPilihan['dasar']+(int)$materiPilihan['sedang'])) { $j++; ?>
                                <div class="col-6 mt-2 pl-0">
                                    <a id="latsol-sedang-<?= $j ?>" <?php echo (strpos($tingkatan['sedang'], (string)($i-(int)$materiPilihan['dasar'])) !== false) ? 'href="'.base_url().'/peserta/latihan/'.$materiPilihan['materi'].'/'.$i.'"' : ''; ?> class="btn btn-primary text-left w-100 mx-0 px-4 py-2" style="border-radius: 15px;">
                                        <span class="text-white h5 text-truncate mb-0" style="width: 90%;">
                                            Latihan soal <?= $submateris[$i-1]['submateri'] ?>
                                        </span>
                                        <?php if (strpos($tingkatan['sedang'], (string)($i-(int)$materiPilihan['dasar'])) === false) : ?><span class="fas fa-lock h5 float-right text-white"></span><?php endif; ?>
                                    </a>
                                </div>
                            <?php } else if ($i<=$jmlh) { $k++; ?>
                                <div class="col-6 mt-2 pl-0">
                                    <a id="latsol-rumit-<?= $k ?>" <?php echo (strpos($tingkatan['rumit'], (string)($i-(int)$materiPilihan['dasar']-(int)$materiPilihan['sedang'])) !== false) ? 'href="'.base_url().'/peserta/latihan/'.$materiPilihan['materi'].'/'.$i.'"' : ''; ?> class="btn text-left w-100 mx-0 px-4 py-2" style="background-color: #12336D; border-radius: 15px;">
                                        <span class="text-white h5 text-truncate mb-0" style="width: 90%;">
                                            Latihan soal <?= $submateris[$i-1]['submateri'] ?>
                                        </span>
                                        <?php if (strpos($tingkatan['rumit'], (string)($i-(int)$materiPilihan['dasar']-(int)$materiPilihan['sedang'])) === false) : ?><span class="fas fa-lock h5 float-right text-white"></span><?php endif; ?>
                                    </a>
                                </div>
                    <?php } } ?>
                </div>
            </div>
        </div>
    <?php } ?>

    <script>
        var submateris = [];
        <?php for ($i=0; $i<sizeof($submateris); $i++) { ?>
            submateris.push('<?= $submateris[$i]['submateri'] ?>');
        <?php } ?>

        document.getElementById('pilih-kelas').addEventListener('change', function() {
            const kelas = document.getElementById('pilih-kelas').value;
            $.ajax({
                url: '<?= base_url() ?>/materi/gantiKelas/'+kelas,
                success: function (res) {
                    const materis = JSON.parse(res);
                    var i = 0;
                    const inner = document.getElementById('inner-materi');
                    inner.innerHTML="";
                    while (i<materis.length) {
                        var item = document.createElement('div');
                        if (i==0) { 
                            item.setAttribute('class', 'carousel-item h-100 active');
                        } else {
                            item.setAttribute('class', 'carousel-item h-100');
                        }

                        var row = document.createElement('div');
                        row.setAttribute('class', 'row justify-content-start h-100 mx-0');

                        if (i<materis.length) {
                            item.innerHTML="";
                            row.innerHTML+=`
                                        <div class="col-4 d-flex py-3">
                                            <a href="<?= base_url() ?>/materi/materi/${materis[i].id}" class="btn btn-light w-100 h-75 mx-0 p-0" style="border-radius: 10px;">
                                                <img src="<?= base_url() ?>/img/Video Materi/${materis[i].materi}/1.jpg" alt="" class="w-100 h-100" style="border-radius: 10px;">
                                                <h5 class="text-white d-block text-truncate mt-2">${materis[i].materi}</h5>
                                            </a>
                                        </div>`;
                            item.appendChild(row);
                            i++;
                        } else { inner.appendChild(item); break; }
                        if (i<materis.length) {
                            item.innerHTML="";
                            row.innerHTML+=`
                                        <div class="col-4 d-flex py-3">
                                            <a href="<?= base_url() ?>/materi/materi/${materis[i].id}" class="btn btn-light w-100 h-75 mx-0 p-0" style="border-radius: 10px;">
                                                <img src="<?= base_url() ?>/img/Video Materi/${materis[i].materi}/1.jpg" alt="" class="w-100 h-100" style="border-radius: 10px;">
                                                <h5 class="text-white d-block text-truncate mt-2">${materis[i].materi}</h5>
                                            </a>
                                        </div>`;
                            item.appendChild(row);
                            i++;
                        } else { inner.appendChild(item); break; }
                        if (i<materis.length) {
                            item.innerHTML="";
                            row.innerHTML+=`
                                        <div class="col-4 d-flex py-3">
                                            <a href="<?= base_url() ?>/materi/materi/${materis[i].id}" class="btn btn-light w-100 h-75 mx-0 p-0" style="border-radius: 10px;">
                                                <img src="<?= base_url() ?>/img/Video Materi/${materis[i].materi}/1.jpg" alt="" class="w-100 h-100" style="border-radius: 10px;">
                                                <h5 class="text-white d-block text-truncate mt-2">${materis[i].materi}</h5>
                                            </a>
                                        </div>`;
                            item.appendChild(row);
                            i++;
                        } else { inner.appendChild(item); break; }
                        inner.appendChild(item);
                    }

                    const indicator = document.getElementById('indicator-materi');
                    indicator.innerHTML="";
                    for (i=0; i<(materis.length/3); i++) {
                        if (i==0) {
                            indicator.innerHTML+=`<li data-target="#carouselExampleIndicators" data-slide-to="${i}" class="active"></li>`;
                        } else {
                            indicator.innerHTML+=`<li data-target="#carouselExampleIndicators" data-slide-to="${i}"></li>`;
                        }
                    }
                }
            });
        });

        document.getElementById('rekamanKelas').addEventListener('click', function() {
            <?php if (!empty($rekaman)) { ?>
                document.getElementById('video-materi').style.display="none";
                document.getElementById('rekaman-kelas').style.display="block";
                document.getElementById('semi-title').innerHTML=" - Bagian 1";
                document.getElementById('vidSrc').src="<?= base_url() ?>/vid/Rekaman Kelas/<?= $rekaman['admin'] ?>/<?= $rekaman['materi'] ?> - 1.mp4";
                document.getElementById('vid').poster="<?= base_url() ?>/img/Rekaman Kelas/<?= $rekaman['admin'] ?>/<?= $rekaman['materi'] ?>.<?= $rekaman['ext_tn'] ?>"
                document.getElementById('vid').load();
            <?php } else { ?>
                Swal.fire({
                    icon: 'warning',
                    title: '',
                    text: 'Maaf, rekaman kelas untuk materi ini belum tersedia.'
                });
            <?php } ?>
        });
        
        <?php if (!empty($rekaman)) { ?>
            function tukarBagianRekaman(bagian) {
                document.getElementById('video-materi').style.display="none";
                document.getElementById('rekaman-kelas').style.display="block";
                document.getElementById('semi-title').innerHTML=" - Bagian "+bagian;
                document.getElementById('vidSrc').src="<?= base_url() ?>/vid/Rekaman Kelas/<?= $rekaman['admin'] ?>/<?= $rekaman['materi'] ?> - "+bagian+".mp4";
                document.getElementById('vid').poster="<?= base_url() ?>/img/Rekaman Kelas/<?= $rekaman['admin'] ?>/<?= $rekaman['materi'] ?>.<?= $rekaman['ext_tn'] ?>"
                document.getElementById('vid').load();
            }
        <?php } ?>


        document.getElementById('videoMateri').addEventListener('click', function() {
            <?php if ((int)$materiPilihan['dasar']+(int)$materiPilihan['sedang']+(int)$materiPilihan['rumit']!=0) { ?>
                document.getElementById('semi-title').innerHTML="<?= $submateris[0]['submateri'] ?>";
                document.getElementById('vidSrc').src="<?= base_url() ?>/vid/Materi Baru/<?= $materiPilihan['materi'] ?>/1.mp4";
                document.getElementById('vid').poster="<?= base_url() ?>/img/Video Materi/<?= $materiPilihan['materi'] ?>/1.jpg";
                document.getElementById('vid').load();
                document.getElementById('rekaman-kelas').style.display="none";
                document.getElementById('video-materi').style.display="block";
            <?php }  else { ?>
                Swal.fire({
                    icon: 'warning',
                    title: '',
                    text: 'Maaf, video materi ini belum tersedia.'
                });
            <?php } ?>
        });

        function tukarBagianMateri(materi, tingkat, bagian){
            const xhttp = new XMLHttpRequest();
            xhttp.onload = function() {
                let parent;
                let b;
                switch (tingkat) {
                    case 'dasar':
                        parent = document.getElementById('latsol-dasar-'+bagian);
                        parent.href="<?= base_url() ?>/peserta/latihan/<?= $materiPilihan['materi'] ?>/"+bagian;
                        if (parent.childElementCount!=1) {
                            parent.removeChild(parent.lastElementChild);
                        }
                        break;
                    case 'sedang':
                        b = parseInt(bagian)-parseInt('<?= $materiPilihan['dasar'] ?>');
                        parent = document.getElementById('latsol-sedang-'+b);
                        parent.href="<?= base_url() ?>/peserta/latihan/<?= $materiPilihan['materi'] ?>/"+bagian;
                        if (parent.childElementCount!=1) {
                            parent.removeChild(parent.lastElementChild);
                        }
                            break;
                    case 'rumit':
                        b = parseInt(bagian)-parseInt('<?= $materiPilihan['dasar'] ?>')-parseInt('<?= $materiPilihan['sedang'] ?>');
                        parent = document.getElementById('latsol-rumit-'+b);
                        parent.href="<?= base_url() ?>/peserta/latihan/<?= $materiPilihan['materi'] ?>/"+bagian;
                        if (parent.childElementCount!=1) {
                            parent.removeChild(parent.lastElementChild);
                        }
                        break;
                }

                if (this.responseText=="unlocked") {
                    switch (tingkat) {
                        case 'dasar':
                            <?php $j=$materiPilihan['dasar']; for ($i=0; $i<$materiPilihan['sedang']; $i++) { ?>
                                document.getElementById('<?php echo $j; $j++; ?>').disabled=false;
                            <?php } ?>
                            break;
                        case 'sedang':
                            <?php $j=(int)$materiPilihan['dasar']+(int)$materiPilihan['sedang']; for ($i=0; $i<$materiPilihan['rumit']; $i++) { ?>
                                document.getElementById('<?php echo $j; $j++; ?>').disabled=false;
                            <?php } ?>
                            break;
                    }
                }
            }

            xhttp.open("GET", '<?= base_url() ?>/materi/cek/'+materi+'/'+tingkat+'/'+bagian, true);
            xhttp.send();
            
            if (tingkat == 'dasar') {
                document.getElementById('dasarBawah').innerHTML="Dasar";
            } else if (tingkat == 'sedang') {
                document.getElementById('dasarBawah').innerHTML="Sedang";
            } else if (tingkat == 'rumit') {
                document.getElementById('dasarBawah').innerHTML="Rumit";
            }

            document.getElementById('semi-title').innerHTML=" - "+submateris[parseInt(bagian)-1];
            document.getElementById('vidSrc').src="<?= base_url() ?>/vid/Materi Baru/"+materi+"/"+bagian+".mp4";
            document.getElementById('vid').poster="<?= base_url() ?>/img/Video Materi/"+materi+"/"+bagian+".jpg";
            document.getElementById('vid').load();
        }
        <?php if ((int)$materiPilihan['dasar']+(int)$materiPilihan['sedang']+(int)$materiPilihan['rumit']==0) { ?>
            document.getElementById('rekamanKelas').click();
        <?php } ?>
        <?= session()->getFlashdata('rekaman') ?>
    </script>
</div>
<?= $this->endSection(); ?>