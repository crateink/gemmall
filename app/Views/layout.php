<!doctype html>
<html lang="<?= get_current_language() ?>" data-bs-theme="dark">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title><?= $this->renderSection('title') ?></title>

    <!-- Bootstrap core CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link href="<?= base_url('css/index.css') ?>" rel="stylesheet">
    <?= $this->renderSection('pageStyles') ?>
</head>

<body>
    <?= view('header') ?>
    <main>
        <?= $this->renderSection('main') ?>
    </main>
    <?= view('footer') ?>
    <script id="chatway" async="true" src="https://cdn.chatway.app/widget.js?id=5RAta2T4EYG5"></script>
    <?= $this->renderSection('pageScripts') ?>
</body>

</html>
