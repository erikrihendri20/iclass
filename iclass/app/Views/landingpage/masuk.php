<?= $this->extend('landingpage/template/index'); ?>
<?= $this->section('content'); ?>
    <div class="content mb-3">
        <div class="row d-flex justify-content-center">
            <div class="col d-flex justify-content-center">
                <div class="card d-flex justify-content-center flex-column align-items-center" style="width: 25rem; border: none;">
                    <img style="max-width: 150px;" class="rounded-circle" src="https://cdn4.iconfinder.com/data/icons/small-n-flat/24/user-alt-512.png" alt="Card image cap">
                    <div class="card-body">
                        <form>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Email address</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Password</label>
                                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                            </div>
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">Check me out</label>
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?= $this->endSection(); ?>