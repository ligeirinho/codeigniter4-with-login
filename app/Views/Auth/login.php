<?= $this->extend($config->viewLayout) ?>

<?= $this->section("pageStyles"); ?>
<style>
    i { color: white; }
    .nav-link { color: white !important; }
    .nav-item { color: white; }
    .nav-link:hover { color: #ffaf36 !important; text-decoration: underline; }
</style>
<?= $this->endSection("pageStyles"); ?>

<?= $this->section('menu'); ?>
<?= $this->include("menu"); ?>
<?= $this->endSection('menu'); ?>

<?= $this->section('login'); ?>
<?= $this->include("login"); ?>
<?= $this->endSection('login'); ?>