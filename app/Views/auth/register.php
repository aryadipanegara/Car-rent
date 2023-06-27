<?= $this->extend('layout/main') ?>

<?= $this->section('content') ?>

<div class="container">
    <div class="row">
        <div class="col-sm-3"></div>
        <?= view('Myth\Auth\Views\_message_block') ?>
        <div class="col-sm-6">
            
        <form action="<?= url_to('register') ?>" method="post">
                        <?= csrf_field() ?>
                <div class="mb-3" style="margin-top:150px;">
                <label class="" for="email"><?=lang('Auth.email')?></label>
                    <input type="email" name="email" class="form-control"  name="email" autocomplete="off" aria-describedby="emailHelp" placeholder="<?=lang('Auth.email')?>" value="<?= old('email') ?>" <?php if (session('errors.email')) : ?>is-invalid<?php endif ?>>
                </div>
                
                <div class="mb-3">
                    <label for="username" class="form-label"></label>
                    <input type="text" class="form-control <?php if (session('errors.username')) : ?>is-invalid<?php endif ?>" name="username" placeholder="<?=lang('Auth.username')?>" value="<?= old('username') ?>" autocomplete="off">
                </div>
                
                <div class="mb-3">
                    <label for="password" class="form-label"><?=lang('Auth.password')?></label>
                    <input type="password" name="password" class="form-control <?php if (session('errors.password')) : ?>is-invalid<?php endif ?>" autocomplete="off" placeholder="<?=lang('Auth.password')?>" >
                </div>
                <div class="mb-3">
                    <label for="repeatPassword" class="form-label"><?=lang('Auth.repeatPassword')?></label>
                    <input type="password" name="pass_confirm" class="form-control <?php if (session('errors.pass_confirm')) : ?>is-invalid<?php endif ?>" autocomplete="off" placeholder="<?=lang('Auth.repeatPassword')?>">
                </div>
                
                <button type="submit" class="btn btn-primary mt-3 mb-4">Submit</button>
            </form>
        </div>
        <div class="col-sm-3"></div>
    </div>
</div>

<?= $this->endSection() ?>
