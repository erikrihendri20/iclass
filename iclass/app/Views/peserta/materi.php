<?= $this->extend('templates/index'); ?>
<?= $this->section('content'); ?>
<div class="content mb-0 py-3">
    <div class="row mx-auto mt-5" style="width: 80%;">
        <div class="row w-100 mx-0">
            <h4 class="font-weight-bold w-100 my-auto">Video Materi</h4>
            <div class="row w-100 mx-0 mt-4">
                <?php if (session('jurusan')!='intensif' && session('jurusan')!='tryout') { ?>
                    <button class="btn bg-primary border-10" disabled>Kelas <?= session('jurusan') ?></button>
                <?php } else { ?>
                    <?php if (session('kode-paket') != '7') { $done=false; ?>
                        <button id="buttonKelas10" onclick="changeKelas('10');" 
                            class="btn <?php if (strpos($materiPilihan['kelas'],'10')!==false && !$done) { echo 'btn-primary'; $done=true; } else { echo 'btn-light'; } ?> border-10 px-3">Kelas 10</button>
                        <button id="buttonKelas11" onclick="changeKelas('11');" 
                            class="btn <?php if (strpos($materiPilihan['kelas'],'11')!==false && !$done) { echo 'btn-primary'; $done=true; } else { echo 'btn-light'; } ?> border-10 ml-3 px-3">Kelas 11</button>
                        <button id="buttonKelas12" onclick="changeKelas('12');" 
                            class="btn <?php if (strpos($materiPilihan['kelas'],'12')!==false && !$done) { echo 'btn-primary'; $done=true; } else { echo 'btn-light'; } ?> border-10 mx-3 px-3">Kelas 12</button>
                    <?php } ?>
                    <?php if (session('kode-paket')=='5' || session('kode-paket')=='7') { ?>
                        <button id="buttonKelasSKD" onclick="changeKelas('skd');" 
                                class="btn <?= $materiPilihan['kelas']=='skd' ? 'btn-primary' : 'btn-light' ?> border-10 px-3">SKD</button>
                    <?php } ?>
                <?php } ?>
            </div>
            <div class="row w-100 mx-0 mt-4"> 
                <?php if (session('kode-paket') != '7') { $done=false; ?>
                    <div id="divKelas10" class="position-relative w-100" style="display: <?php if ((strpos($materiPilihan['kelas'],'10')!==false || session('jurusan')=='10') && !$done) { echo 'block'; $done=true; } else { echo 'none'; } ?>; overflow-x: auto; overflow-y: hidden; white-space: nowrap;">
                        <?php if (strpos($materiPilihan['kelas'], '10')!==false) { ?>
                            <a class="text-dark pr-3 py-2" style="width: 20%; display:inline-block; float: none;" href="#">
                                <div class="row align-content-center bg-primary border-20 position-relative w-100 mx-0 px-4" style="height: 150px;">
                                    <div class="progress bg-secondary border-20 w-100">
                                        <div class="progress-bar bg-white border-20" role="progressbar" 
                                            style="width: <?= $materiPilihan['selesai'] ?>%" aria-valuenow="<?= $materiPilihan['selesai'] ?>" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <h6 class="text-white mt-2 mb-0">Progress: <?= $materiPilihan['selesai'] ?>%</h6>
                                    <img src="<?= base_url() ?>/img/Aset/Asset 33.png" style="width: 10%; position: absolute; right: 10px; bottom: 10px;">
                                </div>
                                <h6 class="font-weight-bold text-truncate w-100 mt-4 mb-0 px-2" style="font-size: 18px;"><?= $materiPilihan['materi'] ?></h6>
                                <h6 class="w-100 px-2 mt-2" style="font-size: 18px;"><?= (int)$materiPilihan['dasar']+(int)$materiPilihan['sedang']+(int)$materiPilihan['rumit'] ?> Episodes</h6>
                            </a>
                        <?php } ?>
                        <?php foreach($materis as $materi) { 
                            if ($materi['id']!=$materiPilihan['id'] && strpos($materi['kelas'], '10')!==false) { ?>
                                <a class="text-dark pr-3 py-2" style="width: 20%; display:inline-block; float: none;"
                                    href="<?= base_url() ?>/materi/materi/<?= $materi['id'] ?>">
                                    <div class="row align-content-center bg-secondary border-20 position-relative w-100 mx-0 px-4" style="height: 150px;">
                                        <div class="progress bg-white border-20 w-100">
                                            <div class="progress-bar bg-primary border-20" role="progressbar" 
                                                style="width: <?= $materi['selesai'] ?>%" aria-valuenow="<?= $materi['selesai'] ?>" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <h6 class="text-primary mt-2 mb-0">Progress: <?= $materi['selesai'] ?>%</h6>
                                        <img src="<?= base_url() ?>/img/Aset/Asset 33.png" style="width: 10%; position: absolute; right: 10px; bottom: 10px;">
                                    </div>
                                    <h6 class="font-weight-bold text-truncate w-100 mt-4 mb-0 px-2" style="font-size: 18px;"><?= $materi['materi'] ?></h6>
                                    <h6 class="w-100 px-2 mt-2" style="font-size: 18px;"><?= (int)$materi['dasar']+(int)$materi['sedang']+(int)$materi['rumit'] ?> Episodes</h6>
                                </a>
                        <?php } } ?>
                    </div>
                    <div id="divKelas11" class="position-relative w-100" style="display: <?php if ((strpos($materiPilihan['kelas'],'11')!==false || session('jurusan')=='11') && !$done) { echo 'block'; $done=true; } else { echo 'none'; } ?>; overflow-x: auto; overflow-y: hidden; white-space: nowrap;">
                        <?php if (strpos($materiPilihan['kelas'], '11')!==false) { ?>
                            <a class="text-dark pr-3 py-2" style="width: 20%; display:inline-block; float: none;" href="#">
                                <div class="row align-content-center bg-primary border-20 position-relative w-100 mx-0 px-4" style="height: 150px;">
                                    <div class="progress bg-secondary border-20 w-100">
                                        <div class="progress-bar bg-white border-20" role="progressbar" 
                                            style="width: <?= $materiPilihan['selesai'] ?>%" aria-valuenow="<?= $materiPilihan['selesai'] ?>" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <h6 class="text-white mt-2 mb-0">Progress: <?= $materiPilihan['selesai'] ?>%</h6>
                                    <img src="<?= base_url() ?>/img/Aset/Asset 33.png" style="width: 10%; position: absolute; right: 10px; bottom: 10px;">
                                </div>
                                <h6 class="font-weight-bold text-truncate w-100 mt-4 mb-0 px-2" style="font-size: 18px;"><?= $materiPilihan['materi'] ?></h6>
                                <h6 class="w-100 px-2 mt-2" style="font-size: 18px;"><?= (int)$materiPilihan['dasar']+(int)$materiPilihan['sedang']+(int)$materiPilihan['rumit'] ?> Episodes</h6>
                            </a>
                        <?php } ?>
                        <?php foreach($materis as $materi) { 
                            if ($materi['id']!=$materiPilihan['id'] && strpos($materi['kelas'], '11')!==false) { ?>
                                <a class="text-dark pr-3 py-2" style="width: 20%; display:inline-block; float: none;"
                                    href="<?= base_url() ?>/materi/materi/<?= $materi['id'] ?>">
                                    <div class="row align-content-center bg-secondary border-20 position-relative w-100 mx-0 px-4" style="height: 150px;">
                                        <div class="progress bg-white border-20 w-100">
                                            <div class="progress-bar bg-primary border-20" role="progressbar" 
                                                style="width: <?= $materi['selesai'] ?>%" aria-valuenow="<?= $materi['selesai'] ?>" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <h6 class="text-primary mt-2 mb-0">Progress: <?= $materi['selesai'] ?>%</h6>
                                        <img src="<?= base_url() ?>/img/Aset/Asset 33.png" style="width: 10%; position: absolute; right: 10px; bottom: 10px;">
                                    </div>
                                    <h6 class="font-weight-bold text-truncate w-100 mt-4 mb-0 px-2" style="font-size: 18px;"><?= $materi['materi'] ?></h6>
                                    <h6 class="w-100 px-2 mt-2" style="font-size: 18px;"><?= (int)$materi['dasar']+(int)$materi['sedang']+(int)$materi['rumit'] ?> Episodes</h6>
                                </a>
                        <?php } } ?>
                    </div>
                    <div id="divKelas12" class="position-relative w-100" style="display: <?php if ((strpos($materiPilihan['kelas'],'12')!==false || session('jurusan')=='12') && !$done) { echo 'block'; $done=true; } else { echo 'none'; } ?>; overflow-x: auto; overflow-y: hidden; white-space: nowrap;">
                        <?php if (strpos($materiPilihan['kelas'], '12')!==false) { ?>
                            <a class="text-dark pr-3 py-2" style="width: 20%; display:inline-block; float: none;" href="#">
                                <div class="row align-content-center bg-primary border-20 position-relative w-100 mx-0 px-4" style="height: 150px;">
                                    <div class="progress bg-secondary border-20 w-100">
                                        <div class="progress-bar bg-white border-20" role="progressbar" 
                                            style="width: <?= $materiPilihan['selesai'] ?>%" aria-valuenow="<?= $materiPilihan['selesai'] ?>" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <h6 class="text-white mt-2 mb-0">Progress: <?= $materiPilihan['selesai'] ?>%</h6>
                                    <img src="<?= base_url() ?>/img/Aset/Asset 33.png" style="width: 10%; position: absolute; right: 10px; bottom: 10px;">
                                </div>
                                <h6 class="font-weight-bold text-truncate w-100 mt-4 mb-0 px-2" style="font-size: 18px;"><?= $materiPilihan['materi'] ?></h6>
                                <h6 class="w-100 px-2 mt-2" style="font-size: 18px;"><?= (int)$materiPilihan['dasar']+(int)$materiPilihan['sedang']+(int)$materiPilihan['rumit'] ?> Episodes</h6>
                            </a>
                        <?php } ?>
                        <?php foreach($materis as $materi) { 
                            if ($materi['id']!=$materiPilihan['id'] && strpos($materi['kelas'], '12')!==false) { ?>
                                <a class="text-dark pr-3 py-2" style="width: 20%; display:inline-block; float: none;"
                                    href="<?= base_url() ?>/materi/materi/<?= $materi['id'] ?>">
                                    <div class="row align-content-center bg-secondary border-20 position-relative w-100 mx-0 px-4" style="height: 150px;">
                                        <div class="progress bg-white border-20 w-100">
                                            <div class="progress-bar bg-primary border-20" role="progressbar" 
                                                style="width: <?= $materi['selesai'] ?>%" aria-valuenow="<?= $materi['selesai'] ?>" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <h6 class="text-primary mt-2 mb-0">Progress: <?= $materi['selesai'] ?>%</h6>
                                        <img src="<?= base_url() ?>/img/Aset/Asset 33.png" style="width: 10%; position: absolute; right: 10px; bottom: 10px;">
                                    </div>
                                    <h6 class="font-weight-bold text-truncate w-100 mt-4 mb-0 px-2" style="font-size: 18px;"><?= $materi['materi'] ?></h6>
                                    <h6 class="w-100 px-2 mt-2" style="font-size: 18px;"><?= (int)$materi['dasar']+(int)$materi['sedang']+(int)$materi['rumit'] ?> Episodes</h6>
                                </a>
                        <?php } } ?>
                    </div>
                <?php } ?>
                <?php if (session('kode-paket')=='5' || session('kode-paket')=='7') { ?>
                    <div id="divKelasSKD" class="position-relative w-100" style="display: <?= ($materiPilihan['kelas']=='skd') ? 'block' : 'none' ?>; overflow-x: auto; overflow-y: hidden; white-space: nowrap;">
                        <?php if (strpos($materiPilihan['kelas'], 'skd')!==false) { ?>
                            <a class="text-dark pr-3 py-2" style="width: 20%; display:inline-block; float: none;" href="#">
                                <div class="row align-content-center bg-primary border-20 position-relative w-100 mx-0 px-4" style="height: 150px;">
                                    <div class="progress bg-secondary border-20 w-100">
                                        <div class="progress-bar bg-white border-20" role="progressbar" 
                                            style="width: <?= ($materiPilihan['kelas']!='skd') ? $materiPilihan['selesai'] : '100' ?>%" aria-valuenow="<?= ($materiPilihan['kelas']!='skd') ? $materiPilihan['selesai'] : '100' ?>" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <h6 class="text-white mt-2 mb-0">Progress: <?= ($materiPilihan['kelas']!='skd') ? $materiPilihan['selesai'] : '100' ?>%</h6>
                                    <img src="<?= base_url() ?>/img/Aset/Asset 33.png" style="width: 10%; position: absolute; right: 10px; bottom: 10px;">
                                </div>
                                <h6 class="font-weight-bold text-truncate w-100 mt-4 mb-0 px-2" style="font-size: 18px;"><?= $materiPilihan['materi'] ?></h6>
                            </a>
                        <?php } ?>
                        <?php foreach($materis as $materi) { 
                            if ($materi['id']!=$materiPilihan['id'] && strpos($materi['kelas'], 'skd')!==false) { ?>
                                <a class="text-dark pr-3 py-2" style="width: 20%; display:inline-block; float: none;"
                                    href="<?= base_url() ?>/materi/materi/<?= $materi['id'] ?>">
                                    <div class="row align-content-center bg-secondary border-20 position-relative w-100 mx-0 px-4" style="height: 150px;">
                                        <div class="progress bg-white border-20 w-100">
                                            <div class="progress-bar bg-primary border-20" role="progressbar" 
                                                style="width: <?= ($materi['kelas']!='skd') ? $materi['selesai'] : '100' ?>%" aria-valuenow="<?= ($materi['kelas']!='skd') ? $materi['selesai'] : '100' ?>" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <h6 class="text-primary mt-2 mb-0">Progress: <?= ($materi['kelas']!='skd') ? $materi['selesai'] : '100' ?>%</h6>
                                        <img src="<?= base_url() ?>/img/Aset/Asset 33.png" style="width: 10%; position: absolute; right: 10px; bottom: 10px;">
                                    </div>
                                    <h6 class="font-weight-bold text-truncate w-100 mt-4 mb-0 px-2" style="font-size: 18px;"><?= $materi['materi'] ?></h6>
                                </a>
                        <?php } } ?>
                    </div>
                <?php } ?>
            </div>
        </div>
        <div class="row w-100 mx-0 mt-5">
            <div class="row mx-0 pr-2" style="width: 70%;">
                <?php if (session('kode-paket')!='6') { ?>
                    <div class="row bg-primary border-30 embed-responsive embed-responsive-16by9 bg-light mx-0">
                        <video id="vid" class="embed-responsive-item bg-primary" controls controlslist="nodownload"
                            poster="<?= base_url() ?>/img/Aset/Asset 391.png">
                            <?php if (session('kode-paket') != '7' && $materiPilihan['materi']!='skd') { ?>
                                <source id="vidSrc" src="<?php echo base_url()."/vid/Materi Baru/".$materiPilihan['materi']."/".$part.".mp4"; ?>" type="video/mp4">
                            <?php } else { ?>
                                <source id="vidSrc" src="<?php echo base_url()."/vid/Rekaman Kelas/".$rekaman[$rekamanPart-1]['admin']."/".$rekaman[$rekamanPart-1]['materi']." - ".$rekamanPart.".mp4"; ?>" type="video/mp4">
                            <?php } ?>
                        </video>
                    </div>
                <?php } else { ?>
                    <div class="row bg-primary border-30 w-100 mx-0" style="height: 500px;">
                        <div class="row justify-content-center align-content-center h-100 mx-0 px-4">
                            <img src="<?= base_url() ?>/img/Aset/Asset 391.png" alt="" class="w-100" style="object-fit: contain;">
                        </div>
                    </div>
                <?php } ?>
            </div>
            <div class="row mx-0 pl-2" style="width: 30%;">
                <div class="row align-content-start justify-content-between border border-30 w-100 h-100 mx-0 px-4 py-3">
                    <div class="btn-group btn-group-toggle w-100">
                        <?php if (session('kode-paket')!='7' && $materiPilihan['kelas']!='skd') { ?>
                            <button id="videoMateri" class="btn btn-link font-weight-bold mx-auto">
                                <input type="radio" name="options" id="option1" autocomplete="off" checked>Video Materi
                            </button>
                        <?php } ?>
                        <button id="rekamanKelas" class="btn btn-link text-secondary font-weight-bold mx-auto">
                            <input type="radio" name="options" id="option2" autocomplete="off">Rekaman Kelas
                        </button>
                    </div>
                    <?php if (session('kode-paket')!='7' && $materiPilihan['kelas']!='skd') { ?>
                        <div id="video-materi" class="row w-100 mx-0 mt-3" style="max-height: 400px; overflow-y: auto;">
                            <?php if ($materiPilihan['dasar']!='' && $materiPilihan['dasar']!='0') {
                                for ($i=0; $i<(int)$materiPilihan['dasar']; $i++) { ?>
                                    <button id="<?= $i ?>" class="btn btn-primary text-white text-left text-truncate border-20 w-100 mb-2"
                                        onclick="tukarBagianMateri('<?= $materiPilihan['materi'] ?>', 'dasar', '<?= $i+1 ?>');">
                                        <div class="row mx-0">
                                            <img id="img<?= $i ?>" src="<?= base_url() ?>/img/Aset/Asset 35.png" class="py-1" style="width: 15%; object-fit: contain;">
                                            <span class="align-self-center pl-2"><?= $submateris[$i]['submateri'] ?></span>
                                        </div>
                                    </button>
                            <?php } } ?>
                            <?php if ($materiPilihan['sedang']!='' && $materiPilihan['sedang']!='0') { $j=$i;
                                for ($i=0; $i<(int)$materiPilihan['sedang']; $i++) { ?>
                                    <button id="<?= $j ?>" class="btn text-left text-truncate border-20 w-100 mb-2 <?php echo (!$sedang) ? 'bg-white' : 'bg-primary text-white'; ?>"
                                        onclick="tukarBagianMateri('<?= $materiPilihan['materi'] ?>', 'sedang', '<?= $j+1 ?>');"
                                        <?php echo (!$dasar) ? 'disabled' : ''; ?>>
                                        <div class="row mx-0">
                                            <img id="img<?= $j ?>" src="<?= base_url() ?>/img/Aset/Asset <?= (!$sedang) ? '34' : '35' ?>.png" class="py-1" style="width: 15%; object-fit: contain;">
                                            <span class="align-self-center pl-2"><?= $submateris[$j]['submateri'] ?></span>
                                        </div>
                                    </button>
                            <?php $j++; } } else { $j=$i; $sedang=$dasar; } ?>
                            <?php if ($materiPilihan['rumit']!='' && $materiPilihan['rumit']!='0') { $k=$j;
                                for ($i=0; $i<(int)$materiPilihan['rumit']; $i++) { ?>
                                    <button id="<?= $k ?>" class="btn text-left text-truncate border-20 w-100 mb-2 <?php echo (!$rumit ) ? 'bg-white' : 'bg-primary text-white'; ?>"
                                        onclick="tukarBagianMateri('<?= $materiPilihan['materi'] ?>', 'rumit', '<?= $k+1 ?>');"
                                        <?php echo (!$sedang) ? 'disabled' : ''; ?>>
                                        <div class="row mx-0">
                                            <img id="img<?= $k ?>" src="<?= base_url() ?>/img/Aset/Asset <?= (!$rumit) ? '34' : '35' ?>.png" class="py-1" style="width: 15%; object-fit: contain;">
                                            <span class="align-self-center pl-2"><?= $submateris[$k]['submateri'] ?></span>
                                        </div>
                                    </button>
                            <?php $k++; } } ?>
                        </div>
                    <?php } ?>
                    <div id="rekaman-kelas" class="row w-100 mx-0 mt-3" style="max-height: 400px; overflow-y: auto; display: <?= (session('kode-paket') != '7' && $materiPilihan['kelas']!='skd') ? 'none' : 'block' ?> ;">
                        <?php if (!empty($rekaman)) { ?>
                            <div class="row mx-0">
                                <?php foreach($rekaman as $rek) { ?>
                                    <button class="btn btn-primary text-white text-left text-truncate border-20 w-100 mb-2"
                                        onclick="tukarBagianRekaman('<?= $rek['parts'] ?>');">
                                        <div class="row mx-0">
                                            <img src="<?= base_url() ?>/img/Aset/Asset 35.png" class="py-1" style="width: 15%; object-fit: contain;">
                                            <span class="align-self-center pl-2"><?= date('j F Y', strtotime($rek['uploaded'])) ?></span>
                                        </div>
                                    </button>
                                <?php } ?>
                                <div class="col-4 mt-4 ml-2 px-0">
                                    <h6 class="font-weight-bold rounded mt-3 py-1" style="color: #12336D;">PPT</h6>
                                </div>
                                <?php if (session('kode-paket')!='6') { ?>
                                    <?php if ($rekaman[$rekamanPart-1]!=null) { ?>
                                        <a id="anchorppt" class="text-left w-100 mt-2 ml-2 p-0" href="<?= base_url() ?>/ppt/Rekaman Kelas/<?php echo $rekaman[$rekamanPart-1]['admin'].'/'.$rekaman[$rekamanPart-1]['materi'].' - '.$rekamanPart.'.'.$rekaman[$rekamanPart-1]['ext_ppt'] ?>" download>
                                            <h6 class="text-primary text-left truncate mb-0">Download PowerPoint</h6>
                                        </a>
                                    <?php } ?>
                                <?php } else { ?>
                                    <button class="btn btn-light shadow border-10 w-100 mt-2 py-0" onclick="hanyaTryout();">
                                        <div class="row mx-0 py-1">
                                            <img src="<?= base_url() ?>/img/Aset/Asset 471@300x.png" alt="" style="width: 20%;">
                                            <h6 class="text-primary text-left truncate mb-0">Download PowerPoint</h6>
                                        </div>
                                    </button>
                                <?php } ?>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
        <?php if (session('kode-paket')!='7' && $materiPilihan['kelas']!='skd') { ?>
            <div class="row w-100 mx-0 mt-4 ml-3">
                <div class="position-relative w-100" style="overflow-x: auto; overflow-y: hidden; white-space: nowrap;">
                    <?php $jmlh = (int)$materiPilihan['dasar']+(int)$materiPilihan['sedang']+(int)$materiPilihan['rumit']; $j=0; $k=0;
                        for ($i=1; $i<=$jmlh; $i++) {
                            if ($i<=(int)$materiPilihan['dasar']) { ?>
                                <a id="latsol-dasar-<?= $i ?>" class="btn mt-2 bg-<?= (strpos($tingkatan['dasar'], (string)$i) !== false) ? 'primary text-white' : 'secondary text-dark' ?> text-left text-truncate border-20 p-3 mr-3"
                                    style="display:inline-block; float: none; width: 20%;"
                                    <?php echo ((strpos($tingkatan['dasar'], (string)$i) !== false) && (session('kode-paket') != '6')) ? 'href="'.base_url().'/peserta/latihan/'.$materiPilihan['materi'].'/'.$i.'"' : 'onclick="hanyaTryout();"'; ?>>

                                    <img id="imgdasar<?= $i ?>" src="<?= base_url() ?>/img/Aset/Asset <?= (strpos($tingkatan['dasar'], (string)$i) !== false) ? '31' : '29' ?>.png" class="p-2" style="width: 20%; object-fit: contain;">
                                    <span style="display:inline;"><?= $submateris[$i-1]['submateri'] ?></span>
                                </a>
                            <?php } else if ($i<=((int)$materiPilihan['dasar']+(int)$materiPilihan['sedang'])) { $j++; ?>
                                <a id="latsol-sedang-<?= $j ?>" class="btn mt-2 bg-<?= ((strpos($tingkatan['sedang'], (string)($i-(int)$materiPilihan['dasar'])) !== false) || $dasar) ? 'primary text-white' : 'secondary text-dark' ?> text-left text-truncate border-20 p-3 mr-3"
                                    style="display:inline-block; float: none; width: 20%;"
                                    <?php echo ((strpos($tingkatan['sedang'], (string)($i-(int)$materiPilihan['dasar'])) !== false) && (session('kode-paket') != '6')) ? 'href="'.base_url().'/peserta/latihan/'.$materiPilihan['materi'].'/'.$i.'"' : 'onclick="hanyaTryout();"'; ?>>

                                    <img id="imgsedang<?= $j ?>" src="<?= base_url() ?>/img/Aset/Asset <?= ((strpos($tingkatan['sedang'], (string)($i-(int)$materiPilihan['dasar'])) !== false) || $dasar) ? '31' : '29' ?>.png" class="p-2" style="width: 20%; object-fit: contain;">
                                    <span style="display:inline;"><?= $submateris[$i-1]['submateri'] ?></span>
                                </a>
                            <?php } else if ($i<=$jmlh) { $k++; ?>
                                <a id="latsol-rumit-<?= $k ?>" class="btn mt-2 bg-<?= ((strpos($tingkatan['rumit'], (string)($i-(int)$materiPilihan['dasar']-(int)$materiPilihan['sedang'])) !== false) || $sedang) ? 'primary text-white' : 'secondary text-dark' ?> text-left text-truncate border-20 p-3 mr-3"
                                    style="display:inline-block; float: none; width: 20%;"
                                    <?php echo ((strpos($tingkatan['rumit'], (string)($i-(int)$materiPilihan['dasar']-(int)$materiPilihan['sedang'])) !== false) && (session('kode-paket') != '6')) ? 'href="'.base_url().'/peserta/latihan/'.$materiPilihan['materi'].'/'.$i.'"' : 'onclick="hanyaTryout();"'; ?>>

                                    <img id="imgrumit<?= $k ?>" src="<?= base_url() ?>/img/Aset/Asset <?= ((strpos($tingkatan['rumit'], (string)($i-(int)$materiPilihan['dasar']-(int)$materiPilihan['sedang'])) !== false) || $sedang) ? '31' : '29' ?>.png" class="p-2" style="width: 20%; object-fit: contain;">
                                    <span style="display:inline;"><?= $submateris[$i-1]['submateri'] ?></span>
                                </a>
                    <?php } } ?>
                </div>
            </div>
        <?php } ?>
    </div>

    <script>
        <?php if (session('kode-paket') != '7') { ?>
            function switchColor(satu, dua, tiga, empat) {
                document.getElementById(satu).classList.remove("btn-light");
                document.getElementById(satu).classList.add("btn-primary");
                document.getElementById(dua).classList.remove("btn-primary");
                document.getElementById(dua).classList.add("btn-light");
                document.getElementById(tiga).classList.remove("btn-primary");
                document.getElementById(tiga).classList.add("btn-light");
                <?php if (session('kode-paket')=='5' || session('kode-paket')=='7') { ?>
                    document.getElementById(empat).classList.remove("btn-primary");
                    document.getElementById(empat).classList.add("btn-light");
                <?php } ?>
            }

            function switchDisplay(satu, dua, tiga, empat) {
                document.getElementById(satu).style.display="block";
                document.getElementById(dua).style.display="none";
                document.getElementById(tiga).style.display="none";
                <?php if (session('kode-paket')=='5' || session('kode-paket')=='7') { ?>
                    document.getElementById(empat).style.display="none";
                <?php } ?>
            }

            function changeKelas(kelas) {
                if (kelas=='10') {
                    switchColor('buttonKelas10', 'buttonKelas11', 'buttonKelas12', 'buttonKelasSKD');
                    switchDisplay('divKelas10', 'divKelas11', 'divKelas12', 'divKelasSKD');
                } else if (kelas=='11') {
                    switchColor('buttonKelas11', 'buttonKelas10', 'buttonKelas12', 'buttonKelasSKD');
                    switchDisplay('divKelas11', 'divKelas10', 'divKelas12', 'divKelasSKD');
                } else if (kelas=='12') {
                    switchColor('buttonKelas12', 'buttonKelas11', 'buttonKelas10', 'buttonKelasSKD');
                    switchDisplay('divKelas12', 'divKelas11', 'divKelas10', 'divKelasSKD');
                } else {
                    switchColor('buttonKelasSKD', 'buttonKelas12', 'buttonKelas11', 'buttonKelas10');
                    switchDisplay('divKelasSKD', 'divKelas12', 'divKelas11', 'divKelas10');
                }
            }
        <?php } ?>

        var submateris = [];
        <?php for ($i=0; $i<sizeof($submateris); $i++) { ?>
            submateris.push('<?= $submateris[$i]['submateri'] ?>');
        <?php } ?>
        
        document.getElementById('rekamanKelas').addEventListener('click', function() {
            <?php if (!empty($rekaman)) { ?>
                <?php if (session('kode-paket')!='7' && $materiPilihan['kelas']!='skd') { ?>
                    document.getElementById('video-materi').style.display="none";
                    document.getElementById('videoMateri').classList.add("text-secondary");
                <?php } ?>
                document.getElementById('rekaman-kelas').style.display="block";
                document.getElementById('rekamanKelas').classList.remove("text-secondary");
                <?php if (session('kode-paket') != '6') { ?>
                    document.getElementById('vidSrc').src="<?= base_url() ?>/vid/Rekaman Kelas/<?= $rekaman[$rekamanPart-1]['admin'] ?>/<?= $rekaman[$rekamanPart-1]['materi'] ?> - <?= $rekaman[$rekamanPart-1]['parts'] ?>.mp4";
                    document.getElementById('vid').poster="<?= base_url() ?>/img/Aset/Asset 391.png"
                    document.getElementById('vid').load();
                <?php } ?>
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
                <?php if (session('kode-paket')!='7' && $materiPilihan['kelas']!='skd') { ?>
                    document.getElementById('video-materi').style.display="none";
                <?php } ?>
                document.getElementById('rekaman-kelas').style.display="block";
                <?php if (session('kode-paket') != '6') { ?>
                    document.getElementById('vidSrc').src="<?= base_url() ?>/vid/Rekaman Kelas/<?= $rekaman[$rekamanPart-1]['admin'] ?>/<?= $rekaman[$rekamanPart-1]['materi'] ?> - "+bagian+".mp4";
                    document.getElementById('vid').poster="<?= base_url() ?>/img/Aset/Asset 391.png"
                    document.getElementById('vid').load();
                    document.getElementById('anchorppt').href="<?= base_url() ?>/ppt/Rekaman Kelas/<?= $rekaman[$rekamanPart-1]['admin'] ?>/<?= $rekaman[$rekamanPart-1]['materi'] ?> - "+bagian+".pdf";
                <?php } ?>

                var request = new XMLHttpRequest();  
                request.open('GET', "<?= base_url() ?>/ppt/Rekaman Kelas/<?= $rekaman[$rekamanPart-1]['admin'] ?>/<?= $rekaman[$rekamanPart-1]['materi'] ?> - "+bagian+".pdf", true);
                request.onreadystatechange = function(){
                    if (request.readyState === 4){
                        if (request.status === 404) {  
                            <?php if (session('kode-paket') != '6') { ?>
                                document.getElementById('anchorppt').href="<?= base_url() ?>/ppt/Rekaman Kelas/<?= $rekaman[$rekamanPart-1]['admin'] ?>/<?= $rekaman[$rekamanPart-1]['materi'] ?> - "+bagian+".pptx";
                            <?php } ?>

                            var req = new XMLHttpRequest();
                            req.open('GET', "<?= base_url() ?>/ppt/Rekaman Kelas/<?= $rekaman[$rekamanPart-1]['admin'] ?>/<?= $rekaman[$rekamanPart-1]['materi'] ?> - "+bagian+".pptx", true);
                            req.onreadystatechange = function(){
                                if (req.readyState === 4){
                                    if (req.status === 404) {
                                        <?php if (session('kode-paket') != '6') { ?>  
                                            document.getElementById('anchorppt').href="<?= base_url() ?>/ppt/Rekaman Kelas/<?= $rekaman[$rekamanPart-1]['admin'] ?>/<?= $rekaman[$rekamanPart-1]['materi'] ?> - "+bagian+".<?= $rekaman[$rekamanPart-1]['ext_ppt'] ?>";
                                        <?php } ?>
                                    }  
                                }
                            };
                            req.send();
                        }  
                    }
                };
                request.send();
            }
        <?php } ?>


        <?php if (session('kode-paket')!='7' && $materiPilihan['kelas']!='skd') { ?>
            document.getElementById('videoMateri').addEventListener('click', function() {
                <?php if ((int)$materiPilihan['dasar']+(int)$materiPilihan['sedang']+(int)$materiPilihan['rumit']!=0) { ?>
                    <?php if (session('kode-paket') != '6') { ?>
                        document.getElementById('vidSrc').src="<?= base_url() ?>/vid/Materi Baru/<?= $materiPilihan['materi'] ?>/1.mp4";
                        document.getElementById('vid').poster="<?= base_url() ?>/img/Video Materi/<?= $materiPilihan['materi'] ?>/1.jpg";
                        document.getElementById('vid').load();
                    <?php } ?>
                    document.getElementById('rekaman-kelas').style.display="none";
                    document.getElementById('video-materi').style.display="block";
                    document.getElementById('rekamanKelas').classList.add("text-secondary");
                    document.getElementById('videoMateri').classList.remove("text-secondary");
                <?php }  else { ?>
                    Swal.fire({
                        icon: 'warning',
                        title: '',
                        text: 'Maaf, video materi ini belum tersedia.'
                    });
                <?php } ?>
            });
        <?php } ?>

        function tukarBagianMateri(materi, tingkat, bagian){
            console.log(bagian);
            const xhttp = new XMLHttpRequest();
            xhttp.onload = function() {
                let parent;
                let b;
                switch (tingkat) {
                    case 'dasar':
                        parent = document.getElementById('latsol-dasar-'+bagian);
                        <?php if (session('kode-paket') != '6') { ?>
                            parent.href="<?= base_url() ?>/peserta/latihan/<?= $materiPilihan['materi'] ?>/"+bagian;
                            parent.classList.replace('bg-secondary', 'bg-primary');
                            parent.classList.replace('text-dark', 'text-white');
                            document.getElementById('imgdasar'+bagian).src="<?= base_url() ?>/img/Aset/Asset 31.png";
                        <?php } ?>
                        break;
                    case 'sedang':
                        b = parseInt(bagian)-parseInt('<?= $materiPilihan['dasar'] ?>');
                        parent = document.getElementById('latsol-sedang-'+b);
                        <?php if (session('kode-paket') != '6') { ?>
                            parent.href="<?= base_url() ?>/peserta/latihan/<?= $materiPilihan['materi'] ?>/"+bagian;
                            parent.classList.replace('bg-secondary', 'bg-primary');
                            parent.classList.replace('text-dark', 'text-white');
                            document.getElementById('imgsedang'+b).src="<?= base_url() ?>/img/Aset/Asset 31.png";
                        <?php } ?>
                        break;
                    case 'rumit':
                        b = parseInt(bagian)-parseInt('<?= $materiPilihan['dasar'] ?>')-parseInt('<?= $materiPilihan['sedang'] ?>');
                        parent = document.getElementById('latsol-rumit-'+b);
                        <?php if (session('kode-paket') != '6') { ?>
                            parent.href="<?= base_url() ?>/peserta/latihan/<?= $materiPilihan['materi'] ?>/"+bagian;
                            parent.classList.replace('bg-secondary', 'bg-primary');
                            parent.classList.replace('text-dark', 'text-white');
                            document.getElementById('imgrumit'+b).src="<?= base_url() ?>/img/Aset/Asset 31.png";
                        <?php } ?>
                        break;
                }
                console.log(this.responseText);
                if (this.responseText=="unlocked") {
                    switch (tingkat) {
                        case 'dasar':
                            <?php $j=$materiPilihan['dasar']; for ($i=0; $i<$materiPilihan['sedang']; $i++) { ?>
                                btn = document.getElementById('<?= $j ?>');
                                btn.disabled=false;
                                btn.className="btn bg-primary text-white text-left font-weight-bold border-20 w-100 mb-2";
                                document.getElementById('img<?php echo $j; $j++; ?>').src="<?= base_url() ?>/img/Aset/Asset 35.png";
                            <?php } 
                            if ($materiPilihan['sedang']=='0') { 
                                $j=(int)$materiPilihan['dasar']; 
                                for ($i=0; $i<$materiPilihan['rumit']; $i++) { ?>
                                    btn = document.getElementById('<?= $j ?>');
                                    btn.disabled=false;
                                    btn.className="btn bg-primary text-white text-left font-weight-bold border-20 w-100 mb-2";
                                    document.getElementById('img<?php echo $j; $j++; ?>').src="<?= base_url() ?>/img/Aset/Asset 35.png";
                            <?php } } ?>
                            break;
                        case 'sedang':
                            <?php $j=(int)$materiPilihan['dasar']+(int)$materiPilihan['sedang']; for ($i=0; $i<$materiPilihan['rumit']; $i++) { ?>
                                btn = document.getElementById('<?= $j ?>');
                                btn.disabled=false;
                                btn.className="btn bg-primary text-white text-left font-weight-bold border-20 w-100 mb-2";
                                document.getElementById('img<?php echo $j; $j++; ?>').src="<?= base_url() ?>/img/Aset/Asset 35.png";
                            <?php } ?>
                            break;
                    }
                }
            }

            if (tingkat == 'dasar') {
                xhttp.open("GET", '<?= base_url() ?>/materi/cek/'+materi+'/'+tingkat+'/'+bagian, true);
            } else if (tingkat == 'sedang') {
                const t = parseInt(bagian)-parseInt('<?= $materiPilihan['dasar'] ?>');
                xhttp.open("GET", '<?= base_url() ?>/materi/cek/'+materi+'/'+tingkat+'/'+t, true);
            } else if (tingkat == 'rumit') {
                const t = parseInt(bagian)-parseInt('<?= $materiPilihan['dasar'] ?>')-parseInt('<?= $materiPilihan['sedang'] ?>');
                xhttp.open("GET", '<?= base_url() ?>/materi/cek/'+materi+'/'+tingkat+'/'+t, true);
            }
            xhttp.send();

            document.getElementById('vidSrc').src="<?= base_url() ?>/vid/Materi Baru/"+materi+"/"+bagian+".mp4";
            document.getElementById('vid').poster="<?= base_url() ?>/img/Video Materi/"+materi+"/"+bagian+".jpg";
            document.getElementById('vid').load();
        }
        <?php if ((int)$materiPilihan['dasar']+(int)$materiPilihan['sedang']+(int)$materiPilihan['rumit']==0) { ?>
            document.getElementById('rekamanKelas').click();
        <?php } ?>
        <?= session()->getFlashdata('rekaman') ?>

        function hanyaTryout() {
            Swal.fire({icon: 'error', title: '', text: 'Bagian ini belum tersedia untukmu.'});
        }
    </script>
</div>
<?= $this->endSection(); ?>