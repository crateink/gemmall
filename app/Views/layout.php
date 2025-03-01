<!doctype html>
<html lang="en" data-bs-theme="dark">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title><?= $this->renderSection('title') ?></title>

    <!-- Bootstrap core CSS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?= base_url('css/index.css') ?>" rel="stylesheet">
    <?= $this->renderSection('pageStyles') ?>
</head>

<body>
    <?= view('header') ?>
    <main class="container">
        <?= $this->renderSection('main') ?>
    </main>
    <?= $this->renderSection('pageScripts') ?>
</body>

</html>
