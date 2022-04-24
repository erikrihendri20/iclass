<?= $this->extend('templates/index'); ?>
<?= $this->section('content'); ?>
<div class="content mb-3">
    <div class="min-w-screen md:h-screen bg-white flex items-stretch justify-center px-5 py-3">
        <div class="relative hidden md:block w-1/2 bg-mediumblue rounded-3xl py-10 px-10">
            <div><img class="h-8 w-auto mb-16" src="./images/iclass-white.png" alt="Logo" /></div>
            <div class="text-white lg:ml-8 mb-32">
                <div class="text-5xl italic font-bold leading-normal">Welcome <br /> Back!</div>
                <div
                    class="mt-8 text-base xl:text-lg xl:leading-loose font-medium w-64 xl:w-96 max-w-xs leading-loose">
                    Gimana persiapanmu dalam menghadapi USM Polstat STIS?</div>
                <div
                    class="mt-8 text-base xl:text-lg xl:leading-loose font-medium w-64 xl:w-96 max-w-xs leading-loose">
                    Yuk latihan soal tiap hari biar makin mantap persiapannya.</div>
            </div><img
                class="absolute hidden lg:block top-1/2 transform -translate-y-1/2 -right-10 max-w-xs object-cover object-center rounded"
                alt="img" src="./images/login.svg" />
        </div>
        <div
            class="w-full max-w-2xl m-auto md:w-1/2 py-10 xl:py-32 2xl:py-40 px-5 md:px-10 flex flex-col items-center justify-center">
            <div class="w-full lg:px-16">
                <div class="font-medium self-center text-xl sm:text-4xl text-gray-800">Masuk</div>
                <?= session()->flash; ?>
                <div class="mt-10">
                    <form method="POST" action="">
                        <div class="flex flex-col space-y-2 my-8">
                            <label for="username" class="mb-1 text-base font-medium tracking-wide text-gray-700">Username</label>
                            <input type="text" id="username" name="username" placeholder="username" required
                                class="text-sm xl:text-lg text-gray-700 placeholder-gray-500 px-4 rounded-2xl xl:rounded-3xl border border-gray-500 w-full py-2 focus:outline-none focus:border-lightblue" />
                        </div>
                        <div class="flex flex-col space-y-2 my-8">
                            <label for="password" class="mb-1 text-base font-medium tracking-wide text-gray-700">Password</label>
                            <input type="password" id="password" name="password" placeholder="password" required
                                class="text-sm xl:text-lg text-gray-700 placeholder-gray-500 px-4 rounded-2xl xl:rounded-3xl border border-gray-500 w-full py-2 focus:outline-none focus:border-lightblue" />
                        </div>
                        <div class="flex items-center justify-between mb-10">
                            <a class="flex" href="<?= base_url() ?>/daftar">
                                <span class="inline-flex text-xs sm:text-sm text-mediumblue hover:text-lightblue cursor-pointer">
                                    Daftar
                                </span>
                            </a>
                            <!-- <div class="flex" href="/login#"><span
                                    class="inline-flex text-xs sm:text-sm text-mediumblue hover:text-lightblue cursor-pointer">Lupa
                                    Password?</span></div> -->
                        </div>
                        <div class="flex justify-end mt-4">
                            <button type="submit" name="submit"
                                class="flex items-center justify-center focus:outline-none text-white font-bold bg-mediumblue hover:bg-lightblue rounded-full py-2 px-8 transition duration-150 ease-in">
                                <span class="text-sm">Masuk</span>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>