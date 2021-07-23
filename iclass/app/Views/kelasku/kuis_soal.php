<?= $this->extend('templates/index'); ?>
<?= $this->section('content'); ?>
<div class="content my-3 bg-white">
    <!-- Content-->
    <div class="display-4 text-primary text-center font-weight-bold mb-4 mx-5">
        <p>KUIS RUTIN</p>
    </div>
    <div class="p-5 mnya-5 w-75 bg-white rounded text-center mx-auto" style="-webkit-box-shadow: 0px 6px 20px 0px rgba(107,107,107,1);
        -moz-box-shadow: 0px 6px 20px 0px rgba(107,107,107,1);
        box-shadow: 0px 6px 20px 0px rgba(107,107,107,1);">
        <!-- <img src="" alt="Soal_no_<php echo $_GET['i']; ?>"> -->
        <img class="w-100" src="<?= base_url() ?>/img/kuis/<?= session('kode_kuis') ?>/soal/<?= $kuis[0]['soal'] ?>">
    </div>
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8 text-center">
            <span class="text-center mx-4 my-2">
                <button id="A" class="btn btn-primary choice" style="width: 60px; height: 60px; border-radius: 35px; text-align: center;">
                    <h3 class="font-weight-bold">A</h3>
                </button>
            </span>
            <span class="text-center mx-4 my-2">
                <button id="B" class="btn btn-primary choice" style="width: 60px; height: 60px; border-radius: 35px; text-align: center;">
                    <h3 class="font-weight-bold">B</h3>
                </button>
            </span>
            <span class="text-center mx-4 my-2">
                <button id="C" class="btn btn-primary choice" style="width: 60px; height: 60px; border-radius: 35px; text-align: center;">
                    <h3 class="font-weight-bold">C</h3>
                </button>
            </span>
            <span class="text-center mx-4 my-2">
                <button id="D" class="btn btn-primary choice" style="width: 60px; height: 60px; border-radius: 35px; text-align: center;">
                    <h3 class="font-weight-bold">D</h3>
                </button>
            </span>
            <span class="text-center mx-4 my-2">
                <button id="E" class="btn btn-primary choice" style="width: 60px; height: 60px; border-radius: 35px; text-align: center;">
                    <h3 class="font-weight-bold">E</h3>
                </button>
            </span>
        </div>
        <div class="col-md-2"></div>
    </div>

    <div class="mx-5 my-5 text-right pb5">
        <button id="submit" onclick="pembahasan()" class="btn btn-primary p-2" style="border-radius:30px">
            <h2>Saya yakin</h2>
        </button>
    </div>

    <form action="<?= base_url('kelasku/kuis_pembahasan') ?>" method="post" id='soal'>
        <input type="hidden" name="jawaban" id="jawaban_soal">
        <input type="hidden" name="no_kuis" value="<?= $kuis[0]['no_kuis'] ?>">>
    </form>

</div>
<script>
    A = document.getElementById('A');
    B = document.getElementById('B');
    C = document.getElementById('C');
    D = document.getElementById('D');
    E = document.getElementById('E');

    A.addEventListener("click", function() {
        $(".choice").removeClass("btn-warning");
        $(".choice").removeClass("btn-primary");
        $(".choice").addClass("btn-primary");
        A.classList.remove("btn-primary");
        A.classList.add("btn-warning");
        $('#jawaban_soal').val('A');
    });

    B.addEventListener("click", function() {
        $(".choice").removeClass("btn-warning");
        $(".choice").removeClass("btn-primary");
        $(".choice").addClass("btn-primary");
        B.classList.remove("btn-primary");
        B.classList.add("btn-warning");
        $('#jawaban_soal').val('B');
    });

    C.addEventListener("click", function() {
        $(".choice").removeClass("btn-warning");
        $(".choice").removeClass("btn-primary");
        $(".choice").addClass("btn-primary");
        C.classList.remove("btn-primary");
        C.classList.add("btn-warning");
        $('#jawaban_soal').val('C');
    });

    D.addEventListener("click", function() {
        $(".choice").removeClass("btn-warning");
        $(".choice").removeClass("btn-primary");
        $(".choice").addClass("btn-primary");
        D.classList.remove("btn-primary");
        D.classList.add("btn-warning");
        $('#jawaban_soal').val('D');
    });

    E.addEventListener("click", function() {
        $(".choice").removeClass("btn-warning");
        $(".choice").removeClass("btn-primary");
        $(".choice").addClass("btn-primary");
        E.classList.remove("btn-primary");
        E.classList.add("btn-warning");
        $('#jawaban_soal').val('E');
    });

    function pembahasan() {
        if ($("#jawaban_soal").val() == "") {
            $("#jawaban_soal").val("kosong");
            $("#soal").submit();
        } else {
            $("#soal").submit();
        }
    }
</script>
<?= $this->endSection(); ?>