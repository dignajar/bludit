<div class="subhead"><?php echo $Language->get('Page') ?></div>

<section class="page">

    <!-- Plugins Page Begin -->
    <?php Theme::plugins('pageBegin') ?>

    <!-- page header -->
    <header class="page-header">

        <!-- page title -->
        <h1 class="page-title">
            <a href="<?php echo $Page->permalink() ?>"><?php echo $Page->title() ?></a>
        </h1>

    </header>

    <!-- page content -->
    <div class="page-content">
        <?php echo $Page->content() ?>
    </div>

    <!-- Plugins Page Begin -->
    <?php Theme::plugins('pageEnd') ?>

</section>
