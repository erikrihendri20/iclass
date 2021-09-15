<?= $this->extend('templates/index'); ?>
<?= $this->section('content'); ?>
<div class="content w-100 mb-0">
    <div class="row mnya-5 px5 py5" style="background-image: linear-gradient(135deg, #008FDE, #005BBB); margin-top: -35px; border-radius: 0 0 20px 20px;">
        <div class="col-8 mt5 pl-0">
            <div class="row bg-primary border-20 mx-0 px5 py5">
                <div class="col-4 pl-0">
                    <div class="row justify-content-center align-content-center h-100 mx-0">
                        <img src="<?= base_url() ?>/img/Aset/Asset 471@300x (1).png" alt="" class="w-100">
                    </div>
                </div>
                <div class="col-8 px-0">
                    <div class="row mx-0">
                        <div class="form-group">
                            <select class="form-control font-weight-bold mx-auto" id="pilih-bulan">
                                <?php foreach ($bulan as $b) { ?>
                                    <option value="<?= $b ?>" class="font-weight-bold"<?php echo ($b==$bulanPilih) ? ' selected' : ''; ?>><?= $b ?></option>
                                <?php } ?>
                            </select>
                        </div>
                        <div class="col-12 bg-white p-3" style="border-radius: 10px;">
                            <div id="row-materi" class="row justify-content-center align-content-start mx-0" style="height: 250px; overflow-y: auto;">
                                <?php for ($i=0; $i<sizeof($materi); $i++) { ?>
                                    <?php if ($i==0) { ?>
                                        <div class="d-block bg-primary h5 text-white text-truncate mr-2 px-3 py-2" style="width: 85%; border-radius: 7px;"><?= $materi[$i]['materi'] ?></div>
                                        <div class="bg-primary h5 text-center text-white px-1 py-2" style="width: 10%; border-radius: 7px;"><?= $materi[$i]['nilai'] ?>%</div>
                                    <?php } else if ($i==1) { ?>
                                        <div class="d-block h5 text-white text-truncate mr-2 px-3 py-2" style="background-color: #12336D; width: 85%; border-radius: 7px;"><?= $materi[$i]['materi'] ?></div>
                                        <div class="h5 text-center text-white px-1 py-2" style="background-color: #12336D; width: 10%; border-radius: 7px;"><?= $materi[$i]['nilai'] ?>%</div>
                                    <?php } else if ($i==2) { ?>
                                        <div class="d-block bg-warning h5 text-truncate mr-2 px-3 py-2" style="color: #12336D; width: 85%; border-radius: 7px;"><?= $materi[$i]['materi'] ?></div>
                                        <div class="bg-warning h5 text-center text-white px-1 py-2" style="width: 10%; border-radius: 7px;"><?= $materi[$i]['nilai'] ?>%</div>
                                    <?php } else if ($i==3) { ?>
                                        <div class="d-block h5 text-white text-truncate mr-2 px-3 py-2" style="background-color: darkgrey; width: 85%; border-radius: 7px;"><?= $materi[$i]['materi'] ?></div>
                                        <div class="h5 text-center text-white px-1 py-2" style="background-color: darkgrey; width: 10%; border-radius: 7px;"><?= $materi[$i]['nilai'] ?>%</div>
                                    <?php } else { ?>
                                        <div class="d-block bg-white border h5 text-truncate mr-2 px-3 py-2" style="color: #12336D; width: 85%; border-radius: 7px;"><?= $materi[$i]['materi'] ?></div>
                                        <div class="bg-primary h5 text-center text-white px-1 py-2" style="width: 10%; border-radius: 7px;"><?= $materi[$i]['nilai'] ?>%</div>
                                    <?php } ?>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-4 mt5 pr-0">
            <div class="row bg-white border-20 h-100 mx-0 p-3">
                <h4 class="font-weight-bold text-center w-100" style="height: 10%; color: #12336D;">Diagram</h4>
                <div id="pemahamanmu" class="col-12 px-0" style="height: 90%;"></div>
                <img src="<?= base_url() ?>/img/Aset/1111.png" alt="" class="position-absolute" style="width: 35%; top: 32.5%; left: 33%;">
            </div>
        </div>
    </div>
    <div class="row mt5 mnya-5 px5">
        <div class="col-12 px-0">
            <h2 class="bg-primary text-white text-center font-weight-bold w-25 mb-0 px-4 py-3" style="border-radius: 20px 20px 0 0;">Try Out</h2>
            <div class="row shadow mx-0 px5 py5" style="border-radius: 0 20px 20px 20px;">
                <div class="col-8 bg-secondary border-20 p-3">
                    <div id="row-tryout" class="row justify-content-center align-content-start mx-0" style="height: 250px; overflow-y: auto;">
                        <?php for ($i=0; $i<sizeof($submateri); $i++) {
                            if (array_key_exists('tryout', $submateri[$i])) {
                            if ($i==0) { ?>
                                <div class="bg-primary h4 text-white mt-3 mb-0 px-3 py-1" style="width: 97%; border-radius: 7px;"><?= $submateri[$i]['materi'] ?></div>
                                <div class="bg-white h5 mt-1 mb-0 px-2 py-1" style="width: 92%; margin-left: 5%; color: #12336D; border-radius: 7px;">
                                    <?= $submateri[$i]['submateri'] ?>
                                    <span class="bg-primary text-white float-right p-1" style="border-radius: 7px;"><?= $submateri[$i]['tryout'] ?>%</span>
                                </div>
                        <?php } else if ($submateri[$i]['materi']==$submateri[$i-1]['materi']) {
                                if (array_key_exists('tryout', $submateri[$i-1])) { ?>        
                                    <div class="bg-white h5 mt-1 mb-0 px-2 py-1" style="width: 92%; margin-left: 5%; color: #12336D; border-radius: 7px;">
                                        <?= $submateri[$i]['submateri'] ?>
                                        <span class="bg-primary text-white float-right p-1" style="border-radius: 7px;"><?= $submateri[$i]['tryout'] ?>%</span>
                                    </div>
                                <?php } else { ?>
                                    <div class="bg-primary h4 text-white mt-3 mb-0 px-3 py-1" style="width: 97%; border-radius: 7px;"><?= $submateri[$i]['materi'] ?></div>
                                    <div class="bg-white h5 mt-1 mb-0 px-2 py-1" style="width: 92%; margin-left: 5%; color: #12336D; border-radius: 7px;">
                                        <?= $submateri[$i]['submateri'] ?>
                                        <span class="bg-primary text-white float-right p-1" style="border-radius: 7px;"><?= $submateri[$i]['tryout'] ?>%</span>
                                    </div>
                                <?php } ?>
                        <?php } else { ?>
                                <div class="bg-primary h4 text-white mt-3 mb-0 px-3 py-1" style="width: 97%; border-radius: 7px;"><?= $submateri[$i]['materi'] ?></div>
                                <div class="bg-white h5 mt-1 mb-0 px-2 py-1" style="width: 92%; margin-left: 5%; color: #12336D; border-radius: 7px;">
                                    <?= $submateri[$i]['submateri'] ?>
                                    <span class="bg-primary text-white float-right p-1" style="border-radius: 7px;"><?= $submateri[$i]['tryout'] ?>%</span>
                                </div>
                        <?php } } } ?>
                    </div>
                </div>
                <div class="col-4 pl-0">
                    <div class="row justify-content-center align-content-center mx-0 p-3">
                        <img src="<?= base_url() ?>/img/Aset/Asset 472@300x.png" alt="" class="w-100">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row mt5 mnya-5 px5">
        <div class="col-12 px-0">
            <h2 class="bg-primary text-white text-center font-weight-bold shadow w-25 mb-0 px-4 py-3" style="border-radius: 20px 20px 0 0;">Kuis Rutin</h2>
            <div class="row bg-primary shadow mx-0 px5 py5" style="border-radius: 0 20px 20px 20px;">
                <div class="col-4 pl-0">
                    <div class="row bg-white border-20 justify-content-center align-content-center mx-0 p-3">
                        <img src="<?= base_url() ?>/img/Aset/Asset 368@300x.png" alt="" class="w-100">
                    </div>
                </div>
                <div class="col-8 bg-secondary border-20 p-3">
                    <div id="row-kuis" class="row justify-content-center align-content-start mx-0" style="height: 250px; overflow-y: auto;">
                        <?php for ($i=0; $i<sizeof($submateri); $i++) {
                            if (array_key_exists('kuis', $submateri[$i])) {
                            if ($i==0) { ?>
                                <div class="bg-primary h4 text-white mt-3 mb-0 px-3 py-1" style="width: 97%; border-radius: 7px;"><?= $submateri[$i]['materi'] ?></div>
                                <div class="bg-white h5 mt-1 mb-0 px-2 py-1" style="width: 92%; margin-left: 5%; color: #12336D; border-radius: 7px;">
                                    <?= $submateri[$i]['submateri'] ?>
                                    <span class="bg-primary text-white float-right p-1" style="border-radius: 7px;"><?= $submateri[$i]['kuis'] ?>%</span>
                                </div>
                        <?php } else if ($submateri[$i]['materi']==$submateri[$i-1]['materi']) {
                                if (array_key_exists('kuis', $submateri[$i-1])) { ?>        
                                    <div class="bg-white h5 mt-1 mb-0 px-2 py-1" style="width: 92%; margin-left: 5%; color: #12336D; border-radius: 7px;">
                                        <?= $submateri[$i]['submateri'] ?>
                                        <span class="bg-primary text-white float-right p-1" style="border-radius: 7px;"><?= $submateri[$i]['kuis'] ?>%</span>
                                    </div>
                                <?php } else { ?>
                                    <div class="bg-primary h4 text-white mt-3 mb-0 px-3 py-1" style="width: 97%; border-radius: 7px;">Trigonometri</div>
                                    <div class="bg-white h5 mt-1 mb-0 px-2 py-1" style="width: 92%; margin-left: 5%; color: #12336D; border-radius: 7px;">
                                        <?= $submateri[$i]['submateri'] ?>
                                        <span class="bg-primary text-white float-right p-1" style="border-radius: 7px;"><?= $submateri[$i]['kuis'] ?>%</span>
                                    </div>
                                <?php } ?>
                        <?php } else { ?>
                                <div class="bg-primary h4 text-white mt-3 mb-0 px-3 py-1" style="width: 97%; border-radius: 7px;">Trigonometri</div>
                                <div class="bg-white h5 mt-1 mb-0 px-2 py-1" style="width: 92%; margin-left: 5%; color: #12336D; border-radius: 7px;">
                                    <?= $submateri[$i]['submateri'] ?>
                                    <span class="bg-primary text-white float-right p-1" style="border-radius: 7px;"><?= $submateri[$i]['kuis'] ?>%</span>
                                </div>
                        <?php } } } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row mx-0 mt5"></div>
    <script>
        document.getElementById('pilih-bulan').addEventListener('change', function() {
            window.location.href="<?= base_url() ?>/peserta/nilai/"+document.getElementById('pilih-bulan').value;
        });

        function bangunChart() {
                var data = [];
                <?php for ($i=0; $i<4; $i++) {
                    if (!empty($materi[$i])) { ?>
                        var d = {x: "<?= $materi[$i]['materi'] ?>", value: <?= $materi[$i]['nilai'] ?>};
                        data.push(d);
                    <?php }
                } ?>

                var chart = anychart.pie();
                chart.data(data);
                chart.innerRadius('40%');
                chart.container('pemahamanmu');
                chart.labels().position("inside");
                chart.insideLabelsOffset("-75%");
                chart.draw();

                warnaChart();
            }

            bangunChart();

            document.getElementById('pemahamanmu').addEventListener('mouseover', function() {
                warnaChart();
            });

            document.getElementById('pemahamanmu').addEventListener('mouseleave', function() {
                warnaChart();
            });

            function warnaChart() {
                document.getElementsByClassName('anychart-credits')[0].setAttribute('style', 'display: none;');
                setChart('ac_path_h', '#0064D3');
                setChart('ac_path_i', '#12336D');
                setChart('ac_path_j', '#FECE24');
                setChart('ac_path_k', 'darkgrey');
                document.getElementById('ac_layer_g').setAttribute('style', 'display: none;');
            }

            function setChart(id, color) {
                var chart = document.getElementById(id);
                chart.setAttribute('fill', color);
                chart.setAttribute('class', 'shadow');
                chart.setAttribute('style', 'border: 5px solid white; cursor: pointer;');
            }
    </script>
</div>
<?= $this->endSection(); ?>