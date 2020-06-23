<div class="small text-center">
    <b>_DIR_</b> - <?= __DIR__ ?> | <b>SYSTEMPATH</b> - <?= SYSTEMPATH ?> | <b>ENVIRONMENT</b> - <?= ENVIRONMENT ?> | <b>APPPATH</b> - <?= APPPATH ?> | <b>BASE_URL</b> - <?= base_url() ?> | <b>DB</b> - <?= $_ENV["database.default.database"] ?> | <b>DEBUG</b> - <?= CI_DEBUG ?>
</div>
<nav class="underbar navbar navbar-expand-sm navbar-dark bg-dark pr-2">
    <a class="navbar-brand" href="#">DbDbDo<small><?= $auth ? ".online" : ".website"; ?></small></a>
    <div id="navbarNav" class="collapse navbar-collapse mt-1">
        <ul class="navbar-nav text-white">
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url() ?>/tables">
                    <i class="fas fa-table pl-2 pr-2"></i>Tables
                </a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="<?= base_url() ?>/modules">
                    <i class="fas fa-universal-access pl-2 pr-2"></i>Modules
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url() ?>/foreignkeys">
                    <i class="fas fa-key pl-2 pr-2"></i>Foreign Keys
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url() ?>/home/clearStuff">
                    <i class="fas fa-ban pl-2 pr-2"></i>Clear
                </a>
            </li>
        </ul>
    </div>
    <div class="text-white pr-2">
        <div class="dropdown">
            <button class="btn btn-sm btn-secondary <?= $auth ? "dropdown-toggle" : ""; ?>" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <?= $auth ? "Welcome ".$user->username : "Sign In"; ?>
            </button>
            <? if ($auth) { ?>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" href="<?= base_url() ?>/profile">Profile settings</a>
                    <a class="dropdown-item" href="<?= base_url() ?>/logout">Logout</a>
                </div>
            <? } ?>
        </div>
    </div>
    
    <div class="float-right pr-2">
        <a href="<?= base_url() ?>home"><button class="btn btn-primary btn-sm">Goto FrontEnd</button></a>
    </div>
</nav>
<?  if (!$auth) $this->include("login"); ?>