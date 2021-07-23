<?= $this->extend('templates/index'); ?>
<?= $this->section('content'); ?>
<div class="content mb-3">
    <div class="row ">
        <div class="col d-flex justify-content-center">
            <div class="card d-flex" style="width: 25rem; border: none;">
                <img style="max-width: 150px;" class="rounded-circle align-self-center" src="https://cdn4.iconfinder.com/data/icons/small-n-flat/24/user-alt-512.png" alt="Card image cap">
                <?= session()->flash; ?>
                <div class="card-body pb5">
                    <form class="d-flex flex-column" method="POST" action="">
                        <div class="form-group d-flex flex-column">
                            <label for="username" class="text-center text-primary h4 font-weight-bold">Username</label>
                            <input name="username" type="text" class="form-control" style="border-radius: 10px;" id="username" placeholder="Username" required>
                        </div>

                        <div class="form-group form-group d-flex flex-column mt-0">
                            <label for="password" class="text-center text-primary h4 font-weight-bold">Password</label>
                            <input name="password" type="password" class="form-control" style="border-radius: 10px;" id="password" placeholder="Password" required>
                        </div>

                        <div class="disappearing">
                            <br>
                        </div>

                        <button type="submit" name="submit" class="btn btn-primary mt-0" style="border-radius: 10px;">
                            <span class="h5">Masuk</span>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>