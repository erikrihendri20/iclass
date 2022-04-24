<?= $this->extend('templates/index'); ?>
<?= $this->section('content'); ?>
<div class="content mb-0">
    <div id="hero" class="container mx-auto px-8 pt-24 pb-12 lg:h-screen max-w-7xl flex lg:flex-row flex-col items-center relative">
        <div class="lg:flex-grow lg:w-1/3 lg:mr-4 xl:max-w-xl flex-1 flex flex-col lg:items-start lg:text-left mb-16 lg:mb-0 items-center text-center">
            <div class="mb-8">
                <h1 class="text-6xl mb-2 text-left text-darkblue">Let&#x27;s start</h1>
                <h1 class="text-6xl mb-2 text-left font-bold text-darkblue">the new learning</h1>
                <h1 class="text-6xl mb-2 text-left font-bold text-lightblue">Xperience</h1>
            </div>
            <div>
                <p class="mb-8 text-lg leading-relaxed font-medium text-left text-gray-700">Tau gak sih, kalau pendaftar USM
                    Polstat STIS tahun ini mencapai 24.002 peserta? Itu artinya kamu harus jadi yang terbaik dari
                    setiap 40 pendaftar lainnya.</p>
            </div>
            <div class="mb-12">
                <div class="bg-lightblue hover:bg-mediumblue rounded-full px-8 py-3 text-sm font-bold text-white transition duration-300 cursor-pointer"
                    href="<?= base_url() ?>/daftar">
                    <div>Daftar Sekarang</div>
                </div>
            </div>
            <div class="lg:flex items-center">
                <div class="hidden lg:flex items-center overflow-hidden">
                    <img class="inline-block h-12 w-12 rounded-full text-white border-2 border-white object-cover object-center undefined"
                        src="<?= base_url() ?>/img/Aset/testi/1.png" alt="" />
                    <img class="inline-block h-12 w-12 rounded-full text-white border-2 border-white object-cover object-center -ml-4"
                        src="<?= base_url() ?>/img/Aset/testi/2.png" alt="" />
                    <img class="inline-block h-12 w-12 rounded-full text-white border-2 border-white object-cover object-center -ml-4"
                        src="<?= base_url() ?>/img/Aset/testi/3.png" alt="" />
                </div>
                <div class="ml-4">
                    <div class="text-2xl font-bold text-left text-darkblue">33%</div>
                    <div class="text-base text-left">Peserta iclass diterima di Polstat STIS</div>
                </div>
            </div>
        </div>
        <div class="xl:absolute xl:top-1/2 xl:transform xl:-translate-y-1/2 xl:-right-0 xl:max-w-7xl lg:w-2/4 w-5/6">
            <img class="object-cover object-center rounded" alt="hero" src="./images/computers.svg" /></div>
    </div>
    <section id="promotions" class="container mx-auto max-w-6xl text-gray-700 body-font">
        <div class="flex px-5 py-12 md:flex-row-reverse flex-col items-center md:items-stretch">
            <div id="carousel1" class="carousel slide w-5/6 md:w-1/2 h-max md:h-auto my-8" data-ride="carousel" data-interval="10000" data-pause="hover">
                <ol class="carousel-indicators">
                    <li data-target="#carousel1" style="width: 10px; height: 10px; border-radius: 100%;" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel1" style="width: 10px; height: 10px; border-radius: 100%;" data-slide-to="1"></li>
                    <li data-target="#carousel1" style="width: 10px; height: 10px; border-radius: 100%;" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="h-full flex items-center mb-8">
                            <div>
                                <div class="text-2xl">
                                    <div class="text-darkblue">Kenali</div>
                                    <div class="font-bold text-darkblue">Potensimu</div>
                                </div>
                                <div class="mt-4 mb-12 text-lg leading-relaxed">Di iClass kamu bisa monitoring hasil
                                    belajarmu. Mulai dari materi hingga sub materi yang belum kamu kuasai. Hal itu
                                    akan sangat berguna untuk mengevaluasi hasil belajarmu selama ini.</div>
                                <div>
                                    <div class="flex items-center my-8">
                                        <div class=" border border-gray-200 p-2 rounded-2xl">
                                            <div
                                                class="bg-mediumblue w-12 h-12 hidden md:flex items-center p-3 rounded-2xl">
                                                <img class="object-cover object-center rounded" alt="hero"
                                                    src="./images/promotions-graph.svg" /></div>
                                        </div>
                                        <div class="ml-4">
                                            <div class="text-base mb-1 font-bold">Laporan Perkembangan Belajar</div>
                                            <div class="text-base">Laporan mencakup materi hingga soal materi</div>
                                        </div>
                                    </div>
                                    <div class="flex items-center my-8">
                                        <div class=" border border-gray-200 p-2 rounded-2xl">
                                            <div
                                                class="bg-mediumblue w-12 h-12 hidden md:flex items-center p-3 rounded-2xl">
                                                <img class="object-cover object-center rounded" alt="hero"
                                                    src="./images/promotions-trophy.svg" /></div>
                                        </div>
                                        <div class="ml-4">
                                            <div class="text-base mb-1 font-bold">Try Out Bulanan</div>
                                            <div class="text-base">Uji kemampuanmu melalui try out rutin setiap
                                                bulan.</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="h-full flex items-center mb-8">
                            <div>
                                <div class="text-2xl">
                                    <div class="text-darkblue">Ratusan</div>
                                    <div class="font-bold text-darkblue">Video Pembelajaran</div>
                                </div>
                                <div class="mt-4 mb-12 text-lg leading-relaxed">Video materi yang dapat diakses
                                    selama 24 jam dan disertai dengan contoh soal yang interaktif dapat membuat
                                    kalian tidak bosan untuk belajar mandiri.</div>
                                <div>
                                    <div class="flex items-center my-8">
                                        <div class=" border border-gray-200 p-2 rounded-2xl">
                                            <div
                                                class="bg-mediumblue w-12 h-12 hidden md:flex items-center p-3 rounded-2xl">
                                                <img class="object-cover object-center rounded" alt="hero"
                                                    src="./images/promotions-videos.svg" /></div>
                                        </div>
                                        <div class="ml-4">
                                            <div class="text-base mb-1 font-bold">Video Pembelajaran</div>
                                            <div class="text-base">Bisa diakses kapanpun dan dimanapun</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="h-full flex items-center mb-8">
                            <div>
                                <div class="text-2xl">
                                    <div class="text-darkblue">Butuh Tempat</div>
                                    <div class="font-bold text-darkblue">Konsultasi?</div>
                                </div>
                                <div class="mt-4 mb-12 leading-relaxed">Tenang, di iClass kamu akan mendapatkan
                                    layanan konsultasi via WhatsApp 24 jam. Konsultasi bebas mengenai materi, soal,
                                    maupun seputar Politeknik Statistika STIS.</div>
                                <div>
                                    <div class="flex items-center my-8">
                                        <div class=" border border-gray-200 p-2 rounded-2xl">
                                            <div
                                                class="bg-mediumblue w-12 h-12 hidden md:flex items-center p-3 rounded-2xl">
                                                <img class="object-cover object-center rounded" alt="hero"
                                                    src="./images/promotions-call.svg" /></div>
                                        </div>
                                        <div class="ml-4">
                                            <div class="text-base mb-1 font-bold">Layanan Konsultasi Via Whatsapp
                                            </div>
                                            <div class="text-base">Tentor yang bisa kamu chat setiap saat.</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="lg:max-w-md lg:w-full md:w-1/2 w-5/6 mb-10 md:mb-0 md:mr-8"><img
                    class="object-cover object-center rounded" alt="promotions"
                    src="./images/promotions-phone.png" /></div>
        </div>
    </section>
    <section id="packet" class="container mx-auto max-w-7xl px-5 py-12 text-gray-700 body-font">
        <div class="text-center">
            <div class="text-2xl text-darkblue">Pilih paket sesuai kelas yang kamu</div>
            <div class="text-2xl font-bold text-darkblue">Tempuh saat ini</div>
        </div>
        <div>
            <div id="carousel2" class="carousel slide my-8 h-max" data-ride="carousel" data-interval="10000" data-pause="hover">
                <ol class="carousel-indicators">
                    <li data-target="#carousel2" style="width: 10px; height: 10px; border-radius: 100%;" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel2" style="width: 10px; height: 10px; border-radius: 100%;" data-slide-to="1"></li>
                    <li data-target="#carousel2" style="width: 10px; height: 10px; border-radius: 100%;" data-slide-to="2"></li>
                    <li data-target="#carousel2" style="width: 10px; height: 10px; border-radius: 100%;" data-slide-to="3"></li>
                    <li data-target="#carousel2" style="width: 10px; height: 10px; border-radius: 100%;" data-slide-to="4"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="h-full md:w-full md:max-w-2xl mx-auto mb-12 px-5">
                            <div>
                                <div class="my-8 min-w-fit max-w-md"><img class="object-cover object-center rounded"
                                        alt="Intensif" src="<?= base_url() ?>/images/packets-intensif.svg" /></div>
                            </div>
                            <div class="text-center">
                                <div class="text-xl text-darkblue font-bold mb-4">Intensif</div>
                                <div class="text-base leading-relaxed">Kelas yang dirancang untuk kamu yang ingin
                                    mempersiap kan diri untuk tes matematika Polstat STIS dengan materi dan
                                    pembahasan yang super detail dan mudah dipahami</div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="h-full md:w-full md:max-w-2xl mx-auto mb-12 px-5">
                            <div>
                                <div class="my-8 min-w-fit max-w-md"><img class="object-cover object-center rounded"
                                        alt="Intensif +" src="<?= base_url() ?>/images/packets-intensif+.svg" /></div>
                            </div>
                            <div class="text-center">
                                <div class="text-xl text-darkblue font-bold mb-4">Intensif +</div>
                                <div class="text-base leading-relaxed">Kelas yang dirancang sama seperti kelas
                                    intensif, tetapi dengan tambahan materi SKD (Seleksi Kemampuan Dasar) untuk
                                    memantapkan persiapanmu dalam menghadapi tes Polstat STIS</div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="h-full md:w-full md:max-w-2xl mx-auto mb-12 px-5">
                            <div>
                                <div class="my-8 min-w-fit max-w-md"><img class="object-cover object-center rounded"
                                        alt="Paket Reguler" src="<?= base_url() ?>/images/packets-regular.svg" /></div>
                            </div>
                            <div class="text-center">
                                <div class="text-xl text-darkblue font-bold mb-4">Paket Reguler</div>
                                <div class="text-base leading-relaxed">Pilihan paket yang cocok buat kamu yang
                                    bertipe belajar dimanapun dan kapanpun</div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="h-full md:w-full md:max-w-2xl mx-auto mb-12 px-5">
                            <div>
                                <div class="my-8 min-w-fit max-w-md"><img class="object-cover object-center rounded"
                                        alt="Premium" src="<?= base_url() ?>/images/packets-premium.svg" /></div>
                            </div>
                            <div class="text-center">
                                <div class="text-xl text-darkblue font-bold mb-4">Premium</div>
                                <div class="text-base leading-relaxed">Pilihan paket yang dirancang buat kamu yang
                                    hanya ingin mengulas sekilas materi yang telah diajarkan di sekolah</div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="h-full md:w-full md:max-w-2xl mx-auto mb-12 px-5">
                            <div>
                                <div class="my-8 min-w-fit max-w-md"><img class="object-cover object-center rounded"
                                        alt="Premium +" src="<?= base_url() ?>/images/packets-premium+.svg" /></div>
                            </div>
                            <div class="text-center">
                                <div class="text-xl text-darkblue font-bold mb-4">Premium +</div>
                                <div class="text-base leading-relaxed">Pilihan paket yang cocok buat kamu yang hanya
                                    ingin memperdalam pelajaran yang telah diajarkan di sekolah dengan lebih detail
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="promotions_2"
        class="container mx-auto max-w-6xl text-white body-font mb-24 pt-8 px-8 overflow-hidden">
        <div class="bg-mediumblue rounded-3xl">
            <div class="flex md:flex-row items-center md:items-stretch mx-8">
                <div id="carousel6" class="carousel slide w-5/6 md:w-1/2 h-max p-4" data-ride="carousel" data-interval="10000" data-pause="hover">
                    <ol class="carousel-indicators">
                        <li data-target="#carousel6" style="width: 10px; height: 10px; border-radius: 100%;" data-slide-to="0" class="active"></li>
                        <li data-target="#carousel6" style="width: 10px; height: 10px; border-radius: 100%;" data-slide-to="1"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="flex items-center my-8 md:p-12">
                                <div>
                                    <div class="text-2xl mb-8">
                                        <div>Buat Pengalaman</div>
                                        <div class="font-bold">Belajarmu menjadi lebih seru</div>
                                    </div>
                                    <div class="mt-4 mb-12 text-base leading-relaxed">Rasakan pengalaman belajar dan
                                        meraih mimpi bersama ratusan teman dari seluruh pelosok nusantara.</div>
                                    <div>
                                        <div class="flex items-center my-4">
                                            <div class="bg-white w-12 h-12 md:flex items-center p-3 rounded-2xl">
                                                <img class="object-cover object-center rounded" alt="hero"
                                                    src="./images/promotions-2-live-chats.svg" /></div>
                                            <div class="ml-4">
                                                <div class="text-base font-bold">Live Chat</div>
                                                <div class="text-base">Chat temanmu yang sedang online</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="flex items-center my-8 md:p-12">
                                <div>
                                    <div class="text-2xl mb-8">
                                        <div>Makin paham</div>
                                        <div class="font-bold">Setiap hari</div>
                                    </div>
                                    <div class="mt-4 mb-12 text-base leading-relaxed">Uji kemampuanmu melalui kuis
                                        yang diberikan setiap hari. Kerjakan semaksimal mungkin agar kamu bisa
                                        melihat sejauh mana pemahamanmu terhadap materi tersebut.</div>
                                    <div>
                                        <div class="flex items-center my-4">
                                            <div class="bg-white w-12 h-12 md:flex items-center p-3 rounded-2xl">
                                                <img class="object-cover object-center rounded" alt="hero"
                                                    src="./images/promotions-2-quizzez.svg" /></div>
                                            <div class="ml-4">
                                                <div class="text-base font-bold">Kuis Ruitin</div>
                                                <div class="text-base">Kuis rutin yang dilaksanakan setiap hari
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="hidden md:block md:w-1/2 ml-8 relative"><img
                        class="absolute -top-8 right-0 ml-8 max-w-xs object-cover object-center rounded"
                        alt="promotions" src="./images/promotions-2-phone-2.png" /><img
                        class="absolute -top-2 left-0 mr-8 max-w-xs object-cover object-center rounded"
                        alt="promotions" src="./images/promotions-2-phone-1.png" /></div>
            </div>
        </div>
    </section>
    <section id="features" class="container mx-auto max-w-7xl px-5 py-12 text-gray-700 body-font">
        <div class="text-center text-2xl text-darkblue pb-8">Dapet apa aja di <strong>iClass ?</strong></div>
        <div>
            <div id="carousel3" class="carousel slide my-8 h-max" data-ride="carousel" data-interval="10000" data-pause="hover">
                <ol class="carousel-indicators">
                    <li data-target="#carousel3" style="width: 10px; height: 10px; border-radius: 100%;" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel3" style="width: 10px; height: 10px; border-radius: 100%;" data-slide-to="1"></li>
                    <li data-target="#carousel3" style="width: 10px; height: 10px; border-radius: 100%;" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="row justify-content-center">
                            <div class="mb-12 px-5 flex-col items-center justify-center">
                                <div class="flex justify-center">
                                    <div class="bg-mediumblue w-20 h-20 flex items-center m-8 p-6 rounded-2xl relative">
                                        <div
                                            class="border-2 border-gray-200 p-2 rounded-2xl w-full h-full absolute -top-4 -right-4 -z-10">
                                        </div><img class="object-cover object-center rounded" alt="hero"
                                            src="./images/features-1.svg" />
                                    </div>
                                </div>
                                <div class="flex justify-center text-center">
                                    <div class="text-base mb-4 w-36">22+ Mind Mapping Materi</div>
                                </div>
                            </div>
                            <div class="mb-12 px-5 flex-col items-center justify-center">
                                <div class="flex justify-center">
                                    <div class="bg-mediumblue w-20 h-20 flex items-center m-8 p-6 rounded-2xl relative">
                                        <div
                                            class="border-2 border-gray-200 p-2 rounded-2xl w-full h-full absolute -top-4 -right-4 -z-10">
                                        </div><img class="object-cover object-center rounded" alt="hero"
                                            src="./images/features-2.svg" />
                                    </div>
                                </div>
                                <div class="flex justify-center text-center">
                                    <div class="text-base mb-4 w-36">Grup Belajar Bersama</div>
                                </div>
                            </div>
                            <div class="mb-12 px-5 flex-col items-center justify-center">
                                <div class="flex justify-center">
                                    <div class="bg-mediumblue w-20 h-20 flex items-center m-8 p-6 rounded-2xl relative">
                                        <div
                                            class="border-2 border-gray-200 p-2 rounded-2xl w-full h-full absolute -top-4 -right-4 -z-10">
                                        </div><img class="object-cover object-center rounded" alt="hero"
                                            src="./images/features-3.svg" />
                                    </div>
                                </div>
                                <div class="flex justify-center text-center">
                                    <div class="text-base mb-4 w-36">Layanan Konsultasi via WhatsApp</div>
                                </div>
                            </div>
                            <div class="mb-12 px-5 flex-col items-center justify-center">
                                <div class="flex justify-center">
                                    <div class="bg-mediumblue w-20 h-20 flex items-center m-8 p-6 rounded-2xl relative">
                                        <div
                                            class="border-2 border-gray-200 p-2 rounded-2xl w-full h-full absolute -top-4 -right-4 -z-10">
                                        </div><img class="object-cover object-center rounded" alt="hero"
                                            src="./images/features-4.svg" />
                                    </div>
                                </div>
                                <div class="flex justify-center text-center">
                                    <div class="text-base mb-4 w-36">Pertemuan Rutin Setiap Minggu</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row justify-content-center">
                            <div class="mb-12 px-5 flex-col items-center justify-center">
                                <div class="flex justify-center">
                                    <div class="bg-mediumblue w-20 h-20 flex items-center m-8 p-6 rounded-2xl relative">
                                        <div
                                            class="border-2 border-gray-200 p-2 rounded-2xl w-full h-full absolute -top-4 -right-4 -z-10">
                                        </div><img class="object-cover object-center rounded" alt="hero"
                                            src="./images/features-5.svg" />
                                    </div>
                                </div>
                                <div class="flex justify-center text-center">
                                    <div class="text-base mb-4 w-36">Ratusan Video Pembelajaran</div>
                                </div>
                            </div>
                            <div class="mb-12 px-5 flex-col items-center justify-center">
                                <div class="flex justify-center">
                                    <div class="bg-mediumblue w-20 h-20 flex items-center m-8 p-6 rounded-2xl relative">
                                        <div
                                            class="border-2 border-gray-200 p-2 rounded-2xl w-full h-full absolute -top-4 -right-4 -z-10">
                                        </div><img class="object-cover object-center rounded" alt="hero"
                                            src="./images/features-6.svg" />
                                    </div>
                                </div>
                                <div class="flex justify-center text-center">
                                    <div class="text-base mb-4 w-36">Materi SKD Khusus Polstat STIS</div>
                                </div>
                            </div>
                            <div class="mb-12 px-5 flex-col items-center justify-center">
                                <div class="flex justify-center">
                                    <div class="bg-mediumblue w-20 h-20 flex items-center m-8 p-6 rounded-2xl relative">
                                        <div
                                            class="border-2 border-gray-200 p-2 rounded-2xl w-full h-full absolute -top-4 -right-4 -z-10">
                                        </div><img class="object-cover object-center rounded" alt="hero"
                                            src="./images/features-7.svg" />
                                    </div>
                                </div>
                                <div class="flex justify-center text-center">
                                    <div class="text-base mb-4 w-36">Materi Matematika Khusus Polstat STIS</div>
                                </div>
                            </div>
                            <div class="mb-12 px-5 flex-col items-center justify-center">
                                <div class="flex justify-center">
                                    <div class="bg-mediumblue w-20 h-20 flex items-center m-8 p-6 rounded-2xl relative">
                                        <div
                                            class="border-2 border-gray-200 p-2 rounded-2xl w-full h-full absolute -top-4 -right-4 -z-10">
                                        </div><img class="object-cover object-center rounded" alt="hero"
                                            src="./images/features-8.svg" />
                                    </div>
                                </div>
                                <div class="flex justify-center text-center">
                                    <div class="text-base mb-4 w-36">Laporan Belajar Setiap Bulan</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row justify-content-center">
                            <div class="mb-12 px-5 flex-col items-center justify-center">
                                <div class="flex justify-center">
                                    <div class="bg-mediumblue w-20 h-20 flex items-center m-8 p-6 rounded-2xl relative">
                                        <div
                                            class="border-2 border-gray-200 p-2 rounded-2xl w-full h-full absolute -top-4 -right-4 -z-10">
                                        </div><img class="object-cover object-center rounded" alt="hero"
                                            src="./images/features-9.svg" />
                                    </div>
                                </div>
                                <div class="flex justify-center text-center">
                                    <div class="text-base mb-4 w-36">Modul Bimbel Khusus Polstat STIS</div>
                                </div>
                            </div>
                            <div class="mb-12 px-5 flex-col items-center justify-center">
                                <div class="flex justify-center">
                                    <div class="bg-mediumblue w-20 h-20 flex items-center m-8 p-6 rounded-2xl relative">
                                        <div
                                            class="border-2 border-gray-200 p-2 rounded-2xl w-full h-full absolute -top-4 -right-4 -z-10">
                                        </div><img class="object-cover object-center rounded" alt="hero"
                                            src="./images/features-10.svg" />
                                    </div>
                                </div>
                                <div class="flex justify-center text-center">
                                    <div class="text-base mb-4 w-36">Kuis Rutin Setiap Hari</div>
                                </div>
                            </div>
                            <div class="mb-12 px-5 flex-col items-center justify-center">
                                <div class="flex justify-center">
                                    <div class="bg-mediumblue w-20 h-20 flex items-center m-8 p-6 rounded-2xl relative">
                                        <div
                                            class="border-2 border-gray-200 p-2 rounded-2xl w-full h-full absolute -top-4 -right-4 -z-10">
                                        </div><img class="object-cover object-center rounded" alt="hero"
                                            src="./images/features-11.svg" />
                                    </div>
                                </div>
                                <div class="flex justify-center text-center">
                                    <div class="text-base mb-4 w-36">Try Out Gratis Masuk STIS Setiap Bulan</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="cta" class="container mx-auto max-w-3xl px-5 py-12 text-gray-700 body-font">
        <div class="text-center text-2xl text-darkblue pb-8">Pilih paket <strong>belajar</strong></div>
        <div class="text-center">
            <div class="mb-8 text-base leading-relaxed">Pilih paket belajar sesuai materi yang ingin kamu pelajari.
                <br />Pilih kelas 12 jika kamu ingin mendaftar untuk persiapan Ujian Saringan Masuk Polstat STIS.
            </div>
            <div class="flex items-center justify-center">
                <btn class="border border-gray-400 rounded-full font-bold px-8 py-2 mr-2 cursor-pointer hover:bg-gray-200 transition duration-300 "
                    id="kelas1011" onclick="changeClass('10')">Kelas 10 dan 11</btn>
                <btn class="border border-mediumblue bg-mediumblue text-white font-bold rounded-full px-8 py-2 ml-2 cursor-pointer hover:bg-lightblue transition duration-300 "
                    id="kelas12" onclick="changeClass('12')">Kelas 12</btn>
            </div>
        </div>
    </section>
    <div id="pricing" class="container relative mx-auto max-w-5xl lg:max-w-7xl px-8 py-12 text-gray-700 body-font">
        <div id="carousel4" class="carousel slide my-8 h-max flex items-stretch" data-ride="carousel" data-interval="10000">
            <ol class="carousel-indicators">
                <li data-target="#carousel4" style="width: 10px; height: 10px; border-radius: 100%;" data-slide-to="0" class="active"></li>
                <li data-target="#carousel4" style="width: 10px; height: 10px; border-radius: 100%;" data-slide-to="1"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="row justify-content-center">
                        <div class="h-full mb-12 flex flex-col justify-between mx-auto py-5 px-8 border rounded-3xl shadow-sm bg-mediumblue text-white" style="width: 30%;">
                            <div>
                                <div class="text-sm mb-4">Intensif +</div>
                                <div class="mb-6"><span class="text-5xl font-bold  text-white">379</span><span
                                        class="text-lg">rb</span></div>
                                <div class="">
                                    <div class="flex items-start text-base text-gray-600 my-4"><svg
                                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="2" stroke="currentColor" aria-hidden="true"
                                            class="w-5 h-5 mr-2 text-white">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                        </svg>
                                        <div class="text-white">Ratusan Video Pembelajaran</div>
                                    </div>
                                    <div class="flex items-start text-base text-gray-600 my-4"><svg
                                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="2" stroke="currentColor" aria-hidden="true"
                                            class="w-5 h-5 mr-2 text-white">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                        </svg>
                                        <div class="text-white">Try Out Gratis Setiap Bulan</div>
                                    </div>
                                    <div class="flex items-start text-base text-gray-600 my-4"><svg
                                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="2" stroke="currentColor" aria-hidden="true"
                                            class="w-5 h-5 mr-2 text-white">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                        </svg>
                                        <div class="text-white">Kuis Rutin Setiap Hari</div>
                                    </div>
                                    <div class="flex items-start text-base text-gray-600 my-4"><svg
                                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="2" stroke="currentColor" aria-hidden="true"
                                            class="w-5 h-5 mr-2 text-white">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                        </svg>
                                        <div class="text-white">Layanan Konsultasi via WhatsApp</div>
                                    </div>
                                    <div class="flex items-start text-base text-gray-600 my-4"><svg
                                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="2" stroke="currentColor" aria-hidden="true"
                                            class="w-5 h-5 mr-2 text-white">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                        </svg>
                                        <div class="text-white">Grup Belajar Bersama</div>
                                    </div>
                                    <div class="flex items-start text-base text-gray-600 my-4"><svg
                                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="2" stroke="currentColor" aria-hidden="true"
                                            class="w-5 h-5 mr-2 text-white">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                        </svg>
                                        <div class="text-white">Laporan Perkembangan Belajar</div>
                                    </div>
                                    <div class="flex items-start text-base text-gray-600 my-4"><svg
                                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="2" stroke="currentColor" aria-hidden="true"
                                            class="w-5 h-5 mr-2 text-white">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                        </svg>
                                        <div class="text-white">26 Kali Tatap Muka</div>
                                    </div>
                                    <div class="flex items-start text-base text-gray-600 my-4"><svg
                                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="2" stroke="currentColor" aria-hidden="true"
                                            class="w-5 h-5 mr-2 text-white">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                        </svg>
                                        <div class="text-white">22 + Mind Mapping Materi</div>
                                    </div>
                                    <div class="flex items-start text-base text-gray-600 my-4"><svg
                                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="2" stroke="currentColor" aria-hidden="true"
                                            class="w-5 h-5 mr-2 text-white">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                        </svg>
                                        <div class="text-white">Modul Bimbel Khusus Polstat STIS</div>
                                    </div>
                                    <div class="flex items-start text-base text-gray-600 my-4"><svg
                                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="2" stroke="currentColor" aria-hidden="true"
                                            class="w-5 h-5 mr-2 text-white">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                        </svg>
                                        <div class="text-white">Materi Khusus untuk Tes Polstat STIS</div>
                                    </div>
                                    <div class="flex items-start text-base text-gray-600 my-4"><svg
                                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="2" stroke="currentColor" aria-hidden="true"
                                            class="w-5 h-5 mr-2 text-white">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                        </svg>
                                        <div class="text-white">Kelas SKD Khusus Tes Polstat STIS</div>
                                    </div>
                                </div>
                            </div>
                            <div class="flex justify-end mt-auto">
                                <a class="text-center rounded-full px-8 py-2 ml-2 cursor-pointer transition duration-300  bg-darkblue hover:bg-opacity-50 text-white"
                                    href="<?= base_url() ?>/daftar">Daftar Sekarang</a>
                            </div>
                        </div>
                        <div class="h-full mb-12 flex flex-col justify-between mx-auto py-5 px-8 border rounded-3xl shadow-sm bg-white" style="width: 30%;">
                            <div>
                                <div class="text-sm mb-4">Intensif</div>
                                <div class="mb-6"><span class="text-5xl font-bold  text-gray-700">299</span><span
                                        class="text-lg">rb</span></div>
                                <div class="">
                                    <div class="flex items-start text-base text-gray-600 my-4"><svg
                                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="2" stroke="currentColor" aria-hidden="true"
                                            class="w-5 h-5 mr-2 text-gray-700">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                        </svg>
                                        <div class="text-gray-700">Ratusan Video Pembelajaran</div>
                                    </div>
                                    <div class="flex items-start text-base text-gray-600 my-4"><svg
                                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="2" stroke="currentColor" aria-hidden="true"
                                            class="w-5 h-5 mr-2 text-gray-700">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                        </svg>
                                        <div class="text-gray-700">Try Out Gratis Setiap Bulan</div>
                                    </div>
                                    <div class="flex items-start text-base text-gray-600 my-4"><svg
                                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="2" stroke="currentColor" aria-hidden="true"
                                            class="w-5 h-5 mr-2 text-gray-700">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                        </svg>
                                        <div class="text-gray-700">Kuis Rutin Setiap Hari</div>
                                    </div>
                                    <div class="flex items-start text-base text-gray-600 my-4"><svg
                                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="2" stroke="currentColor" aria-hidden="true"
                                            class="w-5 h-5 mr-2 text-gray-700">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                        </svg>
                                        <div class="text-gray-700">Layanan Konsultasi via WhatsApp</div>
                                    </div>
                                    <div class="flex items-start text-base text-gray-600 my-4"><svg
                                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="2" stroke="currentColor" aria-hidden="true"
                                            class="w-5 h-5 mr-2 text-gray-700">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                        </svg>
                                        <div class="text-gray-700">Grup Belajar Bersama</div>
                                    </div>
                                    <div class="flex items-start text-base text-gray-600 my-4"><svg
                                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="2" stroke="currentColor" aria-hidden="true"
                                            class="w-5 h-5 mr-2 text-gray-700">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                        </svg>
                                        <div class="text-gray-700">Laporan Perkembangan Belajar</div>
                                    </div>
                                    <div class="flex items-start text-base text-gray-600 my-4"><svg
                                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="2" stroke="currentColor" aria-hidden="true"
                                            class="w-5 h-5 mr-2 text-gray-700">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                        </svg>
                                        <div class="text-gray-700">26 Kali Tatap Muka</div>
                                    </div>
                                    <div class="flex items-start text-base text-gray-600 my-4"><svg
                                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="2" stroke="currentColor" aria-hidden="true"
                                            class="w-5 h-5 mr-2 text-gray-700">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                        </svg>
                                        <div class="text-gray-700">22 + Mind Mapping Materi</div>
                                    </div>
                                    <div class="flex items-start text-base text-gray-600 my-4"><svg
                                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="2" stroke="currentColor" aria-hidden="true"
                                            class="w-5 h-5 mr-2 text-gray-700">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                        </svg>
                                        <div class="text-gray-700">Modul Bimbel Khusus Polstat STIS</div>
                                    </div>
                                    <div class="flex items-start text-base text-gray-600 my-4"><svg
                                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="2" stroke="currentColor" aria-hidden="true"
                                            class="w-5 h-5 mr-2 text-gray-700">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                        </svg>
                                        <div class="text-gray-700">Materi Khusus untuk Tes Polstat STIS</div>
                                    </div>
                                </div>
                            </div>
                            <div class="flex justify-end mt-auto">
                                <a class="text-center rounded-full px-8 py-2 ml-2 cursor-pointer transition duration-300  bg-white hover:bg-gray-200 border border-gray-200"
                                    href="<?= base_url() ?>/daftar">Daftar Sekarang</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="row justify-content-center">
                        <div class="h-full mb-12 flex flex-col justify-between mx-auto py-5 px-8 border rounded-3xl shadow-sm bg-white" style="width: 30%;">
                            <div>
                                <div class="text-sm mb-4">Premium +</div>
                                <div class="mb-6"><span class="text-5xl font-bold  text-gray-700">129</span><span
                                        class="text-lg">rb</span></div>
                                <div class="">
                                    <div class="flex items-start text-base text-gray-600 my-4"><svg
                                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="2" stroke="currentColor" aria-hidden="true"
                                            class="w-5 h-5 mr-2 text-gray-700">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                        </svg>
                                        <div class="text-gray-700">Ratusan Video Pembelajaran</div>
                                    </div>
                                    <div class="flex items-start text-base text-gray-600 my-4"><svg
                                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="2" stroke="currentColor" aria-hidden="true"
                                            class="w-5 h-5 mr-2 text-gray-700">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                        </svg>
                                        <div class="text-gray-700">Try Out Gratis Setiap Bulan</div>
                                    </div>
                                    <div class="flex items-start text-base text-gray-600 my-4"><svg
                                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="2" stroke="currentColor" aria-hidden="true"
                                            class="w-5 h-5 mr-2 text-gray-700">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                        </svg>
                                        <div class="text-gray-700">Kuis Rutin Setiap Hari</div>
                                    </div>
                                    <div class="flex items-start text-base text-gray-600 my-4"><svg
                                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="2" stroke="currentColor" aria-hidden="true"
                                            class="w-5 h-5 mr-2 text-gray-700">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                        </svg>
                                        <div class="text-gray-700">Layanan Konsultasi via WhatsApp</div>
                                    </div>
                                    <div class="flex items-start text-base text-gray-600 my-4"><svg
                                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="2" stroke="currentColor" aria-hidden="true"
                                            class="w-5 h-5 mr-2 text-gray-700">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                        </svg>
                                        <div class="text-gray-700">Grup Belajar Bersama</div>
                                    </div>
                                    <div class="flex items-start text-base text-gray-600 my-4"><svg
                                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="2" stroke="currentColor" aria-hidden="true"
                                            class="w-5 h-5 mr-2 text-gray-700">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                        </svg>
                                        <div class="text-gray-700">Laporan Perkembangan Belajar</div>
                                    </div>
                                    <div class="flex items-start text-base text-gray-600 my-4"><svg
                                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="2" stroke="currentColor" aria-hidden="true"
                                            class="w-5 h-5 mr-2 text-gray-700">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                        </svg>
                                        <div class="text-gray-700">12 Kali Tatap Muka</div>
                                    </div>
                                    <div class="flex items-start text-base text-gray-600 my-4"><svg
                                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="2" stroke="currentColor" aria-hidden="true"
                                            class="w-5 h-5 mr-2 text-gray-700">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                        </svg>
                                        <div class="text-gray-700">22 + Mind Mapping Materi</div>
                                    </div>
                                    <div class="flex items-start text-base text-gray-600 my-4"><svg
                                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="2" stroke="currentColor" aria-hidden="true"
                                            class="w-5 h-5 mr-2 text-gray-700">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                        </svg>
                                        <div class="text-gray-700">Modul Bimbel Khusus Polstat STIS</div>
                                    </div>
                                </div>
                            </div>
                            <div class="flex justify-end mt-auto">
                                <a class="text-center rounded-full px-8 py-2 ml-2 cursor-pointer transition duration-300  bg-white hover:bg-gray-200 border border-gray-200"
                                    href="<?= base_url() ?>/daftar">Daftar Sekarang</a>
                            </div>
                        </div>
                        <div class="h-full mb-12 flex flex-col justify-between mx-auto py-5 px-8 border rounded-3xl shadow-sm bg-white" style="width: 30%;">
                            <div>
                                <div class="text-sm mb-4">Premium</div>
                                <div class="mb-6"><span class="text-5xl font-bold  text-gray-700">109</span><span
                                        class="text-lg">rb</span></div>
                                <div class="">
                                    <div class="flex items-start text-base text-gray-600 my-4"><svg
                                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="2" stroke="currentColor" aria-hidden="true"
                                            class="w-5 h-5 mr-2 text-gray-700">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                        </svg>
                                        <div class="text-gray-700">Ratusan Video Pembelajaran</div>
                                    </div>
                                    <div class="flex items-start text-base text-gray-600 my-4"><svg
                                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="2" stroke="currentColor" aria-hidden="true"
                                            class="w-5 h-5 mr-2 text-gray-700">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                        </svg>
                                        <div class="text-gray-700">Try Out Gratis Setiap Bulan</div>
                                    </div>
                                    <div class="flex items-start text-base text-gray-600 my-4"><svg
                                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="2" stroke="currentColor" aria-hidden="true"
                                            class="w-5 h-5 mr-2 text-gray-700">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                        </svg>
                                        <div class="text-gray-700">Kuis Rutin Setiap Hari</div>
                                    </div>
                                    <div class="flex items-start text-base text-gray-600 my-4"><svg
                                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="2" stroke="currentColor" aria-hidden="true"
                                            class="w-5 h-5 mr-2 text-gray-700">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                        </svg>
                                        <div class="text-gray-700">Layanan Konsultasi via WhatsApp</div>
                                    </div>
                                    <div class="flex items-start text-base text-gray-600 my-4"><svg
                                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="2" stroke="currentColor" aria-hidden="true"
                                            class="w-5 h-5 mr-2 text-gray-700">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                        </svg>
                                        <div class="text-gray-700">Grup Belajar Bersama</div>
                                    </div>
                                    <div class="flex items-start text-base text-gray-600 my-4"><svg
                                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="2" stroke="currentColor" aria-hidden="true"
                                            class="w-5 h-5 mr-2 text-gray-700">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                        </svg>
                                        <div class="text-gray-700">Laporan Perkembangan Belajar</div>
                                    </div>
                                    <div class="flex items-start text-base text-gray-600 my-4"><svg
                                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="2" stroke="currentColor" aria-hidden="true"
                                            class="w-5 h-5 mr-2 text-gray-700">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                        </svg>
                                        <div class="text-gray-700">8 Kali Tatap Muka</div>
                                    </div>
                                    <div class="flex items-start text-base text-gray-600 my-4"><svg
                                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="2" stroke="currentColor" aria-hidden="true"
                                            class="w-5 h-5 mr-2 text-gray-700">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                        </svg>
                                        <div class="text-gray-700">22 + Mind Mapping Materi</div>
                                    </div>
                                    <div class="flex items-start text-base text-gray-600 my-4"><svg
                                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="2" stroke="currentColor" aria-hidden="true"
                                            class="w-5 h-5 mr-2 text-gray-700">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                        </svg>
                                        <div class="text-gray-700">Modul Bimbel Khusus Polstat STIS</div>
                                    </div>
                                </div>
                            </div>
                            <div class="flex justify-end mt-auto">
                                <a class="text-center rounded-full px-8 py-2 ml-2 cursor-pointer transition duration-300  bg-white hover:bg-gray-200 border border-gray-200"
                                    href="<?= base_url() ?>/daftar">Daftar Sekarang</a>
                            </div>
                        </div>
                        <div class="h-full mb-12 flex flex-col justify-between mx-auto py-5 px-8 border rounded-3xl shadow-sm bg-white" style="width: 30%;">
                            <div>
                                <div class="text-sm mb-4">Reguler</div>
                                <div class="mb-6"><span class="text-5xl font-bold  text-gray-700">79</span><span
                                        class="text-lg">rb</span></div>
                                <div class="">
                                    <div class="flex items-start text-base text-gray-600 my-4"><svg
                                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="2" stroke="currentColor" aria-hidden="true"
                                            class="w-5 h-5 mr-2 text-gray-700">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                        </svg>
                                        <div class="text-gray-700">Ratusan Video Pembelajaran</div>
                                    </div>
                                    <div class="flex items-start text-base text-gray-600 my-4"><svg
                                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="2" stroke="currentColor" aria-hidden="true"
                                            class="w-5 h-5 mr-2 text-gray-700">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                        </svg>
                                        <div class="text-gray-700">Try Out Gratis Setiap Bulan</div>
                                    </div>
                                    <div class="flex items-start text-base text-gray-600 my-4"><svg
                                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="2" stroke="currentColor" aria-hidden="true"
                                            class="w-5 h-5 mr-2 text-gray-700">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                        </svg>
                                        <div class="text-gray-700">Kuis Rutin Setiap Hari</div>
                                    </div>
                                    <div class="flex items-start text-base text-gray-600 my-4"><svg
                                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="2" stroke="currentColor" aria-hidden="true"
                                            class="w-5 h-5 mr-2 text-gray-700">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                        </svg>
                                        <div class="text-gray-700">Layanan Konsultasi via WhatsApp</div>
                                    </div>
                                    <div class="flex items-start text-base text-gray-600 my-4"><svg
                                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="2" stroke="currentColor" aria-hidden="true"
                                            class="w-5 h-5 mr-2 text-gray-700">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                        </svg>
                                        <div class="text-gray-700">Grup Belajar Bersama</div>
                                    </div>
                                    <div class="flex items-start text-base text-gray-600 my-4"><svg
                                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="2" stroke="currentColor" aria-hidden="true"
                                            class="w-5 h-5 mr-2 text-gray-700">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                        </svg>
                                        <div class="text-gray-700">Laporan Perkembangan Belajar</div>
                                    </div>
                                </div>
                            </div>
                            <div class="flex justify-end mt-auto">
                                <div class="text-center rounded-full px-8 py-2 ml-2 cursor-pointer transition duration-300  bg-white hover:bg-gray-200 border border-gray-200"
                                    href="<?= base_url() ?>/daftar">Daftar Sekarang</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="carousel7" style="display: none;" class="row justify-content-center">
            <div class="h-full mb-12 flex flex-col justify-between mx-auto py-5 px-8 border rounded-3xl shadow-sm bg-white" style="width: 30%;">
                <div>
                    <div class="text-sm mb-4">Premium +</div>
                    <div class="mb-6"><span class="text-5xl font-bold  text-gray-700">129</span><span
                            class="text-lg">rb</span></div>
                    <div class="">
                        <div class="flex items-start text-base text-gray-600 my-4"><svg
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="2" stroke="currentColor" aria-hidden="true"
                                class="w-5 h-5 mr-2 text-gray-700">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                            <div class="text-gray-700">Ratusan Video Pembelajaran</div>
                        </div>
                        <div class="flex items-start text-base text-gray-600 my-4"><svg
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="2" stroke="currentColor" aria-hidden="true"
                                class="w-5 h-5 mr-2 text-gray-700">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                            <div class="text-gray-700">Try Out Gratis Setiap Bulan</div>
                        </div>
                        <div class="flex items-start text-base text-gray-600 my-4"><svg
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="2" stroke="currentColor" aria-hidden="true"
                                class="w-5 h-5 mr-2 text-gray-700">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                            <div class="text-gray-700">Kuis Rutin Setiap Hari</div>
                        </div>
                        <div class="flex items-start text-base text-gray-600 my-4"><svg
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="2" stroke="currentColor" aria-hidden="true"
                                class="w-5 h-5 mr-2 text-gray-700">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                            <div class="text-gray-700">Layanan Konsultasi via WhatsApp</div>
                        </div>
                        <div class="flex items-start text-base text-gray-600 my-4"><svg
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="2" stroke="currentColor" aria-hidden="true"
                                class="w-5 h-5 mr-2 text-gray-700">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                            <div class="text-gray-700">Grup Belajar Bersama</div>
                        </div>
                        <div class="flex items-start text-base text-gray-600 my-4"><svg
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="2" stroke="currentColor" aria-hidden="true"
                                class="w-5 h-5 mr-2 text-gray-700">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                            <div class="text-gray-700">Laporan Perkembangan Belajar</div>
                        </div>
                        <div class="flex items-start text-base text-gray-600 my-4"><svg
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="2" stroke="currentColor" aria-hidden="true"
                                class="w-5 h-5 mr-2 text-gray-700">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                            <div class="text-gray-700">12 Kali Tatap Muka</div>
                        </div>
                        <div class="flex items-start text-base text-gray-600 my-4"><svg
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="2" stroke="currentColor" aria-hidden="true"
                                class="w-5 h-5 mr-2 text-gray-700">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                            <div class="text-gray-700">22 + Mind Mapping Materi</div>
                        </div>
                        <div class="flex items-start text-base text-gray-600 my-4"><svg
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="2" stroke="currentColor" aria-hidden="true"
                                class="w-5 h-5 mr-2 text-gray-700">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                            <div class="text-gray-700">Modul Bimbel Khusus Polstat STIS</div>
                        </div>
                    </div>
                </div>
                <div class="flex justify-end mt-auto">
                    <div class="text-center rounded-full px-8 py-2 ml-2 cursor-pointer transition duration-300  bg-white hover:bg-gray-200 border border-gray-200"
                        href="<?= base_url() ?>/daftar">Daftar Sekarang</div>
                </div>
            </div>
            <div class="h-full mb-12 flex flex-col justify-between mx-auto py-5 px-8 border rounded-3xl shadow-sm bg-white" style="width: 30%;">
                <div>
                    <div class="text-sm mb-4">Premium</div>
                    <div class="mb-6"><span class="text-5xl font-bold  text-gray-700">109</span><span
                            class="text-lg">rb</span></div>
                    <div class="">
                        <div class="flex items-start text-base text-gray-600 my-4"><svg
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="2" stroke="currentColor" aria-hidden="true"
                                class="w-5 h-5 mr-2 text-gray-700">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                            <div class="text-gray-700">Ratusan Video Pembelajaran</div>
                        </div>
                        <div class="flex items-start text-base text-gray-600 my-4"><svg
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="2" stroke="currentColor" aria-hidden="true"
                                class="w-5 h-5 mr-2 text-gray-700">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                            <div class="text-gray-700">Try Out Gratis Setiap Bulan</div>
                        </div>
                        <div class="flex items-start text-base text-gray-600 my-4"><svg
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="2" stroke="currentColor" aria-hidden="true"
                                class="w-5 h-5 mr-2 text-gray-700">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                            <div class="text-gray-700">Kuis Rutin Setiap Hari</div>
                        </div>
                        <div class="flex items-start text-base text-gray-600 my-4"><svg
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="2" stroke="currentColor" aria-hidden="true"
                                class="w-5 h-5 mr-2 text-gray-700">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                            <div class="text-gray-700">Layanan Konsultasi via WhatsApp</div>
                        </div>
                        <div class="flex items-start text-base text-gray-600 my-4"><svg
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="2" stroke="currentColor" aria-hidden="true"
                                class="w-5 h-5 mr-2 text-gray-700">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                            <div class="text-gray-700">Grup Belajar Bersama</div>
                        </div>
                        <div class="flex items-start text-base text-gray-600 my-4"><svg
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="2" stroke="currentColor" aria-hidden="true"
                                class="w-5 h-5 mr-2 text-gray-700">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                            <div class="text-gray-700">Laporan Perkembangan Belajar</div>
                        </div>
                        <div class="flex items-start text-base text-gray-600 my-4"><svg
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="2" stroke="currentColor" aria-hidden="true"
                                class="w-5 h-5 mr-2 text-gray-700">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                            <div class="text-gray-700">8 Kali Tatap Muka</div>
                        </div>
                        <div class="flex items-start text-base text-gray-600 my-4"><svg
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="2" stroke="currentColor" aria-hidden="true"
                                class="w-5 h-5 mr-2 text-gray-700">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                            <div class="text-gray-700">22 + Mind Mapping Materi</div>
                        </div>
                        <div class="flex items-start text-base text-gray-600 my-4"><svg
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="2" stroke="currentColor" aria-hidden="true"
                                class="w-5 h-5 mr-2 text-gray-700">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                            <div class="text-gray-700">Modul Bimbel Khusus Polstat STIS</div>
                        </div>
                    </div>
                </div>
                <div class="flex justify-end mt-auto">
                    <div class="text-center rounded-full px-8 py-2 ml-2 cursor-pointer transition duration-300  bg-white hover:bg-gray-200 border border-gray-200"
                        href="<?= base_url() ?>/daftar">Daftar Sekarang</div>
                </div>
            </div>
            <div class="h-full mb-12 flex flex-col justify-between mx-auto py-5 px-8 border rounded-3xl shadow-sm bg-white" style="width: 30%;">
                <div>
                    <div class="text-sm mb-4">Reguler</div>
                    <div class="mb-6"><span class="text-5xl font-bold  text-gray-700">79</span><span
                            class="text-lg">rb</span></div>
                    <div class="">
                        <div class="flex items-start text-base text-gray-600 my-4"><svg
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="2" stroke="currentColor" aria-hidden="true"
                                class="w-5 h-5 mr-2 text-gray-700">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                            <div class="text-gray-700">Ratusan Video Pembelajaran</div>
                        </div>
                        <div class="flex items-start text-base text-gray-600 my-4"><svg
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="2" stroke="currentColor" aria-hidden="true"
                                class="w-5 h-5 mr-2 text-gray-700">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                            <div class="text-gray-700">Try Out Gratis Setiap Bulan</div>
                        </div>
                        <div class="flex items-start text-base text-gray-600 my-4"><svg
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="2" stroke="currentColor" aria-hidden="true"
                                class="w-5 h-5 mr-2 text-gray-700">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                            <div class="text-gray-700">Kuis Rutin Setiap Hari</div>
                        </div>
                        <div class="flex items-start text-base text-gray-600 my-4"><svg
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="2" stroke="currentColor" aria-hidden="true"
                                class="w-5 h-5 mr-2 text-gray-700">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                            <div class="text-gray-700">Layanan Konsultasi via WhatsApp</div>
                        </div>
                        <div class="flex items-start text-base text-gray-600 my-4"><svg
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="2" stroke="currentColor" aria-hidden="true"
                                class="w-5 h-5 mr-2 text-gray-700">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                            <div class="text-gray-700">Grup Belajar Bersama</div>
                        </div>
                        <div class="flex items-start text-base text-gray-600 my-4"><svg
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="2" stroke="currentColor" aria-hidden="true"
                                class="w-5 h-5 mr-2 text-gray-700">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                            <div class="text-gray-700">Laporan Perkembangan Belajar</div>
                        </div>
                    </div>
                </div>
                <div class="flex justify-end mt-auto">
                    <div class="text-center rounded-full px-8 py-2 ml-2 cursor-pointer transition duration-300  bg-white hover:bg-gray-200 border border-gray-200"
                        href="<?= base_url() ?>/daftar">Daftar Sekarang</div>
                </div>
            </div>
        </div>
    </div>
    <section class="text-gray-600 body-font">
        <div class="container px-5 py-24 mx-auto">
            <h1 class="text-2xl font-medium title-font text-center text-darkblue mb-12">Apa kata mereka tentang
                <strong>iClass?</strong></h1>
            <div>
                <div id="carousel5" class="carousel slide my-8 h-max" data-ride="carousel" data-interval="10000" data-pause="hover">
                    <div class="carousel-inner">
                        <?php for ($i=0; $i<sizeof($testi); $i++) { ?>
                            <div class="carousel-item<?php if ($i==0) echo ' active'; ?>">
                                <div class="flex justify-content-center">
                                    <div class="py-4 md:mx-16">
                                        <div class="flex justify-center mb-6">
                                            <img class="inline-block h-12 w-12 rounded-full text-white border-2 border-white object-cover object-center h-20 w-20"
                                                src="<?= base_url() ?>/img/Aset/testi/<?= $i+1 ?>.png" alt="" />
                                        </div>
                                        <p class="text-ms my-4 text-gray-500 leading-relaxed"><?= $testi[$i]['testi'] ?></p>
                                        <div>
                                            <p class="text-base font-bold"><?= $testi[$i]['nama'] ?></p>
                                            <p class="text-sm capitalize">angkatan <?= $testi[$i]['angkatan'] ?></p>
                                        </div>
                                    </div>
                                    <?php if (!empty($testi[$i+1])) { $i+=1; ?>
                                        <div class="py-4 md:mx-16">
                                            <div class="flex justify-center mb-6">
                                                <img class="inline-block h-12 w-12 rounded-full text-white border-2 border-white object-cover object-center h-20 w-20"
                                                    src="<?= base_url() ?>/img/Aset/testi/<?= $i+1 ?>.png" alt="" />
                                            </div>
                                            <p class="text-ms my-4 text-gray-500 leading-relaxed"><?= $testi[$i]['testi'] ?></p>
                                            <div>
                                                <p class="text-base font-bold"><?= $testi[$i]['nama'] ?></p>
                                                <p class="text-sm capitalize">angkatan <?= $testi[$i]['angkatan'] ?></p>
                                            </div>
                                        </div>
                                    <?php } ?>
                                    <?php if (!empty($testi[$i+1])) { $i+=1; ?>
                                        <div class="py-4 md:mx-16">
                                            <div class="flex justify-center mb-6">
                                                <img class="inline-block h-12 w-12 rounded-full text-white border-2 border-white object-cover object-center h-20 w-20"
                                                    src="<?= base_url() ?>/img/Aset/testi/<?= $i+1 ?>.png" alt="" />
                                            </div>
                                            <p class="text-ms my-4 text-gray-500 leading-relaxed"><?= $testi[$i]['testi'] ?></p>
                                            <div>
                                                <p class="text-base font-bold"><?= $testi[$i]['nama'] ?></p>
                                                <p class="text-sm capitalize">angkatan <?= $testi[$i]['angkatan'] ?></p>
                                            </div>
                                        </div>
                                    <?php } ?>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                    <a class="carousel-control-prev" href="#carousel5" role="button" data-slide="prev">
                        <span class="fa fa-angle-left bg-dark rounded-circle mr-auto px-2 py-1" aria-hidden="true"></span>
                    </a>
                    <a class="carousel-control-next" href="#carousel5" role="button" data-slide="next">
                        <span class="fa fa-angle-right bg-dark rounded-circle ml-auto px-2 py-1" aria-hidden="true"></span>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <script>
        function changeClass(kelas) {
            if (kelas=='12') {
                kelas1011 = document.getElementById('kelas1011');
                kelas12 = document.getElementById('kelas12');

                kelas1011.classList.remove("border-mediumblue");
                kelas1011.classList.remove("bg-mediumblue");
                kelas1011.classList.remove("text-white");
                kelas1011.classList.remove("hover:bg-lightblue");
                kelas1011.classList.add('border-gray-400');
                kelas1011.classList.add("hover:bg-gray-200");

                kelas12.classList.remove('border-gray-400');
                kelas12.classList.remove("hover:bg-gray-200");
                kelas12.classList.add("border-mediumblue");
                kelas12.classList.add("bg-mediumblue");
                kelas12.classList.add("text-white");
                kelas12.classList.add("hover:bg-lightblue");

                document.getElementById('carousel4').style.display="block";
                document.getElementById('carousel7').style.display="none";
            } else {
                kelas1011 = document.getElementById('kelas1011');
                kelas12 = document.getElementById('kelas12');

                kelas12.classList.remove("border-mediumblue");
                kelas12.classList.remove("bg-mediumblue");
                kelas12.classList.remove("text-white");
                kelas12.classList.remove("hover:bg-lightblue");
                kelas12.classList.add('border-gray-400');
                kelas12.classList.add("hover:bg-gray-200");

                kelas1011.classList.remove('border-gray-400');
                kelas1011.classList.remove("hover:bg-gray-200");
                kelas1011.classList.add("border-mediumblue");
                kelas1011.classList.add("bg-mediumblue");
                kelas1011.classList.add("text-white");
                kelas1011.classList.add("hover:bg-lightblue");

                document.getElementById('carousel7').style.display="flex";
                document.getElementById('carousel4').style.display="none";
            }
        }
    </script>
</div>
<script type="text/javascript" src="fullpage.js"></script>
<?= $this->endSection(); ?>