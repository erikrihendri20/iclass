<?= $this->extend('templates/index'); ?>
<?= $this->section('content'); ?>
<?php $validation = service('validation') ?>
<div class="content pb5">
    <div class="min-w-screen md:h-screen bg-white flex items-stretch justify-center px-5 py-5">
        <div class="bg-mediumblue w-full rounded-3xl py-10 xl:py-20 px-10 flex justify-center">
            <div class="flex items-center justify-center w-full">
                <div class="text-white my-16 xl:mr-32">
                    <div class="text-5xl italic font-bold leading-normal">Waiting Room!</div>
                    <div class="mt-8 text-base xl:text-lg xl:leading-loose sm:w-84 max-w-xs leading-loose">Silahkan
                        menunggu pembayaranmu dikonfirmasi</div>
                    <div class="my-16"><img class="h-8 w-auto mb-16" src="<?= base_url() ?>/images/iclass-white.png" alt="Logo" />
                    </div>
                </div><img
                    class="hidden p-4 md:p-8 sm:block sm:max-w-xs md:max-w-sm lg:max-w-lg object-cover object-center rounded"
                    alt="hero" src="<?= base_url() ?>/images/waiting-room.svg" />
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>