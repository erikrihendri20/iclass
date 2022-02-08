<?= $this->extend('templates/index'); ?>
<?= $this->section('content'); ?>
<div class="content mb-0">
    <div class="row mx-auto my-5" style="width: 80%;">
        <div class="row w-75 mx-0 pr-3">
            <h4 class="font-weight-bold w-100 my-auto">Keseluruhan</h4>
            <div class="position-relative w-75 mx-0 mt-4 pb-2" style="overflow-x: auto; overflow-y: hidden; white-space: nowrap;">
                <?php for ($i=sizeof($bulan)-1; $i>=0; $i--) { ?>
                    <div class="w-25 mt-2 pr-2" style="display:inline-block; float: none;">
                        <a href="<?= base_url() ?>/peserta/nilai/<?= $bulan[$i] ?>" 
                            class="btn <?php echo ($bulan[$i]==$bulanPilih) ? 'btn-primary' : 'bg-white text-dark border'; ?> border-10 font-weight-bold w-100">
                            <?= $bulan[$i] ?>
                        </a>
                    </div>
                <?php } ?>
            </div>
            <div class="row align-content-end border border-30 w-75 mx-0 mt-4 px-3 py-4">
                <div class="row align-content-end w-50 h-100 mx-0">
                    <img src="<?= base_url() ?>/img/Aset/Asset 7.png" class="w-100 p-3" style="object-fit: contain;">
                </div>
                <div class="row align-content-start mx-0 px-4" style="width: 50%; height: 370px; max-height: 370px; overflow-y: auto;">
                    <?php for ($i=0; $i<sizeof($materi); $i++) { ?>
                        <?php if (!empty($materi[$i]['nilai'])) { ?>
                            <div class="w-100 mx-0 mt-3">
                                <h6 class="text-truncate" style="width: 80%;"><?= $materi[$i]['materi'] ?></h5>
                                <div class="row align-content-center justify-content-between w-100 mx-0">
                                    <div class="progress border-10 my-auto" style="width: 80%; height: 12px;">
                                        <div class="progress-bar border-10" role="progressbar" style="width: <?= $materi[$i]['nilai'] ?>%" aria-valuenow="<?= $materi[$i]['nilai'] ?>" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <h6 class="mb-0"><?= $materi[$i]['nilai'] ?>%</h6>
                                </div>
                            </div>
                        <?php } ?>
                    <?php } ?>
                </div>
            </div>
            <div class="row w-100 mx-0 mt-4">
                <button id="btnTryOut" onclick="changeTo('tryout');"
                    class="btn bg-white text-dark font-weight-bold text-left rounded-0 px-3" style="border-bottom: 2px solid black;">Try Out</button>
                <button id="btnKuisHarian" onclick="changeTo('kuis');"
                    class="btn bg-white text-secondary font-weight-bold text-left rounded-0 px-3">Kuis Harian</button>
            </div>
            <div id="divTryOut" class="row w-75 mx-0">
                <div class="w-100 mx-0 mt-4 pb-2" style="overflow-x: auto; overflow-y: hidden; white-space: nowrap;">
                    <?php $lastOne="";
                    for ($i=0; $i<sizeof($submateri); $i++) {
                        if (array_key_exists('tryout', $submateri[$i]) && $submateri[$i]['materi']!=$lastOne) { ?>
                            <button onclick="tryOutTo('<?= $submateri[$i]['materi'] ?>');"
                                class="btn text-truncate border-10 mr-2 <?= ($lastOne=="") ? "btn-primary tryout-active" : "bg-white text-dark border" ?>" 
                                style="display:inline-block; float: none; width: 20%;" id="btn<?= $submateri[$i]['materi'] ?>">
                                <?= $submateri[$i]['materi'] ?>
                            </button>
                    <?php $lastOne=$submateri[$i]['materi']; } } ?>
                    <?php if ($lastOne=="") { ?>
                        <h5 class="font-weight-bold">Kamu belum memiliki nilai Try Out</h5>
                    <?php } ?>
                </div>
                <?php if ($lastOne!="") { $lastOne=""; 
                    for ($i=0; $i<sizeof($submateri); $i++) { 
                        if (array_key_exists('tryout', $submateri[$i]) && $submateri[$i]['materi']!=$lastOne) { ?>
                            <div id="div<?= $submateri[$i]['materi'] ?>" class="row w-100 mx-0 mt-4 <?= ($lastOne=="") ? "current-tryout" : "" ?>"
                                style="<?= ($lastOne!="") ? "display: none;" : "display: flex;" ?>">
                                <div class="row align-content-center border border-20 mx-0 py-4" style="width: 35%">
                                    <div class="row align-content-center justify-content-center text-white position-relative w-50 mx-auto">
                                        <div class="bg-primary rounded-circle w-100" style="padding-top: 100%;"></div>
                                        <h1 id="persentase<?= $submateri[$i]['materi'] ?>" class="position-absolute font-weight-bold" style="top: 50%; left: 50%; transform: translate(-50%, -50%);"><?= $submateri[$i]['tryout'] ?>%</h1>
                                    </div>
                                </div>
                                <div class="h-100 pl-3" style="width: 65%">
                                    <h6 class="font-weight-bold w-100">Rincian</h6>
                                    <div class="row w-100 border-bottom mx-0 mt-3 pb-1">
                                        <div class="bg-primary" style="width: 25px; height: 25px; border-radius: 5px;"></div>
                                        <h6 class="mb-0 ml-2"><?= $submateri[$i]['submateri'] ?></h6>
                                        <h6 class="mb-0 ml-auto"><?= $submateri[$i]['tryout'] ?></h6>
                                    </div>
                                    <?php $total=$submateri[$i]['tryout']; $jmlh=1; while($submateri[$i]['materi']==$submateri[$i+1]['materi']) {
                                        $i++;
                                        if (array_key_exists('tryout', $submateri[$i])) { 
                                            $total+=$submateri[$i]['tryout']; 
                                            $jmlh++; ?>
                                            <script>
                                                document.getElementById('persentase<?= $submateri[$i]['materi'] ?>').innerHTML="<?= floor($total/$jmlh) ?>%";
                                            </script>
                                            <div class="row w-100 border-bottom mx-0 mt-3 pb-1">
                                                <div class="bg-primary" style="width: 25px; height: 25px; border-radius: 5px;"></div>
                                                <h6 class="text-truncate w-75 mb-0 ml-2"><?= $submateri[$i]['submateri'] ?></h6>
                                                <h6 class="mb-0 ml-auto"><?= $submateri[$i]['tryout'] ?></h6>
                                            </div>
                                    <?php } } $i--; ?>
                                </div>
                            </div>                  
                <?php $lastOne=$submateri[$i]['materi']; } } } ?>
            </div>
            <div id="divKuisHarian" class="row w-75 mx-0" style="display: none;">
                <div class="w-100 mx-0 mt-4 pb-2" style="overflow-x: auto; overflow-y: hidden; white-space: nowrap;">
                    <?php $lastOne="";
                    for ($i=0; $i<sizeof($submateri); $i++) {
                        if (array_key_exists('kuis', $submateri[$i]) && $submateri[$i]['materi']!=$lastOne) { ?>
                            <button onclick="kuisTo('<?= $submateri[$i]['materi'] ?>');"
                                class="btn text-truncate border-10 mr-2 <?= ($lastOne=="") ? "btn-primary kuis-active" : "bg-white text-dark border" ?>" 
                                style="display:inline-block; float: none; width: 20%;" id="btnkuis<?= $submateri[$i]['materi'] ?>">
                                <?= $submateri[$i]['materi'] ?>
                            </button>
                    <?php $lastOne=$submateri[$i]['materi']; } } ?>
                    <?php if ($lastOne=="") { ?>
                        <h5 class="font-weight-bold">Kamu belum memiliki nilai Kuis Harian</h5>
                    <?php } ?>
                </div>
                <?php if ($lastOne!="") { $lastOne=""; 
                    for ($i=0; $i<sizeof($submateri); $i++) { 
                        if (array_key_exists('kuis', $submateri[$i]) && $submateri[$i]['materi']!=$lastOne) { ?>
                            <div id="divkuis<?= $submateri[$i]['materi'] ?>" class="row w-100 mx-0 mt-4 <?= ($lastOne=="") ? "current-kuis" : "" ?>"
                                style="<?= ($lastOne!="") ? "display: none;" : "display: flex;" ?>">
                                <div class="row align-content-center border border-20 mx-0 py-4" style="width: 35%">
                                    <div class="row align-content-center justify-content-center text-white position-relative w-50 mx-auto">
                                        <div class="bg-primary rounded-circle w-100" style="padding-top: 100%;"></div>
                                        <h1 id="persentasekuis<?= $submateri[$i]['materi'] ?>" class="position-absolute font-weight-bold" style="top: 50%; left: 50%; transform: translate(-50%, -50%);"><?= $submateri[$i]['kuis'] ?>%</h1>
                                    </div>
                                </div>
                                <div class="h-100 pl-3" style="width: 65%">
                                    <h6 class="font-weight-bold w-100">Rincian</h6>
                                    <div class="row w-100 border-bottom mx-0 mt-3 pb-1">
                                        <div class="bg-primary" style="width: 25px; height: 25px; border-radius: 5px;"></div>
                                        <h6 class="mb-0 ml-2"><?= $submateri[$i]['submateri'] ?></h6>
                                        <h6 class="mb-0 ml-auto"><?= $submateri[$i]['kuis'] ?></h6>
                                    </div>
                                    <?php $total=$submateri[$i]['kuis']; $jmlh=1; while($submateri[$i]['materi']==$submateri[$i+1]['materi']) {
                                        $i++;
                                        if (array_key_exists('kuis', $submateri[$i])) { 
                                            $total+=$submateri[$i]['kuis']; 
                                            $jmlh++; ?>
                                            <script>
                                                document.getElementById('persentasekuis<?= $submateri[$i]['materi'] ?>').innerHTML="<?= floor($total/$jmlh) ?>%";
                                            </script>
                                            <div class="row w-100 border-bottom mx-0 mt-3 pb-1">
                                                <div class="bg-primary" style="width: 25px; height: 25px; border-radius: 5px;"></div>
                                                <h6 class="text-truncate w-75 mb-0 ml-2"><?= $submateri[$i]['submateri'] ?></h6>
                                                <h6 class="mb-0 ml-auto"><?= $submateri[$i]['kuis'] ?></h6>
                                            </div>
                                    <?php } } $i--; ?>
                                </div>
                            </div>                  
                <?php $lastOne=$submateri[$i]['materi']; } } } ?>
            </div>
        </div>
        <div class="row align-content-start w-25 mx-0 pl-3">
            <h4 class="font-weight-bold w-100">Online</h4>
            <div class="row mx-0 mt-4" style="height: 250px; overflow-y:auto;">
                <?php foreach ($others as $other) : ?>
                    <a href="https://wa.me/<?= $other['telepon'] ?>" class="d-flex aling-content-center rounded w-100 mb-2">
                        <div class="row align-content-center justify-content-center mx-0" style="width: 20%;">
                            <img src="<?= base_url() ?>/img/profil/<?= $other['username'] ?>.jpg" alt="" class="bg-white border-30" style="object-fit:cover; width: 40px; height: 40px;" onerror="this.src='<?= base_url() ?>/img/profil.png'">
                        </div>
                        <div class="row align-content-center mx-0" style="width: 80%;">
                            <h6 class="font-weight-bold text-truncate w-100 ml-2 mb-0" style="color: #12336D;"><?= $other['nama'] ?></h6>
                            <h6 class="text-truncate text-capitalize ml-2 mb-0" style="color: #12336D;"><?= $other['jurusan'] ?></h6>
                        </div>
                    </a>
                <?php endforeach; ?>
            </div>
        </div>
    </div>

    <script>
        function changeTo(type='tryout') {
            if (type=='tryout') {
                btn = document.getElementById('btnTryOut');
                btn.setAttribute('class', 'btn bg-white text-dark font-weight-bold text-left rounded-0 px-3');
                btn.style="border-bottom: 2px solid black;";
                btn = document.getElementById('btnKuisHarian');
                btn.setAttribute('class', 'btn bg-white text-secondary font-weight-bold text-left rounded-0 px-3');
                btn.style="";
                document.getElementById('divTryOut').style="display: flex;";
                document.getElementById('divKuisHarian').style="display: none;";
            } else {
                btn = document.getElementById('btnKuisHarian');
                btn.setAttribute('class', 'btn bg-white text-dark font-weight-bold text-left rounded-0 px-3');
                btn.style="border-bottom: 2px solid black;";
                btn = document.getElementById('btnTryOut');
                btn.setAttribute('class', 'btn bg-white text-secondary font-weight-bold text-left rounded-0 px-3');
                btn.style="";
                document.getElementById('divKuisHarian').style="display: flex;";
                document.getElementById('divTryOut').style="display: none;";
            }
        }

        function tryOutTo(materi) {
            document.getElementsByClassName('tryout-active')[0].setAttribute('class', 'btn text-truncate border-10 mr-2 bg-white text-dark border');
            document.getElementById('btn'+materi).setAttribute('class', 'btn text-truncate border-10 mr-2 btn-primary tryout-active');

            document.getElementsByClassName('current-tryout')[0].setAttribute('style', 'display: none;');
            document.getElementsByClassName('current-tryout')[0].classList.remove('current-tryout');

            document.getElementById('div'+materi).setAttribute('style', 'display: flex;');
            document.getElementById('div'+materi).classList.add('current-tryout');
        }

        function kuisTo(materi) {
            document.getElementsByClassName('kuis-active')[0].setAttribute('class', 'btn text-truncate border-10 mr-2 bg-white text-dark border');
            document.getElementById('btnkuis'+materi).setAttribute('class', 'btn text-truncate border-10 mr-2 btn-primary kuis-active');

            document.getElementsByClassName('current-kuis')[0].setAttribute('style', 'display: none;');
            document.getElementsByClassName('current-kuis')[0].classList.remove('current-kuis');

            document.getElementById('divkuis'+materi).setAttribute('style', 'display: flex;');
            document.getElementById('divkuis'+materi).classList.add('current-kuis');
        }
    </script>
</div>
<?= $this->endSection(); ?>