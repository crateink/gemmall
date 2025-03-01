<?= $this->extend(config('Auth')->views['layout']) ?>

<?= $this->section('title') ?><?= lang('App.use_magic_link') ?> <?= $this->endSection() ?>

<?= $this->section('main') ?>

<div class="container d-flex justify-content-center">
    <div class="card col-12 col-md-5 shadow-sm p-4">
        <div class="card-body">
            <h5 class="card-title mb-5"><?= lang('App.use_magic_link') ?></h5>
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

            <form action="<?= url_to('magic-link') ?>" method="post">
                <?= csrf_field() ?>

                <!-- Email -->
                <div class="form-floating mb-2">
                    <input type="email" class="form-control" id="floatingEmailInput" name="email" autocomplete="email" placeholder="<?= lang('App.email') ?>"
                        value="<?= old('email', auth()->user()->email ?? null) ?>" required>
                    <label for="floatingEmailInput"><?= lang('App.email') ?></label>
                </div>

                <div class="d-grid col-12 col-md-8 mx-auto m-3">
                    <button type="submit" class="btn btn-primary btn-block"><?= lang('App.send') ?></button>
                </div>

            </form>

            <p class="text-center"><a href="<?= url_to_with_lang('login') ?>"><?= lang('App.back_to_login') ?></a></p>
        </div>
    </div>
</div>

<?= $this->endSection() ?>
