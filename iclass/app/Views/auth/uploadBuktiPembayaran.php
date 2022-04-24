<?= $this->extend('templates/index'); ?>
<?= $this->section('content'); ?>
<?php $validation = service('validation') ?>
<div class="content mb-3 px-4">
    <div class="min-w-screen md:h-screen bg-white flex items-stretch justify-center px-5 py-5">
        <div class="relative overflow-hidden hidden md:block w-1/2 bg-mediumblue rounded-3xl py-10 px-10">
            <div><img class="h-8 w-auto mb-16" src="<?= base_url() ?>/images/iclass-white.png" alt="Logo" /></div>
            <div class="text-white lg:ml-8 mb-32">
                <div class="text-5xl italic font-bold leading-normal">Waiting <br /> Room!</div>
                <div class="mt-8 text-base xl:text-lg xl:leading-loose font-medium w-64 max-w-xs leading-loose">
                    Silahkan melakukan upload bukti pembayaran untuk menikmati layanan iClass</div>
            </div><img
                class="absolute top-1/2 -right-1/2 lg:-right-1/4 transform -translate-y-1/2 -translate-x-1/5 lg:-translate-x-1/4 max-w-xs 2xl:max-w-lg object-cover object-center rounded"
                alt="img" src="<?= base_url() ?>/images/waiting-room.svg" />
        </div>
        <div
            class="w-full max-w-2xl m-auto md:w-1/2 py-10 xl:py-32 2xl:py-40 px-5 md:px-10 flex flex-col items-center justify-center">
            <div class="w-full lg:px-16">
                <div class="font-medium self-center text-xl sm:text-3xl text-gray-800 leading-loose">Upload Bukti Pembayaran</div>
                <?= session()->flash; ?>
                <div class="mt-10">
                    <form method="POST" action="" enctype="multipart/form-data">
                        <div class="flex flex-col space-y-2 my-8">
                            <label for="metode" class="mb-1 text-base font-medium tracking-wide text-gray-700">Pilih Metode Pembayaran</label>
                            <select class="bg-white text-sm xl:text-lg text-gray-700 placeholder-gray-500 px-5 rounded-2xl xl:rounded-3xl border border-gray-500 w-full py-2 focus:outline-none focus:border-lightblue"
                                onchange="changeMetodePembayaran(this.value)">
                                <option value="bri" onclick="changeMetodePembayaran('bri')" selected>BRI</option>
                                <option value="ovo" onclick="changeMetodePembayaran('ovo')">OVO</option>
                                <option value="gopay" onclick="changeMetodePembayaran('gopay')">GoPay</option>
                                <option value="dana" onclick="changeMetodePembayaran('dana')">Dana</option>
                                <option value="linkaja" onclick="changeMetodePembayaran('linkaja')">Link Aja</option>
                            </select>
                            <p id="nomorPembayaran" class="bg-mediumblue text-white font-bold rounded-lg px-4 py-2">0344-0110-5184-503 a.n Ivan Masduqi Mahfuds</p>
                        </div>
                        <div class="flex flex-col space-y-2 my-8">
                            <label for="file-bukti" class="mb-1 text-base font-medium tracking-wide text-gray-700">Upload Photo</label>
                            <div class="flex items-center justify-center w-full">
                                <label class="flex items-center justify-end border border-gray-500 w-full pl-5 pr-1 xl:pr-2 py-1 rounded-2xl xl:rounded-3xl group">
                                    <p class="lowercase rounded-2xl border border-gray-400 px-4 py-2 text-xs group-hover:border-lightblue transition duration-100 tracking-wider">
                                        Pilih File
                                    </p>
                                    <input type="file" class="hidden" onchange="preview()" id="file-bukti" name="bukti-pembayaran" />
                                </label>
                            </div>
                            <div class="text-danger ml-4">
                                <?= service('validation')->getError('bukti-pembayaran') ?>
                            </div>
                        </div>
                        <div class="flex justify-end mt-4">
                            <button type="submit" name="submit" class="flex items-center justify-center focus:outline-none text-white font-bold bg-mediumblue hover:bg-lightblue rounded-full py-2 px-8 transition duration-150 ease-in">
                                <span class="text-sm">Submit</span>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>
        function changeMetodePembayaran(metode) {
            let nomor;
            switch (metode) {
                case 'bri': nomor="0344-0110-5184-503 a.n Ivan Masduqi Mahfuds"; break;
                case 'ovo': nomor="0812-1647-3536 a.n Ivan"; break;
                case 'gopay': nomor="0812-1647-3536 a.n Ivan"; break;
                case 'dana': nomor="0812-1647-3536 a.n Ivan"; break;
                case 'linkaja': nomor="0812-1647-3536 a.n Ivan Masduqi Mahfuds"; break;
            }
            console.log(metode);
            document.getElementById('nomorPembayaran').innerHTML=nomor;
        }
    </script>
</div>
<?= $this->endSection(); ?>