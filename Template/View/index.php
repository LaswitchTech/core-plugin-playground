<!doctype html>
<html lang="en" class="h-100 w-100">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>
            <?= $this->Locale->get($this->label()); ?><?php if(!is_null($this->Request->getParams('GET','name'))): ?>: <?= $this->Request->getParams('GET','name') ?><?php elseif(!is_null($this->Request->getParams('GET','id'))): ?>: <?= $this->Request->getParams('GET','id') ?><?php endif; ?>
        </title>

        <!-- ======= Load Global CSS ======= -->
        <?= $this->Builder->css(); ?>

        <!-- ======= JS Constants ======= -->
        <?php require_once __DIR__ . DIRECTORY_SEPARATOR . 'constant.php'; ?>

        <!-- ======= Load Global JS ======= -->
        <?= $this->Builder->js(); ?>
    </head>
    <body>
        <div class="row mt-4 px-3 mx-0 pb-3">
            <?php require_once $this->view(); ?>
        </div>
    </body>
</html>
