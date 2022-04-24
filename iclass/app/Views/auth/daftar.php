<?= $this->extend('templates/index'); ?>
<?= $this->section('content'); ?>
<?php $validation = service('validation') ?>
<div class="content mb-3">
    <div class="min-w-screen md:h-screen bg-white flex items-stretch justify-center px-5 py-3">
        <div class="hidden relative md:block w-1/2 bg-mediumblue rounded-3xl py-10 px-10 overflow-hidden bg-no-repeat bg-[length:350px_350px] bg-[url(&#x27;/images/register-blob.svg&#x27;)]">
            <div><img class="h-8 w-auto mb-16" src="./images/iclass-white.png" alt="Logo" /></div>
            <div class="text-white lg:ml-4 mb-32">
                <div class="text-5xl italic font-bold leading-normal">Register <br /> Account!</div>
            </div>
            <img class="absolute -bottom-1 -right-1 max-w-md md:max-w-lg object-cover object-center rounded opacity-90"
                alt="img" src="./images/register.svg" />
        </div>
        <div class="w-full max-w-2xl m-auto md:w-1/2 py-10 xl:py-28 2xl:py-32 px-5 md:px-10 flex flex-col items-center justify-center">
            <div class="w-full lg:px-16">
                <div class="font-medium self-center text-xl sm:text-4xl text-gray-800">Buat Akun Baru</div>
                <?= session()->flash; ?>
                <div class="mt-10 md:max-h-96 overflow-y-scroll md:pr-4">
                    <form method="POST" action="" enctype="multipart/form-data">
                        <div class="flex flex-col space-y-2 my-8">
                            <label for="name" class="mb-1 text-base font-medium tracking-wide text-gray-700">Name</label>
                            <input type="text" id="nama" name="nama" value="<?= old('nama'); ?>" placeholder=""
                                class="text-sm xl:text-lg text-gray-700 placeholder-gray-500 px-4 rounded-2xl xl:rounded-3xl border border-gray-500 w-full py-2 focus:outline-none focus:border-lightblue" />
                            <div class="text-danger ml-4">
                                <?= service('validation')->getError('nama'); ?>
                            </div>
                        </div>
                        <div class="flex flex-col space-y-2 my-8">
                            <label for="email" class="mb-1 text-base font-medium tracking-wide text-gray-700">Email</label>
                            <input type="text" id="email" name="email" value="<?= old('email'); ?>" placeholder=""
                                class="text-sm xl:text-lg text-gray-700 placeholder-gray-500 px-4 rounded-2xl xl:rounded-3xl border border-gray-500 w-full py-2 focus:outline-none focus:border-lightblue" />
                            <div class="text-danger ml-4">
                                <?= service('validation')->getError('email'); ?>
                            </div>
                        </div>
                        <div class="flex flex-col space-y-2 my-8">
                            <label for="username" class="mb-1 text-base font-medium tracking-wide text-gray-700">Username</label>
                            <input type="text" id="username" name="username" value="<?= old('username'); ?>" placeholder=""
                                class="text-sm xl:text-lg text-gray-700 placeholder-gray-500 px-4 rounded-2xl xl:rounded-3xl border border-gray-500 w-full py-2 focus:outline-none focus:border-lightblue" />
                            <div class="text-danger ml-4">
                                <?= service('validation')->getError('username'); ?>
                            </div>
                        </div>
                        <div class="flex flex-col space-y-2 my-8">
                            <label for="password" class="mb-1 text-base font-medium tracking-wide text-gray-700">Password</label>
                            <input type="password" id="password" value="<?= old('password'); ?>" name="password" placeholder=""
                                class="text-sm xl:text-lg text-gray-700 placeholder-gray-500 px-4 rounded-2xl xl:rounded-3xl border border-gray-500 w-full py-2 focus:outline-none focus:border-lightblue" />
                            <div class="text-danger ml-4">
                                <?= service('validation')->getError('password'); ?>
                            </div>
                        </div>
                        <div class="flex flex-col space-y-2 my-8">
                            <label for="konfirmasi-password" class="mb-1 text-base font-medium tracking-wide text-gray-700">Password Confirmation</label>
                            <input type="password" id="konfirmasi-password" name="konfirmasi-password" value="<?= old('konfirmasi-password'); ?>" placeholder=""
                                class="text-sm xl:text-lg text-gray-700 placeholder-gray-500 px-4 rounded-2xl xl:rounded-3xl border border-gray-500 w-full py-2 focus:outline-none focus:border-lightblue" />
                            <div class="text-danger ml-4">
                                <?= service('validation')->getError('konfirmasi-password'); ?>
                            </div>
                        </div>
                        <div class="flex flex-col space-y-2 my-8">
                            <label for="jurusan" class="mb-1 text-base font-medium tracking-wide text-gray-700">Kelas</label>
                            <select name="jurusan" id="jurusan" value="<?= old('jurusan'); ?>"
                                class="bg-white text-sm xl:text-lg text-gray-700 placeholder-gray-500 px-4 rounded-2xl xl:rounded-3xl border border-gray-500 w-full py-2 focus:outline-none focus:border-lightblue">
                                <option value="none" selected disabled hidden>Pilih kelas</option>
                                <option class="fs-16" value="10" onclick="ubahPaket('kelas');">Kelas 10</option>
                                <option class="fs-16" value="11" onclick="ubahPaket('kelas');">Kelas 11</option>
                                <option class="fs-16" value="12" onclick="ubahPaket('kelas');">Kelas 12</option>
                                <option class="fs-16" value="intensif" onclick="ubahPaket('intensif');">Intensif</option>
                                <option class="fs-16" value="tryout" onclick="ubahPaket('tryout');">Tryout</option>
                            </select>
                            <div class="text-danger ml-4">
                                <?= service('validation')->getError('jurusan'); ?>
                            </div>
                        </div>
                        <div class="flex flex-col space-y-2 my-8">
                            <label for="telepon" class="mb-1 text-base font-medium tracking-wide text-gray-700">Nomor WhatsApp</label>
                            <input type="text" id="telepon" name="telepon" value="<?= old('telepon'); ?>" placeholder=""
                                class="text-sm xl:text-lg text-gray-700 placeholder-gray-500 px-4 rounded-2xl xl:rounded-3xl border border-gray-500 w-full py-2 focus:outline-none focus:border-lightblue" />
                            <div class="text-danger ml-4">
                                <?= service('validation')->getError('telepon'); ?>
                            </div>
                        </div>
                        <div class="flex flex-col space-y-2 my-8">
                            <label for="kode-paket" class="mb-1 text-base font-medium tracking-wide text-gray-700">Pilih Paket</label>
                            <select id="kode-paket" name="kode-paket" value="<?= old('kode-paket'); ?>"
                                class="bg-white text-sm xl:text-lg text-gray-700 placeholder-gray-500 px-4 rounded-2xl xl:rounded-3xl border border-gray-500 w-full py-2 focus:outline-none focus:border-lightblue"></select>
                            <div class="text-danger ml-4">
                                <?= service('validation')->getError('kode-paket'); ?>
                            </div>
                        </div>
                        <div class="mt-8">
                            <div class="flex justify-end mt-4">
                                <button type="submit" name="submit"
                                    class="flex items-center justify-center focus:outline-none text-white font-bold bg-mediumblue hover:bg-lightblue rounded-full py-2 px-8 transition duration-150 ease-in">
                                    <span class="text-sm">Daftar</span>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.getElementById('jurusan').addEventListener('change', function(){
            var paket = document.getElementById('kode-paket');
            paket.removeAttribute('disabled');

            var kelas = this.value;
            if (kelas == 'intensif') {
                paket.innerHTML=`<option class="fs-16" value="4" selected>Intensif</option>
                                <option class="fs-16" value="5">Intensif+</option>
                                <option class="fs-16" value="7">SKD</option>`;
            } else if (kelas == 'tryout') {
                paket.innerHTML=`<option class="fs-16" value="6" selected>Tryout</option>`;
            } else {
                paket.innerHTML=`<option class="fs-16" value="1" selected>Reguler</option>
                                <option class="fs-16" value="2">Premium</option>
                                <option class="fs-16" value="3">Premium+</option>`;
            }
        });
    </script>
</div>
<?= $this->endSection(); ?>