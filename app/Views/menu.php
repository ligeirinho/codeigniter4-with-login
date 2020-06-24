<div class="small text-center">
    <b>_DIR_</b> - <?= __DIR__ ?> | <b>SYSTEMPATH</b> - <?= SYSTEMPATH ?> | <b>ENVIRONMENT</b> - <?= ENVIRONMENT ?> | <b>APPPATH</b> - <?= APPPATH ?> | <b>BASE_URL</b> - <?= base_url() ?> | <b>DB</b> - <?= $_ENV["database.default.database"] ?> | <b>DEBUG</b> - <?= CI_DEBUG ?>
</div>
<nav class="underbar navbar navbar-expand-sm navbar-dark bg-dark pr-2">
    <a class="navbar-brand" href="#">CI4 login with Myth:Auth</small></a>
    <div id="navbarNav" class="collapse navbar-collapse mt-1">
        <ul class="navbar-nav text-white">
            <li class="nav-item">
                <a class="nav-link" href="http://google.com">
                    <i class="fas fa-table pl-2 pr-2"></i>Some link
                </a>
            </li>
        </ul>
    </div>
    <div class="text-white pr-2">
        <div class="dropdown">
            <? if ($auth) { ?>
                <button class="btn btn-sm btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Welcome <?= $user->username ?>
                </button>
            <? } else { ?>
                <a href="<?= base_url() ?>/login">
                <button class="btn btn-sm btn-secondary" type="button">
                    Sign In
                </button></a>
            <? } ?>

            <? if ($auth) { ?>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" href="<?= base_url() ?>/logout">Logout</a>
                </div>
            <? } ?>
        </div>
    </div>
</nav>
