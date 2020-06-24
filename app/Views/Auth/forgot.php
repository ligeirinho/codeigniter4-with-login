<?= $this->extend($config->viewLayout) ?>
<?= $this->section("forgot"); ?>

<div class="w-100 pt-5">
    <div class="row">
        <div class="col-sm-3 mx-auto">
            <div class="card">
                <h2 class="card-header"><?=lang('Auth.forgotPassword')?></h2>
                <div class="card-body">

                    <?= view('App\Auth\_message_block') ?>

                    <p><?=lang('Auth.enterEmailForInstructions')?></p>

                    <form action="<?= route_to('forgot') ?>" method="post">
                        <?= csrf_field() ?>

                        <div class="form-group">
                            <label for="email"><?=lang('Auth.emailAddress')?></label>
                            <input type="email" class="form-control <?php if(session('errors.email')) : ?>is-invalid<?php endif ?>"
                                   name="email" aria-describedby="emailHelp" placeholder="<?=lang('Auth.email')?>">
                            <div class="invalid-feedback">
                                <?= session('errors.email') ?>
                            </div>
                        </div>

                        <br>

                        <button type="submit" class="btn btn-primary btn-block"><?=lang('Auth.sendInstructions')?></button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>
