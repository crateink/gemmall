<?= $this->extend(config('Auth')->views['layout']) ?>

<?= $this->section('title') ?><?= lang('App.login') ?> <?= $this->endSection() ?>

<?= $this->section('main') ?>
<div class="container d-flex justify-content-center">
    <div class="card col-12 col-md-5 shadow-sm p-4">
        <div class="card-body">
            <h5 class="card-title mb-5"><?= lang('App.login') ?></h5>

            <?php if (session('error') !== null) : ?>
                <div class="alert alert-danger" role="alert"><?= session('error') ?></div>
            <?php elseif (session('errors') !== null) : ?>
                <div class="alert alert-danger" role="alert">
                    <?php if (is_array(session('errors'))) : ?>
                        <?php foreach (session('errors') as $error) : ?>
                            <?= $error ?>
                            <br>
                        <?php endforeach ?>
                    <?php else : ?>
                        <?= session('errors') ?>
                    <?php endif ?>
                </div>
            <?php endif ?>

            <?php if (session('message') !== null) : ?>
                <div class="alert alert-success" role="alert"><?= session('message') ?></div>
            <?php endif ?>

            <form action="<?= url_to('login') ?>" method="post">
                <?= csrf_field() ?>

                <!-- Email -->
                <div class="form-floating mb-3">
                    <input type="email" class="form-control" id="floatingEmailInput" name="email" inputmode="email" autocomplete="email" placeholder="<?= lang('App.email') ?>" value="<?= old('email') ?>" required>
                    <label for="floatingEmailInput"><?= lang('App.email') ?></label>
                </div>

                <!-- Password -->
                <div class="form-floating mb-3">
                    <input type="password" class="form-control" id="floatingPasswordInput" name="password" inputmode="text" autocomplete="current-password" placeholder="<?= lang('App.password') ?>" required>
                    <label for="floatingPasswordInput"><?= lang('App.password') ?></label>
                </div>

                <!-- Remember me -->
                <?php if (setting('Auth.sessionConfig')['allowRemembering']): ?>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="checkbox" name="remember" class="form-check-input" <?php if (old('remember')): ?> checked<?php endif ?>>
                            <?= lang('App.remember_me') ?>
                        </label>
                    </div>
                <?php endif; ?>

                <div class="d-grid col-12 my-3">
                    <button type="submit" class="btn btn-primary btn-block"><?= lang('App.login') ?></button>
                </div>

                <?php if (setting('Auth.allowMagicLinkLogins')) : ?>
                    <p class="text-center"><?= lang('App.forgot_password') ?> <a href="<?= url_to_with_lang('magic-link') ?>"><?= lang('App.use_magic_link') ?></a></p>
                <?php endif ?>

                <?php if (setting('Auth.allowRegistration')) : ?>
                    <p class="text-center"><?= lang('App.need_account') ?> <a href="<?= url_to_with_lang('register') ?>"><?= lang('App.register') ?></a></p>
                <?php endif ?>

            </form>
        </div>
    </div>
</div>

<?= $this->endSection() ?>
